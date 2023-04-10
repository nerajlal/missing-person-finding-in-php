-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2023 at 03:47 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anonymous`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident_registration`
--

CREATE TABLE IF NOT EXISTS `accident_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `akey` char(8) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `accidentdetails` varchar(10) NOT NULL,
  `photo` text NOT NULL,
  `loginid` int(10) NOT NULL,
  `currentdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `accident_registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `casekey` char(8) NOT NULL,
  `cases` varchar(30) NOT NULL,
  `casedetails` varchar(50) NOT NULL,
  `occurenceday` text NOT NULL,
  `occurencedate` date NOT NULL,
  `occurencetime` time NOT NULL,
  `occurenceplace` varchar(50) NOT NULL,
  `currentdate` date NOT NULL,
  `loginid` int(10) NOT NULL,
  `cstatus` enum('0','1','2') NOT NULL,
  `firupload` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cases`
--


-- --------------------------------------------------------

--
-- Table structure for table `case_sheet`
--

CREATE TABLE IF NOT EXISTS `case_sheet` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ckey` char(8) NOT NULL,
  `patientname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `photo` text NOT NULL,
  `otherdetails` varchar(60) NOT NULL,
  `admitteddate` date NOT NULL,
  `loginid` int(10) NOT NULL,
  `currentdate` date NOT NULL,
  `postmortem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `case_sheet`
--


-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `complaintkey` char(8) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  `currentdate` date NOT NULL,
  `loginid` int(10) NOT NULL,
  `reply` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `complaints`
--


-- --------------------------------------------------------

--
-- Table structure for table `crime_history`
--

CREATE TABLE IF NOT EXISTS `crime_history` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `crimekey` char(8) NOT NULL,
  `criminalname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `otherdetails` varchar(50) NOT NULL,
  `loginid` int(10) NOT NULL,
  `currentdate` date NOT NULL,
  `crimehistory` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `crime_history`
--

INSERT INTO `crime_history` (`id`, `crimekey`, `criminalname`, `address`, `age`, `gender`, `otherdetails`, `loginid`, `currentdate`, `crimehistory`) VALUES
(6, 'abebc8d5', 'sasi', 'sasi nivas', '27', 'Male', 'nil', 39, '2023-02-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ekey` char(8) NOT NULL,
  `enquiry` varchar(40) NOT NULL,
  `hloginid` int(10) NOT NULL,
  `ploginid` int(10) NOT NULL,
  `currentdate` date NOT NULL,
  `usertype` enum('0','1','2') NOT NULL,
  `reply` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `enquiry`
--


-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE IF NOT EXISTS `found` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fkey` char(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `aadharno` bigint(20) NOT NULL,
  `founddetails` varchar(50) NOT NULL,
  `foundeddate` date NOT NULL,
  `currentdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `found`
--


-- --------------------------------------------------------

--
-- Table structure for table `hospital_registration`
--

CREATE TABLE IF NOT EXISTS `hospital_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hkey` char(8) NOT NULL,
  `hospitalname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `loginid` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hospital_registration`
--

INSERT INTO `hospital_registration` (`id`, `hkey`, `hospitalname`, `address`, `pincode`, `district`, `city`, `contactno`, `loginid`) VALUES
(10, '2ca8f3dc', 'hospital', 'hospital kollam', 691503, 'kollam', 'kollam', '8547470675', 40);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `lkey` char(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` enum('0','1','2','3') NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `lkey`, `email`, `password`, `usertype`, `status`) VALUES
(31, '22f0283c', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '0', '1'),
(39, '582e1dc4', 'police@gmail.com', '5d88313ea277811d52b0d7826cceb6d3', '1', '1'),
(40, 'a81b07de', 'hospital@gmail.com', '5d88313ea277811d52b0d7826cceb6d3', '2', '1'),
(41, 'd001be9e', 'public@gmail.com', '5d88313ea277811d52b0d7826cceb6d3', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `msgkey` char(10) NOT NULL,
  `senderid` int(10) NOT NULL,
  `message` varchar(50) NOT NULL,
  `recieverid` int(10) NOT NULL,
  `currentdate` date NOT NULL,
  `currenttime` time NOT NULL,
  `reply` varchar(50) NOT NULL,
  `viewstatus` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `missing_person`
--

CREATE TABLE IF NOT EXISTS `missing_person` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mkey` char(8) NOT NULL,
  `missingpersonname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `height` int(30) NOT NULL,
  `weight` int(20) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `identificationmark` varchar(60) NOT NULL,
  `missingplace` varchar(60) NOT NULL,
  `missingdate` date NOT NULL,
  `photo` text NOT NULL,
  `otherdetails` varchar(80) NOT NULL,
  `loginid` int(10) NOT NULL,
  `passstatus` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `missing_person`
--


-- --------------------------------------------------------

--
-- Table structure for table `police_registration`
--

CREATE TABLE IF NOT EXISTS `police_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pkey` char(8) NOT NULL,
  `stationid` int(20) NOT NULL,
  `addline1` varchar(50) NOT NULL,
  `addline2` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contactno` varchar(20) NOT NULL,
  `loginid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `police_registration`
--

INSERT INTO `police_registration` (`id`, `pkey`, `stationid`, `addline1`, `addline2`, `pincode`, `district`, `city`, `contactno`, `loginid`) VALUES
(15, '376a6a07', 5, 'gnoob kollam', 'gnoob kollam', 691503, 'kollam', 'kollam', '8547470675', 39);

-- --------------------------------------------------------

--
-- Table structure for table `postmortem_request`
--

CREATE TABLE IF NOT EXISTS `postmortem_request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pmkey` char(8) NOT NULL,
  `hospitalname` varchar(40) NOT NULL,
  `patientname` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `pincode` int(10) NOT NULL,
  `deathdate` date NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `currentdate` date NOT NULL,
  `loginid` int(10) NOT NULL,
  `uploads` text NOT NULL,
  `queries` varchar(60) NOT NULL,
  `reply` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `postmortem_request`
--


-- --------------------------------------------------------

--
-- Table structure for table `public_registration`
--

CREATE TABLE IF NOT EXISTS `public_registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pubkey` char(8) NOT NULL,
  `fullname` char(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `aadharno` bigint(16) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `loginid` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `public_registration`
--

INSERT INTO `public_registration` (`id`, `pubkey`, `fullname`, `address`, `pincode`, `district`, `city`, `gender`, `aadharno`, `contactno`, `loginid`) VALUES
(12, 'b597fe33', 'Francis', 'Francis nivas kollam', 691503, 'kollam', 'kollam', 'male', 123456789012, '8547470671', 41);
