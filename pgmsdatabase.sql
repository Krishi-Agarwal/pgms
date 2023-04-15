-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 14, 2023 at 01:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgms`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  `UID` int(11) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `ROLE` varchar(15) NOT NULL,
  `DOJ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EID`, `NAME`, `PHONE_NUMBER`, `UID`, `SALARY`, `ROLE`, `DOJ`) VALUES
(1, 'chirag', '54515188', 1, 50000, 'cleaner', '2020-11-11'),
(2, 'rishi', '4798451487', 1, 5000, 'cook', '2023-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `COMMENT` text NOT NULL,
  `DOC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_stats`
--

CREATE TABLE `login_stats` (
  `loginno` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_stats`
--

INSERT INTO `login_stats` (`loginno`, `type`, `name`, `date`) VALUES
(38, 'OWNER', 'admin', '2023-04-10 09:12:03'),
(39, 'OWNER', 'admin', '2023-04-10 09:35:05'),
(40, 'OWNER', 'admin', '2023-04-10 11:07:31'),
(41, 'OWNER', 'admin', '2023-04-10 11:50:23'),
(42, 'OWNER', 'admin', '2023-04-10 11:52:45'),
(43, 'OWNER', 'admin', '2023-04-10 11:54:00'),
(44, 'OWNER', 'admin', '2023-04-10 11:56:05'),
(45, 'OWNER', 'admin', '2023-04-10 14:17:23'),
(46, 'OWNER', 'admin', '2023-04-10 18:15:39'),
(47, 'OWNER', 'admin', '2023-04-10 18:16:47'),
(48, 'OWNER', 'admin', '2023-04-10 20:34:06'),
(49, 'OWNER', 'admin', '2023-04-11 00:01:36'),
(50, 'OWNER', 'admin', '2023-04-11 09:10:46'),
(51, 'OWNER', 'admin', '2023-04-11 10:56:53'),
(52, 'OWNER', 'admin', '2023-04-11 15:54:08'),
(53, 'OWNER', 'admin', '2023-04-11 15:55:25'),
(54, 'OWNER', 'admin', '2023-04-12 11:15:11'),
(55, 'MANAGER', 'KRISHI67', '2023-04-12 11:49:19'),
(56, 'MANAGER', 'ayush', '2023-04-12 11:50:28'),
(57, 'MANAGER', 'ayush', '2023-04-12 11:52:57'),
(58, 'MANAGER', 'ayush', '2023-04-12 11:59:46'),
(59, 'MANAGER', 'roo', '2023-04-12 12:00:30'),
(60, 'MANAGER', 'roo', '2023-04-12 12:03:15'),
(61, '', '', '2023-04-12 12:17:11'),
(62, '', '', '2023-04-12 12:19:32'),
(63, '', '', '2023-04-12 12:20:36'),
(64, '', '', '2023-04-12 12:20:49'),
(65, '', '', '2023-04-12 12:24:04'),
(66, '', '', '2023-04-12 12:25:17'),
(67, '', '', '2023-04-12 12:27:05'),
(68, 'OWNER', 'admin', '2023-04-12 12:27:11'),
(69, 'OWNER', 'admin', '2023-04-12 12:35:19'),
(70, 'OWNER', 'admin', '2023-04-12 12:35:27'),
(71, 'OWNER', 'admin', '2023-04-12 12:38:40'),
(72, 'MANAGER', 'roo', '2023-04-12 12:39:03'),
(73, 'OWNER', 'admin', '2023-04-12 12:55:12'),
(74, 'OWNER', 'admin', '2023-04-12 12:55:28'),
(75, 'OWNER', 'admin', '2023-04-12 12:58:10'),
(76, 'OWNER', 'admin', '2023-04-12 12:59:48'),
(77, 'OWNER', 'admin', '2023-04-12 12:59:56'),
(78, 'OWNER', 'admin', '2023-04-12 13:00:14'),
(79, 'OWNER', 'admin', '2023-04-12 13:00:46'),
(80, 'OWNER', 'admin', '2023-04-12 13:00:50'),
(81, 'OWNER', 'admin', '2023-04-12 13:02:40'),
(82, 'OWNER', 'admin', '2023-04-12 13:02:44'),
(83, 'OWNER', 'admin', '2023-04-12 13:02:54'),
(84, 'OWNER', 'admin', '2023-04-12 13:03:12'),
(85, 'OWNER', 'admin', '2023-04-12 13:03:30'),
(86, 'OWNER', 'admin', '2023-04-12 13:05:20'),
(87, 'OWNER', 'admin', '2023-04-12 13:05:26'),
(88, 'OWNER', 'admin', '2023-04-12 13:06:36'),
(89, 'OWNER', 'admin', '2023-04-12 13:07:49'),
(90, 'OWNER', 'admin', '2023-04-12 13:07:54'),
(91, 'OWNER', 'admin', '2023-04-12 13:07:58'),
(92, 'MANAGER', 'admin', '2023-04-12 13:10:08'),
(93, 'MANAGER', 'admin', '2023-04-12 13:12:09'),
(94, 'OWNER', 'admin', '2023-04-12 13:12:13'),
(95, 'OWNER', 'admin', '2023-04-12 13:14:03'),
(96, 'OWNER', 'admin', '2023-04-12 15:12:07'),
(97, 'MANAGER', 'KRISHI67', '2023-04-12 15:21:00'),
(98, 'OWNER', 'admin', '2023-04-13 10:49:13'),
(99, 'OWNER', 'admin', '2023-04-13 10:51:04'),
(100, 'MANAGER', 'roo', '2023-04-13 10:52:49'),
(101, 'OWNER', 'admin', '2023-04-13 10:55:33'),
(102, 'OWNER', 'admin', '2023-04-13 11:00:15'),
(103, 'OWNER', 'admin', '2023-04-13 11:06:32'),
(104, 'OWNER', 'admin', '2023-04-13 11:07:13'),
(105, 'OWNER', 'admin', '2023-04-13 11:07:43'),
(106, 'OWNER', 'admin', '2023-04-13 11:08:41'),
(107, 'OWNER', 'admin', '2023-04-13 11:09:01'),
(108, 'OWNER', 'admin', '2023-04-13 11:09:39'),
(109, 'OWNER', 'admin', '2023-04-13 11:10:26'),
(110, 'OWNER', 'admin', '2023-04-13 11:10:36'),
(111, 'OWNER', 'admin', '2023-04-13 11:10:57'),
(112, 'OWNER', 'admin', '2023-04-13 11:11:31'),
(113, 'OWNER', 'admin', '2023-04-13 20:54:42'),
(114, 'MANAGER', 'roo', '2023-04-13 21:17:07'),
(115, 'OWNER', 'admin', '2023-04-13 22:16:48'),
(116, 'OWNER', 'admin', '2023-04-14 00:08:19'),
(117, 'MANAGER', 'KRISHI67', '2023-04-14 00:25:55'),
(118, 'MANAGER', 'KRISHI67', '2023-04-14 01:58:08'),
(119, 'MANAGER', 'KRISHI67', '2023-04-14 03:35:15'),
(120, 'MANAGER', 'KRISHI67', '2023-04-14 14:23:11'),
(121, 'MANAGER', 'KRISHI67', '2023-04-14 16:39:22');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `MID` int(5) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  `UID` int(11) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `DOJ` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`MID`, `NAME`, `PHONE_NUMBER`, `UID`, `SALARY`, `DOJ`, `username`, `password`) VALUES
(1, 'Krishi Agarwal', '8250226290', 1, 200000, '2023-03-27', 'KRISHI67', 'krishi67'),
(3, 'AYUSH', '468484848', 1, 20000, '2023-03-27', 'ayush', 'ayush'),
(4, 'roshan', '+95+998489', 2, 20000, '2023-03-27', 'roo', 'roo');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `PID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `QID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `QUERY` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `RID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `TID` varchar(20) NOT NULL,
  `AMOUNT` float NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `RNO` int(11) NOT NULL,
  `UNO` int(11) NOT NULL,
  `TOTAL_BEDS` int(11) NOT NULL,
  `BEDS_OCCUPIED` int(11) NOT NULL DEFAULT 0,
  `BASERENT` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RNO`, `UNO`, `TOTAL_BEDS`, `BEDS_OCCUPIED`, `BASERENT`) VALUES
