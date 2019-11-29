-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2019 pada 09.26
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisanikah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `idLokasi` int(11) NOT NULL,
  `kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`idLokasi`, `kota`) VALUES
(1, 'Bandung'),
(2, 'Jakarta'),
(3, 'Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `idPaket` int(11) NOT NULL,
  `namaPaket` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gedung` varchar(20) DEFAULT NULL,
  `decoration` varchar(20) DEFAULT NULL,
  `catering` varchar(20) DEFAULT NULL,
  `cake` varchar(20) DEFAULT NULL,
  `band` varchar(20) DEFAULT NULL,
  `wo` varchar(20) DEFAULT NULL,
  `mc` varchar(20) DEFAULT NULL,
  `dokumentasi` varchar(20) DEFAULT NULL,
  `makeup` varchar(20) DEFAULT NULL,
  `idLokasi` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`idPaket`, `namaPaket`, `harga`, `deskripsi`, `gedung`, `decoration`, `catering`, `cake`, `band`, `wo`, `mc`, `dokumentasi`, `makeup`, `idLokasi`, `gambar`) VALUES
(3, 'Paket pernikahan silver', 50000000, 'mantap', 'Gedung', 'Decoration', 'Catering', 'Wedding Cake', 'Band', 'Wedding Organizer', 'Master of Ceremony', 'Documentation', 'Makeup', 1, 'gambar1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPembayaran` int(11) NOT NULL,
  `idPesanan` int(11) NOT NULL,
  `caraPembayaran` varchar(20) NOT NULL,
  `tglPembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `idPaket` int(11) NOT NULL,
  `tglPemesanan` date NOT NULL,
  `tglAcara` date NOT NULL,
  `isKonfirmasi` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `idRole` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `idRole`, `firstName`, `lastName`, `password`, `email`, `gender`) VALUES
('admin', 2, 'admin', 'admin', '$2y$10$8otpx6kN1PNfraWgvVGnn.QuMnvVA35n5YEw1HWWh3M4Vrj5Sz3Sm', 'admin@admin.com', 'Laki-Laki'),
('dionisio07', 1, 'Dionisio', 'Febrianto', '$2y$10$pcdXJTvQjbDQf0a7dKwJR.8zm9vplqCd4w/9DPRgHfsW/1Td/9mpO', 'dio.721999@gmail.com', 'Laki-Laki'),
('test', 1, 'test', 'test', '$2y$10$FsbMgEPh/8RlzbB084rSi.vHrlhsiDhSO5CEujmj3/PybtRLyD1cy', 'tes@gmail.com', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userrole`
--

CREATE TABLE `userrole` (
  `idRole` int(11) NOT NULL,
  `namaRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userrole`
--

INSERT INTO `userrole` (`idRole`, `namaRole`) VALUES
(1, 'Customer'),
(2, 'Admin'),
(3, 'Bendahara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idLokasi`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`idPaket`),
  ADD KEY `lokasi_FK` (`idLokasi`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`),
  ADD KEY `pesanan_fk` (`idPesanan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `paket_fk` (`idPaket`),
  ADD KEY `customer_FK` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `role_fk` (`idRole`);

--
-- Indeks untuk tabel `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`idRole`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idLokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `idPaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `userrole`
--
ALTER TABLE `userrole`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `lokasi_FK` FOREIGN KEY (`idLokasi`) REFERENCES `lokasi` (`idLokasi`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pesanan_fk` FOREIGN KEY (`idPesanan`) REFERENCES `pesanan` (`idPesanan`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `customer_FK` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `paket_fk` FOREIGN KEY (`idPaket`) REFERENCES `paket` (`idPaket`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`idRole`) REFERENCES `userrole` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
