public class Ville {
    
    private String nomVille;
    private String nomPays;
    private int nbreHabitants;
    
    public Ville(){

        System.out.println("Création d'une ville");
        nomVille= "toto";
        nomPays = "tata";
        nbreHabitants= 0;
        
    }

    public Ville(String pNom, int pNbre, String pPays){
        System.out.println("Création d'une ville");
        nomVille= pNom;
        nomPays = pPays;
        nbreHabitants= pNbre;
    }

    public int getNbreHabitants() {
        return nbreHabitants;
    }

    public String getNomPays() {
        return nomPays;
    }

    public String getNomVille() {
        return nomVille;
    }

    public void setNbreHabitants(int nbreHabitants) {
        this.nbreHabitants = nbreHabitants;
    }
    
    public void setNomPays(String nomPays) {
        this.nomPays = nomPays;
    }

    public void setNomVille(String nomVille) {
        this.nomVille = nomVille;
    }

}
