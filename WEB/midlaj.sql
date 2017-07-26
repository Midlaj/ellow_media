-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 01:06 PM
-- Server version: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `midlaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(2, 'admin@321.', 'qwerty123', 'midlajmundath@gmail.com', 'Yes', NULL, 'No'),
(3, 'admin@321', '$2y$10$dGUIwB1RZjGAA2P4parX9OO.Cmn3IKliNAtJevGDE4exqoW6XPF9a', 'midumidlaj.m@gmail.com', 'Yes', NULL, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_available`
--

CREATE TABLE `tbl_available` (
  `pk_int_available_id` int(11) NOT NULL,
  `vchr_title` varchar(55) NOT NULL,
  `vchr_available_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_available`
--

INSERT INTO `tbl_available` (`pk_int_available_id`, `vchr_title`, `vchr_available_pic`) VALUES
(2, 'calicut', '5848.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `pk_int_banner_id` int(11) NOT NULL,
  `vchr_banner_name` varchar(255) NOT NULL,
  `vchr_title` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`pk_int_banner_id`, `vchr_banner_name`, `vchr_title`) VALUES
(9, '185.jpg', 'Hoardings Across Boundaries'),
(10, '324.jpg', 'We Care Your Business'),
(11, '2033.jpg', 'The Best Advertising Company');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `pk_int_news_id` int(11) NOT NULL,
  `vchr_title` varchar(55) NOT NULL,
  `vchr_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `pk_int_place_id` int(11) NOT NULL,
  `vchr_place_pic` varchar(255) NOT NULL,
  `vchr_description` text NOT NULL,
  `size_of_add` varchar(55) NOT NULL,
  `vchr_place_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`pk_int_place_id`, `vchr_place_pic`, `vchr_description`, `size_of_add`, `vchr_place_name`) VALUES
(1, '2551.jpg', 'show your adds', '32X24', 'pattambi'),
(2, '5030.jpg', 'highly recommende site', '32X24', 'mananjira'),
(3, '6428.jpg', 'best place to show add', '32X24', 'cochin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sold`
--

CREATE TABLE `tbl_sold` (
  `pk_int_sold_id` int(11) NOT NULL,
  `vchr_title` varchar(55) NOT NULL,
  `vchr_sold_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sold`
--

INSERT INTO `tbl_sold` (`pk_int_sold_id`, `vchr_title`, `vchr_sold_pic`) VALUES
(1, 'koratty', '7950.jpg'),
(3, 'fssgg', '8778.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `tbl_available`
--
ALTER TABLE `tbl_available`
  ADD PRIMARY KEY (`pk_int_available_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`pk_int_banner_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`pk_int_news_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`pk_int_place_id`);

--
-- Indexes for table `tbl_sold`
--
ALTER TABLE `tbl_sold`
  ADD PRIMARY KEY (`pk_int_sold_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_available`
--
ALTER TABLE `tbl_available`
  MODIFY `pk_int_available_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `pk_int_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `pk_int_news_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `pk_int_place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sold`
--
ALTER TABLE `tbl_sold`
  MODIFY `pk_int_sold_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
