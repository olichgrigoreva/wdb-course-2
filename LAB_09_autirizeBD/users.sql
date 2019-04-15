-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 10 2019 г., 13:02
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `aleks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `login_2` (`login`,`email`),
  UNIQUE KEY `login_3` (`login`,`email`),
  UNIQUE KEY `login_4` (`login`,`email`),
  UNIQUE KEY `login_5` (`login`,`email`),
  UNIQUE KEY `login_6` (`login`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `dateCreated`) VALUES
(1, 'aleks', '202cb962ac59075b964b07152d234b70', 'stranger@mail.ru', '2019-04-09 11:04:24'),
(2, 'ivan', '202cb962ac59075b964b07152d234b70', 'ivan@mail.ru', '2019-04-09 11:06:35'),
(3, 'egor', '202cb962ac59075b964b07152d234b70', 'egor@mail.ru', '2019-04-09 11:08:36'),
(5, '1', 'c81e728d9d4c2f636f067f89cc14862c', 'stranger_aleks@mail.ru', '2019-04-09 17:38:15'),
(6, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'stranger_aleks333@mail.ru', '2019-04-09 19:12:35'),
(7, '3', 'e4da3b7fbbce2345d7772b0674a318d5', '3@mail.ru', '2019-04-09 19:13:34'),
(8, '4', 'a87ff679a2f3e71d9181a67b7542122c', '4@mail.ru', '2019-04-09 19:14:24'),
(9, '5', 'e4da3b7fbbce2345d7772b0674a318d5', '5@mail.ru', '2019-04-09 19:16:39'),
(10, '7', '8f14e45fceea167a5a36dedd4bea2543', '7@ru', '2019-04-09 19:17:12'),
(11, '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', '9@9', '2019-04-09 19:19:19'),
(12, '10', 'd3d9446802a44259755d38e6d163e820', '10@10', '2019-04-09 19:20:15'),
(13, '12', 'c20ad4d76fe97759aa27a0c99bff6710', '12@12', '2019-04-09 19:21:33'),
(14, '11', '6512bd43d9caa6e02c990b0a82652dca', '11@11', '2019-04-10 08:20:43'),
(15, '13', 'c81e728d9d4c2f636f067f89cc14862c', '1@1', '2019-04-10 08:55:29'),
(16, '14', 'aab3238922bcc25a6f606eb525ffdc56', '14@14', '2019-04-10 08:55:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
