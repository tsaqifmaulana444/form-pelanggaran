-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 05:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form-pelanggaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `id` int(11) NOT NULL,
  `kode_permit` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`id`, `kode_permit`, `username`, `password`, `gmail`) VALUES
(1, '12aselo1e', 'raul', '$2y$10$d5nw7Cl7bqCBpOENKL4G6evqX20QIbr/5TopjJ0SYau5NRmnDroIm', 'raulgonzalez@gmail.com'),
(2, 'tes', 'tes', '$2y$10$2QEM4uf5ZJQBOAFd7QBExukLM1WvKrPOWS9dMblhh3v94XKjbVSYa', '12df@df');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` int(11) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `NIP` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `usia`, `tanggalLahir`, `NIP`, `password`, `gmail`) VALUES
(129, 'Ria Dewi', 35, '1987-01-16', 21332326, '$2y$10$2F7rKRyuRZdG9QKqXEWsu.4hWyKkp2JgWgmjnWLdd2Bp4nK4JtqdC', 'riadewi@gmail.com'),
(130, 'Siti Sri Subakti', 48, '1974-02-28', 913280821, '$2y$10$sJAPE0.vJ.cx2qg286ZISu7pVat2l5z5k3MkYWE9j6tKezUCUy912', 'sssubakti@gmail.com'),
(131, 'Abdul Mustofa Aziz', 24, '1998-03-30', 12412131, '$2y$10$kmo3g4RiiOZ0Y9Tn2IdOfeybrR4fO/ayezRshN7wGNBJyc4zZ2MKi', 'wongbanyuwangi@gmail.com'),
(132, 'Susanto Bambang Marto', 33, '1989-08-17', 70847361, '$2y$10$6hA7irIvL0ZZWqMnofjWSOiJz9hJpLNFiq317pCgn.40K00iGlAim', 'martoyono@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `keterlambatan`
--

CREATE TABLE `keterlambatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `NISN` int(11) NOT NULL,
  `menitKeterlambatan` varchar(255) NOT NULL,
  `tanggalTerlambat` date NOT NULL,
  `guruBk` varchar(255) NOT NULL,
  `alasanKeterlambatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keterlambatan`
--

INSERT INTO `keterlambatan` (`id`, `nama`, `kelas`, `NISN`, `menitKeterlambatan`, `tanggalTerlambat`, `guruBk`, `alasanKeterlambatan`) VALUES
(33, 'Aldi Taher', 'X Animasi 2', 12325641, '12:59', '2022-12-01', 'Abdul Mustofa Aziz', '1'),
(34, 'Aldi Taher', 'X Animasi 2', 12325641, '12:59', '2022-06-01', 'Ria Dewi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `poin_pelanggaran` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `deskripsi`, `poin_pelanggaran`) VALUES
(1002, 'Merokok Atau Menggunakan Vape Di Lingkungan Sekolah', 50),
(1003, 'Terlambat Masuk Sekolah', 5),
(1004, 'Membuang Sampah Sembarangan', 5),
(1005, 'Berpenampilan Berlebihan', 25),
(1006, 'Keluar Sekolah Disaat KBM Tanpa Izin', 10),
(1007, 'Alpa Selama 3x Berturut-turut', 25),
(1008, 'Tidak Mengikuti Upacara Bendera', 10),
(1009, 'Menggunakan Seragam Yang Salah', 15),
(1010, 'Tidak Masuk Sekolah Tanpa Sepengetahuan Pihak Sekolah', 10);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL,
  `NISN` int(11) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `totalPelanggaran` int(11) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `usia`, `NISN`, `tanggalLahir`, `kelas`, `gmail`, `password`, `totalPelanggaran`, `poin`) VALUES
(5, '1', '1', 1, '2022-10-05', '1', 'wdfds@assa', '$2y$10$yx/iOwobOJRRgDL54Tuug..GycAQLYftWuaVYAX5LzI.SUSFQ0/qK', 0, 0),
(113, '1', '1', 1, '2022-10-05', 'X TE 1', 'hr@gmail.com', '$2y$10$nUnaGB9MsNkCXwIMgubwyOKeUkEIwSjLp5etAVPjGKeCgCCULjAuS', 0, 0),
(114, 'tes', '12', 12, '2022-10-05', 'X TE 1', '12df@df', '$2y$10$adAaCNSdQdvipciTMhTU8.hPlQd7OuW7ZnJFSM5Vvziywh.osH.G2', 0, 0),
(115, 'Aldi Taher', '17', 12325641, '2022-10-05', 'X Animasi 2', 'aldi@gmail.com', '$2y$10$/41F0YZA9r3hn2Me0jOeS.ql5roII2P.YVbr5o2RoCGWb8pyfXpFi', 0, 0),
(116, 'Odi Wijoyo', '17', 12346631, '2006-12-05', 'X TE 1', 'wijoyoodi@gmail.com', '$2y$10$rp760HHstAUHe1l4Ngkqd.z1L7M5mdjPc.n7dVXnHaUZyCiKPH.U6', 0, 0),
(117, 'ujang', '17', 485329342, '2022-02-01', '12 RPL 3', 'wdfds@assa', '$2y$10$6pt5Y3vCZ1MdF5dz6nXeA.szF9x7/WZR43pPONUS7MlmpljO9rm.K', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterlambatan`
--
ALTER TABLE `keterlambatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `keterlambatan`
--
ALTER TABLE `keterlambatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
