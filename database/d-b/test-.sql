-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2023 at 04:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` longtext,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT VISHWAKARMA', '<p><span style=\"background-color: var(--tblr-card-bg); color: var(--tblr-card-color); font-family: var(--tblr-body-font-family); font-size: var(--tblr-body-font-size); letter-spacing: 0px; text-align: var(--tblr-body-text-align);\"><b>Vishwakarma </b></span><span style=\"background-color: var(--tblr-card-bg); color: var(--tblr-card-color); font-family: var(--tblr-body-font-family); font-size: var(--tblr-body-font-size); font-weight: var(--tblr-body-font-weight); letter-spacing: 0px; text-align: var(--tblr-body-text-align);\">Company is attached with many corporate companies with the best of the service of&nbsp; approved contractor empanelment list. At Interior Graphics we understand that you are good at what you do and so are we. Let us help you with the best designs, the best service, and a value-driven approach to everything they do. </span><span style=\"background-color: var(--tblr-card-bg); color: var(--tblr-card-color); font-family: var(--tblr-body-font-family); font-size: var(--tblr-body-font-size); letter-spacing: 0px; text-align: var(--tblr-body-text-align);\"><b>Vishwakarma </b></span><span style=\"background-color: var(--tblr-card-bg); color: var(--tblr-card-color); font-family: var(--tblr-body-font-family); font-size: var(--tblr-body-font-size); font-weight: var(--tblr-body-font-weight); letter-spacing: 0px; text-align: var(--tblr-body-text-align);\">offers self-adhesive wall decals that are easy enough to install yourself and change your drab room into a wow area! We offering a wide range of contemporary solutions to welcome new challenges in the field of architecture, interiors, landscape and planning. We focus lies in providing complete consultancy for all aspects in design from the initial proposal, to computer simulations, working drawings, estimates, time-line schedules, agreements, project management and supervision.</span></p><p><span style=\"background-color: var(--tblr-card-bg); text-align: var(--tblr-body-text-align);\"><b>Vishwakarma </b>has a versatile body of work ranging from architecture and interiors of residences and corporate offices to institutional, retail and hospitality spaces. Our designers strive constantly to create Interior Graphics that stand out with its distinct approach towards design, detailing and the know-how of Ultra Modern technology.<br></span><br></p>', 'admin/img/about_us_image/1602930141.jpg', '2023-11-25 00:46:34', '2023-11-25 13:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `all_flats`
--

CREATE TABLE `all_flats` (
  `id` int NOT NULL,
  `flats_type` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_flats`
--

