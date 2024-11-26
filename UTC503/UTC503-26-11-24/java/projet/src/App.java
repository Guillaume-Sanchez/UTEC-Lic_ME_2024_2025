public class App {
    public static void main(String[] args) throws Exception {

        // // Exemple 1 : If noramle (cette exemple n'est pas logique car le calcul s'effectu avant la vérification)
        
        // int a = 6;          // Déclaration
        // int b = 2;          // |

        // if(b == 0){                                                     // Traitement
        //     System.out.println("Division par 0 impossible !");        // |
        // }                                                               // |
        // System.out.println("Résultat est = "+ c);                       // |

        // Exemple 2 : If Else
        
        // int a = 6;

        // if(a >= 10){ 
        //     System.out.println("Vous avez plus de la moyenne : " + a);
        // }      
        // else{
        //     System.out.println("Vous passez au rattrapage car vous avez moins de 10");
        // }

        // Exemple 3 : If Else If

        // La Bonne Pratique :

        // int note = 12;

        // if(note > 18){ 
        //     System.out.println("A");
        // }
        // else if(note > 16 && note <= 18){
        //     System.out.println("B");
        // }
        // else if(note > 14 && note <= 16){
        //     System.out.println("C");
        // }
        // else if(note > 12 && note <= 14){
        //     System.out.println("D");
        // }
        // else{
        //     System.out.println("F");
        // }

        // Exemple 4 : Switch Case

        // char sexe = 'F';

        // switch (sexe) {
        //     case 'F':
        //         System.out.println("Il s'agit d'une femme");
        //         break;
        //     case 'H':
        //         System.out.println("Il s'agit d'un homme");
        //         break;            
        //     default:
        //         System.out.println("Sexe indéterminé");
        //         break;
        // }

        // Exercice Switch :
        
        // int taille = 34;

        // switch (taille) {
        //     case 34:
        //         System.out.println("XS");
        //         break;
        //     case 36:
        //         System.out.println("S");
        //         break;
        //     case 38:
        //         System.out.println("SM");
        //         break;
        //     case 40:
        //         System.out.println("M");
        //         break;
        //     case 42:
        //         System.out.println("L");
        //         break;
        //     default:
        //         System.out.println("La taille n'existe pas");
        //         break;
        // }
    
    
    }
}

