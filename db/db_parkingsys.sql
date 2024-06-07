-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308:3308
-- Generation Time: Jun 07, 2024 at 11:22 AM
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
-- Database: `db_parkingsys`
--


-- CREATE DATABASE IF NOT EXISTS `db`.`db_parkingsys`;
-- This query first checks if the database "db_parkingsys" exists inside the "db" structure.
-- If it doesn't exist, it creates the database. 


-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `uid` int(225) NOT NULL,
  `firstname` char(225) NOT NULL,
  `lastname` char(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`uid`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES
(2, 'Jacob', 'Thornton', 'jacobthornton', 'jacabthornton02', 'jacobthornton@gmail.com'),
(11, 'kian', 'kian', 'kiankian', 'kian03', 'kian@gmail.com'),
(12, 'joana', 'sabulao', 'joana', 'joanasabulao05', 'joanasabulao05@gmail.com'),
(13, 'erika', 'sotero', 'erikasotero', 'erikasotero06', 'erikasotero06@gmail.com'),
(14, 'rachel', 'velarde', 'rachel', 'rachelvelarde07', 'rachielvelarde07@gmail.com'),
(15, 'marygrace', 'tingcang', 'marygrace', 'marygrace09', 'marygrace09@gmail.com'),
(17, 'claire', 'tacaisan', 'clairetacaisan02', 'clairetacaisan02', 'clairetacaisan02@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking_tbl`
--

CREATE TABLE `booking_tbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `last_name` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone_num` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_acc` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `car_brand` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `car_unit` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `car_plate` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date_in` date NOT NULL DEFAULT '1970-01-01',
  `time_in` time NOT NULL DEFAULT '00:00:00',
  `date_out` date NOT NULL DEFAULT '1970-01-01',
  `time_out` time NOT NULL DEFAULT '00:00:00',
  `location` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_tbl`
--

INSERT INTO `booking_tbl` (`id`, `first_name`, `last_name`, `phone_num`, `email_acc`, `car_brand`, `car_unit`, `car_plate`, `date_in`, `time_in`, `date_out`, `time_out`, `location`) VALUES
(1, 'jessie', 'abo', '+639451700517', 'jessiabol@gmail.com', 'toyota', 'viosgrs', 'lto1234', '2023-12-21', '00:00:00', '2023-12-01', '00:00:00', 'BGCTaguigCity'),
(3, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(4, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(5, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(6, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(7, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(8, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(9, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(10, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(11, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(12, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(13, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(14, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(15, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(16, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(17, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(18, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(19, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(20, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(21, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(22, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(23, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(24, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(25, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(26, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(27, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(28, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(29, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(30, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(31, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(32, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(33, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(34, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(35, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(36, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(37, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(38, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(39, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(40, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(41, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(42, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(43, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(44, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(45, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(46, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(47, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(48, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(49, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(50, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(51, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(52, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(53, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(54, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(55, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(56, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(57, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(58, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(59, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(60, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(61, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(62, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(63, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(64, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(65, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(66, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(67, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', ''),
(68, '', '', '', '', '', '', '', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` enum('admin','user','worker') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`uid`, `username`, `password`, `usertype`) VALUES
(1, 'admin12345', 'Admin12345', 'admin'),
(2, 'user12345', 'user12345', 'user'),
(7, 'worker123', 'worker123', 'worker');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `uid` int(11) NOT NULL,
  `usersFullName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `uid` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `booking_tbl`
--
ALTER TABLE `booking_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
