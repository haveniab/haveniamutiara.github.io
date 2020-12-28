-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2020 pada 09.59
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paketwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketbus`
--

CREATE TABLE `paketbus` (
  `Id` varchar(10) NOT NULL,
  `Jenis Bus` varchar(50) NOT NULL,
  `Harga` double NOT NULL,
  `Keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paketbus`
--

INSERT INTO `paketbus` (`Id`, `Jenis Bus`, `Harga`, `Keterangan`) VALUES
('bus001', 'ELF Short', 850000, 'Elf Short dapat menampung sekitar 13-15 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus002', 'ELF Long', 1050000, 'Elf Long dapat menampung sekitar 16-19 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus003', 'Hiace Commuter', 1100000, 'Hiace Commuter dapat menampung sekitar 15-16 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus004', 'Medium Bus', 800000, 'Medium Bus dapat menampung sekitar 25-31 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus005', 'Big Bus', 950000, 'Big Bus dapat menampung sekitar 48 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus006', 'SHD Bus', 1250000, 'SHD Bus dapat menampung sekitar 45-50 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus007', 'Microbus', 790000, 'Microbus dapat menampung sekitar 45-48 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus008', 'Minivan', 1000000, 'Minivan dapat menampung sekitar 15-20 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus009', 'Toyota HIACE', 1200000, 'Toyota HIACE dapat menampung sekitar 16 penumpang. Sewa bus sudah termasuk Crew + BBM.'),
('bus010', 'Isuzu NQR 71', 1300000, 'Isuzu NQR 71 dapat menampung sekitar 25-30 penumpang. Sewa bus sudah termasuk Crew + BBM.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketmobil`
--

CREATE TABLE `paketmobil` (
  `Id` varchar(10) NOT NULL,
  `Jenis Mobil` varchar(50) NOT NULL,
  `Harga` double NOT NULL,
  `Keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paketmobil`
--

INSERT INTO `paketmobil` (`Id`, `Jenis Mobil`, `Harga`, `Keterangan`) VALUES
('mbl01', 'Alphard', 2200000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl02', 'Innova Reborn', 600000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl03', 'New Avanza', 400000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl04', 'Grand Innova', 500000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl05', 'Camry', 2200000, 'Penumpang 4-5 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl06', 'Fortuner VRZ', 1400000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl07', 'Mobil Sedan', 650000, 'Penumpang 4-5 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl08', 'Isuzu Panther', 1500000, 'Penumpang 7-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl09', 'Alya', 550000, 'Penumpang 2-4 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. '),
('mbl10', 'Rush TRD', 900000, 'Penumpang 6-8 Orang. Sewa mobil sudah termasuk Mobil + Driver + BBM. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketwisata`
--

CREATE TABLE `paketwisata` (
  `Id` int(10) NOT NULL,
  `Jenis Paket` varchar(50) NOT NULL,
  `Harga` double NOT NULL,
  `Keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paketwisata`
--

INSERT INTO `paketwisata` (`Id`, `Jenis Paket`, `Harga`, `Keterangan`) VALUES
(1, 'Wisata 3 Pantai', 500000, 'Pantai Seminyak, Pantai Kuta, Pantai Pandawa'),
(2, 'Wisata 5 Pantai', 1000000, 'Pantai Seminyak, Pantai Kuta, Pantai Pandawa, Pantai Sanur, Pantai Pura Luhur Uluwatu'),
(3, 'Paket Wisata 1', 1500000, 'Museum Bali, Lapangan Puput Badung, Art Center, Margarana Bajra Sandhi'),
(4, 'Paket Wisata 2', 1800000, 'Tanjung Benoa, Pantai Pendawa, Garuda Wisnu Kencana, Uluwatu\r\n'),
(5, 'Paket Wisata 3', 2000000, 'Pura Tanah Lot, Tanjung Benoa, Pantai Pendawa, Garuda Wisnu Kencana'),
(6, 'Paket Wisata 4', 900000, 'Museum 3D Art, Pura Tanah Lot, Pura Ulundanu, Danau Bratan'),
(7, 'Paket Wisata 5', 750000, 'Pura Ulundanu, Pantai Kuta, Kintamani, Pura Tanah Lot'),
(8, 'Paket Wisata 6', 1200000, 'Tanjung Benoa, Pantai Pendawa, Pura Tanah Lot, Pantai Jimbaran'),
(9, 'Paket Wisata Gunung', 1700000, 'Gunung Agung, Gunung Batur, Gunung Abang, Gunung BatuKaru'),
(10, 'Paket Pantai dan Gunung', 2500000, 'Pantai Kuta, Pantai Pandawa, Pantai Jimbaran, Gunung Agung, Gunung Batur');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paketbus`
--
ALTER TABLE `paketbus`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `paketmobil`
--
ALTER TABLE `paketmobil`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `paketwisata`
--
ALTER TABLE `paketwisata`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
