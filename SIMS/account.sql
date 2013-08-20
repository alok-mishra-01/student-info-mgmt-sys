-- phpMyAdmin SQL Dump
-- version 2.9.1.1-Debian-2ubuntu1.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 14, 2008 at 09:51 AM
-- Server version: 5.0.38
-- PHP Version: 5.2.1

SET AUTOCOMMIT=0;
START TRANSACTION;

-- 
-- Database: `UserAccount`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `id` varchar(50) NOT NULL default '',
  `userid` varchar(10) NOT NULL default '',
  `ip` varchar(20) NOT NULL default '',
  `tm` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` char(3) NOT NULL default 'ON',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`id`, `userid`, `ip`, `tm`, `status`) VALUES 
('0b70b588adf98c0182e312dca7100c49', 'alok007', '127.0.0.1', '2008-03-09 12:40:41', 'OFF'),
('63130f9771e50e3a8030b63f676175e0', 'alok_009', '127.0.0.1', '2008-03-10 03:56:33', 'OFF'),
('63130f9771e50e3a8030b63f676175e0', 'ASDF_df_01', '127.0.0.1', '2008-03-10 03:56:33', 'OFF'),
('bd08a2d850d08f24b976b2ab1cd90bc4', 'hnudupa', '127.0.0.1', '2008-04-03 01:16:05', 'OFF');

-- --------------------------------------------------------

-- 
-- Table structure for table `signup`
-- 

CREATE TABLE `signup` (
  `userid` varchar(10) NOT NULL default '',
  `password` varchar(10) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `name` varchar(50) NOT NULL default '',
  `fac_code` int(10) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `signup`
-- 

INSERT INTO `signup` (`userid`, `password`, `email`, `name`, `fac_code`) VALUES 
('hnudupa', 'password', 'hnudupa@manipal.edu', 'H.N. Udupa', 1234),
('admin', 'bluefish', 'admin@mitmanipal.org', 'Administrator', 0);

COMMIT;

