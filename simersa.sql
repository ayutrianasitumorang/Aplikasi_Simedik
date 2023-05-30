-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 09:13 AM
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
-- Database: `simersa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` char(8) NOT NULL,
  `nm_dokter` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `agama` varchar(12) DEFAULT NULL,
  `tipe_dr` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nm_dokter`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `agama`, `tipe_dr`) VALUES
('DOK001', 'Rina,Dr.', '1996-11-22', 'Perempuan', 'Jl.Cendrawasih No.45 Jakarta', '081343434h', 'Islam', 'Umum'),
('DOK002', 'Eka,Dr.', '1996-11-22', 'Perempuan', 'Jl.Elang No.49 Jakarta', '081343434', 'Islam', 'Umum'),
('DOK003', 'Indra,Dr.', '1996-11-22', 'Laki-Laki', 'Jl.Pertamina B No.70 Jakarta', '081343434', 'Islam', 'Umum'),
('ww', 'ds', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(8) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `sediaan` varchar(50) NOT NULL,
  `dosis` int(12) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `sediaan`, `dosis`, `satuan`, `stok`, `harga`) VALUES
(1, 'Metronidazole', 'Tablet', 500, 'mg', 4, 10000),
(2, 'Amoxicillin', 'Tablet', 500, 'mg', 90, 10000),
(3, 'Cefixime', 'Kapsul', 200, 'mg', 100, 40000),
(4, 'Cefixime', 'Kapsul', 100, 'mg', 100, 30000),
(5, 'Paracetamol', 'Tablet', 500, 'mg', 100, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(14) NOT NULL,
  `no_bpjs` int(15) DEFAULT NULL,
  `alergi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `tgl_lhr`, `jk`, `alamat`, `hp`, `no_bpjs`, `alergi`) VALUES
(1, 'Jajang Rukmana Sukarna', '2020-04-01', 'Perempuan', 'JAKARTA', '082191019181', 9182717, 'tidak ada alergi'),
(2, 'Abdul Somara', '1991-01-01', 'Laki-laki', 'Tataaran', '0918212111', 1092811221, 'Seafood'),
(6, 'Pinkan Rambo', '1991-02-01', 'perempuan', 'Hutan', '019281992', NULL, NULL),
(7, 'Fia Jatuh', '1991-01-01', 'Laki-laki', 'Panggung', '01999212', NULL, NULL),
(8, '', '0000-00-00', 'L', '', '', 0, ''),
(123, 'ASTRI', '2002-12-20', 'P', 'TATAR', 'EF3E3', 0, 'FD'),
(124, '', '0000-00-00', '', '', '', 0, ''),
(125, '', '0000-00-00', 'L', '', '', 0, ''),
(126, '', '0000-00-00', '', '', '', 0, ''),
(127, '', '0000-00-00', 'L', '', '', 0, ''),
(5612432, 'Josua', '2002-02-12', 'L', 'djbdjcb', '3223', 0, 'FD'),
(5612433, '', '0000-00-00', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rm`
--

CREATE TABLE `rm` (
  `Norekam_medik` int(8) NOT NULL,
  `nama_pasien` varchar(40) NOT NULL,
  `anamnesis` text NOT NULL,
  `diagnosis` varchar(40) DEFAULT NULL,
  `resep` text DEFAULT NULL,
  `jumlah` text DEFAULT NULL,
  `aturan` text DEFAULT NULL,
  `dokter` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rm`
--

INSERT INTO `rm` (`Norekam_medik`, `nama_pasien`, `anamnesis`, `diagnosis`, `resep`, `jumlah`, `aturan`, `dokter`) VALUES
(1, 'Pusing', 'Demam 10 hari', 'Febris', '1|2', '1|6', '3x1|3x1', 2),
(2, 'Pegal', 'Pegal Linu', 'Myalgia', '1', '2', '2x1', 4),
(3, 'lemas', 'Sakit', 'Typhoid Fever', '2', '10', '2x1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `nama_ruang` varchar(128) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `nama_ruang`, `keterangan`) VALUES
(1, 'Melati 01', 'Lantai 1'),
(2, 'Melati 02', 'Lantai 1'),
(4, 'VIP', 'Lantai 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rm`
--
ALTER TABLE `rm`
  ADD PRIMARY KEY (`Norekam_medik`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5612434;

--
-- AUTO_INCREMENT for table `rm`
--
ALTER TABLE `rm`
  MODIFY `Norekam_medik` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
