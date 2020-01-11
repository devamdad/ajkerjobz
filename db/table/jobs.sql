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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job_id` text NOT NULL,
  `employer_id` text NOT NULL,
  `job_category` text NOT NULL,
  `job_title` text NOT NULL,
  `job_description` text NOT NULL,
  `salary` text NOT NULL,
  `job_location` text NOT NULL,
  `email` text NOT NULL,
  `job_status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_id`, `employer_id`, `job_category`, `job_title`, `job_description`, `salary`, `job_location`, `email`, `job_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'job1', 'employer2', 'ct10', 'Junior Engineer', '<ul><li>Provide the the PMâ€™s deadlines & deliverables to authorities.</li></ul>', '60000', ' Sylhet Barisal', 'bata@yahoo.com', 0, '2017-07-18 11:33:57', '2017-10-08 06:50:17', '0000-00-00 00:00:00'),
(2, 'job2', 'employer2', 'ct15', 'Deputy Project Manager and Asistant', '<div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">\r\n                <h4>Job Requirements</h4>\r\n                <ul><li>Provide the lead on completing M&E related \r\ndocuments, plans, reports in support of the PMâ€™s deadlines & \r\ndeliverables to authorities.</li><li>Provideents, plans, reports in support of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the lead on completing M&Eupport of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the the PMâ€™s deadlines & deliverables to authorities.</li></ul>\r\n              </div>', 'Negotiable', 'Dhaka Sylhet Barisal', 'bata@gmail.com', 0, '2017-07-18 11:35:31', '2017-10-07 10:31:26', '0000-00-00 00:00:00'),
(3, 'job3', 'employer2', 'ct15', 'Senior Engineer', '<div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">\r\n                <h4>Job Requirements</h4>\r\n                <ul><li>Provide the lead on completing M&E related \r\ndocuments, plans, reports in support of the PMâ€™s deadlines & \r\ndeliverables to authorities.</li><li>Provideents, plans, reports in support of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the lead on completing M&Eupport of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the the PMâ€™s deadlines & deliverables to authorities.</li></ul>\r\n              </div>', '4000', 'Dhaka Sylhet', 'bata@gmail.com', 1, '2017-07-18 02:44:43', '2017-10-07 10:31:21', '0000-00-00 00:00:00'),
(4, 'job4', 'employer3', 'ct4', 'Beauty Expers For Outlate', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry-s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', 'Negotiable', 'Dhaka Chittagong Sylhet Barisal', 'square@gmail.com', 1, '2017-07-19 06:47:11', '2017-10-07 10:30:46', '0000-00-00 00:00:00'),
(5, 'job5', 'employer4', 'ct8', 'Creative Designer Need', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry-s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '50000', 'Dhaka Rangpur Sylhet Barisal', 'airtel@gmail.com', 1, '2017-07-19 06:52:47', '2017-10-07 10:30:58', '0000-00-00 00:00:00'),
(6, 'job6', 'employer3', 'ct5', 'Creating a Standardized Markup Language for Semantic Networks', '<div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">\r\n                <h4>Job Responsibilities</h4>\r\n                <ul><li>Provide the lead on completing M&E related \r\ndocuments, plans, reports in support of the PMâ€™s deadlines & \r\ndeliverables to authorities.</li><li>Provideents, plans, reports in support of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the lead on completing M&Eupport of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the the PMâ€™s deadlines & deliverables to authorities.</li></ul>\r\n              </div>\r\n\r\n              <div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">\r\n                <h4>Job Requirements</h4>\r\n                <ul><li>Provide the lead on completing M&E related \r\ndocuments, plans, reports in support of the PMâ€™s deadlines & \r\ndeliverables to authorities.</li><li>Provideents, plans, reports in support of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the lead on completing M&Eupport of the PMâ€™s deadlines & deliverables to authorities.</li><li>Provide the the PMâ€™s deadlines & deliverables to authorities.</li></ul>\r\n              </div>', '40000', ' Chittagong Rajshahi Khulna Rangpur', 'square@gmail.com', 1, '2017-07-20 08:26:25', '2017-10-07 10:30:52', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
