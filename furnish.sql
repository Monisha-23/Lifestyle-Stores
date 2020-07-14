-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 29, 2020 at 06:14 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furnish`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`) VALUES
(1, 'Yoshika leather Queen size teak wood Bed', 19000),
(2, 'Raliegh Single Bed In Provincial Teak ', 28000),
(3, 'DES Moines Extendable Solid Wood king size Single Bed ', 36000),
(4, 'Office Sofa couch Leather Columbia 3 Seater', 18000),
(5, 'Furny levize Fabric 3 Seater Sofa(grey)', 9800),
(6, 'Woodcasa Urbanway 6 Seater LHS L Shape Sofa  Fabric ', 26700),
(7, 'Divine Arts Sheesham Wood study Table', 11500),
(8, 'Contemporary wooden chest', 15400),
(9, 'Coffee table with bottom shelf', 6600),
(10, 'Divine Wood Coffee Table ', 13000),
(11, 'Zane solid wooden study table', 9800),
(12, 'Outdoor Patio Hanging Chair  Egg Swing', 2200),
(13, 'Wicker bar set with cusioned chairs ', 26000),
(14, 'Antique Wooden 2 Chair And 1 Table Set ', 29000),
(15, 'Metalic wall Flower Pot Stand', 1850),
(16, 'Cotton Ball and hangings String ', 2900),
(17, 'Patio Chairs  Table Iron  Set', 12600);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'mixy', 'mixy@abc.com', 'shin123', 2147483647, '', ''),
(2, 'doremi', 'dora123@abc.com', 'dora@34', 2147483647, '', ''),
(3, 'vivek', 'viky@abc.com', 'da56564d5cf2cc48dbc8a800571dc21c', 2147483647, 'delhi', 'h no-10/23/A;valley road; post office street;delhi'),
(4, 'monik', 'moni@abc.com', 'bd9c94b277663cd8cb3e00ca55ecffab', 2147483647, 'vizag', 'd no- 8-11-42 ;  viziag'),
(5, 'shree', 'sri@abc.com', 'bf390e8f803fd7c1c853535f7afe7e3d', 2147483647, 'madras', 'chennai'),
(6, 'subha', 'subha237@xyz.com', '0838ecfb969d782bae32f24d02057e26', 2147483647, 'goa', 'goa'),
(7, 'rama', 'rama@abc.com', '412a13c6565066215970c80bf5185abf', 2147483647, 'bangalore', 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Buy the product','Added to cart','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(9, 6, 2, 'Added to cart'),
(10, 6, 7, 'Added to cart'),
(12, 7, 8, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
