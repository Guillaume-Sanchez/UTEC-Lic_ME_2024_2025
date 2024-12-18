# TD2-Boucle

>Guillaume Sanchez

## Exercice 1 

écrire un programme affichant la table de multiclication d'un nombre saisi par l'utilisateur

```
import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner sc = new Scanner(System.in);
        System.out.print("Entrez le chiffre que vous voulez : ");
        int num = sc.nextInt();

        for(int i = 1; i <= 10; i++ ){
            System.out.println(num + " x " + i + " = " + num*i);
        }
    }
}
```

Le résultat de ce code :

```
Entrez le chiffre que vous voulez : 3
3 x 1 = 3
3 x 2 = 6
3 x 3 = 9
3 x 4 = 12
3 x 5 = 15
3 x 6 = 18
3 x 7 = 21
3 x 8 = 24
3 x 9 = 27
3 x 10 = 30
```

## Exercice 2

Écrire un programme affichant les tables de multiplications des nombres de 1 à 10 dans un tableau à deux entrées.

```
public class App {
    public static void main(String[] args) throws Exception {

        for(int a=1; a<=10; a++){
            System.out.print(a + " : ");
            for(int b=1; b<=10;b++){
                System.out.print(a*b + ", " );
            }
            System.out.println();
        }
    }
}
```

Le résultat de ce code :

```
1 : 1 2 3 4 5 6 7 8 9 10 
2 : 2 4 6 8 10 12 14 16 18 20 
3 : 3 6 9 12 15 18 21 24 27 30 
4 : 4 8 12 16 20 24 28 32 36 40 
5 : 5 10 15 20 25 30 35 40 45 50 
6 : 6 12 18 24 30 36 42 48 54 60 
7 : 7 14 21 28 35 42 49 56 63 70 
8 : 8 16 24 32 40 48 56 64 72 80 
9 : 9 18 27 36 45 54 63 72 81 90 
10 : 10 20 30 40 50 60 70 80 90 100 
```

## Exercice 3

Écrire un programme demandant à l’utilisateur de saisir deux valeurs numériques b et n (vérifier que n est positif) et affichant la valeur bn.

```
public class App {
    public static void main(String[] args) throws Exception {
        
        Scanner sc = new Scanner(System.in);
        System.out.print("Entrez le premier chiffre que vous voulez (b) : ");
        int b = sc.nextInt();

        int n;
        do{
            System.out.print("Entrez le second chiffre que vous voulez (n), il doit être positif : ");
            n = sc.nextInt();
        // Vérification à effectuer pour savoir si "n" est positif, sinon on repart au "do"
        } while (n < 0);

        System.out.println(b + " * " + n + " = " + b*n);
    }
}
```

Le résultat de ce code dans le cas ou "n" est positif :

```
Entrez le premier chiffre que vous voulez (b) : 3
Entrez le second chiffre que vous voulez (n), il doit être positif : 4
3 * 4 = 12
```

Le résultat de ce code dans le cas ou "n" est négatif, le programme revient au choix de "n" :

```
Entrez le premier chiffre que vous voulez (b) : 6
Entrez le second chiffre que vous voulez (n), il doit être positif : -6
Entrez le second chiffre que vous voulez (n), il doit être positif : 6
6 * 6 = 36
```

## Exercice 4

Ecrire un programme demandant la saisi d'une valeur `n` et affichant le carré suivant (n = 5 dans cette exemple):

xxxxx

xxxxx

xxxxx

xxxxx

xxxxx

```
import java.util.Scanner;

public class App {
    public static void main(String[] args) throws Exception {

        Scanner sc = new Scanner(System.in);
        System.out.print("Entrez le chiffre que vous voulez : ");
        int num = sc.nextInt();

        for(int x = 1; x <= num; x++){
            for(int y = 1; y <= num ; y++){
                System.out.print('x');
            }
            System.out.println();
        }
    }
}
```

Le résultat de ce code :

```
Entrez le chiffre que vous voulez : 3
xxx
xxx
xxx
```