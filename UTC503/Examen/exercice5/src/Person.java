public class Person {

    private String nom; //initialisation de la variale nom
    private House maison; // initialisation de la variable maison qui utilise la classe House

    Person(String nomInput, House maisonInput) { // constructeur de la classe Person qui attend deux paramètres
        this.nom = nomInput; // affectation de la valeur de nomInput à la variable nom
        this.maison = maisonInput; // affectation de la valeur de maisonInput à la variable maison
    }

    public void display() { // méthode display de la classe Person qui affiche un message
        System.out.println( // Le message affiché
            "Je suis " + 
            this.nom +
            " et j'habite dans une maison de " + 
            this.maison.getSurface() +  
            "m2, sa porte est de couleur " +
             this.maison.getDoor().getColor()
        );
    }
}
