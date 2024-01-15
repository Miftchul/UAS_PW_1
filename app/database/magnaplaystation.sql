-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 04.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magnaplaystation`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tanggal` date NOT NULL,
  `tv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jam_mulai`, `jam_selesai`, `tanggal`, `tv`) VALUES
(2, 'Miftachul Huda', '15:00:00', '18:00:00', '2024-01-04', 4),
(3, 'Hildan Hakim', '09:00:00', '14:00:00', '2024-01-04', 1),
(4, 'Alfi Filsafat', '18:00:00', '22:00:00', '2024-01-05', 2),
(5, 'Zakki Nur', '12:00:00', '16:00:00', '2024-01-04', 8),
(6, 'Aji Prasetyo', '20:00:00', '21:00:00', '2024-01-05', 10),
(7, 'Rendi Pratama', '04:00:00', '08:00:00', '2024-01-05', 12),
(8, 'Dylan Fauzul', '07:00:00', '11:00:00', '2024-01-01', 1),
(9, 'Bambang Pamungkas', '11:00:00', '18:00:00', '2024-01-02', 3),
(10, 'Muhammad Eka', '13:00:00', '18:00:00', '2023-12-31', 1),
(11, 'Ifamnuril', '14:00:00', '19:00:00', '2023-12-31', 2),
(12, 'Wahyu Sukma', '12:00:00', '20:00:00', '2023-12-31', 3),
(13, 'Teguh Maulana', '15:00:00', '19:00:00', '2023-12-31', 4),
(14, 'Alfin Dio', '15:00:00', '19:00:00', '2023-12-31', 7),
(15, 'Raply ataullah', '14:00:00', '19:00:00', '2023-12-31', 9),
(16, 'Faruq hasbullah', '13:00:00', '20:00:00', '2023-12-31', 10),
(17, 'Marcello', '17:00:00', '19:00:00', '2023-12-31', 9),
(18, 'Marcelino', '15:00:00', '19:00:00', '2023-12-31', 13),
(20, 'Ferry Nur', '16:51:00', '17:51:00', '2024-01-05', 7),
(21, 'Zakki', '13:39:00', '13:39:00', '2024-01-06', 1),
(22, 'Teguh', '19:00:00', '21:00:00', '2024-02-21', 1),
(24, 'Rendi Peayogo', '12:08:00', '15:08:00', '2024-01-09', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'huda', '0987'),
(3, 'test', '$2y$10$S6Y7okVQRSXMSAiTFI207OSGpSEB0S9.h3nTpVm0/bhKl/FeREzZe'),
(4, 'agus', '0987'),
(5, 'teguh', '1234567890'),
(6, 'alfin', '123'),
(7, 'alfin', '123'),
(8, 'alfin', '123'),
(9, 'alfin', '123'),
(10, 'alan', '1234'),
(11, 'maulana', '1234'),
(12, 'agus', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
