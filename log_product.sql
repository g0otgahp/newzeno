-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 10:02 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newzeno`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_product`
--

CREATE TABLE `log_product` (
  `logProductId` int(11) NOT NULL,
  `logProductProfileId` int(11) NOT NULL,
  `logProductStatus` text NOT NULL,
  `logProductType` text NOT NULL,
  `logProductItem` text NOT NULL,
  `logProductTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_product`
--

INSERT INTO `log_product` (`logProductId`, `logProductProfileId`, `logProductStatus`, `logProductType`, `logProductItem`, `logProductTime`) VALUES
(1, 1, 'แก้ไข', 'หัวข้อสินค้า', 'Information Displays', '2018-08-15 07:07:33'),
(2, 1, 'ลบ', 'กลุ่มสินค้า', 'Digital Signage', '2018-08-15 07:07:53'),
(3, 1, 'แก้ไข', 'แบรนด์สินค้า', 'LG Life\'s Good', '2018-08-15 07:08:05'),
(4, 1, 'แก้ไข', 'แบรนด์สินค้า', 'HITACHI', '2018-08-15 07:08:08'),
(5, 1, 'เพิ่ม', 'ประเภทสินค้า', 'Testing', '2018-08-15 07:08:19'),
(6, 1, 'ลบ', 'ประเภทสินค้า', 'Testing', '2018-08-15 07:08:26'),
(7, 2, 'แก้ไข', 'จัดการสินค้า', 'HITACHI LP-WU6500GD', '2018-08-15 07:56:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_product`
--
ALTER TABLE `log_product`
  ADD PRIMARY KEY (`logProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_product`
--
ALTER TABLE `log_product`
  MODIFY `logProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
