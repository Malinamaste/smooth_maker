-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Décembre 2018 à 15:11
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
(4, 'Produits laitiers'),
(5, 'Jus');

-- --------------------------------------------------------

--
-- Structure de la table `Comments`
--

CREATE TABLE `Comments` (
  `id` int(5) NOT NULL,
  `comment` text NOT NULL,
  `idUser` int(11) NOT NULL,
  `idReciepe` int(11) NOT NULL,
  `rates` int(11) DEFAULT NULL
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
(1, 'bananes', 0.2, 'banane.jpg', 1),
(2, 'kiwis', 0.37, 'kiwi.jpg', 1),
(3, 'fruits de la passion', 0.79, 'passion.jpg', 1),
(4, 'ananas', 2.19, 'ananas.jpg', 1),
(5, 'grenades', 1.76, 'grenade.jpg', 1),
(6, 'kakis', 0.65, 'kaki.jpg', 1),
(7, 'noix de coco', 1.58, 'noixDeCoco.jpg', 1),
(8, 'fraises', 0.1, 'fraise.jpg', 1),
(9, 'framboises', 0.05, 'framboise.jpg', 1),
(10, 'pommes vertes', 0.6, 'pommeVerte.jpg', 1),
(11, 'pommes rouges', 0.65, 'pommeRouge.jpg', 1),
(12, 'pommes jaunes', 0.45, 'pommeJaune.jpg', 1),
(13, 'gingembre', 1, 'gingembre.jpg', 3),
(14, 'poire', 0.56, 'poire.jpg', 1),
(15, 'menthe', 0.64, 'menthe.jpg', 3),
(16, 'basilic', 0.4, 'basilic.jpg', 3),
(17, 'lait de coco', 0.25, 'laitCoco.jpg', 4),
(18, 'citrons verts', 0.8, 'citronVert.jpg', 1),
(19, 'mangues', 1.4, 'mange.jpg', 1),
(20, 'concombre', 0.8, 'concombre.jpg', 2),
(21, 'oranges sanguines', 0.45, 'orangeSanguine', 1),
(22, 'jus de carottes', 2.4, 'jusCarotte', 5);

-- --------------------------------------------------------

--
-- Structure de la table `Recipe`
--

CREATE TABLE `Recipe` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `salePrice` float NOT NULL,
  `ingredientsNumber` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Recipe`
--

INSERT INTO `Recipe` (`id`, `name`, `description`, `salePrice`, `ingredientsNumber`, `image`) VALUES
(1, 'Yello Wai', 'Délicieux mélange d\'ananas, de bananes et de citron vert pour ensoleiller vos papilles...', 5, 3, 'recette-d28983-smoothie-ananas-banane-et-citron-vert.jpg'),
(2, 'Pink Wai', 'Un doux parfum d\'enfance 100% naturel : banane, fraises et pomme', 5.5, 3, 'recette-d23386-smoothie-banane-fraise-et-pomme.jpg'),
(3, 'Detox Wai', 'Faites du bien à votre corps tout en vous régalant... fraises, framboises, kiwi, menthe et basilic se mélangent joyeusement.', 6.3, 5, 'recette-d17006-smoothie-detox-fraise-framboise-au-the.jpg'),
(4, 'L\'Onctueux Wai', 'Les îles s\'invitent dans ce smoothie , banane, kiwi et fruit de la passion pour un voyage au soleil.', 6.5, 3, 'recette-d23000-smoothie-banane-kiwi-et-fruits-de-la-passion.jpg'),
(5, 'Pina Wai', 'L\'exotisme est au rendez-vous dans ce smoothie composé de lait de coco, ananas et mangue.', 5.2, 3, 'recette-d23155-smoothie-mangue-facon-pina-colada (1).jpg'),
(6, 'Fresh Wai', 'Très rafraîchissant mélange de pommes, citron vert et banane.', 4.8, 3, 'recette-d7800-smoothie-pomme-citron-vert-banane.jpg'),
(7, 'Red Wai', 'Composé de mangue, d\'orange sanguine fraîche et de jus de carotte, ce Smoothie va glacer vos soirées d\'Halloween.', 5.2, 3, 'recette-d6770-smoothie-mangue-carotte-et-orange-sanguine.jpg'),
(8, 'Green Wai', 'Boisson onctueuse mixée à base de concombre et de kiwi et parfumée à la menthe.', 4.8, 3, 'recette-d6491-smoothie-de-concombre-aux-kiwis.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `RecipeProduct`
--

CREATE TABLE `RecipeProduct` (
  `id` int(5) NOT NULL,
  `idReciepe` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantityProduct` float NOT NULL,
  `idUnit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `RecipeProduct`
--

INSERT INTO `RecipeProduct` (`id`, `idReciepe`, `idProduct`, `quantityProduct`, `idUnit`) VALUES
(1, 1, 1, 2, 3),
(2, 1, 4, 3, 3),
(3, 1, 18, 4, 3),
(4, 2, 1, 2, 3),
(5, 2, 8, 3, 3),
(6, 2, 12, 4, 3),
(7, 3, 9, 3, 3),
(8, 3, 2, 4, 3),
(9, 3, 8, 3, 3),
(10, 3, 15, 4, 3),
(11, 3, 16, 6, 3),
(12, 4, 1, 4, 3),
(13, 4, 2, 4, 3),
(14, 4, 3, 5, 3),
(15, 5, 4, 6, 3),
(16, 5, 17, 5, 3),
(17, 5, 9, 6, 3),
(18, 6, 1, 4, 3),
(19, 6, 11, 3, 3),
(20, 6, 18, 2, 3),
(21, 7, 19, 3, 3),
(22, 7, 21, 2, 3),
(23, 7, 22, 500, 2),
(24, 8, 2, 4, 2),
(25, 8, 15, 4, 3),
(26, 8, 20, 6, 3);

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
(3, 'pièce', NULL);

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
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `lastName`, `firstName`, `email`, `password`, `zip`) VALUES
(1, 'Coco', 'Loulou', 'coco@orange.fr', 'coco', '69600'),
(2, 'Coco', 'Loulou', 'coco@orange.frfff', '$2y$11$6b4f06a806d5249bbda22u4Sz.U0VirGL.5MH3jRpeBrRmqszliXy', '69600'),
(3, 'Coco', 'Loulou', 'efefefef@ffff.fr', '$2y$11$b4d013615d7ebd0ed8d1euH0IS.QKqF8tJXwnJhTyowYnHYyR9gtG', '69600'),
(4, 'Toto', 'bibi', 'root@ROOT.fr', '$2y$11$d623dac5cbca97a7b6494uIhiFxEqfyQXuDXkJUOg6GzAIFBYW/4u', '69600'),
(5, 'Cocou', 'Loulou', 'coco@orange.frfffff', '$2y$11$63aca76c810741ae71b11uowZrYay4kwjwDLKeVJjbJ45eS.CgVTq', '69600');

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
-- Index pour la table `Recipe`
--
ALTER TABLE `Recipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `RecipeProduct`
--
ALTER TABLE `RecipeProduct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idReciepe` (`idReciepe`),
  ADD KEY `idProduct` (`idProduct`),
  ADD KEY `idUnit` (`idUnit`),
  ADD KEY `idUnit_2` (`idUnit`);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `Recipe`
--
ALTER TABLE `Recipe`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `RecipeProduct`
--
ALTER TABLE `RecipeProduct`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `Unit`
--
ALTER TABLE `Unit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `fk_reciepe` FOREIGN KEY (`idReciepe`) REFERENCES `Recipe` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Contraintes pour la table `Favorite`
--
ALTER TABLE `Favorite`
  ADD CONSTRAINT `fk_reciepeFavorite` FOREIGN KEY (`idReciepe`) REFERENCES `Recipe` (`id`),
  ADD CONSTRAINT `fk_userFavorite` FOREIGN KEY (`idUser`) REFERENCES `User` (`id`);

--
-- Contraintes pour la table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`idCategory`) REFERENCES `Category` (`id`);

--
-- Contraintes pour la table `RecipeProduct`
--
ALTER TABLE `RecipeProduct`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`idProduct`) REFERENCES `Product` (`id`),
  ADD CONSTRAINT `fk_reciepeProduct` FOREIGN KEY (`idReciepe`) REFERENCES `Recipe` (`id`),
  ADD CONSTRAINT `fk_unit` FOREIGN KEY (`idUnit`) REFERENCES `Unit` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
