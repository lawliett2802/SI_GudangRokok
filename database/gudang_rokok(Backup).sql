-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2023 at 02:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id_gudang_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gudang_rokok` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_gudang_rokok` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kapasitas_gudang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_gudang_rokok`
--

INSERT INTO `data_gudang_rokok` (`id_gudang_rokok`, `nama_gudang_rokok`, `alamat_gudang_rokok`, `kapasitas_gudang`, `updated_at`, `created_at`) VALUES
('GD0001', 'Gudang Karanglo', 'JL. Karanglo km 60 Kota Malang', '1000 Karton', '2023-04-05 12:01:16', '2023-04-06 12:01:16'),
('GD0002', 'Gudang Kebonagung', 'JL. Kebonagung No.09-12 Kab Malang', '500 Karton', '2023-04-05 12:01:33', '2023-04-06 12:01:33'),
('GD0003', 'Gudang Gadang', 'JL. Gadang km 3 Kota Malang', '1300 Karton', '2023-05-06 07:23:27', '2023-04-06 12:01:58'),
('GD0004', 'Gudang Kepanjen', 'JL. Kepanjen No.03-6 Kab Malang', '1000 Karton', '2023-04-05 12:02:06', '2023-04-06 12:02:06'),
('GD0005', 'Gudang Merjosari', 'Jl. Merjoasi 56 Kota Malang', '1000 Karton', '2023-04-30 05:55:52', '2023-04-30 05:55:52'),
('GD0006', 'Gudang Arjosari', 'JL. Arjosari 6 Kota Malang', '1500 Karton', '2023-04-30 06:28:56', '2023-04-30 06:28:56'),
('GD0007', 'Gudang Dau', 'JL. Dau 60 Kab. Malang', '1000 Karton', '2023-04-30 06:40:36', '2023-04-30 06:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_pengiriman`
--

