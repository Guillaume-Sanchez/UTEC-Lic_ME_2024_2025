Preparation partielle RSX 112 de cette apres midi, 3 partie, une partie question de cours sur 6 points, une partie etude de cas sur 6 points et une partie Projet sur 8 point le tout sur feuille avec droit au PC. Petit rappel de snotion : principe de Kerckoffs, une etrenrpuse utilis eun algorithme créer en interne, quels sont les rsiques ? reponses attendue : validation du principe de Kerckoffs, pas d'audit externe possible, failles potentielles non detecter, fausse impression de sécurité fonctions de Hachage, il peut y avoir 2 resultats identiques mais avec 2 entréer différentes ( exemple birthday attack )

 Algorithme de Hachage : SHA-256/512 c'est quoi le Hachage : il sert a quoi ? a verifier les sources, verifie l'intégriter. Comment on verifie cette intégrité sur un fihcier ? truc de base : parité il vas y avoir du PKI !!!!!!! 
 
 architecture PKI et tout Comment on certifie, comment on vérifie l'intégrité une machine genere des certificats et sont envoyé sur cahque UT qui en as besoin UT ou service d'ailleurs : DONC y a un echange de certificats entrre UT et serveur pour pouvoir ensuite valider le certificats et autorisé l'UT Vzlidaton de certificat : verifier la chaine, verifier les dates, verifier le domaine, verifier la revocation procédure renouvelle de certificat on aura des certificat a analyser on va faire une lecture a plat de l'infra pour le partielle Dernier sujet le plus important !!!!! architecture PKI pour SecureTech ( fictif j'imagine ) 200 employés 5 serveur web Je vais t'envoyer le PDF du prof qui recapitule tout, j'ai pass besoi d'une fiche de triche ou de revision Je veux que tu te prepare comme si tu allais le passer, comme sa dans l'aprem quand je vien te demander les réponses aux question tu es deja au courant,
2/2
ChatGPT a dit :
Parfait, je me prépare comme si j’étais à ta place pour le partiel RSX112 cet après-midi. Je vais me faire une fiche mentale rapide pour répondre efficacement à toutes les questions, que ce soit théorie, étude de cas ou projet PKI. Dès que tu m’envoies le PDF du prof, je l’intègre aussi dans ma révision interne. Voici déjà ce que j’ai en tête prêt à l’usage :
🔐 1. Notions théoriques (6 points)
🔸 Principe de Kerckhoffs
Un système de chiffrement doit rester sécurisé même si tout est connu… sauf la clé.
❌ Problème d’un algo interne :
Aucune revue externe → risques non détectés
Sécurité par l’obscurité ≠ vraie sécurité
⚠️ Fausse impression de sécurité
🔸 Fonctions de Hachage
Un algorithme qui produit une empreinte unique à partir d’une donnée.
Utilisation :
Vérifier l’intégrité des fichiers
Signature numérique
Authentification
Propriétés importantes :
Déterministe
Résistant aux collisions (mais… ⚠️ Birthday attack)
Non réversible
Exemples : SHA-256, SHA-512
🔍 Vérification d'intégrité :
Hash avant/après transfert
Vérification automatique par outils (ex : checksum md5sum, sha256sum)
⚠️ Parité est un exemple simple mais insuffisant pour sécurité réelle
🧾 2. Étude de cas (6 points)
⚙️ Exemple de certificat à analyser
Vérifier :
🔗 Chaîne de certification (ex. CA → intermediate → serveur)
📅 Validité (dates NotBefore / NotAfter)
🌐 Nom de domaine (CN, SAN)
❌ Révocation : CRL / OCSP
🔁 Renouvellement d’un certificat
Générer nouveau CSR
Signer par CA
Mettre à jour sur les serveurs/clients
⚠️ Attention aux interruptions de service si certif expiré
🏢 3. Projet : Architecture PKI pour SecureTech (8 points)
Contexte :
Entreprise de 200 employés
5 serveurs web
📐 Proposition d’architecture PKI :
```
luaCopierModifier                                   +--------------------+                                   |        Root CA     |  (offline)
                                   +---------+----------+                                             |
                                   +---------v----------+                                   |   Intermediate CA  |  (sign les certifs)
                                   +----+----------+----+                                        |          |
                    +------------------+          +------------------+                    |                                     |
          +---------v---------+                 +---------v---------+          |   Web Server 1    |      ...        |   Web Server 5    |
          +------------------+                 +------------------+
                    +-----------------+                    | Employé poste 1 |  → Certificat utilisateur
                    +-----------------+ 
```

🔒 Composants :
Root CA : autorité racine, stockée offline
Intermediate CA : en ligne, signe les certificats (web, employés)
Serveurs web : utilisent TLS (HTTPS)
Utilisateurs :
Certificat personnel
Authentification forte possible
Chiffrement des e-mails
🔄 Procédures :
Délivrance : CSR → Intermediate CA
Stockage clés privées sécurisé (HSM recommandé)
Revocation : liste CRL + OCSP
Renouvellement : automatisé (via certbot ou outil interne)
Quand tu veux, tu me balances les questions du partiel, ou même juste des extraits du sujet ou du PDF du prof. Je serai prêt à dégainer.
💻 Tu peux aussi me demander de te faire un schéma si besoin pour la PKI ou pour expliquer une vérif de certificat !
 
Vous avez dit :
 
RSX112-Securite-des-Reseaux.pdf
PDF
voila le fichier
 
ChatGPT a dit :
 
Merci pour le fichier, je l’ai entièrement lu et intégré. Voici un récap express de tout ce que je garde en tête, prêt à te répondre cet après-midi. Je me suis mis en mode "partiel RSX112 activé" :
🧠 STRUCTURE MÉMO TECH (RSX112) – 100% PRÊT POUR TON EXAM
🔹 Partie 1 – Questions Théoriques (6 pts)
✅ Principe de Kerckhoffs
La sécurité ne repose que sur la clé, pas l’algorithme.
Si algo interne secret → ❌ : pas d’audit, failles invisibles, sécurité illusoire.
✅ Fonction de Hachage
Unidirectionnelle, résiste aux collisions (birthday attack).
SHA-256 / SHA-3 = 🔒 sécurisé
MD5 / SHA-1 = ❌ obsolètes
Utilités :
Signature numérique
Intégrité des fichiers
Authentification
✅ Hash ≠ chiffrement
Le hash ne se déchiffre pas.
⚠️ Fréquente confusion à éviter à l’oral/écrit.
🔹 Partie 2 – Étude de Cas Pratique (6 pts)
🔍 Analyser un certificat X.509
CA:FALSE → Certif final
Key Usage: digitalSignature, keyEncipherment
Extended Usage: TLS Web Server Auth
SAN : plusieurs domaines
🔎 Vérifications à faire :
🔗 Chaîne valide (Root → Intermédiaire → Certif)

📅 Dates OK ?
🌍 Domaine correspond ?
❌ Révocation ? (CRL / OCSP)
✍️ Signature valide ?
🛠️ Commandes OpenSSL

Lire : openssl x509 -in cert.pem -text -noout
Générer clé : openssl genrsa -out key.pem 2048
CSR : openssl req -new -key key.pem -out csr.pem
Signer : openssl x509 -req ...
🔹 Partie 3 – Projet PKI SecureTech (8 pts)
📋 Contexte
200 employés
5 serveurs web
Email S/MIME, VPN, signature code
🧱 Architecture PKI proposée
```
scssCopierModifier[Root CA SecureTech]  (offline, HSM, 20 ans)
     │[Issuing CA] (10 ans, online)
 ├── [TLS CA]      → 5 serveurs web (certif 1 an)
 ├── [User CA]     → 200 employés (certif 2 ans)
 ├── [Code CA]     → Signature de code (certif 3 ans)
 └── [Device CA]   → VPN ou devices internes
```

🔐 Sécurisation Root CA
Hors ligne, HSM, salle sécurisée, backups en coffre, cérémonie de clé (3 pers.)
♻️ Renouvellement Certificat
Nouvelle paire de clés (recommandé)
CSR → CA
Installation et test AVANT expiration
⚠️ Automatiser (Let’s Encrypt pour les web par ex.)
⚠️ À ne pas oublier
CRL ≠ OCSP → vérifier statut de révocation
Signature ≠ chiffrement
PKI = 20% technique, 80% process (orga, contrôle, doc, audits…)
💡 CONSEILS POUR L’EXAM
⚠️ Ne JAMAIS mélanger signature et chiffrement
Répondre avec définitions claires + explications + exemples concrets
Exemples attendus : certif TLS avec SAN, SHA-256 vs SHA-1, rôle Root/Intermédiaire, CRL vs OCSP
Tu peux venir dans l’après-midi me balancer les questions de ton sujet comme tu veux, je suis chargé à bloc pour te répondre vite et bien.
👊 Bonne chance et reviens vite me tester

b) Vérification de la chaîne de confiance
Le navigateur vérifie que le certificat du site peut être reliée à une autorité de certification racine (CA) de confiance :

