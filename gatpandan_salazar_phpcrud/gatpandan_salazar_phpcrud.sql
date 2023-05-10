-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 09:39 PM
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
  `mname` varchar(50) DEFAULT 'Undefined',
  `address` varchar(100) NOT NULL,
  `gender` varchar(25) NOT NULL DEFAULT 'other',
  `age` int(2) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `fname`, `lname`, `mname`, `address`, `gender`, `age`, `birthdate`, `email`) VALUES
(1, 'Nathaniel', 'Gatpandan', 'Maglabe', 'Taga jan lang', 'other', 20, '2003-04-16', 'gtpndn@gmail.com'),
(2, 'Ana Bien', 'Salazar', 'Gersin', 'taga tags', 'other', 20, '2003-04-15', 'ana@gmail.com'),
(3, 'Vien Mar', 'Gelantaga-an', 'Ewan', 'taga gentri', 'male', 8, '2014-06-12', 'vienmar@gmail.com'),
(4, 'Shania Andrea', 'Obaob', 'Pasaba', 'sa heart ni nat', 'female', 19, '2003-07-06', 'shania@gmail.com'),
(5, 'Kamil', 'Faith', 'Undefined', 'Basta taga etivac', 'female', 21, '2002-02-06', 'kamil@gmail.com'),
(6, 'johna123', 'johna123', 'Undefined', 'taga silang', 'female', 20, '2002-12-07', 'johna@gmail.com'),
(7, 'clifford123', 'clifford123', 'Undefined', 'taga dasma ata', 'male', 20, '2002-08-21', 'clifford123@gmail.com'),
(8, 'john123', 'john123', 'Undefined', 'taga imus', 'male', 21, '2001-11-14', 'john@gmail.com'),
(9, 'aaron123', 'aaron123', 'Undefined', 'taga dasma', 'male', 20, '2002-08-22', 'eva@gmail.com'),
(10, 'ashlie123', 'ashlie123', 'Undefined', 'taga gma', 'male', 20, '2002-06-10', 'ashlie123@gmail.com'),
(11, 'reiniel123', 'reiniel123', 'Undefined', 'taga gma rin', 'male', 20, '2002-09-11', 'reiniel123@gmail.com'),
(12, 'joshua123', 'joshua123', 'Undefined', 'taga Alfonso', 'male', 23, '2000-02-14', 'joshua123@mail.co');

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
(1, 'nath123', 'nath123', 'admin'),
(2, 'ana123', 'ana123', 'admin'),
(3, 'vien123', 'vien123', 'user'),
(4, 'shania123', 'shania123', 'admin'),
(5, 'kamil', 'kamil', 'admin'),
(6, 'johna123', 'johna123', 'user'),
(7, 'clifford123', 'clifford123', 'user'),
(8, 'john123', 'john123', 'admin'),
(9, 'aaron123', 'aaron123', 'admin'),
(10, 'ashlie123', 'ashlie123', 'user'),
(11, 'reiniel123', 'reiniel123', 'user'),
(12, 'joshua123', 'joshua123', 'user');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
