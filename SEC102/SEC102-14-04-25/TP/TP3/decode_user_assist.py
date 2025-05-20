# TP 3 : Guillaume Sanchez

import winreg

def get_userassist_data(filename):
    output = []
    try:
        userassist_base = r"Software\Microsoft\Windows\CurrentVersion\Explorer\UserAssist"
        with winreg.OpenKey(winreg.HKEY_CURRENT_USER, userassist_base) as base_key:
            for i in range(winreg.QueryInfoKey(base_key)[0]):
                guid_name = winreg.EnumKey(base_key, i)
                sub_key_path = f"{userassist_base}\\{guid_name}\\Count"
                try:
                    with winreg.OpenKey(winreg.HKEY_CURRENT_USER, sub_key_path) as count_key:
                        output.append(f"[{guid_name}]")
                        for j in range(winreg.QueryInfoKey(count_key)[1]):
                            value_name, value_data, _ = winreg.EnumValue(count_key, j)
                            output.append(f"{value_name} = {value_data}")
                        output.append("")  # Ligne vide pour séparer les blocs
                        with open(filename, 'w', encoding='utf-8') as f:
                            for line in output:
                                f.write(line + "\n")
                except FileNotFoundError:
                    continue
    except Exception as e:
        output.append(f"Erreur : {str(e)}")
    return output

def convert_file_lines_to_rot13(input_file, output_file):
    with open(input_file, 'r', encoding='utf-8') as infile, open(output_file, 'w', encoding='utf-8') as outfile:
        for line in infile:
            if " = " in line:
                key, value = line.split(" = ", 1)
                key_rot13 = rot13_conversion(key)
                outfile.write(f"{key_rot13} = {value}")
            else:
                # lignes comme [GUID] ou lignes vides restent inchangées
                outfile.write(line)
                
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

if __name__ == "__main__":
    # Étape 1 : Extraction des données brutes
    data = get_userassist_data("userassist.txt")
    # save_to_file("userassist.txt", data)
    print(f"Fichier 'userassist.txt' généré avec succès.")

    # Étape 2 : Conversion partielle ROT13 sur noms des clés
    convert_file_lines_to_rot13("userassist.txt", "decode_userassist")
    print(f"Fichier 'decode_userassist' généré avec succès.")