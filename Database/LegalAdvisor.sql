-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 09:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer_directory`
--

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `bar_registration` varchar(255) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `experience` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `consultation_fee` decimal(10,2) DEFAULT NULL,
  `hourly_rate` decimal(10,2) DEFAULT NULL,
  `bio` text,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `full_name`, `bar_registration`, `specialization`, `experience`, `city`, `state`, `email`, `phone`, `consultation_fee`, `hourly_rate`, `bio`, `profile_picture`, `created_at`) VALUES
(3, 'Nai Aryan', '76786786', 'Criminal Law', 5, 'ahmedabad', 'Gujarat', 'scacas@gmail.com', '6484894854', '510000.00', '1000.00', 'ewhuehwiughuew', '', '2025-02-16 07:54:44'),
(4, 'ansh meghani', '5544545454', 'Criminal Law', 5, 'ahmedabad', 'Gujarat', '1248@sbcsrbox.com', '6484894857', '10000000.00', '1000.00', 'efhuewhuewhuew', '', '2025-02-16 08:13:16'),
(5, 'kartik', '4645465484', 'Civil Rights', 4, 'surat', 'gujarat', 'hixav73307@daypey.com', '6445454545', '10000000.00', '11111.00', 'fdndfndfndfn', '', '2025-02-16 08:15:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bar_registration` (`bar_registration`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
