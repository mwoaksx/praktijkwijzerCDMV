-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 mei 2020 om 14:57
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campingmaasvalei`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klachten`
--

CREATE TABLE `klachten` (
  `ID` int(11) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Datum` date NOT NULL,
  `Verblijfplaats` varchar(255) NOT NULL,
  `Uitleg` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klachten`
--

INSERT INTO `klachten` (`ID`, `Categorie`, `Naam`, `Datum`, `Verblijfplaats`, `Uitleg`) VALUES
(20, 'Lekkage', 'Piet', '2020-05-22', 'a1', 'Lekkage bij dak van schuur'),
(21, 'Hygiëne', 'Jan', '2020-05-14', '6B', 'Schimmel in badkamer'),
(22, 'Algemene onderhoud', 'Kees', '2020-05-13', '12A', 'Stofzuiger in het huisje defect'),
(23, 'Verzorging van verblijfplaats', 'Hans', '2020-05-22', '2B', 'Veel onkruid rondom verblijfplaats');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `klachten`
--
ALTER TABLE `klachten`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `klachten`
--
ALTER TABLE `klachten`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
