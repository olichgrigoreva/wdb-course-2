-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 05 2019 г., 12:26
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
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `e_mail` varchar(1024) NOT NULL,
  `password` varchar(32) NOT NULL,
  `reg_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_name`, `e_mail`, `password`, `reg_data`) VALUES
(185, 'Ivan', 'ivan@mail.ru', 'e10adc3949ba59abbe56e057f20f883e', '2019-03-30 21:13:23'),
(186, 'Petr', 'petr@mail.ru', 'c33367701511b4f6020ec61ded352059', '2019-03-30 21:17:41'),
(187, 'Alex', 'alex@mail.ru', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2019-03-31 18:19:59'),
(188, 'Evgeniy', 'evgeniy@mail.ru', 'c33367701511b4f6020ec61ded352059', '2019-04-05 17:24:35'),
(190, 'Sergei', 'sergei@mail.ru', 'fcea920f7412b5da7be0cf42b8c93759', '2019-04-05 17:25:52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `e_mail` (`e_mail`),
  ADD KEY `password` (`password`),
  ADD KEY `reg_data` (`reg_data`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
