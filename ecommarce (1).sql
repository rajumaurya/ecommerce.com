-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2021 at 03:26 PM
-- Server version: 10.4.10-MariaDB
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
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `status` int(10) NOT NULL,
  `users` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `email`, `password`, `phone`, `status`, `users`) VALUES
(1, 'rajumaurya@gmail.com', '454545', 8004895247, 1, '1'),
(5, 'rajan@gmail.com', '12345', 86356545, 1, '2'),
(9, 'rajumaurya8081@gmail.com', '12345', 86356545, 1, '2'),
(10, 'ravikumar@gmail.com', '121212', 86356545, 1, '2'),
(11, 'shivam83@gmail.com', '12345', 3, 1, ''),
(12, 'rajukumar', '12345', 95555545412, 1, ''),
(13, 'jitendra@gmail.com', '454545', 123458754, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

DROP TABLE IF EXISTS `bill_details`;
CREATE TABLE IF NOT EXISTS `bill_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `appartment` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `postcode` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `user_id`, `first_name`, `last_name`, `company_name`, `email`, `country`, `phone`, `address`, `appartment`, `city`, `district`, `postcode`) VALUES
(1, 0, 'raju', 'maurya', 'techpro', 'rajumaurya180@gmail.com', 'India', 12340, 'Address*ffre', 'e-23', 'Greater Noida', 'delhi', 1223);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_name`, `image`, `price`, `quantity`) VALUES
(1, 2, 'test', 'raju.jpg', 1200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `title`, `image`, `fname`, `lname`) VALUES
(1, 'dsdsd', 'e8ee93bee8df2b829667cb56470dbc44.png', '', ''),
(2, 'dsdsd', '781240f2cecfd9834ca81eba01fd36d5.png', '', ''),
(3, 'dsdsd', '2060f57e7ab1785d23713644df02ec6f.png', 'ytyty', 'tytytyt');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `disc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemName`, `category`, `subcategory`, `disc`, `image`, `price`, `status`) VALUES
(25, 'shirt', 'watch', 'man', 'this is a radio watch', '17e304e6c4b5982b8645e78da3e30843.jpg', 300, 1),
(26, 'shirt', 'watch', 'watch', 'this is a radio watch', '8a362d4b8417e0fc41c737056a1589a0.jpg', 344, 1),
(27, 'wewe', 'man', 'Jbl', 'this is a radio mobile', 'cdd23f502ce42c838c6c71b1629ebcaa.jpg', 399, 1),
(28, 'wewe', 'watch', 'man', 'this is a radio watch', '89dc4efd9407ef7aeb06f9572f47b597.jpg', 245, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('SuperAdmin','Admin','Cashier') COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `role`, `active`, `created_at`, `updated_at`) VALUES
(1, 'super', '$2y$10$Zy1XTuyhK3zxTdkkmFicmOXpIEtRpwzoNTZPuna/L9i08C/Bp8aCC', 'jIBUnp0EqNvwdi9J5Oi5Za8gfGmBM5cHZMWbe93q2BlJKQL5keFsC0bZDNeZ', 'SuperAdmin', 1, '2016-03-03 10:18:30', '2017-11-22 13:39:52'),
(2, 'admin', '$2y$10$OzvezM1JTpSyLjBnuxueg.NC9yDNovAGWSi1FFw6yZczE5y6tMpfO', 'lNexlCBz1wVbcr1B52WKSLGRXADPJc75KTCnnjFXw4CQ9PMrWOGA6TfRhgNc', 'Admin', 1, '2016-06-04 11:24:02', '2017-11-24 00:43:43'),
(3, 'cashier', '$2y$10$RGlUQWowwJ8ZCNcll9ByN.rvjp2ZN7HRMonM6wrF5T2ubIXLK8Sh.', 'hJ9dHn4AAWfARYFjEhAyPbHQeqiuG0GQ5g2WXSIv7eluCa7FCiCteMFcWyaT', 'Cashier', 1, '2016-06-04 11:24:02', '2017-11-24 00:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

DROP TABLE IF EXISTS `user_order`;
CREATE TABLE IF NOT EXISTS `user_order` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `quantity` int(225) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`product_id`, `product_name`, `price`, `quantity`) VALUES
(1, 'cloths', '400', 1),
(2, 'cloths', '400', 1),
(3, 'cloths', '400', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(30) NOT NULL,
  `products` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `products`, `price`, `stock_status`, `image`) VALUES
(1, 5, 'gucci', 1200, 'out of stock', 'not upload');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
