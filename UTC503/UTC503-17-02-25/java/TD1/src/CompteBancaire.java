public class CompteBancaire {

    private double solde;
    private String titulaire;

    CompteBancaire(){
        this.solde = 0;
        this.titulaire = "Inconnu";
    }

    CompteBancaire(double soldeInput, String titulaireInput){
        this.solde = soldeInput;
        this.titulaire = titulaireInput;
    }

    public void deposer(double montant){
        this.setSolde(this.getSolde() + montant);
    }

    public void retirer(double montant){
        this.setSolde(this.getSolde() - montant);
    }

    public double getSolde(){
        return this.solde;
    }

    private void setSolde(double soldeInput){
        this.solde = soldeInput;
    }

    public String getTitulaire(){
        return this.titulaire;
    }

    public void setTitulaire(String titulaireInput){
        this.titulaire = titulaireInput;
    }

}
