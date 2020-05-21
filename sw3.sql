-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 08:45 AM
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
-- Database: `sw3`
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

--
-- Dumping data for table `benevole`
--

INSERT INTO `benevole` (`idbenevole`, `nombenevole`, `prenombenevole`, `mailbenevole`, `passwordbenevole`, `idmatiere`) VALUES
(1, 'O', 'u', 'o@o.o', 'o', 3),
(2, 'a', 'b', 'w@w.w', 'w', 1),
(3, 'ss', 'ss', 'ss', 'ss', NULL);

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
  `cours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demande`
--

INSERT INTO `demande` (`iddemande`, `description`, `idetudiantc`, `cours`) VALUES
(38, 'hhghgngn', 9, 5),
(39, 'qqxqxqxw', 9, 3),
(40, 'qqqqqqqqqqqqqq', 9, 2),
(41, 'Weeeeee', 9, 5),
(42, 'kkkkkk', 9, 8),
(43, '!!!!!!!!!!!!!!!!!!', 9, 5);

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
(1, 'Khairi', 'Adam', 2, 1, 'khairiadam1@gmail.com', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(2, 'a', 'b', 1, 2, 'a@b.c', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(3, '', '', 0, 0, '', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(4, 'xx', 'yy', 2, 2, 'x@y.x', '5dde896887f6754c9b15bfe3a441ae4806df2fde94001311e08bf110622e0bbe'),
(5, 'ayoub', 'benchihaja', 1, 1, 'ayoub@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(6, 'ccc', 'dddd', 1, 1, 'ad@ad.d', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(7, 'ww', 'wxxw', 2, 1, 'w@w.w', 'b84ff8057ee3a7f87deac4ae29ac59292f02e6c28f987031648011018384d888'),
(8, 'm', 'm', 2, 3, 'm@m.m', '62c66a7a5dd70c3146618063c344e531e6d4b59e379808443ce962b3abd63c5a'),
(9, 'a', 'b', 2, 3, 'a@a.a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(10, 'q', 'q', 2, 1, 'q@q.q', '8e35c2cd3bf6641bdb0e2050b76932cbb2e6034a0ddacc1d9bea82a6ba57f7cf'),
(11, 'z', 'z', 1, 3, 'z@z.z', '594e519ae499312b29433b7dd8a97ff068defcba9755b6d5d00e84c524d67b06'),
(12, 'khairi', 'adam', 2, 2, 'khairiadam@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(13, 'khairi', 'adam', 2, 1, 'adam@gmail.com', 'f7f376a1fcd0d0e11a10ed1b6577c99784d3a6bbe669b1d13fae43eb64634f6e'),
(14, 'salim ', 'youssef', 2, 2, 'salim@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(15, 'b', 'b', 2, 2, 'b@b.b', '3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d'),
(16, 't', 't', 2, 1, 't@t.t', 'e3b98a4da31a127d4bde6e43033f66ba274cab0eb7eb1c70ec41402bf6273dd8');

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

-- --------------------------------------------------------

--
-- Table structure for table `theevanets`
--

CREATE TABLE `theevanets` (
  `eventID` int(11) NOT NULL,
  `coursID` int(11) NOT NULL,
  `ProfID` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hours` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `theDate` date DEFAULT NULL,
  `reponse` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theevanets`
--

INSERT INTO `theevanets` (`eventID`, `coursID`, `ProfID`, `message`, `lien`, `hours`, `theDate`, `reponse`) VALUES
(6, 4, 2, '2222', '2222', '22:22', '2020-05-08', ''),
(7, 5, 2, '22', '22', '22:22', '2020-05-14', '');

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
-- Indexes for table `theevanets`
--
ALTER TABLE `theevanets`
  ADD PRIMARY KEY (`eventID`),
  ADD KEY `coursID` (`coursID`),
  ADD KEY `ProfID` (`ProfID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benevole`
--
ALTER TABLE `benevole`
  MODIFY `idbenevole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `idcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `demande`
--
ALTER TABLE `demande`
  MODIFY `iddemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `theevanets`
--
ALTER TABLE `theevanets`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `idetudiant` FOREIGN KEY (`idetudiantc`) REFERENCES `etudiant` (`idetudiant`);

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

--
-- Constraints for table `theevanets`
--
ALTER TABLE `theevanets`
  ADD CONSTRAINT `theevanets_ibfk_1` FOREIGN KEY (`coursID`) REFERENCES `cours` (`idcours`),
  ADD CONSTRAINT `theevanets_ibfk_2` FOREIGN KEY (`ProfID`) REFERENCES `benevole` (`idbenevole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
