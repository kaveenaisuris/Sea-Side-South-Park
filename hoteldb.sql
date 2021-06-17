-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 09:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_pass`) VALUES
('biplob', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `no_room` int(11) NOT NULL,
  `no_person` int(11) NOT NULL,
  `no_children` int(11) NOT NULL,
  `name_first` varchar(50) NOT NULL,
  `name_last` varchar(50) NOT NULL,
  `contact_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` text NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `datetime`, `status`) VALUES
(1, 'Kaveena Wijesinghe ', 'sss', 'kaveena321@gmail.com', '+94 77 547 ', 'vvv', '2020-08-05 19:48:23', 1),
(2, 'Kaveena Wijesinghe ', 'sss', 'kaveena321@gmail.com', '+94 77 547 ', 'vvv', '2020-08-05 19:48:25', 1),
(4, 'pasindu', 'sss', 'tok26703@gmail.com', '0000', 'lll', '2020-08-05 20:04:39', 1),
(5, 'chathumi', 'sss', 'chathumika.wijesinghe@gmail.com', '00000788', 'kiuygjkkk', '2020-08-05 20:05:55', 1),
(6, 'Kaveena Wijesinghe ', 'sss', 'tok26703@gmail.com', '0000', 'yh', '2020-08-07 10:28:02', 1),
(7, 'pasindu', 'sss', 'abc@gmail.com', '123456789', 'sss', '2020-08-07 10:28:59', 1),
(8, 'Dimu', 'Wijesinghe', 'chathumika.wijesinghe@gmail.com', '0771231234', 'hi', '2020-08-07 11:35:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`name`) VALUES
('King Deluxe'),
('Queen Deluxe'),
('Royal Suite Superior'),
('Royal Suite Deluxe'),
('Executive Super King'),
('Executive Super Queen'),
('Tripal Deluxe'),
('Presidential Deluxe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `user_fullname`, `password`, `role`, `email`, `phone`) VALUES
(1, 'chathumika', 'Chathumika Wijesinghe', '123123', 'user', 'chathumika@gmail.com', '0719081655'),
(2, 'kavee', 'kaveena Wijesinghe', '123123', 'user', 'kkk@gmail.com', '0775471672'),
(3, 'isu', 'Isuri Wijesinghe', '123123', 'user', 'isu@gmail.com', '099889'),
(5, 'Dimukthi', 'Dimukthi wijesinghe', '123123', 'admin', 'cdw@gmail.com', '070302940'),
(6, 'isu', 'saman kumara Wijesinghe', '123123', 'user', '244@gmail.com', '123123'),
(7, 'kkkk', 'kk kkk', '123123', 'user', '244@gmail.com', '099889'),
(9, 'Dimu', 'Dimu Wije', '123123', 'user', 'dimu123@gmail.com', '077123236');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
