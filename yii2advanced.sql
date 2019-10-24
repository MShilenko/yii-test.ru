-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 24 2019 г., 06:50
-- Версия сервера: 5.7.27-0ubuntu0.16.04.1
-- Версия PHP: 7.0.33-0ubuntu0.16.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`id`, `first_name`, `last_name`, `birthdate`, `rating`) VALUES
(1, 'Джордж', 'Оруэл', '1920-01-05', 53),
(2, 'Даниел', 'Киз', '1930-01-15', 85),
(3, 'Грегори', 'Робертс', '1950-06-05', 79),
(4, 'Элизабет', 'Фримен', '1962-11-07', 90),
(5, 'Эрик', 'Фримен', '1967-01-08', 92),
(6, 'Ричард', 'Берд', '1967-01-08', 77),
(7, 'Эрих', 'Гамма', '1950-02-10', 70),
(8, 'Ричард', 'Хелм', '1953-02-10', 70),
(9, 'Ральф', 'Джонсон', '1952-02-10', 70),
(10, 'Джон', 'Влиссидес', '1951-02-10', 70);

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `isbn`, `date_published`, `publisher_id`) VALUES
(1, 'Шантарам', '8934638534', '2015-01-21', 1),
(2, '1984', '12978054744', '2014-05-02', 1),
(3, 'Цветы для Элджернона', '967846395', '2007-10-12', 2),
(4, 'Один', '213987678', '2008-01-01', 3),
(5, 'Тень горы', '235975694', '2010-02-27', 3),
(6, 'Паттерны проектирования', '078224745', '2010-04-27', 5),
(7, 'Design Patterns', '749579432', '2005-05-30', 5),
(13, 'Ротфусс', '456767867878987', '2020-11-21', 7),
(14, 'Test', '', NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `book_to_author`
--

CREATE TABLE `book_to_author` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book_to_author`
--

INSERT INTO `book_to_author` (`id`, `book_id`, `author_id`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 2),
(4, 4, 6),
(5, 5, 3),
(6, 6, 4),
(7, 6, 5),
(8, 7, 7),
(9, 7, 8),
(10, 7, 9),
(11, 7, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'London'),
(2, 'Paris'),
(3, 'Berlin'),
(4, 'Moscow'),
(5, 'SPB'),
(6, 'Tambov');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `identifikator` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`id`, `firstName`, `lastName`, `middleName`, `salary`, `email`, `city`, `birthday`, `startDate`, `position`, `identifikator`) VALUES
(1, 'Mikhail', 'Shilenko', 'Petrovich', NULL, 'shilenkomihail1987@gmail.com', 3, '1987-11-21 00:00:00', '2010-11-11 00:00:00', 'it-department', 'webmanagerrr'),
(2, 'Sherlock', 'Holmes', 'Hemich', NULL, 'baker_st@london.uk', 1, '1854-01-06 00:00:00', '1874-10-06 00:00:00', 'detective', 'detective_consultant');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571164997),
('m130524_201442_init', 1571165001),
('m170620_175322_book_shop_example', 1571760343),
('m190124_110200_add_verification_token_column_to_user_table', 1571165002),
('m191016_161741_create_subscriber_table', 1571242860),
('m191019_154705_create_employee_table', 1571500719),
('m191019_161754_create_employee_table', 1571501883),
('m191019_161950_create_employee_table', 1571502092),
('m191021_181245_create_city_table', 1571681633);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `status`) VALUES
(1, 'Warren under attack in US Democratic debate', 'All front-runners were on the defensive - Warren on spending, Sanders on his health and Biden on Ukraine.', 1),
(2, 'North Korean leader rides horse up sacred mountain', 'Images of Kim Jong-un astride a white steed on Mount Paektu fuel speculation of a major announcement.', 1),
(5, 'Harry\'s emotional moment over Meghan\'s pregnancy', 'Prince Harry takes a moment as he talks about becoming a father at the WellChild Awards.', 1),
(6, 'Longest non-stop passenger flight tested', 'The New York to Sydney flight is part of research on how ultra-long haul journeys affect our bodies.', 1),
(7, 'Three dead in Chile supermarket fire amid riots', 'The protests were sparked by a rise in metro fares, which has since been suspended.', 1),
(8, 'How important is bilingualism on the campaign trail?', 'How does speaking French or Spanish affect a candidate\'s chances in North American politics?', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_registered` date DEFAULT NULL,
  `identity_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `date_registered`, `identity_number`) VALUES
(1, 'Sigma', '2015-01-21', 197940475),
(2, 'Ecsmo', '2014-05-02', 207939506),
(3, 'Williams', '2007-10-12', 359794060),
(4, 'OReally', '2008-01-01', 407040406),
(5, 'Standard', '2010-02-27', 559392929);

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(1, 'shilenkomihail1987@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `book_to_author`
--
ALTER TABLE `book_to_author`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `book_to_author`
--
ALTER TABLE `book_to_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
