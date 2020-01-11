-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:08 PM
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `description`, `tags`, `categories`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user8', 'Creating a Standardized Markup Language for Semantic Networks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor \r\nsem. Suspendisse egestas nulla eget nunc commodo, et blandit ante \r\ntristique. Aliquam dignissim <br>', 'collected', 'Networking', '2017-02-09 02:16:43', '2017-10-07 07:48:47', '0000-00-00 00:00:00'),
(2, 'user8', 'Creating a Standardized Markup Language for Semantic Networks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a auctor \r\nsem. Suspendisse egestas nulla eget nunc commodo, et blandit ante \r\ntristique. Aliquam dignissim nulla tellus, sed pellentesque libero \r\npellentesque et. Donec nec sem mattis, susci', 'Journal paper', 'Journal', '2017-02-09 02:52:05', '2017-07-20 12:18:40', '0000-00-00 00:00:00'),
(3, 'user10', 'Nothing', 's simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry-s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a\r\n type specimen book. It hs simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a\r\n type specimen book. It hs simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been the industry''s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a\r\n type', 'all', 'Everything', '2017-06-14 06:56:50', '2017-06-14 07:04:58', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
