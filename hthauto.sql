-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 04 nov. 2018 à 07:22
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ht_auto`
--

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `libelle`) VALUES
(2, 'Citroën'),
(3, 'Peugeot'),
(4, 'Renault'),
(5, 'Audi'),
(6, 'Volkswagen');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `libelle`) VALUES
(1, 'Audi A1'),
(2, 'Audi A3'),
(3, 'Audi A4'),
(4, 'Audi A6'),
(5, 'Audi Q2'),
(6, 'Audi Q5'),
(7, 'Audi A3'),
(8, 'Citroën C3'),
(9, 'Citroën Picasso'),
(10, 'Citroën Berlingo'),
(11, 'Citroën C1'),
(12, 'Citroën C4'),
(13, 'Citroën DS4'),
(14, 'Citroën E-Mehari'),
(15, 'Citroën Grand C4'),
(16, 'Citroën CMax'),
(17, 'Peugeot 108'),
(18, 'Peugeot 207'),
(19, 'Peugeot 208'),
(20, 'Peugeot 308'),
(21, 'Peugeot 2008'),
(22, 'Peugeot 3008'),
(23, 'Peugeot 4008'),
(24, 'Renault Clio'),
(25, 'Renault Scenic'),
(26, 'Renault Captur'),
(27, 'Renault Espace'),
(28, 'Renault Kadjar'),
(29, 'Renault Megane'),
(30, 'Renault Twingo'),
(31, 'Volkswagen Golf'),
(32, 'Volkswagen Passat'),
(33, 'Volkswagen Scirocco'),
(34, 'Volkswagen Tiguan');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `numImma` char(7) NOT NULL,
  `couleur` char(20) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `image` char(32) DEFAULT NULL,
  `idMarque` int(11) NOT NULL,
  `idType` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  PRIMARY KEY (`numImma`),
  KEY `idType` (`idType`),
  KEY `idMarque` (`idMarque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE voiture 
  ADD FOREIGN KEY FK_voiture_Marque (idMarque)
      REFERENCES marque (id) ;
ALTER TABLE voiture 
  ADD FOREIGN KEY FK_voiture_Type (idType)
      REFERENCES type (id) ;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`numImma`, `couleur`, `prix`, `image`, `idType`, `idMarque`, `annee`) VALUES