INSERT INTO `all_flats` (`id`, `flats_type`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, '3bhk', 'admin/img/flats_image/351744588.jpg', NULL, NULL, '1', '2023-11-24 06:06:53', '2023-11-24 23:33:05'),
(5, '4bhk', 'admin/img/flats_image/1315580808.jpg', 'chair', 'chair description place hear.', '1', '2023-11-24 06:14:44', '2023-11-26 04:22:05'),
(6, '2bhk', 'admin/img/flats_image/1752735559.jpg', NULL, NULL, '1', '2023-11-24 06:14:51', '2023-11-24 06:14:51'),
(7, '2bhk', 'admin/img/flats_image/440476585.jpg', NULL, NULL, '1', '2023-11-24 06:14:56', '2023-11-24 06:14:56'),
(8, '2bhk', 'admin/img/flats_image/2105768432.jpg', NULL, NULL, '1', '2023-11-24 06:15:01', '2023-11-24 06:15:01'),
(9, '2bhk', 'admin/img/flats_image/1337215837.jpg', NULL, NULL, '1', '2023-11-24 06:15:08', '2023-11-24 06:15:08'),
(10, '2bhk', 'admin/img/flats_image/1864787594.jpg', NULL, NULL, '1', '2023-11-24 06:15:14', '2023-11-24 06:15:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `global_settings`
--

CREATE TABLE `global_settings` (
  `id` int NOT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `address` longtext,
  `address2` longtext,
  `phone_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `web` longtext,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `working_time` longtext,
  `google_map` longtext,
  `copyright_msg` longtext,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `global_settings`
--

INSERT INTO `global_settings` (`id`, `favicon`, `site_title`, `logo`, `address`, `address2`, `phone_no`, `mobile_no`, `email`, `web`, `facebook`, `instagram`, `youtube`, `working_time`, `google_map`, `copyright_msg`, `created_at`, `updated_at`) VALUES
(1, 'admin/global_setting/logo/1956118175.png', 'Vishwakarma', 'admin/global_setting/logo/1193079307.png', 'Vishwakarma Construction Office No. 218, Nakshatra 7, Bapa Sitaram Chowk, Raiya Road,Rajkot-360005.', 'VISHWAKARMA FURNITURE WORK Shop No. 1, Plot No. 271, Ward 8A, SubashNagar - Gandhidham Dist. Kutch, 370201.', '9099091890', '7600710049', 'vishwakarmafurniturerajkot@gmail.com', 'Vishwakarma', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<p><b>Monday - Friday:</b> 10am - 7pm\r\n</p><p><b>\r\nSaturday:</b> 10am - 2pm\r\n</p><p><b>\r\nSunday:</b> Closed</p>', 'https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d922.8511257158783!2d70.7629167!3d22.3005367!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDE4JzAzLjUiTiA3MMKwNDUnNDYuNSJF!5e0!3m2!1sen!2sin!4v1700808377109!5m2!1sen!2sin', '&lt;iframe src=\"https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d922.8511257158783!2d70.7629167!3d22.3005367!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDE4JzAzLjUiTiA3MMKwNDUnNDYuNSJF!5e0!3m2!1sen!2sin!4v1700808377109!5m2!1sen!2sin\" width=\"100%\" frameborder=\"0\" allowfullscreen loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"&gt;&lt;/iframe&gt;', '2023-11-23 07:11:07', '2023-11-24 02:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome', 'Welcome To Vishwakarma Furniture The Pillar Of Trust.', 'admin/img/home_slider_image/1877980803.jpg', '1', '2023-11-03 05:11:47', '2023-11-18 04:53:22'),
(2, 'Second slider image', 'Second Second Second Second Second Second', 'admin/img/home_slider_image/1579773659.jpg', '1', '2023-11-07 00:44:59', '2023-11-18 04:51:37'),
(3, 'third slider image', 'third third third third third third third third third third third', 'admin/img/home_slider_image/1602269293.png', '1', '2023-11-07 00:58:43', '2023-11-07 01:10:11'),
(4, 'bhautik', 'fourth fourth fourth fourth fourth fourth fourth', 'admin/img/home_slider_image/423549880.jpg', '1', '2023-11-07 01:09:07', '2023-11-26 00:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner_logo`
--

CREATE TABLE `partner_logo` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_general_ci,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `partner_logo`
--

INSERT INTO `partner_logo` (`id`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin/img/partners_logo/1857638147.png', 'https://www.elica.com/', '1', '2023-11-20 01:49:11', '2023-11-22 23:59:57'),
(2, 'admin/img/partners_logo/1977733337.png', 'https://www.asianpaints.com/', '1', '2023-11-20 01:49:21', '2023-11-22 23:57:20'),
(3, 'admin/img/partners_logo/1012713423.png', 'https://www.duroflexworld.com/', '1', '2023-11-20 01:49:35', '2023-11-23 00:07:21'),
(4, 'admin/img/partners_logo/1358324849.png', 'https://www.philips.co.in/', '1', '2023-11-20 01:49:45', '2023-11-23 00:08:42'),
(5, 'admin/img/partners_logo/2021363649.png', 'https://www.centuryply.com/', '1', '2023-11-20 01:50:06', '2023-11-23 00:09:36'),
(6, 'admin/img/partners_logo/624930123.png', 'https://www.merinolaminates.com/en/', '1', '2023-11-20 01:50:17', '2023-11-23 00:10:26'),
(7, 'admin/img/partners_logo/1412998642.png', 'http://www.ebco.in/', '1', '2023-11-22 03:59:51', '2023-11-23 00:10:51'),
(8, 'admin/img/partners_logo/135994824.png', 'https://www.greenply.com/', '1', '2023-11-22 05:13:14', '2023-11-23 00:11:22'),
(9, 'admin/img/partners_logo/1897638160.png', 'https://www.hafeleindia.com/en/', '1', '2023-11-22 05:14:00', '2023-11-23 00:11:59'),
(10, 'admin/img/partners_logo/105353169.png', 'https://www.amazon.in/stores/DDecorLiveBeautiful/Homepage/page/C844D83B-84F7-45C6-9F91-56EACFD8CE38', '1', '2023-11-22 05:14:11', '2023-11-23 00:13:58'),
(11, 'admin/img/partners_logo/1080620357.png', 'https://web.hettich.com/', '1', '2023-11-22 05:14:26', '2023-11-23 00:14:55'),
(12, 'admin/img/partners_logo/1674833033.png', NULL, '1', '2023-11-22 05:14:36', '2023-11-22 05:14:36'),
(13, 'admin/img/partners_logo/1660816722.png', 'https://www.reposefurniture.com/', '1', '2023-11-22 05:14:48', '2023-11-23 00:16:26'),
(14, 'admin/img/partners_logo/1718152645.png', NULL, '1', '2023-11-22 05:15:04', '2023-11-22 05:15:04');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'chair', 'wall design', 'admin/img/portfolio_image/578904417.jpg', '1', '2023-12-03 06:21:29', '2023-12-03 06:21:29'),
(2, 'APARTMENT', 'APARTMENT APARTMENT', 'admin/img/portfolio_image/1653593961.jpg', '1', '2023-12-03 06:25:28', '2023-12-03 06:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recent_work`
--

CREATE TABLE `recent_work` (
  `id` int NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_work`
--

INSERT INTO `recent_work` (`id`, `category`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'commercial', 'admin/img/recent_work_image/2025252983.jfif', '1', '2023-11-03 07:02:08', '2023-11-24 04:25:29'),
(2, 'commercial', 'admin/img/recent_work_image/482445004.jfif', '1', '2023-11-03 07:03:14', '2023-11-18 04:19:33'),
(3, 'commercial', 'admin/img/recent_work_image/1708582100.jfif', '1', '2023-11-03 07:03:36', '2023-11-18 04:24:59'),
(4, 'commercial', 'admin/img/recent_work_image/417254990.jfif', '1', '2023-11-03 07:04:00', '2023-11-18 04:25:55'),
(5, 'office', 'admin/img/recent_work_image/1294677295.jfif', '1', '2023-11-03 07:04:43', '2023-11-25 14:16:12'),
(6, 'office', 'admin/img/recent_work_image/1747518432.jfif', '1', '2023-11-03 07:05:05', '2023-11-25 14:16:31'),
(7, 'commercial', 'admin/img/recent_work_image/122858166.jfif', '1', '2023-11-03 07:05:22', '2023-11-18 04:29:22'),
(8, 'residential', 'admin/img/recent_work_image/861793034.jfif', '1', '2023-11-03 07:05:40', '2023-11-25 14:16:20'),
(9, 'commercial', 'admin/img/recent_work_image/231181159.jfif', '1', '2023-11-18 04:42:16', '2023-11-18 04:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'TURNKEY PROJECTS', 'turnkey-projects', 'According to the Oxford Dictionary, the adjective ‘turnkey’ refers to something that is ‘complete and ready to use right away.’ The notion of a turnkey project stays the same when applied to project development. A turnkey project is one that is conceived, constructed, and equipped with all necessary facilities under the terms of a contract by a corporation. When it is ready to start doing business, it is sold to a buyer. Obviously, the firm in charge of constructing a turnkey project does so for the agreed-upon price. The company’s turnkey project work includes design, manufacturing, installation, aftermarket support, and technical service.', '1', '2023-11-07 02:12:32', '2023-11-08 06:05:51'),
(2, 'INTERIOR EXECUTION', 'interior-execution', 'The first step in any interior execution is conceptualization. This stage involves understanding your requirements, preferences, and the intended purpose of the space. It is crucial to communicate your vision clearly to the design team, allowing them to develop a comprehensive understanding of your expectations.', '1', '2023-11-07 02:13:40', '2023-11-08 06:06:03'),
(3, 'INTERIOR DESIGNING', 'interior-designing', 'An Interior Designer creates practical and attractive spaces. They assess room needs, plan decor and furniture based on size and use, draft designs, and estimate costs. They also make sure to follow laws and rules for building plans and inspections.', '1', '2023-11-07 02:15:09', '2023-11-08 06:06:09'),
(4, 'PROJECT MANAGEMENT', 'project-management', 'Definition. Project management is the application of processes, methods, skills, knowledge and experience to achieve specific project objectives according to the project acceptance criteria within agreed parameters. Project management has final deliverables that are constrained to a finite timescale and budget.', '1', '2023-11-07 02:15:39', '2023-11-08 06:06:18'),
(7, 'CIVIL WORK', 'civil-work', 'ALL TYPE WORK', '1', '2023-11-15 09:51:08', '2023-11-24 04:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$.ZmJJKGaWyicrymJat1k.OmcUCDjvy88hTCEeHVj1vyY5J6rr6Pi2', NULL, '2023-11-02 00:02:50', '2023-11-06 23:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `work_solution`
--

CREATE TABLE `work_solution` (
  `id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` longtext NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_solution`
--

INSERT INTO `work_solution` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin/img/work_solution_image/797102554.png', 'RESIDENTIAL DESIGN', 'We Provide Best Residencial Designing Services In Rajkot', '1', '2023-11-03 06:18:16', '2023-11-18 05:06:36'),
(2, 'admin/img/work_solution_image/972811365.png', 'CORPORATES OFFICES DESIGN', 'We Provide Best Corporates Offices Designing Services In Rajkot', '1', '2023-11-03 06:21:15', '2023-11-03 06:21:15'),
(3, 'admin/img/work_solution_image/715698272.png', 'BANKING SECTOR DESIGN', 'We Provide Best Banking Sector Designing Services In Rajkot', '1', '2023-11-03 06:22:17', '2023-11-03 06:22:17'),
(4, 'admin/img/work_solution_image/704350747.png', 'HOSPITAL SECTOR DESIGN', 'We Provide Best Hospital Sector Designing Services In Rajkot', '1', '2023-11-03 06:27:20', '2023-11-03 06:27:20'),
(5, 'admin/img/work_solution_image/1922126814.png', 'INSTITUTION DESIGNE', 'We Provide Best Institution Designing Services In Rajkot', '1', '2023-11-03 06:28:14', '2023-11-03 06:28:14'),
(6, 'admin/img/work_solution_image/228478517.png', 'GOVERMENT SECTOR DESIGN', 'We Provide Best Gov. Sector Designing Services In Rajkot', '1', '2023-11-03 06:29:08', '2023-11-03 06:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_flats`
--
ALTER TABLE `all_flats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `global_settings`
--
ALTER TABLE `global_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_logo`
--
ALTER TABLE `partner_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_work`
--
ALTER TABLE `recent_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_solution`
--
ALTER TABLE `work_solution`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_flats`
--
ALTER TABLE `all_flats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `global_settings`
--
ALTER TABLE `global_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner_logo`
--
ALTER TABLE `partner_logo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `practice`
--
ALTER TABLE `practice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_work`
--
ALTER TABLE `recent_work`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `work_solution`
--
ALTER TABLE `work_solution`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
