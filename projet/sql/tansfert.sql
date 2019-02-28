-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 28 fév. 2019 à 23:06
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nan`
--

-- --------------------------------------------------------

--
-- Structure de la table `tansfert`
--

CREATE TABLE `tansfert` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `montant` int(16) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `telephone` int(16) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `operateur` varchar(10) NOT NULL,
  `nom_b` varchar(50) NOT NULL,
  `prenom_b` varchar(50) NOT NULL,
  `telephone_b` int(16) NOT NULL,
  `pays_b` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tansfert`
--

INSERT INTO `tansfert` (`id`, `nom`, `prenom`, `montant`, `sexe`, `telephone`, `pays`, `operateur`, `nom_b`, `prenom_b`, `telephone_b`, `pays_b`) VALUES
(1, 'KONE', 'BRAHIMA', 250000, 'H', 57560417, 'COTE d\'IVOIRE', 'ORANGE', 'BALDE', 'MOUSTAPHA', 49265217, 'COTE D\'IVOIRE'),
(2, 'OUDRAOGO', 'HAMADOU', 50000, 'H', 1940494, 'BURKINA FASO', 'MOOV', 'TRAORE', 'MOUSSA', 53808049, 'MALI'),
(3, 'KONE', 'BRAHIMA', 250000, 'H', 57560417, 'COTE d\'IVOIRE', 'ORANGE', 'BALDE', 'MOUSTAPHA', 49265217, 'COTE D\'IVOIRE'),
(4, 'OUDRAOGO', 'HAMADOU', 50000, 'H', 1940494, 'BURKINA FASO', 'MOOV', 'TRAORE', 'MOUSSA', 53808049, 'MALI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tansfert`
--
ALTER TABLE `tansfert`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tansfert`
--
ALTER TABLE `tansfert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
