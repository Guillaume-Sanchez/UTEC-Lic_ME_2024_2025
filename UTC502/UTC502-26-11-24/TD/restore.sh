#!/bin/bash
#Script de restoration

#Utilisateur du serveur destinataire de la sauvegarde :
USER_DEST="user"

#Serveur destinataire de la sauvegarde :
ADRESS_DEST="10.9.134.117" # Adresse serveur distant
#ADRESS_DEST="192.168.1.181" # Adresse local de test

#Dossier du serveur destinataire de la sauvegarde
BACKUP_DIR_DEST="/home/user/rep_dest/"

#Dossier local de la receprtion de la sauvegarder, à créer si il n'existe pas, a modifier selon l'utilisateur
BACKUP_DIR="/home/nk/sauvegarde/"

SEPARATOR="--------------------"

#Début du script de restoration de /home
echo $SEPARATOR
echo "Debut du script de restauration de /home"
echo $SEPARATOR

#Tableau de la liste des fichiers de sauvegardes présentent sur le serveur dans /home/user/rep_dest/ 
filesList=($(ssh $USER_DEST@$ADRESS_DEST ls $BACKUP_DIR_DEST))

echo "Voici la liste des sauvegardes disponible sur $ADRESS_DEST dans le repertoir $BACKUP_DIR_DEST :"
echo

# Boucle For afin d'afficher les fichiers avec leur position dans le tableau devant :
for (( i=0; i<${#filesList[@]}; i++ ))
do
    echo "$i-${filesList[$i]}"  # Premier fichier
done

echo
echo $SEPARATOR

# Un read pour que l'utilisateur puissent entrer le numero de la sauvegarde qu'il veut
read -r -p "Choisir l'archive à restaurer : " numSauv
echo $SEPARATOR

#Place le nom de la sauvegarde voulu dans une variable OKZOU
NAME_SAVE=${filesList[$numSauv]}
echo "Vous avez choisi : $NAME_SAVE"
echo $SEPARATOR

# Je rentre dans un boucle "infini" mais controlé par une action utilisateur.
while true; do

    # Un read pour que l'utilisateur puisse confirmer si oui ou non il veut restaurer 
    read -r -p "Lancer la restauration ? (o/n) " response
    case "$response" in
        [oO]|[yY]|oui|yes) 
            # Récupération avec le protoclole ssh (commande scp) de la sauvegarde présente sur le serveur, vers notre pc
            echo "Reception de $NAME_SAVE dans $BACKUP_DIR"
            scp $USER_DEST@$ADRESS_DEST:$BACKUP_DIR_DEST$NAME_SAVE $BACKUP_DIR
            echo $SEPARATOR

            # Extraction de l'archive à la racine (donc /) pour recepecter la structure des répertoires d'un chemin
            echo "Extraction de la sauvegarde"
            tar xvjf $BACKUP_DIR$NAME_SAVE -C /
            echo $SEPARATOR

            # Petit Nettoayage de la sauvegarde présent sur notre pc
            echo "Nettoayage de $NAME_SAVE"
            rm $BACKUP_DIR$NAME_SAVE 

            #Fin du script de Sauvegarde de /home
            echo $SEPARATOR
            echo "Fin du script de Restauration de /home"
            echo $SEPARATOR
            exit 0
            ;;
        [nN]|non|no)
            #Fin du script de Sauvegarde de /home
            echo $SEPARATOR
            echo "Fin du script de Restauration de /home"
            echo $SEPARATOR
            exit 0
            ;;
        *) 
            echo "Erreur, merci d'entrer o ou n"
            ;;
    esac
done


