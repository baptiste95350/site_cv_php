-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mai 2020 à 13:33
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `nom_de_la_table`
--

CREATE TABLE `nom_de_la_table` (
  `idtitre` int(3) NOT NULL,
  `titre` varchar(20) DEFAULT NULL,
  `titre2` varchar(20) DEFAULT NULL,
  `information` varchar(250) DEFAULT NULL,
  `date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nom_de_la_table`
--

INSERT INTO `nom_de_la_table` (`idtitre`, `titre`, `titre2`, `information`, `date`) VALUES
(8, 'Pr&eacute;sentation', 'Baptiste Marie', 'Je suis actuellement en &eacute;cole sup&eacute;rieure a ynov paris campus c&#039;est une formation ing&eacute;sup, je sors d&#039;un bac sti2d ', 2020),
(11, 'cv', 'pr&eacute;sentation', 'je m&#039;apelle Baptiste Marie je suis actuellement &eacute;tudiant chez ynov en infromatique', 2020),
(17, 'Exp&eacute;rience', 'cv', 'test', 2020);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `nom_de_la_table`
--
ALTER TABLE `nom_de_la_table`
  ADD PRIMARY KEY (`idtitre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `nom_de_la_table`
--
ALTER TABLE `nom_de_la_table`
  MODIFY `idtitre` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
