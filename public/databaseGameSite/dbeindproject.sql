-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2023 at 09:41 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeindproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncements`
--

DROP TABLE IF EXISTS `tblannouncements`;
CREATE TABLE IF NOT EXISTS `tblannouncements` (
  `Announcementid` int NOT NULL AUTO_INCREMENT,
  `AnnouncementTitle` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `AnnouncementText` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `StartTime` date NOT NULL,
  PRIMARY KEY (`Announcementid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblgebruikers`
--

DROP TABLE IF EXISTS `tblgebruikers`;
CREATE TABLE IF NOT EXISTS `tblgebruikers` (
  `gebruikerid` int NOT NULL AUTO_INCREMENT,
  `voornaam` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `naam` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `wachtwoord` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `admin` tinyint NOT NULL,
  `profielfoto` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `beschrijving` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`gebruikerid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblgebruikers`
--

INSERT INTO `tblgebruikers` (`gebruikerid`, `voornaam`, `naam`, `email`, `wachtwoord`, `admin`, `profielfoto`, `beschrijving`) VALUES
(8, 'Vic', 'Houtmeyers', 'vichoutmeyers@gmail.com', '$2y$10$3fD9QD2EiaynvaEa9R7RwOkDk6cd7KjkAzZp.rChqIDVL7xgApvMq', 0, 'addfavorite.png', 'Bezoeker test'),
(7, 'Vic', 'Vic', 'vic@civ.vic', '$2y$10$5eHT2La0VSX7uz9ChJ3C1uLdfQMIyDrmqWFWrIYnxcrFEYJ5/gcGu', 0, 'Knipseaeaeaeael.PNG', 'admin test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
