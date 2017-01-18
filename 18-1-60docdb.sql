-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2017 at 03:39 PM
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
-- Table structure for table `tb_academic`
--

CREATE TABLE IF NOT EXISTS `tb_academic` (
  `id_academic` int(10) NOT NULL AUTO_INCREMENT,
  `pre_academic` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `firstname_academic` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastname_academic` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_academic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tb_academic`
--

INSERT INTO `tb_academic` (`id_academic`, `pre_academic`, `firstname_academic`, `lastname_academic`) VALUES
(1, '', 'บวรศิลป์', 'เชาว์ชื่น'),
(2, '', 'ไชยวิทย์', 'ธนไพศาล'),
(3, '', 'ปรารถนา', 'เชาว์ชื่น'),
(4, '', 'สมศักดิ์', 'กิจสหวงศ์'),
(5, '', 'เบญจมาศ', 'พระธานี'),
(6, '', 'จารุณี', 'รัตนยาติกุล'),
(7, '', 'นิรมล', 'พัจนสุนทร'),
(8, '', 'รัตนา', 'ดวงฤดีสวัสดิ์'),
(9, '', 'สุธีรา', 'ประดับวงษ์'),
(10, '', 'กมลวรรณ', 'เจนวิถีสุข'),
(11, '', 'พลากร', 'สุรกุลประภา'),
(12, '', 'ถวัลย์วงค์', 'รัตนสิริ'),
(13, '', 'วิชัย', 'ชี้เจริญ'),
(14, '', 'Keith', 'Godfrey'),
(15, '', 'ผกาพรรณ', 'เกียรติชูสกุล'),
(16, '', 'ศิรินารถ', 'ศรีกาญจนเพริศ'),
(17, '', 'ธีระพร', 'รัตนาเอนกชัย'),
(18, '', 'กฤษณา', 'เลิศสุขประเสริฐ'),
(19, '', 'วิมลรัตน์', 'กฤษณะประกรกิจ'),
(20, '', 'สุชาติ', 'อารีมิตร'),
(21, '', 'มณฑล', 'เมฆอนันต์ธวัช'),
(22, '', 'สงวนศักดิ์', 'ธนาวิรัตนานิจ'),
(23, '', 'สุปราณี', 'เทวินบุรานุวงศ์'),
(24, '', 'พรรณรัตน์', 'มณีรัตนรังษี'),
(25, '', 'อรอุมา', 'อังวราวงศ์'),
(26, '', 'มนเทียร', 'มโนสุดประสิทธิ์'),
(27, '', 'วรัญญู', 'คงกันกง'),
(28, '', 'ดาราวรรณ', 'อักษรวรรณ'),
(29, '', 'รุ่งทิวา', 'รินทรานุรักษ์'),
(30, '', 'ดวงใจ', 'สุคนธมาน'),
(31, '', 'เบญจพร', 'นิตินาวาการ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_academic_activities`
--

CREATE TABLE IF NOT EXISTS `tb_academic_activities` (
  `id_academic_activities` int(11) NOT NULL AUTO_INCREMENT,
  `detail_academic_activities` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_academic_activities`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_academic_activities`
--

INSERT INTO `tb_academic_activities` (`id_academic_activities`, `detail_academic_activities`) VALUES
(1, 'วิทยากรในประเทศ'),
(2, 'วิทยากรต่างประเทศ'),
(3, 'ประชุมวิชาการในประเทศ'),
(4, 'ประชุมวิชาการต่างประเทศ'),
(5, 'ประชุมอื่นๆ'),
(6, 'อบรม/ดูงานในประเทศ'),
(7, 'อบรม/ดูงานต่างประเทศ'),
(8, 'บริการวิชาการ'),
(9, 'ศิลปวัฒนธรรม');

-- --------------------------------------------------------

--
-- Table structure for table `tb_main1`
--

CREATE TABLE IF NOT EXISTS `tb_main1` (
  `id_main1` int(11) NOT NULL AUTO_INCREMENT,
  `registration` varchar(50) COLLATE utf8_bin NOT NULL,
  `at` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `from` text COLLATE utf8_bin NOT NULL,
  `to` text COLLATE utf8_bin NOT NULL,
  `subject` text COLLATE utf8_bin NOT NULL,
  `practice` text COLLATE utf8_bin NOT NULL,
  `note` text COLLATE utf8_bin NOT NULL,
  `type_record` int(1) NOT NULL,
  `filename` text COLLATE utf8_bin NOT NULL,
  `type_document` int(2) NOT NULL,
  PRIMARY KEY (`id_main1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tb_main1`
--

INSERT INTO `tb_main1` (`id_main1`, `registration`, `at`, `date`, `from`, `to`, `subject`, `practice`, `note`, `type_record`, `filename`, `type_document`) VALUES
(53, '0031', 'ศธ 0514.1.61.3/ว 3136', '2017-01-10', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', '', '', 3, '1476240760.pdf', 1),
(54, '0015', 'ศธ 0514.1.61.3/ว 3136', '2017-01-17', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', '', '', 3, '1476240760.pdf', 2),
(55, '0011', 'ศธ 0514.1.61.3/ว 3136', '2017-01-23', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', '', '', 2, '1476240760.pdf', 1),
(56, '0012', 'ศธ 0514.1.61.3/ว 3136', '2017-01-16', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', '', '', 2, '1476240760.pdf', 2),
(57, '0031', 'ศธ 0514.1.61.3/ว 3130', '2017-01-02', 'รองอธิการบดีฝ่ายวิจัย14', 'รองผู้อำนวยการมูลนิธิตะวันฉายฯ78', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2559 และขอเชิญประชุม96', '77', '88', 1, 'email_office.JPG', 1),
(58, '0032', 'ศธ 0514.1.61.3/ว 3407', '2017-01-28', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี74', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ88', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม741', '', '', 1, '1476240760.pdf', 2);

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
  PRIMARY KEY (`id_main_academic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_main_academic`
--

INSERT INTO `tb_main_academic` (`id_main_academic`, `id_firstname_academic`, `id_activities`, `begin_date`, `end_date`, `title`, `place`, `detail`, `expenses`, `borrow`, `note`) VALUES
(1, 2, 6, '2017-01-01', '2017-01-12', 'หัวข้อ The 12 ht Khon kaen FESS course', 'ณ ห้องประชุมมิตรภาพ ชั้น 5', 'International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers', 300, 200, '--'),
(2, 9, 4, '2017-01-01', '2017-01-27', 'หัวข้อ The 12 ht Khon kaen FESS course & The 5th Khon Kaen', 'ณ ห้องประชุมมิตรภาพ ชั้น 3', 'International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers', 500, 400, '--');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_record`
--

CREATE TABLE IF NOT EXISTS `tb_type_record` (
  `id_type_record` int(11) NOT NULL AUTO_INCREMENT,
  `detail_type_record` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_type_record`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_type_record`
--

INSERT INTO `tb_type_record` (`id_type_record`, `detail_type_record`) VALUES
(1, 'มูลนิธิตะวันฉายฯ'),
(2, 'ศูนย์วิจัยผู้่ป่วยปากแหว่งเพดานโหว่ฯ'),
(3, 'ศูนย์การดูแลผู้ป่วยปากแหว่งเพดานโหว่ฯ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `id_permission` int(2) NOT NULL,
  `firstname` varchar(30) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `id_permission`, `firstname`, `lastname`) VALUES
(1, 'root', 'aabb2100033f0352fe7458e412495148', 1, 'jutturong', 'charoenrit'),
(2, 'client1', 'client1', 2, 'supachai', 'wongcheun');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
