-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Nov 2018 pada 17.13
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsipsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis`
--

CREATE TABLE `tb_jenis` (
  `id` int(2) NOT NULL,
  `jenis_surat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis`
--

INSERT INTO `tb_jenis` (`id`, `jenis_surat`) VALUES
(1, 'Undangan'),
(2, 'Surat Resmi'),
(3, 'Surat Lamaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(2) NOT NULL,
  `keterangan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `keterangan`) VALUES
(1, 'Surat Masuk'),
(2, 'Surat Keluar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `no_surat` varchar(20) NOT NULL,
  `hal` varchar(20) NOT NULL,
  `lampiran` varchar(10) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `id_jenis` int(2) NOT NULL,
  `id_keterangan` int(2) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `no_surat`, `hal`, `lampiran`, `tujuan`, `id_jenis`, `id_keterangan`, `tanggal`) VALUES
(3, '2', 'Izin', '-hfdhf', 'contoh 2', 2, 2, '2018-10-11'),
(7, '5', 'lamaran', '-', 'contoh 5', 3, 1, '2018-10-14'),
(8, 'contoh 5', 'Udangan', '1', 'contoh 5', 1, 1, '2018-10-15'),
(9, '1234', 'contoh', 'contoh', 'contoh', 1, 2, '2018-10-26'),
(34, 'contoh saja', 'contoh saja', '-', 'contoh saja', 1, 2, '2018-10-26'),
(35, 'dgsdgs', 'lamaran', '-', 'contoh', 1, 1, '2018-10-27'),
(38, '1', 'qwew', 'sfsd', 'dsfsd', 1, 1, '2018-07-26'),
(39, 'gdg', 'safasf', 'safas', 'sfas', 2, 1, '2018-10-26'),
(40, 'contoh', 'contoh', 'contoh', '1213', 1, 1, '2018-10-26'),
(41, 'safsa', 'sfasdf', 'sfasf', 'fsafeg', 1, 2, '2018-10-26'),
(42, 'sfsa', 'sfafas', 'safas', 'sfasf', 1, 1, '2018-10-26'),
(43, 'hkggkhk', 'hgkgh', 'hgkghk', 'hgkgh', 1, 1, '2018-10-26'),
(44, 'ddsv', 'dfdsg', 'dsgsdg', 'dsgdsg', 1, 1, '2018-10-26'),
(45, 'mngb', 'fgjgf', 'gfjgfj', 'ffdgj', 1, 2, '2018-10-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(4) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Krismon', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_keterangan` (`id_keterangan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis`
--
ALTER TABLE `tb_jenis`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD CONSTRAINT `tb_surat_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tb_jenis` (`id`),
  ADD CONSTRAINT `tb_surat_ibfk_2` FOREIGN KEY (`id_keterangan`) REFERENCES `tb_kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
