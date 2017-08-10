-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2017 at 01:49 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `srno` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `c_password` varchar(60) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`srno`, `first_name`, `middle_name`, `last_name`, `gender`, `email`, `city`, `address`, `mobile`, `password`, `c_password`) VALUES
(1, 'rohan', 'k', 'sharma', 'on', 'rohan@gmail.com', '', ' mohali', '675677889', '123', '123'),
(2, 'rohan', 'k', 'sharma', 'on', 'rohan@gmail.com', '', ' mohali', '675677889', '123', '123'),
(3, 'rohan', 'k', 'sharma', 'on', 'rohan@gmail.com', '', ' mohali', '675677889', '123', '123'),
(4, 'rohan', 'k', 'sharma', 'on', 'rohan@gmail.com', '', ' mohali', '675677889', '123', '123'),
(5, 'rohan', 'k', 'sharma', 'on', 'rohan@gmail.com', '', ' mohali', '675677889', '123', '123'),
(6, 'kiram', 'k', 'kirann', 'female', 'k@gmail.com', 'delhi', ' mohali', '43647548567', '123', '123'),
(7, 'nitish', 'kumar', 'nanda', 'male', 'nitish@gmail.com', 'mohALI', ' kangra', '5561141581', '123', ''),
(8, 'ww', 'ww', 'ww', 'male', 'a@gmail.com', 'delhi', ' sss', '2343434343', '123', '123'),
(9, 'ww', 'ww', 'ww', 'male', 'a@gmail.com', 'delhi', ' sss', '2343434343', '123', '123');
