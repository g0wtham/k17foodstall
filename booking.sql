-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2016 at 02:35 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `thens` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `address`, `thens`, `city`, `email`, `phone`) VALUES
('K17! Food Stall', 'CEG Campus', 'Anna University,Guindy', 'Chennai', 'ctf@annauniv.edu', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` text NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` bigint(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `star` int(25) NOT NULL,
  `good` varchar(25) NOT NULL,
  `bad` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `address`, `phone`, `email`, `star`, `good`, `bad`) VALUES
('Gowtham', 'RH-02 Agrini', 2147483647, 'gowthamparthipan@gmail.co', 4, 'Service', 'veg food'),
('Sujatha', 'Agrini', 9894788373, 'sujathaparthi@gmail.com', 3, 'non veg', 'service');

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE IF NOT EXISTS `show` (
  `sid` int(11) NOT NULL,
  `sdes` varchar(50) NOT NULL,
  `theatre` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `tkt` int(11) NOT NULL,
  `date` varchar(25) NOT NULL,
  `movie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`sid`, `sdes`, `theatre`, `price`, `tkt`, `date`, `movie`) VALUES
(1, 'Mutton Combo', 'Non-Veg', 299, 7, '21.06.2016', 'Mutton Biryani'),
(2, 'Chicken Combo', 'Non-Veg', 199, 14, '30.06.2016', 'Chicken Biryani'),
(3, 'Fish Combo', 'Non-Veg', 349, 12, '25.06.2016', 'Fish Biryani'),
(4, 'Mushroom Combo', 'Veg', 89, 20, '25.06.2016', 'Mushroom Biryani'),
(5, 'Paneer Combo', 'Veg', 99, 18, '01.07.2016', 'Paneer Biryani'),
(6, 'Complete Combo', 'Veg', 119, 40, '25.07.2016', 'Thali Meals'),
(7, 'Pizza Combo', 'Non-Veg', 99, 25, '31.07.2016', 'Chicken Pizza'),
(8, 'Sandwich Combo', 'Non-Veg', 99, 25, '21.07.2016', 'Chicken Sandwich'),
(9, 'Burger Combo', 'Non-Veg', 99, 25, '31.07.2016', 'Chicken Burger'),
(10, 'Egg Combo', 'Non-Veg', 99, 10, '25.06.2016', 'Egg Tikka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(18) NOT NULL,
  `pno` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `pass`, `pno`, `city`, `name`, `age`) VALUES
('abc@gmail.com', 'abcd', 999, 'mdu', 'gowtham', 19),
('gowthamparthipan@gmail.com', 'india2020', 2147483647, 'Madurai', 'gowtham', 19),
('sujathaparthi@gmail.com', 'india2020', 2147483647, 'Madurai', 'sujatha', 42);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
