-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2022 at 06:28 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsbparam`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `image` varchar(50) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `idMarque` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  PRIMARY KEY (`idProduit`),
  KEY `Produit_Marque_FK` (`idMarque`),
  KEY `Produit_Categorie0_FK` (`idCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`, `image`, `prix`, `idMarque`, `idCategorie`) VALUES
(1, 'Dop Citron', 'images/dopCitron.png', 2, 1, 1),
(2, 'Dop Orange', 'images/dopOrange.png', 2, 1, 1),
(3, 'Dop Amande', 'images/dopAmande.jpg', 2, 1, 1),
(4, 'Petit Marseillais Lait', 'images/marseillaisLait.png', 3, 2, 2),
(5, 'Petit Marseillais Vanille', 'images/marseillaisPeche.png', 3, 2, 2),
(6, 'Petit Marseillais Vanille', 'images/marseillaisVanille.png', 3, 2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `Produit_Categorie0_FK` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `Produit_Marque_FK` FOREIGN KEY (`idMarque`) REFERENCES `marque` (`idMarque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
