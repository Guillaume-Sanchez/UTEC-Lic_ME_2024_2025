public class Adresse {

    private int numero;
    private String nomDeRue;
    private int codePostal;
    
    public Adresse(){
        System.out.println("Création d'une adresse par defaut");
        numero= 0;
        nomDeRue = "Nom De Rue Par Defaut";
        codePostal= 0;
    }

    public Adresse(String nomDeRueInput, int codePostalInput){
        System.out.println("Création d'une adresse custom " + nomDeRueInput);
        nomDeRue = nomDeRueInput;
        codePostal= codePostalInput;
    }

    public int getNumero(){
        return this.numero;
    }

    public void setNumero(int numeroInput){
        this.numero = numeroInput;
    }

    public String getNomDeRue(){
        return this.nomDeRue;
    }

    public void setNomDeRue(String nomDeRueInput){
        this.nomDeRue = nomDeRueInput;
    }

    public int getcodePostal(){
        return this.codePostal;
    }

    public void setCodePostal(int codePostalInput){
        this.codePostal = codePostalInput;
    }

}
