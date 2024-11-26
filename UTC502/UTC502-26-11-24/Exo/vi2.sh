#! /bin/bash

#  4. Créez un script nommé vi2 qui prend en argument un nom de fichier. Le script réalise une sauvegarde du fichier dans le répertoire /tmp avant de lancer l'éditeur de texte vi pour afficher et/ou modifier son contenu. Le fichier de sauvegarde aura comme nom nom_parametre_1.numero_processus_script_en_cours. 

fichierAModifier=$1
fichierSauvegarde=$1.$$
cp $fichierAModifier /tmp/$fichierSauvegarde
vi $fichierAModifier
