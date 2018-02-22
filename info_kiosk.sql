-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 02:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_kiosk`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `id` int(11) NOT NULL,
  `backup_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`id`, `backup_date`) VALUES
(1, '2017-07-20'),
(2, '2017-07-20'),
(3, '2017-07-20'),
(4, '2017-07-25'),
(5, '2017-07-28'),
(6, '2017-07-31'),
(7, '2017-08-04'),
(8, '2017-08-07'),
(9, '2017-08-15'),
(10, '2017-08-22'),
(17, '2017-09-04'),
(19, '2017-09-06'),
(20, '2017-09-07'),
(21, '2017-09-08'),
(22, '2017-09-11'),
(23, '2017-09-12'),
(24, '2017-09-15'),
(25, '2017-10-04'),
(26, '2017-10-11'),
(28, '2017-10-18'),
(29, '2017-10-24'),
(31, '2017-10-30'),
(32, '2017-11-02'),
(33, '2017-11-11'),
(35, '2017-11-16'),
(36, '2017-11-16'),
(37, '2017-11-20'),
(38, '2017-11-20'),
(39, '2017-11-20'),
(40, '2017-11-23'),
(41, '2017-11-23'),
(42, '2017-11-23'),
(43, '2017-11-23'),
(47, '2017-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `_id` int(11) NOT NULL,
  `nob` varchar(250) NOT NULL,
  `d_services` varchar(300) NOT NULL,
  `d_services_text` text NOT NULL,
  `chartRate` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`_id`, `nob`, `d_services`, `d_services_text`, `chartRate`, `comment`, `date`) VALUES
