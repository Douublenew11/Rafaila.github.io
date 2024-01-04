-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2024 at 01:01 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rafailaproduk`
--

CREATE TABLE `rafailaproduk` (
  `id` int NOT NULL,
  `nama_produk` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rafailaproduk`
--

INSERT INTO `rafailaproduk` (`id`, `nama_produk`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'Pangsit pedas isi ayam', 'makanan yang dibuat dengan membungkus daging cincang dalam selembar adonan yang terbuat dari tepung. Dengan 80% daging ayam dan 20% tepung sagu Rasanya kenyal, lembut dan terasa daging ayamnya.', '10000', 'Pangsit Pedas Isi Ayam.jpg'),
(2, 'dimsum kulit tahu', 'dimsum kulit tahu ini mempunyai tekstur super lembut. Yang terbuat dari kulit tahu yang tipis dan adonan daging ayam  sebagai isiannya.', '15000', 'Dimsum Kulit Tahu.jpg'),
(3, 'Cimol mozarela', 'Cimol mozarela ini memiliki tekstur yang kenyal dengan citarasa yang gurih. Berbahan dasar tepung kanji dengan isian Mozarella dan ditaburi bumbu pedas ', '10000', 'Cimol Mozarela.jpg'),
(4, 'Pangsit goreng isi ayam', 'Pangsit goreng isi ayam yang dibuat dengan membungkus daging suir dalam selembar pangsit ', '10000', 'Pangsit Goreng Isi Ayam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rafailaproduk`
--
ALTER TABLE `rafailaproduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rafailaproduk`
--
ALTER TABLE `rafailaproduk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
