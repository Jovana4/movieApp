-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2021 at 10:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ganre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` year(4) DEFAULT NULL,
  `producer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `ganre`, `year`, `producer`, `created_at`, `updated_at`) VALUES
(1, 'The Notebook', 'Drama, Romance', 2004, 'Nick Cassavetes', NULL, NULL),
(2, 'Avatar', 'Action, Adventure, Fantasy ', 2009, 'James Cameron', NULL, NULL),
(3, 'Wonder Woman 1984', 'Action, Adventure, Fantasy', 2020, 'Patty Jenkins', NULL, NULL),
(4, 'filmm', 'zanrr', 2000, 'producent', NULL, NULL),
(41, 'Titanik', 'Action', 1999, 'Pera Markovic', NULL, NULL),
(42, 'Titanik', 'Action', 1996, 'Pera Peric', NULL, NULL),
(43, 'Titanik', 'Action', 1996, 'Pera Peric', NULL, NULL),
(44, 'Titanik', 'Action', 1996, 'Pera Peric', NULL, NULL),
(45, 'Titanik', 'Action', 1996, 'Pera Peric', NULL, NULL),
(46, 'Titanik', 'Action', 1997, 'Pera Peric', NULL, NULL),
(47, 'Titanik', 'Action', 1997, 'Pera Peric', NULL, NULL),
(48, 'Titanik', 'Action', 1997, 'Pera Peric', '2021-04-25 20:04:03', '2021-04-25 20:04:03'),
(49, 'Titanik', 'Action', 1999, 'Pera Markovic', '2021-04-25 20:04:18', '2021-04-25 20:04:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
