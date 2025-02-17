public class Ville {
    
    private String nomVille;
    private String nomPays;
    private int nbreHabitants;
    private int codePostal;
    
    public Ville(){

        System.out.println("Création d'une ville par defaut");
        nomVille= "NomDeVilleParDefaut";
        nomPays = "NomDePaysParDefaut";
        nbreHabitants= 0;
        codePostal= 00000;
    }

    public Ville(String pNom, int pNbre, String pPays, int pCodePostal){
        System.out.println("Création d'une ville custom " + pNom);
        nomVille= pNom;
        nomPays = pPays;
        nbreHabitants= pNbre;
        codePostal = pCodePostal;
    }

    public void findVilleFromCodePostal(int adresseCodePostal) {

        if(adresseCodePostal == this.codePostal){
            System.out.println("La ville du code postal " + adresseCodePostal + " est " + this.nomVille);
        }
        else{
            System.out.println("Le code postal " + adresseCodePostal + " ne correspond pas à la ville" + this.nomVille);
        }

    }

    public int getNbreHabitants() {
        return nbreHabitants;
    }

    public void setNbreHabitants(int nbreHabitants) {
        this.nbreHabitants = nbreHabitants;
    }

    public String getNomPays() {
        return nomPays;
    }

    public void setNomPays(String nomPays) {
        this.nomPays = nomPays;
    }

    public String getNomVille() {
        return nomVille;
    }

    public void setNomVille(String nomVille) {
        this.nomVille = nomVille;
    }

    public int getCodePostal() {
        return this.codePostal;
    }

    public void setCodePostal(int codePostal) {
        this.codePostal = codePostal;
    }

}
