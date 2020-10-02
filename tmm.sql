-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 07:49 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `s_no` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(1000) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s_no`, `username`, `pwd`) VALUES
(3, 'eb', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `hints`
--

CREATE TABLE IF NOT EXISTS `hints` (
  `level` int(10) NOT NULL,
  `hintn` int(10) NOT NULL,
  `hint` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hints`
--

INSERT INTO `hints` (`level`, `hintn`, `hint`) VALUES
(1, 1, 'The bird shown in the first pic is nightingale.'),
(2, 1, 'The second pic denotes the country code.'),
(1, 2, 'Born Name'),
(2, 2, 'hitman'),
(3, 1, 'eclipse denotes ibm'),
(3, 2, 'second pic denotes france'),
(3, 3, 'what is ibm called as ?');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `level` int(10) NOT NULL,
  `ans` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`level`, `ans`) VALUES
(1, 'e1cd75f7e2233c11440b0e0138a6a074');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `college` varchar(1000) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `time` timestamp NULL DEFAULT NULL,
  `level` int(10) NOT NULL,
  `actcode` int(10) NOT NULL,
  `unknown` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `phone`, `college`, `branch`, `year`, `time`, `level`, `actcode`, `unknown`) VALUES
('rko', 'ritwik.tiwari02@gmail.com', '9b6582ec70ab8368b529e5626fe0f584', '7004110940', 'mmmut', 'cse', '3', '2020-02-28 18:59:48', 2, 0, 0),
('rko', 'ritwik@gmail.com', '13e47eee406f08348b9e5db0f57d6558', '7004110940', 'mmmut', 'cse', '3', '2020-03-30 17:24:17', 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
