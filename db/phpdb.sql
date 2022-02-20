-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 12:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` text DEFAULT NULL,
  `photo_path` varchar(256) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `photo_path`, `created_date`) VALUES
(8, 'Removing features', '<h2>The official builds come with all the features included in the distribution package enabled by default. They are defined as plugins for CKEditor.</h2><p><strong>In some cases, you may need to have different editor setups in your application, all based on the same build. For that purpose, you need to control the plugins available in the editor at runtime.</strong></p><p><strong>In the example below Heading and Link plugins are removed:</strong></p>', NULL, '2022-02-15 10:18:10'),
(12, 'sdfsadfa', 'asdfsadfsadfsa', NULL, '2022-02-16 11:01:23'),
(13, 'qwrqwerqw', 'erfqwerfq', NULL, '2022-02-16 11:07:51'),
(14, 'Song', '<blockquote><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=gPB40wmxY2s\"></oembed></figure></blockquote><p>&nbsp;</p>', NULL, '2022-02-16 16:14:20'),
(15, 'test title', '<p>adfasfasf</p>', 'admin.png', '2022-02-17 10:31:02'),
(16, 'एमसीसी जबर्जस्ती बढाए विपक्षमा मतदान', '<p><a href=\"http://jagdambacement.com/\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2022/01/1230x110.gif\" alt=\"\"></a></p><p><a href=\"https://www.ncell.axiata.com/en/individual/offers/non-stop-time-pack?utm_source=Online_khabar&amp;utm_medium=CPM&amp;utm_campaign=non-stop-time-pack\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2022/02/Onlinekhabar_15min_Rs.gif\" alt=\"\"></a></p><p><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2021/08/CPN-United-socialist-party-madhav-kumar-nepal-5-1024x683.jpg\"></p><p><a href=\"https://www.saurabhgroup.com/\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2022/02/sarbottam-900x100-1.jpg\" alt=\"\"></a></p><p>५ फागुन, काठमाडौं । मधेश प्रदेशका जिल्लाहरुको आवासीय भ्रमण सकेर अध्यक्ष माधवकुमार नेपाल काठमाडौं फर्किएपछि नेकपा एकीकृत समाजवादीको सचिवालय बैठक बसेको छ । बुधबार साँझदेखि झण्डै पाँच घण्टा चलेको बैठकले अमेरिकी सहयोग परियोजना एमसीसी, सत्ता गठबन्धन र आगामी चुनाव केन्द्रित छलफल गरेको छ ।</p><p>सचिवालय बैठकले निकालेको निष्कर्षलाई शनिबार बस्ने स्थायी कमिटीबाट अन्तिम रूप दिने एकीकृत समाजवादीको तयारी छ । ‘हतार, हतपत र उत्ताउलो पारामा जाँदैनौं । स्थायी कमिटी बैठकबाट मुलुक, व्यवस्था र संविधान अनुकुल निर्णय गर्छौं’, उपमहासचिव गंगालाल तुलाधार भन्छन् ।</p><p><a href=\"https://www.facebook.com/Shauryacements\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2022/02/Shaurya-Cement_250x250_3-1.gif\" alt=\"\"></a></p><p><a href=\"https://globalimebank.com/\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2021/11/Hybrid-Bachat-khata_250x2501.gif\" alt=\"\"></a></p><p><a href=\"https://bit.ly/3opwTsb\"><img src=\"https://www.onlinekhabar.com/wp-content/uploads/2022/01/250X250.gif\" alt=\"\"></a></p><p>सत्ता साझेदार नेपाली कांग्रेसले मंगलबार र माओवादी केन्द्रले बुधबार एमसीसीबारे निर्णय गरेपछि एकीकृत समाजवादी दबाबमा परेको थियो । ‘हामी गठबन्धन र एमसीसीबारे सचेत छौं । अध्ययन र छलफलबाट उपयुक्त निर्णय पनि लिन्छौं’, तुलाधर भन्छन् ।</p><p>विशेषगरी एमसीसीबारे पार्टीको आधिकारिक धारणा सार्वजनिक गर्न नेताहरूको दबाब बढेपछि बुधबार निकै लामो बैठक चलेको थियो । बैठकले एमसीसी, गठबन्धन र आगामी चुनावबारे मोटामोटी निष्कर्ष समेत निकालेको एक नेता बताउँछन् ।</p>', '', '2022-02-17 10:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(28, 'admin', '202cb962ac59075b964b07152d234b70'),
(32, 'user', '6ad14ba9986e3615423dfca256d04e3f'),
(34, 'bxcvbxcvb', '5d41402abc4b2a76b9719d911017c592');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titelunique` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
