import gestionEleves.*; // Importation du package gestionEleves et de toutes ses classes

public class App {
    public static void main(String[] args) throws Exception {
        Eleve eleve = new Eleve("Jean"); // Création d'un nouvel objet Eleve
        eleve.ajouterNote(10); // Ajout d'une note à l'objet eleve
        eleve.ajouterNote(15); // Ajout d'une note à l'objet eleve
        eleve.ajouterNote(20); // Ajout d'une note à l'objet eleve
        eleve.ajouterNote(5); // Ajout d'une note à l'objet eleve
        eleve.ajouterNote(-3); // Note ajustée à 0
        eleve.ajouterNote(-3); // Note ajustée à 0
        eleve.ajouterNote(25); // Note ajustée à 20
        eleve.ajouterNote(75); // Note ajustée à 20
        System.out.println(eleve); // Affiche : Jean (11.25)
        System.out.println(eleve.getListeNotes()); // Affiche : [10, 15, 20, 5, 0, 0, 20, 20]
        System.out.println(eleve.getNom()); // Affiche : Jean
        System.out.println(eleve.getMoyenne()); // Affiche : 11.25
    }
}

