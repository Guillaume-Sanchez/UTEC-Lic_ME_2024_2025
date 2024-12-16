import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner sc = new Scanner(System.in);

        // for(int i = 0; i < 5; i = i + 1){
        //     System.out.println("**** " + i);
        // }

        // System.out.println("veuiller saisir un mot : ");
        // String str = sc.nextLine();
        // System.out.println("Vous avez saisi : " + str);

        // int a = 1; int b = 15;

        // while (a < b){
        //     System.out.println("coucou " + a + " " + b);
        //     a++;
        // }

        // char reponse = 'O';

        // while (reponse == 'O') {
        //     System.out.println("veuiller saisir un prenom : ");
        //     String prenom = sc.nextLine();
        //     System.out.println("Bonjour, " + prenom);
        //     System.out.println("voulez-vous réessayer ? (O/N) ");
        //     reponse = sc.nextLine().charAt(0);
        // }
        // System.out.println("A+");

        char reponse = 'O';

        do{
            System.out.println("veuiller saisir un prenom : ");
            String prenom = sc.nextLine();
            System.out.println("Bonjour, " + prenom);
            System.out.println("voulez-vous réessayer ? (O/N) ");
            reponse = sc.nextLine().charAt(0);
        } while (reponse == 'O');
        System.out.println("A+");

    }
}
