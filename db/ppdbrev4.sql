-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 09:28 AM
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
  `tipe_account` int(11) NOT NULL,
  `daftar` int(3) DEFAULT NULL,
  `verifikasi` int(3) DEFAULT NULL,
  `kelulusan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`nisn`, `username`, `password`, `tipe_account`, `daftar`, `verifikasi`, `kelulusan`) VALUES
('0000', 'admin', 'lesmana123', 1, NULL, NULL, NULL),
('90', 'pujilesmana', 'lesmana123', 2, 1, 2, NULL),
('91', 'Lifya Fitriani', 'lesmana123', 2, 1, 1, 2),
('92', 'Tri Kurnia Sari', 'lesmana123', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_kesehatan`
--

CREATE TABLE `data_kesehatan` (
  `nisn` varchar(30) NOT NULL,
  `nama_dokter` varchar(50) DEFAULT NULL,
  `rumah_sakit` varchar(50) DEFAULT NULL,
  `penyakit_jantung` varchar(10) DEFAULT NULL,
  `penyakit_kanker` varchar(10) DEFAULT NULL,
  `penyakit_kelainan_psikologis` varchar(10) DEFAULT NULL,
  `kelainan_saraf` varchar(10) DEFAULT NULL,
  `kelainan_darah` varchar(10) DEFAULT NULL,
  `pernah_operasi` varchar(10) DEFAULT NULL,
  `masa_pengobatan` varchar(10) DEFAULT NULL,
  `bantuan_medis` varchar(10) DEFAULT NULL,
  `perhatian_fisik` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_organisasi`
--

CREATE TABLE `data_organisasi` (
  `id_organsasi` int(11) NOT NULL,
  `pernah` varchar(10) DEFAULT NULL,
  `nama_organisasi` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `masa_periode` varchar(20) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_organisasi`
--

INSERT INTO `data_organisasi` (`id_organsasi`, `pernah`, `nama_organisasi`, `jabatan`, `masa_periode`, `nisn`) VALUES
(12, 'Ya', '', '', '', '90');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu_a`
--

CREATE TABLE `data_ortu_a` (
  `id_orangtua` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `no_ktp` int(20) DEFAULT NULL,
  `alamat` text,
  `no_telp` varchar(30) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pendidikan_terakhir` varchar(30) DEFAULT NULL,
  `status_pekerjaan` varchar(30) DEFAULT NULL,
  `jenis_pekerjaan` varchar(30) DEFAULT NULL,
  `nama_perusahaan` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `tahun_mulai_kerja` varchar(50) DEFAULT NULL,
  `penghasilan` varchar(60) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `pernah` varchar(10) DEFAULT NULL,
  `nama_kejuaraan` varchar(100) DEFAULT NULL,
  `tingkat_kejuaraan` varchar(50) DEFAULT NULL,
  `juara` int(11) DEFAULT NULL,
  `kategori_kegiatan` varchar(50) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `sertifikat` varchar(20) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_prestasi`
--

INSERT INTO `data_prestasi` (`id_prestasi`, `pernah`, `nama_kejuaraan`, `tingkat_kejuaraan`, `juara`, `kategori_kegiatan`, `tahun`, `sertifikat`, `nisn`) VALUES
(0, 'Ya', 'Voli', 'Provinsi', 2, 'Olahraga', 2016, 'Ya', '90');

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `nama` varchar(50) DEFAULT NULL,
  `nisn` varchar(30) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmpt_lahir` varchar(30) DEFAULT NULL,
  `kewarganegaraan` varchar(30) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `gol_darah` varchar(10) DEFAULT NULL,
  `berat_badan` int(7) DEFAULT NULL,
  `tinggi` int(7) DEFAULT NULL,
  `alamat` text,
  `kota` varchar(30) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `id_sekolah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`nama`, `nisn`, `gender`, `tgl_lahir`, `tmpt_lahir`, `kewarganegaraan`, `agama`, `gol_darah`, `berat_badan`, `tinggi`, `alamat`, `kota`, `no_telepon`, `id_sekolah`) VALUES
('ooo', '90', 'male', '0111-11-11', 'eq', 'qwe', 'Kristen', 'B', 10, 10, 'dada', 'qe', 'q', 6);

-- --------------------------------------------------------

--
-- Table structure for table `data_raport`
--

CREATE TABLE `data_raport` (
  `id_raport` int(20) NOT NULL,
  `mtk` int(11) DEFAULT NULL,
  `bhs_indonesia` int(11) DEFAULT NULL,
  `bhs_inggris` int(11) DEFAULT NULL,
  `ipa` int(11) DEFAULT NULL,
  `ips` int(11) DEFAULT NULL,
  `semester` int(6) DEFAULT NULL,
  `nisn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_raport`
--

INSERT INTO `data_raport` (`id_raport`, `mtk`, `bhs_indonesia`, `bhs_inggris`, `ipa`, `ips`, `semester`, `nisn`) VALUES
(3, 1, 1, 1, 1, 1, 1, '90'),
(4, 1, 1, 1, 11, 1, 2, '90'),
(5, 1, 1, 1, 1, 1, 3, '90'),
(6, 1, 1, 1, 1, 1, 4, '90'),
(7, 1, 1, 1, 1, 1, 5, '90');

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `asal_sekolah` varchar(25) DEFAULT NULL,
  `tanggal_masuk` varchar(25) DEFAULT NULL,
  `alamat_sekolah` text,
  `nama_kpl_sekolah` varchar(30) DEFAULT NULL,
  `no_tlpn_sekolah` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id_sekolah`, `asal_sekolah`, `tanggal_masuk`, `alamat_sekolah`, `nama_kpl_sekolah`, `no_tlpn_sekolah`) VALUES
(6, 'da', '0111-11-11', 'wdw', 'dq', 'dq');

-- --------------------------------------------------------

--
-- Table structure for table `data_un`
--

CREATE TABLE `data_un` (
  `nisn` varchar(30) NOT NULL,
  `mtk_un` int(11) DEFAULT NULL,
  `bhs_indonesia_un` int(11) DEFAULT NULL,
  `bhs_inggris_un` int(11) DEFAULT NULL,
  `ipa_un` int(11) DEFAULT NULL,
  `ips_un` int(11) DEFAULT NULL,
  `semester` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_admin`
--

CREATE TABLE `file_admin` (
  `id_file_admin` int(11) NOT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  `ekstensi` varchar(20) DEFAULT NULL,
  `file` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_peserta`
--

CREATE TABLE `file_peserta` (
  `id_file_peserta` int(11) NOT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `nama_file` varchar(200) DEFAULT NULL,
  `ekstensi` varchar(20) DEFAULT NULL,
  `file` longblob,
  `nisn` varchar(30) DEFAULT NULL
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
  ADD PRIMARY KEY (`id_raport`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `nisn_2` (`nisn`);

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
  MODIFY `id_organsasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_ortu_a`
--
ALTER TABLE `data_ortu_a`
  MODIFY `id_orangtua` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_raport`
--
ALTER TABLE `data_raport`
  MODIFY `id_raport` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
  ADD CONSTRAINT `kunci_9` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

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
