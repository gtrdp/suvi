-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2014 at 07:02 PM
-- Server version: 5.5.35-0ubuntu0.12.04.2
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `suvi`
--

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE IF NOT EXISTS `device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(6) NOT NULL DEFAULT '000000',
  `description` text NOT NULL,
  `img` varchar(30) NOT NULL DEFAULT 'default.png',
  `status` varchar(3) NOT NULL DEFAULT 'off',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `address`, `description`, `img`, `status`) VALUES
(2, '8FC922', 'Kulkas yang full dengan logistik.', 'default.png', 'on'),
(3, '9077DD', 'Microwave yang siap untuk ngangetin makanan.', 'default.png', 'on'),
(7, '9C5129', 'Charger laptop.', 'default.png', 'on'),
(8, '9077DB', 'Printer.', 'default.png', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `device_address` varchar(6) NOT NULL DEFAULT '000000',
  `array` int(11) NOT NULL,
  `device_datetime` varchar(12) NOT NULL,
  `current` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `datetime`, `device_address`, `array`, `device_datetime`, `current`) VALUES
(1, '2014-02-23 05:00:17', '8FC922', 4097, '201402230500', '0'),
(2, '2014-02-23 05:00:34', '9077DD', 4098, '201402230500', '0.001'),
(3, '2014-02-23 05:00:51', '9C5129', 4072, '201402230500', '29C5129'),
(4, '2014-02-23 05:01:07', '9077DB', 4408, '201402230500', '0.005'),
(5, '2014-02-23 06:00:18', '8FC922', 4098, '201402230600', '0.04'),
(6, '2014-02-23 06:00:35', '9077DD', 4099, '201402230600', '0.001'),
(7, '2014-02-23 06:00:51', '9C5129', 4073, '201402230600', '29C5129'),
(8, '2014-02-23 06:01:08', '9077DB', 4409, '201402230600', '0.005'),
(9, '2014-02-23 07:00:18', '8FC922', 4099, '201402230700', '0.001'),
(10, '2014-02-23 07:00:34', '9077DD', 4100, '201402230700', '0.001'),
(11, '2014-02-23 07:00:51', '9C5129', 4074, '201402230700', '29C5129'),
(12, '2014-02-23 07:01:08', '9077DB', 4410, '201402230700', '0.005'),
(13, '2014-02-23 08:00:17', '8FC922', 4100, '201402230800', '0.036'),
(14, '2014-02-23 08:00:34', '9077DD', 4101, '201402230800', '0.001'),
(15, '2014-02-23 08:00:51', '9C5129', 4075, '201402230800', '29C5129'),
(16, '2014-02-23 08:01:07', '9077DB', 4411, '201402230800', '0.005'),
(17, '2014-02-23 09:00:18', '8FC922', 4101, '201402230900', '0.007'),
(18, '2014-02-23 09:00:35', '9077DD', 4102, '201402230900', '0.001'),
(19, '2014-02-23 09:00:51', '9C5129', 4076, '201402230900', '29C5129'),
(20, '2014-02-23 09:01:08', '9077DB', 4412, '201402230900', '0.005'),
(21, '2014-02-23 10:00:18', '8FC922', 4102, '201402231000', '0.035'),
(22, '2014-02-23 10:00:34', '9077DD', 4103, '201402231000', '0.002'),
(23, '2014-02-23 10:00:51', '9C5129', 4077, '201402231000', '29C5129'),
(24, '2014-02-23 10:01:08', '9077DB', 4413, '201402231000', '0.005'),
(25, '2014-02-23 11:00:18', '8FC922', 4103, '201402231100', '0.012'),
(26, '2014-02-23 11:00:34', '9077DD', 4104, '201402231100', '0.001'),
(27, '2014-02-23 11:00:51', '9C5129', 4078, '201402231100', '29C5129'),
(28, '2014-02-23 11:01:08', '9077DB', 4414, '201402231100', '0.005');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'gtrdp', '7694f4a66316e53c8cdd9d9954bd611d', 'Guntur D Putra'),
(2, 'sby', '84677f32793669c8d0e679f81fc51bc2', 'Susilo B Yudhoyono');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
