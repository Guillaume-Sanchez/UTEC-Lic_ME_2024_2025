#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

int main(){
    printf("La taille des pages sur ce syst�me est de : %d\n", getpagesize());
    exit(EXIT_SUCCESS);
}
