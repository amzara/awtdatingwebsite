-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 06:19 AM
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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `matching` int(1) NOT NULL,
  `matchrequest` int(100) NOT NULL,
  `matchrequestfrom` varchar(100) NOT NULL,
  `currentmatch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`, `matching`, `matchrequest`, `matchrequestfrom`, `currentmatch`) VALUES
(22, 6715142, 'mirai1245', 'abcd', '2022-02-20 00:05:52', 1, 0, '', 0),
(23, 131785818, 'bobotaro243', 'abc', '2022-02-20 00:46:33', 1, 0, '', 0),
(24, 686220, 'amzar', '12345', '2022-02-20 02:48:55', 0, 0, '', 0),
(25, 19242, 'venomon', '1234', '2022-02-20 05:14:20', 1, 0, '', 0);

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
  `matching` int(11) DEFAULT NULL,
  `matchrequest` varchar(100) NOT NULL,
  `currentmatch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`user_id`, `user_name`, `age`, `sex`, `location`, `language`, `height`, `matching`, `matchrequest`, `currentmatch`) VALUES
(19242, 'venomon', 15, 'male', 'Afganistan', '', 0, 1, '', ''),
(686220, 'amzar', 0, '', '', '', 0, NULL, '', ''),
(6715142, 'mirai1245', 45, 'male', 'Malaysia', '', 0, 1, '', ''),
(131785818, 'bobotaro243', 25, 'male', 'Croatia', '', 0, 1, '', '');

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
  ADD KEY `date` (`date`),
  ADD KEY `matchup` (`matching`),
  ADD KEY `matchrequest` (`matchrequest`),
  ADD KEY `matchrequestfrom` (`matchrequestfrom`),
  ADD KEY `currentmatch` (`currentmatch`);

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
  ADD KEY `matching` (`matching`),
  ADD KEY `matchrequest` (`matchrequest`),
  ADD KEY `currentmatch` (`currentmatch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
