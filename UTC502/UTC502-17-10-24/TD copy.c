#include <stdio.h>
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <unistd.h>

typedef struct student {
    char nom[10];
    int note;
} eleve;

int main() {
    int fd, i, ret;
    eleve un_eleve;
    const char *filename = "students.dat"; // Change the filename as needed

    // Open the file for writing (create if it doesn't exist)
    fd = open(filename, O_CREAT | O_WRONLY | O_APPEND, S_IRUSR | S_IWUSR);
    if (fd == -1) {
        perror("prob open");
        return 1;
    }

    // Write student records to the file
    for (i = 0; i < 4; i++) {
        printf("Donnez le nom de l’élève \n");
        scanf("%s", un_eleve.nom);
        printf("Donnez la note de l’élève \n");
        scanf("%d", &un_eleve.note);
        if (write(fd, &un_eleve, sizeof(eleve)) == -1) {
            perror("prob write");
            close(fd);
            return 1;
        }
    }

    // Move to the beginning of the file to read records
    ret = lseek(fd, 0, SEEK_SET);
    if (ret == -1) {
        perror("prob lseek");
        close(fd);
        return 1;
    }
    printf("la nouvelle position est %d\n", ret);

    // Read and display student records
    for (i = 0; i < 4; i++) {
        if (read(fd, &un_eleve, sizeof(eleve)) == -1) {
            perror("prob read");
            close(fd);
            return 1;
        }
        printf("le nom et la note de l’élève sont %s, %d\n",
               un_eleve.nom, un_eleve.note);
    }

    close(fd);
    return 0;
}