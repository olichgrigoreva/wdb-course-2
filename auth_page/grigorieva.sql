-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 27 2019 г., 22:01
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
-- База данных: `grigorieva`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `titles` varchar(256) NOT NULL DEFAULT 'Без названия',
  `texts` varchar(256) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notes`
--

INSERT INTO `notes` (`id`, `users_id`, `titles`, `texts`, `created`) VALUES
(1, 1, 'test', 'hello, react', '2019-05-26 18:08:57'),
(2, 0, '', '', '2019-05-27 21:55:28'),
(3, 0, '', '', '2019-05-27 22:25:24');

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
(5, 'test_qwerty', '2be137bb6492a4bee7acdfb9e39c76eb', '2be137bb6492a4bee7acdfb9e39c76eb', 'test@qwerty', '2019-04-07 18:09:11'),
(6, 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', 'd2f2297d6e829cd3493aa7de4416a18f', 'eee@eee', '2019-04-14 08:42:30'),
(7, 'eeeq', '3008149fbea2d55f38eb358444dac5b4', '3008149fbea2d55f38eb358444dac5b4', 'eeeq@qq', '2019-04-14 09:04:35'),
(8, 'ww', 'ad57484016654da87125db86f4227ea3', 'ad57484016654da87125db86f4227ea3', 'www@www', '2019-04-14 09:39:47'),
(9, 'qwert', '48620cb27f01807982a62765dc7e2ade', '48620cb27f01807982a62765dc7e2ade', 'qwerty@test', '2019-04-14 09:43:53'),
(10, 'rrr', '44f437ced647ec3f40fa0841041871cd', '44f437ced647ec3f40fa0841041871cd', 'rrr@rr', '2019-04-14 12:33:03'),
(11, 'ivan', '271dcddbf1a236d8265dbc6ee03da3bb', '271dcddbf1a236d8265dbc6ee03da3bb', 'ivan@ivan', '2019-04-18 18:27:57'),
(12, 'chudo_rabotaet', '9552985f27d681528506ec22e84c2f16', '9552985f27d681528506ec22e84c2f16', 'chudo@rabotaet', '2019-04-18 18:29:37'),
(13, 'petr', '2f0714f5365318775c8f50d720a307dc', '2f0714f5365318775c8f50d720a307dc', 'petr@petr', '2019-04-18 18:46:13'),
(14, 'we', '4015e9ce43edfb0668ddaa973ebc7e87', '4015e9ce43edfb0668ddaa973ebc7e87', 'the@champion', '2019-04-18 19:10:05'),
(15, 'wer', '289dff07669d7a23de0ef88d2f7129e7', '289dff07669d7a23de0ef88d2f7129e7', 'df@efdg', '2019-04-18 20:33:00'),
(16, 'wert', '843f257a9b35eff7032b03bce281feb1', '843f257a9b35eff7032b03bce281feb1', 'wert@wert', '2019-04-18 20:48:50'),
(17, 'ghh', 'b4238aece7397c6651a5193c3baf4055', 'b4238aece7397c6651a5193c3baf4055', 'ghh@rte', '2019-04-18 20:49:50'),
(18, 'qwerty_qwrew', 'f518ca4823462855144bf7edf7c9dcee', 'f518ca4823462855144bf7edf7c9dcee', 'qwerty@qwrew', '2019-04-18 23:11:10'),
(19, 'fgnhgcn', 'db5e458f6745d91620e784162c39a064', 'db5e458f6745d91620e784162c39a064', 'fgnh@gcn', '2019-04-18 23:12:01'),
(20, 'test_test', 'f032f27ee18f9de67a3bb9c16eae57b3', 'f032f27ee18f9de67a3bb9c16eae57b3', 'test_test@test_test', '2019-04-27 07:48:46'),
(21, 'ivan_ivanov', '3f96af6bc6672d53d10eb4d1695bec3d', '3f96af6bc6672d53d10eb4d1695bec3d', 'ivan@ivanov', '2019-04-27 08:32:41'),
(22, 'egor', '805876a8c99c1d6b09323f480825a479', '805876a8c99c1d6b09323f480825a479', 'egor@egor', '2019-04-27 14:39:29'),
(23, 'egorka', '805876a8c99c1d6b09323f480825a479', '805876a8c99c1d6b09323f480825a479', 'egor@egor', '2019-04-27 14:40:43'),
(24, 'egork', 'f9550ad8be3fd2daed009d374af158f6', 'f9550ad8be3fd2daed009d374af158f6', 'egor@egor', '2019-04-27 14:41:46'),
(25, 'olga', 'e44d46e0bb9691cf448a9bb19391e8ab', 'e44d46e0bb9691cf448a9bb19391e8ab', 'olga@olga', '2019-04-28 11:16:37'),
(26, 'erte', 'e20392735b1375be4c548185507abef7', 'e20392735b1375be4c548185507abef7', 'erte@olga', '2019-04-28 11:22:48'),
(27, 'erteewrw', '40cc09d6ba319b21d74d83281581dd31', '40cc09d6ba319b21d74d83281581dd31', 'erte@erteewrw', '2019-04-28 11:23:30'),
(30, 'htyytj', 'efce70c6f03c2755e2ea481a3b65986b', 'efce70c6f03c2755e2ea481a3b65986b', 'htyytj@htyytj', '2019-04-28 13:03:19'),
(31, 'dsfgh', 'fb74a072fafb9686c4a711319f5b5969', 'fb74a072fafb9686c4a711319f5b5969', 'dsfgh@htyytj', '2019-04-28 17:13:26'),
(32, 'ghtjhyj', '4b769076d75b343165ad291b7bc862d0', '4b769076d75b343165ad291b7bc862d0', 'ghtjhyj@ghtjhyj', '2019-04-28 18:08:35'),
(33, 'jhmjuy', 'f4758468e830e3a16dbb9a28d9219ecf', 'f4758468e830e3a16dbb9a28d9219ecf', 'thykjuk@jhmjuy', '2019-04-28 18:40:38'),
(34, 'dvdg', '650ace881acae5618e29bc7ed0ccd6be', '650ace881acae5618e29bc7ed0ccd6be', 'dvdg@jhmjuy.ru', '2019-04-28 20:32:20'),
(35, 'hgjhkjuyk', 'e7e4e3e924d9c18b44eaf7902ecefb6b', 'e7e4e3e924d9c18b44eaf7902ecefb6b', 'hgjhkjuyk@jhmjuy.ru', '2019-04-28 20:34:52'),
(36, 'pavel', 'ce5b03d0d06bb4aa015ae291239231c1', 'ce5b03d0d06bb4aa015ae291239231c1', 'pavel@pavel.com', '2019-04-28 21:05:32'),
(37, 'pavel_p', 'ce5b03d0d06bb4aa015ae291239231c1', 'ce5b03d0d06bb4aa015ae291239231c1', 'pavel_p@pavel.com', '2019-04-28 21:06:54'),
(38, '', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', '', '2019-05-04 13:24:18'),
(40, 'Jane', '437a7413eac103dd1bd05603d86adcbf', '437a7413eac103dd1bd05603d86adcbf', 'Jane@Jane.ru', '2019-05-04 14:54:36'),
(46, 'Hamilton', '437a7413eac103dd1bd05603d86adcbf', '437a7413eac103dd1bd05603d86adcbf', 'Hamilton@Jane.ru', '2019-05-05 16:55:15'),
(47, 'Jane_Hamilton', '427ea51c27bd5a2e522a60dbb8e7ace0', '427ea51c27bd5a2e522a60dbb8e7ace0', 'jane@hamilton.com', '2019-05-05 18:58:24'),
(48, 'www_leningrad', 'a7671cd7fefc4d4b5516849f5815e2b9', 'a7671cd7fefc4d4b5516849f5815e2b9', 'www@leningrad.ru', '2019-05-06 05:21:12'),
(49, 'username', '14c5939ba24ea007b05e1413b0fcfe20', '14c5939ba24ea007b05e1413b0fcfe20', 'username@username.ru', '2019-05-07 18:15:48'),
(50, 'qwertyy', '8fdbc48beffcedc2816957b2c8a5fbc9', '8fdbc48beffcedc2816957b2c8a5fbc9', 'qwerty@qwerty.ru', '2019-05-07 20:39:39'),
(51, 'tap', 'd2b92f3e0af63db16a84517586269f82', 'd2b92f3e0af63db16a84517586269f82', 'tap@tap.ru', '2019-05-12 20:13:30'),
(52, 'tapa', 'd2b92f3e0af63db16a84517586269f82', 'd2b92f3e0af63db16a84517586269f82', 'tapa@tapa.ru', '2019-05-12 20:23:04'),
(53, 'qwfghnmk', 'd2b92f3e0af63db16a84517586269f82', 'd2b92f3e0af63db16a84517586269f82', 'qwfghnmkj@dfbv.com', '2019-05-11 14:29:42'),
(54, 'peter', '7a1d3735c59edcca9532ee0cf4c3aadc', '7a1d3735c59edcca9532ee0cf4c3aadc', 'peter@peter.com', '2019-05-11 16:43:24'),
(55, 'michael', '7a1d3735c59edcca9532ee0cf4c3aadc', '7a1d3735c59edcca9532ee0cf4c3aadc', 'mich@ael.net', '2019-05-11 17:11:09'),
(56, 'semen', '7a1d3735c59edcca9532ee0cf4c3aadc', '7a1d3735c59edcca9532ee0cf4c3aadc', 'semen@kotov.ru', '2019-05-11 21:31:26'),
(57, 'kot_matroskin', 'a6ded74fcf5eba27030b50baa614ba7b', 'a6ded74fcf5eba27030b50baa614ba7b', 'kot@matroskin.com', '2019-05-11 21:41:25'),
(58, 'peter_jackson', '7a1d3735c59edcca9532ee0cf4c3aadc', '7a1d3735c59edcca9532ee0cf4c3aadc', 'peter@jackson.ru', '2019-05-21 20:40:54'),
(59, 'misha', 'f6c5e629aa6c0114bab7414bbfbd57db', 'f6c5e629aa6c0114bab7414bbfbd57db', 'misha@misha.ru', '2019-05-26 16:02:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
