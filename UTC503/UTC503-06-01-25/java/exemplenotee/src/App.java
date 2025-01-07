public class App {
    public static void main(String[] args) throws Exception {
        
        String tableau[] = {"toto", "tata", "titi", "tutu"};
        parcourirTableau(tableau);
        System.out.println(toString2(tableau));
        
    }

    static void parcourirTableau(String tab[]){

        System.out.println("Parcours du tableau :");

        for(String str : tab){
            System.out.println(str);
        }
    }

    static void toString(String tab[]){

        System.out.println("Affiche la tableau en chaine de caractère :");

        for(String str : tab){
            System.out.print(str);
        }
        System.out.println("");
    }

    static String toString2(String tab[]){

        System.out.println("Méthode toString()");

        String retour = "";
        for(String str : tab){
            retour += str + "\n";
        }
        return retour;
    }
}
