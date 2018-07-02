-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 09:42 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminUsername` varchar(50) NOT NULL,
  `adminPassword` varchar(50) NOT NULL,
  `adminPosition` int(11) NOT NULL,
  `adminStatus` int(11) NOT NULL DEFAULT '1',
  `profileId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminUsername`, `adminPassword`, `adminPosition`, `adminStatus`, `profileId`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1, 1),
(2, 'kaiixtongz', '8011288101322ade03fc48c44fd10403', 1, 1, 2),
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', 4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `brandImg` varchar(50) NOT NULL,
  `brandStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandId`, `brandName`, `brandImg`, `brandStatus`) VALUES
(1, 'LG (Life Good)', 'LG-Logo.png', 1),
(2, 'Hitachi', 'Hitachi-Logo.png', 1),
(3, 'Sharpaaa', 'Sharp-logo.jpg', 1),
(4, 'Sony', 'sony-logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cateId` int(11) NOT NULL,
  `cateName` varchar(50) NOT NULL,
  `cateStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `positionId` int(11) NOT NULL,
  `positionName` varchar(50) NOT NULL,
  `positionStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`positionId`, `positionName`, `positionStatus`) VALUES
(1, 'Developer - นักพัฒนาระบบ', 1),
(2, 'Accounting - บัญชี', 1),
(3, 'Salesman - พนักงานขาย', 1),
(4, 'IT Support - ผู้ดูแลระบบ', 1),
(7, 'Admin - แอดมิน', 1),
(8, 'Manager - ผู้จัดการ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profileId` int(11) NOT NULL,
  `profileFname` varchar(50) NOT NULL,
  `profileLname` varchar(50) NOT NULL,
  `profileNickname` varchar(30) NOT NULL,
  `profileCitizenid` varchar(13) NOT NULL,
  `profileGender` varchar(50) NOT NULL,
  `profilePhone` varchar(10) NOT NULL,
  `profileEmail` varchar(50) NOT NULL,
  `profileImg` varchar(50) NOT NULL DEFAULT 'noImg.png',
  `profileAddress` varchar(500) NOT NULL,
  `profileStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profileId`, `profileFname`, `profileLname`, `profileNickname`, `profileCitizenid`, `profileGender`, `profilePhone`, `profileEmail`, `profileImg`, `profileAddress`, `profileStatus`) VALUES
(1, 'สมชาย', 'แสงสกุล', 'เจ', '1409909909009', 'หญิง', '0899998989', 'jay.bunapa@gmail.com', '20180702092238.jpg', '', 1),
(2, 'อดิพงษ์', 'ธรรมนวกุล', 'โต้ง', '1103701252880', 'ชาย', '0809073005', 'kaiixtongz@gmail.com', '20180702092152.jpg', 'สาย 3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cateId`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cateId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
