import java.util.ArrayList;

public class App {
    public static void main(String[] args) throws Exception {

        // Jeu d'essai

        ArrayList<Integer> MAT = new ArrayList<>(); // Déclaration de l'attribut MAT
        MAT.add(5); // Ajout de la saturation 5
        MAT.add(36); // Ajout de la saturation 36
        MAT.add(78); // Ajout de la saturation 78
        MAT.add(54); // Ajout de la saturation 54
        MAT.add(98); // Ajout de la saturation 98
        MAT.add(78); // Ajout de la saturation 78
        MAT.add(65); // Ajout de la saturation 65
        // Appel de la méthode luminosite
        luminosite(MAT); // return la moyenne m des saturations
        System.out.println(luminosite(MAT)); // Affichage de la moyenne m des saturations
    }
        
        public static double luminosite(ArrayList<Integer> MAT){
        int somme = 0; // Initialisation de la somme des saturations
        for (int saturation : MAT) { // Pour toutes les saturation dans MAT
            somme += saturation; // Ajout de la saturation à la somme
        } 
        // Calcul de la moyenne et affectation à l'attribut moyenne
        return (double) somme / MAT.size();
    }
}
