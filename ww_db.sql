-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2022 at 11:31 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ww_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_pass` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_role_id` int NOT NULL,
  `admin_avatar` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `partner_id` int NOT NULL,
  `partner_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `partner_link` text COLLATE utf8mb4_general_ci NOT NULL,
  `partner_logo` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `product_cat_id` int NOT NULL,
  `product_image` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_cat_id`, `product_image`) VALUES
(1, 'elastic 2', 1, 'assets/img/portpic/elastic2.png'),
(2, 'Twill Tape 1', 2, 'assets/img/portpic/ttap1.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `cat_image` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `cat_short_form` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `cat_name`, `cat_image`, `cat_short_form`) VALUES
(1, 'elastic', '', 'el'),
(2, 'twill tape', '', 'tt'),
(3, 'webbing belt', '', 'wb'),
(4, 'woven elastic', '', 'we'),
(6, 'all labels', '', 'lab'),
(7, 'paper items', '', 'pi'),
(8, 'suspender & belt', '', 'sb'),
(9, 'sewing thread', '', 'st'),
(10, 'drawstring', '', 'draw');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int NOT NULL,
  `reviewer_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `review` text COLLATE utf8mb4_general_ci NOT NULL,
  `reviewer_avatar` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int NOT NULL,
  `slider_folder` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `location` text COLLATE utf8mb4_general_ci NOT NULL,
  `company_phone` int NOT NULL,
  `company_email` varchar(70) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int NOT NULL,
  `team_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `team_designation` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `team_image` text COLLATE utf8mb4_general_ci NOT NULL,
  `team_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `team_email` text COLLATE utf8mb4_general_ci NOT NULL,
  `team_facebook` text COLLATE utf8mb4_general_ci NOT NULL,
  `team_instagram` text COLLATE utf8mb4_general_ci NOT NULL,
  `team_linkedin` text COLLATE utf8mb4_general_ci NOT NULL,
  `team_twitter` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_designation`, `team_image`, `team_description`, `team_email`, `team_facebook`, `team_instagram`, `team_linkedin`, `team_twitter`) VALUES
(1, 'Nasir Uddin Ahmed', 'chief executive officer', 'assets/img/team/received_2185282538400152.jpeg', 'He is the boss', 'nasir@weaveandwrap.com', '', '', '', ''),
(2, 'earshadul bari siddique', 'chief technology officer ', 'assets/img/team/85183441_178752970056249_6088028511862259712_n.jpg', 'he makes things the boss can\'t', 'ebsiddique@weaveandwrap.com', 'https://www.facebook.com/farabi.siddique/', '', 'https://www.linkedin.com/in/farabisiddique/', 'https://twitter.com/farabisiddique'),
(3, 'sazib farayezi', 'chief graphics designer', 'assets/img/team/9cb6a8206806915.5e8c6baeae3f7.jpg', 'he is a pussy', '', '', '', '', ''),
(4, 'Solaiman Sukhon', 'Human Resource Manager', 'assets/img/team/image1616401429436741389.png', 'she just sweeps the streets.', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
