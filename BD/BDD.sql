-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 mai 2022 à 13:33
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsbparam`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idAvis` int(11) NOT NULL AUTO_INCREMENT,
  `note` int(1) NOT NULL,
  `avis` varchar(256) COLLATE utf8_bin NOT NULL,
  `idCompte` int(11) NOT NULL,
  `idProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAvis`),
  KEY `Avis_Compte_FK` (`idCompte`),
  KEY `FK_avis_idProduit` (`idProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `note`, `avis`, `idCompte`, `idProduit`) VALUES
(1, 5, 'Très bon produit avec une bonne odeur. Le produit lave parfaitement. ', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `acronyme` varchar(50) COLLATE utf8_bin NOT NULL,
  `libelle` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `acronyme`, `libelle`) VALUES
(1, 'CH', 'Cheveux'),
(2, 'CP', 'Corps');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `etat` int(11) NOT NULL,
  `montant` float NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel` varchar(50) COLLATE utf8_bin NOT NULL,
  `ville` varchar(50) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `cp` int(11) NOT NULL,
  `mdp` varchar(255) COLLATE utf8_bin NOT NULL,
  `niv` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Compte_TypeCompte_FK` (`niv`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `mail`, `nom`, `prenom`, `tel`, `ville`, `adresse`, `cp`, `mdp`, `niv`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 'admin', 'admin', 'admin', 45640, '$2y$10$6/SwMHX9LEAi2fa8mBToQ.Sn2ja9h8cM/lMhDg51SyK8SN2l6Xld6', 2),
(2, 'test@test.com', 'test', 'test', 'test', 'test', 'test', 45640, '$2y$10$oIrdfQw0eOWB0E6veP7Lm.qWt2T/rB4vM0O0k1NHW3HtqkzcSBkCa', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contenance`
--

DROP TABLE IF EXISTS `contenance`;
CREATE TABLE IF NOT EXISTS `contenance` (
  `idContenance` int(11) NOT NULL AUTO_INCREMENT,
  `volume` float NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idContenance`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contenance`
--

INSERT INTO `contenance` (`idContenance`, `volume`, `nom`) VALUES
(1, 100, 'ml'),
(2, 150, 'ml');

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `idContenance` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  PRIMARY KEY (`idContenance`,`idProduit`),
  KEY `Contenir_Produit0_FK` (`idProduit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `detenir`
--

DROP TABLE IF EXISTS `detenir`;
CREATE TABLE IF NOT EXISTS `detenir` (
  `idProduit` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`,`idCommande`),
  KEY `Detenir_Commande0_FK` (`idCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

DROP TABLE IF EXISTS `faire`;
CREATE TABLE IF NOT EXISTS `faire` (
  `idCommande` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`,`id`),
  KEY `Faire_Compte0_FK` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `nom`) VALUES
(1, 'Dop'),
(2, 'Petit Marseillais');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `idMarque` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `Produit_Marque_FK` (`idMarque`),
  KEY `Produit_Categorie0_FK` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`, `description`, `image`, `prix`, `idMarque`, `idCategorie`) VALUES
(1, 'Dop Citron', 'Shampooing pour cheveux doux. Parfumer au citron', 'images/dopCitron.png', 2, 1, 1),
(2, 'Dop Orange', '', 'images/dopOrange.png', 2, 1, 1),
(3, 'Dop Amande', '', 'images/dopAmande.jpg', 2, 1, 1),
(4, 'Petit Marseillais Lait', '', 'images/marseillaisLait.png', 3, 2, 2),
(5, 'Petit Marseillais Vanille', '', 'images/marseillaisPeche.png', 3, 2, 2),
(6, 'Petit Marseillais Vanille', '', 'images/marseillaisVanille.png', 3, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `typecompte`
--

DROP TABLE IF EXISTS `typecompte`;
CREATE TABLE IF NOT EXISTS `typecompte` (
  `niv` int(11) NOT NULL,
  `libelle` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`niv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `typecompte`
--

INSERT INTO `typecompte` (`niv`, `libelle`) VALUES
(1, 'Client'),
(2, 'Administrateur');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `Avis_Compte_FK` FOREIGN KEY (`idCompte`) REFERENCES `compte` (`id`),
  ADD CONSTRAINT `FK_avis_idProduit` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `Compte_TypeCompte_FK` FOREIGN KEY (`niv`) REFERENCES `typecompte` (`niv`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `Contenir_Contenance_FK` FOREIGN KEY (`idContenance`) REFERENCES `contenance` (`idContenance`),
  ADD CONSTRAINT `Contenir_Produit0_FK` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `detenir`
--
ALTER TABLE `detenir`
  ADD CONSTRAINT `Detenir_Commande0_FK` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `Detenir_Produit_FK` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Contraintes pour la table `faire`
--
ALTER TABLE `faire`
  ADD CONSTRAINT `Faire_Commande_FK` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `Faire_Compte0_FK` FOREIGN KEY (`id`) REFERENCES `compte` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `Produit_Categorie0_FK` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `Produit_Marque_FK` FOREIGN KEY (`idMarque`) REFERENCES `marque` (`idMarque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
