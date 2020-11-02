-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2020 at 12:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n36`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name_hindi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_english` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `parent_Id` int(11) DEFAULT 0,
  `display_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name_hindi`, `name_english`, `link`, `parent_Id`, `display_order`, `status`) VALUES
(1, 'होम', 'home', '#', 0, 0, 1),
(2, 'एग्रीकल्चर', 'agriculture', 'category/agriculture', 0, 1, 0),
(3, 'राजनीतिक', 'political', 'category/political', 0, 2, 0),
(4, 'जुर्म', 'crime', 'category/crime', 0, 3, 0),
(5, 'जॉब', 'job', 'category/job', 0, 4, 0),
(6, 'शिक्षा', 'education', 'category/education', 0, 5, 0),
(7, 'देश', 'national', 'category/national', 0, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_hindi` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `title_english` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_hindi`, `title_english`, `slug`, `content`, `meta_title`, `meta_keyword`, `meta_desc`, `publish`, `created_at`, `published_at`, `created_by`, `status`) VALUES
(1, 'कांग्रेस बोली-CM शिवराज सरकारी खर्चे पर कर रहे बीजेपी का प्रचार, चुनाव आयोग से की शिकायत', 'news title in hindi', 'news-title-in-hindi-1', '<p>test news HEllo how are you i am fine. </p>', 'test news', 'test news', 'test news', 1, '2020-10-28 19:09:06', '2020-10-28 19:09:06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_media`
--

CREATE TABLE `news_media` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `type` enum('image','video','audio') COLLATE utf8_unicode_ci NOT NULL,
  `media_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_media`
--

INSERT INTO `news_media` (`id`, `news_id`, `type`, `media_name`, `status`) VALUES
(1, 1, 'image', '1603892346_404.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`id`, `news_id`, `type`, `status`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`, `display_name`, `status`) VALUES
(1, 'latest_news', 'Latest News', 1),
(2, 'trending_news', 'Trending News', 1),
(3, 'today_story', 'Today Story', 1),
(4, 'feature_news', 'Feature News', 1),
(5, 'entertainment_news', 'Entertainment News', 1),
(6, 'sport_news', 'Sport News', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name_e` varchar(200) NOT NULL,
  `name_h` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(500) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_e`, `name_h`, `profile_pic`, `identity`, `password`, `status`) VALUES
(1, 'News36 desk', 'News36 desk', 'as', 'tara', 'sinha', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_media`
--
ALTER TABLE `news_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_media`
--
ALTER TABLE `news_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
