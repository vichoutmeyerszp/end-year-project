-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2024 at 05:05 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblannouncements`
--

INSERT INTO `tblannouncements` (`Announcementid`, `AnnouncementTitle`, `AnnouncementText`, `StartTime`) VALUES
(13, 'e', 'e', '2024-03-02'),
(12, 'Announcement test', 'Dit is een announcement, en hiernaast geeft het de datum dat de announcement gemaakt is', '2023-11-30');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblgebruikers`
--

INSERT INTO `tblgebruikers` (`gebruikerid`, `voornaam`, `naam`, `email`, `wachtwoord`, `admin`, `profielfoto`, `beschrijving`) VALUES
(8, 'Vic', 'Houtmeyers', 'vichoutmeyers@gmail.com', '$2y$10$3fD9QD2EiaynvaEa9R7RwOkDk6cd7KjkAzZp.rChqIDVL7xgApvMq', 0, 'ninjaStar.jpg', 'Bezoeker test'),
(9, 'Rustico', 'Houtmeyers', 'RusticKirby@fuckyou.hah', '$2y$10$okUC99n3XWfa.y0vlC0Xq..4G1LydKZq45pmhhY2Wl9zlm4tmnqoy', 0, 'ee_1_21.png', '123'),
(10, 'Rustic', 'Ao', 'RusticKirby@fineIchange.better', '$2y$10$d5dd0QTUdlqJIgfKjTqsU.9l7.29HkVGSDt/XCH4yd42qD6xaf8ES', 0, 'ee_1_21.png', '123'),
(7, 'Vic', 'Vic', 'vic@civ.vic', '$2y$10$5eHT2La0VSX7uz9ChJ3C1uLdfQMIyDrmqWFWrIYnxcrFEYJ5/gcGu', 0, 'Knipseaeaeaeael.PNG', 'admin test');

-- --------------------------------------------------------

--
-- Table structure for table `tblverzoeken`
--

DROP TABLE IF EXISTS `tblverzoeken`;
CREATE TABLE IF NOT EXISTS `tblverzoeken` (
  `verzoekid` int NOT NULL AUTO_INCREMENT,
  `verzoeker` int NOT NULL,
  `ontvanger` int NOT NULL,
  PRIMARY KEY (`verzoekid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblvrienden`
--

DROP TABLE IF EXISTS `tblvrienden`;
CREATE TABLE IF NOT EXISTS `tblvrienden` (
  `vriendid` int NOT NULL AUTO_INCREMENT,
  `gebruiker1` int NOT NULL,
  `gebruiker2` int NOT NULL,
  PRIMARY KEY (`vriendid`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblvrienden`
--

INSERT INTO `tblvrienden` (`vriendid`, `gebruiker1`, `gebruiker2`) VALUES
(90, 10, 9),
(89, 9, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
