# UTC505 25/09/2024

## Le modèle ISO/OSI

Principe du modèle ISO -> 7 couches

Modèle TCP/IP -> 4 couches

### Modèle : Unités de données de Protocole

Types d'ulité de donnée de protocole

* pour l'ouverture d'une connexion
* pour le transfert de données
* pour la fermeture de connexion
* pour les informations de service échangées entre entitées N

### Modèle en couches

>Notion Utile : Trame (accès réseau), Paquet (internet), Segment (transport)

[Entête|DATA] -> Segment

[IP|TCP|DATA] -> Patagramme

[Préanbule|AdresseDestinatère|AdresseSource|Donnée] -> Trame

4 éléments par paquet dans une trame réseau (exemple sur Wireshark)

### Rôle des 7 couches réseau

* Routage des paquets
* Homogénisation de l'adressage
* Adaptation à la Liaison de données utilisée
* Contrôle d'erreur
* Guérison de la congestion
* Mutiplexage pour optimiser les ressources de communication utilisées
 
>Voir le tablaux d'auxy 

Hexa -> binaire -> décimal
TLC -> sécuriser l'echange entre application
Tail d'une tram -> entre 46 et 8500

Etude de cas WireShark