#!/bin/bash

echo "Exercice 2"
echo "Créer un groupe visiteurs avec le GID 1404"
groupadd visiteurs -g 1404
echo "Créer un utilisateur invite avec le UID 140401 et le GID 1404"
useradd -u 140401 -g visiteurs -m -s /bin/bash invite
echo "affichez les lignes correspondantes des fichiers utilisateurs et groupes"
cat /etc/passwd | grep invite     
cat /etc/group | grep visiteurs
echo "modification des droits de changement de mdp de l'utilisateur invite"
chage -M 90 -W 14 -I 7 invite
echo "affichez la lignes correspondant à l'utilisateur invite dans le fichier shadow"
cat /etc/shadow | grep invite
echo "modification du mot de passe de l'utilisateur invite"
echo -e "welc0me\nwelc0me" | passwd "invite"

echo "créer un utilisateur intrus avec le UID 140402 et le GID 1404"
useradd -u 140402 -g visiteurs -m -s /bin/bash intrus
echo "modification des droits de changement de mdp de l'utilisateur intrus"
chage -M 90 -W 14 -I 7 invite
echo "modification du mot de passe de l'utilisateur intrus"
echo -e "1234\n1234" | passwd intrus
echo "afficher les 2 dernière lignes du fichier shadow"
tail -n 2 /etc/shadow

