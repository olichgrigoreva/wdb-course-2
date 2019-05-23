-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 23 2019 г., 06:14
-- Версия сервера: 5.7.26-0ubuntu0.18.04.1
-- Версия PHP: 7.3.2-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kandrakhinusers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `kandrakhinusers`
--

CREATE TABLE `kandrakhinusers` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` text NOT NULL,
  `user_email` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `kandrakhinusers`
--

INSERT INTO `kandrakhinusers` (`user_id`, `user_login`, `user_password`, `user_email`) VALUES
(1, 'vasya', '202cb962ac59075b964b07152d234b70', '0'),
(4, 'vasy', '123', '123@mail.ru'),
(5, 'vasy', '123', '123@mail.ru'),
(6, 'vasy', 'md5(123)', '123@mail.ru'),
(7, 'vanya', '202cb962ac59075b964b07152d234b70', '123@mail.ru'),
(8, 'vasy', '202cb962ac59075b964b07152d234b70', '123@mail.ru'),
(9, 'vasy', '202cb962ac59075b964b07152d234b70', '123@mail.ru'),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(11, 'vasy', '202cb962ac59075b964b07152d234b70', '123@mail.ru'),
(12, 'vasy', '202cb962ac59075b964b07152d234b70', '123@mail.ru'),
(13, 'vasy', '202cb962ac59075b964b07152d234b70', '123@mail.ru'),
(20, 'pppp', '3r44325r34', '34325345'),
(21, 'aaaa', '202cb962ac59075b964b07152d234b70', '234@mail.ru'),
(22, 'bbbb', '202cb962ac59075b964b07152d234b70', '345@mail.ru'),
(23, 'bbbb', '202cb962ac59075b964b07152d234b70', '654@mail.ru'),
(24, 'vvvv', '202cb962ac59075b964b07152d234b70', '678@mail.ru'),
(25, 'nnnn', '202cb962ac59075b964b07152d234b70', '555@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `kandrakhinusers`
--
ALTER TABLE `kandrakhinusers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `kandrakhinusers`
--
ALTER TABLE `kandrakhinusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
