-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 16 juin 2019 à 18:29
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `toto_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_debut` int(2) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `date_fin` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `nom`, `date_debut`, `description`, `image`, `date_fin`) VALUES
(1, 'Bac S', 2016, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut augue id turpis dignissim viverra at ut massa. Etiam at tortor tristique, suscipit tortor nec, accumsan dui. Mauris eros est, ullamcorper eu tortor eget, scelerisque vestibulum sem. Fusce maximus lorem vitae lacus rhoncus, non sodales erat consequat.', 'ressources/img/about/bac.png', '2017'),
(2, 'Lidl', 2019, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut augue id turpis dignissim viverra at ut massa. Etiam at tortor tristique, suscipit tortor nec, accumsan dui. Mauris eros est, ullamcorper eu tortor eget, scelerisque vestibulum sem. Fusce maximus lorem vitae lacus rhoncus, non sodales erat consequat.', 'ressources/img/about/lidl.png', '16/06/2019');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8_bin NOT NULL,
  `progress` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `image`, `progress`) VALUES
(1, 'http://www.fournier-c.fr/images/c.png', 43),
(2, 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/1200px-ISO_C%2B%2B_Logo.svg.png', 38),
(3, 'https://cdn.becauseofprog.fr/dev-icons/nodejs.png', 63),
(4, 'https://pngimg.com/uploads/php/php_PNG26.png', 61),
(5, 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png', 80),
(6, 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_960_720.png', 76);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_bin NOT NULL,
  `mail` varchar(100) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'toto', 'alzonno');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
