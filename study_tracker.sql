-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2024 at 11:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `content` char(100) DEFAULT NULL,
  `confidence_level` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `content`, `confidence_level`) VALUES
(20, 'Тема №1', 'very_high'),
(21, 'Тема №2', 'very_high'),
(22, 'Тема №3', 'very_high'),
(23, 'Тема №4', 'very_high'),
(24, 'Тема №5', 'high'),
(25, 'Тема №6', 'high'),
(26, 'Тема №7', 'high'),
(27, 'Тема №8', 'very_high'),
(28, 'Тема №9', 'very_high'),
(29, 'Тема №10', 'low'),
(30, 'Тема №11', 'high'),
(31, 'Тема №12', 'medium'),
(32, 'Тема №13', 'medium'),
(33, 'Тема №14', 'very_high'),
(34, 'Тема №15', 'high'),
(35, 'Тема №16', 'medium'),
(36, 'Тема №17', 'high'),
(37, 'Тема №18', 'very_high');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
