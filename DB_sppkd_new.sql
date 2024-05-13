-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.34 - MySQL Community Server - GPL
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

-- Dumping structure for table spp_kd.bebas
DROP TABLE IF EXISTS `bebas`;
CREATE TABLE IF NOT EXISTS `bebas` (
  `bebas_id` int NOT NULL AUTO_INCREMENT,
  `student_student_id` int DEFAULT NULL,
  `payment_payment_id` int DEFAULT NULL,
  `bebas_bill` decimal(10,0) DEFAULT NULL,
  `bebas_total_pay` decimal(10,0) DEFAULT '0',
  `bebas_input_date` timestamp NULL DEFAULT NULL,
  `bebas_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bebas_id`),
  KEY `fk_bebas_payment1_idx` (`payment_payment_id`),
  KEY `fk_bebas_student1_idx` (`student_student_id`),
  CONSTRAINT `fk_bebas_payment1` FOREIGN KEY (`payment_payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_bebas_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.bebas: ~2 rows (approximately)
INSERT INTO `bebas` (`bebas_id`, `student_student_id`, `payment_payment_id`, `bebas_bill`, `bebas_total_pay`, `bebas_input_date`, `bebas_last_update`) VALUES
	(1, 1, 2, 500000, 500000, '2022-07-20 11:50:42', '2022-07-20 11:52:41'),
	(2, 2, 2, 500, 0, '2022-07-20 12:34:54', '2022-07-20 12:34:54');

-- Dumping structure for table spp_kd.bebas_pay
DROP TABLE IF EXISTS `bebas_pay`;
CREATE TABLE IF NOT EXISTS `bebas_pay` (
  `bebas_pay_id` int NOT NULL AUTO_INCREMENT,
  `bebas_bebas_id` int DEFAULT NULL,
  `bebas_pay_number` varchar(100) DEFAULT NULL,
  `bebas_pay_bill` decimal(10,0) DEFAULT NULL,
  `bebas_pay_desc` varchar(100) DEFAULT NULL,
  `user_user_id` int DEFAULT NULL,
  `bebas_pay_input_date` date DEFAULT NULL,
  `bebas_pay_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bebas_pay_id`),
  KEY `fk_bebas_pay_bebas1_idx` (`bebas_bebas_id`),
  KEY `fk_bebas_pay_users1_idx` (`user_user_id`),
  CONSTRAINT `fk_bebas_pay_bebas1` FOREIGN KEY (`bebas_bebas_id`) REFERENCES `bebas` (`bebas_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_bebas_pay_users1` FOREIGN KEY (`user_user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.bebas_pay: ~2 rows (approximately)
INSERT INTO `bebas_pay` (`bebas_pay_id`, `bebas_bebas_id`, `bebas_pay_number`, `bebas_pay_bill`, `bebas_pay_desc`, `user_user_id`, `bebas_pay_input_date`, `bebas_pay_last_update`) VALUES
	(1, 1, '20220700002', 350000, 'LKS CICIL', 1, '2022-07-20', '2022-07-20 11:52:03'),
	(2, 1, '20220700003', 150000, 'LKS CICIL', 1, '2022-07-20', '2022-07-20 11:52:41');

-- Dumping structure for table spp_kd.bulan
DROP TABLE IF EXISTS `bulan`;
CREATE TABLE IF NOT EXISTS `bulan` (
  `bulan_id` int NOT NULL AUTO_INCREMENT,
  `student_student_id` int DEFAULT NULL,
  `payment_payment_id` int DEFAULT NULL,
  `month_month_id` int DEFAULT NULL,
  `bulan_bill` decimal(10,0) DEFAULT NULL,
  `bulan_status` tinyint(1) DEFAULT '0',
  `bulan_number_pay` varchar(100) DEFAULT NULL,
  `bulan_date_pay` date DEFAULT NULL,
  `user_user_id` int DEFAULT NULL,
  `bulan_input_date` timestamp NULL DEFAULT NULL,
  `bulan_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bulan_id`),
  KEY `fk_bulan_payment1_idx` (`payment_payment_id`),
  KEY `fk_bulan_month1_idx` (`month_month_id`),
  KEY `fk_bulan_student1_idx` (`student_student_id`),
  KEY `fk_bulan_users1_idx` (`user_user_id`),
  CONSTRAINT `fk_bulan_month1` FOREIGN KEY (`month_month_id`) REFERENCES `month` (`month_id`),
  CONSTRAINT `fk_bulan_payment1` FOREIGN KEY (`payment_payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_bulan_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_bulan_users1` FOREIGN KEY (`user_user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.bulan: ~12 rows (approximately)
INSERT INTO `bulan` (`bulan_id`, `student_student_id`, `payment_payment_id`, `month_month_id`, `bulan_bill`, `bulan_status`, `bulan_number_pay`, `bulan_date_pay`, `user_user_id`, `bulan_input_date`, `bulan_last_update`) VALUES
	(1, 1, 1, 1, 200000, 1, '20220700001', '2022-07-20', 1, '2022-07-10 08:17:52', '2022-07-20 11:48:12'),
	(2, 1, 1, 2, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(3, 1, 1, 3, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(4, 1, 1, 4, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(5, 1, 1, 5, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(6, 1, 1, 6, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(7, 1, 1, 7, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(8, 1, 1, 8, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(9, 1, 1, 9, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(10, 1, 1, 10, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(11, 1, 1, 11, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52'),
	(12, 1, 1, 12, 200000, 0, NULL, NULL, NULL, '2022-07-10 08:17:52', '2022-07-10 08:17:52');

-- Dumping structure for table spp_kd.ci_sessions
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table spp_kd.ci_sessions: ~0 rows (approximately)

-- Dumping structure for table spp_kd.class
DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int NOT NULL AUTO_INCREMENT,
  `class_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.class: ~6 rows (approximately)
INSERT INTO `class` (`class_id`, `class_name`) VALUES
	(1, 'X TKJ'),
	(2, 'X AKUNTANSI'),
	(3, 'X RPL'),
	(4, 'X MM 1'),
	(5, 'X MM 2'),
	(6, 'XI TKJ');

-- Dumping structure for table spp_kd.debit
DROP TABLE IF EXISTS `debit`;
CREATE TABLE IF NOT EXISTS `debit` (
  `debit_id` int NOT NULL AUTO_INCREMENT,
  `debit_date` date DEFAULT NULL,
  `debit_desc` varchar(100) DEFAULT NULL,
  `debit_value` decimal(10,0) DEFAULT NULL,
  `user_user_id` int DEFAULT NULL,
  `debit_input_date` timestamp NULL DEFAULT NULL,
  `debit_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`debit_id`),
  KEY `fk_jurnal_debit_users1_idx` (`user_user_id`),
  CONSTRAINT `fk_jurnal_debit_users1` FOREIGN KEY (`user_user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.debit: ~2 rows (approximately)
INSERT INTO `debit` (`debit_id`, `debit_date`, `debit_desc`, `debit_value`, `user_user_id`, `debit_input_date`, `debit_last_update`) VALUES
	(1, '2022-12-16', 'tes', 100000, 1, '2022-12-15 12:56:00', '2022-12-15 12:56:00'),
	(3, '2022-12-23', 'testing', 46000, 1, '2022-12-24 03:37:12', '2022-12-24 03:38:57');

-- Dumping structure for table spp_kd.holiday
DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year` year DEFAULT NULL,
  `date` date DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.holiday: ~0 rows (approximately)

-- Dumping structure for table spp_kd.information
DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `information_id` int NOT NULL AUTO_INCREMENT,
  `information_title` varchar(100) DEFAULT NULL,
  `information_desc` text,
  `information_img` varchar(255) DEFAULT NULL,
  `information_publish` tinyint(1) DEFAULT '0',
  `user_user_id` int DEFAULT NULL,
  `information_input_date` timestamp NULL DEFAULT NULL,
  `information_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`information_id`),
  KEY `fk_information_users1_idx` (`user_user_id`),
  CONSTRAINT `fk_information_users1` FOREIGN KEY (`user_user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.information: ~2 rows (approximately)
INSERT INTO `information` (`information_id`, `information_title`, `information_desc`, `information_img`, `information_publish`, `user_user_id`, `information_input_date`, `information_last_update`) VALUES
	(1, 'informasi draft', '<p>isi draft informasi</p>', 'informasi_draft.jpg', 0, 1, '2022-12-15 12:59:10', '2022-12-15 12:59:37'),
	(2, 'informasi terbit', '<p>isi informasi terbit</p>', 'informasi_terbit.jpg', 1, 1, '2022-12-15 13:00:37', '2022-12-15 13:00:37');

-- Dumping structure for table spp_kd.kredit
DROP TABLE IF EXISTS `kredit`;
CREATE TABLE IF NOT EXISTS `kredit` (
  `kredit_id` int NOT NULL AUTO_INCREMENT,
  `kredit_date` date DEFAULT NULL,
  `kredit_desc` varchar(100) DEFAULT NULL,
  `kredit_value` decimal(10,0) DEFAULT NULL,
  `user_user_id` int DEFAULT NULL,
  `kredit_input_date` timestamp NULL DEFAULT NULL,
  `kredit_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kredit_id`),
  KEY `fk_jurnal_kredit_users1_idx` (`user_user_id`),
  CONSTRAINT `fk_jurnal_kredit_users1` FOREIGN KEY (`user_user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.kredit: ~2 rows (approximately)
INSERT INTO `kredit` (`kredit_id`, `kredit_date`, `kredit_desc`, `kredit_value`, `user_user_id`, `kredit_input_date`, `kredit_last_update`) VALUES
	(1, '2022-07-19', 'makan', 25000, 1, '2022-07-19 12:24:57', '2022-07-19 12:24:57'),
	(3, '2022-12-23', 'testing', 5000, 1, '2022-12-24 03:15:47', '2022-12-24 03:20:53');

-- Dumping structure for table spp_kd.letter
DROP TABLE IF EXISTS `letter`;
CREATE TABLE IF NOT EXISTS `letter` (
  `letter_id` int NOT NULL AUTO_INCREMENT,
  `letter_number` varchar(100) DEFAULT NULL,
  `letter_month` int DEFAULT NULL,
  `letter_year` year DEFAULT NULL,
  PRIMARY KEY (`letter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.letter: ~3 rows (approximately)
INSERT INTO `letter` (`letter_id`, `letter_number`, `letter_month`, `letter_year`) VALUES
	(1, '00001', 7, '2022'),
	(2, '00002', 7, '2022'),
	(3, '00003', 7, '2022');

-- Dumping structure for table spp_kd.logs
DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `log_date` timestamp NULL DEFAULT NULL,
  `log_action` varchar(45) DEFAULT NULL,
  `log_module` varchar(45) DEFAULT NULL,
  `log_info` text,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `fk_g_activity_log_g_user1_idx` (`user_id`),
  CONSTRAINT `fk_g_activity_log_g_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.logs: ~72 rows (approximately)
INSERT INTO `logs` (`log_id`, `log_date`, `log_action`, `log_module`, `log_info`, `user_id`) VALUES
	(1, '2021-09-15 23:25:57', 'Edit', 'Profile', 'ID:1;Name:Administrator', 1),
	(2, '2022-07-10 08:13:10', 'Tambah', 'Tahun Ajaran', 'ID:null;Title:2021/2022', NULL),
	(3, '2022-07-10 08:13:29', 'Tambah', 'Jenis Pembayaran', 'ID:null;Title:', NULL),
	(4, '2022-07-10 08:16:13', 'Tambah', 'Student', 'ID:1;Name:agus', 1),
	(5, '2022-07-20 11:48:46', 'Tambah', 'Jenis Pembayaran', 'ID:null;Title:', NULL),
	(6, '2022-07-20 12:33:33', 'Tambah', 'Student', 'ID:2;Name:SOKRAN', 1),
	(7, '2022-12-15 12:47:01', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(8, '2022-12-15 12:47:12', 'Hapus', 'Pos Bayar', 'ID:4;Title:PKL', 1),
	(9, '2022-12-15 12:47:34', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(10, '2022-12-15 12:47:42', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(11, '2022-12-15 12:49:12', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(12, '2022-12-15 12:49:22', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(13, '2022-12-15 12:50:18', 'Hapus', 'Pos Bayar', 'ID:5;Title:TEs', 1),
	(14, '2022-12-15 12:51:24', 'Tambah', 'Jenis Pembayaran', 'ID:null;Title:', NULL),
	(15, '2022-12-15 12:55:20', 'Hapus', 'Jurnal Pengeluaran', 'ID:2;Title:testing', 1),
	(16, '2022-12-15 12:56:07', 'Sunting', 'Penerimaan', 'ID:null;Title:testing', NULL),
	(17, '2022-12-15 12:56:24', 'Hapus', 'Jurnal Penerimaan', 'ID:2;Title:testing', 1),
	(18, '2022-12-15 12:59:10', 'Tambah', 'Pengeluaran', 'ID:null;Title:<p>isi draft informasi</p>', NULL),
	(19, '2022-12-15 12:59:37', 'Sunting', 'Pengeluaran', 'ID:null;Title:<p>isi draft informasi</p>', NULL),
	(20, '2022-12-15 12:59:37', 'Sunting', 'Pengeluaran', 'ID:null;Title:<p>isi draft informasi</p>', NULL),
	(21, '2022-12-15 13:00:39', 'Tambah', 'Pengeluaran', 'ID:null;Title:<p>isi informasi terbit</p>', NULL),
	(22, '2022-12-15 13:01:20', 'Tambah', 'Pengeluaran', 'ID:null;Title:<p>informasi hapus</p>', NULL),
	(23, '2022-12-15 13:01:25', 'Hapus', 'Informasi', 'ID:3;Title:informasi hapus', 1),
	(24, '2022-12-15 13:05:45', 'Tambah', 'user', 'ID:2;Name:Yola Febrianto', 1),
	(25, '2022-12-15 13:06:20', 'Reset Password', 'Pengguna', 'ID:null;Title:', 1),
	(26, '2022-12-15 13:06:44', 'Reset Password', 'Pengguna', 'ID:null;Title:', 1),
	(27, '2022-12-15 13:07:14', 'Sunting', 'user', 'ID:2;Name:Yola Febrianto', 1),
	(28, '2022-12-15 13:07:54', 'Sunting', 'user', 'ID:2;Name:Yola Febrianto', 1),
	(29, '2022-12-15 13:08:17', 'Sunting', 'user', 'ID:2;Name:Yola Febrianto', 1),
	(30, '2022-12-15 13:08:37', 'Hapus', 'user', 'ID:2;Title:Yola Febrianto', 1),
	(31, '2022-12-15 13:09:50', 'Tambah', 'user', 'ID:3;Name:Yola Febrianto', 1),
	(32, '2022-12-15 13:10:23', 'Sunting', 'user', 'ID:3;Name:Yola Febrianto', 1),
	(33, '2022-12-15 13:12:10', 'Tambah', 'Tahun Ajaran', 'ID:null;Title:2022/2023', NULL),
	(34, '2022-12-15 13:12:36', 'Sunting', 'Tahun Ajaran', 'ID:null;Title:2022/2023', NULL),
	(35, '2022-12-15 13:13:51', 'Sunting', 'Tahun Ajaran', 'ID:null;Title:2022/2023', NULL),
	(36, '2022-12-15 13:14:21', 'Sunting', 'Tahun Ajaran', 'ID:null;Title:2022/2023', NULL),
	(37, '2022-12-15 13:15:12', 'Hapus', 'Tahun Ajaran', 'ID:;Title:', 1),
	(38, '2022-12-15 13:24:23', 'Tambah', 'Student', 'ID:3;Name:Yola Febrianto Erdi', 1),
	(39, '2022-12-15 13:25:01', 'Sunting', 'Student', 'ID:3;Name:Yola Febrianto Erdi', 1),
	(40, '2022-12-15 13:28:34', 'Sunting', 'Student', 'ID:4;Name:Sofie Giska Nuraudila', 1),
	(41, '2022-12-15 13:28:47', 'Hapus', 'user', 'ID:;Title:', 1),
	(42, '2022-12-15 13:29:11', 'Sunting', 'Student', 'ID:5;Name:Sofie Giska Nuraudila', 1),
	(43, '2022-12-15 13:30:18', 'Sunting', 'Student', 'ID:5;Name:Sofie Giska Nuraudila', 1),
	(44, '2022-12-15 13:30:26', 'Hapus', 'user', 'ID:;Title:', 1),
	(45, '2022-12-19 04:05:40', 'Tambah', 'Student', 'ID:6;Name:Siswa baru', 1),
	(46, '2022-12-19 04:09:01', 'Hapus', 'user', 'ID:;Title:Siswa baru', 1),
	(47, '2022-12-19 04:18:59', 'Tambah', 'Tahun Ajaran', 'ID:null;Title:2022/2023', NULL),
	(48, '2022-12-19 04:19:10', 'Sunting', 'Tahun Ajaran', 'ID:null;Title:2023/2024', NULL),
	(49, '2022-12-19 04:19:17', 'Hapus', 'Tahun Ajaran', 'ID:;Title:', 1),
	(50, '2022-12-19 04:39:28', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(51, '2022-12-23 06:24:46', 'Ganti Password', 'Pengguna', 'ID:null;Title:', 1),
	(52, '2022-12-23 06:25:21', 'Ganti Password', 'Pengguna', 'ID:null;Title:', 1),
	(53, '2022-12-23 22:58:53', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(54, '2022-12-23 23:11:48', 'Hapus', 'Pos Bayar', 'ID:6;Title:tes', 1),
	(55, '2022-12-23 23:14:57', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(56, '2022-12-23 23:17:32', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam1', NULL),
	(57, '2022-12-23 23:17:55', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(58, '2022-12-23 23:18:28', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(59, '2022-12-23 23:21:23', 'Sunting', 'Pos Bayar', 'ID:null;Title:Seragam', NULL),
	(60, '2022-12-23 23:42:12', 'Tambah', 'Pos Bayar', 'ID:null;Title:POS BAYAR', NULL),
	(61, '2022-12-23 23:42:24', 'Hapus', 'Pos Bayar', 'ID:7;Title:POS BAYAR', 1),
	(62, '2022-12-24 00:36:41', 'Tambah', 'Jenis Pembayaran', 'ID:null;Title:', NULL),
	(63, '2022-12-24 00:36:53', 'Sunting', 'Jenis Pembayaran', 'ID:null;Title:', NULL),
	(64, '2022-12-24 00:37:43', 'Hapus', 'Jenis Pembayaran', 'ID:;Title:', 1),
	(65, '2022-12-24 03:25:36', 'Hapus', 'Jurnal Pengeluaran', 'ID:4;Title:testing2', 1),
	(66, '2022-12-24 03:37:47', 'Tambah', 'Penerimaan', 'ID:null;Title:testing', NULL),
	(67, '2022-12-24 03:37:59', 'Hapus', 'Jurnal Penerimaan', 'ID:4;Title:testing', 1),
	(68, '2022-12-24 03:38:57', 'Sunting', 'Penerimaan', 'ID:null;Title:testing', NULL),
	(69, '2022-12-24 04:07:19', 'Tambah', 'Tahun Ajaran', 'ID:null;Title:2022/2023', NULL),
	(70, '2022-12-24 04:07:32', 'Sunting', 'Tahun Ajaran', 'ID:null;Title:2022/2024', NULL),
	(71, '2022-12-24 04:08:20', 'Sunting', 'Tahun Ajaran', 'ID:null;Title:2022/2024', NULL),
	(72, '2022-12-24 04:08:32', 'Hapus', 'Tahun Ajaran', 'ID:;Title:', 1);

-- Dumping structure for table spp_kd.log_trx
DROP TABLE IF EXISTS `log_trx`;
CREATE TABLE IF NOT EXISTS `log_trx` (
  `log_trx_id` int NOT NULL AUTO_INCREMENT,
  `student_student_id` int DEFAULT NULL,
  `bulan_bulan_id` int DEFAULT NULL,
  `bebas_pay_bebas_pay_id` int DEFAULT NULL,
  `log_trx_input_date` timestamp NULL DEFAULT NULL,
  `log_trx_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`log_trx_id`),
  KEY `fk_log_trx_bebas_pay1_idx` (`bebas_pay_bebas_pay_id`),
  KEY `fk_log_trx_bulan1_idx` (`bulan_bulan_id`),
  KEY `fk_log_trx_student1_idx` (`student_student_id`),
  CONSTRAINT `fk_log_trx_bebas_pay1` FOREIGN KEY (`bebas_pay_bebas_pay_id`) REFERENCES `bebas_pay` (`bebas_pay_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_log_trx_bulan1` FOREIGN KEY (`bulan_bulan_id`) REFERENCES `bulan` (`bulan_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_log_trx_student1` FOREIGN KEY (`student_student_id`) REFERENCES `student` (`student_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.log_trx: ~3 rows (approximately)
INSERT INTO `log_trx` (`log_trx_id`, `student_student_id`, `bulan_bulan_id`, `bebas_pay_bebas_pay_id`, `log_trx_input_date`, `log_trx_last_update`) VALUES
	(1, 1, 1, NULL, '2022-07-20 11:48:12', '2022-07-20 11:48:12'),
	(2, 1, NULL, 1, '2022-07-20 11:52:03', '2022-07-20 11:52:03'),
	(3, 1, NULL, 2, '2022-07-20 11:52:41', '2022-07-20 11:52:41');

-- Dumping structure for table spp_kd.majors
DROP TABLE IF EXISTS `majors`;
CREATE TABLE IF NOT EXISTS `majors` (
  `majors_id` int NOT NULL AUTO_INCREMENT,
  `majors_name` varchar(100) DEFAULT NULL,
  `majors_short_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`majors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.majors: ~0 rows (approximately)

-- Dumping structure for table spp_kd.month
DROP TABLE IF EXISTS `month`;
CREATE TABLE IF NOT EXISTS `month` (
  `month_id` int NOT NULL AUTO_INCREMENT,
  `month_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`month_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.month: ~12 rows (approximately)
INSERT INTO `month` (`month_id`, `month_name`) VALUES
	(1, 'Juli'),
	(2, 'Agustus'),
	(3, 'September'),
	(4, 'Oktober'),
	(5, 'November'),
	(6, 'Desember'),
	(7, 'Januari'),
	(8, 'Februari'),
	(9, 'Maret'),
	(10, 'April'),
	(11, 'Mei'),
	(12, 'Juni');

-- Dumping structure for table spp_kd.payment
DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `payment_type` enum('BEBAS','BULAN') DEFAULT NULL,
  `period_period_id` int DEFAULT NULL,
  `pos_pos_id` int DEFAULT NULL,
  `payment_input_date` timestamp NULL DEFAULT NULL,
  `payment_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `fk_payment_pos1_idx` (`pos_pos_id`),
  KEY `fk_payment_period1_idx` (`period_period_id`),
  CONSTRAINT `fk_payment_period1` FOREIGN KEY (`period_period_id`) REFERENCES `period` (`period_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_payment_pos1` FOREIGN KEY (`pos_pos_id`) REFERENCES `pos` (`pos_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.payment: ~3 rows (approximately)
INSERT INTO `payment` (`payment_id`, `payment_type`, `period_period_id`, `pos_pos_id`, `payment_input_date`, `payment_last_update`) VALUES
	(1, 'BULAN', 1, 1, '2022-07-10 08:13:29', '2022-07-10 08:13:29'),
	(2, 'BEBAS', 1, 2, '2022-07-20 11:48:46', '2022-07-20 11:48:46'),
	(3, 'BULAN', 1, 3, '2022-12-15 12:51:24', '2022-12-15 12:51:24');

-- Dumping structure for table spp_kd.period
DROP TABLE IF EXISTS `period`;
CREATE TABLE IF NOT EXISTS `period` (
  `period_id` int NOT NULL AUTO_INCREMENT,
  `period_start` year DEFAULT NULL,
  `period_end` year DEFAULT NULL,
  `period_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.period: ~0 rows (approximately)
INSERT INTO `period` (`period_id`, `period_start`, `period_end`, `period_status`) VALUES
	(1, '2021', '2022', 0);

-- Dumping structure for table spp_kd.pos
DROP TABLE IF EXISTS `pos`;
CREATE TABLE IF NOT EXISTS `pos` (
  `pos_id` int NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(100) DEFAULT NULL,
  `pos_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.pos: ~3 rows (approximately)
INSERT INTO `pos` (`pos_id`, `pos_name`, `pos_description`) VALUES
	(1, 'SPP', 'Sumbangan Pendidikan'),
	(2, 'LKS', 'LKS'),
	(3, 'Seragam', 'Seragam');

-- Dumping structure for table spp_kd.setting
DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `setting_id` int NOT NULL AUTO_INCREMENT,
  `setting_name` varchar(255) DEFAULT NULL,
  `setting_value` text,
  `setting_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.setting: ~10 rows (approximately)
INSERT INTO `setting` (`setting_id`, `setting_name`, `setting_value`, `setting_last_update`) VALUES
	(1, 'setting_school', '-', '2021-09-15 23:23:48'),
	(2, 'setting_address', '-', '2021-09-15 23:23:48'),
	(3, 'setting_phone', '-', '2021-09-15 23:23:48'),
	(4, 'setting_district', '-', '2021-09-15 23:23:48'),
	(5, 'setting_city', '-', '2021-09-15 23:23:48'),
	(6, 'setting_logo', '-2.png', '2021-09-15 23:23:48'),
	(7, 'setting_level', 'junior', '2021-09-15 23:23:48'),
	(8, 'setting_user_sms', '-', '2021-09-15 23:23:48'),
	(9, 'setting_pass_sms', 'password', '2021-09-15 23:23:48'),
	(10, 'setting_sms', 'N', '2021-09-15 23:23:48');

-- Dumping structure for table spp_kd.student
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int NOT NULL AUTO_INCREMENT,
  `student_nis` varchar(45) DEFAULT NULL,
  `student_nisn` varchar(45) DEFAULT NULL,
  `student_password` varchar(100) DEFAULT NULL,
  `student_full_name` varchar(255) DEFAULT NULL,
  `student_gender` enum('L','P') DEFAULT NULL,
  `student_born_place` varchar(45) DEFAULT NULL,
  `student_born_date` date DEFAULT NULL,
  `student_img` varchar(255) DEFAULT NULL,
  `student_phone` varchar(45) DEFAULT NULL,
  `student_hobby` varchar(100) DEFAULT NULL,
  `student_address` text,
  `student_name_of_mother` varchar(255) DEFAULT NULL,
  `student_name_of_father` varchar(255) DEFAULT NULL,
  `student_parent_phone` varchar(45) DEFAULT NULL,
  `class_class_id` int DEFAULT NULL,
  `majors_majors_id` int DEFAULT NULL,
  `student_status` tinyint(1) DEFAULT '1',
  `student_input_date` timestamp NULL DEFAULT NULL,
  `student_last_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`student_id`),
  KEY `fk_student_class1_idx` (`class_class_id`),
  KEY `fk_student_majors1_idx` (`majors_majors_id`),
  CONSTRAINT `fk_student_class1` FOREIGN KEY (`class_class_id`) REFERENCES `class` (`class_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `fk_student_majors1` FOREIGN KEY (`majors_majors_id`) REFERENCES `majors` (`majors_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.student: ~3 rows (approximately)
INSERT INTO `student` (`student_id`, `student_nis`, `student_nisn`, `student_password`, `student_full_name`, `student_gender`, `student_born_place`, `student_born_date`, `student_img`, `student_phone`, `student_hobby`, `student_address`, `student_name_of_mother`, `student_name_of_father`, `student_parent_phone`, `class_class_id`, `majors_majors_id`, `student_status`, `student_input_date`, `student_last_update`) VALUES
	(1, '001', '001', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'agus', 'L', 'sby', '2022-07-10', NULL, '0987654', '-', 'mhdfbemfaefa', '', '', '0987654', 1, NULL, 1, '2022-07-10 08:16:13', '2022-12-15 13:20:34'),
	(2, '12321', '12312232', '829b36babd21be519fa5f9353daf5dbdb796993e', 'SOKRAN', 'L', 'SIDOARJO', '2022-07-20', 'SOKRAN.jpeg', '085854444555', '', '', '', '', '085556654546', 1, NULL, 1, '2022-07-20 12:33:33', '2022-12-15 13:20:33'),
	(3, '123456789', '12345', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Yola Febrianto Erdi', 'L', 'Lamongan', '1999-02-01', 'Yola_Febrianto_Erdi.jpg', '08123456789', 'Sepakbola', 'Gedangan, Sidoarjo', 'ibu', 'ayah', '08123456789', 6, NULL, 1, '2022-12-15 13:24:23', '2022-12-26 00:30:39');

-- Dumping structure for table spp_kd.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL,
  `user_full_name` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL,
  `user_description` text,
  `user_role_role_id` int DEFAULT NULL,
  `user_is_deleted` tinyint(1) DEFAULT '0',
  `user_input_date` timestamp NULL DEFAULT NULL,
  `user_last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  KEY `fk_user_user_role1_idx` (`user_role_role_id`),
  CONSTRAINT `fk_user_user_role1` FOREIGN KEY (`user_role_role_id`) REFERENCES `user_roles` (`role_id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table spp_kd.users: ~2 rows (approximately)
INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_full_name`, `user_image`, `user_description`, `user_role_role_id`, `user_is_deleted`, `user_input_date`, `user_last_update`) VALUES
	(1, 'admin@admin.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 'Administrator1.png', 'Administrator', 1, 0, '2018-01-16 03:19:33', '2023-05-02 03:59:13'),
	(3, 'yolafebrianto1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Yola Febrianto', 'Yola_Febrianto1.jpeg', 'user yola', 2, 0, '2022-12-15 13:09:50', '2022-12-15 13:10:23');

-- Dumping structure for table spp_kd.user_roles
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table spp_kd.user_roles: ~2 rows (approximately)
INSERT INTO `user_roles` (`role_id`, `role_name`) VALUES
	(1, 'SUPERUSER'),
	(2, 'USER');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
