-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 21.01
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `kode_admin`, `email`, `nama`, `no_hp`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ADM0001', 'anharhadhitya3004@gmail.com', 'Anhar Hadhitya', 8132454445, '$2y$10$Pw6N0KXfmyOF4P2btSwKYuzWhwLWuF6tmjWOD5GWLbU5SyZRBtra6', '2021-08-05 02:51:05', '2021-08-05 02:51:05'),
(3, 'ADM002', 'Fajarnugraha879@gmail.com', 'Fajar Nugraha', 8754625852, '$2y$10$wZu4TRQINru2m3nroZeH6O/wiveneb79tbrjXTc.WMga/nGDJfO1O', '2021-08-09 09:26:26', '2021-08-09 09:26:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `kode_customer`, `email`, `nama`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'CST001', 'angganugraha88@gmail.com', 'Angga Nugraha', 812237215, 'jalan cirangrang timur no 28', '2021-08-05 02:51:54', '2021-08-09 09:22:18'),
(3, 'CST002', 'mutiaraanf24@gmail.com', 'Mutiara', 835478645, 'jalan cibolerang indah no 28', '2021-08-07 05:15:54', '2021-08-09 09:22:47'),
(4, 'CST004', 'azharhadi789@gmail.com', 'Azhar Hadi', 857234544, 'jalan margahayu raya n0 87', '2021-08-09 09:23:49', '2021-08-09 09:23:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_layanan`
--

CREATE TABLE `jenis_layanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_layanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_layanan`
--

INSERT INTO `jenis_layanan` (`id`, `kode_layanan`, `jenis_layanan`, `created_at`, `updated_at`) VALUES
(1, 'ID001', 'Laundry kiloan', '2021-08-05 02:53:20', '2021-08-09 09:14:24'),
(2, 'ID002', 'laundry satuan', '2021-08-05 02:53:26', '2021-08-09 09:08:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_07_28_094106_create_customers_table', 1),
(2, '2021_07_28_112842_create_admins_table', 1),
(3, '2021_07_29_203406_status_pesanan', 1),
(4, '2021_07_29_211727_status_pembayaran', 1),
(5, '2021_07_29_225837_jenis_layanan', 1),
(6, '2021_07_29_230909_paket', 1),
(7, '2021_07_30_005107_transaksi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_layanan` bigint(20) UNSIGNED NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` int(11) NOT NULL,
  `tarif` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id`, `kode_paket`, `jenis_layanan`, `paket`, `berat`, `tarif`, `created_at`, `updated_at`) VALUES
(1, 'PKT001', 1, 'Cuci Komplet Regular (2-3 hari)', 1, 7000, '2021-08-05 02:53:54', '2021-08-09 09:13:28'),
(2, 'PKT002', 1, 'Cuci Komplet Regular Kilat - Laundry 1 Hari Selesai', 1, 12000, '2021-08-05 02:54:07', '2021-08-09 09:16:09'),
(3, 'PKT003', 1, 'Cuci Komplet Regular Kilat - Laundry Express 8 jam', 1, 15000, '2021-08-09 09:16:43', '2021-08-09 09:16:43'),
(4, 'PKT004', 1, 'Cuci Kering Regular (2-3 hari)', 1, 6000, '2021-08-09 09:17:31', '2021-08-09 09:17:31'),
(5, 'PKT005', 1, 'Cuci Kering Regular Kilat - Laundry 1 Hari Selesai', 1, 90000, '2021-08-09 09:17:58', '2021-08-09 09:17:58'),
(6, 'PKT006', 1, 'Cuci Kering Regular Kilat - Laundry Express 8 jam', 1, 10000, '2021-08-09 09:18:27', '2021-08-09 09:18:27'),
(7, 'PKT007', 2, 'Bahan Kain', 1, 10000, '2021-08-09 09:19:13', '2021-08-09 09:19:13'),
(8, 'PKT008', 1, 'Jaket', 1, 20000, '2021-08-09 09:19:36', '2021-08-09 09:19:36'),
(9, 'PKT009', 2, 'Sweater', 1, 20000, '2021-08-09 09:20:26', '2021-08-09 09:20:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pembayaran`
--

CREATE TABLE `status_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_status_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_pembayaran`
--

INSERT INTO `status_pembayaran` (`id`, `kode_status_pembayaran`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(2, 'STPBY002', 'Belum Lunas', '2021-08-05 03:19:01', '2021-08-09 09:27:49'),
(3, 'STPBY003', 'Lunas', '2021-08-05 03:19:29', '2021-08-09 09:27:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pesanan`
--

CREATE TABLE `status_pesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_status_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_pesanan`
--

INSERT INTO `status_pesanan` (`id`, `kode_status_pesanan`, `status_pesanan`, `created_at`, `updated_at`) VALUES
(6, 'STPSN001', 'Diterima', '2021-08-05 09:08:44', '2021-08-05 09:08:44'),
(7, 'STPSN007', 'Dicuci', '2021-08-05 09:08:56', '2021-08-05 09:08:56'),
(8, 'STPSN008', 'Dijemur', '2021-08-05 09:09:07', '2021-08-05 09:09:07'),
(9, 'STPSN009', 'Dikirim', '2021-08-05 09:09:13', '2021-08-05 09:09:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer` bigint(20) UNSIGNED NOT NULL,
  `paket` bigint(20) UNSIGNED NOT NULL,
  `berat` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status_pesanan` bigint(20) UNSIGNED NOT NULL,
  `status_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_transaksi`, `customer`, `paket`, `berat`, `total`, `status_pesanan`, `status_pembayaran`, `admin`, `created_at`, `updated_at`) VALUES
(4, '001/TRX/VIII/2021', 4, 9, 10, 200000, 9, 3, 1, '2021-08-05 09:09:29', '2021-08-09 09:29:53'),
(6, '005/TRX/VIII/2021', 3, 2, 4, 40000, 6, 2, 1, '2021-08-07 08:49:17', '2021-08-08 04:14:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_jenis_layanan_foreign` (`jenis_layanan`);

--
-- Indeks untuk tabel `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_customer_foreign` (`customer`),
  ADD KEY `transaksi_paket_foreign` (`paket`),
  ADD KEY `transaksi_status_pesanan_foreign` (`status_pesanan`),
  ADD KEY `transaksi_status_pembayaran_foreign` (`status_pembayaran`),
  ADD KEY `transaksi_admin_foreign` (`admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_pesanan`
--
ALTER TABLE `status_pesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_jenis_layanan_foreign` FOREIGN KEY (`jenis_layanan`) REFERENCES `jenis_layanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_admin_foreign` FOREIGN KEY (`admin`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `transaksi_customer_foreign` FOREIGN KEY (`customer`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `transaksi_paket_foreign` FOREIGN KEY (`paket`) REFERENCES `paket` (`id`),
  ADD CONSTRAINT `transaksi_status_pembayaran_foreign` FOREIGN KEY (`status_pembayaran`) REFERENCES `status_pembayaran` (`id`),
  ADD CONSTRAINT `transaksi_status_pesanan_foreign` FOREIGN KEY (`status_pesanan`) REFERENCES `status_pesanan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
