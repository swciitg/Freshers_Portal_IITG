-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2015 at 02:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yourdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `yourtable`
--

CREATE TABLE IF NOT EXISTS `yourtable` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `fb` varchar(200) NOT NULL,
  `positions` varchar(500) NOT NULL,
  `collage` varchar(300) NOT NULL,
  `coladd` varchar(1000) NOT NULL,
  `altph` int(11) NOT NULL,
  `acad` varchar(100) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yourtable`
--

INSERT INTO `yourtable` (`id`, `first_name`, `last_name`, `email`, `phone`, `fb`, `positions`, `collage`, `coladd`, `altph`, `acad`, `contact`, `district`, `state`) VALUES
(0, 'Ravi', 'Nishant', 'ravinishant1994@gmail.com', 2147483647, 'Sample score card', 'asdas', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'sadas', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'ravinishant1994@gmail.com', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'ravinishant1994@gmail.com', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'ravinishant1994@gmail.com', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'ravinishant1994@gmail.com', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'ravinishant1994@gmail.com', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'asdasd', 'asdasd', 'ravinishant1994@gmail.com', 0, 'sadasd', 'dfs', '', '', 0, '', '', '', ''),
(0, 'Ravi', 'Nishant', 'ravinishant1994@gmail.com', 2147483647, 'https://www.facebook.com/home.php', 'NA', 'IITG', 'Umiam Hostel, Iit Guwahati', 2147483647, 'Btech', 'Umiam Hostel, Iit Guwahati', 'Kamrup', 'Assam'),
(0, 'Ravi', 'Nishant', 'ravinishant1994@gmail.com', 2147483647, 'https://www.facebook.com/home.php', 'NA', 'IITG', 'Umiam Hostel, Iit Guwahati', 2147483647, 'Btech', 'Umiam Hostel, Iit Guwahati', 'Kamrup', 'Assam'),
(0, 'Ravi', 'Nishant', 'ravinishant1994@gmail.com', 2147483647, 'https://www.facebook.com/home.php', 'NA', 'IITG', 'Umiam Hostel, Iit Guwahati', 2147483647, 'Btech', 'Umiam Hostel, Iit Guwahati', 'Kamrup', 'Assam'),
(0, 'Ravi', 'Nishant', 'ravinishant1994@gmail.com', 2147483647, 'https://www.facebook.com/home.php', 'NA', 'IITK', 'Umiam Hostel, Iit Guwahati', 2147483647, 'btech', 'A-260, Umiam Hostel, IIT Guwahati', 'Kamrup', 'Assam');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
