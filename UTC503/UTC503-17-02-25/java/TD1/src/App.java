public class App {
    public static void main(String[] args) throws Exception {
        
        // Exercice 1

        // // Création d'une personne :
        // Personne personne1 = new Personne("Jean", 25);
        // // Affichage des données de la personne :
        // System.out.println(personne1.getNom() +
        // " a " + personne1.getAge() + " ans.");

        // Exercice 2

        // // Création d'un compte bancaire :
        // CompteBancaire compte1 = new CompteBancaire(1000, "Jean");
        // // affichage des données initialisées :
        // System.out.println(compte1.getTitulaire() + " a un solde de " + compte1.getSolde() + " euros.");
        // // dépôt de 500 euros :
        // compte1.deposer(500);
        // // affichage du nouveau solde :
        // System.out.println(compte1.getTitulaire() + " a un solde de " + compte1.getSolde() + " euros.");
        // // retrait de 200 euros :
        // compte1.retirer(200);
        // // affichage du nouveau solde :
        // System.out.println(compte1.getTitulaire() + " a un solde de " + compte1.getSolde() + " euros.");

        // Exercice 3

        // // Création d'un produit :
        // Produit produit1 = new Produit("Ordinateur", 1000);
        // // Essai de modification du prix avec une valeur négative
        // // Affiche un message d'erreur :
        // produit1.setPrix(-5);
        // // Essai de modification du prix avec une valeur positive :
        // produit1.setPrix(5);
        // // Affichage du nouveau prix :
        // System.out.println("Le prix est " + produit1.getPrix() + " euros.");
        // // Essai de modification du stock avec une valeur négative
        // // Affiche un message d'erreur :
        // produit1.setQuantiteStock(-5);
        // // Essai de modification du stock avec une valeur positive :
        // produit1.setQuantiteStock(5);
        // // Affichage de la nouvelle quantité de stock :
        // System.out.println("La Quantité du Stock est " + produit1.getQuantiteStock());

        // Exercice 4
        System.out.println("--------------------------------------");
        // Création d'un Etudiant :
        Etudiant etudiant1 = new Etudiant("Jean", 15);
        // Utilisation de la méthode afficherDetails() :
        etudiant1.afficherDetails();
        System.out.println("--------------------------------------");
        // Création d'un second Etudiant avec une moyenne incorrecte superieur à 20 :
        Etudiant etudiant2 = new Etudiant("Paul", 25);
        // Utilisation de la méthode afficherDetails(), normalement, la moyenne ne s'affiche pas :
        etudiant2.afficherDetails();
        System.out.println("--------------------------------------");
        // Création d'un troisième Etudiant avec une moyenne incorrecte inferieur à 0 :
        Etudiant etudiant3 = new Etudiant("Marie", -5);
        etudiant3.afficherDetails();
        System.out.println("--------------------------------------");
        // Création d'un quatrième Etudiant avec une moyenne correcte :
        Etudiant etudiant4 = new Etudiant("Luc", 18);
        etudiant4.afficherDetails();
        System.out.println("--------------------------------------");
        // Tentative de changement de la moyenne avec une valeur positive incorrecte :
        etudiant4.setMoyenne(25);
        etudiant4.afficherDetails();
        System.out.println("--------------------------------------");
        // Tentative de changement de la moyenne avec une valeur negative incorrecte :
        etudiant4.setMoyenne(-30);
        etudiant4.afficherDetails();
        System.out.println("--------------------------------------");
        // Tentative de changement de la moyenne avec une valeur correcte :
        etudiant4.setMoyenne(10);
        etudiant4.afficherDetails();
        System.out.println("--------------------------------------");
    }   
}
