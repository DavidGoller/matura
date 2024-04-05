-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Apr 2024 um 08:57
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `happy_dogs`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `address`
--

INSERT INTO `address` (`id`, `address`, `country`, `postcode`, `city`, `province`, `uid`) VALUES
(1, 'Rom str. 20', 'Italien', 39100, 'Bozen', 'Bozen', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `dog`
--

CREATE TABLE `dog` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `microchip` int(11) DEFAULT NULL,
  `breed` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `adoption_date` date DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `origin` varchar(45) DEFAULT NULL,
  `sterilized` BOOLEAN DEFAULT NULL,
  `vet` varchar(250) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `behaviour` text DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `family`
--

CREATE TABLE `family` (
  `fid` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `family`
--

INSERT INTO `family` (`fid`, `firstname`, `lastname`, `phone`, `uid`) VALUES
(1, 'Damian', 'Leider', '493213123123', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `short` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `language`
--

INSERT INTO `language` (`id`, `short`) VALUES
(1, 'de'),
(2, 'it'),
(3, 'en');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `opes`
--

CREATE TABLE `opes` (
  `id` int(11) NOT NULL,
  `cardnumber` int(11) DEFAULT NULL,
  `opescol` varchar(45) DEFAULT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `opes`
--

INSERT INTO `opes` (`id`, `cardnumber`, `opescol`, `uid`) VALUES
(1, 2147483647, NULL, 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `texts`
--

CREATE TABLE `texts` (
  `id` int(11) NOT NULL,
  `actionid` int(11) NOT NULL,
  `text` longtext DEFAULT NULL,
  `lid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `codicefiscale` varchar(255) DEFAULT NULL,
  `lid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `codicefiscale`, `lid`) VALUES
(5, 'David', 'Goller', '394984780', 'david.goller2503@berufsschule.bz', '4124bc0a9335c27f086f24ba207a4912', 'a03b25c6969A', 3);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indizes für die Tabelle `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indizes für die Tabelle `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `uid` (`uid`);

--
-- Indizes für die Tabelle `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `opes`
--
ALTER TABLE `opes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indizes für die Tabelle `texts`
--
ALTER TABLE `texts`
  ADD PRIMARY KEY (`id`,`actionid`),
  ADD KEY `lid` (`lid`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lid` (`lid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `family`
--
ALTER TABLE `family`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `opes`
--
ALTER TABLE `opes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `texts`
--
ALTER TABLE `texts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `dog`
--
ALTER TABLE `dog`
  ADD CONSTRAINT `dog_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `opes`
--
ALTER TABLE `opes`
  ADD CONSTRAINT `opes_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `texts`
--
ALTER TABLE `texts`
  ADD CONSTRAINT `texts_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `language` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
