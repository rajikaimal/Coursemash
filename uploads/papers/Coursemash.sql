-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2015 at 05:57 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Coursemash`
--

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE IF NOT EXISTS `papers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `confidence` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `directory` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`Id`, `type`, `confidence`, `year`, `directory`, `module`, `semester`, `owner`) VALUES
(32, 'mid', 0, 2014, 'http://localhost/Coursemash/uploads/answers/3g_modem_connect_D300_i386.deb', 'ITA', '1y2s', 'IT14118814'),
(33, 'mid', 18, 2014, 'http://localhost/Coursemash/uploads/answers/AlbumArtSmall.jpg', 'ITA', '1y2s', 'IT14118814'),
(34, 'mid', 60, 2014, 'http://localhost/Coursemash/uploads/answers/inbox.jpg', 'ITA', '1y2s', 'IT14118814');

-- --------------------------------------------------------

--
-- Table structure for table `pastpapers`
--

CREATE TABLE IF NOT EXISTS `pastpapers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `directory` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pastpapers`
--

INSERT INTO `pastpapers` (`Id`, `type`, `year`, `directory`, `module`, `semester`) VALUES
(1, 'mid', 2014, 'http://localhost/Coursemash/uploads/papers/Folder.jpg', 'IPE', '1y1s'),
(2, 'mid', 2014, 'http://localhost/Coursemash/uploads/papers/3g_modem_connect_D300_i386.deb', 'IPE', '1y1s');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `password`, `year`, `fname`, `lname`) VALUES
('IT14118814', '123', 2, 'Rajika', 'Imal'),
('IT14118815', '12', 2, 'Tiffany', 'Hwang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
