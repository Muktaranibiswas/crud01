-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 05:05 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `academics_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loeducation` varchar(20) NOT NULL,
  `etitle` varchar(20) NOT NULL,
  `group` varchar(20) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `rtype` varchar(20) NOT NULL,
  `result` float NOT NULL,
  `scale` float NOT NULL,
  `pyear` year(4) NOT NULL,
  `duration` int(10) NOT NULL,
  `achievement` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `loeducation`, `etitle`, `group`, `institution`, `rtype`, `result`, `scale`, `pyear`, `duration`, `achievement`) VALUES
(5, 'Diploma', 'ghhhhhhhhhhh', 'mmn', 'hgggggggggggk', 'Grade', 4.5, 5, 2005, 4, 'pjkjjj'),
(10, 'Doctoral', 'aaaaa', 'aaaaa', 'aaaaaa', 'Other', 2.22, 4, 2010, 5, 'fail');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
