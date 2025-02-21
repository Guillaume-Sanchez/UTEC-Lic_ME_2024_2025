# NSY104-17-12-24

## Exercice 1(plan d’adressage)

Le TD concerne la mise ne place d’un plan d’adressage, il est proposé sous la forme de quatre exercices

### 1.2.1 Exo 1 : Détermination de l’ID réseau, le masque réseau, …etc. à partir d’une adresse IP

#### 179.13.33.14/29

Adresse de réseau : 179.13.33.8

Première adresse : 179.13.33.9

Dernière adresse : 179.13.33.14

Adresse de broadcast : 179.13.33.15

#### 16.23.15.33/18

00010000.00010111.00001111.000100001

Adresse de réseau : 16.23.0.0 -> 14 dernier bits tu les passe à 0 : 00010000.00010111.**00000000.00000000**

Première adresse : 16.23.0.1 -> Première on ajoute un 

Dernière adresse : 16.23.63.254 -> -1 par rapport à l'adresse broadcast

Adresse de broadcast : 16.23.63.255 -> 14 dernier et tu les passes à 1 : 00010000.00010111.00**111111.11111111**

#### 178.223.0.15/12

Adresse de réseau : 178.208.0.0 -> 20 dernier bits tu les passe à 0 : 10110010.1101**0000.00000000.00000000**

Première adresse : 178.208.0.1 -> Première on ajoute un 

Dernière adresse : 178.223.255.254 -> -1 par rapport à l'adresse broadcast

Adresse de broadcast : 178.223.255.255 -> 20 dernier bits tu les passe à 1 : 10110010.1101**1111.11111111.11111111**

## Routage

Routage static, définir une route manuelement
Routage Dynamique, 

Lien de rondodence -> ajout d'un routeur de secours

