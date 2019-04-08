-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 08 2019 г., 09:49
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
-- Структура таблицы `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `first` varchar(256) NOT NULL,
  `operation` varchar(256) NOT NULL,
  `second` varchar(256) NOT NULL,
  `result` varchar(256) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `operations`
--

INSERT INTO `operations` (`id`, `first`, `operation`, `second`, `result`, `created`) VALUES
(1, '77', '*', '44', '3388', '2019-04-08 08:40:45'),
(2, '3434', '-', '2323', '1111', '2019-04-08 08:40:52'),
(3, '3434', '-', '2323', '1111', '2019-04-08 08:44:36'),
(4, '3434', '-', '2323', '1111', '2019-04-08 08:44:59'),
(5, '3434', '-', '2323', '1111', '2019-04-08 08:48:40'),
(6, '3434', '-', '2323', '1111', '2019-04-08 08:48:40'),
(7, '3434', '-', '2323', '1111', '2019-04-08 08:59:49'),
(8, '45', '*', '33', '1485', '2019-04-08 09:12:23'),
(9, '4535', '-', '3455', '1080', '2019-04-08 09:12:38'),
(10, '123', '-', '123', '0', '2019-04-08 09:48:27'),
(11, '43453', '*', '344', '14947832', '2019-04-08 09:48:36'),
(12, '34', '', '22', '', '2019-04-08 09:48:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
