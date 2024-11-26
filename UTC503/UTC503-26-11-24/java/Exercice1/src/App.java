/*

Exercice 1

On donne l’algorithme suivant :

    Variable : entier a
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
        sinon
            debut de si
            affiche ("à l'eau")
            fin de sinon
        fin
    fin

    a) Modifier l’algorithme afin que si une seule des coordonnées est correcte, il s’affiche « es un TDM

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
        sinon si (x=a || y=b) alors
            debur de si
            affiche ("TDM")
            fin de si
        sinon
            debut de si
            affiche ("à l'eau")
            fin de sinon
        fin
    fin

    b) Ecrire le programme correspondant en java.
 */

import java.util.Scanner;

public class App {
    
    public static void main(String[] args) throws Exception {

        // instantation des 4 variables :
        
        int a = 3;
        int b = 4;
        
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
