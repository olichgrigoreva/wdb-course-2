-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 17 2019 г., 08:56
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Calc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Calculator`
--

CREATE TABLE `Calculator` (
  `id` int(11) NOT NULL,
  `first_num` decimal(64,0) DEFAULT NULL,
  `operation` varchar(24) NOT NULL,
  `second_num` decimal(64,0) DEFAULT NULL,
  `result` decimal(64,0) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Calculator`
--

INSERT INTO `Calculator` (`id`, `first_num`, `operation`, `second_num`, `result`, `date`) VALUES
(1, '3', '+', '4', '7', '2019-04-08 20:07:45'),
(2, '2', 'divide', '2', '1', '2019-04-08 20:15:54'),
(3, '3', 'minus', '1', '2', '2019-04-08 20:16:01'),
(4, '12', 'divide', '3', '4', '2019-04-08 20:17:28'),
(5, '1', 'plus', '4', '5', '2019-04-08 20:17:36'),
(6, '4', 'multiply', '6', '24', '2019-04-08 20:17:46'),
(7, '50', 'minus', '25', '25', '2019-04-08 20:17:54'),
(8, '65', 'minus', '12', '53', '2019-04-09 15:16:29'),
(9, '4', 'multiply', '6', '24', '2019-04-09 17:15:14'),
(10, '100', 'divide', '12', '8', '2019-04-09 17:15:53'),
(11, '4', 'multiply', '6', '24', '2019-04-09 17:22:46'),
(12, '4', 'multiply', '6', '24', '2019-04-09 17:25:48'),
(13, '4', 'multiply', '6', '24', '2019-04-09 17:26:39'),
(14, '10', 'multiply', '12', '120', '2019-04-09 18:38:04'),
(15, '10', 'multiply', '12', '120', '2019-04-09 19:31:45'),
(16, '666', 'plus', '777', '1443', '2019-04-09 19:34:03'),
(17, '666', 'plus', '777', '1443', '2019-04-10 19:32:05'),
(18, '666', 'plus', '777', '1443', '2019-04-10 19:32:06'),
(19, '666', 'plus', '777', '1443', '2019-04-10 19:32:06');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
