-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2020 at 03:39 AM
-- Server version: 5.7.29
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vxg5911_webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `aid` int(45) NOT NULL,
  `aname` varchar(45) NOT NULL,
  `aemail` varchar(45) NOT NULL,
  `apass` varchar(45) NOT NULL,
  `acity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`aid`, `aname`, `aemail`, `apass`, `acity`) VALUES
(7, 'chinma', 'vishvargops@gmail.com', '123', 'BENGALURU');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `cid` int(45) NOT NULL,
  `uid` int(45) NOT NULL,
  `eid` int(45) NOT NULL,
  `comment` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE `Event` (
  `eid` int(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `aid` int(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `content` varchar(100) NOT NULL,
  `location` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `EventReg`
--

CREATE TABLE `EventReg` (
  `eid` int(45) NOT NULL,
  `uemail` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Likes`
--

CREATE TABLE `Likes` (
  `lid` int(45) NOT NULL,
  `uid` int(45) NOT NULL,
  `eid` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Query`
--

CREATE TABLE `Query` (
  `Name` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Subject` varchar(45) NOT NULL,
  `descript` varchar(45) NOT NULL,
  `rid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Query`
--

INSERT INTO `Query` (`Name`, `Email`, `Subject`, `descript`, `rid`) VALUES
('asd', 'asd', 'asd', '', 3),
('asd', 'asdsad', 'asd', '', 4),
('abc', 'asdjfhsdhfg', 'sdfdd', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `uid` int(45) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `uemail` varchar(45) NOT NULL,
  `upass` varchar(45) NOT NULL,
  `uphone` int(10) NOT NULL,
  `ucity` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`uid`, `uname`, `uemail`, `upass`, `uphone`, `ucity`) VALUES
(15, 'chinmay97int@gmail.com', 'chinmay97int@gmail.com', '123', 56565, 'blr'),
(16, 'chinmayavenki2@gmail.com', 'chinmayavenki2@gmail.com', '123', 123, 'blru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `EventReg`
--
ALTER TABLE `EventReg`
  ADD PRIMARY KEY (`eid`,`uemail`);

--
-- Indexes for table `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `eid` (`eid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `Query`
--
ALTER TABLE `Query`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `aid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `cid` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Event`
--
ALTER TABLE `Event`
  MODIFY `eid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Likes`
--
ALTER TABLE `Likes`
  MODIFY `lid` int(45) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Query`
--
ALTER TABLE `Query`
  MODIFY `rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `uid` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `Comments_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `Event` (`eid`),
  ADD CONSTRAINT `Comments_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `User` (`uid`);

--
-- Constraints for table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `Event_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `Admin` (`aid`);

--
-- Constraints for table `EventReg`
--
ALTER TABLE `EventReg`
  ADD CONSTRAINT `EventReg_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `Event` (`eid`) ON DELETE CASCADE;

--
-- Constraints for table `Likes`
--
ALTER TABLE `Likes`
  ADD CONSTRAINT `Likes_ibfk_1` FOREIGN KEY (`eid`) REFERENCES `Event` (`eid`),
  ADD CONSTRAINT `Likes_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `User` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
