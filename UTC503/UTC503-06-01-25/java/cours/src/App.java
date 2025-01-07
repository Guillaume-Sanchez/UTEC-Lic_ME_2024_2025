public class App {
    public static void main(String[] args) throws Exception {

        // Exemple d'un tableau unidimentionnel

        System.out.println("================== Cours ===================");
        System.out.println("");
        
        int tab[] = {1,2,3,4};
        
        for(int i=0; i < tab.length; i++){
            System.out.println("La valeur " + tab[i] + " a pour indice " + i);
        }
        System.out.println("La valeur du dernier élément du tableau est : " + tab[tab.length -1]);

        System.out.println("");
        System.out.println("===============================================");
        System.out.println("");

        // Exemple d'un tableau multidimentionnel

        int premierNombres[][] = {{1,2,3,4},{5,6,7,8}};

        // for(int i=0;i<2;i++){
        //     for(int j=0;j<4;j++){
        //         System.out.print(premierNombres[i][j]);
        //     }
        //     System.out.println("");
        // }

        int i = 0;
        while(i < 2){
            int j = 0;
            while(j < 4){
                System.out.print(premierNombres[i][j]);
                j++;
            }
            System.out.println("");
            i++;
        }

        // Exemple 1 :

        System.out.println("");
        System.out.println("=============== Exercice 1================");
        System.out.println("");

        int tabExemple1[] = {75,25};
        System.out.println(tabExemple1[0] + " + " + tabExemple1[1] + " = " + tabExemple1[0]+tabExemple1[1]);

        // Exemple 2 :

        System.out.println("");
        System.out.println("=============== Exercice 2================");
        System.out.println("");

        int tabExemple2[] = {5,5};
        System.out.println(tabExemple2[0] + " * " + tabExemple2[1] + " = " + tabExemple2[0]*tabExemple2[1]);

        // Exemple 3 :

        System.out.println("");
        System.out.println("=============== Exerice 3================");
        System.out.println("");

        int tabACopier[] = {1,2,3,4,5,6,7,8,9};
        int tabExemple3[] = tabACopier.clone();

        for(i=0; i < tabACopier.length; i++){
            //tabExemple3[i] = tabACopier[i];
            System.out.print(tabExemple3[i]);
        }
        // System.out.println("");        

        System.out.println("");
        System.out.println("=============== Suite Cours, les Fonctions : ================");
        System.out.println("");

        // Les Méthode utiles :

        System.out.println("Voici une valeur aléatoire : " + Math.random());
        System.out.println("Voici le sinus de 120 : " + Math.sin(120));
        System.out.println("Voici le cosinus de 120 : " + Math.cos(120));
        System.out.println("Voici la tangente de 120 : " + Math.tan(120));
        System.out.println("La valeur absolu de -120.25 : " + Math.abs(-125.25));
        System.out.println("L'exposant de 2 ': " + Math.pow(2, 2));

        System.out.println("");
        System.out.println("=============== Créer sa méthode : ================");
        System.out.println("");

        // Exemple avec la méthode printLnTableau :

        int tableau1[] = {1,2,3,4,5,6,7,8,9};
        int tableau2[] = {9,8,7,6,5};
        int tableau3[] = {4,3,2,1,0};

        printLnTableau(tableau1);
        printLnTableau(tableau2);
        printLnTableau(tableau3);

        String tabBis1[] = {"toto","tata","titi","tutu"};

        printTableauString(tabBis1);
    }

    static void printLnTableau(int tab[]){
        System.out.print("|");
        for(int i=0; i<tab.length; i++){
            System.out.print(tab[i] + "|");
        }
        System.out.println("");
    }

    static void printTableauString( String[] tabBis){
        for(String str : tabBis){
            System.out.println(str);
        }
    }
}

