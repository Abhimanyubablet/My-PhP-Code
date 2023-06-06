-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 03:39 PM
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
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `Id` int(10) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Pass` varchar(200) DEFAULT NULL,
  `Mobile` bigint(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `UserId` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`Id`, `Name`, `Email`, `Pass`, `Mobile`, `Image`, `UserId`) VALUES
(1, 'Abhimanyu Yadav', 'abhimanyu1234@gmail.com', 'abhi@1234', 9262923301, 'upload/IMG_0517.JPG', 'aimit1234'),
(2, 'Bobby', 'bobby@gmail.com', '12345', 888888888, 'upload/Ankit kumar - 431.jpeg', 'bro123'),
(89, 'Rahul RaJ', 'rahul321@gmail.com', '123', 898989, 'upload/IMG_0516.JPG', 'rahul123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
