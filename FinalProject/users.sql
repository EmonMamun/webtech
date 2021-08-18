-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 03:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Birth_date` int(2) NOT NULL,
  `Birth_month` int(2) NOT NULL,
  `Birth_year` int(4) NOT NULL,
  `User_type` varchar(10) NOT NULL,
  `Dept` varchar(10) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Username`, `Password`, `Gender`, `Birth_date`, `Birth_month`, `Birth_year`, `User_type`, `Dept`, `ID`, `Photo`) VALUES
('Emon MAmun', 'ankursaha@gmail.com', 'Ankur', '12345678@', 'Male', 30, 12, 2000, 'Student', 'BBA', '18379132', 'MyPic.jpg'),
('Ehsanul Soron', 'soron@gmail.com', 'Emon', '12345678@', 'Male', 3, 5, 1996, '', 'CSE', '001234', 'IMG_20180731_165630.jpg'),
('Emon Al Mamun', 'jim@gmail.com', 'Alex', '12345678@', 'Female', 14, 1, 1996, '', 'BBA', '12345', 'DSC_0023.JPG'),
('Admin Admin', 'admin@yahoo.com', 'admin', '1234567@', 'Male', 20, 10, 1980, 'Admin', '', '3366', 'DSC_0050.JPG'),
('Admin Admin', 'admin@yahoo.com', 'admin', '1234567@', 'Male', 20, 10, 1980, 'Admin', '', '3366', 'DSC_0050.JPG'),
('David Hesell', 'hasell@gmail.com', 'daniel', '12345678@', 'Male', 2, 2, 1992, 'Alumni', 'EEE', '200012', '20180731_164517.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
