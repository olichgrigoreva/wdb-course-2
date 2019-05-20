-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 27 2019 г., 00:16
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `maslennikov`
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
  `LastLogin` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `login_2` (`login`,`email`),
  UNIQUE KEY `login_3` (`login`,`email`),
  UNIQUE KEY `login_4` (`login`,`email`),
  UNIQUE KEY `login_5` (`login`,`email`),
  UNIQUE KEY `login_6` (`login`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `dateCreated`, `LastLogin`) VALUES
(1, 'aleks', '202cb962ac59075b964b07152d234b70', 'stranger@mail.ru', '2019-04-09 11:04:24', '0000-00-00 00:00:00'),
(2, 'ivan', '202cb962ac59075b964b07152d234b70', 'ivan@mail.ru', '2019-04-09 11:06:35', '0000-00-00 00:00:00'),
(3, 'egor', 'MD5(egor)', 'egor@mail.ru', '2019-04-09 11:08:36', '0000-00-00 00:00:00'),
(5, '1', 'c81e728d9d4c2f636f067f89cc14862c', 'stranger_aleks@mail.ru', '2019-04-09 17:38:15', '0000-00-00 00:00:00'),
(6, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'stranger_aleks333@mail.ru', '2019-04-09 19:12:35', '0000-00-00 00:00:00'),
(7, '3', 'e4da3b7fbbce2345d7772b0674a318d5', '3@mail.ru', '2019-04-09 19:13:34', '0000-00-00 00:00:00'),
(8, '4', 'a87ff679a2f3e71d9181a67b7542122c', '4@mail.ru', '2019-04-09 19:14:24', '0000-00-00 00:00:00'),
(9, '5', 'e4da3b7fbbce2345d7772b0674a318d5', '5@mail.ru', '2019-04-09 19:16:39', '0000-00-00 00:00:00'),
(10, '7', '8f14e45fceea167a5a36dedd4bea2543', '7@ru', '2019-04-09 19:17:12', '0000-00-00 00:00:00'),
(11, '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', '9@9', '2019-04-09 19:19:19', '0000-00-00 00:00:00'),
(12, '10', 'd3d9446802a44259755d38e6d163e820', '10@10', '2019-04-09 19:20:15', '0000-00-00 00:00:00'),
(13, '12', 'c20ad4d76fe97759aa27a0c99bff6710', '12@12', '2019-04-09 19:21:33', '0000-00-00 00:00:00'),
(14, '11', '6512bd43d9caa6e02c990b0a82652dca', '11@11', '2019-04-10 08:20:43', '0000-00-00 00:00:00'),
(15, '13', 'c81e728d9d4c2f636f067f89cc14862c', '1@1', '2019-04-10 08:55:29', '0000-00-00 00:00:00'),
(16, '14', 'aab3238922bcc25a6f606eb525ffdc56', '14@14', '2019-04-10 08:55:48', '0000-00-00 00:00:00'),
(17, '99', 'ac627ab1ccbdb62ec96e702f07f6425b', '99@99', '2019-04-15 15:01:45', '0000-00-00 00:00:00'),
(18, '98', 'ed3d2c21991e3bef5e069713af9fa6ca', '98@98', '2019-04-15 15:06:11', '0000-00-00 00:00:00'),
(19, '97', 'e2ef524fbf3d9fe611d5a8e90fefdc9c', '97@97', '2019-04-15 15:07:19', '0000-00-00 00:00:00'),
(20, '96', '26657d5ff9020d2abefe558796b99584', '96@96', '2019-04-15 15:08:16', '0000-00-00 00:00:00'),
(21, '95', '812b4ba287f5ee0bc9d43bbf5bbe87fb', '95@95', '2019-04-15 15:11:30', '0000-00-00 00:00:00'),
(22, ' ', '7215ee9c7d9dc229d2921a40e899ec5f', '1@r', '2019-04-17 15:43:48', '0000-00-00 00:00:00'),
(25, '  %%%%%%', 'a932c249cc745dca159c8fb929f568e5', '2@s', '2019-04-17 16:19:18', '0000-00-00 00:00:00'),
(26, 'r" OR ""="', 'b59c67bf196a4758191e42f76670ceba', '2@s1', '2019-04-17 16:46:01', '0000-00-00 00:00:00'),
(27, 'r" OR " "="', 'b59c67bf196a4758191e42f76670ceba', '2@s124', '2019-04-17 16:46:57', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
