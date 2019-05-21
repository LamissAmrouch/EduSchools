-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 15 Janvier 2019 à 21:48
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet_web`
--
CREATE DATABASE IF NOT EXISTS `projet_web` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `projet_web`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'universitaire'),
(2, 'professionnelle'),
(3, 'secondaire'),
(4, 'moyenne'),
(5, 'primaire'),
(6, 'maternelle');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cmt` text COLLATE utf8_bin NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `cmt`, `id_ecole`, `id_user`, `nom_user`) VALUES
(10, 'bonne formation', 1, 6, 'mouna'),
(11, ' manque dâ€™enseignant ', 1, 6, 'mouna'),
(12, 'Meilleure ecole d''informatique ', 12, 6, 'mouna'),
(13, 'Programme trop chargé', 12, 5, 'lamiss'),
(14, 'Meuilleure', 12, 6, 'lamiss');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE IF NOT EXISTS `ecole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `wilaya` varchar(255) COLLATE utf8_bin NOT NULL,
  `commune` varchar(255) COLLATE utf8_bin NOT NULL,
  `domaine` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `adresse` varchar(200) COLLATE utf8_bin NOT NULL,
  `telephone` varchar(200) COLLATE utf8_bin NOT NULL,
  `fax` varchar(200) COLLATE utf8_bin NOT NULL,
  `enligne` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `USI_SESSION` (`nom`,`commune`),
  UNIQUE KEY `USI_SESSIONN` (`commune`,`wilaya`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

--
-- Contenu de la table `ecole`
--

INSERT INTO `ecole` (`id`, `id_categorie`, `nom`, `wilaya`, `commune`, `domaine`, `adresse`, `telephone`, `fax`, `enligne`) VALUES
(1, 1, 'Ecole Superieure de Commerce', 'Oran', 'Es-Senia ', 'Commerce et finance ', '50 Rue des martyrs', '033 56 25 70 ', '036 56 30 50 ', 0),
(2, 1, 'Ecole Superieure Electronique ', 'Boumerdes', 'Boumerdes-centre', 'Electronique', '3500 Rue de la liberte', '035 56 25 70 ', '035 56 30 50 ', 1),
(3, 2, 'Institue hotellerie et restauration', 'Tizi-Ouzou', 'Es-Senia ', 'Hotellerie ', '0 Rue des martyrs', '021 56 25 70 ', '021 56 30 50 / 56 51 54', 1),
(4, 2, 'Institue des metiers de plomberie et chauffage ', 'Setif', 'El-Eulma ', 'Plomberie ', '50 Rue de la liberte', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(5, 3, 'Ecole El-Falah ', 'Mostaganem', 'Mansoura ', NULL, '50 Rue de la liberte', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(6, 3, 'Ecole El-Nadjah', 'Constantine', 'Ibn-Badis ', NULL, '50 Rue des martyrs', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(7, 4, 'Ecole Madrassati ', 'Alger', 'Hussein-Dey', NULL, '50 Rue de la gare', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(9, 5, 'Ecole El-Nadjihine', 'Bouira', 'Lakhdaria', NULL, '50 Rue des dunes', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(11, 6, 'Ecole Les Poussins ', 'Alger', 'Dar-El-Beida', NULL, '50 Rue de la liberte', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(12, 1, 'Ecole Superieure Informatique', 'Alger', 'Oued Smar ', 'Informatique ', '68 rue de la gare', '023 56 25 70 ', '023 56 30 50', 0),
(13, 1, 'Ecole Superieure Agronomie ', ' El-Oued', 'Djamaa ', 'Agronomie ', '30 Rue des dunes', '026 56 25 70 ', '026 56 30 50', 0),
(14, 1, 'Ecole Superieure Veterinaire ', 'Tizi-ouzou', ' Freha', 'Veternaire ', '10 Rue des oliviers', '025 56 25 70', '025 56 30 50', 0),
(15, 1, 'Institue Superieure de commerce', 'Bejaia', 'Akbou ', 'Commerce et finance ', '20 Rue de la montagne', '032 56 25 70 ', '032 56 30 50  ', 0),
(17, 2, 'Institue hygiene et securite ', 'Alger', 'Rouiba ', 'Commerce et finance ', '50 Rue des dunes', '021 56 25 70 ', '021 56 30 50 / 56 51 54', 0),
(18, 2, 'Institue des metiers du batiments', 'Bechar', 'Saoura ', 'Batiment ', '50 Rue des oliviers', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(21, 3, 'Ecole Les glycines', 'Alger', 'Chéraga ', NULL, '50 Rue de la gare', '021 56 25 70 ', '021 56 30 50 / 56 51 54', 0),
(29, 3, 'Ecole El-Fath', 'Tlemcen', 'Hennaya ', NULL, '50 Rue des dunes', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(36, 4, 'Ecole La reussite', 'Bechar', 'Beni Abbes ', '', '50 Rue des dunes', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(37, 4, 'Ecole Les ecoliers ', 'Oran', 'Ain-El-Turk ', NULL, '50 Rue de la liberte', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(38, 4, 'Ecole El-Moutafawikines ', 'Chlef', 'Tenes', NULL, '50 Rue des martyrs', '021 56 25 70 ', '021 56 30 50 / 56 51 54', 0),
(41, 5, 'Ecole El-oumma ', 'Tipaza', 'Cherchell', '', '50 Rue des martyrs', '021 56 25 70 ', '021 56 30 50 / 56 51 54', 0),
(42, 5, 'Ecole El-Bayane ', 'Ghardaïa', 'El-Menia', NULL, '50 Rue de la gare', '021 56 25 70 ', '021 56 30 50 / 56 51 54 ', 0),
(45, 0, 'USTHB', 'Alger', 'Bab zouar', NULL, 'Bab zouar- Alger', '021345678', '034567688', 0);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_form` int(11) NOT NULL,
  `designation` varchar(2000) NOT NULL,
  `Volume_horaire` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `taxe` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_type_form` (`id_type_form`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `id_type_form`, `designation`, `Volume_horaire`, `prix`, `taxe`) VALUES
(1, 1, 'Communication digital', 8, 2000, 17),
(2, 1, 'Public speaking', 2, 1800, 17),
(3, 2, 'Management perpasif', 4, 2000, 19),
(4, 2, 'Management Participatif', 4, 2000, 17),
(5, 3, 'Analyse', 4, 3100, 17),
(6, 3, 'Algebre', 2, 1500, 17),
(7, 3, 'Logique mathematique', 2, 2000, 17),
(8, 4, 'Developpement web', 4, 3000, 17),
(9, 4, 'Developpement mobile', 3, 2500, 17);

-- --------------------------------------------------------

--
-- Structure de la table `type_formation`
--

CREATE TABLE IF NOT EXISTS `type_formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ecole` int(11) NOT NULL,
  `designation` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `type_formation`
--

INSERT INTO `type_formation` (`id`, `id_ecole`, `designation`) VALUES
(1, 1, 'Communication'),
(2, 1, 'Management'),
(3, 12, 'Mathematique'),
(4, 12, 'Developpement');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nom_utilisateur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `mdp`, `prenom`, `nom_utilisateur`, `mail`) VALUES
(4, 'Admin', 'admin', 'Admin', 'admin', 'admin@mail.admin'),
(6, 'cherad', '123', 'mouna', 'mouna', 'fl_cherad@esi.dz'),
(7, 'Dekkiche', '123', 'widad', 'widad', 'fw_dekkiche@esi.dz'),
(8, 'sous-admin', 'sous-admin', 'sous-admin', 'sous-admin', 'sous-admin@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
