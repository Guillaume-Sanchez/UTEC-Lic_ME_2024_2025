# UTC504-16-10-2024

## Les associations

C'est une liaison qui va nous permetrer de créer un sens entre les entiters.

Elle peuvent t'être porteuse d'informations
* les cadinalité
* les attributs
* les contraintes (CIF/CIM)

### Les cardinalités

Exprime la façon dont sont associées les entités.
Elle s'emprime toujours par un minimum et un maximum.

**Les combinaisons possible :**

* 0,1 -> minimum 0, maximum 1
* 0,n -> minimum 0, maximum oo
* 1,1 -> minimum 1, maximum 1
* 1,n -> minimum 1, maximum oo
* n,n -> minimum x, maximum x
* n,m -> minimum x, maximum y

Une association peut-avoir des attribut. Le principe de base d'un atribut dans une association c'est d'avoir une information qui concerne les deux tables.

### Atribut des associations

Toute relations binaires (association entre deux table), avec cardinalité 1,1 ne peuvent être porteuses d'attribut dans cette partis. 

### Association plurielle

2 Associations differentes qui relie 2 entiters.

### Association reflexive

Association qui va nous ramener vers la table.

### Associations n-aires / ternaire

Association ternaire (3 entités), il faut les éviter le plus possible si elles sont superieur à 3 entiter.
Boucle fermer entre 3 entiter et 3 associations.
On peut a la place utiliser 3 entiter et seulement 1 association.

### Entité faible

Entité qui ne peut avoir un sens seulement que si elle est lié a une autre entité.