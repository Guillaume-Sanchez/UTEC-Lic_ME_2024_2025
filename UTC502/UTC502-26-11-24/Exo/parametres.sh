#! /bin/bash

# parametres : Variables de paramètre ou de position
 
echo "Nom du script en cours d'exécution : $0"
echo "Nombre de paramètres transmis au script : $#"
echo "Numéro du processus du script en cours d'exécution $0 est : $$"
 
echo "Paramètre 1 du script $0 : $1"
echo "Paramètre 2 du script $0 : $2"
echo "Paramètre 3 du script $0 : $3"
echo "Liste de tous les parametres du script $0 : $*"
exit 0