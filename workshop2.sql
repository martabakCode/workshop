-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 05, 2022 at 11:04 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workshop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataevents`
--

CREATE TABLE `dataevents` (
  `id` int(5) UNSIGNED NOT NULL,
  `nim` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `instansi` varchar(120) NOT NULL,
  `status` int(11) NOT NULL,
  `idEvents` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataevents`
--

INSERT INTO `dataevents` (`id`, `nim`, `name`, `email`, `phone`, `instansi`, `status`, `idEvents`, `created_at`, `updated_at`) VALUES
(1, '', 'Rajendra Nohan 2', 'rajendranohan4@gmail.com', '085157573143', 'Udinus', 1, 1, '2022-10-05 11:03:04', NULL),
(2, '', 'Rajendra Nohan', 'rajendranohan4@gmail.com', '085157573144', 'Udacoding', 1, 2, '2022-10-05 10:55:45', NULL),
(3, '', 'Tester', 'rajendra.nohan.9@gmail.com', '0812546552', 'Udinus', 0, 2, '2022-10-05 10:51:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masterevents`
--

CREATE TABLE `masterevents` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masterevents`
--

INSERT INTO `masterevents` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Workshop 2022 HTML - Framework', '2022-10-05 10:30:26', NULL),
(2, 'Workshop 2022 C++ - Github', '2022-10-05 10:30:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(9, '2022-08-29-034346', 'App\\Database\\Migrations\\User', 'default', 'App', 1664965787, 1),
(10, '2022-08-29-034402', 'App\\Database\\Migrations\\Acara', 'default', 'App', 1664965787, 1),
(11, '2022-09-03-041852', 'App\\Database\\Migrations\\DataEventsMigration', 'default', 'App', 1664965787, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rajendra Nohan', 'rajendranohan4@gmail.com', '085157573144', '$2y$10$fl04ufY95X8SWnVDIlnTsukquZcuhflSlKfP9WrcWN0z3Bj.sQWHu', '2022-10-05 10:30:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataevents`
--
ALTER TABLE `dataevents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dataevents_idEvents_foreign` (`idEvents`);

--
-- Indexes for table `masterevents`
--
ALTER TABLE `masterevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataevents`
--
ALTER TABLE `dataevents`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masterevents`
--
ALTER TABLE `masterevents`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataevents`
--
ALTER TABLE `dataevents`
  ADD CONSTRAINT `dataevents_idEvents_foreign` FOREIGN KEY (`idEvents`) REFERENCES `masterevents` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
