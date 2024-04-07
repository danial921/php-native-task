-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2024 pada 19.57
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawan-covid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `department`
--

CREATE TABLE `department` (
  `IDDept` int(11) NOT NULL,
  `Nama_Dept` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `department`
--

INSERT INTO `department` (`IDDept`, `Nama_Dept`) VALUES
(1, 'IT'),
(2, 'PURCHASING'),
(3, 'MARKETING');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `IDKaryawan` char(36) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `NoKTP` varchar(20) DEFAULT NULL,
  `Telp` varchar(20) DEFAULT NULL,
  `Kota_Tinggal` varchar(20) DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL,
  `Department` int(11) DEFAULT NULL,
  `Kota_Penempatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`IDKaryawan`, `Nama`, `NoKTP`, `Telp`, `Kota_Tinggal`, `Tanggal_lahir`, `Tanggal_Masuk`, `Department`, `Kota_Penempatan`) VALUES
('333d5e8e-f3e6-11ee-9fa8-4cedfb2be27d', 'Qomaruddin', '1234567890', '081234567890', 'Jakarta', '2024-04-01', '2024-04-05', 3, 'Nganjuk'),
('65a9fd0d-f3dc-11ee-9fa8-4cedfb2be27d', 'Qaedy', '1234567890', '081234567890', 'Jakarta', '2024-04-01', '2024-04-05', 2, 'Sedney'),
('7fbda6ae-f39e-11ee-9fa8-4cedfb2be27d', 'Muhammad Alfiyan Zulfa', '111234', '6565', 'Gresik', '2024-04-16', '2016-04-01', 2, 'Malang'),
('af98099b-f3a9-11ee-9fa8-4cedfb2be27d', 'Danial Farros', '1234567890', '081234567890', 'Jakarta', '1990-01-01', '2020-06-03', 1, 'Sedney');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`IDDept`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`IDKaryawan`),
  ADD KEY `Department` (`Department`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `department`
--
ALTER TABLE `department`
  MODIFY `IDDept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`Department`) REFERENCES `department` (`IDDept`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
