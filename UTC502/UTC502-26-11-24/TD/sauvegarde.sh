#!/bin/sh

#Script de sauvegarde
#Dossiers à sauvegarder

DATA_TO_BACKUP="/home/etc"

#Partition recevant la sauvegarde

BACKUP_DEV=/dev/hda10
BACKUP_DIR=/sauvegarde

#Montage de la partition de sauvegarde

mount -t auto $BACKUP_DEV $BACKUP_DIR

#Définition de la date du jour afin de pouvoir récupérer #1'année ($6), le mois ($2) et le jour ($3) pour nommer le fichier de sauvegarde

set $(date)
ave #Sauvegarde des données
echo "Sauvegarde de $DATA_TO_BACKUP dans $BACKUP_DIR/svg_$6$2$3.tar.bz2" tar cvjf $BACKUP_DIR/svg $6$2$3.tar.bz2 --newer-mtime '1 day ago' $DATA_TO_
BACKUP