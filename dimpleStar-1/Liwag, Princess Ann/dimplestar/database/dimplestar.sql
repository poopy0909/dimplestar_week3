-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2025 at 06:56 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dimplestar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_audit`
--

CREATE TABLE `about_audit` (
  `id` int(11) NOT NULL,
  `about_text` text NOT NULL,
  `edited_by` varchar(255) NOT NULL,
  `edited_email` varchar(255) NOT NULL,
  `edited_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_audit`
--

INSERT INTO `about_audit` (`id`, `about_text`, `edited_by`, `edited_email`, `edited_at`) VALUES
(1, 'Photo taken on October 16, 1993. Napat Transit (now Dimple Star Transport) NVR-963\r\n    (fleet No 800) going to Alabang and jeepneys under the Light Rail Line in Taft Ave near\r\n    United Nations Avenue, Ermita, Manila, Philippines.\r\n    <br><br>\r\n    Year 2004 of May changes has been made, Napat Transit became Dimple Star Transport...', 'cess li', 'cessli@gmail.com', '2025-09-05 12:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `salt`, `password`) VALUES
(1, 'cess', 'li', 'cessli@gmail.com', 'e62', 'db5ab35b7a7ef9b73411098c3e086953b0c1b9a368ba043b916db1d20216f02b');

-- --------------------------------------------------------

--
-- Table structure for table `regs`
--

CREATE TABLE `regs` (
  `ticket` int(100) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bustype` varchar(255) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `seat_no` varchar(255) DEFAULT NULL,
  `timetodep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `regs`
--

INSERT INTO `regs` (`ticket`, `name`, `address`, `mobile`, `email`, `bustype`, `origin`, `destination`, `price`, `seat_no`, `timetodep`) VALUES
(1, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '7', '5:30am'),
(2, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '8', '5:30am'),
(3, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '9', '5:30am'),
(4, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '10', '5:30am'),
(5, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '11', '5:30am'),
(6, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '12', '5:30am'),
(7, 'A', 'B', '123465', 'C@D.COM', 'Ordinary', 'Espana', 'San Jose', '200', '13', '5:30am');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `busid` int(20) NOT NULL,
  `origin` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `bustype` varchar(20) NOT NULL,
  `smsstat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`busid`, `origin`, `destination`, `time`, `price`, `bustype`, `smsstat`) VALUES
