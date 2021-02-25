-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 12:02 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `username` varchar(20) NOT NULL,
  `c` int(3) DEFAULT '0',
  `cpp` int(3) DEFAULT '0',
  `java` int(3) DEFAULT '0',
  `python` int(3) DEFAULT '0',
  `html` int(3) DEFAULT '0',
  `css` int(3) DEFAULT '0',
  `javascript` int(3) DEFAULT '0',
  `php` int(3) DEFAULT '0',
  `mysql` int(3) DEFAULT '0',
  `ruby` int(3) DEFAULT '0',
  `kotlin` int(3) DEFAULT '0',
  `matlab` int(3) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`username`, `c`, `cpp`, `java`, `python`, `html`, `css`, `javascript`, `php`, `mysql`, `ruby`, `kotlin`, `matlab`) VALUES
('Pavan Jain', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('ritik', 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `item` varchar(20) NOT NULL,
  `price` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`item`, `price`) VALUES
('c', 690),
('cpp', 790),
('java', 700),
('python', 500),
('html', 200),
('css', 300),
('javascript', 800),
('php', 650),
('mysql', 600),
('ruby', 690),
('kotlin', 660),
('matlab', 630);

-- --------------------------------------------------------

--
-- Table structure for table `validate`
--

CREATE TABLE `validate` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validate`
--

INSERT INTO `validate` (`username`, `password`, `address`, `gender`) VALUES
('Pavan Jain', '123456789', 'Kalpana Nagar 85', 'Male'),
('ritik', 'ritik', 'palandi chowk', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`item`);

--
-- Indexes for table `validate`
--
ALTER TABLE `validate`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
