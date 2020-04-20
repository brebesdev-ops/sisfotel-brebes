-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 05:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `042020_sisfotel_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `img` varchar(50) DEFAULT 'default.png',
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `email`, `name`, `password`, `img`, `role`) VALUES
(1, 'kasi@example.com', 'Kasi', '84b717b2f508583354c932d4e044ed61515fcda7', 'default.png', 5),
(2, 'kepala@example.com', 'Kepala Dinas', '6e1eb91e950fbd677cf115ad60d918a12c9dc19b', 'default.png', 3),
(3, '34525', 'Karakter', '9cf82ec80c3b12c0f6a3347b1a8ff5c2444ab3bf', 'default.png', 2),
(5, 'kabid@example.com', 'Kepala Dinas', '8e590a6e98238e4408919e20e02b7cd5f3d3d0c9', 'default.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama` varbinary(255) NOT NULL,
  `email` varbinary(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id`, `id_perusahaan`, `nama`, `email`, `no_telp`, `alamat`, `password`) VALUES
(1, 1, 0x5379616872696c20497266616e6920466174746168, 0x7379616872696c616b75313740676d61696c2e636f6d, '089629169017', 'Cirebon', '50cddad91358a6e64c75f67d496b7f3fc2e97823'),
(2, 1, 0x41686d6164204661757a69, 0x6f7a65656b616e6140676d61696c2e636f6d, '0843534857', 'Larangan Brebes', 'f5f3a5f4c0ea5e396e876b2cec7c9ca85ab749ca');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `no_surat_pmhn` varchar(255) NOT NULL,
  `site_id` varchar(255) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `tinggi_tower` varchar(255) NOT NULL,
  `alamat_tower` varchar(255) NOT NULL,
  `dibangun_tanggal` varchar(255) NOT NULL,
  `koordinat_longitude` varchar(255) NOT NULL,
  `koordinat_latitude` varchar(255) NOT NULL,
  `pemilik_tanah` varchar(255) NOT NULL,
  `batas_utara` varchar(255) NOT NULL,
  `batas_timur` varchar(255) NOT NULL,
  `batas_selatan` varchar(255) NOT NULL,
  `batas_barat` varchar(255) NOT NULL,
  `lama_sewa` varchar(255) NOT NULL,
  `operator_pengguna` varchar(255) NOT NULL,
  `is_approve_kasi` enum('SETUJU','TOLAK','MENUNGGU') DEFAULT NULL,
  `is_approve_kabid` enum('SETUJU','TOLAK','MENUNGGU') DEFAULT NULL,
  `is_approve_kepala` enum('SETUJU','TOLAK','MENUNGGU') DEFAULT NULL,
  `srt_mhn_pendirian` varchar(255) DEFAULT NULL,
  `ktp_pmhn` varchar(255) DEFAULT NULL,
  `srt_kuasa` varchar(255) DEFAULT NULL,
  `p_sosialisi` varchar(255) DEFAULT NULL,
  `sp_sewa_lahan` varchar(255) DEFAULT NULL,
  `sp_tanah_tdk_sengketa` varchar(255) DEFAULT NULL,
  `izin_usaha` varchar(255) DEFAULT NULL,
  `r_kades` varchar(255) DEFAULT NULL,
  `r_camat` varchar(255) DEFAULT NULL,
  `sjk_tower` varchar(255) DEFAULT NULL,
  `bak` varchar(255) DEFAULT NULL,
  `sptk` varchar(255) DEFAULT NULL,
  `spk` varchar(255) DEFAULT NULL,
  `spaj` varchar(255) DEFAULT NULL,
  `spbb` varchar(255) DEFAULT NULL,
  `spptb` varchar(255) DEFAULT NULL,
  `spps` varchar(255) DEFAULT NULL,
  `kk` varchar(255) DEFAULT NULL,
  `stfc` varchar(255) DEFAULT NULL,
  `ppbb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`id`, `id_pendaftar`, `no_surat_pmhn`, `site_id`, `site_name`, `tinggi_tower`, `alamat_tower`, `dibangun_tanggal`, `koordinat_longitude`, `koordinat_latitude`, `pemilik_tanah`, `batas_utara`, `batas_timur`, `batas_selatan`, `batas_barat`, `lama_sewa`, `operator_pengguna`, `is_approve_kasi`, `is_approve_kabid`, `is_approve_kepala`, `srt_mhn_pendirian`, `ktp_pmhn`, `srt_kuasa`, `p_sosialisi`, `sp_sewa_lahan`, `sp_tanah_tdk_sengketa`, `izin_usaha`, `r_kades`, `r_camat`, `sjk_tower`, `bak`, `sptk`, `spk`, `spaj`, `spbb`, `spptb`, `spps`, `kk`, `stfc`, `ppbb`) VALUES
(4, 2, '1', '1', 'Site Name', '100 M', 'Desa Kubangpari Kecamaatan Kersana', '19 Desember 2020', '-2323', '-2323', 'Juragan Tanah', '56', '65', '56', '56', '10 Tahun', 'Ghufron', 'SETUJU', 'SETUJU', 'SETUJU', '0da84c05cc1e00ac670d742caccfb36d.png', 'ad2c4bea9ec28e6763d69960d15190a2.png', '36e4a2a00e7fc41f0b4e1a90b7758226.png', 'da879e1e14aa9d6655d96782b446b7fd.png', '7086cb78f2e59cecc04724ce40acda27.png', '3aa56d08b078b7f800961faf6034b43d.png', '0bc7a012b5aa49382e7e375dc0a56d70.png', '70b4e4dde758f003bfac2372a5002460.png', 'd4df32dfc0a2c325f05822b0e2b72ebe.png', '2b36e98b6b670c480b2625211b0fed74.png', 'd2c70efb9e7b8ea30219688aac9225bc.png', 'c8983e6c15731f93d42fc46b9ea2bdc4.png', '63dc001093aa1a3c8ec1ffa35425d932.png', 'acdbd8bda59cc262754dec133b40787b.png', '7dc90fad9065878c3a009fcb71980d6f.png', '7dc90fad9065878c3a009fcb71980d6f.png', '73ca8d8f845946b15b72a896cc09eb55.png', '14682f501641a581ebcf8d912fb3df74.png', '78d8ba60fffdfbeaee1d88af3e67dff8.png', '24a82686e877b591fc9a1633deb0de99.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id`, `nama`, `alamat`, `kota`, `no_telp`) VALUES
(1, 'PT SIKODE ELECTRIC', 'Jalan Pangeran Mangkubuana no 10 ', 'Cirebon', '089629169017');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(10) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gol` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jab_survey` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `nip`, `nama`, `gol`, `jabatan`, `jab_survey`) VALUES
(1, '34525', 'Karakter', 'dfgfdg', 'gfdgdfh', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_survey`
--

CREATE TABLE `tb_survey` (
  `id` int(10) NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `tanggal_survey` date NOT NULL,
  `id_petugas` varchar(50) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `hasil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_survey`
--

INSERT INTO `tb_survey` (`id`, `id_permohonan`, `tanggal_survey`, `id_petugas`, `nomor`, `hasil`) VALUES
(2, 4, '2020-04-13', '1', '356636', 'SETUJU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_survey`
--
ALTER TABLE `tb_survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_permohonan`
--
ALTER TABLE `tb_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_survey`
--
ALTER TABLE `tb_survey`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
