-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 05:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_table`
--

CREATE TABLE `bank_table` (
  `Customer_id` int(10) NOT NULL,
  `Customer_Name` varchar(20) NOT NULL,
  `Customer_Email` varchar(30) NOT NULL,
  `Current_Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_table`
--

INSERT INTO `bank_table` (`Customer_id`, `Customer_Name`, `Customer_Email`, `Current_Balance`) VALUES
(1, 'Shailendra Tomar', 'st7668119177@gmail.com', 1000),
(2, 'Sunny Gaur', 'Sunnydidi@gmail.com', 4300),
(3, 'Deepak Gaur', 'deepak324@gmail.com', 4100),
(4, 'Shweta Chandel', 'shweta323@gmail.com', 2900),
(5, 'Prince Kumar', 'purebeh1213@gmail.com', 4700),
(6, 'Sharad Singh', 'shatad32@gmail.com', 7000),
(7, 'Priya Rajwat', 'priyaddih423@gmail.com', 3000),
(8, 'Anurag Singh Chandel', 'anuragf12@gmail.com', 2100),
(9, 'Rakhi Singh', 'askhimiss23@gmail.com', 5900),
(10, 'Raju Singh', 'raju76@@gmail.com', 3300);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `To_customer` varchar(20) NOT NULL,
  `From_customer` varchar(20) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`To_customer`, `From_customer`, `Amount`, `Time`) VALUES
('1', '2', 200, '2021-06-07 23:10:49.867710'),
('2', '1', 200, '2021-06-07 23:14:05.333890'),
('3', '4', 1000, '2021-06-07 23:14:50.422469'),
('1', '2', 200, '2021-06-07 23:16:59.112829'),
('1', '2', 100, '2021-06-07 23:20:30.997948'),
('7', '10', 700, '2021-06-07 23:30:39.083729'),
('1', '5', 100, '2021-06-08 00:04:58.744535'),
('1', '2', 100, '2021-06-08 00:09:42.835784'),
('2', '9', 1000, '2021-06-08 02:16:23.233969'),
('9', '1', 1000, '2021-06-08 02:16:52.670653'),
('9', '1', 100, '2021-06-08 02:18:02.448643'),
('8', '1', 100, '2021-06-08 02:18:24.712915'),
('2', '10', 100, '2021-06-08 02:18:48.866298'),
('2', '7', 100, '2021-06-08 02:30:02.972854'),
('6', '1', 300, '2021-06-08 02:30:26.794217'),
('1', '3', 100, '2021-06-08 22:09:33.278642'),
('1', '2', 1000, '2021-06-08 22:20:22.205569'),
('1', '2', 100, '2021-06-09 00:02:08.162188'),
('1', '2', 4000, '2021-06-09 00:04:39.410366'),
('2', '1', 2000, '2021-06-09 00:04:56.230591');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