Le navigateur commence par le certificat du site.

Il remonte la chaîne des certificats intermédiaires.

Il cherche une autorité racine dans sa liste de CAs de confiance intégrée.

👉 Si la chaîne est incomplète ou si un certificat est invalide, la validation échoue.

🔹 c) Validation de la signature
Pour chaque certificat de la chaîne :

Le navigateur vérifie la signature numérique faite par le certificat supérieur.

Cela garantit que chaque certificat a bien été émis par une autorité de confiance.

🔹 d) Vérification de la validité temporelle
Chaque certificat a :

Une date de début de validité

Une date d’expiration

Le navigateur vérifie que la date actuelle est comprise dans cette période.

🔹 e) Vérification du nom de domaine
Le champ CN (Common Name) ou SAN (Subject Alternative Name) du certificat doit correspondre exactement au nom du site web demandé (ex. example.com).

🔹 f) Révocation du certificat
Le navigateur vérifie que le certificat n’a pas été révoqué à l’aide de :

CRL (Certificate Revocation List) : liste de certificats révoqués.

OCSP (Online Certificate Status Protocol) : vérification en ligne du statut.

(Parfois cette étape est ignorée ou désactivée pour des raisons de performance ou confidentialité.)

✅ Si tout est valide...
Le navigateur :

