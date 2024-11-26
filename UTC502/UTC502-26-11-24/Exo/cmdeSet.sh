#!/bin/bash 

# Utilisation de la commande set
 
# Première façon : set chaine_de_caracteres
set Nom Prenom
echo $1
echo $2
 
#set `commande`
set `ls -ld /etc`
echo "Resultat : $*"
echo "Paramètre 1 de resultat : $1"
echo "Paramètre 2 de resultat : $2"
echo "Paramètre 3 de resultat : $3"
echo "Paramètre 4 de resultat : $4"
echo "Paramètre 5 de resultat : $5"
echo "Paramètre 6 de resultat : $6"
echo "Paramètre 7 de resultat : $7"
echo "Paramètre 8 de resultat : $8"
 
Horaire=$8
 
# Rôle de la variable IFS
set $Horaire
echo "Paramètre 1 de $Horaire est : $1"
echo "Paramètre 2 de $Horaire est : $2"
 
# On modifie le séparateur de champs
IFS=:
echo "Le séparateur de paramètres est : $IFS"
set $Horaire
 
echo "Paramètre 1 : $1"
echo "Paramètre 2 : $2"
 
exit 0