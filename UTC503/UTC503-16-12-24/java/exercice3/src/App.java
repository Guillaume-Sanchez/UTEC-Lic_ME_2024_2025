// Écrire un programme demandant à l’utilisateur de saisir deux valeurs numériques b et n (vérifier que n est positif) et affichant la valeur bn.

import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {
        
        Scanner sc = new Scanner(System.in);
        System.out.print("Entrez le premier chiffre que vous voulez (b) : ");
        int b = sc.nextInt();
        
        int n;
        do{
            System.out.print("Entrez le second chiffre que vous voulez (n), il doit être positif : ");
            n = sc.nextInt();
        // Vérification à effectuer pour savoir si "n" est positif, sinon on repart au "do"
        } while (n < 0);

        System.out.println(b + " * " + n + " = " + b*n);
    }
}
