-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2016 at 05:16 PM
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
  `registration` int(10) NOT NULL,
  `at` text COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `from` text COLLATE utf8_bin NOT NULL,
  `to` text COLLATE utf8_bin NOT NULL,
  `subject` text COLLATE utf8_bin NOT NULL,
  `practice` text COLLATE utf8_bin NOT NULL,
  `note` text COLLATE utf8_bin NOT NULL,
  `type_record` int(1) NOT NULL,
  `filename` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_main1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_main1`
--

INSERT INTO `tb_main1` (`id_main1`, `registration`, `at`, `date`, `from`, `to`, `subject`, `practice`, `note`, `type_record`, `filename`) VALUES
(1, 1, 'ศธ 0514.1.61.3/ว 3136', '2016-12-08', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', '', '', '', '', 0, ''),
(2, 1, 'ศธ 0514.1.61.3/ว 3136', '2016-12-14', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', 'ทราบ', 'ทราบและปฏฺิบัติตาม', 1, ''),
(3, 1, 'ศธ 0514.1.61.3/ว 3136', '2016-12-14', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', 'ทราบ', 'ทราบและปฏฺิบัติตาม', 1, 'merged.pdf'),
(4, 1, 'ศธ 0514.1.61.3/ว 3136', '2016-12-07', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', 'ทราบ', 'ทราบและปฏฺิบัติตาม', 1, 'merged.pdf'),
(5, 1, 'ศธ 0514.1.61.3/ว 3136', '2016-12-07', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', 'ทราบ', 'ทราบและปฏฺิบัติตาม', 1, 'merged.pdf'),
(6, 1, 'ศธ 0514.1.61.3/ว 3136', '0000-00-00', 'รองอธิการบดีฝ่ายวิจัยและการถ่ายทอดเทคโนโลยี', 'ผู้อำนวยการมูลนิธิตะวันฉายฯ', 'แจ้งผลการอนุมัติงบประมาณ ปีงบประมาณ 2560 และขอเชิญประชุม', 'ทราบ', 'ทราบและปฏฺิบัติตาม', 1, '');

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