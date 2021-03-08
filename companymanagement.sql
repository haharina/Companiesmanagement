-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1,	'Tech Solution',	'techsolution@tech.com',	'',	'https://laraveldaily.com/',	NULL,	NULL);

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Company` int(10) unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employees_company_foreign` (`Company`),
  CONSTRAINT `employees_company_foreign` FOREIGN KEY (`Company`) REFERENCES `companies` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `Company`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1,	'Nurul',	'Abdullah',	1,	'nurul@tech.com',	'0192089076',	NULL,	NULL),
(2,	'NUR FASIHAHARINA',	'ABDULLAH',	1,	'haha97364@gmail.com',	'0191019922',	'2021-03-07 06:23:27',	'2021-03-07 06:23:27'),
(3,	'zoom',	'kiki',	1,	'admin@webpage.com',	'0191019922',	'2021-03-07 20:30:06',	'2021-03-07 20:30:06');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(29,	'2014_10_12_000000_create_users_table',	2),
(30,	'2014_10_12_100000_create_password_resets_table',	2),
(31,	'2021_03_06_080409_create_companies_table',	2),
(33,	'2021_03_06_083240_create_employee_table',	3);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin@admin.com',	NULL,	1,	'$2y$10$abuB5LwsU8B3UpABWtjnAOfJZmmqQ9YtVG9GpcETPB8dldNw.fL7q',	NULL,	'2021-03-06 05:45:34',	'2021-03-06 05:45:34'),
(2,	'User',	'user@employee.com',	NULL,	0,	'$2y$10$P0Ws5Kx2z62RvmokP7foBO4lkRRlh5egdksAFBI9xPBEhPBiPxg/S',	NULL,	'2021-03-06 05:45:34',	'2021-03-06 05:45:34');

-- 2021-03-08 06:47:41
