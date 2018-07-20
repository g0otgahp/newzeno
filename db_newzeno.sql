-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 08:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(2, 'kaiixtongz', '6ce5ffdd9b901df6732b6f1494233a63', 1, 1, 2),
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', 4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agentId` int(11) NOT NULL,
  `agentCompany` varchar(50) NOT NULL,
  `agentName` varchar(50) NOT NULL,
  `agentPhone` varchar(20) NOT NULL,
  `agentEmail` varchar(50) NOT NULL,
  `agentWebsite` varchar(50) NOT NULL,
  `agentAddress` longtext NOT NULL,
  `agentStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agentId`, `agentCompany`, `agentName`, `agentPhone`, `agentEmail`, `agentWebsite`, `agentAddress`, `agentStatus`) VALUES
(1, 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'fasdfasdf@hotmail.com', 'ทดสอบ', 'ทดสอบ', 2),
(2, 'Newzeno (ประเทศไทย) จำกัด', 'พี่ป๊อป', '0993254289', 'newzeno@yahoo.com', 'www.newzeno.com', '<p>ไม่บอกกกกกกกกก</p>', 1);

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
  `cateImg` varchar(50) NOT NULL DEFAULT 'noImg.png',
  `categroupId` int(11) NOT NULL,
  `cateStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateId`, `cateName`, `cateImg`, `categroupId`, `cateStatus`) VALUES
