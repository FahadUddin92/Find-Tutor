-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: tuitionteacher.inspuratesystems.com
-- Generation Time: Oct 31, 2015 at 05:25 AM
-- Server version: 5.6.25
-- PHP Version: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuitionteacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `school` varchar(50) NOT NULL,
  `college` varchar(50) DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `area`, `city`, `age`, `contact_number`, `gender`, `school`, `college`, `university`) VALUES
(35, 'Fahad Uddin', 'fahaduddinpk@gmail.com', 'fahaduddin', 'Nazimabad', 'Karachi', 25, 2147483647, 'male', 'S.T Patrick''s High School', 'D.J Government Science College', 'NED University of Engineering and Teechnology');
