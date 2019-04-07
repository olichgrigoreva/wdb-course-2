-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2019 at 07:55 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.3.2-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `timestamp`) VALUES
(3, 'qwert', 'qwert@', '202cb962ac59075b964b07152d234b70', '2019-04-03 19:58:23'),
(4, 'asd', 'asd', '202cb962ac59075b964b07152d234b70', '2019-04-03 21:26:45'),
(5, '1324', '@', '202cb962ac59075b964b07152d234b70', '2019-04-03 21:31:11'),
(6, '13243', '@', '202cb962ac59075b964b07152d234b70', '2019-04-03 21:31:23'),
(7, '31231', '@', 'caf1a3dfb505ffed0d024130f58c5cfa', '2019-04-07 00:05:53'),
(8, '213', '@', 'caf1a3dfb505ffed0d024130f58c5cfa', '2019-04-07 00:06:44'),
(9, '321', '@', '202cb962ac59075b964b07152d234b70', '2019-04-07 00:09:02'),
(10, '123', '@', '202cb962ac59075b964b07152d234b70', '2019-04-07 00:11:17'),
(11, '431', '@', '202cb962ac59075b964b07152d234b70', '2019-04-07 00:12:19'),
(12, '1332', '@', '202cb962ac59075b964b07152d234b70', '2019-04-07 00:13:47'),
(13, '132', '@', '202cb962ac59075b964b07152d234b70', '2019-04-07 00:14:30'),
(14, 'first', 'first@mail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', '2019-04-07 00:43:22'),
(15, 'second', 'second@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2019-04-07 00:43:53'),
(16, 'third', 'rhird@mail.com', '202cb962ac59075b964b07152d234b70', '2019-04-07 00:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
