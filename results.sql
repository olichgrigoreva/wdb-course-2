-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 07 2019 г., 10:53
-- Версия сервера: 5.7.25-0ubuntu0.16.04.2
-- Версия PHP: 7.3.2-3+ubuntu16.04.1+deb.sury.org+1

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
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `number1` int(11) NOT NULL,
  `action` varchar(256) NOT NULL,
  `number2` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `number1`, `action`, `number2`, `result`, `created`) VALUES
(1, 5, '*', 5, 25, '2019-04-07 15:00:55'),
(2, 465, '-', 65, 400, '2019-04-07 15:07:55'),
(3, 569, '-', 45, 524, '2019-04-07 15:50:01'),
(4, 87, '*', 89, 7743, '2019-04-07 15:50:28'),
(5, 984201, '-', 15643, 968558, '2019-04-07 15:50:49'),
(6, 485, '/', 5, 97, '2019-04-07 15:50:57'),
(7, 456, '+', 458, 914, '2019-04-07 15:51:13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
