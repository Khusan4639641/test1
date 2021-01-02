-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 02 2021 г., 22:33
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) NOT NULL,
  `head` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `edit_date` date DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `done` varchar(200) NOT NULL DEFAULT 'no',
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `head`, `text`, `edit_date`, `reg_date`, `done`, `user_email`) VALUES
(1, 'Header123', 'text13', '2021-01-15', '2021-01-01 14:29:26', 'no', 'email2@gmail.com'),
(2, 'Head243', 'text234', '2021-01-02', '2021-01-01 14:29:26', 'yes', 'email4@gmail.com'),
(3, 'Head3', 'Text1', NULL, '2021-01-01 14:29:26', 'no', 'email.com'),
(5, 'Header', 'sdsds', NULL, '2021-01-01 22:33:36', 'no', 'email@gmail.com'),
(6, 'Header', 'Text', NULL, '2021-01-02 18:30:30', 'no', 'email@gmail.com'),
(7, 'Header new', 'Text', NULL, '2021-01-02 18:32:05', 'no', 'email@gmail.com'),
(8, 'Header new', 'Texr', NULL, '2021-01-02 18:35:31', 'no', 'email5@gmail.com'),
(9, 'Header new', 'Texr', NULL, '2021-01-02 18:47:22', 'no', 'email5@gmail.com'),
(10, 'Header new 1', 'RRRR', NULL, '2021-01-02 18:47:38', 'no', 'email@gmail.com'),
(11, 'Header', 'ree', NULL, '2021-01-02 19:01:49', 'yes', 'email@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`) VALUES
(1, 'admin', '123', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
