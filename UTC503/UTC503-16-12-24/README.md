# UTC 503 du 16/12/2024

## Les instructions :

### Les boucles

Répéter un traintement plusieurs fois

Une boule n'est utile que si on peut la controler -> éviter les boucle infini

plusieurs façon de les réaliser :

***for*** -> Pour i = 0; tant que i est inférieur à 5; ajouter 1 à i :

```
for (int i=0;i>5;i=i+1){
    Système.out.println("****");
}
```

Cette exemple affichera 5 fois "****"

***while*** -> Tant que, 

On boucle "tant que" la condition est celle demandé :

```
// instancie "reponse" par le caractère "O"

char reponse = 'O';

// Tant que reponse est égale et de même type que le caractère "O" :

while (reponse == 'O') {

    // affiche la phrase :

    System.out.println("veuiller saisir un prenom : ");

    // scanner pour récupérer la valeur par l'utilisateur :

    String prenom = sc.nextLine();

    // Affiche "Bonjour" suivi de la saisi de l'utilisateur :

    System.out.println("Bonjour, " + prenom);

    // Affiche la pharse pour asvoir si on recommance :

    System.out.println("voulez-vous réessayer ? (O/N) ");

    // On récupère le premier caractère de la valeur saisi et on instanci reponse avec. 

    reponse = sc.nextLine().charAt(0);
}

// Si reponse = O, alors on rejout, sinon, on affiche :

System.out.println("Au revoir");
```

***Do while*** -> Faire, Tant que

Les instructions vont au moins s'executer une fois

(Même code qu'en dessous, mais )

```
char reponse = 'O';

do{
    System.out.println("veuiller saisir un prenom : ");
    String prenom = sc.nextLine();
    System.out.println("Bonjour, " + prenom);
    System.out.println("voulez-vous réessayer ? (O/N) ");
    reponse = sc.nextLine().charAt(0);
} while (reponse == 'O');
System.out.println("A+");
```

### Scanner :

Pour qu'un utilisateur puissent saisire des caractères, on utilise la class Scanner, avec sa méthode nextLine exemple :

```
Scanner sc = new Scanner(System.in);
System.out.println("veuiller saisir un mot : ");
String str = sc.nextLine();
System.out.println("Vous avez saisi : " + str);
```

"Scanner sc" c'est la class, new Scanner(System.in) c'est l'utilisation du constructeur

### /!\ Décomposition d'une fonction Système :
(Demmandé en examen)

```
System.out.println("...")
 |     |    |------> Methode
 |     |-----------> Objet
 |-----------------> Class
```

