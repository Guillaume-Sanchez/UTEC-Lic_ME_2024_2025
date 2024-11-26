# TD1-Condition

>Guillaume Sanchez

## Exercice 1 

a) Modifier l’algorithme afin que si une seule des coordonnées est correcte, il s’affiche « es un TDM
```
    Variable : 
            entier a
            entier b
            entier x
            entier y
    debut
        a=3
        b=4
        saisir x
        saisir y

        si (x=a et y=b) alors
            debut de si
            afficher ("coulé")
            fin de si
        sinon si (x=a ou y=b) alors
            debur de si
            affiche ("TDM")
            fin de si
        sinon
            debut de si
            affiche ("à l'eau")
            fin de sinon
        fin
    fin
```
b) Ecrire le programme correspondant en java.

```
import java.util.Scanner;

public class App {
    
    public static void main(String[] args) throws Exception {

        // instantation des 4 variables :
        
        int a = 3;
        int b = 4;

        // Utilisation de Scanner pour que l'utilisateur puisse renseigner les valeurs 'x' et 'y'
        
        Scanner scannerX = new Scanner(System.in);
        System.out.print("Ecrire le nombre x: ");
        int x = scannerX.nextInt();
        Scanner scannerY = new Scanner(System.in);
        System.out.print("Ecrire le nombre y: ");
        int y = scannerY.nextInt();

        // Première condition : Si 'x' est strictement égale à 'a' ET que 'y' est strictement égale à 'b'
        if(x == a && y == b){
            // alors on "affiche coulé"
            System.out.println("coulé");
        }
        // Deuxième condition : Sinon Si 'x' est strictemment égale à 'a' OU 'y' est strictement égale à 'b'
        else if(x == a || y == b){
            // alors on affiche "TDM"
            System.out.println("TDM");
        }
        // Sinon on affiche "à l'eau"
        else{
            System.out.println("à l'eau");
        }


    }
}
```

## Exercice 2

a) Ecrire unprogramme en java qui prend en entrée trois réels x, y et z et affiche le maximum des trois.

```
public class App {
    public static void main(String[] args) throws Exception {

        // instantiation de x, y et z 

        int x = 3;
        int y = 4;
        int z = 1;

        // Si 'x' strictement suppérieur à 'y' et 'x' strictement supérieur 'z'

        if (x > y && x > z) {

            // Alors on affiche x

            System.out.println("x est plus grand"); 
        }

        // Sinon, si 'y' strictement suppérieur à 'x' et 'y' strictement supérieur 'z'
        
        else if(y > x && y > z){

            // Alors on affiche y

            System.out.println("y est plus grand"); 
        }

        // Sinon, si 'z' strictement suppérieur à 'x' et 'z' strictement supérieur 'y'

        else if(z > x && z > y){

            // Alors on affiche z

            System.out.println("z est plus grand"); 
        }

        // Un dernier sinon pour gérer les éventuelles erreurs

        else{
            System.out.println("Une erreur est survenu");
            System.exit(1);
        }
    }
}
```

## Exercice 3

```
        // instantiation de a, b et c 

        int a =1;
        int b =2;
        int c =1;

        // On instantie delta égale b² - 4ac :

        int delta = (b*b)-(4*a*c);

        // Si Delta est strictement inferieur à 0

        if (delta < 0) {

            // Alors on affiche que "l'equation admet aucune solution dans R"

            System.out.println("L'équation admet aucune solution dans R");
        }

        // Sinon, Si Delta est strictement égale à 0

        else if(delta == 0){

            // Alors on affiche que "l'équation admet 1 solution dans R"

            System.out.println("L'équation admet 1 solution dans R");
        }

        // Sinon, Si Delta est strictement supperieur à 0

        else if(delta > 0){

            // Alors on affiche que "l'équation admet 2 solution dans R"

            System.out.println("L'équation admet 2 solution dans R");
        }

        // Un dernier sinon pour gérer les éventuelles erreurs

        else{
            System.out.println("Une erreur est survenu");
            System.exit(1);
        }
```