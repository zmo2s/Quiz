-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 10 sep. 2020 à 13:06
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`ID`, `Nom`) VALUES
(1, 'Consommation Electrique'),
(2, 'Consommation Eau'),
(3, 'Recyclage'),
(4, 'Emissions Co2');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` int(11) NOT NULL,
  `Question` text CHARACTER SET utf8 NOT NULL,
  `Categorie` int(11) NOT NULL,
  `Rep1` text CHARACTER SET utf8 NOT NULL,
  `Rep2` text CHARACTER SET utf8 NOT NULL,
  `Rep3` text CHARACTER SET utf8 NOT NULL,
  `Rep4` text CHARACTER SET utf8 NOT NULL,
  `RepCNumber` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`ID`, `Type`, `Question`, `Categorie`, `Rep1`, `Rep2`, `Rep3`, `Rep4`, `RepCNumber`) VALUES
(1, 1, 'Quel budget représente la part la plus importante de la consommation énergétique d’une habitation ? ', 1, 'Budget eau', 'Budget chauffage', 'Les appareils en veille', 'La lumière', 2),
(2, 1, 'La température recommandée dans les pièces à vivre et dans les chambres est respectivement de :', 1, '20°c et 17°c', '19°c et 16°c', '21°c et 18°c', '20°c et 18°c', 2),
(3, 1, 'En hiver, fermer les volets et tirer les rideaux la nuit permet d\'éviter les pertes de chaleur :', 2, 'De façon négligeable', 'De l\'ordre de 10%', 'De l\'ordre de 20%', 'De 30% à 50%', 4),
(4, 1, 'Quel est le coût annuel de consommation électrique d\'un appareil en veille ?', 2, '1 à 3 euros', '3 à 5 euros', 'Moins de 1 euro', '5 à 15 euros', 2),
(13, 2, 'L\'air intérieur (dans les habitations) est-il plus ou moins pollué que l\'air extérieur ?', 1, 'Moins pollué.', 'Plus pollué.', 'X', 'X', 2),
(5, 1, 'Lorsque votre chargeur de téléphone portable est branché, il consomme de l\'électricité :', 1, 'Uniquement quand votre téléphone est en charge.', 'Seulement quand votre téléphone est en mode veille.', 'Uniquement quand votre téléphone est en charge.', 'Tout le temps.', 4),
(6, 1, 'Une couche de glace de 6 mm dans le congélateur entraîne une surconsommation de :', 1, '15%.', '25%.', '30%.', '50%.', 3),
(7, 1, 'Par rapport à une douche de 4 à 5 minutes, un bain consomme :', 1, 'A peu près autant.', 'Entre une et deux fois plus.', 'Entre deux et trois fois plus.', 'Entre trois et quatre fois plus.', 4),
(8, 1, 'Quelle est la part de l\'éclairage sur votre facture d\'électricité ?  ', 1, 'Entre 0 et 8%.', 'Entre 8% et 16%.', 'Entre 16% et 24%.', '25% et plus.', 4),
(9, 1, 'L\'utilisation des programmes \"éco\" ou demi-charge sur votre lave-vaisselle peut faire économiser jusqu\'à...', 1, '10%.', '15%.', '20%.', '25%.', 4),
(10, 1, 'Combien de litres d’eau économiseriez-vous par mois en vous lavant les dents sans laisser couler le robinet ?', 1, '100 Litres.', '250 Litres.', '500 Litres.', '1000 Litres.', 4),
(11, 1, 'Combien de litres d’eau gaspillés peut entraîner une fuite goutte à goutte de chasse d’eau ?', 1, '15 000 Litres.', '25 000 Litres.', '35 000 Litres.', '45 000 Litres.', 3),
(12, 1, 'Les étiquettes A+ et A++ présentes sur les appareils électroménagers indiquent une réduction de consommation d’électricité par rapport à un appareil de classe A de :', 1, 'De 5% à 15%.', 'De 15% à 25%.', 'De 25% à 50%.', 'De 50% à 75%.', 3),
(14, 2, 'En France, l\'eau du robinet est-elle plus ou moins chère que l\'eau en bouteille ?', 1, 'Plus chère.', 'Moins chère.', 'X', 'X', 2),
(15, 1, 'Les publicités déposées dans nos boîtes aux lettres, chaque année, représentent une forte quantité de papier. Quelle est cette quantité ?', 1, '22 Kgs.', '33 Kgs.\r\n', '40 Kgs.', '47 Kgs.', 3),
(16, 1, 'Entre 1960 et 2000, la production annuelle d\'ordures ménagères de chaque français a...', 1, 'Est la même.', 'A doublé.', 'A triplé.', 'A quadruplé.', 2),
(17, 2, 'Une des conséquences prévisibles du réchauffement climatique est la montée du niveau des mers et des océans. Est-ce exact ?', 1, 'Oui, car les glaces des continents vont fondre et les eaux des océans vont se dilater.', 'Non, avec les températures qui augmentent il y aura plus d\'évaporation et donc moins d\'eau.', 'X', 'X', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text CHARACTER SET utf8 NOT NULL,
  `Prenom` text CHARACTER SET utf8 NOT NULL,
  `Age` int(11) NOT NULL,
  `EMail` text CHARACTER SET utf8 NOT NULL,
  `Score` int(11) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `Nom`, `Prenom`, `Age`, `EMail`, `Score`, `password`) VALUES
(1, 'ANDRES', 'Thomas', 23, 'thomas.andres@epsi.fr', 300, 'ooopppooo'),
(2, 'ANDRES2', 'THOMAS2', 23, 'thomas.andres2@epsi.fr', 0, '78f8bb4c43c7c3e4e5883e8e9b18518c89d965ff');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
