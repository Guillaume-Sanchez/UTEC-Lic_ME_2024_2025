#! /bin/bash

#    Affiche le contenu du répertoire courant.
#    Affiche le shell de l'utilisateur.
#    Affiche le nom de la machine.
#    Définir une variable appelée os contenant le nom du système d'exploitation.
#    Définir une variable appelée ver contenant le numéro de version du système d'exploitation.
#    Afficher le contenu des deux variable os et ver.

echo "Mon repertoir courant : "
ls -l
echo "Le shell de l'utilisateur est : $SHELL"
echo "Le nom de ma machine est : $HOSTNAME"
os=
ver=
echo $os
echo $ver
