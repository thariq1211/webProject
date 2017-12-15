-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 04:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_kegiatan` varchar(50) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `status` enum('Belum Disetujui','Disetujui','Ditolak','') NOT NULL,
  `status2` enum('Belum Disetujui','Disetujui','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_user`, `no_kegiatan`, `nama_kegiatan`, `tanggal`, `ruangan`, `status`, `status2`) VALUES
(1, 7, '1237/ukmlaos/ormawa/pssi/17', 'pelatihan', '2017-12-04', 'Ruang 2', 'Disetujui', 'Disetujui'),
(3, 9, '1337/BEM/ormawa/pssi/17', 'muslub', '2017-12-03', 'Ruang Aula', 'Disetujui', 'Disetujui'),
(5, 13, '1337/balwana/ormawa/pssi/17', 'panjat tebing', '2017-12-22', 'Ruang 3', 'Ditolak', 'Ditolak'),
(7, 13, '1337/balwana/ormawa/pssi/16', 'bambong', '2017-12-04', 'Ruang Aula', 'Ditolak', 'Belum Disetujui'),
(8, 9, '1137/BEM/ormawa/pssi/17', 'encode', '2018-01-16', 'Ruang 5', 'Disetujui', 'Disetujui'),
(9, 14, '1237/UKMK/ormawa/pssi/17', 'Aplikasi', '2018-02-07', 'Ruang 2', 'Disetujui', 'Ditolak'),
(10, 13, '110/balwana.2/d/PSSI/VII/2017', 'kerkol', '2017-12-14', 'Ruang 3', 'Disetujui', 'Disetujui'),
(12, 16, '110/UKM-Laos/d/PSSI/VII/2017', 'Pelatihan Linux', '2017-12-18', 'Ruang Aula', 'Belum Disetujui', 'Belum Disetujui'),
(13, 9, '110/BEM/d/PSSI/VIII/2017', 'diskusi', '2017-12-18', 'Ruang Aula', 'Disetujui', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `perijinan`
--

CREATE TABLE `perijinan` (
  `id_surat` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `no_surat` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `ijin_tempat_nomor` varchar(25) NOT NULL,
  `peserta` varchar(25) NOT NULL,
  `penanggung_jawab` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perijinan`
--

INSERT INTO `perijinan` (`id_surat`, `id_kegiatan`, `no_surat`, `tanggal`, `waktu_awal`, `waktu_akhir`, `ijin_tempat_nomor`, `peserta`, `penanggung_jawab`) VALUES
(1, 1, '1538/UN25.1.15/KM/2017', '2017-12-03', '18:00:00', '22:00:00', '1537/UN25.1.15/LK/2017', 'Anggota', 'Ketua UKM'),
(2, 13, '1538/UN25.1.15/KM/2017', '2017-12-18', '18:00:00', '20:00:00', '1538/UN25.1.15/LK/2017', 'Anggota', 'Ketua');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `id_perkap` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` enum('Belum Disetujui','Disetujui','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perlengkapan`
--

INSERT INTO `perlengkapan` (`id_perkap`, `id_user`, `id_kegiatan`, `nama_barang`, `jumlah`, `keterangan`, `status`) VALUES
(1, 9, 3, 'Mic Wireless', 2, 'Baik', 'Disetujui'),
(2, 9, 3, 'Proyektor', 1, 'Baik', 'Disetujui'),
(3, 9, 8, 'Proyektor', 3, 'Baik', 'Ditolak'),
(4, 9, 8, 'Salon', 2, 'Setengah Rusak', 'Ditolak'),
(5, 13, 10, 'Proyektor', 1, 'Baik', 'Belum Disetujui'),
(6, 9, 13, 'Proyektor', 2, 'Baik', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nim` varchar(12) DEFAULT NULL,
  `nama_ormawa` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('perkap','sekretaris2','kasieperkap','mahasiswa','satpam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `nim`, `nama_ormawa`, `username`, `password`, `level`) VALUES
(3, NULL, NULL, NULL, 'perkap', 'perkappssi', 'perkap'),
(4, NULL, NULL, NULL, 'ksieperkap', 'perkap1', 'kasieperkap'),
(5, NULL, NULL, NULL, 'sekretaris2', 'sekretaris2', 'sekretaris2'),
(7, 'Ahmad Feril', '152410101123', 'UKM LAOS', 'feril', 'feril123', 'mahasiswa'),
(9, 'M Thariq Nugroho', '152410101115', 'BEM', 'thariq121', 'k0nt0l', 'mahasiswa'),
(13, 'Bima Ajie B', '152410101114', 'UKM Balwana', 'bima', '1234', 'mahasiswa'),
(14, 'Ach Wildan A', '152410101118', 'UKMK Etalase', 'wildan.ak', 'pssi123', 'mahasiswa'),
(15, NULL, NULL, NULL, 'satpam', 'security', 'satpam'),
(16, 'Aleq Insan', '152410101129', 'UKM LAOS', 'aleq', 'aleq1', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `perijinan`
--
ALTER TABLE `perijinan`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD PRIMARY KEY (`id_perkap`),
  ADD KEY `id_kegiatan` (`id_kegiatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `perijinan`
--
ALTER TABLE `perijinan`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  MODIFY `id_perkap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `perijinan`
--
ALTER TABLE `perijinan`
  ADD CONSTRAINT `perijinan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`);

--
-- Constraints for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD CONSTRAINT `perlengkapan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id_kegiatan`),
  ADD CONSTRAINT `perlengkapan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
