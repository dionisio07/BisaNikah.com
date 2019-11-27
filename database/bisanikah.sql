-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2019 pada 05.53
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
-- Struktur dari tabel `kelola_keuangan`
--

CREATE TABLE `kelola_keuangan` (
  `idKelolaKeuangan` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `idPembayaran` int(20) NOT NULL,
  `tglKelola` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_paket`
--

CREATE TABLE `kelola_paket` (
  `idKelola` int(11) NOT NULL,
  `idPaket` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `tglKelola` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `namaPaket` varchar(20) NOT NULL,
  `harga` mediumint(9) NOT NULL,
  `keterangan` longtext NOT NULL,
  `isTersedia` tinyint(1) NOT NULL,
  `idLokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('dionisio07', 1, 'Dionisio', 'Febrianto', '$2y$10$pcdXJTvQjbDQf0a7dKwJR.8zm9vplqCd4w/9DPRgHfsW/1Td/9mpO', 'dio.721999@gmail.com', 'Laki-Laki');

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
-- Indeks untuk tabel `kelola_keuangan`
--
ALTER TABLE `kelola_keuangan`
  ADD PRIMARY KEY (`idKelolaKeuangan`),
  ADD KEY `pembayaran_fk` (`idPembayaran`),
  ADD KEY `bendahara_fk` (`username`);

--
-- Indeks untuk tabel `kelola_paket`
--
ALTER TABLE `kelola_paket`
  ADD PRIMARY KEY (`idKelola`),
  ADD KEY `kelola_paket_fk` (`idPaket`),
  ADD KEY `kelola_paket_admin_fk` (`username`);

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
  ADD KEY `custumer_fk` (`username`);

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
-- AUTO_INCREMENT untuk tabel `kelola_keuangan`
--
ALTER TABLE `kelola_keuangan`
  MODIFY `idKelolaKeuangan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelola_paket`
--
ALTER TABLE `kelola_paket`
  MODIFY `idKelola` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idLokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `idPaket` int(11) NOT NULL AUTO_INCREMENT;

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
-- Ketidakleluasaan untuk tabel `kelola_keuangan`
--
ALTER TABLE `kelola_keuangan`
  ADD CONSTRAINT `bendahara_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `pembayaran_fk` FOREIGN KEY (`idPembayaran`) REFERENCES `pembayaran` (`idPembayaran`);

--
-- Ketidakleluasaan untuk tabel `kelola_paket`
--
ALTER TABLE `kelola_paket`
  ADD CONSTRAINT `kelola_paket_admin_fk` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `kelola_paket_fk` FOREIGN KEY (`idPaket`) REFERENCES `paket` (`idPaket`);

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
  ADD CONSTRAINT `custumer_fk` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
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
