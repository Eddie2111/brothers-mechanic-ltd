-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 10:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apache`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(35) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(65) NOT NULL,
  `modifiedAt` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `modifiedAt`) VALUES
('admin', 'admin@email.com', 'abcd1234..', '4-9-2023');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNumber` varchar(12) NOT NULL,
  `vehicleType` varchar(12) NOT NULL,
  `vehicleNumber` varchar(18) NOT NULL,
  `vehicleModel` varchar(24) NOT NULL,
  `vehicleYear` varchar(4) NOT NULL,
  `appointmentDate` varchar(12) NOT NULL,
  `mechanic` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`firstName`, `lastName`, `email`, `phoneNumber`, `vehicleType`, `vehicleNumber`, `vehicleModel`, `vehicleYear`, `appointmentDate`, `mechanic`) VALUES
('alpine', 'fischer', 'customer@test.com', '8657456754', 'coupe', '', 'mazda mx-3', '2004', '2023-04-06', 'mechanic3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `email`, `phoneNumber`, `password`) VALUES
('John', 'Doe', 'customer@test.com', '032194812', 'abcd1234..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
