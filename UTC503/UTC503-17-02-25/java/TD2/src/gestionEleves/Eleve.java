package gestionEleves; // Déclaration du package gestionEleves

import java.util.ArrayList; // Importation de la classe ArrayList

public class Eleve { // Création de la classe Eleve

    private String nom; // Déclaration de l'attribut nom
    private ArrayList<Integer> listeNotes = new ArrayList<>(); // Déclaration de l'attribut listeNotes
    // Initialisation de l'attribut listeNotes avec un nouvel objet ArrayList vide
    private double moyenne; // Déclaration de l'attribut moyenne

    public Eleve() { // Déclaration du constructeur Eleve par défaut
        this.nom = "Inconnu";
    }

    public Eleve(String nomImput) { // Déclaration du constructeur Eleve
        this.nom = nomImput; // Initialisation de l'attribut nom avec la valeur de nomImput
    }

    public String getNom() { // Déclaration de la méthode getNom
        return this.nom; // getNom retourne la valeur de l'attribut nom
    }

    public double getMoyenne() { // Déclaration de la méthode getMoyenne
        return this.moyenne; // getMoyenne retourne la valeur de l'attribut moyenne
    }

    public ArrayList<Integer> getListeNotes() { // Déclaration de la méthode getListeNotes
        return listeNotes; // getListeNotes retourne la liste de toutes les notes contenu dans listeNotes
    }

    public void ajouterNote(int noteInput) { // Déclaration de la méthode ajouterNote
        // Condition pour ajuster la noteInput si elle est inférieure à 0
        if (noteInput < 0) { // Si noteInput est inférieur à 0
            noteInput = 0; // noteInput prend la valeur 0
        // Condition pour ajuster la noteInput si elle est supérieure à 20
        } else if (noteInput > 20) { // Sinon si noteInput est supérieur à 20
            noteInput = 20; // noteInput prend la valeur 20
        }
        this.listeNotes.add(noteInput); // Ajout de la noteInput à la liste listeNotes
        if (this.listeNotes.isEmpty()) { // Si la liste listeNotes est vide
            this.moyenne = 0; // La moyenne prend la valeur 0
        } else { // Sinon
            int somme = 0; // Initialisation de la variable somme à 0
            for (int note : this.listeNotes) { // Pour chaque note dans la liste listeNotes
                somme += note; // Ajout de la note à la somme
            } 
            // Calcul de la moyenne et affectation à l'attribut moyenne
            this.moyenne = (double) somme / this.listeNotes.size();
        }
    }

    public String toString() { // Déclaration de la méthode toString 
        return this.nom + " (" + this.moyenne + ")"; // Retourne le nom et la moyenne de l'élève
    }

}
