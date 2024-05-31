-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 09:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `kd_guru` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenkel` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_hp` char(13) NOT NULL,
  `pend_akhir` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kompetensi`
--

CREATE TABLE `tbl_kompetensi` (
  `kd_kompetensi` int(11) NOT NULL,
  `nama_kompetensi` varchar(25) NOT NULL,
  `prog_keahlian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kompetensi`
--

INSERT INTO `tbl_kompetensi` (`kd_kompetensi`, `nama_kompetensi`, `prog_keahlian`) VALUES
(38, 'Web Programming', 'Teknik Informatika'),
(39, 'Program Mobile', 'Teknik Informatika'),
(40, 'Web Dasar', 'Sistem Informasi'),
(41, 'Database', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matpel`
--

CREATE TABLE `tbl_matpel` (
  `kd_matpel` int(11) NOT NULL,
  `nama_matpel` varchar(25) NOT NULL,
  `jumlah_jam` varchar(25) NOT NULL,
  `tingkat` varchar(25) NOT NULL,
  `kd_kompetensi` int(11) NOT NULL,
  `kd_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `kd_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `kd_matpel` int(11) NOT NULL,
  `nilai_p` varchar(25) NOT NULL,
  `nilai_k` varchar(25) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `tapel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_telepon` char(13) NOT NULL,
  `kd_kompetensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nisn`, `nama_lengkap`, `alamat`, `tempat_lahir`, `tgl_lahir`, `no_telepon`, `kd_kompetensi`) VALUES
(9, '201011401402', 'Maulana Al Syafei Permana', 'Jl Raya Bogor', 'Bogor', '0000-00-00', '0812343332', 39),
(10, '201011401412', 'Lana Permana', 'Jl Merdeka', 'Tangerang', '0000-00-00', '08125433221', 39);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'maulana', 'maulana', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indexes for table `tbl_kompetensi`
--
ALTER TABLE `tbl_kompetensi`
  ADD PRIMARY KEY (`kd_kompetensi`);

--
-- Indexes for table `tbl_matpel`
--
ALTER TABLE `tbl_matpel`
  ADD PRIMARY KEY (`kd_matpel`),
  ADD KEY `kd_kompetensi` (`kd_kompetensi`,`kd_guru`),
  ADD KEY `kd_guru` (`kd_guru`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD KEY `id_siswa` (`id_siswa`,`kd_matpel`),
  ADD KEY `kd_matpel` (`kd_matpel`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kd_kompetensi` (`kd_kompetensi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kompetensi`
--
ALTER TABLE `tbl_kompetensi`
  MODIFY `kd_kompetensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_matpel`
--
ALTER TABLE `tbl_matpel`
  MODIFY `kd_matpel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_matpel`
--
ALTER TABLE `tbl_matpel`
  ADD CONSTRAINT `tbl_matpel_ibfk_1` FOREIGN KEY (`kd_kompetensi`) REFERENCES `tbl_kompetensi` (`kd_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_matpel_ibfk_2` FOREIGN KEY (`kd_guru`) REFERENCES `tbl_guru` (`kd_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD CONSTRAINT `tbl_nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_nilai_ibfk_2` FOREIGN KEY (`kd_matpel`) REFERENCES `tbl_matpel` (`kd_matpel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`kd_kompetensi`) REFERENCES `tbl_kompetensi` (`kd_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
