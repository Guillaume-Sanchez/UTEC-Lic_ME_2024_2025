//import java.util.Arrays;
import java.util.Scanner;

class convertisseur{

    // IP entrée par l'utilisateur 
    static String ipInput;
    // Mask entré pas l'utilisateur 
    static String maskInput;
    // IP converti en binaire 
    static String ipConvertToBinary;
    // Mask converti en binaire 
    static String maskConvertToBinary;

    public static void main(String args[]){

        // Récuprération de l'IP par l'utilisateur 
        Scanner scIP = new Scanner(System.in);
        System.out.print("Entrez votre IP : ");
        convertisseur.ipInput = scIP.nextLine();
        // convertion de l'ip en binaire et instanciation de la variable ip.Input
        convertisseur.ipToBinary(convertisseur.ipInput);

        // Récuprération du mask par l'utilisateur 
        Scanner scMask = new Scanner(System.in);
        System.out.print("Entrez votre Mask : ");
        convertisseur.maskInput = scMask.nextLine();
        // convertion de l'ip en binaire et instanciation de la variable ip.Input
        convertisseur.maskToBinary(convertisseur.maskInput);

        // Calcul de son adresse réseau
        convertisseur.calculReseau(convertisseur.ipInput);

        // Calcul de son BroadCast
        convertisseur.calculBroadcast(convertisseur.ipInput, convertisseur.ipConvertToBinary, convertisseur.maskConvertToBinary);
    }

    public static void ipToBinary(String ipInput) {

        // Séparation de l'IP en 4 élément
        String[] ipArray = ipInput.split("[.]");

        String errorMessage = "L'ip est incorecte, merci de ne pas dépacer 255 et de ne rentrer que 4 nombres et de bien les séparer par un point";

        //Vérifiation du nombre d'élément attendu 
        if(ipArray.length != 4){
            System.out.print(errorMessage);
            System.exit(1);
        }

        // Instanciation de 4 variables, une par élément
        int ipFirstOctet = Integer.parseInt(ipArray[0]);
        int ipSecondOctet = Integer.parseInt(ipArray[1]);
        int ipThirdOctet = Integer.parseInt(ipArray[2]);
        int ipLastOctet = Integer.parseInt(ipArray[3]);

        // Convertion des 4 variables
        String ipFirstOctetToB = Integer.toBinaryString(ipFirstOctet);
        String ipSecondOctetToB = Integer.toBinaryString(ipSecondOctet);
        String ipThirdOctetToB = Integer.toBinaryString(ipThirdOctet);
        String ipLastOctetToB = Integer.toBinaryString(ipLastOctet);

        
        // if(ipFirstOctetToB.length() < 8 || ipSecondOctetToB.length() < 8 || ipThirdOctetToB.length() < 8 || ipLastOctetToB.length() < 8 ){
        //     System.out.print(errorMessage);
        //     System.exit(1);
        // }
        if(ipFirstOctetToB.length() != 8){
            int reste = 8 - ipFirstOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipFirstOctetToB = Integer.toString(i) + ipFirstOctetToB;
            }
        }
        if(ipSecondOctetToB.length() != 8){
            int reste = 8 - ipSecondOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipSecondOctetToB = Integer.toString(i) + ipSecondOctetToB;
            }
        }
        if(ipThirdOctetToB.length() != 8){
            int reste = 8 - ipThirdOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipThirdOctetToB = Integer.toString(0) + ipThirdOctetToB;
            }
        }
        if(ipLastOctetToB.length() != 8){
            int reste = 8 - ipLastOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipLastOctetToB = Integer.toString(0) + ipLastOctetToB;
            }
        }

        convertisseur.ipConvertToBinary = ipFirstOctetToB+"."+ipSecondOctetToB+"."+ipThirdOctetToB+"."+ipLastOctetToB;
        System.out.println("L'ip en binaire est : "+convertisseur.ipConvertToBinary);
    }

    public static void maskToBinary(String maskInput) {

        String regex = "[.]";
        String[] ip = maskInput.split(regex);

        int ipFirstOctet = Integer.parseInt(ip[0]);
        int ipSecondOctet = Integer.parseInt(ip[1]);
        int ipThirdOctet = Integer.parseInt(ip[2]);
        int ipLastOctet = Integer.parseInt(ip[3]);

        String ipFirstOctetToB = Integer.toBinaryString(ipFirstOctet);
        String ipSecondOctetToB = Integer.toBinaryString(ipSecondOctet);
        String ipThirdOctetToB = Integer.toBinaryString(ipThirdOctet);
        String ipLastOctetToB = Integer.toBinaryString(ipLastOctet);

        if(ipFirstOctetToB.length() != 8){
            int reste = 8 - ipFirstOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipFirstOctetToB = Integer.toString(i) + ipFirstOctetToB;
            }
        }
        if(ipSecondOctetToB.length() != 8){
            int reste = 8 - ipSecondOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipSecondOctetToB = Integer.toString(i) + ipSecondOctetToB;
            }
        }
        if(ipThirdOctetToB.length() != 8){
            int reste = 8 - ipThirdOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipThirdOctetToB = Integer.toString(0) + ipThirdOctetToB;
            }
        }
        if(ipLastOctetToB.length() != 8){
            int reste = 8 - ipLastOctetToB.length();
            for (int i=0; i<= reste; i++) {
                ipLastOctetToB = Integer.toString(0) + ipLastOctetToB;
            }
        }

        convertisseur.maskConvertToBinary = ipFirstOctetToB+"."+ipSecondOctetToB+"."+ipThirdOctetToB+"."+ipLastOctetToB;

        System.out.println("Le Mask en binaire est : "+convertisseur.maskConvertToBinary);
    }

    public static void calculReseau(String ipInput){

        String[] ipArray = ipInput.split("[.]");

        // Instanciation de 4 variables, une par élément
        int ipFirstOctet = Integer.parseInt(ipArray[0]);
        int ipSecondOctet = Integer.parseInt(ipArray[1]);
        int ipThirdOctet = Integer.parseInt(ipArray[2]);

        System.out.println("L'adresse réseau de l'ip est : "+ipFirstOctet+"."+ipSecondOctet+"."+ipThirdOctet+"."+0);
    }

    public static void calculBroadcast(String ipInput, String ipConvertToBinary, String maskConvertToBinary){
        


    }
}
