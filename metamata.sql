-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3344
-- Generation Time: Jul 01, 2022 at 05:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metamata`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `resep_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `user_id`, `resep_id`) VALUES
(1, 1, 1),
(4, 1, 5),
(6, 2, 5),
(7, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `bahan0` varchar(255) DEFAULT NULL,
  `bahan1` varchar(255) DEFAULT NULL,
  `bahan2` varchar(255) DEFAULT NULL,
  `bahan3` varchar(255) DEFAULT NULL,
  `bahan4` varchar(255) DEFAULT NULL,
  `bahan5` varchar(255) DEFAULT NULL,
  `bahan6` varchar(255) DEFAULT NULL,
  `bahan7` varchar(255) DEFAULT NULL,
  `bahan8` varchar(255) DEFAULT NULL,
  `bahan9` varchar(255) DEFAULT NULL,
  `carabuat0` varchar(255) DEFAULT NULL,
  `carabuat1` varchar(255) DEFAULT NULL,
  `carabuat2` varchar(255) DEFAULT NULL,
  `carabuat3` varchar(255) DEFAULT NULL,
  `carabuat4` varchar(255) DEFAULT NULL,
  `carabuat5` varchar(255) DEFAULT NULL,
  `carabuat6` varchar(255) DEFAULT NULL,
  `carabuat7` varchar(255) DEFAULT NULL,
  `carabuat8` varchar(255) DEFAULT NULL,
  `carabuat9` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `like` int(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`judul`, `deskripsi`, `bahan0`, `bahan1`, `bahan2`, `bahan3`, `bahan4`, `bahan5`, `bahan6`, `bahan7`, `bahan8`, `bahan9`, `carabuat0`, `carabuat1`, `carabuat2`, `carabuat3`, `carabuat4`, `carabuat5`, `carabuat6`, `carabuat7`, `carabuat8`, `carabuat9`, `foto`, `like`, `user_id`, `id`) VALUES
('Ayam Goreng', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget convallis pulvinar vitae nec nunc ullamcorper.', 'satu potong ayam', 'garam', '', '', '', '', '', '', '', '', 'digoreng', '', '', '', '', '', '', '', '', '', '1656606411.jpg', 1, 1, 1),
('Sambal jamur ala SS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget convallis pulvinar vitae nec nunc ullamcorper.', '150 gram jamur tiram', '3 buah cabe keriting', '10 buah cabe rawit (sesuai selera)', '1/2 bungkus terasi abc', '1 buah tomat', '3 siung bawang merah', '1 siung bawang putih', 'Secukupnya Minyak', 'Secukupnya Garam, gula, penyedap', NULL, 'Cuci jamur kemudian suir-suir', 'Haluskan bahan sambal (boleh digulek pake cobek. Tp lebih praktis di blender 😅)', 'Panaskan minyak, kemudian masukkan sambal yg sudah di haluskan', 'Masak hingga matang dan sedikit berminyak', 'Masukkan jamur...', 'Setelah sedikit layu masukkan gula, garam dan penyedap', 'Masak hingga sedikit menyusut.. sajikan', NULL, NULL, NULL, '1656666107.png', 0, 1, 5),
('Ikan Goreng Bumbu', 'Ikan goreng bumbu kuning merupakan makanan rumahan yang jadi andalan banyak orang.', '4 ekor ikan mujair atau ikan jenis lain, bersihkan', '1/2 sendok teh air jeruk nipis', '1 sendok teh garam', '1/4 sendok teh merica bubuk', '500 ml minyak untuk menggoreng', NULL, NULL, NULL, NULL, NULL, 'Lumuri ikan bersama air jeruk nipis. Diamkan minimal lima menit.', 'Aduk rata bumbu halus, garam dan merica. Masukkan ikan. Aduk sampai terbalut bumbu. Diamkan minimal 30 menit.', 'Panaskan minyak. Goreng ikan sampai kuning kecokelatan.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1656688020.jpg', 0, 2, 6),
('Cumi Basah Kunyit', 'Bagi para pecinta seafood, cumi menjadi salah satu menu favorit yang bisa diolah jadi berbagai macam masakan.', '1/2 kg cumi basah', '2 batang daun bawang', '1 sdm saus tomat', 'Garam, gula pasir, dan bumbu kaldu secukupnya', '50 ml air', NULL, NULL, NULL, NULL, NULL, 'Cumi setelah dicuci bersih buang kulit tipis dan tintanya. Kemudian masukkan kepala cumi tusuk dengan tusuk gigi, sisihkan', 'Tumis bumbu halus hingga harum, masukkan cumi, garam, gula pasir, bumbu kaldu, dan saos tomat, aduk rata.', 'Tambahkan air, aduk-aduk hingga cumi matang. Koreksi rasa, jika sudah pas, angkat.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1656688948.jpg', 0, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alaric Rasendriya Aniko', 'al@mail.com', NULL, '$2y$10$X2xeI04G/nByTgVXJLF3aem6IGCFXP.aD2d4MXI3ZAU9xbqMP8pSu', NULL, '2022-06-29 20:26:39', '2022-06-29 20:26:39'),
(2, 'user', 'user@mail.com', NULL, '$2y$10$o1e8stf1VXoJ2dxl/z6EGeXJxAIdYRYgA9yfvN3DFUbH7eZusWAYC', NULL, '2022-07-01 07:57:38', '2022-07-01 07:57:38'),
(3, 'user2', 'user2@mail.com', NULL, '$2y$10$aYfS4rC..A9LiyLwYmQOpO.TW/QzLQBnObEPfeZ6p7KqhQ..tAxDC', NULL, '2022-07-01 08:26:43', '2022-07-01 08:26:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resep foreignkey` (`resep_id`),
  ADD KEY `user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `like`
--
ALTER TABLE `like`
  ADD CONSTRAINT `resep foreignkey` FOREIGN KEY (`resep_id`) REFERENCES `resep` (`id`),
  ADD CONSTRAINT `user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `user_id foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
