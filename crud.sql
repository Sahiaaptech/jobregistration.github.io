-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 09:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobregistration`
--

CREATE TABLE `jobregistration` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Refer` varchar(50) NOT NULL,
  `Post` varchar(50) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobregistration`
--

INSERT INTO `jobregistration` (`id`, `Name`, `Degree`, `Mobile`, `Email`, `Refer`, `Post`, `photo`) VALUES
(1, 'babar', 'babar.jamalb2b@gmail.com', '45238222', 'babar.jamalb2b@gmail.com', 'Sahia', 'Marketting', NULL),
(2, 'sahia', 'sahiafdc@gmail.com', '3132743846', 'sahiafdc@gmail.com', 'Babar', 'none', NULL),
(3, 'Hira', 'hirabadar@gmail.com', '453534545', 'hirabadar@gmail.com', 'Hassan', 'Exam Dpt', NULL),
(4, 'hira my dear', 'hira@gmail.com', '78934934', 'hira@gmail.com', 'Babar', 'Exam Dpt', NULL),
(5, 'laraib', 'laraib@gmail.com', '3323432432', 'laraib@outlook.com', 'Babar', 'Faculty', NULL),
(8, 'babar', 'BE', '45238222', 'babar.jamalb2b@gmail.com', 'Sahia', 'Marketting', NULL),
(9, 'fabhea', 'BE', '45238222', 'fabo@gmail.com', 'Babar', 'Marketting', NULL),
(10, 'fabhea', 'BBA', '45238222', 'fabo@gmail.com', 'Sahia', 'nothng is', 'Upload/IMG_1832.JPG'),
(11, 'fabhea', '', '', 'fabo@gmail.com', '', '', 'Upload/IMG_1834.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'Babar', 'bjbaa96@gmail.com', '$2y$10$8xYPhe/J/gnhzySCloO7X.HL5gKeSBkbHWj9bZ0Yj9u/B86d2MfJe', '$2y$10$H9aeyZU1ofGrNZ7mr3FVyuWgCp9NMf0RWir8DILZ/gmC0DscD6EYm'),
(2, '', '', '$2y$10$O8xcY3zzUlAzwIZgyW9Pxulp.yLk2lr3Vw/MbR4RIhGFSlsqyy/ya', '$2y$10$jITg3Cp5PgEFFb0Ows.GBu/vsz9P5W4YJ.wSdYiLAEAaM.s.D/ETm'),
(3, 'SAHIA JAMAL', 'sahiatech123@gmail.com', '$2y$10$oq3nwX/ktS5uONx0q4dzAO2mslXsU9mV4gsw0dvnDbI9iCUgDzJ0u', '$2y$10$LdMxWE2TkD1fKj65pMIHveIBvCiJUgf8DYaSfPLCR6v.bqsDkpvOO'),
(4, 'fabhea', 'fabo@gmail.com', '$2y$10$6XhEH41yXt270EPNRgraNOTmhtZncMDlmzZ7/lrYRfn4iyQX6dpgu', '$2y$10$K4FYv7RdK7u9LicuFs3Kp.jmwZ1DIy9fXxkUnVbmmiyZsaMfKnGFK'),
(5, 'ammi', 'ammi@gmail.com', '$2y$10$UlHQCHGRSK3VpGcOm6gKkOGsZIiTce48.qnDddWOAWSrwveJJbT1u', '$2y$10$Zx8.CScteFxySmb2v5Q0s.dvRX9n0tVKMeWdiGN4MMgmrQFFAwSEW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobregistration`
--
ALTER TABLE `jobregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobregistration`
--
ALTER TABLE `jobregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
