-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 07 2019 г., 20:25
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registration_data`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usernames` varchar(255) NOT NULL,
  `passwords` varchar(256) NOT NULL,
  `confirm_pass` varchar(256) NOT NULL,
  `emails` varchar(256) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `usernames`, `passwords`, `confirm_pass`, `emails`, `created`) VALUES
(1, 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'qwerty@qwerty', '2019-04-07 17:09:37'),
(2, 'www', '4eae35f1b35977a00ebd8086c259d4c9', '4eae35f1b35977a00ebd8086c259d4c9', 'www@www', '2019-04-07 17:52:36'),
(3, 'qwerty_test', '48620cb27f01807982a62765dc7e2ade', '48620cb27f01807982a62765dc7e2ade', 'qwerty@test', '2019-04-07 18:01:50'),
(5, 'test_qwerty', '2be137bb6492a4bee7acdfb9e39c76eb', '2be137bb6492a4bee7acdfb9e39c76eb', 'test@qwerty', '2019-04-07 18:09:11');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usernames` (`usernames`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
