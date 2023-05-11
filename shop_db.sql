-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 06:03 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `quantity` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_vila`
--

CREATE TABLE `detail_vila` (
  `id` int(11) NOT NULL,
  `nama_vila` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_vila`
--

INSERT INTO `detail_vila` (`id`, `nama_vila`, `kota`, `deskripsi`) VALUES
(1, 'bandung villa', 'bandung', 'harga:100000'),
(2, 'Solo vila', 'Solo', 'Harga:150000'),
(3, 'jakarta vila', 'jakarta', 'harga: 900000'),
(4, 'solo trip', 'solo', 'taman yg luas'),
(5, 'bali vila', 'bali', 'harga 260000'),
(6, 'vila dea', 'dea', 'dea punya nya rayah'),
(9, 'pink vila', 'tgr', 'fasilitas:gym');

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

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 11, 'user 1', 'user@gmail.com', '08123456789', 'GOOD JOB TEAM');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `check_in` date NOT NULL,
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
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `user_id`, `check_in`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(0, 8, '2014-11-24', 'noviana ramadhani', '089608575325', 'novianarahmadani3@gmail.com', 'cash on delivery', 'flat no. 111, 11, Samarinda, Indonesia - 75119', ', bandung villa (4) , good (2) ', 7132, '05-May-2023', 'completed'),
(0, 8, '2024-11-23', 'noviana ramadhani', '089608575325', 'novianarahmadani3@gmail.com', 'cash on delivery', 'flat no. 5555, 444, Samarinda, Indonesia - 75119', ', good (2) ', 2688, '05-May-2023', 'completed'),
(0, 8, '2010-02-11', 'noviana ramadhani', '089608575325', 'novianarahmadani3@gmail.com', 'cash on delivery', 'flat no. 5555, 5555, Samarinda, Indonesia - 75119', ', bandung villa (4) ', 4444, '08-May-2023', 'completed'),
(0, 8, '2019-10-12', 'noviana ramadhani', '089608575325', 'novianarahmadani3@gmail.com', 'cash on delivery', 'flat no. 222, 333, Samarinda, Indonesia - 75119', ', bandung villa (2) ', 2222, '08-May-2023', 'completed'),
(0, 8, '2020-11-24', 'noviana ramadhani', '089608575325', 'novianarahmadani3@gmail.com', 'paypal', 'flat no. 6666, 6666, Samarinda, Indonesia - 75119', ', bandung villa (2) , good (2) ', 4910, '10-May-2023', 'completed'),
(0, 11, '2023-01-15', 'noviana ramadhani', '089608575325', 'novianarahmadani3@gmail.com', 'paytm', 'flat no. 0123, 9010, Samarinda, Indonesia - 8761', ', bandung villa (2) ', 2222, '10-May-2023', 'pending');

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
(5, 'sasa', 'as@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(6, 'admin', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(7, 'kiwi', 'kiwi@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(8, 'oreo', 'oreo@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(9, 'staff', 'staff@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'staff'),
(10, 'nata', 'nata@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(11, 'user', 'user@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(12, 'pisang', 'pisang@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `vila`
--

CREATE TABLE `vila` (
  `id` int(100) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vila`
--

INSERT INTO `vila` (`id`, `id_detail`, `name`, `price`, `image`) VALUES
(16, 1, 'bandung villa', 1111, 'kecil.jpg'),
(17, 2, 'good', 1344, 'resto1 (2).jpg'),
(18, 3, 'jakarta vila', 900000, 'jonathan-borba-Kq2-ig41aEs-unsplash.jpg'),
(19, 4, 'novi vila', 1234, 'price.jpg'),
(20, 5, 'awang vila', 1234, 'malam.jpg'),
(21, 6, 'smd vila', 50, 'harga.jpg'),
(22, 9, 'pink vila', 50, 'outdoor1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `detail_vila`
--
ALTER TABLE `detail_vila`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vila`
--
ALTER TABLE `vila`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_detail` (`id_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_vila`
--
ALTER TABLE `detail_vila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vila`
--
ALTER TABLE `vila`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vila`
--
ALTER TABLE `vila`
  ADD CONSTRAINT `vila_ibfk_1` FOREIGN KEY (`id_detail`) REFERENCES `detail_vila` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
