/*
Énoncé

Écrire :

- une fonction, nommée f1, se contentant d’afficher « bonjour » (elle ne possédera aucun argument, ni valeur de retour) ;
- une fonction, nommée f2, qui affiche « bonjour » un nombre de fois égal à la valeur reçue en argument (int) et qui ne renvoie aucune valeur ;
- une fonction, nommée f3, qui fait la même chose que f2, mais qui, de plus, renvoie la valeur (int) 0.

Écrire un petit programme appelant successivement chacune de ces 3 fonctions, après les avoir convenablement déclarées (on ne fera aucune hypothèse sur les emplacements relatifs des différentes fonctions composant le fichier source).
*/

#include <iostream>

using namespace std;

// Function declaration

void f1();
void f2(int nombreDeFoisBonjour);
int f3(int nombreDeFoisBonjour);

int main() {
    f1();
    f2(3);
    f3(2);
}

// Fonction definition

void f1(){
    std::cout << "Bonjour \n" << std::ends;
}

void f2(int nombreDeFoisBonjour){

    for(int i = 0; i < nombreDeFoisBonjour; i++){
        std::cout << "Bonjour f2 \n" << std::ends;
    }

}

int f3(int nombreDeFoisBonjour){

    for(int i = 0; i < nombreDeFoisBonjour; i++){
        std::cout << "Bonjour f3 \n" << std::ends;
    }   
    
    return 0;
    
}