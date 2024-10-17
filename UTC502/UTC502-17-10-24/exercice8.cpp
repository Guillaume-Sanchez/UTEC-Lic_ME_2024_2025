/*

Énoncé

Écrire une fonction permettant d’ajouter une valeur fournie en argument à une variable fournie également en argument. Par exemple, l’appel (n et p étant entiers) :

ajouter (2*p+1, n) ;

ajoutera la valeur de l’expression 2*p+1 à la variable n.
Écrire un petit programme de test de la fonction.

*/

#include <iostream>

using namespace std;

// Function declaration

void ajouter(int p, int n);

int main(){
    ajouter(2*3+1, 2);
}

// Fonction definition

void ajouter(int p, int n){
    int toto = p + n; 
    cout << toto << "\n";
}

