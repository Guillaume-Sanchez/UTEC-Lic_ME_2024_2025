# TD Processus et ordonnancement

## A Processus Linux

`essai.c :`

```
#include <stdio.h>
#include <unistd.h>

int main(){
    
    int pid;
    pid = fork();
    
    if (pid == 0){for(;;)
        printf ("je suis le fils\n");
    }
    else{for(;;)
        printf("je suis le père\n");
    }
}
```

### 1) On compile ce programme pour générer un exécutable appelé essai dont on lance l’exécution. La commande ps –l permettant d’afficher les caractéristiques de l’ensemble des processus de l’utilisateur donne les éléments suivants :

`./essai`


```
...

je suis le père
je suis le fils
je suis le père
je suis le fils
je suis le père
je suis le fils
je suis le père
je suis le fils
je suis le père

...
```

`ps -efl :`

```
user@debian-cli:~$ ps -efl | grep essai
0 S user        4150    1942 12  80   0 -   615 file_t 09:25 pts/0    00:00:00 ./essai
1 S user        4151    4150 12  80   0 -   615 wait_w 09:25 pts/0    00:00:00 ./essai
0 S user        4153    4031  0  80   0 -  1583 pipe_r 09:25 pts/5    00:00:00 grep essai
```

`user@debian-cli:~$ kill -9 4151`

`user@debian-cli:~$ ps -efl | grep essai`

```
...

je suis le père
je suis le père
je suis le père
je suis le père
je suis le père
je suis le père
je suis le père
je suis le père
je suis le père

...
```

`user@debian-cli:~$ ps -efl | grep essai`
```
0 S user        4150    1942  7  80   0 -   615 wait_w 09:25 pts/0    00:00:36 ./essai
1 Z user        4151    4150  5  80   0 -     0 -      09:25 pts/0    00:00:27 [essai] <defunct>
0 S user        4249    4031  0  80   0 -  1583 pipe_r 09:34 pts/5    00:00:00 grep essai
```

### 3) Le programme essai.c est modifié :

```
#include <stdio.h>
#include <unistd.h>

int main(){
    int pid;
    pid = fork();
    if (pid == 0){for(;;)
        printf ("je suis le fils\n");
    }
    else{
        printf("je suis le père\n");
        int wait();
    }
}
```

`./essai2`

```
...

je suis le fils
je suis le fils
je suis le fils
je suis le fils
je suis le fils
je suis le fils
je suis le fils

...
```

`ps -lef | grep essai`

```
user@debian-cli:~/Documents/TD/TD_Processus_et_ordonnancement$ ps -lef | grep essai
1 S user        4841    1519 17  80   0 -   615 wait_w 09:47 pts/5    00:00:05 ./essai2
0 S user        4852    1942  0  80   0 -  1583 pipe_r 09:47 pts/0    00:00:00 grep essai
```

`kill -9 4841`

`ps -lef | grep essai`

```
user@debian-cli:~/Documents/TD/TD_Processus_et_ordonnancement$ ps -lef | grep essai
0 S user        4906    1942  0  80   0 -  1583 pipe_r 09:52 pts/0    00:00:00 grep essai
```

