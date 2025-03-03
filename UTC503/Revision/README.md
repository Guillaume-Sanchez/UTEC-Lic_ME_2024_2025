# Révision 503

## Orienté objet

### Notion d'héritage

L'héritage permet de spécialiser une classe qui possédera non seulement les propriétés et méthodes de sa mère mais également d'autres méthodes spécifiques ou redéfinies.
Le terme est faire dériver la classe en une classe fille. Dans l'objet fille, on trouve:
- De nouvelles méthodes ou propriétés
- Des méthodes ou propriétés qui surchargent, c'est-à -dire redéfinissent celles de la classe mère.
- Les propriétés et méthodes de la classe mère qui n'ont pas été surchargées

### Notion de polymorphisme

Les objets sont dits polymorphes car ils possèdent plusieurs types: le type de leurs classes et les types des classes ascendantes.

### Notion de transtypage

Il est possible de forcer le programme à 'voir' un objet comme un type différent de son type initial, c'est le transtypage ou cast. Le transtypage ne modifie par l'objet mais indique seulement la façon de le voir. Il y a transtypage implicite de la fille vers la mère: une Voiture est implicitement
de type Véhicule.

### Notion de Polymorphisme paramétrique

Le terme polymorphisme est souvent associé par abus de langage au concept de polymorphisme paramétrique. Un objet peut comporter plusieurs méthodes de même nom et possédant des arguments différents. Ce sont des méthodes polymorphiques.

### Un programme 

Un programme informatique est une séquence d'instructions qui spécifie étape par étape les opérations à effectuer pour obtenir un résultat. 
Il est exprimé sous une forme qui permet de l'utiliser avec une machine comme un ordinateur pour exécuter les instructions.

#### Étapes clés pour l'élaboration d'un programme

* Analyse -> déterminer le problème à résoudre 
* Conception -> réalisation d’un l’algorithme pour trouver une solution 
* Développement -> traduction de l’algorithme en langage de programmation
* Mise au point -> Compilation (Traduction du code source du programme 
vers le langage natif de la machine) et Tests, Correction d’erreurs et Maintenance

### Les langages de programmation

#### Langages de bas niveau

Ce sont les différents ensembles d’instructions propres à chaque machine (SPARC/Sun, Intel/PC, etc). Appelés également langages cibles ou natifs. Ils sont codés en binaire et directement exécutables par chaque machine.

#### Langages de haut niveau

Ils fournissent des nombreuses constructions sophistiquées qui facilitent l’écriture des programmes (Ex : C, Ada, Pascal, Cobol, Java, OCaml, Python). Ils sont compréhensibles par les humains, mais pas directement exécutables par les machines. Un programme écrit en langage de haut niveau devra être traduit en langage machine avant son exécution.

### Programmation Procédurale et Programmation Orientée-Objet 

#### Programmation procédurale
- Centrée sur les procédures (opérations): décomposition des fonctionnalités d'un programme en procédures qui vont s'exécuter séquentiellement.
- Couplage procédures/données.
- Ressemble peu à notre schéma de penser.
- Tend à générer du code "Spaghetti"
    - La maintenance et l'ajout de nouvelles fonctionnalités demandent de modifier ou d'insérer des séquences dans ce qui existe déjà
    - Peu devenir complexe très rapidement
    - Modularité et abstraction absente (ou presque)
    - Réutilisation ardue => "Couper-coller" = DANGER!
    - Travail d'équipe difficile (peu modulaire), donc la qualité du code en souffre

#### La programmation Orientée objet
- Centrée sur les données
- Tout tourne autour des "objets" qui sont des petits ensembles de données représentants leurs propriétés

### Le concept Orienté objet

