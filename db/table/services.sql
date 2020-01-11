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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `title`, `description`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user8', 'Mobile Apps Development', 'Lorem ipsum dolor sit <br>', 'fa fa-mobile', '2017-02-09 06:57:48', '2017-02-09 07:18:28', '0000-00-00 00:00:00'),
(2, 'user8', 'SEO Service', 'Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem', 'fa fa-area-chart', '2017-02-09 06:58:50', '0000-00-00 00:00:00', '2017-02-09 07:22:16'),
(3, 'user10', 'Code Tester', 'I am bug finder. I find bug in code<br>', 'fa fa-bug', '2017-06-14 07:06:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'user10', 'Nice Coffie Maker', 'I can make nice coffie.is simply dummy text of the printing and typesetting industry. Lorem \r\nIpsum has been <br>', 'fa fa-coffee', '2017-06-14 07:10:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
