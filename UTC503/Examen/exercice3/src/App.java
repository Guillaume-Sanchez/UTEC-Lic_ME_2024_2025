import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        // Utilisation de la bibliothèque Scanner pour lire les entrées de l'utilisateur
        Scanner sc = new Scanner(System.in);
        // Demande à l'utilisateur de donner un nombre positif
        System.out.print("Donner un nombre positif : ");
        // Lecture de l'entrée de l'utilisateur
        int num = sc.nextInt();
        // Si le nombre est négatif, on affiche un message d'erreur et on termine le programme
        if (num < 0) { 
            // Affichage d'un message d'erreur
            System.out.println("svp positif");
            // Fin du programme avec un code d'erreur
            System.exit(1); 
        }
        // Calcul de la racine carrée du nombre
        double racineDeNum = Math.sqrt(num);
        // Affichage du résultat de la racine carrée de num
        System.out.println("Sa racine carree est : " + racineDeNum);
    }
}