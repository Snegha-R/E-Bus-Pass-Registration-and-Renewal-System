-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2019 at 11:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `name` varchar(15) NOT NULL,
  `regid` varchar(10) NOT NULL,
  `dept` varchar(8) NOT NULL,
  `year` varchar(3) NOT NULL,
  `sec` varchar(3) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` text NOT NULL,
  `boarding` varchar(15) NOT NULL,
  `mail` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`name`, `regid`, `dept`, `year`, `sec`, `gender`, `address`, `boarding`, `mail`, `mobile`, `password`) VALUES
('Kamalnath LP', '16bcs3031', 'eee', '3', 'A', 'M', 'velur', 'velur', 'kamalnathlp@gma', '12345678', '1234'),
('sasi', '16bcs3096', 'cse', '1', 'A', '', '7/8A, PUDUR KATTU KOTTAI', 'karur', 'kamalnathlp@gma', '0944338546', '1234'),
('karan', '16bcs3087', 'cse', '1', 'A', 'M', '7/8A, PUDUR KATTU KOTTAI', 'karur', 'kamalnathlp@gma', '0944338546', '1234'),
('Sasikumar', '16bcs3032', 'cse', '4', 'A', 'M', '7/8A, PUDUR KATTU KOTTAI', 'karur', 'kamalnathlp@gma', '0944338546', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
