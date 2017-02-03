-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2017 at 03:09 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=166 ;

--
-- Dumping data for table `tb_main1`
--

INSERT INTO `tb_main1` (`id_main1`, `registration`, `at`, `date`, `from`, `to`, `subject`, `practice`, `note`, `type_record`, `filename`, `type_document`) VALUES
(78, '1249', 'FPST039-03', '2017-11-10', 'ประธานโครงการรางวัลนักเทคโลยีดีเด่น', 'ผอ.ศูนย์วิจัย', 'ขอความร่วมมือในการประชาสัมพันธ์และเสนอชื่อผู้สมควรได้รับรางวัลนักเทคโนโลยีดีเด่นประจำปีพ.ศ.2560', '', '', 2, 'scan0001.jpg', 1),
(79, 'ศธ0514.7.1.2.3.4.1/4156', '', '2017-01-26', 'สุธีรา  ประดับวงษ์', 'ผอ.ศูนย์วิจัยฯ', 'ขออนุมัติยืมและเบิกจ่ายเงินบัญชีทุนผู้ช่วยวิจัยฯ', '', '', 2, '', 2),
(80, 'ตวฉ/2073', '', '0000-00-00', '', '', '', '', '', 1, '', 2),
(89, '2073', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(125, '1250', '', '0000-00-00', '', '', '', '', '', 2, '', 1),
(156, '1253', '', '0000-00-00', '', '', '', '', '', 2, '', 1),
(157, 'ตวฉ/2077', '', '0000-00-00', '', '', '', '', '', 1, '', 2),
(158, '1346', '', '0000-00-00', '', '', '', '', '', 3, '', 1),
(160, 'ศธ0514.7.1.2.3.4/1346', 'ศธ0514.7.1.2.3.4/1346', '0000-00-00', '', '', '', '', '', 3, '', 2),
(161, '1254', 'ศธ0514.7.2.19/187', '2017-02-03', 'อ.พญ.พรรณธิพา ต้นสวรรค์', 'ผู้อำนวยการศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ', 'แจ้งความประสงค์ตีพิมพ์บทความลงในวารสารจดหมายเหตุทางแพทย์', '', '', 2, '1254.pdf', 1),
(162, '1255', 'พร 0032.2/1710', '2017-02-03', 'ผู้อำนวยการโรงพยาบาลแพร่', 'ผู้อำนวยการศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ', 'ตอบขอบคุณ', '', '', 2, '1255.pdf', 1),
(163, '1256', 'นว.0032.1/806', '2017-02-03', 'ผู้อำนวยการโรงพยาบาลสวรรค์ประชารักษ์ จังหวัดนครสวรรค์', 'ผู้อำนวยการศูนย์วิจัยผู้ป่วยปากแหว่ง เพดานโหว่ฯ', 'ตอบรับหนังสือ', '', '', 2, '1256.pdf', 1),
(164, '2074', 'อต 0032.103.3/01088', '2017-01-24', 'โรงพยาบาลอุตรดิตถ์', 'ผู้อำนวยการศูนย์ตะวันฉาย', 'ตอบรับหนังสือ', 'นางสาวภาวิณี รูปพรม', '', 1, '', 1),
(165, '2075', 'ศธ0517.06/714', '2017-01-26', 'คณะแพทยศาสตร์โรงพยาบาลรามาธิดี สำนักการศึกษา งานบริหารทรัพยากรการเรียนรู้ (ห้องสมุด)', 'ศาสตราจารย์นายแพทย์บวรศิลป์ เชาวน์ชื่น', 'ตอบขอบคุณ', 'นางสาวภาวิณี รูปพรม', '', 1, '', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_main_academic`
--

INSERT INTO `tb_main_academic` (`id_main_academic`, `id_firstname_academic`, `id_activities`, `begin_date`, `end_date`, `title`, `place`, `detail`, `expenses`, `borrow`, `note`) VALUES
(1, 2, 6, '2017-01-06', '2017-01-31', 'หัวข้อ The 12 ht Khon kaen FESS course', 'ณ ห้องประชุมมิตรภาพ ชั้น 5', 'International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers', 300, 200, '--'),
(2, 9, 4, '2017-01-01', '2017-01-03', 'หัวข้อ The 12 ht Khon kaen FESS course & The 5th Khon Kaen', 'ณ ห้องประชุมมิตรภาพ ชั้น 3', 'International course in advanced endoscopic sinus and skull base surgery: Handson dissection In fresh frozen cadavers', 500, 400, '--'),
(4, 5, 3, '2017-01-25', '2017-01-31', 'ประชุมปรึกษาหารือแนวทางการเตรียมเลือดสำหรับเตรียมผ่าตัด', 'ณ ห้องประชุมคลังเลือดกลาง', 'ประชุมปรึกษาหารือแนวทางการเตรียมเลือดสำหรับเตรียมผ่าตัด', 0, 0, ''),
(5, 7, 3, '2017-01-17', '2017-01-20', '', '', '', 0, 0, '');

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
