-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2024 pada 04.17
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_siskamling`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_hadir`
--

CREATE TABLE `daftar_hadir` (
  `id_jadwal` varchar(10) NOT NULL,
  `Nama_warga` varchar(20) NOT NULL,
  `Kehadiran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_hadir`
--

INSERT INTO `daftar_hadir` (`id_jadwal`, `Nama_warga`, `Kehadiran`) VALUES
('D3', 'Ujang Garut', 'Hadir'),
('D6', 'Yusuf', 'Hadir'),
('D9', 'Epul', 'Tidak Hadir'),
('J3', 'Ibrahim', 'Tidak Hadir'),
('J5', 'Taopik', 'Tidak Hadir'),
('J7', 'Tedi gunawan', 'Hadir'),
('J8', 'Ujang ajang', 'Hadir'),
('P2', 'Septian', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `nik_warga` varchar(15) NOT NULL,
  `id_jadwal` varchar(10) NOT NULL,
  `tanggal_bertugas` date NOT NULL,
  `Shift` int(2) NOT NULL,
  `Kehadiran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`nik_warga`, `id_jadwal`, `tanggal_bertugas`, `Shift`, `Kehadiran`) VALUES
('32004480', 'D3', '2023-11-14', 1, ''),
('32001342', 'D4', '2023-11-07', 1, ''),
('32001877', 'D6', '2023-11-21', 1, ''),
('32006601', 'D7', '2024-05-09', 2, ''),
('32009067', 'D9', '2023-11-21', 2, ''),
('32129736', 'E6', '2024-05-07', 2, ''),
('32007618', 'f4', '2024-05-09', 3, ''),
('32007633', 'F5', '2023-11-01', 4, ''),
('32524789', 'G5', '2024-05-07', 2, ''),
('32001206', 'J1', '2023-11-01', 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_warga`
--

CREATE TABLE `jadwal_warga` (
  `nik` int(10) NOT NULL,
  `jadwal_id` varchar(5) NOT NULL,
  `nama` text NOT NULL,
  `tanggal` date NOT NULL,
  `minggu` int(4) NOT NULL,
  `shift` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_warga`
--

INSERT INTO `jadwal_warga` (`nik`, `jadwal_id`, `nama`, `tanggal`, `minggu`, `shift`) VALUES
(32002233, ' D4', 'taopik', '2023-11-28', 4, 1),
(320017652, 'F1', 'Aep', '2023-12-04', 1, 2),
(320055614, 'F3', 'Faisal', '2023-12-04', 1, 2),
(320054112, 'F5', 'Opi', '2023-12-05', 1, 2),
(320008917, 'F6', 'rina', '2023-12-05', 1, 2),
(320089148, 'F8', 'Rofi', '2023-12-06', 1, 1),
(32001206, 'F9', 'Ujang', '2023-11-28', 4, 1);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vjadwal`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vjadwal` (
`nik_warga` varchar(15)
,`id_jadwal` varchar(10)
,`tanggal_bertugas` date
,`Shift` int(2)
,`nik` int(15)
,`nama` varchar(20)
,`no_telepon` varchar(15)
,`no_rumah` varchar(10)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE `warga` (
  `nik` int(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `no_rumah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`nik`, `nama`, `no_telepon`, `no_rumah`) VALUES
(32001877, 'Yusuf', '085940665404', 'B41'),
(32001921, 'Indra', '082566743111', '041'),
(32002233, 'taopik', '082218589714', '055'),
(32004422, 'Usep', '088971752739', 'B21'),
(32004480, 'Ujang garut', '089669087119', 'B18'),
(32005521, 'Ujang ferdi', '081304852213', 'A26'),
(32006509, 'Ibrahim', '082344987721', 'B25'),
(32006601, 'Asep', '088214375321', 'A22'),
(32007618, 'Diki', '081589776542', 'A27'),
(32007633, 'Hidayat', '081222899001', '013'),
(32009765, 'Tedi Gunawan', '081234654421', 'B81'),
(32129736, 'Herman', '08873763713', 'F51'),
(325253631, 'Ziko', '082713532', 'P9'),
(345267424, 'jijo', '03826354', 'U8'),
(426255542, 'Leo', '01533252', 'Z6');

--
-- Trigger `warga`
--
DELIMITER $$
CREATE TRIGGER `pencatatan_input` AFTER INSERT ON `warga` FOR EACH ROW BEGIN
	INSERT INTO warga_log (nik,aksi,waktu) VALUES (NEW.nik,"Insert",now());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_log`
--

CREATE TABLE `warga_log` (
  `id` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `aksi` varchar(30) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga_log`
--

INSERT INTO `warga_log` (`id`, `nik`, `aksi`, `waktu`) VALUES
(1, '426255542', 'Insert', '2024-06-21 01:38:29'),
(2, '325253631', 'Insert', '2024-06-21 01:40:25');

-- --------------------------------------------------------

--
-- Struktur untuk view `vjadwal`
--
DROP TABLE IF EXISTS `vjadwal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vjadwal`  AS SELECT `jadwal`.`nik_warga` AS `nik_warga`, `jadwal`.`id_jadwal` AS `id_jadwal`, `jadwal`.`tanggal_bertugas` AS `tanggal_bertugas`, `jadwal`.`Shift` AS `Shift`, `warga`.`nik` AS `nik`, `warga`.`nama` AS `nama`, `warga`.`no_telepon` AS `no_telepon`, `warga`.`no_rumah` AS `no_rumah` FROM (`jadwal` join `warga` on(`jadwal`.`nik_warga` = `warga`.`nik`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `daftar_hadir`
--
ALTER TABLE `daftar_hadir`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `jadwal_warga`
--
ALTER TABLE `jadwal_warga`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `warga_log`
--
ALTER TABLE `warga_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `warga_log`
--
ALTER TABLE `warga_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
