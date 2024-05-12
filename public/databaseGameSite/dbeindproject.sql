-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2024 at 08:53 PM
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
-- Table structure for table `gesprekken`
--

DROP TABLE IF EXISTS `gesprekken`;
CREATE TABLE IF NOT EXISTS `gesprekken` (
  `berichtid` int NOT NULL AUTO_INCREMENT,
  `bericht` text NOT NULL,
  `outgoing_message_id` int NOT NULL,
  `incoming_message_id` int NOT NULL,
  PRIMARY KEY (`berichtid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblannouncements`
--

INSERT INTO `tblannouncements` (`Announcementid`, `AnnouncementTitle`, `AnnouncementText`, `StartTime`) VALUES
(16, 'Example Title', 'Example Announcement', '2024-05-12'),
(15, 'Example Title', 'Example Announcement', '2024-05-12'),
(14, 'Mogelijke Maintenance', 'Beste, er is een kans dat de site mogelijk in Maintenance zal moeten gaan voor komende week door slechte omstandigheden met de Database. We hopen je ze terug te zien', '2024-03-03'),
(12, 'Announcement test', 'Dit is een announcement, en hiernaast geeft het de datum dat de announcement gemaakt is', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

DROP TABLE IF EXISTS `tblfeedback`;
CREATE TABLE IF NOT EXISTS `tblfeedback` (
  `feedbackid` int NOT NULL AUTO_INCREMENT,
  `spel` text NOT NULL,
  `feedback_gever` text NOT NULL,
  `feedback` text NOT NULL,
  `score` int NOT NULL,
  PRIMARY KEY (`feedbackid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblgebruikers`
--

INSERT INTO `tblgebruikers` (`gebruikerid`, `voornaam`, `naam`, `email`, `wachtwoord`, `admin`, `profielfoto`, `beschrijving`) VALUES
(16, 'Vic', 'Houtmeyers', 'vichoutmeyers@bazandpoort.be', '$2y$10$jHetDF5p6OTqmCaBExrEyu1Hq1A0wtqLhTH4rR0atq1blEwiL6Yea', 1, 'yeet123.png', '123'),
(15, 'Vic', 'Houtmeyers', 'Zero@Zero.Zero', '$2y$10$vSeE2dHmhSzmppZgFp5CpuwLp1XdqurGHP4Ea9iKK7TGwCX90PCii', 0, 'g u n.jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblgoals`
--

DROP TABLE IF EXISTS `tblgoals`;
CREATE TABLE IF NOT EXISTS `tblgoals` (
  `Goalid` int NOT NULL AUTO_INCREMENT,
  `GoalTitle` text NOT NULL,
  `Descriptie` text NOT NULL,
  `Prijs` text NOT NULL,
  `StartTime` date NOT NULL,
  PRIMARY KEY (`Goalid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblgoals`
--

INSERT INTO `tblgoals` (`Goalid`, `GoalTitle`, `Descriptie`, `Prijs`, `StartTime`) VALUES
(1, 'Example Title', 'Example Description', 'Example Price', '2024-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `tblmaintenance`
--

DROP TABLE IF EXISTS `tblmaintenance`;
CREATE TABLE IF NOT EXISTS `tblmaintenance` (
  `Colors` tinyint(1) NOT NULL,
  `SpaceInvaders` tinyint(1) NOT NULL,
  `Tetris` tinyint(1) NOT NULL,
  `BSC` tinyint(1) NOT NULL,
  `Snake` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblmaintenance`
--

INSERT INTO `tblmaintenance` (`Colors`, `SpaceInvaders`, `Tetris`, `BSC`, `Snake`) VALUES
(0, 0, 0, 0, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
