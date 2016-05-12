-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 03:12 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolmesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire_publication`
--

CREATE TABLE IF NOT EXISTS `commentaire_publication` (
  `Id` int(12) NOT NULL,
  `Id_publication` int(12) NOT NULL,
  `Date` date NOT NULL,
  `Contenu` varchar(500) NOT NULL,
  `Reference_utilisateur` varchar(200) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Date_naissance` varchar(200) NOT NULL,
  `Nationalite` varchar(200) NOT NULL,
  `Filiere` varchar(200) NOT NULL,
  `Adresse` varchar(200) NOT NULL,
  `Telephone` varchar(200) NOT NULL,
  `Annee` varchar(200) NOT NULL,
  `Sexe` varchar(200) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`Id`, `Reference`, `Nom`, `Prenom`, `Date_naissance`, `Nationalite`, `Filiere`, `Adresse`, `Telephone`, `Annee`, `Sexe`, `Alive`) VALUES
(1, 'SM1461751419', 'fanta', 'katile', '2016-04-15', 'malienne', 'IG', '13 avenue benchackroun', '+212602169833', '2', '', 0),
(2, 'SM1461751887', 'ali', 'katile', '2016-04-13', 'malien', 'IG', '13 avenue benchackroun', '0002225555', '2', '', 0),
(3, 'SM1461751957', 'assy', 'katile', '2016-04-09', 'malienne', 'RT', '13 avenue benchackroun', '+212602169833', '5', '', 0),
(4, 'SM1461752244', 'camille', 'diarra', '2016-04-09', 'malienne', 'RT', '13 avenue benchackroun', '+212602169833', '5', '', 0),
(5, 'SM1461752775', '''''', '''', '2016-04-15', 'malienne', 'IG', '13 avenue benchackroun', '+212602169833', '4', '', 0),
(6, 'SM1461752845', '''''', '''''', '2016-04-16', 'malienne', 'IG', '13 avenue benchackroun', '+212602169833', '4', '', 0),
(7, 'SM1462347718', 'ANANI', 'Camille', '2016-07-14', 'tg', 'ig', 'fes', '0607323894', '2016', '', 0),
(8, '1462357128', 'H', 'h', '0222-02-01', 'MAROCAINE', 'h', 'lololo', '2', '2000', '', 0),
(9, '1462357836', 'MOHAMED', 'Rich', '0201-01-01', 'bf', 'ig', 'fes', '0607323894', '2016', '', 0),
(10, '1462358033', 'MOHAMED', 'Kodjo', '2016-02-01', 'bf', 'ig', 'fes', '0607323894', '2016', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `Id` int(12) NOT NULL,
  `Date_debut` date NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  `Date_fin` date NOT NULL,
  `Heure_debut` date NOT NULL,
  `Heure_fin` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupes`
--

CREATE TABLE IF NOT EXISTS `groupes` (
  `Id` int(12) NOT NULL,
  `Reference` varchar(200) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Date_creation` varchar(200) NOT NULL,
  `Statut` tinyint(1) NOT NULL,
  `Alive` tinyint(1) NOT NULL COMMENT 'Savoir si le groupe est supprimer ou non.',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lieu`
--

CREATE TABLE IF NOT EXISTS `lieu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `membregroupe`
--

CREATE TABLE IF NOT EXISTS `membregroupe` (
  `Id` int(12) NOT NULL,
  `Reference_admi` varchar(200) NOT NULL,
  `reference_groupe` varchar(200) NOT NULL,
  `reference_utilisateur` varchar(200) NOT NULL,
  `Connecte` tinyint(1) NOT NULL,
  `Type_membre` varchar(200) NOT NULL,
  `Id_groupe` int(12) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `idGroupe` (`Id_groupe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Id` int(11) NOT NULL,
  `Reference` varchar(255) NOT NULL,
  `Contenu` varchar(255) NOT NULL,
  `Id_emeteur` int(11) NOT NULL,
  `Objet` varchar(255) NOT NULL,
  `Date_Message` date NOT NULL,
  `Id_recepteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participant_evenement`
--

CREATE TABLE IF NOT EXISTS `participant_evenement` (
  `Id` int(12) NOT NULL,
  `Id_evenement` int(12) NOT NULL,
  `Referenc_utilisateur` varchar(200) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personneladministratif`
--

CREATE TABLE IF NOT EXISTS `personneladministratif` (
  `Id` int(12) NOT NULL,
  `Reference` varchar(200) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Telephone` varchar(200) NOT NULL,
  `Sexe` varchar(200) NOT NULL,
  `Nationalite` varchar(200) NOT NULL,
  `Posteoccupe` varchar(200) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE IF NOT EXISTS `professeur` (
  `Id` int(11) NOT NULL,
  `Reference` varchar(200) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Telephone` varchar(200) NOT NULL,
  `Sexe` varchar(200) NOT NULL,
  `Nationalite` varchar(200) NOT NULL,
  `Type_contrat` varchar(200) NOT NULL,
  `Alive` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE IF NOT EXISTS `publication` (
  `Id` int(12) NOT NULL,
  `Reference_utilisateur` varchar(200) NOT NULL,
  `date_publication` varchar(200) NOT NULL,
  `Contenu` varchar(200) NOT NULL,
  `Nombre_jaime` int(12) NOT NULL,
  `Nombre_triste` int(12) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Mur` varchar(200) NOT NULL,
  `Nombre_rire` int(11) NOT NULL,
  `Nombre_fache` int(11) NOT NULL,
  `Nombre_jaimepas` int(11) NOT NULL,
  `Media` varchar(255) NOT NULL,
  `Audience` char(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Reference` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `DateInscription` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `Connected` tinyint(1) NOT NULL,
  `Actif` tinyint(10) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`Id`, `Reference`, `Email`, `Password`, `DateInscription`, `Type`, `Connected`, `Actif`, `Photo`) VALUES
(1, '100', 'fanta.katile@gmail.com', '123456', '', 'Administrateur', 0, 1, 'fanta.jpg'),
(2, 'SM1461751419', 'fanta.katile@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(3, 'SM1461751637', 'fanta.katile@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(4, 'SM1461751887', 'ali@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(5, 'SM1461751957', 'smessan@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(6, 'SM1461752244', 'camille@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(7, 'SM1461752775', 'fanta.katile@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(8, 'SM1461752845', 'fanta.katile@gmail.com', '123456', '27/04/16', 'Etudiant', 0, 1, ''),
(9, 'SM1462347718', 'cam@gmail.com', 'cam', '04/05/16', 'Etudiant', 0, 1, ''),
(10, '1462357128', 'camilleanani@gmail.com', '2', '04/05/16', 'Etudiant', 0, 1, ''),
(11, '1462357836', 'momo@gmail.com', '1234', '04/05/16', 'Etudiant', 0, 1, ''),
(12, '1462358033', 'momo@gmail.com', '1234', '04/05/16', 'Etudiant', 0, 1, ''),
(13, 'M14', 'user@gmail.com', '12342', 'desc', 'type1', 1, 1, 'path/'),
(14, 'M14', 'user@gmail.com', '12342', 'desc', 'type1', 1, 1, 'path/');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membregroupe`
--
ALTER TABLE `membregroupe`
  ADD CONSTRAINT `membregroupe_ibfk_1` FOREIGN KEY (`Id_groupe`) REFERENCES `groupes` (`Id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
