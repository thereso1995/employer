-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 13 sep. 2019 à 02:07
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vrai`
--

-- --------------------------------------------------------

--
-- Structure de la table `em`
--

CREATE TABLE `em` (
  `id` int(11) NOT NULL,
  `matricule` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tdate` varchar(100) NOT NULL,
  `sal` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Déchargement des données de la table `em`
--

INSERT INTO `em` (`id`, `matricule`, `nom`, `prenom`, `tdate`, `sal`, `tel`, `email`) VALUES
(12, 'EM001', 'lopez', 'francisco', '2019-09-04', '120000', '78799900', 'flammedamour@gmail.com'),
(13, 'EM-00000', 'sisco', 'ndiayen', '01/12/05', '125000', '77052014', 'fatou@gmail.com'),
(14, 'EM-00000', 'moussa', 'diop', '01/12/05', '160000', '77222222', 'moussa@gmailcom'),
(15, 'EM-0', 'astou', 'sall', '01/12/05', '175000', '77052014', 'astou@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `em`
--
ALTER TABLE `em`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `em`
--
ALTER TABLE `em`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