- Le concept orienté objet veut une modélisation du monde réel via des objets: l'élément de décomposition unique est « l'OBJET ». 
- L'objet se veut alors une représentation (abstraite) d'une "chose" (concrète) du monde réel. 
- Un objet regroupe à la fois les données qui le caractérise et les actions qu'on peut effectuer sur lui. 
- Un objet regroupe une partie statique (un ensemble de données) et une partie dynamique (un ensemble de procédures manipulant ces données)

#### Notion de classe

Une classe encapsule, c'est-à-dire regroupe des propriétés et des comportements. Par exemple, la classe Humain définit des propriétés ( deux bras, deux jambes...) et des comportements ( marcher, parler, voir...)

En OO, les comportements sont appelés ***méthodes*** et les
propriétés ***variables d'instance***.

#### Notion d'objet

Un objet est une instance de classe, c'est-à-dire un exemplaire utilisable crée à partir de cette classe et en valorisant certaines propriétés

Le concept de classe est abstrait  alors que le concept d'objet est 
fondamentalement concret: il est concevable de croiser des personnes 
physiques, c'est-à-dire des instances d'Humain.

## Java

### Les variables :

***differents types de variables utile***

```
int nomDeLaVariable = 3
double nomDeLaVariable = 3.5
char nomDeLaVariable = 't'
String nomDeLaVariable = "Hello World"
```

### Les conditions :

>Les exemple suivant suivant sont réaliser avec la condition suivante : si sexe = F alors "Il s'agit d'une femme", Sinon Si sexe = H alors "Il s'agit d'un homme" Sinon 

#### if / else / else if

```
if(sexe == 'F'){ // Si
    System.out.println("Il s'agit d'une femme");
}
else if(sexe == 'H'){ // Sinon si
    System.out.println("Il s'agit d'un homme");
}
else{ //Sinon
    System.out.println("Sexe indéterminé");
}
```

#### switch CASE

```
switch (sexe) {
    case 'F':
        System.out.println("Il s'agit d'une femme");
        break;
    case 'H':
        System.out.println("Il s'agit d'un homme");
        break;            
    default:
        System.out.println("Sexe indéterminé");
        break;
}
```

### Les Boucles : 

>La Boucle à utilisé dépend de la situation et de la demande

#### for

***Pour*** i égale 1, ***tant que*** i est inferieur ou égale à 10, on ajoute 1

```
for(int i = 1; i <= 10; i++){
    System.out.println(i);
}
```

#### while

***Tant que*** i est inferieur ou égale à 10, on affiche i et on ajoute 1 à i

```
int i = 1;

while (i <= 10) {
    System.out.println(i);
    i++
}
```

#### Do while

***Faire*** on affiche i et on ajoute 1 à i ***tant que*** i est inferieur ou égale à 10

**Cette méthode permet d'executer le code au moins une fois.**

```
int i = 1;

do{
    System.out.println(i);
    i++
} while (i <= 10);
```

### Les Class : 

Utilisation d'une class :
```
Ville ville = new Ville();
Class (Ville) objet (ville) operateur (new) consturcteur (Ville())
```

### Class (exemple Ville) :

```
public class Ville {
    
    private String nomVille;
    private String nomPays;
    private int nbreHabitants;
    
    public Ville(){
        System.out.println("Création d'une ville");
        nomVille= "toto";
        nomPays = "tata";
        nbreHabitants= 0;
    }

    public Ville(String pNom, int pNbre, String pPays){
        System.out.println("Création d'une ville");
        nomVille= pNom;
        nomPays = pPays;
        nbreHabitants= pNbre;
    }

    public int getNbreHabitants() {
        return nbreHabitants;
    }

    public String getNomPays() {
        return nomPays;
    }

    public String getNomVille() {
        return nomVille;
    }

    public void setNbreHabitants(int nbreHabitants) {
        this.nbreHabitants = nbreHabitants;
    }
    
    public void setNomPays(String nomPays) {
        this.nomPays = nomPays;
    }

    public void setNomVille(String nomVille) {
        this.nomVille = nomVille;
    }

}
```