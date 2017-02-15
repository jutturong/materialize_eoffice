-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2017 at 04:25 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `docdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_main_academic`
--

CREATE TABLE IF NOT EXISTS `tb_main_academic` (
  `id_main_academic` int(11) NOT NULL AUTO_INCREMENT,
  `id_firstname_academic` int(5) DEFAULT NULL,
  `id_activities` int(5) DEFAULT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin,
  `place` text CHARACTER SET utf8 COLLATE utf8_bin,
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin,
  `expenses` int(10) DEFAULT NULL,
  `borrow` int(10) DEFAULT NULL,
  `note` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `begin_time` text NOT NULL,
  `end_time` time NOT NULL,
  PRIMARY KEY (`id_main_academic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_main_academic`
--

INSERT INTO `tb_main_academic` (`id_main_academic`, `id_firstname_academic`, `id_activities`, `begin_date`, `end_date`, `title`, `place`, `detail`, `expenses`, `borrow`, `note`, `begin_time`, `end_time`) VALUES
(1, 2, 6, '2017-01-06', '2017-01-31', 'หัวข้อ The 12 ht Khon kaen FESS course', 'ณ ห้องประชุมมิตรภาพ ชั้น 5', 'International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers', 300, 200, '--', '00:00:00', '00:00:00'),
(2, 9, 4, '2017-01-01', '2017-01-03', 'หัวข้อ The 12 ht Khon kaen FESS course & The 5th Khon Kaen', 'ณ ห้องประชุมมิตรภาพ ชั้น 3', 'International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers', 500, 400, '--', '00:00:00', '00:00:00'),
(4, 5, 3, '2017-01-25', '2017-01-31', 'ประชุมปรึกษาหารือแนวทางการเตรียมเลือดสำหรับเตรียมผ่าตัด', 'ณ ห้องประชุมคลังเลือดกลาง', 'ประชุมปรึกษาหารือแนวทางการเตรียมเลือดสำหรับเตรียมผ่าตัด', 0, 0, '', '00:00:00', '00:00:00'),
(5, 7, 3, '2017-01-17', '2017-01-20', '', '', '', 0, 0, '', '00:00:00', '00:00:00'),
(6, 1, 5, '2017-02-22', '2017-02-22', 'ดร.นพคุณ และอาจารย์อภิศักดิ์ พัฒนจักร เข้าปรึกษาหัวข้อวิจัยสารสนเทศ', 'ศูนย์ตะวันฉาย', 'ดร.นพคุณ และอาจารย์อภิศักดิ์ พัฒนจักร และทีมจากวิทยาเขตหนองคาย ขอเข้าปรึกษาหัวข้อการทำวิจัยสารสนเทศ', 0, 0, '', '09:00-11:00', '11:00:00'),
(7, 1, 5, '2017-03-14', '2017-03-14', 'เข้าร่วมเป็นเกียรติในงานพิธีมอบรางวัลเชิดชูผู้ทำความดีเพื่อสังคม รางวัลมีชัยฯ ประจำปี 2559', 'อาคารตลาดหลักทรัพย์ฯ  ถ.รัชดาภิเษก เขตดินแดง (ใกล้สถานทูตจีน)', 'ขอเรียนเชิญอดีตและผู้รับรางวัลปี 2559 เข้าร่วมเป็นเกียรติในงานพิธีมอบรางวัลเชิดชูผู้ทำความดีเพื่อสังคม รางวัลมีชัยฯ ประจำปี 2559', 0, 0, '1.ขอเชิญอดีตและผู้รับรางวัลปี 2559 รับประทานอาหารกลางวันตั้งแต่ 11.30 น. บริเวณชั้น 7 อาคารบี ตลาดหลักทรัพย์ฯ  ถ.รัชดาภิเษก 2.	      การแต่งกาย  :   สุภาพโทนสีขาว -ดำ', '13:30-15:00', '15:15:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
