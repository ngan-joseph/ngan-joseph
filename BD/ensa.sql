-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 10 mai 2020 à 05:49
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ensa`
--

-- --------------------------------------------------------

--
-- Structure de la table `abscence`
--

CREATE TABLE `abscence` (
  `matieres` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `nbr_heure` int(10) NOT NULL,
  `cne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abscence`
--

INSERT INTO `abscence` (`matieres`, `date`, `nbr_heure`, `cne`) VALUES
('anglais', '2020-04-24', 4, 4),
('c++', '2020-04-21', 3, 2),
('cisco', '2020-05-01', 3, 2),
('cpp', '2020-05-01', 1, 5),
('francais', '2020-04-02', 2, 4),
('histoire', '2020-05-02', 2, 3),
('maths', '2020-04-01', 4, 1),
('php', '2020-04-10', 6, 3),
('sql', '2020-04-01', 9, 5),
('theorie des gra', '2020-05-01', 1, 3),
('histoire', '2020-05-02', 3, 3),
('histoire', '2020-05-02', 3, 3),
('histoire', '2020-05-02', 3, 3),
('php', '2020-05-02', 2, 2),
('php', '2020-05-02', 3, 2),
('histoire', '2020-05-02', 2, 3),
('sql', '2020-05-04', 1, 12),
('francais', '2020-05-04', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

CREATE TABLE `eleves` (
  `cne` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `etat` int(10) DEFAULT NULL,
  `Photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`cne`, `nom`, `prenom`, `etat`, `Photo`) VALUES
(1, 'MARINO', 'KAMGA', 1, 'photos/homme.jpg'),
(2, 'ELKASMI', 'FATIMA', 1, 'photos/femme.webp'),
(3, 'NGAN', 'JOSEPH', 0, 'photos/boris.png'),
(4, 'TATANI', 'HERMAN', 1, 'photos/homme.jpg\r\n'),
(5, 'TOLLY', 'STEPHANE', 0, 'photos/homme.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `eleves`
--
ALTER TABLE `eleves`
  ADD PRIMARY KEY (`cne`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `cne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
