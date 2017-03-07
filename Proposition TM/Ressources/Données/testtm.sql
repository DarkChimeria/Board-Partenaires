-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 07 Mars 2017 à 22:29
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `testtm`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `eventdatestart` datetime NOT NULL,
  `eventdateend` datetime NOT NULL,
  `eventtimestart` datetime NOT NULL,
  `eventtimeend` datetime NOT NULL,
  `eventlocation` varchar(100) NOT NULL,
  `eventprice` int(11) NOT NULL,
  `eventstock` int(11) NOT NULL,
  `historyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `historyid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `historydate` date NOT NULL,
  `historystock` int(11) NOT NULL,
  `stockid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pfirstname` varchar(50) NOT NULL,
  `pphone` varchar(16) NOT NULL,
  `pmail` varchar(75) NOT NULL,
  `pregisterdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `partenaires`
--

INSERT INTO `partenaires` (`pid`, `pname`, `pfirstname`, `pphone`, `pmail`, `pregisterdate`) VALUES
(1, 'Slimani', 'Anthony', '0671731261', 'anthonyslimani@orange.fr', '2017-03-07 21:46:43'),
(2, 'fsdf', 'dfsdfsdf', 'sfdf', 'sdqsd', '2017-03-07 22:04:09'),
(3, 'BERIOT', 'Corentin', '0654212121', 'corentin.beriot@laposte.net', '2017-03-07 22:18:11'),
(4, 'DUBESLI', 'Anthéco', '0654212121', 'user3@email.fr', '2017-03-07 22:18:11'),
(5, 'Arnoux', 'Eugène ', '07 65 95 86 31', 'onulowif-5391@yopmail.com', '2017-03-07 22:18:11'),
(6, 'Lanctot', 'David ', '07 85 42 15 32', 'bittukogupa-1315@yopmail.com', '2017-03-07 22:18:11'),
(7, 'Berthelette', 'Cammile', '07 62 54 85 32', 'alagoffin-9510@yopmail.com', '2017-03-07 22:18:11'),
(8, 'Dutour', 'Greg', '02 54 84 75 00', 'alagoffin-9510@yopmail.com', '2017-03-07 22:18:11'),
(9, 'SLIMANI', 'Anthony', '0654212121', 'anthonyslimani@orange.fr', '2017-03-07 22:18:11'),
(10, 'DUBOIS', 'Théophile', '0254212121', 'theophileda@hotmail.fr', '2017-03-07 22:18:11');

-- --------------------------------------------------------

--
-- Structure de la table `stocks`
--

CREATE TABLE `stocks` (
  `stockid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `eventstock` int(11) NOT NULL,
  `historyid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `testtable`
--

CREATE TABLE `testtable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `testtable`
--

INSERT INTO `testtable` (`id`, `name`) VALUES
(1, 'Toto'),
(2, 'Titi'),
(3, 'Tata'),
(4, 'Tutu'),
(5, 'Tata'),
(6, 'Tutu'),
(7, 'Tata'),
(8, 'Tutu'),
(9, 'Tata'),
(10, 'Tutu'),
(11, 'Tata'),
(12, 'Tutu'),
(13, 'Tata'),
(14, 'Tutu'),
(15, 'Tata'),
(16, 'Tutu'),
(17, 'Tata'),
(18, 'Tutu'),
(19, 'Tata'),
(20, 'Tutu'),
(21, 'Tata'),
(22, 'Tutu');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Index pour la table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyid`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`pid`);

--
-- Index pour la table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stockid`);

--
-- Index pour la table `testtable`
--
ALTER TABLE `testtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stockid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `testtable`
--
ALTER TABLE `testtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
