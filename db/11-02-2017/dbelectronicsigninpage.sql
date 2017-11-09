-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2017 at 03:51 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbelectronicsigninpage`
--
CREATE DATABASE IF NOT EXISTS `dbelectronicsigninpage` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbelectronicsigninpage`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblinfo`
--

CREATE TABLE `tblinfo` (
  `id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `who_invited` varchar(150) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `pfa_agent_code` varchar(50) NOT NULL,
  `who_upline_qfd` varchar(150) NOT NULL,
  `who_direct_upline` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblinfo`
--

INSERT INTO `tblinfo` (`id`, `user_type_id`, `firstname`, `lastname`, `contact_no`, `email`, `who_invited`, `nickname`, `pfa_agent_code`, `who_upline_qfd`, `who_direct_upline`) VALUES
(2, 1, 'John Manuel', 'Maguigad', '98123', 'asdsa@gmail.com', 'Admin', 'JM', '', '', ''),
(3, 1, 'Christian', 'Villanueva', '091321387', 'asdsa@gmail.com', 'JM', 'Ian', '', '', ''),
(4, 1, 'Christian', 'Villanueva', '091321387', 'asdsa@gmail.com', 'JM', 'Ian', '', '', ''),
(5, 1, 'Christian', 'Villanueva', '091321387', 'asdsa@gmail.com', 'JM', 'Ian', '', '', ''),
(6, 1, 'Popoy', 'Sailor', '1231231', 'popoysailor@gmail.com', 'JM', 'popoy', '123', '', ''),
(7, 1, 'c', 'c', 'c', 'c', 'c', 'c', '', '', ''),
(8, 2, 'a', 'f', 'l', 'o', '', 'h', '123', 'r', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

CREATE TABLE `tblusertype` (
  `id` int(11) NOT NULL,
  `user_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`id`, `user_type_name`) VALUES
(1, 'Guest'),
(2, 'Associate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblinfo`
--
ALTER TABLE `tblinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusertype`
--
ALTER TABLE `tblusertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblinfo`
--
ALTER TABLE `tblinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tblusertype`
--
ALTER TABLE `tblusertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
