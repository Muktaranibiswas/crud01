-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2014 at 10:09 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE IF NOT EXISTS `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `padd` varchar(150) NOT NULL,
  `peradd` varchar(150) NOT NULL,
  `district` varchar(10) NOT NULL,
  `hphone` char(15) NOT NULL,
  `mobile` char(15) NOT NULL,
  `econtact` char(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `aemail` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `padd`, `peradd`, `district`, `hphone`, `mobile`, `econtact`, `email`, `aemail`) VALUES
(4, 'banani hhhhhhhhhhhh', 'banani', 'dhaka', '012589675566', '017558963325', '0152589663', 'shahlal@hossain.com', 'baby@yahoo.com'),
(6, 'pirerbug', 'pirerbug', 'dhaka', '0178956231', '01917960958', '0152589663', 'mukta@gmail.com', 'rani@yahoo.com'),
(7, 'banani', 'banani', 'dhaka', '012589675566', '01917960958', '0152589663', 'mukta@gmail.com', 'baby@yahoo.com'),
(8, 'uttara', 'uttara', 'dhaka', '01552687842', '015889632', '0147889665522', 'mukta@gmail.com', 'baby@yahoo.com'),
(9, 'banani', 'banani', 'dhaka', '012589675566', '01780170107', '0152589663', 'mukta@gmail.com', 'bachhar@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
