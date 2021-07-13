-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 12:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasakay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Middle_initial` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Driver_id` int(25) NOT NULL,
  `Vehicle` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Middle_initial` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact_number` int(11) NOT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nearby_vehicle`
--

CREATE TABLE `nearby_vehicle` (
  `Vehicle_id` int(11) NOT NULL,
  `Driver_id` int(11) NOT NULL,
  `Location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `Passenger_id` int(11) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Middle_initial` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `Contact_number` int(11) NOT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rent_or_pool_details`
--

CREATE TABLE `rent_or_pool_details` (
  `Passenger_id` int(25) NOT NULL,
  `Driver_id` int(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Pick_up_point` varchar(25) NOT NULL,
  `Drop_off_point` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_id` int(25) NOT NULL,
  `Vehicle_type` varchar(25) NOT NULL,
  `No._of_seats` int(25) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Plate_number` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
