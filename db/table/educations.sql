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
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `passing_year` date NOT NULL,
  `main_subject` varchar(255) NOT NULL,
  `education_board` varchar(255) NOT NULL,
  `course_duration` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `title`, `institute`, `result`, `passing_year`, `main_subject`, `education_board`, `course_duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user8', 'COMPUTER ENGINEERING - PHD', 'UNIVERSITY OF CALIFORNIA', '3.75', '2017-10-01', 'Big Data', 'Dhaka', '4 years', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-02-10 11:02:17'),
(2, 'user8', 'ELECTRONICS ENGINEERING', 'UNIVERSITY OF CALIFORNIA', '3.60', '2017-10-02', 'ELECTRONICS', 'Dhaka', '4 years', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user7', 'Graduation', 'North South University', '3.80', '2016-10-10', 'CSE', 'Dhaka', '4 years', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'user10', 'BSC in CSE', 'BUBT', '5', '2017-10-01', 'CSE', 'Dhaka', '4 years', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'user10', 'EEb', 'UIPT', '3.00', '2014-12-20', 'CSE', 'Dhaka', '4 years', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-06-14 01:06:07'),
(6, 'user10', 'SSC', 'Faridpur collage', '4.00', '2010-01-01', 'Science', 'Dhaka', '2 years', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
