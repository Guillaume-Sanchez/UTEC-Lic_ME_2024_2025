/*

Énoncé

Transformer le programme (fonction + main) écrit dans l’exercice précédent de manière que la fonction ne dispose plus que de 2 arguments, le caractère indiquant la nature de l’opération à effectuer étant précisé, cette fois, à l’aide d’une variable globale.

*/

#include <iostream>

using namespace std;

// variable globale 

char operateur;

// Function declaration

void fonction1(float float1, float float2);

int main(){

    float float1;
    float float2;

    cout<<"Tapez un premier entier : "; cin>>float1;
    cout<<"Tapez un second entier : "; cin>>float2;
    cout<<"Tapez l'opérations voulu : "; cin>>::operateur;

    fonction1(float1, float2);

}

// Fonction definition

void fonction1(float float1, float float2){

    switch (::operateur)
    {
    case '+':
        std::cout << float1 + float2 << std::ends;
            std::cout << "\n" << std::ends;
        break;
    case '-':
        std::cout << float1 - float2 << std::ends;
        std::cout << "\n" << std::ends;
        break;
    case '*':
        std::cout << float1 * float2 << std::ends;
        std::cout << "\n" << std::ends;
        break;
    case '/':
        std::cout << float1 / float2 << std::ends;
        std::cout << "\n" << std::ends;
        break;
    default:
        std::cout << "nique ta mère \n" << std::ends;
    }
}
