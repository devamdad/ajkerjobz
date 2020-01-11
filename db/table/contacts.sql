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
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `name`, `email`, `message`, `phone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user8', 'Rayhan', 'rayhan@yahoo.com', 'Hi Ryhan.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ', '90', '2017-02-09 12:39:32', '0000-00-00 00:00:00', '2017-02-10 10:31:11'),
(2, 'user8', 'John Doe', 'john@yahoo.com', ' Hi Ryhan. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', '980', '2017-02-09 02:23:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user8', 'Jibon', 'jibon@yahoo.com', 'Hello Shopno Karigor', '', '2017-02-10 10:27:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'user8', 'Asad Ujjaman', 'asad@gmail.com', 'Hi Shopno karigor', '', '2017-02-10 10:29:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'user8', 'Hasib', 'hasib@gmail.com', 'Hello', '', '2017-02-11 07:47:00', '0000-00-00 00:00:00', '2017-02-11 07:48:43'),
(6, 'user3', 'Ratul', 'karigor93@gm', 'kemon asen', '', '2017-06-13 11:03:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'user10', 'Ratul', 'karigor@gmail.com', 'Hi. Suchi,is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', '', '2017-06-14 07:11:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'user13', 'Shopno', 'email@gmail.com', 'Hello', '', '2017-07-16 12:34:27', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
