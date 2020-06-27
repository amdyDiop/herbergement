-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 27 juin 2020 à 22:00
-- Version du serveur :  8.0.20-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hebergement`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id` int NOT NULL,
  `nom` varchar(45) NOT NULL,
  `numero` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `batiment`
--

INSERT INTO `batiment` (`id`, `nom`, `numero`) VALUES
(1, 'batiment A', '001'),
(2, 'batiment B', '002');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int NOT NULL,
  `numero` varchar(3) NOT NULL,
  `type_chambre_id` int NOT NULL,
  `batiment_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id`, `numero`, `type_chambre_id`, `batiment_id`) VALUES
(1, '001', 2, 1),
(2, '002', 2, 1),
(3, '003', 1, 1),
(4, '004', 2, 2),
(5, '005', 1, 2),
(6, '006', 2, 1),
(7, '007', 1, 1),
(8, '008', 1, 2),
(9, '009', 1, 1),
(10, '019', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int NOT NULL,
  `matricule` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `date_naiss` date NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `chambre_id` int DEFAULT NULL,
  `type_bourse_id` int DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adresse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_bourse`
--

CREATE TABLE `type_bourse` (
  `id` int NOT NULL,
  `libelle` varchar(20) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `type_bourse`
--

INSERT INTO `type_bourse` (`id`, `libelle`, `code`) VALUES
(1, 'BOURSE ENTIER', 'BE'),
(2, 'DEMI BOURSE', 'DB'),
(3, 'NON BOURSIER', 'NB');

-- --------------------------------------------------------

--
-- Structure de la table `type_chambre`
--

CREATE TABLE `type_chambre` (
  `id` int NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_chambre`
--

INSERT INTO `type_chambre` (`id`, `type`) VALUES
(1, 'INDIVIDUEL'),
(2, 'DEUX');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `numero_UNIQUE` (`numero`),
  ADD KEY `fk_chambre_type_chambrre1_idx` (`type_chambre_id`),
  ADD KEY `fk_chambre_batiment1_idx` (`batiment_id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule_UNIQUE` (`matricule`),
  ADD UNIQUE KEY `matricule` (`matricule`),
  ADD UNIQUE KEY `email` (`email`,`telephone`),
  ADD KEY `fk_etudiant_chambre_idx` (`chambre_id`),
  ADD KEY `fk_etudiant_bourse1_idx` (`type_bourse_id`);

--
-- Index pour la table `type_bourse`
--
ALTER TABLE `type_bourse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_bourse`
--
ALTER TABLE `type_bourse`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_chambre`
--
ALTER TABLE `type_chambre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `fk_chambre_batiment1` FOREIGN KEY (`batiment_id`) REFERENCES `batiment` (`id`),
  ADD CONSTRAINT `fk_chambre_type_chambrre1` FOREIGN KEY (`type_chambre_id`) REFERENCES `type_chambre` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`type_bourse_id`) REFERENCES `type_bourse` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_etudiant_chambre` FOREIGN KEY (`chambre_id`) REFERENCES `chambre` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
