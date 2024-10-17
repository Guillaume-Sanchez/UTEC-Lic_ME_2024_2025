/****************************************************************/
/* Exemple de manipulation d’un fichier: */
/* création, positionnement, fermeture */
/****************************************************************/
#include <stdio.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <unistd.h>
typedef struct student
{
    char nom[10];
    int note;
} eleve;
int main() 
{
    
    int fd, i, ret;
    eleve un_eleve;
    fd = open("./eleves.txt", O_CREAT | O_WRONLY | O_APPEND, S_IRUSR | S_IWUSR);
    if (fd == -1)
        perror("prob open");
    i = 0;
    while (i < 4)
    {
        printf("Donnez le nom de l’élève \n");
        scanf("%s", un_eleve.nom);
        printf("Donnez la note de l’élève \n");
        scanf("%d", &un_eleve.note);
        write(fd, &un_eleve, sizeof(eleve));
        i = i + 1;
    }
    ret = lseek(fd, 0, SEEK_SET);
    if (ret == -1)
        perror("prob lseek");
    printf("la nouvelle position est %d\n", ret);
    i = 0;
    while (i < 4)
    {
        read(fd, &un_eleve, sizeof(eleve));
        printf("le nom et la note de l’élève sont %s, %d\n",
               un_eleve.nom,
               un_eleve.note);
        i = i + 1;
    }
    close(fd);
    return 0;
}