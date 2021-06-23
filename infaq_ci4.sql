-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 12:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infaq_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `infaqq`
--

CREATE TABLE `infaqq` (
  `id_infaq` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `id_pembayaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infaqq`
--

INSERT INTO `infaqq` (`id_infaq`, `nama`, `email`, `no_telp`, `jumlah`, `id_pembayaran`) VALUES
(1, 'Elmuru Megan', 'megan@gmail.com', 567698, '500000', 1),
(2, 'Bayuangga', 'bayu@gmail.com', 555879, '20000', 3),
(3, 'Megan Bayu', 'megannn@gmail.com', 2356427, '100000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-06-23-082452', 'App\\Database\\Migrations\\Pembayaran', 'default', 'App', 1624436927, 1),
(2, '2021-06-23-082936', 'App\\Database\\Migrations\\Infaqq', 'default', 'App', 1624437055, 2),
(3, '2021-06-23-083827', 'App\\Database\\Migrations\\Infaqq', 'default', 'App', 1624437542, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `metode` varchar(25) NOT NULL,
  `norek` varchar(25) NOT NULL,
  `logo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `metode`, `norek`, `logo`) VALUES
(1, 'BCA', 'dweweu', 'tidak ada'),
(2, 'BNI', '2547534635', 'tidak ada'),
(3, 'BRI', '8866757', 'tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infaqq`
--
ALTER TABLE `infaqq`
  ADD PRIMARY KEY (`id_infaq`),
  ADD KEY `Infaqq_id_pembayaran_foreign` (`id_pembayaran`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `infaqq`
--
ALTER TABLE `infaqq`
  ADD CONSTRAINT `Infaqq_id_pembayaran_foreign` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
