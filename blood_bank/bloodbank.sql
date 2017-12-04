-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2017 at 07:28 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

DROP TABLE IF EXISTS `bloodtype`;
CREATE TABLE IF NOT EXISTS `bloodtype` (
  `code` int(10) NOT NULL,
  `bloodType` varchar(10) NOT NULL,
  `cost` int(10) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodtype`
--

INSERT INTO `bloodtype` (`code`, `bloodType`, `cost`) VALUES
(1, 'A+', 100),
(2, 'A-', 100),
(3, 'B+', 150),
(4, 'B-', 100),
(5, 'O+', 150),
(6, 'AB+', 100);

-- --------------------------------------------------------

--
-- Table structure for table `st_addhospital`
--

DROP TABLE IF EXISTS `st_addhospital`;
CREATE TABLE IF NOT EXISTS `st_addhospital` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hname` varchar(50) NOT NULL,
  `haddress` varchar(50) NOT NULL,
  `hphone` int(12) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_addhospital`
--

INSERT INTO `st_addhospital` (`hid`, `hname`, `haddress`, `hphone`) VALUES
(1, 'Fortis', 'Ludhiana', 778965),
(2, 'LLR', 'jalandhar', 7784562),
(3, 'Delhi Hospital', 'Delhi', 77854236),
(4, 'DMC', 'Ludhiana', 778452316),
(52, 'ff', 'dsd', 4343);

-- --------------------------------------------------------

--
-- Table structure for table `st_admin`
--

DROP TABLE IF EXISTS `st_admin`;
CREATE TABLE IF NOT EXISTS `st_admin` (
  `pid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_admin`
--

INSERT INTO `st_admin` (`pid`, `uname`, `password`, `cpass`) VALUES
(0, 'admin', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `st_donar`
--

DROP TABLE IF EXISTS `st_donar`;
CREATE TABLE IF NOT EXISTS `st_donar` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `bgtype` varchar(5) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_donar`
--

INSERT INTO `st_donar` (`did`, `name`, `age`, `gender`, `address`, `phone`, `bgtype`) VALUES
(1, 'Harmeet', 24, 'Female', 'Delta', 778325402, '1'),
(5, 'reena', 24, 'female', 'surrey', 7789556, '6'),
(7, 'Jatinder', 22, 'Male', 'surrey', 766513633, '2'),
(19, 'Raj', 41, 'Female', 'delta', 32132332, '1'),
(20, 'harmeet', 41, 'Female', 'delta', 778323423, '1'),
(21, 'Deepika', 41, 'Female', 'delta', 77832132, '1');

-- --------------------------------------------------------

--
-- Table structure for table `st_employee`
--

DROP TABLE IF EXISTS `st_employee`;
CREATE TABLE IF NOT EXISTS `st_employee` (
  `eid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_employee`
--

INSERT INTO `st_employee` (`eid`, `name`, `address`, `phone`) VALUES
(1, 'Harmeet', 'vancouver', 77823542),
(2, 'Raman', 'Surrey', 77953241),
(3, 'admin', 'ludhiana', 7895642),
(4, 'KUNAL', 'SURREY', 5555);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
