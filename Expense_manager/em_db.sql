-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 08:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `em_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_login`
--

CREATE TABLE `create_login` (
  `Name` varchar(30) NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_login`
--

INSERT INTO `create_login` (`Name`, `Contact_No`, `Password`) VALUES
('dhee', '1234567890', '12345'),
('Karan Mandal', '7898432337', 'karan123'),
('Dheeraj yadav', '8954542929', 'dheeraj123'),
('Neeraj', '9719151308', 'neeraj123'),
('latesh', '9867039867', '2112171');

-- --------------------------------------------------------

--
-- Table structure for table `expense_table`
--

CREATE TABLE `expense_table` (
  `ex_id` bigint(20) UNSIGNED NOT NULL,
  `e_type` varchar(100) NOT NULL,
  `total` double NOT NULL,
  `Contact_No` varchar(10) NOT NULL,
  `date_ex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_table`
--

INSERT INTO `expense_table` (`ex_id`, `e_type`, `total`, `Contact_No`, `date_ex`) VALUES
(1, 'Vehicle', 1000, '8954542929', '24-Feb-2018'),
(2, 'Grocery', 2000, '7898432337', '24-Feb-2018'),
(3, 'Food', 200, '8954542929', '24-Feb-2018'),
(4, 'Entertainment', 600, '7898432337', '22-Feb-2018'),
(5, 'Miscellaneous', 400, '9719151308', '23-Feb-2018'),
(16, 'Food', 900, '7898432337', '23-Feb-2018'),
(17, 'Food', 1000, '7898432337', '23-Feb-2018'),
(18, 'Grocery', 1100, '7898432337', '23-Feb-2018'),
(21, 'Entertainment', 1100, '7898432337', '22-Feb-2018'),
(22, 'Miscellaneous', 1100, '7898432337', '21-Feb-2018'),
(23, 'Vehicle', 200, '7898432337', '23-Feb-2018'),
(24, 'Entertainment', 777, '8954542929', '22-Feb-2018'),
(25, 'Entertainment', 200, '8954542929', '24-Feb-2018'),
(26, 'Entertainment', 500, '8954542929', '24-Feb-2018'),
(27, 'Entertainment', 900, '8954542929', '24-Feb-2018'),
(28, 'Grocery', 1100, '8954542929', '24-Feb-2018'),
(29, 'Entertainment', 1100, '8954542929', '24-Feb-2018'),
(30, 'Miscellaneous', 600, '7898432337', '24-Feb-2018'),
(31, 'Food', 6500, '8954542929', '24-Feb-2018'),
(32, 'Food', 68, '8954542929', '24-Feb-2018'),
(33, 'Food', 700, '9719151308', '24-Feb-2018'),
(35, 'Entertainment', 800, '9719151308', '24-Feb-2018'),
(36, 'Miscellaneous', 700, '9719151308', '24-Feb-2018'),
(37, 'Vehicle', 800, '9719151308', '25-Feb-2018'),
(38, 'Vehicle', 1300, '8954542929', '25-Feb-2018'),
(39, 'Vehicle', 900, '8954542929', '25-Feb-2018'),
(40, 'Entertainment', 180, '8954542929', '25-Feb-2018'),
(41, 'Miscellaneous', 1400, '8954542929', '25-Feb-2018'),
(42, 'Food', 1700, '8954542929', '25-Feb-2018'),
(43, 'Grocery', 1000, '8954542929', '25-Feb-2018'),
(44, 'Vehicle', 800, '8954542929', '25-Feb-2018'),
(45, 'Food', 1400, '8954542929', '25-Feb-2018'),
(46, 'Vehicle', 700, '7898432337', '25-Feb-2018'),
(47, 'Food', 800, '7898432337', '25-Feb-2018'),
(48, 'Vehicle', 0, '8954542929', '25-Feb-2018'),
(49, 'Miscellaneous', 3000, '8954542929', '25-Feb-2018'),
(50, 'Grocery', 300, '9719151308', '25-Feb-2018'),
(51, 'Grocery', 500, '9719151308', '25-Feb-2018'),
(52, 'Food', 0, '9867039867', '11-Apr-2019'),
(53, 'Grocery', 5000, '9867039867', '11-Apr-2019'),
(54, 'Vehicle', 5000, '9867039867', '18-Apr-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_login`
--
ALTER TABLE `create_login`
  ADD PRIMARY KEY (`Contact_No`);

--
-- Indexes for table `expense_table`
--
ALTER TABLE `expense_table`
  ADD UNIQUE KEY `ex_id` (`ex_id`),
  ADD KEY `mb_fK` (`Contact_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense_table`
--
ALTER TABLE `expense_table`
  MODIFY `ex_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense_table`
--
ALTER TABLE `expense_table`
  ADD CONSTRAINT `mb_fK` FOREIGN KEY (`Contact_No`) REFERENCES `create_login` (`Contact_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
