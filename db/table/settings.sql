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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `featured_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `title`, `fullname`, `description`, `address`, `featured_img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'user7', 'Web Designer', 'Rayhan Ahmed', 'Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem,', 'Minisota, MA', 'user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user8', 'Freelancer', 'Shopno Karigor', 'I am a free lancer. Welcome to my profile<br>', 'Rajshahi', 'user8.jpg', '2017-02-06 09:19:45', '2017-02-06 09:22:41', '0000-00-00 00:00:00'),
(4, 'user1', 'Freecoder', 'Asadujjaman', 'I am asad<br>', 'Dhaka', 'user1.png', '0000-00-00 00:00:00', '2017-02-11 06:18:35', '0000-00-00 00:00:00'),
(5, 'user3', 'Driver', 'Ahmed Haque', 'I am Ahmed i live in barishal<br>', 'Barishal', 'user3.png', '0000-00-00 00:00:00', '2017-02-11 06:21:27', '0000-00-00 00:00:00'),
(6, 'user4', 'Web Developer', 'Bablu Ahmed', 'I am bablu i live in DInajpur<br>', 'Dinajpur', 'user4.png', '0000-00-00 00:00:00', '2017-02-11 06:22:33', '0000-00-00 00:00:00'),
(7, 'user5', 'Engineer', 'Touhid Ahmed', 'I am Touhid and i am an engineer<br>', 'Mirpur', 'user5.png', '0000-00-00 00:00:00', '2017-02-11 06:25:25', '0000-00-00 00:00:00'),
(9, 'user6', 'Artist', 'Sabbir Hosen', 'I am Sabbir Ahmed i live in kustia<br>', 'Kustia', 'user6.png', '0000-00-00 00:00:00', '2017-02-11 06:29:08', '0000-00-00 00:00:00'),
(10, 'user9', '', '', '', '', 'user.png', '2017-06-13 11:14:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'user10', 'Student', 'Tanjina Alam', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum <br>', 'Mirpur 2', 'user10.jpg', '2017-06-13 11:17:05', '2017-06-14 06:31:41', '0000-00-00 00:00:00'),
(12, 'user11', '', '', '', '', 'user.png', '2017-06-13 11:21:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'user12', '', '', '', '', 'user.png', '2017-06-17 08:49:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'user13', 'Freelancer', 'Rajesh', 'I am a free lancer<br>', 'Dhaka', 'user13.jpg', '2017-07-16 10:27:05', '2017-07-16 10:30:45', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
