// Écrire un programme affichant les tables de multiplications des nombres de 1 à 10 dans un tableau à deux entrées.

public class App {
    public static void main(String[] args) throws Exception {

        for(int a=1; a<=10; a++){
            System.out.print(a + " : ");
            for(int b=1; b<=10;b++){
                System.out.print(a*b + " " );
            }
            System.out.println();
        }
    }
}