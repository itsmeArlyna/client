-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 03:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowings`
--

CREATE TABLE `borrowings` (
  `id` int(11) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `group_number` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class_section` varchar(50) DEFAULT NULL,
  `date_borrowed` date NOT NULL,
  `date_return` datetime NOT NULL,
  `borrowing_status` varchar(20) NOT NULL,
  `condition_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowings`
--

INSERT INTO `borrowings` (`id`, `equipment_name`, `user_id`, `name`, `group_number`, `department`, `class_section`, `date_borrowed`, `date_return`, `borrowing_status`, `condition_status`) VALUES
(1, 'Beaker', 413087539, 'Jenny Abellera', '1', 'elementary', 'a', '2024-03-28', '2024-03-28 21:31:53', 'returned', 'damaged'),
(2, 'Magnet', 413087539, 'Jenny Abellera', '1', 'elementary', 'a', '2024-03-28', '2024-03-28 21:31:53', 'returned', 'damaged'),
(3, 'Funnels', 413087539, 'Jenny Abellera', '1', 'elementary', 'a', '2024-03-28', '2024-03-28 21:31:53', 'returned', 'damaged'),
(4, 'Beaker', 1234567890, 'Angela L Nalda', '1', 'College', '4B', '2024-03-28', '2024-03-28 21:47:50', 'returned', 'Good'),
(5, 'Beakers', 12345, 'Arvie Christian Armenta', '2', 'College', '4B', '2024-03-28', '2024-03-28 21:51:47', 'returned', 'Damaged'),
(6, 'Erlenmeyer Flask', 12345, 'Arvie Christian Armenta', '2', 'College', '4B', '2024-03-28', '2024-03-28 21:51:47', 'returned', 'Damaged'),
(7, 'Funnels', 12345, 'Arvie Christian Armenta', '2', 'College', '4B', '2024-03-28', '2024-03-28 21:51:47', 'returned', 'Damaged');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_materials`
--

CREATE TABLE `laboratory_materials` (
  `id` int(20) NOT NULL,
  `equipment_id` int(10) NOT NULL,
  `equipment_name` varchar(50) NOT NULL,
  `equipment_status` text NOT NULL,
  `equipment_quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laboratory_materials`
--

INSERT INTO `laboratory_materials` (`id`, `equipment_id`, `equipment_name`, `equipment_status`, `equipment_quantity`) VALUES
(1, 10001, 'Bunsen Burner', 'Available', 2),
(2, 10002, 'Beakers', 'Available', 2),
(3, 10003, 'Microscope', 'Available', 2),
(4, 10004, 'Test Tube', 'Available', 2),
(5, 10005, 'Funnels', 'Available', 2),
(6, 10006, 'Thermometer', 'Available', 2),
(7, 10007, 'Burette', 'Available', 2),
(8, 10008, 'Graduated Cylinders', 'Available', 2),
(9, 10009, 'Crucible Tongs', 'Available', 2),
(10, 10010, 'Watch Glass', 'Available', 2),
(11, 10011, 'Dropper', 'Available', 2),
(12, 10012, 'Magnifying Glass', 'Available', 2),
(13, 10013, 'Erlenmeyer Flask', 'Available', 2),
(14, 10014, 'Test Tube Rack', 'Available', 2),
(15, 10015, 'Magnet', 'Available', 2);

-- --------------------------------------------------------

--
-- Table structure for table `returned_items`
--

CREATE TABLE `returned_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `equipment_name` varchar(255) NOT NULL,
  `condition_status` enum('good','damaged') NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowings`
--
ALTER TABLE `borrowings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory_materials`
--
ALTER TABLE `laboratory_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returned_items`
--
ALTER TABLE `returned_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laboratory_materials`
--
ALTER TABLE `laboratory_materials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `returned_items`
--
ALTER TABLE `returned_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
