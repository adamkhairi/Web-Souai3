-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 07:47 AM
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
-- Database: `souaie`
--

-- --------------------------------------------------------

--
-- Table structure for table `benevole`
--

CREATE TABLE `benevole` (
  `idbenevole` int(11) NOT NULL,
  `nombenevole` varchar(255) DEFAULT NULL,
  `prenombenevole` varchar(255) DEFAULT NULL,
  `mailbenevole` text DEFAULT NULL,
  `passwordbenevole` text DEFAULT NULL,
  `idmatiere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `idcours` int(11) NOT NULL,
  `nomcours` varchar(255) DEFAULT NULL,
  `idmatiere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cours`
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
-- Table structure for table `demande`
--

CREATE TABLE `demande` (
  `iddemande` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `idetudiantc` int(11) DEFAULT NULL,
  `cours` int(11) NOT NULL,
  `idmatiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`iddemande`, `description`, `idetudiantc`, `cours`, `idmatiere`) VALUES
(6, 'adsdsfsfsdfxxxxxxxxxxxxxxxxxxxxxxxxx', 1, 8, 1),
(7, 'qqqq', 1, 4, 1),
(8, 'qqsss', 1, 4, 1),
(9, 'aeaeaeaeaeaea', 4, 4, 1),
(11, 'wwwwwwww', 1, 2, 2),
(12, 'wwwwwwww', 1, 2, 2),
(13, 'here may be a case when a user does not allow to store cookies on their machine. So there is another method to send session ID to the browser.', 1, 2, 1),
(14, ' there is another method to send session ID to the browser here may be a case when a user does not allow to store cookies on their machine. So', 1, 5, 1),
(15, '111111111111111111111111111111111111111', 1, 4, 2),
(16, '555555555555555555555555555555555555555555555\r\n555555555555555\r\n\r\n5555\r\nPLZ', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `nometudiant` varchar(255) DEFAULT NULL,
  `prenometudiant` varchar(255) DEFAULT NULL,
  `niveauscolaire` int(11) NOT NULL,
  `filiere` int(11) DEFAULT NULL,
  `mailetudiant` text DEFAULT NULL,
  `passwordetudiant` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`, `niveauscolaire`, `filiere`, `mailetudiant`, `passwordetudiant`) VALUES
(1, 'Khairi', 'Adam', 2, 1, 'khairiadam1@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(2, 'a', 'b', 1, 2, 'a@b.c', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(3, '', '', 0, 0, '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(4, 'xx', 'yy', 2, 2, 'x@y.x', '5dde896887f6754c9b15bfe3a441ae4806df2fde94001311e08bf110622e0bbe');

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

CREATE TABLE `filiere` (
  `idfiliere` int(11) NOT NULL,
  `namfiliere` varchar(255) DEFAULT NULL,
  `idniveau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `namfiliere`, `idniveau`) VALUES
(1, 'SVT', 2),
(2, 'SVT', 1),
(3, 'AR', 1),
(4, 'AR', 2);

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int(11) NOT NULL,
  `nommatiere` varchar(255) DEFAULT NULL,
  `idfiliere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `nommatiere`, `idfiliere`) VALUES
(1, 'Français', 1),
(2, 'Physique', 1),
(3, 'Maths', 2),
(4, 'Philos', 2);

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

CREATE TABLE `niveau` (
  `idniveau` int(11) NOT NULL,
  `niveau` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`idniveau`, `niveau`) VALUES
(1, '1er année Bac'),
(2, '2éme année Bac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benevole`
--
ALTER TABLE `benevole`
  ADD PRIMARY KEY (`idbenevole`),
  ADD KEY `idmatiere` (`idmatiere`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`idcours`),
  ADD KEY `idmatier` (`idmatiere`);

--
-- Indexes for table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`iddemande`),
  ADD KEY `idetudiant` (`idetudiantc`),
  ADD KEY `idmatieres` (`idmatiere`),
  ADD KEY `idcours` (`cours`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`idetudiant`);

--
-- Indexes for table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`idfiliere`),
  ADD KEY `idnv` (`idniveau`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`idmatiere`),
  ADD KEY `idfiliere` (`idfiliere`);

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
  MODIFY `idbenevole` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `idcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `iddemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idfiliere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Constraints for table `benevole`
--
ALTER TABLE `benevole`
  ADD CONSTRAINT `idmatiere` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`);

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `idmatier` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`);

--
-- Constraints for table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `idcours` FOREIGN KEY (`cours`) REFERENCES `cours` (`idcours`),
  ADD CONSTRAINT `idetudiant` FOREIGN KEY (`idetudiantc`) REFERENCES `etudiant` (`idetudiant`),
  ADD CONSTRAINT `idmatieres` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`);

--
-- Constraints for table `filiere`
--
ALTER TABLE `filiere`
  ADD CONSTRAINT `idnv` FOREIGN KEY (`idniveau`) REFERENCES `niveau` (`idniveau`);

--
-- Constraints for table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `idfiliere` FOREIGN KEY (`idfiliere`) REFERENCES `filiere` (`idfiliere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
