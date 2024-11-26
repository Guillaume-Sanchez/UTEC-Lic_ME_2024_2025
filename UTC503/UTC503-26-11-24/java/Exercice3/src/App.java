/*
Exercice 3 :

Ecrire un programme qui, étant donné une équation du second degré,
détermine le nombre de ses solutions réelles et leurs valeurs approchées éventuelles.

*/

public class App {
    public static void main(String[] args) throws Exception {
        
        int a =1;
        int b =2;
        int c =1;

        int delta = (b*b)-(4*a*c);

        if (delta < 0) {
            System.out.println("L'équation admet aucune solution dans R");
        }
        else if(delta == 0){
            System.out.println("L'équation admet 1 solution dans R ");
        }
        else if(delta > 0){
            System.out.println("L'équation admet 2 solution dans R");
        }
        else{
            System.out.println("Une erreur est survenu");
            System.exit(1);
        }

    }
}


/* 

D = b² - 4ac

D > 0
D = 0
D < 0

ax² + bx + c

b² - 4ac

*/