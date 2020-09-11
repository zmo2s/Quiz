-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 11 sep. 2020 à 08:14
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
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `numero`, `phrase`) VALUES
(2, 2, '19°c et 16°c'),
(3, 1, 'Budget chauffage'),
(4, 3, 'De 30% à 50%');

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
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `numero`, `phrase`) VALUES
(1, 1, 'Quel budget représente la part la plus importante de la consommation énergétique d’une habitation ?'),
(2, 2, 'La température recommandée dans les pièces à vivre et dans les chambres est respectivement de :'),
(3, 3, 'En hiver, fermer les volets et tirer les rideaux la nuit permet d\\\'éviter les pertes de chaleur :');

-- --------------------------------------------------------

--
-- Structure de la table `sentance`
--

CREATE TABLE IF NOT EXISTS `sentance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numero` int DEFAULT NULL,
  `phrase` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sentance`
--

INSERT INTO `sentance` (`id`, `numero`, `phrase`) VALUES
(1, 1, 'Budget eau'),
(2, 2, '20°c et 17°c'),
(3, 2, '19°c et 16°c'),
(4, 2, '21°c et 18°c'),
(5, 2, '20°c et 18°c'),
(10, 1, 'Budget chauffage'),
(25, 3, 'De façon négligeable'),
(29, 1, 'Les appareils en veille'),
(30, 1, 'La lumière'),
(31, 3, 'De l\'ordre de 10%'),
(32, 3, 'De l\'ordre de 20%'),
(33, 3, 'De 30% à 50%');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
