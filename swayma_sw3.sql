-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 10 juin 2020 à 23:45
-- Version du serveur :  10.3.23-MariaDB-cll-lve
-- Version de PHP : 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `swayma_sw3`
--

-- --------------------------------------------------------

--
-- Structure de la table `benevole`
--

CREATE TABLE `benevole` (
  `idbenevole` int(11) NOT NULL,
  `nombenevole` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenombenevole` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailbenevole` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwordbenevole` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `benevole`
--

INSERT INTO `benevole` (`idbenevole`, `nombenevole`, `prenombenevole`, `mailbenevole`, `passwordbenevole`) VALUES
(4, 'Zahidi', 'Samir', 'samirreda324@gmail.com', '1234'),
(5, 'belkhadir', 'adil', 'belkhadir@sway3.ma', 'adil');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `idcours` int(11) NOT NULL,
  `nomcours` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idmatiere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`idcours`, `nomcours`, `idmatiere`) VALUES
(1, 'الحال', 1),
(2, 'التمييز', 1),
(3, ' العدد ', 1),
(4, ' الاستفهام ', 1),
(5, ' الأمر والنهي ', 1),
(6, ' التمني', 1),
(7, ' النداء', 1),
(8, 'المجزوءة الأولى: أنواع الخطاب', 1),
(9, 'المجزوءة الثانية: قضايا معاصرة', 1),
(10, ' الممنوع من الصرف', 1),
(11, ' المصادر ', 1),
(12, ' النسبة', 1),
(13, ' الإيجاز والإطناب ', 1),
(14, ' الطباق والمقابلة', 1),
(15, ' ‫الاستعارة ', 1),
(16, 'المجزوءة الأولى: مفاهيم', 1),
(18, 'المجزوءة الثانية: الشعر والقيم', 1),
(19, ' مهارة الربط بين الأفكار', 1),
(20, ' مهارة المقارنة والإستنتاج ', 1),
(21, ' Les champs lexicaux ', 2),
(22, ' Les registres de langue ', 2),
(23, ' La focalisation ou point de vue', 2),
(24, ' L\'énonciation', 2),
(25, ' Les figures de style', 2),
(26, ' Les niveaux de langue ', 2),
(27, 'Récit et discours ', 2),
(28, 'Le discours rapporté ', 2),
(29, ' Étude du discours rapporté ', 2),
(30, 'La Boite à Merveilles (Roman autobiographique) ', 2),
(31, 'La Planète des singes (Roman de science fiction) ', 2),
(32, 'Le dernier jour d\'un condamné (Roman à thèse)', 2),
(33, 'Antigone (Théâtre) ', 2),
(34, ' تقديم عام لبرنامج التاريخ: التحولات الكبرى للعالم الرأسمالي وانعكاساتها خلال القرنين 19م و20م ', 3),
(35, ' التحولات الاقتصادية والمالية والاجتماعية والفكرية في العالم في القرن 19م ', 3),
(36, ' التنافس الامبريالي واندلاع الحرب العالمية الأولى ', 3),
(37, ' اليقظة الفكرية بالمشرق العربي ', 3),
(38, ' الضغوط الاستعمارية على المغرب ومحاولات الإصلاح ', 3),
(39, ' أوروبا من نهاية الحرب العالمية الأولى إلى أزمة 1929م ', 3),
(40, ' الحرب العالمية الثانية – الأسباب والنتائج ', 3),
(41, ' نظام الحماية بالمغرب والاستغلال الاستعماري ', 3),
(42, ' نضال المغرب من أجل تحقيق الاستقلال واستكمال الوحدة الترابية ', 3),
(43, ' ملف العولمة والتحديات الراهنة ', 3),
(44, ' مفهوم التنمية – تعدد المقاربات، التقسيمات الكبرى للعالم – خريطة التنمية ', 3),
(45, ' المجال المغربي – الموارد الطبيعية والبشرية', 3),
(46, ' الاختيارات الكبرى لسياسة إعداد التراب الوطني', 3),
(47, ' التهيئة الحضرية والريفية – أزمة المدينة والريف وأشكال التدخل', 3),
(48, ' العالم العربي – مشكل الماء وظاهرة التصحر', 3),
(49, ' الولايات المتحدة الأمريكية قوة اقتصادية عظمى', 3),
(50, ' الاتحاد الأوربي نحو اندماج شامل ', 3),
(51, ' الصين قوة اقتصادية صاعدة', 3),
(52, ' ملف الشراكة بين المغرب والاتحاد الأوروبي ', 3),
(53, 'مدخل التزكية (القرآن الكريم) ', 4),
(54, 'مدخل التزكية (العقيدة) ', 4),
(55, 'مدخل الإقتداء ', 4),
(56, 'مدخل الإستجابة ', 4),
(57, 'مدخل القسط ', 4),
(58, 'مدخل الـحكمة ', 4),
(59, 'الحال\r\n ', 5),
(60, ' التمييز ', 5),
(61, ' العدد ', 5),
(62, ' الاستفهام ', 5),
(63, ' الأمر والنهي ', 5),
(64, ' التمني ', 5),
(65, ' الممنوع من الصرف', 5),
(66, ' المصادر', 5),
(67, ' النسبة ', 5),
(68, ' الإيجاز والإطناب', 5),
(69, ' الطباق والمقابلة ', 5),
(70, ' ‫الاستعارة ‬‎ ', 5),
(71, 'المجزوءة الأولى: أنواع الخطاب', 5),
(72, 'المجزوءة الثانية: قضايا معاصرة', 5),
(73, 'المجزوءة الأولى: مفاهيم', 5),
(74, 'مجزوءة الثانية: الشعر والقيم', 5),
(75, ' مهارة الربط بين الأفكار', 5),
(76, ' مهارة المقارنة والإستنتاج ', 5),
(77, ' Les champs lexicaux ', 6),
(78, ' Les registres de langue ', 6),
(79, ' La focalisation ou point de vue ', 6),
(80, ' L\'énonciation ', 6),
(81, ' Les figures de style', 6),
(82, '\r\nLes niveaux de langue\r\n', 6),
(83, ' Récit et discours ', 6),
(84, ' Le discours rapporté ', 6),
(85, ' La focalisation Interne, externe et zéro', 6),
(86, 'La Boite à Merveilles (Roman autobiographique) ', 6),
(87, 'La Planète des singes (Roman de science fiction) ', 6),
(88, 'Le dernier jour d\'un condamné (Roman à thèse) ', 6),
(89, 'Antigone (Théâtre) ', 6),
(90, ' تقديم عام لبرنامج التاريخ: التحولات الكبرى للعالم الرأسمالي وانعكاساتها خلال القرنين 19م و20م ', 7),
(91, ' التحولات الاقتصادية والمالية والاجتماعية والفكرية في العالم في القرن 19م ', 7),
(92, ' التنافس الامبريالي واندلاع الحرب العالمية الأولى', 7),
(93, ' اليقظة الفكرية بالمشرق العربي', 7),
(94, ' الضغوط الاستعمارية على المغرب ومحاولات الإصلاح', 7),
(95, ' أوروبا من نهاية الحرب العالمية الأولى إلى أزمة 1929م', 7),
(96, ' الحرب العالمية الثانية – الأسباب والنتائج ', 7),
(97, ' نظام الحماية بالمغرب والاستغلال الاستعماري ', 7),
(98, ' نضال المغرب من أجل تحقيق الاستقلال واستكمال الوحدة الترابية ', 7),
(99, ' ملف العولمة والتحديات الراهنة ', 7),
(100, ' مفهوم التنمية – تعدد المقاربات، التقسيمات الكبرى للعالم – خريطة التنمية ', 7),
(101, ' المجال المغربي – الموارد الطبيعية والبشرية ', 7),
(102, ' الاختيارات الكبرى لسياسة إعداد التراب الوطني ', 7),
(103, ' التهيئة الحضرية والريفية – أزمة المدينة والريف وأشكال التدخل', 7),
(104, ' العالم العربي – مشكل الماء وظاهرة التصحر ', 7),
(105, ' الولايات المتحدة الأمريكية قوة اقتصادية عظمى', 7),
(106, ' الاتحاد الأوربي نحو اندماج شامل ', 7),
(107, ' الصين قوة اقتصادية صاعدة ', 7),
(108, ' ملف الشراكة بين المغرب والاتحاد الأوروبي ', 7),
(109, ' تقديم عام لبرنامج التاريخ: التحولات الكبرى للعالم الرأسمالي وانعكاساتها خلال القرنين 19م و20م ', 7),
(110, ' التحولات الاقتصادية والمالية والاجتماعية والفكرية في العالم في القرن 19م ', 7),
(111, ' التنافس الامبريالي واندلاع الحرب العالمية الأولى', 7),
(112, ' اليقظة الفكرية بالمشرق العربي', 7),
(113, ' الضغوط الاستعمارية على المغرب ومحاولات الإصلاح', 7),
(114, ' أوروبا من نهاية الحرب العالمية الأولى إلى أزمة 1929م', 7),
(115, ' الحرب العالمية الثانية – الأسباب والنتائج ', 7),
(116, ' نظام الحماية بالمغرب والاستغلال الاستعماري ', 7),
(117, ' نضال المغرب من أجل تحقيق الاستقلال واستكمال الوحدة الترابية ', 7),
(118, ' ملف العولمة والتحديات الراهنة ', 7),
(119, ' مفهوم التنمية – تعدد المقاربات، التقسيمات الكبرى للعالم – خريطة التنمية ', 7),
(120, ' المجال المغربي – الموارد الطبيعية والبشرية ', 7),
(121, ' الاختيارات الكبرى لسياسة إعداد التراب الوطني ', 7),
(122, ' التهيئة الحضرية والريفية – أزمة المدينة والريف وأشكال التدخل', 7),
(123, ' العالم العربي – مشكل الماء وظاهرة التصحر ', 7),
(124, ' الولايات المتحدة الأمريكية قوة اقتصادية عظمى', 7),
(125, ' الاتحاد الأوربي نحو اندماج شامل ', 7),
(126, ' الصين قوة اقتصادية صاعدة ', 7),
(127, ' ملف الشراكة بين المغرب والاتحاد الأوروبي ', 7),
(128, 'مدخل التزكية (القرآن الكريم)', 8),
(129, 'مدخل التزكية (العقيدة) ', 8),
(130, 'مدخل الإقتداء ', 8),
(131, 'مدخل الإستجابة ', 8),
(132, 'مدخل القسط ', 8),
(133, 'مدخل الـحكمة ', 8),
(134, 'مبادئ في المنطق ', 9),
(135, 'الحساب العددي والتناسبية ', 9),
(136, 'عموميات حول الدوال العددية ', 9),
(137, 'المتتاليات العددية ', 9),
(138, 'التعداد ', 9),
(139, 'نهاية دالة عددية ', 9),
(140, 'الاشتقاق ', 9),
(141, 'دراسة الدوال وتمثيلها ', 9),
(142, ' Les champs lexicaux ', 10),
(143, ' Les registres de langue', 10),
(144, ' La focalisation ou point de vue ', 10),
(145, ' Les figures de style ', 10),
(146, ' Les niveaux de langue ', 10),
(147, ' Récit et discours ', 10),
(148, ' Le discours rapporté', 10),
(149, ' Étude du discours rapporté ', 10),
(150, ' La focalisation Interne, externe et zéro', 10),
(151, 'La Boite à Merveilles (Roman autobiographique) ', 10),
(152, 'La Planète des singes (Roman de science fiction) ', 10),
(153, 'Le dernier jour d\'un condamné (Roman à thèse) ', 10),
(154, 'Antigone (Théâtre) ', 10),
(155, 'جذاذات علوم الحياة والارض للأولى باك آداب وعلوم إنسانية', 11),
(156, 'تعضي وفيزيولوجية الجهاز التناسلي عند الرجل ', 11),
(157, 'تعضي وفيزيولوجية الجهاز التناسلي عند المرأة ', 11),
(158, 'الحمل والولادة ', 11),
(159, 'ملفات للبحث والاستقصاء ', 11),
(160, 'دور كل من الانقسام الاختزالي والاخصاب في التوالد الجنسي', 11),
(161, 'انتقال الصفات الوراثية عبر الأجيال ', 11),
(162, 'انتقال بعض الأمراض الوراثية ', 11),
(163, 'انتقال بعض حالات الشذوذ الصبغي والطفرات ', 11),
(164, ' Limites et continuité النهايات والاتصال', 12),
(165, 'Dérivation et étude des fonctions  الاشتقاق ودراسة الدوال', 12),
(166, 'Théorème des Accroissements Finis (TAF)  مبرهنة التزايدات المنتهية', 12),
(167, 'Suites numériques  المتتاليات العددية', 12),
(168, 'Fonctions logarithmiques  الدوال اللوغاريتمية', 12),
(169, 'Fonctions exponentielles  الدوال الأسية', 12),
(170, 'Équations différentielles   المعادلات التفاضلية', 12),
(171, 'Nombres complexes (Partie 1)  الأعداد العقدية', 12),
(172, 'Fonctions primitives et calcul intégral   الدوال الأصلية والتكامل', 12),
(173, 'Nombres complexes (Partie 2) الأعداد العقدية', 12),
(174, 'Arithmétique    الحسابيات ', 12),
(175, 'Structures algébriques   البنيات الجبرية ', 12),
(176, 'Probabilités  الاحتمالات', 12),
(177, 'Espaces vectoriels  الفضاءات المتجهية', 12),
(178, 'Ondes mécaniques progressives  الموجات الميكانيكية المتوالية', 13),
(179, 'Ondes mécaniques progressives périodiques الموجات الميكانيكية المتوالية الدورية', 13),
(180, 'Propagation des ondes lumineuses  انتشار مـوجة ضوئية', 13),
(181, 'Décroissance radioactive  التناقص الإشعاعي', 13),
(182, 'Noyaux, masse et énergie', 13),
(183, 'Dipôle RC', 13),
(184, 'Dipôle RL', 13),
(185, 'Oscillations libres d\'un circuit RLC', 13),
(186, 'Circuit RLC série en régime sinusoidal forcé', 13),
(187, 'Ondes électromagnétiques', 13),
(188, 'Modulation d\'amplitude', 13),
(189, 'Transformations lentes et transformations rapides', 13),
(190, 'Suivi temporel d\'une transformation chimique - Vitesse de réaction', 13),
(191, 'Transformations chimiques s\'effectuant dans les 2 sens', 13),
(192, 'État d\'équilibre d\'un système chimique', 13),
(193, 'Transformations liées à des réactions acide-base', 13),
(194, 'Dosage acido-basique', 13),
(195, 'Lois de Newton', 13),
(196, 'Chute libre verticale d’un solide', 13),
(197, 'Mouvements plans', 13),
(198, 'Mouvement des satellites et des planètes', 13),
(199, 'Mouvement de rotation d’un solide autour d’un axe fixe', 13),
(200, 'Systèmes mécaniques oscillants', 13),
(201, 'Aspects énergétiques des oscillations mécaniques', 13),
(202, 'Atome et mécanique de Newton', 13),
(203, 'Évolution spontanée d\'un système chimique', 13),
(204, 'Transformations spontanées dans les piles et production d\'énergie', 13),
(205, 'Transformations forcées (Électrolyse)', 13),
(206, 'Réactions d\'estérification et d\'hydrolyse', 13),
(207, 'Contrôle de l\'évolution d\'un système chimique', 13),
(208, 'Transmission de l’information génétique par la reproduction sexuée نقل الخبر الوراثي عبر التوالد الجنسي', 14),
(209, 'Les lois statistiques de la transmission des caractères héréditaires القوانين الإحصائية لإنتقال الصفات الوراثية عند ثنائيات الصيغة الصبغية', 14),
(210, 'Génétique humaine  علم الوراثة البشرية', 14),
(211, 'Étude quantitative de la variation (la biométrie)  الدراسة الكمية للتغير - القياس الإحيائي', 14),
(212, 'Génétique des populations  علم وراثة الساكنة', 14),
(213, 'Module 1: Analyse fonctionnelle ', 15),
(214, 'Module 2 : Chaîne d\'énergie ( Fonction Alimenter, Fonction Distribuer, Fonction Convertir, Fonction Transmettre )', 15),
(215, 'Module 3 : Chaîne d\'information', 15),
(216, 'Dessin technique ( Dessin technique, Projection orthogonale, Coupes et sections, Correspondance des vues, Filetage et taraudage )', 15),
(217, 'Formal, informal and non-formal education', 16),
(218, 'Gifts of youth', 16),
(219, ' Cultural issues and values', 16),
(220, 'Humour', 16),
(221, 'Science and technology', 16),
(222, 'Sustainable development', 16),
(223, 'Women and Power', 16),
(224, 'Brain drain', 16),
(225, 'International organizations', 16),
(226, 'Citizenship', 16),
(227, 'Do-Make', 16),
(236, 'Limites et continuité  النهايات والاتصال', 18),
(237, 'Dérivation  الاشتقاق', 18),
(238, 'Etude des fonctions دراسة الدوال ', 18),
(239, 'Fonctions primitives الدوال الأصلية', 18),
(240, 'Suites numériques  المتتاليات العددية', 18),
(241, 'Fonctions logarithmiques الدوال اللوغاريتمية', 18),
(242, 'Nombres complexes (Partie 1)  (الأعداد العقدية (الجزء الأول)', 18),
(243, 'Fonctions exponentielles الدوال الأسية', 18),
(244, 'Nombres complexes (Partie 2) (الأعداد العقدية (الجزء الثاني)', 18),
(245, 'Équations différentielles المعادلات التفاضلية', 18),
(246, 'Calcul intégral الحساب التكاملي', 18),
(248, 'Géométrie dans l’espace (Produit scalaire dans l’espace - Produit vectoriel) (الهندسة الفضائية (الجداء السلمي في الفضاء - الفلكة - الجداء المتجهي)', 18),
(249, 'Dénombrement et probabilités حساب الاحتمالات', 18),
(250, 'Ondes mécaniques progressives الموجات الميكانيكية المتوالية', 19),
(251, 'Ondes mécaniques progressives périodiques الموجات الميكانيكية المتوالية الدورية', 19),
(252, 'Propagation des ondes lumineuses انتشار مـوجة ضوئية', 19),
(253, 'Décroissance radioactive التناقص الإشعاعي', 19),
(254, 'Noyaux, masse et énergie النوى والكتلة والطاقة', 19),
(255, 'Dipôle (RC) ثنائي القطب ', 19),
(256, 'Dipôle (RL) ثنائي القطب ', 19),
(257, 'Oscillations libres d\'un circuit RLC التذبذبات الحرة في دارة متوالية  ', 19),
(258, 'Transformations lentes et transformations rapides التحولات السريعة والتحولات البطيئة', 19),
(260, '\r\nSuivi temporel d\'une transformation chimique - Vitesse de réaction التتبع الزمني لتحول كيميائي - سرعة التفاعل', 19),
(261, 'Transformations chimiques s\'effectuant dans les 2 sens التحولات الكيميائية التي تحدث في منحيين', 19),
(262, 'État d\'équilibre d\'un système chimique حالة توازن مجموعة كيميائية', 19),
(263, 'Transformations liées à des réactions acide-base التحولات الكيميائية المقرونة بالتفاعلات حمض قاعدة', 19),
(264, 'Dosage acido-basique المعايرة الحمضية القاعدية ', 19),
(265, 'Ondes électromagnétiques الموجات الكهرمغنطيسية ', 19),
(266, 'Modulation d\'amplitude تضمين الوسع', 19),
(267, 'Lois de Newton قوانين نيوتن', 19),
(268, 'Chute libre verticale d’un solide تطبيقات قوانين نيوتن: السقوط الرأسي لجسم صلب', 19),
(269, 'Mouvements plans الحركات المستوية', 19),
(270, 'Mouvement des satellites et des planètes  الأقمار الصناعية والكواكب', 19),
(271, 'Mouvement de rotation d’un solide autour d’un axe fixe حركة دوران جسم صلب حول محور ثابت', 19),
(272, 'Systèmes mécaniques oscillants المجموعات الميكانيكية المتذبذبة', 19),
(273, 'Aspects énergétiques des oscillations mécaniques المظاهر الطاقية للتذبذبات الميكانيكية', 19),
(274, 'Atome et mécanique de Newton  الذرة وميكانيك نيوتن', 19),
(275, 'Évolution spontanée d\'un système chimique التطور التلقائي لمجموعة كيميائية', 19),
(276, 'Transformations spontanées dans les piles et production d\'énergie التحولات التلقائية في الأعمدة وتحصيل الطاقة', 19),
(277, 'Transformations forcées (Électrolyse) التحولات القسرية والتحليل الكهربائي', 19),
(278, 'Réactions d\'estérification et d\'hydrolyse تفاعلات الأسترة والحلمأة', 19),
(279, 'Contrôle de l\'évolution d\'un système chimique التحكم في تطور المجموعات الكيميائية بتغيير متفاعل', 19),
(280, 'Libération de l’énergie emmagasinée dans la matière organique التفاعلات المسؤولة عن تحرير الطاقة الكامنة في المادة العضوية', 20),
(281, 'Rôle du muscle strié squelettique dans la conversion de l’énergie  دور العضلة الهيكلية في تحويل الطاقة', 20),
(282, 'Notion de l’information génétique  مفهوم الخبر الوراثي', 20),
(283, 'Expression de l’information génétique آلية تعبير الخبر الوراثي', 20),
(284, 'Transmission de l’information génétique par la reproduction sexuée نقل الخبر الوراثي عبر التوالد الجنسي', 20),
(285, 'Les lois statistiques de la transmission des caractères héréditaires  القوانين الإحصائية لإنتقال الصفات الوراثية عند ثنائيات الصيغة الصبغية', 20),
(286, 'Les ordures ménagères issues de l’utilisation des matières organiques et inorganiques النفايات المنزلية الناتجة عن استعمال المواد العضوية', 20),
(287, 'La pollution des milieux naturels التلوثات الناتجة عن استهلاك المواد الطاقية ', 20),
(288, 'Les matières radioactives et l’énergie nucléaire المواد المشعة والطاقة النووية', 20),
(289, 'Contrôle de la qualité et de la salubrité des milieux naturels مراقبة جودة وصحة الأوساط الطبيعية', 20),
(290, 'Les chaînes de montagnes récentes et leur relation avec la tectonique des plaques  السلاسل الجبلية الحديثة وعلاقتها بتكتونية الصفـائح', 20),
(291, 'Le métamorphisme et sa relation avec la tectonique des plaques التحول وعلاقته بدينامية الصفـائح', 20),
(292, 'La granitisation et sa relation avec le métamorphisme  الكرانيتية وعلاقتها بظاهرة التحول', 20),
(293, 'Formal, informal and non-formal education', 21),
(294, 'Gifts of youth', 21),
(295, ' Cultural issues and values', 21),
(296, 'Humour', 21),
(297, 'Science and technology', 21),
(298, 'Sustainable development', 21),
(299, 'Women and Power', 21),
(300, 'Brain drain', 21),
(301, 'International organizations', 21),
(302, 'Citizenship', 21),
(303, 'Do-Make', 21),
(312, 'Limites et continuité النهايات و الاتصال', 23),
(313, 'Dérivation et étude des fonctions  الاشتقاق و دراسة الدوال', 23),
(314, 'Fonctions primitives الدوال الأصلية', 23),
(315, 'Suites numériques المتتاليات العددية', 23),
(316, 'Fonctions logarithmiques الدوال اللوغاريتمية', 23),
(317, 'Nombres complexes (Partie 1) (الأعداد العقدية (الجزء الأول', 23),
(318, 'Fonctions exponentielles الدوال الأسية', 23),
(319, 'Nombres complexes (Partie 2) (الأعداد العقدية (الجزء الثاني', 23),
(320, 'Équations différentielles المعادلات التفاضلية', 23),
(321, 'Calcul intégral الحساب التكاملي', 23),
(322, 'Géométrie dans l’espace (Produit scalaire dans l’espace - Produit vectoriel) (الهندسة الفضائية (الجداء السلمي في الفضاء - الفلكة - الجداء المتجهي)', 23),
(323, 'Dénombrement et probabilités حساب الاحتمالات', 23),
(324, 'Les ondes mécaniques progressives الموجات الميكانيكية المتوالية', 24),
(325, 'Les ondes mécaniques progressives périodiques الموجات الميكانيكية المتوالية الدوريـــة', 24),
(326, 'La propagation dese ondes lumineuses انتشار مـوجة ضوئية', 24),
(327, 'Les transformations nucléaires التحولات النووية', 24),
(328, 'Le noyau (Masse et énergie) النوى: الكتلة والطاقة', 24),
(329, 'Le dipôle RC ثنائي القطب \r\n\r\n', 24),
(330, 'Le dipôle RL ثنائي القطب ', 24),
(331, 'Les oscillations libres d\'un circuit RLC  التذبذبات الحرة في دارة كهربائية متوالية', 24),
(332, 'Les transformations lentes et les transformations rapides  التحولات السريعة والتحولات البطيئة لمجموعة كيميائية', 24),
(333, 'Le suivi temporel d\'une transformation chimique - La vitesse de réaction  التتبع الزمني للتحول - سرعة التفاعل', 24),
(334, 'Les transformations chimiques qui s\'effectuent dans les 2 sens التحولات الكيميائية التي تحدث في منحيين', 24),
(335, 'L\'état d\'équilibre d\'un système chimique حـالة توازن مجموعة كيميـائية', 24),
(336, 'Les transformations liées à des réactions acide-base التحولات الكيميائية المقرونة بالتفاعلات حمض قاعدة في محلول مائي', 24),
(337, 'Les lois de Newton قوانين نيوتن', 24),
(338, 'La chute libre verticale d’un solide تطبيقات قوانين نيوتن: السقوط الرأسي لجسم صلب', 24),
(339, 'Le mouvement d’un projectile dans un plan تطبيقات قوانين نيوتن: الحركات المستوية', 24),
(340, 'Le mouvement de rotation d’un solide autour d’un axe fixe تطبيقات قوانين نيوتن : حركة دوران جسم صلب حول محور ثابت', 24),
(341, 'Les systèmes mécaniques oscillants المجموعات الميكانيكية المتذبذبة', 24),
(342, 'Les aspects énergétiques des oscillations mécaniques المظاهر الطاقية للتذبذبات الميكانيكية', 24),
(343, 'L\'évolution spontanée d\'un système chimique التطور التلقائي لمجموعة كيميائية', 24),
(344, 'La transformation spontanées dans les piles et la production d\'énergie التحولات التلقائية في الأعمدة وتحصيل الطاقة ', 24),
(345, 'Les réactions d\'estérification et d\'hydrolyse تفاعلات الأسترة والحلمأة', 24),
(346, 'Libération de l’énergie emmagasinée dans la matière organique التفاعلات المسؤولة عن تحرير الطاقة الكامنة في المادة العضوية', 25),
(347, 'Rôle du muscle strié squelettique dans la conversion de l’énergie دور العضلة الهيكلية في تحويل الطاقة', 25),
(348, 'Notion de l’information génétique مفهوم الخبر الوراثي', 25),
(349, 'Expression de l’information génétique آلية تعبير الخبر الوراثي', 25),
(350, 'Transmission de l’information génétique par la reproduction sexuée نقل الخبر الوراثي عبر التوالد الجنسي\r\n\r\n', 25),
(351, 'Les lois statistiques de la transmission des caractères héréditaires القوانين الإحصائية لإنتقال الصفات الوراثية عند ثنائيات الصيغة الصبغية', 25),
(352, 'Génétique humaine علم الوراثة البشرية', 25),
(353, 'Étude quantitative de la variation (la biométrie) الدراسة الكمية للتغير - القياس الإحيائي\r\n\r\n', 25),
(354, 'Génétique des populations علم وراثة الساكنة ', 25),
(355, 'Les chaînes de montagnes récentes et leur relation avec la tectonique des plaques السلاسل الجبلية الحديثة وعلاقتها بتكتونية الصفـائح', 25),
(356, 'Le métamorphisme et sa relation avec la tectonique des plaques التحول وعلاقته بدينامية الصفـائح\r\n\r\n', 25),
(357, 'La granitisation et sa relation avec le métamorphisme الكرانيتية وعلاقتها بظاهرة التحول', 25),
(358, 'Notions du soi et du non soi مفهوم الذاتي وغير الذاتي', 25),
(359, 'Moyens de défense du soi وسائل دفاع الجسم عن ما هو ذاتي', 25),
(360, 'Dysfonctionnements du système immunitaire بعض اضطرابات الجهاز المناعي', 25),
(361, 'Moyens d’aide du système immunitaire وسائل تدعيم النظام المناعي', 25),
(362, 'Formal, informal and non-formal education', 26),
(363, 'Gifts of youth', 26),
(364, ' Cultural issues and values', 26),
(365, 'Humour', 26),
(366, 'Science and technology', 26),
(367, 'Sustainable development', 26),
(368, 'Women and Power', 26),
(369, 'Brain drain', 26),
(370, 'International organizations', 26),
(371, 'Citizenship', 26),
(372, 'Do-Make', 26),
(381, 'Suites numériques  المتتاليات العددية', 28),
(382, 'Limites et continuité  النهايات والاتصال', 28),
(383, 'Dérivation et Etude des fonctions   الاشتقاق و دراسة الدوال ', 28),
(384, 'Fonctions logarithmiques الدوال اللوغاريتمية', 28),
(385, 'Fonctions exponentielles الدوال الأسية', 28),
(386, 'Fonctions primitives et Calcul intégral الدوال الأصلية و الحساب التكاملي ', 28),
(387, 'Dénombrement et probabilités حساب الاحتمالات', 28),
(388, 'La stratégie et la croissance', 29),
(389, 'La Gestion des Ressources Humaines (GRH)', 29),
(390, 'La régularisation des stocks', 30),
(391, 'Les amortissements', 30),
(392, 'Les provisions', 30),
(393, 'La régularisation des charges et produits', 30),
(394, 'Calcul de l\'Impôt sur les Sociétés (IS)', 30),
(395, 'Analyse du bilan', 30),
(396, 'Analyse d\'exploitation ESG', 30),
(397, 'Analyse d\'exploitation TED', 30),
(398, 'Formal, informal and non-formal education', 31),
(399, 'Gifts of youth', 31),
(400, ' Cultural issues and values', 31),
(401, 'Humour', 31),
(402, 'Science and technology', 31),
(403, 'Sustainable development', 31),
(404, 'Women and Power', 31),
(405, 'Brain drain', 31),
(406, 'International organizations', 31),
(407, 'Citizenship', 31),
(408, 'Do-Make', 31),
(417, 'Le marché', 33),
(418, 'Le circuit économique élargi', 33),
(419, 'Les agrégats de la comptabilité nationale', 33),
(420, 'Les limites de la comptabilité nationale', 33),
(421, 'La régulation par le marché', 33),
(422, 'Les dysfonctionnements du marché (L\'inflation et le chômage)', 33),
(423, 'Les instruments de l’intervention étatique (La politique économique)', 33),
(424, 'Les instruments de l’intervention étatique (La politique monétaire)', 33),
(425, 'Les instruments de l’intervention étatique (La politique budgétaire)', 33),
(426, 'Les échanges extérieurs (Fondements théoriques, Mesure et analyse)\r\n\r\n', 33),
(427, 'L’ouverture de l’économie', 33),
(428, 'Le développement', 33),
(429, 'La mondialisation', 33),
(430, 'Eléments de la fiscalité marocaine', 34),
(431, 'Eléments du droit social', 34),
(432, 'La régularisation des stocks', 35),
(433, 'Les amortissements', 35),
(434, 'Les provisions', 35),
(435, 'La régularisation des charges et produits', 35),
(436, 'Calcul de l\'Impôt sur les Sociétés (IS)', 35),
(437, 'Analyse du bilan', 35),
(438, 'Analyse d\'exploitation ESG', 35),
(439, 'Analyse d\'exploitation TED', 35),
(440, 'Formal, informal and non-formal education', 36),
(441, 'Gifts of youth', 36),
(442, ' Cultural issues and values', 36),
(443, 'Humour', 36),
(444, 'Science and technology', 36),
(445, 'Sustainable development', 36),
(446, 'Women and Power', 36),
(447, 'Brain drain', 36),
(448, 'International organizations', 36),
(449, 'Citizenship', 36),
(450, 'Do-Make', 36),
(451, 'Suites numériques  المتتاليات العددية', 37),
(452, 'Limites et continuité  النهايات والاتصال', 37),
(453, 'Dérivation et Etude des fonctions   الاشتقاق و دراسة الدوال ', 37),
(454, 'Fonctions logarithmiques الدوال اللوغاريتمية', 37),
(455, 'Fonctions exponentielles الدوال الأسية', 37),
(456, 'Fonctions primitives et Calcul intégral الدوال الأصلية و الحساب التكاملي ', 37),
(457, 'Dénombrement et probabilités حساب الاحتمالات', 37),
(458, 'Le marché', 39),
(459, 'Le circuit économique élargi', 39),
(460, 'Les agrégats de la comptabilité nationale', 39),
(461, 'Les limites de la comptabilité nationale', 39),
(462, 'La régulation par le marché', 39),
(463, 'Les dysfonctionnements du marché (L\'inflation et le chômage)', 39),
(464, 'Les instruments de l’intervention étatique (La politique économique)', 39),
(465, 'Les instruments de l’intervention étatique (La politique monétaire)', 39),
(466, 'Les instruments de l’intervention étatique (La politique budgétaire)', 39),
(467, 'Les échanges extérieurs (Fondements théoriques, Mesure et analyse)\r\n\r\n', 39),
(468, 'L’ouverture de l’économie', 39),
(469, 'Le développement', 39),
(470, 'La mondialisation', 39),
(471, 'Organisation et approvisionnement', 29),
(472, 'Organisation de la production', 29),
(473, ' La fonctions financière', 29),
(474, ' La mercatique', 29),
(475, 'Organisation et approvisionnement', 40),
(476, 'Organisation de la production', 40),
(477, ' La fonctions financière', 40),
(478, ' La mercatique', 40),
(479, ' La stratégie et la croissance ', 40),
(480, ' La Gestion des Ressources Humaines (GRH) ', 40);

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `iddemande` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `idetudiantc` int(11) DEFAULT NULL,
  `cours` int(11) NOT NULL,
  `reponce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`iddemande`, `description`, `idetudiantc`, `cours`, `reponce`) VALUES
