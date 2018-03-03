-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 03 2018 г., 18:01
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
-- Структура таблицы `answ`
--

CREATE TABLE `answ` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `msg` text NOT NULL,
  `date` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `answ`
--

INSERT INTO `answ` (`id`, `post_id`, `author`, `msg`, `date`) VALUES
(1, 1, 1, '[b]Всем привет!!!![/b]', 0),
(2, 1, 1, 'Приавылдоа[u]дауны[/u]', 0),
(3, 1, 1, 'ddps, лтоывджлафыра\r\n', 0),
(4, 1, 1, '<br> hsakhfa |<br>\r\n', 0),
(5, 1, 1, '<br /> dshgidsb jfbsd sdfhvnsdkj vsdjbv <br />jhg sujah fsdjgfuisagydfhcshjgcfyhasjdgchasudgfhbcuiasdgfcusdvc<br>', 0),
(6, 1, 1, 'nsdvui hisduvi cvhx uiv xcnhjsd c,mjdfbfkcjweyhjfgbskjdhjsdhbfv<br> dkfjhui sdjkfgsdvjcvhjsdgfvjcasd gufhsdkjbgfuasjhsduihfbhusdxgh\r\n', 0),
(7, 1, 1, '[quote = \"vasya\"] hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim[/quote]', 0),
(8, 1, 1, 'mkdhjsgoln dfs dbfgfsdlgjnosdlgn fdk xcvn jdffvkjdf fsdfsdklbg vhjsdnf kj sd fsdilhgsdkgf j skdfhsdkf jsdhj fmolsd fsdhsdlkfnhjsdf  sdjsa gsdkf hjsd sdjsdglagn ksgb fghdjga hgisngffsjf sushs dkniusdfkdsh wegjsdk ', 0),
(9, 1, 1, 'АЫВФАЫФ', 1519980153),
(10, 1, 1, 'ьаврощиш\r\n', 1519981246),
(11, 2, 1, 'jbsdvuikj sdih vs', 1519981783),
(12, 2, 1, 'kjdhsvln ikgh jdfkgb dfh bdficb df j', 1519981972),
(13, 1, 1, 'nbaskjv isdfvui ', 1519981982);

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
(10, '123456789123456789123', 1),
(11, 'Сайт', 2);

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
  `date_create` int(11) NOT NULL,
  `last_update` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `msg`, `author`, `theme_id`, `cat_id`, `views`, `close`, `date_create`, `last_update`) VALUES
(1, 'Иди на хуй Костя', '[i]dbgjasgfkasbgfkLorem ipsum dolor sit amet, consectetur[/i] ri labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ab, inventore rem in ex ut expedita dolorem recusandae natus aliquam? Aspernatur unde placeat, tempora exercitationem maxime aperiam dolor nobis in iure facere minima, repellendus doloremque sed, atque perspiciatis a voluptates, optio aliquam aliquid repellat? Sequi delectus illum tenetur corrupti repellendus cupiditate! Aliquid quae, sequi quos, tempora magnam consequatur ab deserunt aperiam incidunt temporibus quisquam voluptate corporis sunt autem nihil, assumenda excepturi labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ab, inventore rem in ex ut expedita dolorem recusandae natus aliquam? Aspernatur unde placeat, tempora exercitationem maxime aperiam dolor nobis in iure facere minima, repellendus doloremque sed, atque perspiciatis a voluptates, optio aliquam aliquid repellat? Sequi delectus illum tenetur corrupti repellendus cupiditate! Aliquid quae, sequi quos, tempora magnam consequatur ab deserunt aperiam incidunt temporibus quisquam voluptate corporis sunt autem nihil, assumenda excepturi labore. Placeat qui facilis et vitae voluptate commodi tenetur nisi libero cupiditate expedita hic labore ratione ipsa numquam natus nostrum, sit ad. Earum culpa impedit blanditiis, nemo voluptatem enim dicta, dolores qui a quaerat quia debitis voluptatum labore odit, ut! Odit iusto ducimus impedit! Tenetur officiis, culpa at reiciendis deserunt nemo maiores, alias tempora quidem, mollitia impedit fuga eum odio cum vero magni ab saepe recusandae incidunt. Assumenda, illum, aut. Odit corrupti nisi perferendis, sapiente eveniet illo inventore. Qui omnis odit veniam asperiores eaque ipsam voluptatum, vitae totam, quam expedita veritatis aspernatur ad sed eveniet, corporis aperiam rerum, dolorem pariatur natus officiis maxime. Optio voluptas vero, aliquam repellendus atque incidunt excepturi amet debitis, aperiam ullam maxime cupiditate suscipit. Enim culpa quo minus libero! Officia cumque sequi est, optio eum!', 1, 1, 2, 268, 0, 1519092754, 1519981982),
(2, 'Пидорасы все сюда!!!', 'ьтывиропмичсл оьт оичст валопшависомичсмрт шлваомтлоывр мтывл мршлывоч м ывшло млоывломывло милоывт пмлывб оптвалоспи ровачс варомывлдпр вы.п ваочлиоварлмиаловт мидваилдва тилвт ис мьмоваоп  аловоп увалорп алп дват лвап ватп алвпт валосвослми в', 11, 2, 11, 5, 0, 1519981743, 1519981972);

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
  `city` varchar(21) NOT NULL,
  `vk` text NOT NULL,
  `telegram` text NOT NULL,
  `steam` text NOT NULL,
  `skype` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `status`, `sex`, `avatar`, `name`, `prof`, `city`, `vk`, `telegram`, `steam`, `skype`, `twitter`) VALUES
(1, 'sadasddsgasdsafasgsdgsdgb', 1, '../img_user/1519660339_1.jpg', 'Максим', 'Поиск уязвимостей', 'ЛНР', 'its_my_s', 'its_my_s', 'GgGhost', 'm2000maks', 'ddps'),
(11, '', 0, '../img_user/1519288380_11.jpg', '', '', '', '', '', '', '', '0');

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
  `verificate` int(2) NOT NULL,
  `comand` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `ip`, `hash_sesion`, `access_level`, `coin_money`, `date`, `active`, `online`, `last_online`, `ban`, `verificate`, `comand`) VALUES
(1, 'ddps', 'ushakov2014@mail.ua', '243fbbdf2608107d6f58bf4773c9982d', '127.0.0.1', '01bd558fd6f99dab6acd440e8d1b0c4c', 1, 200, 1518443550, 1, 0, 1520089280, 0, 1, 1),
(11, 'ddps2121', 'us@mail.ua', '243fbbdf2608107d6f58bf4773c9982d', '127.0.0.1', '', 1, 0, 1519211074, 1, 0, 1519288460, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answ`
--
ALTER TABLE `answ`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `answ`
--
ALTER TABLE `answ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `light`
--
ALTER TABLE `light`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Theme`
--
ALTER TABLE `Theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
