-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 07:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `nisn` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`nisn`, `username`, `password`, `tipe_account`) VALUES
('90', 'pujilesmana', 'lesmana123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_kesehatan`
--

CREATE TABLE `data_kesehatan` (
  `nisn` varchar(30) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `rumah_sakit` varchar(50) NOT NULL,
  `penyakit_jantung` varchar(10) NOT NULL,
  `penyakit_kanker` varchar(10) NOT NULL,
  `penyakit_kelainan_psikologis` varchar(10) NOT NULL,
  `kelainan_saraf` varchar(10) NOT NULL,
  `kelainan_darah` varchar(10) NOT NULL,
  `pernah_operasi` varchar(10) NOT NULL,
  `masa_pengobatan` varchar(10) NOT NULL,
  `bantuan_medis` varchar(10) NOT NULL,
  `perhatian_fisik` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_organisasi`
--

CREATE TABLE `data_organisasi` (
  `id_organsasi` int(11) NOT NULL,
  `nama_organisasi` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `masa_periode` varchar(20) NOT NULL,
  `nisn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu_a`
--

CREATE TABLE `data_ortu_a` (
  `id_orangtua` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `status_pekerjaan` varchar(30) NOT NULL,
  `jenis_pekerjaan` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tahun_mulai_kerja` varchar(50) NOT NULL,
  `penghasilan` varchar(60) NOT NULL,
  `nisn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_kejuaraan` varchar(100) NOT NULL,
  `tingkat_kejuaraan` varchar(50) NOT NULL,
  `juara` int(11) NOT NULL,
  `kategori_kegiatan` varchar(50) NOT NULL,
  `tahun` int(11) NOT NULL,
  `sertifikat` varchar(20) NOT NULL,
  `nisn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `nama` varchar(50) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `berat_badan` int(7) NOT NULL,
  `tinggi` int(7) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `id_sekolah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_raport`
--

CREATE TABLE `data_raport` (
  `nisn` varchar(30) NOT NULL,
  `mtk` int(11) NOT NULL,
  `bhs_indonesia` int(11) NOT NULL,
  `bhs_inggris` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `ips` int(11) NOT NULL,
  `semester` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `asal_sekolah` varchar(25) NOT NULL,
  `tanggal_masuk` varchar(25) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `nama_kpl_sekolah` varchar(30) NOT NULL,
  `no_tlpn_sekolah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_un`
--

CREATE TABLE `data_un` (
  `nisn` varchar(30) NOT NULL,
  `mtk_un` int(11) NOT NULL,
  `bhs_indonesia_un` int(11) NOT NULL,
  `bhs_inggris_un` int(11) NOT NULL,
  `ipa_un` int(11) NOT NULL,
  `ips_un` int(11) NOT NULL,
  `semester` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_admin`
--

CREATE TABLE `file_admin` (
  `id_file_admin` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_peserta`
--

CREATE TABLE `file_peserta` (
  `id_file_peserta` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `ekstensi` varchar(20) NOT NULL,
  `file` longblob NOT NULL,
  `nisn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe_account`
--

CREATE TABLE `tipe_account` (
  `id_tipe_account` int(11) NOT NULL,
  `nama_account` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_account`
--

INSERT INTO `tipe_account` (`id_tipe_account`, `nama_account`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `tipe_account` (`tipe_account`);

--
-- Indexes for table `data_kesehatan`
--
ALTER TABLE `data_kesehatan`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  ADD PRIMARY KEY (`id_organsasi`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `data_ortu_a`
--
ALTER TABLE `data_ortu_a`
  ADD PRIMARY KEY (`id_orangtua`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `data_raport`
--
ALTER TABLE `data_raport`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `data_un`
--
ALTER TABLE `data_un`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `file_admin`
--
ALTER TABLE `file_admin`
  ADD PRIMARY KEY (`id_file_admin`);

--
-- Indexes for table `file_peserta`
--
ALTER TABLE `file_peserta`
  ADD PRIMARY KEY (`id_file_peserta`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `tipe_account`
--
ALTER TABLE `tipe_account`
  ADD PRIMARY KEY (`id_tipe_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  MODIFY `id_organsasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_ortu_a`
--
ALTER TABLE `data_ortu_a`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file_admin`
--
ALTER TABLE `file_admin`
  MODIFY `id_file_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `file_peserta`
--
ALTER TABLE `file_peserta`
  MODIFY `id_file_peserta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipe_account`
--
ALTER TABLE `tipe_account`
  MODIFY `id_tipe_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `tipe_akun` FOREIGN KEY (`tipe_account`) REFERENCES `tipe_account` (`id_tipe_account`);

--
-- Constraints for table `data_kesehatan`
--
ALTER TABLE `data_kesehatan`
  ADD CONSTRAINT `kunci2` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

--
-- Constraints for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  ADD CONSTRAINT `kunci3` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

--
-- Constraints for table `data_ortu_a`
--
ALTER TABLE `data_ortu_a`
  ADD CONSTRAINT `kunci4` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

--
-- Constraints for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD CONSTRAINT `kunci5` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

--
-- Constraints for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD CONSTRAINT `kunci1` FOREIGN KEY (`nisn`) REFERENCES `account` (`nisn`),
  ADD CONSTRAINT `kunci_sekolah` FOREIGN KEY (`id_sekolah`) REFERENCES `data_sekolah` (`id_sekolah`);

--
-- Constraints for table `data_raport`
--
ALTER TABLE `data_raport`
  ADD CONSTRAINT `kunci6` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

--
-- Constraints for table `data_un`
--
ALTER TABLE `data_un`
  ADD CONSTRAINT `kunci7` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

--
-- Constraints for table `file_peserta`
--
ALTER TABLE `file_peserta`
  ADD CONSTRAINT `kunci8` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
