-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `solar_details`
--

CREATE TABLE `solar_details` (
  `id` int(11) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `solar_type` enum('On-Grid Solutions','Hybrid Solutions','Off-Grid Solution') NOT NULL,
  `equipment` enum('Inverter','Panels','Structure','Labour','Miscellaneous Components','Transport/ Loading/Unloading','Earthing Pit') NOT NULL,
  `quality` varchar(255) NOT NULL,
  `kilowatt` double NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solar_details`
--

INSERT INTO `solar_details` (`id`, `create_time`, `solar_type`, `equipment`, `quality`, `kilowatt`, `price`) VALUES
(1, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'Low Quality SAJ/ SOFAR', 5, 0),
(2, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'Low Quality SAJ/ SOFAR', 10, 125000),
(3, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'Low Quality SAJ/ SOFAR', 15, 155000),
(4, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'Medium Quality SOFAR/SAJ', 5, 0),
(5, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'Medium Quality SOFAR/SAJ', 10, 130000),
(6, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'Medium Quality SOFAR/SAJ', 15, 175000),
(7, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'High Quality KNOX/CHINT', 5, 120000),
(8, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'High Quality KNOX/CHINT', 10, 140000),
(9, '2021-12-28 12:28:35', 'On-Grid Solutions', 'Inverter', 'High Quality KNOX/CHINT', 15, 170000),
(10, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'Low Quality Rs 50/watt', 5, 250000),
(11, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'Low Quality Rs 50/watt', 10, 500000),
(12, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'Low Quality Rs 50/watt', 15, 750000),
(13, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'Medium Quality Rs52.5/Watt', 5, 262500),
(14, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'Medium Quality Rs52.5/Watt', 10, 525000),
(15, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'Medium Quality Rs52.5/Watt', 15, 787500),
(16, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'High Quality Rs 55/Watt', 5, 275000),
(17, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'High Quality Rs 55/Watt', 10, 550000),
(18, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Panels', 'High Quality Rs 55/Watt', 15, 825000),
(19, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Ground Mount Medium Quality', 5, 21000),
(20, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Ground Mount Medium Quality', 10, 42000),
(21, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Ground Mount Medium Quality', 15, 63000),
(22, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Ground Mount High Quality', 5, 27000),
(23, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Ground Mount High Quality', 10, 54000),
(24, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Ground Mount High Quality', 15, 81000),
(25, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 5, 55000),
(26, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 10, 110000),
(27, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 15, 165000),
(28, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Elevated High Quality (Epoxy coated)', 5, 65000),
(29, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Elevated High Quality (Epoxy coated)', 10, 130000),
(30, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Structure', 'Elevated High Quality (Epoxy coated)', 15, 200000),
(31, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Labour', 'Basic', 5, 15000),
(32, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Labour', 'Basic', 10, 30000),
(33, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Labour', 'Basic', 15, 40000),
(34, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Miscellaneous Components', 'Basic', 5, 30000),
(35, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Miscellaneous Components', 'Basic', 10, 50000),
(36, '2021-12-28 12:28:36', 'On-Grid Solutions', 'Miscellaneous Components', 'Basic', 15, 65000),
(37, '2021-12-28 12:28:37', 'On-Grid Solutions', 'Transport/ Loading/Unloading', 'Basic', 5, 5000),
(38, '2021-12-28 12:28:37', 'On-Grid Solutions', 'Transport/ Loading/Unloading', 'Basic', 10, 7000),
(39, '2021-12-28 12:28:37', 'On-Grid Solutions', 'Transport/ Loading/Unloading', 'Basic', 15, 7000),
(40, '2021-12-28 12:28:37', 'On-Grid Solutions', 'Earthing Pit', 'Basic', 5, 30000),
(41, '2021-12-28 12:28:37', 'On-Grid Solutions', 'Earthing Pit', 'Basic', 10, 30000),
(42, '2021-12-28 12:28:37', 'On-Grid Solutions', 'Earthing Pit', 'Basic', 15, 30000),
(43, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Inverter', 'Medium Quality SOFAR', 10, 315000),
(44, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Inverter', 'Medium Quality SOFAR', 20, 385000),
(45, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Inverter', 'High Quality Inverex NITROX/Infini', 10, 450000),
(46, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Inverter', 'High Quality Inverex NITROX/Infini', 20, 650000),
(47, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Panels', 'Low Quality Rs 50/watt', 10, 500000),
(48, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Panels', 'Low Quality Rs 50/watt', 20, 750000),
(49, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Panels', 'Medium Quality Rs52.5/Watt', 10, 525000),
(50, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Panels', 'Medium Quality Rs52.5/Watt', 20, 787500),
(51, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Panels', 'High Quality Rs 55/Watt', 10, 550000),
(52, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Panels', 'High Quality Rs 55/Watt', 20, 825000),
(53, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Structure', 'Ground Mount Medium Quality', 10, 42000),
(54, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Structure', 'Ground Mount Medium Quality', 20, 63000),
(55, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Structure', 'Ground Mount High Quality', 10, 54000),
(56, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Structure', 'Ground Mount High Quality', 20, 81000),
(57, '2021-12-28 12:28:37', 'Hybrid Solutions', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 10, 110000),
(58, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 20, 165000),
(59, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Structure', 'Elevated High Quality (Epoxy coated)', 10, 130000),
(60, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Structure', 'Elevated High Quality (Epoxy coated)', 20, 200000),
(61, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Labour', 'Basic', 10, 30000),
(62, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Labour', 'Basic', 20, 40000),
(63, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Miscellaneous Components', 'Basic', 10, 50000),
(64, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Miscellaneous Components', 'Basic', 20, 65000),
(65, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Transport/ Loading/Unloading', 'Basic', 10, 7000),
(66, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Transport/ Loading/Unloading', 'Basic', 20, 7000),
(67, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Earthing Pit', 'Basic', 10, 30000),
(68, '2021-12-28 12:28:38', 'Hybrid Solutions', 'Earthing Pit', 'Basic', 20, 30000),
(69, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Inverter', 'Low Quality ', 3, 36000),
(70, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Inverter', 'Low Quality ', 5, 80000),
(71, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Inverter', 'Medium Quality SOFAR/SAJ', 3, 56000),
(72, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Inverter', 'Medium Quality SOFAR/SAJ', 5, 85000),
(73, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Inverter', 'High Quality KNOX/CHINT', 3, 70000),
(74, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Inverter', 'High Quality KNOX/CHINT', 5, 96000),
(75, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Panels', 'Low Quality Rs 50/watt', 3, 250000),
(76, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Panels', 'Low Quality Rs 50/watt', 5, 500000),
(77, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Panels', 'Medium Quality Rs52.5/Watt', 3, 262500),
(78, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Panels', 'Medium Quality Rs52.5/Watt', 5, 525000),
(79, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Panels', 'High Quality Rs 55/Watt', 3, 275000),
(80, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Panels', 'High Quality Rs 55/Watt', 5, 550000),
(81, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Ground Mount Medium Quality', 3, 21000),
(82, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Ground Mount Medium Quality', 5, 42000),
(83, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Ground Mount High Quality', 3, 27000),
(84, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Ground Mount High Quality', 5, 54000),
(85, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 3, 55000),
(86, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Elevated Medium Quality (Oil paint coated)', 5, 110000),
(87, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Elevated High Quality (Epoxy coated)', 3, 65000),
(88, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Structure', 'Elevated High Quality (Epoxy coated)', 5, 130000),
(89, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Labour', 'Basic', 3, 15000),
(90, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Labour', 'Basic', 5, 30000),
(91, '2021-12-28 12:28:38', 'Off-Grid Solution', 'Miscellaneous Components', 'Basic', 3, 30000),
(92, '2021-12-28 12:28:39', 'Off-Grid Solution', 'Miscellaneous Components', 'Basic', 5, 50000),
(93, '2021-12-28 12:28:39', 'Off-Grid Solution', 'Transport/ Loading/Unloading', 'Basic', 3, 5000),
(94, '2021-12-28 12:28:39', 'Off-Grid Solution', 'Transport/ Loading/Unloading', 'Basic', 5, 7000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solar_details`
--
ALTER TABLE `solar_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solar_details`
--
ALTER TABLE `solar_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
