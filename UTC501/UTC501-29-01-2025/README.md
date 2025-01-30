# ED 2 Elements d'arithmétiques

## Exercice 1


```
div 1555 = { 1, 3, 5, 7, 11, 3*5, 3*7, 3*11, 5*7, 5*11, 7*11, 3*5*7, 3*5*11, 3*7*11, 5*7*11, 1555 }
```

## Exercice 2

### 1 )

#### a = 43 | b = 16

```
43 = 2 * 16 + 11
16 = 1 * 11 + 5
11 = 2 * 5 + 1
5 = 5 * 1 + 0

PGCD = 1 on dit que 43 et 16 sont premiers entre eux
```

#### a = 44231 | b = 2750

```
44231 = 16 * 2750 + 231
2750 = 11 * 231 + 203
231 = 1 * 209 + 22
209 = 9 * 22 + 11
22 = 2 * 11 + 0

PGCD = 11
```

#### a = 6234 | b = 3312

```
6234 = 1 * 3312 + 2922
3312 = 1 * 2922 + 390
2922 = 7 * 390 + 192
390 = 2 * 192 + 6
192 = 32 * 6 + 0

PGCD = 6
```

### 2 )

`Dans ce cas la, ^ à la difference du dev veux dire PGCD et non pas "puissance"`

```
                6234 * 3312   6234 * 3312 
(6234 V 3312) = ----------- = ----------- = 1039 * 3312 = 3441168
                6234 ^ 3312        6               
```

## Exercice 3 

```
Appelons p le nombre de pièces max dans 1 sac.

7912 = q1 * p + 37 <- 37
59167 = q2 * p + r <- 42

Le reste est toujours inferieur au diviseur, donc 37 < p , 42 < p

Notons que 7912 - 37 = q1 p => 7875 = q1 p   } Donc le p cherché est parmi
          59167 - 42 = q2 p => 59125 = q2 p  } les diviseur communs 

le PGCD de 59125 et 7875 est 125 (faire l'algo d'eluclide)
on sait donc que 43 <= p <= 125

si on fait : 7912 = 63 * 125 + 37   
            59167 = 473 * 125 + 42

Donc p = 125 est une solution.

Or d'après le théormème p.28, tous les diviseurs de 59125 et 7875 sont des diviseurs de leur PGCD.

Donc il suffit de chercher les diviseurs de 125 :

div { 1 , 5, 5 * 5, 5 * 5 * 5 }

Donc p E div 125 et p < 42 => p = 125 est l'unique solution.

```

## Exercice 4



## Exercice 5

```
Il faut forcement au minimum avoir un nombre impaire.

3, 4 -> = 1 donc ils sont premier entre eux
8, 6 -> =/ 1 (=2)
13, 6 -> = 1 donc ils sont premier entre eux
8, 2 -> =/ 1 (=2)

Le mieu des 2 segments verts correspond à un nombre entier.
autrement dit :

Les segements qui ne passent pas des points de coordonnées entières sauf à la fin, sont des droites qui correspondent au nombres premiers entre eux : la droite (3, 4), la droite (13, 6)
```

## Exercice 6
