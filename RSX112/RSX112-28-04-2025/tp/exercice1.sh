#!/bin/bash

# Liste des utilisateurs à créer
tab_user=('yannick' 'eulalie' 'jean' 'justine' 'pierre' 'sandrine' 'cecile' 'michel')

# Boucle pour créer chaque utilisateur
for user in "${tab_user[@]}"
do 
    # Suppression de l'utilisateur s'il existe déjà
    if id "$user" &>/dev/null; then
        userdel -r "$user"
    fi
    # Création de l'utilisateur
    useradd "$user" -p $user
    echo "Utilisateur $user créé avec succès avec le mot de passe par défaut."
done