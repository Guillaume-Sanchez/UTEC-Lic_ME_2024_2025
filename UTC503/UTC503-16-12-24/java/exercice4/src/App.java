// Ecrire un programme demandant la saisi d'une valeur `n` et afficahnt le carré suivant (n = 5 dans cette exemple):

// xxxxx

// xxxxx

// xxxxx

// xxxxx

// xxxxx

import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner sc = new Scanner(System.in);
        System.out.print("Entrez le chiffre que vous voulez : ");
        int num = sc.nextInt();

        for(int x = 1; x <= num; x++){
            for(int y = 1; y <= num ; y++){
                System.out.print('x');
            }
            System.out.println();
        }
    }
}
