-- Adminer 4.7.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE `etablissement` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` int(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` in(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `formation`;
CREATE TABLE `formation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'La date de création du type',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'La date de la dernière mise à jour du type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personnel`;
CREATE TABLE `personnel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `prenom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'La date de création du type',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'La date de la dernière mise à jour du type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `eleve`;
CREATE TABLE `eleve` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `prenom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'La date de création du type',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'La date de la dernière mise à jour du type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE `entreprise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `prenom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Le nom du type',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'La date de création du type',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT 'La date de la dernière mise à jour du type',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



-- 2020-04-10 22:54:29