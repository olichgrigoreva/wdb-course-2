-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 05 2019 г., 13:28
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `CalculatorRecords`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Records`
--

CREATE TABLE `Records` (
  `id` int(11) NOT NULL,
  `number1` float NOT NULL,
  `operation` varchar(1) NOT NULL,
  `number2` float NOT NULL,
  `result` float NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Records`
--

INSERT INTO `Records` (`id`, `number1`, `operation`, `number2`, `result`, `createDate`) VALUES
(1, 1, '+', 2, 3, '2019-04-05 11:37:13'),
(2, 1, '+', 2, 3, '2019-04-05 11:37:20'),
(3, 1, '+', 4, 5, '2019-04-05 11:37:26'),
(4, 1, '/', 4, 0.25, '2019-04-05 11:38:19'),
(5, 5, '/', 36, 0.138889, '2019-04-05 11:40:20'),
(6, 5, '/', 36, 0.138889, '2019-04-05 11:56:42'),
(17, 5, '/', 36, 0.138889, '2019-04-05 12:23:06'),
(18, 5, '*', 10, 50, '2019-04-05 13:12:12'),
(19, 5, '-', 10, -5, '2019-04-05 13:14:24'),
(20, 42, '-', 33, 9, '2019-04-05 13:17:11'),
(21, 34, '/', 17, 2, '2019-04-05 13:18:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Records`
--
ALTER TABLE `Records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Records`
--
ALTER TABLE `Records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
