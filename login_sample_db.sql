-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 01:34 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matching` int(1) NOT NULL,
  `matchrequest` int(100) NOT NULL,
  `matchrequestfrom` varchar(100) NOT NULL,
  `currentmatch` varchar(11) NOT NULL,
  `daterequest` varchar(100) NOT NULL,
  `daterequestfrom` varchar(100) NOT NULL,
  `currentdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `email`, `matching`, `matchrequest`, `matchrequestfrom`, `currentmatch`, `daterequest`, `daterequestfrom`, `currentdate`) VALUES
(22, 6715142, 'mirai1245', 'abcd', '', 2, 0, '', 'venomon', '1', 'venomon', ''),
(23, 131785818, 'bobotaro243', 'abc', '', 2, 0, '', 'abu', '', '', ''),
(24, 686220, 'amzar', '12345', '', 0, 0, '', '0', '', '', ''),
(25, 19242, 'venomon', '1234', '', 2, 0, '', 'mirai1245', '', '', ''),
(27, 487770, 'haru', '123', '', 2, 0, '', 'boboi', '1', 'boboi', ''),
(28, 49036346, 'abu', '123', '', 2, 0, '', 'bobotaro243', '1', 'bobotaro243', ''),
(29, 748057, 'swansong', '1234', '', 2, 0, '', '', '', '', ''),
(30, 40573995, 'maria', '1234', 'maria1234@gmail.com', 2, 0, '', 'peien', '', '', ''),
(31, 413770, 'peien', '1234', 'peienxoxo@gmail.com', 2, 0, '', 'maria', '1', 'maria', ''),
(37, 2648, 'parry', '123', '123', 2, 0, '', 'barry', '', '', ''),
(38, 5812034, 'barry', '123', '123', 2, 0, '', 'parry', '1', 'parry', ''),
(39, 4573, 'palinda', 'palindamon', '1234', 2, 0, '', 'mario', '', '', ''),
(40, 877754756, 'mario', '123', 'mario123', 2, 0, '', 'palinda', '1', 'palinda', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersdate`
--

CREATE TABLE `usersdate` (
  `user_name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `datemessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersdate`
--

INSERT INTO `usersdate` (`user_name`, `date`, `time`, `venue`, `datemessage`) VALUES
('parry', '', '', '', ''),
('barry', '2022-12-15', '21:32', 'house ', 'hello'),
('palinda', '', '', '', ''),
('mario', '2022-02-25', '19:45', 'kota raya', 'hallo');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `height` int(100) NOT NULL,
  `matching` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`user_id`, `user_name`, `age`, `sex`, `location`, `language`, `height`, `matching`) VALUES
(0, '', 0, '', '', '', 0, NULL),
(2648, 'parry', 25, 'male', 'Afganistan', '', 0, 2),
(4573, 'palinda', 0, 'male', 'Afganistan', '', 0, 2),
(9855, 'bbbbbbbb', 0, '', '', '', 0, NULL),
(19242, 'venomon', 25, 'male', 'Afganistan', '', 0, 2),
(98852, 'boboi', 1, 'male', 'Afganistan', '', 0, 2),
(198663, 'bropro', 0, '', '', '', 0, NULL),
(413770, 'peien', 0, '', '', '', 0, 2),
(487770, 'haru', 15, 'male', 'Afganistan', '', 0, 2),
(581483, 'amzar', 0, '', '', '', 0, NULL),
(686220, 'amzar', 99, 'male', 'Angola', '', 0, 0),
(748057, 'swansong', 27, 'male', 'Afganistan', '', 0, 2),
(5812034, 'barry', 0, '', '', '', 0, 2),
(6715142, 'mirai1245', 12, 'male', 'Algeria', '', 0, 2),
(11958250, 'amzara1995', 0, '', '', '', 0, NULL),
(28541387, 'amzar', 0, '', '', '', 0, NULL),
(40573995, 'maria', 25, 'male', 'Afganistan', '', 0, 2),
(49036346, 'abu', 21, 'male', 'Kuwait', '', 0, 2),
(131785818, 'bobotaro243', 25, 'male', 'Croatia', '', 0, 2),
(144064790, 'mirana', 0, '', '', '', 0, NULL),
(877754756, 'mario', 0, '', '', '', 0, 2),
(2147483647, 'koboldman', 0, '', '', '', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `password` (`password`),
  ADD KEY `matchup` (`matching`),
  ADD KEY `matchrequest` (`matchrequest`),
  ADD KEY `matchrequestfrom` (`matchrequestfrom`),
  ADD KEY `currentmatch` (`currentmatch`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `usersdate`
--
ALTER TABLE `usersdate`
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`),
  ADD KEY `time` (`time`),
  ADD KEY `venue` (`venue`),
  ADD KEY `datemessage` (`datemessage`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `age` (`age`),
  ADD KEY `sex` (`sex`),
  ADD KEY `location` (`location`),
  ADD KEY `language` (`language`),
  ADD KEY `height` (`height`),
  ADD KEY `user_name` (`user_name`) USING BTREE,
  ADD KEY `user_name_2` (`user_name`),
  ADD KEY `matching` (`matching`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
