-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 21 2019 г., 12:29
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`) VALUES
(1, 'Ноутбуки', 'notebook'),
(2, 'Персональные компьютеры', 'pc');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_index` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `product`, `prod_id`, `price`, `quantity`, `f_name`, `s_name`, `address`, `post_index`, `email`, `date`, `time`) VALUES
(1, 'Пицца \"Мясная\"', 1, '300.00', '3', 'Иван', 'Петров', 'г. Москва, ул.Петровка, дом 24', '127051', 'ivan@pkb.ru', '2019-03-18', '14:00:30');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Пицца \"Сырная\"', 'с сыром', '250'),
(2, 'Пицца \"мясная\"', 'с мясом', '280'),
(14, 'Хлеб', 'Зерновой', '500'),
(17, 'Хлеб', 'Кефирный', '50');

-- --------------------------------------------------------

--
-- Структура таблицы `products2`
--

CREATE TABLE `products2` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products2`
--

INSERT INTO `products2` (`id`, `title`, `description`, `price`, `image`, `category`) VALUES
(1, 'Мухомор красный', 'Плодовое тело гриба содержит ряд токсичных соединений, некоторые из которых обладают психотропным эффектом. Токсические и психоактивные вещества хорошо растворяются в горячей воде, и употребление грибов, отваренных в нескольких водах, приводит к менее сильному отравлению. Однако, содержание ядов в плодовых телах может сильно варьировать, что делает употребление мухоморов в пищу опасным', '39.50', 'img_products/muhomorred.jpg', 'ядовитый'),
(2, 'Мухомор пантерный', 'Сильно ядовит. Образует микоризу со многими деревьями, встречается в хвойных, смешанных и широколиственных лесах, часто под сосной, дубом, буком, предпочитает щелочные почвы. Широко распространён в умеренном климате Северного полушария', '38.50', '../views/layouts/img_products/muhomorpanther.jpg', 'ядовитый'),
(3, 'Белый гриб', 'Классический вид, который в народе прозвали «полковником» – чествуя самым главным и лучшим из сородичей. Каштаново-коричневая шляпка выпуклая, затем плоско-выпуклая, подушковидная, редко распростертая, достигает диаметра 25–30 см. Известны гигантские представители – с диаметром шляпки до 45 см и весом до 2–3 кг. Поверхность гладкая, иногда неровная, бороздчатая ил', '40.50', '../views/layouts/img_products/white.jpg', 'съедобный'),
(4, 'Подосиновик', 'Плодоносит чаще поодиночке. Обычный гриб в северной умеренной зоне, в России наиболее известен в Европейской части и на Дальнем Востоке, где встречается под берёзой маньчжурской и каменной. Сезон июнь — сентябрь, иногда до поздней осени. Съедобен', '40.50', '../views/layouts/img_products/podosinovik.jpg', 'съедобный'),
(5, 'Лисичка', 'Хорошо известный съедобный гриб, высоко ценится, годится для употребления в любом виде. Образует микоризу с различными деревьями, наиболее часто с елью, сосной, дубом, буком', '69.50', '../views/layouts/img_products/lisichka.jpg', 'съедобный'),
(6, 'Свинушка', 'До 1981 года этот гриб считался условно съедобным и относился к 4-й категории по пищевым качествам. В настоящее время отнесён к ядовитым, хотя симптомы отравления проявляются не всегда и/или не сразу. Содержит токсины (лектины), не разрушающиеся даже при многократном отваривании', '10.50', '../views/layouts/img_products/svinushka.jpg', 'ядовитый');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `login` int(20) NOT NULL,
  `pass` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products2`
--
ALTER TABLE `products2`
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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `products2`
--
ALTER TABLE `products2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
