-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2019 at 01:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b`
--

-- --------------------------------------------------------

--
-- Table structure for table `kisan`
--

CREATE TABLE `kisan` (
  `region` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kisan`
--

INSERT INTO `kisan` (`region`, `contact`, `address`, `email`) VALUES
('Hyderabad', '9076531934', ' # 6-3-1090/B/2, 1st Floor, Mayank Towers,, Somajiguda,, Hyderabad, Telangana 500084', 'ozonetel@gmail.com'),
('Mumbai', '7861290989', 'Near hotel taj', 'Kisanmumbai@gmail.com'),
('Bangalore', '9097863091', 'Kanakapura Road, Gublala, Bangalore', 'kisanbangalore@gmail.com'),
('Chennai', '7830912876', 'No 305, Twins Towers, 1st Floor, TTK Road, Canara Bank, Near Music Academy', 'kisanchennai@gmail.com'),
('Pune', '8100892345', 'Jola Lala Lajpat Rai Sarani,', 'kisanpune@gmail.com'),
('Kolkata', '9897631092', '60A, 2nd Floor, Chowringhee Road, Lala Lajpat Rai Sarani,', 'kisankolkata@gmail.com'),
('Daporijo', '8929383196', 'Cona, Daporijo, Arunachal Pradesh 791122', 'evendrasinghka@gmail.com'),
('Guwahati', '7575909123', '2 Janpath Lane G.S. Road, Machkhowa, Guwahati, Assam 781007', 'kguwahati@gmail.com'),
('Bhubaneshwar', '9045717824', 'PLOT NO. 1562/1918, Lingipur, PH: 1, Sisupalgarh, Bhubaneswar, Odisha 751002', 'kisanodisha@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
