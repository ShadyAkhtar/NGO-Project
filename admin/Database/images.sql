-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 04:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `title`, `created`, `modified`, `status`) VALUES
(1, '1597990955476-01.jpeg', 'Neem ', '2020-11-24 17:19:26', '2020-11-24 17:20:29', 1),
(3, '1598862664695-01.jpeg', 'Name It', '2020-11-24 17:28:17', '2020-11-24 17:28:17', 1),
(4, 'IMG_20200207_105938-01.jpeg', 'Decore Ribbon', '2020-11-24 17:28:39', '2020-11-24 17:28:39', 1),
(5, 'IMG_20200516_001400-01.jpeg', 'Infinity', '2020-11-24 17:28:57', '2020-11-24 17:28:57', 1),
(6, 'IMG_20200608_161037 (3)-01.jpeg', 'Mount', '2020-11-24 17:29:18', '2020-11-24 17:29:18', 1),
(7, 'IMG_20200307_151912-01.jpeg', 'Chai', '2020-11-24 17:29:32', '2020-11-24 17:29:32', 1),
(8, 'IMG_20200213_075622-01.jpeg', 'Bandra Skyline', '2020-11-24 17:29:52', '2020-11-24 17:29:52', 1),
(9, 'IMG_20200228_163249-01.jpeg', 'Mumbai Local', '2020-11-24 17:30:09', '2020-11-24 17:30:09', 1),
(10, 'IMG_20200201_165047.jpg', 'Good day', '2020-11-24 17:30:48', '2020-11-24 17:30:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
