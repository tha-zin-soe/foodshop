-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2020 at 02:23 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yfds`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mesg` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`con_id`, `name`, `email`, `phone`, `mesg`) VALUES
(11, 'warwaraung', 'warwarko0@gmail.com', '9253787295', 'sdjldjld');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `prod_no` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `img`, `prod_no`, `price`) VALUES
(9, 'photo.jpg', 'Friend Chicken', '5000'),
(10, 'photo6.jpg', 'Rice set', '6000'),
(11, 'blog-img-05.jpg', 'Pizza', '7000'),
(12, 'gallery-img-04.jpg', 'Prown', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `productno` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `productno`, `price`, `name`, `phone`, `address`, `order_no`) VALUES
(11, '9', '6000', 'Rice Set', '9253787295', 'jk', 'ord445'),
(12, '10', '6000', 'Rice Set', '9253787295', 'Kamaryout', 'ord213'),
(13, '9', '6000', 'Rice Set', '9253787295', 'Hlaing', 'ord136');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `township` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`, `city`, `township`) VALUES
(19, 'warwaraung', 'warwarko0@gmail.com', '12345', '9253787295', 'yangon', 'pop'),
(20, '', '', '', '', '', ''),
(21, 'AungAung ', 'aung@gamil.com', '12345', '9253787295', 'khlk', 'Kmaryout'),
(22, 'AungAung ', 'warwarko0@gmail.com', '12345', '9253787295', 'yangon', 'Yangon'),
(23, '', '', '', '', '', ''),
(24, 'Nyo Nyo Win', 'nyo@gmail.com', 'nyo12345', '9253787295', 'yangon', 'hlaing'),
(25, 'Aung Myo', 'myo@gmail.com', 'myo1234', '9253787295', 'dfdht', 'yangon'),
(26, 'Khin Win', 'khin@gmail.com', 'khin12345', '0943015202', 'Nay pyi taw', 'dlfkf'),
(27, '', '', '', '', '', ''),
(28, 'Nay Lin', 'nay@gmail.com', 'nay1234', '0943015202', 'Nay pyi taw', 'yangon'),
(29, '', '', '', '', '', ''),
(30, '', '', '', '', '', ''),
(31, '', '', '', '', '', ''),
(32, '', '', '', '', '', ''),
(33, 'MoeMoe', 'moe@gmail.com', 'moe12345', '9253787295', 'yangon', 'yangon'),
(34, '', '', '', '', '', ''),
(35, '', '', '', '', '', ''),
(36, 'Nyo Nyo', 'nyo@gmail.com', 'nyo12345', '0943015202', 'yangon', 'yangon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
