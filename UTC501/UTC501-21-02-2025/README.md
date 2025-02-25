L'exercice 3 aborde la méthode des moindres carrés et l'équation normale, qui sont des techniques utilisées pour résoudre des systèmes d'équations linéaires qui ont plus d'équations que d'inconnues.

```
### Partie a) : Résolution du système \( Ax = b \)

1. **Données**:
   - Matrice \( A \) :
     \[
     A = \begin{pmatrix}
     1 & 0 \\
     0 & 1 \\
     1 & 1
     \end{pmatrix}
     \]
   - Vecteur \( b \) :
     \[
     b = \begin{pmatrix}
     2 \\
     2 \\
     1
     \end{pmatrix}
     \]

2. **Système à résoudre** : 
   \[
   Ax = b
   \]

3. **Méthode de Gauss-Jordan** :
   - Ce système n'a pas une solution exacte car il y a plus d'équations que d'inconnues (3 équations, 2 inconnues). On dit que le système est surdéterminé.

### Partie b) : Méthode des moindres carrés

1. **Objectif** : Trouver un vecteur \( x \) qui minimise l'erreur entre \( Ax \) et \( b \).

2. **Équation normale** :
   - Pour minimiser l'erreur \( \|Ax - b\|^2 \), nous résolvons :
     \[
     A^T A x = A^T b
     \]
   - Calcul de \( A^T \) (la transposée de \( A \)) :
     \[
     A^T = \begin{pmatrix}
     1 & 0 & 1 \\
     0 & 1 & 1
     \end{pmatrix}
     \]
   - Calcul de \( A^T A \) :
     \[
     A^T A = \begin{pmatrix}
     2 & 1 \\
     1 & 2
     \end{pmatrix}
     \]
   - Calcul de \( A^T b \) :
     \[
     A^T b = \begin{pmatrix}
     3 \\
     3
     \end{pmatrix}
     \]

3. **Résolution de l'équation normale** :
   \[
   \begin{pmatrix}
   2 & 1 \\
   1 & 2
   \end{pmatrix}
   \begin{pmatrix}
   x_1 \\
   x_2
   \end{pmatrix}
   =
   \begin{pmatrix}
   3 \\
   3
   \end{pmatrix}
   \]
   Après résolution, nous trouvons :
   \[
   x_1 = 1, \quad x_2 = 1
   \]

### Partie c) : Calcul de \( x_0 \) et projection de \( b \) sur \( P \)

1. **Calcul de \( x_0 \)** :
   - \( x_0 = 1 - x_1 - x_2 = 1 - 1 - 1 = -1 \)

2. **Projection de \( b \) sur \( P \)** :
   - Le point projeté est donné par la combinaison linéaire \( x_0 A_0 + x_1 A_1 + x_2 A_2 \).
   - Avec les valeurs trouvées :
     \[
     \begin{pmatrix}
     -1 \\
     0 \\
     0
     \end{pmatrix}
     +
     \begin{pmatrix}
     0 \\
     1 \\
     0
     \end{pmatrix}
     +
     \begin{pmatrix}
     0 \\
     0 \\
     1
     \end{pmatrix}
     =
     \begin{pmatrix}
     -1 \\
     1 \\
     1
     \end{pmatrix}
     \]

Cela signifie que le point \( b = \begin{pmatrix} 2 \\ 2 \\ 2 \end{pmatrix} \) est projeté sur le plan \( P \) au point \( \begin{pmatrix} -1 \\ 1 \\ 1 \end{pmatrix} \).
```