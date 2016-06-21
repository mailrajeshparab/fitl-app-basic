-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2016 at 02:46 PM
-- Server version: 5.7.12
-- PHP Version: 7.0.5-2+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitl`
--
CREATE DATABASE IF NOT EXISTS `fitl` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fitl`;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `code` text,
  `submitted_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `code`, `submitted_at`) VALUES
(1, 'I\'m having trouble displaying a Javascript alert.', 'I think I\'m using the correct function, but I cant\'t figure out what\'s wrong. could you point?', 'alert(This is a message)', '2016-06-21 14:41:55'),
(2, 'My HTML list isn\'t displaying properly.', 'I think I\'m using the write list element, but it\'s not showing up correctly. Any thoughts?', '&lt;ul&gt;\r\n	        item 1\r\n	        item 2 \r\n	        item 3 \r\n	        &lt;/ul&gt;', '2016-06-21 14:41:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `homestead`
--
CREATE DATABASE IF NOT EXISTS `homestead` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `homestead`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