('AA233YU', 'Verte', '20500.00', 'peugeot207.bmp', 18, 3, 2017),
('AA699GG', 'Blanche', '19800.00', 'citroenDS4Blanche.bmp', 13, 2, 2017),
('AV451MI', 'Blanche', '19700.00', 'renaultCapturBlanche.bmp', 26, 4, 2017),
('AV459SZ', 'Blanche', '17500.00', 'audiA1Blanche.bmp', 1, 5, 2015),
('AZ148PO', 'Blanche', '14500.00', 'citroenBerlingoBlanche.bmp', 10, 2, 2015),
('AZ289GF', 'Rouge', '19500.00', 'citroenC4PicassoRouge.bmp', 12, 2, 2016),
('BB112ZE', 'Blanche', '17800.00', 'citroenC4PicassoBlanche.bmp', 12, 2, 2014),
('BV447RE', 'Jaune', '14900.00', 'citroenC3PicassoJaune.bmp', 8, 2, 2015),
('CX392VP', 'Noire', '15600.00', 'audiA6Noire.bmp', 4, 5, 2015),
('DD719VB', 'Noire', '19850.00', 'renaultTwingoNoire.bmp', 30, 4, 2017),
('DR396BR', 'Rouge', '18000.00', 'twingo.bmp', 30, 4, 2016),
('FD138GT', 'Noire', '21700.00', 'renaultEspaceNoire.bmp', 27, 4, 2016),
('FR411GT', 'Noire', '23590.00', 'volkswagenTiguanNoire.bmp', 34, 6, 2018),
('FT305IL', 'Marron', '15800.00', 'peugeot2008marron.bmp', 21, 3, 2016),
('GC932JH', 'Grise', '18800.00', 'peugeot3008Grise.bmp', 22, 3, 2016),
('GG323JU', 'Noire', '19900.00', 'citroenC4CactusNoire.bmp', 12, 2, 2017),
('GH175CR', 'Noire', '17500.00', 'peugeot208Noire.bmp', 19, 3, 2017),
('GP654CD', 'Noire', '21450.00', 'volkswagenGolfPassatNoire.bmp', 32, 6, 2017),
('GR445HG', 'Grise', '19700.00', 'renaultClioGrise2.bmp', 24, 4, 2016),
('GR754HT', 'Noire', '17300.00', 'peugeot308Noire.bmp', 20, 3, 2016),
('HT548MP', 'Marron', '18700.00', 'renaultScenicMarron.bmp', 25, 4, 2016),
('HY736DZ', 'Blanche', '19450.00', 'volkswagenGolfBlanche.bmp', 31, 6, 2016),
('JJ456BV', 'Noire', '21800.00', 'citroenC4Noire.bmp', 12, 2, 2017),
('JP795HG', 'Blanche', '21890.00', 'volkswagenTiguanBlanche.bmp', 34, 6, 2017),
('KH234MP', 'Blanche', '17900.00', 'peugeot108Blanche2.bmp', 17, 3, 2016),
('KY824HT', 'Noire', '21600.00', 'peugeot3008Noire.bmp', 22, 3, 2017),
('MF689BN', 'Grise', '16700.00', 'renaultClioGrise.bmp', 24, 4, 2016),
('MK456KJ', 'Grise', '17800.00', 'citroenBerlingoGrise.bmp', 10, 2, 2016),
('ML875MM', 'Blanche', '18700.00', 'peugeot208Blanche.bmp', 19, 3, 2016),
('ML875TR', 'Blanche', '16800.00', 'peugeot108Blanche.bmp', 17, 3, 2015),
('MM457HT', 'Grise', '19150.00', 'audiQ3Grise.bmp', 7, 6, 2017),
('MP479XW', 'Noire', '23000.00', 'audiA3Noire2.bmp', 2, 5, 2018),
('MP621GH', 'Bleue', '18800.00', 'peugeot4008Bleue.bmp', 23, 3, 2017),
('NB369JY', 'Blanche', '18500.00', 'audiA4Blanche.bmp', 3, 5, 2016),
('PA587WX', 'Noire', '19700.00', 'audiQ2.bmp', 5, 5, 2016),
('PG659GT', 'Grise', '18500.00', 'renaultCapturGrise.bmp', 26, 4, 2017),
('PH432YT', 'Blanche', '18000.00', 'audiA3Blanche2.bmp', 2, 5, 2016),
('PN456BV', 'Bleue', '15800.00', 'c3.bmp', 8, 2, 2015),
('PN564CX', 'Blanche', '18800.00', 'audiQ3Blanche.bmp', 6, 5, 2017),
('PP127PO', 'Rouge', '17500.00', 'peugeot2008Rouge.bmp', 21, 3, 2017),
('PP445GF', 'Grise', '18900.00', 'CMAX_grise.bmp', 16, 2, 2016),
('PW819BV', 'Blanche', '22000.00', 'audiQ5Blanche.bmp', 8, 5, 2018),
('QA741LP', 'Rouge', '21500.00', 'renaultCapturRouge.bmp', 26, 4, 2018),
('QQ230LL', 'Blanche', '18800.00', 'citroenGrandC4Blanche.bmp', 15, 2, 2016),
('QQ410YT', 'Blanche', '19950.00', 'volkswagenSciroccoBlanche.bmp', 33, 6, 2017),
('QS121PM', 'Blanche', '18800.00', 'citroenC3PicassoBlanche.bmp', 8, 2, 2016),
('RE487MP', 'Blanche', '21000.00', 'renaultKadjarBlanche.bmp', 28, 4, 2017),
('RT666GT', 'Noire', '15000.00', 'citroenC1Noire.bmp', 10, 2, 2015),
('RZ324LO', 'Grise', '22300.00', 'renaultEspaceGrise.bmp', 27, 4, 2017),
('SD457RT', 'Blanche', '19000.00', 'audiA3Blanche.bmp', 2, 5, 2016),
('SD789LK', 'Noire', '19600.00', 'citroen_picasso.bmp', 8, 2, 2016),
('SS447GF', 'Noire', '18050.00', 'volkswagenGolfNoire.bmp', 31, 6, 2016),
('TY365KH', 'Noire', '16700.00', 'renaultMeganeNoire.bmp', 29, 4, 2016),
('ZA589BN', 'Rouge', '17600.00', 'renaultClioRouge.bmp', 24, 4, 2017),
('ZA983FG', 'Noire', '19800.00', 'audiA3Noire.bmp', 2, 5, 2015),
('ZE189GF', 'Rouge', '17500.00', 'citroenE-MehariRouge.bmp', 14, 2, 2016),
('ZE478KJ', 'Blanche', '18650.00', 'renaultTwingoBlanche.bmp', 30, 4, 2016);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
