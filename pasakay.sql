-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 05:01 AM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Lastname`, `Firstname`, `Middle_initial`, `Username`, `Password`) VALUES
(123, 'Rosano', 'Enrico', 'R', 'enrics21', 'enrics21'),
(124, 'Admin', 'Admin', 'A', 'admin', 'admin123');

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
  `Address` varchar(255) NOT NULL,
  `Contact_number` varchar(11) NOT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Driver_id`, `Vehicle`, `Lastname`, `Firstname`, `Middle_initial`, `Username`, `Password`, `Address`, `Contact_number`, `Date_of_birth`) VALUES
(11111, 'Car', 'Rosano', 'Enrico Jr', 'R', 'enrico21', 'enrico21', 'Banilad, Nasugbu, Batangas', '09554171467', '2000-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `nearby_vehicle`
--

CREATE TABLE `nearby_vehicle` (
  `Vehicle_id` int(11) NOT NULL,
  `Driver_id` int(11) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nearby_vehicle`
--

INSERT INTO `nearby_vehicle` (`Vehicle_id`, `Driver_id`, `Location`) VALUES
(22222, 11111, 'Nasugbu, Batangas');

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
  `Address` varchar(255) NOT NULL,
  `Contact_number` varchar(11) NOT NULL,
  `Date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`Passenger_id`, `Lastname`, `Firstname`, `Middle_initial`, `Username`, `Password`, `Address`, `Contact_number`, `Date_of_birth`) VALUES
(33333, 'Atienza', 'Aila Mei', 'S', 'aila01', 'aila01', 'Roxaco, Nasugbu, Batangas', '09123456789', '2000-04-22'),
(33334, 'Arellano', 'Paul Vincent', 'U', 'paul1', 'paul1', 'Wawa, Nasugbu, Batangas', '09352173490', '2000-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `rent_or_pool_details`
--

CREATE TABLE `rent_or_pool_details` (
  `Passenger_id` int(11) NOT NULL,
  `Driver_id` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Pick_up_point` varchar(255) NOT NULL,
  `Drop_off_point` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent_or_pool_details`
--

INSERT INTO `rent_or_pool_details` (`Passenger_id`, `Driver_id`, `Type`, `Pick_up_point`, `Drop_off_point`) VALUES
(33333, 11111, 'Rent', 'Wawa, Nasugbu, Batangas', 'Central, Nasugbu, Batangas');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactid` int(11) NOT NULL,
  `Passenger_id` int(11) NOT NULL,
  `Driver_id` int(11) NOT NULL,
  `transactdate` date NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `drop_off` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactid`, `Passenger_id`, `Driver_id`, `transactdate`, `pickup`, `drop_off`, `status`) VALUES
(1, 33333, 11111, '2021-07-21', 'Wawa, Nasugbu, Batangas', 'Central, Nasugbu, Batangas', 'Successful');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_id` int(11) NOT NULL,
  `Driver_id` int(11) NOT NULL,
  `Vehicle_type` varchar(25) NOT NULL,
  `No._of_seats` int(25) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Plate_number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`Vehicle_id`, `Driver_id`, `Vehicle_type`, `No._of_seats`, `Color`, `Plate_number`) VALUES
(22222, 11111, 'Car', 4, 'White', 'ABC 123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Driver_id`);

--
-- Indexes for table `nearby_vehicle`
--
ALTER TABLE `nearby_vehicle`
  ADD KEY `Vehicle_id` (`Vehicle_id`),
  ADD KEY `Driver_id` (`Driver_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`Passenger_id`);

--
-- Indexes for table `rent_or_pool_details`
--
ALTER TABLE `rent_or_pool_details`
  ADD KEY `Driver_id` (`Driver_id`),
  ADD KEY `Passenger_id` (`Passenger_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactid`),
  ADD KEY `Driver_id` (`Driver_id`),
  ADD KEY `Passenger_id` (`Passenger_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`Vehicle_id`),
  ADD KEY `Driver_id` (`Driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nearby_vehicle`
--
ALTER TABLE `nearby_vehicle`
  ADD CONSTRAINT `nearby_vehicle_ibfk_1` FOREIGN KEY (`Vehicle_id`) REFERENCES `vehicle` (`Vehicle_id`),
  ADD CONSTRAINT `nearby_vehicle_ibfk_2` FOREIGN KEY (`Driver_id`) REFERENCES `driver` (`Driver_id`);

--
-- Constraints for table `rent_or_pool_details`
--
ALTER TABLE `rent_or_pool_details`
  ADD CONSTRAINT `rent_or_pool_details_ibfk_1` FOREIGN KEY (`Driver_id`) REFERENCES `driver` (`Driver_id`),
  ADD CONSTRAINT `rent_or_pool_details_ibfk_2` FOREIGN KEY (`Passenger_id`) REFERENCES `passenger` (`Passenger_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`Driver_id`) REFERENCES `driver` (`Driver_id`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`Passenger_id`) REFERENCES `passenger` (`Passenger_id`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`Driver_id`) REFERENCES `driver` (`Driver_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
