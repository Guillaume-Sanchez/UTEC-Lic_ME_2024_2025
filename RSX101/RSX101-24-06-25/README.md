# RSX101 du 24 06 25

## QoS :

Avec un QoS mis en place dans un routeur, un paquet arrive au routeur, le QoS calcul sa priorité et le place dans la fil d'attente de sortie calculé selon son importance.
Mis en place par des contrat de service.

## Classifieur

Identification des flots, Lissage du trafique

DSCP : `Le DSCP est un champ d'en-tête dans le protocole IP, utilisé pour marquer les paquets de données. Ce marquage informe les routeurs et commutateurs du type de service que chaque paquet doit recevoir.`

Une fois le flux identifié, il essaye de le classifier selon l'ordenancement. 

ACL : `Liste de contrôle d'accès au réseau (ACL), est constituée de règles qui permettent l'accès à un environnement informatique ou le refusent`

Ordonnancement round robin : `Le Round-robin (ou tourniquet) est un algorithme d'ordonnancement courant dans les systèmes d'exploitation adapté aux systèmes travaillant en temps partagés.`

LE paquet doit être marqué pour être identifié.

QoE : `Evaluation du retour utilisateur par rapport au QoS`

GIGUE : `la gigue (en anglais jitter) est la variation de la latence au fil du temps. Plus précisément, la gigue est la différence de délai de transmission de bout en bout entre des paquets choisis dans un même flux de paquets, sans prendre en compte les paquets éventuellement perdus.`


## Leaky Bucket (Le seau percé)

L'algorithme du seau percé (leaky bucket en anglais) permet de contrôler le nombre de paquets passant à chaque seconde par un nœud d'un réseau informatique

Si le debit de flux augmente, le seau déborde et les paquets se perde.

Pour remedier à ça, on utilise le Token Bucket.
Un paquet reçois un jetton qui donne l'ordre de sortie après le passage dans le classfieur.


lissage vs Vérification

- Dans le cas du lissage, on retarde le flux excessif, en supposant qu'il n'excède pas le débit annoncé (attention aux flux sensibles à la latence ou a la gigue comme la voix). 
- Dans le cas de la vérification, on élimine le trafic en excès ou on le marque pour élimination lors de congestion (passage en mode best effort).

best effort : `C'est le trafic que les administrateurs réseau considèrent comme moins important que le trafic en temps réel.`

MPLS : `La commutation multiprotocole d'étiquettes (MPLS) est un protocole conçu pour acheminer des paquets de données vers leurs destinations rapidement et efficacement` 

RSVP : `Resource ReSerVation Protocol (ou RSVP) est un protocole de la couche transport du modèle OSI, permettant de réserver des ressources dans un réseau informatique. `

## IntServ et DiffServ 

## IntServ (Integrated Services) – "Réservation individuelle"

- Principe : chaque flux de données (vidéo, appel, etc.) demande une réservation de ressources (bande passante, délais, etc.) à tous les routeurs du réseau avant de commencer.

- Fonctionnement : utilise le protocole RSVP (Resource Reservation Protocol) pour réserver.

- Avantages : Garantie de qualité de service (QoS) très fine et précise pour chaque flux.

- Inconvénients :
    - Ne passe pas à l’échelle (trop lourd à gérer pour Internet entier).
    - Beaucoup de mémoire et de traitement sur les routeurs.

> C’est comme réserver une place assise dans un train pour chaque passager individuellement.

### DiffServ (Differentiated Services) – "Classes de service"

- Principe : les paquets sont marqués (avec des bits dans l’en-tête IP) selon leur classe de priorité, et chaque routeur traite les classes selon des règles prédéfinies.

- Pas de réservation individuelle.

- Avantages :
    - Scalable : fonctionne bien sur de grands réseaux comme Internet.
    - Plus simple pour les routeurs.

- Inconvénients :
    - Pas de garantie absolue pour chaque flux, seulement des priorités.
    - Moins précis qu’IntServ.

> C’est comme avoir des files prioritaires à l’aéroport (VIP, économique, etc.) mais sans réservation de siège.

### Résumé :

| Caractéristique     | IntServ                  | DiffServ                        |
| ------------------- | ------------------------ | ------------------------------- |
| Type de QoS         | Finesse par flux         | Classes de service              |
| Réservation         | Oui (RSVP)               | Non                             |
| Scalabilité         | Faible                   | Bonne                           |
| Complexité          | Haute (par flux)         | Moyenne (par classe)            |
| Utilisation typique | Réseaux privés critiques | Réseaux d’entreprise / Internet |

### Exemple concret pour bien comprendre la différence entre IntServ et DiffServ :

Contexte :

Imaginons une entreprise qui utilise :

- des appels vidéo entre employés (sensibles au délai),
- de la navigation web (moins critique),
- et des téléchargements de fichiers lourds (peu sensibles au temps).

#### Avec IntServ (Integrated Services) :

Quand un employé commence un appel vidéo :

- Son ordinateur envoie une demande de réservation de ressources via le protocole RSVP.
- Tous les routeurs sur le chemin réservent de la bande passante et des délais spécifiques pour ce flux d’appel.
- Si la réservation est acceptée, l’appel commence avec des garanties fortes : pas de coupure, bonne qualité.

Avantage : chaque appel est traité comme un VIP avec sa propre "autoroute".

Inconvénient : s’il y a 500 appels en même temps, chaque routeur doit gérer 500 réservations → lourd et complexe.

#### Avec DiffServ (Differentiated Services) :

Avant que les données partent :

- L’administrateur réseau a défini que les appels vidéo seront marqués avec une priorité haute, les fichiers lourds avec une priorité basse, etc.
- Quand un appel démarre, les paquets sont marqués (ex : DSCP = Expedited Forwarding).
- Les routeurs ne réservent rien, mais ils priorisent automatiquement les paquets marqués "vidéo" par rapport aux autres.

Avantage : très simple à mettre en œuvre même si des milliers de flux circulent.

Inconvénient : si le réseau est saturé, l’appel vidéo peut subir des perturbations, car rien n’a été réservé.

#### Conclusion :

- IntServ = comme réserver un taxi juste pour toi → service personnalisé, mais coûteux à grande échelle.
- DiffServ = comme prendre un bus avec un ticket VIP → prioritaire, mais tu partages avec d’autres.

