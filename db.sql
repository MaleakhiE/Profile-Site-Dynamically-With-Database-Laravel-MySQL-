-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for archivehub_dpid
CREATE DATABASE IF NOT EXISTS `archivehub_dpid` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `archivehub_dpid`;

-- Dumping structure for table archivehub_dpid.mst_user_dpid
CREATE TABLE IF NOT EXISTS `mst_user_dpid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `FLAG_ACTIVE` varchar(2) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table archivehub_dpid.mst_user_dpid: ~0 rows (approximately)
REPLACE INTO `mst_user_dpid` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `FLAG_ACTIVE`, `DATE_ADDED`) VALUES
	(1, 'sultan', 'sultan', 'sultan@email.com', 'Y', '2023-12-09');

-- Dumping structure for table archivehub_dpid.mst_user_vendor
CREATE TABLE IF NOT EXISTS `mst_user_vendor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `FLAG_ACTIVE` varchar(1) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table archivehub_dpid.mst_user_vendor: ~1 rows (approximately)
REPLACE INTO `mst_user_vendor` (`ID`, `NAME`, `USERNAME`, `EMAIL`, `PASSWORD`, `FLAG_ACTIVE`, `DATE_ADDED`) VALUES
	(1, 'Jordi', 'jordi', 'jordi@dpid.com', 'jordi', 'Y', '1/12/2023 22:47:00');

-- Dumping structure for table archivehub_dpid.mst_vendor
CREATE TABLE IF NOT EXISTS `mst_vendor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `VENDOR_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ALAMAT` varchar(200) NOT NULL,
  `FLAG_ACTIVE` varchar(1) NOT NULL,
  `DATE_ADDED` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table archivehub_dpid.mst_vendor: ~2 rows (approximately)
REPLACE INTO `mst_vendor` (`ID`, `VENDOR_NAME`, `EMAIL`, `ALAMAT`, `FLAG_ACTIVE`, `DATE_ADDED`) VALUES
	(1, 'Microsoft', 'microsoft@microsoft.com', 'Jakarta', 'Y', '2023-12-09'),
	(2, 'Cisco', 'cisco@cisco.com', 'Jakarta', 'Y', '2023-12-09');

-- Dumping structure for table archivehub_dpid.trn_files_dpid
CREATE TABLE IF NOT EXISTS `trn_files_dpid` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `ID_VENDOR` int(11) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `SUBJECT` varchar(200) NOT NULL,
  `DESCRIPTION` varchar(200) NOT NULL,
  `FILE_NAME` varchar(200) NOT NULL,
  `FILE_PATH` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table archivehub_dpid.trn_files_dpid: ~2 rows (approximately)
REPLACE INTO `trn_files_dpid` (`ID`, `DATE`, `ID_VENDOR`, `ID_USER`, `SUBJECT`, `DESCRIPTION`, `FILE_NAME`, `FILE_PATH`) VALUES
	(110, '2023-12-22', 1, 1, 'Tesgin', 'Tesgin', 'Moondrop Space Travel Filters.txt', '../File Uploads/DP-ID/ID_User (1)/658533a52af48-Moondrop Space Travel Filters.txt');

-- Dumping structure for table archivehub_dpid.trn_files_vendor
CREATE TABLE IF NOT EXISTS `trn_files_vendor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DATE` date NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `SUBJECT` varchar(250) NOT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `FILE_NAME` varchar(250) NOT NULL,
  `FILE_PATH` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table archivehub_dpid.trn_files_vendor: ~7 rows (approximately)
REPLACE INTO `trn_files_vendor` (`ID`, `DATE`, `ID_USER`, `SUBJECT`, `DESCRIPTION`, `FILE_NAME`, `FILE_PATH`) VALUES
	(28, '2023-12-22', 1, 'New', 'New - File Testing', 'Documentation (iLO & ESXi).pdf', '../File Uploads/Vendor/ID_User (1)/6585295c885a7-Documentation (iLO & ESXi).pdf'),
	(29, '2023-12-22', 1, 'asd', 'asd', 'Undangan Digital Wisuda Sabtu 14 Oktober 2023.pdf', '../File Uploads/Vendor/ID_User (1)/658529c256f60-Undangan Digital Wisuda Sabtu 14 Oktober 2023.pdf'),
	(30, '2023-12-22', 1, 'asd', 'asd', 'Denah Kursi Wisuda Sabtu 14 Oktober 2023 (Fix).pdf', '../File Uploads/Vendor/ID_User (1)/658529c25808f-Denah Kursi Wisuda Sabtu 14 Oktober 2023 (Fix).pdf'),
	(31, '2023-12-22', 1, 'asd', 'asd', 'Notulensi Sosialisasi Wisuda.pdf', '../File Uploads/Vendor/ID_User (1)/658529c25928a-Notulensi Sosialisasi Wisuda.pdf'),
	(32, '2023-12-22', 1, 'asd', 'asd', 'Surat Undangan Sosialisasi Maleakhi Ekklesia (1).pdf', '../File Uploads/Vendor/ID_User (1)/658529c25a80e-Surat Undangan Sosialisasi Maleakhi Ekklesia (1).pdf'),
	(33, '2023-12-22', 1, 'asd', 'asd', 'Surat Undangan Sosialisasi Maleakhi Ekklesia.pdf', '../File Uploads/Vendor/ID_User (1)/658529c25b574-Surat Undangan Sosialisasi Maleakhi Ekklesia.pdf'),
	(34, '2023-12-22', 1, 'asd', 'asd', 'tiket travel eki 12okt23.pdf', '../File Uploads/Vendor/ID_User (1)/658529c25ca12-tiket travel eki 12okt23.pdf');


-- Dumping database structure for company-profile
CREATE DATABASE IF NOT EXISTS `company-profile` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `company-profile`;

-- Dumping structure for table company-profile.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.abouts: ~0 rows (approximately)
REPLACE INTO `abouts` (`id`, `title`, `job`, `description`, `description2`, `description3`, `image`, `created_at`, `updated_at`) VALUES
	(3, 'Maleakhi Ekklesia', 'Mahasiswa Keren', 'As a Junior System Engineer at PT Dikstra Solusi, I support the design, development, and maintenance of various software systems and applications for clients in various industries. I use my skills in C++, Python, and JavaScript to create user-friendly and efficient solutions that meet the client\'s needs and specifications.', 'I graduated with a Bachelor\'s degree in Informatics from Institut Teknologi Nasional (ITENAS) in October 2023, where I gained a solid foundation in computer science, data structures, algorithms, and machine learning. I also worked as a Machine Learning Laboratory Assistant, where I helped conduct research and experiments on various topics such as image processing, natural language processing, and deep learning.', 'I have earned multiple certifications, such as the Asean Data Science Explorers and the Huawei ICT Academy Indonesia, that demonstrate my knowledge and proficiency in data science and networking. I am passionate about learning new things and adapting to new challenges, and I enjoy working in a team and collaborating with others. My goal is to leverage my skills and experience to contribute to the development and innovation of software systems and applications that can benefit society and the environment.', '20231122.png', '2023-11-22 00:33:53', '2023-11-24 00:11:11');

-- Dumping structure for table company-profile.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table company-profile.menu2s
CREATE TABLE IF NOT EXISTS `menu2s` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.menu2s: ~0 rows (approximately)
REPLACE INTO `menu2s` (`id`, `judul`, `description`, `created_at`, `updated_at`) VALUES
	(2, 'My Skills', 'Test123', '2023-11-27 23:37:01', '2023-12-11 23:39:00');

-- Dumping structure for table company-profile.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.menus: ~0 rows (approximately)
REPLACE INTO `menus` (`id`, `judul`, `description`, `created_at`, `updated_at`) VALUES
	(2, 'test123', 'test123555', '2023-11-27 23:02:33', '2023-11-27 23:09:17');

-- Dumping structure for table company-profile.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.migrations: ~9 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_21_071700_create-portofolios-table', 2),
	(6, '2023_11_21_072115_create-portofolios-table', 3),
	(7, '2023_11_21_080751_create-portofolios-table', 4),
	(8, '2023_11_21_170408_create-about_table', 5),
	(9, '2023_11_21_171429_create-about_table', 6),
	(10, '2023_11_22_043705_create-service_table', 7),
	(11, '2023_11_22_083407_create-skill_table', 8),
	(12, '2023_11_28_044429_create-menu_table', 9),
	(13, '2023_11_28_063049_create-menu2_table', 10);

-- Dumping structure for table company-profile.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.password_resets: ~0 rows (approximately)

-- Dumping structure for table company-profile.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table company-profile.portofolios
CREATE TABLE IF NOT EXISTS `portofolios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.portofolios: ~2 rows (approximately)
REPLACE INTO `portofolios` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(8, 'Tepak Tepok 2023', 'Badminton 20234555', '20231121.png', '2023-11-21 09:45:54', '2023-11-28 01:29:49'),
	(12, 'Gambar 1', 'Test123', '20231122.png', '2023-11-22 01:09:40', '2023-11-22 01:09:40');

