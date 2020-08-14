-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2020 at 02:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiast`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `EMAIL` varchar(250) NOT NULL,
  `GENDER` varchar(56) NOT NULL,
  `AGE` int(34) NOT NULL,
  `SALARY` varchar(123) NOT NULL,
  `CITY` varchar(66) NOT NULL,
  `DEPARTMENT` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `NAME`, `EMAIL`, `GENDER`, `AGE`, `SALARY`, `CITY`, `DEPARTMENT`) VALUES
(3, 'Munesh', 'munesh.lalwani@gmail.com', 'Male', 12, '355', 'hyderabad', 'Systems Development'),
(6, 'kumar', 'munesh.lalwani@gmail.com', 'Male', 14, '122222', 'hyderabad', 'IT Department'),
(7, '', 'munesh.lalwani@gmail.com', 'Male', 4, '333', '4ff', 'Systems Development'),
(11, 'kumar', 'munesh.lalwani@gmail.com', 'Male', 33, '3333', 'hyderabad', 'IT Department'),
(12, 'Munesh', 'munesh.lalwani1@gmail.com', 'Male', 5, '5', 'hyderabad', 'Accounts & Finance'),
(15, 'Mouse', 'munesh.lalwani1@yahoo.com', 'Male', 4, '4', 'ff', 'Sales & Marketing'),
(17, 'kumar', '0654', 'male', 5, '5', 'karachi', '567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
