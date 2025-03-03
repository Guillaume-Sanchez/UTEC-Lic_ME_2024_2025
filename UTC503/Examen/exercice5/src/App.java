public class App {
    public static void main(String[] args) throws Exception {

        // Jeu d'essai

        // Création d'une maison "house1" de 100m2 avec un porte de couleur jaune
        House house1 = new House(100, "jaune");
        // Création d'un appartement "apartment1" avec une porte de couleur marron
        Apartment apartment1 = new Apartment("marron");
        // Essai de la méthode display de la classe House
        house1.display(); // affiche "Je suis une maison de 100m2, ma porte est de couleur jaune"
        // Essai de la méthode display de la classe Apartment sous classe de House
        apartment1.display(); // affiche "Je suis une maison de 50m2, ma porte est de couleur marron"
        // Essai de la méthode display de la classe Door de la house1
        house1.getDoor().display(); // affiche "Je suis une porte, ma couleur est jaune"
        // Essai de la méthode display de la classe Door de l'apartment1
        apartment1.getDoor().display(); // affiche "Je suis une porte, ma couleur est marron"
        // Création d'une personne "person1" qui s'appelle Alice et qui habite dans la maison "house1"
        Person person1 = new Person("Alice", house1);
        // Création d'une personne "person2" qui s'appelle Bob et qui habite dans l'appartement "apartment1"
        Person person2 = new Person("Bob", apartment1);
        // Essai de la méthode display de la classe Person pour perso
        person1.display(); // affiche "Je suis Alice et j'habite dans une maison de 100m2, sa porte est de couleur jaune"
        // Essai de la méthode display de la classe Person pour perso2
        person2.display(); // affiche "Je suis Bob et j'habite dans une maison de 50m2, sa porte est de couleur marron"
    }
}
