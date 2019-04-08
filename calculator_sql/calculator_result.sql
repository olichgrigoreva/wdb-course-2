-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 08 2019 г., 06:34
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `calculator_select`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calculator_result`
--

CREATE TABLE `calculator_result` (
  `id` int(11) NOT NULL,
  `first_number` int(11) DEFAULT NULL,
  `operation` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `second_number` int(11) DEFAULT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `calculator_result`
--

INSERT INTO `calculator_result` (`id`, `first_number`, `operation`, `second_number`, `result`, `created`) VALUES
(1, 12, '+', 12, '', '2019-04-08 06:02:57'),
(2, 12, '+', 12, 'false', '2019-04-08 06:04:52'),
(3, 12, '+', 12, '24', '2019-04-08 06:07:38'),
(4, 4, '+', 4, '8', '2019-04-08 06:08:03'),
(5, 12, '+', 12, '24', '2019-04-08 06:18:36'),
(6, 12, '+', 12, '24', '2019-04-08 06:21:42'),
(7, 12, '+', 4, '16', '2019-04-08 06:24:07'),
(8, 12, '*', 4, '48', '2019-04-08 06:25:19');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `calculator_result`
--
ALTER TABLE `calculator_result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `calculator_result`
--
ALTER TABLE `calculator_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
