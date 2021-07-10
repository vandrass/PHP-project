-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 05:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php project`
--
CREATE DATABASE IF NOT EXISTS `php project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `php project`;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_code` int(11) UNSIGNED NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_code`, `city_name`) VALUES
(1, 'Haifa'),
(2, 'Tel-Aviv'),
(3, 'Beer-Sheva'),
(4, 'Jerusalem'),
(5, 'Eilat'),
(6, 'Naharya'),
(7, 'Natanya'),
(8, 'Ashdod'),
(9, 'Ashkelon'),
(10, 'Afula'),
(11, 'Akko');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `data` date NOT NULL,
  `time` time NOT NULL,
  `image` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `data`, `time`, `image`) VALUES
(43, 'Beautifull Image', 'White House press secretary Jen Psaki, pressed over the riots in Portland and Seattle, said President Biden \"condemns violence\" and supports \"peaceful protests\" but said \"smashing windows is not protesting and neither is looting.\"', '2021-01-25', '22:06:48', 'newsimg/16116052081.jpg'),
(44, 'Moderna becomes third Covid vaccine approved in the UK', 'Prime Minister Boris Johnson has said it is \"excellent news\" that a third coronavirus vaccine has been approved for use in the UK.\r\n\r\nIt is made by US company Moderna and works in a similar way to the Pfizer one already being offered on the NHS.\r\n\r\nThe UK has pre-ordered 17 million doses of the Moderna vaccine - 10 million more than planned - but supplies are not expected to arrive until spring.\r\n\r\nIt is the last Covid vaccine with final trial data published.\r\n\r\nThere are hundreds still in development, with some expected to report findings in the near future.\r\n\r\nAround 1.5 million people in the UK have had at least one dose of a Covid vaccine so far, with either the Pfizer or AstraZeneca vaccines already approved by UK regulators.', '2021-01-25', '22:09:58', 'newsimg/16116053982.jpg'),
(45, 'COVID-19: Riots erupt in Netherlands during protests over lockdown curfew', 'Riots erupted in the Netherlands over the weekend after a night-time curfew to prevent the spread of COVID-19 was imposed.\r\n\r\nAnti-lockdown protesters looted stores, set fires and clashed with police in several cities on Sunday, Dutch media reported.', '2021-01-25', '22:13:01', 'newsimg/16116055816.jpg'),
(46, 'Moderna becomes third Covid vaccine approved in the UK', 'PDOStatement — Класс PDOStatement\r\nPDOStatement::bindColumn — Связывает столбец с переменной PHP\r\nPDOStatement::bindParam — Привязывает параметр запроса к переменной\r\nPDOStatement::bindValue — Связывает параметр с заданным значением\r\nPDOStatement::closeCursor — Закрывает курсор, переводя запрос в состояние готовности к повторному запуску', '2021-01-26', '20:27:35', 'newsimg/16116856555.jpg'),
(47, 'Here are the executive orders Biden has signed so far', 'PDOException — Класс PDOException\r\nДрайверы PDO\r\nCUBRID (PDO) — Функции CUBRID (PDO_CUBRID)\r\nMS SQL Server (PDO_DBLIB) — Функции Microsoft SQL Server и Sybase (PDO_DBLIB)\r\nFirebird (PDO) — Функции Firebird (PDO_FIREBIRD)\r\nIBM (PDO) — Функции IBM (PDO_IBM)\r\nInformix (PDO) — Функции Informix (PDO_INFORMIX)\r\nMySQL (PDO) — Функции MySQL (PDO_MYSQL)\r\nMS SQL Server (PDO) — Функции модуля PDO_SQLSRV для Microsoft SQL Server\r\nOracle (PDO) — Функции Oracle (PDO_OCI)\r\nODBC и DB2 (PDO) — Функции ODBC и DB2 (PDO_ODBC)\r\nPostgreSQL (PDO) — Функции PostgreSQL (PDO_PGSQL)\r\nSQLite (PDO) — Функции SQLite (PDO_SQLITE)', '2021-01-26', '20:38:46', 'newsimg/16116863264.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request_to_admin`
--

CREATE TABLE `request_to_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `request` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_to_admin`
--

INSERT INTO `request_to_admin` (`id`, `email`, `request`) VALUES
(11, '$email', '$text'),
(12, 'vandra@gmail.com', 'asd'),
(13, 'vandrass@gmail.com', 'In Eindhoven, rioters torched a car, threw rocks and \r\n'),
(14, 'vandrass@gmail.com', 'lkjawdlkajdkl lkasd lkawdlk aslkd alskd lkasd klasdlkajd lkawsjd klajdlkwajsdkl awjdlkjawdkljwkldjlkdwjawldjawlkwdl'),
(15, 'vandrass@gmail.com', 'Prime Minister Boris Johnson has said it is \"excellent news\" that a third coronavirus vaccine has been approved for use in the UK. It is made by US company Moderna and works in a similar way to the Pfizer one already being offered on the NHS. The UK has pre-ordered 17 million doses of the Moderna vaccine - 10 million more than planned - but supplies are not expected to arrive until spring. It is the last Covid vaccine with final trial data published. There are hundreds still in development, with some expected to report findings in the near future. Around 1.5 million people in the UK have had at least one dose of a Covid vaccine so far, with either the Pfizer or AstraZeneca vaccines already approved by UK regulators.'),
(16, 'denis@mail', '— Ладно, давай зайдем с другой стороны. Я тебе сейчас расскажу как работает вызов методов, а ты потом еще раз попробуешь пробежаться по предыдущей лекции, ок?\r\n\r\n— Идет.\r\n\r\n— Отлично, тогда я расскажу тебе о вызове функций/методов и возвращаемых ими значениях.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `city_code` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `avatar`, `city_code`) VALUES
(25, 'admin', 'admin', 'admin@admin', '21232f297a57a5a743894a0e4a801fc3', 'uploads/1611513190images.jpg', 1),
(26, 'test', 'test', 'test@mail', '202cb962ac59075b964b07152d234b70', 'uploads/1611512484Goroda.JPG', 3),
(27, 'Ivan Goncharov', 'ivan', 'vandrass@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1611605632image.jpg', 1),
(28, 'Denis Tsymbalenko', 'den', 'denis@mail', '202cb962ac59075b964b07152d234b70', 'uploads/1611686294image.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_code`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_to_admin`
--
ALTER TABLE `request_to_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_code` (`city_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `request_to_admin`
--
ALTER TABLE `request_to_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`city_code`) REFERENCES `city` (`city_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
