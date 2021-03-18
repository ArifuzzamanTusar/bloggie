-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 06:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggie`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `avater_image` varchar(300) NOT NULL,
  `bio` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `firstname`, `lastname`, `gender`, `email`, `phone`, `avater_image`, `bio`, `city`, `nid`, `company`, `position`, `password`, `status`, `date`) VALUES
(1001, 'John', 'Doe', '', 'user@bloggie.com', '', '', '', '', '', '', '', '1a1dc91c907325c69271ddf0c944bc72', '', '2021-03-17 18:14:46'),
(1002, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-03-18 13:01:34'),
(1003, '', '', '', '', '', '9093-', '', ', , ', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'pending', '2021-03-18 13:39:57'),
(1004, '', '', '', '', '', '1160-', '', ', , ', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'pending', '2021-03-18 13:40:44'),
(1005, '', '', '', '', '', '6119-', '', ', , ', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'pending', '2021-03-18 13:41:16'),
(1006, '', '', 'Male', '', '', '8544-', '', ', , ', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'pending', '2021-03-18 13:43:57'),
(1007, '', '', 'Female', '', '', '8911-', '', ', , ', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'pending', '2021-03-18 13:44:07'),
(1008, '', '', 'Female', '', '', '4338-', '', ', , ', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'pending', '2021-03-18 13:45:08'),
(1009, 'asd', '', 'Male', 'das@de.de', '213', '9919-1-scaled.jpg', '', ', , ', '23112', '', '', '', 'pending', '2021-03-18 13:47:50'),
(1010, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-03-18 13:50:41'),
(1011, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-03-18 13:51:40'),
(1012, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-03-18 13:51:49'),
(1013, '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-03-18 13:51:58'),
(1014, 'asdasdas', '', 'Male', 'sadd@de.de', '32443', '5213-1-scaled-original.jpg', '', ', , ', '2344', '', '', '4297f44b13955235245b2497399d7a93', 'pending', '2021-03-18 13:55:06'),
(1015, 'Khan', 'Bahaduur', 'Male', 'demo1@bloggie.com', '00545445', '6089-bfd-1 (2).jpg', '', 'hatekha, Rajshahi, Bangladesh', '3246544346565', 'icrofost', 'Jr. software engineer', '1a1dc91c907325c69271ddf0c944bc72', 'pending', '2021-03-18 14:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
