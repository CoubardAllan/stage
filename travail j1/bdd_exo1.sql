-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.2.2-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour allan
CREATE DATABASE IF NOT EXISTS `allan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `allan`;


-- Export de la structure de table allan. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `date_publication` date DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  KEY `id` (`id`),
  KEY `FK_articles_utilisateurs` (`utilisateur_id`),
  KEY `FK_articles_categories` (`categorie_id`),
  CONSTRAINT `FK_articles_categories` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `FK_articles_utilisateurs` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

-- Export de données de la table allan.articles : ~100 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `titre`, `contenu`, `date_publication`, `utilisateur_id`, `categorie_id`) VALUES
	(1, 'eu dolor egestas rhoncus. Proin', 'Quisque ornare', '2018-12-10', 1, 1),
	(2, 'molestie sodales. Mauris blandit enim', 'arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', '2019-10-26', 30, 1),
	(3, 'ipsum primis in faucibus orci', 'dui, semper et, lacinia vitae, sodales', '2019-05-06', 1, 1),
	(4, 'habitant morbi tristique senectus et', 'dolor dolor, tempus non, lacinia at,', '2019-12-03', 1, 1),
	(5, 'semper. Nam tempor diam dictum', 'conubia nostra, per inceptos', '2019-10-23', 1, 1),
	(6, 'amet metus. Aliquam erat volutpat.', 'cursus. Nunc mauris elit, dictum eu, eleifend nec,', '2019-02-11', 30, 1),
	(7, 'dolor dolor, tempus non, lacinia', 'lorem, auctor quis, tristique', '2020-04-16', 1, 1),
	(8, 'Morbi sit amet massa. Quisque', 'nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat.', '2019-04-11', 1, 1),
	(9, 'scelerisque neque. Nullam nisl. Maecenas', 'orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique', '2018-11-15', 1, 1),
	(10, 'mi felis, adipiscing fringilla, porttitor', 'ac orci. Ut semper pretium neque. Morbi quis urna.', '2019-06-25', 31, 1),
	(11, 'Aliquam nisl. Nulla eu neque', 'eu, ultrices sit amet, risus. Donec nibh', '2018-08-13', 1, 1),
	(12, 'cursus et, magna. Praesent interdum', 'consequat, lectus sit amet luctus vulputate, nisi sem semper', '2018-07-22', 1, 1),
	(13, 'faucibus lectus, a sollicitudin orci', 'non, dapibus rutrum, justo. Praesent luctus.', '2019-03-03', 1, 1),
	(14, 'Curae; Donec tincidunt. Donec vitae', 'velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat,', '2019-08-02', 2, 1),
	(15, 'et magnis dis parturient montes,', 'et,', '2020-03-01', 1, 1),
	(16, 'Duis volutpat nunc sit amet', 'adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', '2019-07-23', 1, 1),
	(17, 'mauris. Suspendisse aliquet molestie tellus.', 'hendrerit neque. In ornare', '2018-12-01', 2, 1),
	(18, 'pharetra. Nam ac nulla. In', 'Nulla interdum. Curabitur dictum. Phasellus in', '2019-08-17', 1, 1),
	(19, 'et, magna. Praesent interdum ligula', 'fermentum arcu. Vestibulum ante', '2019-09-11', 1, 1),
	(20, 'tincidunt. Donec vitae erat vel', 'gravida non, sollicitudin a,', '2019-11-16', 1, 1),
	(21, 'Aliquam ultrices iaculis odio. Nam', 'magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus.', '2019-07-15', 1, 1),
	(22, 'Morbi non sapien molestie orci', 'pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus', '2019-08-22', 1, 1),
	(23, 'magna. Nam ligula elit, pretium', 'mattis semper, dui lectus rutrum', '2020-04-22', 1, 1),
	(24, 'Vivamus molestie dapibus ligula. Aliquam', 'risus quis diam luctus lobortis. Class', '2018-05-10', 2, 1),
	(25, 'purus sapien, gravida non, sollicitudin', 'ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus', '2018-12-03', 1, 1),
	(26, 'elementum sem, vitae aliquam eros', 'molestie tellus. Aenean egestas hendrerit neque.', '2019-04-16', 1, 1),
	(27, 'libero mauris, aliquam eu, accumsan', 'Etiam bibendum fermentum', '2019-01-10', 1, 1),
	(28, 'Proin dolor. Nulla semper tellus', 'Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod', '2020-03-21', 1, 1),
	(29, 'habitant morbi tristique senectus et', 'Etiam gravida molestie arcu. Sed eu nibh vulputate mauris', '2019-06-09', 26, 1),
	(30, 'ut mi. Duis risus odio,', 'sem. Pellentesque ut ipsum ac mi eleifend', '2018-09-02', 1, 1),
	(31, 'Nam ac nulla. In tincidunt', 'dui. Cum sociis natoque penatibus', '2019-08-31', 1, 1),
	(32, 'gravida sagittis. Duis gravida. Praesent', 'neque non quam. Pellentesque habitant', '2018-09-09', 1, 1),
	(33, 'nec, euismod in, dolor. Fusce', 'sociis natoque', '2018-12-18', 1, 3),
	(34, 'dapibus ligula. Aliquam erat volutpat.', 'a, scelerisque sed, sapien. Nunc pulvinar arcu et', '2018-06-24', 1, 3),
	(35, 'Sed neque. Sed eget lacus.', 'est,', '2020-03-22', 1, 3),
	(36, 'ullamcorper eu, euismod ac, fermentum', 'nunc sed libero. Proin sed turpis nec', '2019-09-11', 1, 3),
	(37, 'quis, pede. Suspendisse dui. Fusce', 'montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse', '2020-02-17', 1, 3),
	(38, 'a, magna. Lorem ipsum dolor', 'mauris.', '2020-01-07', 1, 3),
	(39, 'dictum augue malesuada malesuada. Integer', 'rutrum non, hendrerit', '2019-12-10', 1, 3),
	(40, 'ut, sem. Nulla interdum. Curabitur', 'convallis convallis dolor.', '2019-06-26', 1, 3),
	(41, 'pede, malesuada vel, venenatis vel,', 'sed tortor. Integer aliquam adipiscing', '2018-10-29', 40, 3),
	(42, 'mi. Aliquam gravida mauris ut', 'dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit', '2018-12-04', 1, 3),
	(43, 'facilisis facilisis, magna tellus faucibus', 'purus, in molestie tortor nibh sit amet orci.', '2019-03-05', 1, 3),
	(44, 'et, rutrum non, hendrerit id,', 'nec ante blandit viverra. Donec tempus, lorem fringilla', '2019-07-09', 1, 3),
	(45, 'lobortis augue scelerisque mollis. Phasellus', 'sit amet', '2019-10-26', 1, 3),
	(46, 'sem semper erat, in consectetuer', 'nec ante. Maecenas mi felis, adipiscing fringilla,', '2020-04-14', 1, 3),
	(47, 'Aliquam tincidunt, nunc ac mattis', 'Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim.', '2020-01-11', 1, 3),
	(48, 'quis urna. Nunc quis arcu', 'id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend', '2018-05-23', 1, 3),
	(49, 'penatibus et magnis dis parturient', 'velit egestas lacinia. Sed congue, elit sed consequat', '2018-10-04', 1, 3),
	(50, 'augue porttitor interdum. Sed auctor', 'est', '2020-04-18', 1, 3),
	(51, 'at arcu. Vestibulum ante ipsum', 'enim. Nunc', '2019-04-30', 1, 3),
	(52, 'mollis nec, cursus a, enim.', 'nunc est,', '2019-05-02', 1, 3),
	(53, 'sed libero. Proin sed turpis', 'pede. Cum sociis natoque penatibus', '2019-05-04', 1, 3),
	(54, 'Vestibulum accumsan neque et nunc.', 'mollis non, cursus non, egestas', '2019-05-13', 1, 3),
	(55, 'risus quis diam luctus lobortis.', 'Class aptent taciti sociosqu ad litora torquent per', '2018-09-20', 1, 3),
	(56, 'dui. Cras pellentesque. Sed dictum.', 'cursus. Nunc mauris', '2018-09-04', 1, 3),
	(57, 'ac ipsum. Phasellus vitae mauris', 'ac tellus. Suspendisse sed dolor. Fusce mi', '2019-08-05', 1, 3),
	(58, 'pellentesque a, facilisis non, bibendum', 'semper', '2020-02-09', 31, 3),
	(59, 'egestas. Sed pharetra, felis eget', 'interdum feugiat. Sed nec metus', '2020-01-04', 1, 3),
	(60, 'mi, ac mattis velit justo', 'neque et', '2020-02-07', 40, 3),
	(61, 'sed, est. Nunc laoreet lectus', 'malesuada fringilla', '2019-03-27', 1, 3),
	(62, 'tempus risus. Donec egestas. Duis', 'urna. Nullam lobortis quam a', '2019-06-14', 1, 3),
	(63, 'Integer eu lacus. Quisque imperdiet,', 'est tempor bibendum. Donec felis orci, adipiscing non,', '2018-08-18', 30, 3),
	(64, 'dui, semper et, lacinia vitae,', 'tincidunt pede ac urna.', '2019-11-29', 1, 3),
	(65, 'luctus et ultrices posuere cubilia', 'parturient montes, nascetur ridiculus mus. Proin vel arcu', '2019-02-20', 1, 3),
	(66, 'Vestibulum ante ipsum primis in', 'diam vel arcu. Curabitur ut odio vel est', '2019-12-14', 1, 3),
	(67, 'semper egestas, urna justo faucibus', 'nec urna et arcu imperdiet ullamcorper. Duis at', '2018-09-02', 31, 3),
	(68, 'a nunc. In at pede.', 'Cum sociis natoque', '2019-04-11', 1, 3),
	(69, 'tristique senectus et netus et', 'malesuada fames ac', '2019-06-23', 1, 3),
	(70, 'nonummy ut, molestie in, tempus', 'non, lacinia at, iaculis quis, pede.', '2018-11-05', 1, 3),
	(71, 'id enim. Curabitur massa. Vestibulum', 'magna tellus faucibus leo, in', '2020-02-02', 1, 2),
	(72, 'accumsan convallis, ante lectus convallis', 'vulputate, posuere vulputate, lacus.', '2018-04-30', 1, 2),
	(73, 'nunc nulla vulputate dui, nec', 'sapien. Cras dolor dolor,', '2018-08-27', 26, 2),
	(74, 'et, commodo at, libero. Morbi', 'a', '2019-01-14', 1, 2),
	(75, 'quam vel sapien imperdiet ornare.', 'turpis. In condimentum. Donec at arcu. Vestibulum ante', '2019-09-28', 1, 2),
	(76, 'tellus justo sit amet nulla.', 'Mauris', '2018-09-23', 30, 2),
	(77, 'elit, dictum eu, eleifend nec,', 'non,', '2018-09-18', 1, 2),
	(78, 'bibendum. Donec felis orci, adipiscing', 'interdum feugiat. Sed nec', '2018-12-17', 1, 2),
	(79, 'est arcu ac orci. Ut', 'mi fringilla mi lacinia', '2018-08-16', 1, 2),
	(80, 'ante blandit viverra. Donec tempus,', 'nibh vulputate', '2018-12-03', 1, 2),
	(81, 'sit amet nulla. Donec non', 'dictum sapien. Aenean massa. Integer vitae', '2018-07-06', 1, 2),
	(82, 'Nunc laoreet lectus quis massa.', 'Nunc mauris sapien, cursus in, hendrerit', '2020-03-18', 32, 2),
	(83, 'sem, vitae aliquam eros turpis', 'vitae', '2018-06-28', 1, 2),
	(84, 'lectus pede, ultrices a, auctor', 'non leo.', '2018-08-04', 1, 2),
	(85, 'Praesent eu dui. Cum sociis', 'velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas.', '2019-12-17', 1, 2),
	(86, 'mollis non, cursus non, egestas', 'In mi pede, nonummy', '2019-09-04', 1, 2),
	(87, 'eu, placerat eget, venenatis a,', 'Duis sit amet diam eu', '2019-08-23', 1, 2),
	(88, 'magna tellus faucibus leo, in', 'mattis. Integer eu', '2019-10-08', 1, 2),
	(89, 'auctor non, feugiat nec, diam.', 'arcu et pede.', '2018-08-03', 1, 2),
	(90, 'tristique pellentesque, tellus sem mollis', 'tortor at risus.', '2020-04-07', 1, 2),
	(91, 'erat. Etiam vestibulum massa rutrum', 'dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero.', '2019-08-27', 1, 2),
	(92, 'tristique senectus et netus et', 'sem. Pellentesque ut ipsum ac mi', '2019-04-27', 33, 2),
	(93, 'erat volutpat. Nulla dignissim. Maecenas', 'neque tellus, imperdiet non, vestibulum nec, euismod in, dolor.', '2019-02-11', 1, 2),
	(94, 'aliquam eros turpis non enim.', 'vitae, erat. Vivamus nisi. Mauris nulla. Integer urna.', '2018-08-01', 1, 2),
	(95, 'Curae; Phasellus ornare. Fusce mollis.', 'sit amet diam eu', '2019-09-14', 32, 2),
	(96, 'at, iaculis quis, pede. Praesent', 'mattis. Integer eu', '2019-07-19', 1, 2),
	(97, 'vehicula et, rutrum eu, ultrices', 'vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse', '2019-09-07', 1, 2),
	(98, 'lacus. Cras interdum. Nunc sollicitudin', 'montes,', '2018-06-19', 1, 2),
	(99, 'inceptos hymenaeos. Mauris ut quam', 'Aliquam', '2019-10-05', 1, 2),
	(100, 'vitae velit egestas lacinia. Sed', 'Integer mollis. Integer tincidunt aliquam', '2019-09-26', 1, 2);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- Export de la structure de table allan. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Export de données de la table allan.categories : ~0 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `libelle`) VALUES
	(1, 'web'),
	(2, 'people'),
	(3, 'beaute'),
	(4, 'animaux');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Export de la structure de table allan. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- Export de données de la table allan.utilisateurs : ~0 rows (environ)
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `date_naissance`) VALUES
	(1, 'coubard', 'alexis', '1995-06-03'),
	(2, 'coubard', 'allan', '1999-04-18'),
	(3, 'iris', 'chienne', '2015-04-26'),
	(24, 'Mueller', 'Marc', '1999-06-25'),
	(25, 'Meyer', 'Jerry', '1979-11-22'),
	(26, 'Anthony', 'Jared', '2002-01-03'),
	(27, 'Davidson', 'Harper', '1981-12-05'),
	(28, 'Beach', 'Macon', '2015-06-06'),
	(29, 'Waller', 'Devin', '1989-05-05'),
	(30, 'Gillespie', 'Keefe', '2015-09-08'),
	(31, 'Dickerson', 'Ferris', '1982-12-29'),
	(32, 'Allen', 'Dillon', '1993-09-03'),
	(33, 'Gonzales', 'Warren', '1980-12-24'),
	(34, 'Williamson', 'Gil', '1983-07-19'),
	(35, 'Meyer', 'August', '2004-10-04'),
	(36, 'Martinez', 'Hashim', '1985-03-28'),
	(37, 'Bryan', 'Wing', '2013-09-10'),
	(38, 'Silva', 'Cooper', '2009-02-23'),
	(39, 'Wolf', 'David', '2002-04-06'),
	(40, 'Tanner', 'Salvador', '1996-12-14'),
	(41, 'Vinson', 'Randall', '2002-07-20'),
	(42, 'Cabrera', 'Ian', '2018-10-09'),
	(43, 'Hall', 'Ezra', '1984-08-09');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
