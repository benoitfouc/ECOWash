-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Avril 2017 à 18:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ecowash`
--

-- --------------------------------------------------------

--
-- Structure de la table `lessive`
--

CREATE TABLE IF NOT EXISTS `lessive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datedebut` date NOT NULL,
  `heure` int(11) NOT NULL,
  `minutes` int(11) NOT NULL,
  `idmachine` int(11) NOT NULL,
  `idprogramme` int(11) NOT NULL,
  `idtemperatures` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idmachine` (`idmachine`),
  KEY `idtemperatures` (`idtemperatures`),
  KEY `idprogramme` (`idprogramme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `lessive`
--

INSERT INTO `lessive` (`id`, `datedebut`, `heure`, `minutes`, `idmachine`, `idprogramme`, `idtemperatures`) VALUES
(1, '2017-04-17', 12, 57, 1, 1, 1),
(4, '2017-04-06', 14, 43, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `machine`
--

CREATE TABLE IF NOT EXISTS `machine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(355) NOT NULL,
  `premier` tinyint(1) NOT NULL,
  `second` tinyint(1) NOT NULL,
  `troisieme` tinyint(1) NOT NULL,
  `idreservoir` int(11) NOT NULL,
  `idpersonne` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idpersonne` (`idpersonne`),
  KEY `idreservoir` (`idreservoir`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `machine`
--

INSERT INTO `machine` (`id`, `nom`, `premier`, `second`, `troisieme`, `idreservoir`, `idpersonne`) VALUES
(1, 'Machine de test', 0, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE IF NOT EXISTS `programme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `programme`
--

INSERT INTO `programme` (`id`, `libelle`) VALUES
(1, 'Blanc'),
(2, 'Delicat');

-- --------------------------------------------------------

--
-- Structure de la table `reservoir`
--

CREATE TABLE IF NOT EXISTS `reservoir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lessive` int(11) NOT NULL,
  `adoucissant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `reservoir`
--

INSERT INTO `reservoir` (`id`, `lessive`, `adoucissant`) VALUES
(1, 95, 5);

-- --------------------------------------------------------

--
-- Structure de la table `temperatures`
--

CREATE TABLE IF NOT EXISTS `temperatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) NOT NULL,
  `degres` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `temperatures`
--

INSERT INTO `temperatures` (`id`, `libelle`, `degres`) VALUES
(1, '20°', 20),
(2, '30°', 30);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `email`, `password`) VALUES
(1, 'alex', 'fv', 'test@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `lessive`
--
ALTER TABLE `lessive`
  ADD CONSTRAINT `FK_machine_lessive` FOREIGN KEY (`idmachine`) REFERENCES `machine` (`id`),
  ADD CONSTRAINT `FK_programme_lessive` FOREIGN KEY (`idprogramme`) REFERENCES `programme` (`id`),
  ADD CONSTRAINT `FK_temperatures_lessive` FOREIGN KEY (`idtemperatures`) REFERENCES `temperatures` (`id`);

--
-- Contraintes pour la table `machine`
--
ALTER TABLE `machine`
  ADD CONSTRAINT `FK_machine_reservoir` FOREIGN KEY (`idreservoir`) REFERENCES `reservoir` (`id`),
  ADD CONSTRAINT `FK_machine_personne` FOREIGN KEY (`idpersonne`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
