# Prise de note du 05/11/2024

>> Utilisation du document 9-1-4-IPEx.pdf

## Exercice 1 :

### Question 1 

Sur Internet, on trouve des outils pour calculer des adresses, l'un de ceux-ci donne pour 
résultat si on lui fournit l'adresse d'interface 10.168.0.1 et le masque /20: 

La conversion en binire de l'adresse est fausse :

10.168.0.1 00001010.10100100.00000000.00000001

168 c'est : 10101000 
donc l'adresse entière c'est : 00001010.10101000.00000000.00000001

Pour moi le masque n'est pas bon :

20 dans l'exercice donc 11111111.11111111.11010000.00000000

Car il ne peut pas avoir un 0 qui sépart les 1. 
Donc correction c'est 11111111.11111111.11110000.00000000

4096 - 2 = 4094

### Question 2 : 

L'outil peut aussi proposer un calcul si on veut découper son réseau en sous réseaux. Si 
on indique un masque /21 voila les propositions qu'il fait pour 2 sous-réseaux : 

Mask est pas bon : 11111111.11111111.11111000.00000000

### Question 3

Tout est bon.

## Exercice 2

### Question 1 :

On prend l'adresse 10.1.8.66, on obtient avec l'adresse 10.1.8.0/26

... 

> Exercice 3, 4, 5 à faire sois même,

## Exercice 6 :

### Question 1 :

Savoir découper les paquets trop volumineux (plus de 1500 bit).

### Question 2 :

Fragmentation se fais au niveau du client,

16 bits son reservé pour l'entète, afin de savoir dans quelle ordre rassembler les paquet
3 bits son reserver pour le flag mais seuelemnt 2 utilisés
