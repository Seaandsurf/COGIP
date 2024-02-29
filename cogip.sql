-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mer. 28 fév. 2024 à 13:29
-- Version du serveur : 11.2.2-MariaDB-1:11.2.2+maria~ubu2204
-- Version de PHP : 8.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--
CREATE DATABASE IF NOT EXISTS `cogip` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cogip`;

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tva` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type_id`, `country`, `tva`, `created_at`, `update_at`) VALUES
(1, 'Tech Innovations Ltd', 1, 'France', 'FR12345678901', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(2, 'Global Foods Inc', 2, 'Espagne', 'ESX987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(3, 'ElectroTech GmbH', 3, 'Allemagne', 'DE543219876', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(4, 'Fashion Trends Srl', 4, 'Italie', 'IT456789012', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(5, 'Innovative Solutions Ltd', 1, 'Royaume-Uni', 'GB123456789', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(6, 'TechXpert Inc', 1, 'États-Unis', 'US987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(7, 'Maple Leaf Corp', 2, 'Canada', 'CA123456789', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(8, 'Samurai Solutions Co.', 1, 'Japon', 'JP987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(9, 'BrasilTech Ltda', 1, 'Brésil', 'BR123456789', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(10, 'Aussie Adventures Pty Ltd', 5, 'Australie', 'AU987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'David Johnson', 1, 'david@example.com', '123456789', '2024-02-28 11:45:59', '2024-02-28 11:45:59'),
(2, 'Alice Brown', 2, 'alice@example.com', '987654321', '2024-02-28 11:45:59', '2024-02-28 11:45:59'),
(3, 'Michael Smith', 3, 'michael@example.com', '111111111', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(4, 'Sophie Johnson', 4, 'sophie@example.com', '222222222', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(5, 'James Williams', 5, 'james@example.com', '333333333', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(6, 'Emma Brown', 6, 'emma@example.com', '444444444', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(7, 'Oliver Taylor', 7, 'oliver@example.com', '555555555', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(8, 'Ella Martinez', 8, 'ella@example.com', '666666666', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(9, 'Noah Garcia', 9, 'noah@example.com', '777777777', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(10, 'Charlotte Rodriguez', 10, 'charlotte@example.com', '888888888', '2024-02-28 11:55:38', '2024-02-28 11:55:38');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `id_company` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `date_due` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `ref`, `id_company`, `price`, `created_at`, `updated_at`, `date_due`) VALUES
(1, 'INV001', 1, 150, '2024-02-28 11:52:59', '2024-02-28 13:27:18', '2024-03-15 00:00:00'),
(2, 'INV002', 2, 300, '2024-02-28 11:52:59', '2024-02-28 13:27:26', '2024-03-20 00:00:00'),
(3, 'INV003', 3, 127, '2024-02-28 11:52:59', '2024-02-28 13:27:34', '2024-03-25 00:00:00'),
(4, 'INV004', 4, 1650, '2024-02-28 11:52:59', '2024-02-28 13:27:45', '2024-03-30 00:00:00'),
(5, 'INV005', 5, 390, '2024-02-28 11:52:59', '2024-02-28 13:27:52', '2024-04-05 00:00:00'),
(6, 'INV006', 6, 328, '2024-02-28 11:54:01', '2024-02-28 13:28:02', '2024-04-10 00:00:00'),
(7, 'INV007', 7, 459, '2024-02-28 11:54:01', '2024-02-28 13:28:12', '2024-04-15 00:00:00'),
(8, 'INV008', 8, 131, '2024-02-28 11:54:01', '2024-02-28 13:28:20', '2024-04-20 00:00:00'),
(9, 'INV009', 9, 99, '2024-02-28 11:54:01', '2024-02-28 13:28:30', '2024-04-25 00:00:00'),
(10, 'INV010', 10, 1364, '2024-02-28 11:54:01', '2024-02-28 13:28:39', '2024-04-30 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Créer', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(2, 'Lire', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(3, 'Mettre à jour', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(4, 'Supprimer', '2024-02-28 11:42:53', '2024-02-28 11:42:53');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(2, 'Utilisateur', '2024-02-28 11:42:53', '2024-02-28 11:42:53');

-- --------------------------------------------------------

--
-- Structure de la table `roles_permission`
--

CREATE TABLE `roles_permission` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles_permission`
--

INSERT INTO `roles_permission` (`id`, `permission_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Technologie', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(2, 'Alimentation', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(3, 'Électronique', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(4, 'Mode', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(5, 'Tourisme', '2024-02-28 11:42:53', '2024-02-28 11:42:53');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `role_id`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'John', 1, 'Doe', 'john@example.com', 'password123', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(2, 'Jane', 2, 'Smith', 'jane@example.com', 'password456', '2024-02-28 11:42:53', '2024-02-28 11:42:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`type_id`) USING BTREE;

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`company_id`) USING BTREE;

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_company`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGNKEY` (`role_id`),
  ADD KEY `FK_PERMISSION` (`permission_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `roles_permission`
--
ALTER TABLE `roles_permission`
  ADD CONSTRAINT `FK_PERMISSION` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `FOREIGNKEY` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FOREIGN` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
