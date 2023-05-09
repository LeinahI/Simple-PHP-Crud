-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 01:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatpandan_salazar_phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(8) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL DEFAULT 'other',
  `age` int(2) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `fname`, `lname`, `address`, `gender`, `age`, `birthdate`, `email`) VALUES
(32, 'Nathaniel', 'Gatpandan', 'Taga jan lang', 'other', 20, '2003-04-15', 'gtpndn@gmail.com'),
(37, 'Ana Bien', 'Salazar', 'taga tags', 'other', 20, '2003-04-15', 'ana@gmail.com'),
(38, 'vien123', 'vien123', 'taga gentri', 'male', 8, '2014-06-12', 'vienmar@gmail.com'),
(39, 'Shania Andrea', 'Obaob', 'sa heart ni nat', 'female', 19, '2003-12-06', 'shania@gmail.com'),
(53, 'test', 'test', 'test', 'female', 22, '2001-02-06', 'test@gmail.com'),
(57, 'test2', 'test2', 'test2', 'male', 0, '2023-05-05', 'ana@gmail.com'),
(58, 'test3', 'test3', 'test3', 'female', 0, '2023-05-03', 'test3@mail.com'),
(59, 'test4', 'test4', 'test4', 'male', 0, '2023-05-04', 'test4@gmail.co'),
(60, 'test5', 'test5', 'test5', 'male', 0, '2023-05-06', 'test5@gmail.com'),
(61, 'test6', 'test6', 'test6', 'male', 0, '2023-05-06', 'test6@mail.com'),
(62, 'test7', 'test7', 'test7', 'male', 0, '2023-05-04', 'test7@gmail.co'),
(63, 'test8', 'test8', 'test8', 'male', 0, '2023-05-04', 'test8@mail.co');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(8) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `uname`, `password`, `user_type`) VALUES
(32, 'nath123', 'nath123', 'admin'),
(37, 'ana123', 'ana123', 'admin'),
(38, 'vien123', 'vien123', 'user'),
(39, 'shania123', 'shania123', 'admin'),
(53, 'test1', 'test1', 'user'),
(57, 'test2', 'test2', 'admin'),
(58, 'test3', 'test3', 'user'),
(59, 'test4', 'test4', 'admin'),
(60, 'test5', 'test5', 'admin'),
(61, 'test6', 'test6', 'user'),
(62, 'test7', 'test7', 'user'),
(63, 'test8', 'test8', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
