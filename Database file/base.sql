-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 25 2020 г., 21:06
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dle_admin_logs`
--

CREATE TABLE `dle_admin_logs` (
  `id` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` int UNSIGNED NOT NULL DEFAULT '0',
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `action` int NOT NULL DEFAULT '0',
  `extras` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_admin_logs`
--

INSERT INTO `dle_admin_logs` (`id`, `name`, `date`, `ip`, `action`, `extras`) VALUES
(1, 'FlipFlare', 1582945384, '162.158.182.229', 101, ''),
(2, 'FlipFlare', 1582945780, '162.158.182.229', 82, ''),
(3, 'FlipFlare', 1582945819, '162.158.182.229', 59, 'cabinet'),
(4, 'FlipFlare', 1582945833, '162.158.182.229', 60, 'cabinet'),
(5, 'FlipFlare', 1582946059, '162.158.182.229', 60, 'cabinet'),
(6, 'FlipFlare', 1582948279, '172.68.182.97', 101, ''),
(7, 'FlipFlare', 1582948676, '172.68.182.97', 59, 'shop'),
(8, 'FlipFlare', 1582948694, '172.68.182.97', 59, 'start'),
(9, 'FlipFlare', 1582948715, '172.68.182.97', 59, 'download'),
(10, 'FlipFlare', 1582971946, '162.158.182.127', 101, ''),
(11, 'FlipFlare', 1582972063, '162.158.182.127', 101, ''),
(12, 'FlipFlare', 1582972423, '172.68.182.163', 101, ''),
(13, 'FlipFlare', 1582972655, '172.68.182.163', 82, ''),
(14, 'FlipFlare', 1582972669, '172.68.182.163', 60, 'shop'),
(15, 'FlipFlare', 1582972974, '162.158.183.56', 101, ''),
(16, 'FlipFlare', 1582974808, '162.158.182.241', 101, ''),
(17, 'FlipFlare', 1583044025, '172.68.11.105', 82, ''),
(18, 'FlipFlare', 1583048957, '172.68.11.105', 101, ''),
(19, 'Evgenius', 1583068714, '172.68.10.68', 89, ''),
(20, 'Evgenius', 1583068721, '172.68.10.68', 89, ''),
(21, 'FlipFlare', 1583122129, '172.68.245.185', 101, ''),
(22, 'FlipFlare', 1583122138, '172.68.245.185', 82, ''),
(23, 'FlipFlare', 1583122163, '172.68.245.185', 59, 'about'),
(24, 'FlipFlare', 1583122184, '172.68.245.185', 59, 'dtm'),
(25, 'FlipFlare', 1583122205, '172.68.245.185', 59, 'galaxy'),
(26, 'FlipFlare', 1583122225, '172.68.245.185', 60, 'galaxy'),
(27, 'FlipFlare', 1583122238, '172.68.245.185', 60, 'dtm'),
(28, 'FlipFlare', 1583124034, '172.68.11.213', 59, 'donate'),
(29, 'FlipFlare', 1583124077, '172.68.11.213', 60, 'dle-rules-page'),
(30, 'FlipFlare', 1583124123, '172.68.11.213', 59, 'rules_economy'),
(31, 'FlipFlare', 1583124157, '172.68.11.213', 59, 'rules_moders'),
(32, 'FlipFlare', 1583164771, '172.68.10.68', 82, ''),
(33, 'FlipFlare', 1583164781, '172.68.10.68', 48, ''),
(34, 'GoldWolf', 1583170671, '172.69.54.205', 101, ''),
(35, 'GoldWolf', 1583170722, '172.69.55.104', 101, ''),
(36, 'GoldWolf', 1583170770, '162.158.158.177', 101, ''),
(37, 'GoldWolf', 1583170773, '172.69.54.127', 91, ''),
(38, 'GoldWolf', 1583170798, '172.69.54.163', 91, ''),
(39, 'GoldWolf', 1583170835, '172.69.54.163', 101, ''),
(40, 'GoldWolf', 1583171109, '172.68.244.34', 91, ''),
(41, 'GoldWolf', 1583171125, '172.68.244.34', 101, ''),
(42, 'FlipFlare', 1583374682, '172.68.182.20', 101, ''),
(43, 'FlipFlare', 1583462776, '172.68.10.62', 101, ''),
(44, 'FlipFlare', 1583572232, '172.68.10.54', 82, ''),
(45, 'FlipFlare', 1583572279, '172.68.10.54', 26, 'Добро пожаловать'),
(46, 'FlipFlare', 1583572279, '172.68.10.54', 26, 'Приобретение и оплата скрипта'),
(47, 'FlipFlare', 1583572279, '172.68.10.54', 26, 'Осуществление технической поддержки скрипта'),
(48, 'FlipFlare', 1583572286, '172.68.10.54', 13, '1'),
(49, 'FlipFlare', 1583572292, '172.68.10.54', 13, '2'),
(50, 'FlipFlare', 1583572297, '172.68.10.54', 13, '3'),
(51, 'FlipFlare', 1583572300, '172.68.10.54', 13, '4'),
(52, 'FlipFlare', 1583572304, '172.68.10.54', 13, '5'),
(53, 'FlipFlare', 1583572308, '172.68.10.54', 13, '6'),
(54, 'FlipFlare', 1583572313, '172.68.10.54', 13, '7'),
(55, 'FlipFlare', 1583572318, '172.68.10.54', 13, '8'),
(56, 'admin', 1583607484, '172.69.10.170', 89, ''),
(57, 'root', 1583607493, '172.69.10.170', 89, ''),
(58, 'admin', 1583607527, '172.68.182.170', 89, ''),
(59, 'asdasd', 1583607590, '172.68.182.170', 89, ''),
(60, 'asdadg', 1583607605, '172.68.182.170', 89, ''),
(61, 'asdadg', 1583607621, '162.158.183.39', 89, ''),
(62, 'GoldWolf', 1583662007, '172.68.244.142', 101, ''),
(63, 'FlipFlare', 1583767583, '172.68.182.170', 101, ''),
(64, 'FlipFlare', 1583769874, '162.158.182.200', 101, ''),
(65, 'FlipFlare', 1583854633, '162.158.183.161', 101, ''),
(66, 'FlipFlare', 1583855829, '172.68.182.134', 101, ''),
(67, 'FlipFlare', 1583920607, '172.68.244.172', 101, ''),
(68, 'FlipFlare', 1583985809, '162.158.183.39', 101, ''),
(69, 'GoldWolf', 1583991283, '162.158.150.20', 101, ''),
(70, 'FlipFlare', 1584031320, '162.158.182.128', 101, ''),
(71, 'FlipFlare', 1584114816, '172.68.182.188', 101, ''),
(72, 'GoldWolf', 1584132379, '141.101.77.48', 101, ''),
(73, 'FlipFlare', 1584173028, '162.158.103.57', 101, ''),
(74, 'FlipFlare', 1584173059, '162.158.103.57', 101, ''),
(75, 'FlipFlare', 1584173090, '162.158.103.57', 101, ''),
(76, 'FlipFlare', 1584173134, '162.158.103.57', 101, ''),
(77, 'FlipFlare', 1584173246, '162.158.103.57', 101, ''),
(78, 'FlipFlare', 1584173400, '162.158.103.57', 101, ''),
(79, 'FlipFlare', 1584173452, '162.158.103.57', 101, ''),
(80, 'FlipFlare', 1584173642, '162.158.103.155', 101, ''),
(81, 'FlipFlare', 1584173655, '162.158.103.155', 101, ''),
(82, 'FlipFlare', 1584249964, '162.158.183.39', 101, ''),
(83, 'FlipFlare', 1584270295, '162.158.103.189', 82, ''),
(84, 'FlipFlare', 1584270326, '162.158.103.189', 59, 'team'),
(85, 'GoldWolf', 1584271080, '162.158.34.68', 101, ''),
(86, 'GoldWolf', 1584271161, '162.158.34.134', 101, ''),
(87, 'GoldWolf', 1584271197, '162.158.34.50', 101, ''),
(88, 'GoldWolf', 1584271227, '162.158.34.50', 101, ''),
(89, 'GoldWolf', 1584271249, '162.158.34.50', 101, ''),
(90, 'GoldWolf', 1584271285, '162.158.34.68', 101, ''),
(91, 'GoldWolf', 1584271302, '162.158.34.134', 101, ''),
(92, 'GoldWolf', 1584271329, '162.158.34.50', 101, ''),
(93, 'GoldWolf', 1584271375, '162.158.34.216', 101, ''),
(94, 'GoldWolf', 1584271416, '162.158.34.134', 101, ''),
(95, 'GoldWolf', 1584271498, '162.158.34.68', 101, ''),
(96, 'GoldWolf', 1584271616, '162.158.34.216', 101, ''),
(97, 'GoldWolf', 1584271647, '162.158.34.68', 82, ''),
(98, 'GoldWolf', 1584271919, '162.158.34.134', 101, ''),
(99, 'GoldWolf', 1584271923, '162.158.34.134', 101, ''),
(100, 'GoldWolf', 1584271971, '162.158.34.68', 101, ''),
(101, 'GoldWolf', 1584271987, '162.158.34.68', 101, ''),
(102, 'GoldWolf', 1584272004, '162.158.34.134', 101, ''),
(103, 'GoldWolf', 1584272049, '162.158.34.216', 101, ''),
(104, 'GoldWolf', 1584272061, '162.158.34.216', 101, ''),
(105, 'GoldWolf', 1584272092, '162.158.34.134', 101, ''),
(106, 'GoldWolf', 1584272097, '162.158.34.134', 101, ''),
(107, 'GoldWolf', 1584272154, '162.158.34.134', 101, ''),
(108, 'GoldWolf', 1584272164, '162.158.34.134', 101, ''),
(109, 'GoldWolf', 1584272627, '162.158.34.134', 101, ''),
(110, 'GoldWolf', 1584286459, '172.68.10.54', 101, ''),
(111, 'FlipFlare', 1584336703, '162.158.103.155', 101, ''),
(112, 'GoldWolf', 1584346969, '162.158.159.84', 82, ''),
(113, 'FlipFlare', 1584364467, '162.158.103.189', 82, ''),
(114, 'FlipFlare', 1584364578, '162.158.103.189', 48, ''),
(115, 'FlipFlare', 1584364590, '162.158.103.189', 48, ''),
(116, 'FlipFlare', 1584364600, '162.158.103.189', 48, ''),
(117, 'FlipFlare', 1584381275, '162.158.78.116', 101, ''),
(118, 'FlipFlare', 1584425480, '162.158.103.57', 101, ''),
(119, 'GoldWolf', 1584429468, '172.68.10.188', 101, ''),
(120, 'FlipFlare', 1584441121, '162.158.103.161', 82, ''),
(121, 'FlipFlare', 1584441142, '162.158.103.161', 59, 'stm'),
(122, 'admin', 1584528456, '162.158.63.166', 89, ''),
(123, 'FlipFlare', 1584529292, '162.158.103.203', 101, ''),
(124, 'FlipFlare', 1584529298, '162.158.103.203', 101, ''),
(125, 'FlipFlare', 1584529303, '162.158.103.203', 101, ''),
(126, 'FlipFlare', 1584529311, '162.158.103.203', 101, ''),
(127, 'FlipFlare', 1584529343, '162.158.103.161', 101, ''),
(128, 'FlipFlare', 1584529468, '162.158.103.161', 101, ''),
(129, 'FlipFlare', 1584529473, '162.158.103.161', 101, ''),
(130, 'FlipFlare', 1584529509, '162.158.103.155', 101, ''),
(131, 'FlipFlare', 1584529514, '162.158.103.155', 101, ''),
(132, 'FlipFlare', 1584549663, '108.162.219.20', 101, ''),
(133, 'FlipFlare', 1584583882, '162.158.103.203', 101, ''),
(134, 'FlipFlare', 1584616896, '162.158.103.203', 101, ''),
(135, 'FlipFlare', 1584636377, '173.245.52.61', 101, ''),
(136, 'GoldWolf', 1584698918, '172.69.63.161', 101, ''),
(137, 'FlipFlare', 1584699037, '162.158.103.173', 101, ''),
(138, 'FlipFlare', 1584699296, '162.158.103.173', 101, ''),
(139, 'FlipFlare', 1584707849, '162.158.103.173', 101, ''),
(140, 'GoldWolf', 1584734567, '172.69.63.225', 101, ''),
(141, 'GoldWolf', 1584734646, '173.245.54.251', 101, ''),
(142, 'GoldWolf', 1584734658, '172.69.63.91', 101, ''),
(143, 'GoldWolf', 1584734727, '172.69.63.241', 101, ''),
(144, 'GoldWolf', 1584734911, '172.69.62.140', 101, ''),
(145, 'FlipFlare', 1584787434, '162.158.103.81', 101, ''),
(146, 'FlipFlare', 1584800668, '162.158.103.161', 101, ''),
(147, 'Test', 1584810578, '162.158.79.75', 89, ''),
(148, 'Admin', 1584810584, '162.158.79.75', 89, ''),
(149, 'admin', 1584810594, '162.158.79.75', 89, ''),
(150, 'admin', 1584810600, '162.158.79.75', 89, ''),
(151, 'GoodWolf', 1584810656, '162.158.79.75', 89, ''),
(152, 'GoldWolf', 1584817601, '172.69.55.134', 101, ''),
(153, 'GoldWolf', 1584817669, '162.158.111.251', 101, ''),
(154, 'GoldWolf', 1584819709, '141.101.76.98', 101, ''),
(155, 'GoldWolf', 1584822890, '172.69.54.103', 101, ''),
(156, 'GoldWolf', 1584823027, '141.101.105.10', 101, ''),
(157, 'FlipFlare', 1584883856, '162.158.103.63', 101, ''),
(158, 'GoldWolf', 1584907633, '162.158.34.216', 101, ''),
(159, 'GoldWolf', 1584908659, '141.101.76.98', 101, ''),
(160, 'GoldWolf', 1584909730, '141.101.104.127', 82, ''),
(161, 'GoldWolf', 1584909976, '141.101.76.98', 64, 'vivikl'),
(162, 'vivikl', 1584910016, '172.69.63.57', 101, ''),
(163, 'vivikl', 1584910115, '172.69.63.161', 101, ''),
(164, 'GoldWolf', 1584913456, '141.101.76.98', 101, ''),
(165, 'GoldWolf', 1584913874, '162.158.111.191', 101, ''),
(166, 'GoldWolf', 1584913877, '162.158.111.191', 101, ''),
(167, 'GoldWolf', 1584913882, '162.158.111.191', 101, ''),
(168, 'GoldWolf', 1584913967, '141.101.76.98', 101, ''),
(169, 'vivikl', 1584914254, '173.245.54.251', 101, ''),
(170, 'vivikl', 1584914287, '173.245.54.61', 101, ''),
(171, 'vivikl', 1584916299, '173.245.54.99', 101, ''),
(172, 'GoldWolf', 1584916366, '141.101.104.225', 101, ''),
(173, 'vivikl', 1584917359, '162.158.78.62', 101, ''),
(174, 'vivikl', 1584917377, '172.69.62.20', 101, ''),
(175, 'GoldWolf', 1584920109, '172.68.246.96', 101, ''),
(176, 'GoldWolf', 1584920125, '172.68.246.96', 82, ''),
(177, 'GoldWolf', 1584920210, '172.68.246.96', 64, 'vivikl'),
(178, 'vivikl', 1584920243, '162.158.79.69', 91, ''),
(179, 'vivikl', 1584920250, '162.158.79.63', 101, ''),
(180, 'vivikl', 1584920295, '162.158.79.63', 101, ''),
(181, 'GoldWolf', 1584920467, '172.68.246.96', 64, 'MozG'),
(182, 'vivikl', 1584920698, '162.158.78.62', 101, ''),
(183, 'vivikl', 1584920813, '162.158.78.62', 101, ''),
(184, 'vivikl', 1584920946, '172.69.63.13', 101, ''),
(185, 'vivikl', 1584921225, '172.69.63.5', 101, ''),
(186, 'FlipFlare', 1584929071, '173.245.54.249', 101, ''),
(187, 'FlipFlare', 1584939854, '162.158.103.27', 101, ''),
(188, 'FlipFlare', 1584950511, '108.162.219.8', 101, ''),
(189, 'FlipFlare', 1584951241, '162.158.62.177', 101, ''),
(190, 'vivikl', 1584955208, '172.68.65.88', 101, ''),
(191, 'vivikl', 1584955245, '172.68.65.88', 82, ''),
(192, 'vivikl', 1584957437, '172.69.62.244', 101, ''),
(193, 'vivikl', 1584957694, '162.158.78.62', 101, ''),
(194, 'FlipFlare', 1584963355, '162.158.62.99', 101, ''),
(195, 'GoldWolf', 1584967421, '172.69.63.91', 82, ''),
(196, 'FlipFlare', 1584967781, '108.162.219.112', 101, ''),
(197, 'FlipFlare', 1584970785, '162.158.103.63', 101, ''),
(198, 'FlipFlare', 1584978203, '108.162.219.154', 101, ''),
(199, 'vivikl', 1584983395, '173.245.54.191', 101, ''),
(200, 'FlipFlare', 1584987349, '162.158.63.190', 101, ''),
(201, 'vivikl', 1585008355, '162.158.78.170', 82, ''),
(202, 'vivikl', 1585008455, '172.69.63.5', 101, ''),
(203, 'vivikl', 1585008457, '172.69.63.5', 82, ''),
(204, 'vivikl', 1585010008, '172.68.65.88', 101, ''),
(205, 'vivikl', 1585010077, '172.69.63.143', 101, ''),
(206, 'vivikl', 1585010556, '172.69.63.161', 101, ''),
(207, 'vivikl', 1585010654, '162.158.78.62', 101, ''),
(208, 'vivikl', 1585019903, '172.69.63.253', 101, ''),
(209, 'vivikl', 1585020081, '162.158.78.116', 101, ''),
(210, 'FlipFlare', 1585053230, '173.245.54.61', 101, ''),
(211, 'FlipFlare', 1585053285, '162.158.103.149', 101, ''),
(212, 'FlipFlare', 1585053989, '172.69.63.209', 101, ''),
(213, 'FlipFlare', 1585055459, '162.158.78.170', 101, ''),
(214, 'FlipFlare', 1585055683, '172.68.65.40', 101, ''),
(215, 'FlipFlare', 1585056603, '162.158.103.161', 101, ''),
(216, 'FlipFlare', 1585067037, '173.245.54.57', 101, ''),
(217, 'FlipFlare', 1585067301, '162.158.78.116', 101, ''),
(218, 'FlipFlare', 1585067500, '162.158.78.116', 101, ''),
(219, 'FlipFlare', 1585067534, '162.158.78.116', 101, ''),
(220, 'FlipFlare', 1585067583, '162.158.78.116', 101, ''),
(221, 'FlipFlare', 1585067660, '162.158.78.116', 101, ''),
(222, 'FlipFlare', 1585067721, '173.245.54.221', 101, ''),
(223, 'FlipFlare', 1585067816, '173.245.54.221', 101, ''),
(224, 'FlipFlare', 1585107394, '162.158.62.77', 101, ''),
(225, 'FlipFlare', 1585108899, '173.245.52.61', 101, ''),
(226, 'FlipFlare', 1585110927, '162.158.103.173', 101, ''),
(227, 'FlipFlare', 1585111041, '162.158.103.173', 101, ''),
(228, 'FlipFlare', 1585114743, '173.245.52.109', 101, ''),
(229, 'FlipFlare', 1585119103, '108.162.219.208', 101, ''),
(230, 'FlipFlare', 1585119841, '173.245.52.175', 101, ''),
(231, 'FlipFlare', 1585120020, '162.158.62.99', 101, ''),
(232, 'FlipFlare', 1585121430, '162.158.63.190', 101, ''),
(233, 'FlipFlare', 1585145848, '162.158.103.81', 101, ''),
(234, 'FlipFlare', 1585154038, '162.158.63.232', 101, '');

-- --------------------------------------------------------

--
-- Структура таблицы `dle_admin_sections`
--

CREATE TABLE `dle_admin_sections` (
  `id` mediumint NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `descr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_groups` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_banned`
--

