-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2019 г., 18:22
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `future_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chat`
--

CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chat`
--

INSERT INTO `chat` (`id`, `name`, `text`, `date`) VALUES
(5, 'qe2eq', 'e2qeq2e', '0000-00-00 00:00:00'),
(6, '1231', '3213', '0000-00-00 00:00:00'),
(7, 'wdqd', 'dwqdqw', '2019-06-19 16:34:03'),
(8, 'dwq', 'dwqd', '2019-06-19 16:34:08'),
(9, 'dwq', 'dwqd', '2019-06-19 16:37:00'),
(10, 'dwq', 'dwqd', '2019-06-19 16:44:25'),
(11, 'dwq', 'dwqd', '2019-06-19 16:44:49'),
(12, 'dwq', 'dwqd', '2019-06-19 16:47:34'),
(13, 'dwq', 'dwqd', '2019-06-19 16:48:18'),
(14, 'dwq', 'dwqd', '2019-06-19 16:50:29'),
(15, '1232', 'wdqdq', '2019-06-19 16:50:38'),
(16, '1232', 'wdqdq', '2019-06-19 16:59:23'),
(17, '1232', 'wdqdq', '2019-06-19 17:00:12'),
(18, '1232', 'wdqdq', '2019-06-19 17:00:26'),
(19, '1232', 'wdqdq', '2019-06-19 17:18:48'),
(20, '1232', 'wdqdq', '2019-06-19 17:23:55'),
(21, '1232', 'wdqdq', '2019-06-19 17:28:44'),
(22, '1232', 'wdqdq', '2019-06-19 17:29:24'),
(23, '1232', 'wdqdq', '2019-06-19 17:30:28'),
(24, '1232', 'wdqdq', '2019-06-19 17:56:15'),
(25, '1232', 'wdqdq', '2019-06-19 17:56:29'),
(26, '1232', 'wdqdq', '2019-06-19 17:56:30'),
(27, '1232', 'wdqdq', '2019-06-19 17:57:13'),
(28, '1232', 'wdqdq', '2019-06-19 17:59:52'),
(29, '1232', 'wdqdq', '2019-06-19 18:02:12'),
(30, '1232', 'wdqdq', '2019-06-19 18:02:15'),
(31, '1232', 'wdqdq', '2019-06-19 18:02:29'),
(32, '1232', 'wdqdq', '2019-06-19 18:02:45'),
(33, '1232', 'wdqdq', '2019-06-19 18:04:31'),
(34, '1232', 'wdqdq', '2019-06-19 18:05:15'),
(35, '1232', 'wdqdq', '2019-06-19 18:06:05'),
(36, '1232', 'wdqdq', '2019-06-19 18:11:06'),
(37, '1232', 'wdqdq', '2019-06-19 18:12:55'),
(38, '1232', 'wdqdq', '2019-06-19 18:13:20'),
(39, '1232', 'wdqdq', '2019-06-19 18:14:25'),
(40, '1232', 'wdqdq', '2019-06-19 18:16:03'),
(41, '1232', 'wdqdq', '2019-06-19 18:16:08'),
(42, '1232', 'wdqdq', '2019-06-19 18:17:23'),
(43, '1232', 'wdqdq', '2019-06-19 18:17:23'),
(44, '1232', 'wdqdq', '2019-06-19 18:18:54'),
(45, '1232', 'wdqdq', '2019-06-19 18:19:40'),
(46, '1232', 'wdqdq', '2019-06-19 18:20:25');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
