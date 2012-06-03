-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2012 at 12:21 AM
-- Server version: 5.1.50
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book_sc`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(60) NOT NULL,
  `address` char(80) NOT NULL,
  `city` char(30) NOT NULL,
  `state` char(20) DEFAULT NULL,
  `zip` char(10) DEFAULT NULL,
  `country` char(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type_user` int(2) NOT NULL COMMENT '1 Administrator, 2 Customer',
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `state`, `zip`, `country`, `username`, `password`, `type_user`, `email`) VALUES
(1, 'johanna', 'glebe', 'sydney', 'nsw', '2323', 'australia', 'johanna', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, '0'),
(2, 'elizabeth', 'bondi', 'sydney', 'nsw', '2000', 'Colombia', 'customer', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, '0'),
(12, 'johanita', 'j', 'j', 'j', 'j', 'j', 'johanna2', '99800b85d3383e3a2fb45eb7d0066a4879a9dad0', 2, 'johanna0513@hotmail.com'),
(13, 'johanita', 'h', 'h', 'h', 'h', 'h', 'lala', 'd033e22ae348aeb5660fc2140aec35850c4da997', 2, 'johanna0513@hotmail.com'),
(14, 'arturo', 'balaclava', 'sydney', 'nsw', '2122', 'australia', 'arturo', 'e8bc682de39f8160e26870ce75968bfd56ccc87b', 2, 'plomo001@gmail.com'),
(16, 'luis', 'lidcombe', 'sydney', 'nsw', '2300', 'Australia', 'luis', 'f1126610f0021d3d24958e791102da22cd97b070', 2, 'sdf@df.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
