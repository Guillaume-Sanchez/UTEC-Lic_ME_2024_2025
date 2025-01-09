
# UTC504-Notions-SQL-PhpMyAdmin
> Guillaume SANCHEZ, Tom BAZIRE, Anthony MVAKANGA
## Les solutions pour créer une BDD :
Plusieurs possibilités s'offrent à nous. Tout d'abord à la main, en écrivant directement dans un terminal ou dans un fichier .sql à importer.

Exemple (MySQL/MariaDB) :
```
CREATE TABLE `platforms` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
`manufacturer` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
`status` tinyint(3) unsigned NOT NULL DEFAULT 0,
`created_at` timestamp NOT NULL DEFAULT current_timestamp(),
`updated_at` timestamp NULL DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```
Une seconde solution est d'utiliser un outil de gestion de base de données comme phpMyadmin, Adminer, sqldeveloper.

Exemple de création de base de données avec phpMyAdmin :

 ![create base](https://i.postimg.cc/y8KtrDFZ/Capture-d-cran-du-2025-01-09-15-00-26.png)
 On peut également utiliser un ORM (Object-Relational Mapping). Cela permet de faire le lien entre les objets de ton code et les données de ta base de donées. Je n'en connais que certaines utiliser dans le web comme par exmple sequelize pour node.js(javascript) Eloquent pour laravel (php) ou encore doctrine pour symphony (php).

En plus de pouvoir créer et gérer la structure d'une base de donnée d'un projet, ces outils permetes de générer pour la plupars d'entre eux de fausse donnée afin de remplir les base de donneés et de réasliser des test reels avec des donnée fictives.

## Définir SQL, MySQL, PhpMyadmin

**SQL** (sigle pour Structured Query Language, « langage de requêtes structurées ») est un langage de programmation standard spécialement conçu pour stocker, extraire, gérer ou manipuler les données à l'intérieur d'un système de gestion de bases de données relationnelles (SGBDR)1234. Il permet d'effectuer des opérations telles que la création, la lecture, la mise à jour et la suppression de données.

**MySQL** est un système de gestion de bases de données relationnelles SQL open source développé et supporté par Oracle.MySQL n’est qu’un système populaire qui peut stocker et gérer ces données pour vous, et c’est une solution de base de données particulièrement populaire pour les sites WordPress

**phpMyAdmin** (PMA) est une application Web de gestion pour les systèmes de gestion de base de données MySQL et MariaDB, réalisée principalement en PHP et distribuée sous licence GNU GPL. Il s'agit de l'une des plus célèbres interfaces pour gérer une base de données MySQL sur un serveur PHP.

## Installation de PhpMyAdmin

Sous Windows, on install une solution comme WAMPP ou XAMPP.

Voici les commandes sous linux (debian) afin d'installer un serveur web de A à Z avec Apache2, Php, phpMyAdmin et MariaDB:

### Apache
```
apt install apache2
```
### Php
```
apt install php php-common php-cli php-mysql libapache2-mod-php php-mbstring php-json php-xml
```
### MySQL
```
sudo apt install mariadb-server
```
### Création d'un utilisateur

>pour gérer la base de données et éviter de tout faire avec l'utilisateur root.

pour se connecter au service : `sudo mariadb`
```
CREATE USER 'toto'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON *.* TO 'toto'@'localhost' WITH GRANT OPTION;
```
### PhpMyAdmin

```
sudo apt install phpmyadmin
```
### Configuration de PhpMyAdmin

Une fois l'installation de PMA fini, lancer c'est 3 lignes afin de le configurer avec Apache 2:
```
sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf
sudo a2enconf phpmyadmin.conf
sudo systemctl reload apache2.service
```

On peut ensuite accéder à phpMyAdmin via http://localhost/phpmyadmin
