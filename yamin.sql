-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 01:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yamin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin__services`
--

CREATE TABLE `admin__services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Details` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin__services`
--

INSERT INTO `admin__services` (`id`, `title`, `Details`, `image`, `created_at`, `updated_at`) VALUES
(4, 'web application', 'A Web application (Web app) is an application program that is stored on a remote server and delivered over the Internet through a browser interface. Web services are Web apps by definition and many, although not all, websites contain Web apps.', '1672606855.png', '2023-01-01 15:00:55', '2023-01-01 15:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `all__teachers`
--

CREATE TABLE `all__teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `all__teachers`
--

INSERT INTO `all__teachers` (`id`, `title`, `Position`, `Facebook`, `YouTube`, `Linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MR. A', 'teacher', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607388.jfif', '2023-01-01 15:09:48', '2023-01-01 15:09:48'),
(2, 'Mrs. B', 'teacher', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607415.jfif', '2023-01-01 15:10:15', '2023-01-01 15:10:15'),
(3, 'Mrs. C', 'teacher', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607442.jfif', '2023-01-01 15:10:42', '2023-01-01 15:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `online_course_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `online_course_id`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2022-11-30 10:41:35', '2022-11-30 10:41:35'),
(2, '5', '1', '2023-01-01 15:27:06', '2023-01-01 15:27:06'),
(3, '5', '1', '2023-01-01 15:27:18', '2023-01-01 15:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_type` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `course_name`, `course_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sunzo', '01812019471', 'user@gmail.com', 'html', 'Offline Course', 'fdsgf', '2022-12-29 03:45:59', '2022-12-29 03:45:59'),
(2, 'sumon', '5555555555', 'sumon@gmail.com', 'html and css', 'Offline Course', 'sfgdsdfg', '2022-12-29 03:49:52', '2022-12-29 03:49:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `management__teams`
--

CREATE TABLE `management__teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management__teams`
--

INSERT INTO `management__teams` (`id`, `title`, `Position`, `Facebook`, `YouTube`, `Linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mr. A', 'Management Team Head', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607229.jpg', '2023-01-01 15:07:09', '2023-01-01 15:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2022_10_25_041522_create_offline_courses_table', 1),
(9, '2022_10_25_055239_create_video_courses_table', 1),
(20, '2014_10_12_000000_create_users_table', 2),
(21, '2014_10_12_100000_create_password_resets_table', 2),
(22, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(23, '2019_08_19_000000_create_failed_jobs_table', 2),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(25, '2022_10_07_013520_create_sessions_table', 2),
(26, '2022_10_12_234304_create_online__courses_table', 2),
(27, '2022_11_03_195844_create_services_table', 2),
(28, '2022_11_05_124001_create_management__teams_table', 2),
(29, '2022_11_08_122629_create_contacts_table', 2),
(30, '2022_11_08_130004_create_student__consultings_table', 2),
(31, '2022_11_08_131607_create_support__teams_table', 2),
(32, '2022_11_08_135637_create_web__teams_table', 2),
(33, '2022_11_08_142241_create_all__teachers_table', 2),
(34, '2022_11_08_143614_create_success__students_table', 2),
(35, '2022_11_09_010544_create_admin__services_table', 2),
(36, '2022_11_22_211013_create_carts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `offline_courses`
--

CREATE TABLE `offline_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `regular_fee` varchar(255) DEFAULT NULL,
  `discount_fee` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online__courses`
--

CREATE TABLE `online__courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `regular_fee` varchar(255) DEFAULT NULL,
  `discount_fee` varchar(255) DEFAULT NULL,
  `course_type` varchar(255) DEFAULT NULL,
  `course_purpuse` text DEFAULT NULL,
  `course_about` text DEFAULT NULL,
  `course_slybus` text DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `ins_image` varchar(255) DEFAULT NULL,
  `ins_name` varchar(255) DEFAULT NULL,
  `ins_details` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online__courses`
--

INSERT INTO `online__courses` (`id`, `title`, `regular_fee`, `discount_fee`, `course_type`, `course_purpuse`, `course_about`, `course_slybus`, `video_link`, `ins_image`, `ins_name`, `ins_details`, `image`, `created_at`, `updated_at`) VALUES
(1, 'html', '40', '20', 'Online Course', 'fgggggggg', 'ffffffffffffff', '<p>ffffffffffffffffffffffffffffffffff</p>', 'sssssssssss', '1669826110.JPG', 'ddddddddddddddd', 'ddddddddddddd', '1669826110.JPG', '2022-11-30 10:35:10', '2022-11-30 10:35:10'),
(2, 'css', '88', '10', 'Offline Course', 'ssssssssssssss', 'ssssssssssssssss', '<p>ssssssssssssss</p>', 'dddddddddddddd', '1669826177.jpg', 'sssssssssssssssddddddddddd', 'ddddddddd', '1669826177.jpg', '2022-11-30 10:36:17', '2022-11-30 10:36:17'),
(3, 'java', '88', '10', 'Video Course', 'gggggggggggggg', 'ggggggggg', '<p>gggggggggggggg</p>', 'fffffff', '1669826227.jpg', 'gggggggggg', 'gggggggggg', '1669826227.jpg', '2022-11-30 10:37:07', '2022-11-30 10:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mvouDBSzUVrAOYTw5USrDYRta11w7oDS2w1iAy1E', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVlowaHhQa1U5T3llaU5FZ2cwTVpDQ2FPZUpJSVBGMzE1dkpxcWFkTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QveWFtaW4vcHVibGljL2FkbWluX2NvbnRhY3QiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTY3MjYwODY1Mjt9fQ==', 1672608818);

-- --------------------------------------------------------

--
-- Table structure for table `student__consultings`
--

CREATE TABLE `student__consultings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student__consultings`
--

INSERT INTO `student__consultings` (`id`, `title`, `Position`, `Facebook`, `YouTube`, `Linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mr. B', 'Student Consulting Team', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607267.jpg', '2023-01-01 15:07:47', '2023-01-01 15:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `success__students`
--

CREATE TABLE `success__students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success__students`
--

INSERT INTO `success__students` (`id`, `title`, `Position`, `Facebook`, `YouTube`, `Linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'A', 'teacher', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607541.png', '2023-01-01 15:12:21', '2023-01-01 15:12:21'),
(2, 'B', 'Developer', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607563.jfif', '2023-01-01 15:12:43', '2023-01-01 15:12:43'),
(3, 'C', 'web designer', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607585.jfif', '2023-01-01 15:13:05', '2023-01-01 15:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `support__teams`
--

CREATE TABLE `support__teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support__teams`
--

INSERT INTO `support__teams` (`id`, `title`, `Position`, `Facebook`, `YouTube`, `Linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. C', 'Support Team Derector', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607315.jfif', '2023-01-01 15:08:35', '2023-01-01 15:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `usertype`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'mr x', '0174541710', 'admin@gmail.com', NULL, '1', '$2y$10$yIlSbYmAxbq5E6fftQahaOJmw1D0mYm16U0kj6dOntjGpnftXJ.Le', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'aa', '5555555555', 'aa@gmail.com', NULL, '0', '$2y$10$4XjbgOnDv/cUYJPbyphKseD/hOZYf3SkAbjl7B2A.NRoCsVzFawPy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-30 10:39:25', '2022-11-30 10:39:25'),
(4, 'leo', '00000000000', 'eich@gmail.com', NULL, '0', '$2y$10$Fn.2BlJ0aAZ3UR3L2n/4XeyUXp/pM1wEJmemWys/HsK91CDhYUMQ6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-29 03:47:01', '2022-12-29 03:47:01'),
(5, 'A', '5555555555', 'a@gmail.com', NULL, '0', '$2y$10$lQQqFU9PxcTAM7yoJw/MPONS303e5OAhU47szXf8NAt6SIdLKbmom', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-01 15:26:30', '2023-01-01 15:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `video_courses`
--

CREATE TABLE `video_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `regular_fee` varchar(255) DEFAULT NULL,
  `discount_fee` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web__teams`
--

CREATE TABLE `web__teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `YouTube` varchar(255) DEFAULT NULL,
  `Linkedin` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web__teams`
--

INSERT INTO `web__teams` (`id`, `title`, `Position`, `Facebook`, `YouTube`, `Linkedin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. D', 'Web Team Head', 'https://www.facebook.com/tangila.akter.1694', 'https://www.youtube.com/watch?v=qwvn-heOJVw&list=RDqwvn-heOJVw&start_radio=1', 'https://www.linkedin.com/in/tangila-akter-bbb3b3192/', '1672607352.jfif', '2023-01-01 15:09:12', '2023-01-01 15:09:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__services`
--
ALTER TABLE `admin__services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all__teachers`
--
ALTER TABLE `all__teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `management__teams`
--
ALTER TABLE `management__teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offline_courses`
--
ALTER TABLE `offline_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online__courses`
--
ALTER TABLE `online__courses`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student__consultings`
--
ALTER TABLE `student__consultings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success__students`
--
ALTER TABLE `success__students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support__teams`
--
ALTER TABLE `support__teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_courses`
--
ALTER TABLE `video_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web__teams`
--
ALTER TABLE `web__teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin__services`
--
ALTER TABLE `admin__services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `all__teachers`
--
ALTER TABLE `all__teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management__teams`
--
ALTER TABLE `management__teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `offline_courses`
--
ALTER TABLE `offline_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online__courses`
--
ALTER TABLE `online__courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student__consultings`
--
ALTER TABLE `student__consultings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `success__students`
--
ALTER TABLE `success__students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `support__teams`
--
ALTER TABLE `support__teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_courses`
--
ALTER TABLE `video_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web__teams`
--
ALTER TABLE `web__teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
