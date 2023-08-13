-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2023 at 05:31 AM
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
  `pImg` varchar(200) NOT NULL,
  `pName` varchar(50) NOT NULL,
  `pPrice` varchar(20) NOT NULL,
  `pML` varchar(15) NOT NULL,
  `For` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pImg`, `pName`, `pPrice`, `pML`, `For`) VALUES
('Beardo Godfather Perfume for Men 50ml.jpg', 'Beardo Godfather Perfume', '3500', '50ml', 'Men'),
('Beardo SINGLE MALT Whisky Smoke Perfume for men 50ml.jpg', 'Beardo SINGLE MALT Whisky Smoke', '3000', '50ml', 'Men'),
('Beardo Whisky Smoke Perfume for Men 100ml.jpg', 'Beardo Whisky Smoke ', '2999', '100ml', 'Men'),
('Bergamot BeautÃ© Valentine Pure Parfum 100 ML.jpg', 'Bergamot BeautÃ© Valentine Pure', '3000', '100ml', 'Women'),
('Carlton London Escape Perfume 100 ml.jpg', 'Carlton London Escape ', '999', '100ml', 'Womens'),
('Villain Raid Combo Perfume Gift Set for Men 4x8 ML.jpg', 'Villain Raid Combo', '1399', '100ml', 'Men'),
('Carlton London Women Limited Edition Blush Eau de Parfum- 100 ml.jpg', 'Carlton London Women ', '399', '100ml', 'Women'),
('Villain Perfume For Men 100 Ml.jpg', 'Villain Perfume', '999', '100ml', 'Men'),
('VILLAIN OUD Eau De Parfum For Men, 100ml.jpg', 'VILLAIN OUD Eau De Parfum', '1299', '100ml', 'Men'),
('Titan Skinn Eau.jpg', 'Titan Skinn Eau  ', '1298', '100ml', 'Women'),
('The Man Company Oud Perfume for Men 100ml.jpg', 'The Man Company Oud ', '1290', '100ml', 'Men'),
('MINISO Blooming Eau De Toilette Long Lasting Women Perfumes, 30ml.jpg', 'MINISO Blooming Eau De Toilette', '999', '30ml', 'Women'),
('Ramsons U R Lovely & U R Sweet Eau De Parfum Combo Pack (30ml x 2).jpg', 'Ramsons U R Lovely & U R Sweet Eau De', '999', '30ml', 'Women'),
('Skinn Celeste Perfume for Women, 50ml.jpg', 'Skinn Celeste Perfume', '499', '30ml', 'Women'),
('The Man Company Black EDT Perfume For Men - 50ml.jpg', 'The Man Company Black EDT ', '990', '50ml', 'Men'),
('The Man Company Night Perfume for Men - 50ml.jpg', 'The Man Company Night Perfume ', '1199', '50ml', 'Men'),
('The Man Company Ocean Perfume for Men 30ml.jpg', 'The Man Company Ocean ', '1199', '30ml', 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `MobileNum` varchar(12) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`MobileNum`, `Password`, `Status`) VALUES
('9924753878', '90', 'Admin'),
('9095468063', '11', 'customer');
