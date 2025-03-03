public class House {
    
    private int surface; // initialisation de la variable surface
    private Door porte; // initialisation de la variable porte qui utilise la classe Door

    House(int surfaceInput, String colorInput) { // constucteur de la classe House qui attend deux paramètres
        this.surface = surfaceInput; // affectation de la valeur de surfaceInput à la variable surface
        this.porte = new Door(colorInput); // affectation de la valeur de colorInput à la variable porte
    }

    public void display() { // méthode display de la classe House qui affiche un message
        System.out.println("Je suis une maison, ma surface est de " + this.surface + " m2"); // Le message affiché
    }

    public int getSurface() { // méthode getSurface de la classe House qui retourne la valeur de la variable surface
        return this.surface; // retourne la valeur de la variable surface
    }

    public void setSurface(int surface) { // méthode setSurface de la classe House qui affecte une valeur à la variable surface
        this.surface = surface; // affecte la valeur de surface à la variable surface
    }

    public Door getDoor() { // méthode getDoor de la classe House qui retourne la valeur de la variable porte
        return this.porte; // retourne la valeur de la variable porte
    }
}
