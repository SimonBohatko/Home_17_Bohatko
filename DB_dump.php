-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Фев 19 2017 г., 17:35
-- Версия сервера: 5.6.35
-- Версия PHP: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
`id` int(100) NOT NULL,
`FirstName` varchar(30) NOT NULL,
`Surname` varchar(30) NOT NULL,
`Sex` varchar(30) NOT NULL,
`Age` int(30) NOT NULL,
`Birthday` date NOT NULL,
`FamilyStatus` varchar(50) NOT NULL,
`SocialStatus` varchar(50) NOT NULL,
`Address` varchar(100) NOT NULL,
`Activities` varchar(100) NOT NULL,
`Frequency` varchar(30) NOT NULL,
`Books` varchar(128) NOT NULL,
`Comments` text NOT NULL,
`Position` varchar(100) NOT NULL,
`Comment` text NOT NULL,
`Spam` varchar(100) NOT NULL,
`Complexity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `FirstName`, `Surname`, `Sex`, `Age`, `Birthday`, `FamilyStatus`, `SocialStatus`, `Address`, `Activities`, `Frequency`, `Books`, `Comments`, `Position`, `Comment`, `Spam`, `Complexity`) VALUES
(26, 'Simon', 'Bohatko', 'Мale', 17, '1999-12-17', 'Single', 'XXXX', 'XXXX', 'sleeping, friends, fishing', '2', '21-50', 'Hello from the other side', 'First position, Third position', 'Finally.', 'device, million', 'So-so');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;