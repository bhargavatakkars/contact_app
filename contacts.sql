-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2022 at 01:49 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycontacts`
--

CREATE TABLE `mycontacts` (
  `uemail` varchar(50) DEFAULT NULL,
  `contact_name` varchar(25) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `contact_email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mycontacts`
--

INSERT INTO `mycontacts` (`uemail`, `contact_name`, `contact_number`, `contact_email`) VALUES
('Bhargava@ac.in', 'Bhargava', 2147483647, 'bst@bst.in'),
('Bhargava@ac.in', 'Sandhya', 2147483647, 'sandhya@qwe.in'),
('Bhargava@ac.in', 'Raju', 2147483647, 'raj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `secretcode` varchar(50) NOT NULL,
  `emailId` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`secretcode`, `emailId`, `password`) VALUES
('bsqe', 'Bhargava@wsgfj.in', 'f970e2767d0cfe75876ea857f92e319b'),
('bb', 'Bhargava@wsgfj.in', '21ad0bd836b90d08f4cf640b4c298e7c'),
('123', 'Bhargava@ac.in', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
