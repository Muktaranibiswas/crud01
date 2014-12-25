-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 12:37 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personal_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `nationalid` char(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` char(20) NOT NULL,
  `track` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `fullname`, `fname`, `mname`, `nationality`, `nationalid`, `email`, `mobile`, `track`) VALUES
(35, 'Mukta Rani Biswas', 'Dinesh Chandra Biswas', 'Putul Rani Biswas', 'bangladesh', '0125634', 'muktaquate@yahoo.com', '01780170107', 'PHP'),
(36, 'Arghya Bachhar', 'Debahis Bachhar', 'Mili Rani Bachhar', 'Bangladesh', '1526487912', 'arghay@hotmail.com', '01712684895', 'PHP'),
(37, 'Ritesh Bachhar', 'DR. S.C Bachhar', 'Dr. Swpana Bachhar', 'Bangladesh', '0189564552', 'bachhar95@yahoo.com', '01780170107', 'PHP'),
(38, 'Oritra Biswas', 'Amit Biswas', 'Hiya Biswas', 'Bangladesh', '12457896', 'oritra95@yahoo.com', '01780170104', 'PHP'),
(39, 'Lorence Sordar', 'Nitai Sordar', 'Dipa Rani Sordar', 'Bangladesh', '0189564552', 'lorance@yahoo.com', '01780170015', 'PHP'),
(40, 'Ridhi Biswas', 'Amit Biswas', 'Khuku Rani Biswas', 'Bangladesh', '0189564552', 'ridhi@yahoo.com', '01780174107', 'PHP'),
(41, 'Shole Ahmed', 'Altaf Ahmed', 'Rabea Khatun', 'Bangladesh', '0189564552', 'sohel@yahoo.com', '01680170107', 'PHP'),
(42, 'Rasel Hossain', 'Akter Hossain', 'Sofia Khatun', 'Bangladesh', '0189564552', 'Rasel@yahoo.com', '01780147107', 'PHP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
