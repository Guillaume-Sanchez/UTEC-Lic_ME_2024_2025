import java.util.Scanner;

public class App {
 
    public static void main(String[] args) throws Exception {

        //Ville villeParDefaut = new Ville();
        //Ville paris = new Ville("Paris", 123456, "France");
        //Ville marseille = new Ville("Marseille", 654321, "France");

        //System.out.println(villeParDefaut.getNomVille());
        //System.out.println(paris.getNomVille());
        //System.out.println(marseille.getNomVille());

        Ville v1 = new Ville("Marseille", 123456, "France", 13000);
        System.out.println("v1 = " + v1.getNomVille() + ", " + v1.getNbreHabitants() + ", " + v1.getNomPays());
        Ville v2 = new Ville("Rio", 321654, "Brésil", 78945);
        System.out.println("v2 = " + v2.getNomVille() + ", " + v2.getNbreHabitants() + ", " + v2.getNomPays());

        System.out.println();

        System.out.println("On inverse v1 et v2");

        Ville temp = new Ville();
        temp = v1;
        v1 = v2;
        v2 = temp;

        System.out.println();

        System.out.println("v1 = " + v1.getNomVille() + ", " + v1.getNbreHabitants() + ", " + v1.getNomPays());
        System.out.println("v2 = " + v2.getNomVille() + ", " + v2.getNbreHabitants() + ", " + v2.getNomPays());

        System.out.println();

        System.out.println("On change les nom de Ville");

        v1.setNomVille("Hong Kong");
        v2.setNomVille("Dijbouti");

        System.out.println();

        System.out.println(v1.getNomVille() + ", " + v1.getNbreHabitants() + ", " + v1.getNomPays());
        System.out.println(v2.getNomVille() + ", " + v2.getNbreHabitants() + ", " + v2.getNomPays());


        System.out.println("\n ==== Passage à l'exo adresse ====\n");

        Adresse adresse1 = new Adresse("rue toto", 77300);
        Ville melun = new Ville("Melun", 15000, "France", 77300);
        System.out.println("code postal = " + adresse1.getcodePostal());

        melun.findVilleFromCodePostal(adresse1.getcodePostal());

        adresse1.getNumero();
    }
}
