-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 06:06 AM
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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsId` int(11) NOT NULL,
  `newsTitle` text NOT NULL,
  `newsImage` varchar(50) NOT NULL DEFAULT 'noImg.png',
  `newsDetail` longtext NOT NULL,
  `newsStatus` varchar(5) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `newsTitle`, `newsImage`, `newsDetail`, `newsStatus`) VALUES
(1, 'Chrome เวอร์ชั่นใหม่ ยกระดับความปลอดภัย ติดป้าย Not Secure เตือนเวลาท่องเว็บ HTTP', '20180726055234.jpg', '<div style=\"font-family: Tahoma; font-size: 12.8px; clear: both; padding: 0px; border-top: 1px solid rgb(204, 204, 204); border-right: 1px solid rgb(204, 204, 204); border-left: 1px solid rgb(204, 204, 204); border-image: initial; border-bottom: none;\"><span itemprop=\"image\" itemscope=\"\" itemtype=\"https://schema.org/ImageObject\"><img src=\"https://news.thaiware.com/upload_misc/news/2018_07/728x409/14087_18072514145481.jpg\" alt=\"Chrome เวอร์ชั่นใหม่ ยกระดับความปลอดภัย ติดป้าย Not Secure เตือนเวลาท่องเว็บ HTTP\" style=\"min-height: 150px; max-height: 409px; overflow: hidden; width: 723px;\"></span></div><div style=\"font-family: Tahoma; font-size: 12.8px; border-right: 1px solid rgb(204, 204, 204); border-bottom: 1px solid rgb(204, 204, 204); border-left: 1px solid rgb(204, 204, 204); border-image: initial; padding: 10px; border-top: none; line-height: normal;\"><div class=\"detail\" style=\"font-size: 16px; line-height: 1.5; color: rgb(51, 51, 51); word-wrap: break-word;\"><p>Google ยังคงมุ่นมั่นทำตามสัญญาที่ให้ไว้เมื่อ 2 ปีก่อนว่าจะทำให้อินเทอร์เน็ตปลอดภัยจากเว็บไซต์ที่ไม่ได้เข้ารหัส (HTTP) นับตั้งแต่เริ่มปล่อย Chrome 56 เมื่อปี 2016 เพื่อแจ้งเตือนเว็บไซต์ที่เป็น HTTP ว่าไม่ปลอดภัย</p><p style=\"text-align: center;\"><img alt=\"Chrome เวอร์ชั่นใหม่ ยกระดับความปลอดภัย ติดป้าย Not Secure เตือนเวลาท่องเว็บ HTTP\" src=\"https://news.thaiware.com/upload_misc/news/2018_07/728/14087_18072511195388_252920.png\" title=\"Chrome เวอร์ชั่นใหม่ ยกระดับความปลอดภัย ติดป้าย Not Secure เตือนเวลาท่องเว็บ HTTP\" style=\"border-width: 1px; border-style: solid; max-width: 95%;\"></p><p>โดย Google ยกระดับการแจ้งเตือนในเวอร์ชั่นล่าสุด (Chrome 68) ด้วยการขึ้นข้อความหรือติดป้ายตรงแถบ URL สำหรับเว็บไซต์ที่เป็น HTTP ทั้งหมดว่า \"Not Secure\"(ไม่ปลอดภัย) เวลาที่ผู้ใช้งานเข้าหน้าเว็บไซต์ที่ไม่ได้เข้ารหัส และเมื่อคลิกเข้าไปตรงข้อความหรือป้ายเตือนดังกล่าวก็จะแสดงคำเตือนให้ผู้ใช้งานระมัดระวังในการป้อนข้อมูลที่ละเอียดอ่อนลงในหน้าเว็บไซต์เหล่านั้น อาทิ ข้อมูลส่วนตัว และข้อมูลบัตรเครดิต </p><p>การติดป้ายแจ้งเตือนดังกล่าว ก็เพื่อต้องการให้นักพัฒนาของเว็บไซต์ต่างๆ เปลี่ยนมาใช้โปรโตคอล HTTPS ที่เพิ่มการเข้ารหัสระหว่างผู้ใช้งานกับเว็บไซต์ที่เยี่ยมชม ซึ่งการแจ้งเตือนนี้ไม่ได้หมายความว่าผู้ใช้งานอินเทอร์เน็ตถูกแฮกข้อมูลแต่อย่างใด </p><p>ทั้งนี้ เว็บไซต์ที่ใช้ HTTPS จะมีความปลอดภัยมากกว่า เพราะนอกจากจะป้องกันการถูกโจมตีจากมัลแวร์แล้ว ก็ยังช่วยไม่ให้บริษัทต่างๆ นำข้อมูลของเราไปใช้ในการโฆษณา และยังป้องกันการขุดเหมืองเงินดิจิทัล (Cryptocurrency Mining) ด้วย </p><p>สำหรับมาตรฐานการรักษาความปลอดภัยของ Google จะไม่ได้หยุดแค่เวอร์ชั่น Chrome 68 เท่านั้น โดยเวอร์ชั่นต่อไปที่จะปล่อยออกมาในเดือน ก.ย. นี้ เราจะได้เห็นข้อความสีเขียวที่เขียนว่า \"Secure\" (ปลอดภัย) ปรากฏอยู่ตรงแถบ Address bar เมื่อเข้าเว็บไซต์ HTTPS ด้วย จากเดิมที่สีสันไม่ค่อยสะดุดตานัก ขณะที่เวอร์ชั่น Chrome 70 ในเดือน ต.ค. จะเปลี่ยนสีข้อความแจ้งเตือน \"Not Secure\" เป็นสีแดงในเว็บไซต์ที่เป็น HTTP และในอนาคตเว็บไซต์ที่เข้ารหัส HTTPS จะไม่มีคำว่า \"Secure\" อีกต่อไป เพื่อเป็นการแสดงท่าทีให้เห็นว่า \"ความปลอดภัย\" ในการท่องอินเทอร์เน็ตควรจะยึดถือกันเป็นบรรทัดฐานหรือเป็นเรื่องปกติ</p></div></div>', '1'),
(2, 'ASIASOFT เปิดพร้อมเพย์ โอนง่าย จ่ายสะดวก แค่สแกน QR Code', '20180726052516.jpg', '<div style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; font-size: 16px; text-align: center;\"><span style=\"font-size: 22px;\"><span style=\"font-weight: 700;\"><span style=\"color: rgb(0, 102, 255);\">ASIASOFT</span>&nbsp;<span style=\"color: rgb(75, 0, 130);\">เปิดพร้อมเพย์&nbsp;</span></span><br><span style=\"color: rgb(75, 0, 130);\"><span style=\"font-weight: 700;\">โอนง่าย จ่ายสะดวก แค่สแกน&nbsp;</span></span></span><span style=\"font-weight: 700;\"><span style=\"color: rgb(75, 0, 130);\"><span style=\"font-size: 22px;\">QR Code</span></span><br><br><img alt=\"\" src=\"https://img.playpark.com/thpp/image001(3).jpg\" style=\"max-width: 100%; width: 660px; height: 345px;\"></span><br><br>&nbsp;</div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; font-size: 16px;\">&nbsp; &nbsp; &nbsp; &nbsp;PLAYPARK.com ภายใต้บริษัท เอเชียซอฟท์ คอร์ปอเรชั่น จำกัด (มหาชน) ตอบรับเทรนด์ยุคสังคมไร้เงินสด ด้วยการเปิดช่องทางพร้อมเพย์ “SCB EASY PAY – แม่มณี Money Solution” เพื่อช่วยเพิ่มความสะดวก และรวดเร็วในการโอนเงิน สำหรับเพื่อนๆ ที่ต้องการซื้อ @Key รวมถึงบริการและสินค้าอื่นๆ โดยสามารถชำระเงินได้ด้วยระบบ QR Code Payment เหมือนการโอนผ่านเลขที่บัญชีแต่จะสะดวกขึ้น เพียงแค่าสแกนบาร์โค้ดก็สามารถโอนชำระเงินตรงเข้าบริษัทได้เลย</div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; font-size: 16px; text-align: center;\"><br><img alt=\"\" src=\"https://img.playpark.com/thpp/image003(16).png\" style=\"max-width: 100%;\"><br><br><img alt=\"\" src=\"https://img.playpark.com/thpp/image005(16).png\" style=\"max-width: 100%; width: 488px; height: 387px;\"></div><div style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, Thonburi, Tahoma, sans-serif; font-size: 16px;\"><br>&nbsp; &nbsp; &nbsp; &nbsp;หวังว่าจะเป็นอีกหนึ่งช่องทางการชำระเงินที่เพิ่มความสะดวกให้เพื่อนๆ โดยสามารถใช้งานได้แล้วตั้งแต่วันนี้เป็นต้นไป นอกจากนี้สามารถติดตามข่าวสารเพิ่มเติมได้ทางเว็บไซต์&nbsp;<a href=\"http://www.playpark.com/\" style=\"color: rgb(20, 168, 214); transition: all 250ms ease;\">http://www.playpark.com</a>&nbsp;และ Facebook&nbsp;<a href=\"https://www.facebook.com/PlayparkLive\" style=\"color: rgb(20, 168, 214); transition: all 250ms ease;\">https://www.facebook.com/PlayparkLive</a><br>&nbsp;<br>&nbsp;<br>WEBSITE ▶&nbsp;<a href=\"http://www.playpark.com/\" style=\"color: rgb(20, 168, 214); transition: all 250ms ease;\">http://www.playpark.com</a><br>FACEBOOK ▶&nbsp;<a href=\"https://www.facebook.com/PlayparkLive\" style=\"color: rgb(20, 168, 214); transition: all 250ms ease;\">https://www.facebook.com/PlayparkLive</a><br>YOUTUBE ▶&nbsp;<a href=\"https://www.youtube.com/user/PlayparkTV\" style=\"color: rgb(20, 168, 214); transition: all 250ms ease;\">https://www.youtube.com/user/PlayparkTV</a><br>LINE @PLAYPARK ▶&nbsp;<a href=\"http://bit.ly/Line-PP\" style=\"color: rgb(20, 168, 214); transition: all 250ms ease;\">http://bit.ly/Line-PP</a></div>', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
