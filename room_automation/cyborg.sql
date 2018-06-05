-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 04:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyborg`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id_details` int(10) NOT NULL,
  `temperature` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `humidity` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id_details`, `temperature`, `humidity`, `time`) VALUES
(177, '35', '31', '2018-06-05 01:14:00'),
(178, '35', '31', '2018-06-05 01:25:27'),
(179, '35', '30', '2018-06-05 01:47:23'),
(180, '35', '31', '2018-06-05 01:52:24'),
(181, '35', '31', '2018-06-05 01:57:24'),
(182, '34', '32', '2018-06-05 02:02:25'),
(183, '34', '32', '2018-06-05 02:07:26'),
(184, '35', '31', '2018-06-05 02:12:27'),
(185, '34', '32', '2018-06-05 04:21:49'),
(186, '34', '31', '2018-06-05 04:26:51'),
(187, '34', '32', '2018-06-05 04:32:34'),
(188, '34', '31', '2018-06-05 04:52:33'),
(189, '34', '32', '2018-06-05 04:57:33'),
(190, '34', '32', '2018-06-05 05:02:35'),
(191, '34', '32', '2018-06-05 05:07:35'),
(192, '33', '32', '2018-06-05 05:12:36'),
(193, '35', '32', '2018-06-05 05:17:37'),
(194, '34', '42', '2018-06-05 06:59:23'),
(195, '34', '32', '2018-06-05 07:09:25'),
(196, '35', '30', '2018-06-05 07:14:27'),
(197, '34', '31', '2018-06-05 07:19:27'),
(198, '34', '33', '2018-06-05 07:24:29'),
(199, '34', '32', '2018-06-05 07:29:30'),
(200, '34', '30', '2018-06-05 07:34:29'),
(201, '35', '31', '2018-06-05 07:46:30'),
(202, '35', '32', '2018-06-05 07:51:31'),
(203, '35', '30', '2018-06-05 10:22:51'),
(204, '35', '40', '2018-06-05 10:27:52'),
(205, '35', '33', '2018-06-05 10:32:53'),
(206, '35', '31', '2018-06-05 10:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `fan` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `light` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`fan`, `light`) VALUES
('20', '40'),
('20', '40'),
('20', '30'),
('20', '30'),
('20', '30'),
('20', '30'),
('52', '37'),
('20', '69'),
('20', '69'),
('20', '69');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(10) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `roll_no`, `address`) VALUES
(1, 'Prabin', 'prabinrath123@gmail.com', '90256cd4fc238b40450ab7d44425bb89', '7609904324', '116CS0217', 'DBA-A122'),
(2, 'neelam', 'neelammahapatro36@gmail.com', '4a7ff8af51c6b95a9900937643db1f95', '8280030272', '116cs0200', 'cvr'),
(3, 'liza', 'prabinneelam@gmail.com', '90256cd4fc238b40450ab7d44425bb89', '8280030272', '116cs0200', 'DBA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id_details`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id_details` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
