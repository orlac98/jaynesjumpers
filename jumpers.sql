-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2020 at 12:24 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jumpers`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Clothing'),
(2, 'Blankets'),
(3, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `shop_order`
--

DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE IF NOT EXISTS `shop_order` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL,
  `payment_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_order_item`
--

DROP TABLE IF EXISTS `shop_order_item`;
CREATE TABLE IF NOT EXISTS `shop_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_payment`
--

DROP TABLE IF EXISTS `shop_payment`;
CREATE TABLE IF NOT EXISTS `shop_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

DROP TABLE IF EXISTS `shop_products`;
CREATE TABLE IF NOT EXISTS `shop_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` text NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_price` int(11) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `product_name`, `product_desc`, `product_code`, `product_image`, `product_price`, `catid`) VALUES
(1, 'Pink Jumper', 'Kitted pink jumper', '1', 'pinkjumper.jpg', 15, 1),
(2, 'Purple Jumper', 'Kitted purple jumper', '2', 'purplejumper.jpg', 15, 1),
(3, 'Halterneck Top', 'Crocheted halter neck top', '3', 'halterneck.jpg', 14, 1),
(4, 'Strapless Top', 'Crocheted strapless top', '4', 'strapless.jpg', 16, 1),
(5, 'Patchwork Blanket', 'Patchework blanket handmade with any colour scheme you want.', '5', 'blanket2.jpg', 25, 2),
(6, 'Knitted Blanket', 'Handmade knitted blanket', '6', 'blanket3.jpg', 20, 2),
(7, 'Bee Blanket', 'Bee themed blanket ', '7', 'bee.jpg', 16, 2),
(8, 'Anniversary Couple', 'Knitted couple for their anniversary with the years.', '8', 'anniversary.jpg', 20, 3),
(9, 'Piglet Doll', 'Hand made piglet doll', '9', 'piglet.jpg', 15, 3),
(10, 'Minnie Mouse Doll', 'Hand knitted minnie mouse doll', '10', 'minnie.jpg', 16, 3),
(11, 'Wedding Couple', 'Hand made Wedding couple', '11', 'wedding.jpg', 20, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
