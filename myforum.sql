-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 22 2018 г., 20:33
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `name` varchar(21) NOT NULL,
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
(7, '123456789123456789123', 1),
(8, 'savgfas', 1),
(9, 'asdgbasdgh', 1),
(10, '123456789123456789123', 1);

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
  `close` tinyint(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `msg`, `author`, `theme_id`, `cat_id`, `views`, `close`, `date_create`) VALUES
(1, 'TEST', 'dbgjasgfkasbgfkLorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ab, inventore rem in ex ut expedita dolorem recusandae natus aliquam? Aspernatur unde placeat, tempora exercitationem maxime aperiam dolor nobis in iure facere minima, repellendus doloremque sed, atque perspiciatis a voluptates, optio aliquam aliquid repellat? Sequi delectus illum tenetur corrupti repellendus cupiditate! Aliquid quae, sequi quos, tempora magnam consequatur ab deserunt aperiam incidunt temporibus quisquam voluptate corporis sunt autem nihil, assumenda excepturi labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ab, inventore rem in ex ut expedita dolorem recusandae natus aliquam? Aspernatur unde placeat, tempora exercitationem maxime aperiam dolor nobis in iure facere minima, repellendus doloremque sed, atque perspiciatis a voluptates, optio aliquam aliquid repellat? Sequi delectus illum tenetur corrupti repellendus cupiditate! Aliquid quae, sequi quos, tempora magnam consequatur ab deserunt aperiam incidunt temporibus quisquam voluptate corporis sunt autem nihil, assumenda excepturi labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ab, inventore rem in ex ut expedita dolorem recusandae natus aliquam? Aspernatur unde placeat, tempora exercitationem maxime aperiam dolor nobis in iure facere minima, repellendus doloremque sed, atque perspiciatis a voluptates, optio aliquam aliquid repellat? Sequi delectus illum tenetur corrupti repellendus cupiditate! Aliquid quae, sequi quos, tempora magnam consequatur ab deserunt aperiam incidunt temporibus quisquam voluptate corporis sunt autem nihil, assumenda excepturi labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!', 1, 1, 2, 0, 0, 1519092754);

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
('66dacd80f193a77cc0db3ec507bf3409', '5524@gmail.com', 1519320307),
('9707305a84cd398d12047c4f6d144d0d', 'asdmas@gmail.com', 1519315609),
('8b59b8bc26bd6ecc3029e9342231da11', 'GWEGW2DSG2@SAF.AS', 1519176445),
('f2bfb01390f802f6aa58ac9d9a48e80f', 'sdasd@mail.ua', 1518661365);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sex` int(11) NOT NULL,
  `avatar` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `prof` text NOT NULL,
  `city` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `status`, `sex`, `avatar`, `name`, `prof`, `city`) VALUES
(1, 'Пустой статут пидораса', 0, '../img_user/1519318048_1.jpg', '', '', ''),
(11, '', 0, '../img_user/1519288380_11.jpg', '', '', ''),
(14, '', 0, '', '', '', '');

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
  `login` varchar(15) NOT NULL,
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
  `verificate` int(2) NOT NULL,
  `comand` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `ip`, `hash_sesion`, `access_level`, `coin_money`, `date`, `active`, `online`, `last_online`, `ban`, `verificate`, `comand`) VALUES
(1, 'ddps', 'ushakov2014@mail.ua', '243fbbdf2608107d6f58bf4773c9982d', '127.0.0.1', '', 1, 200, 1518443550, 1, 0, 1519319572, 0, 1, 1),
(11, 'ddps2121', 'us@mail.ua', '243fbbdf2608107d6f58bf4773c9982d', '127.0.0.1', '', 1, 0, 1519211074, 1, 0, 1519288460, 0, 0, 0),
(13, 'asjkdnasjkdaskj', 'asdmas@gmail.com', 'b71a52741c156d9b349e304789de5090', '127.0.0.1', '', 1, 0, 1519315696, 1, 0, 1519315744, 0, 0, 0),
(14, '123132132123132', '123456@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '127.0.0.1', '', 1, 0, 1519319599, 1, 0, 1519319856, 0, 0, 0),
(15, '5524', '5524@gmail.com', 'b71a52741c156d9b349e304789de5090', '127.0.0.1', '830dfd8e7d6f9472f542ca345ae4d73d', 1, 0, 1519320307, 0, 0, 0, 0, 0, 0);

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
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `Theme`
--
ALTER TABLE `Theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
