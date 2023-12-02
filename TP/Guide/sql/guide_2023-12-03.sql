# ************************************************************
# Sequel Ace SQL dump
# Version 20062
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.7.39)
# Database: guide
# Generation Time: 2023-12-02 23:45:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table restaurant
# ------------------------------------------------------------

DROP TABLE IF EXISTS `restaurant`;

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `prix` decimal(4,2) DEFAULT NULL,
  `commentaire` text,
  `note` double DEFAULT NULL,
  `visite` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;

INSERT INTO `restaurant` (`id`, `nom`, `adresse`, `prix`, `commentaire`, `note`, `visite`)
VALUES
	(1,'JEAN-YVES SCHILLINGER','17 Rue de la Poissonnerie,68000 Colmar',50.00,'Le JY\'S est un restaurant différent des autres avec un décor cosy et résolument contemporain qui attire une\rtrès belle clientèle cosmopolite. Jean-Yves Schillinger est un chef doublement étoilé créatif qui vous entraînera\rdans une ronde dépaysante à souhait où la cuisine du monde est à l\'honneurLe chef décline la cuisine fusion à\rsa façon. Une carte régulièrement renouvelée s\'égaye de créations audacieuses et de plats revisités avec\rmodernité et pertinence',0.9,'2020-02-04 00:00:00'),
	(2,'JEAN-YVES SCHILLINGER','17 Rue de la Poissonnerie,68000 Colmar',50.00,'Le JY\'S est un restaurant différent des autres avec un décor cosy et résolument contemporain qui attire une\rtrès belle clientèle cosmopolite. Jean-Yves Schillinger est un chef doublement étoilé créatif qui vous entraînera\rdans une ronde dépaysante à souhait où la cuisine du monde est à l\'honneurLe chef décline la cuisine fusion à\rsa façon. Une carte régulièrement renouvelée s\'égaye de créations audacieuses et de plats revisités avec\rmodernité et pertinence',0.9,'2020-02-04 00:00:00'),
	(3,'L’ADRIATICO','6 route de Neuf Brisach, 68000, Colmar, France',25.00,'Une des meilleurs pizzéria de la région Service très agréable, efficace et souriant Salle principale un peu\rbruyante mais cela donne un côté italien je recommande',0.8,'2020-02-04 00:00:00');

/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
