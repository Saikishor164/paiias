-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2023 at 10:54 PM
-- Server version: 5.6.51
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paiias_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(11) NOT NULL,
  `entrance` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `locala` text,
  `pin` int(11) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `copyAddress` varchar(3) DEFAULT NULL,
  `permanenta` text,
  `pinp` int(11) DEFAULT NULL,
  `phonenop` varchar(15) DEFAULT NULL,
  `workingprof` varchar(3) DEFAULT NULL,
  `residential` varchar(3) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `medium` varchar(10) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL,
  `residentialfac` varchar(3) DEFAULT NULL,
  `optional_subject` varchar(255) DEFAULT NULL,
  `ma_msc_mcom_board` varchar(255) DEFAULT NULL,
  `ma_msc_mcom_year` int(11) DEFAULT NULL,
  `ma_msc_mcom_subjects` varchar(255) DEFAULT NULL,
  `ma_msc_mcom_percentage` decimal(5,2) DEFAULT NULL,
  `ba_bsc_board` varchar(255) DEFAULT NULL,
  `ba_bsc_year` int(11) DEFAULT NULL,
  `ba_bsc_subject` varchar(255) DEFAULT NULL,
  `ba_bsc_percentage` decimal(5,2) DEFAULT NULL,
  `interboard` varchar(255) DEFAULT NULL,
  `interyear` int(11) DEFAULT NULL,
  `intersubject` varchar(255) DEFAULT NULL,
  `interpercentage` decimal(5,2) DEFAULT NULL,
  `higherborad` varchar(255) DEFAULT NULL,
  `higheryear` int(11) DEFAULT NULL,
  `highersubject` varchar(255) DEFAULT NULL,
  `higherpercentage` decimal(5,2) DEFAULT NULL,
  `otherboard` varchar(255) DEFAULT NULL,
  `othersyear` int(11) DEFAULT NULL,
  `othersubject` varchar(255) DEFAULT NULL,
  `otherpercentage` decimal(5,2) DEFAULT NULL,
  `comonename` varchar(255) DEFAULT NULL,
  `comoneyear` int(11) DEFAULT NULL,
  `comoneroll` varchar(255) DEFAULT NULL,
  `comoneresult` int(11) DEFAULT NULL,
  `comtwoname` varchar(255) DEFAULT NULL,
  `comtwoyear` int(11) DEFAULT NULL,
  `comtworoll` varchar(255) DEFAULT NULL,
  `comtworesult` int(11) DEFAULT NULL,
  `comthrname` varchar(255) DEFAULT NULL,
  `comthryear` int(11) DEFAULT NULL,
  `comthrroll` varchar(255) DEFAULT NULL,
  `comthrresult` int(11) DEFAULT NULL,
  `comfourname` varchar(255) DEFAULT NULL,
  `comfouryear` int(11) DEFAULT NULL,
  `comfourroll` varchar(255) DEFAULT NULL,
  `comfourresult` int(11) DEFAULT NULL,
  `comfifname` varchar(255) DEFAULT NULL,
  `comfifyear` int(11) DEFAULT NULL,
  `comfifroll` varchar(255) DEFAULT NULL,
  `comfifresult` int(11) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `entrance`, `name`, `dob`, `father`, `locala`, `pin`, `phoneno`, `email`, `mobile`, `copyAddress`, `permanenta`, `pinp`, `phonenop`, `workingprof`, `residential`, `city`, `medium`, `category`, `residentialfac`, `optional_subject`, `ma_msc_mcom_board`, `ma_msc_mcom_year`, `ma_msc_mcom_subjects`, `ma_msc_mcom_percentage`, `ba_bsc_board`, `ba_bsc_year`, `ba_bsc_subject`, `ba_bsc_percentage`, `interboard`, `interyear`, `intersubject`, `interpercentage`, `higherborad`, `higheryear`, `highersubject`, `higherpercentage`, `otherboard`, `othersyear`, `othersubject`, `otherpercentage`, `comonename`, `comoneyear`, `comoneroll`, `comoneresult`, `comtwoname`, `comtwoyear`, `comtworoll`, `comtworesult`, `comthrname`, `comthryear`, `comthrroll`, `comthrresult`, `comfourname`, `comfouryear`, `comfourroll`, `comfourresult`, `comfifname`, `comfifyear`, `comfifroll`, `comfifresult`, `file_name`, `file_path`) VALUES
