-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 12:47 PM
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
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(11) NOT NULL,
  `entrance` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `locala` text DEFAULT NULL,
  `pin` int(11) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `copyAddress` varchar(3) DEFAULT NULL,
  `permanenta` text DEFAULT NULL,
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
  `file_path` varchar(255) DEFAULT NULL,
  `fileqr_name` varchar(255) NOT NULL,
  `fileqr_path` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `entrance`, `name`, `dob`, `father`, `locala`, `pin`, `phoneno`, `email`, `mobile`, `copyAddress`, `permanenta`, `pinp`, `phonenop`, `workingprof`, `residential`, `city`, `medium`, `category`, `residentialfac`, `optional_subject`, `ma_msc_mcom_board`, `ma_msc_mcom_year`, `ma_msc_mcom_subjects`, `ma_msc_mcom_percentage`, `ba_bsc_board`, `ba_bsc_year`, `ba_bsc_subject`, `ba_bsc_percentage`, `interboard`, `interyear`, `intersubject`, `interpercentage`, `higherborad`, `higheryear`, `highersubject`, `higherpercentage`, `otherboard`, `othersyear`, `othersubject`, `otherpercentage`, `comonename`, `comoneyear`, `comoneroll`, `comoneresult`, `comtwoname`, `comtwoyear`, `comtworoll`, `comtworesult`, `comthrname`, `comthryear`, `comthrroll`, `comthrresult`, `comfourname`, `comfouryear`, `comfourroll`, `comfourresult`, `comfifname`, `comfifyear`, `comfifroll`, `comfifresult`, `file_name`, `file_path`, `fileqr_name`, `fileqr_path`) VALUES
(1, 'resbatch', 'saikishor Rasala', '2023-10-16', 'Srinivasulu Rasala', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 411036, '08275727629', 'saikishorrasala418@gmail.com', '08275727629', 'on', 'Sr. No54, Om Society, BT Kawade Rd, Near Adarsh High School, Pune -36', 411036, '08275727629', 'yes', 'yes', 'pune', 'english', 'minority', 'yes', 'dfghdf', 'jk', 8776, 'hgc', '76.00', 'bv', 76, 'jyf', '76.00', 'gh', 76, 'hg', '76.00', 'hg', 76, 'gh', '76.00', 'bvg', 76, 'gn', '76.00', 'hg', 7676, '76', 76, 'gh', 76, '76', 78, 'bh', 76, '76', 76, 'b', 76, '76', 78, 'bn', 7, '76', 76, 'MANAGEMENQ SELECTION LIST (1).pdf', 'uploads/doc/652d16b586400_MANAGEMENQ SELECTION LIST (1).pdf', 'selection list.pdf', 'uploads/payment/652d16b586eae_selection list.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', '', '$2y$10$BIaEKoUQJg6khi/kUtt7N.RxgsbsrPUn1KIXmEM.JZkpRgeGt7h3i', '2023-10-13 10:25:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
