# TD Sauvegarde :

Mettre en place un système de sauvegarde simple
Sauvegarde locale
Nous allons maintenant voir comment mettre en place un système de sauvegarde simple locale. Pour cela, nous allons faire les choix suivants :
utilisation de tar avec la compression bzip2 des données modifiées depuis moins de 24h ;·
stockage sur une partition dédiée (autre que celle du système), ici hda10; ⚫ sauvegarde des dossiers/home et /etc.
Pour cela, créez un fichier sauvegarde.sh ayant pour contenu :

```
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
```

Enregistrez le script dans le répertoire /usr/local/bin et rendez-le exécutable: chmod +x /usr/local/bin/sauvegarde.sh
Pour l'utiliser, il suffira alors de saisir dans une console: sauvegarde.sh
Sauvegarde à distance
Nous allons maintenant reprendre l'exemple précédent avec les mêmes hypothè- ses, mais en outre nous allons envoyer le fichier de sauvegarde sur une machine distante. Nous allons utiliser deux systèmes différents : un premier avec l'utilisa- tion de ssh qui permet d'assurer un transfert sécurisé des données et un deuxième avec l'utilisation de ncftp pour envoyer l'archive sur un espace d'hébergement.
Utiliser ssh. Si vous souhaitez et pouvez utiliser ssh avec la machine distante, le script devient donc :

```
#!/bin/sh
#Script de sauvegarde
#Dossiers à sauvegarder DATA_TO_BACKUP="/home /etc"
#Partition recevant la sauvegarde BACKUP_DEV=/dev/hda10
BACKUP_DIR=/sauvegarde
#Définition des paramètres pour l'envoi à distance
REMOTE_USER=backup
REMOTE_COMPUTER=ip_ordinateur
REMOTE_DIR=/home/backup/
#Montage de la partition de sauvegarde
mount -t auto $BACKUP_DEV $BACKUP_DIR
#Définition de la date du jour afin de pouvoir récupérer
#1'année ($6), le mois ($2) et le jour ($3) pour nommer le fichier de sauvegarde
set $(date)
#Sauvegarde des données
echo "Sauvegarde de $DATA_TO_BACKUP dans $BACKUP_DIR/svg $6$2$3.tar.bz2" tar cvjf $BACKUP_DIR/svg $6$2$3.tar.bz2 --newer-mtime '1 day ago $DATA_TO_
#Envoi de la sauvegarde sur la machine distante
BACKUP
scp $BACKUP_DIR/svg $6$2$3.tar.bz2 $REMOTE_USER@$REMOTE_COMPUTER: $REMOTE_DIR Il ne reste alors plus qu'à saisir le mot de passe demandé, mais si l'on veut utiliser ceci automatiquement, il faudra utiliser les phrases le système de clefs publique et privée de ssh. Ainsi il ne sera plus nécessaire de saisir de mot de passe.
```