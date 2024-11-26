/* 

Exercice 2 :

a) Ecrire un programme en java qui prend en entrée trois réels x, y et z et affiche le maximum des trois.

*/

public class App {
    public static void main(String[] args) throws Exception {
        
        // instantiation de x, y et z 

        int x = 3;
        int y = 4;
        int z = 1;

        if (x > y && x > z) {
            System.out.println("x est plus grand"); 
        }
        else if(y > x && y > z){
            System.out.println("y est plus grand"); 
        }
        else if(z > x && z > y){
            System.out.println("z est plus grand"); 
        }


    }
}
