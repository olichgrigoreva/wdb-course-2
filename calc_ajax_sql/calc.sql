-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 02 2019 г., 14:38
-- Версия сервера: 5.7.25-0ubuntu0.16.04.2
-- Версия PHP: 7.3.2-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register_form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calc`
--

CREATE TABLE `calc` (
  `id` int(11) NOT NULL,
  `operand_1` int(11) NOT NULL,
  `operand_2` int(11) NOT NULL,
  `operator_1` varchar(1) NOT NULL,
  `resultat` varchar(1024) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `calc`
--

INSERT INTO `calc` (`id`, `operand_1`, `operand_2`, `operator_1`, `resultat`, `data`) VALUES
(1, 23, 14, '+', '37', '2019-04-02 12:27:36'),
(2, 23, 0, '/', 'Ð’Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð²Ñ‚Ð¾Ñ€Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð½Ð¾Ðµ Ð¾Ñ‚ Ð½ÑƒÐ»Ñ', '2019-04-02 12:29:00'),
(3, 14, 56, '+', '70', '2019-04-02 12:33:36'),
(4, 23, 14, '+', '37', '2019-04-02 12:45:45'),
(5, 23, 14, '+', '37', '2019-04-02 12:45:49'),
(6, 23, 14, '+', '37', '2019-04-02 13:44:06'),
(7, 23, 14, '+', '37', '2019-04-02 13:44:07'),
(8, 23, 14, '-', '9', '2019-04-02 13:44:11'),
(9, 1, 1, '+', '2', '2019-04-02 14:11:59'),
(10, 2, 2, '+', '4', '2019-04-02 14:12:10'),
(11, 3, 3, '+', '6', '2019-04-02 14:12:16'),
(12, 4, 4, '+', '8', '2019-04-02 14:12:33'),
(13, 5, 5, '+', '10', '2019-04-02 14:30:07'),
(14, 6, 6, '*', '36', '2019-04-02 14:30:14'),
(15, 7, 7, '/', '1', '2019-04-02 14:32:23'),
(16, 8, 0, '/', 'Ð’Ð²ÐµÐ´Ð¸Ñ‚Ðµ Ð²Ñ‚Ð¾Ñ€Ð¾Ðµ Ð·Ð½Ð°Ñ‡ÐµÐ½Ð¸Ðµ Ð¾Ñ‚Ð»Ð¸Ñ‡Ð½Ð¾Ðµ Ð¾Ñ‚ Ð½ÑƒÐ»Ñ', '2019-04-02 14:35:03'),
(17, 9, 10, '*', '90', '2019-04-02 14:35:23');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `calc`
--
ALTER TABLE `calc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `calc`
--
ALTER TABLE `calc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
