-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 02 2019 г., 16:53
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `aleks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calc`
--

CREATE TABLE IF NOT EXISTS `calc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value1` float NOT NULL,
  `value2` float NOT NULL,
  `operation` char(1) NOT NULL,
  `result` float NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `calc`
--

INSERT INTO `calc` (`id`, `value1`, `value2`, `operation`, `result`, `created`) VALUES
(1, 2, 3, '+', 5, '2019-04-02 10:08:03'),
(3, 3, 4, '+', 7, '2019-04-02 10:08:03'),
(4, 3, 5, '+', 8, '2019-04-02 10:08:03'),
(5, 1, 2, '+', 5, '2019-04-02 11:58:59'),
(8, 3, 4, '+', 7, '2019-04-02 12:24:41'),
(9, 3, 4, '+', 7, '2019-04-02 12:24:44'),
(10, 3, 4, '*', 12, '2019-04-02 12:24:48'),
(11, 1, 2, '+', 3, '2019-04-02 12:24:58'),
(12, 1, 2, '/', 0.5, '2019-04-02 12:25:07'),
(13, 2, 2, '*', 4, '2019-04-02 12:25:16'),
(14, 2, 2, '*', 4, '2019-04-02 12:25:58'),
(15, 1, 1, '+', 2, '2019-04-02 12:26:05'),
(16, 2, 2, '+', 4, '2019-04-02 12:26:10'),
(17, 3, 3, '+', 6, '2019-04-02 12:26:19'),
(18, 4, 4, '+', 8, '2019-04-02 12:26:27'),
(19, 5, 5, '+', 10, '2019-04-02 12:26:33'),
(20, 7, 7, '*', 49, '2019-04-02 12:26:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
