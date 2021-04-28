-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 09:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Patient_ID` int(20) NOT NULL,
  `Patient_Name` varchar(20) NOT NULL,
  `Day` varchar(20) NOT NULL,
  `Going_To` varchar(20) NOT NULL,
  `Date_to_go` varchar(20) NOT NULL,
  `Return_Date` varchar(20) NOT NULL,
  `Journey_Time` varchar(20) NOT NULL,
  `Return_Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Patient_ID`, `Patient_Name`, `Day`, `Going_To`, `Date_to_go`, `Return_Date`, `Journey_Time`, `Return_Time`) VALUES
(2, 'ifsan', 'Saturday', 'Sunday', '22/03/2020', '33/43/333', '44:33:444', '33:44:556'),
(5, 'r', 'Dhaka', 'CoxsBazar', '22/03/20204r4r66yuy', '33/43/334r44r66yuu', '44:33:6666yuu', '33:44:554r4r666yuyu'),
(55, 'ifsan', 'Saturday', 'Sunday', '33/33/44', '22/33/33', '33:65:66', '88:77:33'),
(4444, 'tanvir', 'Saturday', 'Sunday', '22/03/2022', '33/43/33', '44:33:44', '33:44:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Patient_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
