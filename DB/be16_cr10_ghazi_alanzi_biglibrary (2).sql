-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 02:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be16_cr10_ghazi_alanzi_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be16_cr10_ghazi_alanzi_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be16_cr10_ghazi_alanzi_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `biglibrary`
--

CREATE TABLE `biglibrary` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `ISBN_code` varchar(50) DEFAULT NULL,
  `short_description` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `author_first_name` varchar(50) DEFAULT NULL,
  `author_last_name` varchar(50) DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `publisher_address` varchar(150) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biglibrary`
--

INSERT INTO `biglibrary` (`id`, `title`, `image`, `ISBN_code`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(1, 'HTML5', ' ', 'A245008', '', 'dvd', 'hans', 'ham', 'CBO', 'street moon 100', '2012-12-03', 'available '),
(2, 'js', 'javascript.png', 'A245008', 'front_end develober', 'dvd', 'sarah', 'ham', 'TRT', 'street black 333', '2011-12-03', 'reseved'),
(3, 'HTML5', 'html.jpg', 'A245008', 'front_end develober', 'cd', 'hans', 'ham', 'TRT', 'street moon 100', '2020-05-03', 'available'),
(4, 'angular', 'angular.jpg', 'A245008', 'front_end develober', 'dvd', 'stev', 'ham', 'TRT', 'street sun 200', '2011-05-03', 'available'),
(5, 'veu', 'vue_js.jpg', 'A245008', 'front_end develober', 'book', 'hans', 'ham', 'TRT', 'street moon 100', '2012-05-03', 'available'),
(6, 'node', 'node_js.webp', 'A245008', 'front_end develober', 'dvd', 'jo', 'moon', 'TRR', 'street moon 200', '2010-05-08', 'reseved'),
(7, 'php', 'php.png', 'A245448', 'front_end develober', 'dvd', 'hans', 'ham', 'TRT', 'street moon 100', '2011-05-03', 'available'),
(8, 'ruby', 'ruby.png', 'A245008', 'front_end develober', 'cd', 'hans', 'ham', 'CBR', 'street moon 100', '2000-05-03', 'available'),
(9, 'mysql', ' mysql.png', 'A245048', '', 'book', 'hans', 'ham', 'TRT', 'street moon 100', '2010-05-03', 'reseved'),
(10, 'mysql', ' mysql.png', 'A245048', '', 'book', 'hans', 'ham', 'TRT', 'street moon 100', '2010-05-03', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biglibrary`
--
ALTER TABLE `biglibrary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biglibrary`
--
ALTER TABLE `biglibrary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
