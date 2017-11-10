-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2017 at 03:39 PM
-- Server version: 10.1.23-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `tblassociatesignin`
--

CREATE TABLE `tblassociatesignin` (
  `assoc_signin_id` int(11) NOT NULL,
  `pfa_agent_code` varchar(50) NOT NULL,
  `sign_in_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblassociatesignin`
--

INSERT INTO `tblassociatesignin` (`assoc_signin_id`, `pfa_agent_code`, `sign_in_date`) VALUES
(1, 'PFA123', '2017-11-10 14:25:07'),
(2, 'Oh12784', '2017-11-10 15:11:41'),
(4, '1237849', '2017-11-10 15:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `tblinfo`
--

CREATE TABLE `tblinfo` (
  `info_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `who_invited` varchar(150) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `pfa_agent_code` varchar(50) NOT NULL,
  `who_upline_qfd` varchar(150) NOT NULL,
  `who_direct_upline` varchar(150) NOT NULL,
  `date_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblinfo`
--

INSERT INTO `tblinfo` (`info_id`, `user_type_id`, `firstname`, `lastname`, `contact_no`, `email`, `who_invited`, `nickname`, `pfa_agent_code`, `who_upline_qfd`, `who_direct_upline`, `date_register`) VALUES
(2, 1, 'John Manuels', 'Maguigad', '98123', 'asdsa@gmail.com', 'Admin', 'JMs', '', '', '', '2017-10-31 06:27:43'),
(4, 1, 'Christian', 'Villanueva', '091321387', 'asdsa@gmail.com', 'JM', 'Ian', '', '', '', '2017-11-09 06:27:43'),
(7, 2, 'po', 'po', '09232389', 'asdasd@gnauk.com', '', 'po', '1237849', 'asd', 'asd', '2017-11-09 06:27:43'),
(8, 1, 'Doe', 'Doe', '123', 'john@example.com', '123', '123', '123', '123', '123', '2017-11-09 06:27:43'),
(9, 1, 'JM', 'Maguigad', '097622738499', 'ljmmaguigad28@gmail.com', 'Admin', 'JM', '', '', '', '2017-11-09 06:27:43'),
(15, 2, 'Ohwenx', 'Ohwen', '092387', 'Ohwen@gmail.com', '', 'Ohwen', 'Oh12784', 'Ohwen', 'Ohwen', '2017-11-09 06:27:43'),
(16, 1, 'Jameston', 'Andrew', '09445967291', 'ton@gmail.com', 'JM', 'Ton', '', '', '', '2017-11-09 06:27:43'),
(17, 1, 'Jimmy', 'Hipolito', '0982375921', 'jimm@gmail.com', 'Ton', 'Jim', '', '', '', '2017-11-09 06:28:56'),
(18, 2, 'Christian', 'Villanueva', '09123859340', 'christian@gmail.com', '', 'Ian', 'PFA123', 'JM', 'JM', '2017-11-09 06:29:53'),
(20, 1, 'marcial', 'rey', '123456', 'marcial.rey@gmail.com', 'rj', 'jun', '', '', '', '2017-11-10 03:06:36'),
(21, 1, 'Mal', 'Mal', '0912374', 'Mal@fnmil.xom', 'Asd', 'Mal', '', '', '', '2017-11-10 04:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblusertype`
--

CREATE TABLE `tblusertype` (
  `type_id` int(11) NOT NULL,
  `user_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusertype`
--

INSERT INTO `tblusertype` (`type_id`, `user_type_name`) VALUES
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
-- Indexes for table `tblassociatesignin`
--
ALTER TABLE `tblassociatesignin`
  ADD PRIMARY KEY (`assoc_signin_id`);

--
-- Indexes for table `tblinfo`
--
ALTER TABLE `tblinfo`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `tblusertype`
--
ALTER TABLE `tblusertype`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblassociatesignin`
--
ALTER TABLE `tblassociatesignin`
  MODIFY `assoc_signin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblinfo`
--
ALTER TABLE `tblinfo`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tblusertype`
--
ALTER TABLE `tblusertype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
