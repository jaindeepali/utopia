-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2015 at 02:22 AM
-- Server version: 5.5.34-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `productivity`
--

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE IF NOT EXISTS `goal` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `deadline` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`gid`, `description`, `deadline`, `uid`, `created_at`) VALUES
(1, 'demo', 1425736880, 3, 1425736880),
(2, 'demo', 1425736880, 3, 1425736880),
(3, 'new goal', 1448994600, 3, 1425742683);

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `qid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `work_summary` varchar(300) NOT NULL,
  `time_spent` int(11) NOT NULL,
  `gauge_effort` tinyint(1) NOT NULL,
  `goal_change` tinyint(1) NOT NULL,
  `approach_change` tinyint(1) NOT NULL,
  `purpose_reminder` varchar(300) NOT NULL,
  `next_time_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `done` tinyint(1) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `pass`, `name`) VALUES
(1, 'djdeepalijain811@gmail.com', 'pass', 'deepali'),
(2, 'new@gmail.com', 'passnew', 'saxax'),
(3, 'abs@gmail.com', 'abs', 'nmas'),
(5, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
