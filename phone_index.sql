-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 02:04 PM
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
-- Database: `studenntss`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone index`
--

CREATE TABLE `phone index` (
  `id` int(11) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(10) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `rejDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `phone index`
--

INSERT INTO `phone index` (`id`, `FullName`, `Phone`, `Email`, `Address`, `fax`, `rejDate`, `Comments`) VALUES
(18, 'peter shaker jozef', '989302702', 'petyyy456@yahoo.com', 'giza', '3345', '2023-09-15 21:29:14', 'thanks all'),
(19, 'mohamed ahmed', '989302702', 'petewww32@yahoo.com', 'giza', '3345', '2023-09-15 21:30:18', 'thanks all\r\n'),
(20, 'salwa ali', '902-48-2224', 'slawasayed', 'Cairo', '3757', '2023-09-18 11:15:23', 'thanks all'),
(21, 'mona sayed', '902-48-2224', 'sayed@yahoo.com', 'Cairo', '3757', '2023-09-18 11:16:03', 'thanks all'),
(22, 'ahmed ali ', '902-48-2224466', 'ahmeded@yahoo.com', 'Giza', '37576', '2023-09-18 11:17:11', 'thanks all'),
(23, 'mona sayed ali', '902482224', 'sayed@yahoo.com', 'Cairo', '444445767', '2023-09-18 12:03:50', 'thanks all');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone index`
--
ALTER TABLE `phone index`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FullName` (`FullName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone index`
--
ALTER TABLE `phone index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
