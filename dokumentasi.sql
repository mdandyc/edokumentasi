-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Apr 2018 pada 02.55
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokumentasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoriFK` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usernameFK` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id`, `nama_dokumen`, `kategoriFK`, `keterangan`, `tanggal`, `usernameFK`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, '1524730731.doc_2.pdf', 3, 'Laporan Keuangan', '2018-12-31', 'dandyforze', NULL, '2018-04-26 01:18:51', '2018-04-26 01:18:51'),
(10, 'Tutorial Database Java Eclipse.docx', 3, 'Laporan Keuangan', '2018-12-31', 'mdandyc', NULL, '2018-04-26 01:42:39', '2018-04-26 06:09:40'),
(11, '1524747941.Tutorial Database Java Netbeans.pdf', 4, 'Kegiatan Seni', '2018-12-31', 'mdandyc', NULL, '2018-04-26 06:05:41', '2018-04-26 06:05:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `jenis_kategori`, `created_at`, `updated_at`) VALUES
(3, 'Keuangan Sekolah', '2018-04-26 00:13:04', '2018-04-26 06:44:07'),
(4, 'Sekolah', '2018-04-26 01:18:12', '2018-04-26 01:18:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_05_012854_create_dokumentasi_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `name`, `email`, `password`, `jabatan`, `alamat`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
('dandyforze', 'Dandy Chrono', 'dandyforze@gmail.com', '$2y$10$2GRlX4wi5LGIdpg9usvwDe/uWdr.Ed6ybqmKNZjn9cAqoQvoO7vWm', 'admin', 'Bandung', '08401606221', 'Eb9MuQwojpUWpUGdGZ0DORMCQuxxIACqrTnIfTFCUMszSa0VWQ8F0bMNvRtX', '2018-04-26 00:00:52', '2018-04-26 00:00:52'),
('loiseu12', 'Lousin Jhonh', 'klorintjohr@gmail.com', '$2y$10$r1TqJmEBExkZaHCFKQD46upOxClAg.DrgL62kEBwZMxCUeZGhHzES', 'staff', 'Garut City', '087890317128', 'lb8zlVyAbXxzyg2WIvHPphrlU1LBe3iQAhbgYkLFlcJdxnEQGgpTeExd0rQ4', '2018-04-26 06:31:38', '2018-04-26 06:31:38'),
('mdandyc', 'Saepul Lila', 'dandyforze21@gmail.com', '$2y$10$49thuwmFCe2qeONC1Q3lUutDu8/89Tbl.Mo57bQBHMW2Zpgl17D7C', 'staff', 'Garut City', '084561065156', '11V96uH9RNrSTSgyDSoOMQMYBxf3SsU4U7uUVIAdcuWU7UpBnCHOF0Nngl9L', '2018-04-26 00:21:46', '2018-04-26 00:21:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokumen_kategorifk_foreign` (`kategoriFK`),
  ADD KEY `dokumen_usernamefk_foreign` (`usernameFK`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_kategorifk_foreign` FOREIGN KEY (`kategoriFK`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokumen_usernamefk_foreign` FOREIGN KEY (`usernameFK`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
