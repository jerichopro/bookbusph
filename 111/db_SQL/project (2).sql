-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 08:48 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buscompany`
--

CREATE TABLE `tbl_buscompany` (
  `BusCompID` bigint(20) NOT NULL,
  `BusCompanyName` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `IsActive` char(1) NOT NULL,
  `DateRegistered` datetime NOT NULL,
  `DateApproved` datetime NOT NULL,
  `UserID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buscompany`
--

INSERT INTO `tbl_buscompany` (`BusCompID`, `BusCompanyName`, `address`, `mobile`, `IsActive`, `DateRegistered`, `DateApproved`, `UserID`) VALUES
(1, 'PRO', 'Bucawe', '9358627694', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'PRO', 'Bucawe', '9358627694', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buses`
--

CREATE TABLE `tbl_buses` (
  `BusID` bigint(20) NOT NULL,
  `PlateNo` varchar(250) NOT NULL,
  `ChasisNo` varchar(250) NOT NULL,
  `SeatCapacity` int(10) NOT NULL,
  `CompID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_busregsrequirements`
--

CREATE TABLE `tbl_busregsrequirements` (
  `RequirementNo` bigint(20) NOT NULL,
  `DocFileName` varchar(250) NOT NULL,
  `DocName` varchar(250) NOT NULL,
  `DocType` varchar(250) NOT NULL,
  `BusCompID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `EmpID` bigint(20) NOT NULL,
  `Lastname` varchar(250) NOT NULL,
  `FirstName` varchar(250) NOT NULL,
  `MI` char(1) NOT NULL,
  `DriverLincense` varchar(250) NOT NULL,
  `Designation` char(10) NOT NULL,
  `DateEmployed` datetime NOT NULL,
  `BusCompID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `Name` varchar(50) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Buscompany'),
(3, 'Passenger'),
(4, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `password`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'jerichoprowtf@gmail.com', '88ea39439e74fa27c09a4fc0bc8ebe6d00978392', 1, 0, '2020-12-19 14:35:56', '2020-12-19 14:35:56'),
(21, 'manilynpacay@gmail.com', 'c53255317bb11707d0f614696b3ce6f221d0e2f2', 4, 1, '2021-03-24 04:38:07', '2021-03-24 04:38:07'),
(22, 'jefflaguna@gmail.com', 'c53255317bb11707d0f614696b3ce6f221d0e2f2', 4, 0, '2021-03-24 05:16:26', '2021-03-24 05:16:26'),
(23, 'jerichoprowtf11@gmail.com', 'c53255317bb11707d0f614696b3ce6f221d0e2f2', 2, 0, '2021-03-24 06:45:44', '2021-03-24 06:45:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buscompany`
--
ALTER TABLE `tbl_buscompany`
  ADD PRIMARY KEY (`BusCompID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `tbl_buses`
--
ALTER TABLE `tbl_buses`
  ADD PRIMARY KEY (`BusID`),
  ADD KEY `CompID` (`CompID`);

--
-- Indexes for table `tbl_busregsrequirements`
--
ALTER TABLE `tbl_busregsrequirements`
  ADD PRIMARY KEY (`RequirementNo`),
  ADD KEY `BusCompID` (`BusCompID`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`EmpID`),
  ADD KEY `BusCompID` (`BusCompID`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buscompany`
--
ALTER TABLE `tbl_buscompany`
  MODIFY `BusCompID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_buses`
--
ALTER TABLE `tbl_buses`
  MODIFY `BusID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_busregsrequirements`
--
ALTER TABLE `tbl_busregsrequirements`
  MODIFY `RequirementNo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `EmpID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_buses`
--
ALTER TABLE `tbl_buses`
  ADD CONSTRAINT `tbl_buses_ibfk_1` FOREIGN KEY (`CompID`) REFERENCES `tbl_buscompany` (`BusCompID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_busregsrequirements`
--
ALTER TABLE `tbl_busregsrequirements`
  ADD CONSTRAINT `tbl_busregsrequirements_ibfk_1` FOREIGN KEY (`BusCompID`) REFERENCES `tbl_buscompany` (`BusCompID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD CONSTRAINT `tbl_employees_ibfk_1` FOREIGN KEY (`BusCompID`) REFERENCES `tbl_buscompany` (`BusCompID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
