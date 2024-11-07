public class Principale {
    public static void main(String[] args) throws Exception {

        System.out.println("Hello World !");
        Separateur.Default();
        int trois = 3;
        System.out.println(trois);
        Separateur.Default();
        String phrase = "Salut comment il va ?";
        System.out.println(phrase);
        Separateur.Default();

        // Opérateurs possible : + - * / % etc..

        int nb1, nb2, nb3;
        nb1 = 9;
        nb2 = 5;
        nb3 = nb1*nb2;
        System.out.println(nb3);

        Separateur.Default();
        System.out.println("Exercice 1 \n");
        // Exo 1
        // 1- initialisation des variables a et b : 
        // a=5;
        // b=8;
        int a = 5;
        int b = 8;
        // 2- Calculez les 4 opérations avec les nombres a et b et mettez les résultats dans les 
        // variables somme, difference, produit et quotient : 
        // somme=a+b;
        // difference=a-b;
        // produit=a*b;
        // quotient=a/b;
        int somme = a+b;
        int difference = a-b;
        int produit = a*b;
        int quotient = a/b;
        // 3- Affichez les résultats à l’écran.
        System.out.println("La somme de " + a + " et " + b + " est : " + somme );
        System.out.println("La difference de " + a + " et " + b + " est : " + difference );
        System.out.println("Le produit de " + a + " et " + b + " est : " + produit );
        System.out.println("Le quotient de " + a + " et " + b + " est : " + quotient );


        Separateur.Default();
        System.out.println("Exercice 2 \n");
        // Exo 2
        // Calculez le diamètre, la circonférence et l’aire d’un cercle, en fonction de son rayon «r».
        //  - Diamètre = r*2;
        //  - circonférence = 2*pi*r;
        //  - aire= pi*r*r;
        // avec pi=3.14159265358979.
        final double pi = 3.14159265358979;
        double r = 12;
        System.out.println("Pour un rayon de : " + r + "cm");
        double diametre = r*2;
        System.out.println("Le diamètre sera de : " + diametre + "cm");
        double circonference = 2*pi*r;
        System.out.println("La circonference sera de : " + circonference + "cm");
        double aire = pi*r*r;
        System.out.println("Son aire sera de : " + aire + "cm");

        Separateur.Default();
        System.out.println("Exercice 3 \n");
        // Exo 3
        // - Déclarez une variable de type String
        // - Initiallisez de la chaîne de caractères
        // - Affichez la chaîne de caractères à l’écran.
        String variableuuu;
        variableuuu = "Salut, comment il va ?";
        System.out.println(variableuuu);
    }
}