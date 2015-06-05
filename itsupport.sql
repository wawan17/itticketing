-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2015 at 04:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itsupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
`TICKET_ID` int(11) NOT NULL,
  `SUBJECT` varchar(250) NOT NULL,
  `DESCRIPTION` text,
  `TICKET_CATEGORY_ID` int(11) NOT NULL,
  `TICKET_STATUS_ID` int(2) NOT NULL,
  `PRIORITY` varchar(10) NOT NULL,
  `ATTACHMENT` varchar(250) DEFAULT NULL,
  `CREATE_DATE` datetime DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(25) DEFAULT NULL,
  `LAST_EDIT_DATE` datetime DEFAULT NULL,
  `LAST_EDIT_BY` varchar(25) DEFAULT NULL,
  `CLOSE_DATE` datetime DEFAULT NULL,
  `CLOSED_BY` varchar(25) DEFAULT NULL,
  `ASSIGNED_DATE` datetime DEFAULT NULL,
  `ASSIGNED_BY` varchar(25) DEFAULT NULL,
  `DO_DATE` datetime DEFAULT NULL,
  `DO_BY` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TICKET_ID`, `SUBJECT`, `DESCRIPTION`, `TICKET_CATEGORY_ID`, `TICKET_STATUS_ID`, `PRIORITY`, `ATTACHMENT`, `CREATE_DATE`, `CREATED_BY`, `LAST_EDIT_DATE`, `LAST_EDIT_BY`, `CLOSE_DATE`, `CLOSED_BY`, `ASSIGNED_DATE`, `ASSIGNED_BY`, `DO_DATE`, `DO_BY`) VALUES
(1, 'MANGAN', 'MANGAN MANGAN', 2, 2, 'high', NULL, '2015-05-04 09:58:58', 'achmad.putra', NULL, NULL, NULL, NULL, '2015-05-05 15:53:37', 'wawan.setiawan', NULL, NULL),
(2, 'asdfasdfsdf', 'sdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:02:33', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:35', 'wawan.setiawan', NULL, NULL),
(3, 'asDASD', 'ASDASDASD', 2, 2, 'low', NULL, '2015-05-04 10:04:27', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:25', 'wawan.setiawan', NULL, NULL),
(4, 'testing', 'tes', 1, 2, 'medium', NULL, '2015-05-04 10:08:37', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:48', 'wawan.setiawan', NULL, NULL),
(5, 'sddfsdf', 'sdfsadfsadfasdf', 1, 2, 'medium', NULL, '2015-05-04 10:09:19', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:27', 'wawan.setiawan', NULL, NULL),
(6, 'sadfsd', 'fsdfsdfsdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:09:59', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:29', 'wawan.setiawan', NULL, NULL),
(7, 'wefrqwer', 'werwerwerwer', 1, 2, 'medium', NULL, '2015-05-04 10:10:20', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:30', 'wawan.setiawan', NULL, NULL),
(8, 'sadfsdf', 'sdfsdfsdfsd', 1, 2, 'medium', NULL, '2015-05-04 10:11:58', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:31', 'wawan.setiawan', NULL, NULL),
(9, 'asdfsdff', 'sdfsdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:12:55', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:11', 'wawan.setiawan', NULL, NULL),
(10, 'asdfsdff', 'sdfsdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:14:01', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:32', 'wawan.setiawan', NULL, NULL),
(11, 'grt', 'ryrty', 1, 2, 'medium', NULL, '2015-05-04 10:16:33', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:33', 'wawan.setiawan', NULL, NULL),
(12, 'asdfsdfasddfsdf', 'sdfsdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:17:58', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:34', 'wawan.setiawan', NULL, NULL),
(13, 'asdfsdfsdfasdfsdfsdf', 'asdfsadfsadfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:18:03', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:35', 'wawan.setiawan', NULL, NULL),
(14, 'asdfsdfasdsdfsd', 'fsdfsdfsdfsdfsadf', 1, 2, 'medium', NULL, '2015-05-04 10:18:10', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:48:51', 'wawan.setiawan', NULL, NULL),
(15, 'asdfsdfasds', 'dfsdfsdfsdfasdf', 1, 2, 'medium', NULL, '2015-05-04 10:18:15', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:35', 'wawan.setiawan', NULL, NULL),
(16, 'asdfsdfasdsdf', 'sdfsdfsdfasdf', 1, 2, 'medium', NULL, '2015-05-04 10:18:21', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:06', 'wawan.setiawan', NULL, NULL),
(17, 'sadfsdfsd', 'fsdfsdfsdfasdfsadfasdf', 1, 2, 'medium', NULL, '2015-05-04 10:18:37', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:52', 'wawan.setiawan', NULL, NULL),
(18, 'asdfsdfasdfsdf', 'sdfsdfsdfsdfsadf', 1, 2, 'medium', NULL, '2015-05-04 10:20:43', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:36', 'wawan.setiawan', NULL, NULL),
(19, 'testing', 'tes', 1, 2, 'medium', NULL, '2015-05-04 10:31:43', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:36', 'wawan.setiawan', NULL, NULL),
(20, 'tes', 'tes', 2, 2, 'medium', NULL, '2015-05-04 10:32:20', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:17', 'wawan.setiawan', NULL, NULL),
(21, 'asdfasdfsdfsdf', 'sdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 10:32:58', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:17', 'wawan.setiawan', NULL, NULL),
(22, 'er', 'twertertert', 2, 2, 'medium', NULL, '2015-05-04 12:01:01', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:16', 'wawan.setiawan', NULL, NULL),
(23, 'erwter', 'tertertertertwertewrt', 1, 2, 'medium', NULL, '2015-05-04 12:01:10', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:15', 'wawan.setiawan', NULL, NULL),
(24, 'asdfsdfasddfsdfsdfdfsdf', 'asdfsdfsdfsdfsadfsdf', 1, 2, 'medium', '41.jpg', '2015-05-04 12:07:20', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:15', 'wawan.setiawan', NULL, NULL),
(25, 'terong', 'dfsdfsdfsdfsdfsdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 12:07:33', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:14', 'wawan.setiawan', NULL, NULL),
(26, 'tes', 'tes', 1, 2, 'medium', 'b1b.jpg', '2015-05-04 12:12:22', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:16', 'wawan.setiawan', NULL, NULL),
(27, 'tes ajah', 'fsdfsdfsdfsdf', 1, 2, 'medium', NULL, '2015-05-04 12:12:33', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:46', 'wawan.setiawan', NULL, NULL),
(28, 'testing', 'tes', 1, 1, 'medium', '22.jpg', '2015-05-04 12:14:26', 'wawan.setiawan', NULL, NULL, NULL, NULL, NULL, 'IT Team', NULL, NULL),
(29, 'tes', 'testset', 1, 2, 'medium', NULL, '2015-05-04 12:14:36', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:50:09', 'wawan.setiawan', NULL, NULL),
(30, 'tS', 'FSADFSDF', 1, 2, 'medium', NULL, '2015-05-05 04:58:44', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:54:36', 'wawan.setiawan', NULL, NULL),
(31, 'khuguygy', 'gyfgdfgdfgdfg', 1, 2, 'medium', '04_04_19---At-work-in-the-Office_web.jpg', '2015-05-05 10:32:46', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:20', 'wawan.setiawan', NULL, NULL),
(32, 'sdfasdf', 'dfsdfsdfasdfsdf', 1, 2, 'medium', NULL, '2015-05-05 15:53:23', 'wawan.setiawan', NULL, NULL, NULL, NULL, '2015-05-05 15:58:00', 'wawan.setiawan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_category`
--

