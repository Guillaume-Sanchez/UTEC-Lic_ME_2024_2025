/*
Énoncé

Écrire 2 fonctions à un argument entier et une valeur de retour entière permettant de préciser si l’argument reçu est multiple de 2 (pour la première fonction) ou multiple de 3 (pour la seconde fonction).

Utiliser ces deux fonctions dans un petit programme qui lit un nombre entier et qui précise s’il est pair, multiple de 3 et/ou multiple de 6, comme dans cet exemple (il y a deux exécutions) : 

*/

#include <iostream>

using namespace std;

// variable globale 

int count = 0;

// Function declaration

int estMultiple2(int n);
int estMultiple3(int n);

int main(){

    int nombre(0);
    cout << "Entrer un nombre : ";
    cin >> nombre;
    if (estMultiple2(nombre)) {
            cout << "il est pair\n";
            if (estMultiple3(nombre)) {
                    cout << "il est multiple de 3 \n";
                    cout << "il est divisible par 6\n";
            }
    }
    else if (estMultiple3(nombre)) {
            cout << "il est multiple de 3 \n";
    }

    return 0;
}

// Fonction definition

int estMultiple2(int n){
        if(n % 2 == 0) return 1;
        else return 0;
}

int estMultiple3(int n){
        if(n % 3 == 0) return 1;
        else return 0;
}