CREATE TABLE `dle_banned` (
  `id` smallint NOT NULL,
  `users_id` int NOT NULL DEFAULT '0',
  `descr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `days` smallint NOT NULL DEFAULT '0',
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_banners`
--

CREATE TABLE `dle_banners` (
  `id` smallint NOT NULL,
  `banner_tag` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `descr` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT '0',
  `short_place` tinyint(1) NOT NULL DEFAULT '0',
  `bstick` tinyint(1) NOT NULL DEFAULT '0',
  `main` tinyint(1) NOT NULL DEFAULT '0',
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `grouplevel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'all',
  `start` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `end` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `fpage` tinyint(1) NOT NULL DEFAULT '0',
  `innews` tinyint(1) NOT NULL DEFAULT '0',
  `devicelevel` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_views` tinyint(1) NOT NULL DEFAULT '0',
  `max_views` int NOT NULL DEFAULT '0',
  `allow_counts` tinyint(1) NOT NULL DEFAULT '0',
  `max_counts` int NOT NULL DEFAULT '0',
  `views` int NOT NULL DEFAULT '0',
  `clicks` int NOT NULL DEFAULT '0',
  `rubric` mediumint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_banners`
--

INSERT INTO `dle_banners` (`id`, `banner_tag`, `descr`, `code`, `approve`, `short_place`, `bstick`, `main`, `category`, `grouplevel`, `start`, `end`, `fpage`, `innews`, `devicelevel`, `allow_views`, `max_views`, `allow_counts`, `max_counts`, `views`, `clicks`, `rubric`) VALUES
(1, 'header', 'Верхний баннер', '<div style=\"text-align:center;\"><a href=\"https://dle-news.ru/\" target=\"_blank\"><img src=\"https://flareworld.ru/templates/Default/images/_banner_.gif\" style=\"border: none;\" alt=\"\" /></a></div>', 1, 0, 0, 0, '0', 'all', '', '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dle_banners_logs`
--

CREATE TABLE `dle_banners_logs` (
  `id` int UNSIGNED NOT NULL,
  `bid` int NOT NULL DEFAULT '0',
  `click` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_banners_rubrics`
--

CREATE TABLE `dle_banners_rubrics` (
  `id` mediumint NOT NULL,
  `parentid` mediumint NOT NULL DEFAULT '0',
  `title` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_category`
--

CREATE TABLE `dle_category` (
  `id` mediumint NOT NULL,
  `parentid` mediumint NOT NULL DEFAULT '0',
  `posi` mediumint NOT NULL DEFAULT '1',
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `alt_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `skin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `descr` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `news_sort` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `news_msort` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `news_number` smallint NOT NULL DEFAULT '0',
  `short_tpl` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `full_tpl` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `metatitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `show_sub` tinyint(1) NOT NULL DEFAULT '0',
  `allow_rss` tinyint(1) NOT NULL DEFAULT '1',
  `fulldescr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `disable_search` tinyint(1) NOT NULL DEFAULT '0',
  `disable_main` tinyint(1) NOT NULL DEFAULT '0',
  `disable_rating` tinyint(1) NOT NULL DEFAULT '0',
  `disable_comments` tinyint(1) NOT NULL DEFAULT '0',
  `enable_dzen` tinyint(1) NOT NULL DEFAULT '1',
  `enable_turbo` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_comments`
--

CREATE TABLE `dle_comments` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `autor` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `is_register` tinyint(1) NOT NULL DEFAULT '0',
  `approve` tinyint(1) NOT NULL DEFAULT '1',
  `rating` int NOT NULL DEFAULT '0',
  `vote_num` int NOT NULL DEFAULT '0',
  `parent` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_comments_files`
--

CREATE TABLE `dle_comments_files` (
  `id` int NOT NULL,
  `c_id` int NOT NULL DEFAULT '0',
  `author` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_comment_rating_log`
--

CREATE TABLE `dle_comment_rating_log` (
  `id` int UNSIGNED NOT NULL,
  `c_id` int NOT NULL DEFAULT '0',
  `member` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `rating` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_complaint`
--

CREATE TABLE `dle_complaint` (
  `id` int UNSIGNED NOT NULL,
  `p_id` int NOT NULL DEFAULT '0',
  `c_id` int NOT NULL DEFAULT '0',
  `n_id` int NOT NULL DEFAULT '0',
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `from` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_email`
--

CREATE TABLE `dle_email` (
  `id` tinyint UNSIGNED NOT NULL,
  `name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `template` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `use_html` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_email`
--

INSERT INTO `dle_email` (`id`, `name`, `template`, `use_html`) VALUES
(1, 'reg_mail', '{%username%},\r\n\r\nЭто письмо отправлено с сайта https://flareworld.ru/\r\n\r\nВы получили это письмо, так как этот e-mail адрес был использован при регистрации на сайте. Если Вы не регистрировались на этом сайте, просто проигнорируйте это письмо и удалите его. Вы больше не получите такого письма.\r\n\r\n------------------------------------------------\r\nВаш логин и пароль на сайте:\r\n------------------------------------------------\r\n\r\nЛогин: {%username%}\r\nПароль: {%password%}\r\n\r\n------------------------------------------------\r\nИнструкция по активации\r\n------------------------------------------------\r\n\r\nБлагодарим Вас за регистрацию.\r\nМы требуем от Вас подтверждения Вашей регистрации, для проверки того, что введённый Вами e-mail адрес - реальный. Это требуется для защиты от нежелательных злоупотреблений и спама.\r\n\r\nДля активации Вашего аккаунта, зайдите по следующей ссылке:\r\n\r\n{%validationlink%}\r\n\r\nЕсли и при этих действиях ничего не получилось, возможно Ваш аккаунт удалён. В этом случае, обратитесь к Администратору, для разрешения проблемы.\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/.', 0),
(2, 'feed_mail', '{%username_to%},\r\n\r\nДанное письмо вам отправил {%username_from%} с сайта https://flareworld.ru/\r\n\r\n------------------------------------------------\r\nТекст сообщения\r\n------------------------------------------------\r\n\r\n{%text%}\r\n\r\nIP адрес отправителя: {%ip%}\r\nГруппа: {%group%}\r\n\r\n------------------------------------------------\r\nПомните, что администрация сайта не несет ответственности за содержание данного письма\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0),
(3, 'lost_mail', 'Уважаемый {%username%},\r\n\r\nВы сделали запрос на получение забытого пароля на сайте https://flareworld.ru/ Однако в целях безопасности все пароли хранятся в зашифрованном виде, поэтому мы не можем сообщить вам ваш старый пароль, поэтому если вы хотите сгенерировать новый пароль, зайдите по следующей ссылке: \r\n\r\n{%lostlink%}\r\n\r\nЕсли вы не делали запроса для получения пароля, то просто удалите данное письмо, ваш пароль храниться в надежном месте, и недоступен посторонним лицам.\r\n\r\nIP адрес отправителя: {%ip%}\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0),
(4, 'new_news', 'Уважаемый администратор,\r\n\r\nуведомляем вас о том, что на сайт  https://flareworld.ru/ была добавлена новость, которая в данный момент ожидает модерации.\r\n\r\n------------------------------------------------\r\nКраткая информация о новости\r\n------------------------------------------------\r\n\r\nАвтор: {%username%}\r\nЗаголовок новости: {%title%}\r\nКатегория: {%category%}\r\nДата добавления: {%date%}\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0),
(5, 'comments', 'Уважаемый {%username_to%},\r\n\r\nуведомляем вас о том, что на сайт  https://flareworld.ru/ был добавлен комментарий к новости, на которую вы были подписаны.\r\n\r\n------------------------------------------------\r\nКраткая информация о комментарии\r\n------------------------------------------------\r\n\r\nАвтор: {%username%}\r\nДата добавления: {%date%}\r\nСсылка на новость: {%link%}\r\n\r\n------------------------------------------------\r\nТекст комментария\r\n------------------------------------------------\r\n\r\n{%text%}\r\n\r\n------------------------------------------------\r\n\r\nЕсли вы не хотите больше получать уведомлений о новых комментариях к данной новости, то проследуйте по данной ссылке: {%unsubscribe%}\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0),
(6, 'pm', 'Уважаемый {%username%},\r\n\r\nуведомляем вас о том, что на сайте  https://flareworld.ru/ вам было отправлено персональное сообщение.\r\n\r\n------------------------------------------------\r\nКраткая информация о сообщении\r\n------------------------------------------------\r\n\r\nОтправитель: {%fromusername%}\r\nДата  получения: {%date%}\r\nЗаголовок: {%title%}\r\n\r\n------------------------------------------------\r\nТекст сообщения\r\n------------------------------------------------\r\n\r\n{%text%}\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0),
(7, 'wait_mail', 'Уважаемый {%username%},\r\n\r\nВы сделали запрос на обьединение  вашего аккаунта на сайте https://flareworld.ru/ с аккаунтом в социальной сети {%network%}.  Однако в целях безопасности вам необходимо подтвердить данное действие по следующей ссылке: \r\n\r\n------------------------------------------------\r\n{%link%}\r\n------------------------------------------------\r\n\r\nЕсли вы не делали данного запроса, то просто удалите это письмо, данные вашего аккаунта хранятся в надежном месте, и недоступны посторонним лицам.\r\n\r\nIP адрес отправителя: {%ip%}\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0),
(8, 'newsletter', '<html>\r\n<head>\r\n<title>{%title%}</title>\r\n<meta content=\"text/html; charset={%charset%}\" http-equiv=Content-Type>\r\n<style type=\"text/css\">\r\nhtml,body{\r\n    font-family: Verdana;\r\n    word-spacing: 0.1em;\r\n    letter-spacing: 0;\r\n    line-height: 1.5em;\r\n    font-size: 11px;\r\n}\r\n\r\np {\r\n	margin:0px;\r\n	padding: 0px;\r\n}\r\n\r\na:active,\r\na:visited,\r\na:link {\r\n	color: #4b719e;\r\n	text-decoration:none;\r\n}\r\n\r\na:hover {\r\n	color: #4b719e;\r\n	text-decoration: underline;\r\n}\r\n</style>\r\n</head>\r\n<body>\r\n{%content%}\r\n</body>\r\n</html>', 0),
(9, 'twofactor', '{%username%},\r\n\r\nЭто письмо отправлено с сайта https://flareworld.ru/\r\n\r\nВы получили это письмо, так как для вашего аккаунта включена двухфакторная авторизация. Для авторизации на сайте вам необходимо ввести полученный вами пин-код.\r\n\r\n------------------------------------------------\r\nПин-код:\r\n------------------------------------------------\r\n\r\n{%pin%}\r\n\r\n------------------------------------------------\r\nЕсли Вы не авторизовывались на нашем сайте, то ваш пароль известен посторонним лицам. Вам нужно незамедлительно зайти на сайт под своим логином и паролем, и в своем профиле изменить свой пароль.\r\n\r\nIP пользователя который ввел пароль: {%ip%}\r\n\r\nС уважением,\r\n\r\nАдминистрация https://flareworld.ru/', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dle_files`
--

CREATE TABLE `dle_files` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `onserver` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `author` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `dcount` int NOT NULL DEFAULT '0',
  `size` bigint NOT NULL DEFAULT '0',
  `checksum` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_flood`
--

CREATE TABLE `dle_flood` (
  `f_id` int UNSIGNED NOT NULL,
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_ignore_list`
--

CREATE TABLE `dle_ignore_list` (
  `id` int UNSIGNED NOT NULL,
  `user` int NOT NULL DEFAULT '0',
  `user_from` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_images`
--

CREATE TABLE `dle_images` (
  `id` int UNSIGNED NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `author` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_links`
--

CREATE TABLE `dle_links` (
  `id` int UNSIGNED NOT NULL,
  `word` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `only_one` tinyint(1) NOT NULL DEFAULT '0',
  `replacearea` tinyint(1) NOT NULL DEFAULT '1',
  `rcount` tinyint NOT NULL DEFAULT '0',
  `targetblank` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_login_log`
--

CREATE TABLE `dle_login_log` (
  `id` int UNSIGNED NOT NULL,
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `count` smallint NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_login_log`
--

INSERT INTO `dle_login_log` (`id`, `ip`, `count`, `date`) VALUES
(4, '162.158.103.173', 3, 1585126875);

-- --------------------------------------------------------

--
-- Структура таблицы `dle_logs`
--

CREATE TABLE `dle_logs` (
  `id` int UNSIGNED NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `member` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `rating` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_lostdb`
--

CREATE TABLE `dle_lostdb` (
  `id` mediumint NOT NULL,
  `lostname` mediumint NOT NULL DEFAULT '0',
  `lostid` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_lostdb`
--

INSERT INTO `dle_lostdb` (`id`, `lostname`, `lostid`) VALUES
(10, 4, 'a00bb3a39811d75138656717be183161ac840cb1');

-- --------------------------------------------------------

--
-- Структура таблицы `dle_mail_log`
--

CREATE TABLE `dle_mail_log` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `hash` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_metatags`
--

CREATE TABLE `dle_metatags` (
  `id` int UNSIGNED NOT NULL,
  `url` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `description` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `page_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `page_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_notice`
--

CREATE TABLE `dle_notice` (
  `id` mediumint NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `notice` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_plugins`
--

CREATE TABLE `dle_plugins` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `version` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `dleversion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `versioncompare` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `mysqlinstall` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mysqlupgrade` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mysqlenable` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mysqldisable` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mysqldelete` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `filedelete` tinyint(1) NOT NULL DEFAULT '0',
  `filelist` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `upgradeurl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `needplugin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `phpinstall` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phpupgrade` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phpenable` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phpdisable` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phpdelete` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_plugins_files`
--

CREATE TABLE `dle_plugins_files` (
  `id` int NOT NULL,
  `plugin_id` int NOT NULL DEFAULT '0',
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `action` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `searchcode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `replacecode` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `searchcount` smallint NOT NULL DEFAULT '0',
  `replacecount` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_plugins_logs`
--

CREATE TABLE `dle_plugins_logs` (
  `id` int NOT NULL,
  `plugin_id` int NOT NULL DEFAULT '0',
  `area` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `error` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_pm`
--

CREATE TABLE `dle_pm` (
  `id` int UNSIGNED NOT NULL,
  `subj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user` mediumint NOT NULL DEFAULT '0',
  `user_from` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` int UNSIGNED NOT NULL DEFAULT '0',
  `pm_read` tinyint(1) NOT NULL DEFAULT '0',
  `folder` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `reply` tinyint(1) NOT NULL DEFAULT '0',
  `sendid` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_poll`
--

CREATE TABLE `dle_poll` (
  `id` mediumint UNSIGNED NOT NULL,
  `news_id` int UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `frage` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `votes` mediumint NOT NULL DEFAULT '0',
  `multiple` tinyint(1) NOT NULL DEFAULT '0',
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_poll_log`
--

CREATE TABLE `dle_poll_log` (
  `id` int UNSIGNED NOT NULL,
  `news_id` int UNSIGNED NOT NULL DEFAULT '0',
  `member` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_post`
--

CREATE TABLE `dle_post` (
  `id` int NOT NULL,
  `autor` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '2000-01-01 00:00:00',
  `short_story` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `full_story` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `xfields` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `descr` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `alt_name` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `comm_num` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `allow_comm` tinyint(1) NOT NULL DEFAULT '1',
  `allow_main` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `approve` tinyint(1) NOT NULL DEFAULT '0',
  `fixed` tinyint(1) NOT NULL DEFAULT '0',
  `allow_br` tinyint(1) NOT NULL DEFAULT '1',
  `symbol` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `metatitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_post_extras`
--

CREATE TABLE `dle_post_extras` (
  `eid` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `news_read` int NOT NULL DEFAULT '0',
  `allow_rate` tinyint(1) NOT NULL DEFAULT '1',
  `rating` int NOT NULL DEFAULT '0',
  `vote_num` int NOT NULL DEFAULT '0',
  `votes` tinyint(1) NOT NULL DEFAULT '0',
  `view_edit` tinyint(1) NOT NULL DEFAULT '0',
  `disable_index` tinyint(1) NOT NULL DEFAULT '0',
  `related_ids` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `access` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `editdate` int UNSIGNED NOT NULL DEFAULT '0',
  `editor` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `reason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `user_id` int NOT NULL DEFAULT '0',
  `disable_search` tinyint(1) NOT NULL DEFAULT '0',
  `need_pass` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_post_extras_cats`
--

CREATE TABLE `dle_post_extras_cats` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `cat_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_post_log`
--

CREATE TABLE `dle_post_log` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `expires` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `action` tinyint(1) NOT NULL DEFAULT '0',
  `move_cat` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_post_pass`
--

CREATE TABLE `dle_post_pass` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_question`
--

CREATE TABLE `dle_question` (
  `id` int NOT NULL,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_read_log`
--

CREATE TABLE `dle_read_log` (
  `id` int UNSIGNED NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_redirects`
--

CREATE TABLE `dle_redirects` (
  `id` int UNSIGNED NOT NULL,
  `from` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `to` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_rss`
--

CREATE TABLE `dle_rss` (
  `id` smallint NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allow_main` tinyint(1) NOT NULL DEFAULT '0',
  `allow_rating` tinyint(1) NOT NULL DEFAULT '0',
  `allow_comm` tinyint(1) NOT NULL DEFAULT '0',
  `text_type` tinyint(1) NOT NULL DEFAULT '0',
  `date` tinyint(1) NOT NULL DEFAULT '0',
  `search` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `max_news` tinyint NOT NULL DEFAULT '0',
  `cookie` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` smallint NOT NULL DEFAULT '0',
  `lastdate` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_rss`
--

INSERT INTO `dle_rss` (`id`, `url`, `description`, `allow_main`, `allow_rating`, `allow_comm`, `text_type`, `date`, `search`, `max_news`, `cookie`, `category`, `lastdate`) VALUES
(1, 'https://dle-news.ru/rss.xml', 'Официальный сайт DataLife Engine', 1, 1, 1, 1, 1, '<div class=\"full-post-content row\">{get}</div><div class=\"full-post-footer ignore-select\">', 5, '', 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dle_rssinform`
--

CREATE TABLE `dle_rssinform` (
  `id` smallint NOT NULL,
  `tag` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `descr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `category` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `template` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `news_max` smallint NOT NULL DEFAULT '0',
  `tmax` smallint NOT NULL DEFAULT '0',
  `dmax` smallint NOT NULL DEFAULT '0',
  `approve` tinyint(1) NOT NULL DEFAULT '1',
  `rss_date_format` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_rssinform`
--

INSERT INTO `dle_rssinform` (`id`, `tag`, `descr`, `category`, `url`, `template`, `news_max`, `tmax`, `dmax`, `approve`, `rss_date_format`) VALUES
(1, 'dle', 'Новости с Яндекса', '0', 'https://news.yandex.ru/index.rss', 'informer', 3, 0, 200, 1, 'j F Y H:i');

-- --------------------------------------------------------

--
-- Структура таблицы `dle_sendlog`
--

CREATE TABLE `dle_sendlog` (
  `id` int UNSIGNED NOT NULL,
  `user` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` int UNSIGNED NOT NULL DEFAULT '0',
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_social_login`
--

CREATE TABLE `dle_social_login` (
  `id` int NOT NULL,
  `sid` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `uid` int NOT NULL DEFAULT '0',
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `provider` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `wait` tinyint(1) NOT NULL DEFAULT '0',
  `waitlogin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_spam_log`
--

CREATE TABLE `dle_spam_log` (
  `id` int UNSIGNED NOT NULL,
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `is_spammer` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_spam_log`
--

INSERT INTO `dle_spam_log` (`id`, `ip`, `is_spammer`, `email`, `date`) VALUES
(7, '172.68.239.201', 0, 'betaxa2012@gmail.com', 1585155822),
(8, '172.68.65.88', 0, 'vladimirborodin768@gmail.com', 1585155929),
(9, '173.245.54.99', 0, '89068252346', 1585156667);

-- --------------------------------------------------------

--
-- Структура таблицы `dle_static`
--

CREATE TABLE `dle_static` (
  `id` mediumint NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `descr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `template` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allow_br` tinyint(1) NOT NULL DEFAULT '0',
  `allow_template` tinyint(1) NOT NULL DEFAULT '0',
  `grouplevel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'all',
  `tpl` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `metadescr` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `metakeys` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `views` mediumint NOT NULL DEFAULT '0',
  `template_folder` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` int UNSIGNED NOT NULL DEFAULT '0',
  `metatitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_count` tinyint(1) NOT NULL DEFAULT '1',
  `sitemap` tinyint(1) NOT NULL DEFAULT '1',
  `disable_index` tinyint(1) NOT NULL DEFAULT '0',
  `disable_search` tinyint(1) NOT NULL DEFAULT '0',
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_static`
--

INSERT INTO `dle_static` (`id`, `name`, `descr`, `template`, `allow_br`, `allow_template`, `grouplevel`, `tpl`, `metadescr`, `metakeys`, `views`, `template_folder`, `date`, `metatitle`, `allow_count`, `sitemap`, `disable_index`, `disable_search`, `password`) VALUES
(1, 'dle-rules-page', 'Общие правила на сайте', '<b>Общие правила поведения на сайте:</b><br><br>Начнем с того, что на сайте общаются сотни людей, разных религий и взглядов, и все они являются полноправными посетителями нашего сайта, поэтому если мы хотим чтобы это сообщество людей функционировало нам и необходимы правила. Мы настоятельно рекомендуем прочитать настоящие правила, это займет у вас всего минут пять, но сбережет нам и вам время и поможет сделать сайт более интересным и организованным.<br><br>Начнем с того, что на нашем сайте нужно вести себя уважительно ко всем посетителям сайта. Не надо оскорблений по отношению к участникам, это всегда лишнее. Если есть претензии - обращайтесь к Админам или Модераторам (воспользуйтесь личными сообщениями). Оскорбление других посетителей считается у нас одним из самых тяжких нарушений и строго наказывается администрацией. <b>У нас строго запрещен расизм, религиозные и политические высказывания.</b> Заранее благодарим вас за понимание и за желание сделать наш сайт более вежливым и дружелюбным.<br><br><b>На сайте строго запрещено:</b><br><br>- сообщения, не относящиеся к содержанию статьи или к контексту обсуждения<br>- оскорбление и угрозы в адрес посетителей сайта<br>- в комментариях запрещаются выражения, содержащие ненормативную лексику, унижающие человеческое достоинство, разжигающие межнациональную рознь<br>- спам, а также реклама любых товаров и услуг, иных ресурсов, СМИ или событий, не относящихся к контексту обсуждения статьи<br><br>Давайте будем уважать друг друга и сайт, на который Вы и другие читатели приходят пообщаться и высказать свои мысли. Администрация сайта оставляет за собой право удалять комментарии или часть комментариев, если они не соответствуют данным требованиям.<br><br>При нарушении правил вам может быть дано <b>предупреждение</b>. В некоторых случаях может быть дан бан <b>без предупреждений</b>. По вопросам снятия бана писать администратору.<br><br><b>Оскорбление</b> администраторов или модераторов также караются <b>баном</b> - уважайте чужой труд.<br><br><div style=\\\"text-align:center;\\\">{ACCEPT-DECLINE}</div>', 0, 1, 'all', 'rules', 'Общие правила', 'Общие правила', 289, '', 1582945347, '', 1, 0, 0, 0, ''),
(2, 'cabinet', 'Личный кабинет', 'Личный кабинет', 0, 1, '1,4', 'cabinet', 'Личный кабинет', 'Личный, кабинет', 3479, '', 1582945819, '', 1, 1, 0, 0, ''),
(3, 'shop', 'Магазин', 'Магазин', 0, 1, '1,4', 'shop', 'Магазин', 'Магазин', 1281, '', 1582948676, '', 1, 1, 1, 1, ''),
(4, 'start', 'Начать играть', 'Начать играть', 0, 1, 'all', 'start', 'Начать играть', 'Начать, играть', 783, '', 1582948694, '', 1, 1, 0, 0, ''),
(5, 'download', 'Скачать лаунчер', 'Скачать лаунчер', 0, 1, 'all', 'download', 'Скачать лаунчер', 'Скачать, лаунчер', 1036, '', 1582948715, '', 1, 1, 0, 0, ''),
(6, 'about', 'О серверах', 'О серверах', 0, 1, 'all', 'about', 'О серверах', 'серверах', 419, '', 1583122163, '', 1, 1, 0, 0, ''),
(7, 'dtm', 'DTM', 'dtm', 0, 1, 'all', 'dtm', 'dtm', '', 242, '', 1583122184, '', 1, 1, 0, 0, ''),
(8, 'galaxy', 'Galaxy', 'galaxy', 0, 1, 'all', 'galaxy', 'galaxy', 'galaxy', 561, '', 1583122205, '', 1, 1, 0, 0, ''),
(9, 'donate', 'Донат', 'donate', 0, 1, 'all', 'donate', 'donate', 'donate', 844, '', 1583124034, '', 1, 1, 0, 0, ''),
(10, 'rules_economy', 'Правила экономики', 'rules_economy', 0, 1, 'all', 'rules_economy', 'rules_economy', 'rules_economy', 57, '', 1583124123, '', 1, 1, 0, 0, ''),
(11, 'rules_moders', 'Правила для модераторов', 'rules_moders', 0, 1, 'all', 'rules_moders', 'rules_moders', 'rules_moders', 67, '', 1583124157, '', 1, 1, 0, 0, ''),
(12, 'team', 'Команда проекта', 'Команда проекта', 0, 1, 'all', 'team', 'Команда проекта', 'Команда, проекта', 219, '', 1584270326, '', 1, 1, 0, 0, ''),
(13, 'stm', 'STM', 'STM', 0, 1, 'all', 'stm', 'STM', '', 216, '', 1584441142, '', 1, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Структура таблицы `dle_static_files`
--

CREATE TABLE `dle_static_files` (
  `id` int NOT NULL,
  `static_id` int NOT NULL DEFAULT '0',
  `author` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `date` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `onserver` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `dcount` int NOT NULL DEFAULT '0',
  `size` bigint NOT NULL DEFAULT '0',
  `checksum` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_subscribe`
--

CREATE TABLE `dle_subscribe` (
  `id` int NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `news_id` int NOT NULL DEFAULT '0',
  `hash` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_tags`
--

CREATE TABLE `dle_tags` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `tag` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_twofactor`
--

CREATE TABLE `dle_twofactor` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL DEFAULT '0',
  `pin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `attempt` tinyint(1) NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_usergroups`
--

CREATE TABLE `dle_usergroups` (
  `id` smallint NOT NULL,
  `group_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_cats` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allow_adds` tinyint(1) NOT NULL DEFAULT '1',
  `cat_add` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allow_admin` tinyint(1) NOT NULL DEFAULT '0',
  `allow_addc` tinyint(1) NOT NULL DEFAULT '0',
  `allow_editc` tinyint(1) NOT NULL DEFAULT '0',
  `allow_delc` tinyint(1) NOT NULL DEFAULT '0',
  `edit_allc` tinyint(1) NOT NULL DEFAULT '0',
  `del_allc` tinyint(1) NOT NULL DEFAULT '0',
  `moderation` tinyint(1) NOT NULL DEFAULT '0',
  `allow_all_edit` tinyint(1) NOT NULL DEFAULT '0',
  `allow_edit` tinyint(1) NOT NULL DEFAULT '0',
  `allow_pm` tinyint(1) NOT NULL DEFAULT '0',
  `max_pm` smallint NOT NULL DEFAULT '0',
  `max_foto` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_files` tinyint(1) NOT NULL DEFAULT '0',
  `allow_hide` tinyint(1) NOT NULL DEFAULT '1',
  `allow_short` tinyint(1) NOT NULL DEFAULT '0',
  `time_limit` tinyint(1) NOT NULL DEFAULT '0',
  `rid` smallint NOT NULL DEFAULT '0',
  `allow_fixed` tinyint(1) NOT NULL DEFAULT '0',
  `allow_feed` tinyint(1) NOT NULL DEFAULT '1',
  `allow_search` tinyint(1) NOT NULL DEFAULT '1',
  `allow_poll` tinyint(1) NOT NULL DEFAULT '1',
  `allow_main` tinyint(1) NOT NULL DEFAULT '1',
  `captcha` tinyint(1) NOT NULL DEFAULT '0',
  `icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_modc` tinyint(1) NOT NULL DEFAULT '0',
  `allow_rating` tinyint(1) NOT NULL DEFAULT '1',
  `allow_offline` tinyint(1) NOT NULL DEFAULT '0',
  `allow_image_upload` tinyint(1) NOT NULL DEFAULT '0',
  `allow_file_upload` tinyint(1) NOT NULL DEFAULT '0',
  `allow_signature` tinyint(1) NOT NULL DEFAULT '0',
  `allow_url` tinyint(1) NOT NULL DEFAULT '1',
  `news_sec_code` tinyint(1) NOT NULL DEFAULT '1',
  `allow_image` tinyint(1) NOT NULL DEFAULT '0',
  `max_signature` smallint NOT NULL DEFAULT '0',
  `max_info` smallint NOT NULL DEFAULT '0',
  `admin_addnews` tinyint(1) NOT NULL DEFAULT '0',
  `admin_editnews` tinyint(1) NOT NULL DEFAULT '0',
  `admin_comments` tinyint(1) NOT NULL DEFAULT '0',
  `admin_categories` tinyint(1) NOT NULL DEFAULT '0',
  `admin_editusers` tinyint(1) NOT NULL DEFAULT '0',
  `admin_wordfilter` tinyint(1) NOT NULL DEFAULT '0',
  `admin_xfields` tinyint(1) NOT NULL DEFAULT '0',
  `admin_userfields` tinyint(1) NOT NULL DEFAULT '0',
  `admin_static` tinyint(1) NOT NULL DEFAULT '0',
  `admin_editvote` tinyint(1) NOT NULL DEFAULT '0',
  `admin_newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `admin_blockip` tinyint(1) NOT NULL DEFAULT '0',
  `admin_banners` tinyint(1) NOT NULL DEFAULT '0',
  `admin_rss` tinyint(1) NOT NULL DEFAULT '0',
  `admin_iptools` tinyint(1) NOT NULL DEFAULT '0',
  `admin_rssinform` tinyint(1) NOT NULL DEFAULT '0',
  `admin_googlemap` tinyint(1) NOT NULL DEFAULT '0',
  `allow_html` tinyint(1) NOT NULL DEFAULT '1',
  `group_prefix` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `group_suffix` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allow_subscribe` tinyint(1) NOT NULL DEFAULT '0',
  `allow_image_size` tinyint(1) NOT NULL DEFAULT '0',
  `cat_allow_addnews` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `flood_news` smallint NOT NULL DEFAULT '0',
  `max_day_news` smallint NOT NULL DEFAULT '0',
  `force_leech` tinyint(1) NOT NULL DEFAULT '0',
  `edit_limit` smallint NOT NULL DEFAULT '0',
  `captcha_pm` tinyint(1) NOT NULL DEFAULT '0',
  `max_pm_day` smallint NOT NULL DEFAULT '0',
  `max_mail_day` smallint NOT NULL DEFAULT '0',
  `admin_tagscloud` tinyint(1) NOT NULL DEFAULT '0',
  `allow_vote` tinyint(1) NOT NULL DEFAULT '0',
  `admin_complaint` tinyint(1) NOT NULL DEFAULT '0',
  `news_question` tinyint(1) NOT NULL DEFAULT '0',
  `comments_question` tinyint(1) NOT NULL DEFAULT '0',
  `max_comment_day` smallint NOT NULL DEFAULT '0',
  `max_images` smallint NOT NULL DEFAULT '0',
  `max_files` smallint NOT NULL DEFAULT '0',
  `disable_news_captcha` smallint NOT NULL DEFAULT '0',
  `disable_comments_captcha` smallint NOT NULL DEFAULT '0',
  `pm_question` tinyint(1) NOT NULL DEFAULT '0',
  `captcha_feedback` tinyint(1) NOT NULL DEFAULT '1',
  `feedback_question` tinyint(1) NOT NULL DEFAULT '0',
  `files_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `max_file_size` mediumint NOT NULL DEFAULT '0',
  `files_max_speed` smallint NOT NULL DEFAULT '0',
  `spamfilter` tinyint(1) NOT NULL DEFAULT '2',
  `allow_comments_rating` tinyint(1) NOT NULL DEFAULT '1',
  `max_edit_days` tinyint(1) NOT NULL DEFAULT '0',
  `spampmfilter` tinyint(1) NOT NULL DEFAULT '0',
  `force_reg` tinyint(1) NOT NULL DEFAULT '0',
  `force_reg_days` mediumint NOT NULL DEFAULT '0',
  `force_reg_group` smallint NOT NULL DEFAULT '4',
  `force_news` tinyint(1) NOT NULL DEFAULT '0',
  `force_news_count` mediumint NOT NULL DEFAULT '0',
  `force_news_group` smallint NOT NULL DEFAULT '4',
  `force_comments` tinyint(1) NOT NULL DEFAULT '0',
  `force_comments_count` mediumint NOT NULL DEFAULT '0',
  `force_comments_group` smallint NOT NULL DEFAULT '4',
  `force_rating` tinyint(1) NOT NULL DEFAULT '0',
  `force_rating_count` mediumint NOT NULL DEFAULT '0',
  `force_rating_group` smallint NOT NULL DEFAULT '4',
  `not_allow_cats` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allow_up_image` tinyint(1) NOT NULL DEFAULT '0',
  `allow_up_watermark` tinyint(1) NOT NULL DEFAULT '0',
  `allow_up_thumb` tinyint(1) NOT NULL DEFAULT '0',
  `up_count_image` smallint NOT NULL DEFAULT '0',
  `up_image_side` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `up_image_size` mediumint NOT NULL DEFAULT '0',
  `up_thumb_size` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_mail_files` tinyint(1) NOT NULL DEFAULT '0',
  `max_mail_files` smallint NOT NULL DEFAULT '0',
  `max_mail_allfiles` mediumint NOT NULL DEFAULT '0',
  `mail_files_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `video_comments` tinyint(1) NOT NULL DEFAULT '0',
  `media_comments` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_usergroups`
--

INSERT INTO `dle_usergroups` (`id`, `group_name`, `allow_cats`, `allow_adds`, `cat_add`, `allow_admin`, `allow_addc`, `allow_editc`, `allow_delc`, `edit_allc`, `del_allc`, `moderation`, `allow_all_edit`, `allow_edit`, `allow_pm`, `max_pm`, `max_foto`, `allow_files`, `allow_hide`, `allow_short`, `time_limit`, `rid`, `allow_fixed`, `allow_feed`, `allow_search`, `allow_poll`, `allow_main`, `captcha`, `icon`, `allow_modc`, `allow_rating`, `allow_offline`, `allow_image_upload`, `allow_file_upload`, `allow_signature`, `allow_url`, `news_sec_code`, `allow_image`, `max_signature`, `max_info`, `admin_addnews`, `admin_editnews`, `admin_comments`, `admin_categories`, `admin_editusers`, `admin_wordfilter`, `admin_xfields`, `admin_userfields`, `admin_static`, `admin_editvote`, `admin_newsletter`, `admin_blockip`, `admin_banners`, `admin_rss`, `admin_iptools`, `admin_rssinform`, `admin_googlemap`, `allow_html`, `group_prefix`, `group_suffix`, `allow_subscribe`, `allow_image_size`, `cat_allow_addnews`, `flood_news`, `max_day_news`, `force_leech`, `edit_limit`, `captcha_pm`, `max_pm_day`, `max_mail_day`, `admin_tagscloud`, `allow_vote`, `admin_complaint`, `news_question`, `comments_question`, `max_comment_day`, `max_images`, `max_files`, `disable_news_captcha`, `disable_comments_captcha`, `pm_question`, `captcha_feedback`, `feedback_question`, `files_type`, `max_file_size`, `files_max_speed`, `spamfilter`, `allow_comments_rating`, `max_edit_days`, `spampmfilter`, `force_reg`, `force_reg_days`, `force_reg_group`, `force_news`, `force_news_count`, `force_news_group`, `force_comments`, `force_comments_count`, `force_comments_group`, `force_rating`, `force_rating_count`, `force_rating_group`, `not_allow_cats`, `allow_up_image`, `allow_up_watermark`, `allow_up_thumb`, `up_count_image`, `up_image_side`, `up_image_size`, `up_thumb_size`, `allow_mail_files`, `max_mail_files`, `max_mail_allfiles`, `mail_files_type`, `video_comments`, `media_comments`) VALUES
(1, 'Администраторы', 'all', 1, 'all', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 50, '101', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, '{THEME}/images/icon_1.gif', 0, 1, 1, 1, 1, 1, 1, 0, 1, 500, 1000, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '<b><span style=\"color:red\">', '</span></b>', 1, 1, 'all', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'zip,rar,exe,doc,pdf,swf', 4096, 0, 2, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, '', 1, 1, 1, 3, '800x600', 300, '200x150', 1, 3, 1000, 'jpg,png,zip,pdf', 1, 1),
(2, 'Главные редакторы', 'all', 1, 'all', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 50, '101', 1, 1, 1, 0, 2, 1, 1, 1, 1, 1, 0, '{THEME}/images/icon_2.gif', 0, 1, 0, 1, 1, 1, 1, 0, 1, 500, 1000, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', '', 1, 1, 'all', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'zip,rar,exe,doc,pdf,swf', 4096, 0, 2, 1, 0, 0, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0, 2, '', 1, 1, 1, 3, '800x600', 300, '200x150', 1, 3, 1000, 'jpg,png,zip,pdf', 1, 1),
(3, 'Журналисты', 'all', 1, 'all', 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 50, '101', 1, 1, 1, 0, 3, 0, 1, 1, 1, 1, 0, '{THEME}/images/icon_3.gif', 0, 1, 0, 1, 1, 1, 1, 0, 1, 500, 1000, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', '', 1, 1, 'all', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'zip,rar,exe,doc,pdf,swf', 4096, 0, 2, 1, 0, 0, 0, 0, 3, 0, 0, 3, 0, 0, 3, 0, 0, 3, '', 1, 1, 1, 3, '800x600', 300, '200x150', 0, 3, 1000, 'jpg,png,zip,pdf', 1, 1),
(4, 'Посетители', 'all', 1, 'all', 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 20, '101', 1, 1, 1, 0, 4, 0, 1, 1, 1, 1, 0, '{THEME}/images/icon_4.gif', 0, 1, 0, 1, 0, 1, 1, 1, 0, 500, 1000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', '', 1, 0, 'all', 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 'zip,rar,exe,doc,pdf,swf', 4096, 0, 2, 1, 0, 2, 0, 0, 4, 0, 0, 4, 0, 0, 4, 0, 0, 4, '', 0, 0, 0, 1, '800x600', 300, '200x150', 0, 3, 1000, 'jpg,png,zip,pdf', 0, 0),
(5, 'Гости', 'all', 0, 'all', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', 1, 0, 1, 0, 5, 0, 1, 1, 1, 0, 1, '{THEME}/images/icon_5.gif', 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 'all', 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, '', 0, 0, 2, 1, 0, 2, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, '', 0, 0, 0, 1, '800x600', 300, '200x150', 0, 3, 1000, 'jpg,png,zip,pdf', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `dle_users`
--

CREATE TABLE `dle_users` (
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `user_id` int NOT NULL,
  `news_num` mediumint NOT NULL DEFAULT '0',
  `comm_num` mediumint NOT NULL DEFAULT '0',
  `user_group` smallint NOT NULL DEFAULT '4',
  `lastdate` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `reg_date` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `banned` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `allow_mail` tinyint(1) NOT NULL DEFAULT '1',
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `signature` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `land` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `favorites` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pm_all` smallint NOT NULL DEFAULT '0',
  `pm_unread` smallint NOT NULL DEFAULT '0',
  `time_limit` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `xfields` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `allowed_ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `hash` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `logged_ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `restricted` tinyint(1) NOT NULL DEFAULT '0',
  `restricted_days` smallint NOT NULL DEFAULT '0',
  `restricted_date` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `timezone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `news_subscribe` tinyint(1) NOT NULL DEFAULT '0',
  `comments_reply_subscribe` tinyint(1) NOT NULL DEFAULT '0',
  `twofactor_auth` tinyint(1) NOT NULL DEFAULT '0',
  `cat_add` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `cat_allow_addnews` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `money` int NOT NULL,
  `econs` int NOT NULL,
  `cases` int NOT NULL,
  `votes` int NOT NULL,
  `votes_top` int NOT NULL,
  `votes_time` int NOT NULL,
  `rank` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `uuid` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `accessToken` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `serverID` varchar(41) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `discord_token` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'false',
  `discord_id` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `discord_username` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `discord_discriminator` int NOT NULL,
  `donate_time_DTM` int NOT NULL,
  `donate_DTM` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donate_time_SkyTechnoMagic` int NOT NULL,
  `donate_SkyTechnoMagic` varchar(160) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `donate_Galaxy` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `donate_time_Galaxy` int NOT NULL,
  `donate_LavaTech` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `donate_time_LavaTech` int NOT NULL,
  `x` double NOT NULL,
  `y` double NOT NULL,
  `z` double NOT NULL,
  `code` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `referal` varchar(160) COLLATE utf8mb4_general_ci NOT NULL,
  `playtime` int NOT NULL,
  `referal_active` int NOT NULL,
  `radio_admin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_users`
--

INSERT INTO `dle_users` (`email`, `password`, `name`, `user_id`, `news_num`, `comm_num`, `user_group`, `lastdate`, `reg_date`, `banned`, `allow_mail`, `info`, `signature`, `foto`, `fullname`, `land`, `favorites`, `pm_all`, `pm_unread`, `time_limit`, `xfields`, `allowed_ip`, `hash`, `logged_ip`, `restricted`, `restricted_days`, `restricted_date`, `timezone`, `news_subscribe`, `comments_reply_subscribe`, `twofactor_auth`, `cat_add`, `cat_allow_addnews`, `money`, `econs`, `cases`, `votes`, `votes_top`, `votes_time`, `rank`, `uuid`, `accessToken`, `serverID`, `discord_token`, `discord_id`, `discord_username`, `discord_discriminator`, `donate_time_DTM`, `donate_DTM`, `donate_time_SkyTechnoMagic`, `donate_SkyTechnoMagic`, `donate_Galaxy`, `donate_time_Galaxy`, `donate_LavaTech`, `donate_time_LavaTech`, `x`, `y`, `z`, `code`, `referal`, `playtime`, `referal_active`, `radio_admin`) VALUES
('admin@flareworld.ru', '$2y$10$H2fl5BNBiwW9S1I3yc0tGeKP/OOyBstcEaibKseH5yK6VyGQ3o876', 'FlipFlare', 1, 0, 0, 1, '1585154038', '1582945347', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a919592945edc46d36e06437c605e526', '162.158.63.232', 0, 0, '', '', 0, 0, 0, '', '', 98990, 1434830, 21604, 7, 0, 0, '', '8790c735-5acc-11ea-adca-525400462574', '6abe99c382210aad105464b3e06b99cb', '7be526d42b43bc66c58a3f41e569c07c6531fe7d', 'false', '0', '', 0, 1585564984, 'vip', 1586950498, 'ultra', '', 0, 'ultra', 1587294657, 0, 0, 0, '123456', '', 435, 0, 1),
('1809924141@qq.com', '$2y$10$9gf1LooRLIFHYdGTwLhrN.y0i4oMUinpFMazHtz2nDkJzzqnkOPdG', 'luxing', 2, 0, 0, 4, '1582945984', '1582945984', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '66aa43c29c3ad2797119364581fb48b6', '162.158.7.92', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8c32fc40-5acc-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('eivan2020@mail.ru', '$2y$10$C1KoVXqs5PSIskA6Y1FmSeFcOLagLFBV8l1vaXc0mLrGoITATck5e', '1manax', 3, 0, 0, 4, '1584952311', '1582949574', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '91c25719ac13ac25ef9019952539f925', '172.68.182.19', 0, 0, '', '', 0, 0, 0, '', '', 0, 72000, 0, 8, 0, 0, '', '907ff9c6-5acc-11ea-adca-525400462574', '136a5e25c3dfc3651c15556738fb48c3', '-62b91c3d0528449239dc9c57f8475f35648bdac6', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('hoperpro228@gmail.com', '$2y$10$hSolZ/KRnQ5srcIC.CYDZuItvmEj.OUEczVF6YH.twZzJvthpW7V.', 'Strateg', 4, 0, 0, 4, '1584673418', '1582955707', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'fbc4e5ca81a35d4e00c23014259500f0', '162.158.183.39', 0, 0, '', '', 0, 0, 0, '', '', 75, 40000, 4, 5, 0, 0, '', '956bea83-5acc-11ea-adca-525400462574', 'eb74f00d732804c959e92a24ac631a48', '-780818ca0f4c7f1ff67ddfd4ed585791a83c47cd', 'vmSLVdKg4aGJC6CVEwWB8ch3RFKvOd', '671364885309030402', 'faraon4ik', 5590, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('taushev36@gmail.com', '$2y$10$QzkotUbpPIFsmZYl3GQkmOUHnzkZQz3KmWL7K6OvZmO3SvWVZ13m.', 'Merlis', 6, 0, 0, 4, '1583149629', '1582956115', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '35308e62e5af3d369e2ef83f9be96d4a', '172.68.11.104', 0, 0, '', '', 0, 0, 0, '', '', 5, 32000, 0, 4, 0, 0, '', '9bcdad08-5acc-11ea-adca-525400462574', '360d7731d2bb6a633bd7f2f9f514fe59', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 20, 0, 0),
('kenzo.roma.game@gmail.com', '$2y$10$zh04LTr/PSj9D6oKmfvvWeVPnm0tzcNPSnySAutO7eaxh//P5nuYS', 'PROGRESSIVE', 7, 0, 0, 4, '1582957311', '1582957311', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9b6cd4250fd835fb3a376228c973b115', '172.68.10.121', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b2eb7908-5acc-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('s.w.a.t.l.a.p.d.0202@mail.ru', '$2y$10$AoF21QC0wpCh9jUOJp2vReCYlLaQ6YV8UUqpHQei5oJAybupuWPoe', 'UNIVERSUM', 8, 0, 0, 4, '1585111889', '1582957576', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '0c2762f8ac8375350c3dc25776ac04e2', '172.68.246.113', 0, 0, '', '', 0, 0, 0, '', '', 0, 6428900, 8, 103, 0, 1585111952, '', 'b9744dd7-5acc-11ea-adca-525400462574', '49fffe9f742acbeca1d726017af27089', '7c1b9af83a03ce4863a36b983d421f086b29ef05', 'false', '0', '', 0, 1585732687, 'premium', 1587459450, 'vip', '', 0, '', 0, 0, 0, 0, '', '', 346, 0, 0),
('ningacreeeeapaa@gmail.com', '$2y$10$CcUDObmnszYSqX8IhEhFAubZGo1OA7jxt.Gr/I3Bqo7M/ArqkKMyu', 'GosteMine', 9, 0, 0, 4, '1585063151', '1582957926', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b5917245275c3127d427102911f77d91', '162.158.79.63', 0, 0, '', '', 0, 0, 0, '', '', 215, 32000, 0, 4, 0, 0, '', 'bf71a246-5acc-11ea-adca-525400462574', '86794dc1966aafac0b7f6501d65e0ba6', NULL, 'false', '0', '', 0, 1585824463, 'grand', 0, '', '', 0, 'grand', 1587393003, 0, 0, 0, '', '', 0, 0, 0),
('gorohov.kirill051107@gmail.com', '$2y$10$UQKKi7kXS.7JpmCNa/8zrOuuhCU6h8wXoyHnI0HsM1KJYoJPKDdb6', 'Prizrak111', 10, 0, 0, 4, '1583493638', '1582958797', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3257ff50a0f293e8f392eba19d70cb9a', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 200, 0, 0, 0, 0, 0, '', 'c9b28eee-5acc-11ea-adca-525400462574', 'b2d6ad303e0dc62fdfe5b5b1b959c89d', '30cd593938dbe01add26189418821bfe05b67434', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Mafioznic028@mail.ru', '$2y$10$NtNw45ICLpjMnXqaGkcY6.Yn1o5yqEfV0/c0xnrNoTRZw2.ZQ4Ffm', 'lightRaid', 11, 0, 0, 4, '1583923201', '1582959012', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b2b5d15ef1e330a4e8618e2c5e9aacd6', '162.158.92.229', 0, 0, '', '', 0, 0, 0, '', '', 0, 24000, 0, 3, 0, 0, '', 'cdbcd71b-5acc-11ea-adca-525400462574', '232d29ded6661996aa5a704f9916029e', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('and.arkhangel@mail.ru', '$2y$10$RhHHsr8seQzd804I9UgpOe.a3LoW9rkc210YRO8tBV9NLnLGnJKY2', 'Arkhangel', 12, 0, 0, 4, '1584904700', '1582959230', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b400db9a48152f0a31d90354599be224', '172.69.10.86', 0, 0, '', '', 0, 0, 0, '', '', 11, 384384, 0, 8, 0, 0, '', 'd1ba0b1c-5acc-11ea-adca-525400462574', '8e15aa1a27e5c23aef9872143c539237', NULL, 'false', '0', '', 0, 1585775598, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('26ashura26@gmail.com', '$2y$10$.Y9JUIUgcWDLphp.cpMjDunpoYuXrDiCnfN.QTzTGym8jgk38Liru', 'ashura', 13, 0, 0, 4, '1582960325', '1582960325', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6f248e3869fc966563728c9736fbe6ac', '172.68.238.103', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'da85ccae-5acc-11ea-adca-525400462574', '497be7bd062c19856f28509177be52e2', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('megakingstandoff2@yandex.ru', '$2y$10$BbaOVPZHb.Y62X2Pqs1C.ukAocx2Z7UxrhaacbQAtPimG/82d5voW', 'peoPL', 14, 0, 0, 4, '1582975023', '1582960356', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a25babf28a1d688e415d99d1bc0484a0', '162.158.93.84', 0, 0, '', '', 0, 0, 0, '', '', 200, 8000, 0, 1, 0, 0, '', 'dfed541c-5acc-11ea-adca-525400462574', 'e021cc94af6b4501cbe6d4609725230d', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('xydoghukcsgo@yandex.ru', '$2y$10$sCeDgyybKJ.ONBd76/lTKecRI0KGNwug1QMq6OgDrlCvn4tLN/BCe', 's3xtape', 15, 0, 0, 4, '1582960930', '1582960930', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1716d21028f75af0d83184c015b8d237', '162.158.183.80', 0, 0, '', '', 0, 0, 0, '', '', 0, 40000, 2, 5, 0, 0, '', '1f9fe49d-5ace-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('yatebyavochkoproyebashu@yandex.ru', '$2y$10$bvECbGDG4kMRC1rIpguETOfrSxMmIWpXv6TQXqGPciogBU7kOwx.y', 'myamya', 16, 0, 0, 4, '1582961131', '1582961131', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c10735a7ab7d2f96e6985d981d66334f', '162.158.94.125', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '24a2f7fd-5ace-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('tihonovvlad019@gmail.com', '$2y$10$T0qEdeId4QcHgm8G9U4dGel/bjf3Y4dOF.UZ6fI/3ODz2LTDW7Rn6', 'MichaelMyers', 17, 0, 0, 4, '1582961268', '1582961268', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ab941cbffe83751c7827591e99ba5690', '172.68.245.52', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '28ecd460-5ace-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Grifon595@yandex.ru', '$2y$10$PH5NZNAHTK00rRuY74D0Ce7p7DBPNPTUyzcLt/Xd8MleBLMpvbYGu', 'Grifon11', 18, 0, 0, 4, '1583315432', '1582961659', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '4c8941db99941dde37474804079cb159', '172.68.182.188', 0, 0, '', '', 0, 0, 0, '', '', 0, 14000, 0, 8, 0, 0, '', '2d9f4ae3-5ace-11ea-adca-525400462574', 'a644065f11d8e4f1750a141dd49b0be1', '-62cafc79de70c6c0778ba6387fad515a85615978', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 6, 0, 0),
('Trufanov.ivan.a@yandex.kz', '$2y$10$0P9zW5u.e6h7iv/22mPseevHmIzzGynfSMF/86UEnTyxw9QD.VloO', 'ServerBot', 19, 0, 0, 4, '1582963544', '1582963544', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'aabed77119b2cdd38062ef703c62cd46', '172.68.10.35', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '317f33a3-5ace-11ea-adca-525400462574', '8eddb20980b959e98105b237cdf80bb3', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('trufanov.ivan.a@ya.ru', '$2y$10$otDCmZ28EyclOWbyFG8AVeyZQtwl1DvqgYjVy3zRH.KGouEvV1U6S', 'ServerBot2', 20, 0, 0, 4, '1582963606', '1582963606', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '58d3dd0df47411569de25d28cc758b0a', '172.68.10.35', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3e4e374b-5ace-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('danil12.11m@mail.ru', '$2y$10$YIzkt6061A92NUa/oRystOx7AbAZWI3ADee6beBSIM/hd0CVNGdXi', 'vivikl', 21, 0, 0, 1, '1585139752', '1582964267', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '17ea1250a234dfa883dfbcdc75a5bddc', '162.158.78.116', 0, 0, '', '', 0, 0, 0, '', '', 165, 32000, 0, 8, 0, 1585020050, '', 'f8491372-5acb-11ea-adca-525400462574', '2de48d8292d97ee213eea7d2fdbd156f', '-60ecfdf96d3404b462682e64849279e518d55eb5', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 400, 0, 0),
('ernest20020509@gmail.com', '$2y$10$3pZhXt4zZIU43HfYl3rjtOiqanz6jXNQADYFq1mNBVMYpYLsLSO6e', 'Ernest', 22, 0, 0, 4, '1584710223', '1582964865', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '92d13a9a21c52ac8285f0512e5c76df8', '162.158.92.86', 0, 0, '', '', 0, 0, 0, '', '', 12, 344000, 15, 43, 0, 1583815029, '', '5c8d3188-5acd-11ea-adca-525400462574', '724ae9582d856d25cba41b23e95d38f0', '-3a90b42b17b8d52a14e2e523048e7c4fc949a75b', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ft75@mail.ru', '$2y$10$Jj0v9YP0HvDYw2IQzZ2EFOFMDw3dGNQ6c7QcEopHwZZHNys9l29zi', 'DomineDeus', 23, 0, 0, 4, '1584905417', '1582966410', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'fa29bebbd5850cf6632595b767009537', '172.68.244.106', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 1, 4, 0, 0, '', 'f5486ccd-5ad0-11ea-adca-525400462574', 'c814e66f0ca32822c893a37cdd930d84', NULL, 'false', '0', '', 0, 1585756559, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dementew1999@mail.ru', '$2y$10$fdw296rkS0m7Yk0hqNS./.MdNYgtuyQ3ICD5tiRVXzjeaR7dy.TWe', 'diego08', 24, 0, 0, 4, '1584675530', '1582968615', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b65f43f807244d7feeb8c442e4f181a7', '141.101.69.139', 0, 0, '', '', 0, 0, 0, '', '', 305, 32000, 0, 4, 0, 0, '', '17ce9dc7-5ad6-11ea-adca-525400462574', '5187382c0369cae97034dc70816b875c', '64b58ed8444a39a5ad86591fd97ff7f3d67c8e1a', 'false', '0', '', 0, 1585751329, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('bogdanprotsenko674@gmail.cpm', '$2y$10$Rwa/QwM.qnOxXPSbV/eHjeaKGU40/K8q5ThkdpljEt5CiALheXpv.', '666Demon666', 25, 0, 0, 4, '1582985974', '1582969028', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5287b29763711f8a43a6b7950a29ec9f', '172.68.246.47', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '0deaa01c-5ad7-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('zhenya.ruden@gmail.com', '$2y$10$PJMDBXBy7aUgRLchtqHpTONIjRokgZ2A943vJqq2Ly2r2DvVw7kdG', 'MozG', 26, 0, 0, 1, '1584951526', '1582970011', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '602e12362b1962eede578581690c9bb2', '172.68.239.217', 0, 0, '', '', 0, 0, 0, '', '', 11995984, 10000019, 9998, 0, 0, 0, '', '57a196f6-5ad9-11ea-adca-525400462574', '685fcf5d872e9f174de519358c40ed95', NULL, 'Vp0NbAa5c884dO7wzUFa3yjmblOd58', '350568817090625546', 'Мозг', 3469, 1593556491, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 250, 0, 0),
('salat91@list.ru', '$2y$10$OGDbVu.2aGirKaegELEFyOUdlgtNzcrTcTpsxy5vofYZ1lyrKDgkS', 'WildYakeeGun', 27, 0, 0, 4, '1585072373', '1582972150', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b314e2170d450f89eb0e90020410d89c', '172.68.10.46', 0, 0, '', '', 0, 0, 0, '', '', 200, 6250681, 0, 54, 0, 1584714238, '', 'edf05a88-5ae2-11ea-adca-525400462574', '0aed7faddc2862fb1b0ff58ae92ae6e8', '18e05e7bd931923a10ec3a1fa101e71dd2a65879', 'false', '0', '', 0, 1585564972, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 441, 0, 0),
('aremezaf@gmail.com', '$2y$10$71eKZI5eCG4FEcWmsqkdiOK6TFPqE2gysu/Lcr7lxVwsKELybTAf6', 'LeGiNdARiYm', 28, 0, 0, 4, '1585129415', '1582972807', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '0a24f7f31026ded5a98bb0115064d0ab', '162.158.92.163', 0, 0, '', '', 0, 0, 0, '', '', 0, 80000, 10, 18, 0, 1585079677, '', 'da70f22a-5adf-11ea-adca-525400462574', '268fd2638e0cb697ba0d8c720a6a0a78', '-1928d7675d88f9c75134544a4a11e2261c5cef04', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 600, 0, 0),
('antonmamonov199@gmail.com', '$2y$10$T1AjE9Tzqg0Mixj3JDnHuuTL7c0GelwnYJLnGUiJSZLV8LZ374qpS', 'WildCat', 29, 0, 0, 4, '1582975084', '1582975084', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '635a5f82ea4732a30621db68322acb06', '172.68.245.208', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '27416240-5ae5-11ea-adca-525400462574', '314a9a1e37e106bb7466d63ca519092e', '-3f551cb0026de6030da840f3cf685eecd5b802d9', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('4underwater@mail.ru', '$2y$10$CT9uu49G.LLgkzl9zu2N.emuqGEN8nghrbmtPcArsYtJPiV83RVUG', 'Ahmed', 30, 0, 0, 4, '1582975301', '1582975301', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '22a65e0ffa5b9579e133d346a0409f68', '172.68.239.222', 0, 0, '', '', 0, 0, 0, '', '', 200, 0, 0, 0, 0, 0, '', 'a8f80574-5ae5-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('gatdyblr123@mail.ru', '$2y$10$wIbRNg2Vpz6EQOR9PgaXpeoGCHkS4btEy1K.EK7kV0x5TgwDgKUv2', 'Thijd', 31, 0, 0, 4, '1583052665', '1582975965', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f2d9da02def1117cd417d0459b01c190', '172.69.10.169', 0, 0, '', '', 0, 0, 0, '', '', 20, 0, 0, 5, 0, 0, '', '34e8d3c3-5ae7-11ea-adca-525400462574', '1f49b961c3a188e480386fe6c0bd0bb4', '314a3d5e6297c67450e95889d87406f505e5686f', 'false', '0', '', 0, 1585569655, 'premium', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dron337dron@gmail.com', '$2y$10$ErQRrckjE3TCYnkzK5sXtey7GLQzYaS/bFMUx6bnmJrzXLmRwjzPm', 'Rixens1337', 32, 0, 0, 4, '1583065728', '1582976175', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6746699879fdceb49d01a1f2aaaa6f85', '172.69.10.79', 0, 0, '', '', 0, 0, 0, '', '', 20, 0, 0, 5, 0, 0, '', 'b19f8541-5ae7-11ea-adca-525400462574', '3e6036b25c1da87e0fcc3b15050697a7', '3974718bf890b45c4027f924225d776372cb43b7', 'false', '0', '', 0, 1585569018, 'premium', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('igorek_egorov_1999@mail.ru', '$2y$10$jDYJf/DNLKFK7hcLATPKyexrUlt70SZP7gk8RTt742BAXRg3zFyK.', 'KotyaRa667', 33, 0, 0, 4, '1584278656', '1582976248', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '24388e104781df19cc6f798d2c33530c', '172.68.244.147', 0, 0, '', '', 0, 0, 0, '', '', 500, 0, 0, 0, 0, 0, '', 'dd306e36-5ae7-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kjklllka@gmail.com', '$2y$10$UGJB51EdILu4qVFeQAHGh.xGOB5.MpbqbxnC8eWHuf7mVLqdXnqDm', 'kjklllka', 34, 0, 0, 4, '1582976609', '1582976609', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '82964fde35523b30827ed17e903d8767', '172.68.11.212', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b45e0cfe-5ae8-11ea-adca-525400462574', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('daniels.skerbergs@gmail.com', '$2y$10$WX5vUDhvY69fcMW9MJ16JuscbKKKisxWuH.z1XtQajG9Fev9aFv0.', 'MrEpic', 35, 0, 0, 4, '1585140993', '1582976921', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e2f92d5f6fc16f831f9892e7818978ca', '172.69.194.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 11, 0, 1584525714, '', '6e4ad93b-5ae9-11ea-adca-525400462574', '7156b45af54d41515b5bd5fd66500dc3', NULL, 'false', '0', '', 0, 0, '', 1587116952, 'ultra', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dimdamir@mail.ru', '$2y$10$HqPrXgO65oDHwdkBtsROb.cAYftQn/IeCQHwhUPKwPWM9HxtIymmu', 'XacF', 36, 0, 0, 4, '1582980560', '1582980560', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '562f1f0c90712084872940fef0df5b56', '162.158.88.29', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 0, '', 'e7c0b32d-5af1-11ea-adca-525400462574', '7d0cfe5f788f6c74f3563aadd6319441', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('nekit.groshev@gmail.com', '$2y$10$REIL8LxpCN.tLDB/RSi.xOptDZbY5pY3Qvcg84IRerZHPNQHMIFdi', 'Mirus', 37, 0, 0, 4, '1584982521', '1582981850', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'fd635669cb8cfc62069cbb9c58a97463', '162.158.202.176', 0, 0, '', '', 0, 0, 0, '', '', 141, 0, 0, 8, 0, 0, '', 'e8607307-5af4-11ea-adca-525400462574', '75b5ffee3d65f87d181c0edd6104468b', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 240, 0, 0),
('opa_opa_amerika_ewropa@mail.ru', '$2y$10$IiH8JviQvdAdEyJvpkeuteFcPg6UQtOkw8.3COtoB08xlD10UgKEC', 'opaopa', 38, 0, 0, 4, '1584783309', '1582984637', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e474b70e4df9d32149ad701f5268ccd6', '172.69.63.253', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 1, 4, 0, 0, '', '65bb17f6-5afb-11ea-adca-525400462574', '429518e16c92795b842576e10784e4f5', '6782254b20b34c7781d325ffa782976e4713d58d', 'false', '0', '', 0, 1588353172, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 139, 0, 0),
('pavlovich_200@mail.ru', '$2y$10$kzvZD6EsqY/zXRR4nl1x3.kltYskOR29aE3YTZSNv2kKCVeU/.CTO', 'Alexwq', 39, 0, 0, 4, '1584474757', '1582985345', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'fbb376396d5e88929601d172412de518', '172.69.10.80', 0, 0, '', '', 0, 0, 0, '', '', 0, 6725, 0, 4, 0, 0, '', '0b939de1-5afd-11ea-adca-525400462574', 'a61c106b2f7c1da9a9c959b68277c5df', '617afcb8576332cbd09e1fe97fd6c0e1f5a43cdd', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('vlad152002@mail.ru', '$2y$10$eru/K4zbawVeQRqcseNWpeNUlszzqs6Ti0z9gIJzdDIais7XpcH7G', 'Farmer', 40, 0, 0, 4, '1583239188', '1582985650', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '80f5d61ff52778b263ad874b358f7128', '172.68.182.163', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c15c3e05-5afd-11ea-adca-525400462574', 'de455a0483353e42a2d2a41c69d568be', '-313f31013c898ae315f018fa033a709dc53018eb', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('iqdxc0q@mailimail.com', '$2y$10$INteG9.EwbSzkzaXlOcmrOlHYZr3do1lIqQC4YKVP1CZ7kBzKHn7.', 'Moylen', 41, 0, 0, 4, '1585087773', '1582988281', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd96c106a7c6590410f2901f29dc98ac5', '172.68.10.67', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'e1cd388d-5b03-11ea-adca-525400462574', '8b2ca27cbe9717764ac2be4b03ca3095', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('T9Kun@bk.ru', '$2y$10$uve0XVuuTrUeW7.RX9vbu.uqRNe99dnv2AQlFwFj8u.0RSRhIWSp.', 'SashaSpilberg', 42, 0, 0, 4, '1584199547', '1583050403', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '327c9d0f2267aa7dd4b2ceabab1bdbfa', '172.69.138.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 1, 35, 0, 1584183825, '', '854450f5-5b94-11ea-9295-5254004e2de0', '779de9c3c6ccd2ed4f55227e6fff708f', NULL, 'false', '0', '', 0, 1585760916, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dimadovzenko123@gmail.com', '$2y$10$MwgYG1/mCYD9pvKfZ0Vq/eFNmpecjP.t7Gri6NO6phUet4LfdFKUC', 'TheLooToS', 43, 0, 0, 4, '1584519640', '1583055522', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9e4bb6d25ffdb5a909e4550288553401', '141.101.105.112', 0, 0, '', '', 0, 0, 0, '', '', 0, 24000, 0, 3, 0, 0, '', '708e0a38-5ba0-11ea-9295-5254004e2de0', '649a64ffd84edd574dcd4579d431783e', '28118a12699f0935ea06927452865127a0eca730', '8MIddFmpouf23dzPFt57y1tFc8Nui7', '414406967550017546', 'Лотос', 9701, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ligeme666@gmail.com', '$2y$10$XKflGPzJDIJI1lAvrXEoQuWcbzaytc4AK88S5782tVChBfv5qkvv2', 'ligeme226', 44, 0, 0, 4, '1585067899', '1583075283', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '67ee20e873411a4d45a71ab019347799', '162.158.182.128', 0, 0, '', '', 0, 0, 0, '', '', 0, 66000, 2, 2, 0, 0, '', '72cf1352-5bce-11ea-9295-5254004e2de0', '448ab82a4ccc06eacecad00b8c4d1468', '1b001350071704890948730590c436853a5a6cab', 'false', '0', '', 0, 1587463996, 'premium', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 178, 0, 0),
('fig.tebe9@mail.ru', '$2y$10$HEGEULBfJg93WMY.gabTP.b0QGwYplSoJ056y9Kd2UUQ7aWj1K976', 'jkllkj', 45, 0, 0, 4, '1583076951', '1583076951', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '000b22d63139d0e3c6a2f0cae5465d01', '172.68.10.34', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '54e450f0-5bd2-11ea-9295-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('man.ka.16@mail.ru', '$2y$10$nXrRuGVYwdtxxmu4k4dVvOq3EY/dlhVCLNQbUeCH2GkZzbQxaZ2tK', 'GAMERTV', 46, 0, 0, 4, '1583077061', '1583077061', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'df3b1bc1a48eeba1e7d015973b349dc4', '172.68.245.53', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '96d0127c-5bd2-11ea-9295-5254004e2de0', '767461ef8d9064ba1d8b595d5787df0c', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('craftzgovno@bk.ru', '$2y$10$SGbbg3PNfivqg4vO8ycmcue6NY4SvXKyb2SlQqBaNEt86Becq9vLG', 'R6Mll', 47, 0, 0, 4, '1583349473', '1583087269', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'afc9a94f1b7f7f94420bdcaa07c19a54', '162.158.88.156', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5acefbe2-5bea-11ea-9295-5254004e2de0', 'dcb82c7ea836d300d2445e15a4063cb8', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('serg.bulax@gmail.com', '$2y$10$lbpt8.h9tL5qUgwL5eGmpumoZvfJ0f7mNuCw0UKwk5SRbV/vhd7.q', 'GoldWolf', 48, 0, 0, 1, '1585084275', '1583091707', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3e467048376a1ca0ac294eeea03aae75', '172.69.63.91', 0, 0, '', '', 0, 0, 0, '', '', 99745, 10460000, 39, 0, 0, 0, '', 'b030bc14-5bf4-11ea-9295-5254004e2de0', 'e3d144b03423a9aa64a7383c564dccdb', '-3ab468b7ba02482e2e4498a2d3d9ebda9b62656a', 'xE3UVBlwgm5hKupSHqqvBQFSooVyWZ', '289022327079960576', 'GoldWolf', 3738, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '123456', '', 499, 0, 0),
('corglin@bk.ru', '$2y$10$YwS3MB2DE/X.8H2E9IEZZO5m5sKOzeZXjiK6mwgBEo3lHQgDobhZ6', 'AngelCmept', 49, 0, 0, 4, '1583092108', '1583092108', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f8eb11429aec3ea1ba4cdfaf881926d0', '162.158.93.37', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '9f551a9d-5bf5-11ea-9295-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Gyro707@mail.ru', '$2y$10$0Rx2UzJEFMrIf.TJiGFQg.UkLYejv9IsC013d9Z6ziJa/AJjQ.WDC', 'wolfara', 50, 0, 0, 4, '1583743216', '1583137183', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ec2c2b1e1ceca2944a10f0be140cad41', '162.158.182.200', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '91f146eb-5c5e-11ea-9295-5254004e2de0', '44dae17b392476969e139a357b66eb19', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('divaniyvoin1337@gmail.com', '$2y$10$o6sDlzXt5J7Q5h.yeuCqqeGWhXGrEWyDm20T2sCYGjCH4.OgXNxS6', 'Homewarriors', 51, 0, 0, 4, '1583239300', '1583144589', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5126255b193283e69a3f7e3d77c305c9', '172.68.246.114', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd0451f23-5c6f-11ea-9295-5254004e2de0', 'c821ea30f492bdea948a0460eb22faff', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kab.rerait@gmail.com', '$2y$10$a2WILikz3rEhmUAjZOYIxezKom/ZR2/QcSfzF709O2q7SDRT5vNxC', 'Reydman', 52, 0, 0, 4, '1585138433', '1583149684', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd77f772274bd28411d8bb7f4f04374fb', '172.68.10.172', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 8, 0, 1584950618, '', 'ad6a65b4-5c7b-11ea-9295-5254004e2de0', 'ee3ac0e742adabeec9d1b73c84945770', '-728aa9e5666f3d00fb24a470f29f795357b96be0', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 1405, 0, 0),
('demon.diss@mail.ru', '$2y$10$aoWWprejCxWxfaqWG4rw7OESnzTePd./I.tj1whyhSuyWJF7xdO5m', 'Atom', 53, 0, 0, 4, '1583521795', '1583164149', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7d467c0276691e2d678b27acec371fff', '172.69.202.44', 0, 0, '', '', 0, 0, 0, '', '', 200, 32000, 4, 4, 0, 0, '', '5af8405e-5c9d-11ea-9295-5254004e2de0', '5c19485ad49348f49ff7ecbe022601a5', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('macron2000@mail.ru', '$2y$10$pI2QOgxJuFy3AIs8UBVFh.m4J5t4iQQ23XC9jqBhewvEzAJelBhT6', 'Tested', 54, 0, 0, 4, '1583165873', '1583165873', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a31cfa8b47977f7a55a2e01d218ee491', '162.158.93.37', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5edc0da4-5ca1-11ea-9295-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('slepuhin2015@mail.ru', '$2y$10$jtuBF5FROjw98Wy0u8MXheED/wiDYi/7NZ0zR8j6nM9VUdna6Rlm2', 'Morain', 55, 0, 0, 4, '1584945676', '1583231850', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b08c2fc4670b078efe741048903faea6', '172.68.10.54', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'fbbceda0-5d3a-11ea-b99d-5254004e2de0', '7f2324d4fe98cedffcf6438ea962f15f', '-c5128b078fe6b6433d0dd906376aee502f66e6b', 'false', '0', '', 0, 1586193835, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 334, 0, 0),
('vovanmines.poddercha@gmail.com', '$2y$10$wA8uDNFlJTQP0I3I.JEUM.e7EWsloS/jkvSFUNeIJav/tONRR1GKG', 'TTaRtiZaN', 56, 0, 0, 4, '1583729596', '1583234162', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ba16518f7715388fe340cc0ce50f8c7e', '162.158.89.35', 0, 0, '', '', 0, 0, 0, '', '', 0, 48000, 0, 6, 0, 1583730048, '', '5e467830-5d40-11ea-b99d-5254004e2de0', '63d91cddd51c1508823dbcf34d8b95f6', NULL, 'agYAdUEipzItymzexizZ8llGhNb7lR', '0', 'Книжечка', 7887, 1586105299, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 84, 0, 0),
('kronos13112games@mail.ru', '$2y$10$tiM7BeaIR98TRi.pEq/nnOgeqitBrxl/BAHtyIkX9Sx./Z54ftuTW', 'Kronos13112', 57, 0, 0, 4, '1583238977', '1583238977', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c9153f4cfeb9a5fe0c111a2fe40f0f73', '172.68.11.105', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '94300315-5d4b-11ea-b99d-5254004e2de0', '49c6c994e9881b6fbd030a39da0b71ba', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ninga12creeeapaa@gmail.com', '$2y$10$tnRtJFGwwuzp.y4wb/cTHu0my23mJIPJPzi/5Bu094zdronXNvRRi', 'seendyk505', 58, 0, 0, 4, '1583673737', '1583250074', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1c007396b353fe1777ddb36a0725fa12', '172.69.10.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '6a2a3896-5d65-11ea-b99d-5254004e2de0', '2dd75ce75fa2a138a367e5962e626b44', NULL, 'false', '0', '', 0, 1586245046, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kileerrqwe@gmail.com', '$2y$10$Z7dUQO3rC5zWSiVwaLaBXeZbrsNyhIZlckdse4z3K/J87CtCZSMTm', 'Morozoff', 59, 0, 0, 4, '1583250948', '1583250948', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '575eb574ea4840c32b798055d6e6010a', '162.158.93.97', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '73066227-5d67-11ea-b99d-5254004e2de0', 'ac283951514e42b4b90b46e16f376c1d', '79f30500f50d9f7eddd849837368566e4033d9ec', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 121, 0, 0),
('ninaUna@gmail.com', '$2y$10$8kLtydfi9eSjUKTP920Gted3l7.shi8FjZS7WY4xmZ0.XOPwHHD0m', 'Kakuin', 60, 0, 0, 4, '1584799346', '1583251718', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'bf9ae7c8944be8da3aa3993d9dc63c0a', '172.68.182.134', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3e50ca97-5d69-11ea-b99d-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('danilk-201111@mail.ru', '$2y$10$uoy0LUena3bckITd/Rjp1.x/eybYwtPgLFkTrExBE3HF66NMMDbqu', 'Freezzero', 61, 0, 0, 4, '1583601074', '1583251735', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd830ed698305a30eab09157fae51ac75', '172.68.11.213', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '486d0a09-5d69-11ea-b99d-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('igral5896@mail.ru', '$2y$10$xf6TcC4gJg6jkLZa6WjshOkFckXxRGXgZeUW.0r1bOPFWDV.lJ6Q.', 'ArabckayaNoch', 62, 0, 0, 4, '1585157404', '1583258618', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'af1b24b1653fa4606b20722166fdb3a9', '172.68.244.142', 0, 0, '', '', 0, 0, 0, '', '', 0, 32011, 0, 20, 0, 1584956105, '', '4ed2c87c-5d79-11ea-b99d-5254004e2de0', 'b9c6c0228de76f6fbcc6460a29bb7916', '-1bbb5b3a42077e0bb01e286af69f80ddd9867a96', 'ahcRe7HW7e2ehLrBLymeUyObXIhxsC', '418808213937586177', 'assassinka', 4157, 1586011773, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 1032, 0, 0),
('po4kapobeditel@mail.ru', '$2y$10$NdUyHbDKxBwO/pwAdJCtuOLEXb9PKqTjvuh25Y1Y7BNAeOD5aZVb.', 'Nokia3310', 63, 0, 0, 4, '1584203033', '1583266171', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '49ade5f73f29b021c4c9c0395ef8e627', '172.69.55.200', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'e4ec7cfe-5d8a-11ea-b99d-5254004e2de0', 'd4a44211a1f4b7f61e0809ecb46ffd94', '265a230b3196913a23f63d3cf764075dd00e1fed', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('georg.mikhaylov.01@mail.ru', '$2y$10$RroHPYh0wJt3RbZVJP6A5ezNUyzpCh/ge/l9TGpuXn6KBxtuPOwqS', '1nikola1', 64, 0, 0, 4, '1583266207', '1583266207', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b7405b8cd12bec12556914f0f8d2b545', '162.158.88.156', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'fa25535a-5d8a-11ea-b99d-5254004e2de0', '88bcb34ee66132dface7a635111c087a', '-3f878936cc0d370ad7ff635ed11bbb65d4c58872', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('semenk7227@icloud.com', '$2y$10$tJfh.CVQNHzQvnTkw6GGHe1iUovnFmECANHZIxUDEt6WWvmQTxP9G', 'Semenk', 65, 0, 0, 4, '1583755762', '1583325689', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6a36aeb7cfe0e50414364ce4cfc7bdb3', '172.68.182.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '78a86d7b-5e15-11ea-b99d-5254004e2de0', '7ee5d7663bfc593b5dc02da3f1101ecb', 'e55855e4e99eed435a358c0e11c4e3267ee635d', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('thedeagle27@yandex.ru', '$2y$10$OQU..EaG7OxUYHe4usyxD.ehWN0FTA0M9CXp6Vji/DwGcb1ZEn5HG', 'TheDeagle27', 66, 0, 0, 4, '1584447724', '1583330025', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '68d89b6ae394266fcb1c1251cf655f5f', '172.69.10.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '9101136c-5e1f-11ea-b99d-5254004e2de0', '8c201a0866348793870b9fe3b18410fc', '410a4029f6cc1e61da7df373d182056530442098', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('danjn65@gmail.com', '$2y$10$UNEq.1vRmXg1fAsMEYxmQOyMf9AlsNi9UNQzTawYlUCLnFNpCKyke', 'PHARAOH', 67, 0, 0, 4, '1583434124', '1583332299', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5329bf4a4d7d555f09e077172312c66e', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 200, 0, 0, 0, 0, 0, '', 'dc54aaa8-5e24-11ea-b99d-5254004e2de0', 'ec3ef611559ca9e93b69f1b460f8001d', NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('craftz241234r@fgsg.ru', '$2y$10$HhrKLzgwegOXRHm256DpNeHuLi.49fxCarMVqwJ982Sv/bifjt8ae', 'LuckyER', 68, 0, 0, 4, '1583349646', '1583349646', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '82140612317a958c99550ca51ab863bb', '162.158.92.118', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3f915721-5e4d-11ea-b99d-5254004e2de0', '36b063f0a0590da7dae6bf52af2f3ff2', '4283a77fbda797532275012cb0d4fe1ffbac3395', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('q.vp@aol.com', '$2y$10$egmNOJ42.Kbe1iv1vVTVD.YKfPqXHNjfzairJFB1hXLS6YShHli1y', 'BoyNextDoor', 69, 0, 0, 4, '1585145256', '1583406083', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f2e5eee7c8aac29fe2e317b5ba93e979', '172.69.54.127', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'a6cc8a86-5ed0-11ea-b99d-5254004e2de0', 'c9908fa646e8f11154dafe409097c255', '6707c248cc75cf5e80c6dfa9bf652aacdcba2de1', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('tratartatar@mail.gomno', '$2y$10$1n/TFgmuEF1OUxvym3nPwOB.TqRzNy//Xi8u9tu627Nv/pHgpMrr6', 'Bayli', 70, 0, 0, 4, '1583428084', '1583418032', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f98a1340b35c2e05ae972f7e38f3d383', '172.68.238.206', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '793e675f-5eec-11ea-b99d-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dyumin.222@mail.ru', '$2y$10$HsKNMA1AVt23xZDh8EpctOF0hUoUaBBRDB1BEC0LbkAgDDq2K1gPa', 'flaffi', 71, 0, 0, 4, '1584611169', '1583433130', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd2ca8806250ca1842ea7994dd38c1022', '172.68.182.134', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'a014f432-5f0f-11ea-84bf-5254004e2de0', '1d097a7cf05e1280b134b4d6282a2ff2', '-6da38f687ef84dfeb507465727c78902ae974ad9', 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('saluki0220@gmail.com', '$2y$10$cFM4uc1pQA45OAWDe2FEKO9wNTA6wmt9Nica6F1dpE/Y90suASLRa', 'abb5', 72, 0, 0, 4, '1583859005', '1583434423', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1e470bc0b63a856a4b12956f01ec341e', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'a29f1086-5f12-11ea-84bf-5254004e2de0', NULL, NULL, 'false', '0', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('yan022011@gmail.com', '$2y$10$x7wdLGugkJ1hXIq2XnEpsuc/.7XrlqbGhv1.oGiDuLP8Ob0FFTDru', 'codeine', 73, 0, 0, 4, '1584389773', '1583443821', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '06d3e03978434a7276a4ba0e07964e57', '172.68.238.8', 0, 0, '', '', 0, 0, 0, '', '', 140, 40000, 3, 5, 0, 1583750069, '', '8443df97-5f28-11ea-84bf-5254004e2de0', '8de3702dc0b3d2cb1c5821da9e34be30', '-658808591e05c4043ce06c871729fbad7163a13e', 'false', '0', '', 0, 0, '', 1592174148, 'ultra', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('fsef.2013@mail.ru', '$2y$10$O8mf3Ww8c8ob0BQLSz9fU.OePAAVmmW6R9k2iBdrWB/6/MPquKM1m', 'r0rs', 74, 0, 0, 4, '1584514787', '1583480728', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '926dadfb011d8ba447b95c78fd6f437b', '162.158.103.207', 0, 0, '', '', 0, 0, 0, '', '', 5, 64020, 15, 16, 0, 1584514821, '', '72f09e93-5f7e-11ea-9388-5254004e2de0', '3a2a2f3b8f234129e991eb015a2f21cf', '57ca8ac285b0ec6480697f64bf478af9a92c2165', 'false', '', '', 0, 0, '', 1586959762, 'ultra', '', 0, '', 0, 0, 0, 0, '', '', 16, 0, 0),
('markbelyaev2502@gmail.com', '$2y$10$9cjqbZ9dw/Um2xph3OiWAONpB/S7Xs1.Lkz7dlFTRhW/oy1kC7MqG', 'Viushka', 75, 0, 0, 4, '1583483003', '1583483003', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'eb734c9119bd7c5a9e180a8293623262', '172.68.244.94', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'beb01cfb-5f83-11ea-9388-5254004e2de0', 'a55cb98c7fe9cd5ad7306d32be254085', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('wsefcwef@fbfb.efef', '$2y$10$XWrLwB3f84/CUltVV3dK..2lgXu59nj0EydXE4DNG3dDLyNi.T46a', 'EverMy', 76, 0, 0, 4, '1583504536', '1583504536', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd595da72907029b5120ed4e4dc3097a4', '172.68.10.210', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'e1c1477e-5fb5-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('beltim2007@gmail.com', '$2y$10$JNbcaSSw.0DpxGG/gyzt/ec5IptUQzNSLJmaTHiU6uWvovkNhj2dq', 'MasterOne', 77, 0, 0, 4, '1584185050', '1583507160', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6555567acf73c6cdb54d71cbfb79dae7', '172.68.10.54', 0, 0, '', '', 0, 0, 0, '', '', 80, 0, 0, 0, 0, 0, '', 'fd3ccc7f-5fbb-11ea-9388-5254004e2de0', '62ea05e9e0c19589a8550f828d295c10', '-301a77768786912e320a43666de5bea810126dc9', 'false', '', '', 0, 1586100893, 'premium', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 19, 0, 0),
('dashmakerproduction@gmail.com', '$2y$10$j74MYIROtI/3vcYrhkZSiuHJCvvtb8RE28a5NZj..JaJwJX/Q7s4u', 'SakuraMonta', 78, 0, 0, 4, '1583507902', '1583507902', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '90ad798f5b7781ecab238f66c16549fd', '162.158.93.37', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b78e0f87-5fbd-11ea-9388-5254004e2de0', 'b7dd8ee266ed357d77c675a8f88d389f', '-2b6d462e00871d840f47cadb40c79017037939f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('bobibob1235@yahoo.com', '$2y$10$3ua0gdJxQlqV5EDUs.QsNOYKr88MsuU1SH.9/LP/ZBVd9N5A9sFLW', 'bobibob1235', 79, 0, 0, 4, '1584952883', '1583508251', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ff90518611fb5d094a9eeebc9006032c', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 16000, 0, 2, 0, 1584953006, '', '87e3fb5d-5fbe-11ea-9388-5254004e2de0', '9e6b8d5502ab042a7bbaa815b8fd1e13', '42b6bf08e9b1a31030cad6f8d7887bf916b59385', 'MPLCtoerd0tdqk0gZs5pencORBdT9c', '474485747873873920', 'bobibob1235', 3693, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 1053, 0, 0),
('assasiin01@gmail.com', '$2y$10$lA.9IXXQ84F6z7meckxpQ.BOeJGsDMbV0.U27cf11/GzHnK/Mmfem', 'Wido03', 80, 0, 0, 4, '1584632015', '1583524104', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '72851fd2dab55ec7499554b47547136d', '172.68.10.132', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 1, 8, 0, 1584173368, '', '70ace3f3-5fe3-11ea-9388-5254004e2de0', '1c511ffd57feecb3165304a403059d68', '-7009ce8915ac1af288f19f7e59f858cff8515f41', '6zJgloV44tFj91dI6kPsPDBquQz709', '685545377512030220', 'kizaru', 7561, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('grusniynine@mail.ru', '$2y$10$wsiwf1nmaVoBmcg9PuHJdOcPjY4exN04PzsTstYd7Uj9n1MuKtyZa', 'dbs.Broly', 81, 0, 0, 4, '1583527411', '1583527411', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '96d3afe5d985d4f1e6fe123ab5ca4606', '162.158.183.39', 0, 0, '', '', 0, 0, 0, '', '', 0, 16000, 0, 2, 0, 0, '', '23d95bba-5feb-11ea-9388-5254004e2de0', 'bc80cfc7b427f378c1b7c54d0a0b66a8', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('happycofficial@yandex.ru', '$2y$10$oFYVjgdWaWJxAvYwIYmCEusjtQlQgmTghfmK5VD/.NlGKvDAXDdli', '1Black', 82, 0, 0, 4, '1583600930', '1583529880', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '2dbadb7efe47c78a1c913b7c4456592c', '172.68.182.188', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'e3c6125e-5ff0-11ea-9388-5254004e2de0', 'ae497396904b2e542769ee3d8f3da6bf', '7602a97a991310b906f89c08f65c5365e19a43df', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('toporkov-1910@mail.ru', '$2y$10$iNrsqq5JjlbrSzTUBbIYo.E3axB/5EIVqehO2HuBEfclVHm1L8/zS', 'ToPoRcHiK1910', 83, 0, 0, 4, '1584199343', '1583556993', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c9ae089e1e76d9b252da9c35f0697a31', '162.158.89.35', 0, 0, '', '', 0, 0, 0, '', '', 200, 32000, 4, 4, 0, 0, '', '0408bd21-6030-11ea-9388-5254004e2de0', '8b0e2db6ac2f4c8b169f5ebb1d5fea05', '-251a0c5bce2e3a1c54806e1afb45514a202ff1a4', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Ernestlaura28@gmail.com', '$2y$10$.t/jhDOksOYVAyyyzs93z.H9czEl7YiRyjKZwbtU099/rVb74nMEi', 'UnKilleDemoN', 84, 0, 0, 4, '1583625511', '1583563237', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '10ed7d8a33b022c55e49590d6c7cfc1b', '172.68.239.159', 0, 0, '', '', 0, 0, 0, '', '', 100, 0, 0, 0, 0, 0, '', '8df3f841-603e-11ea-9388-5254004e2de0', '815a9f4ce5fd3c0d0d8b47289ed8f1a0', '-1a2e61b6e775f20bd2f6b18f398ba29246eec5ad', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('danilka160503@gmail.com', '$2y$10$qVtY7XUJJ.0x7wZkXZMzUOHAzDmV/wyr6aUF5cshr3Jg1UyU4viYG', 'Foxy666', 85, 0, 0, 4, '1583564575', '1583564575', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'bea260c7b6cbb6b77725a38739f8c73f', '162.158.92.164', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'abc34d19-6041-11ea-9388-5254004e2de0', '1b009b91a5e1165bd879b5f3c579dd7a', '3a0545d25b5110d75d2eff2acea846f9d8781a8a', 'wEFnjJvD3VHMhrYqD45dq8QQ0GJWkd', '618161713581391898', 'Foxy666', 4934, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('tusk301@mail.ru', '$2y$10$vEgQbTcDVhRbJa7Qn8NwHu7fEbN2aKGUwlesoWTpcXdahJOz.dw3a', 'Excellent23', 86, 0, 0, 4, '1583569273', '1583564760', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '0bf67bf6c708df612037bd438b074de2', '162.158.182.128', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 0, '', '19c07b8f-6042-11ea-9388-5254004e2de0', '72bb55a760f55bdb59c2d28e0710c81f', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('123ilya-ilya123@mail.ru', '$2y$10$7IiXJXQZEM56QexTCDkSf.tkwyG3rECmOXOFXn.QRKeORXiCQGxRi', 'Frisbe', 87, 0, 0, 4, '1583567630', '1583567630', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b945b7497e6ba034242b0fa3c606c4a5', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 4, 0, 0, '', 'c85360cc-6048-11ea-9388-5254004e2de0', 'e1c601c1982ea9384c381405f32e6930', '-2c5e0c592c24ad9866cd8e5d5fbb1f4c8a3e9f2e', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('mycop3754@mail.ru', '$2y$10$Jji.XVp3weUkEuQaSZmL0OZzMw1VVi9tpOtbiNcdbGpZTpE4wWSTu', 'Barmalei', 88, 0, 0, 4, '1584018870', '1583570287', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7f4909dfb418810ebbdcc3cb980b8201', '162.158.183.39', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 4, 4, 0, 1583740416, '', 'f82f00f3-604e-11ea-9388-5254004e2de0', '3a038c9d69d8df114cfd6e5af160d1b8', 'e8dd2ec34737ed33c1718ef8b9bdd4705f21cc1', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dark13211@mail.ru', '$2y$10$ue7qNc5BdwNXiVYqPa.OiOiTb1lvyqdmf5/9SAuZP5ICb/A.Cd7he', 'DarkGame', 89, 0, 0, 4, '1584705118', '1583571050', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'dd991ab60d1141bd22289f17859adb33', '162.158.88.30', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1584188887, '', 'beb74952-6050-11ea-9388-5254004e2de0', 'd6f97e36bb518603d6620322ae872dcb', '-6d9f6d01b5073aedd9f9493cca2ba55f1c698095', '9AxZEwdbgIC3ipnLderZdXXVGCT2sB', '440932118747414561', 'DarkGame', 6954, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 35, 0, 0),
('mrdjvader@gmail.com', '$2y$10$r/wdeebLidweGhSxYA.gruuQHtE/j/HR48CU3ZwAbZlM4iKMyEoDa', 'die666ed', 90, 0, 0, 4, '1583600765', '1583574749', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c8c1fa6756a4bd495ff893003d428467', '172.69.10.32', 0, 0, '', '', 0, 0, 0, '', '', 105, 0, 0, 0, 0, 0, '', '5be8cdca-6059-11ea-9388-5254004e2de0', 'c5e2594b4e4834df8a31738ccc3fe5aa', NULL, 'false', '', '', 0, 1586193147, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('tadjickmuzjick@gmail.com', '$2y$10$1RlnZggJgaIvJkH8MjR7Kue3T5EbBP14rkv5Ssd8Vj2nCOp7j/QCm', 'SadManiac', 91, 0, 0, 4, '1583580498', '1583575097', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a4d56d500aa1f2dd8f79297987bf16c3', '172.69.10.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '2af8dc58-605a-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('studeraven@gmail.com', '$2y$10$NFUE9sVMdVvYtrvZm1BREu9yOK5ZGjtORP3nGZRQSLPRxMXvxtcem', 'Dustmane', 92, 0, 0, 4, '1583580490', '1583575299', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ba416c1b257cd1c3dfee283e46928aba', '172.69.10.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'a34ac133-605a-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('heu3becteh@gmail.com', '$2y$10$WVJL1NX4PyiZftxm7lZFw.VkgiAYNfikvHSJJ5jWzW7ReeR0Z73hS', 'Heu3BecTeH', 93, 0, 0, 4, '1583578149', '1583578149', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '680973911081759ed294e8ea5cf6b718', '172.68.182.134', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '4675941e-6061-11ea-9388-5254004e2de0', 'b9c220cb751a3f6bc7c33cfa3f0289ac', '-55e130547a2d45a17cc8e007583d857f8903c679', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('minecraftrageservers@gmail.com', '$2y$10$crW/WK/EQ5EjoVDgg/CUiucUsFDQUQPlBIsVfjm4zC/TT6rH2aZFG', 'MCRAGE', 94, 0, 0, 4, '1584539065', '1583587219', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '0fdfcd816d261d2972722b6790151b55', '172.68.11.189', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '64a39830-6076-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('iljab2007@gmail.com', '$2y$10$Td0F9P2s.qfSoIS8hWi5YOF4hjLY1G58VW6VllsFFv/vWdYg/nMAW', 'ilja0303', 95, 0, 0, 4, '1583745365', '1583592540', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ad081124c0e3116e00f6580ad6462884', '172.69.194.26', 0, 0, '', '', 0, 0, 0, '', '', 20, 0, 0, 0, 0, 0, '', 'c7c8e54c-6082-11ea-9388-5254004e2de0', '317da1915693097c395f70b5606a1ebe', '7262e71a4894634e0a163544730e840bbf498a74', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dremen228@gmail.com', '$2y$10$K0ctzGvTYtvm0gG0uoaRpOI.axedgLV/9QT8AIBRQY5ckat4HQe8C', 'dremen', 96, 0, 0, 4, '1583593655', '1583593655', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e36dd10eaac4766998bbdc23cb04b229', '172.68.11.195', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '60657f96-6085-11ea-9388-5254004e2de0', 'd8a73f7bc79bbebb7e5e457d5af43a99', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Fobisck@gmail.com', '$2y$10$uV9mkgcRRJJ6Hcv7BDG7.u2l45c2umYx.VbBoCQ4vtXJfhCgDL9xm', '3Red', 97, 0, 0, 4, '1583602016', '1583601743', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '93738355ea336fa563cc00e1b73c933a', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3529db3c-6098-11ea-9388-5254004e2de0', '80b5865474d87f80174aadc03654c191', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ajrcb12345@gmail.com', '$2y$10$HP8S/T0zQzl/1AwGriTYDuXOdfLbH/AU2nZEaLQ6HIXGGoJFKknl6', 'A1TLANTA', 98, 0, 0, 4, '1585156505', '1583601774', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '4d9bbdd116bc1e6f75c95e071e4015dd', '162.158.182.128', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '480ecc14-6098-11ea-9388-5254004e2de0', '9cd9dbba13f04efa627f65e9a5456637', '-795bedf91f5f76fea70da1657cf951d1edbac484', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('fdfsdfdsfdfsdfs@mail.ru', '$2y$10$dwpW2i7rr5ll6spjrzxEbecGQcc2jzrlegC8/Uc1GA/nL6WuEnEoS', '2White', 99, 0, 0, 4, '1583602251', '1583602251', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e86f14e5320f4e86bb409bb13631999c', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '643cede2-6099-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('thaumigg@yandex.ru', '$2y$10$N5KboYRoJmGdTq50FcejeuKnuuCdCQ8E4mJF1gbqI09hSBty7928a', 'Trunn', 100, 0, 0, 4, '1583640978', '1583602535', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '101d7a092d31238914283eed0b6bf001', '172.68.244.94', 0, 0, '', '', 0, 0, 0, '', '', 200, 0, 0, 0, 0, 0, '', '0d51ca3d-609a-11ea-9388-5254004e2de0', '87908d470577cf69dac159bd17f898e3', '-c5a5f1bf6661fd75348adc8d16e373d200580d', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('CheatDDos@yandex.ru', '$2y$10$NsGAuOT7bVxRnueYwKs5X.dKdGKSibpPb0hmqdH61K34Sm4MdYQwS', 'CheatDDos', 101, 0, 0, 4, '1584972787', '1583606119', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1ec78f50cbfa70af06f6599ce9f96e56', '172.68.10.210', 0, 0, '', '', 0, 0, 0, '', '', 0, 96000, 8, 12, 0, 1584274683, '', '65f7d288-60a2-11ea-9388-5254004e2de0', 'eb645a7014505b111582b80d08bd0c3f', '-470e207d7e512c3a67f6ae06abce268fc2418d2e', 'Nmkvn6nsGMiAcCYYzy8WrRwTJaulrX', '410102818905784330', 'CheatDDos', 5207, 1586201968, 'ultra', 1587057408, 'ultra', '', 0, '', 0, 0, 0, 0, '', '', 31, 0, 0),
('ez.money.lol@mail.ru', '$2y$10$jG3VK0I/c9f1ah8wWdq5a.PfiGhQnjW9JjUO4bdS4rznZuSXavee2', 'Jinkiie', 102, 0, 0, 4, '1584259348', '1583612718', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'def1ad515888df674642a6521ee88919', '172.68.11.195', 0, 0, '', '', 0, 0, 0, '', '', 115, 66000, 2, 12, 0, 1584127765, '', 'c2c6d05c-60b1-11ea-9388-5254004e2de0', '5c0ce5002d95db21cceb312ba93887db', '-8927888cf2c93c1863e627b6468bfe4ad4f6edc', 'false', '', '', 0, 1586277259, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('hvv.applegame@gmail.com', '$2y$10$zD1VoXQsiut8JvUp8L4DEuJ8dhChoHkOACxrsHiXI0wrQ/A8/V5gm', 'MaxTinerPlay', 103, 0, 0, 4, '1584627822', '1583616443', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '4c5fbf07cf7707f22b563221872ca35d', '162.158.88.228', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '6f841208-60ba-11ea-9388-5254004e2de0', 'a03f76a0fcfd29a623d63c8597b82334', '-4581e315ca245d5fce677adbc3771a51bf8b74e', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0);
INSERT INTO `dle_users` (`email`, `password`, `name`, `user_id`, `news_num`, `comm_num`, `user_group`, `lastdate`, `reg_date`, `banned`, `allow_mail`, `info`, `signature`, `foto`, `fullname`, `land`, `favorites`, `pm_all`, `pm_unread`, `time_limit`, `xfields`, `allowed_ip`, `hash`, `logged_ip`, `restricted`, `restricted_days`, `restricted_date`, `timezone`, `news_subscribe`, `comments_reply_subscribe`, `twofactor_auth`, `cat_add`, `cat_allow_addnews`, `money`, `econs`, `cases`, `votes`, `votes_top`, `votes_time`, `rank`, `uuid`, `accessToken`, `serverID`, `discord_token`, `discord_id`, `discord_username`, `discord_discriminator`, `donate_time_DTM`, `donate_DTM`, `donate_time_SkyTechnoMagic`, `donate_SkyTechnoMagic`, `donate_Galaxy`, `donate_time_Galaxy`, `donate_LavaTech`, `donate_time_LavaTech`, `x`, `y`, `z`, `code`, `referal`, `playtime`, `referal_active`, `radio_admin`) VALUES
('masha_ivanova@mail.ru', '$2y$10$5gNu/ppuL2trt4.u2FAMQeh6mlI1OYW1YeavTJBkEKTc2JS3oyvGO', 'xXMashaXx', 104, 0, 0, 4, '1583647235', '1583647235', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ba7768921662922b3b4294f3ea1ac915', '162.158.94.124', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '208bce3b-6102-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('clawa228228228@mail.ru', '$2y$10$UD8vtQuxt292d2sQO142rOKS/fCRSIVBRuXAixjWYXW1ogAoBnTK.', 'GG28', 105, 0, 0, 4, '1583764700', '1583653113', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '83574f469002c3fd038b240f5dea70e4', '172.68.182.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 5, 0, 1583729356, '', 'd04cf8cd-610f-11ea-9388-5254004e2de0', 'd4d2ff8bbbcccae4bd5608ef218dcc79', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Dashkaalex@mail.ru', '$2y$10$/iOIE62.oHpWT07/PAGJNOnzaP8T57kNZUWuZZx6LTO7RE18SHbo2', 'xXSashkaXx', 106, 0, 0, 4, '1583926969', '1583657803', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b0840317c9128ea244e863f0440cc106', '172.68.10.132', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'bbf89236-611a-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('3JlouMrPikalz@mail.ru', '$2y$10$wo9R7hHN8iGbL7r4VdDCnuhGGNTi./4fsU/AgVE.XZ8Z23jOypUiC', '3JlouMrPikalz', 107, 0, 0, 4, '1583662410', '1583662410', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b374b39072d8787ee4394c2fac44780f', '172.68.244.88', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '75ba8605-6125-11ea-9388-5254004e2de0', 'a8e54e65b9bdf8e24027ad84c0be0ede', '2b64246cee42dcea8ea5c46b11fc490fb199a994', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Kireev.semen2016@yandex.ru', '$2y$10$lBY3zF9/lIDVQl.r/NZsz.JZBae/HHQ/UbrnMnsuQ1M/EyjniAQEu', 'sema4', 108, 0, 0, 4, '1584016577', '1583662904', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '691ac02d2d32c719ecac3bb75e68cbea', '172.69.63.115', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '9c45a837-6126-11ea-9388-5254004e2de0', '8ed2b8643349200da5a8c80f32300c4f', '2cfda110cbfe614f182ee08492fe205f134454cd', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('vartke@gmail.com', '$2y$10$YHZKD6X3aUOBxmTj9/V5S.lN2tWBhLm353HYRaKBDGhAqKJwqZTEK', 'ABI', 109, 0, 0, 4, '1583663324', '1583663324', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1fe4beeb56cdc61cd9eb92eced0adf45', '172.69.10.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '965033f3-6127-11ea-9388-5254004e2de0', '68f4111c941a4a3ab9830c7d9b39396f', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('karramov.timurr@gmail.com', '$2y$10$9tNZdnetiKVMJYaIL//Nz.y4mzGxbUJvSP3srLuVo3Pp71R6gV7g.', 'Galak1ik', 110, 0, 0, 4, '1584189649', '1583664278', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '252f179f6a95ed813fad74bb0b5c82a1', '162.158.89.71', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'cf1324af-6129-11ea-9388-5254004e2de0', '29ecba1ead6dacd582f83a956ac5661f', '364ee9219a1d1f78b586c3e93ffb7eb0117f488a', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('pb.new@bk.ru', '$2y$10$g3XswdAbDhHiXdWyC4lH5uZREyNKgpil7JYvfEvih05Xy9CKc.G3K', 'kiruk', 111, 0, 0, 4, '1583686014', '1583667581', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8c544f9c41a74c32c3c2adc86c61ee39', '162.158.89.71', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '7fc1e48b-6131-11ea-9388-5254004e2de0', 'a503d6922fd686dd58c33c918bfc75a5', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('sw123@mail.ru', '$2y$10$l8B/7f3PSyAoCOymXnP4IO3iHtB1GAnkZKKsb2NJ7LrHkFp9XhmG.', 'sw123', 112, 0, 0, 4, '1583674160', '1583674160', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '337c5b2a11ffc83d8d93cabbb31d5b23', '162.158.182.200', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd102febb-6140-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('daffy.grif132@mail.ru', '$2y$10$DpkbgrU5QyHBWrebo5ZLQewfP.xNizAASJ0FgKLyI/RpR4/8hEUMW', '9lJl', 113, 0, 0, 4, '1583937369', '1583682256', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '554499b21c0d95692cf2a59b04772e65', '172.69.202.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'aa9aaa38-6153-11ea-9388-5254004e2de0', 'a4cb5c9f8f565e563f48a4a239491327', '-3593dba64120a46ad7f2265652310557c6b0e894', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('grstel@mail.ru', '$2y$10$EzKdOPUR8ikc6.f/zQXtkOw58nUCOYYHNej5hcq2ot8S8DXkA0JwS', 'Gyro', 114, 0, 0, 4, '1583735319', '1583691049', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '143b4f638d73d81cc0de74a669eeda70', '162.158.88.30', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '239ad9e1-6168-11ea-9388-5254004e2de0', '6701e83dadfe5dbf214f3ed0735778a4', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('wwolc@invox.ru', '$2y$10$MSbOK/h6YE3DysSZQQs79umFdQlHiSlQ8JnvQWBXL90CB60RvBhmi', 'wolc', 115, 0, 0, 4, '1583695196', '1583695196', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'cd13b77e1eb1ed2bb7d0f4ac85b9d3d7', '162.158.103.207', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'cbc41d4c-6171-11ea-9388-5254004e2de0', '281a6b12878d7b6620db7719234b0eda', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('wolc.w@inbox.ru', '$2y$10$CHUrb6KMbak1XVxqIw9ISus0GAfE6UMRwhtwskC6VEAXsudGEkSzi', 'Smetanka', 116, 0, 0, 4, '1583695248', '1583695248', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '865a2a37ef97a033b64c7375b85a45eb', '162.158.103.203', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'ea7f3c6d-6171-11ea-9388-5254004e2de0', '5b1acfd36b2c93edca734fb0dd0744ba', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('billionervazan2028@gmail.com', '$2y$10$SV3yiQoUQODG3fZJww9E5e5wny746hxF2GV.3QcEGVp0AUUkMe/yW', 'Godit', 117, 0, 0, 4, '1583697253', '1583697253', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3de738d15f32c0ef744c3fb92367f63d', '162.158.182.128', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '958d9105-6176-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('slava.vinogradov@yandex.ru', '$2y$10$cKVqyjTYxmpwkdx6NqSjlOngmjt9h9wnp7Nk/b7mSPIGyoJMQJPe2', 'Vasiliy228', 118, 0, 0, 4, '1584961197', '1583730951', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '548442f3ecf2794d0339815858b6f313', '172.68.11.195', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '0b8757fa-61c5-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('shaxray123@mail.ru', '$2y$10$b2Jl1015IgTy9TrhpM3qU.0/UAiHPTPsC1AlPrjKGKx0BwD.K3CXe', 'shaxray', 119, 0, 0, 4, '1584692448', '1583736460', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c1c736fa84f1846052f86b4e1a364979', '172.68.238.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'df07d87d-61d1-11ea-9388-5254004e2de0', 'ef456ec65028eed294c08fbd3143c33d', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('gtg2021@mail.ru', '$2y$10$E/Bp8/Hguc5ZX/hDb8lPe.qi6XvYNs.GWxbCflaU4GFiuubezdmyG', 'BamDamRAKET', 120, 0, 0, 4, '1583743588', '1583743588', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c8850aee697f9d3b61637403a380ebf2', '172.68.182.134', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '77d8c5d1-61e2-11ea-9388-5254004e2de0', '8fa41008d4cf9290f0dd973aac130cc3', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('odranigin@gmail.com', '$2y$10$Hzw.69BPDzDQm71c9MiCp.MHcZoj.XKh8IDulBBwptCVWwvvwNLiC', 'Paye', 121, 0, 0, 4, '1583776646', '1583751213', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9b176368038458db78bf2b4dd377d94c', '172.68.10.132', 0, 0, '', '', 0, 0, 0, '', '', 5, 0, 0, 0, 0, 0, '', '385749fe-61f4-11ea-9388-5254004e2de0', 'ac3d6c1a601c5bd5295a7270a1e89c25', '-25060ed4cb33cd1d2d7c936c63742dff29949a32', 'false', '', '', 0, 1586368684, 'vip', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 46, 0, 0),
('ivanyuk_maksimka@list.ru', '$2y$10$Ns8FPMnZL//ENwiY/R7ZBeSnS8XFOnw7aW/S2laon9LyChjN1bGDC', 'GoldNova', 122, 0, 0, 4, '1585076913', '1583758755', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ce2d7bc6eb86b314278c29f66aaa1ca3', '162.158.103.207', 0, 0, '', '', 0, 0, 0, '', '', 5, 0, 0, 0, 0, 0, '', 'c7e76a40-6205-11ea-9388-5254004e2de0', 'ba27fe044424d7ed60356a6a21cf1107', '-370250598de64c8c968b13d4833de5050fc61c9e', 'false', '', '', 0, 1686455682, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 658, 0, 0),
('tokaleandra17@gmail.com', '$2y$10$awwvZZhnXEJPg/7qP5KeJu6f6I9NGEr/q.fD.CH0bLKgwA8ldw8DG', 'MFrilex', 123, 0, 0, 4, '1583931868', '1583770015', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '764c5b83460b31ed9084e5dad8d6520f', '162.158.183.161', 0, 0, '', '', 0, 0, 0, '', '', 5000, 0, 0, 0, 0, 0, '', 'ff2be96f-621f-11ea-9388-5254004e2de0', 'bb44f9b3b9124a0eda818eb23c3f92b5', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('firecraft30.04@gmail.com', '$2y$10$t2XxlmHhB5t/Jqp9uuCZq.Hx/5F4qrqIRsezvpqpsrVO6tlxP3q4C', 'JendaRioN', 124, 0, 0, 4, '1583836354', '1583836354', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e6c4c57525d1b35bcb058377074fb287', '172.68.102.130', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '74af14df-62ba-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('maxsimvoid@yandex.ru', '$2y$10$.loSbzCvFsmFj6vSci5SVu7gdYLE/Qd6gCvp/am7d5Ee7.EpKSWia', 'Hramoff', 125, 0, 0, 4, '1584178299', '1583840714', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8b40f50cba910a29418842d50c630c80', '141.101.69.11', 0, 0, '', '', 0, 0, 0, '', '', 8, 96000, 0, 12, 0, 1584178442, '', '9b33c816-62c4-11ea-9388-5254004e2de0', 'e3701b0b63c099e66ed1f10b1b2e2b6c', '29b736405359d788f41bd46bca3cc36ef0a0794c', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 54, 0, 0),
('sy4iov.oleg@yandex.ru', '$2y$10$aS3KYtb1eWNhRe5aSGhOoeGvvYZXlHYwFq/en2vmXpkg5eJdqP52K', 'OLEGA', 126, 0, 0, 4, '1584086177', '1583910616', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '885f218de178897a25cb3d04acb7f134', '162.158.183.161', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5c531baa-6367-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('minecrafttusa@gmail.com', '$2y$10$k88R7Dx.5QsdYSZt5k7VRu0PfP1OVgUjVtetKzykIsvpHBtAVWf6a', 'Rapogliff', 127, 0, 0, 4, '1584974780', '1583949869', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '4e2992253445702a99d65972a2afad21', '172.68.182.134', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1583950108, '', 'c0a3b80c-63c2-11ea-9388-5254004e2de0', '67fcd71f363b9c5b8b455f800ec1937a', '4eb47ecf5c97b3c1533d7059c177cc46d4f8d2ee', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('denis.pronin.00@mail.ru', '$2y$10$U4YgxO881e.QJrXoyXJ7geiwJ3o06WgYx.CBCPq8ckt5rtrazzQ5u', 'wortex', 128, 0, 0, 4, '1583951159', '1583951159', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '32636bf3b022c5c0c130fd66bf3883ff', '162.158.183.39', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c168aee5-63c5-11ea-9388-5254004e2de0', 'd789dc581e7570861e2cca5c8c9a7c2f', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('homyk.den2609@gmail.com', '$2y$10$efNX2k5KBZdASJtsxq1/deHylArPVhrdS2AaA7C6ATUEv4VQUI0Fy', 'Legetivniy', 129, 0, 0, 4, '1584773482', '1583952865', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '03275e05864f885267968f26890cdc38', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'ba963086-63c9-11ea-9388-5254004e2de0', 'd58f1ea87f4f05d1ef925114df84727a', '-4b07f20f77eb29aab7652d8eb5340f993a480992', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Liamars@inbox.lv', '$2y$10$10R4zSsK2w/HoKa8VO.w0Olj2/A5hdfDFXlxkOqY8Gltz5UHkVlR2', 'Genadij', 130, 0, 0, 4, '1584511940', '1584013633', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8003a1a46f32aefc7e1d355f922e6feb', '172.69.194.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 128000, 14, 16, 0, 1584512026, '', '372a62ee-6457-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('nooybik@gmail.com', '$2y$10$.edj0dMpOuEgp7wvmIWEvuxrcrgZwShe0XLmzG8nODcYHHdMwvr1G', 'Scam', 131, 0, 0, 4, '1584018169', '1584018169', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '47a64d359b27b9703eeb157032939523', '172.69.10.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c6bacc08-6461-11ea-9388-5254004e2de0', '95ae5c23d25221d817308e22b4a35518', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kaz_niv@mail.ru', '$2y$10$QTg.ySBgICaStqS7giwX/u3gSyjy5NCcxGncOgYCoeItBOrvWOY42', 'Kaztiel', 132, 0, 0, 4, '1584270480', '1584024636', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '4feba0181cbb7e72e2f38a8fab09c08d', '172.68.244.88', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd565c227-6470-11ea-9388-5254004e2de0', '928948e355cb42ebe37c625de8c476bb', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('artem-le0@yandex.ru', '$2y$10$dS9lsnaUFs7qfcJ2sY.6TO/RiolwrhUkhQWogCXLaRZlD1JIijxGS', 'TracherTractor', 133, 0, 0, 4, '1584069053', '1584069053', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5b904ece9272edf0fa94222c0d5d4e1c', '172.68.182.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '4000983a-64d8-11ea-9388-5254004e2de0', 'ea03d17fc355fe311304315e9f40e9d9', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('faykin.anton.94@gmail.com', '$2y$10$7Au2aqbU3.rV0E7n0Z082.SsRqPUJFJ1MjEYjz4RUGumUKicbJ1VS', 'faykin', 134, 0, 0, 4, '1584159183', '1584075595', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '81ba20402e32b5e2b611e2a81fe1517b', '172.68.182.134', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '7b3f3cca-64e7-11ea-9388-5254004e2de0', '12720a51a0e5b90eb4349489ff938dc5', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('mc4l1ster@gmail.com', '$2y$10$cm.icf18fErckOs9vEC3WOgozUfCMgzfTDdMAmCwiFnWWbY.ashn2', 'MrRed1S04ka', 135, 0, 0, 4, '1584111993', '1584111993', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '621648521bc333ba93fa8690b3f2464d', '172.68.239.183', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '39ee94f2-653c-11ea-9388-5254004e2de0', '1f825473471948c4076805eb79020aa9', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('tbgzudakkfugqgowne@awdrt.org', '$2y$10$xUtPmqUIQeGLLCt7FIYRYuqOvMjacVoAu3LNzmntmb2OCbSeM1Egm', 'Dima', 136, 0, 0, 4, '1584112772', '1584112772', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'bc687ba716c7d3afd8701051418ebeb7', '162.158.182.128', 0, 0, '', '', 0, 0, 0, '', '', 0, 8000, 1, 1, 0, 1584112835, '', '0a9c451a-653e-11ea-9388-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('olejka.iv.com@gmail.com', '$2y$10$yB8uzGUngjUHXv1PhOBJjeIjwCFGgzRoCcce6qCWubMNdZSmpEPYO', 'Fenius', 137, 0, 0, 4, '1584115622', '1584115622', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e4641875b96ad436725a23ff78456f24', '172.68.10.210', 0, 0, '', '', 0, 0, 0, '', '', 0, 16000, 2, 2, 0, 1584115728, '', 'ad02413e-6544-11ea-9388-5254004e2de0', '07a93bd2981b5516a17b803aa1eec6bf', '36e79d8905adc0ee1f9629dfc6a601e082ad7e93', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('nikolaifedorov0@mail.ru', '$2y$10$lqq40emhMuKDPI2vqxCxmu0q.38d7z5MTcGW/6etP.rKvO7GCCHma', 'NikolaTesla', 138, 0, 0, 4, '1585149039', '1584115771', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a30232f7eb3eaa6bf30e360e06c2f88b', '162.158.182.128', 0, 0, '', '', 0, 0, 0, '', '', 0, 96000, 0, 26, 0, 1585150407, '', '06306778-6545-11ea-9388-5254004e2de0', '237032f1f4e2f0cbd54da63eb6d254dd', '-99b15e8b346b2f7fbec9fcefff7cb1bbab6fd79', 'false', '', '', 0, 0, '', 1586958102, 'grand', '', 0, '', 0, 0, 0, 0, '', '', 202, 0, 0),
('lalkakomen228@mail.ru', '$2y$10$OueLzgdf6tk0AhrpFDhiQOF4IvX/c5aTvqxnUI2zFnwDhiBjg7gX6', 'EvgenBro', 139, 0, 0, 4, '1585121940', '1584130699', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '099defca09f0594e59c04867c5a51cbc', '172.69.10.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 15, 0, 1584602708, '', 'c7a9a81c-6567-11ea-9af4-5254004e2de0', '46aff40b67c7239d6c2f39dcd97ef917', '10a12372d9f8aeffca78a39345782b7203fa74ff', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 109, 0, 0),
('tufounder@gmail.com', '$2y$10$vJq7LzaqQImZcmJMcgnL2ue4udIBdv/q9YvGjzGOoOIhjHrwCwEt.', 'TUFounder', 140, 0, 0, 4, '1585105300', '1584133506', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8eb74d72858e2ebf9ceadc5db0567d03', '172.68.244.118', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5111aab9-656e-11ea-8d43-5254004e2de0', '8a7464de0ac51d844de8cd0c84f879c8', '4df65dba64408386a3043683bd43d550c9665b81', 'zSUwfSF98c43yt2EhiNQS5jGFC9xCo', '230338295752556544', 'ただ Founder', 54, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 955, 0, 0),
('zenka47@mail.ru', '$2y$10$o4CQFtcNB0qkmWvLdhXHGeDbkyTzIUQjVBziAZ7suYj95.bEA/b9e', 'Example', 141, 0, 0, 4, '1584160999', '1584160999', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6f6123412af4fe749250c40297e82759', '172.68.245.101', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '542cb8c0-65ae-11ea-8d43-5254004e2de0', 'cb849efe1c7cda12c053d02aa6481d68', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kakaxa190500@gmail.com', '$2y$10$TSr95rvWZtJean1dQMjbpe98xDYTbLep4TIBDl0A9aA73WOuO5Zue', 'LaGeR1905', 142, 0, 0, 4, '1584172784', '1584172784', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9e193b5b3cd87c7e65e202cf5e54f79b', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c44dc6ba-65c9-11ea-8d43-5254004e2de0', '00adf20693b7f3701a8c8a5980a00437', '7d1d71871c7ad295430299b905a6a529d7129b18', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('P.Burov2000@mail.ru', '$2y$10$w4jt6oCUekQuorn64bZC6OYsMT0nzqD8YyhCeyxUfu7DgiHFuRL/a', 'LordSem', 143, 0, 0, 4, '1584891693', '1584175446', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b3c5f5fe61bc1a61e3567dbe70162f5e', '162.158.78.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'f6f5ca0a-65cf-11ea-8d43-5254004e2de0', '8e8f0d06c6a2a7e814a678807cd20f4b', '-47d12a146cb715fb21ebad5e75f7f73e133cc22b', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('pasha.sh.15@list.ru', '$2y$10$G25AaMMLLazxnoDLsabvuOWJ9Ha737T3I3BbVLwXZQQo8KtSl/536', 'Ta3uK', 144, 0, 0, 4, '1584180981', '1584180981', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '928d4dcf10857280460749bd02b73b95', '108.162.229.122', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'da6abc22-65dc-11ea-9715-5254004e2de0', '6067b68a6227966f6c9f40810e7f0236', '52fd8ffc3910d4b9876638003aacb7c0d77a90da', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('bogdan.safiullin.2005@mail.ru', '$2y$10$4Hpom9SJM/zr0MYV.r501uxq80Xt6zxyTGjcD848RcyNfD2on1BAu', 'Nicki', 145, 0, 0, 4, '1585043750', '1584187791', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '92621c63a82e282acf014a1b0d7b6bac', '162.158.103.155', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b538a739-65ec-11ea-9715-5254004e2de0', '5bf1b13ae834733f213cb1d8f53c4e53', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('goroshkoaleksa@yandex.ru', '$2y$10$78s5Ao.U37nJo0Htcwy5O.vOCsJ4ZysB5jDUKj21mhrSpyQBfSh8C', 'Pink', 146, 0, 0, 4, '1584197340', '1584197340', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '519bfe98f8502fad1e27861fcd2265d4', '108.162.219.154', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'f0d38a7c-6602-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('yushkova_diana81@mail.ru', '$2y$10$KyGwXXTcS3nV8B8fej64QuZKI2Q/KwHbZuKM1U0WAJzXeneSQUome', 'MashaLolahsa', 147, 0, 0, 4, '1584256588', '1584200332', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3baf6d159fc858a4b291f060c625512b', '141.101.69.11', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'e82eae88-6609-11ea-9715-5254004e2de0', '9b2f292120b593708f7662eed75c3c3a', '36b461b022a1605641a9aad25e32bffd3bebb603', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('maksim.fomin228@yandex.ru', '$2y$10$7lLBdulh/cDytCUWwEGRbOSxDgf0ASMAWjaLcWATnly0k.XhaFUne', 'killMan', 148, 0, 0, 4, '1584799539', '1584206375', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '03bd20f0e226c87aba7b95f1f3d8cb34', '108.162.229.12', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 4, 4, 0, 1584207022, '', 'fa367e4d-6617-11ea-9715-5254004e2de0', 'dd24a1e53a82a8008812fdd3055ade16', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('lolkek228@gmail.com', '$2y$10$mUjkcMFr0uKyL8CMQ7oUnenK0HMNtppKbrI3Kn2ni7AKpw2kPbg2G', 'Kralik', 149, 0, 0, 4, '1584207752', '1584207378', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '46f8133493f048931b0c2680033d17b9', '141.101.69.11', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '50184672-661a-11ea-9715-5254004e2de0', '80067f8a67108c1ea3d3a62b4d5a9cf1', '53534f40b7dc62af722f43bf04f6196b95dcb972', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('losha381@gmail.com', '$2y$10$pRND5RSuRRD2MfOYfoZJrecPkiNfnlsSmlIj3iuSzuFjcpH7d7flu', 'FlareTEST', 150, 0, 0, 4, '1584208374', '1584208374', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f0343850056d512d4498e6aaff35629b', '172.68.239.183', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'a1942a5a-661c-11ea-9715-5254004e2de0', '1398f5eb25c24a3383d07ab35f37486b', '-26e266062c5ccaf9cec83e21004056289167d79d', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('863103828@bk.ru', '$2y$10$kBNt/ZUYoRM4F3v931GHDuVO.UM/zV8E15gHmXPmNkRu4ihxZOBOK', 'Haza228', 151, 0, 0, 4, '1584209174', '1584209174', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7b793ebb3c1f560c1c8fad0f4c0496c5', '108.162.229.188', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '7e5762a3-661e-11ea-9715-5254004e2de0', 'f2d9406024ff06e2e0263dd4b02b2876', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kaktus00_00@mail.ru', '$2y$10$UEWcbWGj8jO9YiW3ogoZTOpVT43MnOtgT/3417zUDvOwG3Rxdwqbu', 'KakTys22', 152, 0, 0, 4, '1584212459', '1584212459', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6bcc74d17ff93fe8f91a592f897b5263', '172.68.10.210', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '24b88ebd-6626-11ea-9715-5254004e2de0', '7fcca102ea4c49ebd09ece8c4e8d8a1b', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('mecheniuyt@gmail.com', '$2y$10$ERYn6yB.Hs0E0cNV1wcRqupIBGU.3v6d7KeBwEqqq/gjPcQpz56Tu', 'VIZZI', 153, 0, 0, 4, '1584747476', '1584222103', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'acdef10c2f67ecfe639189688ffa884d', '172.68.245.101', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '98c15cd2-663c-11ea-9715-5254004e2de0', '8620ad9a5580ae47844b5d37d14583a2', '38c1c825349ccbc1fe18cf11948857ed0b776c86', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('d-mambetov@mail.ru', '$2y$10$4DuKlok6NARZuA.Sg6nCueWrDHU76yaXh8FO5rlLfcyiYwZW.kuGW', 'saxtot', 154, 0, 0, 4, '1584751253', '1584255713', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f9a9a176a3eaee6161ff55b45f136279', '162.158.134.30', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd9d2745d-668a-11ea-9715-5254004e2de0', 'c5401fcc7e5dda1cda5cc8de74b298ad', '2199a234f735c260e27fb7ce88ffa27047d09501', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 50, 0, 0),
('wartankraft@gmail.com', '$2y$10$1PA7f/LrFAOqBYtAqgcy2.1dSYiH2UzV1hODvdfjZVX9ydYFs6ccO', 'KitKaterz', 155, 0, 0, 4, '1584535739', '1584258362', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9c8589221817d85b24bf3b4388c5f0f4', '172.68.239.201', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '0502d839-6691-11ea-9715-5254004e2de0', 'a916684961641733e7924a386714c5f5', '-eed469bfbd28adca58486286735ca1f2893910f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('zjr14444@mail.ru', '$2y$10$GlcGgt4o6eR7Uum/9GHoEuFImm6V8IZJbWcnA3X.GCU0SJeAtHkR6', '16KatYriK16', 156, 0, 0, 4, '1584263706', '1584263706', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3af0f96004404ab2157dd7288797f24b', '108.162.229.18', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '75cc664d-669d-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('danarabinin1@gmail.com', '$2y$10$j/K4A0KkU4y48fixJY0LaOeQzLo6UxCuUSlUtFRUV/BBBuh4PrV3S', 'mrdanmix', 157, 0, 0, 4, '1584270536', '1584270536', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'fd00dded1c63e5901aadedfaa1175390', '141.101.69.143', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5cd6af74-66ad-11ea-9715-5254004e2de0', '8548f0acf5e0ebae43a5779f290b670e', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Artem.Stankevi@mail.ru', '$2y$10$E8B4/HLQ7EY7mO.lgCLBI.p7RnAKH0cvDSikzEvkG/6VeqvBdFLkS', 'Vadim997', 158, 0, 0, 4, '1584281721', '1584273788', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '2a2a2aa73d3abc964184057aff954a85', '172.68.10.228', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'efada21c-66b4-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('easypeasybabo@mail.ru', '$2y$10$96zFkM7B0gIz5s6z83f2mO5GBEXwRbIXRUmhapzRVg3SZLFfez7pO', 'uHky6aTop', 159, 0, 0, 4, '1584275049', '1584275049', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1b8adff9f1fef40c291e367bd57804b3', '162.158.34.50', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'df377666-66b7-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('filXL@yandex.ru', '$2y$10$FblJcpV0fV07vZmqOFeYWOZhIHn2i2DVaOAbGmx8knHOI6MJQZ2ou', 'Pro1OOTankist', 160, 0, 0, 4, '1584284478', '1584284478', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3d7fc5e6918ebead82cc2eba693b38e5', '172.68.244.88', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd35bbcad-66cd-11ea-9715-5254004e2de0', '4f794c3a400296f695365746dd562581', '-4b3240da0f697b27f8424ffd6269fe00d05aebe8', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kiryushka1703@mail.ru', '$2y$10$jNXMgZPiTqdUQ1q0xSYDp.O71XOiN9SV9tR5Bl/lTUv2jOe8XXUW.', 'Loda', 161, 0, 0, 4, '1584284594', '1584284594', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f936073ba4c301ddf2e8351178754698', '162.158.103.155', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '17fe50b5-66ce-11ea-9715-5254004e2de0', '25c5c157d3818a3a0e9bb48da9063ca0', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('counter_strike1623@mail.ru', '$2y$10$VLthBrTv2zlSAwdFUai/I.NbM3ruerG7Yd/HJlfod4tCXADHcnKAS', 'cho4er', 162, 0, 0, 4, '1584285879', '1584285879', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '38f4976419a0389258a60fad0b424b52', '162.158.103.57', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 3, 0, 1584286095, '', '161db496-66d1-11ea-9715-5254004e2de0', 'd40331ec117f6bea540df650012e3812', '48fa64ae35bb2721f6912c0a6bb0f95b13823903', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('anton_minakov20@mail.ru', '$2y$10$OjKBNkTE83e2qJ4Q/ZneqOgLZdGCHLPckF4KkcdOXEAKVJIipb8ja', 'f24anton20', 163, 0, 0, 4, '1584288122', '1584288122', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3eb3af61effad2e908af1712c99967d3', '141.101.69.143', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '4f4b25b2-66d6-11ea-9715-5254004e2de0', '20500f6599d7c134f97a5713358b969f', '-17f0d5e99294f0f02dea7cccdf48b4683512fa74', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('thedrugachannel@gmail.com', '$2y$10$lAK4pHF.eNvpe9ZWf/4N4.v67hcFqko2ycJfuSNuJqhiOw3ULLgNu', 'GenesisYT', 164, 0, 0, 4, '1584305182', '1584305132', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a886ed4108fa33bf7bf235d56eb8977e', '162.158.63.112', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'e9d6c687-66fd-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ASdemon@3yandex.ru', '$2y$10$wF12UcL1jf/xih9IfC6yw.rxfxdvrTrJrH6DBDVB76WjRaOXt7Cge', 'RUB1KC', 165, 0, 0, 4, '1585133926', '1584305527', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5077d9be2a5b5dad9fab58781e96613f', '172.68.10.54', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd550bd48-66fe-11ea-9715-5254004e2de0', '20c52aa5c9efc40148ac471e804bc0c3', '505ff22335a457c147120fb71450b14004a50e49', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('matviei2025@mail.ru', '$2y$10$a0gSCI0uIwltrwi.8l1asOCkAKWZEAYTKxqZdHKm4VaUzV2atTTEm', 'matviei2025', 166, 0, 0, 4, '1584347028', '1584347028', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5bd90124cd87f2f881d6874c6564467d', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '75ac104d-675f-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('zaravlr@mail.ru', '$2y$10$JKWCOIQiJFFmxzIk7XBJ3eXWZrIIM4yTg5pcwlM2Hu.7AtTw3Wyji', 'Fridom', 167, 0, 0, 4, '1584668114', '1584372571', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd170fda083fcc933cb155dd860a45167', '172.68.244.118', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'ee9c504f-679a-11ea-9715-5254004e2de0', 'dbc42b33fa120ba35a8bc1e1754208ee', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('stas.kresu@ukr.net', '$2y$10$0azOvA6XXZUwunwgbeSwrOPlUOof0DDFHYVVCffwQ/1zzGsGwACcq', 'MAJOR-UA16', 168, 0, 0, 4, '1584374032', '1584374032', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8866871592c1785140d470f99cf32a83', '172.68.238.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5540195c-679e-11ea-9715-5254004e2de0', '766eaf6961cdc821bc31f4b8fcfb3840', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('stas.kreсu@ukr.net', '$2y$10$llafSnEJH34wNW3LWiTu4eixJYrqfhETvSO8OF44W1NXPCgP.VFEe', 'MAJORUA16', 169, 0, 0, 4, '1585147828', '1584374809', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f3af0616e0618cfd49bcffa785a95453', '172.68.239.183', 0, 0, '', '', 0, 0, 0, '', '', 35, 0, 0, 0, 0, 0, '', '249809bb-67a0-11ea-9715-5254004e2de0', '9459ab910c88c82f164658302b1e40ef', '-774c179421f90acebdf544ed0e82ce95067ff018', 'false', '', '', 0, 1586967933, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 341, 0, 0),
('hialgo1@mail.ru', '$2y$10$rm5z43NYmz.btST.1nYxEOHUUVcLUh852m9TfDnrwXlzzmv98gMLi', 'Divory', 170, 0, 0, 4, '1584377782', '1584377782', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'cc29286120c04111a2212302ba5ed75a', '172.69.10.86', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '10eddc67-67a7-11ea-9715-5254004e2de0', '9883c2bbf1cd50a4f9539efb7f5005b8', '16eb2cde58ac71ad0d64033832570251bc3a0f2c', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('434yg54ef@mail.ru', '$2y$10$9zoHiiab5O/m3pqFapCDyONd1k1Pa4xHQfalCl05J73uzAH7jAEo6', '434yg54ef', 171, 0, 0, 4, '1584389881', '1584389881', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '27b65deb97818cad942a7ca21f1386f2', '172.69.10.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3c305bf2-67c3-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('livib@inbox.ru', '$2y$10$f2KP2Id4I2O/Ns0A9WCUQe1vHB4ERQGSTcU7Q6bqMUZcv/6BGPdry', 'roody', 172, 0, 0, 4, '1584859796', '1584432044', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '845e9278e485d86467dbad50b5adc4a2', '172.69.202.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '677d31c5-6825-11ea-9715-5254004e2de0', 'af8cb7d1e1377434d6a827934e30c38f', '354e203ef66cf0bee026347d757809691f484a1a', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 7, 0, 0),
('marinamedvedeva10.11.2001@mail.ru', '$2y$10$DJXiDtiL35N9qJcxiDhXju/wYN1stfyRHgnP73uL1zMx.jdzHqiry', 'marinkamed01', 173, 0, 0, 4, '1584451527', '1584436376', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ea93ac6a4a3f3bcf807dd1c604c64bc7', '172.68.10.132', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '7d35626c-682f-11ea-9715-5254004e2de0', '13268db4c54f2a3399354cf41d8404bd', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('lexanghik@ukr.net', '$2y$10$dpNmPTQAdISoK2ISzXcKk.Nmqu7JH3kElTFXitEkbPZB9QFcMHdWy', 'lexanghik', 174, 0, 0, 4, '1584443871', '1584443871', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'abcc04475d61b4ff9a2a333a26d96fee', '172.68.238.8', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'f0d7bb40-6840-11ea-9715-5254004e2de0', 'ceee1cd01e1f4f0ed20ef31f86db8392', '-1265b2099f2c389c94d50bbd0b04688134d64e97', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('123.123@mail.ru', '$2y$10$7n439OahaMkt5Ap6UDV6BOGtlZLXCiAe5eTkLRYNKxrDVquVtD4mq', 'ProFessorPR', 175, 0, 0, 4, '1584445110', '1584445110', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'cda486bfca055468f06c0128f4a6adfb', '172.68.10.176', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd3764d2e-6843-11ea-9715-5254004e2de0', '56668352d097e7a98cb32d7a75c6b034', 'bb1ab7ef6bff0f6b092ed1016f238ec5c57bf7c', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('cool.iopa@yandex.ru', '$2y$10$9q/X..TdgSW7QkcF6Ju6s.i5oKFfeOqecW2GT9m5cykDDgGUiyKEu', 'RussWolf', 176, 0, 0, 4, '1584687467', '1584448988', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '987d3726677bdb662b920bc5c5032019', '108.162.229.18', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'dae83c59-684c-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('bunturi68@gmail.com', '$2y$10$iEGCjgSydgIwLsk5r7zhf.hvpO.BnQEHf0Dkr6v3qasiKQJqFCFi6', 'FlashBoyYT', 177, 0, 0, 4, '1584451116', '1584451116', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5cf92eacf1264e52c690ac31392afc40', '172.68.51.218', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'cf1eb7d9-6851-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('cocarturcr7@mail.ru', '$2y$10$j22bsGKEEz6cf6vN4W1uo.Yy9Gfi9pduyzwfrXZQfHkNq2stikxCm', 'Hokage', 178, 0, 0, 4, '1584790178', '1584455939', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '914a987227fd052d89dbed47f458294f', '108.162.229.18', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 4, 4, 0, 1584456188, '', '09cacde8-685d-11ea-9715-5254004e2de0', 'cb4b14ef28460db3516f741d75d0b44e', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ytemukuev@gmail.com', '$2y$10$jmsvdnLLQd3fRFqVQj1COOaQRAzI6tY7E8Q2NaNI/7CBsJwfR0LVG', 'aranagibator', 179, 0, 0, 4, '1584462392', '1584462392', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b6b6f27008542bcbe4ec51e2eef330d0', '162.158.103.57', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '100bc9fe-686c-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('sakrustam@gmail.com', '$2y$10$oXeeE2mukQ7DcApd4reWPuFDrme7WetfLAnGTAy4V58fWQQ6.2Hp.', 'Rustam', 180, 0, 0, 4, '1585155605', '1584464094', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd907c4e180a2e1c2a7e3a6f47d1d771f', '172.68.10.188', 0, 0, '', '', 0, 0, 0, '', '', 0, 24000, 2, 3, 0, 1584464205, '', '06cb84cb-6870-11ea-9715-5254004e2de0', '8dfcff92b50dca43382d1645a55c7785', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('nabok34@gmail.com', '$2y$10$HExqw9lL3G3RjaD6xjno2OyFyvcmNjGrlGrzXgDplSkiEjmRH9sf2', 'Prolap', 181, 0, 0, 4, '1584964610', '1584468977', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e81eeeadb87373332441d3110abdc20c', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 1147500, 0, 0, 0, 0, '', '64ed3605-687b-11ea-9715-5254004e2de0', '428919576ce745bddae5961058c4e66a', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 6, 0, 0),
('zloycat1999@gmail.com', '$2y$10$h0RLkSnf1lwgChpJIveb9O3Z1lJjA4QMwwa35BUkAjEWA1Hr7yiRW', 'Zl0yK0t', 182, 0, 0, 4, '1585151772', '1584471784', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e0fdd0810fb2ae517dd086cf2cb009a7', '162.158.79.69', 0, 0, '', '', 0, 0, 0, '', '', 0, 88000, 0, 11, 0, 1585048806, '', 'ee49de5e-6881-11ea-9715-5254004e2de0', '828603cef75861a91d252e4e82418409', '7abf942d8b5b2f5681f8dd10e7f6c23ba1ef4d64', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 126, 0, 0),
('lalka.lalka.24@mail.ru', '$2y$10$8eLR2/GyY7YhNS.BhF5Cxu36QKap/etBosopkRdiKan5Z.RxxngUK', 'nonik08', 183, 0, 0, 4, '1584473887', '1584473887', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6cd24d7827cce0744546f37333963d67', '141.101.69.11', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd3703640-6886-11ea-9715-5254004e2de0', '46f02393a886144a53ecc0dbba95d7e2', '-7e9ddcc0dc076bd6f6b2a2004321222315251e93', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('sashavolkov775@mail.ua', '$2y$10$tMEIxL2FJZ5bNAsMjDBHX.866w5A4LHBGKv4cL551YG0jRwA2Q0Yu', 'TheFry', 184, 0, 0, 4, '1584520377', '1584475594', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9f5487ce58f5e6afc17df2df20e62705', '172.68.11.189', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'cd045035-688a-11ea-9715-5254004e2de0', 'b2bf8403b4a91a765844ec9ae4b81bf3', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('lehabel787@gmail.com', '$2y$10$i4vMZJrzRcH2Gfq6ws/EI.7DTjXny6yyrG7AdJSwa7vlIM1DszzRu', 'AlexPro111', 185, 0, 0, 4, '1584516629', '1584516558', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1c58694c353a76a28cca1720c4b9e0bf', '162.158.103.217', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '2d818032-68ea-11ea-9715-5254004e2de0', '929e9370232f858354b9443ddbff9df8', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('taber.tdkononov@yandex.ru', '$2y$10$9LV76slt6S2B4hiQs8zmOuE5tWQSxeAyzQxM.qvvB2bUVuOa73582', 'Aleksandr', 186, 0, 0, 4, '1585157386', '1584529333', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ab15aab7609efb5b69cca7829c029d67', '162.158.111.149', 0, 0, '', '', 0, 0, 0, '', '', 30, 164000, 0, 8, 0, 1585040635, '', 'ebe3d0d3-6907-11ea-9715-5254004e2de0', 'f27de110355842506ee19f387d5c9926', '5909268e8940badc86c8d5652b7848aa7e43e94d', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 22, 0, 0),
('werewe452@gmail.com', '$2y$10$VD0UwYI4xgVsCrgvsSWvSuqzYfGbkTTsJqEuAE9yJIAkLYg132NQu', 'Diamond', 187, 0, 0, 4, '1584790546', '1584531048', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '676a6ace75e97b741eee4be715b43d42', '172.68.238.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'ea99411a-690b-11ea-9715-5254004e2de0', 'a27e6d9da21b34a7d96416341ad6a79c', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('vinimixyt@gmail.com', '$2y$10$hxnTZDiG8YhNcxtSzPqqm.CGgMgu2NnSGJReeJtgDXSxb9Xrrr6.K', 'PurpleRose', 188, 0, 0, 4, '1584537198', '1584537198', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7e0125ffff7f4ce43c96bc7e47f08ab4', '172.68.239.217', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3c3060c6-691a-11ea-9715-5254004e2de0', '7960ab2a12f07ceed1401e206bdad262', '1d79690eab4a309782d1d09f221cd470f027820f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('adil.ospanov.1995@mail.ru', '$2y$10$d910fHPGEV4g7XLPc.DAmOh8gWWEWaeiEr5cF8JdlD22GIR1sxuVO', 'ALELY9', 189, 0, 0, 4, '1584538114', '1584538114', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd54a6748729a5e5b4667ef2904ffb6cb', '172.68.11.11', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5e31133d-691c-11ea-9715-5254004e2de0', '144952548b60e701fbc0bcd0ab741d8a', '27b4e7d7c517ae8eabfbe0b14a906d541d40fa95', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('andrey.efimenko9876@mail.ru', '$2y$10$Ytj6iNLGBgbkOvQB6uOAhuCrXNOorpxSv.OVxigpYbAQjDkX2uGji', 'StreamProduct', 190, 0, 0, 4, '1584545076', '1584545076', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b796c8c6a544a9331088a65f144ab765', '108.162.229.18', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '93ef7ece-692c-11ea-9715-5254004e2de0', '105a7231e9c0d0710ca9ff75c32d0752', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('apceh4ka@bk.ru', '$2y$10$9QDJlir938P40hfdR2m2EuqJJhXu/2juDjFCXCgu62xkIKLBAGzbi', '4pceHK4', 191, 0, 0, 4, '1585068538', '1584545845', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3c4a80f1c18a704f187503901c6430a6', '172.68.244.94', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 3, 6, 0, 1584650081, '', '5dde12fc-692e-11ea-9715-5254004e2de0', '6227c4c86667e637cb03c6abd36a2863', '2724a0e04bad39216419f5a751d351504cdcc46e', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('solomeans@mail.ru', '$2y$10$/Pfinh4.ynnIiIoeToE.mO8YfsrhENEEtaIJux3Y6CO0ViRyBeHOe', 'Black', 192, 0, 0, 4, '1584923889', '1584548055', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '59d2d36fcf3664a27dc454325cbaa810', '172.68.11.123', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '838155c1-6933-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('g_kaplun@bk.ru', '$2y$10$bDV2aszfb5XApwFRsWsfB.U4zSNvJPd4farTAZZlbABHqjUrL7lva', 'Jorj', 193, 0, 0, 4, '1584549791', '1584549791', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '190c0564ccfe1f6f4676001b228521ab', '162.158.103.161', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8e0a9047-6937-11ea-9715-5254004e2de0', 'd3a02c94783cd03a0f5de7519b2c7b62', '-2043aab150098417d6f41c3cee5eaa6689b2e623', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('oleglavskij@Gmail.com', '$2y$10$.WMV/22YAHvnl9kfyXnW.OOWAFLU8cJ9VuDLppz//r6uhgRAMDiyO', 'ZoomBlack', 194, 0, 0, 4, '1584926680', '1584551865', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b206451f9ceb53cc9959d4f668c7e04f', '172.68.238.92', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '625f1108-693c-11ea-9715-5254004e2de0', 'cbfffc64a41309a9ef3ecedd02ff167d', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('alexsandrholenok@gmail.com', '$2y$10$4ndK9NN3F/0z1qeIJEdveejdnxt.SoxwZyQHXCGxbS9N/TfIq/qpC', 'RabbitClay', 195, 0, 0, 4, '1584551945', '1584551945', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'cb4eb1b14a0fd334d05c3d15834059cd', '108.162.229.12', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '91bad14d-693c-11ea-9715-5254004e2de0', '00606b5fc36e06718a3879330bae6835', '-7b9321416f0ab9d419fc266ed10ab1939e07913', 'false', '', '', 0, 1587145441, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('arbuzni4nik@mail.ru', '$2y$10$TVuXH.aCoH.UWbASJBO3sOk7ns3EkToi/EtOKYPteEZs0BLMm2EI6', 'VortDyn', 196, 0, 0, 4, '1584818355', '1584590561', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'da1ae5a4c33977a9e0f568571a307759', '172.68.11.123', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '7adaccbb-6996-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('default@default.default1', '$2y$10$v9wXngTKO9yT5ZLg2HrX7.WdlpslczbuuBUe4XvGea4w03CgXKhUS', 'Root', 197, 0, 0, 4, '1584965140', '1584602842', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9b796e5d98f8a6ab9cf8d555f0c08f3a', '162.158.103.27', 0, 0, '', '', 0, 0, 0, '', '', 0, 8000, 1, 1, 0, 1584620549, '', '12dcb8ed-69b3-11ea-9715-5254004e2de0', 'cec1afac926fee5efe3996201df3a852', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('vechnyy-2016@mail.ru', '$2y$10$mqVyK54VbPQ4NyMp8Zdzt.ETrfPlb0UGdMfwJRilmx.8KPvFaGfX6', 'YVNKXX', 198, 0, 0, 4, '1584622614', '1584622614', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f48dc30ab0a9a397f59a54905f73009c', '141.101.69.143', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '1bde7fb9-69e1-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('profi336@mail.ru', '$2y$10$MOy7cqnQR27EPqGWDAM07OXNXCP9zmkdZ60RCpMP5R7YX/52zbTJG', 'Cr1stal', 199, 0, 0, 4, '1584651141', '1584622934', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c17bc0ee927c1f271f17edbde6382ddd', '162.158.103.203', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'daab49fa-69e1-11ea-9715-5254004e2de0', '59a89c62283a3a52bb002cb6ced78b17', '3660a84c8083bbfad0c84a862d1b9f632547d82f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('basirov.artur2016@yandex.ru', '$2y$10$/Zsj8v6TtdHVMajFzasYI.Y/YUoI5glA3SIlETPRHBNj0KNNH3Bje', 'Bratishkin', 200, 0, 0, 4, '1584625088', '1584625088', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f4577294c1752a20ea6456f96b182c2e', '108.162.229.80', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'de7aff4e-69e6-11ea-9715-5254004e2de0', '227a690c12b4e570b7add22ceb8339b7', '-4fda9ed99f51e396ef28f3a9edc931f7d51267a2', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dr02102011@gmail.com', '$2y$10$4P6rgOExnHUw7LxMVYlFcu41nVxDgCeo7KQnnp9JUyxDHi8muKuwi', 'CellTonus', 201, 0, 0, 4, '1585121051', '1584638120', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '30fde2ca13321d6327da71cacef062ca', '172.68.11.201', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 8, 0, 1584781063, '', '36478a94-6a05-11ea-9715-5254004e2de0', '34b5be77d1e877f67ed3d7c5064dabc5', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dalvice.rall@mail.ru', '$2y$10$6v5X3RZV4A9/4mLU91JTO.85USwxOrwOKa6ZpHi/JZWNNwjI4mkHC', 'DaLvice', 202, 0, 0, 4, '1584642824', '1584642824', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e8c56d445b54dc3a5c3f11a4fca2eee9', '172.68.244.118', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '2a3a8eca-6a10-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('smurfbost228@gmail.com', '$2y$10$RoUdtyul/jd/pdjFDC6rv.8u1Nb5XIxV9g8Qf24QEVIRCNnNhltea', 'Egorka', 203, 0, 0, 4, '1585070360', '1584647252', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f63b47e43aa9393b479f1ee814ede2e3', '172.69.10.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '79122a0a-6a1a-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kolya45628@gmail.com', '$2y$10$RRJVJWZkmk8wXB9KDvSEM.VxwbPDrfkd9z4hLi2Pny1OFtWVw9jHO', 'mrpetrs1', 204, 0, 0, 4, '1584648668', '1584648668', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8f37cffab16448addaf917dc50c57fef', '162.158.103.63', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c551902f-6a1d-11ea-9715-5254004e2de0', 'fe83fe7f9a7f6ff3b044474001bd283b', '7904b7e4c1858623d0ba797ce42d238282a4ccdb', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 936, 0, 0),
('hpk.zayats@yandex.ru', '$2y$10$YIzYzTN51GLriVWbOdFmduBa1dejBzrckvLhIiUz1nb3RBta4cQ/2', 'ZAYATS', 205, 0, 0, 4, '1584653049', '1584653049', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9c5f957836c46b7543713fd04ecee2fc', '162.158.103.161', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'f85b6b4d-6a27-11ea-9715-5254004e2de0', '7ab87a1eabdb920efd693320017774a9', '-4a6421de59342ccfe7becceb4b3781fb6104b4cd', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('diosdif@gmail.com', '$2y$10$oz6Nb3Wiuv3svOQSNs6epucVXdd55bNTDKrKKEcgQkrEpDtggIMAa', 'Djnsms', 206, 0, 0, 4, '1584688889', '1584688889', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'b023ec99a89396c64c3e206278f91a48', '172.68.244.106', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '6abb779b-6a7b-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('denwarpro@mail.ru', '$2y$10$yJg.z1eI1j1kw/N./0AxM.IC8CMRfLY2SoOR2VvnfEyfHJkMseMgW', 'DIOSGAME', 207, 0, 0, 4, '1584707716', '1584690094', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ed37cfd3ab955548f8b6749dd2f94c3c', '172.69.62.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3905859d-6a7e-11ea-9715-5254004e2de0', '85004ca3ac96f29ec28228f1b5d22016', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('zevs20-12@mail.ru', '$2y$10$OkXaQWy9mrxwq4.AAO7ga.Q96uny2gXvDnQh.uuk7keejZMYjRgNO', 'barvil', 208, 0, 0, 4, '1585139794', '1584691023', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '884321c0161f24f24b83e6ce7eedd12d', '172.68.10.38', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '62e519e4-6a80-11ea-9715-5254004e2de0', 'dfcce01650ee296ff0480200d8e36f42', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 3, 0, 0);
INSERT INTO `dle_users` (`email`, `password`, `name`, `user_id`, `news_num`, `comm_num`, `user_group`, `lastdate`, `reg_date`, `banned`, `allow_mail`, `info`, `signature`, `foto`, `fullname`, `land`, `favorites`, `pm_all`, `pm_unread`, `time_limit`, `xfields`, `allowed_ip`, `hash`, `logged_ip`, `restricted`, `restricted_days`, `restricted_date`, `timezone`, `news_subscribe`, `comments_reply_subscribe`, `twofactor_auth`, `cat_add`, `cat_allow_addnews`, `money`, `econs`, `cases`, `votes`, `votes_top`, `votes_time`, `rank`, `uuid`, `accessToken`, `serverID`, `discord_token`, `discord_id`, `discord_username`, `discord_discriminator`, `donate_time_DTM`, `donate_DTM`, `donate_time_SkyTechnoMagic`, `donate_SkyTechnoMagic`, `donate_Galaxy`, `donate_time_Galaxy`, `donate_LavaTech`, `donate_time_LavaTech`, `x`, `y`, `z`, `code`, `referal`, `playtime`, `referal_active`, `radio_admin`) VALUES
('e09092002@yandex.ru', '$2y$10$vRFcse/B0B08YO0GpGV4F.glNLaSbeDYlXjyQEWyMl4A2vzZn1fbW', 'Re4antix', 209, 0, 0, 4, '1584698156', '1584698156', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'bca3f783b3366438943aaf3543d7b15a', '162.158.79.75', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'fe955510-6a90-11ea-9715-5254004e2de0', 'ebd62b1e82ea32585c53e2067498e981', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kashin004@mail.ru', '$2y$10$g4px/ibR.0u9COv26dLzIeYcBdvP8ul.RGYu/PfC6fDYBKq2ArIQC', '10qq', 210, 0, 0, 4, '1584700108', '1584700108', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '51854066db235049a9e5707aec81a9a3', '162.158.103.173', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8a10e458-6a95-11ea-9715-5254004e2de0', 'b9f88e9d61d3e30c96887bfa91b4ad30', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('scriptscmd@gmail.com', '$2y$10$9/C0EAVEXJXPBzLRq9o35utuz8QwPm11UDJt5CaBY9H55WF1yX66m', 'Xder', 211, 0, 0, 4, '1584711548', '1584711548', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f1c1541df3d617aed21b112b2374df96', '172.68.239.201', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 4, 4, 0, 1584711838, '', '2c84bfdd-6ab0-11ea-9715-5254004e2de0', 'c3c40bc58dd351df147ca4289b6d0b20', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('arxitektor.97@bk.ru', '$2y$10$98eMKknxF.Grojfy8EBqy.Y0FddbyRCzRxYVRHZw9PpcH7ck/AmTu', 'FRrozZzYY', 212, 0, 0, 4, '1584953550', '1584711659', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '29c5fc89e3755b655d1eb3710265cafe', '172.69.10.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 4, 0, 1584711734, '', '6edd0804-6ab0-11ea-9715-5254004e2de0', '401c9899bd157b743aeb5dffd2e92e87', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('leha.chesnokow@gmail.com', '$2y$10$CZADx5j2OQWCeabVRVaStetcE8zmfgRWjDvax7FbT2NC8AoJqwPMm', 'Shadow', 213, 0, 0, 4, '1584712082', '1584712082', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '40b281b703b3e960dba30ed806cdc839', '172.68.65.40', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '6afce841-6ab1-11ea-9715-5254004e2de0', 'e40c3409716d12ba18c8fb98ee00134a', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dm.elackov@gmail.com', '$2y$10$90oOZypc95aIyGebVJvFpugUuui9bkZ5EN8er8PcqLDbglTQv1xRy', 'Blackstone', 214, 0, 0, 4, '1584881552', '1584712813', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ee9d7a3f142d65b6f22e7bb5def5fb62', '173.245.54.221', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1584725507, '', '1e6af04a-6ab3-11ea-9715-5254004e2de0', '8e69c08e68ab6a620e3b361d35c6c240', '50734cdf3c4a2cbe36bcf9863eeeecc7102e4b8d', 'gKAhM9ZBtshY8ucimImL8RhL0obFMg', '337577546168401920', 'Demon_Dimon', 347, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('rumyantsev.2003@mail.ru', '$2y$10$BZIGR8/ZBenCf1536FA.zupAQhm8mbIghCrYJCTyz9hN8PmHtGccq', 'pro100romkaYT', 215, 0, 0, 4, '1584714901', '1584714901', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'bdc5ce380a91066e01123972e1f6d1f0', '172.69.10.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'fb17c46f-6ab7-11ea-9715-5254004e2de0', '9fa34c023cdcca4ef1f2a7eca52281b4', '-e3e6c05a6d9da7f76b8bdc5e29d6d20f57704aa', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('asdhjkxvhtx@gmail.com', '$2y$10$Cx7M13vpBYtPHToOzqztKOXp8097zRKEfOY2yTqB9R9Pi7T3w5UHa', 'MrFaRaON', 216, 0, 0, 4, '1584714974', '1584714974', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd4e6dc7b3892a6347f174c18b0be0ec9', '172.69.62.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '26c95ec0-6ab8-11ea-9715-5254004e2de0', '9788f0a7a79c6f7c8465c97788085956', '3c31da13ecf2a7524cc7b17e81d7b0d961102b69', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('maksim.t03@mail.ru', '$2y$10$SEr.XuDpqh7.Egs7OIETcuALoUehF6ieB5cwOQ2TXcMpi4HUGkj.u', 'MastepDeaf', 217, 0, 0, 4, '1584991771', '1584733681', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '297be86b743aaa2d83c02084420febb7', '172.68.239.201', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b5292c3a-6ae3-11ea-9715-5254004e2de0', '81ce7dc98ee1d520dbca25a26e5de74a', '-69ef0be228dfbed8119873baceda76bc55c387b0', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kolyakolyakosten@gmail.com', '$2y$10$vlzjJxEsGoqvJ2HtGlgx6ufSEf30SOkqPi1chVuGU7i4I9CbV98vi', 'Nikolaii', 218, 0, 0, 4, '1584758521', '1584758521', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '6b90416f9045b7dda853174b049cebdd', '162.158.202.38', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8aedf67d-6b1d-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('tatymovmaksim@gmail.com', '$2y$10$MHC7oE0EiN4kSSJZvTuRjerPxbOhL0s.PeAPWl2LDTiptMYKmnGha', 'LOVING', 219, 0, 0, 4, '1584769429', '1584769429', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '19a4337d3395646906ec7b1bfe145764', '172.68.11.237', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'f0516dab-6b36-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('danasimakin2@gmail.com', '$2y$10$mwG0MYwYmamt3i.zUQwYouk3wStYWNGwD3GXJ7LdS1PR3dGHr9fpe', 'BlackStyle', 220, 0, 0, 4, '1584949521', '1584778181', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1556bd6a5733cb1d6083a0c1e19b829f', '162.158.134.64', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '513f3f25-6b4b-11ea-9715-5254004e2de0', 'ca8d83b52611d486e3452aadeee19f28', '-560badb5cd4c3873c90e48241778783694525668', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 648, 0, 0),
('proshanov.artem@yandex.ru', '$2y$10$1TwxovAbLeZnhooZdv/GduGRQz0kP/rIdVRCqrm8eBVXDPbbtYCVG', 'Henke', 221, 0, 0, 4, '1584985262', '1584781268', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '047617a9383175e850649b8c5988e27a', '172.68.11.201', 0, 0, '', '', 0, 0, 0, '', '', 7, 101980, 0, 12, 0, 1584985517, '', '80d942d9-6b52-11ea-9715-5254004e2de0', '0cba149656ec423f1fdc221edf2c16ec', '5a274812dd93d5079ef80b42374fd526de037fcf', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 158, 0, 0),
('maksim.zahar99@mail.ru', '$2y$10$m.XR5I8oz.XSjqOdFs3bb.AaKaUhsdAAI6M9PE2aar6B97PGZsLHm', 'Cherry', 222, 0, 0, 4, '1584782812', '1584782812', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'da7a52960befe1de8f3acbfb86d7539b', '162.158.103.27', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1584782995, '', '19892bf2-6b56-11ea-9715-5254004e2de0', '6bbbf78fc724463b9bc36c79cfec5ad7', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('adamko.vlasyk@mail.ru', '$2y$10$t5dVU6Aqg/8EiQzK6NXzfuOG.3s9v6BfxalLjzgsEDKq6p2kB86QK', 'Klasno', 223, 0, 0, 4, '1584787276', '1584787276', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '820827cacbd5f9183a6d49f350ed4e19', '172.69.222.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '7e49f443-6b60-11ea-9715-5254004e2de0', 'a9dc8a527d8537c15f7080677a38d13d', '714a9fc1b289ae852176637f0e7c887db3a68b1f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dogsnoopdog15@mail.ru', '$2y$10$/n.YamcdE9Cd2klCLneL/.oYJiVcYsQKZN9Ao3HgAno2baB2NjJBq', 'Tapochek', 224, 0, 0, 4, '1584946811', '1584790249', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ac82b91a3e852874a4e571595dd00d21', '172.68.65.88', 0, 0, '', '', 0, 0, 0, '', '', 0, 16000, 0, 2, 0, 1584947229, '', '6a21125d-6b67-11ea-9715-5254004e2de0', '7c2ae6b053c8bd2688fbdd2b23b74a74', '-4541865ed7b6d171f2d9d6aff740784072360181', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 129, 0, 0),
('adadada@gmail.com', '$2y$10$OB5fCR.I46B.RdggPkaH9ew87jftldIyRdoSrwEq2KTT5DkyAlYBC', 'TimeDust0', 225, 0, 0, 4, '1584791227', '1584791227', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'beb1da75da1e0fcc690abb2a2adc81dc', '162.158.103.149', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b12b595f-6b69-11ea-9715-5254004e2de0', 'e9aab1e8c165f4b2031d744c7351da8a', '-2bf60711b1a61763ba02607b8b8f3a4ae554e671', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('stepan.nikolayevich@list.ru', '$2y$10$Pglw6g0T50MS3Vya.yh0IuvGm.EXsKRH8Al11fGW5maBpK5Tf.hry', 'stalker121', 226, 0, 0, 4, '1584792323', '1584792323', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '537b07f38226268a1eda6666b3911da5', '172.69.10.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3e7c5884-6b6c-11ea-9715-5254004e2de0', '20f056a10240f45496005e63bb9e23d3', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ienco@rambler.ru', '$2y$10$d8lvHWS/.b7H16Fi6P/Q5OcnLaUuTFHKAt4qoe2eDQRCmNPpdSIEe', 'ienco', 227, 0, 0, 4, '1584797552', '1584797220', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e9b7b9d4d507763c22f9541a815b32f9', '172.69.202.32', 0, 0, '', '', 0, 0, 0, '', '', 121, 0, 0, 0, 0, 0, '', 'a4f2458b-6b77-11ea-9715-5254004e2de0', '0fcc1d9bf257b736103b75ae5b3055cd', '62b3952677b6a7b1646e7986fbf7f99f6cecb872', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('katchum@bk.ru', '$2y$10$LLsEIcZFvKDBkCWvNR8Gv.UDp2H8Mppz6XhxbV/tZM2mM3V3D3nlS', 'OverLord', 228, 0, 0, 4, '1584797696', '1584797696', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e47a5af7a95b9fed1382b97ce23aac02', '173.245.54.57', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c124a8ac-6b78-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('a.borealyas@mail.ru', '$2y$10$1oZq25qyZh5qMlAUROeTm.sPgg6efLjOuhC/oZe42POuXRkDgPC.6', 'wirius', 229, 0, 0, 4, '1585025633', '1584799666', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '54de306819853128418153c07bc2fc97', '172.69.62.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 37000, 0, 4, 0, 1584943259, '', '5722c780-6b7d-11ea-9715-5254004e2de0', 'a84251938667a2ae153162c57c105a50', '-4870ae8d86e5759f821acd6ba0db8e685ad2350d', 'false', '', '', 0, 1587392391, 'ultra', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 453, 0, 0),
('braggiio02@gmail.com', '$2y$10$p682zQ2Y9Aqrly2kEN/eOOgpu9wll8bakfEF8YOj6JVurL.AzYiMi', 'Braggy', 230, 0, 0, 4, '1585130918', '1584804990', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '220b217b50d06f7e25abf04c9ef198d1', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 8, 0, 1585052148, '', 'bc65528c-6b89-11ea-9715-5254004e2de0', '332441b128f85b3b73dba05ce1fca100', '4aba935e583cefcb43ff805771ee2ac3b664f457', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 612, 0, 0),
('bla.lala201201@gmail.com', '$2y$10$OQb0m6unt5vgX9FKSqzGGOVcRn6LHQrx/aLF1rdLA6cFthKAily7y', 'tini', 231, 0, 0, 4, '1584806065', '1584806065', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '65ba797b11c8188599211bd16fc795e7', '172.68.238.8', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '3d24430b-6b8c-11ea-9715-5254004e2de0', '804913e048184db42a2a2ed1f13ce3f8', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('dekken1122@gmail.com', '$2y$10$vV8JITsGHo2EGJ/pvDiA6uOKtGeY1CtcXndi/iXtjEik/HSmKI4NC', 'Chicago', 232, 0, 0, 4, '1584808262', '1584808262', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c85e4aefd929527a3b412a1d30599f30', '172.68.239.217', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '5abc3217-6b91-11ea-9715-5254004e2de0', 'd527ff7c4995b463df176faa4c26dcef', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ning12a12creeeapaa@gmail.com', '$2y$10$1BhpjN6Pc1v7Nu52H8em8uj34lOPOP8uzL0onrt76XyKViWsfNE56', 'GosteMine1211', 233, 0, 0, 4, '1585061784', '1584810663', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '01531c20e6137dbcebbf9e6cdb1b33e0', '162.158.78.116', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'f1c29adf-6b96-11ea-9715-5254004e2de0', 'ed3d82e62aa630ee120533dd6beb0e84', NULL, 'false', '', '', 0, 1587459450, 'grand', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('mr.sahsa123@bk.ru', '$2y$10$vWmYVa8KjoK.Zdwpjwp1ouo4hf4.mgcndF0xkmC0ONn0tuEwYl6Q.', 'SuperArrow', 234, 0, 0, 4, '1584813261', '1584813261', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '03653fb75ac2b9bcc630226a2e7086a8', '172.68.245.113', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'fe4beea8-6b9c-11ea-9715-5254004e2de0', '7f265de2ce0c1bb000183957c43e12c7', '-3c34a277d301a974fc7d66331c3c71a73cf5dac0', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('rlk97.vladimir@yandex.ru', '$2y$10$HVD80uBptBcD6muNiCCPdu3icRfh6tBpvKpESu7pPGDUzB9rbudvG', 'lvn97', 235, 0, 0, 4, '1584813293', '1584813293', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '03f6680638dfd9e620ace04ab0e56b14', '162.158.63.64', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1584813362, '', '118be400-6b9d-11ea-9715-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('BVitalya2004@yandex.ru', '$2y$10$TSUHzfdlC6CegkBsU5XWFOQJ6NegtsDm1BDNCUIYtXaaoGtgOPtg.', 'Vitalya179', 236, 0, 0, 4, '1584847062', '1584847062', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3ad23b490fb84826c4cfd92b85224986', '172.68.11.117', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1584848703, '', 'b18d5a10-6beb-11ea-9715-5254004e2de0', '4b16db2b9b1cc447b2d8baadf8079f9a', '-100dbf616cfca0992eb18eaa3ac9f41dbc5c379f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('bolostor@gmail.com', '$2y$10$nsyjXKeekUaXzg3LkNl7IuzS4CNB06PbaY1kckfBvRNDEzvt7GNQW', 'boss4op', 237, 0, 0, 4, '1584867804', '1584867804', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '0dc429183598fa8cb1e9df58e1baa5bc', '172.68.239.183', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'fc94d2a0-6c1b-11ea-9715-5254004e2de0', '3f660b9f553b7df0d2e2dec60036bf5b', '47dd9a33b5fca3fae6152e0ad9acf984dff26844', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 103, 0, 0),
('vladproffi@gmail.com', '$2y$10$OfVq8MEIkfOO5HOKWO5VDO2vQ43UtDxHLowZrg79of1sxV7hVCaSu', 'UKR4IN4', 238, 0, 0, 4, '1585051343', '1584876602', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '375a6cb7a982d0a8f8c3f68d6fb01672', '172.68.238.8', 0, 0, '', '', 0, 0, 0, '', '', 0, 40000, 0, 9, 0, 1585051546, '', '787bb0bd-6c30-11ea-9715-5254004e2de0', '51c304a800d77d1320dca511201710b1', '-b977069911afb52322cacd0e6d56912212e71c', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 547, 0, 0),
('users123dima@mail.ru', '$2y$10$.u7xfP4167vi5lFnI6YAte4aLlmK93WmFLxy9JWwNwy2WweIkiT9u', 'darkaoon', 239, 0, 0, 4, '1584877974', '1584877974', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '65645f4979ed926205215995e1e21ece', '162.158.62.177', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'aa725908-6c33-11ea-9715-5254004e2de0', 'da231ccec935a287889f76a463682f8b', '46f18cb8d03503d60fb6536df1637c9a80d12ed9', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kaval.flawless@gmail.com', '$2y$10$qpNzzl2FhLV1vE6uhNM0q.TdwmGvHNfli7QLLZ3YUr8j2StyIF/p6', 'ctariyLOxics', 240, 0, 0, 4, '1584878734', '1584878734', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7837addde59ddf19e914225934e8f170', '172.68.239.217', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '6f5c9afc-6c35-11ea-9715-5254004e2de0', 'b9d026fe3f7d9294454c78f806fc737f', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 735, 0, 0),
('valeria231014@gmail.com', '$2y$10$M5KCvB/34etqr5Miiqfc0OQAMxbOR3RAzj1cEC1vQHTrjVhdIPVfW', 'Shindeiru', 241, 0, 0, 4, '1584885339', '1584885339', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'a1a700c3b036784fd780a93ed4f55a65', '172.68.238.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'd03754da-6c44-11ea-9b4b-5254004e2de0', '4b06b499f31676cefb6a22d5dd884d70', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 589, 0, 0),
('denis.pateev.rec@gmail.com', '$2y$10$esCmFfB3Fm2AsTm2ZBKyMeMgMoBso8CDPBB4/8JzseAuHTmG4DWYa', 'RelativeW', 242, 0, 0, 4, '1584887715', '1584887715', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c394697c7ff13f1cedb4d20bdb5c8a29', '172.68.238.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1584888074, '', '585f478e-6c4a-11ea-9b4b-5254004e2de0', 'b9a8dc5e8fe56db381fec66e7831fea4', '-1822584da751a50f95729db82b24875c0cf3f8c1', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 195, 0, 0),
('iicuxxxxxx@gmail.com', '$2y$10$1dixyRmg.Y3lIk7F0psE3.yhyq1kPEJGzrdf2m08bqhup63wxw/Ra', 'EclipsE', 243, 0, 0, 4, '1585074661', '1584893813', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '34509445c859d512e64643e28ae8a556', '172.68.238.8', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8b092b04-6c58-11ea-9b4b-5254004e2de0', '43374127fc9629f8c73dff94fe91be6b', '1b70247b3133392d6ac98db99ffdbb1fef65f1b', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 148, 0, 0),
('liza.kinsfator@mail.ru', '$2y$10$a24DNRhHQ4jt3PLqQR6t7eJPaZeKZlRjRVBzlGOckt.nhrg9ufXmm', 'mistkerl', 244, 0, 0, 4, '1584911936', '1584911936', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '62a01a5fd46d10982f9a0c7816ba6fc8', '162.158.62.177', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'bd7e5621-6c82-11ea-9b4b-5254004e2de0', '7c3a506d1c036cebc7cd4c6071413ea3', '-7b8f3965218cf265d9b325ed97a6893f461c2926', '8tUnvIUA11m1FDxwvd3gTFUShZDERE', '266021538787098636', 'Mistkerl', 489, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 847, 0, 0),
('darkstorm541@mail.ru', '$2y$10$zwoEEv.JBIxawyBF2vh3dOHLU6Wq.sY.1Z4oGpeQXwrSLJSeBE0p.', 'darkstorn', 245, 0, 0, 4, '1584968186', '1584927798', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '566c643450097de9eab4e97549b1c928', '173.245.54.221', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'abb83493-6ca7-11ea-9b4b-5254004e2de0', '431177e538109e0681c76fa488b067ff', '-793f3151d378a2a97cdf8af5c3575a28fdbcf87b', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 469, 0, 0),
('resnenko77@mail.ru', '$2y$10$u4o1zGMr1m0n9i5kKfsUQe39FTXRwm8w.IB7nRGFUuF/EwdJ91gvS', 'DoFa', 246, 0, 0, 4, '1584945866', '1584945866', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5a22e09292cb2ce456bb1e5d33426875', '172.68.65.40', 0, 0, '', '', 0, 0, 0, '', '', 0, 41760, 0, 4, 0, 1584946232, '', 'bcf1744b-6cd1-11ea-9b4b-5254004e2de0', '8d7f9d3ceabace52e4d1ed04c7aed050', '-461bda72690e4a43917ef9806dba414452c52ac0', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('troleboi.ferma@gmail.com', '$2y$10$uKKETbRi1d11sIBQ5x9TC.UmYPLKFT7HAfltgcPKa8BvnmQy/mwcK', 'Troleboi', 247, 0, 0, 4, '1585112514', '1584957713', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '2f08878057a9f77d5c4f5cb572d92f27', '172.68.10.208', 0, 0, '', '', 0, 0, 0, '', '', 8, 32000, 0, 4, 0, 1585112604, '', '525b0ac1-6ced-11ea-9b4b-5254004e2de0', '6eeea4ee07360ebd102f5494afe6bc27', '7eeb1073c9771bf3d9c53c1ffe0bf51ad978d0ef', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 223, 0, 0),
('dtarasov852@gmail.com', '$2y$10$HsAPsxMNmB00OvUseYnncOnCD72UbcX1vr.KjHfMQjztwPkUiHE3u', 'GriZzZlY', 248, 0, 0, 4, '1584957810', '1584957810', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '631a078a1e69a824314bd86ca6ec50e8', '172.68.246.96', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8c4d314e-6ced-11ea-9b4b-5254004e2de0', 'b0cbd6763ba2868d6e6d25d044babc2d', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('default@default.default2', '$2y$10$RzxG5517YzvvKMhfEEM4NO3xDlZIG6oAz4iSLCexAf6d2DbE.a8H.', 'Kukushka', 249, 0, 0, 4, '1585063546', '1584967137', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '35e145dbb1a8a159718b038d610d22c3', '162.158.103.173', 0, 0, '', '', 0, 0, 0, '', '', 210, 700000, 10, 0, 0, 0, '', '4372cc4b-6d03-11ea-9b4b-5254004e2de0', NULL, NULL, '5gA6aeYILgu2LnrMVcAKg4twKvyarL', '349447250747064322', 'FlipFlare', 4543, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', 'FlipFlare', 300, 1, 0),
('princeshtorm@gmail.com', '$2y$10$v8D7aQIg3la79dDisWmFTOMfZtOKi/.nrstSyYrmRHg9ei5HKL6C.', 'Glosarik', 250, 0, 0, 4, '1585135435', '1584969362', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7b6646a8054197179f8ab7b86b904245', '172.69.10.86', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '71d5f989-6d08-11ea-9b4b-5254004e2de0', 'adf6e353ff207b4959fa4d5cec21c2d0', '-4f632427770059ad061c03e867473adf41c39092', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 322, 0, 0),
('seosprint200111@mail.ru', '$2y$10$8mA/utbPhbWbBCsTJ0TYiOhaDXfITVILILX/x9lUQEVt7gmeOUoK6', 'RoBByNo', 251, 0, 0, 4, '1585073241', '1584974463', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f5ce107de5287a96d346b902d104e383', '172.69.10.86', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '52446e35-6d14-11ea-9b4b-5254004e2de0', '1baae5505c51ac06db6c7d6b5202fa15', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 147, 0, 0),
('lekam12@mail.ru', '$2y$10$XraZg68pJGZWcxT9RoQqs.4B6eoga0hHyrE.RcpI9QLcATN1zwg4y', 'Whiterover', 252, 0, 0, 4, '1584988192', '1584988192', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3d9a185d01cf2323700dd96dd494c16d', '162.158.78.116', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '496ef350-6d34-11ea-9b4b-5254004e2de0', '8fd767b39e22d704dade4f1b24c2dd3b', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('f9610417@gmail.com', '$2y$10$hjTnkVKeDl6hOc/5TPaEIeSXvDAayei2JsOp6uqiAd7.S93XBzv/W', 'Jisse', 253, 0, 0, 4, '1584989262', '1584989262', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '31640bc5281d18bfce9904897ef291ab', '162.158.103.173', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c72740c2-6d36-11ea-9b4b-5254004e2de0', '1f10b5c1d783f99add1686d7647621b4', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('seosprint200111@gmail.com', '$2y$10$/UuqxVS8AehWendm/Bb4OeU7uHC4SsPHf9YBC/oYnSpGj8xNYSvcu', 'Aladuiiika', 254, 0, 0, 4, '1585052676', '1584991803', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '07ba424d4fdcc31ac903b9da888e9213', '172.69.10.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'b1d85fcf-6d3c-11ea-9b4b-5254004e2de0', '4c597419340d1a37c3b24cef19a76430', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 45, 0, 0),
('masdfg846@gmail.com', '$2y$10$HiDaeXXiOp5lMfsK4XX8KuarcYmWn5XKqDvDOLy5WieKJfxe..TBC', 'Tomka21', 255, 0, 0, 4, '1585033875', '1584996015', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd9930dff8be69ca8f7f23944193bcdb0', '162.158.79.69', 0, 0, '', '', 0, 0, 0, '', '', 21, 0, 0, 0, 0, 0, '', '805f1ede-6d46-11ea-9b4b-5254004e2de0', '8ea51ae80fec50394543d7d8d6d5bf0b', '185410bbb5510a84b2ab36c8f33ead07a4dc47f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 1, 0, 0),
('savasava2131@gmail.com', '$2y$10$lySth5Vr2X8bei0.XaVYJOvH5F09mVwlAHTyxcdV1U5omb4T0RPVG', 'savasava213', 256, 0, 0, 4, '1585146884', '1585033112', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'ca94e7515c69d0f3223beaf333f410a5', '172.69.138.20', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'dfa7a967-6d9c-11ea-9b4b-5254004e2de0', '21ab471b2725a642c039f5225f2b9549', '755059a83181a2456c8b7e8742c138ac4e836856', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 85, 0, 0),
('maximepikhin1998@yandex.ru', '$2y$10$3HlvBqg0cl0WgV.or7cl5u45WoitKNeljrOU3WDThXxtaRpYPJHJS', 'FDE123', 257, 0, 0, 4, '1585033275', '1585033275', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e81b2a3e93b88437de7ed48a456a9495', '162.158.103.203', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '40ce107b-6d9d-11ea-9b4b-5254004e2de0', '40f86076fe6963ab40eea8adf2b0b1a2', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('andrewmatkovskii@gmail.com', '$2y$10$9aLk3p5BAVqstUuzxFQUj.QkiU/7ywoUUI0Rb8ZPjea62XlYSvlCu', 'GoldenDragon', 258, 0, 0, 4, '1585039969', '1585039969', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3156847f20cde6e6818331d89eaacc6a', '172.68.238.140', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1585040779, '', 'd71f45dd-6dac-11ea-9b4b-5254004e2de0', '916f84d9a509ef37675084923a49182c', '27b5333729682ddceeb5d3db7f5a695841c55fc3', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 15, 0, 0),
('vahruschewvova@gmail.com', '$2y$10$vXu0yk8N7p5Y85w4iJzOK.TmZGHT6ImY0.fnSqiFjOQRW7BuzocBq', 'VovkaGaming3000', 259, 0, 0, 4, '1585142712', '1585045744', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '19c6bdf0e442914530f2bd83019827c4', '172.68.65.88', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1585045873, '', '48d7ccef-6dba-11ea-9b4b-5254004e2de0', 'cf110e55b9efe383b16802003ba6a1a5', '-7ffcad613eb32d1123355bd514b00b1d6fbf124c', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 29, 0, 0),
('vlad1990golova@mail.ru', '$2y$10$IpzZ5B/fh3OxGzY.Q4os9.nu0oFAs2vhtyFZROVYoCgJLs.JhQxg6', 'Retrooo', 260, 0, 0, 4, '1585047284', '1585047284', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'f0ebe57ebb27e52b56841e52fd698ef4', '162.158.103.173', 0, 0, '', '', 0, 0, 0, '', '', 0, 24000, 3, 3, 0, 1585047399, '', 'ded71812-6dbd-11ea-9b4b-5254004e2de0', '94e40f78e715e5bde4c603e1daf2f48a', '573fb85352df061bca1483f16945b306b9d55603', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 15, 0, 0),
('zeref.wolkow@mail.ru', '$2y$10$xuyC1bHrUa4944nmBMfDxe.bZqKQUo8vPZzVIqGtBRXACVVWogQ66', 'Zeref', 261, 0, 0, 4, '1585048805', '1585048805', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '404ab40952fda44a81e53d25581b1e89', '162.158.103.81', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '69728477-6dc1-11ea-9b4b-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('diana_aylin@mail.ua', '$2y$10$.j9LXBzb41CcAsNxOSmEf.1Otjtg9I9HpJMeISACaJGgFuV.OiEV6', 'Zerefina', 262, 0, 0, 4, '1585048956', '1585048956', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '86299fd75cac8f90716d8bae736aa92e', '172.68.11.117', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'c384d685-6dc1-11ea-9b4b-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('kirill302456343@mail.ru', '$2y$10$nctjd89oEV14PlASvpMP/eXa3M7gdALtsmzNLr0Xs4wiWvdBpR6SO', 'Proga07', 263, 0, 0, 4, '1585049023', '1585049023', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '9f34e0e1de3d80b60c3f14d50beca3f4', '172.69.63.225', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'eb4d01f0-6dc1-11ea-9b4b-5254004e2de0', '4ea5709745745c1aa78a55b477bd84e8', '-5f75818b64e2f6021ce83d2d3cda21a3cdc3416a', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('ksjdjdj@mail.ru', '$2y$10$mTvwcmdXGyqJ9OW5uxoyFOxzS.dMjgTVwmYwQTIqJhydw8xJb0fE2', 'ZakaznoiKill', 264, 0, 0, 4, '1585074813', '1585059429', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'abae18ba7ff9a83bdd980948493379fe', '172.69.10.26', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '25f49a7e-6dda-11ea-9b4b-5254004e2de0', 'cfdf316c1dd78ccb3d1e809e16a1df96', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 155, 0, 0),
('galberg2k18@mail.ru', '$2y$10$X.BhqwHXw3xN5eK1qIKXK.DyRqmUKDDmoQgFGFPRIsIgJ3SzAlfym', 'galberg123', 265, 0, 0, 4, '1585069048', '1585069048', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd969ada5f9e4a0db1dad3bd7e12899e8', '172.68.10.62', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8b9a4be8-6df0-11ea-9b4b-5254004e2de0', '4ae2e6d157b0912af9e1456fd4a59108', '61c58791645fcab340c2da46d7fc97cbdaf626ae', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 130, 0, 0),
('paladinsoverwatch@mail.ru', '$2y$10$g7/AIpwwgDlgNZyp.4ONueIr2sTw3x9U3hg8//ZMbKl.rUwZqewbW', 'Maksimru', 266, 0, 0, 4, '1585071631', '1585071631', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '1fa7f4ee698e4244a19aa38b8f848c7e', '173.245.54.221', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '8ed8ae12-6df6-11ea-9b4b-5254004e2de0', '211789fe7109df4c487896a7c72b7944', '-7715be9c16b44a14e4d60cb31462ef2a2552f8a2', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 10, 0, 0),
('yan.nagorny06@bk.ru', '$2y$10$liSgIkHZYFvnC5Fj4E4D9OoGj8kxdr65YMpO1oy7pZyyc900OXsuW', 'Firztz', 267, 0, 0, 4, '1585074959', '1585074959', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '8b0b637f70130e0cbba70f77e197e42c', '173.245.54.99', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '4e87c4bf-6dfe-11ea-9b4b-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('Mrbolk94@mail.ru', '$2y$10$gBt2sSNpdoa.eGKDxmmLEOmdW3LnPcA2R6SMa7khGUH3x97awf3n2', 'GROM', 268, 0, 0, 4, '1585154747', '1585075543', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '32e7e6d4c16b94ab5600a7b162f29b6b', '162.158.103.63', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'aadfff88-6dff-11ea-9b4b-5254004e2de0', '10a02fbc4bbf63b1ca0dddb01775e5c3', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 273, 0, 0),
('elex.s@bk.ru', '$2y$10$/00BLh0v5e9WjlnvJab.juHHyyRPEfkf4XngOuKtkZDI29b.swhVi', 'Elexs', 269, 0, 0, 4, '1585159183', '1585077833', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '3cf8c694a3dc5e29c107732b17065a61', '162.158.78.170', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'ffb7ce62-6e04-11ea-9b4b-5254004e2de0', '9660feab860d7a948b5fe58a0bd1c445', '3d88715910efc55aafaa4eb3c6bbf379b422a38c', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 352, 0, 0),
('jhfasfa@gmail.com', '$2y$10$jxU8.nTS6AXJ1ZpJIGgV2u1YuF40clJCwmoRZvm96RLvsZgigJa8m', 'AlinaReix', 270, 0, 0, 4, '1585078863', '1585078863', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '0e436fdb3525d201e4ac91435569a8a6', '172.69.202.32', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '65356fe9-6e07-11ea-9b4b-5254004e2de0', 'e98a1efc7aeaca00296db393e37680a8', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('halokuhy@gmail.com', '$2y$10$TX9QW1MLBfx5BQY2Dh.oneJKqoxlGbkK9dQ86zMRQnZVq2sbI3w7S', 'FaiteszLatforz', 271, 0, 0, 4, '1585143866', '1585079186', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '57e6cf3621438d9a5019de73d7641bcd', '172.69.63.225', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '25ded740-6e08-11ea-9b4b-5254004e2de0', '902699a71c6955946f888ae48d5c6e38', '-3f046b8323eb57dde2e0120d3e708c95c060c27b', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 22, 0, 0),
('dimakibb28@gmail.com', '$2y$10$KV/R/Q7vbvhp9Ru7GbG1Iec/SI3u3hRMZrkAZlBRby413rbltBTxi', 'malinovcky28', 272, 0, 0, 4, '1585080658', '1585080658', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd55e2725b7e7033de308a162af6b2269', '172.69.63.253', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '9325358a-6e0b-11ea-9b4b-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('sanadubec@gmail.com', '$2y$10$jY/R0GZSgBh2J6.MjRgtd.P/js6sinw2ZUpgdTsZbbk4a20RK/kpu', 'pypo4ek', 273, 0, 0, 4, '1585151723', '1585080930', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'df369ccd81c585f34ec5eae12a3d4cff', '172.68.238.92', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1585124745, '', '35a55a7b-6e0c-11ea-9b4b-5254004e2de0', 'faef7b72720b27da3ba66105146e6aab', '-4a5e6ea51a54712de7bace0f6a322b78062dd34f', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 4, 0, 0),
('nikitaancugov174@gmail.com', '$2y$10$Sd514nxEfENn6IkmFa9dvuGzGXkt3/o.mg4bnddWWaYy2dk.wAMGS', 'Daggers', 274, 0, 0, 4, '1585150752', '1585119944', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'c319051ada769a859cce0587b69b8462', '162.158.103.27', 0, 0, '', '', 0, 0, 0, '', '', 0, 32000, 0, 4, 0, 1585122335, '', '0be6cc36-6e67-11ea-9b4b-5254004e2de0', 'c8d2cad4f176f4cdb1cb2cc9ce43a669', '36733b80f36bd2d4d1dbacd8bca1cc93d66a2ced', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 9, 0, 0),
('89231797433v@gmail.com', '$2y$10$g6RzQEpD9AFYKjk1uvHTcOYZX2zHpeq3gj46Boj3OKme1cyifuBau', 'CoKiE', 275, 0, 0, 4, '1585120721', '1585120721', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'e06e4b952ab1634985e0bc997cb9f899', '173.245.54.99', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'dab25221-6e68-11ea-9b4b-5254004e2de0', NULL, NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('hairetdinnov@yandex.ru', '$2y$10$XmEore7WaclPVtqwfmzJW.O7rDTMA.yAP49DiWkTLA3N8nV65WLgW', 'Quus', 276, 0, 0, 4, '1585120722', '1585120722', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '5029dc9201856c3f7675c52f7203bf68', '162.158.103.27', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', 'db4daf31-6e68-11ea-9b4b-5254004e2de0', '699c869191e088404507ee24fe020840', '-5444aaa47182f0ec18300ca58b86cd57392da7d2', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 13, 0, 0),
('juulja2011@gmail.com', '$2y$10$iZ/icXOb9oyVgk0pptmP0esOxl7bN9P3Xcu9iTPfM0S3DmzSMC9QS', 'killmmman', 277, 0, 0, 4, '1585148467', '1585148467', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'fb41b8bb595dfee2c2b0cb6dea86c02e', '172.68.10.54', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '746e3ddc-6ea9-11ea-9b4b-5254004e2de0', '5c90abf01d4dc2a77f3f586acb3e617f', '-13a2990fd33d86e3d01a112c34e2e3cebc098ed3', 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 135, 0, 0),
('vladimirborodin768@gmail.com', '$2y$10$MUbHEd362usi3Se5JYDVv.5gOWFj9/e0.d/DpjrfJ/ONoSc47sVnq', 'lolfef1234', 278, 0, 0, 4, '1585156028', '1585156028', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', '7a7c4fbf9b7544e17764db1f5c65941a', '172.68.65.88', 0, 0, '', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, '', '0f5934e1-6ebb-11ea-9b4b-5254004e2de0', 'e571af45ff5853cb7a414dce4a935427', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0),
('betaxa2012@gmail.com', '$2y$10$.sV/SXAjob.iw7FnUersieSpVCSV9F5H.k7ltQSe.vvOmnrgFNqoG', 'SkyDencer', 279, 0, 0, 4, '1585156088', '1585156088', '', 1, '', '', '', '', '', '', 0, 0, '', '', '', 'd50a0489db4fb40862e381627a8add47', '172.68.239.201', 0, 0, '', '', 0, 0, 0, '', '', 0, 24000, 3, 3, 0, 1585156162, '', '336d051a-6ebb-11ea-9b4b-5254004e2de0', 'decf15615fee8fae627c70bfc416fe5e', NULL, 'false', '', '', 0, 0, '', 0, '', '', 0, '', 0, 0, 0, 0, '', '', 0, 0, 0);

--
-- Триггеры `dle_users`
--
DELIMITER $$
CREATE TRIGGER `setUUID` BEFORE INSERT ON `dle_users` FOR EACH ROW BEGIN
IF NEW.uuid IS NULL THEN
SET NEW.uuid = UUID();
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_views`
--

CREATE TABLE `dle_views` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_vote`
--

CREATE TABLE `dle_vote` (
  `id` mediumint NOT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vote_num` mediumint NOT NULL DEFAULT '0',
  `date` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0',
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `approve` tinyint(1) NOT NULL DEFAULT '1',
  `start` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `end` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `grouplevel` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'all'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dle_vote`
--

INSERT INTO `dle_vote` (`id`, `category`, `vote_num`, `date`, `title`, `body`, `approve`, `start`, `end`, `grouplevel`) VALUES
(1, 'all', 0, '2020-02-29 06:02:27', 'Оцените работу движка', 'Лучший из новостных<br />Неплохой движок<br />Устраивает ... но ...<br />Встречал и получше<br />Совсем не понравился', 1, '', '', 'all');

-- --------------------------------------------------------

--
-- Структура таблицы `dle_vote_result`
--

CREATE TABLE `dle_vote_result` (
  `id` int NOT NULL,
  `ip` varchar(46) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `vote_id` mediumint NOT NULL DEFAULT '0',
  `answer` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dle_xfsearch`
--

CREATE TABLE `dle_xfsearch` (
  `id` int NOT NULL,
  `news_id` int NOT NULL DEFAULT '0',
  `tagname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `tagvalue` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `DTM`
--

CREATE TABLE `DTM` (
  `id` bigint NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `item_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `DTM`
--

INSERT INTO `DTM` (`id`, `item_id`, `nickname`, `item_amount`) VALUES
(1, '4557', 'Merlis', 1),
(2, '4220', 'lightRaid', 1),
(3, '4413:14', 'lightRaid', 1),
(4, '4413:13', 'lightRaid', 1),
(5, '399', 'Merlis', 1),
(6, '209', 'Merlis', 4),
(7, '1', 's3xtape', 64),
(8, '383:90', 's3xtape', 1),
(9, '13', 's3xtape', 64),
(10, '383:91', 'Grifon11', 1),
(11, '383:92', 'Grifon11', 1),
(12, '20', 'Grifon11', 32),
(13, '20', 'Grifon11', 32),
(18, '265', 'Thijd', 16),
(19, '508', 'Thijd', 2),
(20, '4910:65', 'Thijd', 8),
(21, '508', 'Thijd', 2),
(22, '4222', 'Thijd', 1),
(27, '4413:15', 'XacF', 1),
(28, '202:4', 'XacF', 1),
(29, '4538', 'Ernest', 1),
(30, '383:120', 'Ernest', 1),
(31, '19', 'Ernest', 8),
(32, '399', 'Ernest', 1),
(33, '4605', 'Ernest', 1),
(34, '4556', 'Alexwq', 1),
(35, '4640:1', 'SashaSpilberg', 1),
(36, '383:90', 'SashaSpilberg', 1),
(38, '508:1', 'Grifon11', 2),
(39, '20', 'Grifon11', 32),
(40, '4605', 'Grifon11', 1),
(43, '4413:15', 'GosteMine', 1),
(44, '4910:65', 'GosteMine', 8),
(45, '20', 'GosteMine', 32),
(46, '209', 'GosteMine', 4),
(53, '4558', '1manax', 1),
(54, '19', '1manax', 8),
(55, '383:120', '1manax', 1),
(56, '202', '1manax', 1),
(57, '4579', '1manax', 1),
(58, '383:55', '1manax', 1),
(59, '202:4', '1manax', 1),
(60, '4640:1', 'DomineDeus', 1),
(61, '13', 'Ernest', 64),
(62, '17:1', 'Ernest', 64),
(63, '17:2', 'Ernest', 64),
(64, '4413:14', 'Ernest', 1),
(65, '4201', 'Ernest', 2),
(66, '17:2', 'Ernest', 64),
(67, '17:2', 'Ernest', 64),
(68, '4555:2', 'Ernest', 8),
(69, '4413:13', 'Ernest', 1),
(70, '202:3', 'Ernest', 1),
(73, '4198', 'diego08', 2),
(74, '383:90', 'diego08', 1),
(75, '383:91', 'diego08', 1),
(76, '202:3', 'diego08', 1),
(77, '334', 'Ernest', 8),
(78, '4222', 'Ernest', 1),
(79, '35', 'Ernest', 16),
(80, '13', 'dbs.Broly', 64),
(81, '17', 'TTaRtiZaN', 64),
(82, '4375:11', 'TTaRtiZaN', 2),
(83, '383:91', 'TTaRtiZaN', 1),
(84, '4552:1', 'Frisbe', 1),
(85, '4413:14', 'Frisbe', 1),
(86, '4222', 'Frisbe', 1),
(87, '4910:64', 'Frisbe', 8),
(88, '19', 'Excellent23', 8),
(89, '4556', 'Excellent23', 1),
(90, '20', 'Excellent23', 32),
(91, '4413:19', 'Excellent23', 1),
(92, '4413:7', 'SashaSpilberg', 8),
(93, '209', 'SashaSpilberg', 4),
(94, '20', 'SashaSpilberg', 32),
(95, '4220', 'SashaSpilberg', 1),
(97, '4640:1', 'SashaSpilberg', 1),
(98, '4413:13', 'SashaSpilberg', 1),
(99, '264', 'FlipFlare', 64),
(106, '1100:4', 'FlipFlare', 2),
(114, '264', 'SashaSpilberg', 8),
(115, '19', 'SashaSpilberg', 8),
(125, '2', 'GG28', 64),
(127, '2', 'GG28', 64),
(128, '202', 'TTaRtiZaN', 1),
(129, '383:92', 'TTaRtiZaN', 1),
(130, '4552:1', 'SashaSpilberg', 1),
(131, '383:55', 'SashaSpilberg', 1),
(132, '4413:7', 'SashaSpilberg', 8),
(133, '508:1', 'SashaSpilberg', 2),
(139, '383:55', 'SashaSpilberg', 1),
(140, '508:1', 'SashaSpilberg', 2),
(141, '508:1', 'SashaSpilberg', 2),
(145, '202:2', 'SashaSpilberg', 1),
(146, '4556', 'SashaSpilberg', 1),
(147, '4579', 'SashaSpilberg', 1),
(148, '4558', 'SashaSpilberg', 1),
(149, '4605', 'Rapogliff', 1),
(150, '19', 'Rapogliff', 8),
(151, '4413:15', 'Rapogliff', 1),
(152, '4605', 'Rapogliff', 1),
(156, '35', 'SashaSpilberg', 16),
(157, '4413:13', 'SashaSpilberg', 1),
(159, '383:91', 'Hramoff', 1),
(160, '202:4', 'Hramoff', 1),
(161, '383:91', 'Hramoff', 1),
(162, '4413', 'SashaSpilberg', 8),
(163, '202', 'SashaSpilberg', 1),
(164, '4557', 'DarkGame', 1),
(165, '508:1', 'DarkGame', 2),
(166, '4413:15', 'DarkGame', 1),
(167, '13', 'DarkGame', 64),
(181, '4222', '4pceHK4', 1),
(182, '4576', '4pceHK4', 1),
(183, '4201', '4pceHK4', 2),
(246, '13', 'lvn97', 64),
(247, '4341', 'lvn97', 2),
(248, '508:1', 'lvn97', 2),
(271, '334', 'wirius', 8),
(272, '4184:2', 'wirius', 8),
(273, '177', 'wirius', 4),
(274, '177', 'wirius', 4),
(309, '4184:1', 'Tapochek', 16),
(310, '4413:7', 'Tapochek', 8),
(312, '17:2', 'FlipFlare', 64),
(313, '264', 'FlipFlare', 8),
(318, '202:3', 'ArabckayaNoch', 1),
(319, '4413:14', 'ArabckayaNoch', 1),
(320, '202:12', 'ArabckayaNoch', 1),
(321, '351:4', 'ArabckayaNoch', 16),
(322, '5741', 'MAJORUA16', 1),
(324, '4413:15', 'FlipFlare', 1),
(325, '4413:14', 'FlipFlare', 1),
(326, '331', 'FlipFlare', 32),
(327, '202:4', 'FlipFlare', 1),
(328, '19', 'FlipFlare', 8),
(329, '5929', 'FlipFlare', 2),
(330, '383:90', 'FlipFlare', 1),
(331, '1635', 'FlipFlare', 4),
(332, '4413:15', 'FlipFlare', 1),
(333, '331', 'FlipFlare', 32),
(334, '1', 'FlipFlare', 64),
(335, '4222:1', 'FlipFlare', 1),
(336, '4413:13', 'FlipFlare', 1),
(337, '202:2', 'FlipFlare', 1),
(338, '17', 'FlipFlare', 64),
(339, '4184:1', 'FlipFlare', 16),
(340, '202:3', 'FlipFlare', 1),
(341, '331', 'FlipFlare', 32),
(342, '17:3', 'FlipFlare', 64),
(343, '351:4', 'FlipFlare', 16),
(367, '4184:3', 'Aleksandr', 8),
(368, '1636', 'Aleksandr', 2),
(369, '383:91', 'Aleksandr', 1),
(370, '4413:13', 'Aleksandr', 1),
(371, '13', 'GoldenDragon', 64),
(372, '209', 'GoldenDragon', 1),
(380, '1636', 'Braggy', 2),
(381, '202', 'Braggy', 1),
(382, '4413:7', 'Braggy', 8),
(383, '383:91', 'Braggy', 1),
(384, '57', 'FlipFlare', 2),
(385, '229', 'Aleksandr', 1),
(386, '4413:13', 'Aleksandr', 1),
(387, '17:2', 'Aleksandr', 64),
(388, '1', 'Aleksandr', 64),
(389, '247', 'Aleksandr', 1),
(390, '265', 'Aleksandr', 16),
(391, '202', 'Aleksandr', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `flare_gifts`
--

CREATE TABLE `flare_gifts` (
  `id` int NOT NULL,
  `code` varchar(160) NOT NULL,
  `date` int NOT NULL,
  `amount` int NOT NULL,
  `money` varchar(160) NOT NULL,
  `cases` varchar(160) NOT NULL,
  `econs` varchar(160) NOT NULL,
  `ip` text NOT NULL,
  `name` text NOT NULL,
  `admin` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `flare_history`
--

CREATE TABLE `flare_history` (
  `id` int NOT NULL,
  `name` varchar(240) NOT NULL,
  `server` varchar(240) NOT NULL,
  `type` varchar(240) NOT NULL,
  `value` varchar(240) NOT NULL,
  `data` varchar(240) NOT NULL,
  `text` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `flare_history`
--

INSERT INTO `flare_history` (`id`, `name`, `server`, `type`, `value`, `data`, `text`) VALUES
(1, 'Prizrak111', '-1', '-1', '', '1585464531', ''),
(2, 'vivikl', 'DTM', '6', '1 набор', '1583932294', 'Покупка набора <b>Avarita-сет</b> на сервере <b>DTM</b>'),
(3, 'FlipFlare', 'SkyTech', '7', 'за 60 монет', '1583987217', 'Покупка набора <b>Pro</b> на сервере <b>SkyTech</b>'),
(4, 'CheatDDos', '-1', '-1', '', '1586517765', ''),
(5, 'CheatDDos', '-1', '-1', '', '1586518698', ''),
(6, 'CheatDDos', '-1', '-1', '', '1586519080', ''),
(7, 'Kaztiel', '-1', '-1', '', '1586530399', ''),
(8, 'FlipFlare', '-1', '0', '200', '1584031346', 'Перевод монет игроку <b>ToPoRcHiK1910</b>'),
(9, 'ToPoRcHiK1910', '-1', '1', '200', '1584031346', 'Поступление монет от игрок <b>FlipFlare</b>'),
(10, 'TracherTractor', '-1', '-1', '', '1586577205', ''),
(11, 'codeine', '-1', '-1', '', '1586588741', ''),
(12, 'CheatDDos', '-1', '-1', '', '1586629825', ''),
(13, 'CheatDDos', '-1', '9', 'ID: 11', '1584428692', 'Пополнение бланса на 115 монет'),
(14, 'CheatDDos', 'SkyTech', '7', 'за 120 монет', '1584124996', 'Покупка набора <b>Advanced</b> на сервере <b>SkyTech</b>'),
(15, 'saxtot', '-1', '-1', '', '1586780881', ''),
(16, 'Vadim997', '-1', '-1', '', '1586787582', ''),
(17, 'NikolaTesla', '-1', '-1', '', '1586795197', ''),
(18, 'r0rs', '-1', '-1', '', '1586802608', ''),
(19, 'r0rs', '-1', '9', 'ID: 17', '1584428692', 'Пополнение бланса на 120 монет'),
(20, 'Arkhangel', '-1', '-1', '', '1586849313', ''),
(21, 'Arkhangel', '-1', '-1', '', '1586849401', ''),
(22, 'NikolaTesla', '-1', '-1', '', '1586849503', ''),
(23, 'NikolaTesla', '-1', '9', 'ID: 21', '1584428692', 'Пополнение бланса на 215 монет'),
(24, 'codeine', '-1', '-1', '', '1586852557', ''),
(25, 'codeine', '-1', '-1', '', '1586852701', ''),
(26, 'codeine', '-1', '9', 'ID: 24', '1584428692', 'Пополнение бланса на 1180 монет'),
(27, 'Arkhangel', '-1', '-1', '', '1586857039', ''),
(28, 'Arkhangel', '-1', '9', 'ID: 26', '1584428692', 'Пополнение бланса на 400 монет'),
(29, 'FlipFlare', 'SkyTechnoMagic', '7', 'за 120 монет', '1584358303', 'Покупка набора <b>Advanced</b> на сервере <b>SkyTechnoMagic</b>'),
(30, 'FlipFlare', '-1', '8', '30 дней', '1584358498', 'Покупка <b>Ultra</b> на сервере <b>SkyTechnoMagic</b>'),
(31, 'Arkhangel', 'DTM', '6', '1 набор', '1584363049', 'Покупка набора <b>Avarita-сет</b> на сервере <b>DTM</b>'),
(32, 'NikolaTesla', '-1', '8', '30 дней', '1584366102', 'Покупка <b>Grand</b> на сервере <b>SkyTechnoMagic</b>'),
(33, 'r0rs', '-1', '-1', '', '1586873235', ''),
(34, 'r0rs', '-1', '-1', '', '1586873274', ''),
(35, 'r0rs', '-1', '9', 'ID: 33', '1584428692', 'Пополнение бланса на 160 монет'),
(36, 'r0rs', '-1', '8', '30 дней', '1584367762', 'Покупка <b>Ultra</b> на сервере <b>SkyTechnoMagic</b>'),
(37, 'CheatDDos', '-1', '-1', '', '1586879366', ''),
(38, 'MAJOR-UA16', '-1', '-1', '', '1586879650', ''),
(39, 'CheatDDos', '-1', '-1', '', '1586880773', ''),
(40, 'MAJORUA16', '-1', '-1', '', '1586881228', ''),
(41, 'MAJORUA16', '-1', '-1', '', '1586881412', ''),
(42, 'MAJORUA16', '-1', '9', 'ID: 40', '1584428692', 'Пополнение бланса на 495 монет'),
(43, 'MAJORUA16', '-1', '8', '30 дней', '1584375933', 'Покупка <b>Ultra</b> на сервере <b>DTM</b>'),
(44, 'codeine', '-1', '8', '90 дней', '1584398148', 'Покупка <b>Ultra</b> на сервере <b>SkyTechnoMagic</b>'),
(45, 'UNIVERSUM', 'SkyTechnoMagic', '7', 'за 60 монет', '1584428692', 'Покупка набора <b>Pro</b> на сервере <b>SkyTechnoMagic</b>'),
(46, 'FlipFlare', '-1', '0', '200', '1584447173', 'Перевод монет игроку <b>MrEpic</b>'),
(47, 'MrEpic', '-1', '1', '200', '1584447173', 'Поступление монет от игрок <b>FlipFlare</b>'),
(48, 'Wido03', '-1', '-1', '', '1586966696', ''),
(49, 'CheatDDos', '-1', '-1', '', '1586970851', ''),
(50, 'CheatDDos', '-1', '9', 'ID: 48', '1584465385', 'Пополнение бланса на 495 монет'),
(51, 'CheatDDos', '-1', '8', '30 дней', '1584465408', 'Покупка <b>Ultra</b> на сервере <b>SkyTechnoMagic</b>'),
(52, 'EvgenBro', '-1', '-1', '', '1586978325', ''),
(53, 'EvgenBro', '-1', '-1', '', '1586988988', ''),
(54, 'EvgenBro', '-1', '-1', '', '1586989875', ''),
(55, 'EvgenBro', '-1', '-1', '', '1586990450', ''),
(56, 'FlipFlare', 'Array', '6', '128 штук', '1584518150', 'Покупка <b>Камень</b> на сервере <b>SkyTechnoMagic</b>'),
(57, 'MrEpic', '-1', '-1', '', '1587030378', ''),
(58, 'MrEpic', '-1', '9', 'ID: 56', '1584524880', 'Пополнение бланса на 95 монет'),
(59, 'MrEpic', '-1', '8', '30 дней', '1584524952', 'Покупка <b>Ultra</b> на сервере <b>SkyTechnoMagic</b>'),
(60, '4pceHK4', '-1', '-1', '', '1587051812', ''),
(61, '4pceHK4', '-1', '-1', '', '1587054593', ''),
(62, 'RabbitClay', '-1', '-1', '', '1587058887', ''),
(63, 'RabbitClay', '-1', '9', 'ID: 61', '1584553393', 'Пополнение бланса на 500 монет'),
(64, 'RabbitClay', '-1', '8', '30 дней', '1584553441', 'Покупка <b>Ultra</b> на сервере <b>DTM</b>'),
(65, 'RabbitClay', '-1', '-1', '', '1587060083', ''),
(66, 'RabbitClay', '-1', '9', 'ID: 64', '1584554561', 'Пополнение бланса на 10 монет'),
(67, 'RabbitClay', 'Array', '6', '1 штук', '1584554601', 'Покупка <b>Молекулярный преобразователь</b> на сервере <b>DTM</b>'),
(68, 'Aleksandr', '-1', '-1', '', '1587102421', ''),
(69, 'Aleksandr', '-1', '9', 'ID: 67', '1584597023', 'Пополнение бланса на 10 монет'),
(70, 'UNIVERSUM', 'Array', '6', '2 штук', '1584598580', 'Покупка <b>Звезда Ада</b> на сервере <b>SkyTechnoMagic</b>'),
(71, 'UNIVERSUM', 'Array', '6', '16 штук', '1584598626', 'Покупка <b>Изумрудный блок</b> на сервере <b>SkyTechnoMagic</b>'),
(72, 'DIOSGAME', '-1', '-1', '', '1587195719', ''),
(73, 'FlipFlare', '-1', '8', '30 дней', '1584702657', 'Покупка <b>Ultra</b> на сервере <b>LavaTech</b>'),
(74, 'ArabckayaNoch', '-1', '-1', '', '1587231221', ''),
(75, 'WildYakeeGun', '-1', '0', '200', '1584791592', 'Перевод монет игроку <b>ligeme226</b>'),
(76, 'ligeme226', '-1', '1', '200', '1584791592', 'Поступление монет от игрок <b>WildYakeeGun</b>'),
(77, 'ligeme226', '-1', '0', '210', '1584791741', 'Перевод монет игроку <b>WildYakeeGun</b>'),
(78, 'WildYakeeGun', '-1', '1', '210', '1584791741', 'Поступление монет от игрок <b>ligeme226</b>'),
(79, 'WildYakeeGun', 'Array', '6', '1 штук', '1584793897', 'Покупка <b>Стафф</b> на сервере <b>DTM</b>'),
(80, 'vivikl', '-1', '0', '121', '1584797257', 'Перевод монет игроку <b>ienco</b>'),
(81, 'ienco', '-1', '1', '121', '1584797257', 'Поступление монет от игрок <b>vivikl</b>'),
(82, 'OverLord', '-1', '-1', '', '1587303334', ''),
(83, 'wirius', '-1', '-1', '', '1587305345', ''),
(84, 'wirius', '-1', '9', 'ID: 82', '1584800260', 'Пополнение бланса на 500 монет'),
(85, 'GosteMine', '-1', '-1', '', '1587305949', ''),
(86, 'wirius', '-1', '8', '30 дней', '1584800391', 'Покупка <b>Ultra</b> на сервере <b>DTM</b>'),
(87, 'GosteMine', '-1', '9', 'ID: 84', '1584800500', 'Пополнение бланса на 205 монет'),
(88, 'GosteMine', '-1', '-1', '', '1587306129', ''),
(89, 'FlipFlare', '-1', '0', '10', '1584800705', 'Перевод монет игроку <b>Arkhangel</b>'),
(90, 'Arkhangel', '-1', '1', '10', '1584800705', 'Поступление монет от игрок <b>FlipFlare</b>'),
(91, 'FlipFlare', '-1', '0', '10', '1584800941', 'Перевод монет игроку <b>GosteMine</b>'),
(92, 'GosteMine', '-1', '1', '10', '1584800941', 'Поступление монет от игрок <b>FlipFlare</b>'),
(93, 'GosteMine', '-1', '8', '30 дней', '1584801003', 'Покупка <b>Grand</b> на сервере <b>LavaTech</b>'),
(94, 'Reydman', '-1', '-1', '', '1587310903', ''),
(95, 'vivikl', 'Array', '6', '1 штук', '1584819859', 'Покупка <b>Творческий жезл строителя</b> на сервере <b>DTM</b>'),
(96, 'GoldWolf', 'Array', '6', '7 штук', '1584822840', 'Покупка <b>Творческий жезл строителя</b> на сервере <b>DTM</b>'),
(97, 'ligeme226', '-1', '8', '30 дней', '1584871996', 'Покупка <b>Premium</b> на сервере <b>DTM</b>'),
(98, 'ligeme226', '-1', '0', '70', '1584875611', 'Перевод монет игроку <b>WildYakeeGun</b>'),
(99, 'WildYakeeGun', '-1', '1', '70', '1584875611', 'Поступление монет от игрок <b>ligeme226</b>'),
(100, 'UKR4IN4', '-1', '-1', '', '1587388347', ''),
(101, 'vivikl', '-1', '-1', '', '1587426811', ''),
(102, 'vivikl', 'DTM', '6', '1 набор', '1584949606', 'Покупка набора <b>Avarita-сет</b> на сервере <b>DTM</b>'),
(103, 'MozG', 'DTM', '6', '1 набор', '1584951646', 'Покупка набора <b>Avarita-сет</b> на сервере <b>DTM</b>'),
(104, 'MAJORUA16', '-1', '-1', '', '1587461332', ''),
(105, 'MAJORUA16', '-1', '-1', '', '1587461565', ''),
(106, 'MAJORUA16', '-1', '-1', '', '1587461726', ''),
(107, 'Troleboi', '-1', '-1', '', '1587463431', ''),
(108, 'MAJORUA16', '-1', '-1', '', '1587479842', ''),
(109, 'MAJORUA16', '-1', '-1', '', '1587480249', ''),
(110, 'MAJORUA16', '-1', '9', 'ID: 108', '1584974760', 'Пополнение бланса на 160 монет'),
(111, 'MAJORUA16', 'Array', '6', '1 штук', '1584974814', 'Покупка <b>Стафф</b> на сервере <b>DTM</b>'),
(112, 'MAJORUA16', 'Array', '6', '1 штук', '1584974821', 'Покупка <b>Творческий жезл строителя</b> на сервере <b>DTM</b>'),
(113, 'Mirus', 'Array', '6', '1 штук', '1584982564', 'Покупка <b>Стафф</b> на сервере <b>DTM</b>'),
(114, 'Mirus', 'Array', '6', '2 штук', '1584982969', 'Покупка <b>Блок таум-металла</b> на сервере <b>DTM</b>'),
(115, 'Tomka21', '-1', '-1', '', '1587502366', ''),
(116, 'Tomka21', '-1', '9', 'ID: 114', '1584996833', 'Пополнение бланса на 21 монет'),
(117, 'vivikl', 'Array', '6', '10 штук', '1585010089', 'Покупка <b>МЭ 16384кб Хранилище</b> на сервере <b>DTM</b>'),
(118, 'vivikl', 'Array', '6', '128 штук', '1585010236', 'Покупка <b>Крио</b> на сервере <b>DTM</b>'),
(119, 'vivikl', 'Array', '6', '128 штук', '1585010241', 'Покупка <b>Крио</b> на сервере <b>DTM</b>'),
(120, 'vivikl', 'Array', '6', '128 штук', '1585010688', 'Покупка <b>123</b> на сервере <b>DTM</b>'),
(121, 'vivikl', 'Array', '6', '128 штук', '1585010693', 'Покупка <b>123</b> на сервере <b>DTM</b>'),
(122, 'vivikl', 'Array', '6', '128 штук', '1585010699', 'Покупка <b>123</b> на сервере <b>DTM</b>'),
(123, 'vivikl', 'Array', '6', '1 штук', '1585020157', 'Покупка <b>Звезда Ада</b> на сервере <b>DTM</b>'),
(124, 'vivikl', 'Array', '6', '2 штук', '1585020169', 'Покупка <b>Блок таум-металла</b> на сервере <b>DTM</b>'),
(125, 'vivikl', 'Array', '6', '2 штук', '1585020174', 'Покупка <b>Блок таум-металла</b> на сервере <b>DTM</b>'),
(126, 'vivikl', 'Array', '6', '1 штук', '1585020186', 'Покупка <b>64Кб МЭ жидкостный компонент хранилища</b> на сервере <b>DTM</b>'),
(127, 'vivikl', 'Array', '6', '1 штук', '1585020191', 'Покупка <b>64Кб МЭ жидкостный компонент хранилища</b> на сервере <b>DTM</b>'),
(128, 'vivikl', 'Array', '6', '4 штук', '1585020206', 'Покупка <b>Блок создания </b> на сервере <b>DTM</b>'),
(129, 'vivikl', 'Array', '6', '16 штук', '1585020222', 'Покупка <b>Динамит</b> на сервере <b>DTM</b>'),
(130, 'vivikl', 'Array', '6', '32 штук', '1585020233', 'Покупка <b>Шерсть</b> на сервере <b>DTM</b>'),
(131, 'FlipFlare', 'Array', '6', '2 штук', '1585062586', 'Покупка <b>Алмазный блок</b> на сервере <b>DTM</b> за 1 голосов'),
(132, 'FlipFlare', '-1', '0', '215', '1585063254', 'Перевод монет игроку <b>GosteMine</b>'),
(133, 'GosteMine', '-1', '1', '215', '1585063254', 'Поступление монет от игрок <b>FlipFlare</b>'),
(134, 'EvgenBro', '-1', '-1', '', '1587627594', ''),
(135, 'EvgenBro', '-1', '-1', '', '1587628349', '');

-- --------------------------------------------------------

--
-- Структура таблицы `flare_regions`
--

CREATE TABLE `flare_regions` (
  `id` int NOT NULL,
  `name` varchar(160) NOT NULL,
  `server` varchar(160) NOT NULL,
  `owner` varchar(160) NOT NULL,
  `members` text NOT NULL,
  `arenda` int NOT NULL,
  `regen` int NOT NULL,
  `date` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `flare_regions_regen`
--

CREATE TABLE `flare_regions_regen` (
  `id` int NOT NULL,
  `name` varchar(160) NOT NULL,
  `admin` varchar(160) NOT NULL,
  `server` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `flare_shop`
--

CREATE TABLE `flare_shop` (
  `id` int NOT NULL,
  `image` varchar(256) NOT NULL,
  `block_id` varchar(128) NOT NULL,
  `amount` int NOT NULL,
  `price` int NOT NULL,
  `price_v` int NOT NULL,
  `name` varchar(512) NOT NULL,
  `action` int NOT NULL,
  `server` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `flare_shop`
--

INSERT INTO `flare_shop` (`id`, `image`, `block_id`, `amount`, `price`, `price_v`, `name`, `action`, `server`) VALUES
(1, '/modules/shop/uploads/bcde0c3da59a104f1268f0280b7ed735.png', 'avarita', 1, 799, 0, 'Avarita-сет', 1, 'DTM'),
(2, '/modules/shop/uploads/a7b262d44262d4fce94e760c5b305f33.png', 'quant', 1, 200, 0, 'Квантовый-сет', 1, 'DTM'),
(4, '/modules/shop/uploads/1f71140f67f2f2419861c8a162184f78.png', 'nano', 1, 60, 0, 'Нано-сет', 1, 'DTM'),
(5, '/modules/shop/uploads/08b2fcdcfcefc78c1256c83926eaccdc.png', 'vivern', 1, 105, 0, 'Ввиверн-сет', 1, 'DTM'),
(6, '/modules/shop/uploads/451464c97528b18e335a3e8d61a36093.png', 'drago', 1, 250, 0, 'Драконик-сет', 1, 'DTM'),
(7, '/modules/shop/uploads/0d405972ad219b9b67bff086174aa1c2.png', '57', 2, 2, 2, 'Алмазный блок', 0, 'DTM'),
(8, '/modules/shop/uploads/a805f34290469bc2a075715a86723b78.png', '41', 2, 2, 0, 'Золотой блок', 0, 'DTM'),
(9, '/modules/shop/uploads/32014d75dfc7f4a50118c84f263d5cea.png', '42', 2, 2, 0, 'Железный блок', 0, 'DTM'),
(10, '/modules/shop/uploads/714fc90cb804a19cbc72f896e0b4e0f9.png', '22', 4, 2, 0, 'Блок лазурита', 0, 'DTM'),
(11, '/modules/shop/uploads/36fdc623dde00ab1b11b8142bc9da860.png', '152', 4, 2, 0, 'Блок красного камня', 0, 'DTM'),
(12, '/modules/shop/uploads/11f359ee66ec6180d359d5f181515ecc.png', '399', 1, 5, 0, 'Звезда Ада', 0, 'DTM'),
(13, '/modules/shop/uploads/55b20d351c482677ce791af38de0bc00.png', '200:2', 1, 20, 0, 'МФЭ', 0, 'DTM'),
(14, '/modules/shop/uploads/e233e307ca5c9d57615c77adff2337af.png', '461', 1, 40, 0, 'ЭХПФ', 0, 'DTM'),
(15, '/modules/shop/uploads/0507598cfe0d66570ff193e04f29164b.png', '229', 1, 8, 0, 'Улучшенная солнечная панель', 0, 'DTM'),
(16, '/modules/shop/uploads/3186690b985d0aad9028257698b978bb.png', '229:1', 1, 20, 0, 'Гибридная солнечная панель', 0, 'DTM'),
(17, '/modules/shop/uploads/8d27cbf452cb041d598ea175baa8e372.png', '229:2', 1, 50, 0, 'Ультимейт гибридная солнечная панель', 0, 'DTM'),
(18, '/modules/shop/uploads/4a5d0bc23504d16f58317452e1b3deb8.png', '229:3', 1, 99, 0, 'Квантовая солнечная панель', 0, 'DTM'),
(20, '/modules/shop/uploads/6479e0204babe77fdfe48d1f675a5e12.png', '1764', 1, 400, 0, 'Спектральная солнечная панель', 0, 'DTM'),
(21, '/modules/shop/uploads/56644945a0770ec4a85a3cbbe19824f9.png', '1763', 1, 650, 0, 'Сингулярная солнечная панель', 0, 'DTM'),
(22, '/modules/shop/uploads/8ff6f190e260f73cc09836eabb918dd6.png', '1765', 1, 1000, 0, 'Светоадсорбционная солнечная панель', 0, 'DTM'),
(23, '/modules/shop/uploads/d31e5cbcca98e4553ed5daf3601ed6b7.png', '228', 1, 30, 0, 'Молекулярный преобразователь', 0, 'DTM'),
(24, '/modules/shop/uploads/bb09fb6e6a672b3bbba74213ed0c11ca.png', '512:4', 2, 2, 0, 'Блок таум-металла', 0, 'DTM'),
(25, '/modules/shop/uploads/441661f9a60f0004edc69b56d27b517d.png', '5741', 1, 200, 0, 'Стафф', 0, 'DTM'),
(26, '/modules/shop/uploads/ae439a594459f30be089e7246bb96c74.png', '4790:4', 1, 5, 0, 'Слиток нейтрония', 0, 'DTM'),
(27, '/modules/shop/uploads/0d405972ad219b9b67bff086174aa1c2.png', '57', 2, 4, 0, 'Алмазный блок', 0, 'SkyTechnoMagic'),
(28, '/modules/shop/uploads/a805f34290469bc2a075715a86723b78.png', '41', 2, 4, 0, 'Золотой блок', 0, 'SkyTechnoMagic'),
(29, '/modules/shop/uploads/32014d75dfc7f4a50118c84f263d5cea.png', '42', 4, 2, 0, 'Железный блок', 0, 'SkyTechnoMagic'),
(30, '/modules/shop/uploads/fffae373d4487b2d1e0d52b7b6afac97.png', '133', 2, 2, 0, 'Изумрудный блок', 0, 'SkyTechnoMagic'),
(31, '/modules/shop/uploads/714fc90cb804a19cbc72f896e0b4e0f9.png', '22', 2, 2, 0, 'Блок лазурита', 0, 'SkyTechnoMagic'),
(32, '/modules/shop/uploads/36fdc623dde00ab1b11b8142bc9da860.png', '124', 2, 2, 0, 'Блок красной пыли', 0, 'SkyTechnoMagic'),
(33, '/modules/shop/uploads/baaef73808e899eeacd2054e6262f17e.png', '173', 8, 2, 0, 'Блок угля', 0, 'SkyTechnoMagic'),
(34, '/modules/shop/uploads/61920671708f9788463a662543c42746.png', '890', 4, 2, 0, 'Медный блок', 0, 'SkyTechnoMagic'),
(35, '/modules/shop/uploads/402387355e0c8271c3b2c559e6096c96.png', '890:1', 4, 2, 0, 'Оловянный блок', 0, 'SkyTechnoMagic'),
(36, '/modules/shop/uploads/db77a43af4262d269d4860374729896b.png', '890:9', 4, 2, 0, 'Бронзовый блок', 0, 'SkyTechnoMagic'),
(37, '/modules/shop/uploads/8721a1521ae4dbfb3c8c9b391a2cc010.png', '89', 32, 2, 0, 'Светящийся камень', 0, 'SkyTechnoMagic'),
(38, '/modules/shop/uploads/516bea9659b906a35bdae264f2e5e110.png', '2', 64, 4, 0, 'Блок с травой', 0, 'SkyTechnoMagic'),
(39, '/modules/shop/uploads/bc443e958d31dc55d57ed8488247197a.png', '1', 128, 2, 0, 'Камень', 0, 'SkyTechnoMagic'),
(40, '/modules/shop/uploads/05fa165411fb4c17a49ed3a85a3fb2b7.png', '17', 64, 2, 0, 'Дуб', 0, 'SkyTechnoMagic'),
(41, '/modules/shop/uploads/088f98758e1fa49bf0f5215b9a75bc53.png', '17:1', 64, 2, 0, 'Ель', 0, 'SkyTechnoMagic'),
(42, '/modules/shop/uploads/b454548eeb5a1ec0d62ef405d6bdd2b1.png', '17:2', 64, 2, 0, 'Берёза', 0, 'SkyTechnoMagic'),
(43, '/modules/shop/uploads/f49f42cbcc7e71478059c07897f62712.png', '17:3', 64, 2, 0, 'Тропическое дерево', 0, 'SkyTechnoMagic'),
(44, '/modules/shop/uploads/7d98a08dfa4e4517201bf64e66955845.png', '19', 32, 2, 0, 'Губка', 0, 'SkyTechnoMagic'),
(45, '/modules/shop/uploads/a5957455e7ea28cfb7de48ea46a6b484.png', '20', 128, 2, 0, 'Стекло', 0, 'SkyTechnoMagic'),
(46, '/modules/shop/uploads/c7f81bc38d53f48502318f21285bf307.png', '32', 64, 2, 0, 'Шерсть', 0, 'SkyTechnoMagic'),
(47, '/modules/shop/uploads/c24fc38e5a87d94bc2682a9af6471746.png', '82', 64, 2, 0, 'Глина', 0, 'SkyTechnoMagic'),
(48, '/modules/shop/uploads/e5dd56853710fbf1d2d95270b9e6d06b.png', '334', 2, 64, 0, 'Кожа', 0, 'SkyTechnoMagic'),
(49, '/modules/shop/uploads/11f359ee66ec6180d359d5f181515ecc.png', '399', 2, 10, 0, 'Звезда Ада', 0, 'SkyTechnoMagic'),
(50, '/modules/shop/uploads/bfd6c14397b213eab93b9cf546b2443e.png', '1023', 1, 100, 0, 'Якорь 3х3', 0, 'SkyTechnoMagic'),
(51, '/modules/shop/uploads/843b7af3ef2dcfcfc86b049ee039c926.png', '1023:4', 1, 240, 0, 'Якорь админа без питания', 0, 'SkyTechnoMagic'),
(52, '/modules/shop/uploads/665746d3c255efe51e72c083369670c7.png', '1781', 1, 50, 0, 'Радио', 0, 'SkyTechnoMagic'),
(53, '/modules/shop/uploads/0507598cfe0d66570ff193e04f29164b.png', '229', 1, 10, 0, 'Улучшенная солнечная панель', 0, 'SkyTechnoMagic'),
(54, '/modules/shop/uploads/3186690b985d0aad9028257698b978bb.png', '229:1', 1, 24, 0, 'Гибридная солнечная панель', 0, 'SkyTechnoMagic'),
(55, '/modules/shop/uploads/8d27cbf452cb041d598ea175baa8e372.png', '229:2', 1, 50, 0, 'Ультимейт гибридная солнечная панель', 0, 'SkyTechnoMagic'),
(56, '/modules/shop/uploads/4a5d0bc23504d16f58317452e1b3deb8.png', '229:4', 1, 100, 0, 'Квантовая солнечная панель', 0, 'SkyTechnoMagic'),
(57, '/modules/shop/uploads/75f2cf3bffc9f470df31726d498d6585.png', '1697', 1, 200, 0, 'Спектральная солнечная панель', 0, 'SkyTechnoMagic'),
(58, '/modules/shop/uploads/ade33ca8a0931fafadf7cf10ed746021.png', '1696', 1, 350, 0, 'Сингулярная солнечная панель', 0, 'SkyTechnoMagic'),
(59, '/modules/shop/uploads/8ff6f190e260f73cc09836eabb918dd6.png', '1698', 1, 500, 0, 'Светоадсорбционная солнечная панель', 0, 'SkyTechnoMagic'),
(60, '/modules/shop/uploads/f42a6c4826ab97b69203f55b4f5ae538.png', '1699', 1, 800, 0, 'Фотонная солнечная панель', 0, 'SkyTechnoMagic'),
(61, '/modules/shop/uploads/9bc452cc32dba83497c0ea6b23ce2996.png', '4174', 1, 20, 0, 'Квантовый шлем', 0, 'SkyTechnoMagic'),
(62, '/modules/shop/uploads/8b14c72ddd872487d66ff6519936dd8a.png', '4175', 1, 25, 0, 'Квантовая кираса', 0, 'SkyTechnoMagic'),
(63, '/modules/shop/uploads/6f30a56b939fdb74976fb277fce85386.png', '4176', 1, 25, 0, 'Квантовые поножи', 0, 'SkyTechnoMagic'),
(64, '/modules/shop/uploads/209a6f7f2170317239be14f9b79a1016.png', '4177', 1, 20, 0, 'Квантовые ботинки', 0, 'SkyTechnoMagic'),
(65, '/modules/shop/uploads/a7b262d44262d4fce94e760c5b305f33.png', '6076', 1, 60, 0, 'Гравитационный нагрудник', 0, 'SkyTechnoMagic'),
(66, '/modules/shop/uploads/3481d52c12480c2bf1bcd762a36be5a6.png', '4148', 1, 15, 0, 'Иридиевый бур', 0, 'SkyTechnoMagic'),
(67, '/modules/shop/uploads/a1c7e4a36440c9eb41f1e56872935422.png', '6083', 1, 15, 0, 'Улучшенный алмазный бур', 0, 'SkyTechnoMagic'),
(68, '/modules/shop/uploads/3505b3ba4c47a9d088d797e137ffdea7.png', '5749', 1, 15, 0, 'Таум-бур', 0, 'SkyTechnoMagic'),
(69, '/modules/shop/uploads/8bbcfc2b1e9e4046768e1e5a8e0bc619.png', '5756', 1, 15, 0, 'Бур Камнелома', 0, 'SkyTechnoMagic'),
(70, '/modules/shop/uploads/c45c16d1035e90569c1eb86bb4ea7dd1.png', '4149', 1, 10, 0, 'Электропила', 0, 'SkyTechnoMagic'),
(71, '/modules/shop/uploads/ea6db7196015c8ad9545dd42f9be36a3.png', '6084', 1, 15, 0, 'Улучшенная электропила', 0, 'SkyTechnoMagic'),
(72, '/modules/shop/uploads/3a8f8acea2b986d70342788d35d5a5da.png', '5750', 1, 15, 0, 'Алмазная электропила', 0, 'SkyTechnoMagic'),
(73, '/modules/shop/uploads/b748c091ad048fee58ca0b10820fe087.png', '5751', 1, 15, 0, 'Таум-электропила', 0, 'SkyTechnoMagic'),
(74, '/modules/shop/uploads/259de44d41ef0929cc588368a5ccfc35.png', '5755', 1, 15, 0, 'Электропила Потока', 0, 'SkyTechnoMagic'),
(75, '/modules/shop/uploads/a0ff97149b4fd0e0e290afc4c67146ed.png', '6082', 1, 15, 0, 'Гравитул', 0, 'SkyTechnoMagic'),
(76, '/modules/shop/uploads/f0f2448d40447c03c7cbe25ae71d1ec4.png', '6081', 1, 30, 0, 'Ваджра', 0, 'SkyTechnoMagic'),
(77, '/modules/shop/uploads/6081f17b983e2235a1ce76da01f8178d.png', '4268', 2, 4, 0, 'Улучшение «Ускоритель»', 0, 'SkyTechnoMagic'),
(78, '/modules/shop/uploads/d31e5cbcca98e4553ed5daf3601ed6b7.png', '228', 1, 35, 0, 'Молекулярный преобразователь', 0, 'SkyTechnoMagic'),
(79, '/modules/shop/uploads/2fba12594762583a54530c8d59e9485f.png', '4503', 16, 2, 0, 'Грозовой кристалл', 0, 'SkyTechnoMagic'),
(80, '/modules/shop/uploads/c8fabd31b0c6f9cf423bc1be87cf370b.png', '4503:1', 16, 2, 0, 'Огненный кристалл', 0, 'SkyTechnoMagic'),
(81, '/modules/shop/uploads/1c671207b6144945a17518bac0cc4a56.png', '4503:2', 16, 2, 0, 'Ледяной кристалл', 0, 'SkyTechnoMagic'),
(82, '/modules/shop/uploads/d407bfca85ef5b8b4fc6ae60531c045c.png', '4503:3', 16, 2, 0, 'Земляной кристалл', 0, 'SkyTechnoMagic'),
(83, '/modules/shop/uploads/67fee0a0cf318c2cfe44435f343e18a1.png', '4503:4', 16, 2, 0, 'Кристалл порядка', 0, 'SkyTechnoMagic'),
(84, '/modules/shop/uploads/04f27a76c15ed93861a49a5fb9a0232e.png', '4503:5', 16, 2, 0, 'Энтропийный кристалл', 0, 'SkyTechnoMagic'),
(85, '/modules/shop/uploads/b1075e139fd3f25462595cfb91aa0ca5.png', '4503:6', 16, 2, 0, 'Сбалансированный кристалл', 0, 'SkyTechnoMagic'),
(86, '/modules/shop/uploads/4292ed37626464b873fcb994814c55c6.png', '6504:7', 4, 2, 0, 'Кристалл Края', 0, 'SkyTechnoMagic'),
(87, '/modules/shop/uploads/f7a6dc89191870f71b5bf249379394e5.png', '6504:6', 4, 2, 0, 'Кристалл Нижнего мира', 0, 'SkyTechnoMagic'),
(89, '/modules/shop/uploads/c4fc9a5153a2d4ff8d58bcb1ee4688df.png', '5009', 1, 50, 0, 'Творческий жезл строителя', 0, 'DTM'),
(90, '/modules/shop/uploads/284b75596a871a552d7fbbdb456435fc.png', '20', 64, 3, 0, 'Стекло', 0, 'DTM'),
(91, '/modules/shop/uploads/d16beb1f22b0516421cafed9e0f9643f.png', '29', 36, 24, 0, 'Липкий поршень', 0, 'DTM'),
(92, '/modules/shop/uploads/b33c4b3dc2503c9231474de3bf86a3db.png', '5829:6', 1, 18, 0, '16Кб МЭ жидкостный компонент хранилища', 0, 'DTM'),
(93, '/modules/shop/uploads/67628a766d2b679cf7b5b890f8f681c5.png', '33', 20, 32, 0, 'Поршень', 0, 'DTM'),
(94, '/modules/shop/uploads/95d0d46b282e3cfb6c1c1168c2a9192c.png', '1111:2', 8, 15, 0, 'Ардитовая руда', 0, 'DTM'),
(95, '/modules/shop/uploads/b6dbaa1a42c295751faa11f8f8088f07.png', '35', 16, 7, 0, 'Шерсть', 0, 'DTM'),
(96, '/modules/shop/uploads/99c19588dbc7a094429ae1405e509591.png', '46', 16, 6, 0, 'Динамит', 0, 'DTM'),
(97, '/modules/shop/uploads/2dd4958691cd8bb39d3b34abb37c8dd0.png', '47', 16, 12, 0, 'Книжная полка', 0, 'DTM'),
(98, '/modules/shop/uploads/894d30d40c418f82ad0f071fd2cb1994.png', '5829:7', 1, 27, 0, '64Кб МЭ жидкостный компонент хранилища', 0, 'DTM'),
(99, '/modules/shop/uploads/8b8c98a9d6898df63ade28f1839ceda8.png', '49', 16, 7, 0, 'Обсидиан', 0, 'DTM'),
(100, '/modules/shop/uploads/7174020760a55e8237a3bf580ab6d49a.png', '89', 24, 12, 0, 'Светящийся камень', 0, 'DTM'),
(101, '/modules/shop/uploads/eb16d3866e03e38d4104b53387794718.png', '4794', 1, 400, 0, 'Skullfire Sword ', 0, 'DTM'),
(102, '/modules/shop/uploads/e8e6d3305a6f9bed4fc340ae2850496c.png', '430', 1, 10, 0, 'Молекулярный сборщик', 0, 'DTM'),
(103, '/modules/shop/uploads/5c4031a33be3700ce493216a0c85f823.png', '116', 1, 7, 0, 'Стол зачарований', 0, 'DTM'),
(104, '/modules/shop/uploads/2bfbb0cafb67448a362ded7fb3157bf1.png', '130', 1, 5, 0, 'Сундук эндера', 0, 'DTM'),
(105, '/modules/shop/uploads/ddfd6dabf7a5424cf26f80439efa2051.png', '138', 1, 20, 0, 'Маяк', 0, 'DTM'),
(106, '/modules/shop/uploads/3e47cd1315373973ee02804a04ebee5a.png', '239', 27, 32, 0, 'Изменчивый блок', 0, 'DTM'),
(107, '/modules/shop/uploads/505337ebfc195611a5060673076eee3b.png', '397:1', 1, 6, 0, 'Череп скелета-Иссушителя', 0, 'DTM'),
(108, '/modules/shop/uploads/11a01ddba489b2b70b8415478dcd0147.png', '427', 4, 11, 0, 'Блок создания ', 0, 'DTM'),
(112, '/modules/shop/uploads/a88b57b69626a583a856bca2810ca5b7.png', '6067:6', 1, 15, 10, '16Кб МЭ жидкостный компонент хранилища', 0, 'SkyTechnoMagic'),
(113, '/modules/shop/uploads/e0317d0f32e45eebdeb0a0ea586e3f3c.png', '1565:2', 8, 15, 10, 'Ардитовая руда', 0, 'SkyTechnoMagic'),
(114, '/modules/shop/uploads/27a96f14e4e6f2693f3fa51474d498c0.png', '6067:7', 1, 25, 15, '64Кб МЭ жидкостный компонент хранилища', 0, 'SkyTechnoMagic'),
(115, '/modules/shop/uploads/dfe8f709aead060cc402b3aa8ceed0bb.png', '4744', 1, 300, 120, 'Skullfire Sword', 0, 'SkyTechnoMagic');

-- --------------------------------------------------------

--
-- Структура таблицы `flare_whitelist`
--

CREATE TABLE `flare_whitelist` (
  `id` int NOT NULL,
  `UUID` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `Galaxy`
--

CREATE TABLE `Galaxy` (
  `id` bigint NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `item_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `LavaTech`
--

CREATE TABLE `LavaTech` (
  `id` bigint NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `item_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `MagicRPG`
--

CREATE TABLE `MagicRPG` (
  `id` bigint NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `item_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `playtime`
--

CREATE TABLE `playtime` (
  `name` varchar(25) NOT NULL,
  `playtime` int DEFAULT '0',
  `playtimedeath` int NOT NULL,
  `lastdeath` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `playtime`
--

INSERT INTO `playtime` (`name`, `playtime`, `playtimedeath`, `lastdeath`) VALUES
('Alexwq', 108, 52, 0),
('Arkhangel', 5636, 5632, 0),
('DomineDeus', 742, 742, 0),
('Ernest', 517, 433, 0),
('Farmer', 53, 18, 0),
('FlipFlare', 3422, 3414, 0),
('Grifon11', 180, 164, 0),
('LeGiNdARiYm', 3562, 3506, 0),
('Mirus', 1982, 1904, 0),
('opaopa', 4749, 4696, 0),
('Rixens1337', 105, 0, 0),
('Strateg', 2156, 1983, 0),
('Thijd', 113, 0, 0),
('UNIVERSUM', 2118, 1763, 0),
('vivikl', 7296, 6521, 0),
('WildCat', 148, 0, 0),
('WildYakeeGun', 4787, 4751, 0),
('wolfara', 54, 49, 0),
('XacF', 6, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `server_online`
--

CREATE TABLE `server_online` (
  `server` varchar(30) NOT NULL,
  `online` int DEFAULT '-1',
  `max_online` int NOT NULL,
  `players` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `server_online`
--

INSERT INTO `server_online` (`server`, `online`, `max_online`, `players`) VALUES
('DTM', 4, 50, '[Reydman, wirius, ArabckayaNoch, killmmman]'),
('Galaxy', -1, 50, '[]'),
('SkyTech', 0, 50, '[]'),
('STM', -1, 50, '[]'),
('SkyTechnoMagic', 0, 50, '[]'),
('MagicRPG', -1, 50, '[]');

-- --------------------------------------------------------

--
-- Структура таблицы `server_rank`
--

CREATE TABLE `server_rank` (
  `uuid` varchar(36) NOT NULL,
  `time_played` int NOT NULL DEFAULT '0',
  `rank_id` int NOT NULL DEFAULT '0',
  `time_to_up` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `server_rank`
--

INSERT INTO `server_rank` (`uuid`, `time_played`, `rank_id`, `time_to_up`) VALUES
('57a196f6-5ad9-11ea-adca-525400462574', 9, 1, -1),
('6f841208-60ba-11ea-9388-5254004e2de0', 3, 0, 2),
('72f09e93-5f7e-11ea-9388-5254004e2de0', 110, 1, -1),
('8790c735-5acc-11ea-adca-525400462574', 1, 0, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `SkyTechnoMagic`
--

CREATE TABLE `SkyTechnoMagic` (
  `id` bigint NOT NULL,
  `item_id` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `item_amount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `SkyTechnoMagic`
--

INSERT INTO `SkyTechnoMagic` (`id`, `item_id`, `nickname`, `item_amount`) VALUES
(2, '266', 'FlipFlare', 1),
(3, '202:3', 'FlipFlare', 1),
(4, '35', 'FlipFlare', 16),
(5, '177', 'FlipFlare', 2),
(6, '245', 'FlipFlare', 1),
(8, '4149', 'TheLooToS', 1),
(93, '263', 'UNIVERSUM', 64),
(94, '383:91', 'UNIVERSUM', 1),
(95, '194:4', 'UNIVERSUM', 1),
(112, '266', 'Henke', 8),
(113, '202:4', 'Henke', 1),
(114, '4340:15', 'Henke', 1),
(115, '383:91', 'Vitalya179', 1),
(116, '4340:19', 'Vitalya179', 1),
(117, '265', 'Vitalya179', 16),
(118, '4340:14', 'Vitalya179', 1),
(122, '4149', 'FlipFlare', 1),
(123, '4995', 'FlipFlare', 1),
(124, '4149', 'FlipFlare', 1),
(125, '4128', 'FlipFlare', 4),
(126, '383:92', 'FlipFlare', 1),
(127, '1456', 'FlipFlare', 3),
(128, '4340:15', 'FlipFlare', 1),
(129, '17:1', 'FlipFlare', 64),
(130, '17', 'FlipFlare', 64),
(131, '351:4', 'FlipFlare', 16),
(132, '383:92', 'FlipFlare', 1),
(133, '265', 'FlipFlare', 16),
(134, '1450', 'FlipFlare', 3),
(135, '17:2', 'FlipFlare', 64),
(136, '1456', 'FlipFlare', 3),
(137, '334', 'FlipFlare', 8),
(138, '202:3', 'FlipFlare', 1),
(139, '194:4', 'FlipFlare', 1),
(140, '194', 'FlipFlare', 1),
(141, '17:3', 'FlipFlare', 64),
(142, '351:4', 'FlipFlare', 16),
(143, '2', 'FlipFlare', 64),
(144, '949', 'FlipFlare', 1),
(145, '19', 'FlipFlare', 8),
(146, '4758:73', 'FlipFlare', 8),
(147, '4758:65', 'FlipFlare', 8),
(148, '4340:15', 'FlipFlare', 1),
(149, '202:3', 'FlipFlare', 1),
(150, '13', 'FlipFlare', 64),
(151, '348', 'FlipFlare', 16),
(152, '19', 'FlipFlare', 8),
(153, '348', 'FlipFlare', 16),
(154, '4340:14', 'FlipFlare', 1),
(155, '1456', 'FlipFlare', 3),
(156, '194:3', 'FlipFlare', 1),
(157, '4340:15', 'FlipFlare', 1),
(158, '202:4', 'FlipFlare', 1),
(159, '4128', 'FlipFlare', 4),
(160, '4340', 'FlipFlare', 8),
(161, '20', 'FlipFlare', 32),
(162, '928', 'FlipFlare', 2),
(163, '4111:3', 'FlipFlare', 8),
(164, '4340:19', 'FlipFlare', 1),
(165, '13', 'FlipFlare', 64),
(166, '4758:64', 'FlipFlare', 8),
(167, '194:3', 'FlipFlare', 1),
(168, '4303:11', 'FlipFlare', 8),
(169, '383:90', 'UNIVERSUM', 1),
(170, '5016', 'UNIVERSUM', 1),
(171, '4758:73', 'UNIVERSUM', 8),
(172, '194', 'UNIVERSUM', 1),
(173, '5016', 'UNIVERSUM', 1),
(174, '383:91', 'UNIVERSUM', 1),
(175, '202:4', 'UNIVERSUM', 1),
(176, '263', 'UNIVERSUM', 64),
(177, '331', 'UNIVERSUM', 16),
(178, '194', 'FlipFlare', 1),
(179, '410', 'FlipFlare', 1),
(180, '4303:11', 'FlipFlare', 8),
(181, '383:93', 'FlipFlare', 1),
(182, '4340:15', 'FlipFlare', 1),
(183, '264', 'FlipFlare', 8),
(184, '265', 'FlipFlare', 16),
(185, '35', 'bobibob1235', 16),
(186, '331', 'bobibob1235', 16),
(191, '13', 'Zl0yK0t', 64),
(192, '4758:73', 'Zl0yK0t', 8),
(193, '202:3', 'Troleboi', 1),
(194, '202:5', 'Troleboi', 1),
(195, '265', 'Daggers', 16),
(196, '4758:64', 'NikolaTesla', 8),
(197, '20', 'NikolaTesla', 32);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dle_admin_logs`
--
ALTER TABLE `dle_admin_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- Индексы таблицы `dle_admin_sections`
--
ALTER TABLE `dle_admin_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `dle_banned`
--
ALTER TABLE `dle_banned`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`users_id`);

--
-- Индексы таблицы `dle_banners`
--
ALTER TABLE `dle_banners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_banners_logs`
--
ALTER TABLE `dle_banners_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bid` (`bid`),
  ADD KEY `ip` (`ip`);

--
-- Индексы таблицы `dle_banners_rubrics`
--
ALTER TABLE `dle_banners_rubrics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_category`
--
ALTER TABLE `dle_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_comments`
--
ALTER TABLE `dle_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `approve` (`approve`),
  ADD KEY `parent` (`parent`),
  ADD KEY `rating` (`rating`);
ALTER TABLE `dle_comments` ADD FULLTEXT KEY `text` (`text`);

--
-- Индексы таблицы `dle_comments_files`
--
ALTER TABLE `dle_comments_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `author` (`author`);

--
-- Индексы таблицы `dle_comment_rating_log`
--
ALTER TABLE `dle_comment_rating_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `member` (`member`),
  ADD KEY `ip` (`ip`);

--
-- Индексы таблицы `dle_complaint`
--
ALTER TABLE `dle_complaint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `n_id` (`n_id`);

--
-- Индексы таблицы `dle_email`
--
ALTER TABLE `dle_email`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_files`
--
ALTER TABLE `dle_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Индексы таблицы `dle_flood`
--
ALTER TABLE `dle_flood`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `ip` (`ip`),
  ADD KEY `id` (`id`),
  ADD KEY `flag` (`flag`);

--
-- Индексы таблицы `dle_ignore_list`
--
ALTER TABLE `dle_ignore_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `user_from` (`user_from`);

--
-- Индексы таблицы `dle_images`
--
ALTER TABLE `dle_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author` (`author`),
  ADD KEY `news_id` (`news_id`);

--
-- Индексы таблицы `dle_links`
--
ALTER TABLE `dle_links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_login_log`
--
ALTER TABLE `dle_login_log`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ip` (`ip`),
  ADD KEY `date` (`date`);

--
-- Индексы таблицы `dle_logs`
--
ALTER TABLE `dle_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `member` (`member`),
  ADD KEY `ip` (`ip`);

--
-- Индексы таблицы `dle_lostdb`
--
ALTER TABLE `dle_lostdb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lostid` (`lostid`);

--
-- Индексы таблицы `dle_mail_log`
--
ALTER TABLE `dle_mail_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hash` (`hash`);

--
-- Индексы таблицы `dle_metatags`
--
ALTER TABLE `dle_metatags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_notice`
--
ALTER TABLE `dle_notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `dle_plugins`
--
ALTER TABLE `dle_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_plugins_files`
--
ALTER TABLE `dle_plugins_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plugin_id` (`plugin_id`),
  ADD KEY `active` (`active`);

--
-- Индексы таблицы `dle_plugins_logs`
--
ALTER TABLE `dle_plugins_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plugin_id` (`plugin_id`);

--
-- Индексы таблицы `dle_pm`
--
ALTER TABLE `dle_pm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `folder` (`folder`),
  ADD KEY `user` (`user`),
  ADD KEY `user_from` (`user_from`),
  ADD KEY `pm_read` (`pm_read`);

--
-- Индексы таблицы `dle_poll`
--
ALTER TABLE `dle_poll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Индексы таблицы `dle_poll_log`
--
ALTER TABLE `dle_poll_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `member` (`member`);

--
-- Индексы таблицы `dle_post`
--
ALTER TABLE `dle_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `autor` (`autor`),
  ADD KEY `alt_name` (`alt_name`),
  ADD KEY `category` (`category`),
  ADD KEY `approve` (`approve`),
  ADD KEY `allow_main` (`allow_main`),
  ADD KEY `date` (`date`),
  ADD KEY `symbol` (`symbol`),
  ADD KEY `comm_num` (`comm_num`),
  ADD KEY `fixed` (`fixed`);
ALTER TABLE `dle_post` ADD FULLTEXT KEY `short_story` (`short_story`,`full_story`,`xfields`,`title`);

--
-- Индексы таблицы `dle_post_extras`
--
ALTER TABLE `dle_post_extras`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rating` (`rating`),
  ADD KEY `disable_search` (`disable_search`),
  ADD KEY `news_read` (`news_read`);

--
-- Индексы таблицы `dle_post_extras_cats`
--
ALTER TABLE `dle_post_extras_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Индексы таблицы `dle_post_log`
--
ALTER TABLE `dle_post_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `expires` (`expires`);

--
-- Индексы таблицы `dle_post_pass`
--
ALTER TABLE `dle_post_pass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Индексы таблицы `dle_question`
--
ALTER TABLE `dle_question`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_read_log`
--
ALTER TABLE `dle_read_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `ip` (`ip`);

--
-- Индексы таблицы `dle_redirects`
--
ALTER TABLE `dle_redirects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_rss`
--
ALTER TABLE `dle_rss`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_rssinform`
--
ALTER TABLE `dle_rssinform`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_sendlog`
--
ALTER TABLE `dle_sendlog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`),
  ADD KEY `date` (`date`),
  ADD KEY `flag` (`flag`);

--
-- Индексы таблицы `dle_social_login`
--
ALTER TABLE `dle_social_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- Индексы таблицы `dle_spam_log`
--
ALTER TABLE `dle_spam_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`),
  ADD KEY `is_spammer` (`is_spammer`);

--
-- Индексы таблицы `dle_static`
--
ALTER TABLE `dle_static`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `disable_search` (`disable_search`);
ALTER TABLE `dle_static` ADD FULLTEXT KEY `template` (`template`);

--
-- Индексы таблицы `dle_static_files`
--
ALTER TABLE `dle_static_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `static_id` (`static_id`),
  ADD KEY `onserver` (`onserver`),
  ADD KEY `author` (`author`);

--
-- Индексы таблицы `dle_subscribe`
--
ALTER TABLE `dle_subscribe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `dle_tags`
--
ALTER TABLE `dle_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `tag` (`tag`);

--
-- Индексы таблицы `dle_twofactor`
--
ALTER TABLE `dle_twofactor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pin` (`pin`),
  ADD KEY `date` (`date`);

--
-- Индексы таблицы `dle_usergroups`
--
ALTER TABLE `dle_usergroups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_users`
--
ALTER TABLE `dle_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Индексы таблицы `dle_views`
--
ALTER TABLE `dle_views`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dle_vote`
--
ALTER TABLE `dle_vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approve` (`approve`);

--
-- Индексы таблицы `dle_vote_result`
--
ALTER TABLE `dle_vote_result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer` (`answer`),
  ADD KEY `vote_id` (`vote_id`),
  ADD KEY `ip` (`ip`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `dle_xfsearch`
--
ALTER TABLE `dle_xfsearch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `tagname` (`tagname`),
  ADD KEY `tagvalue` (`tagvalue`);

--
-- Индексы таблицы `DTM`
--
ALTER TABLE `DTM`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DTM_nickname_idx` (`nickname`);

--
-- Индексы таблицы `flare_gifts`
--
ALTER TABLE `flare_gifts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Индексы таблицы `flare_history`
--
ALTER TABLE `flare_history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `flare_regions`
--
ALTER TABLE `flare_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `flare_regions_regen`
--
ALTER TABLE `flare_regions_regen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `flare_shop`
--
ALTER TABLE `flare_shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `flare_whitelist`
--
ALTER TABLE `flare_whitelist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Galaxy`
--
ALTER TABLE `Galaxy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Galaxy_nickname_idx` (`nickname`);

--
-- Индексы таблицы `LavaTech`
--
ALTER TABLE `LavaTech`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LavaTech_nickname_idx` (`nickname`);

--
-- Индексы таблицы `MagicRPG`
--
ALTER TABLE `MagicRPG`
  ADD PRIMARY KEY (`id`),
  ADD KEY `MagicRPG_nickname_idx` (`nickname`);

--
-- Индексы таблицы `playtime`
--
ALTER TABLE `playtime`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `server_rank`
--
ALTER TABLE `server_rank`
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Индексы таблицы `SkyTechnoMagic`
--
ALTER TABLE `SkyTechnoMagic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SkyTechnoMagic_nickname_idx` (`nickname`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dle_admin_logs`
--
ALTER TABLE `dle_admin_logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT для таблицы `dle_admin_sections`
--
ALTER TABLE `dle_admin_sections`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_banned`
--
ALTER TABLE `dle_banned`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_banners`
--
ALTER TABLE `dle_banners`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dle_banners_logs`
--
ALTER TABLE `dle_banners_logs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_banners_rubrics`
--
ALTER TABLE `dle_banners_rubrics`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_category`
--
ALTER TABLE `dle_category`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `dle_comments`
--
ALTER TABLE `dle_comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_comments_files`
--
ALTER TABLE `dle_comments_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_comment_rating_log`
--
ALTER TABLE `dle_comment_rating_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_complaint`
--
ALTER TABLE `dle_complaint`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_email`
--
ALTER TABLE `dle_email`
  MODIFY `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `dle_files`
--
ALTER TABLE `dle_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_flood`
--
ALTER TABLE `dle_flood`
  MODIFY `f_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_ignore_list`
--
ALTER TABLE `dle_ignore_list`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_images`
--
ALTER TABLE `dle_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_links`
--
ALTER TABLE `dle_links`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_login_log`
--
ALTER TABLE `dle_login_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `dle_logs`
--
ALTER TABLE `dle_logs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_lostdb`
--
ALTER TABLE `dle_lostdb`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `dle_mail_log`
--
ALTER TABLE `dle_mail_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_metatags`
--
ALTER TABLE `dle_metatags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_notice`
--
ALTER TABLE `dle_notice`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_plugins`
--
ALTER TABLE `dle_plugins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_plugins_files`
--
ALTER TABLE `dle_plugins_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_plugins_logs`
--
ALTER TABLE `dle_plugins_logs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_pm`
--
ALTER TABLE `dle_pm`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_poll`
--
ALTER TABLE `dle_poll`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_poll_log`
--
ALTER TABLE `dle_poll_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_post`
--
ALTER TABLE `dle_post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `dle_post_extras`
--
ALTER TABLE `dle_post_extras`
  MODIFY `eid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `dle_post_extras_cats`
--
ALTER TABLE `dle_post_extras_cats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `dle_post_log`
--
ALTER TABLE `dle_post_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_post_pass`
--
ALTER TABLE `dle_post_pass`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_question`
--
ALTER TABLE `dle_question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_read_log`
--
ALTER TABLE `dle_read_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_redirects`
--
ALTER TABLE `dle_redirects`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_rss`
--
ALTER TABLE `dle_rss`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dle_rssinform`
--
ALTER TABLE `dle_rssinform`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dle_sendlog`
--
ALTER TABLE `dle_sendlog`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_social_login`
--
ALTER TABLE `dle_social_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_spam_log`
--
ALTER TABLE `dle_spam_log`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `dle_static`
--
ALTER TABLE `dle_static`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `dle_static_files`
--
ALTER TABLE `dle_static_files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_subscribe`
--
ALTER TABLE `dle_subscribe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_tags`
--
ALTER TABLE `dle_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `dle_twofactor`
--
ALTER TABLE `dle_twofactor`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_usergroups`
--
ALTER TABLE `dle_usergroups`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `dle_users`
--
ALTER TABLE `dle_users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT для таблицы `dle_views`
--
ALTER TABLE `dle_views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_vote`
--
ALTER TABLE `dle_vote`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dle_vote_result`
--
ALTER TABLE `dle_vote_result`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `dle_xfsearch`
--
ALTER TABLE `dle_xfsearch`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `DTM`
--
ALTER TABLE `DTM`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;

--
-- AUTO_INCREMENT для таблицы `flare_gifts`
--
ALTER TABLE `flare_gifts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `flare_history`
--
ALTER TABLE `flare_history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT для таблицы `flare_regions`
--
ALTER TABLE `flare_regions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `flare_regions_regen`
--
ALTER TABLE `flare_regions_regen`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `flare_shop`
--
ALTER TABLE `flare_shop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT для таблицы `flare_whitelist`
--
ALTER TABLE `flare_whitelist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `Galaxy`
--
ALTER TABLE `Galaxy`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `LavaTech`
--
ALTER TABLE `LavaTech`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `MagicRPG`
--
ALTER TABLE `MagicRPG`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `SkyTechnoMagic`
--
ALTER TABLE `SkyTechnoMagic`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
