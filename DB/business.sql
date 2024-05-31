-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2024 at 07:04 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `business`
--

-- --------------------------------------------------------

--
-- Table structure for table `businessidea`
--

CREATE TABLE IF NOT EXISTS `businessidea` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Businessname` varchar(100) NOT NULL,
  `Investment` varchar(100) NOT NULL,
  `Requirements` varchar(100) NOT NULL,
  `Profit` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `businessidea`
--

INSERT INTO `businessidea` (`id`, `Businessname`, `Investment`, `Requirements`, `Profit`, `Uid`) VALUES
(2, 'Organic Product', '200000', '1 acre land', '100000 every month', 'nanda'),
(3, 'gff', '243453', 'yujuy', '4543', 'risi');

-- --------------------------------------------------------

--
-- Table structure for table `businesspeople`
--

CREATE TABLE IF NOT EXISTS `businesspeople` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `businesspeople`
--

INSERT INTO `businesspeople` (`fname`, `Uid`, `Pwd`, `email_id`, `address`, `mobile`) VALUES
('nanda', 'nanda', 'nanda', 'nanda@gmail.com', '7th street', '9629595205'),
('prakesh', 'prakesh', 'prakesh', 'prakesh@gmail.com', 'cbe', '9003502338'),
('risi', 'risi', 'risi', 'risi@gmail.com', 'mduu', '9047872535');

-- --------------------------------------------------------

--
-- Table structure for table `businessrequest`
--

CREATE TABLE IF NOT EXISTS `businessrequest` (
  `R_id` int(4) NOT NULL AUTO_INCREMENT,
  `Bid` varchar(100) NOT NULL,
  `Business` varchar(100) NOT NULL,
  `Investment` varchar(100) NOT NULL,
  `Businessid` varchar(100) NOT NULL,
  `Investorid` varchar(100) NOT NULL,
  PRIMARY KEY (`R_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `businessrequest`
--

INSERT INTO `businessrequest` (`R_id`, `Bid`, `Business`, `Investment`, `Businessid`, `Investorid`) VALUES
(8, '2', 'Organic Product', '200000', 'nanda', 'ravi'),
(9, '3', 'gff', '243453', 'risi', 'ravi');

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE IF NOT EXISTS `investor` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor`
--

INSERT INTO `investor` (`fname`, `Uid`, `Pwd`, `email_id`, `address`, `mobile`) VALUES
('ravi', 'ravi', 'ravi', 'ravi@gmail.com', '7th street', '9003502338');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE IF NOT EXISTS `proposal` (
  `P_id` int(4) NOT NULL AUTO_INCREMENT,
  `R_id` int(4) NOT NULL,
  `B_id` varchar(100) NOT NULL,
  `Business` varchar(100) NOT NULL,
  `Proposaldesc` varchar(100) NOT NULL,
  `Invesid` varchar(100) NOT NULL,
  `pmail` varchar(50) NOT NULL,
  `Busipeoid` varchar(100) NOT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`P_id`, `R_id`, `B_id`, `Business`, `Proposaldesc`, `Invesid`, `pmail`, `Busipeoid`) VALUES
(2, 8, '2', 'Organic Product', ' we need agreement papers', 'ravi', '', 'nanda'),
(3, 9, '3', 'gff', ' ttttt', 'ravi', 'rfgd@gmail.com', 'risi');