(115, 'Gsgsvvz', 27, 6, 0),
(116, 'Aucune desciption !', 28, 21, 2),
(117, 'Aucune desciption !', 28, 21, 2),
(118, 'Aucune desciption !', 28, 8, 0),
(119, 'Aucune desciption !', 28, 8, 0),
(124, 'okey', 29, 21, 0),
(125, 'Aucune desciption !', 29, 43, 0),
(126, 'ok', 29, 5, 1),
(127, 'Sos', 32, 175, 0),
(129, 'Aucune desciption !', 28, 108, 0),
(130, 'Aucune desciption !', 28, 89, 0),
(131, 'Message', 33, 208, 0),
(132, 'ddd', 28, 59, 0),
(133, 'Aucune desciption !', 34, 30, 0),
(134, 'Gst', 27, 185, 0);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `idetudiant` int(11) NOT NULL,
  `nometudiant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenometudiant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `niveauscolaire` int(11) NOT NULL,
  `filiere` int(11) DEFAULT NULL,
  `mailetudiant` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwordetudiant` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `nometudiant`, `prenometudiant`, `niveauscolaire`, `filiere`, `mailetudiant`, `passwordetudiant`) VALUES
(27, 'Khairi', 'adam', 2, 4, 'Khairiadam1@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(28, 'XRoykhouilid', 'KHOUILID', 1, 1, 'abdelkbirkhouilid32@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(29, 'JAB', 'Hanane', 2, 5, 'hananejabane@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4'),
(30, 'Belkhadir', 'Adil', 2, 8, 'belkhadir.adil@gmail.com', '5ac4f9881bd507de639aa22abb3166427dd48676c02bee71fd1abe21be039117'),
(31, 'Khouilid', 's', 1, 1, 'abdelkbir@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(32, 'Gannaoui', 'Imane', 2, 4, 'imane.gannaoui@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(33, 'khairi', 'adam', 2, 4, 'azerty@aa.a', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb'),
(34, 'Khouilid', 'ABDO', 1, 1, 'abdok7049@gmail.com', 'ca978112ca1bbdcafac231b39a23dc4da786eff8147c4e72b9807785afee48bb');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `idfiliere` int(11) NOT NULL,
  `namfiliere` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idniveau` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `namfiliere`, `idniveau`) VALUES
(1, 'Sciences Mathématiques', 1),
(2, 'Sciences Expérimentales', 1),
(3, 'Lettres et Sciences Humaines', 1),
(4, 'Sciences Mathématiques', 2),
(5, 'Sciences Physiques', 2),
(6, 'Sciences de la Vie et de la Terre (SVT)', 2),
(7, 'Sciences Économiques', 2),
(8, 'Sciences de Gestion Comptable (SGC)', 2),
(9, 'Lettres', 2);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `idmatiere` int(11) NOT NULL,
  `nommatiere` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idfiliere` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `nommatiere`, `idfiliere`) VALUES
(1, 'Arabe', 1),
(2, 'Français', 1),
(3, 'Histoire Géographie', 1),
(4, 'Education Islamique', 1),
(5, 'Arabe', 2),
(6, 'Français', 2),
(7, 'Histoire Géographie', 2),
(8, 'Education Islamique', 2),
(9, 'Mathématiques', 3),
(10, 'Français', 3),
(11, 'Sciences de la Vie et de la Terre (SVT)', 3),
(12, 'Mathématiques', 4),
(13, 'Physique et Chimie', 4),
(14, 'Sciences de la Vie et de la Terre (SVT)', 4),
(15, 'Sciences de l\'ingénieur', 4),
(16, 'Anglais', 4),
(18, 'Mathématiques', 5),
(19, 'Physique et Chimie', 5),
(20, 'Sciences de la Vie et de la Terre (SVT)', 5),
(21, 'Anglais', 5),
(23, 'Mathématiques', 6),
(24, 'Physique et Chimie', 6),
(25, 'Sciences de la Vie et de la Terre (SVT)', 6),
(26, 'Anglais', 6),
(27, 'Philosophie', 6),
(28, 'Mathématiques', 7),
(29, 'Economie et Organisation Administrative des Entreprises', 7),
(30, 'Comptabilité et Mathématiques financières', 7),
(31, 'Anglais', 7),
(32, 'Philosophie', 7),
(33, 'Economie générale et Statistiques', 7),
(34, 'Droit', 7),
(35, 'Comptabilité et Mathématiques financières', 8),
(36, 'Anglais', 8),
(37, 'Mathématiques', 8),
(38, 'Philosophie', 8),
(39, 'Economie générale et Statistiques', 8),
(40, 'Economie et Organisation Administrative des Entreprises', 8);

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `idniveau` int(11) NOT NULL,
  `niveau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `idetudiant` int(11) NOT NULL,
  `idevent` int(11) NOT NULL,
  `reponce` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reponce`
--

INSERT INTO `reponce` (`idetudiant`, `idevent`, `reponce`) VALUES
(28, 19, NULL),
(28, 20, NULL),
(28, 19, NULL),
(28, 20, NULL),
(28, 19, NULL),
(28, 20, NULL),
(29, 19, NULL),
(29, 20, NULL),
(27, 19, NULL),
(27, 20, NULL),
(29, 19, NULL),
(29, 20, NULL),
(29, 19, NULL),
(29, 20, NULL),
(29, 19, NULL),
(29, 20, NULL),
(27, 19, NULL),
(27, 20, NULL),
(27, 19, NULL),
(27, 20, NULL),
(27, 20, NULL),
(27, 20, NULL),
(27, 20, NULL),
(28, 22, NULL),
(29, 22, NULL),
(27, 22, NULL),
(29, 22, NULL),
(27, 22, NULL),
(28, 22, NULL),
(28, 22, NULL),
(28, 22, NULL),
(28, 23, NULL),
(29, 23, NULL),
(28, 28, 1),
(28, 29, 1),
(27, 28, 1),
(27, 29, 2),
(28, 30, 2),
(29, 31, 1),
(27, 32, 1),
(29, 28, 1),
(29, 29, 1),
(28, 33, 1),
(33, 35, 1),
(34, 31, 1),
(34, 36, 1),
(34, 29, 1),
(34, 28, 1),
(34, 37, 1),
(34, 38, 1),
(29, 32, 1),
(29, 44, 1),
(29, 46, 1);

-- --------------------------------------------------------

--
-- Structure de la table `theevanets`
--

CREATE TABLE `theevanets` (
  `eventID` int(11) NOT NULL,
  `coursID` int(11) NOT NULL,
  `ProfID` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hours` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `theDate` date DEFAULT NULL,
  `delay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `theevanets`
--

INSERT INTO `theevanets` (`eventID`, `coursID`, `ProfID`, `message`, `lien`, `hours`, `theDate`, `delay`) VALUES
(31, 1, 4, 'n', NULL, '14:50', '2020-06-28', '2020-06-17'),
(32, 294, 4, '000', NULL, '03:10', '2020-06-18', '2020-06-17'),
(36, 51, 4, 'SSS', NULL, '01:11', '2020-06-17', '2020-06-15'),
(37, 41, 4, 'SSDDD', NULL, '11:11', '2020-06-12', '2020-06-11'),
(38, 22, 4, 'W', NULL, '11:11', '2020-06-24', '2020-06-23'),
(39, 24, 4, 'NN', NULL, '11:11', '2020-06-18', '2020-06-17'),
(40, 1, 4, 'haeelo', NULL, '11:11', '2020-06-17', '2020-06-11'),
(42, 164, 4, 'llll', NULL, '14:22', '2020-06-18', '2020-06-16'),
(43, 24, 4, 'hello', NULL, '19:36', '2020-06-26', '2020-06-24'),
(46, 236, 4, 'WORKS', NULL, '06:06', '2020-06-20', '2020-06-19'),
(47, 237, 4, 'hello', NULL, '03:33', '2020-06-19', '2020-06-18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `benevole`
--
ALTER TABLE `benevole`
  ADD PRIMARY KEY (`idbenevole`);

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
  ADD PRIMARY KEY (`idetudiant`),
  ADD KEY `filiere` (`filiere`),
  ADD KEY `niveau` (`niveauscolaire`);

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
  MODIFY `idbenevole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `idcours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `iddemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `idetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `idfiliere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `idmatiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `idniveau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `theevanets`
--
ALTER TABLE `theevanets`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

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
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `filiere` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`idfiliere`),
  ADD CONSTRAINT `niveau` FOREIGN KEY (`niveauscolaire`) REFERENCES `niveau` (`idniveau`);

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
