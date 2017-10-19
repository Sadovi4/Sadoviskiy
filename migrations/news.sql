-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 19 2017 г., 20:49
-- Версия сервера: 5.7.17-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mybd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `text` text NOT NULL,
  `date` date NOT NULL,
  `author` varchar(60) NOT NULL DEFAULT 'Владимир Садовский'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `text`, `date`, `author`) VALUES
(1, 'Что такое Lorem Ipsum?', 'defauit.jpeg', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.', '2017-10-16', 'Владимир Садовский'),
(2, 'Почему он используется?', 'defauit.jpeg', 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации \"Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст..\" Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам \"lorem ipsum\" сразу показывает, как много веб-страниц всё ещё дожидаются своего настоящего рождения. За прошедшие годы текст Lorem Ipsum получил много версий. Некоторые версии появились по ошибке, некоторые - намеренно (например, юмористические варианты).', '2017-10-17', 'Дмитрий Пучков'),
(3, 'Откуда он появился?', 'defauit.jpeg', 'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32', '2017-10-18', 'Садовский Владимир'),
(7, 'Где его взять?', 'default.jpg', 'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца. Также все другие известные генераторы Lorem Ipsum используют один и тот же текст, который они просто повторяют, пока не достигнут нужный объём. Это делает предлагаемый здесь генератор единственным настоящим Lorem Ipsum генератором. Он использует словарь из более чем 200 латинских слов, а также набор моделей предложений. В результате сгенерированный Lorem Ipsum выглядит правдоподобно, не имеет повторяющихся абзацей или \"невозможных\" слов.', '0000-00-00', 'Садовский Владимир'),
(10, 'Новость 5', 'default.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel consectetur turpis, malesuada vestibulum urna. Mauris feugiat tristique gravida. Pellentesque volutpat dolor a sollicitudin maximus. In finibus ex mi, eget scelerisque lorem volutpat vel. Pellentesque condimentum nibh non nisl auctor, in faucibus turpis sollicitudin. Curabitur porta odio eget massa mollis, vitae congue lorem faucibus. Cras tincidunt eget elit eu euismod. Nam nec nunc blandit, euismod mauris vel, euismod massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '0000-00-00', 'Садовский Владимир'),
(11, 'новость 6', 'default.jpg', 'Etiam congue sapien id consectetur tincidunt. Nunc sit amet ligula posuere, semper nibh id, iaculis sapien. Proin ornare arcu vitae tortor lobortis porta. Suspendisse et interdum turpis. Nam nisi justo, ultricies et sollicitudin non, egestas eu ipsum. Morbi ac pretium orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam gravida ante at semper suscipit. Integer mattis molestie nibh non ultrices. Nulla vel condimentum diam.', '0000-00-00', 'Пупкин Василий'),
(21, 'Новость 8', 'default.jpg', 'ТЕКСТ текст и еще немного текста', '2017-10-19', 'Vladimir');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
