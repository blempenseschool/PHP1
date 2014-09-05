-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 09:01 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leraren`
--

-- --------------------------------------------------------

--
-- Table structure for table `leraren`
--

CREATE TABLE IF NOT EXISTS `leraren` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(40) NOT NULL,
  `geb_jaar` year(4) DEFAULT NULL,
  `vakID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `leraren`
--

INSERT INTO `leraren` (`id`, `voornaam`, `achternaam`, `geb_jaar`, `vakID`) VALUES
(1, 'Bert', 'Lempens', 1985, 1),
(2, 'Toon', 'Gorissen', 1985, 3),
(3, 'Koen', 'Timmers', 1980, 4),
(4, 'Danny', 'Drijvers', 1983, 5),
(5, 'Jos', 'Nys', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vakken`
--

CREATE TABLE IF NOT EXISTS `vakken` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vakken`
--

INSERT INTO `vakken` (`id`, `naam`) VALUES
(1, 'PHP1'),
(2, 'PHP2'),
(3, 'Interface Lab'),
(4, 'Drupal'),
(5, 'jQuery');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
