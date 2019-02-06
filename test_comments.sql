-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Фев 06 2019 г., 18:42
-- Версия сервера: 10.1.37-MariaDB-cll-lve
-- Версия PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- База данных: `test_comments`
--

-- --------------------------------------------------------

--
-- Структура таблицы `commenti`
--

CREATE TABLE `commenti` (
  `id` int(60) NOT NULL,
  `imya` text NOT NULL,
  `comm` text NOT NULL,
  `vremya` text NOT NULL,
  `chislo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `commenti`
--

INSERT INTO `commenti` (`id`, `imya`, `comm`, `vremya`, `chislo`) VALUES
(3, 'Денис', 'Ты выполнил тестовое задание, так держать !', '18:41', '06.02.2019'),
(2, 'Евгений', 'Проверка комментариев. Да, все действительно не плохо работает.', '18:41', '06.02.2019'),
(1, 'Вячеслав', 'Hello world :)', '18:40', '06.02.2019');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `commenti`
--
ALTER TABLE `commenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `commenti`
--
ALTER TABLE `commenti`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
