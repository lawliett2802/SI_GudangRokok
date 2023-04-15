-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 04:06 PM
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
-- Database: `gudang_rokok`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gudang_rokok`
--

CREATE TABLE `data_gudang_rokok` (
  `id_gudang_rokok` varchar(10) NOT NULL,
  `nama_gudang_rokok` varchar(50) NOT NULL,
  `alamat_gudang_rokok` varchar(50) NOT NULL,
  `kapasitas_outlet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_pengiriman`
--

CREATE TABLE `data_jadwal_pengiriman` (
  `id_jadwal` varchar(10) NOT NULL,
  `hari_pengiriman` varchar(10) NOT NULL,
  `jam_pengiriman` varchar(10) NOT NULL,
  `id_pengiriman` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori_rokok`
--

CREATE TABLE `data_kategori_rokok` (
  `id_kategori_rokok` varchar(10) NOT NULL,
  `nama_kategori_rokok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_outlet_cabang`
--

CREATE TABLE `data_outlet_cabang` (
  `id_outlet` varchar(10) NOT NULL,
  `nama_outlet` varchar(50) NOT NULL,
  `alamat_outlet` varchar(50) NOT NULL,
  `id_gudang_rokok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `nomor_telepon` varchar(14) NOT NULL,
  `gaji_pegawai` int(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `id_supir` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` varchar(10) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `unsername` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_pegawai` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengiriman`
--

CREATE TABLE `data_pengiriman` (
  `id_pengiriman` varchar(10) NOT NULL,
  `tanggal_pengiriman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_gudang_rokok` varchar(10) NOT NULL,
  `id_outlet` varchar(10) NOT NULL,
  `nomor_polisi` varchar(10) NOT NULL,
  `id_supir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rokok`
--

CREATE TABLE `data_rokok` (
  `kode_rokok` varchar(10) NOT NULL,
  `nama_rokok` varchar(20) NOT NULL,
  `jenis_rokok` varchar(15) NOT NULL,
  `harga_rokok` int(6) NOT NULL,
  `stock_rokok` varchar(50) NOT NULL,
  `id_kategori_rokok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rute`
--

CREATE TABLE `data_rute` (
  `id_rute` varchar(10) NOT NULL,
  `nama_rute` varchar(50) NOT NULL,
  `jarak_rute` varchar(50) NOT NULL,
  `id_pengiriman` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_stock_rokok`
--

CREATE TABLE `data_stock_rokok` (
  `id_stock` varchar(10) NOT NULL,
  `jumlah_stock` varchar(50) NOT NULL,
  `id_gudang_rokok` varchar(10) NOT NULL,
  `kode_rokok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_supir`
--

CREATE TABLE `data_supir` (
  `id_supir` varchar(10) NOT NULL,
  `nama_supir` varchar(30) NOT NULL,
  `nomor_telepon` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_truck`
--

CREATE TABLE `data_truck` (
  `nomor_polisi` varchar(10) NOT NULL,
  `merek_truck` varchar(20) NOT NULL,
  `kapasitas_muatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_gudang_rokok`
--
ALTER TABLE `data_gudang_rokok`
  ADD PRIMARY KEY (`id_gudang_rokok`);

--
-- Indexes for table `data_jadwal_pengiriman`
--
ALTER TABLE `data_jadwal_pengiriman`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `data_kategori_rokok`
--
ALTER TABLE `data_kategori_rokok`
  ADD PRIMARY KEY (`id_kategori_rokok`);

--
-- Indexes for table `data_outlet_cabang`
--
ALTER TABLE `data_outlet_cabang`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `data_outlet_cabang_ibfk_1` (`id_gudang_rokok`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_supir` (`id_supir`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `data_pengiriman`
--
ALTER TABLE `data_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_gudang_rokok` (`id_gudang_rokok`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `nomor_polisi` (`nomor_polisi`),
  ADD KEY `id_supir` (`id_supir`);

--
-- Indexes for table `data_rokok`
--
ALTER TABLE `data_rokok`
  ADD PRIMARY KEY (`kode_rokok`),
  ADD KEY `data_rokok_ibfk_1` (`id_kategori_rokok`);

--
-- Indexes for table `data_rute`
--
ALTER TABLE `data_rute`
  ADD PRIMARY KEY (`id_rute`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `data_stock_rokok`
--
ALTER TABLE `data_stock_rokok`
  ADD PRIMARY KEY (`id_stock`),
  ADD KEY `data_stock_rokok_ibfk_1` (`kode_rokok`),
  ADD KEY `data_stock_rokok_ibfk_2` (`id_gudang_rokok`);

--
-- Indexes for table `data_supir`
--
ALTER TABLE `data_supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indexes for table `data_truck`
--
ALTER TABLE `data_truck`
  ADD PRIMARY KEY (`nomor_polisi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_jadwal_pengiriman`
--
ALTER TABLE `data_jadwal_pengiriman`
  ADD CONSTRAINT `data_jadwal_pengiriman_ibfk_1` FOREIGN KEY (`id_pengiriman`) REFERENCES `data_pengiriman` (`id_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_outlet_cabang`
--
ALTER TABLE `data_outlet_cabang`
  ADD CONSTRAINT `data_outlet_cabang_ibfk_1` FOREIGN KEY (`id_gudang_rokok`) REFERENCES `data_gudang_rokok` (`id_gudang_rokok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `data_pegawai_ibfk_1` FOREIGN KEY (`id_supir`) REFERENCES `data_supir` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD CONSTRAINT `data_pengguna_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `data_pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pengiriman`
--
ALTER TABLE `data_pengiriman`
  ADD CONSTRAINT `data_pengiriman_ibfk_1` FOREIGN KEY (`id_gudang_rokok`) REFERENCES `data_gudang_rokok` (`id_gudang_rokok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pengiriman_ibfk_2` FOREIGN KEY (`id_outlet`) REFERENCES `data_outlet_cabang` (`id_outlet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pengiriman_ibfk_3` FOREIGN KEY (`nomor_polisi`) REFERENCES `data_truck` (`nomor_polisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pengiriman_ibfk_4` FOREIGN KEY (`id_supir`) REFERENCES `data_supir` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_rokok`
--
ALTER TABLE `data_rokok`
  ADD CONSTRAINT `data_rokok_ibfk_1` FOREIGN KEY (`id_kategori_rokok`) REFERENCES `data_kategori_rokok` (`id_kategori_rokok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_rute`
--
ALTER TABLE `data_rute`
  ADD CONSTRAINT `data_rute_ibfk_1` FOREIGN KEY (`id_pengiriman`) REFERENCES `data_pengiriman` (`id_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_stock_rokok`
--
ALTER TABLE `data_stock_rokok`
  ADD CONSTRAINT `data_stock_rokok_ibfk_1` FOREIGN KEY (`kode_rokok`) REFERENCES `data_rokok` (`kode_rokok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_stock_rokok_ibfk_2` FOREIGN KEY (`id_gudang_rokok`) REFERENCES `data_gudang_rokok` (`id_gudang_rokok`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