CREATE TABLE IF NOT EXISTS `ticket_category` (
`TICKET_CATEGORY_ID` int(11) NOT NULL,
  `TICKET_CATEGORY` varchar(100) NOT NULL,
  `TIME_STANDARD` int(5) DEFAULT NULL,
  `UOM_ID` int(3) NOT NULL,
  `CREATE_DATE` datetime DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(25) DEFAULT NULL,
  `LAST_EDIT_DATE` datetime DEFAULT NULL,
  `LAST_EDIT_BY` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_category`
--

INSERT INTO `ticket_category` (`TICKET_CATEGORY_ID`, `TICKET_CATEGORY`, `TIME_STANDARD`, `UOM_ID`, `CREATE_DATE`, `CREATED_BY`, `LAST_EDIT_DATE`, `LAST_EDIT_BY`) VALUES
(1, 'sruntul', 20, 1, '2015-05-04 00:00:00', 'tes', NULL, NULL),
(2, 'SRUNTULAN', 10, 3, '2015-05-04 00:00:00', 'tes', NULL, NULL),
(3, 't4g5tg5tg', 45, 1, '2015-05-05 00:00:00', 'tes', NULL, NULL),
(4, 'yhth', 4, 1, '2015-05-05 00:00:00', 'tes', NULL, NULL),
(5, 'fasdfsdfsadf', 12, 1, '2015-05-05 00:00:00', 'tes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_comment`
--

CREATE TABLE IF NOT EXISTS `ticket_comment` (
`TICKET_COMMENT_ID` int(11) NOT NULL,
  `COMMENT` text NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `TICKET_ID` int(11) NOT NULL,
  `ATTACHMENT` varchar(250) DEFAULT NULL,
  `CREATE_DATE` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_comment`
--

INSERT INTO `ticket_comment` (`TICKET_COMMENT_ID`, `COMMENT`, `USERNAME`, `TICKET_ID`, `ATTACHMENT`, `CREATE_DATE`) VALUES
(1, 'Ticket created by achmad.putra at 09:58:58', 'achmad.putra', 1, NULL, '2015-05-04 09:58:58'),
(2, 'Ticket created by wawan.setiawan at 10:02:33', 'wawan.setiawan', 2, NULL, '2015-05-04 10:02:33'),
(3, 'Ticket created by wawan.setiawan at 10:04:27', 'wawan.setiawan', 3, NULL, '2015-05-04 10:04:27'),
(4, 'Ticket created by wawan.setiawan at 10:14:01', 'wawan.setiawan', 10, NULL, '2015-05-04 10:14:01'),
(5, 'Ticket created by wawan.setiawan at 10:16:33', 'wawan.setiawan', 11, NULL, '2015-05-04 10:16:33'),
(6, 'Ticket created by wawan.setiawan at 10:17:58', 'wawan.setiawan', 12, NULL, '2015-05-04 10:17:58'),
(7, 'Ticket created by wawan.setiawan at 10:18:03', 'wawan.setiawan', 13, NULL, '2015-05-04 10:18:03'),
(8, 'Ticket created by wawan.setiawan at 10:18:10', 'wawan.setiawan', 14, NULL, '2015-05-04 10:18:10'),
(9, 'Ticket created by wawan.setiawan at 10:18:15', 'wawan.setiawan', 15, NULL, '2015-05-04 10:18:15'),
(10, 'Ticket created by wawan.setiawan at 10:18:21', 'wawan.setiawan', 16, NULL, '2015-05-04 10:18:21'),
(11, 'Ticket created by wawan.setiawan at 10:18:37', 'wawan.setiawan', 17, NULL, '2015-05-04 10:18:37'),
(12, 'Ticket created by wawan.setiawan at 10:20:43', 'wawan.setiawan', 18, NULL, '2015-05-04 10:20:43'),
(13, 'Ticket created by wawan.setiawan at 12:01:01', 'wawan.setiawan', 22, NULL, '2015-05-04 12:01:01'),
(14, 'Ticket created by wawan.setiawan at 12:01:10', 'wawan.setiawan', 23, NULL, '2015-05-04 12:01:10'),
(15, 'Ticket created by wawan.setiawan at 12:07:20', 'wawan.setiawan', 24, NULL, '2015-05-04 12:07:20'),
(16, 'Ticket created by wawan.setiawan at 12:07:33', 'wawan.setiawan', 25, NULL, '2015-05-04 12:07:33'),
(17, 'Ticket created by wawan.setiawan at 12:12:22', 'wawan.setiawan', 26, NULL, '2015-05-04 12:12:22'),
(18, 'Ticket created by wawan.setiawan at 12:12:33', 'wawan.setiawan', 27, NULL, '2015-05-04 12:12:33'),
(19, 'Ticket created by wawan.setiawan at 12:14:26', 'wawan.setiawan', 28, NULL, '2015-05-04 12:14:26'),
(20, 'Ticket created by wawan.setiawan at 12:14:36', 'wawan.setiawan', 29, NULL, '2015-05-04 12:14:36'),
(21, '0', 'wawan.setiawan', 0, NULL, '2015-05-04 13:12:01'),
(22, '0', 'wawan.setiawan', 0, NULL, '2015-05-04 13:12:09'),
(23, '0', 'wawan.setiawan', 0, NULL, '2015-05-04 13:12:15'),
(24, '0', 'wawan.setiawan', 0, NULL, '2015-05-04 13:13:15'),
(25, '0', 'wawan.setiawan', 0, NULL, '2015-05-04 13:13:42'),
(26, 'testing', 'wawan.setiawan', 13, NULL, '2015-05-04 13:15:44'),
(27, 'mantap bro', 'wawan.setiawan', 13, NULL, '2015-05-04 13:15:52'),
(28, 'testing', 'wawan.setiawan', 10, NULL, '2015-05-04 13:16:09'),
(29, 'mantap tong', 'wawan.setiawan', 25, NULL, '2015-05-04 13:17:04'),
(30, 'okeh', 'wawan.setiawan', 25, NULL, '2015-05-04 13:17:08'),
(31, 'siap', 'wawan.setiawan', 25, NULL, '2015-05-04 13:17:19'),
(32, 'okeh brewww', 'wawan.setiawan', 10, NULL, '2015-05-04 13:19:34'),
(33, 'dfasdfsdf', 'wawan.setiawan', 10, NULL, '2015-05-04 13:21:25'),
(34, 'asdfsdf', 'wawan.setiawan', 10, NULL, '2015-05-04 13:21:28'),
(35, 'sadfsdfasdfasdf\r\nasdf\r\nsdf\r\nsd\r\nf\r\nsdf', 'wawan.setiawan', 10, NULL, '2015-05-04 13:21:32'),
(36, 'asdfsdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:22:47'),
(37, 'sadfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:22:49'),
(38, 'asdfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:22:51'),
(39, 'sadfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:22:53'),
(40, 'sdfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:22:56'),
(41, 'sdfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:23:00'),
(42, 'sadfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:23:01'),
(43, 'asdfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:23:03'),
(44, 'asdfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:23:04'),
(45, 'asdfasdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:23:06'),
(46, 'asdfasdfsdf', 'wawan.setiawan', 16, NULL, '2015-05-04 13:23:12'),
(47, 'tes yang ini', 'wawan.setiawan', 11, '4.jpg', '2015-05-04 13:28:58'),
(48, 'TES', 'wawan.setiawan', 11, NULL, '2015-05-04 13:55:11'),
(49, 'TESTING', 'wawan.setiawan', 11, NULL, '2015-05-04 13:55:16'),
(50, 'TESTING BRO', 'wawan.setiawan', 11, NULL, '2015-05-04 13:55:31'),
(51, 'begini', 'wawan.setiawan', 29, 'helm.jpg', '2015-05-04 14:06:14'),
(52, '', 'wawan.setiawan', 25, 'logoMPMR.png', '2015-05-04 14:07:01'),
(53, 'ini filenya', 'wawan.setiawan', 11, 'LIST_PROVIDER_UP_DATE_13_APRIL_2015_-_UNTUK_PESERTA_SWIPE_IMC_177_ALL.xlsx', '2015-05-04 14:25:31'),
(54, 'wew', 'wawan.setiawan', 11, NULL, '2015-05-04 14:28:23'),
(55, 'oke', 'wawan.setiawan', 11, NULL, '2015-05-04 14:28:27'),
(56, 'mantap', 'wawan.setiawan', 11, NULL, '2015-05-04 14:28:33'),
(57, 'sip lah kalo begitu', 'wawan.setiawan', 11, NULL, '2015-05-04 14:28:41'),
(58, 'iiii waw', 'wawan.setiawan', 11, NULL, '2015-05-04 14:28:51'),
(59, 'woi .. ngetest nih ...\r\n', 'bambang.wijonarko', 1, NULL, '2015-05-05 03:32:12'),
(60, 'iya bray', 'wawan.setiawan', 1, NULL, '2015-05-05 03:32:25'),
(61, 'wooooooooooooiiiiiiiiiiiii\r\n', 'riefly.pramudi', 1, NULL, '2015-05-05 03:37:20'),
(62, 'test ...', 'bambang.wijonarko', 1, NULL, '2015-05-05 03:38:22'),
(63, 'test ...', 'bambang.wijonarko', 1, NULL, '2015-05-05 03:38:52'),
(64, 'thyhyh', 'riefly.pramudi', 14, 'Penguins.jpg', '2015-05-05 03:43:35'),
(65, 'ini bu filenya', 'wawan.setiawan', 1, 'AD.xlsx', '2015-05-05 03:46:19'),
(66, 'anjrit bro\r\nlu parah banget bray', 'wawan.setiawan', 10, NULL, '2015-05-05 03:49:39'),
(67, '<pre>okey\r\n\r\nmen</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 03:51:19'),
(68, '<pre>mancap atuh kalo gitu mah...\r\n\r\nane mau ikut boleh bray\r\n\r\nkemane?</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 03:51:46'),
(69, '<pre>asdfsdf\r\nsdf\r\nsd\r\nf\r\nsdf\r\ns\r\ndf\r\nsd\r\nf\r\nsd\r\nfs\r\ndf\r\nsdf</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 04:01:39'),
(70, '<pre>testing bray</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 04:08:25'),
(71, '<pre>testing men</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 04:09:17'),
(72, '<pre>mencla mencle</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 04:25:11'),
(73, '<pre>testing...\r\nbray</pre>', 'wawan.setiawan', 10, NULL, '2015-05-05 04:25:18'),
(74, '<pre>bray</pre>', 'wawan.setiawan', 5, NULL, '2015-05-05 04:27:02'),
(75, '<pre>sdf</pre>', 'wawan.setiawan', 6, NULL, '2015-05-05 04:27:06'),
(76, '<pre>sdf</pre>', 'wawan.setiawan', 7, NULL, '2015-05-05 04:27:10'),
(77, '<pre>saf</pre>', 'wawan.setiawan', 8, NULL, '2015-05-05 04:27:13'),
(78, '<pre>adsf</pre>', 'wawan.setiawan', 9, NULL, '2015-05-05 04:27:17'),
(79, '<pre>sdfsdf</pre>', 'wawan.setiawan', 4, NULL, '2015-05-05 04:27:26'),
(80, 'Ticket created by wawan.setiawan at 04:58:44', 'wawan.setiawan', 30, NULL, '2015-05-05 04:58:44'),
(81, '<pre>tes</pre>', 'wawan.setiawan', 11, NULL, '2015-05-05 05:06:55'),
(82, '<pre>asdfasdfsadf</pre>', 'wawan.setiawan', 11, NULL, '2015-05-05 05:07:00'),
(83, '<pre>asdfsadfsdf</pre>', 'wawan.setiawan', 11, NULL, '2015-05-05 10:07:17'),
(84, '<pre>asdfsdfsadf</pre>', 'wawan.setiawan', 11, NULL, '2015-05-05 10:07:20'),
(85, '<pre>asdfasdfsdaf</pre>', 'wawan.setiawan', 11, NULL, '2015-05-05 10:07:23'),
(86, '<pre>ini baru bener\r\nakhhh</pre>', 'wawan.setiawan', 11, NULL, '2015-05-05 10:07:31'),
(87, '<pre>tes</pre>', 'wawan.setiawan', 25, NULL, '2015-05-05 10:14:08'),
(88, '<pre>tes</pre>', 'wawan.setiawan', 30, NULL, '2015-05-05 10:14:20'),
(89, '<pre>waduh</pre>', 'wawan.setiawan', 29, NULL, '2015-05-05 10:15:24'),
(90, '<pre>wow</pre>', 'wawan.setiawan', 29, 'helm1.jpg', '2015-05-05 10:15:34'),
(91, 'Ticket created by wawan.setiawan at 10:32:46', 'wawan.setiawan', 31, NULL, '2015-05-05 10:32:46'),
(92, '<pre>gfttrdtdt</pre>', 'wawan.setiawan', 31, '04_04_19---At-work-in-the-Office_web.jpg', '2015-05-05 10:33:09'),
(93, '<pre>testing bray</pre>', 'wawan.setiawan', 7, NULL, '2015-05-05 13:40:25'),
(94, '<pre>tes</pre>', 'wawan.setiawan', 31, 'AD1.xlsx', '2015-05-05 13:42:24'),
(95, '<pre>tessf</pre>', 'wawan.setiawan', 31, 'DJF.pdf', '2015-05-05 13:44:29'),
(96, '<pre>word</pre>', 'wawan.setiawan', 31, 'form_Lap_Dinas_ke_MALANG.doc', '2015-05-05 13:45:37'),
(97, '<pre>gfjsdfasdff\r\nfasdfasdf\r\nsdf\r\nasd\r\nfsdfsdfsdfsdfasdfsdf</pre>', 'wawan.setiawan', 18, NULL, '2015-05-05 13:52:00'),
(98, '<pre>apaan yang kurang</pre>', 'wawan.setiawan', 18, NULL, '2015-05-05 13:52:36'),
(99, '<pre>siap</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:57:46'),
(100, '<pre>wewe</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:57:50'),
(101, '<pre>aduh</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:57:53'),
(102, '<pre>hayah</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:57:58'),
(103, '<pre>mewwwww</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:58:03'),
(104, '<pre>oceh</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:58:07'),
(105, '<pre>hadeuh</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:58:12'),
(106, '<pre>auh</pre>', 'wawan.setiawan', 13, NULL, '2015-05-05 13:58:16'),
(107, '<pre>dacsdsf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:36'),
(108, '<pre>sdfsadfasdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:38'),
(109, '<pre>sdfsadfsadf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:40'),
(110, '<pre>sdfasdfsadf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:42'),
(111, '<pre>sdfsadf\r\nsadf\r\nsad\r\nfsad\r\nfsadf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:46'),
(112, '<pre>sdfsadf\r\nsadf\r\nasdfasdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:50'),
(113, '<pre>sdfsdfsdfsdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:53'),
(114, '<pre>tes</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:54'),
(115, '<pre>testsesdfsdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:57'),
(116, '<pre>sdfasdfasdfasdfsdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:25:59'),
(117, '<pre>sdfsadfasdfasdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:01'),
(118, '<pre>sadfasdfasdfasd</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:02'),
(119, '<pre>dfasdfasdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:04'),
(120, '<pre>asdfasdfasdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:05'),
(121, '<pre>fasdfasdfa</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:07'),
(122, '<pre>sdfasdfasdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:08'),
(123, '<pre>dfasdfsdf</pre>', 'wawan.setiawan', 22, NULL, '2015-05-05 15:26:10'),
(124, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:48:33', 'wawan.setiawan', 32, NULL, '2015-05-05 15:48:33'),
(125, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:48:51', 'wawan.setiawan', 32, NULL, '2015-05-05 15:48:51'),
(126, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:06', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:06'),
(127, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:07', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:07'),
(128, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:09', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:09'),
(129, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:12', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:12'),
(130, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:14', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:14'),
(131, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:15', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:15'),
(132, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:15', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:15'),
(133, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:16', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:16'),
(134, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:17', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:17'),
(135, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:17', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:17'),
(136, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:35', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:35'),
(137, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:48', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:48'),
(138, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:50:52', 'wawan.setiawan', 32, NULL, '2015-05-05 15:50:52'),
(139, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:51:08', 'wawan.setiawan', 32, NULL, '2015-05-05 15:51:08'),
(140, 'Ticket created by wawan.setiawan at 15:53:23', 'wawan.setiawan', 32, NULL, '2015-05-05 15:53:23'),
(141, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:53:37', 'wawan.setiawan', 33, NULL, '2015-05-05 15:53:37'),
(142, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:54:36', 'wawan.setiawan', 33, NULL, '2015-05-05 15:54:36'),
(143, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:00', 'wawan.setiawan', 32, NULL, '2015-05-05 15:58:00'),
(144, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:11', 'wawan.setiawan', 9, NULL, '2015-05-05 15:58:11'),
(145, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:16', 'wawan.setiawan', 26, NULL, '2015-05-05 15:58:16'),
(146, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:20', 'wawan.setiawan', 31, NULL, '2015-05-05 15:58:20'),
(147, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:25', 'wawan.setiawan', 3, NULL, '2015-05-05 15:58:25'),
(148, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:27', 'wawan.setiawan', 5, NULL, '2015-05-05 15:58:27'),
(149, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:29', 'wawan.setiawan', 6, NULL, '2015-05-05 15:58:29'),
(150, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:30', 'wawan.setiawan', 7, NULL, '2015-05-05 15:58:30'),
(151, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:31', 'wawan.setiawan', 8, NULL, '2015-05-05 15:58:31'),
(152, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:32', 'wawan.setiawan', 10, NULL, '2015-05-05 15:58:32'),
(153, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:33', 'wawan.setiawan', 11, NULL, '2015-05-05 15:58:33'),
(154, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:34', 'wawan.setiawan', 12, NULL, '2015-05-05 15:58:34'),
(155, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:35', 'wawan.setiawan', 13, NULL, '2015-05-05 15:58:35'),
(156, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:35', 'wawan.setiawan', 15, NULL, '2015-05-05 15:58:35'),
(157, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:36', 'wawan.setiawan', 18, NULL, '2015-05-05 15:58:36'),
(158, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:36', 'wawan.setiawan', 19, NULL, '2015-05-05 15:58:36'),
(159, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:37', 'wawan.setiawan', 27, NULL, '2015-05-05 15:58:37'),
(160, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:41', 'wawan.setiawan', 27, NULL, '2015-05-05 15:58:41'),
(161, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:44', 'wawan.setiawan', 27, NULL, '2015-05-05 15:58:44'),
(162, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:45', 'wawan.setiawan', 27, NULL, '2015-05-05 15:58:45'),
(163, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:45', 'wawan.setiawan', 27, NULL, '2015-05-05 15:58:45'),
(164, 'Ticket has been assigned by wawan.setiawan at 05/05/2015 15:58:46', 'wawan.setiawan', 27, NULL, '2015-05-05 15:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_status`
--

CREATE TABLE IF NOT EXISTS `ticket_status` (
`TICKET_STATUS_ID` int(2) NOT NULL,
  `TICKET_STATUS` varchar(25) DEFAULT NULL,
  `CREATE_DATE` datetime DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(25) DEFAULT NULL,
  `LAST_EDIT_DATE` datetime DEFAULT NULL,
  `LAST_EDIT_BY` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_status`
--

INSERT INTO `ticket_status` (`TICKET_STATUS_ID`, `TICKET_STATUS`, `CREATE_DATE`, `CREATED_BY`, `LAST_EDIT_DATE`, `LAST_EDIT_BY`) VALUES
(1, 'Open', '2015-04-28 11:37:09', 'ADMINISTRATOR', NULL, NULL),
(2, 'Assigned', '2015-04-28 11:37:09', 'ADMINISTRATOR', NULL, NULL),
(3, 'On Progress', '2015-04-28 11:37:09', 'ADMINISTRATOR', NULL, NULL),
(4, 'Closed By IT', '2015-04-28 11:37:09', 'ADMINISTRATOR', NULL, NULL),
(5, 'Closed By User', '2015-04-28 11:37:09', 'ADMINISTRATOR', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uom`
--

CREATE TABLE IF NOT EXISTS `uom` (
`UOM_ID` int(3) NOT NULL,
  `UOM` varchar(10) NOT NULL,
  `LONG_UOM` varchar(25) DEFAULT NULL,
  `CREATE_DATE` datetime DEFAULT CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uom`
--

INSERT INTO `uom` (`UOM_ID`, `UOM`, `LONG_UOM`, `CREATE_DATE`, `CREATED_BY`) VALUES
(1, 'M', 'MINUTE', '2015-04-28 11:35:20', 'ADMINISTRATOR'),
(2, 'H', 'HOUR', '2015-04-28 11:35:20', NULL),
(3, 'D', 'DAY', '2015-04-28 11:35:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`USER_ID` int(11) NOT NULL,
  `USER_GROUP_ID` int(11) NOT NULL DEFAULT '1',
  `USERNAME` varchar(250) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `EMAIL` varchar(250) NOT NULL,
  `MOBILE` varchar(20) DEFAULT NULL,
  `AVATAR` varchar(250) NOT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `LAST_EDIT_DATE` date DEFAULT NULL,
  `CREATED_BY` varchar(250) NOT NULL,
  `LAST_EDITED_BY` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=708 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_GROUP_ID`, `USERNAME`, `PASSWORD`, `NAME`, `EMAIL`, `MOBILE`, `AVATAR`, `CREATE_DATE`, `LAST_EDIT_DATE`, `CREATED_BY`, `LAST_EDITED_BY`) VALUES
(1, 1, 'itadm', '', 'itadm', 'itadm@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(2, 1, 'krbtgt', '', 'krbtgt', '', NULL, '', NULL, NULL, '', ''),
(3, 1, 'IUSR_FRC_SERVER', '', 'IUSR_FRC_SERVER', '', NULL, '', NULL, NULL, '', ''),
(4, 1, 'Guest', '', 'Guest', '', NULL, '', NULL, NULL, '', ''),
(5, 1, 'david', '', 'david', '', NULL, '', NULL, NULL, '', ''),
(6, 1, 'ikhsan', '', 'Ikhsan', 'ikhsan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(7, 1, 'axworkflow', '', 'axworkflow', 'axworkflow@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(8, 1, 'SUPPORT_388945a0', '', 'SUPPORT_388945a0', '', NULL, '', NULL, NULL, '', ''),
(9, 1, 'atlasuser', '', 'Atlas User', '', NULL, '', NULL, NULL, '', ''),
(10, 1, 'kordinator', '', 'kordinator', '', NULL, '', NULL, NULL, '', ''),
(11, 1, 'ciske', '', 'ciske', 'ciske@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(12, 1, 'ridwan', '', 'ridwan', 'ridwan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(13, 1, 'shima', '', 'Shima', '', NULL, '', NULL, NULL, '', ''),
(14, 1, 'share.printer', '', 'share.printer', '', NULL, '', NULL, NULL, '', ''),
(15, 1, 'axproxy', '', 'axproxy', 'axproxy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(16, 1, 'IWAM_FRC_SERVER', '', 'IWAM_FRC_SERVER', '', NULL, '', NULL, NULL, '', ''),
(17, 1, 'adminbackupax', '', 'adminbackupax', '', NULL, '', NULL, NULL, '', ''),
(18, 1, 'CITI', '', 'CITI', '', NULL, '', NULL, NULL, '', ''),
(19, 1, 'zaenudin', '', 'Zaenudin', '', NULL, '', NULL, NULL, '', ''),
(20, 1, 'handylioeng', '', 'handylioeng', '', NULL, '', NULL, NULL, '', ''),
(21, 1, 'taufik', '', 'Taufik', 'taufik@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(22, 1, 'wicaksono', '', 'Wicaksono', 'wicaksono@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(23, 1, 'wawan', '', 'Wawan', 'wawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(24, 1, 'novi.h', '', 'Novi Hariprasetya', 'novi.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(25, 1, 'Dyah', '', 'Dyah', '', NULL, '', NULL, NULL, '', ''),
(26, 1, 'royan', '', 'Royan', 'royan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(27, 1, 'Jo', '', 'Jo', 'Jo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(28, 1, 'barkah', '', 'Barkah', 'barkah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(29, 1, 'diana', '', 'diana', '', NULL, '', NULL, NULL, '', ''),
(30, 1, 'ika', '', 'ika', 'ika@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(31, 1, 'irene', '', 'irene', 'irene@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(32, 1, 'nuni', '', 'nuni', '', NULL, '', NULL, NULL, '', ''),
(33, 1, 'reni', '', 'reni', 'reni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(34, 1, 'sherly', '', 'sherly', '', NULL, '', NULL, NULL, '', ''),
(35, 1, 'dwi', '', 'Dwi', 'dwi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(36, 1, 'shintya', '', 'shintya', 'shintya@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(37, 1, 'edy', '', 'Edy', 'edy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(38, 1, 'agus', '', 'Agus', 'agus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(39, 1, 'ria', '', 'Ria Anggraini', 'ria@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(40, 1, 'dwi.djoko', '', 'Dwi Djoko', 'dwi.djoko@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(41, 1, 'sinta', '', 'Sinta Purna', 'sinta@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(42, 1, 'kresna', '', 'Kresna', 'kresna@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(43, 1, 'rudy', '', 'rudy', '', NULL, '', NULL, NULL, '', ''),
(44, 1, 'rulli', '', 'Rulli', 'rulli@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(45, 1, 'prichanto', '', 'prichanto', '', NULL, '', NULL, NULL, '', ''),
(46, 1, 'murita', '', 'Murita', '', NULL, '', NULL, NULL, '', ''),
(47, 1, 'bayu', '', 'Bayu', 'bayu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(48, 1, 'rico', '', 'Rico', 'rico@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(49, 1, 'kuncoro', '', 'Kuncoro', 'kuncoro@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(50, 1, 'iwal', '', 'Iwal Sachroni', 'iwal@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(51, 1, 'karel.w', '', 'Karel.w', 'karel.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(52, 1, 'maya.n', '', 'Maya Natassya', 'maya.n@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(53, 1, 'rochidin', '', 'Rochidin', 'rochidin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(54, 1, 'permadi', '', 'Permadi', 'permadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(55, 1, 'fitri.r', '', 'Fitri Rahmawati', 'fitri.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(56, 1, 'simon', '', 'Simon', 'simon@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(57, 1, 'oktiviana', '', 'Oktiviana', 'oktiviana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(58, 1, 'marlia', '', 'Marlia Elvandary', 'marlia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(59, 1, 'vina', '', 'Vina', 'vina@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(60, 1, 'shinta.s', '', 'Shinta Setiyawati', 'shinta.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(61, 1, 'prismas', '', 'Prismas', 'prismas@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(62, 1, 'ricky', '', 'Ricky', 'ricky@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(63, 1, 'enny.f', '', 'Enny.f', 'enny.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(64, 1, 'sakirin', '', 'Sakirin', '', NULL, '', NULL, NULL, '', ''),
(65, 1, 'wirany', '', 'wirany', '', NULL, '', NULL, NULL, '', ''),
(66, 1, 'Nia', '', 'Nia', 'nia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(67, 1, 'eddy', '', 'eddy', 'eddy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(68, 1, 'retia', '', 'retia', 'retia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(69, 1, 'ratna.b', '', 'Ratna Batavi', 'ratna.b@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(70, 1, 'Taguchi', '', 'Taguchi', '', NULL, '', NULL, NULL, '', ''),
(71, 1, 'heri.p', '', 'heri.p', 'heri.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(72, 1, 'eko.suprayitno', '', 'Eko Suprayitno', 'eko.suprayitno@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(73, 1, 'arifin', '', 'Arifin', 'arifin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(74, 1, 'edwin', '', 'Edwin', '', NULL, '', NULL, NULL, '', ''),
(75, 1, 'endah', '', 'Hana Endah', 'endah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(76, 1, 'yuli', '', 'yuli', '', NULL, '', NULL, NULL, '', ''),
(77, 1, 'siti', '', 'Siti', '', NULL, '', NULL, NULL, '', ''),
(78, 1, 'lenny', '', 'lenny', '', NULL, '', NULL, NULL, '', ''),
(79, 1, 'dila', '', 'dila', 'dila@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(80, 1, 'nana', '', 'nana', '', NULL, '', NULL, NULL, '', ''),
(81, 1, 'anafiah', '', 'Anafiah', 'anafiah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(82, 1, 'haryani', '', 'Haryani', 'haryani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(83, 1, 'Novie', '', 'Novie', '', NULL, '', NULL, NULL, '', ''),
(84, 1, 'merry', '', 'merry', 'merry@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(85, 1, 'rita', '', 'rita', '', NULL, '', NULL, NULL, '', ''),
(86, 1, 'achmad', '', 'achmad', '', NULL, '', NULL, NULL, '', ''),
(87, 1, 'puput', '', 'Puput', 'puput@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(88, 1, 'Lina.s', '', 'Lina Sanjaya', '', NULL, '', NULL, NULL, '', ''),
(89, 1, 'ranti', '', 'Ranti', '', NULL, '', NULL, NULL, '', ''),
(90, 1, 'diena', '', 'diena', 'diena@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(91, 1, 'christina', '', 'Christina', 'christina@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(92, 1, 'syafni', '', 'syafni', '', NULL, '', NULL, NULL, '', ''),
(93, 1, 'ocke', '', 'ocke', '', NULL, '', NULL, NULL, '', ''),
(94, 1, 'fian', '', 'Fian', '', NULL, '', NULL, NULL, '', ''),
(95, 1, 'siti.khodijah', '', 'Siti Khodijah', 'siti.khodijah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(96, 1, 'irwining', '', 'Irwining', 'irwining@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(97, 1, 'evana', '', 'Evana', 'evana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(98, 1, 'Fitra', '', 'Fitra', '', NULL, '', NULL, NULL, '', ''),
(99, 1, 'zain', '', 'Zain', 'zain@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(100, 1, 'selvi', '', 'Selvi', 'selvi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(101, 1, 'prayudha', '', 'Prayudha', 'prayudha@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(102, 1, 'gracia', '', 'Gracia', 'gracia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(103, 1, 'dikky', '', 'Dikky', 'dikky@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(104, 1, 'juned', '', 'Juned', 'juned@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(105, 1, 'didi', '', 'didi', '', NULL, '', NULL, NULL, '', ''),
(106, 1, 'dela', '', 'Dela Sagita', 'dela@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(107, 1, 'samiaji', '', 'Samiaji', 'samiaji@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(108, 1, 'suryani', '', 'suryani', '', NULL, '', NULL, NULL, '', ''),
(109, 1, 'rofiq', '', 'Rofiq', 'rofiq@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(110, 1, 'sri.m', '', 'Sri Mujianti', 'sri.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(111, 1, 'nyani', '', 'nyani', '', NULL, '', NULL, NULL, '', ''),
(112, 1, 'dini', '', 'Dini', 'dini@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(113, 1, 'yani', '', 'Yani', 'yani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(114, 1, 'sari', '', 'Sari', 'sari@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(115, 1, 'shofie', '', 'shofie', '', NULL, '', NULL, NULL, '', ''),
(116, 1, 'hery.m', '', 'Hery Maulana', 'hery.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(117, 1, 'erda', '', 'Erda', 'erda@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(118, 1, 'tanti', '', 'Tanti Suteja', 'tanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(119, 1, 'endang', '', 'Endang', 'endang@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(120, 1, 'naya', '', 'naya', '', NULL, '', NULL, NULL, '', ''),
(121, 1, 'eri', '', 'Eri', '', NULL, '', NULL, NULL, '', ''),
(122, 1, 'galih', '', 'galih', 'galih@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(123, 1, 'yosse', '', 'Yosse', 'yosse@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(124, 1, 'srifebriani', '', 'srifebriani', 'srifebriani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(125, 1, 'dhika', '', 'Dhika', '', NULL, '', NULL, NULL, '', ''),
(126, 1, 'frisca', '', 'Frisca', 'frisca@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(127, 1, 'desi', '', 'Desi', 'desi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(128, 1, 'hana', '', 'hana', '', NULL, '', NULL, NULL, '', ''),
(129, 1, 'rhica', '', 'Rhica', 'rhica@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(130, 1, 'happy', '', 'Happy', 'happy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(131, 1, 'viona', '', 'Viona', 'viona@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(132, 1, 'heryani', '', 'Heryani', 'heryani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(133, 1, 'Rosi', '', 'Rosi', '', NULL, '', NULL, NULL, '', ''),
(134, 1, 'maulana', '', 'Maulana', 'maulana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(135, 1, 'riesti', '', 'Riesti', 'riesti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(136, 1, 'regina', '', 'Regina', 'regina@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(137, 1, 'irawan', '', 'Irawan', 'irawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(138, 1, 'wahyu.agung', '', 'Wahyu Agung', '', NULL, '', NULL, NULL, '', ''),
(139, 1, 'arianto', '', 'Arianto', 'arianto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(140, 1, 'fahmy', '', 'Fahmy', 'fahmy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(141, 1, 'dewi.t', '', 'Dewi T', 'dewi.t@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(142, 1, 'rina.m', '', 'Rina Marisa', 'rina.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(143, 1, 'heri.prasetyo', '', 'Heri Prasetyo', 'heri.prasetyo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(144, 1, 'hendra', '', 'Hendra', 'hendra@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(145, 1, 'emergency1', '', 'emergency1', 'emergency1@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(146, 1, 'vera', '', 'vera', '', NULL, '', NULL, NULL, '', ''),
(147, 1, 'reinaldo', '', 'Reinaldo', 'reinaldo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(148, 1, 'poetri', '', 'Poetri Dhaini', 'poetri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(149, 1, 'dosmaria', '', 'Dosmaria', 'dosmaria@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(150, 1, 'maryani', '', 'maryani', '', NULL, '', NULL, NULL, '', ''),
(151, 1, 'yuniar', '', 'Yuniar', 'yuniar@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(152, 1, 'vany', '', 'Vany', 'vany@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(153, 1, 'lestari', '', 'lestari', '', NULL, '', NULL, NULL, '', ''),
(154, 1, 'tuti', '', 'tuti', '', NULL, '', NULL, NULL, '', ''),
(155, 1, 'restu', '', 'restu', 'restu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(156, 1, 'tomij', '', 'Tomij Novianto', 'tomij@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(157, 1, 'ivan', '', 'Ivan', '', NULL, '', NULL, NULL, '', ''),
(158, 1, 'windri', '', 'windri', '', NULL, '', NULL, NULL, '', ''),
(159, 1, 'wahyu.z', '', 'Wahyu.z', '', NULL, '', NULL, NULL, '', ''),
(160, 1, 'harry', '', 'harry', '', NULL, '', NULL, NULL, '', ''),
(161, 1, 'randy', '', 'Randy Kusumah', 'randy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(162, 1, 'yo.yoe', '', 'Yo Yoe', 'yo.yoe@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(163, 1, 'resty', '', 'Resty', 'resty@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(164, 1, 'sandy', '', 'Sandy', 'sandy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(165, 1, 'nikosena', '', 'Nikosena', 'nikosena@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(166, 1, 'nurwisama', '', 'Nurwisama', 'nurwisama@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(167, 1, 'yulianto', '', 'Yulianto', '', NULL, '', NULL, NULL, '', ''),
(168, 1, 'niko.e', '', 'Niko Estradiyanto', 'niko.e@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(169, 1, 'support', '', 'Support WCS', 'support@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(170, 1, 'ira.h', '', 'Ira Hikmawati', 'ira.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(171, 1, 'pratiwi', '', 'Pratiwi', 'pratiwi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(172, 1, 'ellyana', '', 'ellyana', 'ellyana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(173, 1, 'widyana', '', 'Widyana', 'widyana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(174, 1, 'wahyu.n', '', 'Wahyu Nasution', 'wahyu.n@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(175, 1, 'novel', '', 'Novel Ekasasmi', 'novel@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(176, 1, 'Inez', '', 'Inez', '', NULL, '', NULL, NULL, '', ''),
(177, 1, 'Roy', '', 'Roy', '', NULL, '', NULL, NULL, '', ''),
(178, 1, 'lurie', '', 'lurie', 'lurie@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(179, 1, 'ryan', '', 'Ryan', '', NULL, '', NULL, NULL, '', ''),
(180, 1, 'sato', '', 'Sato', '', NULL, '', NULL, NULL, '', ''),
(181, 1, 'reni.h', '', 'Reni Handayani', 'reni.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(182, 1, 'eliza.j', '', 'Eliza Junia', 'eliza.j@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(183, 1, 'suriyanti', '', 'Suriyanti', 'suriyanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(184, 1, 'rohmat', '', 'Rohmat', 'rohmat@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(185, 1, 'lollyta', '', 'lollyta', 'lollyta@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(186, 1, 'ahmad.f', '', 'Ahmad.f', 'ahmad.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(187, 1, 'supardiyanto', '', 'Supardiyanto', '', NULL, '', NULL, NULL, '', ''),
(188, 1, 'tamam', '', 'Tamam', 'tamam@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(189, 1, 'hernawan', '', 'Hernawan', 'hernawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(190, 1, 'hendrianto', '', 'Hendrianto', 'hendrianto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(191, 1, 'imam', '', 'Imam', 'imam@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(192, 1, 'dian.p', '', 'Dian Pramitasari', 'dian.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(193, 1, 'sim', '', 'Sim', 'sim@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(194, 1, 'miki', '', 'Miki', 'miki@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(195, 1, 'juwita', '', 'juwita', '', NULL, '', NULL, NULL, '', ''),
(196, 1, 'ferry', '', 'Ferry', '', NULL, '', NULL, NULL, '', ''),
(197, 1, 'fitri', '', 'Fitri', '', NULL, '', NULL, NULL, '', ''),
(198, 1, 'Srirahayu', '', 'Srirahayu', 'Srirahayu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(199, 1, 'rahmi', '', 'Rahmi', 'rahmi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(200, 1, 'endro', '', 'Endro', 'endro@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(201, 1, 'Fajar', '', 'Fajar', '', NULL, '', NULL, NULL, '', ''),
(202, 1, 'kiki.a', '', 'Kiki Andi', 'kiki.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(203, 1, 'lasman', '', 'Lasman Simanjuntak', 'lasman@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(204, 1, 'petrus', '', 'Petrus Carel', 'petrus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(205, 1, 'rohiyat', '', 'Rohiyat', 'rohiyat@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(206, 1, 'yandi', '', 'Yandi', '', NULL, '', NULL, NULL, '', ''),
(207, 1, 'wahyu.ali', '', 'Wahyu Ali', 'wahyu.ali@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(208, 1, 'irmawati', '', 'Irmawati', 'irmawati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(209, 1, 'iwan', '', 'iwan', '', NULL, '', NULL, NULL, '', ''),
(210, 1, 'rafiudin', '', 'Rafiudin', 'rafiudin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(211, 1, 'eva', '', 'eva', '', NULL, '', NULL, NULL, '', ''),
(212, 1, 'kuswandi', '', 'Kuswandi', 'kuswandi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(213, 1, 'dodi', '', 'Dodi', 'dodi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(214, 1, 'suhendra', '', 'suhendra', '', NULL, '', NULL, NULL, '', ''),
(215, 1, 'firmansyah', '', 'firmansyah', 'firmansyah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(216, 1, 'lusi', '', 'lusi', 'lusi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(217, 1, 'dwi.s', '', 'Dwi Sulistyowati', 'dwi.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(218, 1, 'gunawan', '', 'Gunawan', 'gunawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(219, 1, 'hartono', '', 'Hartono', 'hartono@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(220, 1, 'hartanti', '', 'Hartanti', 'hartanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(221, 1, 'mahendra', '', 'Mahendra', 'mahendra@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(222, 1, 'fenny.d', '', 'Fenny Dwimaryanti', 'fenny.d@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(223, 1, 'heru', '', 'heru', '', NULL, '', NULL, NULL, '', ''),
(224, 1, 'kinuko', '', 'Kinuko', 'kinuko@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(225, 1, 'arif', '', 'arif', '', NULL, '', NULL, NULL, '', ''),
(226, 1, 'yudi', '', 'yudi', '', NULL, '', NULL, NULL, '', ''),
(227, 1, 'erin', '', 'Erin', 'erin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(228, 1, 'karmawan', '', 'Ferry Karmawan', 'karmawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(229, 1, 'wibowo', '', 'Wibowo', 'wibowo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(230, 1, 'rismanto', '', 'rismanto', '', NULL, '', NULL, NULL, '', ''),
(231, 1, 'sulis', '', 'sulis', '', NULL, '', NULL, NULL, '', ''),
(232, 1, 'nurma', '', 'nurma', '', NULL, '', NULL, NULL, '', ''),
(233, 1, 'gita', '', 'Gita Widyaningsih', 'gita@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(234, 1, 'bowo', '', 'bowo', 'bowo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(235, 1, 'liviyana', '', 'Liviyana', 'liviyana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(236, 1, 'herus', '', 'herus', '', NULL, '', NULL, NULL, '', ''),
(237, 1, 'hery', '', 'Hery Sugiarto', '', NULL, '', NULL, NULL, '', ''),
(238, 1, 'rima', '', 'Rima Rupita', 'rima@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(239, 1, 'octo', '', 'octo', '', NULL, '', NULL, NULL, '', ''),
(240, 1, 'tresia', '', 'Tresia Christin', 'tresia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(241, 1, 'ayu.p', '', 'Ayu Purnama', '', NULL, '', NULL, NULL, '', ''),
(242, 1, 'abdul.r', '', 'Abdul Rozak', '', NULL, '', NULL, NULL, '', ''),
(243, 1, 'adam', '', 'adam', 'adam@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(244, 1, 'adetika', '', 'Adetika Wulansari', 'adetika@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(245, 1, 'hori', '', 'Hori', '', NULL, '', NULL, NULL, '', ''),
(246, 1, 'fitri.p', '', 'Fitri Petranela', 'fitri.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(247, 1, 'halim', '', 'halim', 'halim@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(248, 1, 'ekanopianti', '', 'Eka Nopianti', 'ekanopianti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(249, 1, 'juvita', '', 'Juvita Sari', 'juvita@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(250, 1, 'soewarna', '', 'soewarna', 'soewarna@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(251, 1, 'susana', '', 'susana', '', NULL, '', NULL, NULL, '', ''),
(252, 1, 'evi', '', 'Evi Sirait', 'evi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(253, 1, 'fredy', '', 'Fredy', 'fredy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(254, 1, 'rahmatulloh', '', 'Rahmatulloh', 'rahmatulloh@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(255, 1, 'dwiristianto', '', 'Dwiristianto', 'dwiristianto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(256, 1, 'agus.m', '', 'Agus Multino', 'agus.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(257, 1, 'ajunhari', '', 'Ajun Hari Sasongko', 'ajunhari@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(258, 1, 'albert.h', '', 'Albert.h', 'albert.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(259, 1, 'anggun.risma', '', 'Anggun Risma', 'anggun.risma@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(260, 1, 'ani', '', 'Ani', '', NULL, '', NULL, NULL, '', ''),
(261, 1, 'antonius', '', 'Antonius', 'antonius@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(262, 1, 'ardian', '', 'ardian', '', NULL, '', NULL, NULL, '', ''),
(263, 1, 'uci', '', 'uci', 'uci@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(264, 1, 'riyan.s', '', 'Riyan Sanjaya', 'riyan.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(265, 1, 'sagara', '', 'Sagara', 'sagara@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(266, 1, 'ardy', '', 'ardy', 'ardy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(267, 1, 'aries', '', 'Aries', 'aries@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(268, 1, 'aris', '', 'aris', '', NULL, '', NULL, NULL, '', ''),
(269, 1, 'ricky.w', '', 'Ricky Wulandari', 'ricky.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(270, 1, 'dina.kresna', '', 'Dina Kresna', 'dina.kresna@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(271, 1, 'anggraeni', '', 'Anggraeni', 'anggraeni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(272, 1, 'ratri', '', 'Ruth Ratri', 'ratri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(273, 1, 'bahrum', '', 'Bahrum Faisal', 'bahrum@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(274, 1, 'stevano', '', 'Stevano', 'stevano@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(275, 1, 'nikolas', '', 'Nikolas', 'nikolas@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(276, 1, 'Noper', '', 'Noper', '', NULL, '', NULL, NULL, '', ''),
(277, 1, 'fenny', '', 'fenny', '', NULL, '', NULL, NULL, '', ''),
(278, 1, 'nurpurwaningsih', '', 'Nurpurwaningsih', 'nurpurwaningsih@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(279, 1, 'fahmi', '', 'Fahmi', 'fahmi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(280, 1, 'fikri', '', 'Fikri', 'fikri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(281, 1, 'tessa', '', 'tessa', 'tessa@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(282, 1, 'Irwan', '', 'Irwan', 'irwan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(283, 1, 'rohmiyatun', '', 'Rohmiyatun', 'rohmiyatun@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(284, 1, 'putri.h', '', 'Putri Herlyanti', 'putri.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(285, 1, 'adek', '', 'Adek Hidayansyah', 'adek@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(286, 1, 'kurniawan', '', 'Kurniawan', 'kurniawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(287, 1, 'agus.p', '', 'agus pribadi', 'agus.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(288, 1, 'uus', '', 'Uus', 'uus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(289, 1, 'muhammad.f', '', 'Muhammad Fadjar', 'muhammad.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(290, 1, 'iin', '', 'Iin', 'iin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(291, 1, 'indah', '', 'Indah', 'indah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(292, 1, 'biah', '', 'biah', '', NULL, '', NULL, NULL, '', ''),
(293, 1, 'dedy', '', 'dedy', '', NULL, '', NULL, NULL, '', ''),
(294, 1, 'deden', '', 'deden', '', NULL, '', NULL, NULL, '', ''),
(295, 1, 'aditia', '', 'Aditia', '', NULL, '', NULL, NULL, '', ''),
(296, 1, 'yos', '', 'yos', 'yos@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(297, 1, 'bromantias', '', 'Bayu Bromantias', 'bromantias@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(298, 1, 'aryo', '', 'Aryo', 'aryo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(299, 1, 'farhan', '', 'Farhan', 'farhan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(300, 1, 'cemerlang', '', 'Cemerlang', 'cemerlang@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(301, 1, 'andi', '', 'Andi', 'andi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(302, 1, 'shidiq', '', 'Shidiq', 'shidiq@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(303, 1, 'dhanu', '', 'Dhanu', 'dhanu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(304, 1, 'rini', '', 'Rini', 'rini@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(305, 1, 'vitara', '', 'vitara', 'vitara@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(306, 1, 'dedy.m', '', 'Dedy mushodiqul', 'dedy.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(307, 1, 'tigo', '', 'Tigo', 'tigo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(308, 1, 'astri.w', '', 'Astri Wulandari', 'astri.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(309, 1, 'ansori', '', 'Ahmad Ansori', 'ansori@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(310, 1, 'widi', '', 'Widi', 'widi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(311, 1, 'astuty', '', 'astuty', 'astuty@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(312, 1, 'adriany', '', 'Adriany', 'adriany@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(313, 1, 'adrie', '', 'Adrie', 'adrie@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(314, 1, 'andri', '', 'Andri', 'andri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(315, 1, 'andri.r', '', 'Andri Rosadi', 'andri.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(316, 1, 'andry', '', 'andry', '', NULL, '', NULL, NULL, '', ''),
(317, 1, 'abdu', '', 'Abdu Rohman', 'abdu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(318, 1, 'adeputra', '', 'Ade Putra', 'adeputra@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(319, 1, 'apriadipta', '', 'apriadipta', 'apriadipta@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(320, 1, 'ari.f', '', 'Ari Firmansyah', 'ari.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(321, 1, 'arif.fauzi', '', 'arif fauzi', 'arif.fauzi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(322, 1, 'ayu', '', 'Ayu', '', NULL, '', NULL, NULL, '', ''),
(323, 1, 'azis', '', 'Azis', 'azis@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(324, 1, 'saroni', '', 'Saroni', 'saroni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(325, 1, 'gede', '', 'Gede', 'gede@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(326, 1, 'merlin', '', 'Merlin', 'merlin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(327, 1, 'felix', '', 'Felix', 'felix@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(328, 1, 'rudy.p', '', 'Rudy.p', 'rudy.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(329, 1, 'puja', '', 'Puja', '', NULL, '', NULL, NULL, '', ''),
(330, 1, 'hendrik', '', 'Hendrik', 'hendrik@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(331, 1, 'dewi.a', '', 'Dewi Afriani', 'dewi.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(332, 1, 'nessia', '', 'Nessia', 'nessia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(333, 1, 'afandi', '', 'Afandi', 'afandi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(334, 1, 'abdi', '', 'Abdi', 'abdi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(335, 1, 'dimas', '', 'Dimas', 'dimas@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(336, 1, 'dedi.a', '', 'Dedi Anwar', '', NULL, '', NULL, NULL, '', ''),
(337, 1, 'dyan', '', 'dyan', 'dyan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(338, 1, 'etik', '', 'Etik', '', NULL, '', NULL, NULL, '', ''),
(339, 1, 'vino', '', 'vino', '', NULL, '', NULL, NULL, '', ''),
(340, 1, 'meyke', '', 'Meyke', 'meyke@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(341, 1, 'chris', '', 'Chris', 'chris@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(342, 1, 'bernadinus', '', 'bernadinus', 'bernadinus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(343, 1, 'mega', '', 'Mega', 'mega@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(344, 1, 'vera.s', '', 'Vera.s', 'vera.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(345, 1, 'hafizt', '', 'Hafizt Nurrakhman', 'hafizt@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(346, 1, 'husni', '', 'Husni Tamrin', 'husni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(347, 1, 'sak', '', 'sak', 'sak@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(348, 1, 'bennydictus', '', 'Bennydictus', 'bennydictus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(349, 1, 'budi', '', 'Budi', 'budi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(350, 1, 'carolina', '', 'carolina', 'carolina@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(351, 1, 'catur', '', 'Catur', 'catur@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(352, 1, 'jap', '', 'Jap', 'jap@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(353, 1, 'erry', '', 'Erry Agustino', 'erry@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(354, 1, 'lucky', '', 'Lucky', 'lucky@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(355, 1, 'fitriatul', '', 'Fitriatul', 'fitriatul@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(356, 1, 'merlyna', '', 'Merlyna', 'merlyna@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(357, 1, 'pharwani', '', 'Pharwani', 'pharwani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(358, 1, 'kristin', '', 'kristin', 'kristin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(359, 1, 'intanpravitasari', '', 'Intanpravitasari', 'intanpravitasari@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(360, 1, 'maharani', '', 'Maharani Aliawati', 'maharani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(361, 1, 'irma', '', 'irma', '', NULL, '', NULL, NULL, '', ''),
(362, 1, 'ferni', '', 'Ferni', 'ferni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(363, 1, 'erwin', '', 'erwin', '', NULL, '', NULL, NULL, '', ''),
(364, 1, 'albertus', '', 'Albertus', 'albertus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(365, 1, 'inge', '', 'Inge', 'inge@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(366, 1, 'yohanes.s', '', 'Yohanes Susilo', 'yohanes.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(367, 1, 'rinnu', '', 'rinnu purbo', 'rinnu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(368, 1, 'training01', '', 'AX Training01', '', NULL, '', NULL, NULL, '', ''),
(369, 1, 'nina', '', 'Nina Septiani', 'nina@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(370, 1, 'gabe', '', 'Gabe', 'gabe@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(371, 1, 'yuliana', '', 'Yuliana', '', NULL, '', NULL, NULL, '', ''),
(372, 1, 'tsaman', '', 'Tsaman', 'tsaman@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(373, 1, 'windu', '', 'Windu', 'windu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(374, 1, 'rubini', '', 'Roy Rubini Siregar', 'rubini@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(375, 1, 'haninda', '', 'Haninda Farah', 'haninda@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(376, 1, 'sari.m', '', 'Sari maimunah', 'sari.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(377, 1, 'zuhri', '', 'Zaenudin Zuhri', 'zuhri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(378, 1, 'service.relation', '', 'Service relation', 'service.relation@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(379, 1, 'helpdesk.ticket', '', 'Helpdesk ticket', 'helpdesk.ticket@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(380, 1, 'wisnu', '', 'wisnu', '', NULL, '', NULL, NULL, '', ''),
(381, 1, 'pramudia', '', 'Pramudia', 'pramudia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(382, 1, 'abib', '', 'Abib', 'abib@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(383, 1, 'budhi.h', '', 'Budhi Herdiana', 'budhi.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(384, 1, 'sarto', '', 'sarto', 'sarto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(385, 1, 'evatrine', '', 'evatrine', '', NULL, '', NULL, NULL, '', ''),
(386, 1, 'emillia', '', 'Emillia', 'emillia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(387, 1, 'ratna.l', '', 'Ratna Lestari', 'ratna.l@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(388, 1, 'djoko.warsito', '', 'Djoko Warsito Yulianto', 'djoko.warsito@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(389, 1, 'tizzar', '', 'Tizzar', 'tizzar@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(390, 1, 'andre', '', 'Andre Agusta', 'andre@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(391, 1, 'joko.s', '', 'Joko Setyo', 'joko.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(392, 1, 'maysaroh', '', 'Maysaroh', 'maysaroh@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(393, 1, 'dessy.a', '', 'Dessy A', 'dessy.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(394, 1, 'bambang.h', '', 'Bambang H', 'bambang.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(395, 1, 'erwin.s', '', 'Erwin Setiawan', 'erwin.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(396, 1, 'arisupriatna', '', 'Arisupriatna', 'arisupriatna@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(397, 1, 'lenny.p', '', 'Lenny Pasaribu', 'lenny.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(398, 1, 'victoria.g', '', 'Victoria G', 'victoria.g@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(399, 1, 'Ida.F', '', 'Ida.F', 'Ida.F@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(400, 1, 'evi.dwi', '', 'Evi Dwi', 'evi.dwi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(401, 1, 'soelistyo.a', '', 'Soelistyo A', 'soelistyo.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(402, 1, 'endang.a', '', 'Endang A', 'endang.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(403, 1, 'victorica.r', '', 'Victorica R', 'victorica.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(404, 1, 'krisdiyanto', '', 'Krisdiyanto', 'krisdiyanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(405, 1, 'abdul.s', '', 'Abdul S', 'abdul.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(406, 1, 'radix.r', '', 'Radix R', 'radix.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(407, 1, 'wagimin', '', 'Wagimin', 'wagimin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(408, 1, 'reza.h', '', 'Reza H', 'reza.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(409, 1, 'maria.b', '', 'Maria B', 'maria.b@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(410, 1, 'erike.r', '', 'Erike R', 'erike.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(411, 1, 'sarah.y', '', 'Sarah Y', 'sarah.y@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(412, 1, 'endi.c', '', 'Endi C', 'endi.c@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(413, 1, 'yuliana.s', '', 'Yuliana S', 'yuliana.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(414, 1, 'somantri', '', 'Somantri', 'somantri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(415, 1, 'hendri.l', '', 'Hendri L', 'hendri.l@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(416, 1, 'denni.r', '', 'Denni R', 'denni.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(417, 1, 'retno.h', '', 'Retno H', 'retno.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(418, 1, 'susanti', '', 'Susanti', 'susanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(419, 1, 'dita.o', '', 'Dita', 'dita.o@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(420, 1, 'teswp', '', 'teswp', 'teswp@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(421, 1, 'yudhie', '', 'Yudhie Widaryoko', 'yudhie@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(422, 1, 'nur.alim', '', 'Nur Alim', 'nur.alim@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(423, 1, 'febryan', '', 'Febryan Alfansuri', 'febryan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(424, 1, 'moris', '', 'Moris Sianipar', 'moris@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(425, 1, 'danang', '', 'Danang', 'danang@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(426, 1, 'rifani', '', 'Rifani Machtar', 'rifani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(427, 1, 'atang', '', 'Atang', 'atang@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(428, 1, 'sigit', '', 'Sigit Siswanto', 'sigit@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(429, 1, 'syifa', '', 'Syifa Fauziah', 'syifa@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(430, 1, 'dina.ayu', '', 'Dina Ayu', 'dina.ayu@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(431, 1, 'eni.s', '', 'Eni Sulistyawati', 'eni.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(432, 1, 'denni', '', 'Denni Chahyadi', 'denni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(433, 1, 'totok', '', 'Totok Krisbianto', 'totok@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(434, 1, 'rezza.p', '', 'Rezza puspita', 'rezza.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(435, 1, 'fisi.b', '', 'Fisi Bayunita', 'fisi.b@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(436, 1, 'iwan.z', '', 'Iwan Zainuri', 'iwan.z@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(437, 1, 'subhan', '', 'Subhan', 'subhan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(438, 1, 'winarno', '', 'Bayu Winarno', 'winarno@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(439, 1, 'sari.w', '', 'Sari Wahyu Aramiko', 'sari.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(440, 1, 'ani.y', '', 'Ani Yuliarini', 'ani.y@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(441, 1, 'suntoro', '', 'Suntoro Prasetyo', 'suntoro@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(442, 1, 'hendarko', '', 'Hendarko Utomo', 'hendarko@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(443, 1, 'satrio', '', 'Satrio Karni Utomo', 'satrio@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(444, 1, 'yudho', '', 'Yudho Pratisto', 'yudho@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(445, 1, 'rian.ariadi', '', 'Rian Ariadi', 'rian.ariadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(446, 1, 'iqbal', '', 'Muhammad Iqbal', 'iqbal@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(447, 1, 'hendy', '', 'Hendy Irawan', 'hendy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(448, 1, 'angga.k', '', 'Angga Kurniawan', 'angga.k@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(449, 1, 'anis', '', 'Anis Komariyah', 'anis@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(450, 1, 'fahmi.yahya', '', 'Fahmi Yahya', 'fahmi.yahya@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(451, 1, 'windra', '', 'windra aristya', 'windra@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(452, 1, 'kiki.l', '', 'kiki lesmana', 'kiki.l@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(453, 1, 'juniadi', '', 'juniadi suparmanto', 'juniadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(454, 1, 'fitri.i', '', 'fitri irawati', 'fitri.i@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(455, 1, 'achmad.e', '', 'Achmad Evan', 'achmad.e@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(456, 1, 'nur.r', '', 'Nur Ratna', 'nur.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(457, 1, 'darius', '', 'Darius Santosa', 'darius@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(458, 1, 'ian', '', 'Ian Darius Santosa', 'ian@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(459, 1, 'alexy', '', 'Alexy Simbolon', 'alexy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(460, 1, 'yulia.e', '', 'Yulia Erlita', 'yulia.e@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(461, 1, 'elya', '', 'Elya Ramona Silalahi', 'elya@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(462, 1, 'reni.y', '', 'Reni Yulianti', 'reni.y@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(463, 1, 'fika', '', 'Fika Syifaurrahma', 'fika@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(464, 1, 'marsudi', '', 'Marsudi Tri Utomo', 'marsudi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(465, 1, 'siti.patimah', '', 'Siti Patimah', 'siti.patimah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(466, 1, 'kayoko', '', 'Kayoko Ishibashi', 'kayoko@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(467, 1, 'seno', '', 'Seno Kusumo Dewo', 'seno@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(468, 1, 'evita', '', 'Evita Setyaningrum', 'evita@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(469, 1, 'jonas', '', 'Jonas Leonard Siagian', 'jonas@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(470, 1, 'ernes', '', 'Ernes Novriyanti', 'ernes@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(471, 1, 'yudi.ismono', '', 'Yudi Ismono', 'yudi.ismono@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(472, 1, 'nadiva', '', 'Nadiva Addina', 'nadiva@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(473, 1, 'muis', '', 'Muis', 'muis@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(474, 1, 'dodi.p', '', 'Dodi Priono', 'dodi.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(475, 1, 'jessica', '', 'Jessica Situmorang', 'jessica@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(476, 1, 'ferry.t', '', 'Ferry Teguh', 'ferry.t@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(477, 1, 'gracia.v', '', 'Gracia Vanadya', 'gracia.v@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(478, 1, 'johan', '', 'Johan Effendi', 'johan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(479, 1, 'umi.s', '', 'Umi Syarifah', 'umi.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(480, 1, 'suciyanto', '', 'Suciyanto', 'suciyanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(481, 1, 'luciana', '', 'Luciana Angraini', 'luciana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(482, 1, 'putri.s', '', 'Putri Sebayang', 'putri.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(483, 1, 'iwan.s', '', 'Iwan S', 'iwan.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(484, 1, 'indah.j', '', 'Indah Juneta', 'indah.j@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(485, 1, 'ridho', '', 'Ridho', 'ridho@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(486, 1, 'rina.n', '', 'Rina Nurlaila', 'rina.n@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(487, 1, 'eka.boy', '', 'Eka Boy Pranata', 'eka.boy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(488, 1, 'teguh.f', '', 'Teguh Fadillah', 'teguh.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(489, 1, 'makoto', '', 'Makoto Tanabe', 'makoto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(490, 1, 'siti.faizah', '', 'Siti Faizah', 'siti.faizah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(491, 1, 'eneng', '', 'Eneng Fauziah', 'eneng@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(492, 1, 'dharma', '', 'Dharma Wijaya', 'dharma@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(493, 1, 'nico', '', 'Nico Ardyan', 'nico@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(494, 1, 'eko.agus', '', 'Eko Agus', 'eko.agus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(495, 1, 'hafizoh', '', 'Hafizoh', 'hafizoh@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(496, 1, 'ernawati', '', 'Ernawati', 'ernawati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(497, 1, 'dwi.l', '', 'Dwi Lestari', 'dwi.l@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(498, 1, 'nofita', '', 'Nofita Amanda', 'nofita@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(499, 1, 'indra', '', 'Indra Maulana', 'indra@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(500, 1, 'rikardo', '', 'Rikardo Rahmat', 'rikardo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(501, 1, 'latifah', '', 'Latifah', 'latifah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(502, 1, 'annindya', '', 'Annindya Karenina', 'annindya@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(503, 1, 'aji.w', '', 'Aji Wirabrada', 'aji.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(504, 1, 'febri', '', 'Febri Andrian', 'febri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(505, 1, 'rizki.a', '', 'Rizki Aditya', 'rizki.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(506, 1, 'bernadeth', '', 'Bernadeth', 'bernadeth@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(507, 1, 'hans', '', 'Hans Aria', 'hans@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(508, 1, 'minda', '', 'Minda Nasution', 'minda@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(509, 1, 'dina.e', '', 'Dina Ekasari', 'dina.e@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(510, 1, 'mayada', '', 'Mayada Patria', 'mayada@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(511, 1, 'sinyo', '', 'Sinyo Adriansyah', 'sinyo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(512, 1, 'herawati', '', 'Herawati', 'herawati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(513, 1, 'ana.t', '', 'Ana Triana', 'ana.t@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(514, 1, 'arief.z', '', 'Arief Zakariya', 'arief.z@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(515, 1, 'ekawati', '', 'Ekawati Yohana', 'ekawati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(516, 1, 'sigit.n', '', 'Sigit Nugroho', 'sigit.n@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(517, 1, 'tri.h', '', 'Tri Haryanto', 'tri.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(518, 1, 'rizka.a', '', 'Rizka Amelianti', 'rizka.a@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(519, 1, 'ozin.h', '', 'Ozin Haozin', 'ozin.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(520, 1, 'darmansyah', '', 'Darmansyah', 'darmansyah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(521, 1, 'jimmy', '', 'Jimmy Satryady', 'jimmy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(522, 1, 'akhsan', '', 'Akhsan Kristiawan', 'akhsan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(523, 1, 'eva.t', '', 'Eva Tazaya', 'eva.t@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(524, 1, 'desy', '', 'Desy Yatin', 'desy@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(525, 1, 'viraka', '', 'Viraka Chrisreza', 'viraka@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(526, 1, 'adi.riyanto', '', 'Adi Riyanto', 'adi.riyanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(527, 1, 'm.tamsir', '', 'Muhammad Tamsir', 'm.tamsir@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(528, 1, 'syukri', '', 'Syukri Ruhiyadi', 'syukri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(529, 1, 'rachmat', '', 'Rachmat', 'rachmat@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(530, 1, 'gleadis', '', 'Gleadis Shintia', 'gleadis@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(531, 1, 'vivi.h', '', 'Vivi Hizki', 'vivi.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(532, 1, 'gunadi', '', 'Gunadi', 'gunadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(533, 1, 'mely', '', 'Mely Kristania', 'mely@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(534, 1, 'lilis', '', 'Lilis Lismawati', 'lilis@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(535, 1, 'herry.s', '', 'Herry Supriadi', 'herry.s@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(536, 1, 'henry', '', 'Henry Andries', 'henry@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(537, 1, 'djuniharto', '', 'Djuniharto', 'djuniharto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(538, 1, 'yudith', '', 'Yudith', 'yudith@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(539, 1, 'kalam', '', 'Kalam Aji', 'kalam@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(540, 1, 'diyah.w', '', 'Diyah Wahyuningsih', 'diyah.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(541, 1, 'medi.m', '', 'Medi Madaun', 'medi.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(542, 1, 'suliani', '', 'Suliani Hartono', 'suliani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(543, 1, 'abdul.w', '', 'Abdul Wahyudin', 'abdul.w@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(544, 1, 'sa.luarkota', '', 'sa.luarkota', 'sa.luarkota@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(545, 1, 'adm.fieldservice', '', 'adm.fieldservice', 'adm.fieldservice@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(546, 1, 'klarifikasi', '', 'Klarifikasi', 'klarifikasi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(547, 1, 'devy.oktaria', '', 'Devy Oktaria', 'devy.oktaria@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(548, 1, 'merry.eliza', '', 'Merry Eliza', 'merry.eliza@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(549, 1, 'david.r', '', 'David Rezadelano', 'david.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(550, 1, 'ludvi', '', 'Ludvi Nugroho', 'ludvi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(551, 1, 'winardi', '', 'Winardi Eka Saputra', 'winardi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(552, 1, 'zaenal', '', 'Zaenal Fanani', 'zaenal@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(553, 1, 'hasmanudin', '', 'Hasmanudin', 'hasmanudin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(554, 1, 'isabella', '', 'Viona Isabella', 'isabella@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(555, 1, 'linda', '', 'Linda Dwi Kurniati', 'linda@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(556, 1, 'eko.susilo', '', 'Eko Susilo', 'eko.susilo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(557, 1, 'untung', '', 'Untung Surono', 'untung@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(558, 1, 'pieter', '', 'Pieter Leopard', 'pieter@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(559, 1, 'galih.r', '', 'Galih Riona K', 'galih.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(560, 1, 'rasoma', '', 'Rasoma', 'rasoma@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(561, 1, 'ulil', '', 'Ulil Amri', 'ulil@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(562, 1, 'siti.r', '', 'Siti Rifqiatuttaqiah', 'siti.r@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(563, 1, 'noviani', '', 'Noviani Frimujiah', 'noviani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(564, 1, 'eman.d', '', 'Eman Darmansyah', 'eman.d@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(565, 1, 'andi.t', '', 'Andi Tenri Olle', 'andi.t@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(566, 1, 'wina', '', 'Wina Marnisa', 'wina@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(567, 1, 'adi.h', '', 'Adi Heruawan', 'adi.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(568, 1, 'tuti.n', '', 'Tuti Nurhalipah', 'tuti.n@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(569, 1, 'julius', '', 'Julius Tommy', 'julius@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(570, 1, 'chintri', '', 'Chintri Taniza', 'chintri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(571, 1, 'endang.p', '', 'Endang Purnama', 'endang.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(572, 1, 'vita', '', 'Vita Dekasari', 'vita@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(573, 1, 'achmad.f', '', 'Achmad Firdaus', 'achmad.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(574, 1, 'fortigate', '', 'fortigate', 'fortigate@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(575, 1, 'noviyanti', '', 'noviyanti hindayani', 'noviyanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(576, 1, 'puput.p', '', 'Puput Putrantho', 'puput.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(577, 1, 'ikhmal', '', 'Ikhmal', 'ikhmal@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(578, 1, 'imam.agus', '', 'imam agus suseno', 'imam.agus@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(579, 1, 'rizki.nurul', '', 'rizki nurul madinah', 'rizki.nurul@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(580, 1, 'banu.l', '', 'Banu Lubtiko', 'banu.l@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(581, 1, 'elliza.t', '', 'elliza tifanni', 'elliza.t@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(582, 1, 'yulianna.n', '', 'Yulianna Nuraini', 'yulianna.n@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(583, 1, 'ingo', '', 'Ingo Kroner', 'ingo@mpm-rent.com', NULL, '', NULL, NULL, '', '');
INSERT INTO `user` (`USER_ID`, `USER_GROUP_ID`, `USERNAME`, `PASSWORD`, `NAME`, `EMAIL`, `MOBILE`, `AVATAR`, `CREATE_DATE`, `LAST_EDIT_DATE`, `CREATED_BY`, `LAST_EDITED_BY`) VALUES
(584, 1, 'sa.bsd', '', 'sa.bsd', 'sa.bsd@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(585, 1, 'zulfikar', '', 'Zulfikar', 'zulfikar@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(586, 1, 'dimas.b', '', 'dimas budi', 'dimas.b@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(587, 1, 'dani', '', 'Dani Maharanto', 'dani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(588, 1, 'tjitrahadi', '', 'tjitrahadi tjahjadi', 'tjitrahadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(589, 1, 'bayu.u', '', 'Bayu Umbara', 'bayu.u@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(590, 1, 'dhyani', '', 'Dhyani', 'dhyani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(591, 1, 'karunia', '', 'karunia', 'karunia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(592, 1, 'quirinius', '', 'Quirinius', 'quirinius@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(593, 1, 'fitri.rahma', '', 'fitri rahma', 'fitri.rahma@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(594, 1, 'steady', '', 'Steady Jeremia', 'steady@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(595, 1, 'maya', '', 'Maya Sandria', 'maya@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(596, 1, 'rommi', '', 'Rommi Alvian', 'rommi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(597, 1, 'ruky', '', 'Ruky', 'ruky@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(598, 1, 'adrian', '', 'Adrian Decenta', 'adrian@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(599, 1, 'purwanti', '', 'purwanti', 'purwanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(600, 1, 'amelia', '', 'Amelia', 'amelia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(601, 1, 'kusnadi', '', 'kusnadi', 'kusnadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(602, 1, 'turah', '', 'turah', 'turah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(603, 1, 'nursoffa', '', 'nursoffa', 'nursoffa@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(604, 1, 'ratnasari', '', 'ratnasari', 'ratnasari@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(605, 1, 'bachtiar', '', 'bachtiar', 'bachtiar@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(606, 1, 'sudirman', '', 'sudirman', 'sudirman@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(607, 1, 'zul.h', '', 'zul hasyim', 'zul.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(608, 1, 'sudono', '', 'sudono', 'sudono@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(609, 1, 'aspian', '', 'aspian', 'aspian@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(610, 1, 'mepa', '', 'mepa', 'mepa@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(611, 1, 'rizky.f', '', 'rizky fauzan', 'rizky.f@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(612, 1, 'wawan.h', '', 'wawan hendrawan', 'wawan.h@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(613, 1, 'ibnu.hadi', '', 'Ibnu Hadi', 'ibnu.hadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(614, 1, 'sobri', '', 'sobri', 'sobri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(615, 1, 'ipan', '', 'ipan', 'ipan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(616, 1, 'irfan.p', '', 'irfan puadi', 'irfan.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(617, 1, 'vivi.haerupiani', '', 'vivi haerupiani', 'vivi.haerupiani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(618, 1, 'theresia.widiastuti', '', 'theresia Widiastuti', 'theresia.widiastuti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(619, 1, 'akram', '', 'Akram', 'akram@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(620, 1, 'hazi', '', 'hazi', 'hazi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(621, 1, 'marsono', '', 'marsono', 'marsono@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(622, 1, 'rahmat.rizki', '', 'rahmat rizki', 'rahmat.rizki@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(623, 1, 'fauzan', '', 'fauzan', 'fauzan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(624, 1, 'eliana', '', 'eliana', 'eliana@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(625, 1, 'lutfi', '', 'lutfi', 'lutfi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(626, 1, 'spicework.mpm', '', 'spicework', 'spicework.mpm@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(627, 1, 'fajar.p', '', 'fajar pratama', 'fajar.p@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(628, 1, 'kuroda', '', 'kuroda', 'kuroda@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(629, 1, 'ferdinand', '', 'ferdinand', 'ferdinand@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(630, 1, 'eko.sulistiyo', '', 'Eko Sulistiyo', 'eko.sulistiyo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(631, 1, 'citra.wahyuni', '', 'Citra Wahyuni', 'citra.wahyuni@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(632, 1, 'vera.shintia', '', 'vera shintia', 'vera.shintia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(633, 1, 'muchlis', '', 'muchlis', 'muchlis@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(634, 1, 'iir.harpiah', '', 'iir harpiah', 'iir.harpiah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(635, 1, 'isthi', '', 'isthi', 'isthi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(636, 1, 'derry', '', 'derry', 'derry@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(637, 1, 'bagus.budi', '', 'Bagus Budi Utomo', 'bagus.budi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(638, 1, 'aditya.nugroho', '', 'Aditya Nugroho', 'aditya.nugroho@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(639, 1, 'dinar.novita', '', 'Dinar Novita', 'dinar.novita@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(640, 1, 'robin.amrulloh', '', 'Robin Amrulloh', 'robin.amrulloh@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(641, 1, 'iswahyudi', '', 'Abdul Wahab Iswahyudi', 'iswahyudi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(642, 1, 'frastami.widyastuti', '', 'Frastami Widyastuti', 'frastami.widyastuti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(643, 1, 'agung.hermawan', '', 'Agung Hermawan', 'agung.hermawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(644, 1, 'neni.susanti', '', 'Neni Susanti', 'neni.susanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(645, 1, 'vitra.vidamanto', '', 'Vitra Vidamanto', 'vitra.vidamanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(646, 1, 'david.setyawan', '', 'David Setyawan', 'david.setyawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(647, 1, 'carpro', '', 'Carpro', 'carpro@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(648, 1, 'joice', '', 'Joice', 'joice@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(649, 1, 'rizka', '', 'rizka', 'rizka@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(650, 1, 'heti.nurhayati', '', 'Heti Nurhayati', 'heti.nurhayati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(651, 1, 'messelia.pristiany', '', 'Messelia Pristiany', 'messelia.pristiany@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(652, 1, 'usep.saepullah', '', 'Usep Saepullah', 'usep.saepullah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(653, 1, 'elly.susanti', '', 'Elly Susi Susanti', 'elly.susanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(654, 1, 'indriana.nurul', '', 'Indriana Nurul', 'indriana.nurul@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(655, 1, 'fuji.astuti', '', 'Fuji Astuti', 'fuji.astuti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(656, 1, 'dian.suhartiningsih', '', 'Dian Suhartiningsih', 'dian.suhartiningsih@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(657, 1, 'mohamad.hanif', '', 'Mohamad Hanif', 'mohamad.hanif@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(658, 1, 'cornelius.kurnia', '', 'Cornelius Kurnia', 'cornelius.kurnia@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(659, 1, 'leonard.tjahjadi', '', 'leonard tjahjadi', 'leonard.tjahjadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(660, 1, 'bagiyo', '', 'Bagiyo', 'bagiyo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(661, 1, 'tia.octaviani', '', 'Tia Octaviani', 'tia.octaviani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(662, 1, 'evi.rahmawati', '', 'Evi Rahmawati', 'evi.rahmawati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(663, 1, 'westy.marisya', '', 'Westy Marisya', 'westy.marisya@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(664, 1, 'rizky.rachma', '', 'Rizky Rahma', 'rizky.rachma@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(665, 1, 'riri.safitri', '', 'Riri Safitri', 'riri.safitri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(666, 1, 'apriani.suci', '', 'Apriani Suci', 'apriani.suci@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(667, 1, 'meifrida.ayunani', '', 'Meifrida Ayunani', 'meifrida.ayunani@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(668, 1, 'siti.rosanti', '', 'Siti Rosanti', 'siti.rosanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(669, 1, 'herry.andriyanto', '', 'Herry Andriyanto', 'herry.andriyanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(670, 1, 'admin.dokumen', '', 'admin dokumen', 'admin.dokumen@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(671, 1, 'wawan.setiawan', '', 'Wawan Setiawan', 'wawan.setiawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(672, 1, 'siti.fatimah', '', 'Siti Fatimah', 'siti.fatimah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(673, 1, 'ridhanty.putri', '', 'Ridhanty Putri', 'ridhanty.putri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(674, 1, 'budi.purwanto', '', 'Budi Purwanto', 'budi.purwanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(675, 1, 'aris.sudjatmiko', '', 'Aris Sudjatmiko', 'aris.sudjatmiko@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(676, 1, 'rina.susanti', '', 'Rina Dwi Susanti', 'rina.susanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(677, 1, 'hastri.aliah', '', 'Hastri Aliah', 'hastri.aliah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(678, 1, 'bambang.kurniawan', '', 'Bambang Kurniawan', 'bambang.kurniawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(679, 1, 'alkin.saprudin', '', 'Alkin Saprudin', 'alkin.saprudin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(680, 1, 'syamsul.bachri', '', 'Syamsul Bachri', 'syamsul.bachri@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(681, 1, 'join6', '', 'join6', 'join6@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(682, 1, 'ziki.sungkewo', '', 'Ziki Sungkewo', 'ziki.sungkewo@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(683, 1, 'arif.kurniawan', '', 'Arif Kurniawan', 'arif.kurniawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(684, 1, 'royan.setiawan', '', 'Royan Setiawan', 'royan.setiawan@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(685, 1, 'miftahussalam', '', 'Miftahussalam', 'miftahussalam@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(686, 1, 'jahruddin.m', '', 'jahruddin matondang', 'jahruddin.m@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(687, 1, 'bambang.wijonarko', '', 'bambang wijonarko', 'bambang.wijonarko@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(688, 1, 'achmad.putra', '', 'achmad.putra', 'achmad.putra@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(689, 1, 'maryati', '', 'maryati', 'maryati@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(690, 1, 'diana.novianti', '', 'Diana Novianti', 'diana.novianti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(691, 1, 'iir.harfiah', '', 'iir harfiah', 'iir.harfiah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(692, 1, 'isthi.aryanti', '', 'isthi aryanti', 'isthi.aryanti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(693, 1, 'taufik.riyanto', '', 'taufik riyanto', 'taufik.riyanto@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(694, 1, 'fitriyah', '', 'fitriyah', 'fitriyah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(695, 1, 'yoestian.abdullah', '', 'Yoestian Abdullah', 'yoestian.abdullah@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(696, 1, 'riefly.pramudi', '', 'Riefly Pramudi', 'riefly.pramudi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(697, 1, 'nurasiah.nasution', '', 'Nurasiah Nasution', 'nurasiah.nasution@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(698, 1, 'dewi.anggraini', '', 'Dewi Anggraini', 'dewi.anggraini@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(699, 1, 'safety.workshop', '', 'safety workshop', 'safety.workshop@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(700, 1, 'marissa', '', 'marissa', 'marissa@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(701, 1, 'edi.darmadi', '', 'Edi Darmadi', 'edi.darmadi@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(702, 1, 'benhard.siagian', '', 'Benhard Siagian', 'benhard.siagian@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(703, 1, 'jihad.nudin', '', 'Jihad Nudin', 'jihad.nudin@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(704, 1, 'osin.rajagukguk', '', 'Osin Rajagukguk', 'osin.rajagukguk@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(705, 1, 'anisa.novianti', '', 'Anisa Novianti Zein', 'anisa.novianti@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(706, 1, 'development.workshop', '', 'Development Workshop', 'development.workshop@mpm-rent.com', NULL, '', NULL, NULL, '', ''),
(707, 1, 'join7', '', 'join7', 'join7@mpm-rent.com', NULL, '', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE IF NOT EXISTS `user_access` (
`ID` int(11) NOT NULL,
  `MODULE_ID` int(11) NOT NULL,
  `USER_GROUP_ID` int(11) NOT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `LAST_EDIT_DATE` date DEFAULT NULL,
  `CREATED_BY` varchar(250) NOT NULL,
  `LAST_EDITED_BY` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
`USER_GROUP_ID` int(11) NOT NULL,
  `USER_GROUP_NAME` varchar(50) NOT NULL,
  `REMARK` text NOT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `LAST_EDIT_DATE` date DEFAULT NULL,
  `CREATED_BY` varchar(250) NOT NULL,
  `LAST_EDITED_BY` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`USER_GROUP_ID`, `USER_GROUP_NAME`, `REMARK`, `CREATE_DATE`, `LAST_EDIT_DATE`, `CREATED_BY`, `LAST_EDITED_BY`) VALUES
(1, 'User', 'Without user group', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_module`
--

CREATE TABLE IF NOT EXISTS `user_module` (
`MODULE_ID` int(11) NOT NULL,
  `MODULE_GROUP_ID` int(11) NOT NULL,
  `MODULE_NAME` varchar(100) NOT NULL,
  `LINK` varchar(100) NOT NULL,
  `MODULE_DESC` text NOT NULL,
  `CREATE_DATE` date DEFAULT NULL,
  `LAST_EDIT_DATE` date DEFAULT NULL,
  `CREATED_BY` varchar(250) NOT NULL,
  `LAST_EDITED_BY` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_module`
--

INSERT INTO `user_module` (`MODULE_ID`, `MODULE_GROUP_ID`, `MODULE_NAME`, `LINK`, `MODULE_DESC`, `CREATE_DATE`, `LAST_EDIT_DATE`, `CREATED_BY`, `LAST_EDITED_BY`) VALUES
(1, 3, 'User Accounts', 'user', 'Manage all user accounts in server', '2015-04-29', NULL, '0', 0),
(2, 5, 'IP Configuration', 'setting/ip_config', 'setting for IP', '2015-04-29', NULL, '0', 0),
(3, 5, 'Ticket', 'ticket', 'Manage all user ticket help desk', '2015-04-29', NULL, '0', 0),
(4, 5, 'User Portal', '192.168.0.107/mpmr-portal', 'Link to user portal', '2015-04-29', NULL, '0', 0),
(5, 5, 'Report', 'report', 'Manage all reports', '2015-04-29', NULL, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_module_group`
--

CREATE TABLE IF NOT EXISTS `user_module_group` (
`MODULE_GROUP_ID` int(11) NOT NULL,
  `MODULE_GROUP_NAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_module_group`
--

INSERT INTO `user_module_group` (`MODULE_GROUP_ID`, `MODULE_GROUP_NAME`) VALUES
(1, 'knowledge base'),
(2, 'purchasing'),
(3, 'user management'),
(4, 'ticket management'),
(5, 'no child');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
 ADD PRIMARY KEY (`TICKET_ID`);

--
-- Indexes for table `ticket_category`
--
ALTER TABLE `ticket_category`
 ADD PRIMARY KEY (`TICKET_CATEGORY_ID`);

--
-- Indexes for table `ticket_comment`
--
ALTER TABLE `ticket_comment`
 ADD PRIMARY KEY (`TICKET_COMMENT_ID`);

--
-- Indexes for table `ticket_status`
--
ALTER TABLE `ticket_status`
 ADD PRIMARY KEY (`TICKET_STATUS_ID`);

--
-- Indexes for table `uom`
--
ALTER TABLE `uom`
 ADD PRIMARY KEY (`UOM_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`USER_ID`), ADD UNIQUE KEY `username` (`USERNAME`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
 ADD PRIMARY KEY (`USER_GROUP_ID`);

--
-- Indexes for table `user_module`
--
ALTER TABLE `user_module`
 ADD PRIMARY KEY (`MODULE_ID`);

--
-- Indexes for table `user_module_group`
--
ALTER TABLE `user_module_group`
 ADD PRIMARY KEY (`MODULE_GROUP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
MODIFY `TICKET_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `ticket_category`
--
ALTER TABLE `ticket_category`
MODIFY `TICKET_CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ticket_comment`
--
ALTER TABLE `ticket_comment`
MODIFY `TICKET_COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `ticket_status`
--
ALTER TABLE `ticket_status`
MODIFY `TICKET_STATUS_ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `uom`
--
ALTER TABLE `uom`
MODIFY `UOM_ID` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=708;
--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
MODIFY `USER_GROUP_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_module`
--
ALTER TABLE `user_module`
MODIFY `MODULE_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_module_group`
--
ALTER TABLE `user_module_group`
MODIFY `MODULE_GROUP_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
