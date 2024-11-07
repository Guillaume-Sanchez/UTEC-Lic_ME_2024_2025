Scripts simples - variables utilisateur et variables globales

    Durée : 15 minutes

1. Créez un alias cx dont le contenu permet de rendre un fichier exécutable. Comment pouvez-vous rendre cet alias permanent pour toutes les sessions ?
2. Créez un fichier nommé affiche renfermant les commandes suivantes :

```
#!/bin/bash
 
# La première ligne indique au système que /bin/bash est le programme
# shell à utiliser pour exécuter les commandes du script.
 
# Affiche deux chaînes de caractères
 
echo "Mon premier script shell"
echo "Chaque ligne du fichier est une commande"
 
# Le script retourne 0, valeur synonyme de succès.
exit 0
```

3. Après avoir saisi le script et l'avoir enregistré, n'oubliez pas de le rendre exécutable à l'aide de l'alias créé précédemment.

cx affiche 

4. Pour exécuter le script, tapez la commande suivante :

./affiche 

5. Créez un script nommé afficheVarEnv qui affiche le contenu des variables d'environnement suivantes : HOME, PATH, USER et PWD. Chaque contenu devra être précédé d'un commentaire correspondant à l'intitulé de la variable. Exécutez ce script.

6. Créez un script nommé varLocGlob renfermant les commandes suivantes :

```
#!/bin/bash
 
# Manipulation de variables locales et globales
 
echo "Mon répertoire de connexion est : $HOME"
echo "Mon nom de connexion est : $(logname) "
echo "Nous sommes le : `date +%D`"
 
Nom=Torvalds
Prenom=Linus
echo "Linux a été créé par $Nom $Prenom à l'université d'Helsinki."
exit 0
```
⇒ Exécutez le script.

7. Créez un script nommé varLocGlob1 qui effectue les opérations suivantes :

    Affiche le contenu du répertoire coutant.
    Affiche le shell de l'utilisateur.
    Affiche le nom de la machine.
    Définir une variable appelée os contenant le nom du système d'exploitation.
    Définir une variable appelée ver contenant le numéro de version su système d'exploitation.
    Afficher le contenu des deux variable os et ver.

    Consultez la page du manuel de la commande alias.
    Utilisez la commande chmod avec l'option adéquate.
    Si vous n'avez pas de répertoire courant (.) dans votre PATH, le ./ devant le nom du script est indispensable, sinon il suffit de taper directement le nom du script.
    Utiliszez la commande uname avec les options adéquates.