-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 13, 2025 at 05:20 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int NOT NULL,
  `description` text,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `sku` (`sku`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`tid`, `item_name`, `sku`, `price`, `stock`, `description`) VALUES
(1, 'Item 10', 'ITEM1', 500.00, 12, 'first item'),
(2, 'Cup', 'ITEM2', 200.00, 15, 'another item'),
(3, 'Jar', 'ITEM3', 250.00, 10, 'just another item');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_role` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `full_name`, `email`, `username`, `u_password`, `u_role`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin', 1, '2025-05-12 20:41:07'),
(2, 'manager', 'manager@gmail.com', 'manager', 'manager', 2, '2025-05-12 20:41:29'),
(3, 'sales man', 'sales@gmail.com', 'sales', 'sales', 3, '2025-05-12 20:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `tid` int NOT NULL AUTO_INCREMENT,
  `type_name` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`tid`, `type_name`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Sales Man');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
