-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 11:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personnel`
--
CREATE DATABASE IF NOT EXISTS `personnel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `personnel`;

-- --------------------------------------------------------

--
-- Table structure for table `form_entries`
--

DROP TABLE IF EXISTS `form_entries`;
CREATE TABLE `form_entries` (
  `id` char(4) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `department` varchar(30) NOT NULL,
  `salary` decimal(8,0) NOT NULL,
  `fonction` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_entries`
--

INSERT INTO `form_entries` (`id`, `fname`, `lname`, `dateOfBirth`, `department`, `salary`, `fonction`, `photo`) VALUES
('2027', 'Elabbas', 'Younes', '2022-02-17', 'Production', '10000', 'operator', 'assets/images/logo_fm5.png'),
('6969', 'Battery', 'Hamid', '1212-12-12', 'Production', '10000', 'operator', 'assets/images/bee mine.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_entries`
--
ALTER TABLE `form_entries`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
