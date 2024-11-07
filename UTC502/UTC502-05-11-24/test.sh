#!/bin/bash

Message="Bonjour tout le monde"
echo $Message

# unset Message
# echo $Message

if [ $# == 2 ]
then
    echo "Seulement 2 arguments d'entrés"
    exit 1
elif [ $# != 3 ]
then 
    echo "Il n'y a pas 3 arguments"
    exit 1
else
    echo "Les arguments sont '$1', '$2' et '$3'"
fi

Compteur=0

for i in $1 $2 $3 

do
    ((Compteur++))

    case "$i" in
        "toto") echo "Vous avez entré l'argument toto" 
    ;;
        "tata") echo "Vous avez entré l'argument tata"
    ;;
        "titi") echo "Vous avez entré l'argument titi"
    ;;
        *) echo "Vous n'avez pas entré un des argument toto, tata ou titi mais l'argument $i pour l'argument $Compteur"
    esac
done

