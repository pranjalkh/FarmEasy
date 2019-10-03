-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2019 at 06:56 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebuybd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(125) NOT NULL,
  `lastName` varchar(125) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `confirmCode` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`, `type`, `confirmCode`) VALUES
(3, 'Manav', 'Jain', 'manav@gmail.com', '01678293748', 'Dhaka, Bangladesh', 'ab311d308738b3145c34998285b5f247', 'manager', '117631'),
(4, 'Admin', 'Admin', 'Admin@admin.com', '1234567895', 'vit', '21232f297a57a5a743894a0e4a801fc3', 'seller', '201034');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `oplace` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dstatus` varchar(10) NOT NULL DEFAULT 'no',
  `odate` date NOT NULL,
  `ddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `pid`, `quantity`, `oplace`, `mobile`, `dstatus`, `odate`, `ddate`) VALUES
(32, 12, 68, 1, 'k903', '7894561230', 'Yes', '2019-03-26', '2019-04-02'),
(33, 12, 59, 2, 'k903', '7894561230', 'no', '2019-03-26', '2019-04-02'),
(34, 12, 67, 1, 'k903', '7894561230', 'no', '2019-03-26', '2019-04-02'),
(35, 12, 62, 1, 'k903', '7894561230', 'no', '2019-03-27', '2019-04-03'),
(36, 12, 59, 1, 'k903', '7894561230', 'Cancel', '2019-03-27', '2019-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pName` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `available` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `pCode` varchar(20) NOT NULL,
  `picture` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pName`, `price`, `description`, `available`, `category`, `type`, `item`, `pCode`, `picture`) VALUES
(56, 'Rice', 25, 'Raw Rice', 5, 'farm', 'clothing', 'rice', '1', '1553634214.jpg'),
(57, 'Brown Rice', 45, 'Brown Raw Rice', 4, 'farm', 'clothing', 'rice', '2', '1553634272.jpg'),
(58, 'Basmati Rice', 22, 'Basmati Rice', 2, 'farm', 'clothing', 'rice', '3', '1553634303.jpg'),
(59, 'Wheat', 35, 'Unmalted Raw Wheat', 2, 'farm', 'clothing', 'wheat', '4', '1553634397.jpg'),
(60, 'Organic Wheat', 50, 'Organic Wheat', 5, 'farm', 'clothing', 'wheat', '5', '1553634464.jpg'),
(61, 'Rajma', 36, 'Rajma Dal', 5, 'farm', 'clothing', 'pulses', '6', '1553634654.jpg'),
(62, 'Black Gram', 48, 'urad dal(Black gram)', 3, 'farm', 'clothing', 'pulses', '7', '1553634698.jpg'),
(63, 'Corn', 22, 'Fresh Farm Corn', 7, 'farm', 'clothing', 'corn', '8', '1553634790.jpg'),
(64, 'Baby Corn', 47, 'Baby Corn', 9, 'farm', 'clothing', 'corn', '8', '1553634828.jpg'),
(65, 'Apple', 85, 'Fresh Kashmiri Apple', 8, 'farm', 'clothing', 'fruits', '9', '1553634958.jpg'),
(66, 'Green Apple', 90, 'Fresh Green Apples', 6, 'farm', 'clothing', 'fruits', '10', '1553634989.jpg'),
(67, 'broccoli', 55, 'broccoli', 5, 'farm', 'clothing', 'vegetables', '11', '1553635112.jpg'),
(68, 'Carrot', 44, 'carrot', 4, 'farm', 'clothing', 'vegetables', '12', '1553635141.jpg'),
(69, 'Raw Cotton', 80, 'Raw Cotton', 9, 'farm', 'clothing', 'cotton', '13', '1553635226.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmCode` varchar(10) NOT NULL,
  `activation` varchar(10) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`, `confirmCode`, `activation`) VALUES
(12, 'Rajeev', 'Jaiswal', 'rajeev@gmail.com', '7894561230', 'k903', 'a675ffb2ec24936fba6e16d5f384578f', '0', 'yes');
