-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : thomasalyl123456.mysql.db
-- Généré le :  mar. 25 juin 2019 à 18:59
-- Version du serveur :  5.6.43-log
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `thomasalyl123456`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `date_debut` varchar(20) COLLATE utf8_bin NOT NULL,
  `date_fin` varchar(20) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `image`, `nom`, `date_debut`, `date_fin`, `description`) VALUES
(1, 'ressources/img/about/lidl.png', 'Lidl', '2019', '2019', 'Travail en tant que caissier ELS chez Lidl'),
(2, 'ressources/img/about/bac.png', 'Bac S', '2017', '2018', 'Obtention du baccalauréat'),
(3, 'ressources/img/about/benevole.jpg', 'Bénévole', '2019', '2019', 'Bénévole pour les restos du coeur');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `progress` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `image`, `progress`) VALUES
(2, 'ressources/img/competence/cpp.jpg', 20),
(3, 'ressources/img/competence/c.jpg', 65),
(4, 'ressources/img/competence/js.jpg', 55),
(5, 'ressources/img/competence/php.jpg', 42),
(8, 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/1024px-Python.svg.png', 80);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `mail` varchar(40) COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `message`) VALUES
(4, 'Thomas Alzonne', 'thomas.alzonne@gmail.com', 'Bonjour, voila une offre de stage.'),
(6, 'thomas', 'thomas.alzonne@gmail.com', 'slt t tro bo wala je bande la nui'),
(7, 'thomas', 'totoalzono@gmail.com', 'n,zbvkjnbknkznjvdzdkjvzdbjkdvz kjzd kjvznjnvk vzkjzvonvnk zvjo zvkn zkvzn nnvz, , zkneznvezjzvnenivnveeev vzi vzi evzi vezi vz knevz nzv nzv nkzv nkz nkez nkv zknzv knveznjveznjvnv  vze vee vzkevz kve zkve knev knev veiev v e eviv iv ihv hievzhivz hiz vihze ezihv z vzeihhv ihz vhivez '),
(8, ' fdg', 'totoalzono@gmail.com', 'jbihzekjbzkjnezf\r\n'),
(9, 'quelqu\'un', 'quelqun@gmail.com', 'Votre site n\'est pas responsive, il est écalté'),
(10, 'Cesar', 'lortetcesar@gmail.com', 'Coucou Thomas Alzonne que je te passe le rendez-vous chez toi et après on se donne rendez-vous pour qu’on discute avec un bébé vendredi à Paris ');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'thomas', 'password');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
