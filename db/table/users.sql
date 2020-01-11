-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:09 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajkerjob_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `user_role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `username`, `email`, `password`, `token`, `is_active`, `user_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user1', 'asad', 'asad@yahoo.com', '12345678', 'qwerty', 1, 2, '2017-02-04 02:38:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user3', 'ahmed', 'ahmed@yahoo.com', '12345678', 'qwerty', 0, 2, '2017-02-05 02:14:42', '2017-10-07 08:49:18', '0000-00-00 00:00:00'),
(4, 'user4', 'bablu', 'bablu@yahoo.com', '12345678', 'qwerty', 1, 2, '2017-02-06 06:43:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'user5', 'touhid', 'touhid@yahoo.com', '12345678', 'qwerty', 1, 2, '2017-02-06 06:44:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'user6', 'sabbir', 'sabbir@yahoo.com', '12345678', 'qwerty', 1, 2, '2017-02-06 06:45:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'user7', 'rayhan', 'rayhan@yahoo.com', '12345678', 'qwerty', 1, 2, '2017-02-06 06:45:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'user8', 'Ratul', 'ratul@yahoo.com', 'admin', 'qwerty', 1, 2, '2017-02-06 09:19:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'user9', 'Redowan', 'karigor93@gm', 'admin123', 'qwerty', 1, 2, '2017-06-13 11:14:03', '2017-10-07 08:49:26', '0000-00-00 00:00:00'),
(10, 'user10', 'Suchi', 'suchi@gmail.com', 'admin123', 'qwerty', 1, 2, '2017-06-13 11:17:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'user11', 'Tania', 'tania@gmail.com', 'admin123', 'qwerty', 0, 2, '2017-06-13 11:21:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'user12', 'amit', 'amit@bubt.edu.bd', 'admin123', 'qwerty', 1, 2, '2017-06-17 08:49:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'user13', 'rajesh', 'rajesh@gmail.com', 'admin12345678', 'qwerty', 1, 2, '2017-07-16 10:27:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
