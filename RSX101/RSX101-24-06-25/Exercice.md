# Exercice QoS

## Exercice 1 : Mise en œuvre de la QoS dans un routeur 

### Question 1 : 

- Entête IP : 46 80 00 20 00 00 40 00 01 02 42 AD C0 A8 01 01 E0 00 00 01  94 04 00 00
- Adresse Eternet Destination : 01 00 5E 00 00 01
- Adresse Eternet Source : A4 08 F5 61 5d 1f
- protocole IP : 4 donc IPv4
- longueur de l'entête IP : 6*4 donc 24 octets
- IP source et destination en hexadécimal :
    - source : C0 A8 01 01
    - destination : E0 00 00 01
- longueur totale du datagramme en décimal : 0020 -> 2*16 + 0 donc 32 octets 

### Question 2 :

Non , Classe 4, si on suit la logique du tableau, on peut voir qu'il est en dessous du Low (voir correction)

### Question 3 :

#### Ingress

```
____

4 9 3 12
_____

8 5
_____

10
_____


_____


_____


_____

11 7 6 2 1
_____
```
------------------------->
11, 7, 12, 6, 9, 2, 8, 4, 1, 10, 5, 3
------------------------->

#### Egress

```
____

4 9 3 12
_____

8 5
_____

10
_____


_____


_____


_____

11 7 6 2 1
_____
```
------------------------->
11, 7, 6, 2, 8, 1, 10, 5, 12, 9, 4, 3
------------------------->

### Question 4



## Exercice 2 Voix QoS

### Question 1

## Exercice 3 Réseau IP et QoS

### Question 1


