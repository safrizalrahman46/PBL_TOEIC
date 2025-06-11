/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : pbl2

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 11/06/2025 13:12:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for announcement
-- ----------------------------
DROP TABLE IF EXISTS `announcement`;
CREATE TABLE `announcement`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` enum('test_schedule','test_result','certificate','general') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `target_audience` enum('student','admin','all') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'all',
  `event_date` timestamp(0) NULL DEFAULT NULL,
  `pickup_certificate` timestamp(0) NULL DEFAULT NULL,
  `annopath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(0) NOT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `created_by`(`created_by`) USING BTREE,
  CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of announcement
-- ----------------------------
INSERT INTO `announcement` VALUES (1, 'Pengambilan Sertifikat telah tersedia', 'ambil sertifikat kalian sebelum saya bakar', 'test_result', 'student', '2025-06-11 00:00:00', NULL, NULL, '2025-06-10 20:21:47', 1, '2025-06-10 20:21:47');
INSERT INTO `announcement` VALUES (5, 'sadasdsa sadas', 'asdasd asdsd', 'test_schedule', 'student', '2025-06-11 00:00:00', NULL, 'public/annopaths/mmCUGS4DJYlyoGik3ypkzL1kNsxqdSfPPv9S7njw.png', '2025-06-10 21:06:19', 1, '2025-06-10 21:06:19');

