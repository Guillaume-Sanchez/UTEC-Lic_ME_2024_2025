public class Produit {

    private String nom;
    private double prix;
    private int quantiteStock;

    Produit(){
        this.nom = "Inconnu";
        this.prix = 0;
    }

    Produit(String nomInput, double prixInput){
        this.nom = nomInput;
        this.prix = prixInput;
    }

    public String getNom(){
        return this.nom;
    }

    public void setNom(String nomInput){
        this.nom = nomInput;
    }

    public double getPrix(){
        return this.prix;
    }

    public void setPrix(double prixInput){
        if(prixInput < 0){
            System.out.println("Le prix ne peut pas être négatif.");        }
        else{
            this.prix = prixInput;
        }
    }

    public int getQuantiteStock(){
        return this.quantiteStock;
    }

    public void setQuantiteStock(int quantiteStockInput){
        if(quantiteStockInput < 0){
            System.out.println("La quantité ne peut pas être négative.");
        }
        else{
            this.quantiteStock = quantiteStockInput;
        }
    }
}
