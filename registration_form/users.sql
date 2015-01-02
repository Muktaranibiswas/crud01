-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2015 at 01:50 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created`, `modified`) VALUES
(1, 'mukta', 'mukta', 'muktaquate@yahoo.com', '123456', '2015-01-01 10:17:30', '2015-01-01 10:17:30'),
(2, '', 'username', 'email', 'password', '2015-01-01 10:21:53', '2015-01-01 10:21:53'),
(3, '', 'username', 'email', 'password', '2015-01-01 10:22:14', '2015-01-01 10:22:14'),
(4, '', 'username', 'email', 'password', '2015-01-01 10:25:10', '2015-01-01 10:25:10'),
(5, '', 'username', 'email', 'password', '2015-01-01 10:25:32', '2015-01-01 10:25:32'),
(6, '', 'username', 'email', 'password', '2015-01-01 10:25:40', '2015-01-01 10:25:40'),
(7, '', 'username', 'email', 'password', '2015-01-01 10:26:30', '2015-01-01 10:26:30'),
(8, '', 'bbbbb,', '', '00000,', '2015-01-01 10:27:58', '2015-01-01 10:27:58'),
(9, '', 'aaaaaaa,', '', '12345,', '2015-01-01 10:29:11', '2015-01-01 10:29:11'),
(10, '', 'aaaaaaa,', 'bachar@yahoo.com', '12345,', '2015-01-01 10:30:45', '2015-01-01 10:30:45'),
(11, '', '', '', '', '2015-01-01 10:41:29', '2015-01-01 10:41:29'),
(12, '', '', '', '', '2015-01-01 11:16:05', '2015-01-01 11:16:05'),
(13, '', '', '', '', '2015-01-01 11:16:10', '2015-01-01 11:16:10'),
(14, '', '', '', '', '2015-01-01 11:19:56', '2015-01-01 11:19:56'),
(15, '', 'nnnnnnn,', 'muktaquate@yahoo.com', 'vbbbbbbbb,', '2015-01-01 11:20:09', '2015-01-01 11:20:09'),
(16, '', '', '', '', '2015-01-01 11:20:45', '2015-01-01 11:20:45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
