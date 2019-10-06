-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2019 at 11:14 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

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
  `closing_price` bigint(20) NOT NULL,
  `list_share` bigint(20) NOT NULL,
  `debt` bigint(20) NOT NULL,
  `assets` bigint(20) NOT NULL,
  `piutang` bigint(20) NOT NULL,
  `hutang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `eps` bigint(20) NOT NULL,
  `roa` double NOT NULL,
  `roe` double NOT NULL,
  `dar` bigint(20) NOT NULL,
  `der` double NOT NULL,
  `pbv` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tobinsq`
--

INSERT INTO `tobinsq` (`id`, `kode`, `closing_price`, `list_share`, `debt`, `assets`, `piutang`, `hutang`, `modal`, `pendapatan`, `eps`, `roa`, `roe`, `dar`, `der`, `pbv`, `id_user`) VALUES
(2, 'AAAB', 2725, 410000000, 935612000000, 1748813000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(3, 'AAAC', 530, 3484800000, 12115363000000, 17509505000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3),
(4, 'AAAD', 2365, 2765278412, 18163866000000, 24860958000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tobinsq`
--
ALTER TABLE `tobinsq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tobinsq`
--
ALTER TABLE `tobinsq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
