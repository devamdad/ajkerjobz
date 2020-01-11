-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:07 PM
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
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `user_id`, `title`, `description`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user1', '', 'Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a \r\ntristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.', 'fa fa-flask', '2017-02-04 07:01:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user1', '', 'Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a \r\ntristique est luctus. Morbi quis euismod nulla. Sed eu nibh eros.', 'fa fa-thermometer-three-quarters', '2017-02-04 07:30:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user1', '', 'Duis eu finibus urna. Pellentesque facilisis tellus vel leo accumsan, a \r\ntristique est luctus.<br>', 'fa fa-bolt', '2017-02-04 07:30:32', '2017-02-04 08:29:39', '2017-02-04 08:53:26'),
(6, 'user2', '', 'I love travelling and food<br>', 'fa fa-bus', '2017-02-04 08:31:58', '2017-02-04 08:32:33', '0000-00-00 00:00:00'),
(7, 'user8', 'Travel', 'Duis eu finibus urna. Pellentesque facilisis tellus <br>', 'fa fa-anchor', '2017-02-10 07:46:36', '2017-02-10 07:56:11', '0000-00-00 00:00:00'),
(8, 'user8', 'Travel', 'I love Travelling<br>', 'fa fa-bus', '2017-02-11 06:36:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'user8', 'fa fa-bicycle', 'I love to travel<br>', 'Cycleing', '2017-02-11 07:44:25', '2017-02-11 07:45:35', '2017-02-11 07:46:29'),
(10, 'user10', 'I like to Bath', 'I like to bath for a long time.I like to bath for a long time.I like to bath for a long time.I like to bath for a long time.<br>', 'fa fa-bullhorn', '2017-06-14 08:46:03', '2017-06-14 06:29:27', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