(1, '', '', '', '00010', 'Test 1', '2017-07-20'),
(2, '', '', '', '21212', 'Comment', '2017-07-20'),
(3, '', '', '', '00010', 'Test 1', '2017-07-21'),
(4, '', '', '', '21212', 'Comment', '2017-07-21'),
(5, '', '', '', '00010', 'Test 1', '2017-07-24'),
(6, '', '', '', '21212', 'Comment', '2017-07-24'),
(7, '', '', '', '00010', 'Test 2', '2017-07-26'),
(8, '', '', '', '21212', 'Comment 2', '2017-07-26'),
(11, '', '', '', '00010', 'helll world', '2017-07-25'),
(12, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', 'Array', '12321321', '0000-00-00'),
(13, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '0000-00-00'),
(14, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '2017-08-22'),
(15, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '2017-08-22'),
(16, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '2017-08-22'),
(17, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '2017-08-22'),
(18, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '2017-08-22'),
(19, 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', '01020', '12321321', '2017-08-22'),
(20, 'Plastic/Rubber', 'SET-UP Innovation System Support', 'qwerty', '03312', 'asdf', '2017-08-22'),
(21, 'Plastic/Rubber', 'Packaging & Labelling Services', 'wdaw', '01232', 'awda', '2017-08-23'),
(22, 'Plastic/Rubber', 'Finance & Administrative Services', 'awdawd', '01201', 'adwwda', '2017-08-23'),
(23, 'Handicraft/Holiday Decors', 'Packaging & Labelling Services', '', '10244', 'Hello WOlrd', '2017-09-11'),
(24, 'Food', 'Training/Technical Consultancy Services', '', '03413', 'dfgdg', '2017-09-11'),
(25, 'Food', 'SET-UP Innovation System Support', 'asd', '01213', 'asdasd', '2017-11-02'),
(26, 'Plastic/Rubber', 'SET-UP Innovation System Support', 'yuyu', '02102', 'gygh', '2017-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `_id` int(7) NOT NULL,
  `chartRate` varchar(7) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  `nob` varchar(100) NOT NULL,
  `d_services` varchar(200) NOT NULL,
  `d_services_text` text NOT NULL,
  `lgu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`_id`, `chartRate`, `comment`, `date`, `nob`, `d_services`, `d_services_text`, `lgu`) VALUES
(1, '01020', '12321321', '2017-08-22', 'Agriculture', 'Packaging & Labelling Services', '13322', 'Carigara'),
(4, '41020', '12321321', '2017-08-22', 'Agriculture', 'Packaging & Labelling Services', '13322', 'Carigara'),
(7, '03312', 'asdf', '2017-08-22', 'Plastic/Rubber', 'SET-UP Innovation System Support', 'qwerty', 'Carigara'),
(8, '01232', 'awda', '2017-08-23', 'Plastic/Rubber', 'Packaging & Labelling Services', 'wdaw', 'Carigara'),
(9, '01201', 'adwwda', '2017-08-23', 'Food', 'Finance & Administrative Services', 'awdawd', 'Carigara'),
(13, '01020', '12321321', '2017-08-22', 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', 'Abuyog'),
(14, '01024', '12321321', '2017-08-22', 'Agriculture', 'Packaging & Labelling Services', '13322', 'Abuyog'),
(15, '01020', '12321321', '2017-08-22', 'Plastic/Rubber', 'Packaging & Labelling Services', '13322', 'Abuyog'),
(16, '03312', 'asdf', '2017-08-22', 'Food', 'SET-UP Innovation System Support', 'qwerty', 'Abuyog'),
(18, '01201', 'adwwda', '2017-08-23', 'Plastic/Rubber', 'Finance & Administrative Services', 'awdawd', 'Abuyog'),
(19, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(20, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(21, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(22, '24123', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(23, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(24, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(25, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(26, '22222', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(27, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(28, '42314', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(29, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(30, '31323', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(31, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(32, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(33, '24121', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(34, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(35, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(278, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(279, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(280, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(281, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(282, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(283, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(284, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(285, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(286, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(287, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(288, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(289, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(290, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(291, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(292, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(293, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(294, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(295, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(296, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(297, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(298, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(299, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(300, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(301, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(302, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(303, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(304, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(305, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(306, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(307, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(308, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(309, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(310, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(311, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(312, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(313, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(314, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(315, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(316, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(317, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(318, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(319, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(320, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(321, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(322, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(323, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(324, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(325, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(326, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(327, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(328, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(329, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(330, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(331, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(332, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(333, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(334, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(335, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(336, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(337, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(338, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(339, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(340, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(341, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(342, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(343, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(344, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(345, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(346, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(347, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(348, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(349, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(350, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(351, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(352, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(353, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(354, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(355, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(356, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(357, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(358, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(359, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(360, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(361, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(362, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(363, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(364, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(365, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(366, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(367, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(368, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(369, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(370, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(371, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(372, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(373, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(374, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(375, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(376, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(377, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(378, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(379, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(380, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(381, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(382, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(383, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(384, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(385, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(386, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(387, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(388, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(389, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(390, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(391, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(392, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(393, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(394, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(395, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(396, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(397, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(398, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(399, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(400, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(401, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(402, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(403, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(404, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(405, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(406, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(407, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(408, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(409, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(410, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(411, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(412, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(413, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(414, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(415, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(416, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(417, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(418, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(419, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(420, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(421, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(422, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(423, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(424, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(425, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(426, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(427, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(428, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(429, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(430, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(431, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(432, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(433, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(434, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(435, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(436, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(437, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(438, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(439, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(440, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(441, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(442, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(443, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(444, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(445, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(446, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(447, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(448, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(449, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(450, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(451, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(452, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(453, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(454, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(455, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(456, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(457, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(458, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(459, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(460, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(461, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(462, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(463, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(464, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(465, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(466, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(467, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(468, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(469, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(470, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(471, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(472, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(473, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(474, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(475, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(476, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(477, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(478, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(479, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(480, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(481, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(482, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(483, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(484, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(485, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(486, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(487, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(488, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(489, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(490, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(491, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(492, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(493, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(494, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(495, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(496, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(497, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(498, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(499, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(500, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(501, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(502, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(503, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(504, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(505, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(506, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(507, '21212', 'Comment', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n'),
(508, '00010', 'Test 1', '2017-08-30', 'food', 'setup', 'hello world', 'Abuyog\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `_id` int(11) NOT NULL,
  `News` text NOT NULL,
  `Headline` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`_id`, `News`, `Headline`, `date`) VALUES
(1, '%3Cimg%20src%3D%22resources%2Fimg00000001.png%22%3E%3Cbr%3E%20%0D%0ADOST%20Region%20VIII%20is%20pleased%20to%20announce%20the%20conduct%20of%20the%202017%20Regional%20Invention%20Contest%20and%20Exhibits%20%28RICE%29%20with%20the%20theme%20%22Invention%20and%20Innovation%22%20for%20the%20People%22%20to%20be%20held%20on%20Sept.%2019-21%2C%202017%20at%20the%20Robinsons%20Place%2C%20Marasbaras%2C%20Tacloban%20City.%20With%20this%20we%20are%20inviting%20all%20inventors%2C%20innovators%2C%20researchers%20and%20the%20students%20to%20participate%20and%20submit%20their%20entries%20to%20any%20of%20our%20DOST%20Provincial%20office%20nearest%20you.%20%3Ca%20href%3D%22resources%2Fdoc00000001.pdf%22%3E%3Cbr%3E%0D%0A%3Cimg%20src%3D%22resources%2Fpdf00000002.png%22%3E', '2017 Regional Invention Contest and Exhibits (RICE)', '2017-06-14'),
(4, '%3Cp%3EThe%20Department%20of%20Science%20and%20Technology%2C%20Regional%20VIII%20%28DOST%20VIII%29%2C%20is%20in%20need%20of%20competent%20staff%20to%20fill%20%3Cb%3Eone%20%281%29%20Science%20Research%20Analyst%3C%2Fb%3E%20%28contractual%20position%29%20with%20the%20following%20qualifications%20and%20functions%3A%3C%2Fp%3E%0D%0A%0D%0A%3Ctable%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%3E%3Cb%3EMonthly%20Salary%3A%3C%2Fb%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EPhp%2022%2C892.00%20%28EVSU-FIC%20Funds%29%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%3E%3Cb%3EQualifications%3C%2Fb%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%0D%0A%3Cul%3E%0D%0A%20%20%3Cli%3EBS%20Chemistry%20graduate%3C%2Fli%3E%0D%0A%20%20%3Cli%3EWith%20professional%20license%3C%2Fli%3E%0D%0A%20%20%3Cli%3EWith%20proficiency%20in%20English%20%28oral%20and%20written%29%20communication%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%20%20%3Ctd%3E%3Cb%3EFunctions%3A%3C%2Fb%3E%3C%2Ftd%3E%0D%0A%20%20%3Ctd%3E%0D%0A%20%20%20%20%3Col%3E%0D%0A%20%20%20%20%20%20%3Cli%3EServes%20as%20the%20laboratory%20analyst%20in%20the%20physico-chemical%20laboratory.%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EFacilitates%2C%20arranges%20and%20assists%20FIC%20meetings%2C%20and%20other%20activities%3B%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EPerforms%20other%20duties%20assigned%20from%20time%20to%20time.%3C%2Fli%3E%0D%0A%20%20%20%20%3C%2Fol%3E%0D%0A%20%20%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3C%2Ftable%3E%0D%0A%3Cp%3EQualified%20and%20interested%20applicants%20may%20apply%20personally%20and%20submit%20copy%20of%20the%20following%20requirements%20to%20DOST%20Regional%20Office%20VIII%20at%20the%20Government%20Center%2C%20Palo%2C%20Leyte%20%3Cb%3Enot%20later%20than%20July%2010%2C%202017%3C%2Fb%3E%3C%2Fp%3E%0D%0A%3Cul%3E%0D%0A%20%20%3Cli%3EApplication%20letter%20should%20be%20addressed%20to%3A%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3Cp%3E%3Cb%3EEDGARDO%20M.%20ESPERANCILLA%2C%20CESO%20II%3C%2Fb%3E%3Cbr%3ERegional%20Director%3C%2Fp%3E%0D%0A%3Cul%3E%0D%0A%20%20%3Cli%3EBio-data%20%28CSC%20Form%20212%29%3C%2Fli%3E%0D%0A%20%20%3Cli%3ETranscript%20of%20Records%3C%2Fli%3E%0D%0A%20%20%3Cli%3EDiploma%3C%2Fli%3E%0D%0A%20%20%3Cli%3ECertificates%20of%20Training%2FSeminar%20attended%3C%2Fli%3E%0D%0A%20%20%3Cli%3EPRC%20Professional%20License%3C%2Fli%3E%0D%0A%3C%2Ful%3E', 'Notice of Vacant Position (Science Research Analyst)', '2017-06-27'),
(5, '%3Cp%3EThe%20Department%20of%20Science%20and%20Technology%2C%20Regional%20Office%20VIII%20%28DOST%20VIII%29%2C%20is%20in%20need%20of%20competent%20staff%20to%20fill%20in%20%3Cb%3Eone%20%281%29%20Project%20Assistant%20I%3C%2Fb%3E%20%28contractual%20position%29%20with%20the%20following%20qualifications%20and%20functions.%3C%2Fp%3E%0D%0A%0D%0A%3Ctable%3E%0D%0A%20%20%3Ctr%3E%0D%0A%20%20%20%20%3Ctd%3E%3Ci%3E%3Cb%3EProject%20Title%3A%20%3C%2Fb%3E%3C%2Fi%3E%3C%2Ftd%3E%0D%0A%20%20%20%20%3Ctd%3EProject%20Assistant%20%28PA-1%29%3C%2Ftd%3E%0D%0A%20%20%3C%2Ftr%3E%0D%0A%20%20%3Ctr%3E%0D%0A%20%20%20%20%3Ctd%3E%3Ci%3E%3Cb%3EMonthly%20Salary%3A%20%3C%2Fb%3E%3C%2Fi%3E%3C%2Ftd%3E%0D%0A%20%20%20%20%3Ctd%3E%0D%0A%20%20%20%20%20%20Php%2018%2C%20441.60%20%282017%20DOST8%20-%20YRRP%29%0D%0A%20%20%20%20%3C%2Ftd%3E%0D%0A%20%20%3C%2Ftr%3E%0D%0A%20%20%3Ctr%3E%0D%0A%20%20%20%20%3Ctd%3E%3Ci%3E%3Cb%3EQualifications%3A%20%3C%2Fb%3E%3C%2Fi%3E%3C%2Ftd%3E%0D%0A%20%20%20%20%3Ctd%3E%3Cul%3E%0D%0A%20%20%20%20%20%20%3Cli%3EGraduate%20of%20a%204-year%20degree%20course%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EIT%20related%20training%20is%20a%20plus%20factor%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EKnowledgeable%20in%20computer%20especially%20on%20basic%20database%20programming%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EWith%20good%20oral%20and%20communication%20skills%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EWith%20atleast%20one%281%29%20year%20experience%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3Cli%3EBeing%20a%20DOST%20scholar-graduate%20is%20a%20plus%20factor%3C%2Fli%3E%0D%0A%20%20%20%20%3C%2Ful%3E%3C%2Ftd%3E%0D%0A%20%20%3C%2Ftr%3E%0D%0A%20%20%3Ctr%3E%0D%0A%20%20%20%20%3Ctd%3E%3Ci%3E%3Cb%3EFunctions%3A%20%3C%2Fb%3E%3C%2Fi%3E%3C%2Ftd%3E%0D%0A%20%20%20%20%3Ctd%3E%0D%0A%20%20%20%20%20%20%3Col%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssist%20YRRP%20focal%20staff%20and%20the%20duly%20designated%20Project%20Coordinator%20and%20Assistant%20Project%20Coordinator%20for%20the%20NDRRM%20funded%20YRRP%20project%20implemented%20in%20the%20region.%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssists%20in%20the%20preparation%2Fconsolidation%20of%20YRRP%20plans%20and%20targets%20of%20the%20different%20PSTC%2FCenters%2FUnits%20of%20the%20agency%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssists%20in%20the%20conduct%20of%20YRRP%20related%20planning%2Fmeetings%20monitoring%20and%2Fpr%20evaluation%20activities%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssist%20in%20the%20coordination%20with%20concerned%20staff%2FUnits%2FCenters%2FPSTCs%20relative%20to%20preparation%2Fsubmission%2Favailability%20of%20YRRP%20plans%2Faccomplishments%2Freports%2Fmonitoring%20and%20evaluation%20documents%20and%20other%20liaising%20concerns%20with%20PSTCand%20beneficiaries%2Fcommunities.%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3ETake%20charge%20of%20the%20over-all%20preparation%2Fconsolidation%20of%20reports%20to%20concerned%20agencies%2Funits%20and%20handling%20of%20fincancial%20concernst%3B%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssists%20in%20the%20coordination%20with%20other%20agencies%2Forganization%20relative%20to%20the%20planning%20and%20monitoring%20and%2For%20evaluation%20activities%20of%20YRRP%20projects%20of%20the%20office%3B%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssists%20and%20facilitate%20the%20establishments%20of%20database%20for%20the%20YRRP%20funded%20projects%20and%20activities%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EAssists%20in%20the%20preparation%20of%20procurement%20plans%2C%20and%20other%20documents%2Freports%20required%20of%20the%20YRRP%20section%2C%20and%20the%20availability%20of%20the%20supplies%20and%20materials%2C%20and%2For%20equipment%20needed%20by%20and%2For%20cash%20advance%20liquidaytion%20of%20the%20said%20section.%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%20%20%3Cli%3EPerform%20other%20duties%20and%20assisgnments%20of%20the%20office%20as%20may%20be%20deemed%20necessary%20from%20time%20to%20time.%3C%2Fli%3E%0D%0A%20%20%20%20%20%20%3C%2Fol%3E%0D%0A%20%20%20%20%3C%2Ftd%3E%0D%0A%20%20%3C%2Ftr%3E%0D%0A%3C%2Ftable%3E%0D%0A%3Cp%3EQualified%20and%20interested%20applicants%20may%20apply%20personally%20and%20submit%20copy%20of%20the%20following%20requirements%20to%20DOST%20Regional%20Office%20VIII%20at%20the%20Government%20Center%2C%20Palo%2C%20Leyte%20%3Cspan%20style%3D%22text-decoration%3A%20underline%3B%22%3E%3Cstrong%3Enot%20later%20than%20July%205%2C%202017%3C%2Fstrong%3E%3C%2Fspan%3E.%3C%2Fp%3E%0D%0A%3Cul%3E%0D%0A%3Cli%3EApplication%20letter%20should%20be%20addressed%20to%3A%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3Cp%3E%3Cstrong%3EEDGARDO%20M.%20ESPERANCILLA%2C%20CESO%20II%3C%2Fstrong%3E%3Cbr%3ERegional%20Director%3C%2Fp%3E%0D%0A%3Cul%3E%0D%0A%3Cli%3ETranscript%20of%20Records%3C%2Fli%3E%0D%0A%3Cli%3EDiploma%3C%2Fli%3E%0D%0A%3Cli%3ECertificates%20of%20training%2Fseminar%20attended%3C%2Fli%3E%0D%0A%3Cli%3ECertificate%20od%20previous%20employment%20stating%2C%20among%20others%2C%20duties%20and%20responsibilities%3C%2Fli%3E%0D%0A%3Cli%3ECertificate%20of%20Awards%2C%20if%20any.%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3Cp%3E%3Cstrong%3E%28SGD%29%20EDGARDO%20M.%20ESPERANCILLA%2C%20CESO%20II%3C%2Fstrong%3E%3Cbr%3ERegional%20Director%3C%2Fp%3E', 'Notice of Vacant Position (Project Assistant I)', '2017-06-30'),
(6, '%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EThe%20Department%20of%20Science%20and%20Technology%2C%20Regional%20Office%20VIII%20%28DOST%20VIII%29%20is%20in%20need%20of%20competent%20staff%20to%20fill%20in%20%3Cstrong%3Eone%20%281%29%20Project%20Assistant%20II%3C%2Fstrong%3E%20%28contractual%20position%29%20with%20the%20following%20qualifications%20and%20functions%3A%26nbsp%3B%3C%2Fp%3E%0D%0A%3Ctable%3E%0D%0A%3Ctbody%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EPosition%20Title%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cstrong%3EProject%20Assistant%20II%20%28PA%20II%29%3C%2Fstrong%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EJob%20Type%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EFull%20Time%20%28Contractual%29%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EMonthly%20Salary%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cstrong%3EPhp%2021%2C860.40%20%28DOST-8%20-%20LNU%20GIA%20Project%29%3C%2Fstrong%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3ELocation%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EDOST%20Regional%20Office%20No.%20VIII%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EDuration%3C%2Fstrong%3E%3C%2Fem%3E%3A%3C%2Ftd%3E%0D%0A%3Ctd%3ENovember%2027%2C%202017%20-%20December%2031%2C%202017%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EJob%20Description%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EAssist%20in%20the%20implementation%20of%20the%20GIA%20Project%20with%20Leyte%20Normal%20University%20entitled%2C%20%22Strengthening%20Proposals%20Review%20Mechanism%20and%20Implementation%20of%20the%20Small%20Enterprise%20Technology%20Upgrading%20Program%20%28SETUP%29%20and%20other%20S%26amp%3BT%20Related%20Activities%20in%20Region%20VIII%20-%20Year%20III%22%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%20style%3D%22text-align%3A%20left%3B%22%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3E%3Cem%3E%3Cstrong%3EQualifications%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%0D%0A%3Cul%3E%0D%0A%3Cli%3EGraduate%20of%20a%205%20or%206-year%20engineering%20related%20degree%20course%3B%3C%2Fli%3E%0D%0A%3Cli%3EAdvance%20skills%20in%20Database%20Management%20%28MS%20Access%29%3B%3C%2Fli%3E%0D%0A%3Cli%3EExcellent%20English%20written%20and%20oral%20communication%3B%3C%2Fli%3E%0D%0A%3Cli%3ESkills%20in%20file%2Frecords%20management%3B%3C%2Fli%3E%0D%0A%3Cli%3EExperience%20in%20project%20creation%2C%20implementation%2C%20and%20monitoring%20is%20a%20plus%3B%3C%2Fli%3E%0D%0A%3Cli%3EWith%20good%20moral%20character%3B%20and%3C%2Fli%3E%0D%0A%3Cli%3ECan%20work%20independently%20with%20minimal%20supervision.%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3E%3Cem%3E%3Cstrong%3EFunctions%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Col%3E%0D%0A%3Cli%20style%3D%22text-align%3A%20justify%3B%22%3EAssist%20in%20the%20preparation%20of%20various%20documents%2Fproposals%20forwarded%20by%20the%20SETUP%20Coordinator%3B%3C%2Fli%3E%0D%0A%3Cli%3EMaintain%20the%20SETUP%20database%20%28MS%20Access%29%3B%3C%2Fli%3E%0D%0A%3Cli%3EAssist%20in%20the%20conduct%20of%20Review%20and%20Technical%20Evaluation%20Committee%20%28RTEC%29%20Meetings%3B%3C%2Fli%3E%0D%0A%3Cli%3EMonitor%20and%20evaluate%20the%20progress%20of%20SETUP%20funded%20projects%3B%3C%2Fli%3E%0D%0A%3Cli%3ECoordinate%20with%20the%20SETUP%20Coordinator%2C%20PSTCs%20and%20other%20officials%2Fconcerned%20personnel%20in%20the%20gathering%20and%20validating%20of%20progress%20reports%20of%20SETUP%20projects%3B%3C%2Fli%3E%0D%0A%3Cli%3EAssist%20the%20DOST%20VIII%20Cleaner%20Production%20Technology%20and%20Energy%20Audit%20Consultancy%20Servies%20Coordinator%20in%20the%20preparation%20of%20various%20documents%2Fproposals%20and%20conduct%20of%20necessary%20activities%3B%3C%2Fli%3E%0D%0A%3Cli%3EPerform%20other%20duties%20that%20may%20be%20assigned%20from%20time%20to%20time.%3C%2Fli%3E%0D%0A%3C%2Fol%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%20width%3A%20100px%3B%22%3E%3Cem%3E%3Cstrong%3EHow%20to%20Apply%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%20style%3D%22width%3A%20300px%3B%22%3EQualified%20and%20interested%20applicants%20may%20apply%20personally%20or%20submit%20copy%20of%20the%20following%20requirements%20to%20DOST%20Regional%20Office%20VIII%20at%20the%20Government%20Center%2C%20Palo%2C%20Leyte%3A%0D%0A%3Cul%3E%0D%0A%3Cli%3EApplication%20Letter%20%28should%20be%20addressed%20to%3A%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3Cp%20style%3D%22margin-left%3A%2080px%3B%22%3E%3Cstrong%3EEDGARDO%20M.%20ESPERANCILLA%2C%20CESO%20II%3C%2Fstrong%3E%3Cbr%20%2F%3ERegional%20Director%3C%2Fp%3E%0D%0A%3Cul%3E%0D%0A%3Cli%3ECurriculum%20Vitae%20%2F%20Resume%3C%2Fli%3E%0D%0A%3Cli%3ETranscript%20of%20Records%3C%2Fli%3E%0D%0A%3Cli%3EDiploma%3C%2Fli%3E%0D%0A%3Cli%3ECertificate%20of%20related%20training%28s%29%2Fseminar%28s%29%20attended%2Fcompleted%3C%2Fli%3E%0D%0A%3Cli%3ECSC%20certificate%20of%20eligibility%20%28preferable%29%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3E%3Cem%3E%3Cstrong%3EDeadline%20of%20Filing%20of%20Application%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3E%3Cstrong%3ENovember%2023%2C%202017%3C%2Fstrong%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3E%3Cem%3E%3Cstrong%3EExamination%20Date%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cstrong%3ENovember%2024%2C%202017%20%28Morning%29%3C%2Fstrong%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3E%3Cem%3E%3Cstrong%3EInterview%20Date%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cstrong%3ENovember%2024%2C%202017%20%28Afternoon%29%3C%2Fstrong%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3C%2Ftbody%3E%0D%0A%3C%2Ftable%3E%0D%0A%3Cp%3E%26nbsp%3B%3C%2Fp%3E%0D%0A%3Cp%3E%3Cstrong%3E%28SGD%29%20EDGARDO%20M.%20ESPERANCILLA%2C%20CESO%20II%3C%2Fstrong%3E%3Cbr%20%2F%3ERegional%20Director%3C%2Fp%3E%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3C%2Fdiv%3E', 'Notice of Vacant Position (Project Assistant II)', '2017-11-21'),
(7, '%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EThe%20Department%20of%20Science%20and%20Technology%20Region%20VIII%20have%20turned%20over%20and%20installed%208%20STARBOOKS%20%28Science%20and%20Technology%20Academic%20and%20Research-Based%20Openly%20Operated%20Kiosk%20Stations%29%20in%20the%20public%20elementary%20and%20high%20schools%20of%20several%20municipalities%20of%202nd%20District%20last%20September%2029%2C%202017.%20The%20schools%20in%20Tunga%20and%20Carigara%20has%20received%20the%20DOST%20STARBOOKS%20digital%20library%20through%20a%20combined%20endeavor%20of%20DOST%20Regional%20Office%20VIII%20and%20the%20Office%20of%20Congressman%20Henry%20Ong.%3C%2Fp%3E%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3ESTARBOOKS%20made%20searching%20for%20S%26amp%3BT%20information%20much%20quicker%20and%20easier%20compared%20with%20the%20card%20catalogs%20in%20usual%20libraries.%20Developed%20by%20the%20Department%20of%20Science%20and%20Technology%27s%20Science%20and%20Technology%20Information%20Institute%20%28DOST-STII%29%2C%20STARBOOKS%20have%20journal%20and%20research%20materials%2C%20reports%20and%20feature%20articles%2C%20videos%2C%20and%20pamphlet%20on%20S%26amp%3BT%20and%20livelihood.%3C%2Fp%3E%0D%0A%20%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EMeanwhile%2C%20the%20recipient%20schools%20include%20Carigara%20National%20High%20School%2C%20Jugaban%20National%20High%20School%2C%20Carigara%20National%20Vocational%20High%20School%2C%20Cassidy%20Elementary%20School%2C%20Alberto%20T.%20Aguja%20Memorial%20Central%20School%2C%20Carigara%20II%20Central%20School%2C%20Tunga%20Central%20School%20and%20Gregorio%20C.%20Catenza%20National%20High%20School%2C%20which%20were%20severely%20affected%20bu%20Super%20Typhoon%20Yolanda%20last%20November%208%2C%202013.%3C%2Fp%3E', 'Second District Leyte schools recipient of DOST''s STARBOOKS', '2017-12-01'),
(8, '%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EMaasin%20City%20-%20Fourteen%20%2814%29%20lucky%20public%20schools%20in%20Southern%20Leyte%20will%20receive%20DOST%27s%20first%20science%20digital%20libraries%2C%20which%20aims%20to%20help%20young%20Southern%20Leyte%C3%B1o%20students%20research%20about%20Science%20and%20Technology%2C%20Department%20of%20Science%20and%20Technology%20%28DOST%29%20Provincial%20Director%20Florita%20M.%20Santiago%20said.%3C%2Fp%3E%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EAccording%20to%20Santiago%2C%20a%20turnover%20ceremony%20and%20training%20orientation%20of%20DOST%20STARBOOKS%20%28Science%20and%20Technology%20Academic%20and%20Research-Based%20Openly%20Operated%20Kiosks%29%20will%20be%20held%20this%20November%2028%20%28Thursday%29%20at%20the%20Maasin%20Country%20Lodge%2C%20Mambajao%2C%20Maasin%20City.%26nbsp%3B%3C%2Fp%3E%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EThe%20STARBOOKS%20is%20the%20first%20science%20digital%20library%20in%20the%20Philippines.%20It%20is%20an%20offline%20and%20stand-along%20information%20kiosk%20which%20contains%20hundreds%20of%20digitized%20science%20and%20technology%20resources%20on%20various%20forms%20%28either%20text%2C%20full%20text%20and%20video%2Faudio%29.%20It%20was%20also%20reported%20that%20the%20kiosk%20currently%20holds%20digitized%20journals%2C%20serial%20publications%2C%20reference%20materials%2C%20annual%20reports%2C%20theses%20and%20dissertations%2C%20technical%20and%20project%20reports.%3C%2Fp%3E%0D%0A%20%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3ESantiago%20said%20that%20information%20can%20be%20accessed%20from%20STARBOOKS%20even%20without%20internet%20connection%2C%20making%20it%20appropriate%20for%20use%20of%20elementary%20and%20secondary%20students.%3C%2Fp%3E%0D%0A%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EThe%20identified%20schools%2C%20particularly%20the%20%22Yolanda-Stricken%22%20schools%2C%20that%20will%20receive%20the%20digital%20library%20are%3A%20Amagusan%20Elementary%20School%2C%20Anahawan%20Central%20School%2C%20Anahawan%20National%20Vocational%20High%20School%2C%20Consolacion%20National%20High%20School%2C%20Hingatungan%20National%20High%20School%2C%20Libagon%20Central%20School%2C%20Libas%20National%20High%20School%2C%20Nahulid%20Elementary%20School%2C%20Rito%20Monte%20de%20Ramos%20Sr.%20Memorial%20School%2C%20Nahaong%20National%20High%20School%2C%20Silago%20National%20High%20School%2C%20Sogod%20Central%20School%2C%20Manhilo%20National%20High%20School%2C%20Maasin%20Central%20School%20and%20San%20Rafael%20Junior%20High%20School.%3C%2Fp%3E%0D%0A%3Cp%3E%22It%20aims%20to%20provide%20Science%20and%20Technology%20based%20educational%20and%20learning%20resources%20in%20various%20formats%20to%20geographically%20isolated%20schools%20and%20local%20government%20units%20throughout%20the%20country%2C%20as%20well%20as%20to%20enhance%20the%20educational%20competence%20of%20students%20in%20beneficiary%20schools%2C%22%20she%20ended.%3C%2Fp%3E%0D%0A', 'Digital Science Libraries to be opened - DOST', '2017-12-01'),
(9, '%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EThe%20Department%20of%20Science%20and%20Technology%2C%20Regional%20Office%20No.%20VIII%20announces%20the%20passers%20of%20%3Cstrong%3E2017%20Junior%20Level%20Science%20Scholarships%20%28JLSS%29%3C%2Fstrong%3E%20these%20are%20the%20qualified%20third%20year%20students%20who%20are%20enrolled%20in%20priority%20fields%20of%20study%20in%20engineering%2C%20basic%20and%20applied%20sciences%2C%20science%20and%20mathematics%20teaching%20at%20identified%20universities%20and%20colleges.%20The%20exam%20was%20conducted%20last%20%3Cstrong%3ENovember%2019%2C%202017%3C%2Fstrong%3E%20to%20different%20schools%20in%20the%20region%20with%20a%20total%20of%20%3Cstrong%3E585%3C%2Fstrong%3E%20applicants%20and%20has%20%3Cstrong%3E270%3C%2Fstrong%3E%20passers%2C%20%3Cstrong%3E255%3C%2Fstrong%3E%20students%20are%20enrolled%20in%20Region%20VIII%20while%20%3Cstrong%3E15%3C%2Fstrong%3E%20were%20enrolled%20outside%20the%20Region.%3C%2Fp%3E%0D%0A%3Cp%3EBelow%20are%20the%20qualifiers%2Fpassers%20for%20the%202017%20Junior%20Level%20Science%20Scholarship%20under%20RA%2010612%20by%20school.%3C%2Fp%3E%0D%0A%3Ctable%3E%0D%0A%3Ctbody%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%3E%3Cimg%20src%3D%22Resources%2Fimg00000003.png%22%20alt%3D%22%22%20width%3D%22150%22%20height%3D%22206%22%20%2F%3E%26nbsp%3B%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cimg%20src%3D%22Resources%2Fimg00000004.png%22%20alt%3D%22%22%20width%3D%22150%22%20height%3D%22206%22%20%2F%3E%26nbsp%3B%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cimg%20src%3D%22Resources%2Fimg00000005.png%22%20alt%3D%22%22%20width%3D%22150%22%20height%3D%22206%22%20%2F%3E%26nbsp%3B%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Cimg%20src%3D%22Resources%2Fimg00000006.png%22%20alt%3D%22%22%20width%3D%22150%22%20height%3D%22206%22%20%2F%3E%26nbsp%3B%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3C%2Ftbody%3E%0D%0A%3C%2Ftable%3E%20', 'DOST-8 announces the Passers of 2017 Junior Level Science Scholarships and the Merit Scholarship', '2018-01-15'),
(11, '%3Cp%20style%3D%22text-align%3A%20justify%3B%22%3EThe%20Department%20of%20Science%20and%20Technology%2C%20Regional%20Office%20No.%208%2C%20Government%20Center%2C%20Candahug%2C%20Palo%2C%20Leyte%20is%20now%20accepting%20qualified%20applicants%20for%20the%20vacant%20%3Cstrong%3EProject%20Assistant%20II%20%28PA%20II%29%20contractual%20position%3C%2Fstrong%3E%20for%20the%20project%20%3Cstrong%3E%22Mainstreaming%20Gender%20and%20Development%20in%20DOST%20Region%20VIII%22%3C%2Fstrong%3E%2C%20to%20wit%3A%26nbsp%3B%3C%2Fp%3E%0D%0A%3Ctable%3E%0D%0A%3Ctbody%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3ENo.%20of%20Position%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EOne%20%281%29%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EPosition%20Title%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EProject%20Assistant%20II%20%28PA%20II%29%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EPosition%20Status%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EContract%20of%20Service%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EContract%20Duration%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EFebruary%20-%20June%202018%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%26nbsp%3B%3C%2Ftd%3E%0D%0A%3Ctd%3EJuly%20-%20December%202018%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EMonthly%20Salary%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3EPhp%2021%2C860.40%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3ESource%20of%20Fund%3C%2Fstrong%3E%3C%2Fem%3E%3A%3C%2Ftd%3E%0D%0A%3Ctd%3EDOST8%20GIA%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3E%3Cem%3E%3Cstrong%3EQualification%20Standard%3A%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%26nbsp%3B%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22text-align%3A%20left%3B%22%3EEducation%3C%2Ftd%3E%0D%0A%3Ctd%3EBS%20Degree%20Holder%20%28Architecture%20%2F%20Interior%20Design%29%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3ESkills%3C%2Ftd%3E%0D%0A%3Ctd%3E%0D%0A%3Cul%3E%0D%0A%3Cli%3EProficient%20in%20the%20English%20Language%20%28written%20and%20oral%29%3C%2Fli%3E%0D%0A%3Cli%3EInformation%20Technology%20Capable%20preferably%20can%20work%20confidently%20on%20on-line%20systems%3C%2Fli%3E%0D%0A%3Cli%3ECan%20work%20independently%3C%2Fli%3E%0D%0A%3C%2Ful%3E%0D%0A%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3ETraining%3C%2Ftd%3E%0D%0A%3Ctd%3ENot%20Required%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3EEligibility%3C%2Ftd%3E%0D%0A%3Ctd%3ENot%20Required%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20style%3D%22vertical-align%3A%20top%3B%22%3EAssignment%3C%2Ftd%3E%0D%0A%3Ctd%3EFAS-HRM%20Office%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3C%2Ftbody%3E%0D%0A%3C%2Ftable%3E%0D%0A%3Cp%3EInterested%20and%20qualified%20applicants%20should%20submit%20their%20application%20letter%20together%20with%20the%20following%20documents%20%3Cstrong%3Eon%20or%20before%20January%2031%2C%202018.%3C%2Fstrong%3E%3C%2Fp%3E%0D%0A%3Col%3E%0D%0A%3Cli%3EApplication%20Letter%3B%3C%2Fli%3E%0D%0A%3Cli%3EPersonal%20Data%20Sheet%3B%3C%2Fli%3E%0D%0A%3Cli%3EPhotocopy%20of%20Transcript%20of%20Records%3B%3C%2Fli%3E%0D%0A%3Cli%3EPhotocopy%20of%20Diploma%3B%3C%2Fli%3E%0D%0A%3Cli%3EPhotocopy%20of%20Eligibility%2C%20if%20any%3C%2Fli%3E%0D%0A%3Cli%3ECertificate%20of%20Employment%3B%3C%2Fli%3E%0D%0A%3Cli%3EPhotocopy%20of%20Certificates%20of%20Trainings%20attended%2C%20if%20any%3C%2Fli%3E%0D%0A%3C%2Fol%3E%0D%0A%3Cp%3EPlease%20address%20you%20application%20letter%20together%20with%20supporting%20documents%20to%3A%3C%2Fp%3E%0D%0A%3Cp%3E%3Cstrong%3E%28SGD%29%20EDGARDO%20M.%20ESPERANCILLA%2C%20CESO%20II%3C%2Fstrong%3E%3Cbr%20%2F%3ERegional%20Director%3Cbr%20%2F%3EDOST%20Region%20VIII%3Cbr%20%2F%3EGovernment%20Center%2C%20Candahug%2C%20Palo%2C%20Leyte%3C%2Fp%3E%0D%0A%3Cp%3EApplication%20letter%20not%20supported%20with%20the%20required%20documents%20shall%20not%20be%20accepted.%20For%20more%20inquiries%2C%20please%20call%20Rufino%20E.%20Mengote%2C%20ARD-FAS%20at%20telephone%20numbers%20%28053%29%20323-6036%2C%20and%20%28053%29%20323-6356.%3C%2Fp%3E%0D%0A%3Cp%3E%3Cstrong%3E%26nbsp%3B%3C%2Fstrong%3E%3C%2Fp%3E', 'DOST Region VIII is now accepting applicants for the vacant Project Assistant II (PA II) Contractual Position for the Project "Mainstreaming Gender and Development in DOST Region VIII"', '2018-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `organization_body`
--

CREATE TABLE `organization_body` (
  `_id` int(11) NOT NULL,
  `head_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organization_head`
--

CREATE TABLE `organization_head` (
  `_id` int(6) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `position` text NOT NULL,
  `clickable` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization_head`
--

INSERT INTO `organization_head` (`_id`, `name`, `date`, `position`, `clickable`) VALUES
(1, '<br>Regional Director', '2018-01-22', '725,8', 1),
(2, '<br>Secretary', '2018-01-22', '581, 54', 1),
(3, '<br>COA Audit Team', '2018-01-23', '866,51', 1),
(4, 'Finance & Administrative Services', '2018-01-25', '328,96', 1),
(6, '<br>Technical Operations', '2018-01-25', '1121,94', 1),
(7, 'Technical <br>Assistant', '2018-01-25', '1011,187', 1),
(8, 'Planning, M & E.& Mgt. Info System (PMIS)', '2018-01-25', '1323,139', 1),
(9, 'ICT Section', '2018-01-25', '1322,210', 1),
(10, 'Technical Supportive Services', '2018-01-26', '1253,258', 1),
(11, 'Grants in Aid (GIA) Projects', '2018-01-26', '1331,338', 0),
(12, 'Reg'' S&T HRD, Promo & Info Center', '2018-01-26', '1331,396', 0),
(13, 'S&T human Resource Dev''t.', '2018-01-26', '1327,456', 0),
(14, 'S*T Training Promotion & Info', '2018-01-26', '1327,521', 0),
(15, 'S&T Linkages & Resource Gen.', '2018-01-26', '1327,578', 0),
(16, 'CEST Program', '2018-01-26', '1331,638', 0),
(17, 'Tech Transfer & Commercialization Center', '2018-01-26', '1176,338', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `type` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`_id`, `name`, `link`, `type`, `date`) VALUES
(6, '', 'https://region8.dost.gov.ph/images/rice2017call_for_entries.png', '', '2017-09-27'),
(7, '', '', '', '0000-00-00'),
(8, '', 'hulalala', '', '0000-00-00'),
(9, '', 'httpslumiere-a.akamaihd.netv1images191a0ea89f78d30cbc7acc07cb17d996372458c6.jpegregion=0,0,450,450', '', '2017-11-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `organization_body`
--
ALTER TABLE `organization_body`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `organization_head`
--
ALTER TABLE `organization_head`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `_id` (`_id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup`
--
ALTER TABLE `backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `organization_body`
--
ALTER TABLE `organization_body`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organization_head`
--
ALTER TABLE `organization_head`
  MODIFY `_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
