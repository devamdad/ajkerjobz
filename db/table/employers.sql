-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:05 PM
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
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `user_pass` text NOT NULL,
  `user_hash` text NOT NULL,
  `status` text NOT NULL,
  `token` int(1) NOT NULL,
  `image` text NOT NULL,
  `details` text NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `user_id`, `user_name`, `email`, `user_pass`, `user_hash`, `status`, `token`, `image`, `details`, `created_at`, `deleted_at`, `updated_at`) VALUES
(2, 'employer2', 'Bata', 'bata@yahoo.com', '$2y$10$OTYxNTUzYzI4MmJiNmViZ.Zx.K6nbMn8RWt5tPW.pFnX.sxIgKneC', '$2y$10$OTYxNTUzYzI4MmJiNmViZG', 'Editor', 0, 'employer2.gif', 'The Aristocrat Group is one of the leading Group of Industries in \r\nBangladesh. Starting from the Restaurant business in 1997, its now \r\nestablished different concerns like Agro (Rice, Feed, PP Woven Bag), \r\nFoods, Builders, Filling Station, Now Woven Industry, Trading, Cold \r\nStorage, etc. The corporate office of the group is located in the center\r\n of the commercial area of Gulshan-1 in the capital D', '2017-07-16 01:02:18', '0000-00-00 00:00:00', '2017-10-07 08:04:02'),
(3, 'employer3', 'Square', 'square@gmail.com', '$2y$10$ZjIxMzEzMzYzMWNmZmUyZO53.lZGgWRg1KksiOfAd.MPGj4wMlBsq', '$2y$10$ZjIxMzEzMzYzMWNmZmUyZT', 'Editor', 0, 'employer3.png', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry-s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and <br>', '2017-07-19 06:17:00', '0000-00-00 00:00:00', '2017-07-20 08:25:52'),
(4, 'employer4', 'Airtel', 'airtel.bd@gmail.com', '$2y$10$ZGJmNjk5MmU5OWUwYTk1Ne2QhlfhlWsWRz70iCLgEEx272XFybte.', '$2y$10$ZGJmNjk5MmU5OWUwYTk1Nj', 'Editor', 0, 'employer4.jpg', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry-s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popu', '2017-07-19 06:48:40', '0000-00-00 00:00:00', '2017-07-20 06:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
