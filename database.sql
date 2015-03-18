-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2015 at 04:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amit`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

CREATE TABLE IF NOT EXISTS `assigned_roles` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `data` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `data`, `created_at`, `updated_at`) VALUES
(1, 'Sementra Banner', '%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%20standalone%3D%22no%22%20%3F%3E%3C!DOCTYPE%20svg%20PUBLIC%20%22-%2F%2FW3C%2F%2FDTD%20SVG%201.1%2F%2FEN%22%20%22http%3A%2F%2Fwww.w3.org%2FGraphics%2FSVG%2F1.1%2FDTD%2Fsvg11.dtd%22%3E%0A%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20width%3D%22417%22%20height%3D%22400%22%20xml%3Aspace%3D%22preserve%22%3E%3Cdesc%3ECreated%20with%20Fabric.js%201.4.13%3C%2Fdesc%3E%3Cdefs%3E%3C%2Fdefs%3E%3Crect%20x%3D%22-25%22%20y%3D%22-25%22%20rx%3D%220%22%20ry%3D%220%22%20width%3D%2250%22%20height%3D%2250%22%20style%3D%22stroke%3A%20none%3B%20stroke-width%3A%201%3B%20stroke-dasharray%3A%20%3B%20stroke-linecap%3A%20butt%3B%20stroke-linejoin%3A%20miter%3B%20stroke-miterlimit%3A%2010%3B%20fill%3A%20%23c2272d%3B%20fill-rule%3A%20nonzero%3B%20opacity%3A%200.8%3B%22%20transform%3D%22translate(225%2055)%22%2F%3E%0A%3Ccircle%20cx%3D%220%22%20cy%3D%220%22%20r%3D%2250%22%20style%3D%22stroke%3A%20none%3B%20stroke-width%3A%201%3B%20stroke-dasharray%3A%20%3B%20stroke-linecap%3A%20butt%3B%20stroke-linejoin%3A%20miter%3B%20stroke-miterlimit%3A%2010%3B%20fill%3A%20%23c2272d%3B%20fill-rule%3A%20nonzero%3B%20opacity%3A%200.8%3B%22%20transform%3D%22translate(112%20165)%20%22%2F%3E%0A%3Cpolygon%20points%3D%2220%2C25%20100%2C75%2050%2C-75%20-100%2C0%20%22%20style%3D%22stroke%3A%20none%3B%20stroke-width%3A%201%3B%20stroke-dasharray%3A%20%3B%20stroke-linecap%3A%20butt%3B%20stroke-linejoin%3A%20miter%3B%20stroke-miterlimit%3A%2010%3B%20fill%3A%20%23c2272d%3B%20fill-rule%3A%20nonzero%3B%20opacity%3A%201%3B%22%20transform%3D%22translate(240%20305)%20%22%2F%3E%0A%3C%2Fsvg%3E', '2015-03-16 09:35:03', '2015-03-16 09:35:03'),
(2, 'Sementra Banner', '%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%20standalone%3D%22no%22%20%3F%3E%3C!DOCTYPE%20svg%20PUBLIC%20%22-%2F%2FW3C%2F%2FDTD%20SVG%201.1%2F%2FEN%22%20%22http%3A%2F%2Fwww.w3.org%2FGraphics%2FSVG%2F1.1%2FDTD%2Fsvg11.dtd%22%3E%0A%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20width%3D%22417%22%20height%3D%22400%22%20xml%3Aspace%3D%22preserve%22%3E%3Cdesc%3ECreated%20with%20Fabric.js%201.4.13%3C%2Fdesc%3E%3Cdefs%3E%3C%2Fdefs%3E%3Crect%20x%3D%22-25%22%20y%3D%22-25%22%20rx%3D%220%22%20ry%3D%220%22%20width%3D%2250%22%20height%3D%2250%22%20style%3D%22stroke%3A%20none%3B%20stroke-width%3A%201%3B%20stroke-dasharray%3A%20%3B%20stroke-linecap%3A%20butt%3B%20stroke-linejoin%3A%20miter%3B%20stroke-miterlimit%3A%2010%3B%20fill%3A%20%23c2272d%3B%20fill-rule%3A%20nonzero%3B%20opacity%3A%200.8%3B%22%20transform%3D%22translate(225%2055)%22%2F%3E%0A%3Ccircle%20cx%3D%220%22%20cy%3D%220%22%20r%3D%2250%22%20style%3D%22stroke%3A%20none%3B%20stroke-width%3A%201%3B%20stroke-dasharray%3A%20%3B%20stroke-linecap%3A%20butt%3B%20stroke-linejoin%3A%20miter%3B%20stroke-miterlimit%3A%2010%3B%20fill%3A%20%23c2272d%3B%20fill-rule%3A%20nonzero%3B%20opacity%3A%200.8%3B%22%20transform%3D%22translate(220%20150)%20%22%2F%3E%0A%3Cpolygon%20points%3D%2220%2C25%20100%2C75%2050%2C-75%20-100%2C0%20%22%20style%3D%22stroke%3A%20none%3B%20stroke-width%3A%201%3B%20stroke-dasharray%3A%20%3B%20stroke-linecap%3A%20butt%3B%20stroke-linejoin%3A%20miter%3B%20stroke-miterlimit%3A%2010%3B%20fill%3A%20%23c2272d%3B%20fill-rule%3A%20nonzero%3B%20opacity%3A%201%3B%22%20transform%3D%22translate(240%20305)%20%22%2F%3E%0A%3C%2Fsvg%3E', '2015-03-16 10:06:26', '2015-03-16 10:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
`id` int(10) unsigned NOT NULL,
  `position` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lang_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `user_id_edited` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `position`, `name`, `lang_code`, `icon`, `user_id`, `user_id_edited`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'English', 'en', 'icon_flag_gb.gif', NULL, NULL, '2015-03-04 09:18:05', '2015-03-04 09:18:05', NULL),
(2, NULL, 'Српски', 'sr', 'icon_flag_sr.gif', NULL, NULL, '2015-03-04 09:18:05', '2015-03-04 09:18:05', NULL),
(3, NULL, 'Bosanski', 'bs', 'icon_flag_bs.gif', NULL, NULL, '2015-03-04 09:18:06', '2015-03-04 09:18:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'manage_language', 'Manage languages', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(2, 'manage_news_category', 'Manage news category', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(3, 'manage_news', 'Manage news', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(4, 'manage_video_album', 'Manage video album', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(5, 'manage_video', 'Manage video', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(6, 'manage_photo_album', 'Manage photo album', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(7, 'manage_photo', 'Manage photo', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(8, 'manage_users', 'Manage users', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(9, 'manage_roles', 'Manage roles', 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
`id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(2, 2, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(3, 3, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(4, 4, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(5, 5, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(6, 6, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(7, 7, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(8, 8, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05'),
(9, 9, 1, '2015-03-04 09:18:05', '2015-03-04 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '2015-03-04 09:18:04', '2015-03-04 09:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirmation_code`, `remember_token`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@admin.com', '$2y$10$f6LiHySEjOamxwWY.u2Zaucrom/B4hSlLMmP3Uc8Ut.hZqewNDcp2', '0fe89a7ee411e56c60ec747bf0ce5118', NULL, 1, '2015-03-04 09:18:04', '2015-03-04 09:18:04'),
(2, 'Test User', 'user@user.com', '$2y$10$vAnuD260sJKHkHAkAdaRBO5Qa23erpEeSEGMewaVjrO7iUrGg.6ma', '02acad1acb1ef9679697ecd2f5814af8', NULL, 1, '2015-03-04 09:18:04', '2015-03-04 09:18:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
 ADD PRIMARY KEY (`id`), ADD KEY `assigned_roles_user_id_foreign` (`user_id`), ADD KEY `assigned_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `language_name_unique` (`name`), ADD UNIQUE KEY `language_lang_code_unique` (`lang_code`), ADD KEY `language_user_id_foreign` (`user_id`), ADD KEY `language_user_id_edited_foreign` (`user_id_edited`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
 ADD PRIMARY KEY (`id`), ADD KEY `permission_role_permission_id_foreign` (`permission_id`), ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
ADD CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `language`
--
ALTER TABLE `language`
ADD CONSTRAINT `language_user_id_edited_foreign` FOREIGN KEY (`user_id_edited`) REFERENCES `users` (`id`) ON DELETE SET NULL,
ADD CONSTRAINT `language_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
