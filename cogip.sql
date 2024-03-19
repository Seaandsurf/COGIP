-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : mar. 19 mars 2024 à 15:34
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `supplier` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type_id`, `country`, `tva`, `created_at`, `update_at`, `supplier`) VALUES
(1, 'Tech Innovations Ltd', 1, 'France', 'FR12345678901', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(2, 'Global Foods Inc', 2, 'Espagne', 'ESX987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(3, 'ElectroTech GmbH', 3, 'Allemagne', 'DE543219876', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(4, 'Fashion Trends Srl', 4, 'Italie', 'IT456789012', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(5, 'Innovative Solutions Ltd', 1, 'Royaume-Uni', 'GB123456789', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(6, 'TechXpert Inc', 1, 'États-Unis', 'US987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(7, 'Maple Leaf Corp', 2, 'Canada', 'CA123456789', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(8, 'Samurai Solutions Co.', 1, 'Japon', 'JP987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(9, 'BrasilTech Ltda', 1, 'Brésil', 'BR123456789', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(10, 'Aussie Adventures Pty Ltd', 5, 'Australie', 'AU987654321', '2024-02-28 11:42:53', '2024-02-28 11:42:53', NULL),
(11, 'hhhhh', 1, 'Pat', '123456789', '2024-03-01 13:15:30', '0000-00-00 00:00:00', NULL),
(12, 'Jean-eudine', 3, 'hghhhhg', '1111111', '2024-03-11 11:41:07', '0000-00-00 00:00:00', NULL),
(13, 'test', 1, 'SERBIE', '3333333', '2024-03-11 11:51:22', '0000-00-00 00:00:00', NULL),
(14, 'test', 1, 'SERBIE', 'GGFDGFDG', '2024-03-11 11:55:26', '0000-00-00 00:00:00', NULL),
(15, '111111', 1, 'SERBIE', 'GGFDGFDG', '2024-03-11 11:55:38', '0000-00-00 00:00:00', NULL),
(16, 'Jean-eudinesdsdsds', 1, 'SERBIE', '1111111', '2024-03-11 12:53:24', '0000-00-00 00:00:00', NULL),
(17, 'Jean-eudinesdsdsds', 4, 'SERBIE', '1111111', '2024-03-11 12:53:53', '0000-00-00 00:00:00', NULL),
(18, 'jhgkjjhg', 1, 'SERBIE', '1111111', '2024-03-11 13:38:19', '0000-00-00 00:00:00', NULL),
(19, 'hjhjjhj lklklkll', 4, 'Belgique', '11111111', '2024-03-11 14:00:44', '0000-00-00 00:00:00', NULL),
(20, 'hjhjjhj lklklkll', 4, 'Belgique', '11111111', '2024-03-11 14:10:04', '0000-00-00 00:00:00', NULL),
(21, 'piloupilou', 1, 'france', '11', '2024-03-11 14:16:08', '0000-00-00 00:00:00', NULL),
(22, '1', 3, 'SERBIE', '1111111', '2024-03-11 14:37:21', '0000-00-00 00:00:00', NULL),
(23, 'hjhjjhj lklklkll', 1, 'Belgique', '11111', '2024-03-11 15:11:13', '0000-00-00 00:00:00', NULL),
(24, ' jeans-eude', 4, 'SERBIE', '3333333', '2024-03-11 15:24:33', '0000-00-00 00:00:00', NULL),
(25, 'Robin Jardon', 3, 'hghhhhg', '1111111', '2024-03-11 17:33:42', '0000-00-00 00:00:00', NULL),
(26, 'hjhjjhj lklklkll', 3, 'Belgique', '11111', '2024-03-12 10:42:10', '0000-00-00 00:00:00', 0),
(27, 'hjhjjhj lklklkll', 1, 'Belgique', '11111', '2024-03-12 10:45:55', '0000-00-00 00:00:00', 0),
(28, 'hjhjjhj lklklkll', 3, 'Belgique', '11111111', '2024-03-12 10:51:50', '0000-00-00 00:00:00', 0),
(29, 'hjhjjhj lklklkll', 1, 'Belgique', '11111111', '2024-03-12 10:59:57', '0000-00-00 00:00:00', 1),
(30, 'hjhjjhj lklklkll', 1, 'Belgique', '11111111', '2024-03-12 12:21:17', '0000-00-00 00:00:00', 0),
(31, 'hjhjjhj lklklkll', 1, 'Belgique', '11111111', '2024-03-12 12:26:52', '0000-00-00 00:00:00', 0),
(32, 'hjhjjhj lklklkll', 3, 'Belgique', '11111111', '2024-03-12 12:28:28', '0000-00-00 00:00:00', 1),
(33, 'hjhjjhj lklklkll', 1, 'Belgique', '11111111', '2024-03-12 14:29:46', '0000-00-00 00:00:00', 1),
(34, 'testeeeeee', 1, 'Tonga', '11111', '2024-03-12 14:30:03', '0000-00-00 00:00:00', 0),
(36, 'o', 1, '0', '3333333', '2024-03-18 19:43:40', '2024-03-19 09:51:02', NULL);

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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
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
(10, 'Charlotte Rodriguez', 10, 'charlotte@example.com', '888888888', '2024-02-28 11:55:38', '2024-02-28 11:55:38'),
(13, 'Robin Jardon', 24, 'robin.jardon@gmail.com', '0470080521', '2024-03-11 17:24:42', '0000-00-00 00:00:00'),
(14, 'hjhjjhj6666666TEST lklklkll', 25, 'hkhjhjhhj', 'jhkjhkhkh', '2024-03-12 09:31:17', '0000-00-00 00:00:00'),
(15, 'hjhjjhj6666666TEST lklklkll', 34, 'khkjkjkjkj', 'jhkjhkhkh', '2024-03-12 14:50:12', '0000-00-00 00:00:00'),
(16, 'hjhjhjhjhjhjhj', 34, 'khkjkjkjkj', 'jhkjhkhkh', '2024-03-12 14:50:31', '0000-00-00 00:00:00'),
(17, 'hjhjjhj6666666TEST lklklkll', 34, 'khkjkjkjkj', 'jhkjhkhkh', '2024-03-12 14:50:50', '0000-00-00 00:00:00'),
(18, 'hjhjjhj6666666TEST lklklkll', 34, 'khkjkjkjkj', 'jhkjhkhkh', '2024-03-12 15:37:56', '0000-00-00 00:00:00'),
(19, 'hjhjjhj6666666TEST lklklkll', 34, 'khkjkjkjkj', 'jhkjhkhkh', '2024-03-12 15:38:47', '0000-00-00 00:00:00'),
(20, 'Robin Jardon', 34, 'robin.jardon@gmail.com', '1234567890', '2024-03-12 15:48:58', '0000-00-00 00:00:00'),
(21, 'jhjhjhjh', 36, 'robin.jardon@gmail.com', '043685115', '2024-03-12 15:53:22', '2024-03-19 10:39:11'),
(25, 'Robin Jardon', 36, 'robin.jardon@gmail.com', '043685115', '2024-03-19 10:53:15', '0000-00-00 00:00:00'),
(26, 'Jean-eudine', 36, 'robin.jardon@gmail.com', '+3243685115', '2024-03-19 10:54:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `id_company` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
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
(10, 'INV010', 10, 1364, '2024-02-28 11:54:01', '2024-02-28 13:28:39', '2024-04-30 00:00:00'),
(11, 'sdfghjklm', 25, 222222, '2024-03-12 09:45:31', '0000-00-00 00:00:00', '2024-03-20 00:00:00'),
(12, 'sdfghjklm', 25, 222222, '2024-03-12 10:08:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'sdfghjklm', 25, 222222, '2024-03-12 12:27:53', '0000-00-00 00:00:00', '2024-03-13 00:00:00'),
(14, 'sdfghjklm', 31, 222222, '2024-03-12 13:46:41', '0000-00-00 00:00:00', '2024-03-28 00:00:00'),
(15, 'sdfghjklm', 31, 222222, '2024-03-12 13:47:09', '0000-00-00 00:00:00', '2024-03-28 00:00:00'),
(16, 'sdfghjklm', 32, 222222, '2024-03-12 13:49:43', '0000-00-00 00:00:00', '2024-03-20 00:00:00'),
(17, 'tttttttttt', 32, 22222, '2024-03-12 14:12:12', '0000-00-00 00:00:00', '2024-03-27 00:00:00'),
(18, 'sdfghjklm', 32, 222222, '2024-03-12 14:21:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'tttttttttt', 32, 222222, '2024-03-12 14:22:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'bhbhbhbhb', 32, 222222, '2024-03-12 14:22:34', '0000-00-00 00:00:00', '2024-03-26 00:00:00'),
(21, 'ttttttAAAAA', 32, 5, '2024-03-12 14:25:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'testeeee', 32, 2222, '2024-03-12 14:29:18', '0000-00-00 00:00:00', '2024-03-20 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
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
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `role_id`, `last_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'John', 1, 'Doe', 'john@example.com', 'password123', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(2, 'Jane', 2, 'Smith', 'jane@example.com', 'password456', '2024-02-28 11:42:53', '2024-02-28 11:42:53'),
(3, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '12345', '2024-03-13 15:34:21', '0000-00-00 00:00:00'),
(4, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '123456', '2024-03-13 15:36:52', '0000-00-00 00:00:00'),
(5, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '1234567', '2024-03-13 15:38:15', '0000-00-00 00:00:00'),
(6, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '&&&&&', '2024-03-13 15:39:21', '0000-00-00 00:00:00'),
(7, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '111111111', '2024-03-13 15:40:54', '0000-00-00 00:00:00'),
(8, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', 'SDSDSDSDSD', '2024-03-13 15:41:20', '0000-00-00 00:00:00'),
(9, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '123456789', '2024-03-13 15:46:25', '0000-00-00 00:00:00'),
(10, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', 'DFFDFDFDF', '2024-03-13 15:47:06', '0000-00-00 00:00:00'),
(11, 'hjhjjhj6666666TEST', 1, 'lklklkll', 'robin.jardon@gmail.com', 'jjjjjjjjjjjjjjjj', '2024-03-13 15:50:04', '0000-00-00 00:00:00'),
(12, 'hjhjjhj', 1, 'lklklkll', 'robin.jardon@gmail.com', '11111111', '2024-03-13 16:01:46', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
