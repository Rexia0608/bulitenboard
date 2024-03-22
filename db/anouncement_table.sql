-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2024 at 06:00 AM
-- Server version: 8.0.36
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anouncement_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `anouncement_table`
--

DROP TABLE IF EXISTS `anouncement_table`;
CREATE TABLE IF NOT EXISTS `anouncement_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anouncement_table`
--

INSERT INTO `anouncement_table` (`id`, `subject`, `details`, `created_at`) VALUES
(1, 'quick huddle session ', 'important things will be discuss kindly attend on blah blah..', '2024-03-14 13:47:29'),
(2, 'asdasdasd', 'asdasdasdasd', '2024-03-14 13:49:50'),
(3, 'asdasdasdasdasd', 'asdasdasdasd213131123123', '2024-03-14 13:52:06'),
(4, 'sadasdasdasd', '123123asdasdasdasdasdasdasdasd', '2024-03-14 13:52:48'),
(5, 'hello world', 'hellow world ', '2024-03-14 13:53:20'),
(6, 'zxczxczxczxc', 'asdasdzxczxcasdaszxczxczxc', '2024-03-14 13:55:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
