-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 04:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sway3`
--

-- --------------------------------------------------------

--
-- Table structure for table `benevole`
--

CREATE TABLE `benevole` (
  `idbenevole` int(11) NOT NULL,
  `nombenevole` varchar(255) NOT NULL,
  `prenombenevole` varchar(255) NOT NULL,
  `mailbenevole` varchar(255) NOT NULL,
  `passwordbenevole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benevole`
--

INSERT INTO `benevole` (`idbenevole`, `nombenevole`, `prenombenevole`, `mailbenevole`, `passwordbenevole`) VALUES
(1, 'nom', 'prenom', 'zeze@gaim.com', 'adsdsds'),
(2, 'nnn', 'nnnnn', 'mail1@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `idcours` int(11) NOT NULL,
  `nomcours` varchar(255) NOT NULL,
  `idmatiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`idcours`, `nomcours`, `idmatiere`) VALUES
(1, 'algebre', 1),
(2, 'sss', 1),
(3, 'dddd', 2),
(4, 'rr', 2),
(6, 'rr', 2);

-- --------------------------------------------------------

--
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `iddemande` int(11) NOT NULL,
  `description` text NOT NULL,
  `idetudiantc` int(11) DEFAULT NULL,
  `idcours` int(11) NOT NULL,
  `idniveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`iddemande`, `description`, `idetudiantc`, `idcours`, `idniveau`) VALUES
(1, ' sssss', 8, 0, 0),
(2, 'cxxx', 8, 0, 0),
(3, 'hhhh', 8, 0, 0),
(4, 'xxxx', 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `nometudiant` varchar(255) NOT NULL,
  `prenometudiant` varchar(255) NOT NULL,
  `niveauscolaire` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `mailetudiant` varchar(255) NOT NULL,
  `passwordetudiant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`, `niveauscolaire`, `filiere`, `mailetudiant`, `passwordetudiant`) VALUES
(3, '11', '11', '1', '1', '11@1.1', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b'),
(4, '22', '2', '2', '2', '22@2.2', 'd4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35'),
(5, '22', '2', '2', '2', '2@2.2', 'd4735e3a265e16eee03f59718b9b5d03019c07d8b6c51f90da3a666eec13ab35'),
(6, '44', '44', '2', '44', '44@4.4', '71ee45a3c0db9a9865f7313dd3372cf60dca6479d46261f3542eb9346e4a04d6'),
(7, '33', '33', '1', '33', '33@3.3', 'c6f3ac57944a531490cd39902d0f777715fd005efac9a30622d5f5205e7f6894'),
(8, 'a', 'a', '2', 'a', 'a@a.a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(9, 'e', 'e', '2', 'e', 'e@e.e', '3f79bb7b435b05321651daefd374cdc681dc06faa65e374e38337b88ca046dea');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int(11) NOT NULL,
  `nommatiere` varchar(255) NOT NULL,
  `idniveau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `nommatiere`, `idniveau`) VALUES
(1, 'math', 1),
(2, 'pc', 2),
(3, 'fr', 1),
(4, 'ar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `idniveau` int(11) NOT NULL,
  `niveau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`idniveau`, `niveau`) VALUES
(1, '2eme bac'),
(2, '1er bac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benevole`
--
ALTER TABLE `benevole`
  ADD PRIMARY KEY (`idbenevole`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idcours`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`iddemande`),
  ADD KEY `idetudiantc` (`idetudiantc`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idetudiant`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idmatiere`);

--
-- Indexes for table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`idniveau`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benevole`
--
ALTER TABLE `benevole`
  MODIFY `idbenevole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `idcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `iddemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idmatiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `idniveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`idetudiantc`) REFERENCES `etudiant` (`idetudiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
