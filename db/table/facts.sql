-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 06:06 PM
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
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `no_of_items` varchar(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `user_id`, `title`, `no_of_items`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user1', 'Coffie', '235', 'fa fa-coffee', '2017-02-05 09:22:04', '2017-02-05 10:08:12', '0000-00-00 00:00:00'),
(3, 'user1', 'HOURS OF CODING', '2956', 'fa fa-clock-o', '2017-02-05 09:36:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'user1', 'LINES OF CODE', '2B', 'fa fa-desktop', '2017-02-05 09:37:36', '2017-02-05 10:08:26', '2017-02-05 10:14:11'),
(5, 'user8', 'PROJECTS COMPLETED', '65', 'fa fa-lightbulb-o', '2017-02-07 07:53:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'user8', 'CUPS OF COFFEE', '345', 'fa fa-coffee', '2017-02-10 07:56:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'user10', 'MakeUp box', '20', 'fa fa-credit-card-alt', '2017-06-14 06:30:45', '2017-06-14 06:30:59', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