(1, 'jkghkjh', 'ldsjkfhvg', '2023-10-16', ',kgj', 'ghljhlkj', 45645, 'lkjh', 'lkjh', 'lkjh', 'lkj', 'jhljk', 456, 'hkljh', 'klj', 'jl', 'kjhlk', 'jhl', 'kjh', 'lkj', 'lkjg', 'lkjg', 456, 'lkjh', 0.00, 'lkjh', 456, 'lkjh', 0.00, 'klj', 456, 'hkl', 0.00, 'kljh', 456, 'lkjh', 0.00, 'lkjh', 456, 'hl', 0.00, 'kjh', 456, 'klhj', 456, 'lkjh', 456, 'klj', 456, 'h', 456, 'jklg', 546, 'lkjg', 456, 'lkjg', 456, 'kljg', 4546, 'kjg', 6876, NULL, NULL),
(2, 'resbatch', 'saiksihor rasala', '2023-10-10', 'Srinivasulu Rasala', 'Om society ,BT kawade road ,near dalvi Nagar. Pune-36', 411036, '08275727629', 'saikishorrasala418@gmail.com', '08275727629', 'on', 'Om society ,BT kawade road ,near dalvi Nagar. Pune-36', 411036, '08275727629', 'yes', 'yes', 'pune', 'english', '', 'yes', 'dfghdf', 'dsjkrgh', 845, 'jkh', 999.99, 'jkhvbkjhb', 63544, 'kjhvk', 999.99, 'kjh', 63543, 'kjhv', 999.99, 'kjhv', 6354, 'jkvhjkhv', 999.99, 'jhvkj', 6534, 'jhvkjvh', 999.99, 'xdfmvbd', 76, '8756', 8875, 'jhg', 76576, '58765', 8756, 'jhgj', 87658, '57', 5687, 'jgjgf', 7865, '8876', 58, 'jhvmjhg', 7568, '765', 87, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$MhrUMES7cS1Lpk3z7JGe/eo2DKy/bBH6V5L9/WLaOrYyr9PkSxawy', '2023-09-25 21:35:28'),
(3, 'Sana1234', '$2y$10$3xiI3DYeYq0pB2S.JXg4kul.KYq4MLr7w0YyFuERU0kAb7A9WrOr.', '2023-09-25 21:45:24'),
(4, 'Sana793', '$2y$10$gPzmk/qYc9K6JTR/yeWkQ.Hh80FUSliTuoqzv5A5lNC204ojkONDm', '2023-10-06 04:57:20'),
(6, 'patel_aiman30', '$2y$10$7og/r4BlGYzGJRugT91mEuJ6IeMC3R4VaEGDLqOsaBt6MUiawiD8W', '2023-10-10 04:17:07'),
(7, 'wajidsgkd', '$2y$10$.7vlgnDB3abaRpwo3PNbE.mV7TuqYuTlbf4iW.1g8.KX6/lkAOsAu', '2023-10-10 04:29:18'),
(8, 'Sana0704', '$2y$10$u7eIGXQPaFK4F8ROollbO.aOKn42j4nownM2qa8dXgUjx07IwgUBa', '2023-10-10 07:41:33'),
(9, 'fardeenkhan', '$2y$10$/cE3.fqOIUTP20Yn80ZhzuouJ58vO0OBIgfBBzzLp.v0kozLJk8wm', '2023-10-10 10:04:59'),
(10, 'Yahya', '$2y$10$RAo.lxKajAC6lOzQQgzdyuf.VNX/OIxe1bScQKGhbzCuhPy7G9/Du', '2023-10-11 04:15:15'),
(11, 'Irfan', '$2y$10$lrzDNBl0MOXb5.uXrwDJyOzWREZr/SxEU4AlLrFo20OPOzwykYMVi', '2023-10-11 09:01:27'),
(12, 'saikishor', '$2y$10$jK8NJ9w/5cxN4nGROaPzMewfQaT/FQjz5Vy7LE7C6Ygh8WrOd8jqe', '2023-10-11 21:34:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
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
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
