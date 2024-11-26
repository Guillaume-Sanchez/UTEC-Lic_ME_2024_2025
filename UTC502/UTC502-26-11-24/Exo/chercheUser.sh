#! /bin/bash

#  3. Créez un script nommé chercheUser qui cherche un utilisateur dont le nom de connexion est donné en paramètre du script. 

cat /etc/passwd | grep $1