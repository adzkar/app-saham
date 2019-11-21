-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2019 at 11:48 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saham`
--

-- --------------------------------------------------------

--
-- Table structure for table `tobinsq`
--

CREATE TABLE `tobinsq` (
  `id` int(10) NOT NULL,
  `kode` text NOT NULL,
  `tahun` int(11) NOT NULL,
  `closing_price` bigint(20) NOT NULL,
  `list_share` bigint(20) NOT NULL,
  `assets` bigint(20) NOT NULL,
  `piutang` bigint(20) NOT NULL,
  `hutang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `eps` bigint(20) NOT NULL,
  `roa` double NOT NULL,
  `roe` double NOT NULL,
  `dar` double NOT NULL,
  `der` double NOT NULL,
  `pbv` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tobinsq`
--

INSERT INTO `tobinsq` (`id`, `kode`, `tahun`, `closing_price`, `list_share`, `assets`, `piutang`, `hutang`, `modal`, `pendapatan`, `eps`, `roa`, `roe`, `dar`, `der`, `pbv`, `id_user`) VALUES
(2, 'AAAB', 0, 2725, 410000000, 1748813000000, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(3, 'AAAC', 0, 530, 3484800000, 17509505000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(5, 'AAAE', 0, 13150, 410000000, 17509505000000, 704749, 6398988, 18536438, 17305688, 1044500, 8.48, 11.4, 1.2, 0.35, 1.37, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `full_name`, `username`, `password`) VALUES
(3, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tobinsq`
--
ALTER TABLE `tobinsq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tobinsq`
--
ALTER TABLE `tobinsq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
