-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Apr 2015 pada 10.50
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
--

CREATE TABLE IF NOT EXISTS `administrasi` (
`id` int(10) unsigned NOT NULL,
  `id_lamaran` int(10) unsigned NOT NULL,
  `nilai_topsis` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=306 ;

--
-- Dumping data untuk tabel `administrasi`
--

INSERT INTO `administrasi` (`id`, `id_lamaran`, `nilai_topsis`, `created_at`, `updated_at`) VALUES
(14, 1, 1, '2015-03-26 01:29:04', '2015-03-26 01:29:04'),
(15, 2, 0, '2015-03-26 01:29:04', '2015-03-26 01:29:04'),
(16, 3, 0, '2015-03-26 01:29:04', '2015-03-26 01:29:04'),
(17, 4, 4, '2015-03-26 01:29:04', '2015-03-26 01:29:04'),
(270, 8, 0.339412, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(271, 9, 0.542142, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(272, 10, 0.494288, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(273, 11, 0.494288, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(274, 12, 0.43018, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(275, 13, 0, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(276, 14, 0.31727, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(277, 15, 0.31727, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(278, 16, 0.372114, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(279, 17, 0.283445, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(280, 18, 0.283445, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(281, 19, 0.283445, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(282, 20, 0.283445, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(283, 21, 0.759914, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(284, 22, 0.433167, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(285, 23, 0.433167, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(286, 24, 0.343218, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(287, 25, 0.42611, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(288, 26, 0.552271, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(289, 27, 0.550132, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(290, 28, 0.539751, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(291, 29, 0.279334, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(292, 30, 0.283445, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(293, 31, 0.339412, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(294, 32, 0.42611, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(295, 33, 0.42611, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(296, 34, 0.279334, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(297, 35, 0.374622, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(298, 36, 0.374622, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(299, 37, 0.374622, '2015-04-03 17:49:18', '2015-04-03 17:49:18'),
(303, 5, 0.732014, '2015-04-13 21:27:04', '2015-04-13 21:27:04'),
(304, 6, 0.553451, '2015-04-13 21:27:04', '2015-04-13 21:27:04'),
(305, 7, 0.267986, '2015-04-13 21:27:04', '2015-04-13 21:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_administrasi`
--

CREATE TABLE IF NOT EXISTS `bobot_administrasi` (
`id` int(10) unsigned NOT NULL,
  `id_lowongan` int(10) unsigned NOT NULL,
  `ka1` decimal(3,2) NOT NULL,
  `ka2` decimal(3,2) NOT NULL,
  `ka3` decimal(3,2) NOT NULL,
  `ka4` decimal(3,2) NOT NULL,
  `kuota` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `bobot_administrasi`
--

INSERT INTO `bobot_administrasi` (`id`, `id_lowongan`, `ka1`, `ka2`, `ka3`, `ka4`, `kuota`, `created_at`, `updated_at`) VALUES
(1, 9, '0.25', '0.99', '0.75', '0.75', 5, '2015-03-25 22:34:46', '2015-03-25 22:37:53'),
(2, 1, '0.20', '0.99', '0.75', '0.00', 3, '2015-03-26 03:59:30', '2015-04-13 21:27:35'),
(3, 2, '0.25', '0.99', '0.75', '0.75', 28, '2015-03-28 04:22:46', '2015-03-28 04:22:46'),
(4, 3, '0.25', '0.10', '0.20', '0.20', 3, '2015-04-03 09:59:32', '2015-04-03 09:59:43'),
(5, 5, '0.30', '1.00', '0.10', '0.20', 0, '2015-04-15 19:43:12', '2015-04-15 19:43:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_wawancara`
--

CREATE TABLE IF NOT EXISTS `bobot_wawancara` (
`id` int(10) unsigned NOT NULL,
  `id_lowongan` int(10) unsigned NOT NULL,
  `wa1` decimal(3,2) NOT NULL,
  `wa2` decimal(3,2) NOT NULL,
  `wa3` decimal(3,2) NOT NULL,
  `wa4` decimal(3,2) NOT NULL,
  `wa5` decimal(3,2) NOT NULL,
  `wa6` decimal(2,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `bobot_wawancara`
--

INSERT INTO `bobot_wawancara` (`id`, `id_lowongan`, `wa1`, `wa2`, `wa3`, `wa4`, `wa5`, `wa6`, `created_at`, `updated_at`) VALUES
(1, 1, '0.27', '0.34', '0.70', '1.00', '0.30', '0.10', '2015-03-27 20:13:44', '2015-04-15 09:38:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Keuangan', '2015-04-01 03:30:06', '2015-04-01 03:30:06'),
(2, 'HRD', '2015-04-01 03:30:19', '2015-04-01 03:30:19'),
(3, 'Teknis', '2015-04-13 21:23:40', '2015-04-13 21:23:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuota_psikotes`
--

CREATE TABLE IF NOT EXISTS `kuota_psikotes` (
`id` int(10) unsigned NOT NULL,
  `id_lowongan` int(10) unsigned NOT NULL,
  `kuota` int(11) NOT NULL,
  `nilai_minimum` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `kuota_psikotes`
--

INSERT INTO `kuota_psikotes` (`id`, `id_lowongan`, `kuota`, `nilai_minimum`, `created_at`, `updated_at`) VALUES
(1, 9, 2, 100, '2015-03-26 01:43:10', '2015-03-26 01:43:10'),
(2, 1, 3, 70, '2015-03-26 04:11:37', '2015-03-28 02:14:57'),
(3, 2, 20, 80, '2015-03-31 05:25:05', '2015-03-31 05:25:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuota_tertulis`
--

CREATE TABLE IF NOT EXISTS `kuota_tertulis` (
`id` int(10) unsigned NOT NULL,
  `id_lowongan` int(10) unsigned NOT NULL,
  `kuota` int(11) NOT NULL,
  `nilai_minimum` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kuota_tertulis`
--

INSERT INTO `kuota_tertulis` (`id`, `id_lowongan`, `kuota`, `nilai_minimum`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 70, '2015-03-27 18:48:23', '2015-03-27 18:51:07'),
(2, 2, 10, 80, '2015-03-31 05:48:41', '2015-03-31 05:48:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE IF NOT EXISTS `lamaran` (
`id` int(10) unsigned NOT NULL,
  `id_pelamar` int(10) unsigned NOT NULL,
  `id_lowongan` int(10) unsigned NOT NULL,
  `nomor_pelamar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data untuk tabel `lamaran`
--

INSERT INTO `lamaran` (`id`, `id_pelamar`, `id_lowongan`, `nomor_pelamar`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 'NK-9-15-1', '2015-03-25 02:26:03', '2015-03-25 02:26:03'),
(2, 2, 9, 'NK-9-15-2', '2015-03-25 02:29:05', '2015-03-25 02:29:05'),
(3, 3, 9, 'NK-9-15-3', '2015-03-25 02:31:13', '2015-03-25 02:31:13'),
(4, 4, 9, 'NK-9-15-4', '2015-03-25 02:36:04', '2015-03-25 02:36:04'),
(5, 5, 1, 'NK-1-15-5', '2015-03-26 04:04:07', '2015-03-26 04:04:07'),
(6, 6, 1, 'NK-1-15-6', '2015-03-26 04:06:29', '2015-03-26 04:06:29'),
(7, 7, 1, 'NK-1-15-7', '2015-03-26 04:09:02', '2015-03-26 04:09:02'),
(8, 8, 2, 'NK-2-15-8', '2015-03-28 04:25:32', '2015-03-28 04:25:32'),
(9, 9, 2, 'NK-2-15-9', '2015-03-28 04:29:50', '2015-03-28 04:29:50'),
(10, 10, 2, 'NK-2-15-10', '2015-03-28 04:34:42', '2015-03-28 04:34:42'),
(11, 11, 2, 'NK-2-15-11', '2015-03-28 04:38:55', '2015-03-28 04:38:55'),
(12, 12, 2, 'NK-2-15-12', '2015-03-28 04:43:47', '2015-03-28 04:43:47'),
(13, 13, 2, 'NK-2-15-13', '2015-03-28 04:47:25', '2015-03-28 04:47:25'),
(14, 14, 2, 'NK-2-15-14', '2015-03-28 04:50:06', '2015-03-28 04:50:06'),
(15, 15, 2, 'NK-2-15-15', '2015-03-28 04:52:50', '2015-03-28 04:52:50'),
(16, 16, 2, 'NK-2-15-16', '2015-03-28 04:56:12', '2015-03-28 04:56:12'),
(17, 17, 2, 'NK-2-15-17', '2015-03-28 04:58:41', '2015-03-28 04:58:41'),
(18, 18, 2, 'NK-2-15-18', '2015-03-28 05:00:48', '2015-03-28 05:00:48'),
(19, 19, 2, 'NK-2-15-19', '2015-03-28 05:02:26', '2015-03-28 05:02:26'),
(20, 20, 2, 'NK-2-15-20', '2015-03-28 05:05:05', '2015-03-28 05:05:05'),
(21, 21, 2, 'NK-2-15-21', '2015-03-28 05:08:42', '2015-03-28 05:08:42'),
(22, 22, 2, 'NK-2-15-22', '2015-03-28 05:12:36', '2015-03-28 05:12:36'),
(23, 37, 2, 'NK-2-15-23', '2015-03-28 05:15:59', '2015-03-28 05:15:59'),
(24, 23, 2, 'NK-2-15-24', '2015-03-31 00:01:06', '2015-03-31 00:01:06'),
(25, 24, 2, 'NK-2-15-25', '2015-03-31 00:03:55', '2015-03-31 00:03:55'),
(26, 25, 2, 'NK-2-15-26', '2015-03-31 00:08:14', '2015-03-31 00:08:14'),
(27, 26, 2, 'NK-2-15-27', '2015-03-31 00:12:34', '2015-03-31 00:12:34'),
(28, 27, 2, 'NK-2-15-28', '2015-03-31 00:14:28', '2015-03-31 00:14:28'),
(29, 28, 2, 'NK-2-15-29', '2015-03-31 00:15:43', '2015-03-31 00:15:43'),
(30, 29, 2, 'NK-2-15-30', '2015-03-31 00:16:56', '2015-03-31 00:16:56'),
(31, 30, 2, 'NK-2-15-31', '2015-03-31 00:18:55', '2015-03-31 00:18:55'),
(32, 31, 2, 'NK-2-15-32', '2015-03-31 00:20:27', '2015-03-31 00:20:27'),
(33, 32, 2, 'NK-2-15-33', '2015-03-31 00:22:15', '2015-03-31 00:22:15'),
(34, 33, 2, 'NK-2-15-34', '2015-03-31 00:24:23', '2015-03-31 00:24:23'),
(35, 34, 2, 'NK-2-15-35', '2015-03-31 00:26:10', '2015-03-31 00:26:10'),
(36, 35, 2, 'NK-2-15-36', '2015-03-31 00:27:42', '2015-03-31 00:27:42'),
(37, 36, 2, 'NK-2-15-37', '2015-03-31 00:28:52', '2015-03-31 00:28:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan`
--

CREATE TABLE IF NOT EXISTS `lowongan` (
`id` int(10) unsigned NOT NULL,
  `id_divisi` int(10) unsigned NOT NULL,
  `kode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `id_tahap` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `lowongan`
--

INSERT INTO `lowongan` (`id`, `id_divisi`, `kode`, `nama`, `keterangan`, `id_tahap`, `created_at`, `updated_at`) VALUES
(1, 1, 'NK-15-1', 'Administrasi', 'hahaha', 13, '2015-03-28 04:20:39', '2015-04-16 00:26:36'),
(5, 2, 'NK-2015-2', 'asdhajh', 'asd', 2, '2015-04-15 19:40:41', '2015-04-15 19:43:12'),
(6, 1, 'NK-2015-3', 'ss', 'hjh', 1, '2015-04-15 22:47:40', '2015-04-15 22:47:40'),
(7, 1, 'NK-2015-4', 'sdsd', 'ksjdksd', 1, '2015-04-15 22:47:50', '2015-04-15 22:47:50'),
(8, 1, 'NK-2015-5', 'skdjfkj', 'jsdkfjsd', 1, '2015-04-15 22:47:58', '2015-04-15 22:47:58'),
(10, 1, 'NK-2015-7', 'sfsdhj', 'jhsdjfh', 1, '2015-04-15 22:48:17', '2015-04-15 22:48:17'),
(11, 1, 'NK-2015-8', 'sdkfsdfjk', 'sjkdfjskdf', 1, '2015-04-15 22:48:25', '2015-04-15 22:48:25'),
(12, 1, 'NK-2015-9', 'sdkfsdjfkj', 'ksjdkfjsd', 1, '2015-04-15 22:48:33', '2015-04-15 22:48:33'),
(13, 1, 'NK-2015-10', 'sdkfskdfj', 'sldfsdljf', 1, '2015-04-15 22:48:43', '2015-04-15 22:48:43'),
(14, 1, 'NK-2015-11', 'sdfsd', 'lkjsldjfs', 1, '2015-04-15 22:48:53', '2015-04-15 22:48:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_03_17_084122_create_table_pelamar', 1),
('2015_03_17_085431_create_table_pendidikan_terakhir', 1),
('2015_03_17_090232_create_table_lowongan', 1),
('2015_03_17_090536_create_table_divisi', 1),
('2015_03_17_090816_create_table_bobot_administrasi', 1),
('2015_03_17_091047_create_table_bobot_wawancara', 1),
('2015_03_17_091756_create_table_kuota_psikotes', 1),
('2015_03_17_091953_create_table_kuota_tertulis', 1),
('2015_03_17_092144_create_table_administrasi', 1),
('2015_03_17_092410_create_table_psikotes', 1),
('2015_03_17_092702_create_table_tertulis', 1),
('2015_03_17_093146_create_table_wawancara', 1),
('2015_03_18_012952_create_lamaran_table', 1),
('2015_03_18_111345_create_pendidikan_non_ilmiah_table', 1),
('2015_03_18_123710_create_pengalaman_kerja_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE IF NOT EXISTS `pelamar` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_ktp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `kontak` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id`, `nama`, `no_ktp`, `alamat`, `kontak`, `tempat_lahir`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(1, 'WahyuDwi Gunawan', '283904997219123', 'Plaju ujung', '089672383155', 'Palembang', '1992-06-25', '2015-03-25 02:26:03', '2015-03-25 20:00:49'),
(2, 'Musdii', '869364393474', 'Angkatan 66', '098544393749', 'Palembang', '1992-08-06', '2015-03-25 02:29:05', '2015-03-25 02:29:05'),
(3, 'Angga Kesuma', '592703323723288', 'Sukamaju', '089822328323', 'Palembang', '1992-11-01', '2015-03-25 02:31:13', '2015-03-25 02:31:13'),
(4, 'Muhammad Isa', '753703583343483', 'Sembaja Palembang', '089627238069', 'Palembang', '1992-10-09', '2015-03-25 02:36:04', '2015-03-25 02:36:04'),
(5, 'Angga Kesuma', '92931923819', 'Sukamaju', '0852897689234', 'Palembang', '1992-02-28', '2015-03-26 04:04:07', '2015-03-26 04:04:07'),
(6, 'WahyuDwi Gunawan', '978347327237972', 'Plaju Ujung', '03849743963', 'lsjsd', '1992-02-01', '2015-03-26 04:06:29', '2015-03-26 04:06:29'),
(7, 'Muhammad Isa', '3497437072308', 'Km.11', '90870700788', 'Palembang', '0002-09-08', '2015-03-26 04:09:02', '2015-03-26 04:09:02'),
(8, 'alt1', '8819381', 'jdksjdskjd', '9238239', 'asdasd', '2004-01-01', '2015-03-28 04:25:32', '2015-03-31 01:06:32'),
(9, 'alt2', '974338', 'bb', '88', 'bb', '1992-03-09', '2015-03-28 04:29:50', '2015-03-31 01:06:41'),
(10, 'alt3', '707787', 'c', '78997', 'c', '1992-03-28', '2015-03-28 04:34:42', '2015-03-31 01:06:53'),
(11, 'alt4', '88483', 'd', '97', 'd', '1998-07-06', '2015-03-28 04:38:55', '2015-03-31 01:07:03'),
(12, 'alt5', '5599', 'e', '8389399', 'e', '1992-08-08', '2015-03-28 04:43:47', '2015-03-31 01:07:13'),
(13, 'alt6', '72838', 'f', '8388', 'f', '1992-05-06', '2015-03-28 04:47:25', '2015-03-31 01:07:29'),
(14, 'alt7', '4934380', 'g', '973283', 'g', '1990-07-05', '2015-03-28 04:50:06', '2015-03-31 01:07:41'),
(15, 'alt8', '03843', 'pp', '8780', 'pp', '1996-08-06', '2015-03-28 04:52:50', '2015-03-31 01:08:01'),
(16, 'alt9', '43348348', 'i', '8808', 'i', '1993-08-07', '2015-03-28 04:56:12', '2015-03-31 01:08:13'),
(17, 'alt10', '8939', 'uoru', '83', 'jjj', '1989-09-08', '2015-03-28 04:58:41', '2015-03-31 01:08:23'),
(18, 'alt11', '545840808', 'eerehrekh', '3238', 'k', '1990-03-08', '2015-03-28 05:00:48', '2015-03-28 05:00:48'),
(19, 'alt12', '8439', 'l', '890', 'll', '1995-08-07', '2015-03-28 05:02:26', '2015-03-28 05:02:26'),
(20, 'alt13', '5859', 'm', '3829', 'm', '1998-08-07', '2015-03-28 05:05:05', '2015-03-28 05:05:05'),
(21, 'alt14', '7438', 'n', '79327', 'ierhh', '1993-07-06', '2015-03-28 05:08:42', '2015-03-28 05:08:42'),
(22, 'alt15', '7738', 'ooooo', '172919', 'o', '1992-08-06', '2015-03-28 05:12:36', '2015-03-30 23:58:25'),
(23, 'alt17', '34834838', 'q', '9730383728', 'q', '1987-08-07', '2015-03-31 00:01:06', '2015-03-31 00:01:06'),
(24, 'alt18', '803287', 'r', '782288', 'r', '1967-08-05', '2015-03-31 00:03:55', '2015-03-31 00:03:55'),
(25, 'alt19', '979879', 's', '087899', 's', '2015-03-01', '2015-03-31 00:08:14', '2015-03-31 00:08:14'),
(26, 'alt20', '7732723675970', 'tt', '686693770', 'tt', '1995-07-05', '2015-03-31 00:12:34', '2015-03-31 00:12:34'),
(27, 'alt21', '23232297', 'uu', '23678', 'uu', '1997-03-05', '2015-03-31 00:14:28', '2015-03-31 00:14:28'),
(28, 'alt22', '7489439', 'vv', '62627', 'b', '1995-02-04', '2015-03-31 00:15:43', '2015-03-31 00:15:43'),
(29, 'alt23', '43947397371', 'ww', '682863', 'w', '1996-06-30', '2015-03-31 00:16:56', '2015-03-31 00:16:56'),
(30, 'alt24', '32973297', 'w', '72892', 'x', '1997-08-09', '2015-03-31 00:18:55', '2015-03-31 00:18:55'),
(31, 'alt25', '73202808', 'y', '686969', 'y', '1987-02-28', '2015-03-31 00:20:27', '2015-03-31 00:20:27'),
(32, 'alt26', '7732737', 'z', '860', 'zz', '1989-07-04', '2015-03-31 00:22:15', '2015-03-31 00:22:15'),
(33, 'alt27', '727027', 'aas', '0277', 'aaa', '1991-02-08', '2015-03-31 00:24:23', '2015-03-31 00:24:23'),
(34, 'alt28', '877', 'bbbb', '967978', 'b1', '1992-08-07', '2015-03-31 00:26:10', '2015-03-31 00:26:10'),
(35, 'alt29', '328238', 'gg', '7708', 'jggk', '1998-06-05', '2015-03-31 00:27:42', '2015-03-31 00:27:42'),
(36, 'alt30', '8302882', 'ohewhkew', '72971', 'ljdslj', '1993-09-07', '2015-03-31 00:28:52', '2015-03-31 00:28:52'),
(37, 'alt16', '56656565656', 'jasjdansjdn', '9129129839', 'sd', '1992-11-12', '2015-03-31 00:58:58', '2015-03-31 00:58:58'),
(38, '', '', '', '', '', '0000-00-00', '2015-04-03 10:23:24', '2015-04-15 22:47:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_non_ilmiah`
--

CREATE TABLE IF NOT EXISTS `pendidikan_non_ilmiah` (
`id` int(10) unsigned NOT NULL,
  `id_pelamar` int(10) unsigned NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instansi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=180 ;

--
-- Dumping data untuk tabel `pendidikan_non_ilmiah`
--

INSERT INTO `pendidikan_non_ilmiah` (`id`, `id_pelamar`, `nama`, `instansi`, `tgl_masuk`, `tgl_keluar`) VALUES
(3, 2, 'Bongkar Komputer', 'Sahabat Komputer', '2013-08-07', '2014-09-06'),
(4, 3, 'Java Programming', 'Prospek', '2000-02-08', '2004-03-07'),
(5, 4, 'Java Programming', 'Prospek', '2004-05-07', '2007-06-07'),
(13, 1, 'Mitigasi Bencana', 'Mafesripala', '2010-09-09', '2012-08-08'),
(14, 1, 'Hacking software', 'Lapro', '2012-06-03', '2013-02-05'),
(15, 1, 'Seminar Begal', 'Begalnesia', '2015-03-02', '2015-03-29'),
(17, 6, 'wdwhkewkew', 'ehwkhhekwhw', '0008-02-07', '0002-02-02'),
(18, 6, 'iyyoy', 'oyoyoik', '0002-09-08', '0009-08-07'),
(24, 7, 'lwjd', 'ljl', '0008-02-07', '0010-02-07'),
(25, 7, 'skhdsh', 'lhlhlslh', '0006-05-04', '0006-05-04'),
(26, 5, 'hyhooho', 'kkhk', '2010-01-01', '2012-03-02'),
(63, 18, 'h', 'h', '2015-03-01', '2015-03-20'),
(64, 19, 'l', 'l', '2015-03-01', '2015-03-12'),
(65, 20, 'm', 'm', '2010-09-08', '2012-07-08'),
(66, 21, 'n', 'n', '2015-03-01', '2015-03-20'),
(67, 21, 'n', 'n', '2015-03-01', '2015-03-20'),
(68, 21, 'n', 'n', '2015-03-01', '2015-03-10'),
(69, 21, 'n', 'n', '2015-03-01', '2015-03-18'),
(82, 22, 'o', 'o', '2015-03-01', '2015-03-19'),
(83, 22, 'o', 'o', '2015-03-01', '2015-03-20'),
(84, 22, 'o', 'o', '2015-03-01', '2015-03-13'),
(85, 22, 'o', 'o', '2015-03-01', '2015-03-18'),
(86, 23, 'q', 'q', '2015-03-01', '2015-03-21'),
(87, 23, 'qq', 'q', '2015-03-01', '2015-03-17'),
(88, 23, 'q', 'q', '2015-03-01', '2015-03-12'),
(89, 24, 'r', 'r', '2015-03-01', '2015-03-18'),
(90, 24, 'rr', 'r', '2015-03-01', '2015-03-21'),
(91, 24, 'r', 'r', '2015-03-01', '2015-03-19'),
(92, 25, 's', 's', '2015-03-01', '2015-03-11'),
(93, 25, 's', 's', '2015-03-01', '2015-03-18'),
(94, 25, 's', 's', '2015-03-01', '2015-03-17'),
(95, 25, 's', 's', '2015-03-01', '2015-03-18'),
(96, 25, 's', 's', '2015-03-01', '2015-03-19'),
(97, 25, 's', 's', '2015-03-01', '2015-03-17'),
(98, 26, 't', 't', '2015-03-01', '2015-03-19'),
(99, 26, 't', 't', '2015-03-01', '2015-03-20'),
(100, 26, 't', 't', '2015-03-01', '2015-03-19'),
(101, 26, 't', 't', '2015-03-01', '2015-03-18'),
(102, 26, 't', 't', '2015-03-01', '2015-03-18'),
(103, 26, 't', 't', '2015-03-01', '2015-03-18'),
(105, 28, 'v', 'v', '2015-03-01', '2015-03-19'),
(106, 29, 'w', 'w', '2015-03-01', '2015-03-24'),
(107, 30, 'w', 'w', '2015-03-01', '2015-03-12'),
(108, 30, 'w', 'w', '2015-03-01', '2015-03-17'),
(109, 30, 'w', 'w', '2015-03-08', '2015-03-23'),
(110, 31, 'y', 'y', '2015-03-08', '2015-03-10'),
(111, 31, 'y', 'y', '2015-03-01', '2015-03-18'),
(112, 31, 'y', 'y', '2015-03-14', '2015-03-18'),
(113, 32, 'z', 'z', '2015-03-01', '2015-03-11'),
(114, 32, 'z', 'z', '2015-03-08', '2015-03-23'),
(115, 32, 'z', 'z', '2015-03-01', '2015-03-18'),
(117, 34, 'ggjg', 'hkhhl', '2015-03-01', '2015-03-18'),
(118, 33, 'uiy', 'ouou', '2015-03-01', '2015-03-28'),
(119, 35, 'hkhkhw', 'jhkhkh', '2015-03-01', '2015-03-20'),
(120, 36, 'khkhskk', 'hkhkhh', '2015-03-01', '2015-03-17'),
(143, 37, 'u', 'u', '2015-03-11', '2015-03-02'),
(144, 37, 'u', 'u', '2015-03-07', '2015-03-20'),
(145, 37, '', '', '2015-03-26', '2015-03-30'),
(146, 37, '', '', '2015-03-08', '2015-03-10'),
(147, 27, 'u', 'u', '2015-03-01', '2015-03-26'),
(148, 8, 'wewe', 'wewe', '2015-03-05', '2015-03-21'),
(149, 8, 'wewe', 'wewe', '2015-03-11', '2015-03-21'),
(150, 9, 'b', 'b', '2015-03-04', '2015-03-20'),
(151, 10, 'c', 'c', '2015-03-01', '2015-03-26'),
(152, 10, 'c', 'c', '2015-03-01', '2015-03-15'),
(153, 10, 'c', 'c', '2015-03-01', '2015-03-21'),
(154, 10, 'c', 'c', '2015-03-01', '2015-03-21'),
(155, 11, 'd', 'd', '2015-03-01', '2015-03-22'),
(156, 11, 'd', 'd', '2015-03-01', '2015-03-27'),
(157, 11, 'd', 'd', '2015-03-08', '2015-03-19'),
(158, 11, 'd', 'd', '2015-03-01', '2015-03-27'),
(159, 12, 'c', 'c', '2015-03-01', '2015-03-21'),
(160, 12, 'e', 'ee', '2015-03-01', '2015-03-29'),
(161, 12, 'e', 'e', '2015-03-01', '2015-03-21'),
(162, 12, 'e', 'e', '2015-03-01', '2015-03-21'),
(163, 13, 'f', 'f', '2015-03-01', '2015-03-20'),
(164, 14, 'f', 'f', '2015-03-01', '2015-03-15'),
(165, 14, 'f', 'f', '2015-03-01', '2015-03-21'),
(166, 14, 'f', 'f', '2015-03-08', '2015-03-20'),
(167, 14, 'f', 'f', '2015-03-01', '2015-03-10'),
(168, 15, 'p', 'p', '2015-03-01', '2015-03-15'),
(169, 15, 'p', 'p', '2015-03-01', '2015-03-14'),
(170, 15, 'p', 'p', '2015-03-06', '2015-03-20'),
(171, 15, 'p', 'p', '2015-03-01', '2015-03-19'),
(172, 16, 'i', 'i', '0008-07-01', '0010-03-09'),
(173, 17, 'j', 'j', '2015-03-01', '2015-03-18'),
(179, 38, '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_terakhir`
--

CREATE TABLE IF NOT EXISTS `pendidikan_terakhir` (
`id` int(10) unsigned NOT NULL,
  `id_pelamar` int(10) unsigned NOT NULL,
  `institusi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `akreditas` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_lulus` int(10) unsigned NOT NULL,
  `tahun_masuk` int(10) unsigned NOT NULL,
  `ipk` decimal(4,2) NOT NULL,
  `jenjang` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Dumping data untuk tabel `pendidikan_terakhir`
--

INSERT INTO `pendidikan_terakhir` (`id`, `id_pelamar`, `institusi`, `akreditas`, `tahun_lulus`, `tahun_masuk`, `ipk`, `jenjang`) VALUES
(1, 1, 'UNSRI', 'B', 2015, 2010, '3.20', 'S1'),
(2, 2, 'UNSRI', 'B', 2015, 2010, '3.20', 'S1'),
(3, 3, 'UNSRI', 'B', 2014, 2010, '3.25', 'S1'),
(4, 4, 'UNSRI', 'B', 2015, 2010, '3.25', 'S1'),
(5, 5, 'UNSRI', 'A', 17, 11, '3.40', 'S2'),
(6, 6, 'UNSRI', 'B', 27, 20, '2.00', 'S3'),
(7, 7, 'POLSRI', 'C', 2030, 2000, '4.00', 'S1'),
(8, 8, 'ausdaksd', 'B', 2014, 2010, '1.72', 'S1'),
(9, 9, 'b', 'A', 2012, 2010, '1.72', 'D2'),
(10, 10, 'c', 'A', 2011, 2010, '3.00', 'D1'),
(11, 11, 'd', 'A', 2015, 2010, '3.00', 'D1'),
(12, 12, 'ee', 'B', 2013, 2010, '2.40', 'S3'),
(13, 13, 'f', 'B', 2014, 2010, '0.50', 'D3'),
(14, 14, 'g', 'B', 2014, 2010, '0.50', 'D3'),
(15, 15, 'p', 'B', 2013, 2010, '0.50', 'S1'),
(16, 16, 'i', 'B', 2010, 2000, '3.00', 'S1'),
(17, 17, 'i', 'A', 2011, 2005, '2.00', 'S2'),
(18, 18, 'h', 'A', 2013, 2010, '2.00', 'S3'),
(19, 19, 'l', 'A', 2013, 2010, '2.00', 'S2'),
(20, 20, 'm', 'A', 2014, 2010, '2.00', 'S1'),
(21, 21, 'n', 'A', 2015, 2010, '2.00', 'S1'),
(22, 22, 'o', 'A', 2014, 2010, '2.00', 'D3'),
(23, 23, 'q', 'A', 2015, 2010, '2.00', 'S1'),
(24, 24, 'r', 'A', 2014, 2010, '3.00', 'D3'),
(25, 25, 's', 'A', 2014, 2010, '3.00', 'S2'),
(26, 26, 'tt', 'B', 2015, 2010, '3.00', 'D3'),
(27, 27, 'uu', 'B', 2013, 2010, '2.00', 'S2'),
(28, 28, 'vvv', 'B', 2015, 2010, '2.00', 'S1'),
(29, 29, 'w', 'A', 2014, 2010, '2.00', 'D1'),
(30, 30, 'w', 'B', 2014, 2010, '2.00', 'S1'),
(31, 31, 'y', 'A', 2014, 2010, '3.00', 'D1'),
(32, 32, 'z', 'A', 2013, 2010, '3.00', 'D1'),
(33, 33, 'uwq', 'B', 2014, 2010, '2.00', 'S1'),
(34, 34, 'bsk', 'A', 2013, 2010, '3.00', 'D1'),
(35, 35, 'h', 'A', 2010, 2010, '3.00', 'D1'),
(36, 36, 'hkkh', 'A', 2013, 2010, '3.00', 'D1'),
(37, 37, 'kasdkamsd', 'A', 2015, 2010, '2.00', 'S1'),
(38, 38, '', 'A', 0, 0, '0.00', 'D1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `pengalaman_kerja` (
`id` int(10) unsigned NOT NULL,
  `id_pelamar` int(10) unsigned NOT NULL,
  `jabatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `instansi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=90 ;

--
-- Dumping data untuk tabel `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id`, `id_pelamar`, `jabatan`, `instansi`, `tgl_masuk`, `tgl_keluar`) VALUES
(3, 2, 'Teknisi Komputer', 'Lapro', '2014-01-05', '2014-06-05'),
(4, 3, 'Programmer', 'Lapro', '2015-02-02', '2015-03-06'),
(5, 4, 'Allicando', 'Lapro', '2005-07-09', '2006-09-08'),
(12, 1, 'Begal', 'Jalanan', '2012-05-05', '2013-05-04'),
(13, 1, 'copet', 'jembatan', '2012-03-06', '2014-05-04'),
(16, 6, 'jljlh', 'hlhllhkhk', '0009-08-07', '1999-08-07'),
(23, 7, 'ggkkl', 'ljljjll', '0007-06-05', '0009-06-05'),
(24, 7, 'kwhhelwhw', 'weyiy', '0087-06-04', '0710-06-05'),
(25, 5, 'djdsljsd', 'dlsjd', '2011-04-02', '2013-04-02'),
(26, 5, 'wdkhhl', 'dkhkhh', '2012-05-02', '2014-04-02'),
(43, 18, 'h', 'h', '2015-03-01', '2015-03-13'),
(44, 19, 'l', 'l', '2015-03-01', '2015-03-22'),
(45, 20, 'm', 'm', '2010-07-08', '2011-08-07'),
(46, 21, 'n', 'n', '2012-03-01', '2015-03-19'),
(50, 22, 'o', 'o', '2015-03-01', '2015-03-22'),
(51, 23, 'q', 'q', '2015-03-01', '2015-03-21'),
(52, 24, 'r', 'r', '2015-03-01', '2015-03-20'),
(53, 25, 's', 's', '2015-03-01', '2015-03-28'),
(54, 26, 'tT', 't', '2015-03-01', '2015-03-22'),
(56, 28, 'v', 'v', '2015-03-01', '2015-03-27'),
(57, 29, 'w', 'w', '2015-03-01', '2015-03-18'),
(58, 30, 'w', 'w', '2015-03-01', '2015-03-28'),
(59, 31, 'y', 'y', '2015-03-01', '2015-03-21'),
(60, 32, 'z', 'z', '2015-03-01', '2015-03-18'),
(62, 34, '729', 'gjgjg', '2015-03-01', '2015-03-18'),
(63, 33, 'ououu', 'yiiy', '2015-03-01', '2015-03-20'),
(64, 35, 'khekwhkw', 'jlwjlw', '2015-03-01', '2015-03-18'),
(65, 36, 'hkhhh', 'bkhhkhl', '2015-03-01', '2015-03-29'),
(72, 37, 'b', 'n', '2015-03-05', '2015-03-24'),
(73, 27, 'u', 'u', '2012-08-06', '2015-08-06'),
(74, 8, 'asjdajsd', 'asads', '2014-03-21', '2015-03-20'),
(75, 9, 'b', 'b', '2012-03-01', '2015-03-21'),
(76, 10, 'c', 'c', '2015-03-14', '2015-03-26'),
(77, 11, 'd', 'd', '2014-08-08', '2015-03-08'),
(78, 12, 'e', 'e', '2014-04-05', '2015-03-02'),
(79, 13, 'f', 'f', '2015-03-01', '2015-03-18'),
(80, 14, 'f', 'f', '2015-03-01', '2015-03-21'),
(81, 15, 'p', 'p', '2015-03-01', '2015-03-18'),
(82, 16, 'i', 'i', '2015-03-01', '2015-03-21'),
(83, 17, 'j', 'j', '2015-03-01', '2015-03-13'),
(89, 38, '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE IF NOT EXISTS `psikotes` (
`id` int(10) unsigned NOT NULL,
  `id_lamaran` int(10) unsigned NOT NULL,
  `nilai_psikotes` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `psikotes`
--

INSERT INTO `psikotes` (`id`, `id_lamaran`, `nilai_psikotes`, `created_at`, `updated_at`) VALUES
(14, 5, 70, '2015-04-15 11:52:26', '2015-04-15 11:52:26'),
(15, 6, 80, '2015-04-15 11:52:39', '2015-04-15 11:52:39'),
(16, 7, 60, '2015-04-15 11:52:46', '2015-04-15 11:52:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap`
--

CREATE TABLE IF NOT EXISTS `tahap` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahap` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `tahap`
--

INSERT INTO `tahap` (`id`, `nama`, `tahap`) VALUES
(1, 'isi bobot administrasi', 'administrasi'),
(2, 'isi pelamar', 'administrasi'),
(3, 'buat hasil administrasi', 'administrasi'),
(4, 'isi bobot psikotes', 'psikotes'),
(5, 'isi nilai psikotes', 'psikotes'),
(6, 'buat hasil psikotes', 'psikotes'),
(7, 'isi bobot tertulis', 'tertulis'),
(8, 'isi nilai tertulis', 'tertulis'),
(9, 'buat hasil tertulis', 'tertulis'),
(10, 'isi bobot wawancara', 'wawancara'),
(11, 'isi nilai wawancara', 'wawancara'),
(12, 'hasil wawancara', 'wawancara'),
(13, 'Semua tahap selesai', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tertulis`
--

CREATE TABLE IF NOT EXISTS `tertulis` (
`id` int(10) unsigned NOT NULL,
  `id_lamaran` int(10) unsigned NOT NULL,
  `nilai_tertulis` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tertulis`
--

INSERT INTO `tertulis` (`id`, `id_lamaran`, `nilai_tertulis`, `created_at`, `updated_at`) VALUES
(9, 6, 90, '2015-04-15 11:53:22', '2015-04-15 11:53:22'),
(10, 5, 98, '2015-04-15 11:53:28', '2015-04-15 11:53:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `roles` enum('admin','tim independent','top manager') COLLATE utf8_unicode_ci NOT NULL,
  `id_divisi` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `roles`, `id_divisi`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'admin', 'admin', '$2y$10$Zgxr1eYAH4MN6z9zaJZtQe5.gOiSj6MVGEroLBlQIgfYXDXyKlXlu', 'admin', 1, 'TVtwF3nDgBSfGtzInB79lY3IOQQklJDg2bbxw9cpwgCrkBG2fcFK7xBrV33u', '2015-04-13 18:47:16', '2015-04-17 21:07:32'),
(8, 'badan independent', 'badanindependent', '$2y$10$FtjE8HDfb/xWkiZn1.LlIuMsil5tzYB1DLQq9tarBcraApBdVtJSG', 'tim independent', 1, 'ypBMvFGuTFfAntUxsjDH4HMos2lgNs9YcQwE1XhFmhGfeTd6V2gTxDKv6eBa', '2015-04-13 18:47:52', '2015-04-17 21:05:33'),
(9, 'top manager keuangan ', 'tmkeuangan', '$2y$10$QWtSsoUa8JH9e19qrNoBwefvP9P8JVD2usxIFdbyzl13g1qBQ3mLi', 'top manager', 1, 'i49kHIzRCoxDbojs4rGDZUAP5fcjM7mff4LdbBFVyikkuQhG0mTHTXHCYSqX', '2015-04-13 18:48:33', '2015-04-18 01:21:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wawancara`
--

CREATE TABLE IF NOT EXISTS `wawancara` (
`id` int(10) unsigned NOT NULL,
  `id_lamaran` int(10) unsigned NOT NULL,
  `wa1` int(11) NOT NULL,
  `wa2` int(11) NOT NULL,
  `wa3` int(11) NOT NULL,
  `wa4` int(11) NOT NULL,
  `nilai_topsis` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Dumping data untuk tabel `wawancara`
--

INSERT INTO `wawancara` (`id`, `id_lamaran`, `wa1`, `wa2`, `wa3`, `wa4`, `nilai_topsis`, `created_at`, `updated_at`) VALUES
(53, 5, 5, 5, 5, 1, 0.175629, '2015-04-16 00:26:36', '2015-04-16 00:26:36'),
(54, 6, 5, 5, 5, 1, 0.824371, '2015-04-16 00:26:36', '2015-04-16 00:26:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bobot_administrasi`
--
ALTER TABLE `bobot_administrasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bobot_wawancara`
--
ALTER TABLE `bobot_wawancara`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuota_psikotes`
--
ALTER TABLE `kuota_psikotes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuota_tertulis`
--
ALTER TABLE `kuota_tertulis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `lamaran_nomor_pelamar_unique` (`nomor_pelamar`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `lowongan_kode_unique` (`kode`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pelamar`
--
ALTER TABLE `pelamar`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `pelamar_no_ktp_unique` (`no_ktp`);

--
-- Indexes for table `pendidikan_non_ilmiah`
--
ALTER TABLE `pendidikan_non_ilmiah`
 ADD PRIMARY KEY (`id`), ADD KEY `pendidikan_non_ilmiah_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
 ADD PRIMARY KEY (`id`), ADD KEY `pendidikan_terakhir_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
 ADD PRIMARY KEY (`id`), ADD KEY `pengalaman_kerja_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `psikotes`
--
ALTER TABLE `psikotes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahap`
--
ALTER TABLE `tahap`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tertulis`
--
ALTER TABLE `tertulis`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- Indexes for table `wawancara`
--
ALTER TABLE `wawancara`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=306;
--
-- AUTO_INCREMENT for table `bobot_administrasi`
--
ALTER TABLE `bobot_administrasi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bobot_wawancara`
--
ALTER TABLE `bobot_wawancara`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kuota_psikotes`
--
ALTER TABLE `kuota_psikotes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kuota_tertulis`
--
ALTER TABLE `kuota_tertulis`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pelamar`
--
ALTER TABLE `pelamar`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pendidikan_non_ilmiah`
--
ALTER TABLE `pendidikan_non_ilmiah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tahap`
--
ALTER TABLE `tahap`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tertulis`
--
ALTER TABLE `tertulis`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `wawancara`
--
ALTER TABLE `wawancara`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendidikan_non_ilmiah`
--
ALTER TABLE `pendidikan_non_ilmiah`
ADD CONSTRAINT `pendidikan_non_ilmiah_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikan_terakhir`
--
ALTER TABLE `pendidikan_terakhir`
ADD CONSTRAINT `pendidikan_terakhir_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
ADD CONSTRAINT `pengalaman_kerja_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamar` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
