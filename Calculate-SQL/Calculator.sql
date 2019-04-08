-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 08 2019 г., 15:19
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Calculator`
--

CREATE TABLE `Calculator` (
  `id` int(11) NOT NULL,
  `operand_1` varchar(256) DEFAULT NULL,
  `operation` varchar(256) DEFAULT NULL,
  `operand_2` varchar(256) DEFAULT NULL,
  `result` varchar(256) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Calculator`
--

INSERT INTO `Calculator` (`id`, `operand_1`, `operation`, `operand_2`, `result`, `created`) VALUES
(1, '', '', '', 'Fill in all the fields', '2019-04-08 15:17:35'),
(2, '1', '+', '2', '3', '2019-04-08 15:18:02'),
(3, '13', '/', '0', 'Invalid operation with zero', '2019-04-08 15:18:10'),
(4, '25', '*', '2', '50', '2019-04-08 15:18:17'),
(5, '25', '*', '2', '50', '2019-04-08 15:18:18'),
(6, '41', '-', '132', '-91', '2019-04-08 15:18:26'),
(7, '25', '+', '5285', '5310', '2019-04-08 15:18:31'),
(8, '22353', '/', '2', '11176.5', '2019-04-08 15:18:39'),
(9, '22353', '/', '2', '11176.5', '2019-04-08 15:18:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Calculator`
--
ALTER TABLE `Calculator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Calculator`
--
ALTER TABLE `Calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
