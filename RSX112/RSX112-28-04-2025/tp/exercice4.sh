#!/bin/bash

tab_group=("technique" "formation" "commercial" "administratif")
tab_user=("philippe" "harouna" "emmanuelle" "nicolas" "laurent" "franck" "patrick" "ali" "eric")

function nettoyage {
    for user in "${tab_user[@]}"
    do
        if id "$user" &>/dev/null; then
            userdel -r "$user"
        fi
    done

    for group in "${tab_group[@]}"
    do
        if getent group "$group" &>/dev/null; then
            groupdel "$group"
            rm -Rf /$group
        fi
    done
}

function create_user {
    echo
    echo "Création des utilisateurs"
    echo
    for user in "${tab_user[@]}"
    do 
        useradd "$user" -m -N -p $user
        chage -M 90 -m 5 $user
        echo "echo 'Bienvenue, $(whoami), sur le système Ubuntu-RSX112 !'" >> "/home/$user/.bashrc"
        echo "Utilisateur $user créé avec succès avec le mot de passe par défaut."
    done
}

function create_group {
    echo
    echo "Création des groupes"
    echo

    for group in "${tab_group[@]}"
    do
        groupadd $group
        mkdir /$group
        chgrp $group /$group
        chmod 770 /$group
        echo "Groupe $group créé avec succès."
    done
}

function Attribution_user_group {
    echo
    echo "Attribution des utilisateurs à leur groupe principale et secondaire"
    echo
    for user in "${tab_user[@]}"
    do
        if [[ $user == "philippe" ]]; then
            usermod -g technique $user
            echo "L'utilisateur $user a été ajouté au groupe principal technique."
        elif [[ $user == "harouna" ]]; then
            usermod -g technique $user
            echo "L'utilisateur $user a été ajouté au groupe principal technique."
        elif [[ $user == "emmanuelle" ]]; then
            usermod -g technique $user
            usermod -aG formation $user
            echo "L'utilisateur $user a été ajouté au groupe principal technique et secondaire formation."
        elif [[ $user == "nicolas" ]]; then
            usermod -g formation $user
            usermod -aG technique $user
            echo "L'utilisateur $user a été ajouté au groupe principal formation et secondaire technique."
        elif [[ $user == "laurent" ]]; then
            usermod -g technique $user
            usermod -aG formation $user
            usermod -aG commercial $user
            echo "L'utilisateur $user a été ajouté au groupe principal technique et secondaire formation, commercial."
        elif [[ $user == "franck" ]]; then
            usermod -g formation $user
            usermod -aG technique $user
            usermod -aG administratif $user
            echo "L'utilisateur $user a été ajouté au groupe principal formation et secondaire technique, administratif."
        elif [[ $user == "patrick" ]]; then
            usermod -g administratif $user
            echo "L'utilisateur $user a été ajouté au groupe principal administratif."
        elif [[ $user == "ali" ]]; then
            usermod -g commercial $user
            echo "L'utilisateur $user a été ajouté au groupe principal commercial."
        elif [[ $user == "eric" ]]; then
            usermod -g commercial $user
            usermod -aG administratif $user
            echo "L'utilisateur $user a été ajouté au groupe principal commercial et secondaire administratif."
        else
            echo "Aucun groupe n'a été attribué à l'utilisateur $user."
        fi
    done
}

nettoyage
echo "===================================================="
echo "Exercice 4 - Gestion des utilisateurs et des groupes"
echo "===================================================="
create_user
create_group
Attribution_user_group
echo
echo "Mise en place du mot de passe de philippe"
echo
echo -e "My-P@$$w0rd\nMy-P@$$w0rd" | passwd philippe
echo
echo "Ajout de Ali dans le groupe de techniciens"
echo
usermod -aG technique ali
echo