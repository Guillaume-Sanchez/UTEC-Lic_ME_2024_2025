#!/bin/bash

# 1. Définissez une variable nommée Nom dont le contenu est ENI.
Nom="ENI"
# 2. Définissez une variable nommée Collection avec le contenu : Ressources Informatiques.
Collection="Ressources Informatiques"
# 3. Affichez la chaîne de caractères suivante : Les Editions ENI. Collection Ressources Informatiques. Utilisez vos deux variables Nom et Collection définies précédement.
echo "Les Editions $Nom. Collection $Collection."
# 4. Définissez une variable Var1 avec le contenu : bon.
Var1="bon"
# 5. Nous voulons afficher le mot : bonjour en se servent du contenu de la variable Var1. Laquelle des commandes suivantes devons-nous exécuter ?
    # a. echo $Var1jour
    # b. echo $(Var1)jour
    # c. echo ${Var1}jour
echo ${Var1}jour #réponse c
# A quoi servent les accolades ? A quoi servent les parenthèses ?

# 6. Exécutez les commandes suivantes (Aidez-vous de ce document) :

# a. echo ${var2:?“var2 n'est pas encore définie”}
# echo ${var2:?"var2 n'est pas encore définie"}
# b. var2=Bonjour
# c. echo ${var2:?“var2 n'est pas encore définie”}
# d. echo ${lejour:=`date +%d`}
# e. lejour=24
# f. echo “Jour : ${lejour:+01}”

#     Quel est l'intérêt de la première commande ?
#     Quel est l'intérêt de la quatrième commande ?
#     Quelle est la différencce entre la quatrième et la dernière commande ?