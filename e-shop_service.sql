-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2021 at 09:03 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-shop&service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  `password` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'Harikesh Sahu', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `assest`
--

DROP TABLE IF EXISTS `assest`;
CREATE TABLE IF NOT EXISTS `assest` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `image` varchar(255) COLLATE utf16_bin NOT NULL,
  `date` varchar(255) COLLATE utf16_bin NOT NULL,
  `available` varchar(255) COLLATE utf16_bin NOT NULL,
  `ocost` int(11) NOT NULL,
  `scost` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `assest`
--

INSERT INTO `assest` (`pid`, `name`, `image`, `date`, `available`, `ocost`, `scost`) VALUES
(1, 'Mouse', '../images/mouse4.jpg', '2021-07-15', '6', 500, 600),
(2, 'Keyboard', '../images/keyboard.jpg', '2021-06-26', '10', 1000, 1800),
(3, 'Mic', '../images/mic.jpg', '2021-07-30', '5', 300, 500),
(4, 'Monitor', '../images/monitor.jpg', '2021-07-29', '3', 4000, 4500),
(5, 'Headset', '../images/backgraund.jpg', '2021-07-15', '5', 700, 800),
(6, 'Keyboard', '../images/Keyboard2.jpg', '2021-07-15', '7', 800, 850),
(7, 'Alexa', '../images/alexa.jpg', '2021-07-30', '6', 2000, 2300),
(8, 'Realme', '../images/mobile10.jpg', '2021-07-30', '7', 15000, 16000),
(9, 'Mouse', '../images/mouse5.jpg', '2021-07-15', '4', 500, 550),
(10, 'PC', '../images/PC1.jpg', '2021-07-15', '4', 18500, 20000),
(11, ' Sumsung', '../images/mobile8.jpg', '2021-07-23', '5', 15000, 16000),
(12, 'Laptop', '../images/laptop3.jpg', '2021-07-22', '4', 20000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

DROP TABLE IF EXISTS `assign`;
CREATE TABLE IF NOT EXISTS `assign` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `request` varchar(255) COLLATE utf16_bin NOT NULL,
  `description` varchar(255) COLLATE utf16_bin NOT NULL,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `address1` varchar(255) COLLATE utf16_bin NOT NULL,
  `address2` varchar(255) COLLATE utf16_bin NOT NULL,
  `city` varchar(255) COLLATE utf16_bin NOT NULL,
  `state` varchar(255) COLLATE utf16_bin NOT NULL,
  `zip` varchar(255) COLLATE utf16_bin NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  `mobile` varchar(255) COLLATE utf16_bin NOT NULL,
  `assign` varchar(255) COLLATE utf16_bin NOT NULL,
  `date` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`aid`, `rid`, `request`, `description`, `name`, `address1`, `address2`, `city`, `state`, `zip`, `email`, `mobile`, `assign`, `date`) VALUES
(1, 1, 'Laptop repairing', 'Not working due to screen is break', 'Harikesh Sahu', 'Airoli', 'new mumbai ', 'Thane', 'maharashtra', '400708', 'Sahu@gmail.com', '987664321', 'Ram Kumar', '2021-07-16'),
(2, 2, 'Tv Repairing', 'Damage', 'Saurabh', 'sec 16', 'airoli', 'thane', 'maharastra', '400708', 's@gmail.com', '0998766544', 'Kamlesh singh', '2021-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `price` varchar(255) COLLATE utf16_bin NOT NULL,
  `qty` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf16_bin NOT NULL,
  `pid` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `name`, `price`, `qty`, `user`, `pid`, `date`) VALUES
(67, 'Headset', '800', 1, 'sahu@gmail.com', 5, '2021-07-17'),
(64, 'Monitor', '4500', 1, 'sahu@gmail.com', 4, '2021-07-17'),
(65, 'Mic', '500', 1, 'sahu@gmail.com', 3, '2021-07-17'),
(66, 'Monitor', '4500', 1, 'sahu@gmail.com', 4, '2021-07-17'),
(61, 'Mouse', '600', 1, 'sahu@gmail.com', 1, '2021-07-17'),
(62, 'Keyboard', '1800', 1, 'sahu@gmail.com', 2, '2021-07-17'),
(63, 'Mic', '500', 1, 'sahu@gmail.com', 3, '2021-07-17'),
(68, 'Mouse', '600', 1, 's@gmail.com', 1, '2021-07-18'),
(69, 'Keyboard', '1800', 1, 's@gmail.com', 2, '2021-07-18'),
(70, 'Mic', '500', 1, 's@gmail.com', 3, '2021-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `or_id` int(11) NOT NULL AUTO_INCREMENT,
  `ORDER_ID` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `TXN_AMOUNT` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`or_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`or_id`, `ORDER_ID`, `EMAIL`, `TXN_AMOUNT`, `date`) VALUES
(50, 'ORDS23889966', 's@gmail.com', 2900, '2021-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `request` varchar(255) COLLATE utf16_bin NOT NULL,
  `description` varchar(255) COLLATE utf16_bin NOT NULL,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `address1` varchar(255) COLLATE utf16_bin NOT NULL,
  `address2` varchar(255) COLLATE utf16_bin NOT NULL,
  `city` varchar(255) COLLATE utf16_bin NOT NULL,
  `state` varchar(255) COLLATE utf16_bin NOT NULL,
  `zip` varchar(255) COLLATE utf16_bin NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  `mobile` varchar(255) COLLATE utf16_bin NOT NULL,
  `date` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) COLLATE utf16_bin NOT NULL,
  `address` varchar(255) COLLATE utf16_bin NOT NULL,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `quantity` int(11) NOT NULL,
  `scost` int(11) NOT NULL,
  `sdate` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`sid`, `cname`, `address`, `name`, `quantity`, `scost`, `sdate`) VALUES
(15, 'Rahul Sah', 'Mulund', 'Keyboard', 1, 1800, '2021-07-16'),
(16, 'Saurabh', 'Airoli', 'Mouse', 2, 600, '2021-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
CREATE TABLE IF NOT EXISTS `technician` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `city` varchar(255) COLLATE utf16_bin NOT NULL,
  `mobile` varchar(255) COLLATE utf16_bin NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`tid`, `name`, `city`, `mobile`, `email`) VALUES
(5, 'Ram Kumar', 'Thane', '9876567890', 'ram@gmail.com'),
(7, 'Kamlesh singh', 'Mumbai', '876532890', 'KS@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf16_bin NOT NULL,
  `email` varchar(255) COLLATE utf16_bin NOT NULL,
  `mobile` varchar(255) COLLATE utf16_bin NOT NULL,
  `address` varchar(255) COLLATE utf16_bin NOT NULL,
  `password` varchar(255) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'Harikesh Sahu', 'sahu@gmail.com', '9876543210', 'Airoli,New Mumbai', '202cb962ac59075b964b07152d234b70'),
(3, 'Saurabh', 's@gmail.com', '98765432', 'Airoli', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
