-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 29 2020 г., 05:32
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `first_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applicant`
--

CREATE TABLE `applicant` (
  `id` int NOT NULL,
  `applicant_name` varchar(100) DEFAULT NULL,
  `id_vac` int DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `applicant`
--

INSERT INTO `applicant` (`id`, `applicant_name`, `id_vac`, `text`) VALUES
(1, 'Федосеев Кирилл Евгеньевич', 1, 'Трудолюбивый, ответственный и находчивый.'),
(2, 'Солдаткина Дарья Максимовна', 11, 'Готова работать днём и ночью, только дайте перерыв на обед!');

-- --------------------------------------------------------

--
-- Структура таблицы `conditions`
--

CREATE TABLE `conditions` (
  `id` int NOT NULL,
  `work_condition` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `conditions`
--

INSERT INTO `conditions` (`id`, `work_condition`) VALUES
(3, 'Частичная занятость');

-- --------------------------------------------------------

--
-- Структура таблицы `demand`
--

CREATE TABLE `demand` (
  `id` int NOT NULL,
  `demands` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `demand`
--

INSERT INTO `demand` (`id`, `demands`) VALUES
(1, 'Опыт работы с библиотекой Pandas Python'),
(2, 'Высокий уровень самоорганизации '),
(3, 'Знание английского языка ');

-- --------------------------------------------------------

--
-- Структура таблицы `key_skill`
--

CREATE TABLE `key_skill` (
  `id` int NOT NULL,
  `skill` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `key_skill`
--

INSERT INTO `key_skill` (`id`, `skill`) VALUES
(1, 'Уверенность в себе'),
(2, 'Работоспособность');

-- --------------------------------------------------------

--
-- Структура таблицы `responsibility`
--

CREATE TABLE `responsibility` (
  `id` int NOT NULL,
  `responsibilitys` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `responsibility`
--

INSERT INTO `responsibility` (`id`, `responsibilitys`) VALUES
(1, 'Разработка новых приложений'),
(2, 'Поддержка и рефакторинг старого приложения до выхода новой версии'),
(4, 'Разработка приложения на Android'),
(5, 'Разработка приложения на IOS');

-- --------------------------------------------------------

--
-- Структура таблицы `test_create`
--

CREATE TABLE `test_create` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `var1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `var2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `var3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `var4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `right_version_number` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `test_ready`
--

CREATE TABLE `test_ready` (
  `id` int NOT NULL,
  `test_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'laner', '12345'),
(2, 'soldatkina', 'zx75');

-- --------------------------------------------------------

--
-- Структура таблицы `users_2`
--

CREATE TABLE `users_2` (
  `id` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `pass` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users_2`
--

INSERT INTO `users_2` (`id`, `full_name`, `email`, `login`, `avatar`, `pass`) VALUES
(1, 'Дмитрий Андреевич Кудряшов', 'laner4463@gmail.com', 'laner4463@gmail.com', 'uploads/16059607211519887191744.jpg', '123'),
(2, 'Дмитрий Андреевич Кудряшов', 'laner4463@gmail.com', 'laner4463@gmail.com', 'uploads/16059608921519887191744.jpg', '123'),
(6, 'Алексей Дмитриевич Матвеев', 'poodge@google.com', 'lexys', 'uploads/1605963558lex.jpg', '123'),
(7, 'Дмитрий Андреевич Кудряшов', 'laner4463@gmail.com', 'laner26', 'uploads/1605968813lex.jpg', '12345'),
(8, 'Сергеев Дмитрий Сергеевич', 'dimok2013@gmail.com', 'Necromant', 'uploads/1605979978001.jpg', '123'),
(9, 'Иванов Иван Иванович', 'admin', 'admin', 'uploads/160599495954.jpg', 'admin'),
(10, 'Квокова Наталья Станиславовна', 'nata@gmail.com', 'Nata', 'uploads/1605995615jy_ZFWyryiI.jpg', '12345');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE `vacancies` (
  `id` int NOT NULL,
  `name_ vacancies` varchar(255) DEFAULT NULL,
  `id_person` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int NOT NULL,
  `vacancy_name` varchar(255) DEFAULT NULL,
  `demand_id` varchar(255) DEFAULT NULL,
  `responsibility_id` varchar(255) DEFAULT NULL,
  `key_skill_id` varchar(255) DEFAULT NULL,
  `conditions_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `vacancy`
--

INSERT INTO `vacancy` (`id`, `vacancy_name`, `demand_id`, `responsibility_id`, `key_skill_id`, `conditions_id`) VALUES
(1, 'Junior программист', '1 3 8', '1  4 ', '1', '2'),
(11, 'Python программист', '1 2', '2  3 ', '1 2', '2'),
(12, 'Middle программист', '2 3', '1  4  5 ', '1 2', '2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `demand`
--
ALTER TABLE `demand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `key_skill`
--
ALTER TABLE `key_skill`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `responsibility`
--
ALTER TABLE `responsibility`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test_create`
--
ALTER TABLE `test_create`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_2`
--
ALTER TABLE `users_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `demand`
--
ALTER TABLE `demand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `key_skill`
--
ALTER TABLE `key_skill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `responsibility`
--
ALTER TABLE `responsibility`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `test_create`
--
ALTER TABLE `test_create`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_2`
--
ALTER TABLE `users_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
