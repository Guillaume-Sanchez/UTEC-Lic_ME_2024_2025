#!/usr/bin/python3

nbDecimal = int(input("Donner un nombre entier à convertir en binaire : "))
nbBinaire = []

tmp = nbDecimal

while tmp != 0:
    reste = tmp % 2
    nbBinaire.append(reste)
    tmp = tmp // 2
nbBinaire.reverse()
print("({})b10 = ({})b2".format(nbDecimal, nbBinaire))
