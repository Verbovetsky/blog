-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2016 at 05:44 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(2024) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `json` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `json`) VALUES
(71, 'jQuery is a JavaScript library to simplify common web scripting task.', 'jQuery tutorials will help you to learn the essential features of the latest jQuery framework, from the basic to advanced topics step-by-step, so that you can create interactive and stunning web pages yourself with much less effort.\r\n\r\nTutorials are broken down into sections where each section containing a number of related topics that are packed with easy to understand explanations, real-life practice examples, smart workarounds as well as useful tips and important notes.\r\n\r\nYou can save a lot of time and efforts with jQuery — So bookmark this website and continue on.\r\n\r\nIf you''re completely new to the jQuery we recommend you to start with the section that covers jQuery basics and gradually move forward, by learning a little bit every day.', '2016-12-05', ''),
(72, 'PHP Tutorial', 'PHP tutorials will help you to learn the nuts and bolts of the most popular and widely-used server side scripting language PHP, from the fundamentals to advanced topics, so that you can make dynamic and robust websites yourself.\r\n\r\nTutorials are broken down into sections where each section containing a number of related topics that are packed with easy to understand explanations, real-world examples, smart workarounds as well as useful tips and important notes.\r\n\r\nPHP is very powerful and scalable language yet easy to learn and use — So bookmark this website and continued on.', '2016-12-05', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
