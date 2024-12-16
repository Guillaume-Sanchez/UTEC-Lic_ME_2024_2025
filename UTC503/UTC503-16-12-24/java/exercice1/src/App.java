// Exercice 1 :

// écrire un programme affichant la table de multiclication d'un nombre saisi par l'utilisateur

import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner sc = new Scanner(System.in);
        System.out.println("Entrez le chiffre que vous voulez :");
        int num = sc.nextInt();

        for(int i = 0; i <= 10; i++ ){
            System.out.println(num + " x " + i + " = " + num*i);
        }

    }
}