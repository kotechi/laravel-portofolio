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


-- Dumping database structure for tugas-budelika-aditiya-db
CREATE DATABASE IF NOT EXISTS `tugas-budelika-aditiya-db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tugas-budelika-aditiya-db`;

-- Dumping structure for table tugas-budelika-aditiya-db.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.cache: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.cache_locks: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.certifications
CREATE TABLE IF NOT EXISTS `certifications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issued_at` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.certifications: ~3 rows (approximately)
INSERT INTO `certifications` (`id`, `name`, `issued_by`, `issued_at`, `description`, `file`, `date`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'belajar visualisasi data', 'Dicoding', '2023-10-03', 'mempelajarai tentang memvisualisasikan data', 'certifications/1733652775_sertifikat_course_177_3238698_011123094322.pdf', '2024-11-29', '2024-11-28 20:38:09', '2024-12-08 03:28:38', 'certifications/1733653718_Screenshot 2024-12-08 172544.png'),
	(3, 'memulai dasar pemrograman', 'Dicoding', '2023-09-01', 'kegiatang belajar pemrograman dasar', 'certifications/1733652624_sertifikat dicoding.pdf', '2024-11-29', '2024-11-28 20:41:22', '2024-12-08 03:10:24', 'certifications/1733652624_0001.jpg'),
	(6, 'programing logic 101', 'Dicoding', '2023-09-09', 'pengenalan logika pemrograman', 'certifications/1733653097_sertifikat-course-302-3238698-090923132913.pdf', '2024-12-08', '2024-12-08 03:18:18', '2024-12-08 03:18:18', 'certifications/1733653097_sertifikat-course-302-3238698-090923132913-00.png');

-- Dumping structure for table tugas-budelika-aditiya-db.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.contacts: ~0 rows (approximately)
INSERT INTO `contacts` (`id`, `name`, `gmail`, `whatsapp`, `address`, `created_at`, `updated_at`) VALUES
	(1, 'Aditiya Fathurrahman', 'aditiya53op@gmail.com', '+62 82112327021', 'bogor, indonesia', '2024-11-28 20:32:12', '2024-11-28 20:44:25');

-- Dumping structure for table tugas-budelika-aditiya-db.data_keuntungan
CREATE TABLE IF NOT EXISTS `data_keuntungan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pembeli` int NOT NULL,
  `keuntungan` int NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.data_keuntungan: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.failed_jobs
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

-- Dumping data for table tugas-budelika-aditiya-db.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.jobs: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.job_batches: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.migrations: ~10 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(104, '0001_01_01_000000_create_users_table', 1),
	(105, '0001_01_01_000001_create_cache_table', 1),
	(106, '0001_01_01_000002_create_jobs_table', 1),
	(107, '2024_09_19_131956_create_posts_table', 1),
	(108, '2024_10_01_092723_tbl_porto', 1),
	(109, '2024_11_10_021334_certification', 1),
	(110, '2024_11_10_021400_create_certifications_table', 1),
	(111, '2024_11_15_063605_projects', 1),
	(112, '2024_11_15_064247_create_contacts_table', 1),
	(113, '2024_11_20_070703_create_data_keuntungan_table', 1),
	(114, '2024_12_08_091800_add_image_to_table_name', 2);

-- Dumping structure for table tugas-budelika-aditiya-db.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.posts: ~0 rows (approximately)

-- Dumping structure for table tugas-budelika-aditiya-db.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.projects: ~4 rows (approximately)
INSERT INTO `projects` (`id`, `name`, `description`, `link`, `date`, `created_at`, `updated_at`, `image`) VALUES
	(4, 'smknid', 'aplikasi mobile yang memungkinkan siswa absen dengan menggunakan tanda tangan dan validasi lokasi', 'https://www.anjay.com', '2024-12-10', '2024-12-10 03:38:03', '2024-12-10 04:34:39', 'projects/1733827790_desain-tanpa-judul.png'),
	(5, 'prioximaty project', 'game horor 3d unity', 'https://www.example.com', '2024-12-10', '2024-12-10 03:41:03', '2024-12-10 05:23:40', 'projects/1733827810_ic-launcher.png'),
	(6, 'qur\'an digital', 'aplikasi al qur`an digital berbasis mobile', 'https://www.example.com', '2024-12-10', '2024-12-10 03:52:07', '2024-12-10 05:24:03', 'projects/1733827927_ic-launcher.png'),
	(7, 'next-portofolio', 'portofolio berbasis web yang menggunakan nextjs dan reactjs', 'https://www.example.com', '2024-12-10', '2024-12-10 05:28:59', '2024-12-10 05:28:59', 'projects/1733833738_screenshot-2024-08-27-203418.png'),
	(8, 'toko kebab', 'sebuah website untuk e-commerce', 'http://tokoadit.kesug.com/?i=1', '2024-12-10', '2024-12-10 06:58:21', '2024-12-10 06:58:21', 'projects/1733839101_screenshot-2024-12-09-163855.png');

-- Dumping structure for table tugas-budelika-aditiya-db.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('8FFGsG6nKNnryQTBzmS8HfEPCULJmCpcZsReN5WX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2dmMTE3c3VsV3I5bHF4RWZFcVJ5dVR4d1FsdTdoY25iNm4yckRNVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly90dWdhcy1idWRlbGlrYS50ZXN0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1733837123),
	('dbFcVd7ZcVnpFKU7T2SQ54HXrgFf4DADNGF5st7F', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWGhHZkdtYmJIWERHMTFOZzZTMHFDS29lb1JvM3FrU1JjOUI0SW05ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly90dWdhcy1idWRlbGlrYS50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MToiaHR0cDovL3R1Z2FzLWJ1ZGVsaWthLnRlc3QvYWRtaW4vcHJvamVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1733839127),
	('m8yMzdiaCaJY94Tu4lkJ9OhsQoddjdm4GP8DXhLM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3RpSlhjZWlnSmlJQ3NKWER0ZmhmSVRJZjF3QTZCOHpMdkhQOG0ycyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly90dWdhcy1idWRlbGlrYS50ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1733872047);

-- Dumping structure for table tugas-budelika-aditiya-db.tbl_porto
CREATE TABLE IF NOT EXISTS `tbl_porto` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `freelance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_background` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.tbl_porto: ~1 rows (approximately)
INSERT INTO `tbl_porto` (`id`, `deskripsi`, `judul`, `umur`, `tanggal_lahir`, `city`, `deskripsi2`, `freelance`, `language`, `educational_background`) VALUES
	(1, 'Tentang saya', 'Aditiya Fathurrahman', 30, '2024-11-29', 'Bogor, Indonesia', 'tentang identitas saya', 'Available', 'Indonesia, English, Japanes, Russian', 'SDN 1 CIOMAS, SMPN 2 CIOMAS, SMKN 1 CIOMAS');

-- Dumping structure for table tugas-budelika-aditiya-db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tugas-budelika-aditiya-db.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$KbV49Qz.PsmQc1N1GiahgOt4Spq31/ib992VVgC6/.km4oIQIchZi', NULL, '2024-11-28 20:30:12', '2024-11-28 20:30:12');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
