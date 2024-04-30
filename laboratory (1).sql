-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 03:29 PM
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
  `quantity` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `member1` varchar(255) NOT NULL,
  `member2` varchar(255) NOT NULL,
  `member3` varchar(255) NOT NULL,
  `member4` varchar(255) NOT NULL,
  `member5` varchar(255) NOT NULL,
  `member6` varchar(255) NOT NULL,
  `member7` varchar(255) NOT NULL,
  `member8` varchar(255) NOT NULL,
  `member9` varchar(255) NOT NULL,
  `member10` varchar(255) NOT NULL,
  `prof` text NOT NULL,
  `group_number` varchar(50) DEFAULT NULL,
  `mobile_number` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class_section` varchar(50) DEFAULT NULL,
  `date_borrowed` date NOT NULL,
  `date_return` datetime NOT NULL,
  `borrowing_status` varchar(20) NOT NULL,
  `condition_status` varchar(255) NOT NULL,
  `damaged_quantity` int(255) NOT NULL,
  `good_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowings`
--

INSERT INTO `borrowings` (`id`, `equipment_name`, `user_id`, `quantity`, `name`, `member1`, `member2`, `member3`, `member4`, `member5`, `member6`, `member7`, `member8`, `member9`, `member10`, `prof`, `group_number`, `mobile_number`, `email`, `department`, `class_section`, `date_borrowed`, `date_return`, `borrowing_status`, `condition_status`, `damaged_quantity`, `good_quantity`) VALUES
(1, 'BEAKER', 576274321, 2, 'Arlyn Seño', 'jenny', 'Arlyn Seño', 'Arlyn Seño', 'Arlyn Seño', 'Arlyn Seño', 'Arlyn Seño', 'Arlyn Seño', 'Arlyn Seño', 'User not found', 'Arlyn Seño', '', '09394188314', 2147483647, 'senoarlyn2@gmail.com', 'Elementary', 'senoarlyn2@gmail.com', '2024-04-30', '2026-02-02 20:32:00', 'returned', '', 0, 2),
(2, 'MAGNIFYING GLASS', 576274321, 3, 'Arlyn Seño', 'Arlyn Seño', 'jenny', '', '', '', '', '', '', '', '', 'Arlyn Seño', '1', 0, '', 'Elementary', '1', '2024-04-30', '0000-00-00 00:00:00', 'returned', '', 2, 0),
(3, 'BEAKER', 576274321, 2, 'Arlyn Seño', 'jenny', '', '', '', '', '', '', '', '', '', 'Arlyn Seño', '1', 902090, 'senoarlyn2@gmail.com', 'Elementary', '', '2024-04-30', '2025-02-02 22:04:00', 'returned', '', 0, 2),
(4, 'MAGNET', 576274321, 3, 'Arlyn Seño', 'jenny', '', '', '', '', '', '', '', '', '', 'Arlyn Seño', '1', 902090, 'senoarlyn2@gmail.com', 'Elementary', '', '2024-04-30', '2025-02-02 22:04:00', 'returned', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_materials`
--

CREATE TABLE `laboratory_materials` (
  `id` int(20) NOT NULL,
  `equipment_id` int(10) NOT NULL,
  `equipment_name` varchar(50) NOT NULL,
  `equipment_status` text NOT NULL,
  `equipment_quantity` int(20) NOT NULL,
  `equipment_stock` int(255) NOT NULL,
  `equipment_capacity` int(255) NOT NULL,
  `equipment_damaged` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laboratory_materials`
--

INSERT INTO `laboratory_materials` (`id`, `equipment_id`, `equipment_name`, `equipment_status`, `equipment_quantity`, `equipment_stock`, `equipment_capacity`, `equipment_damaged`) VALUES
(1, 10001, 'Bunsen Burner', 'Available', 100, 100, 0, 0),
(2, 10002, 'Beaker', 'Available', 100, 96, 0, 1),
(3, 10003, 'Microscope', 'Available', 100, 100, 0, 0),
(4, 10004, 'Test Tube', 'Available', 100, 100, 0, 0),
(5, 10005, 'Funnels', 'Available', 100, 100, 0, 0),
(6, 10006, 'Thermometer', 'Available', 100, 100, 0, 0),
(7, 10007, 'Burette', 'Available', 100, 100, 0, 0),
(8, 10008, 'Graduated Cylinders', 'Available', 100, 100, 0, 0),
(9, 10009, 'Crucible Tongs', 'Available', 100, 100, 0, 0),
(10, 10010, 'Watch Glass', 'Available', 100, 100, 0, 0),
(11, 10011, 'Dropper', 'Available', 100, 100, 0, 0),
(12, 10012, 'Magnifying Glass', 'Available', 100, 97, 0, 2),
(13, 10013, 'Erlenmeyer Flask', 'Available', 100, 100, 0, 0),
(14, 10014, 'Test Tube Rack', 'Available', 100, 100, 0, 0),
(15, 10015, 'Magnet', 'Available', 100, 97, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lab_schedule`
--

CREATE TABLE `lab_schedule` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `room_number` varchar(50) NOT NULL,
  `time_slot` varchar(20) NOT NULL,
  `day_of_week` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_schedule`
--

INSERT INTO `lab_schedule` (`id`, `teacher_name`, `room_number`, `time_slot`, `day_of_week`, `created_at`) VALUES
(1, 'Arlyn', 'biolab1', '7:00-8:20', 'Tuesday', '2024-04-30 12:52:33'),
(2, 'Arlyn', 'physicslab1', '8:20-9:40', 'Monday', '2024-04-30 12:52:41'),
(3, 'Arlyn', 'chemistrylab2', '8:20-9:40', 'Monday', '2024-04-30 12:52:48'),
(4, 'Jenny Abellera', 'biolab1', '7:00-8:20', 'Monday', '2024-04-30 13:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `name`, `id_number`) VALUES
(1, 'Arlyn Seño', 576274321),
(2, 'jenny', 1);

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
-- Indexes for table `lab_schedule`
--
ALTER TABLE `lab_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laboratory_materials`
--
ALTER TABLE `laboratory_materials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lab_schedule`
--
ALTER TABLE `lab_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
