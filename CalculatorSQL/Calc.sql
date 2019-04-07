-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2019 at 06:52 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Calc`
--

-- --------------------------------------------------------

--
-- Table structure for table `calc_res`
--

CREATE TABLE `calc_res` (
  `id` int(10) UNSIGNED NOT NULL,
  `res` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calc_res`
--

INSERT INTO `calc_res` (`id`, `res`) VALUES
(1, 'INF'),
(2, 'INF'),
(3, 'INF'),
(4, 'Cannon divided by zero'),
(5, 'Cannon divided by zero'),
(6, 'Cannot divide by zero'),
(7, '-4995'),
(8, 'Enter the correct number!'),
(9, '10'),
(10, '10'),
(11, '10'),
(12, '10'),
(13, '10'),
(14, 'Enter the correct number!'),
(15, '9'),
(16, '120'),
(17, '630'),
(18, '10'),
(19, '2'),
(20, '66'),
(21, 'Cannot divide by zero'),
(22, '10'),
(23, '1'),
(24, '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calc_res`
--
ALTER TABLE `calc_res`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calc_res`
--
ALTER TABLE `calc_res`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
