-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 12:07 AM
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
-- Database: `fooddelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donid` int(2) NOT NULL,
  `uid` int(2) NOT NULL,
  `picktime` time NOT NULL,
  `droptime` time NOT NULL,
  `deltype` int(2) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gps_track`
--

CREATE TABLE `gps_track` (
  `rider_id` int(3) NOT NULL,
  `track_time` datetime NOT NULL DEFAULT current_timestamp(),
  `track_lng` decimal(11,7) NOT NULL,
  `track_lat` decimal(11,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gps_track`
--

INSERT INTO `gps_track` (`rider_id`, `track_time`, `track_lng`, `track_lat`) VALUES
(999, '2023-12-02 01:37:38', 80.3245168, 16.2562457);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordid` int(5) NOT NULL,
  `delby` int(2) NOT NULL,
  `pictime` time NOT NULL,
  `droptime` time NOT NULL,
  `uid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `empid` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `tra_langtuide` decimal(11,7) NOT NULL,
  `tra_longtuide` decimal(11,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `mobile`, `password`) VALUES
(1, 'Shiva Bhavani', '9052727402', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donid`);

--
-- Indexes for table `gps_track`
--
ALTER TABLE `gps_track`
  ADD PRIMARY KEY (`rider_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donid` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
