-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 16 2019 г., 19:52
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `List_users`
--

CREATE TABLE `List_users` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `List_users`
--

INSERT INTO `List_users` (`id`, `Name`, `Password`, `Email`, `Create_date`) VALUES
(1, 'Иван', '202cb962ac59075b964b07152d234b70', '', '2019-04-08 11:40:45'),
(2, 'Петр', '202cb962ac59075b964b07152d234b70', '', '2019-04-08 11:40:45'),
(3, 'Ivan', '1', '1@mail.ru', '2019-04-10 08:59:42'),
(4, 'Petr', 'c81e728d9d4c2f636f067f89cc14862c', '2@mail.ru', '2019-04-10 09:01:02'),
(6, 'Sergey', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3@mail.ru', '2019-04-10 09:06:53'),
(8, 'Fedor', '1679091c5a880faf6fb5e6087eb1b2dc', '6@mail.ru', '2019-04-13 17:43:51'),
(9, 'Aleksey', 'e4da3b7fbbce2345d7772b0674a318d5', '5@mail.ru', '2019-04-13 18:03:58'),
(11, 'Aleksey1', 'e4da3b7fbbce2345d7772b0674a318d5', '5mail.ru', '2019-04-13 18:55:04'),
(12, 'Lida', 'd3d9446802a44259755d38e6d163e820', '10@mail.ru', '2019-04-15 20:41:43'),
(14, 'Lida1', '6512bd43d9caa6e02c990b0a82652dca', '11@mail.ru', '2019-04-15 20:45:07'),
(16, 'Lida2', 'ec8956637a99787bd197eacd77acce5e', '102@mail.ru', '2019-04-15 20:47:14'),
(17, 'Aleksey2', 'c4ca4238a0b923820dcc509a6f75849b', '1@mail.ru', '2019-04-16 18:17:43'),
(18, 'Aleksey4', 'e4da3b7fbbce2345d7772b0674a318d5', '10@mail.ru', '2019-04-16 19:45:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `List_users`
--
ALTER TABLE `List_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `List_users`
--
ALTER TABLE `List_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