-- Dumping structure for table company-profile.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.services: ~3 rows (approximately)
REPLACE INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
	(6, 'Gambar 5', 'test test teng', '20231122.png', '2023-11-21 21:55:05', '2023-11-22 04:17:51'),
	(7, 'Gambar 26', 'apa iya', '20231122.jpg', '2023-11-22 01:24:45', '2023-11-22 01:25:49'),
	(8, 'Gambar 6', 'Test', '20231122.png', '2023-11-22 04:18:26', '2023-11-22 04:18:26');

-- Dumping structure for table company-profile.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rasio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.skills: ~3 rows (approximately)
REPLACE INTO `skills` (`id`, `name`, `rasio`, `created_at`, `updated_at`) VALUES
	(3, 'Berlayar', '30', '2023-11-22 01:58:58', '2023-11-22 01:58:58'),
	(4, 'Bawa Baju', '76', '2023-11-22 01:59:45', '2023-11-22 01:59:45'),
	(5, 'Sepatu Bola', '98', '2023-11-22 01:59:55', '2023-11-22 01:59:55'),
	(6, 'makan pedes', '100', '2023-11-22 04:19:05', '2023-11-22 04:19:05');

-- Dumping structure for table company-profile.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table company-profile.users: ~0 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Maleakhi Ekklesia', 'ekiputra234@gmail.com', NULL, '$2y$10$4Axa4MjflOQngjqBbNPKPeOg.k8qCFPhiWGnpGnnUOLslIIVLTkgO', NULL, '2023-11-15 23:44:51', '2023-11-15 23:44:51');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