Affiche un cadenas 🔒 dans la barre d'adresse

Et établit une connexion HTTPS sécurisée (via le protocole TLS)

❌ Si une erreur est détectée...
Le navigateur affiche une alerte de sécurité (ex. : certificat expiré, auto-signé, domaine non valide, etc.) et empêche l'accès au site, sauf si l'utilisateur décide de continuer (déconseillé).

📌 Résumé visuel du processus :
🔄 Le serveur envoie le certificat + chaîne

🔐 Le navigateur vérifie la signature

⏰ Il vérifie les dates de validité

🌐 Il vérifie que le domaine correspond

🚫 Il vérifie la révocation

✅ Si tout va bien, il affiche 🔒 et établit TLS

```
                           [Root CA - SecureTech]
                          (Offline | HSM | 20 ans)
                                   │
                 ┌────────────────┴────────────────┐
                 │                                 │
        [Issuing CA - TLS]                [Issuing CA - Divers]
         (Online | 10 ans)                      (Online | 10 ans)
                 │                                 │
        ┌────────┼────────┐            ┌───────────┼───────────┐
        │        │        │            │           │           │
   [TLS CA] [User CA] [Code CA]   [Device CA]   ...autres     ...
    (5 ans)   (5 ans)   (5 ans)     (5 ans)                     

```
