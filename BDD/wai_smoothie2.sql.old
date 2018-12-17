-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 17 Décembre 2018 à 13:35
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wai_smoothie`
--

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Fruits'),
(2, 'Légumes'),
(3, 'Aromates'),
(4, 'Produits laitiers');

-- --------------------------------------------------------

--
-- Structure de la table `Comments`
--

CREATE TABLE `Comments` (
  `id` int(5) NOT NULL,
  `comment` text NOT NULL,
  `idUser` int(11) NOT NULL,
  `idReciepe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Favorite`
--

CREATE TABLE `Favorite` (
  `idUser` int(11) NOT NULL,
  `idReciepe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Product`
--

CREATE TABLE `Product` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `buyPrice` float NOT NULL,
  `image` varchar(100) NOT NULL,
  `idCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Product`
--

INSERT INTO `Product` (`id`, `name`, `buyPrice`, `image`, `idCategory`) VALUES
(1, 'banane', 0.2, 'banane.jpg', 1),
(2, 'kiwi', 0.37, 'kiwi.jpg', 1),
(3, 'fruit de la passion', 0.79, 'passion.jpg', 1),
(4, 'ananas', 2.19, 'ananas.jpg', 1),
(5, 'grenade', 1.76, 'grenade.jpg', 1),
(6, 'kaki', 0.65, 'kaki.jpg', 1),
(7, 'noix de coco', 1.58, 'noixDeCoco.jpg', 1),
(8, 'fraise', 0.1, 'fraise.jpg', 1),
(9, 'framboise', 0.05, 'framboise.jpg', 1),
(10, 'pomme verte', 0.6, 'pommeVerte.jpg', 1),
(11, 'pomme rouge', 0.65, 'pommeRouge.jpg', 1),
(12, 'pomme jaune', 0.45, 'pommeJaune', 1),
(13, 'gingembre', 1, 'gingembre.jpg', 3),
(14, 'poire', 0.56, 'poire.jpg', 1),
(15, 'menthe', 0.64, 'menthe.jpg', 3),
(16, 'basilic', 0.4, 'basilic.jpg', 3),
(17, 'lait de coco', 0.25, 'laitCoco', 4);

-- --------------------------------------------------------

--
-- Structure de la table `Reciepe`
--

CREATE TABLE `Reciepe` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `salePrice` float NOT NULL,
  `ingredientsNumber` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ReciepeProduct`
--

CREATE TABLE `ReciepeProduct` (
  `id` int(5) NOT NULL,
  `idReciepe` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantityProduct` float NOT NULL,
  `idUnit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Unit`
--

CREATE TABLE `Unit` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shortcut` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Unit`
--

INSERT INTO `Unit` (`id`, `name`, `shortcut`) VALUES
(1, 'gramme', 'g'),
(2, 'litre', 'L'),
(4, 'pièce', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `id` int(5) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `zip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idReciepe` (`idReciepe`);

--
-- Index pour la table `Favorite`
--
ALTER TABLE `Favorite`
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idReciepe` (`idReciepe`);

--
-- Index pour la table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Index pour la table `Reciepe`
--
ALTER TABLE `Reciepe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ReciepeProduct`
--
ALTER TABLE `ReciepeProduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idReciepe` (`idReciepe`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idUnit` (`idUnit`);

--
-- Index pour la table `Unit`
--
ALTER TABLE `Unit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `Reciepe`
--
ALTER TABLE `Reciepe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ReciepeProduct`
--
ALTER TABLE `ReciepeProduct`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Unit`
--
ALTER TABLE `Unit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `fk_reciepe` FOREIGN KEY (`idReciepe`) REFERENCES `Reciepe` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Contraintes pour la table `Favorite`
--
ALTER TABLE `Favorite`
  ADD CONSTRAINT `fk_reciepeFavorite` FOREIGN KEY (`idReciepe`) REFERENCES `Reciepe` (`id`),
  ADD CONSTRAINT `fk_userFavorite` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Contraintes pour la table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`idCategory`) REFERENCES `Category` (`id`);

--
-- Contraintes pour la table `ReciepeProduct`
--
ALTER TABLE `ReciepeProduct`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`idProduct`) REFERENCES `Product` (`id`),
  ADD CONSTRAINT `fk_reciepeProduct` FOREIGN KEY (`idReciepe`) REFERENCES `Reciepe` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
