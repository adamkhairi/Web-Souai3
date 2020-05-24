-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 24 mai 2020 à 03:49
-- Version du serveur :  8.0.20
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sw3`
--

-- --------------------------------------------------------

--
-- Structure de la table `benevole`
--

CREATE TABLE `benevole` (
  `idbenevole` int NOT NULL,
  `nombenevole` varchar(255) DEFAULT NULL,
  `prenombenevole` varchar(255) DEFAULT NULL,
  `mailbenevole` text,
  `passwordbenevole` text,
  `idmatiere` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `benevole`
--

INSERT INTO `benevole` (`idbenevole`, `nombenevole`, `prenombenevole`, `mailbenevole`, `passwordbenevole`, `idmatiere`) VALUES
(1, 'O', 'u', 'o@o.o', 'o', 3),
(2, 'a', 'b', 'w@w.w', 'w', 1),
(3, 'ss', 'ss', 'ss', 'ss', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `idcours` int NOT NULL,
  `nomcours` varchar(255) DEFAULT NULL,
  `idmatiere` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idcours`, `nomcours`, `idmatiere`) VALUES
(1, 'cours1-Fr', 1),
(2, 'cours2-Fr', 1),
(3, 'cours1-Maths', 3),
(4, 'cours2-maths', 3),
(5, 'cours1-Philos', 4),
(6, 'cours2-Philos', 4),
(7, 'cours1-PC', 2),
(8, 'cours2-PC', 2);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `iddemande` int NOT NULL,
  `description` text,
  `idetudiantc` int DEFAULT NULL,
  `cours` int NOT NULL,
  `reponce` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`iddemande`, `description`, `idetudiantc`, `cours`, `reponce`) VALUES
(60, 'bb', 17, 1, 0),
(66, 'd', 17, 1, 0),
(71, 'd', 17, 1, 0),
(72, 'd', 17, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int NOT NULL,
  `nometudiant` varchar(255) DEFAULT NULL,
  `prenometudiant` varchar(255) DEFAULT NULL,
  `niveauscolaire` int NOT NULL,
  `filiere` int DEFAULT NULL,
  `mailetudiant` text,
  `passwordetudiant` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`, `niveauscolaire`, `filiere`, `mailetudiant`, `passwordetudiant`) VALUES
(1, 'Khairi', 'Adam', 2, 1, 'khairiadam1@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(9, 'a', 'b', 2, 3, 'a@a.a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(17, 'ABDELKBIR', 'a', 2, 1, 'abdo@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `idfiliere` int NOT NULL,
  `namfiliere` varchar(255) DEFAULT NULL,
  `idniveau` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `namfiliere`, `idniveau`) VALUES
(1, 'SVT', 2),
(2, 'SVT', 1),
(3, 'AR', 1),
(4, 'AR', 2);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int NOT NULL,
  `nommatiere` varchar(255) DEFAULT NULL,
  `idfiliere` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `nommatiere`, `idfiliere`) VALUES
(1, 'Français', 1),
(2, 'Physique', 1),
(3, 'Maths', 2),
(4, 'Philos', 2);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `idniveau` int NOT NULL,
  `niveau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`idniveau`, `niveau`) VALUES
(1, '1er année Bac'),
(2, '2éme année Bac');

-- --------------------------------------------------------

--
-- Structure de la table `reponce`
--

CREATE TABLE `reponce` (
  `idetudiant` int NOT NULL,
  `idevent` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reponce`
--

INSERT INTO `reponce` (`idetudiant`, `idevent`) VALUES
(17, 6),
(17, 6),
(17, 7),
(17, 6),
(17, 7),
(17, 7),
(17, 7),
(17, 7),
(17, 8),
(17, 8),
(17, 8),
(17, 8),
(17, 8),
(17, 9),
(17, 9),
(17, 9),
(17, 9),
(17, 9),
(17, 10),
(17, 10),
(17, 10),
(17, 10),
(17, 10),
(17, 11),
(17, 11),
(17, 11),
(17, 11),
(17, 11);

-- --------------------------------------------------------

--
-- Structure de la table `theevanets`
--

CREATE TABLE `theevanets` (
  `eventID` int NOT NULL,
  `coursID` int NOT NULL,
  `ProfID` int NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lien` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hours` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `theDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `benevole`
--
ALTER TABLE `benevole`
  ADD PRIMARY KEY (`idbenevole`),
  ADD KEY `idmatiere` (`idmatiere`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idcours`),
  ADD KEY `idmatier` (`idmatiere`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`iddemande`),
  ADD KEY `idetudiant` (`idetudiantc`),
  ADD KEY `idcours` (`cours`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idetudiant`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idfiliere`),
  ADD KEY `idnv` (`idniveau`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idmatiere`),
  ADD KEY `idfiliere` (`idfiliere`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`idniveau`);

--
-- Index pour la table `reponce`
--
ALTER TABLE `reponce`
  ADD KEY `idevent` (`idevent`);

--
-- Index pour la table `theevanets`
--
ALTER TABLE `theevanets`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `coursID` (`coursID`),
  ADD KEY `ProfID` (`ProfID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `benevole`
--
ALTER TABLE `benevole`
  MODIFY `idbenevole` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `idcours` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `iddemande` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idfiliere` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idmatiere` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `idniveau` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `theevanets`
--
ALTER TABLE `theevanets`
  MODIFY `eventID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `benevole`
--
ALTER TABLE `benevole`
  ADD CONSTRAINT `idmatiere` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `idmatier` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `idcours` FOREIGN KEY (`cours`) REFERENCES `cours` (`idcours`),
  ADD CONSTRAINT `idetudiant` FOREIGN KEY (`idetudiantc`) REFERENCES `etudiant` (`idetudiant`);

--
-- Contraintes pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD CONSTRAINT `idnv` FOREIGN KEY (`idniveau`) REFERENCES `niveau` (`idniveau`);

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `idfiliere` FOREIGN KEY (`idfiliere`) REFERENCES `filiere` (`idfiliere`);

--
-- Contraintes pour la table `theevanets`
--
ALTER TABLE `theevanets`
  ADD CONSTRAINT `theevanets_ibfk_1` FOREIGN KEY (`coursID`) REFERENCES `cours` (`idcours`),
  ADD CONSTRAINT `theevanets_ibfk_2` FOREIGN KEY (`ProfID`) REFERENCES `benevole` (`idbenevole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
