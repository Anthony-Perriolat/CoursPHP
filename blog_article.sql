-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 jan. 2021 à 13:21
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog_article`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) NOT NULL,
  `Text` varchar(150) NOT NULL,
  `Date_Debut` datetime NOT NULL,
  `Date_Fin` datetime NOT NULL,
  `Importance` smallint(5) NOT NULL DEFAULT '0',
  `Auteur_idAuteur` int(11) NOT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `fk_Article_Auteur1_idx` (`Auteur_idAuteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `Titre`, `Text`, `Date_Debut`, `Date_Fin`, `Importance`, `Auteur_idAuteur`) VALUES
(1, 'Sport tennis', 'Lorem ipsum dolor sit amet, Biathlon adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ', '1970-01-01 00:00:00', '1989-12-12 00:00:00', 5, 6),
(2, 'Sport foot', 'Lorem Biathlon  ipsum dolor sit amet, adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ', '1989-01-01 00:00:00', '2000-12-12 00:00:00', 4, 6),
(4, 'Sport rudby', 'Lorem Biathlon  ipsum dolor sit amet, adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ', '2010-01-01 00:00:00', '2020-12-12 00:00:00', 4, 7),
(5, 'Sport baseball', 'Lorem Biathlon  ipsum dolor sit amet, adipiscing elit. Nullam pretium commodo odio at ultrices. Nullam porttitor velit in rutrum eleifend. ', '2021-01-21 00:00:00', '2021-03-21 00:00:00', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `article_has_categorie`
--

DROP TABLE IF EXISTS `article_has_categorie`;
CREATE TABLE IF NOT EXISTS `article_has_categorie` (
  `Article_idArticle` int(11) NOT NULL,
  `Categorie_idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`Article_idArticle`,`Categorie_idCategorie`),
  KEY `fk_Article_has_Categorie_Categorie1_idx` (`Categorie_idCategorie`),
  KEY `fk_Article_has_Categorie_Article1_idx` (`Article_idArticle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `idAuteur` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(45) NOT NULL,
  `Prenom` varchar(45) DEFAULT NULL,
  `Nom` varchar(45) NOT NULL,
  PRIMARY KEY (`idAuteur`),
  UNIQUE KEY `pseudo_UNIQUE` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`idAuteur`, `pseudo`, `Prenom`, `Nom`) VALUES
(3, 'Matéo', 'Toto', 'Dupond'),
(4, 'Valentine', 'Valon', 'Vale'),
(5, 'Sheig307', 'xhui', 'shashi'),
(6, 'dimitri', 'Vasili', 'Petrotchki'),
(7, 'JeanD', 'Jean', 'mendez');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_Categorie` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `Nom_Categorie`) VALUES
(1, 'loisir');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Commentaire` varchar(150) NOT NULL,
  `Date_Ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Auteur_idAuteur` int(11) NOT NULL,
  `Article_idArticle` int(11) NOT NULL,
  PRIMARY KEY (`idCommentaire`),
  KEY `fk_Commentaire_Auteur_idx` (`Auteur_idAuteur`),
  KEY `fk_Commentaire_Article1_idx` (`Article_idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idCommentaire`, `Commentaire`, `Date_Ajout`, `Auteur_idAuteur`, `Article_idArticle`) VALUES
(1, 'BravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravoBravo', '2021-01-21 14:19:27', 3, 5),
(2, 'Sans commentaire Sans commentaire Sans commentaire', '2021-01-21 14:19:27', 5, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_Article_Auteur1` FOREIGN KEY (`Auteur_idAuteur`) REFERENCES `auteur` (`idAuteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `article_has_categorie`
--
ALTER TABLE `article_has_categorie`
  ADD CONSTRAINT `fk_Article_has_Categorie_Article1` FOREIGN KEY (`Article_idArticle`) REFERENCES `article` (`idArticle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Article_has_Categorie_Categorie1` FOREIGN KEY (`Categorie_idCategorie`) REFERENCES `categorie` (`idCategorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_Commentaire_Article1` FOREIGN KEY (`Article_idArticle`) REFERENCES `article` (`idArticle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Commentaire_Auteur` FOREIGN KEY (`Auteur_idAuteur`) REFERENCES `auteur` (`idAuteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
