-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 04 2021 г., 20:29
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `art`
--

CREATE TABLE `art` (
  `id` int(11) NOT NULL,
  `category` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `art`
--

INSERT INTO `art` (`id`, `category`, `category_eng`, `price`, `price_eng`, `title`, `url`, `catalog_id`) VALUES
(1, 'Отношение в любви', 'Relationship in love', 'Исполнение акриловыми красками', 'Execution with acrylic paints', '25.01.2019', '-', 4),
(2, 'Дождливый город', 'Rainy city', 'Исполнение  масляными красками ', 'Execution with oil paints', '12.12.2001', '12.000', 1),
(3, 'Соитие природы ', 'The coition of nature', 'Исполнение акриловыми красками', 'Execution with acrylic paints', '05.10.1985', '-', 3),
(4, 'Цветочный букет', 'Flower bouquet', 'Исполнение акварельными красками', 'Execution with watercolors', '04.08.2010', '5.000', 2),
(5, 'Аборигены', 'Aborigines', 'Исполнение художественным маслом', 'Execution with art oil', '14.02.2020', '-', 5),
(6, 'Абстракция', 'Abstraction', 'Исполнение художественным маслом', 'Execution with art oil', '01.02.2001', '15.000', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `cabinet`
--

CREATE TABLE `cabinet` (
  `id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cabinet`
--

INSERT INTO `cabinet` (`id`, `name`, `city`, `phone`, `email`, `users_id`) VALUES
(12, 'Наумчик Александра Викторовна', 'минск', '+375 (29) 595-20-39', 'podberez85@mail.ru', 6),
(13, 'Скумбрия', 'минск', '+375 (29)5986324', 'podberez85@mail.ru', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs`
--

CREATE TABLE `catalogs` (
  `id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `name_eng`, `city`, `city_eng`, `phone`, `email`, `info`) VALUES
(1, 'Ольга', 'Olga', 'Беларусь, Минск', 'Belarus, Minsk', '+375298245632', 'dhdjj@.com', 'Фрилансер любит искусство и проявляет его в своих работах.'),
(2, 'Сергей', 'Sergei', 'Россия, Москва', 'Russia, Moscow', '+3798523659884', 'kfskfkfsf@.com', 'Фотограф, работающий сразу в нескольких техниках и стилистиках. '),
(3, 'Алена', 'Alena', 'Германия, Берлин', 'Germany, Berlin', '+225588896333', 'dfhh@.com', 'Фрилансер любит искусство и проявляет его в своих работах.'),
(4, 'Константин', 'Constantin', 'США, Майами', 'USA, Miami', '+2588996333255', 'dgdfggh@.com', 'Художник, работающий в технике декупаж, целью является мониторинг востребованной на текущий момент стилистики.'),
(5, 'Виктор', 'Viktor', 'Германия, Мюнхен', 'Germany, Munich', '+259756333155', 'lkuyt12@.com', 'Художник, работающий в технике декупаж, целью является мониторинг востребованной на текущий момент стилистики.'),
(6, 'Валентин', 'Valentin', 'Бразилия, Бразилия', 'Brazil, Brazil', '+354889612362', 'jhjuyt@.com', 'Фотограф, работающий сразу в нескольких техниках и стилистиках. ');

-- --------------------------------------------------------

--
-- Структура таблицы `catalogs_eng`
--

CREATE TABLE `catalogs_eng` (
  `id` int(11) NOT NULL,
  `name` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catalogs_eng`
--

INSERT INTO `catalogs_eng` (`id`, `name`, `city`, `phone`, `email`, `info`) VALUES
(1, 'Olga', 'Minsk', '+375298245632', 'dhdjj@.com', 'The freelancer loves art and displays it in his work.'),
(2, 'Sergei', 'Moscow', '+3798523659884', 'kfskfkfsf@.com', 'Photographer working in several techniques and styles at once.'),
(3, 'Alena', 'Berlin', '+225588896333', 'dfhh@.com', 'The freelancer loves art and displays it in his work.'),
(4, 'Constantin', 'Miami', '+2588996333255', 'dgdfggh@.com', 'An artist working in the decoupage technique, the goal is to monitor the stylistics that are in demand at the moment.'),
(5, 'Viktor\r\n\r\n', 'Germany, Munich', '+259756333155', 'lkuyt12@.com', 'An artist working in the decoupage technique, the goal is to monitor the stylistics that are in demand at the moment.'),
(6, 'Valentin', 'Brazil, Brazil', '+354889612362', 'jhjuyt@.com', 'Photographer working in several techniques and styles at once.');

-- --------------------------------------------------------

--
-- Структура таблицы `coments`
--

CREATE TABLE `coments` (
  `id` int(11) NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coments`
--

INSERT INTO `coments` (`id`, `body`, `type`, `type_id`, `status`) VALUES
(1, 'мы оставили отзыв', 'foto', 2, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_id` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `foto`
--

INSERT INTO `foto` (`id`, `category`, `category_eng`, `price`, `price_eng`, `title`, `catalog_id`) VALUES
(1, 'Контрастный интерьер', 'Contrasting interior', 'Классический стиль', 'Classic style', '04.02.2012', '2'),
(2, 'Рассвет в Тайланде', 'Dawn in Thailand', 'Художественный пейзаж', 'Artistic landscape', '02.12.2000', '1'),
(3, 'Таинственный остров', 'Mysterious Island', 'Морской пейзаж', 'Seascape', '20.01.1985', '4'),
(4, 'Рай на земле', 'Heaven on earth', 'Тропический пейзаж', 'Tropical landscape', '15.05.2002', '3'),
(5, 'Дорога в вечность', 'Road to eternity', 'Художественны пейзаж', 'Artistic landscape', '01.05.1991', '6'),
(6, 'Одинокий рассвет', 'Lonely dawn', 'Фото на природе', 'Photo outdoors', '25.12.2020', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `graphic`
--

CREATE TABLE `graphic` (
  `id` int(11) NOT NULL,
  `category` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_id` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `graphic`
--

INSERT INTO `graphic` (`id`, `category`, `category_eng`, `price`, `price_eng`, `title`, `catalog_id`) VALUES
(1, 'Венок цветов', 'Wreath of flowers', 'Перьевая техника', 'Pen technique', '12.02.2001', '4'),
(2, 'Мэрлин Монро', 'Marilyn Monroe', 'Трафарет', 'Stencil', '14.04.1999', '3'),
(3, 'Влюбленные', 'Lovers', 'Техника отмывка', 'Cleaning technique', '01.01.2020', '2'),
(4, 'Покорение Зевса', 'Conquest of Zeus', 'Трафарет', 'Stencil', '01.02.1984', '1'),
(5, 'Сорока-ворона', 'Magpie crow', 'Техника отпечаток', 'Technique imprint', '05.06.2020', '6'),
(6, 'Наслаждение русалки  ', 'Mermaid delight', 'Техника отмывка тушью ', 'Ink wash technique', '08.09.2010', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `sculptures`
--

CREATE TABLE `sculptures` (
  `id` int(11) NOT NULL,
  `category` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_eng` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catalog_id` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sculptures`
--

INSERT INTO `sculptures` (`id`, `category`, `category_eng`, `price`, `price_eng`, `title`, `catalog_id`) VALUES
(1, 'Лицо', 'Face', 'Лаконичная скульптура', 'Laconic sculpture', '01.09.2002', '3'),
(2, 'Абстракция в образах', 'Abstraction in images', 'Скульптура из дерева', 'Wood sculpture', '12.05.1980', '2'),
(3, 'Современный Аполлон', 'Modern Apollo', 'Классический стиль на современный лад', 'Classic style with a modern twist', '09.05.1952', '1'),
(4, 'Баран', 'Ram', 'Современная скульптура', 'Modern sculpture', '09.02.2020', '4'),
(5, 'Дама в стразах', 'Lady in rhinestones', 'Смешанная техника ', 'Mixed media', '19.12.1980', '6'),
(6, 'Иллюзия тела', 'Body illusion', 'Отливка в форму', 'Casting into a mold', '26.09.2020', '5');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upass` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urole` tinytext COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `uname`, `upass`, `urole`) VALUES
(6, 'users', 'pass', 'user'),
(11, 'users', 'pass', 'user'),
(12, 'users', 'pass', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalogs_eng`
--
ALTER TABLE `catalogs_eng`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `graphic`
--
ALTER TABLE `graphic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sculptures`
--
ALTER TABLE `sculptures`
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
-- AUTO_INCREMENT для таблицы `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `cabinet`
--
ALTER TABLE `cabinet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `catalogs_eng`
--
ALTER TABLE `catalogs_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `coments`
--
ALTER TABLE `coments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `graphic`
--
ALTER TABLE `graphic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sculptures`
--
ALTER TABLE `sculptures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
