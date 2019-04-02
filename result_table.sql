-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2019 at 01:55 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calc_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `result_table`
--

CREATE TABLE `result_table` (
  `id` int(11) NOT NULL,
  `Input_A` int(11) DEFAULT NULL,
  `Operation` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Input_B` int(11) DEFAULT NULL,
  `result` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `result_table`
--

INSERT INTO `result_table` (`id`, `Input_A`, `Operation`, `Input_B`, `result`) VALUES
(1, 1, '+', 1, '2'),
(2, 1, '+', 1, '2'),
(3, 3, '+', 3, '6'),
(4, 14, '/', 3, '4.6666666666667'),
(5, 4, '+', 4, '8'),
(6, 7, '+', 7, '14'),
(7, 7, '-', 7, '0'),
(8, 7, '*', 7, '49'),
(9, 7, '/', 7, '1'),
(10, 12, '/', 0, 'ÐÐ° Ð½ÑƒÐ»ÑŒ Ð´ÐµÐ»Ð¸Ñ‚ÑŒ Ð½ÐµÐ»ÑŒÐ·Ñ!'),
(11, 2, '/', 0, 'division error by zero');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result_table`
--
ALTER TABLE `result_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result_table`
--
ALTER TABLE `result_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
