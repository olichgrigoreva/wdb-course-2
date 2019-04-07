-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 07 2019 г., 07:23
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calcul`
--

CREATE TABLE `calcul` (
  `id` int(11) NOT NULL,
  `num1` text NOT NULL,
  `operator` text NOT NULL,
  `num2` text NOT NULL,
  `result` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `calcul`
--

INSERT INTO `calcul` (`id`, `num1`, `operator`, `num2`, `result`, `created`) VALUES
(1, '2', '/', '2', '1', '2019-04-01 19:31:17'),
(2, '4', '+', '8', '12', '2019-04-01 19:35:10'),
(3, '8', '+', '8', '16', '2019-04-01 19:37:52'),
(4, '8', '*', '1', '8', '2019-04-01 19:38:17'),
(5, '8', '*', '1', '8', '2019-04-01 19:38:26'),
(6, '5', '*', '3', '15', '2019-04-01 19:39:06'),
(7, '5', '*', '3', '15', '2019-04-01 19:46:40'),
(8, '5', '*', '3', '15', '2019-04-01 19:47:03'),
(81, '18', '+', '5', '23', '2019-04-06 17:32:48'),
(88, '18', '/', '6', '3', '2019-04-06 17:41:25'),
(89, '6', '*', '5', '30', '2019-04-06 17:41:36'),
(90, '5', '-', '18', '-13', '2019-04-06 17:41:44'),
(91, '5', '+', '5', '10', '2019-04-06 17:41:51'),
(92, '44', '*', '44', '1936', '2019-04-06 17:42:10'),
(104, '18', '-', '5', '13', '2019-04-06 18:17:50'),
(105, '18', '-', '5', '13', '2019-04-06 18:18:28'),
(106, '18', '+', '588', '606', '2019-04-06 18:38:47'),
(107, '44', '+', '88', '132', '2019-04-06 18:38:58'),
(121, '55', '*', '44', '2420', '2019-04-07 06:17:26');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `calcul`
--
ALTER TABLE `calcul`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `calcul`
--
ALTER TABLE `calcul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
