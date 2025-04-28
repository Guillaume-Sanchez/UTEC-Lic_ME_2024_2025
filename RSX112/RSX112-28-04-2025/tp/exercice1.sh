#!/bin/bash

# Liste des utilisateurs à créer
tab_user=('yannick' 'eulalie' 'jean' 'justine' 'pierre' 'sandrine' 'cecile' 'michel')

# Boucle pour créer chaque utilisateur
for user in "${tab_user[@]}"
do 
    # Création de l'utilisateur
    useradd -m -s /bin/bash $user
    echo -e "$user\n$user" | passwd $user
    echo "Utilisateur $user créé avec succès avec le mot de passe par défaut."
done