(1, 'Video Wall', '20180703065255.jpg', 1, 1),
(2, 'Digital Signage', '20180703052928.jpg', 1, 2),
(4, 'Projector', '20180703061311.jpg', 1, 2),
(6, 'Test', 'noImg.png', 1, 2),
(7, 'Kaiixtongz', 'noImg.png', 1, 2),
(8, 'แว่นตา่่่่่asdsd', '20180703075134.png', 1, 2),
(9, 'Standard', 'noImg.png', 1, 1),
(12, 'Ultra Stretch', 'noImg.png', 1, 1),
(13, 'High Brightness', 'noImg.png', 1, 1),
(14, 'Interactive', 'noImg.png', 1, 1),
(15, 'Interactive', 'noImg.png', 1, 2),
(16, 'Mirror', 'noImg.png', 1, 1),
(17, 'Hotel Tv', 'noImg.png', 2, 1),
(18, 'Tv Signage', 'noImg.png', 2, 1),
(19, 'Special', 'noImg.png', 2, 1),
(20, 'In-Glass Wallpaper', 'noImg.png', 4, 1),
(21, 'Wallpaper', 'noImg.png', 4, 1),
(22, 'Open Frame', 'noImg.png', 4, 1),
(23, 'InDoor', 'noImg.png', 5, 1),
(24, 'OutDoor', 'noImg.png', 5, 1),
(25, 'DLP Projector', 'noImg.png', 6, 1),
(26, 'LCD Projector', 'noImg.png', 6, 1),
(27, 'LED Projector', 'noImg.png', 6, 1),
(28, 'Laser Projector', 'noImg.png', 6, 1),
(29, 'Extender', 'noImg.png', 8, 1),
(30, 'Spliter', 'noImg.png', 8, 1),
(31, 'Switcher', 'noImg.png', 8, 1),
(32, 'Switcher', 'noImg.png', 8, 2),
(33, 'สายสัญญาณภาพ', 'noImg.png', 9, 1),
(34, 'สายสัญญาณเสียง', 'noImg.png', 9, 1),
(35, 'สายคอลโทล', 'noImg.png', 9, 1),
(36, 'LAN', 'noImg.png', 9, 2),
(37, 'Audio', 'noImg.png', 9, 2),
(38, 'Control', 'noImg.png', 9, 2),
(39, 'แขวนเพดาน', 'noImg.png', 11, 1),
(40, 'แขวนผนัง', 'noImg.png', 11, 1),
(41, 'ตั้งโต๊ะ', 'noImg.png', 11, 1),
(42, 'ตั้งพื้น', 'noImg.png', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categroup`
--

CREATE TABLE `categroup` (
  `categroupId` int(11) NOT NULL,
  `categroupName` varchar(50) NOT NULL,
  `categroupStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categroup`
--

INSERT INTO `categroup` (`categroupId`, `categroupName`, `categroupStatus`) VALUES
(1, 'Digital Signage', 2),
(2, 'Commercial Tv', 1),
(3, 'Commercial Tv', 2),
(4, 'OLED Signage', 2),
(5, 'LED Signage', 1),
(6, 'Projector', 1),
(7, 'Projector', 2),
(8, 'Accessories', 2),
(9, 'Cable', 2),
(10, 'Cable', 2),
(11, 'Wall Mount', 2);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `configId` int(11) NOT NULL,
  `configName` varchar(50) NOT NULL,
  `configTextarea` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`configId`, `configName`, `configTextarea`) VALUES
(1, 'ทั่วไป', '<p><b>ทั่วไปนะจ๊ะ</b></p>'),
(2, 'บริการ', '<p>บริการนะจ๊ะ</p>'),
(3, 'วิธีการชำระเงิน', '<p>การชำระเงินนะจ๊ะ</p>'),
(4, 'ติดต่อเรา', '<p>ติดต่อเรานะจ๊ะ</p>');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productSubdetail` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDetail` longtext NOT NULL,
  `productImg` varchar(50) NOT NULL DEFAULT 'noImg.png',
  `productGroupid` int(11) NOT NULL,
  `productCateid` int(11) NOT NULL,
  `productBrandid` int(11) NOT NULL,
  `productStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productSubdetail`, `productPrice`, `productDetail`, `productImg`, `productGroupid`, `productCateid`, `productBrandid`, `productStatus`) VALUES
(7, '55SL5PE-H', 'Brightness : 450 cd/m² (Max.) Bezel : 11.9 mm (T/L/R), 18.0 mm (B) Depth : 54 mm Interface : HDMI(2)/ DVI-D/ RGB/ USB/ RJ45/ RS232C/ Audio/ IR Built-in Speaker(10W+10W) Haze 28%, OPS Power Built-in, EMC Class \"B\"', 50000, '<p style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; position: relative; display: block; margin: 0px; padding-left: 12px; border: 0px; line-height: 1.36em; float: none; clear: both; word-wrap: break-word; word-break: break-word;\"></p><h4 style=\"font-size: 17.5px; margin-top: 10px; margin-bottom: 10px; font-weight: bold; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; text-align: justify;\">Product Information</h4><div><br></div><table class=\"table table-bordered\"><tbody><tr><td><p><b>Panel</b></p></td><td><br></td></tr><tr><td>Screen Size</td><td>55\"<br></td></tr><tr><td>Native Resolution<br></td><td>1,920 x 1,080 (FHD)<br></td></tr><tr><td>Brightness (Typ., cd/m²)<br></td><td>427<br></td></tr><tr><td>Brightness (Max., cd/m²)<br></td><td>450</td></tr><tr><td>Surface Treatment (Typ.)<br></td><td>Haze 28%<br></td></tr><tr><td><b>Connectivity</b></td><td><br></td></tr><tr><td>Input<br></td><td>HDMI (2), DVI-D, RGB, Audio, USB<br></td></tr><tr><td>Output<br></td><td>Audio (Off/Fixed/Variable)<br></td></tr><tr><td>External Control<br></td><td>RS232C in/out, RJ45 in, IR in<br></td></tr></tbody></table><div><br></div><ul style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; list-style: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\"></ul>', '20180717053133.jpg', 2, 17, 1, 1),
(8, '55SL5PE-SH', 'Brightness : 450 cd/m² (Max.) Bezel : 11.9 mm (T/L/R), 18.0 mm (B) Depth : 54 mm Interface : HDMI(2)/ DVI-D/ RGB/ USB/ RJ45/ RS232C/ Audio/ IR Built-in Speaker(10W+10W) Haze 28%, OPS Power Built-in, EMC Class \"B\"', 48000, '<p style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; position: relative; display: block; margin: 0px; padding-left: 12px; border: 0px; line-height: 1.36em; float: none; clear: both; word-wrap: break-word; word-break: break-word;\"></p><h4 style=\"font-size: 17.5px; margin-top: 10px; margin-bottom: 10px; font-weight: bold; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; text-align: justify;\">Product Information</h4><div><br></div><table class=\"table table-bordered\"><tbody><tr><td><p><b>Panel</b></p></td><td><br></td></tr><tr><td>Screen Size</td><td>55\"<br></td></tr><tr><td>Native Resolution<br></td><td>1,920 x 1,080 (FHD)<br></td></tr><tr><td>Brightness (Typ., cd/m²)<br></td><td>427<br></td></tr><tr><td>Brightness (Max., cd/m²)<br></td><td>450</td></tr><tr><td>Surface Treatment (Typ.)<br></td><td>Haze 28%<br></td></tr><tr><td><b>Connectivity</b></td><td><br></td></tr><tr><td>Input<br></td><td>HDMI (2), DVI-D, RGB, Audio, USB<br></td></tr><tr><td>Output<br></td><td>Audio (Off/Fixed/Variable)<br></td></tr><tr><td>External Control<br></td><td>RS232C in/out, RJ45 in, IR in<br></td></tr></tbody></table><div><br></div><ul style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; list-style: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\"></ul>', '20180717053133.jpg', 2, 17, 1, 1),
(9, '55SL5PE-SM', 'Brightness : 450 cd/m² (Max.) Bezel : 11.9 mm (T/L/R), 18.0 mm (B) Depth : 54 mm Interface : HDMI(2)/ DVI-D/ RGB/ USB/ RJ45/ RS232C/ Audio/ IR Built-in Speaker(10W+10W) Haze 28%, OPS Power Built-in, EMC Class \"B\"', 35000, '<p style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; position: relative; display: block; margin: 0px; padding-left: 12px; border: 0px; line-height: 1.36em; float: none; clear: both; word-wrap: break-word; word-break: break-word;\"></p><h4 style=\"font-size: 17.5px; margin-top: 10px; margin-bottom: 10px; font-weight: bold; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; text-align: justify;\">Product Information</h4><div><br></div><table class=\"table table-bordered\"><tbody><tr><td><p><b>Panel</b></p></td><td><br></td></tr><tr><td>Screen Size</td><td>55\"<br></td></tr><tr><td>Native Resolution<br></td><td>1,920 x 1,080 (FHD)<br></td></tr><tr><td>Brightness (Typ., cd/m²)<br></td><td>427<br></td></tr><tr><td>Brightness (Max., cd/m²)<br></td><td>450</td></tr><tr><td>Surface Treatment (Typ.)<br></td><td>Haze 28%<br></td></tr><tr><td><b>Connectivity</b></td><td><br></td></tr><tr><td>Input<br></td><td>HDMI (2), DVI-D, RGB, Audio, USB<br></td></tr><tr><td>Output<br></td><td>Audio (Off/Fixed/Variable)<br></td></tr><tr><td>External Control<br></td><td>RS232C in/out, RJ45 in, IR in<br></td></tr></tbody></table><div><br></div><ul style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; list-style: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\"></ul>', '20180717053133.jpg', 2, 17, 1, 1),
(10, '55SL5PE-LG', 'Brightness : 450 cd/m² (Max.) Bezel : 11.9 mm (T/L/R), 18.0 mm (B) Depth : 54 mm Interface : HDMI(2)/ DVI-D/ RGB/ USB/ RJ45/ RS232C/ Audio/ IR Built-in Speaker(10W+10W) Haze 28%, OPS Power Built-in, EMC Class \"B\"', 75000, '<p style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; position: relative; display: block; margin: 0px; padding-left: 12px; border: 0px; line-height: 1.36em; float: none; clear: both; word-wrap: break-word; word-break: break-word;\"></p><h4 style=\"font-size: 17.5px; margin-top: 10px; margin-bottom: 10px; font-weight: bold; line-height: 20px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility; text-align: justify;\">Product Information</h4><div><br></div><table class=\"table table-bordered\"><tbody><tr><td><p><b>Panel</b></p></td><td><br></td></tr><tr><td>Screen Size</td><td>55\"<br></td></tr><tr><td>Native Resolution<br></td><td>1,920 x 1,080 (FHD)<br></td></tr><tr><td>Brightness (Typ., cd/m²)<br></td><td>427<br></td></tr><tr><td>Brightness (Max., cd/m²)<br></td><td>450</td></tr><tr><td>Surface Treatment (Typ.)<br></td><td>Haze 28%<br></td></tr><tr><td><b>Connectivity</b></td><td><br></td></tr><tr><td>Input<br></td><td>HDMI (2), DVI-D, RGB, Audio, USB<br></td></tr><tr><td>Output<br></td><td>Audio (Off/Fixed/Variable)<br></td></tr><tr><td>External Control<br></td><td>RS232C in/out, RJ45 in, IR in<br></td></tr></tbody></table><div><br></div><ul style=\"font-family: &quot;LG Smart&quot;, Tahoma, Arial, sans-serif; list-style: none; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(51, 51, 51); font-size: 16px;\"></ul>', '20180717053133.jpg', 2, 17, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `proimageId` int(11) NOT NULL,
  `proimageName` varchar(50) NOT NULL,
  `proimageProductid` int(11) NOT NULL,
  `proimageStatus` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`proimageId`, `proimageName`, `proimageProductid`, `proimageStatus`) VALUES
(4, '201807170531330.jpg', 7, 1),
(5, '201807170531331.jpg', 7, 1),
(6, '201807170531332.jpg', 7, 1),
(7, '201807170531333.jpg', 7, 1),
(8, '201807170531334.jpg', 7, 1),
(9, '201807170531334.jpg', 8, 1),
(10, '201807170531330.jpg', 8, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `configId` int(11) NOT NULL,
  `configName` varchar(50) NOT NULL,
  `configTextarea` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`configId`, `configName`, `configTextarea`) VALUES
(1, 'ทั่วไป', '<p>ทั่วไปนะจ๊ะ&nbsp; &nbsp;&nbsp;</p>'),
(2, 'บริการ', '<h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><br></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility;\">การติดตั้งโปรเจคเตอร์ และ จอภาพโปรเจคเตอร์</h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><p style=\"font-family: Arial, Helvetica, sans-serif; margin-bottom: 0px; text-transform: none; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><span style=\"font-family: Prompt;\">- สำรวจพื้นที่ ที่ต้องการติดตั้งโปรเจคเตอร์ แต่ละที่จะมีลักษณะที่แตกต่างกัน ตามโครงสร้างของอาคาร</span><br><span style=\"font-family: Prompt;\">- ดูว่าเผนังภายใน และฝ้าเพดาน เป็นแบบไหน เพื่อเตรียมอุปกรณ์ และ วัสดุในการติดตั้ง</span><span style=\"font-family: Prompt;\">&nbsp;</span><br><span style=\"font-family: Prompt;\">- ดูระยะฉายของโปรเจคเตอร์แต่ละชนิดจะแตกต่างกัน</span><span style=\"font-family: Prompt;\">&nbsp;</span><br><span style=\"font-family: Prompt;\">- งานซ่อมและแก้ไขผนังภายใน และฝ้าเพดานเก่าจะทำยากว่าฝ้าผนังภายในที่สร้างใหม่ตั้งแต่ตอนแรก</span><br><span style=\"font-family: Prompt;\">- การเชื่อมต่อสายสัญญาณเข้ากับโปรเจคเตอร์</span><span style=\"font-family: Prompt;\">&nbsp;</span><br><span style=\"font-family: Prompt;\">- ราคาขึ้นอยู่ความยาวของสายและความยากง่ายในการติดตั้ง ขนาดจอ ชนิดจอ และ ประเภทจอ ชนิดและความระเอียดของโปรเจคเตอร์<br></span><span style=\"font-family: Prompt;\">&nbsp; ชนิดและความยาวของขาแขวนโปรเจคเตอร์</span></p><p style=\"font-family: Arial, Helvetica, sans-serif; margin-bottom: 0px; text-transform: none; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><br></p></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility;\">บริการซ่อมโปรเจคเตอร์</h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; padding: 10px;\">เราเป็นศูนย์รวมซ่อมเครื่องโปรเจคเตอร์ทุกรุ่นทุกระบบ ” โดยช่างที่มีความรู้ ความชำนาญ ในราคาที่เป็นมาตรฐาน&nbsp;<br>และพร้อมรับประกันความพึงพอใจในบริการ หากโปรเจคเตอร์ของท่านมีปัญหา&nbsp;<br>หรือต้องการปรึกษา โปรดติดต่อเรา</p><p style=\"font-family: Arial, Helvetica, sans-serif; margin-bottom: 0px; text-transform: none; color: rgb(99, 105, 116); line-height: 24px; padding: 0px 0px 24px;\"><img src=\"http://projector7.com/images/projector-repair.jpg\" class=\"\" style=\"height: auto; max-width: 100%; float: none;\"></p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; padding: 0px 0px 24px;\"><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(99, 105, 116);\"><b style=\"color: rgb(255, 0, 0);\">ปัญหาของหลอดไฟ</b>&nbsp;</span>โดยทั่วไป หลอดไฟของโปรเจคเตอร์มีอยู่ 2 ประเภทใหญ่ๆ คือ แบบ Metal Halide และ UHP&nbsp;<br>(Ultra-High Performance) โดยแบบ Metal Halide นั้นจะเป็นเทคโนโลยีเก่าที่ถูกใช้มานานแล้ว&nbsp;<br>ทำให้คุณภาพของภาพที่ได้ออกมาได้ไม่ดีเท่าที่ควร เพราะเมื่อใช้งานไปนานจะสูญเสียความสวางลงไปอีก&nbsp;<br>ทั้งยังเกิดความผิดเพี้ยนของสีของภาพอีกด้วย ในขณะที่เทคโนโลยี UHP&nbsp;<br>นั้นจะยังคงรักษาประสิทธิภาพเอาไว้ตลอดอายุการใช้งาน เนื่องจากประสิทธิภาพของหลอดไฟประเภท UHP สูงกว่า Metal<br>Halide ดังนั้น ราคาของหลอด UHP ก็ย่อมสูงกว่าด้วย ....&nbsp;</p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; padding: 0px 0px 24px;\">ในการถอดเปลี่ยนหลอดไฟของเครื่องโปรเจคเตอร์นั้น จำเป็นต้องให้ช่างผู้มีความชำนาญเท่านั้นเป็นผู้เปลี่ยน&nbsp;<br>เนื่องจากราคาของหลอดไฟค่อนข้างสูง บางรุ่นอาจราคาเท่ากับตัวเครื่องเลยก็ว่าได้...&nbsp;<br></p><p style=\"margin-bottom: 0px; color: rgb(51, 51, 51); text-transform: none; line-height: 24px; padding: 0px 0px 24px;\"><span style=\"font-family: Arial, Helvetica, sans-serif; color: rgb(99, 105, 116);\"><b style=\"color: rgb(255, 0, 0);\">การดูแลรักษาและข้อควรระวังในการใช้งาน</b>&nbsp;</span>เครื่องโปรเจคเตอร์เมื่อใช้งานไปนานๆ หลอดจะมีความร้อนสูง&nbsp;<br>เนื่องจากการฉายภาพ&nbsp;<br>จึงจำเป็นต้องมีชุดพัดลมระบายความร้อนเพื่อช่วยลดความร้อนในตัวหลอด&nbsp;<br>ซึ่งจะต้องใช้เวลาพอสมควรเพื่อให้อุณหภูมิของหลอดลดลง ด้วยเหตุนี้ ก่อนการปิดเครื่อง&nbsp;<br>จำเป็นต้องรอให้พัดลมระบายความร้อนหยุดก่อน โดยปิดสวิตซ์ให้หลอดไฟดับก่อน จนมีสัญญาณให้ปิดสวิตซ์ตัวเครื่อง&nbsp;<br>ถ้าปิดเครื่องโดยไม่รอสัญญาณ อาจทำให้หลอดไฟขาด เนื่องจากการปิดสวิตซ์หลอดไฟนั้น&nbsp;<br>พัดลมยังคงทำงานต่อเนื่องเพื่อเป่าลมให้หลอดไฟเย็นลง (ลดอุณหภูมิ) แต่ถ้าปิดไฟทันที&nbsp;<br>หลอดไฟยังคงร้อนอยู่ อาจทำให้หลอดไฟขาดได้ ควรทำความสะอาด Filter กรองอากาศอย่างน้อยทุกๆ 3 เดือน&nbsp;<br>เพื่อป้องกันเครื่องร้อน ซึ่งอาจทำให้ Power Supply เสียหายและหลอดไฟขาดได้&nbsp;<br>ใช้แหล่งจ่ายไฟที่ต่อพ่วงอุปกรณ์ป้องกันไฟ กระชาก (UPS)&nbsp;<br></p><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><span style=\"color: rgb(255, 0, 0);\">เพราะเมื่อเกิดกระแสไฟกระชาก จะทำให้ Power Supply เสียหายและหลอดไฟขาดได้</span></div><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><span style=\"color: rgb(255, 0, 0);\"><br></span></div><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><span style=\"color: rgb(255, 0, 0);\"><br></span></div><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><table width=\"956\" border=\"0\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium; max-width: 100%; background-color: rgb(255, 255, 255);\"></table></div></h2><h2 style=\"font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; color: rgb(46, 58, 84); text-rendering: optimizeLegibility; text-transform: uppercase;\"><br></h2><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><table width=\"956\" border=\"0\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium; max-width: 100%; background-color: rgb(255, 255, 255);\"></table></div></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; text-rendering: optimizeLegibility;\">ให้เช่าโปรเจคเตอร์</h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><table width=\"956\" border=\"0\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium; max-width: 100%; background-color: rgb(255, 255, 255);\"><tbody><tr valign=\"top\"><td width=\"700\" style=\"margin-right: 50px;\"><p style=\"margin-bottom: 0px; color: rgb(99, 105, 116); line-height: 24px; padding: 0px 0px 24px;\"><img src=\"http://projector7.com/images/rent-projector.jpg\" width=\"380\" height=\"243\" style=\"height: auto; max-width: 100%;\"></p><p style=\"margin-bottom: 0px; color: rgb(99, 105, 116); line-height: 24px; padding: 0px 0px 24px;\"><b style=\"color: rgb(255, 0, 0);\">บริการให้เช่า Projectorในราคาถูก&nbsp;</b>บริการให้เช่าโปรเจคเตอร์, เช่า projector&nbsp;<br>พร้อมรับประกันคุณภาพและความพึงพอใจในบริการ ฟรี! ค่าบริการจัดส่ง และค่าติดตั้ง มีเครื่องฉาย Projector จอฉาย<br>จอรับภาพ พลาสม่า ราคาเป็นกันเอง ในงานเลี้ยง งานสัมนา. งานแต่งงาน แสดงสินค้า ฯลฯ&nbsp;</p></td></tr></tbody></table></div></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; text-rendering: optimizeLegibility;\"><br></h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><table width=\"956\" border=\"0\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium; max-width: 100%; background-color: rgb(255, 255, 255);\"></table></div></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; text-rendering: optimizeLegibility;\">ความละเอียดในการแสดงผล</h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><div style=\"color: rgb(51, 51, 51); text-transform: none;\"><table width=\"956\" border=\"0\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium; max-width: 100%; background-color: rgb(255, 255, 255);\"><tbody><tr valign=\"top\"><td width=\"700\" style=\"margin-right: 50px;\"><p style=\"margin-bottom: 0px; line-height: 24px; padding: 0px 0px 24px;\">ตัวโปรเจคเตอร์รุ่นต่างๆก็จะมีคุณภาพที่แตกต่างกันไปเนื่องจากตัวโปรเจคเตอร์จะมีวิธีการสร้างภาพที่ต่างกัน \"พิกเซล\" ซึ่งนั่นก็หมายความว่าความคมชัดหรือความละเอียดของภาพนี้ก็ขึ้นอยู่กับการสร้างจำนวนจุดสี ความละเอียดของโปรเจคเตอร์นี้จะมีการแสดงค่าเป็นตัวเลข 2 จำนวนเช่น 800 x 600 พิกเซลโดยตัวเลขแรก ส่วนตัวเลขที่สองหมายถึง ตัวเลขทั้ง 2<br><br>480 x 640 พิกเซล	VGA (Video Graphics Array ที่)&nbsp;<br>800 x 600 พิกเซล	SVGA (Super Video กราฟฟิกตกแต่ง)&nbsp;<br>1024 x 768 พิกเซล	XGA (Xetended กราฟิกอะแดปเตอร์)&nbsp;<br>1280 x 1024 พิกเซล	SXGA (อาร์เรย์ซุปเปอร์ขยาย Graphics)&nbsp;<br>1600 x 1200 พิกเซล	UXGA (Ultra กราฟฟิกตกแต่งยาว)&nbsp;<br>2048 x 1536 พิกเซล	QXGA (อาร์เรย์ Quad ขยาย Graphics)&nbsp;</p></td></tr></tbody></table></div><p style=\"color: rgb(51, 51, 51); text-transform: none;\"></p><p style=\"font-family: Arial, Helvetica, sans-serif; margin-bottom: 0px; text-transform: none; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><br></p></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility;\">เทิร์นโปรเจคเตอร์</h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><p style=\"margin-bottom: 0px; text-transform: none; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\">เทิร์นโปรเจคเตอร์ ทุกรุ่นทุกยี่ห้อให้ราคาสูง</p><p style=\"margin-bottom: 0px; text-transform: none; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><img src=\"http://projector7.com/images/PK301-projector.jpg\" width=\"358\" height=\"238\" align=\"middle\" alt=\"เทิร์นโปรเจคเตอร์ \" style=\"height: auto; max-width: 100%;\"></p><p style=\"margin-bottom: 0px; text-transform: none; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><br></p></h2><h4 style=\"font-size: 17.5px; margin-top: 0px; margin-bottom: 18px; font-weight: bold; line-height: 24px; color: rgb(51, 51, 51); text-rendering: optimizeLegibility;\">ผลงานของบริษัท</h4><h2 style=\"color: rgb(46, 58, 84); font-family: DaysOne-Regular; font-size: 24px; margin-top: 0px; margin-bottom: 18px; line-height: 24px; text-transform: uppercase;\"><table width=\"100%\" border=\"0\" bgcolor=\"#e7e7e7\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium; max-width: 100%; background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); text-transform: none;\"><tbody><tr><td width=\"200\"><br><center><img src=\"http://projector7.com/images/TCC.gif\" width=\"114\" height=\"130\" border=\"0\" style=\"height: auto; max-width: 100%;\"><p style=\"margin-bottom: 0px; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><span style=\"font-family: Prompt;\">เทพผดุงพรมะพร้าวจำกัด</span></p></center></td><td width=\"200\"><br><center><img src=\"http://projector7.com/images/hitachi.gif\" width=\"114\" height=\"130\" border=\"0\" style=\"height: auto; max-width: 100%;\"><p style=\"margin-bottom: 0px; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><span style=\"font-family: Prompt;\">ฮิตาชิในประเทศไทย</span></p></center></td><td width=\"200\"><br><center><img src=\"http://projector7.com/images/westernunion.jpg\" width=\"114\" height=\"130\" border=\"0\" style=\"height: auto; max-width: 100%;\"><p style=\"margin-bottom: 0px; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><span style=\"font-family: Prompt;\">เวสเทิร์น ยูเนี่ยน</span></p></center></td><td width=\"200\"><br><center><img src=\"http://projector7.com/images/cu.jpg\" width=\"114\" height=\"130\" border=\"0\" style=\"height: auto; max-width: 100%;\"><p style=\"margin-bottom: 0px; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><span style=\"font-family: Prompt;\">จุฬาลงกรณ์มหาวิทยาลัย</span></p></center></td></tr><tr><td width=\"200\"><br><center><img src=\"http://projector7.com/images/isb.jpg\" width=\"114\" height=\"130\" border=\"0\" style=\"height: auto; max-width: 100%;\"><p style=\"margin-bottom: 0px; line-height: 24px; color: rgb(99, 105, 116); padding: 0px 0px 24px;\"><span style=\"font-family: Prompt;\">โรงเรียน นานาชาติ isb นนทบุรี</span></p></center></td></tr></tbody></table><table width=\"100%\" border=\"0\" bgcolor=\"#e7e7e7\" style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\"><tbody><tr><td width=\"200\"></td><td width=\"200\"></td><td width=\"200\"></td><td width=\"200\"></td></tr><tr><td width=\"200\" style=\"background-color: transparent; color: rgb(0, 0, 0);\"></td></tr></tbody></table></h2>'),
(3, 'วิธีการชำระเงิน', '<h4 style=\"text-align: center; line-height: 24px; margin-bottom: 0px; padding: 0px 0px 24px;\">สามารถเลือกการชำระเงินโดยการจ่ายเงินสดที่บริษัทฯ หรือ โอนผ่านธนาคารดังต่อไปนี้</h4><table class=\"table table-bordered\" style=\"text-align: center;\"><tbody><tr><td style=\"text-align: center;\"><b><u>ชื่อบัญชี</u></b></td><td style=\"text-align: center;\"><b><u>ธนาคาร</u></b></td><td style=\"text-align: center;\"><b><u>สาขา</u></b></td><td style=\"text-align: center;\"><b><u>ประเภทบัญชี</u></b></td><td style=\"text-align: center;\"><b><u>เลขที่บัญชี</u></b></td></tr><tr><td>บจก.นิวซีโน่(ประเทศไทย)<br></td><td>กสิกรไทย</td><td>ปิ่นเกล้า<br></td><td>ออมทรัพย์<br></td><td>706-2-41388-8<br></td></tr><tr><td>บจก.นิวซีโน่(ประเทศไทย)<br></td><td><font color=\"#636974\">กรุงเทพ</font></td><td>เดอะเซอร์เคิล<br></td><td>กระแสรายวัน<br></td><td>089-3-50042-1<br></td></tr><tr><td>บจก.นิวซีโน่(ประเทศไทย)<br></td><td>ไทยพาณิชย์<br></td><td>บางโคล่<br></td><td>กระแสรายวัน<br></td><td>095-2-61727-0<br></td></tr><tr><td>บจก.นิวซีโน่(ประเทศไทย)<br></td><td>กสิกรไทย<br></td><td>เซ็นทรัลปิ่นเกล้า<br></td><td>ออมทรัพย์<br></td><td>758-2-66069-1<br></td></tr></tbody></table><div style=\"text-align: center;\"><span class=\"style3\" style=\"color: rgb(255, 0, 0);\"><br>หมายเหตุ </span><span style=\"font-family: Arial, Helvetica, sans-serif;\">: </span><span class=\"style4\" style=\"color: rgb(0, 0, 0);\">โปรดแจ้งการโอนเงินได้ที่ บริษัท นิวซีโน่ (ประเทศไทย) จำกัด และ โปรดเก็บหลักฐานการโอนเงินจนกว่าจะได้รับสินค้า </span></div><div style=\"text-align: center;\"><span style=\"font-family: Prompt;\">Tel : 086-395-0677 Fax : 02-423-3536 Email : newzeno@yahoo.com</span></div><p></p>'),
(4, 'ติดต่อเรา', '<h3 style=\"text-align: center; \">บริษัท นิวซีโน่ (ประเทศไทย) จำกัด</h3><h4 style=\"text-align: center; margin-left: 25px;\"><span style=\"font-family: Prompt;\">ที่อยู่ : 1/4 ถนนสมเด็จพระปิ่นเกล้า แขวงบางยี่ขัน เขตบางพลัด กทม. 10700&nbsp; &nbsp; &nbsp;<br></span><span style=\"font-family: Prompt;\">โทร : 02-497-0500&nbsp; แฟ็กซ์ : 02-497-0501&nbsp; &nbsp; &nbsp;<br></span><span style=\"font-family: Prompt;\">E-mail : newzeno@yahoo.com</span></h4><p><br></p><p style=\"text-align: center; \">&nbsp; &nbsp; <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d968.7756733766039!2d100.48185480000001!3d13.772680200000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29982eae9c61b%3A0x844eb9b22bb7bced!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4meC4tOC4p-C4i-C4teC5guC4meC5iCAo4Lib4Lij4Liw4LmA4LiX4Lio4LmE4LiX4LiiKSDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1530783869278\" width=\"600\" height=\"400\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe></p><p style=\"text-align: center; \"><br></p><p style=\"text-align: center; \"></p><h5><br></h5><p></p><div><br></div>');

-- --------------------------------------------------------

--
-- Table structure for table `sortby`
--

CREATE TABLE `sortby` (
  `sortbyId` int(11) NOT NULL,
  `sortbyCateid` int(11) NOT NULL,
  `sortbyBrandid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sortby`
--

INSERT INTO `sortby` (`sortbyId`, `sortbyCateid`, `sortbyBrandid`) VALUES
(12, 1, 4),
(13, 1, 3),
(14, 2, 2),
(16, 4, 4),
(17, 4, 3),
(18, 4, 2),
(19, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agentId`);

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
-- Indexes for table `categroup`
--
ALTER TABLE `categroup`
  ADD PRIMARY KEY (`categroupId`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`configId`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`positionId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `productimage`
--
ALTER TABLE `productimage`
  ADD PRIMARY KEY (`proimageId`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profileId`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`configId`);

--
-- Indexes for table `sortby`
--
ALTER TABLE `sortby`
  ADD PRIMARY KEY (`sortbyId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `categroup`
--
ALTER TABLE `categroup`
  MODIFY `categroupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `configId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `positionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `productimage`
--
ALTER TABLE `productimage`
  MODIFY `proimageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `configId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sortby`
--
ALTER TABLE `sortby`
  MODIFY `sortbyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