-- ----------------------------
-- Table structure for majors
-- ----------------------------
DROP TABLE IF EXISTS `majors`;
CREATE TABLE `majors`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of majors
-- ----------------------------
INSERT INTO `majors` VALUES (1, 'JURUSAN TEKNIK ELEKTRO', 'EL');
INSERT INTO `majors` VALUES (2, 'JURUSAN TEKNIK MESIN', 'MS');
INSERT INTO `majors` VALUES (3, 'JURUSAN TEKNOLOGI INFORMASI', 'TI');
INSERT INTO `majors` VALUES (4, 'JURUSAN TEKNIK KIMIA', 'KM');
INSERT INTO `majors` VALUES (5, 'JURUSAN TEKNIK SIPIL', 'SL');
INSERT INTO `majors` VALUES (6, 'JURUSAN AKUNTANSI', 'AK');
INSERT INTO `majors` VALUES (7, 'JURUSAN ADMINISTRASI NIAGA', 'AN');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int unsigned NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint unsigned NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `expires_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for study_programs
-- ----------------------------
DROP TABLE IF EXISTS `study_programs`;
CREATE TABLE `study_programs`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of study_programs
-- ----------------------------
INSERT INTO `study_programs` VALUES (1, 'D-III Teknik Listrik', 'EL-D3-LIS');
INSERT INTO `study_programs` VALUES (2, 'D-III Teknik Elektronika', 'EL-D3-ELE');
INSERT INTO `study_programs` VALUES (3, 'D-III Teknik Telekomunikasi', 'EL-D3-TEL');
INSERT INTO `study_programs` VALUES (4, 'D-IV Sistem Kelistrikan', 'EL-D4-SKL');
INSERT INTO `study_programs` VALUES (5, 'D-IV Teknik Elektronika', 'EL-D4-ELE');
INSERT INTO `study_programs` VALUES (6, 'D-IV Teknik Jaringan Telekomunikasi Digital', 'EL-D4-TJTD');
INSERT INTO `study_programs` VALUES (7, 'Magister Terapan (S2) Teknik Elektro', 'EL-S2-TE');
INSERT INTO `study_programs` VALUES (8, 'D-III Teknik Mesin', 'MS-D3-MSN');
INSERT INTO `study_programs` VALUES (9, 'D-III Teknologi Pemeliharaan Pesawat Udara', 'MS-D3-PPU');
INSERT INTO `study_programs` VALUES (10, 'D-IV Teknik Mesin Produksi dan Perawatan', 'MS-D4-MPP');
INSERT INTO `study_programs` VALUES (11, 'D-IV Teknik Otomotif Elektronik', 'MS-D4-TOE');
INSERT INTO `study_programs` VALUES (12, 'Magister Terapan (S2) Rekayasa Teknologi Manufaktur', 'MS-S2-RTM');
INSERT INTO `study_programs` VALUES (13, 'D-II Pengembangan Piranti Lunak Situs', 'TI-D2-PPLS');
INSERT INTO `study_programs` VALUES (14, 'D-IV Sistem Informasi Bisnis', 'TI-D4-SIB');
INSERT INTO `study_programs` VALUES (15, 'D-IV Teknik Informatika', 'TI-D4-INF');
INSERT INTO `study_programs` VALUES (16, 'Magister Terapan (S2) Rekayasa Teknologi Informasi', 'TI-S2-RTI');
INSERT INTO `study_programs` VALUES (17, 'D-III Teknik Kimia', 'KM-D3-KIM');
INSERT INTO `study_programs` VALUES (18, 'D-IV Teknologi Kimia Industri', 'KM-D4-TKI');
INSERT INTO `study_programs` VALUES (19, 'D-III Teknik Sipil', 'SL-D3-SPL');
INSERT INTO `study_programs` VALUES (20, 'D-III Teknologi Konstruksi Jalan, Jembatan, Dan Bangunan Air', 'SL-D3-TKJ');
INSERT INTO `study_programs` VALUES (21, 'D-III Teknologi Pertambangan', 'SL-D3-TPT');
INSERT INTO `study_programs` VALUES (22, 'D-IV Teknologi Rekayasa Konstruksi Jalan Dan Jembatan', 'SL-D4-TRK');
INSERT INTO `study_programs` VALUES (23, 'D-IV Manajemen Rekayasa Konstruksi', 'SL-D4-MRK');
INSERT INTO `study_programs` VALUES (24, 'D-III Akuntansi', 'AK-D3-AKU');
INSERT INTO `study_programs` VALUES (25, 'D-IV Keuangan', 'AK-D4-KEU');
INSERT INTO `study_programs` VALUES (26, 'D-IV Akuntansi Manajemen', 'AK-D4-AM');
INSERT INTO `study_programs` VALUES (27, 'Magister Terapan (S2) Sistem Informasi Akuntansi', 'AK-S2-SIA');
INSERT INTO `study_programs` VALUES (28, 'D-III Administrasi Bisnis', 'AN-D3-ADB');
INSERT INTO `study_programs` VALUES (29, 'D-IV Manajemen Pemasaran', 'AN-D4-MPM');
INSERT INTO `study_programs` VALUES (30, 'D-IV Bahasa Inggris untuk Komunikasi Bisnis dan Profesional', 'AN-D4-BIK');
INSERT INTO `study_programs` VALUES (31, 'D-IV Bahasa Inggris untuk Industri Pariwisata', 'AN-D4-BIP');
INSERT INTO `study_programs` VALUES (32, 'D-IV Pengelolaan Arsip dan Rekaman Informasi', 'AN-D4-ARI');
INSERT INTO `study_programs` VALUES (33, 'D-IV Usaha Perjalanan Wisata', 'AN-D4-UPW');

-- ----------------------------
-- Table structure for toeic_registration
-- ----------------------------
DROP TABLE IF EXISTS `toeic_registration`;
CREATE TABLE `toeic_registration`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `status` enum('pending','approved','rejected','cancelled') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT 'pending',
  `registration_date` date NULL DEFAULT NULL,
  `is_second_registration` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  `nim` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ktp_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `user_ref_id` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_nim_user`(`nim`) USING BTREE,
  INDEX `fk_user_ref_id`(`user_ref_id`) USING BTREE,
  CONSTRAINT `fk_nim_user` FOREIGN KEY (`nim`) REFERENCES `user` (`nim`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `fk_user_ref_id` FOREIGN KEY (`user_ref_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of toeic_registration
-- ----------------------------
INSERT INTO `toeic_registration` VALUES (4, 'rejected', '2025-06-10', 1, '2025-06-11 10:00:31', '2025-06-11 03:00:31', '3948574957', NULL, 2);
INSERT INTO `toeic_registration` VALUES (5, 'rejected', '2025-06-11', 1, '2025-06-11 10:00:29', '2025-06-11 03:00:29', '23417660011', 'public/ktps/QELkrYcFyJTu0VI6Z2LFQ3hQZnpdZLQNU9guoaLX.jpg', 2);
INSERT INTO `toeic_registration` VALUES (9, 'pending', '2025-06-11', 0, '2025-06-11 06:02:56', '2025-06-11 06:02:56', '2341760542', NULL, NULL);

-- ----------------------------
-- Table structure for toeic_scores
-- ----------------------------
DROP TABLE IF EXISTS `toeic_scores`;
CREATE TABLE `toeic_scores`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `user_id` int(0) NOT NULL,
  `score` int(0) NOT NULL,
  `test_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `picture` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `pdf` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `toeic_scores_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(0) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nim` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `status` enum('pending','approved','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT 'pending',
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `study_program_id` int(0) NULL DEFAULT NULL,
  `major_id` int(0) NULL DEFAULT NULL,
  `role_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `nik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `origin_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `current_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  `campus` enum('Main','PSDKU Kediri','PSDKU Lumajang','PSDKU Pamekasan') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `photo_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `id_card_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `student_card_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `has_registered_free_toeic` tinyint(1) NULL DEFAULT 0,
  `rejection_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `nim`(`nim`) USING BTREE,
  INDEX `study_program_id`(`study_program_id`) USING BTREE,
  INDEX `major_id`(`major_id`) USING BTREE,
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`study_program_id`) REFERENCES `study_programs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Donion', '$2y$12$tNR1Ddfz.lwc6GWzicPmH.T4ZGmkcGL8N7.UqL2tE371FmyQGrnwq', 'dontol@gmail.com', 'student', '3948574957', 'Doni Widjadja', 'pending', '2025-06-10 17:17:08.000000', '2025-06-10 21:09:17.000000', 2, 2, 'Regular student user', '0986589087659807', '082234352476', 'asdsds', 'asdasd', 'Main', 'public/photos/JJU3esanNiL47C1RbbDDiAksUft9jLsXEY6ay4T2.png', NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (2, 'Cakti Yuda', '$2y$12$E1xd2xl2/oG1qVXqU9GMt.QzrbO2986uVSW3.QOKvEHWT82aU7jpS', 'Caktiyuda@gmail.com', 'student', '23417660011', 'Cakti yuda', 'pending', '2025-06-11 02:01:33.000000', '2025-06-11 03:39:10.000000', 2, 2, 'Regular student user', '21210219218', '0821312312', 'Surabaya', 'Malang Sumber Pucung', 'Main', 'public/photos/EfzWJcvUFyeQfn0am9nVFVUI515JFf85whlID6sl.jpg', NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (3, 'andi123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'andi@example.com', 'student', '2201001', 'Andi Pratama', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000001', '081234000001', 'Jl. Merdeka 1', 'Jl. Mawar 2', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (4, 'budi123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'budi@example.com', 'student', '2201002', 'Budi Santoso', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000002', '081234000002', 'Jl. Merdeka 2', 'Jl. Mawar 3', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (5, 'citra123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'citra@example.com', 'student', '2201003', 'Citra Ayu', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000003', '081234000003', 'Jl. Merdeka 3', 'Jl. Mawar 4', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (6, 'dian123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'dian@example.com', 'student', '2201004', 'Dian Sari', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000004', '081234000004', 'Jl. Merdeka 4', 'Jl. Mawar 5', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (7, 'eko123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'eko@example.com', 'student', '2201005', 'Eko Nugroho', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000005', '081234000005', 'Jl. Merdeka 5', 'Jl. Mawar 6', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (8, 'fitri123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'fitri@example.com', 'student', '2201006', 'Fitri Rahma', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000006', '081234000006', 'Jl. Merdeka 6', 'Jl. Mawar 7', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (9, 'galih123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'galih@example.com', 'student', '2201007', 'Galih Ramadhan', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000007', '081234000007', 'Jl. Merdeka 7', 'Jl. Mawar 8', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (10, 'hani123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'hani@example.com', 'student', '2201008', 'Hani Lestari', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000008', '081234000008', 'Jl. Merdeka 8', 'Jl. Mawar 9', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (11, 'indra123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'indra@example.com', 'student', '2201009', 'Indra Wijaya', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000009', '081234000009', 'Jl. Merdeka 9', 'Jl. Mawar 10', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (12, 'joko123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'joko@example.com', 'student', '2201010', 'Joko Susilo', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000010', '081234000010', 'Jl. Merdeka 10', 'Jl. Mawar 11', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (13, 'karina123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'karina@example.com', 'student', '2201011', 'Karina Putri', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000011', '081234000011', 'Jl. Merdeka 11', 'Jl. Mawar 12', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (14, 'linda123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'linda@example.com', 'student', '2201012', 'Linda Maulida', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000012', '081234000012', 'Jl. Merdeka 12', 'Jl. Mawar 13', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (15, 'miko123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'miko@example.com', 'student', '2201013', 'Miko Aditya', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000013', '081234000013', 'Jl. Merdeka 13', 'Jl. Mawar 14', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (16, 'nina123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'nina@example.com', 'student', '2201014', 'Nina Kusuma', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000014', '081234000014', 'Jl. Merdeka 14', 'Jl. Mawar 15', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (17, 'opi123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'opi@example.com', 'student', '2201015', 'Opi Sutrisno', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000015', '081234000015', 'Jl. Merdeka 15', 'Jl. Mawar 16', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (18, 'putra123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'putra@example.com', 'student', '2201016', 'Putra Fadilah', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000016', '081234000016', 'Jl. Merdeka 16', 'Jl. Mawar 17', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (19, 'qori123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'qori@example.com', 'student', '2201017', 'Qori Amalia', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000017', '081234000017', 'Jl. Merdeka 17', 'Jl. Mawar 18', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (20, 'rina123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'rina@example.com', 'student', '2201018', 'Rina Kurnia', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000018', '081234000018', 'Jl. Merdeka 18', 'Jl. Mawar 19', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (21, 'santi123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'santi@example.com', 'student', '2201019', 'Santi Wulandari', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000019', '081234000019', 'Jl. Merdeka 19', 'Jl. Mawar 20', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (22, 'taufik123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'taufik@example.com', 'student', '2201020', 'Taufik Hidayat', 'approved', '2025-06-11 09:25:02.000000', '2025-06-11 09:25:02.000000', 2, 2, 'Student user', '3509010000000020', '081234000020', 'Jl. Merdeka 20', 'Jl. Mawar 21', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (43, 'rizky123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'rizky@example.com', 'student', '2201101', 'Rizky Maulana', 'pending', '2025-06-11 09:38:01.000000', '2025-06-11 09:38:01.000000', 2, 2, 'Student user', '3509010000010001', '081234010001', 'Jl. Melati 1', 'Jl. Cempaka 1', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (44, 'ayu123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'ayu@example.com', 'student', '2201102', 'Ayu Lestari', 'pending', '2025-06-11 09:38:01.000000', '2025-06-11 09:38:01.000000', 2, 2, 'Student user', '3509010000010002', '081234010002', 'Jl. Melati 2', 'Jl. Cempaka 2', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (45, 'reza123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'reza@example.com', 'student', '2201103', 'Reza Rahman', 'pending', '2025-06-11 09:38:01.000000', '2025-06-11 09:38:01.000000', 2, 2, 'Student user', '3509010000010003', '081234010003', 'Jl. Melati 3', 'Jl. Cempaka 3', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (46, 'lisa123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'lisa@example.com', 'student', '2201104', 'Lisa Anjani', 'pending', '2025-06-11 09:38:01.000000', '2025-06-11 09:38:01.000000', 2, 2, 'Student user', '3509010000010004', '081234010004', 'Jl. Melati 4', 'Jl. Cempaka 4', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (47, 'ferdi123', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEaCw1F8oJf1.NQq9w57go5Q8p4G', 'ferdi@example.com', 'student', '2201105', 'Ferdiansyah', 'pending', '2025-06-11 09:38:01.000000', '2025-06-11 09:38:01.000000', 2, 2, 'Student user', '3509010000010005', '081234010005', 'Jl. Melati 5', 'Jl. Cempaka 5', 'Main', NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (48, '21212', '$2y$12$cF2ARJtCVfphvOyLYgQufeVt33BKhgC8luRm9CrstMOv.h7WMwYQK', '21212@example.com', 'educational_staff', '-', 'sa', 'pending', '2025-06-11 03:07:37.000000', '2025-06-11 03:07:37.000000', NULL, NULL, NULL, '21212', '21212', 'ssasa', '121212', NULL, NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (49, 'admin', '$2y$12$cF2ARJtCVfphvOyLYgQufeVt33BKhgC8luRm9CrstMOv.h7WMwYQK', 'admin@gmail.com', 'admin', NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (53, 'admin2', '$2y$12$1fx7ZHX7ZMAlMW/ibt1XYe3Cd4dfEkkHHEpYDNbnwXROoUe9cw8bK', 'admin2@gmail.com', 'admin', NULL, NULL, 'pending', '2025-06-11 04:19:08.000000', '2025-06-11 04:19:08.000000', NULL, NULL, 'System administrator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);
INSERT INTO `user` VALUES (54, 'saktia', '$2y$12$zDv3CNzPGK35C7bQETpXIedrDanQCxtoawhTFHa9u4nhAkRWCgt1G', 'saktia@gmail.com', 'student', '2341760542', 'saktia wicaksana', 'pending', '2025-06-11 04:24:05.000000', '2025-06-11 04:45:15.000000', 11, 1, 'Regular student user', '213231321313', '09821832819', 'Surabaya', 'Bungurasih', 'Main', 'public/photos/uDu4JQjJw6UQc8QtVhciDtBJFXegN300q35lSczk.jpg', NULL, NULL, 0, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
