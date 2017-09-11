-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 05:10 AM
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
(22, '2017-09-11');

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
(24, 'Food', 'Training/Technical Consultancy Services', '', '03413', 'dfgdg', '2017-09-11');

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
  `news` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`_id`, `news`, `date`) VALUES
(1, '%3Cp%3E%3Cimg+src%3D%22resources%2F6.png%22+alt%3D%22%22+width%3D%22484%22+height%3D%22485%22+%2F%3E%3C%2Fp%3E%3Cp%3EHello', '2017-09-08'),
(2, '%3Cp%3E%3Cimg+src%3D%22resources%2F6.png%22+alt%3D%22%22+width%3D%22484%22+height%3D%22485%22+%2F%3E%3C%2Fp%3E%3Cp%3EHello', '2017-09-08'),
(3, '%3Cp%3E%3Cimg+src%3D%22resources%2F6.png%22+alt%3D%22%22+width%3D%22484%22+height%3D%22485%22+%2F%3E%3C%2Fp%3E%3Cp%3EHello', '2017-09-08'),
(4, '%3Cp+style%3D%22text-align%3A+center%3B%22%3E%3Cem%3E%3Cstrong%3Ezxzx%3C%2Fstrong%3E%3C%2Fem%3E%3C%2Fp%3E', '2017-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`_id`, `name`, `link`, `type`) VALUES
(6, '', 'https://region8.dost.gov.ph/images/rice2017call_for_entries.png', ''),
(7, '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
