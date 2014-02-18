-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2014 at 01:24 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `device`
--

INSERT INTO `device` (`id`, `address`, `description`, `img`, `status`) VALUES
(1, '9C5129', 'Charger notebooknya mas azka.', 'default.png', 'off'),
(2, '8FC922', 'Kulkas yang full dengan logistik.', 'default.png', 'off'),
(3, '9077DD', 'Microwave yang siap untuk ngangetin makanan.', 'default.png', 'off'),
(5, '90761B', 'Lampu Jarkom.', 'default.png', 'off');

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
