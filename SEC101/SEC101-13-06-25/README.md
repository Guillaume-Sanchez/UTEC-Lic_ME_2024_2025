# SEC101 13 06 25

## OIV -> Opérateurs d'importance Vitale

https://openclassrooms.com/fr/courses/2222496-centralisez-et-securisez-votre-annuaire-active-directory

## Concepts Fondamentaux du risque :

### Définitions :

- ISO 31000 : Effet de l'incertitude sur l'atteinte des objectifs
- Formule classique : Risque = Probabilité * Impact
- Vision moderne : Risque = Menace * Vulnérabilité * Impact

### Gestion des Risques

- Processus d'identification, d'évaluation et de traitement des risques
- Approche systématique et continue
- Intégration dans la gouvernance organisationnelle

### Analyse des Risques

- Phrase du precessus de gestion des risques
- Compréhension détaillée de la nature du risque
- Estimation du niveau de risque

## Classification des Risques 

### Par nature :

- Risques Stratégiques -> business
- Risques opérationnels
- Risques techniques
- Risques réglemettaires

### Par Origine :

- Risques internes
- Risques externes
- Risques mixtes

## Cycle de vie standard (ISO 31000)

Contexte -> Surveillance et revenue -> Traitement des risques -> identification des risques -> Analyse des risques -> Evaluations des risques

## Communication et consultation 

- Parties prenantes 
- Modalités

## EBIOS Risk Manager

- Cadrages et socles de sécurité
- Source de risque
- Scénarios stratégiques
- Scénarios opérationnels
- Traitement du risque

Aventage : 

- Moderne
- prise en compte du contexte métier
- méthode francaise 
- gratuite

Limites : 

- Compexité de mise en oevure
- Necessite une expertise importante 
- chronophage 
- moins connue à l'internationnal

## MEHARI

- Classification des enjeux
- Odit de mesure
- Analyse de l'odit (des risques)
- Plan de sécrité

Avantage :

- Approche quantitative
- Base de connaissance riche
- Claculs automatisés
- Résultat reproductibles
- Suivi dans le temps facilité

Limite

- Complexité de paramétrage

## OCTAVE Allegro

## NIST Risk Management Framework

- Stratégie organisationnelle de gestion des risques
- Classification
- Selection de sécurité
- Déploiement des controles
- Test d'efficacité 
- Décision d'acceptation du risuqe
- Surveillance continu

> ISO 27005 

## FAIR 

- Risk = TEF * LEM
- TEF = Threat Event Frequency
- LEM = Loss event magnitude

## AMDEC

- Préparation
    - Constitution d'equipe
    -  Définition du perimètre
    - Décomposition fonctionnelle
- Analyse
    - identifiaction des modes de défaillance
    - Analyse des causes
    - Evaluation des effet
- Evaluation
    - Gravité (G)
    - Occurence (O)
    - Détéction (D)
    - Critcité = G * O * D
- Actions
    - priorisation selon  criticité
    - plan d'action correctives
    - Suivi et mise à jour



# Etude de cas 

## Lab 1 : Analyse EBIOS Express

> Objectif : Réaliser une analyse EBIOS simplifiée de l’Active Directory (AD)

### Identifier 5 valeurs métier critiques

- Authentification des utilisateurs (SSO, accès ERP/CRM)
- Annuaire d’entreprise (gestion des identités)
- Continuité des opérations (accès réseau, services)
- Intégrité des configurations systèmes (GPO, DNS)
- Traçabilité & conformité (logs, audits AD)

### Lister 10 biens supports essentiels

- DC-PARIS-01 (contrôleur principal + FSMO)
- DC-PARIS-02 (Global Catalog + DNS)
- DC-LYON-01 (DHCP + AD)
- DC-LILLE-01 (R&D + DNS)
- DNS intégré à l’AD
- Base NTDS.dit (contenu de l’annuaire)
- GPO « Server-Security-Baseline »
- Comptes Domain Admins
- SQL-PARIS-01 (ERP, CRM)
- Outil de monitoring MONITOR-PARIS-01

### Définir 3 scénarios de risque majeurs

- Compromission d’un compte « Domain Admin »
- Attaque de ransomware via GPO modifiée
- Altération de la réplication AD (rupture de disponibilité inter-sites)

### Évaluer vraisemblance et impact

- Compromission Admin → Impact 5 / Vraisemblance 4
- GPO détournée → Impact 4 / Vraisemblance 3
- Rupture de réplication → Impact 3 / Vraisemblance 2

### Proposer 5 mesures prioritaires

- Mise en œuvre de l’authentification MFA pour les comptes privilégiés
- Revue des délégations AD et durcissement des GPO
- Surveillance active via SCOM (alertes critiques AD)
- Segmentation réseau des DC (VLAN Management)
- Test mensuel de restauration AD (System State)

## Lab 2 : Matrice de Risque AD

> Objectif : Construire votre matrice de risque spécifique

### Placer vos scénarios identifiés

- Ex : Compromission Admin → Zone critique (rouge)
- GPO détournée → Zone haute (orange)
- Réplication AD dégradée → Zone moyenne (jaune)

### Ajuster selon votre contexte

- Contrainte : fonctionnement 24/7 sur les sites critiques
- Maintenance limitée : impacte les mesures applicables
- Services externalisés : Azure AD / ADFS → nouveaux vecteurs

### Identifier zones rouges

- Compromission de comptes à privilèges
- Absence de logs fiables sur événements critiques

### Prioriser les actions

- MFA, surveillance avancée (SIEM), cloisonnement
- Quick wins : suppression comptes inactifs, révision mots de passe

## Lab 3 : Plan d'Action

> Objectif : Créer une roadmap de sécurisation AD

### Partir des risques identifiés

- Compromission comptes
- Propagation via GPO
- Attaque persistante (APT)

### Définir mesures court terme

- Revue immédiate des droits Domain Admins
- Application GPO de baseline sur tous les DC
- Activation logs avancés sur MONITOR-PARIS-01

### Planifier actions long terme

- Mise en place d’un PAM (Privileged Access Management)
- Migration partielle vers Azure AD + segmentation
- Réécriture des scripts de maintenance et surveillance

### Estimer efforts et coûts

- MFA : faible coût / impact fort
- PAM : effort élevé / ROI sécurité important
- Surveillance : moyen coût / gain visibilité élevé

### Créer planning projet

- Phase 1 (1 mois) : mesures urgentes / quick wins
- Phase 2 (3 mois) : surveillance et durcissement GPO
- Phase 3 (6 mois) : PAM + restructuration AD