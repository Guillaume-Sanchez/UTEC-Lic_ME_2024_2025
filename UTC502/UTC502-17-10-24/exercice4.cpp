/*
Énoncé

Écrire une fonction qui reçoit en arguments 2 nombres flottants et un caractère, et qui fournit un résultat correspondant à l’une des 4 opérations appliquées à ses deux premiers arguments, en fonction de la valeur du dernier, à savoir : addition pour le caractère +, soustraction pour -, multiplication pour * et division pour / (tout autre caractère que l’un des 4 cités sera interprété comme une addition). On ne tiendra pas compte des risques de division par zéro.

Écrire un petit programme (main) utilisant cette fonction pour effectuer les 4 opérations sur les 2 nombres fournis en donnée. 
*/

#include <iostream>

using namespace std;

// Function declaration

void fonction1(float float1, float float2, char char1);

int main(){

    float float1;
    float float2;
    char char1;

    cout<<"Tapez un premier entier : "; cin>>float1;
    cout<<"Tapez un second entier : "; cin>>float2;
    cout<<"Tapez l'opérations voulu : "; cin>>char1;

    fonction1(float1, float2, char1);

}

// Fonction definition

void fonction1(float float1, float float2, char char1){

    switch (char1)
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

