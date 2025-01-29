import java.util.Scanner;

public class App {
 
    public static void main(String[] args) throws Exception {

        Ville villeParDefaut = new Ville();
        Ville paris = new Ville("Paris", 123456, "France");
        Ville marseille = new Ville("Marseille", 654321, "France");

        System.out.println(villeParDefaut.getNomVille());
        System.out.println(paris.getNomVille());
        System.out.println(marseille.getNomVille());

    }

}
