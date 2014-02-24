-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2014 at 06:11 PM
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
-- Table structure for table `crontab`
--

CREATE TABLE IF NOT EXISTS `crontab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `device_address` varchar(6) NOT NULL,
  `row` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `crontab`
--

INSERT INTO `crontab` (`id`, `device_address`, `row`) VALUES
(1, '', '@hourly php /var/www/suvi/script/update-db.php'),
(2, '8FC922', '*/60 * * * * sudo perl /var/www/suvi/script/schedule.pl 28FC922 2400'),
(3, '9C5129', '*/2 * * * * sudo perl /var/www/suvi/script/schedule.pl 29C5129 60');

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
  `schedule_on` int(2) NOT NULL DEFAULT '0',
  `schedule_off` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `address`, `description`, `img`, `status`, `schedule_on`, `schedule_off`) VALUES
(2, '8FC922', 'Kulkas yang full dengan logistik.', 'default.png', 'on', 40, 20),
(3, '9077DD', 'Microwave di sebelah selatan.', 'default.png', 'on', 0, 0),
(7, '9C5129', 'Charger laptop.', 'default.png', 'off', 1, 1),
(8, '9077DB', 'Printer.', 'default.png', 'on', 0, 0),
(9, '9C43BE', 'Dispenser.', 'default.png', 'off', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

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
(28, '2014-02-23 11:01:08', '9077DB', 4414, '201402231100', '0.005'),
(29, '2014-02-23 12:00:17', '8FC922', 4105, '201402231200', '0'),
(30, '2014-02-23 12:00:34', '9077DD', 4106, '201402231200', '0.001'),
(31, '2014-02-23 12:00:51', '9C5129', 4080, '201402231200', '29C5129'),
(32, '2014-02-23 12:01:07', '9077DB', 4416, '201402231200', '0.005'),
(33, '2014-02-23 12:01:24', '9C43BE', 3656, '201402231201', '0'),
(34, '2014-02-23 13:00:18', '8FC922', 4106, '201402231300', '0.05'),
(35, '2014-02-23 13:00:34', '9077DD', 4107, '201402231300', '0.001'),
(36, '2014-02-23 13:00:51', '9C5129', 4081, '201402231300', '29C5129'),
(37, '2014-02-23 13:01:08', '9077DB', 4417, '201402231300', '0.005'),
(38, '2014-02-23 13:01:24', '9C43BE', 3657, '201402231301', '0'),
(39, '2014-02-23 14:00:18', '8FC922', 4107, '201402231400', '0'),
(40, '2014-02-23 14:00:35', '9077DD', 4108, '201402231400', '0.001'),
(41, '2014-02-23 14:00:51', '9C5129', 4082, '201402231400', '29C5129'),
(42, '2014-02-23 14:01:08', '9077DB', 4418, '201402231400', '0.005'),
(43, '2014-02-23 14:01:25', '9C43BE', 3658, '201402231401', '0'),
(44, '2014-02-23 15:00:17', '8FC922', 4108, '201402231500', '0.046'),
(45, '2014-02-23 15:00:34', '9077DD', 4109, '201402231500', '0.001'),
(46, '2014-02-23 15:00:51', '9C5129', 4083, '201402231500', '29C5129'),
(47, '2014-02-23 15:01:07', '9077DB', 4419, '201402231500', '0.005'),
(48, '2014-02-23 15:01:24', '9C43BE', 3659, '201402231501', '0'),
(49, '2014-02-23 16:00:18', '8FC922', 4109, '201402231600', '0'),
(50, '2014-02-23 16:00:34', '9077DD', 4110, '201402231600', '0.001'),
(51, '2014-02-23 16:00:51', '9C5129', 4084, '201402231600', '29C5129'),
(52, '2014-02-23 16:01:08', '9077DB', 4420, '201402231600', '0.005'),
(53, '2014-02-23 16:01:24', '9C43BE', 3660, '201402231601', '0'),
(54, '2014-02-23 17:00:18', '8FC922', 4110, '201402231700', '0.043'),
(55, '2014-02-23 17:00:35', '9077DD', 4111, '201402231700', '0.001'),
(56, '2014-02-23 17:00:51', '9C5129', 4085, '201402231700', '29C5129'),
(57, '2014-02-23 17:01:08', '9077DB', 4421, '201402231700', '0.005'),
(58, '2014-02-23 17:01:25', '9C43BE', 3661, '201402231701', '0'),
(59, '2014-02-23 18:00:17', '8FC922', 4111, '201402231800', '0'),
(60, '2014-02-23 18:00:34', '9077DD', 4112, '201402231800', '0.001'),
(61, '2014-02-23 18:00:51', '9C5129', 4086, '201402231800', '29C5129'),
(62, '2014-02-23 18:01:07', '9077DB', 4422, '201402231800', '0.005'),
(63, '2014-02-23 18:01:24', '9C43BE', 3662, '201402231801', '0'),
(64, '2014-02-23 19:00:18', '8FC922', 4112, '201402231900', '0.043'),
(65, '2014-02-23 19:00:34', '9077DD', 4113, '201402231900', '0.001'),
(66, '2014-02-23 19:00:51', '9C5129', 4087, '201402231900', '29C5129'),
(67, '2014-02-23 19:01:07', '9077DB', 4423, '201402231900', '0.005'),
(68, '2014-02-23 19:01:24', '9C43BE', 3663, '201402231901', '0'),
(69, '2014-02-23 20:00:18', '8FC922', 4113, '201402232000', '0'),
(70, '2014-02-23 20:00:34', '9077DD', 4114, '201402232000', '0.001'),
(71, '2014-02-23 20:00:51', '9C5129', 4088, '201402232000', '29C5129'),
(72, '2014-02-23 20:01:08', '9077DB', 4424, '201402232000', '0.005'),
(73, '2014-02-23 20:01:24', '9C43BE', 3664, '201402232001', '0'),
(74, '2014-02-23 21:00:18', '8FC922', 4114, '201402232100', '0.04'),
(75, '2014-02-23 21:00:35', '9077DD', 4115, '201402232100', '0.001'),
(76, '2014-02-23 21:00:51', '9C5129', 4089, '201402232100', '29C5129'),
(77, '2014-02-23 21:01:08', '9077DB', 4425, '201402232100', '0.005'),
(78, '2014-02-23 21:01:25', '9C43BE', 3665, '201402232101', '0'),
(79, '2014-02-23 22:00:17', '8FC922', 4115, '201402232200', '0'),
(80, '2014-02-23 22:00:34', '9077DD', 4116, '201402232200', '0.001'),
(81, '2014-02-23 22:00:51', '9C5129', 4090, '201402232200', '29C5129'),
(82, '2014-02-23 22:01:07', '9077DB', 4426, '201402232200', '0.005'),
(83, '2014-02-23 22:01:24', '9C43BE', 3666, '201402232201', '0'),
(84, '2014-02-23 23:00:18', '8FC922', 4116, '201402232300', '0.039'),
(85, '2014-02-23 23:00:34', '9077DD', 4117, '201402232300', '0.001'),
(86, '2014-02-23 23:00:51', '9C5129', 4091, '201402232300', '29C5129'),
(87, '2014-02-23 23:01:07', '9077DB', 4427, '201402232300', '0.005'),
(88, '2014-02-23 23:01:24', '9C43BE', 3667, '201402232301', '0'),
(89, '2014-02-24 00:00:18', '8FC922', 4117, '201402240000', '0'),
(90, '2014-02-24 00:00:34', '9077DD', 4118, '201402240000', '0.001'),
(91, '2014-02-24 00:00:51', '9C5129', 4092, '201402240000', '29C5129'),
(92, '2014-02-24 00:01:08', '9077DB', 4428, '201402240000', '0.005'),
(93, '2014-02-24 00:01:24', '9C43BE', 3668, '201402240001', '0'),
(94, '2014-02-24 01:00:18', '8FC922', 4118, '201402240100', '0.041'),
(95, '2014-02-24 01:00:35', '9077DD', 4119, '201402240100', '0.001'),
(96, '2014-02-24 01:00:51', '9C5129', 4093, '201402240100', '29C5129'),
(97, '2014-02-24 01:01:08', '9077DB', 4429, '201402240100', '0.005'),
(98, '2014-02-24 01:01:25', '9C43BE', 3669, '201402240101', '0.146'),
(99, '2014-02-24 02:00:17', '8FC922', 4119, '201402240200', '0'),
(100, '2014-02-24 02:00:34', '9077DD', 4120, '201402240200', '0.001'),
(101, '2014-02-24 02:00:51', '9C5129', 4094, '201402240200', '29C5129'),
(102, '2014-02-24 02:01:07', '9077DB', 4430, '201402240200', '0.005'),
(103, '2014-02-24 02:01:24', '9C43BE', 3670, '201402240201', '0.066'),
(104, '2014-02-24 03:00:18', '8FC922', 4120, '201402240300', '0.038'),
(105, '2014-02-24 03:00:34', '9077DD', 4121, '201402240300', '0.001'),
(106, '2014-02-24 03:00:51', '9C5129', 4095, '201402240300', '29C5129'),
(107, '2014-02-24 03:01:08', '9077DB', 4431, '201402240300', '0.005'),
(108, '2014-02-24 03:01:26', '9C43BE', 3671, '201402240301', '0.067'),
(109, '2014-02-24 04:00:18', '8FC922', 4121, '201402240400', '0.038'),
(110, '2014-02-24 04:00:35', '9077DD', 4122, '201402240400', '0.001'),
(111, '2014-02-24 04:00:52', '9C5129', 4096, '201402240400', '29C5129'),
(112, '2014-02-24 04:01:08', '9077DB', 4432, '201402240400', '0.005'),
(113, '2014-02-24 04:01:25', '9C43BE', 3672, '201402240401', '0.09'),
(114, '2014-02-24 05:00:18', '8FC922', 4122, '201402240500', '0.071'),
(115, '2014-02-24 05:00:35', '9077DD', 4123, '201402240500', '0.001'),
(116, '2014-02-24 05:00:51', '9C5129', 4072, '201402240500', '0.002'),
(117, '2014-02-24 05:01:08', '9077DB', 4433, '201402240500', '0.005'),
(118, '2014-02-24 05:01:25', '9C43BE', 3673, '201402240501', '0.11'),
(119, '2014-02-24 06:00:18', '8FC922', 4123, '201402240600', '0.025'),
(120, '2014-02-24 06:00:34', '9077DD', 4124, '201402240600', '0.112'),
(121, '2014-02-24 06:00:51', '9C5129', 4073, '201402240600', '0'),
(122, '2014-02-24 06:01:10', '9077DB', 4434, '201402240600', '0.005'),
(123, '2014-02-24 07:00:18', '8FC922', 4124, '201402240700', '0.044'),
(124, '2014-02-24 07:00:35', '9077DD', 4125, '201402240700', '0.001'),
(125, '2014-02-24 07:00:52', '9C5129', 4074, '201402240700', '0'),
(126, '2014-02-24 07:01:08', '9077DB', 4435, '201402240700', '0.005'),
(127, '2014-02-24 07:01:25', '9C43BE', 3675, '201402240701', '0.064'),
(128, '2014-02-24 08:00:18', '8FC922', 4125, '201402240800', '0.046'),
(129, '2014-02-24 08:00:35', '9077DD', 4126, '201402240800', '0.001'),
(130, '2014-02-24 08:00:51', '9C5129', 4075, '201402240800', '0'),
(131, '2014-02-24 08:01:08', '9077DB', 4436, '201402240800', '0.005'),
(132, '2014-02-24 08:01:25', '9C43BE', 3676, '201402240801', '0.102'),
(133, '2014-02-24 09:00:18', '8FC922', 4126, '201402240900', '0.025'),
(134, '2014-02-24 09:00:34', '9077DD', 4127, '201402240900', '0.001'),
(135, '2014-02-24 09:00:51', '9C5129', 4076, '201402240900', '0'),
(136, '2014-02-24 09:01:08', '9077DB', 4437, '201402240900', '0.005'),
(137, '2014-02-24 09:01:24', '9C43BE', 3677, '201402240901', '0.112'),
(138, '2014-02-24 10:00:18', '9C43BE', 3678, '201402241000', '0.11');

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
