-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2018 г., 06:41
-- Версия сервера: 5.6.38
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myforum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `id_theme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `id_theme`) VALUES
(1, 'Брут', 1),
(2, 'Чекер', 1),
(3, 'Фейк', 1),
(4, 'Фвыф', 1),
(5, 'фув', 1),
(6, 'c#', 1),
(7, 'saflhskjdghqeh', 1),
(8, 'savgfas', 1),
(9, 'asdgbasdgh', 1),
(10, 'bsdgasg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `light`
--

CREATE TABLE `light` (
  `id` int(11) NOT NULL,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `msg` text NOT NULL,
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `unread` tinyint(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `notyfi`
--

CREATE TABLE `notyfi` (
  `from_user` int(11) NOT NULL,
  `to_user` int(11) NOT NULL,
  `read_notyfi` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `msg` text NOT NULL,
  `author` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `close` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `reg_tmp`
--

CREATE TABLE `reg_tmp` (
  `hash` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `date` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reg_tmp`
--

INSERT INTO `reg_tmp` (`hash`, `user_email`, `date`) VALUES
('f2bfb01390f802f6aa58ac9d9a48e80f', 'sdasd@mail.ua', 1518661365),
('5a1b8e94551a27022c98b3063bdb84c0', 'us@mail.ua', 1518659332);

-- --------------------------------------------------------

--
-- Структура таблицы `Theme`
--

CREATE TABLE `Theme` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Theme`
--

INSERT INTO `Theme` (`id`, `name`) VALUES
(1, 'Софт'),
(2, 'Уязвимости');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `ip` varchar(32) NOT NULL,
  `hash_sesion` varchar(32) NOT NULL,
  `access_level` int(32) NOT NULL,
  `coin_money` int(10) NOT NULL,
  `date` int(15) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `last_online` int(11) NOT NULL,
  `ban` tinyint(1) NOT NULL,
  `ava` text NOT NULL,
  `verificate` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `ip`, `hash_sesion`, `access_level`, `coin_money`, `date`, `active`, `online`, `last_online`, `ban`, `ava`, `verificate`) VALUES
(1, 'ddps', 'ushakov2014@mail.ua', '243fbbdf2608107d6f58bf4773c9982d', '127.0.0.1', '01bd558fd6f99dab6acd440e8d1b0c4c', 1, 0, 1518443550, 1, 0, 1518925257, 0, '', 1),
(2, 'id1209872', 'usha@mail.ua', '74be16979710d4c4e7c6647856088456', '127.0.0.1', 'bd8ba201073b0479c77edfb538b4cf42', 1, 0, 1518486588, 1, 0, 0, 0, '', 0),
(3, 'lolo', 'lolo@gmail.com', '74be16979710d4c4e7c6647856088456', '127.0.0.1', 'f4e70d8ea44d0300d72dae431b280bbb', 1, 0, 1518497499, 1, 0, 0, 0, '', 0),
(4, 'sfa', 'us@mail.ua', '74be16979710d4c4e7c6647856088456', '127.0.0.1', '581b7e6309a6cb64669b977b713527a2', 1, 0, 1518659332, 0, 0, 0, 0, '', 0),
(5, 'ddpsss', 'sdasd@mail.ua', 'b99937535a8405c947a37947cb775575', '127.0.0.1', '77e0f6bded66721ff9826f4860e4b165', 1, 0, 1518661365, 1, 0, 0, 0, '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `light`
--
ALTER TABLE `light`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reg_tmp`
--
ALTER TABLE `reg_tmp`
  ADD UNIQUE KEY `user` (`user_email`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Индексы таблицы `Theme`
--
ALTER TABLE `Theme`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `light`
--
ALTER TABLE `light`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Theme`
--
ALTER TABLE `Theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
