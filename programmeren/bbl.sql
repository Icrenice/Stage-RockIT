-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 16 mrt 2021 om 10:20
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbl`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `np`
--

CREATE TABLE `np` (
  `NPid` int(11) NOT NULL,
  `geslacht` varchar(5) NOT NULL,
  `titel` varchar(4) NOT NULL,
  `geboortedatum` date NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `tussenvoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `straat` varchar(40) NOT NULL,
  `huisnummer` varchar(10) NOT NULL,
  `huisnummertvg` varchar(5) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `plaats` varchar(30) NOT NULL,
  `land` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefoonnmr` varchar(12) NOT NULL,
  `mobielnmr` varchar(12) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `np`
--

INSERT INTO `np` (`NPid`, `geslacht`, `titel`, `geboortedatum`, `voornaam`, `tussenvoegsel`, `achternaam`, `straat`, `huisnummer`, `huisnummertvg`, `postcode`, `plaats`, `land`, `email`, `telefoonnmr`, `mobielnmr`, `wachtwoord`) VALUES
(1, 'Man', 'Mr.', '2021-03-10', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '$2y$10$4ifArMdhjImrrtY/7yyBHuAeu4nr4FXuAGW2.Fg/rcBtU27CZ6x9W'),
(2, 'Man', 'Mr.', '2021-03-10', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '$2y$10$jc7DQi047MaEPT9D8lRliuPKNY4O4PNU./tN53P2FNrXT976VD2kG'),
(3, 'Man', 'Mr.', '2021-03-10', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '$2y$10$3TG5sQyyiRczfmIGLvV.bOtzn/1zOZrpVFqqO5plhspMQolVw8qoa');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `np`
--
ALTER TABLE `np`
  ADD PRIMARY KEY (`NPid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `np`
--
ALTER TABLE `np`
  MODIFY `NPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
