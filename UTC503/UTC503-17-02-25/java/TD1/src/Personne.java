public class Personne {

    private String nom;
    private int age; 

    Personne(){
        this.nom = "Inconnu";
        this.age = 0;
    }

    Personne(String nomInput, int ageInput){
        this.nom = nomInput;
        this.age = ageInput;
    }

    public String getNom(){
        return this.nom;
    }

    public void setNom(String nomInput){
        this.nom = nomInput;
    }

    public int getAge(){
        return this.age;
    }

    public void setAge(int ageInput){
        this.age = ageInput;
    }

}
