-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paiias`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `father` varchar(255) NOT NULL,
  `local_address` text NOT NULL,
  `pin1` varchar(10) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `copy_address` tinyint(4) NOT NULL,
  `permanent_address` text NOT NULL,
  `pin2` varchar(10) NOT NULL,
  `phonenop` varchar(15) DEFAULT NULL,
  `medium` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `optional_subject` varchar(255) DEFAULT NULL,
  `ma_msc_mcom_board` varchar(255) DEFAULT NULL,
  `ma_msc_mcom_year` int(11) DEFAULT NULL,
  `ma_msc_mcom_subjects` varchar(255) DEFAULT NULL,
  `ma_msc_mcom_percentage` decimal(5,2) DEFAULT NULL,
  `ba_bsc_bcom_eng_board` varchar(255) DEFAULT NULL,
  `ba_bsc_bcom_eng_year` int(11) DEFAULT NULL,
  `ba_bsc_bcom_eng_subjects` varchar(255) DEFAULT NULL,
  `ba_bsc_bcom_eng_percentage` decimal(5,2) DEFAULT NULL,
  `intermediate_board` varchar(255) DEFAULT NULL,
  `intermediate_year` int(11) DEFAULT NULL,
  `intermediate_subjects` varchar(255) DEFAULT NULL,
  `intermediate_percentage` decimal(5,2) DEFAULT NULL,
  `matric_board` varchar(255) DEFAULT NULL,
  `matric_year` int(11) DEFAULT NULL,
  `matric_subjects` varchar(255) DEFAULT NULL,
  `matric_percentage` decimal(5,2) DEFAULT NULL,
  `others_board` varchar(255) DEFAULT NULL,
  `others_year` int(11) DEFAULT NULL,
  `others_subjects` varchar(255) DEFAULT NULL,
  `others_percentage` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_application` (`user_id`);

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
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `fk_user_application` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
