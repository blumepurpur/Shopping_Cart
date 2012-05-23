-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2012 at 04:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  `category_description` varchar(200) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `category_description` (`category_description`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'family', 'cars sutiabl e for the family'),
(2, 'sports', 'cars that can fly'),
(3, '4x4', 'four wheel drive cars'),
(4, 'convertables', 'cars that flip their lids');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cutomer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_first_name` varchar(20) NOT NULL,
  `customer_last_name` varchar(20) NOT NULL,
  `customer_email` varchar(40) NOT NULL,
  `customer_username` varchar(20) NOT NULL,
  `customer_password` varchar(20) NOT NULL,
  PRIMARY KEY (`cutomer_id`),
  UNIQUE KEY `customer_username` (`customer_username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cutomer_id`, `customer_first_name`, `customer_last_name`, `customer_email`, `customer_username`, `customer_password`) VALUES
(1, 'Paul', 'Payne', 'paul.payne@tafensw.edu.au', 'paul', '12345'),
(2, 'Joe', 'Smith', 'joe@com.au', 'Joe', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_description` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`) VALUES
(1, 1, 'Commodore Wagon', 33000, '5 seater large wagon'),
(2, 1, 'mazada premacy', 35000, '5 seater '),
(3, 2, 'BMW z4', 60000, 'fast and sleak'),
(4, 2, 'Audi TT', 75000, '2 door 2 seater'),
(5, 3, 'Range Rover', 55000, 'off road '),
(6, 3, 'Pathfinder', 65000, '7 seater off rad'),
(7, 4, 'Honda S2000', 70000, '2 seater '),
(8, 4, 'Mercedes Benz', 100000, 'overpriced');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_first_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_admin` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_first_name`, `user_last_name`, `user_email`, `user_created`, `user_admin`) VALUES
(1, 'paul', '123', 'Paul', 'Payne', 'paulpayne@web,com.au', '2012-03-13 01:04:00', 0),
(2, 'Albert', '123', 'Albert', 'Einstein', 'albert@cosmic.net', '2012-03-13 04:37:46', 0),
(3, 'bill', '123', 'Willam', 'Smith', 'ws@hotmail.com', '2012-03-20 01:37:28', 0),
(6, 'arturo', '123', 'arturo', 'montero', 'arturo@hotmail.com', '2012-05-08 01:06:01', 0),
(7, 'montero', '123', 'montero', 'montero', 'montero@hotmail.com', '2012-05-08 01:11:51', 0),
(8, 'maria', '123', 'maria', 'maria', 'maria@hotmail.com', '2012-05-08 01:13:23', 0),
(9, 'tia', '123', 'tia', 'tia', 'tia@gmail.com', '2012-05-08 01:29:54', 0),
(10, 'admin', '123', 'mario', 'copo', 'mario@mario.com', '2012-05-08 01:31:35', 0),
(11, 'admin', '123', 'arturo', 'montero', 'arturo@hotmail.com', '2012-05-08 01:38:57', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
