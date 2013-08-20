-- phpMyAdmin SQL Dump
-- version 2.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2008 at 11:53 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT=0;
START TRANSACTION;

--
-- Database: `sims`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE IF NOT EXISTS `academic` (
  `stu_reg` varchar(20) NOT NULL,
  `stu_roll` int(5) NOT NULL,
  `allot_id` smallint(6) NOT NULL,
  `assgn1` varchar(15) NOT NULL default 'N',
  `assgn2` varchar(15) NOT NULL default 'N',
  `assgn3` varchar(15) NOT NULL default 'N',
  `assgn4` varchar(15) NOT NULL default 'N',
  `assgn5` varchar(15) NOT NULL default 'N',
  `sess1` float NOT NULL,
  `sess2` float NOT NULL,
  `sess3` float NOT NULL,
  `internal` float NOT NULL,
  `assgn_marks` float NOT NULL,
  `sess_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`stu_reg`,`sess_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`stu_reg`, `stu_roll`, `allot_id`, `assgn1`, `assgn2`, `assgn3`, `assgn4`, `assgn5`, `sess1`, `sess2`, `sess3`, `internal`, `assgn_marks`, `sess_id`) VALUES
('40906111', 87, 3, 'L', 'N', 'N', 'N', 'N', 9, 12, 6, 21, 6, ''),
('40906135', 77, 3, 'NS;Q,1,2', 'Y', 'N', 'N', 'N', 7, 10, 7, 17, 8, ''),
('40906123', 89, 3, 'L', 'Y', 'N', 'N', 'N', 6, 13, 4, 19, 9, ''),
('40906031', 92, 3, 'Y', 'Y', 'N', 'N', 'N', 19, 5, 8, 27, 4, ''),
('40906039', 102, 3, 'Y', 'N', 'N', 'N', 'N', 12, 7, 8, 20, 5, ''),
('40906129', 96, 3, 'Y', 'N', 'N', 'N', 'N', 20, 4, 5, 25, 2, ''),
('40906125', 105, 3, 'Y', 'N', 'N', 'N', 'N', 12, 6, 5, 18, 7, ''),
('40906030', 109, 3, 'L', 'N', 'N', 'N', 'N', 3, 5, 12, 17, 9, '');

-- --------------------------------------------------------

--
-- Table structure for table `allot`
--

