-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 05:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(28, 3, 'The World Of Abstract Art', 16, 1, 'the_world.jpg'),
(30, 3, 'Holy Ghosts', 11, 1, 'holy_ghosts.jpg'),
(33, 0, 'Holy Ghosts', 15, 1, 'holy_ghosts.jpg'),
(34, 0, 'The World Of Abstract Art', 16, 1, 'the_world.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(12, 2, 'Arivindhaan Yogaraj', '0182991402', 'arivindhaan@gmail.com', 'cash on delivery', 'flat no. 3, KKHB, SEREMBAN, Malaysia - 70300', ', The World Of Abstract Art (1) ', 12, '', 'completed'),
(17, 3, 'Trishan Raj', '555555555555', 'trishan.neymar@gmail.com', 'cash on delivery', 'flat no. 55555555555555555, 555555555, 555555555555, 55555555555555555 - 5555555555555555', ', Holy Ghosts (1) ', 15, '05-04-22 01:24:55', 'pending'),
(19, 0, 'S/SJN RONALD', '123456789', 'mrinaaselva@gmail.com', 'paypal', 'flat no. 123456789, 121, 123456789, MALAYSIA - 70300', ', Holy Ghosts (1) ', 15, '05-04-22 06:55:30', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `mem_price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `mem_price`, `image`, `Genre`, `description`) VALUES
(2, 'The World Of Abstract Art', 16, 12, 'the_world.jpg', 'Action', 'Red Queen is a young adult fantasy novel written by American writer Victoria Aveyard. Published in February 2015, it was her first novel and first series. Aveyard followed up with three sequels: Glass Sword, King\'s Cage and War Storm. Red Queen tells the story of Mare Barrow, a 17 year old girl who lives in a world where status depends on the colour of your blood. Those with red blood are commoners yet those with silver are royals who possess special powers.'),
(3, 'Holy Ghosts', 15, 11, 'holy_ghosts.jpg', 'Historical', ''),
(4, 'Clever Lands', 22, 17, 'clever_lands.jpg', '', ''),
(5, 'Night Shade', 17, 13, 'nightshade.jpg', '', ''),
(6, 'Principal of Agricultural Economics', 36, 29, 'economic.jpg', '', ''),
(7, 'Red Queen', 9, 7, 'red_queen.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'Arivindhaan', 'kaigehhidupvj@gmail.com', 'f4016f7d42f5009d9489e1e0a35d1cac', 'user'),
(3, 'Trishan Raj', 'trishan.neymar@gmail.com', 'd93c00e024e307b9eaf6311243c90fe2', 'user'),
(5, 'Admin', 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
