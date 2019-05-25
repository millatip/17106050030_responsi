-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 06:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `foto`) VALUES
('admin', 'admin', 'Milla Kunis', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` enum('Teknologi Informasi','Teknik Kimia','Teknik Elektro','Teknik Sipil','Teknik Mesin','Administrasi Niaga','Akuntansi') NOT NULL,
  `prodi` enum('D4 Teknik Informatika','D3 Manajemen Informatika','D4 Sistem Kelistrikan','D4 Teknik Elektronika','D4 Jaringan Telekomunikasi Digital','D3 Teknik Elektronika','D3 Teknik Listrik','D3 Teknik Telekomunikasi','D4 Manajemen Rekayasa Konstruksi','D4 Teknik Otomotif Elektronika','D4 Teknik Mesin Produksi dan Perawatan','D4 Teknik Kimia Industri','D3 Teknik Sipil','D3 Teknik Mesin','D3 Teknik Kimia','D4 Akuntansi Manajemen','D4 Keuangan','D4 Manajemen Pemasaran','D3 Administrasi Bisnis','D3 Akuntansi') NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nim`, `nama`, `jurusan`, `prodi`, `jk`, `tempat`, `tgl_lahir`, `no_telp`, `alamat`, `foto`, `username`, `password`) VALUES
('1710605003', 'Millati Pratiwi', 'Teknik Mesin', 'D4 Teknik Informatika', 'Perempuan', 'Jogja', '2017-05-02', '343', 'Purworejo', 'admin.jpg', 'milla', 'milla');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(4) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `jumlah` int(2) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `jenis`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah`, `lokasi`, `tgl_input`) VALUES
(1, 'Sehari bersama Rasul', 'Islami', 'Ustadz Naufal (Novel)', 'Taman Ilmu', 2015, 1, 'AA-01', '2017-05-01'),
(3, 'Laskar Pelangi', 'Novel', 'Siapa', 'Kamu', 2014, 2, 'AA-02', '2017-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id_denda`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenis`, `jenis`) VALUES
(1, 'Novel'),
(2, 'Islami'),
(3, 'Programming'),
(4, 'Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `password`, `nama`, `jk`, `tempat`, `tgl_lahir`, `no_telp`, `alamat`, `foto`) VALUES
('nina', 'nina', 'Nina Nur Aidha', 'Perempuan', 'KAB. PURWOREJO', '1998-01-02', '085226134980', 'Ketawangrejo Rt 01/07 Nomor 09, Grabag, Purworejo', 'Milla_visa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nim` varchar(20) NOT NULL,
  `id_buku` varchar(100) NOT NULL,
  `id_pegawai` varchar(150) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `denda` varchar(100) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_peminjaman` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendendaan`
--

CREATE TABLE `pendendaan` (
  `id_peminjaman` varchar(256) NOT NULL,
  `denda` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nim` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`nim`, `nama`, `date`, `time`) VALUES
('1710605003', 'Millati Pratiwi', '2019-05-25', '10:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(2) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sistem`
--

CREATE TABLE `sistem` (
  `id_sistem` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(150) NOT NULL,
  `instansi` varchar(150) NOT NULL,
  `icon` text NOT NULL,
  `subinstansi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sistem`
--

INSERT INTO `sistem` (`id_sistem`, `title`, `subtitle`, `instansi`, `icon`, `subinstansi`) VALUES
(1, 'Library', 'Perpustakaan Milla', 'Universitas Nina', 'https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiLr-vE8LbiAhXQTX0KHcbyAr8QjRx6BAgBEAU&url=http%3A%2F%2Fchittagongit.com%2Ficon%2Fvector-book-icon-0.html&psig=AOvVaw2XAlWVN66DUQj-k4Yomn3S&ust=1558880416335079', 'Department Pendidikan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `sistem`
--
ALTER TABLE `sistem`
  ADD PRIMARY KEY (`id_sistem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sistem`
--
ALTER TABLE `sistem`
  MODIFY `id_sistem` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
