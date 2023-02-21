-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 03:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shoping`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `age` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `address`, `age`, `gender`, `mobile_number`, `email_id`, `password`, `image`) VALUES
(1, 'SUDHIR KUMAR', 'BAGHAKOL', '20', 'MALE', 6206174721, 'sudhirkumar.edugaon@gmail.com', '6206174721', 0x696d6167652f526176692d4b697368616e2d50686f746f732d373638783933302e6a7067),
(2, 'SUDHIR KUMAR', 'BAGHAKOL', '19', 'MALE', 6206174721, 'sudhirkumar.edugaon@gmail.com', '<br /><b>Notice</b>:  Undefined index: c', 0x696d6167652f646f776e6c6f61642e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
