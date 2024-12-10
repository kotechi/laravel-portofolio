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

-- Dumping data for table tugas-budelika-aditiya-db.cache: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.cache_locks: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.certifications: ~3 rows (approximately)
INSERT INTO `certifications` (`id`, `name`, `issued_by`, `issued_at`, `description`, `file`, `date`, `created_at`, `updated_at`, `image`) VALUES
	(1, 'belajar visualisasi data', 'Dicoding', '2023-10-03', 'mempelajarai tentang memvisualisasikan data', 'certifications/1733652775_sertifikat_course_177_3238698_011123094322.pdf', '2024-11-29', '2024-11-28 20:38:09', '2024-12-08 03:28:38', 'certifications/1733653718_Screenshot 2024-12-08 172544.png'),
	(3, 'memulai dasar pemrograman', 'Dicoding', '2023-09-01', 'kegiatang belajar pemrograman dasar', 'certifications/1733652624_sertifikat dicoding.pdf', '2024-11-29', '2024-11-28 20:41:22', '2024-12-08 03:10:24', 'certifications/1733652624_0001.jpg'),
	(6, 'programing logic 101', 'Dicoding', '2023-09-09', 'pengenalan logika pemrograman', 'certifications/1733653097_sertifikat-course-302-3238698-090923132913.pdf', '2024-12-08', '2024-12-08 03:18:18', '2024-12-08 03:18:18', 'certifications/1733653097_sertifikat-course-302-3238698-090923132913-00.png');

-- Dumping data for table tugas-budelika-aditiya-db.contacts: ~1 rows (approximately)
INSERT INTO `contacts` (`id`, `name`, `gmail`, `whatsapp`, `address`, `created_at`, `updated_at`) VALUES
	(1, 'Aditiya Fathurrahman', 'aditiya53op@gmail.com', '+62 82112327021', 'bogor, indonesia', '2024-11-28 20:32:12', '2024-11-28 20:44:25');

-- Dumping data for table tugas-budelika-aditiya-db.data_keuntungan: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.failed_jobs: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.jobs: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.job_batches: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.migrations: ~11 rows (approximately)
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

-- Dumping data for table tugas-budelika-aditiya-db.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.posts: ~0 rows (approximately)

-- Dumping data for table tugas-budelika-aditiya-db.projects: ~3 rows (approximately)
INSERT INTO `projects` (`id`, `name`, `description`, `link`, `date`, `created_at`, `updated_at`, `image`) VALUES
	(4, 'smknid', 'aplikasi mobile yang memungkinkan siswa absen dengan menggunakan tanda tangan dan validasi lokasi', 'https://www.anjay.com', '2024-12-10', '2024-12-10 03:38:03', '2024-12-10 04:34:39', 'projects/1733827790_desain-tanpa-judul.png'),
	(5, 'literasi digital', 'literasi berbasis online', 'https://www.example.com', '2024-12-10', '2024-12-10 03:41:03', '2024-12-10 03:50:10', 'projects/1733827810_ic-launcher.png'),
	(6, 'quran', 'aplikasi al qur`an digital berbasis mobile', 'https://www.example.com', '2024-12-10', '2024-12-10 03:52:07', '2024-12-10 04:33:48', 'projects/1733827927_ic-launcher.png');

-- Dumping data for table tugas-budelika-aditiya-db.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('8FFGsG6nKNnryQTBzmS8HfEPCULJmCpcZsReN5WX', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2dmMTE3c3VsV3I5bHF4RWZFcVJ5dVR4d1FsdTdoY25iNm4yckRNVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly90dWdhcy1idWRlbGlrYS50ZXN0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1733831104);

-- Dumping data for table tugas-budelika-aditiya-db.tbl_porto: ~1 rows (approximately)
INSERT INTO `tbl_porto` (`id`, `deskripsi`, `judul`, `umur`, `tanggal_lahir`, `city`, `deskripsi2`, `freelance`, `language`, `educational_background`) VALUES
	(1, 'Tentang saya', 'Aditiya Fathurrahman', 30, '2024-11-29', 'Bogor, Indonesia', 'tentang identitas saya', 'Available', 'Indonesia, English, Japanes, Russian', 'SDN 1 CIOMAS, SMPN 2 CIOMAS, SMKN 1 CIOMAS');

-- Dumping data for table tugas-budelika-aditiya-db.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$KbV49Qz.PsmQc1N1GiahgOt4Spq31/ib992VVgC6/.km4oIQIchZi', NULL, '2024-11-28 20:30:12', '2024-11-28 20:30:12');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
