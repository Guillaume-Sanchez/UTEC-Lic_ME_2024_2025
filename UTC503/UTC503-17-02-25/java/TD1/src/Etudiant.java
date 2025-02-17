public class Etudiant {

    private String nom;
    private double moyenne = -1;

    /* -1 instancié par defaut pour qu'elle
    ne soit pas prise en compte en cas de mauvaise
    donnée
    */

    Etudiant() {
        this.nom = "Inconnu";
        this.moyenne = 0;
    }
    
    Etudiant(String nomInput, double moyenneInput) {
        this.nom = nomInput;
        if(moyenneInput < 0 || moyenneInput > 20) {
            System.out.println("La moyenne doit être comprise entre 0 et 20.");
        }
        else{
            this.moyenne = moyenneInput;
        }
    }

    public void afficherDetails() {
        System.out.println("Nom : " + this.nom);
        if(this.moyenne >= 0 && this.moyenne <= 20) {
            System.out.println("Moyenne : " + this.moyenne);
        }
        else {
            System.out.println("Moyenne : Non définie.");
        }
    }

    public String getNom() {
        return this.nom;
    }

    public void setNom(String nomInput) {
        this.nom = nomInput;
    }

    public double getMoyenne() {
        return this.moyenne;
    }

    public void setMoyenne(double moyenneInput) {
        if(moyenneInput < 0 || moyenneInput > 20) {
            System.out.println("La moyenne doit être comprise entre 0 et 20.");
        }
        else{
            this.moyenne = moyenneInput;
        }
    }

}
