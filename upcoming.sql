-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2019 at 04:16 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overatou_inq`
--

-- --------------------------------------------------------

--
-- Table structure for table `upcoming`
--

CREATE TABLE `upcoming` (
  `id` int(11) NOT NULL,
  `voucher_no` text,
  `arrival_date` text,
  `departure_date` text,
  `guest_name` text,
  `tour_handler` text,
  `way` text,
  `vehicle_type` text,
  `driver_details` text,
  `Hotels` text,
  `other_info` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcoming`
--

INSERT INTO `upcoming` (`id`, `voucher_no`, `arrival_date`, `departure_date`, `guest_name`, `tour_handler`, `way`, `vehicle_type`, `driver_details`, `Hotels`, `other_info`) VALUES
(58, '2262', '2019-01-12', '2019-01-19', 'Mr. Chettan Mangala Panigaraj', 'Yashas', 'TT 3439509', 'Car', 'Jeewaka', NULL, ''),
(59, '2268', '2019-01-01', '2019-01-07', 'Mr. Jain Manu', 'Yashas', 'TT 3487189', 'KDH_f', 'Sameera', NULL, ''),
(61, '2271', '2019-01-09', '2019-01-15', 'Mr. Sadiq Muhammed Lisan', 'Yashas', 'TT 3494637', 'Car', 'Malith', NULL, ''),
(62, '2275', '2019-01-12', '2019-01-18', 'Mr. Choudhury', 'Kusal', 'TT 3554613', 'KDH_f', '', NULL, ''),
(63, '2276', '2019-01-12', '2019-01-19', 'Mr. Guhan Ramasamy', 'Yashas', 'TT 3570522', 'KDH_f', 'Sameera', NULL, ''),
(64, '2278', '2019-01-02', '2019-01-07', 'Mr. Vipin Jain', 'Yashas', 'Direct', 'KDH_f', 'Sameera', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upcoming`
--
ALTER TABLE `upcoming`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upcoming`
--
ALTER TABLE `upcoming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
