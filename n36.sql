-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 05:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

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
(2, 'एग्रीकल्चर', 'agriculture', 'category/agriculture', 0, 1, 1),
(3, 'राजनीतिक', 'political', 'category/political', 0, 2, 1),
(4, 'जुर्म', 'crime', 'category/crime', 0, 3, 1),
(5, 'जॉब', 'job', 'category/job', 0, 4, 1),
(6, 'शिक्षा', 'education', 'category/education', 0, 5, 1),
(7, 'देश', 'national', 'category/national', 0, 6, 1);

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
(1, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'test english', 'test-english-1', '<p>tesing news content&nbsp;</p>', 'news meta', 'news keyword', 'news desc', 1, '2020-10-25 07:59:46', NULL, 1, 1),
(2, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'politics English', 'politics-English-2', '<p>HEllo news content</p>', 'news meta', 'news keyword', 'news desc', 1, '2020-10-25 08:16:27', NULL, 1, 1),
(3, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'news english', 'news-english-3', '<p>news content</p>', 'title', 'keyword', 'desc', 0, '2020-10-25 08:28:41', NULL, 1, 1),
(4, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'mdww', 'mdww-4', '<p>news title</p>', 'asldkfmslqsdf', 'sdfsdf', 'sdfsdf', 1, '2020-10-25 08:36:08', NULL, 1, 1),
(5, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'test english', 'test-english-1', '<p>tesing news content&nbsp;</p>', 'news meta', 'news keyword', 'news desc', 1, '2020-10-25 07:59:46', NULL, 1, 1),
(6, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'politics English', 'politics-English-2', '<p>HEllo news content</p>', 'news meta', 'news keyword', 'news desc', 1, '2020-10-25 08:16:27', NULL, 1, 1),
(7, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'news english', 'news-english-3', '<p>news content</p>', 'title', 'keyword', 'desc', 0, '2020-10-25 08:28:41', NULL, 1, 1),
(8, 'महाराष्ट्र में उद्धव सरकार ने राजनीतिक, सामाजिक और धार्मिक सभाओं पर प्रतिबंध लगाया हुआ है, जिसके तहत कोरोना के सुरक्षा प्रोटोकॉल को ध्यान में रखते हुए दशहरा रैली ऑडिटोरियम में आयोजित करने का फैसला किया गया था.', 'mdww', 'mdww-4', '<p>news title</p>', 'asldkfmslqsdf', 'sdfsdf', 'sdfsdf', 1, '2020-10-25 08:36:08', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `news_id`, `category_id`, `status`) VALUES
(1, 1, 2, 1),
(2, 1, 4, 1),
(3, 2, 3, 1),
(4, 3, 3, 1),
(5, 4, 3, 1);

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
(1, 1, 'image', '1603609186_banner4.png', 1),
(2, 2, 'image', '1603610187_sidebar-1.png', 1),
(3, 4, 'image', '1603611369_404.png', 1),
(4, 6, 'image', '1603609186_banner4.png', 1),
(5, 3, 'image', '1603609186_banner4.png', 1),
(6, 5, 'image', '1603610187_sidebar-1.png', 1),
(7, 7, 'image', '1603611369_404.png', 1),
(8, 8, 'image', '1603609186_banner4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_related`
--

CREATE TABLE `news_related` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `related_news_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `news_media`
--
ALTER TABLE `news_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `news_related`
--
ALTER TABLE `news_related`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `related_news_id` (`related_news_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_media`
--
ALTER TABLE `news_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_related`
--
ALTER TABLE `news_related`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD CONSTRAINT `news_categories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `news_categories_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
