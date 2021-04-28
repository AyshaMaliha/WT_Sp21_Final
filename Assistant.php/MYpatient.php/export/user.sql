-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 09:58 PM
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
-- Database: `patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Date_Of_Birth` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Username`, `Password`, `Email`, `Phone_Number`, `Address`, `Gender`, `Date_Of_Birth`) VALUES
(66, 'dhakacxcxcx', 'ifsanddddTT', '12345678', 'fahimmahtab.ifsan@gm', '776565445454545', 'comilla', 'Male', ''),
(555, 'ifsan', 'fahim', '12345678', 'tanvir@gmail.com', '87654987654', 'kandirpar comilla', 'Male', '05/04/1997'),
(5555, 'afsana kabir lisa', 'afsan kabir', '98765432', 'afsanakabirlisa@gmai', '01752766977', 'racecourse,comilla', 'Female', '14/06/1995'),
(7777, 'fahim mahtab ifsan', 'ifsan', '12345678', 'ifsan@gmail.com', '01752766977', 'dhaka', 'Male', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1223676777;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
