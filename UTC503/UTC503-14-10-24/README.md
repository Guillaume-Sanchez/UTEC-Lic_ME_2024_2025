# 503 14/10/2024 

 
## L’univers de la programmation  
 
Un programme est simplement la description de la solution que je propose pour un problème. La solution peu s’appeler Modélisation ou Algorithme. Elle sera présentée par un programme.  
Autrement dit : un programme est une suite d’instruction pour résoudre un problème. 

Expliquer étape par étape ce que le programme doit faire, c’est a nous de réfléchir pas a la machine. 

*    Analyse -> déterminer le problème à résoudre 
*    Conception -> réalisation d’un l’algorithme pour trouver une solution 
*    Développement -> traduction de l’algorithme en langage de programmation 

Compilation Traduction du code source du programme vers le langage natif. 
Les erreurs possible sont : erreur de syntaxe, de logique et de Solution en soit. 
Diférents tests sont possible, unitaire, fonctionnel et client. 

Traducteur de programme, entre le programme et la compilation.  
Deux sorte de traducteurs interprètes et les compilateurs.  
Les compilateur vont analyser la syntaxe et les interprète, va simplement interpréter ce que vous avez donné. 
 
Une langage typé, c’est un langage ou chaque variable utilisé à forcément un type. (C, C++, JAVA, etc) 
Type de variable 2 classe primitif (entier, float, double char et bool) et complexe (tableau , tableau multidimensionnel, string). 
 
## Les langages de programmation 

Il y a deux familles de langage, les langages de bas niveau et de haut niveau. 
Les langages bas niveau sont les plus proche des langages de la machine (C etc) 
Les langages de haut niveau sont les plus proches des utilisateurs. 

Lorsque qu’on a un langage, compilation - interprétation ou procédural - orienté objet.  
 
Procédural : un programme qui utiles une procédure, une méthode. Il n’y a pas de modalité. Il s’exécute ligne par ligne. Tendance à générer du code spaghetti. Maintenance est difficile et travail en équipe plus compliqué. 

Orientation Objet : Centrée autour des objets. Ils peuvent t être concret ou de l’abstrait. 
 
Méthode  -> renvoie un resultat 
Procédure -> ne renvoie pas de résultat 
 
## Concept Orienté Objet 

Le concept OO veut une modélisation du monde réel 
Objet est une représentation abstraite par une chose concrète.  
Propriété et action.  

Statique -> propriété (Un chat) 

 Dynamique -> Action (Le saut d’un chat) 

Les classes : Représentation abstrait d’un objet qui est concert (Humain abstrarit, Bob concret) 
Une classe est un moule qui va pouvoir instancier des objets. 

```
class Rectangle{ 

    // Donné 
    
    Largeur
    Longueur 

    // Méthode : 
    
    Périmètre()  
    Aire() 

} 

class Point{ 

    // Donnée

    x 
    y 

} 
```
```
class Véhicule { 

    // Donnée 

    roue 
    place 

    // Méthode 

    Rouler() 
    Frainer() 

    // Les objet : 

    Voiture { 
        4 roues 
        4 place 
    } 

    Velo { 
        2 roues 
        1 place 
    } 

} 
```

## Les propriétés de base de l’orientation objet 

La notion de l’héritage -> Permet de spécialiser une class, qui possède les propriétés de son parent et ses propres spécialisations. 

La notion de Polymorphisme -> A partir du moment où on possède plusieurs types. Exemple créer une nouvelle voiture, elle sera composée de la class voiture et de la class parent véhicule, donc elle sera polymorphique. 

La notion de Transtypage -> Dans sa nature propre il est d’un type, mais je force le compilateur pour que l’objet soit d’un autre type que le type initial.  

La notion de Polymorphie paramétrique -> le constructeur etc (On ne voit pas cette notion à ce cour-là). 