-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2024 at 09:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scis`
--

-- --------------------------------------------------------

--
-- Table structure for table `Internship`
--

CREATE TABLE `Internship` (
  `InternshipID` int(11) NOT NULL,
  `StudentID` varchar(20) NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `StaffID` int(11) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `StaffPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`StaffID`, `StaffName`, `StaffPassword`) VALUES
(1919, 'Izrulfizal', 'creeds11');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `StudentID` varchar(20) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `StudentProgramme` varchar(100) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`StudentID`, `StudentName`, `StudentEmail`, `StudentProgramme`, `Status`) VALUES
('NU00018606', 'Yugatheeban', '00018606@nilai.edu.my', 'BIT', 'Completed'),
('NU00018648', 'Magen Rao', '00018648@nilai.edu.my', 'BIT', 'Completed'),
('NU00018999', 'Tiew Ying Ying', '00018999@nilai.edu.my', 'BIT', 'Completed'),
('NU00019064', 'Al Barwani Waleed Rashid Amur', '00019064@nilai.edu.my', 'BIT', 'Ongoing'),
('NU00019615', 'Ye Yaresh A/L Kula Segaran', '00019615@nilai.edu.my', 'DBIT', 'Ongoing'),
('NU00019625', 'Hanshraj a/l Kumar', '00019625@nilai.edu.my', 'DCS', 'Ongoing'),
('NU00019662', 'Nur Tee Laili Binti Tee Kee Seng @ Muhammad Shahyu Tee', '00019662@nilai.edu.my', 'DCS', 'Ongoing'),
('NU00019830', 'Kirththi Priya a/p Magindran', '00019830@nilai.edu.my', 'BIT', 'Completed'),
('NU00019840', 'Jagdesh', '00019840@nilai.edu.my', 'BIT', 'Completed'),
('NU00019904', 'Santhababy a/p Subramaniam', '00019904@nilai.edu.my', 'DCS', 'Ongoing'),
('NU00020030', 'Colson Lau', '00020030@nilai.edu.my', 'DCS', 'Ongoing'),
('NU00020041', 'Serene Ang Xue Ying', '00020041@nilai.edu.my', 'DBIT', 'Ongoing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Internship`
--
ALTER TABLE `Internship`
  ADD PRIMARY KEY (`InternshipID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Internship`
--
ALTER TABLE `Internship`
  MODIFY `InternshipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Internship`
--
ALTER TABLE `Internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `Student` (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
