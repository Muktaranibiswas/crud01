-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 01:31 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students_info_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `code` int(40) NOT NULL,
  `track` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `fathersname` varchar(40) NOT NULL,
  `mothersname` varchar(40) NOT NULL,
  `religion` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(40) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `nationalid` int(40) NOT NULL,
  `passport` int(40) NOT NULL,
  `presentaddress` varchar(150) NOT NULL,
  `permanentaddress` varchar(150) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alternateemail` varchar(40) NOT NULL,
  `contactnumber` char(40) NOT NULL,
  `sscinstitute` varchar(40) NOT NULL,
  `sscroll` int(40) NOT NULL,
  `sscresult` double NOT NULL,
  `sscyear` year(4) NOT NULL,
  `sscboard` varchar(40) NOT NULL,
  `hscinstitute` varchar(40) NOT NULL,
  `hscroll` int(40) NOT NULL,
  `hscresult` double NOT NULL,
  `hscyear` year(4) NOT NULL,
  `hscboard` varchar(40) NOT NULL,
  `bachelordegree` varchar(40) NOT NULL,
  `bscnstitute` varchar(40) NOT NULL,
  `bscresult` double NOT NULL,
  `bscyear` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `track`, `firstname`, `lastname`, `fathersname`, `mothersname`, `religion`, `dateofbirth`, `gender`, `nationality`, `nationalid`, `passport`, `presentaddress`, `permanentaddress`, `email`, `alternateemail`, `contactnumber`, `sscinstitute`, `sscroll`, `sscresult`, `sscyear`, `sscboard`, `hscinstitute`, `hscroll`, `hscresult`, `hscyear`, `hscboard`, `bachelordegree`, `bscnstitute`, `bscresult`, `bscyear`) VALUES
(1, 94498892, 'PHP', 'Mukta', 'Biswas', 'Dinesh Chandra Biswas', 'Putul Rani Biswas', 'Hindu', '2013-10-15', 'Female', 'Bangladeshi', 45464622, 45646412, 'shyamoli', 'shyamoli', 'muktaquate@yahoo.com', 'muktacdp@yahoo.com', '01780170107', 'dgghs', 110101, 3.69, 2005, 'Barisal', 'mpi', 212960, 3.53, 2009, 'Technical', 'bsc', 'bubt', 3.76, 2013);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
