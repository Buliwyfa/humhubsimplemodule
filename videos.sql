-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 août 2018 à 20:12
-- Version du serveur :  5.7.21
-- Version de PHP :  7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `humhub_dev`
--

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(150) NOT NULL,
  `tags` varchar(150) NOT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_guid` varchar(45) DEFAULT NULL,
  `created` timestamp NOT NULL,
  `created_guid` varchar(45) NOT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`id_video`, `link`, `title`, `description`, `tags`, `updated`, `updated_guid`, `created`, `created_guid`) VALUES
(12, 'http://www.google2.ca', 'Comment fabriquer un connecteur ', 'je suis un timestamp automatique', 'ksa, djska, dlasd', '2018-08-28 19:26:48', '7f66260c-2135-4ab3-8a6c-f889678ad4d4', '2018-08-27 20:10:55', '7f66260c-2135-4ab3-8a6c-f889678ad4d4'),
(15, 'https://www.youtube.ca', 'Decoupage d\'une ligne', 'dans cette video vous allez voir comment nos techniciens arriverons a faire ', '', '2018-08-28 12:52:04', '7f66260c-2135-4ab3-8a6c-f889678ad4d4', '2018-08-28 12:52:04', '7f66260c-2135-4ab3-8a6c-f889678ad4d4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
