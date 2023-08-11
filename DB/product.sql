-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2023 at 07:17 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pImg` varchar(100) NOT NULL,
  `pName` varchar(50) NOT NULL,
  `pPrice` varchar(10) NOT NULL,
  `pML` varchar(20) NOT NULL,
  `For` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pImg`, `pName`, `pPrice`, `pML`, `For`) VALUES
('Beardo Godfather Perfume for Men 50ml.jpg', 'Beardo Godfather Perfume', '3500', '50ml', 'Men'),
('Beardo SINGLE MALT Whisky Smoke Perfume for men 50ml.jpg', 'Beardo SINGLE MALT Whisky Smoke', '3000', '50ml', 'Men'),
('Beardo Whisky Smoke Perfume for Men 100ml.jpg', 'Beardo Whisky Smoke ', '2999', '100ml', 'Men'),
('Bergamot BeautÃ© Valentine Pure Parfum 100 ML.jpg', 'Bergamot BeautÃ© Valentine Pure', '3000', '100ml', 'Women');
