public class Door {

    private String color; // initialisation de la variable color

        Door(String colorInput) { // constucteur de la classe Door qui attend un paramètre
            this.color = colorInput; // affectation de la valeur de colorInput à la variable color
        }

        public void display() { // méthode display de la classe Door qui affiche un message
            System.out.println("Je suis une porte, ma couleur est " + this.color); // Le message affiché
        }

        public String getColor() { // méthode getColor de la classe Door qui retourne la valeur de la variable color
            return color; // retourne la valeur de la variable color
        }

        public void setColor(String color) { // méthode setColor de la classe Door qui affecte une valeur à la variable color
            this.color = color; // affecte la valeur de color à la variable color
        }
}
