-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mars 2025 à 21:48
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bijouterie`
--

-- --------------------------------------------------------

--
-- Structure de la table `bijoux`
--

CREATE TABLE `bijoux` (
  `id` int(11) NOT NULL,
  `type_bijoux` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix_estime` varchar(11) NOT NULL,
  `prix_final` varchar(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `id_metiers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bijoux`
--

INSERT INTO `bijoux` (`id`, `type_bijoux`, `description`, `image`, `prix_estime`, `prix_final`, `etat`, `id_metiers`) VALUES
(40, 'Anklet', 'Chaine cheville serpent', 'photos_reparation/67dc44130b39a.jpg', '75,99', '45,55', 'réparé', 2),
(41, 'Maille argenté', 'Collier de maille argenté', 'photos_creation/67dca6c613d9b.jpg', '89,88', '', 'créé', 2),
(43, 'Boucles lucioles', 'Boucles d\'oreilles lucioles en or arrondi', 'photos_creation/67dcbe79211d4.jpg', '50', '', 'créé', 1),
(44, 'Bague de mariage', 'èj_uj,kiç', 'photos_creation/67dd13cbe2b37.jpg', '33', '', 'créé', 1),
(45, 'sika', 'orné\"', 'photos_creation/67dd48b3e00e9.webp', '2500', '', 'créé', 1),
(46, 'Colier', 'un beau collier', 'photos_creation/67dd6b41da2c1.webp', '500', '', 'créé', 1),
(47, 'Bagues en Argent', 'hpiho', 'photos_reparation/67ddde1fa851b.jpg', '888,45', '49649', 'réparé', 3),
(48, 'Percing', 'ihohpj', 'photos_reparation/67ddde5174892.jpg', '787', '454', 'réparé', 3);

-- --------------------------------------------------------

--
-- Structure de la table `metiers`
--

CREATE TABLE `metiers` (
  `id` int(11) NOT NULL,
  `fondeur` varchar(255) NOT NULL,
  `sertisseur` int(255) NOT NULL,
  `polisseur` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `possede_un`
--

CREATE TABLE `possede_un` (
  `id_metiers` int(11) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `type_materiaux` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `prix_estime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tasks`
--

INSERT INTO `tasks` (`id`, `type_materiaux`, `description`, `statut`, `images`, `prix_estime`) VALUES
(11, 'Aluminium polis', 'La pierre est parfaitement sertie, rien ne peut la détacher', 'travail fait', 'photos_reparation/67dcb8e141912.jpg', 0),
(12, 'Or durcit', 'Or durcit dans la fournaise', 'travail fait', 'photos_reparation/67dcba06e6298.jpg', 0),
(14, 'Diamands', 'Utilisation de diamands 24 kara farcit a l\'oignon', 'travail fait', 'photos_reparation/67dcbcea01d47.jpg', 0),
(15, 'Sertisse-tout', 'utilisation d\'un sertisse-tout pour sertisser l\'Anklet', 'travail fait', 'photos_reparation/67dcbe0055fdd.jpg', 0),
(16, 'Or', 'Utilisation du fourneau pour fondre l\'or', 'travail fait', 'photos_reparation/67dcbeb967d84.jpg', 0),
(17, 'Métal durcit', 'gtbgtnhy', 'travail fait', 'photos_reparation/67dd122503c08.webp', 0),
(18, 'k;jç;çk;op', 'uj,k;çl:om', 'travail fait', 'photos_reparation/67dd12e544050.webp', 0),
(19, 'Aluminium polis', 'La pierre est parfaitement sertie, rien ne peut la détacher', 'travail fait', 'photos_creation/67dd1fa933bc6.jpg', 8895892),
(20, 'Métal durcit', 'Metal durcit correctment', 'travail fait', 'photos_reparation/67dd5f6e241c3.jpg', 0),
(21, 'Métal durcit', 'Metal durcit correctment', 'travail fait', 'photos_reparation/67dd5f764857b.jpg', 0),
(22, 'or', 'plus beau', 'travail fait', 'photos_reparation/67dd6b8aba88d.webp', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mot_pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'role'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mot_pass`, `role`) VALUES
(29, 'chef', 'chef', '$2y$10$ZKpcaAt4Nae/X.mw3hefw.8g/Iial8Fr7tYFlfGNQfvRx.4k9n7Y.', 'Chef'),
(30, 'fondeur', 'fondeur', '$2y$10$pZkcxXgnWWiIIORVpwA0huheTsqdfRS4WeE.4H/j4Y0BXyZw9u2Cy', 'Fondeur'),
(31, 'sertisseur', 'sertisseur', '$2y$10$5py3XBNmt8twoQOm386s8.OFXGlfTuy.6aQcIBLJa61Jk1qRfy5oC', 'Sertisseur'),
(32, 'poli', 'poli', '$2y$10$.XOD1Q66NkZSggiZNTnxKett8u4dQ.XwdqhdmFqtsB/im6i2InayO', 'Polisseur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bijoux`
--
ALTER TABLE `bijoux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `metiers`
--
ALTER TABLE `metiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bijoux`
--
ALTER TABLE `bijoux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `metiers`
--
ALTER TABLE `metiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