CREATE TABLE `data_jadwal_pengiriman` (
  `id_jadwal` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `hari_pengiriman` date NOT NULL,
  `jam_pengiriman` time NOT NULL,
  `id_pengiriman` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jadwal_pengiriman`
--

INSERT INTO `data_jadwal_pengiriman` (`id_jadwal`, `hari_pengiriman`, `jam_pengiriman`, `id_pengiriman`, `updated_at`, `created_at`) VALUES
('JD0001', '2023-05-01', '19:35:48', 'PE0001', '2023-05-01 05:35:48', '2023-05-10 05:35:48'),
('JD0002', '2023-05-01', '12:35:48', 'PE0005', '2023-06-03 09:44:10', '2023-05-10 05:35:48'),
('JD0003', '2023-06-04', '16:16:00', 'PE0001', '2023-06-04 13:41:20', '2023-06-03 10:16:08'),
('JD0004', '2023-06-02', '18:40:00', 'PE0007', '2023-06-04 13:40:52', '2023-06-04 13:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori_rokok`
--

CREATE TABLE `data_kategori_rokok` (
  `id_kategori_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kategori_rokok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kategori_rokok`
--

INSERT INTO `data_kategori_rokok` (`id_kategori_rokok`, `nama_kategori_rokok`, `created_at`, `updated_at`) VALUES
('C0001', 'SPM - Sigaret Putih Mesin', '2023-05-01 06:02:12', '2023-05-10 06:02:12'),
('C0002', 'SKM - Sigaret Kretek Mesin', '2023-05-01 06:02:12', '2023-05-10 06:02:12'),
('C0003', 'SKT - Sigaret Kretek Tangan', '2023-06-03 14:23:29', '2023-06-03 15:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `data_outlet_cabang`
--

CREATE TABLE `data_outlet_cabang` (
  `id_outlet` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_outlet` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_outlet` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_gudang_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_outlet_cabang`
--

INSERT INTO `data_outlet_cabang` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `id_gudang_rokok`, `updated_at`, `created_at`) VALUES
('OT0001', 'Sejahtera Jaya', 'JL. Arjosari 78 Kota Malang', 'GD0006', '2023-05-01 10:01:41', '2023-05-02 10:01:41'),
('OT0002', 'Maju Bersama', 'JL. Dau Utara 79 Kota Malang', 'GD0007', '2023-05-01 10:04:32', '2023-05-02 10:04:32'),
('OT0003', 'Sumber Jaya', 'Jl. Lowokdoro III', 'GD0003', '2023-05-06 07:06:21', '2023-05-06 07:06:21'),
('OT0004', 'Makmur Abadi Surya', 'Jl. Karanglo Kota Malang', 'GD0001', '2023-05-06 07:25:35', '2023-05-06 07:25:00'),
('OT0005', 'Tjencana', 'Jl. Dau 6 Kab. Malang', 'GD0005', '2023-05-24 04:17:43', '2023-05-06 07:26:36'),
('OT0006', 'Surya Kencana', 'Jl. Kepuh 7 Kota Malang', 'GD0003', '2023-06-01 08:18:04', '2023-05-06 07:27:48'),
('OT0007', 'Lawliette', 'Jl. Lowokdoro 36 Kota Malang', 'GD0003', '2023-05-06 07:28:37', '2023-05-06 07:28:37'),
('OT0008', 'Madura Jaya', 'Jl. Kepanjen 8 Kab. Malang', 'GD0004', '2023-05-06 07:42:39', '2023-05-06 07:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pegawai` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_pegawai` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_telepon` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `gaji_pegawai` int NOT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_supir` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pengguna` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `unsername` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengiriman`
--

CREATE TABLE `data_pengiriman` (
  `id_pengiriman` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pengiriman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_gudang_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `id_outlet` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_polisi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `id_supir` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `id_rute` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pengiriman`
--

INSERT INTO `data_pengiriman` (`id_pengiriman`, `tanggal_pengiriman`, `id_gudang_rokok`, `id_outlet`, `nomor_polisi`, `id_supir`, `id_rute`, `updated_at`, `created_at`) VALUES
('PE0001', '2023-06-10 08:31:38', 'GD0006', 'OT0001', 'N1111AA', 'S0001', 'R0006', '2023-06-03 05:18:29', '2023-06-03 04:31:38'),
('PE0002', '2023-06-03 04:31:50', 'GD0007', 'OT0005', 'N1234AAA', 'S0002', 'R0003', '2023-06-03 04:31:50', '2023-06-03 04:31:50'),
('PE0003', '2023-06-03 04:32:00', 'GD0001', 'OT0008', 'N1212ABC', 'S0004', 'R0001', '2023-06-03 04:32:00', '2023-06-03 04:32:00'),
('PE0004', '2023-06-03 04:32:10', 'GD0002', 'OT0004', 'N1234AAA', 'S0005', 'R0003', '2023-06-03 04:32:10', '2023-06-03 04:32:10'),
('PE0005', '2023-06-03 04:32:20', 'GD0002', 'OT0007', 'AG4321BAA', 'S0007', 'R0008', '2023-06-04 13:39:12', '2023-06-03 04:32:20'),
('PE0006', '2023-06-03 04:32:29', 'GD0002', 'OT0005', 'S2122AMA', 'S0003', 'R0008', '2023-06-03 04:32:29', '2023-06-03 04:32:29'),
('PE0007', '2023-06-03 04:32:38', 'GD0002', 'OT0004', 'S2122AMA', 'S0003', 'R0007', '2023-06-03 04:32:38', '2023-06-03 04:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `data_rokok`
--

CREATE TABLE `data_rokok` (
  `kode_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_rokok` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_rokok` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `harga_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `stock_rokok` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rokok`
--

INSERT INTO `data_rokok` (`kode_rokok`, `nama_rokok`, `jenis_rokok`, `harga_rokok`, `stock_rokok`, `id_kategori_rokok`, `created_at`, `updated_at`) VALUES
('RK0001', 'Marlboro Merah', 'Filter', '40.000', '20 Karton', 'C0001', '2023-05-01 06:02:47', '2023-05-10 06:02:47'),
('RK0002', 'Surya', 'Filter', '18.000', '12 Karton', 'C0002', '2023-05-01 06:02:47', '2023-05-10 06:02:47'),
('RK0003', 'Smith Merah', 'Filter', 'Filter', '25 Karton', 'C0001', '2023-06-03 12:12:56', '2023-06-03 12:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `data_rute`
--

CREATE TABLE `data_rute` (
  `id_rute` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_rute` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jarak_rute` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rute`
--

INSERT INTO `data_rute` (`id_rute`, `nama_rute`, `jarak_rute`, `updated_at`, `created_at`) VALUES
('R0001', 'Rute Kota Malang Utara', '50 Km', '2023-04-30 17:21:55', '2023-05-09 17:21:55'),
('R0002', 'Rute Kota Malang Selatan', '50 Km', '2023-04-30 17:22:51', '2023-05-09 17:22:51'),
('R0003', 'Rute Kota Malang Timur', '50 Km', '2023-04-30 17:22:51', '2023-05-09 17:22:51'),
('R0004', 'Rute Kota Malang Barat', '70 Km', '2023-06-04 13:42:49', '2023-05-09 17:24:15'),
('R0005', 'Rute Kab. Malang Utara', '60 Km', '2023-04-30 17:24:15', '2023-05-09 17:24:15'),
('R0006', 'Rute Kab. Malang Selatan', '60 Km', '2023-04-30 17:24:15', '2023-05-09 17:24:15'),
('R0007', 'Rute Kab. Malang Timur', '60 Km', '2023-04-30 17:24:15', '2023-05-09 17:24:15'),
('R0008', 'Rute Kab. Malang Barat', '60 Km', '2023-04-30 17:24:15', '2023-05-09 17:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `data_stock_rokok`
--

CREATE TABLE `data_stock_rokok` (
  `id_stock` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_stock` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_gudang_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_rokok` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_stock_rokok`
--

INSERT INTO `data_stock_rokok` (`id_stock`, `jumlah_stock`, `id_gudang_rokok`, `kode_rokok`, `created_at`, `updated_at`) VALUES
('ST0001', '15 Karton', 'GD0006', 'RK0001', '2023-05-01 06:06:28', '2023-05-10 06:06:28'),
('ST0002', '10 Karton', 'GD0003', 'RK0002', '2023-05-01 06:06:28', '2023-06-03 17:13:57'),
('ST0003', '15 Karton', 'GD0002', 'RK0003', '2023-06-03 16:53:15', '2023-06-03 17:13:38');

-- --------------------------------------------------------

--
-- Table structure for table `data_supir`
--

CREATE TABLE `data_supir` (
  `id_supir` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_supir` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_telepon` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_supir`
--

INSERT INTO `data_supir` (`id_supir`, `nama_supir`, `nomor_telepon`, `updated_at`, `created_at`) VALUES
('S0001', 'Budianto', '081237812312', '2023-06-01 08:15:04', '2023-05-10 05:13:21'),
('S0002', 'Yitno', '086751423712', '2023-05-01 05:13:21', '2023-05-10 05:13:21'),
('S0003', 'Puji', '081625716271', '2023-05-01 05:13:21', '2023-05-10 05:13:21'),
('S0004', 'Supriadi', '0892131341', '2023-06-01 07:55:38', '2023-06-01 07:55:38'),
('S0005', 'Sugik', '089756321234', '2023-06-01 08:06:32', '2023-06-01 08:06:32'),
('S0006', 'Tukijo', '08763124124', '2023-06-01 08:07:17', '2023-06-01 08:07:17'),
('S0007', 'Ronaldo', '0812378123', '2023-06-01 08:20:55', '2023-06-01 08:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `data_truck`
--

CREATE TABLE `data_truck` (
  `nomor_polisi` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `merek_truck` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kapasitas_muatan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_truck`
--

INSERT INTO `data_truck` (`nomor_polisi`, `merek_truck`, `kapasitas_muatan`, `updated_at`, `created_at`) VALUES
('AG2341UWU', 'Scania', '300 Karton', '2023-05-01 09:25:36', '2023-05-09 09:25:36'),
('AG4321BAA', 'Hino', '250 KArton', '2023-05-01 09:26:01', '2023-05-09 09:26:01'),
('N1111AA', 'Isuzu', '100 Karton', '2023-05-09 09:55:43', '2023-05-09 09:26:14'),
('N1212ABC', 'Scania', '300 Karton', '2023-05-01 09:26:30', '2023-05-09 09:26:30'),
('N1234AAA', 'Mitsubishi', '200 Karton', '2023-05-01 09:26:43', '2023-05-09 09:26:43'),
('S2122AMA', 'Scania', '250 Karton', '2023-05-09 10:06:44', '2023-05-09 10:06:44'),
('S2323ASA', 'Hino', '250 Karton', '2023-05-01 09:26:57', '2023-05-09 09:26:57'),
('S9812JKL', 'Mitsubishi', '200 Karton', '2023-05-02 09:27:11', '2023-05-09 09:27:11');

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
  ADD KEY `id_supir` (`id_supir`),
  ADD KEY `id_rute` (`id_rute`);

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
  ADD PRIMARY KEY (`id_rute`);

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
  ADD CONSTRAINT `data_pengiriman_ibfk_4` FOREIGN KEY (`id_supir`) REFERENCES `data_supir` (`id_supir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_pengiriman_ibfk_5` FOREIGN KEY (`id_rute`) REFERENCES `data_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_rokok`
--
ALTER TABLE `data_rokok`
  ADD CONSTRAINT `data_rokok_ibfk_1` FOREIGN KEY (`id_kategori_rokok`) REFERENCES `data_kategori_rokok` (`id_kategori_rokok`) ON DELETE CASCADE ON UPDATE CASCADE;

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
