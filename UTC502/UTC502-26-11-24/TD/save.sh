#!/bin/bash
#Script de sauvegarde
 
#Dossier à sauvegarder
DATA_TO_BACKUP="/home/nk/test"

#Dossier local de la création de la sauvegarder
BACKUP_DIR="/tmp/sauvegarde/"

#Utilisateur du serveur destinataire de la sauvegarde :
USER_DEST="user"

#Serveur destinataire de la sauvegarde :
#ADRESS_DEST="10.9.134.117"
ADRESS_DEST="192.168.1.181"

#Dossier du serveur destinataire de la sauvegarde
BACKUP_DIR_DEST="/home/user/rep_dest/"

SEPARATOR="--------------------"

#Définition de la date du jour afin de pouvoir récupérer (a adapter)
#l'année ($3), le mois ($1) et le jour ($3) pour nommer le fichier de sauvegarde
IFS=/
set $(date +%D)
annee=$3
mois=$1
jour=$2
 
unset IFS

#Début du script de Sauvegarde de /home
echo $SEPARATOR
echo "Debut du script de Sauvegarde de /home"
 
#Sauvegarde des données
echo $SEPARATOR
echo "Sauvegarde de $DATA_TO_BACKUP dans $BACKUP_DIR/$BACKUP_FILE"
tar cvjf $BACKUP_DIR/svg._$annee$mois$jour.tar.bz2 --newer-mtime '1 day ago' "$DATA_TO_BACKUP"

#Envoie vers le serveur de sauvegarde 
echo $SEPARATOR
echo "Envoie de svg._$annee$mois$jour.tar.bz2 vers le serveur $USER_DEST@$ADRESS_DEST:$BACKUP_DIR_DEST"
scp $BACKUP_DIR/svg._$annee$mois$jour.tar.bz2 $USER_DEST@$ADRESS_DEST:$BACKUP_DIR_DEST

#Verification de la bonne reception
echo $SEPARATOR
echo "ls -l de $USER_DEST@$ADRESS_DEST:$BACKUP_DIR_DEST pour confirmer bonne reception :"
ssh $USER_DEST@$ADRESS_DEST ls -l $BACKUP_DIR_DEST

#Nettoyage de la sauvegarde local
echo $SEPARATOR
echo "Nettoyage de la sauvegarde local présente dans $BACKUP_DIR"
rm -f $BACKUP_DIR/svg._$annee$mois$jour.tar.bz2

#Fin du script de Sauvegarde de /home
echo $SEPARATOR
echo "Fin du script de Sauvegarde de /home"
echo $SEPARATOR