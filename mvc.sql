-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 03 nov. 2020 à 23:55
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(50) NOT NULL,
  `courseTitle` varchar(100) NOT NULL,
  `courseLanguage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`id`, `courseCode`, `courseTitle`, `courseLanguage`) VALUES
(1, 'EEE142', 'PHP', 'Anglais'),
(3, 'EEE124', 'MVC', 'Français'),
(4, 'EEE152', 'JavaScript', 'Anglais'),
(5, 'EEE171', 'CSS', 'Français'),
(6, 'EEE179', 'HTML', 'Français'),
(7, 'EEE192', 'React', 'Français'),
(8, 'CCC998', 'Node', 'Français'),
(9, 'EEE105', 'Python : Les bases', 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `studentsId` int(11) NOT NULL,
  `coursId` int(11) NOT NULL,
  `inscription_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `studentsId`, `coursId`, `inscription_date`) VALUES
(1, 1, 1, '2020-10-23'),
(2, 1, 1, '2020-10-23'),
(3, 2, 1, '2020-10-23'),
(4, 2, 4, '2020-10-23'),
(5, 2, 7, '2020-10-23'),
(6, 2, 8, '2020-10-23');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `ine` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`id`, `ine`, `firstName`, `lastName`, `address`, `city`, `mail`, `password`) VALUES
(1, 'CEE123456', 'Jean-Michel', 'LUY', 'Rue des Envierges', 'PARIS', 'jmicheluy@gmail.com', '$2y$10$oCV3SKcwd5QStOZfR8wWYuBN3QkdMICGYXRYbRuUtt3hcXBmmcuIa'),
(2, 'CEE123457', 'Hasnae', 'Chnaif', 'Rue Pablo Picasso', 'PARIS', 'hasona-18@gmail.com', '$2y$10$..OscET5D4v1bRRUHfpdOe1hHq9zME.7kW90Y2H8gL981PElxYDfC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
