-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 07 juil. 2019 à 20:21
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hegeprine`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  `image` int(11) NOT NULL,
  `categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `image` (`image`),
  KEY `categorie` (`categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

DROP TABLE IF EXISTS `diplome`;
CREATE TABLE IF NOT EXISTS `diplome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `diplome`
--

INSERT INTO `diplome` (`id`, `libelle`) VALUES
(1, 'Licences'),
(2, 'Masters');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `admission` text COLLATE utf8_unicode_ci NOT NULL,
  `poursuite` text COLLATE utf8_unicode_ci NOT NULL,
  `debouche` text COLLATE utf8_unicode_ci NOT NULL,
  `diplome` int(11) NOT NULL,
  `depart` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `diplome` (`diplome`),
  KEY `depart` (`depart`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom`, `description`, `admission`, `poursuite`, `debouche`, `diplome`, `depart`) VALUES
(1, 'Licence Agro-Alimenter and Industrial Process Engineering (Génie PI & AA)', 'La filière Génie des Procédés industriels et Agroalimentaire est issue de trois\r\ndomaines à savoir, les sciences et techniques (ST), sciences de la matière (SM) et sciences\r\nnature et vie (SNV). En ce sens, cette filière industrielle portera l’enseignement des sciences\r\nfondamentales en Licence par un tronc commun sur trois semestres voire quatre semestre\r\n(avec des unités d’enseignements libres) afin de permettre aux étudiants d’acquérir les bases\r\nfondamentales des sciences et technologies en industrie pour mieux asseoir une compétence\r\nbasée sur la capacité de résolution des problèmes industriels et aussi la capacité en recherche,\r\ndéveloppement et innovation.\r\nLa filière Génie des Procédés Industriels et Agroalimentaire\r\naboutira en licence (semestre S5 et S6) à cinq spécialités à savoir : Génie des Procédés : \r\n<li>Génie des Procédés : Pharmacie industrielle ;</li>\r\n<li>Génie des Procédés : Agroalimentaire ;</li>\r\n<li>Génie des Procédés : Raffinage – Pétrochimie ;</li>\r\n<li>Génie des Procédés : Raffinage et Contrôle – Automatisation ;</li>\r\n<li>Génie des Procédés : Procédés Miniers.</li>', 'Titulaires du baccalauréat de préférence de série C et D**Puisse intégrer en provenance de filières courtes (DUT, BTS, …) une licence suite à une réorientation, une poursuite ou reprise d’études.', 'L\'obtention de la licence Génie PI & AA permet aux étudiants de poursuivre leurs études en Master Génie PI & AA', 'Éducation et recherche : Professeur des écoles, Professeur des collèges et lycées en mathématiques, Enseignant chercheur dans le supérieur (Universités, Écoles d’ingénieurs, Écoles de commerce, IUT)**Industrie : Ingénieur dans divers domaines : Météorologie et spatial, Ponts et chaussées, Banques, finances, assurance, Aide à la décision, Cryptographie et sécurité, Médical et pharmaceutique, Traitement de l’image', 1, 0),
(2, 'Licence Water and Environment Engineering (Génie E & E)', '', '', '', '', 1, 0),
(3, 'Licence Petroleum Engineering (Génie Pétrolier)', 'Cette licence du Génie des Procédés est obtenue à la suite de la validation des semestres S5 et S6 sur les procédés de raffinage et l’initiation à la production pétrochimique visant particulièrement l’industrie pétrolière. Il existe de nombreuses synergies potentielles entre le raffinage et la pétrochimie. C’est pourquoi ces dernières années, face à la montée du prix des matières premières et à une demande accrue en produits issus de la pétrochimie, on assiste à de nombreux rapprochements entre les raffineurs et les pétrochimistes. En effet, outre les échanges de flux, la mise en commun des utilités, de la logistique, des services généraux, etc. conduisent à une optimisation économique en termes de ressources humaines et financières.', '', '', '', 1, 0),
(4, 'Master Agro-Alimenter and Industrial Process Engineering (Génie PI & AA) ', '', '', '', '', 2, 0),
(5, 'Master Water and Environment Engineering (Génie E & E)', '', '', '', '', 2, 0),
(6, 'Master Petroleum Engineering (Génie Pétrolier)', '', '', '', '', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fomat` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