(1, 'Ali Mall Cubao', 'San Jose', '10am', '300', 'Air Conditioned', 'None'),
(2, 'Ali Mall Cubao', 'San Jose', '9am', '300', 'Air Conditioned', 'None'),
(3, 'Ali Mall Cubao', 'San Jose', '1pm', '300', 'Air Conditioned', 'none'),
(4, 'Ali Mall Cubao', 'San Jose', '4pm', '300', 'Air Conditioned', 'none'),
(5, 'Alabang', 'San Jose', '6am', '300', 'Air Conditioned', 'None'),
(6, 'Alabang', 'San Jose', '7am', '300', 'Air Conditioned', 'None'),
(7, 'Alabang', 'San Jose', '2pm', '300', 'Air Conditioned', 'none'),
(8, 'Alabang', 'San Jose', '6pm', '300', 'Air Conditioned', 'none'),
(9, 'Alabang', 'San Jose', '10pm', '300', 'Air Conditioned', 'none'),
(10, 'Cabuyao ', 'San Jose', '8am', '300', 'Air Conditioned', 'None'),
(11, 'Cabuyao ', 'San Jose', '9am', '300', 'Air Conditioned', 'None'),
(12, 'Cabuyao ', 'San Jose', '4pm', '300', 'Air Conditioned', 'none'),
(13, 'Cabuyao ', 'San Jose', '8pm', '300', 'Air Conditioned', 'none'),
(14, 'Espana', 'San Jose', '4:30am', '300', 'Air Conditioned', 'None'),
(15, 'Espana', 'San Jose', '5:30am', '300', 'Air Conditioned', 'None'),
(16, 'Espana', 'San Jose', '12am', '300', 'Air Conditioned', 'none'),
(17, 'Espana', 'San Jose', '4pm', '300', 'Air Conditioned', 'none'),
(18, 'Espana', 'San Jose', '8pm', '300', 'Air Conditioned', 'none'),
(19, 'San Lorenzo', 'San Jose', '3am', '300', 'Air Conditioned', 'None'),
(20, 'San Lorenzo', 'San Jose', '4:30am', '200', 'Air Conditioned', 'None'),
(21, 'San Lorenzo', 'San Jose', '11am', '300', 'Air Conditioned', 'none'),
(22, 'San Lorenzo', 'San Jose', '3pm', '300', 'Air Conditioned', 'none'),
(23, 'San Lorenzo', 'San Jose', '7pm', '300', 'Air Conditioned', 'none'),
(24, 'Pasay', 'San Jose', '5am', '300', 'Air Conditioned', 'None'),
(25, 'Pasay', 'San Jose', '6am', '300', 'Air Conditioned', 'none'),
(26, 'Pasay', 'San Jose', '1pm', '300', 'Air Conditioned', 'none'),
(27, 'Pasay', 'San Jose', '3pm', '300', 'Air Conditioned', 'none'),
(28, 'Ali Mall Cubao', 'San Jose', '10am', '200', 'Ordinary', 'None'),
(29, 'Ali Mall Cubao', 'San Jose', '9am', '200', 'Ordinary', 'None'),
(30, 'Ali Mall Cubao', 'San Jose', '1pm', '200', 'Ordinary', 'none'),
(31, 'Ali Mall Cubao', 'San Jose', '4pm', '200', 'Ordinary', 'none'),
(32, 'Alabang', 'San Jose', '6am', '200', 'Ordinary', 'None'),
(33, 'Alabang', 'San Jose', '7am', '200', 'Ordinary', 'None'),
(34, 'Alabang', 'San Jose', '2pm', '200', 'Ordinary', 'none'),
(35, 'Alabang', 'San Jose', '6pm', '200', 'Ordinary', 'none'),
(36, 'Alabang', 'San Jose', '10pm', '200', 'Ordinary', 'none'),
(37, 'Cabuyao ', 'San Jose', '8am', '200', 'Ordinary', 'None'),
(38, 'Cabuyao ', 'San Jose', '9am', '200', 'Ordinary', 'None'),
(39, 'Cabuyao ', 'San Jose', '4pm', '200', 'Ordinary', 'none'),
(40, 'Cabuyao ', 'San Jose', '8pm', '200', 'Ordinary', 'none'),
(41, 'Espana', 'San Jose', '4:30am', '200', 'Ordinary', 'None'),
(42, 'Espana', 'San Jose', '5:30am', '200', 'Ordinary', 'None'),
(43, 'Espana', 'San Jose', '12am', '200', 'Ordinary', 'none'),
(44, 'Espana', 'San Jose', '4pm', '200', 'Ordinary', 'none'),
(45, 'Espana', 'San Jose', '8pm', '200', 'Ordinary', 'none'),
(46, 'San Lorenzo', 'San Jose', '3am', '200', 'Ordinary', 'None'),
(47, 'San Lorenzo', 'San Jose', '4:30am', '200', 'Ordinary', 'None'),
(48, 'San Lorenzo', 'San Jose', '11am', '200', 'Ordinary', 'none'),
(49, 'San Lorenzo', 'San Jose', '3pm', '200', 'Ordinary', 'none'),
(50, 'San Lorenzo', 'San Jose', '7pm', '200', 'Ordinary', 'none'),
(51, 'Pasay', 'San Jose', '5am', '200', 'Ordinary', 'None'),
(52, 'Pasay', 'San Jose', '6am', '200', 'Ordinary', 'none'),
(53, 'Pasay', 'San Jose', '1pm', '200', 'Ordinary', 'none'),
(54, 'Pasay', 'San Jose', '3pm', '200', 'Ordinary', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_audit`
--
ALTER TABLE `about_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regs`
--
ALTER TABLE `regs`
  ADD PRIMARY KEY (`ticket`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`busid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_audit`
--
ALTER TABLE `about_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regs`
--
ALTER TABLE `regs`
  MODIFY `ticket` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `busid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
