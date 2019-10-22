-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 07:08 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe_dahlia`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(100) NOT NULL,
  `menuname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menuname`, `price`) VALUES
(1, 'set_A', '5.50'),
(2, 'set_B', '5.50'),
(3, 'set_C', '5.00'),
(4, 'set_D', '5.00'),
(5, 'set_E', '10.00'),
(6, 'set_F', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `orderform`
--

CREATE TABLE `orderform` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `set_A` varchar(100) NOT NULL,
  `set_B` varchar(100) NOT NULL,
  `set_C` varchar(100) NOT NULL,
  `set_D` varchar(100) NOT NULL,
  `set_E` varchar(100) NOT NULL,
  `set_F` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(50) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `reply` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'NOT SERVED YET'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'user',
  `Name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `Name`, `username`, `email`, `phone`, `address`, `password`) VALUES
(9, 'user', 'Ferdous', 'Ferdous', 'f@gmail.com', '0118791234', 'Unigarden', 'f123'),
(12, 'admin', 'Mehedi', 'Mehedi', 'm@gmail.com', '0123456789', 'Unigarden Kota samarahan', 'm123'),
(14, 'user', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderform`
--
ALTER TABLE `orderform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orderform`
--
ALTER TABLE `orderform`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
