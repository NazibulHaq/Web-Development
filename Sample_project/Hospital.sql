-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 06:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_Info`
--

CREATE TABLE `appointment_Info` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `doctors_name` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_Info`
--

INSERT INTO `appointment_Info` (`id`, `name`, `doctors_name`, `appointment_date`, `appointment_time`) VALUES
(1, 'Nazibul', 'Haq', '2021-01-05', '10:00:00'),
(2, 'sami', 'Haturi', '2021-01-06', '12:00:00'),
(3, 'Din', 'Duniya', '2021-01-05', '18:00:00'),
(4, 'Nazibul Haq', 'some one good', '2021-01-02', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Receptionist`
--

CREATE TABLE `Receptionist` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Receptionist`
--

INSERT INTO `Receptionist` (`name`, `email`, `password`, `number`) VALUES
('Haq', 'H@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `mobile`, `create_datetime`) VALUES
(1, 'Haq', 'Anything@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '2020-11-23 23:23:16'),
(5, 'user', 'nazibulhaq0@gmail.com', '789', 0, '2020-11-24 06:41:10'),
(6, 'testuser', 'Anything@gmail.com', '456', 0, '2020-11-24 06:48:44'),
(9, 'Shitoke', 'nazibul429@gmail.com', '321', 0, '2020-11-24 10:39:16'),
(10, 'Shitoke', 'nazibul429@gmail.com', '987', 0, '2020-11-24 13:38:44'),
(11, '', '', '', 0, '2020-11-24 13:56:33'),
(12, '', '', '', 0, '2020-11-24 14:07:05'),
(13, 'user', 'Anything@gmail.com', '456', 0, '2020-11-24 14:16:24'),
(19, 'testuser', 'Anything@gmail.com', '1234', 0, '2020-12-01 06:31:08'),
(20, 'testuser', 'Anything@gmail.com', '123', 0, '2020-12-13 07:29:30'),
(21, '', '', '', 0, '2020-12-13 07:38:54'),
(22, '', '', '', 0, '2020-12-13 07:42:09'),
(23, 'doyal baba', 'baba420@gmail.com', '420', 0, '2020-12-30 18:18:49'),
(24, '566', ';kjbkj', 'hbj', 0, '2021-01-01 08:50:49'),
(25, '566', 'jhj', 'b', 0, '2021-01-01 08:51:39'),
(26, '66', '66', '66', 0, '2021-01-01 08:55:55'),
(27, '66', '+6', '6+', 0, '2021-01-01 08:56:55'),
(28, 'Alif', 'Alif@gmail.com', '564', 1521493347, '2021-01-03 07:32:29'),
(29, 'sami', 'nazibul42923@gmail.com', '789', 1521493347, '2021-01-04 07:52:49'),
(30, 'Sami', 'sami@gmail.com', '789', 1521493347, '2021-01-04 08:04:20'),
(31, 'Nazibul', 'nazibul42923@gmail.com', '789', 1521493347, '2021-01-04 23:22:10'),
(32, 'Nazibul Haq', 'nazibul42923@gmail.com', '456', 1521493347, '2021-01-04 23:32:47'),
(33, 'Nazibul', 'nazibul42923@gmail.com', '789', 1521493347, '2021-01-05 05:09:48'),
(34, 'Nazibul', 'nazibul.haq@aiesec.net', '456', 1521493347, '2021-01-05 14:30:56'),
(35, 'farhan', 'farhan@gmail.com', '456', 1521493347, '2021-02-16 16:40:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_Info`
--
ALTER TABLE `appointment_Info`
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
-- AUTO_INCREMENT for table `appointment_Info`
--
ALTER TABLE `appointment_Info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
