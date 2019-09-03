-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2019 at 06:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9352934_creativo`
--

-- --------------------------------------------------------

--
-- Table structure for table `detil_pemesanan`
--

CREATE TABLE `detil_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `jasa` int(11) NOT NULL,
  `jml_pesan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_pemesanan`
--

INSERT INTO `detil_pemesanan` (`id_pemesanan`, `jasa`, `jml_pesan`, `total_harga`) VALUES
(23554921, 1, 2, 1400000),
(23554921, 2, 2, 2200000),
(23554921, 3, 2, 400000),
(23554921, 4, 2, 800000),
(23554921, 5, 2, 1000000),
(84090337, 1, 2, 1400000),
(84090337, 2, 1, 1100000),
(84090337, 3, 0, 0),
(84090337, 4, 0, 0),
(84090337, 5, 0, 0),
(88286760, 1, 1, 700000),
(88286760, 2, 1, 1100000),
(88286760, 3, 2, 400000),
(88286760, 4, 3, 1200000),
(88286760, 5, 1, 500000),
(89897513, 1, 2, 1400000),
(89897513, 2, 1, 1100000),
(89897513, 3, 2, 400000),
(89897513, 4, 2, 800000),
(89897513, 5, 2, 1000000),
(94381799, 1, 1, 700000),
(94381799, 2, 1, 1100000),
(94381799, 3, 1, 200000),
(94381799, 4, 1, 400000),
(94381799, 5, 0, 0),
(99414588, 1, 5, 3500000),
(99414588, 2, 4, 4400000),
(99414588, 3, 3, 600000),
(99414588, 4, 1, 400000),
(99414588, 5, 5, 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` int(11) NOT NULL,
  `kategori_Jasa` int(11) NOT NULL,
  `namaJasa` varchar(50) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `kategori_Jasa`, `namaJasa`, `keterangan`, `harga`) VALUES
(1, 1, 'Domain dan Hosting', '1 Tahun', 700000),
(2, 1, 'Content website dan pelayanan konsumen', ' 1 Bulan ', 1100000),
(3, 2, 'Fanspage + FB Ads', '1 Bulan', 200000),
(4, 2, 'Content fanspage dan pelayanan konsumen', '1 Bulan', 400000),
(5, 3, 'Channel + Content', '1 Bulan', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `id_jk` int(1) NOT NULL,
  `ket_jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`id_jk`, `ket_jk`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriJasa`
--

CREATE TABLE `kategoriJasa` (
  `id_katJasa` int(11) NOT NULL,
  `ket_katJasa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoriJasa`
--

INSERT INTO `kategoriJasa` (`id_katJasa`, `ket_katJasa`) VALUES
(1, 'Website'),
(2, 'Social Media'),
(3, 'Youtube');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(16) NOT NULL,
  `customer` int(11) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `customer`, `tgl_pemesanan`, `total_harga`, `id_status`) VALUES
(23554921, 10, '2019-08-29 05:49:00', 5800000, 2),
(84090337, 14, '2019-08-29 06:53:15', 2500000, 3),
(88286760, 15, '2019-08-29 23:44:42', 3900000, 1),
(89897513, 10, '2019-08-29 06:27:12', 4700000, 1),
(94381799, 10, '2019-08-29 05:50:13', 2400000, 1),
(99414588, 16, '2019-09-03 06:43:20', 11400000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statuspemesanan`
--

CREATE TABLE `statuspemesanan` (
  `id_status` int(11) NOT NULL,
  `ket_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuspemesanan`
--

INSERT INTO `statuspemesanan` (`id_status`, `ket_status`) VALUES
(1, 'pending'),
(2, 'sedang diproses'),
(3, 'selesai diproses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenisKelamin` int(11) NOT NULL,
  `noTelp` varchar(13) NOT NULL,
  `usertype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `jenisKelamin`, `noTelp`, `usertype`) VALUES
(9, 'admin', 'admin@mail.com', '$2y$10$ywy88SBZs2dLrPn5tb35WOwaaERW133d0HirsqJ6fOUUgcpiqf/aW', 1, '32323232323', 1),
(10, 'hendrik', 'hendrik@mail.com', '$2y$10$qAh6qJfxJvObOa8WIits4uYeeXDvgxHQ.JxDmv4.3IjLSE3NWtdrS', 1, '081230814747', 2),
(13, 'rizky123', 'rizky11@gmail.com', '$2y$10$bMygF.7UT25Irj4NK8UiUuxG1mECW4DCScZonXzej01bcimY5BbTu', 1, '089765776513', 2),
(14, 'rizky11', 'rizk@gmail.com', '$2y$10$itzEQqpjMr76cy5gLaHAA.wm6X5DHFfEVnsicAJDxvrzHQQBEj9t6', 1, '088888654413', 2),
(15, 'zahraelys08', 'zahra@gmail.com', '$2y$10$HTP31JkHdh8JAalu3RTepeX0xbQ063kFCuaIFJ3BFBR7F0sVaH3Em', 2, '085648363948', 2),
(16, 'zahraelys', 'elys@gmail.com', '$2y$10$UF1q41HEqCrPE8G6xZptae.A5vSnAGpdkF3szELyZzGtXdwzNL4ue', 2, '08512312433', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id_usertype` int(1) NOT NULL,
  `ket_usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id_usertype`, `ket_usertype`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detil_pemesanan`
--
ALTER TABLE `detil_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`,`jasa`,`jml_pesan`,`total_harga`),
  ADD KEY `fk_id_pemesanan` (`id_pemesanan`),
  ADD KEY `fk_jasa` (`jasa`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`),
  ADD KEY `fk_kategori_Jasa` (`kategori_Jasa`);

--
-- Indexes for table `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `kategoriJasa`
--
ALTER TABLE `kategoriJasa`
  ADD PRIMARY KEY (`id_katJasa`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `fk_customer` (`customer`),
  ADD KEY `fk_id_status` (`id_status`);

--
-- Indexes for table `statuspemesanan`
--
ALTER TABLE `statuspemesanan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_jenisKelamin` (`jenisKelamin`),
  ADD KEY `fk_usertpe` (`usertype`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id_usertype`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id_jasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detil_pemesanan`
--
ALTER TABLE `detil_pemesanan`
  ADD CONSTRAINT `fk_id_pemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  ADD CONSTRAINT `fk_jasa` FOREIGN KEY (`jasa`) REFERENCES `jasa` (`id_jasa`);

--
-- Constraints for table `jasa`
--
ALTER TABLE `jasa`
  ADD CONSTRAINT `fk_kategori_Jasa` FOREIGN KEY (`kategori_Jasa`) REFERENCES `kategoriJasa` (`id_katJasa`);

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`customer`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_id_status` FOREIGN KEY (`id_status`) REFERENCES `statuspemesanan` (`id_status`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_jenisKelamin` FOREIGN KEY (`jenisKelamin`) REFERENCES `jeniskelamin` (`id_jk`),
  ADD CONSTRAINT `fk_usertpe` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`id_usertype`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
