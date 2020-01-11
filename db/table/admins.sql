-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:04 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_hash` text NOT NULL,
  `status` text NOT NULL,
  `token` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `user_name`, `email`, `user_pass`, `user_hash`, `status`, `token`, `created_at`, `deleted_at`, `updated_at`) VALUES
(2, 'user2', 'ratul', 'karigor@yahoo.com', '$2y$10$ODM0ZDMxZjExOWNkYTJiN.N2infn..DD2hDR3/fXNlprTX8WmraBW', '$2y$10$ODM0ZDMxZjExOWNkYTJiND', 'Prime', 0, '2017-06-01 12:30:09', '0000-00-00 00:00:00', '2017-07-20 04:03:47'),
(3, 'user3', 'Topu', 'topu@gmail.com', '$2y$10$ZGNiNWYyMDgwM2JkZTU4N.nlFiF1bFPiqhzem.lre0ibz1buPyUHK', '$2y$10$ZGNiNWYyMDgwM2JkZTU4ND', 'Moderator', 0, '2017-06-01 12:30:25', '0000-00-00 00:00:00', '2017-06-09 06:54:13'),
(11, 'user11', 'Protik', 'protik@techkarigar.com', '$2y$10$ZDc5ZjJjZTM5MThiNzI4ZObagD5wV5brzr8t5OT1d8IRkxUxUWBZ6', '$2y$10$ZDc5ZjJjZTM5MThiNzI4ZW', 'Super', 0, '2017-06-09 11:17:41', '0000-00-00 00:00:00', '2017-06-09 11:18:32'),
(12, 'user12', 'Asad', 'asad@yahoo.com', '$2y$10$ODA3NDJjN2QyZDhlYjI3ZOsYEtI6Fm8mR44B30ckmqtXa4KUfhkWi', '$2y$10$ODA3NDJjN2QyZDhlYjI3ZT', 'Moderator', 0, '2017-06-09 02:13:30', '0000-00-00 00:00:00', '2017-07-20 04:04:17'),
(13, 'user13', 'Asadujjaman', 'asadujjaman@yahoo.com', '$2y$10$ODg5Yjc0YmE4MzkxMDQzNuYLM7BcRlVsGR8kMLeAl54y9mqVyeiwu', '$2y$10$ODg5Yjc0YmE4MzkxMDQzNz', 'Moderator', 0, '2017-06-09 02:15:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'user14', 'Ifti', 'ifti@yahoo.com', '$2y$10$MjQ1ZTdlYTcwMjMxNzhmYObLpPHBXE8lu87MgO/UE7Y2R5TdO2oQu', '$2y$10$MjQ1ZTdlYTcwMjMxNzhmYT', 'Editor', 0, '2017-06-09 02:28:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'user15', 'Irman', 'imran@gmail.com', '$2y$10$MmE4OWYxODQ2YzEwN2Q0ZebAAuGfWw9NACO8RaA6DIcNgANPTbBhO', '$2y$10$MmE4OWYxODQ2YzEwN2Q0Zj', 'Editor', 0, '2017-07-16 09:33:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'user16', 'Amdad', 'amdad@gmail.com', '$2y$10$N2U4MzczMWYzNjFmOWY2YOoElGpqTCONuIlAc6N/GIMpQy.ydaBGC', '$2y$10$N2U4MzczMWYzNjFmOWY2YW', 'Super', 0, '2017-07-20 04:04:56', '0000-00-00 00:00:00', '2017-07-20 04:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
