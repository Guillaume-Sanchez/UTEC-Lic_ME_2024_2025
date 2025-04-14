# TP 2 : Guillaume Sanchez

def rot13_conversion(message):
    result = "" # instentation d'une varable vide qui contiendra le résultat
    for char in message: # pour tous caractère dans l'argument message
        if char.isalpha(): # verification si la chaîne est constituée d'alphabets
            shift = 13 # instentation d'une variable qui contient le nomebre de décalage
            base = ord('A') if char.isupper() else ord('a') # instentation d'une variable qui contient le code ASCII de 'A' ou 'a' selon la casse
            # Return du calcul du nouveau caractère en appliquant le décalage
            # ord(char) - base : décalage par rapport à 'A' ou 'a'
            # (ord(char) - base + shift) % 26 + base: décalage circulaire dans l'alphabet
            result += chr((ord(char) - base + shift) % 26 + base)
        else:
            result += char # Si ce n'est pas un alphabet, on le garde tel quel
    return result

def main(): # Fonction Principal 
    print("=== ROT13 : Codage / Décodage ===") # Affichage du nom du programme
    print("1. Coder un message") # Affichage du choix 1
    print("2. Décoder un message") # Affichage du choix 2
    choix = input("Votre choix (1 ou 2) : ").strip() # Recupération de la valeur choisi dans une variable

    if choix not in ['1', '2']: # Gestion d'erreur (si ce n'est pas 1 ou 2)
        print("Choix invalide. Veuillez entrer 1 ou 2.") # affichage message erreur
        return

    message = input("Entrez votre message : ") # Recupération du message dans une variable
    resultat = rot13_conversion(message) # Utilisation de la fonction "rot13_conversion" avec comme argument "message" et recupération du résultat dans une variable
    print("\nMessage transformé :") 
    print(resultat) # Affichage du résultat de la fonction rot13_conversion.

if __name__ == "__main__":
    main()
    