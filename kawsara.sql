-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 juin 2024 à 10:53
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kawsara`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `titre`, `description`, `image`) VALUES
(1, 'Blog 3', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolorum id porro? Cum, corporis illum voluptatem fuga quidem id quos.\r\n                            ', '6649f57eafa98.jgp'),
(3, 'une vie de boy', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sunt aliquam assumenda esse repellendus, reiciendis minima at in, est eligendi consequatur placeat ipsa voluptates! Quisquam.\r\n', '664b299979d9b.jgp'),
(4, 'appel des arènes', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sunt aliquam assumenda esse repellendus, reiciendis minima at in, est eligendi consequatur placeat ipsa voluptates! Quisquam.\r\n                ', '664b29af15dcb.jgp');

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` double NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `nom`, `prix`, `description`, `image`, `statut`) VALUES
(2, 'chambre 2', 5800, 'xcvbnlkjh', '6606868fdeede.jpg', 1),
(3, 'chambre vip', 56000, 'CHAMBRE VIP', '660af09365bd9.jpg', 0),
(5, 'Luxury', 6000, 'chambre', '661aac0fbf1c6.jpg', 0),
(6, 'room 2', 5600, '                     chambre', '661aac31d9d0e.jpg', 0),
(7, 'room 3', 7500, '                     chambre', '661aac725f190.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix_total` float NOT NULL,
  `client_id` int(11) NOT NULL,
  `chambre_id` int(11) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `reference`, `date_debut`, `date_fin`, `prix_total`, `client_id`, `chambre_id`, `statut`) VALUES
(1, '#ref1717249200', '2024-06-01', '2024-06-02', 5800, 2, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `cni` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `adresse`, `tel`, `cni`, `email`, `motdepasse`, `role`) VALUES
(1, 'Djiby', 'Ndiaye', 'Dakar', '+221 0783123657', '23456789', 'admin@gmail.com', '$2y$12$q0cnE9NpND7RoDB.oFfYh.4iAOle0Z4TQzIlIXOAFdfBlcz1RMRlO', 'admin'),
(2, 'alioune', 'fall', 'Cambérène 2', '07 78 47 64 62', '23456789087', 'client@gmail.com', '$2y$12$enKDapx38NlxHx6WkldLkOcQ7Ab.uFuf40H2i4yQ9VBY3DhtinVtm', 'client'),
(5, 'Khadija', 'Gueye', 'Cambérène 2', '0783123657', '4521362125', 'ndeye@gmail.com', '$2y$12$lZYaS6FHt30TbI/arzap0.g/wAmzQlbkD00M7Ki.wvcg6T52C8nFq', 'client'),
(6, 'Modou', 'Diop', 'Touba', '07 62 78 29 82', '75252222222', 'modou@gmail.com', '$2y$12$dVQ4nM9Sbgml/OWVGaFZW.YGTRx/YqdZW8/O1jtar.Pid449ibthe', 'employe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `chambre_id` (`chambre_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`chambre_id`) REFERENCES `chambres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
