-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for yayasan_awwaliyah
CREATE DATABASE IF NOT EXISTS `yayasan_awwaliyah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `yayasan_awwaliyah`;

-- Dumping structure for table yayasan_awwaliyah.ekstrakurikulers
CREATE TABLE IF NOT EXISTS `ekstrakurikulers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ekstrakurikulers_id_pendidikan_foreign` (`id_pendidikan`),
  CONSTRAINT `ekstrakurikulers_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.ekstrakurikulers: ~1 rows (approximately)
INSERT INTO `ekstrakurikulers` (`id`, `id_pendidikan`, `nama`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
	(6, 6, 'Pramuka', 'asd', '1692943790.jpg', '2023-08-24 23:09:50', '2023-08-25 09:36:47');

-- Dumping structure for table yayasan_awwaliyah.extrakurikulers
CREATE TABLE IF NOT EXISTS `extrakurikulers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `extrakurikulers_id_pendidikan_foreign` (`id_pendidikan`),
  CONSTRAINT `extrakurikulers_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikans` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.extrakurikulers: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.gambarsliders
CREATE TABLE IF NOT EXISTS `gambarsliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.gambarsliders: ~3 rows (approximately)
INSERT INTO `gambarsliders` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
	(8, '1692949578.jpg', '2023-08-25 00:28:04', '2023-08-25 00:46:18'),
	(9, '1692948965.jpg', '2023-08-25 00:36:05', '2023-08-25 00:36:05'),
	(11, '1692955712.jpg', '2023-08-25 02:28:32', '2023-08-25 02:28:32');

-- Dumping structure for table yayasan_awwaliyah.gurus
CREATE TABLE IF NOT EXISTS `gurus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gurus_id_pendidikan_foreign` (`id_pendidikan`),
  CONSTRAINT `gurus_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.gurus: ~41 rows (approximately)
INSERT INTO `gurus` (`id`, `id_pendidikan`, `nama`, `gender`, `jabatan`, `jenjang`, `created_at`, `updated_at`) VALUES
	(4, 6, 'Drs. Kh. Anwar Husaeni, M.Pd', 'L', 'Pembina', 'S2', '2023-08-09 10:24:34', '2023-08-09 12:16:49'),
	(5, 6, 'Dra. Hj. Siti Hapipah HZ', 'P', 'Kepala Sekolah', 'S1', '2023-08-09 10:25:06', '2023-08-09 10:25:06'),
	(6, 6, 'Hanifal Fauzy AH, S.s., M.Pd', 'L', 'Wakil Kepala', 'S2', '2023-08-09 10:25:29', '2023-08-09 10:25:29'),
	(7, 6, 'Masruri', 'P', 'Bendahara', '-', '2023-08-09 10:25:58', '2023-08-09 10:25:58'),
	(47, 6, 'Drs. Kh. Anwar Husaeni, M.Pd', 'L', 'Pembina', 'S2', NULL, NULL),
	(48, 6, 'Dra. Hj. Siti Hapipah HZ', 'P', 'Kepala Sekolah', 'S1', NULL, NULL),
	(49, 6, 'Hanifal Fauzy AH, S.s., M.Pd', 'L', 'Wakil Kepala', 'S2', NULL, NULL),
	(50, 6, 'Masruri', 'P', 'Bendahara', '-', NULL, NULL),
	(51, 6, 'Lista Utari, S.Sos', 'P', 'Kepala Tata Usaha', 'S1', NULL, NULL),
	(52, 6, 'Hilda Fiati, S.Pd', 'P', 'Waka Kurikulum', 'S1', NULL, NULL),
	(53, 6, 'Mohamad Suhendri, M.Pd', 'L', 'Waka Kesiswaan', 'S2', NULL, NULL),
	(54, 6, 'Ajid, S.H.I', 'L', 'Waka Humas', 'S1', NULL, NULL),
	(55, 6, 'Imam Muztahiz, S.Pd', 'L', 'Waka Sarpras', 'S1', NULL, NULL),
	(56, 6, 'Syahrudin Maulana, S.Pd', 'L', 'Pembina Osis', 'S1', NULL, NULL),
	(57, 6, 'Asep Aris Munandar, S.Pd', 'L', 'Kepala Lab Kom', 'S1', NULL, NULL),
	(58, 6, 'Hujar Santi, S.Pd', 'P', 'Kepala Lab IPA', 'S1', NULL, NULL),
	(59, 6, 'Feranita, S.Pd', 'P', 'Kepala UKS', 'S1', NULL, NULL),
	(60, 6, 'Evaria Yugisabita, S.Pd', 'P', 'BP', 'S1', NULL, NULL),
	(61, 6, 'Surati, M.MPd', 'P', 'BP', 'S2', NULL, NULL),
	(62, 6, 'Drs. Sulaeman', 'L', 'Guru', 'S1', NULL, NULL),
	(63, 6, 'Rina Pebriana, M.Pd', 'P', 'Guru', 'S2', NULL, NULL),
	(64, 6, 'Dini Nahriah Qurbaniyah, S.Pd', 'P', 'Guru', 'S1', NULL, NULL),
	(65, 6, 'Nurul Ichsanita Dillyanti, S.Pd', 'P', 'Guru', 'S1', NULL, NULL),
	(66, 6, 'Erwin Rubiansyah, S.H', 'L', 'Guru', 'S1', NULL, NULL),
	(67, 6, 'Edi Susanto, S.Pd.I', 'L', 'Guru', 'S1', NULL, NULL),
	(68, 6, 'Doni Febri, S.Pd', 'L', 'Guru', 'S1', NULL, NULL),
	(69, 6, 'Iwan Darmawan, S.Pd', 'L', 'Guru', 'S1', NULL, NULL),
	(70, 6, 'Agis Akbar Maulana, S.Ag', 'L', 'Guru', 'S1', NULL, NULL),
	(71, 6, 'Rani Nuryani, S.Pd', 'P', 'Guru', 'S1', NULL, NULL),
	(72, 6, 'H. Samsir Alamsyah, S.Sos.I', 'L', 'Guru', 'S1', NULL, NULL),
	(73, 6, 'Shofya Zahro, S.Pd.I', 'P', 'Guru', 'S1', NULL, NULL),
	(74, 6, 'Ita Lestari, S.Pd', 'P', 'Guru', 'S1', NULL, NULL),
	(75, 6, 'Evi Pramuniati, S.Pd', 'P', 'Guru', 'S1', NULL, NULL),
	(76, 6, 'Evi Suhaepi', 'L', 'Guru', '-', NULL, NULL),
	(77, 6, 'Septi Supriyatin, S.Pd', 'P', 'Guru', 'S1', NULL, NULL),
	(78, 6, 'Alek Sumantri', 'L', 'Kepala Perpus', 'S1', NULL, NULL),
	(79, 6, 'Zainal', 'L', 'Penjaga Sekolah', '-', NULL, NULL),
	(80, 6, 'Rian Nur Wahid', 'L', 'Kebersihan', '-', NULL, NULL),
	(82, 5, 'asd', 'L', 'asd', 'asd', '2023-08-09 12:19:35', '2023-08-09 12:19:35'),
	(85, 5, 'asd', 'L', 'asd', 'asd', '2023-08-14 02:43:23', '2023-08-14 02:43:23'),
	(86, 4, 'ad', 'L', 'asd', 'dasd', '2023-08-14 02:43:34', '2023-08-14 02:43:34');

-- Dumping structure for table yayasan_awwaliyah.identitasyayasans
CREATE TABLE IF NOT EXISTS `identitasyayasans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makna_bentuk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `makna_warna` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.identitasyayasans: ~1 rows (approximately)
INSERT INTO `identitasyayasans` (`id`, `nama`, `logo`, `makna_bentuk`, `makna_warna`, `created_at`, `updated_at`) VALUES
	(1, 'Yayasan Awwaliyah Al - Asiyah', '1692977174.svg', '<ol><li>GERIGI 5 (lima) keatas adalah rukun Islam.</li><li>GERIGI 5 (lima) kebawah adalah dasar Pancasila.</li></ol>', '<ol><li>WARNA HIJAU melambangkan kesuburan dan kemakmuran.</li><li>WARNA PUTIH adalah lambang kesucian.</li><li>lingkaran bulat BERWARNA KUNING mas dengan bertuliskan nama yayasan Awwaliyah Al Asiyah melambangkan matahari yang bersinar terang ,menghangatkan dan menyemangati kehidupan.</li></ol>', '2023-08-25 08:26:14', '2023-08-25 09:01:10');

-- Dumping structure for table yayasan_awwaliyah.kepengurusans
CREATE TABLE IF NOT EXISTS `kepengurusans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `peran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.kepengurusans: ~1 rows (approximately)
INSERT INTO `kepengurusans` (`id`, `created_at`, `updated_at`, `peran`, `nama`, `jabatan`) VALUES
	(35, '2023-08-09 09:56:21', '2023-08-09 09:56:21', '1', 'asd', 'asd');

-- Dumping structure for table yayasan_awwaliyah.konten_pendidikans
CREATE TABLE IF NOT EXISTS `konten_pendidikans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `konten_pendidikans_id_pendidikan_foreign` (`id_pendidikan`),
  CONSTRAINT `konten_pendidikans_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.konten_pendidikans: ~7 rows (approximately)
INSERT INTO `konten_pendidikans` (`id`, `id_pendidikan`, `gambar`, `sejarah`, `visi`, `misi`, `tujuan`, `created_at`, `updated_at`) VALUES
	(2, 5, '1693047621.jpg', '<p>sejarahasdasdsadasd</p>', '<p>visiasdasd</p>', '<p>misiasdasdasd</p>', '<p>tujuanasd</p>', '2023-08-09 13:49:50', '2023-08-26 04:00:21'),
	(3, 6, '1693039694.jpg', '<p>sejarah</p>', '<p>visi</p>', '<p>misi</p>', '<p>tujuan</p>', '2023-08-09 13:49:50', '2023-08-26 01:48:14'),
	(4, 7, '1693039711.jpg', '<p>sejarah</p>', '<p>visi</p>', '<p>misi</p>', '<p>tujuan</p>', '2023-08-09 13:49:50', '2023-08-26 01:48:31'),
	(5, 8, 'gambar.png', 'sejarah', 'visi', 'misi', 'tujuan', '2023-08-09 13:49:50', '2023-08-09 13:49:50'),
	(6, 10, 'gambar.png', 'sejarah', 'visi', 'misi', 'tujuan', '2023-08-09 13:49:50', '2023-08-09 13:49:50'),
	(7, 12, 'gambar.png', 'sejarah', 'visi', 'misi', 'tujuan', '2023-08-09 13:49:50', '2023-08-09 13:49:50'),
	(8, 4, '1693039719.jpg', '<p>sejarah</p>', '<p>visi</p>', '<p>misi</p>', '<p>tujuan</p>', '2023-08-26 08:34:00', '2023-08-26 01:48:39');

-- Dumping structure for table yayasan_awwaliyah.makna_logos
CREATE TABLE IF NOT EXISTS `makna_logos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `makna_bentuk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `makna_warna` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `makna_logos_id_pendidikan_foreign` (`id_pendidikan`),
  CONSTRAINT `makna_logos_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.makna_logos: ~7 rows (approximately)
INSERT INTO `makna_logos` (`id`, `id_pendidikan`, `makna_bentuk`, `makna_warna`, `created_at`, `updated_at`) VALUES
	(1, 4, '<ol><li>makna bentuk 1</li><li>makna bentuk 2</li></ol>', '<p>makna warna</p>', '2023-08-26 07:09:18', '2023-08-26 00:28:33'),
	(2, 5, 'makna bentuk', 'makna warna', '2023-08-26 07:09:18', '2023-08-26 07:09:18'),
	(3, 6, 'makna bentuk', 'makna warna', '2023-08-26 07:09:18', '2023-08-26 07:09:18'),
	(4, 7, 'makna bentuk', 'makna warna', '2023-08-26 07:09:18', '2023-08-26 07:09:18'),
	(5, 8, 'makna bentuk', 'makna warna', '2023-08-26 07:09:18', '2023-08-26 07:09:18'),
	(6, 10, 'makna bentuk', 'makna warna', '2023-08-26 07:09:18', '2023-08-26 07:09:18'),
	(7, 12, 'makna bentuk', 'makna warna', '2023-08-26 07:09:18', '2023-08-26 07:09:18');

-- Dumping structure for table yayasan_awwaliyah.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.migrations: ~21 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(115, '2023_07_13_081552_create_tentang_kamis_table', 1),
	(140, '2014_10_12_000000_create_users_table', 2),
	(141, '2014_10_12_100000_create_password_reset_tokens_table', 2),
	(142, '2019_08_19_000000_create_failed_jobs_table', 2),
	(143, '2019_12_14_000001_create_personal_access_tokens_table', 2),
	(144, '2023_07_12_040848_create_news_table', 2),
	(145, '2023_07_12_041505_create_pendidikans_table', 2),
	(146, '2023_07_13_081139_create_tokohs_table', 2),
	(150, '2023_07_13_081521_create_sejarah_yayasans_table', 2),
	(151, '2023_07_13_081552_create_visi_misis_table', 2),
	(152, '2023_08_07_072322_create_visi_misi_yayasans', 3),
	(153, '2023_08_09_083444_create_kepengurusans_table', 4),
	(154, '2023_07_13_081401_create_konten_pendidikans_table', 5),
	(156, '2023_07_13_081445_create_gurus_table', 6),
	(157, '2023_08_10_160641_create_profiles_table', 7),
	(158, '2023_08_10_161807_create_extrakurikulers_table', 7),
	(162, '2023_07_13_081429_create_ekstrakurikulers_table', 8),
	(163, '2023_08_25_053217_create_makna_logos_table', 9),
	(164, '2023_08_25_061914_create_gambarsliders_table', 9),
	(165, '2023_08_25_091011_create_sambutans_table', 10),
	(166, '2023_08_25_143218_create_identitasyayasans_table', 11);

-- Dumping structure for table yayasan_awwaliyah.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.news: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.pendidikans
CREATE TABLE IF NOT EXISTS `pendidikans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.pendidikans: ~7 rows (approximately)
INSERT INTO `pendidikans` (`id`, `nama`, `logo`, `jenis_pendidikan`, `created_at`, `updated_at`) VALUES
	(4, 'Tingkat Tk', '1693032847.svg', 'formal', '2023-08-02 04:37:42', '2023-08-25 23:54:07'),
	(5, 'Tingkat SDIT', '1693032747.svg', 'formal', '2023-08-02 04:38:00', '2023-08-25 23:52:27'),
	(6, 'Tingkat SMP Plus', '1693032756.svg', 'formal', '2023-08-02 04:38:07', '2023-08-25 23:52:36'),
	(7, 'Tingkat MA', '1693032764.svg', 'formal', '2023-08-02 04:38:14', '2023-08-25 23:52:44'),
	(8, 'Pondok Pesantren', '1693032840.svg', 'non formal', '2023-08-02 04:38:41', '2023-08-25 23:54:00'),
	(10, 'Asrama Anak Yatim', 'logo.png', 'non formal', '2023-08-02 04:39:15', '2023-08-02 04:39:15'),
	(12, 'Asrama Tahfidz', 'logo.png', 'non formal', '2023-08-02 04:39:41', '2023-08-02 04:39:41');

-- Dumping structure for table yayasan_awwaliyah.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn` int NOT NULL,
  `status_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akreditasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_id_pendidikan_foreign` (`id_pendidikan`),
  CONSTRAINT `profiles_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikans` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.profiles: ~1 rows (approximately)
INSERT INTO `profiles` (`id`, `id_pendidikan`, `nama_sekolah`, `npsn`, `status_sekolah`, `akreditasi`, `alamat_sekolah`, `no_telepon`, `no_fax`, `email`, `created_at`, `updated_at`) VALUES
	(1, 6, 'SMP PLUS AWWALIYAH AL-ASIYAH', 20232183, 'SWASTA', 'A', 'LINGKUNGAN 04 KRANJI BARAT', '123456789', '987654321', 'info@example.comasd', '2023-08-10 16:31:34', '2023-08-13 05:37:41');

-- Dumping structure for table yayasan_awwaliyah.sambutans
CREATE TABLE IF NOT EXISTS `sambutans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sambutan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.sambutans: ~1 rows (approximately)
INSERT INTO `sambutans` (`id`, `nama`, `sambutan`, `gambar`, `created_at`, `updated_at`) VALUES
	(1, 'Rafiq sans', '<p>Bismillahirrahmanirrahiim.. Assalamualaikum warrahmatullahi wabarokatuh Alhamdulillahi bini’matihi tattimusholihaat Segala Puji hanya milik Allah Ta’ala Atas segala nikmat dan karuniaNya yang tak terhitung kepada kita. Sholawat serta salam tak lupa selalu kita sanjungkan kepada Nabi kita Nabi Muhammad Sholallohu alaihi wassalam beserta keluarga dan para sahabatnya..dan semoga kita termasuk ke dalam umatnya yang akan menerima syafa’at di Yaumul Akhir kelak..Aamiin Yaa Robbal Alamiin.</p><p>Di tengah kemajuan tehnologi dan informasi saat ini Yayasan Awwaliyah Al-Asiyah yang bergerak di bidang pendidikan berupaya terus mendorong dan mengupdate organisasi ini agar mampu menghasilkan lembaga pendidikan formal ataupun non formal yang berkualitas dan mampu bersaing dengan lembaga lain. Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.</p><p>Kami terus mendorong upaya positif kepada seluruh pengelola Lembaga sekolah, tenaga pendidik dan satuan kependidikan Sekolah dibawah naungan Awwaliyah Al-Asiyah terus berkembang dan berkontribusi dalam dunia pendidikan khususnya kabupaten Bogor. Kami sangat mengapresiasi adanya website ini. Dengan adanya website ini kami harap masyarakat luas lebih mengenal dekat dengan Lembaga Pendidikan Yayasan Awwaliyah Al-Asiyah, baik Pendidikan formal atau informal serta para peserta didik juga mampu mengakses informasi akademik melalui website ini dan para guru serta seluruh civitas akademika sekolah di bawah naungan Yayasan Awwaliyah-Al-Asiyah mampu mendapatkan informasi yang uptodate dalam dunia pendidikan.</p><p>Terakhir kami ucapkan Barokallohufiikum atas semua perjuangan dan pengabdian seluruh guru, pengelola sekolah dan komite sekolah atas kerjasama yang baik selama ini. Perjuangan tak pernah berhenti sampai disini.,karena tantangan masa depan akan silih berganti. Semoga apa yang kita lakukan mendapat ridho dari Allah Ta’ala Wassalamualaikum warrohamtullahi wabarokatuh.</p>', '1693044443.png', '2023-08-26 03:07:23', '2023-08-26 03:07:23');

-- Dumping structure for table yayasan_awwaliyah.sejarah_yayasans
CREATE TABLE IF NOT EXISTS `sejarah_yayasans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kurikulum` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.sejarah_yayasans: ~1 rows (approximately)
INSERT INTO `sejarah_yayasans` (`id`, `gambar`, `sejarah`, `kurikulum`, `created_at`, `updated_at`) VALUES
	(1, '1691589325.jpg', '<p>Sejarah singkat berdirinya yayasan Awwaliyah Al Asiyah. Bermula dari pondok pesantren yang di dirikan oleh &nbsp;Bpk Drs H. Anwar Husaeni dan ibu Dra. Hj Siti Hapipah. Pada tgl 1 Romadhon 1443 H. Bertepatan &nbsp;tgl 23 Februari &nbsp;1993. M. Atas restu dari &nbsp;Bpk KH.Muhammad &nbsp;Hamzah dan ibu Hj. Ratu Asiyah ( pendiri yayasan Pendidikan Islam Al Asiyah ) yang bertempat di Lingkungan Kranji barat RT 01/011 kelurahan ciriung kecamatan Cibinong kabupaten Bogor. &nbsp;Jawa Barat.&nbsp;<br><br>Saat berdiri nya pondok pesantren hanya ada 4 orang santri. Seiring berjalannya waktu santri terus bertambah , mereka hanya mondok &nbsp;dan belajar mengaji. Sementara sekolahnya mereka di luar lingkungan pondok. Ada yg di SMP negeri, di Mts Al asiyah ada yg di SMA negeri, ada yg di MAN, MA Al Asiyah bahkan ada yg. Bekerja dan kembali ke pondok. &nbsp;itu berlangsung kurang lebih selama 10 tahun. Yaitu sampai tahun 2003.&nbsp;<br>Atas usulan wali santri mereka memohon kepada pendiri pondok agar mendirikan sekolah formal dengan harapan santri tidak lagi sekolah keluar. Maka &nbsp;pada tahun 2004 pondok pesantren mendirikan lembaga pendidikan formal yaitu SMP PLUS AWWALIYAH AL ASIYAH. Yg masih bernaung &nbsp;di yayasan pusat. Yaitu YAYASAN PENDIDIKAN ISLAM AL ASIYAH yg bertempat di Jln Kaum &nbsp;Cibinong.<br><br>Pendiri SMP adalah pendiri Pondok. Dan sebagai kepala sekolah nya yg di tunjuk oleh yayasan Al Asiyah adalah ibu Dra. Hj Siti Hapipah Hz.&nbsp;<br>Saat berdiri SMP pendaftar &nbsp;sebanyak 40 org dan 27 orang nya adalah santri yg mondok di pondok pesantren awwaliyah. Sehingga sejak itu tidak ada lg santri yg tingkat SMP sekolah keluar. Sementara untuk tingkat SMA masih keluar.<br>Pada tahun 2010 pondok pesantren pun akhirnya mendirikan SDIT Awwaliyah Al Asiyah. Dengan murid pertama sebanyak 6 org. Dan beriring waktu berjalan semakin banyak. Namun mereka tidak ada yg mondok.<br><br>Pada tahun 2014 baru pondok pesantren memindahkan lembaga pendidikan MA. Al Asiyah yg awalnya berlokasi di jln kaum &nbsp;Cibinong ke lingkungan pondok pesantren Awwaliyah. Sehingga santri &nbsp;yg tingkat pendidikan SMA tidak ada lagi yg keluar.<br>Pada tahun 2015 barulah yayasan AWWALIYAH Al ASIYAH berdiri atas saran dari Bpk Ketua Yayasan Islam Al Asiyah. Dengan dasar karna lembaga yang berada di bawah naungan yayasan Islam Al Asiyah sudah terlalu banyak. Dan pondok pesantren Awwaliyah sudah cukup mapan untuk menjadi yayasan sendiri. Atas dasar itulah maka akhirnya berdiri YAYASAN AWWALIYAH Al ASIYAH</p>', '<p>-</p>', '2023-08-09 06:55:25', '2023-08-26 04:14:18');

-- Dumping structure for table yayasan_awwaliyah.tentang_kamis
CREATE TABLE IF NOT EXISTS `tentang_kamis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_tokoh` bigint unsigned NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.tentang_kamis: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.tokohs
CREATE TABLE IF NOT EXISTS `tokohs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.tokohs: ~1 rows (approximately)
INSERT INTO `tokohs` (`id`, `nama`, `jabatan`, `gambar`, `created_at`, `updated_at`) VALUES
	(25, 'asd', 'asd', '1691425537.jpg', '2023-08-07 09:25:37', '2023-08-07 09:25:37');

-- Dumping structure for table yayasan_awwaliyah.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.users: ~10 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Crawford Bogan II', 'vkeebler@example.com', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'L9uVolZ1NC', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(2, 'Alessia Senger', 'myriam.pagac@example.com', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hHr3zKVu0m', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(3, 'Jamal Gislason II', 'iohara@example.com', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RosXEANn37', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(4, 'Noble Braun', 'rjohnson@example.com', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aAV3ojHmAH', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(5, 'Yolanda Runolfsdottir DDS', 'kailey68@example.org', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '122hnZx43i', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(6, 'Dr. Peter Emard DDS', 'gdooley@example.com', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5FLlqD5pgc', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(7, 'Prof. Russ Russel', 'conner.gislason@example.org', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2PeGCgrFWJ', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(8, 'Ms. Estel Kunze V', 'omari13@example.net', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p4YQ6ZFGOg', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(9, 'Lucienne Luettgen', 'rbosco@example.net', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KstwpbtZ3E', '2023-07-26 01:39:56', '2023-07-26 01:39:56'),
	(10, 'Idell DuBuque', 'jayne.jacobs@example.net', '2023-07-26 01:39:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Iby9ym1Eg5', '2023-07-26 01:39:56', '2023-07-26 01:39:56');

-- Dumping structure for table yayasan_awwaliyah.visi_misi
CREATE TABLE IF NOT EXISTS `visi_misi` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.visi_misi: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.visi_misis
CREATE TABLE IF NOT EXISTS `visi_misis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pendidikan` bigint unsigned NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.visi_misis: ~0 rows (approximately)

-- Dumping structure for table yayasan_awwaliyah.visi_misi_yayasans
CREATE TABLE IF NOT EXISTS `visi_misi_yayasans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table yayasan_awwaliyah.visi_misi_yayasans: ~1 rows (approximately)
INSERT INTO `visi_misi_yayasans` (`id`, `visi`, `misi`, `created_at`, `updated_at`) VALUES
	(1, '<p>MEMPERSIAPKAN GENERASI MUSLIM / MUSLIMAH YANG BERIMAN DAN BERTAQWA, BERAKHLAK MULIA SERTA MENGUASAI ILMU PENGETAHUAN DAN TEKNOLOGI SEDINI MUNGKIN UNTUK MENYONGSONG MASA DEPAN YANG GEMILANG</p>', '<ol><li>Menyelenggarakan pendidikan pra sekolah berdasarkan al-Qur’an dan al-Hadits, dengan cara membantu anak tumbuh dan berkembang sesuai dengan potensi dan karakteristik perkembangan fisik dan sosial anak.</li><li>Meningkatkan kemampuan guru pada anak usia dini, sehingga memiliki kompetensi profesional dan kepribadian yang matang dan mengembangkan kreatifitas pada anak sedini mungkin.</li><li>Meningkatkan pengertian kepada masyarakat bahwa anak adalah individu yang memiliki keunikan tersendiri dalam proses tumbuh kembangnya.</li><li>Meningkatkan peran serta masyarakat dalam menciptakan lingkungan yang sehat, bersih dan nyaman dalam menunjang kegiatan belajar mengajar. meningkatkan kesadaran masyarakat mengenai pentingnya program wajib belajar.</li><li>aoashdoiahsoipdhoaisd</li></ol>', '2023-08-07 07:52:04', '2023-08-26 03:57:51');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
