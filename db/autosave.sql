-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 11:07 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autosave`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltemp`
--

CREATE TABLE `tbltemp` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserId` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserId`, `FirstName`, `LastName`, `Email`, `ContactNo`, `Designation`, `Country`, `State`, `City`, `Address`) VALUES
(109, 'bbbbbbbbbbbb', 'fdsfs', 'sdfds', 0, 'fgf', 'gfdg', 'fdgfd', 'rdfgfdgfd', 'xgfxc'),
(110, 'Vidhi12', 'patel', 'nirav.patel@theopeneyes.in', 234234, 'dfgdfg', 'gregf', 'dsfsd', 'dsffsdf', 'dfgdfg'),
(95, 'ogogogoggo', 'dsfdsffffff', 'fdsf@dxffsd.dfdsfsd', 0, 'sdfsd', 'sdfds', 'sdfsd', 'vvvvvvv', 'sdfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltemp`
--
ALTER TABLE `tbltemp`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltemp`
--
ALTER TABLE `tbltemp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
