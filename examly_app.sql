-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2020 at 08:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examly_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `8`
--

CREATE TABLE `8` (
  `id` int(11) NOT NULL,
  `notification_id` int(10) NOT NULL,
  `read` int(10) NOT NULL,
  `click` int(10) NOT NULL,
  `active` int(10) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8`
--

INSERT INTO `8` (`id`, `notification_id`, `read`, `click`, `active`, `current_time1`) VALUES
(3, 4, 1, 0, 1, '2020-05-29 16:12:47'),
(4, 5, 1, 0, 1, '2020-05-29 16:15:58'),
(5, 6, 1, 0, 1, '2020-05-29 17:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `9`
--

CREATE TABLE `9` (
  `id` int(11) NOT NULL,
  `notification_id` int(10) NOT NULL,
  `read` int(10) NOT NULL,
  `click` int(10) NOT NULL,
  `active` int(10) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `9`
--

INSERT INTO `9` (`id`, `notification_id`, `read`, `click`, `active`, `current_time1`) VALUES
(1, 4, 1, 0, 1, '2020-05-29 16:11:08'),
(2, 6, 0, 0, 1, '2020-05-29 17:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `10`
--

CREATE TABLE `10` (
  `id` int(11) NOT NULL,
  `notification_id` int(10) NOT NULL,
  `read` int(10) NOT NULL,
  `click` int(10) NOT NULL,
  `active` int(10) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `active` int(100) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `active`, `current_time1`) VALUES
(2, 'Information Technology', 1, '2020-05-29 07:35:41'),
(3, 'Computer Science and Engineering', 1, '2020-05-29 07:37:03'),
(4, 'Electronics and Communication Engineering', 1, '2020-05-29 07:37:26'),
(5, 'Mechanical Engineering', 1, '2020-05-29 07:37:43'),
(6, 'Electrical Engineering', 1, '2020-05-29 07:38:01'),
(7, 'Civil Engineering', 1, '2020-05-29 07:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `log_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `log_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `session_out` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`log_id`, `user_id`, `log_in`, `session_out`) VALUES
(1, 1, '2020-05-29 07:07:36', 1),
(2, 1, '2020-05-29 07:07:55', 0),
(3, 2, '2020-05-29 11:02:01', 1),
(4, 2, '2020-05-29 11:07:07', 0),
(5, 2, '2020-05-29 11:12:17', 0),
(6, 2, '2020-05-29 11:28:26', 1),
(7, 2, '2020-05-29 11:40:34', 0),
(8, 2, '2020-05-29 12:14:43', 0),
(9, 2, '2020-05-29 12:23:14', 0),
(10, 2, '2020-05-29 12:24:37', 0),
(11, 2, '2020-05-29 12:27:47', 0),
(12, 2, '2020-05-29 12:33:58', 1),
(13, 2, '2020-05-29 12:34:09', 0),
(14, 2, '2020-05-29 12:39:50', 0),
(15, 2, '2020-05-29 12:49:20', 1),
(16, 2, '2020-05-29 12:52:46', 0),
(17, 2, '2020-05-29 13:00:21', 1),
(18, 2, '2020-05-29 13:04:51', 1),
(19, 2, '2020-05-29 17:38:18', 1),
(20, 2, '2020-05-29 18:01:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_user_student`
--

CREATE TABLE `log_user_student` (
  `log_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `log_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `session_out` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_user_student`
--

INSERT INTO `log_user_student` (`log_id`, `user_id`, `log_in`, `session_out`) VALUES
(1, 9, '2020-05-29 11:28:01', 0),
(2, 9, '2020-05-29 11:29:42', 0),
(3, 9, '2020-05-29 11:30:19', 0),
(4, 9, '2020-05-29 11:34:42', 0),
(5, 9, '2020-05-29 11:35:51', 0),
(6, 9, '2020-05-29 11:37:43', 1),
(7, 9, '2020-05-29 11:39:17', 0),
(8, 9, '2020-05-29 11:39:58', 0),
(9, 9, '2020-05-29 11:47:47', 0),
(10, 9, '2020-05-29 12:33:00', 1),
(11, 9, '2020-05-29 12:40:15', 0),
(12, 9, '2020-05-29 12:40:53', 0),
(13, 9, '2020-05-29 12:41:42', 0),
(14, 9, '2020-05-29 12:46:10', 0),
(15, 9, '2020-05-29 12:49:27', 0),
(16, 9, '2020-05-29 12:54:15', 1),
(17, 8, '2020-05-29 12:55:43', 1),
(18, 9, '2020-05-29 13:04:24', 1),
(19, 9, '2020-05-29 16:12:25', 1),
(20, 8, '2020-05-29 16:16:55', 1),
(21, 9, '2020-05-29 17:35:37', 0),
(22, 8, '2020-05-29 18:01:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification_content` varchar(500) NOT NULL,
  `active` int(100) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification_content`, `active`, `current_time1`) VALUES
(1, 'Please enroll in group.', 1, '2020-05-29 09:30:10'),
(2, 'Please enroll in group.', 1, '2020-05-29 09:47:15'),
(3, 'Please enroll in group in pesrson.', 1, '2020-05-29 09:55:13'),
(4, 'Please enroll in group in pesrson.', 1, '2020-05-29 10:32:16'),
(5, 'Please enroll in group in pesrson.', 1, '2020-05-29 10:32:50'),
(6, 'new course is there', 1, '2020-05-29 17:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(400) NOT NULL,
  `category` int(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `session_in` int(10) NOT NULL,
  `active` int(100) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `category`, `college`, `city`, `session_in`, `active`, `current_time1`) VALUES
(8, 'kumara', 'tokumaraguru.m@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'krishna', 'Aruppukottai', 1, 1, '2020-05-29 11:22:48'),
(9, 'superadmin', 'aa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'krishna', 'Aruppukottai', 1, 1, '2020-05-29 11:23:00'),
(10, 'guru', 'urug@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 4, 'krishna', 'Aruppukottai', 1, 1, '2020-05-29 18:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `active` int(100) NOT NULL,
  `session_in` int(100) NOT NULL,
  `current_time1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `active`, `session_in`, `current_time1`) VALUES
(1, 'kumara', 'xxx@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1, '2020-05-29 07:06:41'),
(2, 'admin', 'tokumaraguru.m@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1, '2020-05-29 07:11:11'),
(3, 'guru', 'guru@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1, '2020-05-29 18:02:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `8`
--
ALTER TABLE `8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `9`
--
ALTER TABLE `9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `10`
--
ALTER TABLE `10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `log_user_student`
--
ALTER TABLE `log_user_student`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `8`
--
ALTER TABLE `8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `9`
--
ALTER TABLE `9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `10`
--
ALTER TABLE `10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `log_user_student`
--
ALTER TABLE `log_user_student`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
