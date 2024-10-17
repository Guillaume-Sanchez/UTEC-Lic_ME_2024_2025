/*

Énoncé

Écrire une fonction, sans argument ni valeur de retour, qui se contente d’afficher, à chaque appel, le nombre total de fois où elle a été appelée sous la forme :

appel numéro 3

*/

#include <iostream>

using namespace std;

// variable globale 

int count = 0;

// Function declaration

void fonction1();

int main(){

    char input;
    cout<<"Voulez vous appeler la fonction ? o/n : "; cin>>input;

    while (input == 'o')
    {
        fonction1();
        cout<<"Voulez vous de nouveau appeler la fonction ? o/n : "; cin>>input;
    }

    std::cout << "Vous avez tapez autre chose que 'o', Fin du programe \n" << std::ends;
    return 0;
}

// Fonction definition

void fonction1(){
    ::count = ::count +1;
    std::cout << "appel numéro " << ::count << "\n" << std::ends;
}