CREATE TABLE IF NOT EXISTS `allot` (
  `allot_id` smallint(6) NOT NULL auto_increment,
  `fac_code` int(10) NOT NULL,
  `sub_code` varchar(15) NOT NULL,
  `sub_br` varchar(20) NOT NULL,
  `stu_sem` int(5) NOT NULL,
  `stu_sec` char(1) NOT NULL,
  `sess_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`allot_id`,`sess_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `allot`
--

INSERT INTO `allot` (`allot_id`, `fac_code`, `sub_code`, `sub_br`, `stu_sem`, `stu_sec`, `sess_id`) VALUES
(102, 1234, 'ELE-101', 'E&E', 1, 'A', ''),
(101, 1234, 'ELE-405', 'E&E', 7, 'C', ''),
(100, 1234, 'ELE-403', 'E&E', 7, 'C', '');

-- --------------------------------------------------------

--
-- Table structure for table `att`
--

CREATE TABLE IF NOT EXISTS `att` (
  `fac_code` int(11) NOT NULL,
  `sub_code` varchar(30) NOT NULL,
  `stu_name` varchar(30) NOT NULL,
  `stu_reg` int(11) NOT NULL,
  `stu_roll` int(11) NOT NULL,
  `att_dt` date NOT NULL,
  `attend` char(1) NOT NULL default 'D',
  `sess_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `att`
--

INSERT INTO `att` (`fac_code`, `sub_code`, `stu_name`, `stu_reg`, `stu_roll`, `att_dt`, `attend`, `sess_id`) VALUES
(1234, 'ELE-405', 'Pratik Piyush', 40906030, 109, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Zain Rahman', 40906125, 105, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Arjun Deb', 40906039, 102, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Soumyajit Pradhani', 40906129, 96, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Rajiv Sinha', 40906123, 89, '2008-04-26', 'A', ''),
(1234, 'ELE-405', 'Rajesh Kumar', 40906031, 92, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Arjun Deb', 40906039, 102, '2008-04-24', 'P', ''),
(1234, 'ELE-405', 'Zain Rahman', 40906125, 105, '2008-04-24', 'P', ''),
(1234, 'ELE-405', 'Pratik Piyush', 40906030, 109, '2008-04-24', 'P', ''),
(1234, 'ELE-405', 'Alok Mishra', 40906135, 77, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Devi Prasad Misra', 40906111, 87, '2008-04-26', 'P', ''),
(1234, 'ELE-405', 'Devi Prasad Misra', 40906111, 87, '2008-04-24', 'P', ''),
(1234, 'ELE-405', 'Rajiv Sinha', 40906123, 89, '2008-04-24', 'A', ''),
(1234, 'ELE-405', 'Soumyajit Pradhani', 40906129, 96, '2008-04-24', 'P', ''),
(1234, 'ELE-405', 'Rajesh Kumar', 40906031, 92, '2008-04-24', 'P', ''),
(1234, 'ELE-405', 'Alok Mishra', 40906135, 77, '2008-04-24', 'P', '');

-- --------------------------------------------------------

--
-- Table structure for table `currentsession`
--

CREATE TABLE IF NOT EXISTS `currentsession` (
  `current` varchar(10) NOT NULL,
  UNIQUE KEY `current` (`current`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentsession`
--


-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fac_code` varchar(10) NOT NULL,
  `fac_name` varchar(30) NOT NULL,
  `fac_dept` varchar(20) NOT NULL,
  `fac_des` varchar(20) NOT NULL,
  PRIMARY KEY  (`fac_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_code`, `fac_name`, `fac_dept`, `fac_des`) VALUES
('1234', 'Mr. Nagaraj Udupa', 'E&E', 'Assoc. Professor'),
('1235', 'Dr. K.R.Varmah', 'E&E', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE IF NOT EXISTS `session` (
  `sess_id` varchar(10) NOT NULL,
  `sess_begin` date NOT NULL,
  `sess_end` date NOT NULL,
  `evenorodd` varchar(10) NOT NULL,
  PRIMARY KEY  (`sess_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`sess_id`, `sess_begin`, `sess_end`, `evenorodd`) VALUES
('2008odd', '2008-04-03', '2008-04-18', 'odd'),
('', '2008-04-04', '2008-04-20', 'odd');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_name` varchar(30) NOT NULL,
  `stu_br` varchar(6) NOT NULL,
  `stu_reg` int(10) NOT NULL,
  `stu_roll` int(5) NOT NULL,
  `stu_sem` int(11) NOT NULL,
  `stu_sec` char(1) NOT NULL,
  `stu_yr_add` year(4) NOT NULL,
  `stu_att_per` float NOT NULL,
  `stu_cgpa` float NOT NULL,
  PRIMARY KEY  (`stu_reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_name`, `stu_br`, `stu_reg`, `stu_roll`, `stu_sem`, `stu_sec`, `stu_yr_add`, `stu_att_per`, `stu_cgpa`) VALUES
('Alok Mishra', 'E&E', 40906135, 77, 7, 'C', 2004, 87, 9.9),
('Devi Prasad Misra', 'E&E', 40906111, 87, 7, 'C', 2004, 78.8, 6.7),
('Rajiv Sinha', 'E&E', 40906123, 89, 7, 'C', 2004, 92, 7.1),
('Rajesh Kumar', 'E&E', 40906031, 92, 7, 'C', 2004, 95, 6.9),
('Soumyajit Pradhani', 'E&E', 40906129, 96, 7, 'C', 2004, 91, 7.4),
('Arjun Deb', 'E&E', 40906039, 102, 7, 'C', 2004, 81, 6.7),
('Zain Rahman', 'E&E', 40906125, 105, 7, 'C', 2004, 83.8, 8.9),
('Pratik Piyush', 'E&E', 40906030, 109, 7, 'C', 2004, 86.6, 8.2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `sub_cre` int(11) NOT NULL,
  `sub_br` varchar(20) NOT NULL,
  `sub_sem` int(11) NOT NULL,
  `sub_type` varchar(10) NOT NULL,
  `sess_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`sub_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_code`, `sub_name`, `sub_cre`, `sub_br`, `sub_sem`, `sub_type`, `sess_id`) VALUES
('ELE-403', 'Modern Power Converters', 3, 'E&E', 7, 'T;C', '2008even'),
('ELE-405', 'Switchgears And Protection', 4, 'E&E', 7, 'T;C', '2008even'),
('ELE-309', 'Power System Analysis', 4, 'E&E', 5, 'T;C', '2008even'),
('ELE-101', 'Basic Electrical Technology', 4, 'E&E', 1, 'T;C', '2008even');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `allot_id` smallint(6) NOT NULL,
  `mon` varchar(20) NOT NULL default 'N',
  `tue` varchar(20) NOT NULL default 'N',
  `wed` varchar(20) NOT NULL default 'N',
  `thu` varchar(20) NOT NULL default 'N',
  `fri` varchar(20) NOT NULL default 'N',
  `sat` varchar(20) NOT NULL default 'N',
  `sess_id` varchar(10) NOT NULL,
  PRIMARY KEY  (`allot_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`allot_id`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `sess_id`) VALUES
(1, '8-9', 'N', '11.30-12.30', '8-9', 'N', '3-4', '0'),
(2, 'N', '8-9', '8-9', 'N', '2-3', 'N', '0'),
(3, '2-3', '10.30-11.30', 'N', '9-10', 'N', 'N', '0');

COMMIT;

