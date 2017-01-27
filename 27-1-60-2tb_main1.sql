-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2017 at 01:56 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=123 ;

--
-- Dumping data for table `tb_main1`
--

INSERT INTO `tb_main1` (`id_main1`, `registration`, `at`, `date`, `from`, `to`, `subject`, `practice`, `note`, `type_record`, `filename`, `type_document`) VALUES
(78, '1249', 'FPST039-03', '2017-11-10', 'ประธานโครงการรางวัลนักเทคโลยีดีเด่น', 'ผอ.ศูนย์วิจัย', 'ขอความร่วมมือในการประชาสัมพันธ์และเสนอชื่อผู้สมควรได้รับรางวัลนักเทคโนโลยีดีเด่นประจำปีพ.ศ.2560', '', '', 2, 'scan0001.jpg', 1),
(79, 'ศธ0514.7.1.2.3.4.1/4156', '', '2017-01-26', 'สุธีรา  ประดับวงษ์', 'ผอ.ศูนย์วิจัยฯ', 'ขออนุมัติยืมและเบิกจ่ายเงินบัญชีทุนผู้ช่วยวิจัยฯ', '', '', 2, '', 2),
(80, 'ตวฉ/2073', '', '0000-00-00', '', '', '', '', '', 1, '', 2),
(81, 'ศธ0514.7.1.2.3.4.1/3486', '', '0000-00-00', '', '', '', '', '', 3, '', 2),
(86, 'ศธ0514.7.1.2.3.4.1/4157', '', '0000-00-00', '', '', '', '', '', 2, '', 2),
(89, '0001', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(102, 'ตวฉ/2074', '', '0000-00-00', '', '', '', '', '', 1, '', 2),
(104, 'ศธ0514.7.1.2.3.4.1/4158', '', '0000-00-00', '', '', '', '', '', 2, '', 2),
(106, 'ศธ0514.7.1.2.3.4.1/3487', '', '0000-00-00', '', '', '', '', '', 3, '', 2),
(108, '1250', '', '0000-00-00', '', '', '', '', '', 2, '', 1),
(115, '0002', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(116, '2', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(117, '2', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(118, '0003', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(119, '0004', '', '0000-00-00', '', '', '', '', '', 1, '', 1),
(120, '1251', '', '0000-00-00', '', '', '', '', '', 2, '', 1),
(121, '0001', '', '0000-00-00', '', '', '', '', '', 3, '', 1),
(122, '0002', '', '0000-00-00', '', '', '', '', '', 3, '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
