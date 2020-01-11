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
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `experience_area` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `title`, `description`, `level`, `experience`, `experience_area`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user8', 'PROGRAMMING SKIILL', 'i love html. and wordpress hu<br>', 'EXPERT', '2 Years', 'php,wordpress,html', '2017-02-07 07:48:54', '2017-02-07 08:43:17', '2017-02-08 07:28:44'),
(2, 'user8', 'DESIGN SKILLS', '<span class="skill-description"><span class="skill-description">Lorem ipsum dolor sit amet, consectetur \r\nadipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat \r\nlorem, fringilla quis sag</span></span>', 'BEGINER', '1 years', 'vector,cliping mask,adobe', '2017-02-07 07:49:37', '2017-02-10 09:22:18', '0000-00-00 00:00:00'),
(3, 'user8', 'OFFICE SKILLS', '<span class="skill-description">Lorem ipsum dolor sit amet, consectetur \r\nadipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat \r\nlorem, fringilla quis sagittis in, sagittis inNam leo tor</span>', 'INTERMEDIATE', '2.5 Years', 'Ms word,Ms Office,Ms Powerpoint', '2017-02-10 09:16:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'user8', 'Coding', 'I love codding<br>', 'EXPERT', '3 yeras', 'c++,c,jav', '2017-02-11 07:49:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'user10', 'Coder', 'I am a beginner coder. Pry for me <br>', 'BEGINER', '2 month', 'html', '2017-06-14 06:49:22', '2017-06-14 06:53:37', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
