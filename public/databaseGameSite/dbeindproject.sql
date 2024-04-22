-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2024 om 16:17
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

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
-- Tabelstructuur voor tabel `tblannouncements`
--

CREATE TABLE `tblannouncements` (
  `Announcementid` int(11) NOT NULL,
  `AnnouncementTitle` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `AnnouncementText` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `StartTime` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblannouncements`
--

INSERT INTO `tblannouncements` (`Announcementid`, `AnnouncementTitle`, `AnnouncementText`, `StartTime`) VALUES
(12, 'Space Invaders wedstrijd', 'Speler dat sjnelste het spel kan afmaken', '2023-12-01'),
(13, 'a', 'b', '2024-01-08'),
(14, 'hello darkess', 'my old friend', '2024-01-08'),
(15, 'hello darkness my old friend', 'i have come to talk to you again', '2024-01-08'),
(16, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'hello there i have come to come to see you again', '2024-01-08');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblgebruikers`
--

CREATE TABLE `tblgebruikers` (
  `gebruikerid` int(11) NOT NULL,
  `voornaam` text NOT NULL,
  `naam` text NOT NULL,
  `email` text NOT NULL,
  `wachtwoord` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `profielfoto` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblgebruikers`
--

INSERT INTO `tblgebruikers` (`gebruikerid`, `voornaam`, `naam`, `email`, `wachtwoord`, `admin`, `profielfoto`, `beschrijving`) VALUES
(11, 'Alsa', 'Olsa', 'AlsoOlsa@gmail.com', '$2y$10$dXj.ObQhc21d7ptSTkSAUuPN5nVdtqhaMatligZy2nMq.bzUyPiLi', 0, '16069142702581.png', 'Hallo :D'),
(9, 'cédric', 'verlinden', 'gezgdshehqhqrqhjreqjj@a.a', '$2y$10$pAg3ijKIlFztfww/3SNP1OGyxzV5fVnkiBFYq47Gw.BW.2akR.Km.', 1, 'images1.jpg', '123'),
(12, 'Olqio', 'Ceronoir', 'OlqioCeronoir@gmail.com', '$2y$10$BSpIRmSIvDWNRne85NvaY.Sri2LFRoDfMhL9yFAr7YCmkO185rzzq', 0, 'ninjaStar.jpg', 'DIt is een account tester');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblgoals`
--

CREATE TABLE `tblgoals` (
  `Goalid` int(11) NOT NULL,
  `GoalTitle` text NOT NULL,
  `Descriptie` text NOT NULL,
  `Prijs` text NOT NULL,
  `StartTime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblgoals`
--

INSERT INTO `tblgoals` (`Goalid`, `GoalTitle`, `Descriptie`, `Prijs`, `StartTime`) VALUES
(2, 'Haal 5000 points in Tetris', 'Vandaag moet je het doen', '€5.00', '2024-03-01'),
(4, 'Beat Space Invaders 3 times in a row', 'Template', 'Special tag next to your name', '2024-03-11'),
(5, 'Template', 'Template', 'SPecial tag', '2024-03-11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblmaintenance`
--

CREATE TABLE `tblmaintenance` (
  `Colors` tinyint(1) NOT NULL,
  `SpaceInvaders` tinyint(1) NOT NULL,
  `Tetris` tinyint(1) NOT NULL,
  `BSC` tinyint(1) NOT NULL,
  `Snake` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblmaintenance`
--

INSERT INTO `tblmaintenance` (`Colors`, `SpaceInvaders`, `Tetris`, `BSC`, `Snake`) VALUES
(1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblverzoeken`
--

CREATE TABLE `tblverzoeken` (
  `verzoekid` int(11) NOT NULL,
  `verzoeker` int(11) NOT NULL,
  `ontvanger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblvrienden`
--

CREATE TABLE `tblvrienden` (
  `vriendid` int(11) NOT NULL,
  `gebruiker1` int(11) NOT NULL,
  `gebruiker2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tblvrienden`
--

INSERT INTO `tblvrienden` (`vriendid`, `gebruiker1`, `gebruiker2`) VALUES
(13, 11, 12),
(14, 12, 11);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tblannouncements`
--
ALTER TABLE `tblannouncements`
  ADD PRIMARY KEY (`Announcementid`);

--
-- Indexen voor tabel `tblgebruikers`
--
ALTER TABLE `tblgebruikers`
  ADD PRIMARY KEY (`gebruikerid`);

--
-- Indexen voor tabel `tblgoals`
--
ALTER TABLE `tblgoals`
  ADD PRIMARY KEY (`Goalid`);

--
-- Indexen voor tabel `tblverzoeken`
--
ALTER TABLE `tblverzoeken`
  ADD PRIMARY KEY (`verzoekid`);

--
-- Indexen voor tabel `tblvrienden`
--
ALTER TABLE `tblvrienden`
  ADD PRIMARY KEY (`vriendid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tblannouncements`
--
ALTER TABLE `tblannouncements`
  MODIFY `Announcementid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `tblgebruikers`
--
ALTER TABLE `tblgebruikers`
  MODIFY `gebruikerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT voor een tabel `tblgoals`
--
ALTER TABLE `tblgoals`
  MODIFY `Goalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `tblverzoeken`
--
ALTER TABLE `tblverzoeken`
  MODIFY `verzoekid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT voor een tabel `tblvrienden`
--
ALTER TABLE `tblvrienden`
  MODIFY `vriendid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
