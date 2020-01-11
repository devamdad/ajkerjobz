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
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `year` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `user_id`, `title`, `organization`, `description`, `location`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user8', 'COMPETITIVE AWARD FOR ACADEMIC EXCELLENCE', 'MELLON GRANT Award', 'Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem.', 'San fransico', '2010-10-23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user8', 'COMPETITIVE AWARD FOR ACADEMIC EXCELLENCE', 'TRITON AWARD', 'Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem', 'San fransico', '2009-12-05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user10', 'TRITON AWAR', 'Troy Collage', 'Lorem ipsum dolor sit amet, consectetur adipiscingVivam sit amet ligula non lectus cursus egestas. Cras erat lorem', 'Florida Central', '2010-02-14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-06-14 01:06:43'),
(4, 'user10', 'Best Student', 'Havard University', 'Best Student Awadr', 'California', '2011-11-10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
