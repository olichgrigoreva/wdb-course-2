-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 07 2019 г., 21:03
-- Версия сервера: 5.5.53-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `calculator_5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calc_5`
--

CREATE TABLE IF NOT EXISTS `calc_5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `operation` varchar(20) NOT NULL,
  `operand_1` varchar(50) NOT NULL,
  `operand_2` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Дамп данных таблицы `calc_5`
--

INSERT INTO `calc_5` (`id`, `operation`, `operand_1`, `operand_2`, `result`, `date_create`) VALUES
(6, 'minus', '5', '4', '1', '2019-04-07 19:28:23'),
(7, 'minus', '4', '3', '1', '2019-04-07 19:28:27'),
(8, 'ymnogit', '3', '4', '12', '2019-04-07 19:28:44'),
(9, 'delit', '5', '3', '1.6666666666667', '2019-04-07 19:28:52'),
(10, 'plus', '1', '3', '4', '2019-04-07 19:36:08'),
(11, 'plus', '1', '3', '4', '2019-04-07 19:36:53'),
(12, 'plus', '1', '3', '4', '2019-04-07 19:36:56'),
(13, 'plus', '1', '3', '4', '2019-04-07 19:37:34'),
(14, 'plus', '1', '3', '4', '2019-04-07 19:37:52'),
(15, 'plus', '1', '3', '4', '2019-04-07 19:39:01'),
(16, 'plus', '1', '3', '4', '2019-04-07 19:39:56'),
(17, 'plus', '1', '3', '4', '2019-04-07 19:40:04'),
(18, 'plus', '1', '3', '4', '2019-04-07 19:40:25'),
(19, 'plus', '1', '3', '4', '2019-04-07 19:41:08'),
(20, 'plus', '1', '3', '4', '2019-04-07 19:44:25'),
(21, 'plus', '1', '3', '4', '2019-04-07 19:46:13'),
(22, 'plus', '1', '3', '4', '2019-04-07 19:47:51'),
(23, 'plus', '1', '3', '4', '2019-04-07 19:49:09'),
(24, 'plus', '1', '3', '4', '2019-04-07 19:49:19'),
(25, 'plus', '1', '3', '4', '2019-04-07 19:52:01'),
(26, 'plus', '1', '3', '4', '2019-04-07 19:52:08'),
(27, 'plus', '1', '1', '2', '2019-04-07 19:52:32'),
(28, 'plus', '1', '1', '2', '2019-04-07 19:52:37'),
(29, 'plus', '1', '1', '2', '2019-04-07 19:56:36'),
(30, 'plus', '1', '1', '2', '2019-04-07 19:57:24'),
(31, 'plus', '1', '1', '2', '2019-04-07 20:00:00'),
(32, 'plus', '1', '1', '2', '2019-04-07 20:00:41'),
(33, 'ymnogit', '12', '5', '60', '2019-04-07 20:01:13'),
(34, 'ymnogit', '12', '5', '60', '2019-04-07 20:01:17'),
(35, 'plus', '', '', '0', '2019-04-07 20:03:39'),
(36, 'plus', '3', '4', '7', '2019-04-07 20:03:44'),
(37, 'plus', '3', '4', '7', '2019-04-07 20:04:23'),
(38, 'plus', '3', '4', '7', '2019-04-07 20:06:18'),
(39, 'plus', '3', '4', '7', '2019-04-07 20:07:15'),
(40, 'plus', '3', '4', '7', '2019-04-07 20:08:31'),
(41, 'plus', '3', '4', '7', '2019-04-07 20:10:28'),
(42, 'plus', '3', '4', '7', '2019-04-07 20:10:55'),
(43, 'plus', '3', '4', '7', '2019-04-07 20:10:59'),
(44, 'plus', '3', '4', '7', '2019-04-07 20:11:20'),
(45, 'plus', '3', '4', '7', '2019-04-07 20:12:01'),
(46, 'plus', '3', '4', '7', '2019-04-07 20:12:26'),
(47, 'plus', '3', '4', '7', '2019-04-07 20:13:53'),
(48, 'plus', '3', '4', '7', '2019-04-07 20:14:22'),
(49, 'plus', '3', '4', '7', '2019-04-07 20:14:54'),
(50, 'plus', '1', '5', '6', '2019-04-07 20:15:00'),
(51, 'plus', '1', '5', '6', '2019-04-07 20:17:05'),
(52, 'plus', '1', '5', '6', '2019-04-07 20:17:32'),
(53, 'plus', '1', '5', '6', '2019-04-07 20:21:21'),
(54, 'plus', '1', '5', '6', '2019-04-07 20:22:11'),
(55, 'plus', '1', '5', '6', '2019-04-07 20:24:32'),
(56, 'plus', '1', '5', '6', '2019-04-07 20:31:57'),
(57, 'plus', '1', '5', '6', '2019-04-07 20:32:04'),
(58, 'plus', '1', '5', '6', '2019-04-07 20:32:21'),
(59, 'plus', '1', '2', '3', '2019-04-07 20:33:02'),
(60, 'plus', '1', '2', '3', '2019-04-07 20:33:09'),
(61, 'plus', '1', '2', '3', '2019-04-07 20:33:13'),
(62, 'plus', '', '', '0', '2019-04-07 20:53:03'),
(63, 'plus', '', '', '0', '2019-04-07 20:58:45'),
(64, 'plus', '', '', '0', '2019-04-07 20:59:51'),
(65, 'plus', '', '', '0', '2019-04-07 21:00:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;