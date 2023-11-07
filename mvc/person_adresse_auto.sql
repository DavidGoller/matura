-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 01:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `person_adresse_auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `strase` varchar(45) DEFAULT NULL,
  `hausnr` varchar(45) DEFAULT NULL,
  `ort` varchar(45) DEFAULT NULL,
  `plz` int(11) DEFAULT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adresse`
--

INSERT INTO `adresse` (`id`, `strase`, `hausnr`, `ort`, `plz`, `person_id`) VALUES
(6, 'strase1', 'hausnr', '4', 39094, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `marke` varchar(45) DEFAULT NULL,
  `modell` varchar(45) DEFAULT NULL,
  `kennzeichen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id`, `marke`, `modell`, `kennzeichen`) VALUES
(1, 'Porche', 'Keiman ', 'DerGuate'),
(2, 'Opel', 'R7', 'LOL888A7'),
(3, 'Tesla', 'X', 'PalOdiDio'),
(4, 'marke', 'mdoell', 'kennzueichen'),
(5, '123', '1233', '1234'),
(6, 'marke', 'mdoell', 'kennzueichen');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `vorname` varchar(45) DEFAULT NULL,
  `nachname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `vorname`, `nachname`) VALUES
(1, 'David', 'Goller'),
(2, 'Reiner', 'Zufall'),
(3, 'Patrick', 'Steiner'),
(5, 'David', '123');

-- --------------------------------------------------------

--
-- Table structure for table `person_has_auto`
--

CREATE TABLE `person_has_auto` (
  `person_id` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person_has_auto`
--

INSERT INTO `person_has_auto` (`person_id`, `auto_id`) VALUES
(1, 3),
(2, 2),
(2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_has_auto`
--
ALTER TABLE `person_has_auto`
  ADD PRIMARY KEY (`person_id`,`auto_id`),
  ADD KEY `fk_person_has_auto_auto1_idx` (`auto_id`),
  ADD KEY `fk_person_has_auto_person1_idx` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person_has_auto`
--
ALTER TABLE `person_has_auto`
  ADD CONSTRAINT `fk_person_has_auto_auto1` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_person_has_auto_person1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
