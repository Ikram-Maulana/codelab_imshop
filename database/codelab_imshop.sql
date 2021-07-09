-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2021 at 03:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codelab_imshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `harga`, `gambar`, `detail`) VALUES
(1, 'Iphone 12', '1.000.000', 'iphone12.jpg', 'iPhone 12 Pro. Layar Super Retina XDR 6,1 inci yang begitu cerah.1 Ceramic Shield dengan ketahanan jatuh empat kali lebih baik.2 Fotografi pencahayaan rendah yang menakjubkan dengan sistem kamera Pro baru, dan rentang zoom optik 4x. '),
(2, 'Samsung A20', '2.500.000', 'samsunga20.png', 'Prosessor : Exynos 7884 Octa-core (2x1.6 GHz & 6x1.35 GHz)\r\nOS : Android 9.0 (Pie)\r\nDisplay : 6.4 Inch HD + sAMOLED, Infinity-V\r\nBaterai : 4.000 mAh\r\nKamera : 8MP (f2.0) & 13MP (f1.9) + 5MP (f2.2)\r\n\r\n'),
(3, 'Iphone 11', '500.000', 'iphone11.png', 'OS : iOS 13\r\nChipset : Apple A13 Bionic (7 nm+)\r\nKamera : Utama dual 12 MP, f/1.8, 26mm (wide), 1/2.55 Inch, 1.4 µm, PDAF, OIS 12 MP, f/2.4, 13mm (ultrawide) dan depan 12 MP, f/2.2\r\nLayar : 6.1 inch\r\nBaterai : Non-removable Li-Ion 3110 mAh\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
