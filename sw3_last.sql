-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table sw3.benevole: ~3 rows (approximately)
/*!40000 ALTER TABLE `benevole` DISABLE KEYS */;
INSERT INTO `benevole` (`idbenevole`, `nombenevole`, `prenombenevole`, `mailbenevole`, `passwordbenevole`, `idmatiere`) VALUES
	(1, 'O', 'u', 'o@o.o', 'o', 3),
	(2, 'a', 'b', 'w@w.w', 'w', 1),
	(3, 'ss', 'ss', 'ss', 'ss', NULL);
/*!40000 ALTER TABLE `benevole` ENABLE KEYS */;

-- Dumping data for table sw3.cours: ~8 rows (approximately)
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
INSERT INTO `cours` (`idcours`, `nomcours`, `idmatiere`) VALUES
	(1, 'cours1-Fr', 1),
	(2, 'cours2-Fr', 1),
	(3, 'cours1-Maths', 3),
	(4, 'cours2-maths', 3),
	(5, 'cours1-Philos', 4),
	(6, 'cours2-Philos', 4),
	(7, 'cours1-PC', 2),
	(8, 'cours2-PC', 2);
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;

-- Dumping data for table sw3.demande: ~7 rows (approximately)
/*!40000 ALTER TABLE `demande` DISABLE KEYS */;
INSERT INTO `demande` (`iddemande`, `description`, `idetudiantc`, `cours`, `reponce`) VALUES
	(38, 'hhghgngn', 9, 5, 0),
	(39, 'qqxqxqxw', 9, 3, 0),
	(40, 'qqqqqqqqqqqqqq', 9, 2, 0),
	(42, 'kkkkkk', 1, 8, 0),
	(43, '!!!!!!!!!!!!!!!!!!', 1, 5, 0),
	(44, 'sss', 1, 3, 0),
	(45, 'ss', 1, 4, 0);
/*!40000 ALTER TABLE `demande` ENABLE KEYS */;

-- Dumping data for table sw3.etudiant: ~2 rows (approximately)
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`, `niveauscolaire`, `filiere`, `mailetudiant`, `passwordetudiant`) VALUES
	(1, 'Khairi', 'Adam', 2, 1, 'khairiadam1@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
	(9, 'a', 'b', 2, 3, 'a@a.a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb');
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;

-- Dumping data for table sw3.filiere: ~4 rows (approximately)
/*!40000 ALTER TABLE `filiere` DISABLE KEYS */;
INSERT INTO `filiere` (`idfiliere`, `namfiliere`, `idniveau`) VALUES
	(1, 'SVT', 2),
	(2, 'SVT', 1),
	(3, 'AR', 1),
	(4, 'AR', 2);
/*!40000 ALTER TABLE `filiere` ENABLE KEYS */;

-- Dumping data for table sw3.matiere: ~4 rows (approximately)
/*!40000 ALTER TABLE `matiere` DISABLE KEYS */;
INSERT INTO `matiere` (`idmatiere`, `nommatiere`, `idfiliere`) VALUES
	(1, 'Français', 1),
	(2, 'Physique', 1),
	(3, 'Maths', 2),
	(4, 'Philos', 2);
/*!40000 ALTER TABLE `matiere` ENABLE KEYS */;

-- Dumping data for table sw3.niveau: ~2 rows (approximately)
/*!40000 ALTER TABLE `niveau` DISABLE KEYS */;
INSERT INTO `niveau` (`idniveau`, `niveau`) VALUES
	(1, '1er année Bac'),
	(2, '2éme année Bac');
/*!40000 ALTER TABLE `niveau` ENABLE KEYS */;

-- Dumping data for table sw3.reponce: ~0 rows (approximately)
/*!40000 ALTER TABLE `reponce` DISABLE KEYS */;
INSERT INTO `reponce` (`idetudiant`, `idevent`) VALUES
	(9, 6);
/*!40000 ALTER TABLE `reponce` ENABLE KEYS */;

-- Dumping data for table sw3.theevanets: ~2 rows (approximately)
/*!40000 ALTER TABLE `theevanets` DISABLE KEYS */;
INSERT INTO `theevanets` (`eventID`, `coursID`, `ProfID`, `message`, `lien`, `hours`, `theDate`) VALUES
	(6, 5, 2, '2222', '2222', '18:22', '2020-05-08'),
	(7, 3, 2, '22', '22', '22:22', '2020-05-14');
/*!40000 ALTER TABLE `theevanets` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