(1, 1, 1, 0, 15000),
(2, 1, 2, 0, 30000),
(3, 1, 3, 0, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `SID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `RNO` int(11) NOT NULL,
  `UNO` int(11) NOT NULL,
  `RENT` int(11) NOT NULL,
  `DOJ` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `UNO` int(11) NOT NULL,
  `LOCATION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`UNO`, `LOCATION`) VALUES
(1, 'RAM MANDIR'),
(2, 'SILIGURI'),
(3, 'BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `WID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  `UID` int(11) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `DOJ` date NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`WID`, `NAME`, `PHONE_NUMBER`, `UID`, `SALARY`, `DOJ`, `username`, `password`) VALUES
(1, 'AYUSH', '04845484848', 1, 2000000, '2023-03-31', 'AYUSH', 'AYUSH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EID`),
  ADD KEY `UID_EMP` (`UID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `STD_FDBK` (`SID`);

--
-- Indexes for table `login_stats`
--
ALTER TABLE `login_stats`
  ADD PRIMARY KEY (`loginno`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`MID`),
  ADD UNIQUE KEY `PHONE_NUMBER` (`PHONE_NUMBER`),
  ADD KEY `UNO_MANAGER` (`UID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `STD_PRT` (`SID`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`QID`),
  ADD KEY `PID_QUERY` (`PID`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `RID_SID` (`SID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`RNO`,`UNO`),
  ADD KEY `RNO_UNO` (`UNO`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `RNO_STD` (`RNO`),
  ADD KEY `UNO_STD` (`UNO`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`UNO`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`WID`),
  ADD KEY `UNO_WARDEN` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_stats`
--
ALTER TABLE `login_stats`
  MODIFY `loginno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `QID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `UNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warden`
--
ALTER TABLE `warden`
  MODIFY `WID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `UID_EMP` FOREIGN KEY (`UID`) REFERENCES `unit` (`UNO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `STD_FDBK` FOREIGN KEY (`SID`) REFERENCES `student` (`SID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `UNO_MANAGER` FOREIGN KEY (`UID`) REFERENCES `unit` (`UNO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `STD_PRT` FOREIGN KEY (`SID`) REFERENCES `student` (`SID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `queries`
--
ALTER TABLE `queries`
  ADD CONSTRAINT `PID_QUERY` FOREIGN KEY (`PID`) REFERENCES `parent` (`PID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `RID_SID` FOREIGN KEY (`SID`) REFERENCES `student` (`SID`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `RNO_UNO` FOREIGN KEY (`UNO`) REFERENCES `unit` (`UNO`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `RNO_STD` FOREIGN KEY (`RNO`) REFERENCES `rooms` (`RNO`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `UNO_STD` FOREIGN KEY (`UNO`) REFERENCES `unit` (`UNO`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `warden`
--
ALTER TABLE `warden`
  ADD CONSTRAINT `UNO_WARDEN` FOREIGN KEY (`UID`) REFERENCES `unit` (`UNO`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
