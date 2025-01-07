# 503 06/01/2025

## Tableau

>Unidimentionnel -> C'est un tableau de type vecteur

>MultiDimentionnel -> C'est un tableau de type matrice

### Tableau Unidimentionnel

Un tableau est une variable un peu particlière, nous pouvons lui affecter plusieurs valeurs ordonnées séquentiellement.

Tab1 = {5,1,8,3,4,7,6,7,8,0}

Nous appelons ces valeurs au moyen d'un indice.

- Tab1 = {5,1,8,3,4,7,6,7,8,0}
- indice = {0,1,2,3,4,5,6,7,8,9}

Un indice permet de se positionnener dans un tableau, d'identifier une valeur, exemple ci dessus, [0] = 5

Déclaration d'un tableau en java :

<"Type du Tableau"> <"nom du tableau"> [] = {"contenu du tableau"}

Dans la pratique :

```
int tableauEntier[] = {0,1,2,3,4,5,6,7,8,9};

double tableauDouble
```
Déclaration d'un tableau à une dimention :

```
int tableauEntier[] = new int[6];
ou
int[] tableauEntier2[] = new int[6];
```

### Tableau multidimentionnel :

Un tableau multidimentionnel n'est rien d'autre qu'un tableau contenant au minimum deux tableaux.

Exemple soit un tableau multidimentionnel (2 lignes) appelé premierNombre

- La première contiendra les nombres paires
- La seconde contiendra les nombres impraires

PremierNombre = {{0,2,4,6,8},{1,3,5,7,9}};

>Conceille pratique utiliser la methode clone() pour éviter d'utiliser votre tableau originel.

## Fonction et Procédure

- Méthode : peut être une fonction ou une prcoédure 
- Fonction : retourne une valeur
- Procédure : ne retourne pas de valeur

Une fonction permet de créer un traitement qui pourra être utiliser à chaque fois qu'on en a besoin.


`public static double`

Détails de cela :

- Tous d'abort public, C'est ce qui définit la portée de la méthodes (programmation objets)
- Ensuite il y a static
- Juste après nous avons double, Il s'agit du type de retour de la méthode. Pour faire simple, ici, notre méthode va renvoyer un double.
- Vient ensuite le nom de la méthode, C'est avec ce nom que nous l'appellerons
- Puis arrivent les arguments de la méthode. Ce sont en fait les paramètres ont la méthode à besoin.
etc...
