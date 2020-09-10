-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 10 sep. 2020 à 10:50
-- Version du serveur :  8.0.21-0ubuntu0.20.04.4
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int DEFAULT NULL,
  `phrase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- RELATIONS POUR LA TABLE `answer`:
--

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `numero`, `phrase`) VALUES
(2, 2, 'mer'),
(3, 1, 'Consommation carbonne par habitants est de 80m carre'),
(4, 4, 'Quelle est la consommation d\'eau par foyer en effectuant une prise de conscience ecologique');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int DEFAULT NULL,
  `phrase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- RELATIONS POUR LA TABLE `questions`:
--

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `numero`, `phrase`) VALUES
(1, 1, 'Quelle est la consommation en CO2 sur la planete ?'),
(2, 2, 'bug1'),
(3, 3, 'poof');

-- --------------------------------------------------------

--
-- Structure de la table `sentance`
--

CREATE TABLE IF NOT EXISTS `sentance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int DEFAULT NULL,
  `phrase` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `sentance`:
--

--
-- Déchargement des données de la table `sentance`
--

INSERT INTO `sentance` (`id`, `numero`, `phrase`) VALUES
(1, 2, 'salut'),
(2, 2, 'mer'),
(3, 2, 'entrer'),
(4, 2, 'entrer'),
(5, 2, 'entrer'),
(6, 2, 'entrer'),
(7, 2, 'entrer'),
(8, 2, 'entrer'),
(9, 2, 'entrer'),
(10, 1, 'Consommation carbonne par habitants est de 80m carre'),
(25, 3, 'Quelle est la consommation d\'eau par foyer en effectuant une prise de conscience ecologique'),
(29, 1, 'Consommation carbonne par habitants est de 120m carre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
