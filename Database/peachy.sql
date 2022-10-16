-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database: `peachy`


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_alt_image` varchar(255) COLLATE utf8_unicode_ci,
  `item_category` varchar(24) NOT NULL,
  `item_short_description` varchar(255) NOT NULL,
  `item_long_description` longtext NOT NULL,
  `item_size` varchar(24) NOT NULL,
  `item_color` varchar(24) NOT NULL,
  `item_rating` int(11) NOT NULL,
  `item_stock` int(11) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_name`, `item_price`, `item_image`, `item_alt_image`, `item_category`,
`item_short_description`, `item_long_description`, `item_size`, `item_color`, `item_rating`, `item_stock`, `item_register`) VALUES
(1, 'Edna Dress', 600.00, './assets/images/product-images/product-image1.jpg', './assets/images/product-images/product-image1-1.jpg',
 'Women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
 specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
 been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged.', 'S', 'Pink', 4, 52, NOW()),
(2, 'Elastic Waist Dress', 788.00, './assets/images/product-images/product-image2.jpg', './assets/images/product-images/product-image2-1.jpg',
 'Women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
 specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
 been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged.', 'M', 'White', 4, 12, NOW()),
(3, '3/4 Sleeve Kimono Dress', 650.00, './assets/images/product-images/product-image3.jpg', './assets/images/product-images/product-image3-1.jpg',
 'Women', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
 specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
 been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged.', 'L', 'White', 5, 30, NOW()),
(4, 'Zipper Jacket', 800.00, './assets/images/product-images/product-image6.jpg', './assets/images/product-images/product-image6-1.jpg',
 'Men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
 specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
 been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged.', 'L', 'Black', 4, 35, NOW()),
(5, 'Cotton Jacket', 800.00, './assets/images/product-images/product-image7.jpg', './assets/images/product-images/product-image3-1.jpg',
 'Men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
 specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
 been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged.', 'L', 'Black', 5, 18, NOW()),
(6, 'Workers Shirt Jacket', 850.00, './assets/images/product-images/product-image8.jpg', './assets/images/product-images/product-image8-1.jpg',
 'Men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard
 dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
 specimen book.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
 been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type
 and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged.', 'M', 'Black', 4, 30, NOW());




-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Ryanne', 'Kim', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
