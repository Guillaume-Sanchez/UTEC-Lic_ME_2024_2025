# TDs Classe Java Guillaume Sanchez

J'ai volontairement sur commenté pour expliquer mon code.

La lecture suit normalement les consignes données.

![Class_Eleve](https://image.noelshack.com/fichiers/2025/08/1/1739816455-class-eleve.png)

J'ai laissé l'arborescence afin de montrer que "gestionEleves" est bien un package. Il est importé dans App.java

![Class_App_Et_Arborescence](https://image.noelshack.com/fichiers/2025/08/1/1739816454-class-app-et-arborescence.png)

Voici ce que ce code retourne :

```
Jean (11.25)
[10, 15, 20, 5, 0, 0, 20, 20]
Jean
11.25
```

`Jean (11.25)` correspond à la ligne 14

`[10, 15, 20, 5, 0, 0, 20, 20]` correspond à la ligne 15

`Jean` correspond à la ligne 16

`11.25` correspond à la ligne 17

On observe que toutes les notes ont bien été ajoutées à “listesNotes”, que “getNom”, “getMoyenne”, “getListeNotes” fonctionne bien et que “ajouterNotes” modifie les notes négatives en 0 et les notes supérieures à 20 en 20.
