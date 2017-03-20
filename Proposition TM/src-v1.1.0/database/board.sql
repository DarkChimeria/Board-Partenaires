-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Mars 2017 à 00:25
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shareboard`
--

-- --------------------------------------------------------

--
-- Structure de la table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 1, 'Share One', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet lacus vel nisl sollicitudin sodales at vitae leo. Integer eget ligula a mauris pulvinar consectetur quis in nisl.', 'http://linkone.com', '2017-03-19 21:18:13'),
(2, 1, 'Share Two', 'Collicitudin sodales at vitae leo. Integer eget ligula a mauris pulvinar consectetur quis in nisl.', 'http://google.com', '2017-03-19 21:18:13'),
(3, 1, 'Test', 'Site perso', 'http://195.154.161.144/', '2017-03-19 21:20:20'),
(4, 1, 'Titre News', 'Test', 'http://localhost/poo/news/add', '2017-03-19 22:57:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `adress`, `cp`, `city`, `password`, `register_date`) VALUES
(1, 'admin', 'anthonyslimani@orange.fr', '11 Rue Nationale', '36260', 'Reuilly', 'e10adc3949ba59abbe56e057f20f883e', '2017-03-19 21:19:37'),
(2, 'user1', 'test@test.com', '32 Route du bas-berry', '36260', 'Reuilly', '81dc9bdb52d04dc20036dbd8313ed055', '2017-03-19 22:29:49'),
(3, 'user2', 'test@test.com', '7 Impasse Champion', '36100', 'Issoudun', '81dc9bdb52d04dc20036dbd8313ed055', '2017-03-19 22:33:09');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
