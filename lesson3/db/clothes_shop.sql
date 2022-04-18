-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 18, 2022 at 07:19 PM
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
-- Database: `clothes_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `user_id`, `item_id`) VALUES
(1, 13, 2),
(7, 14, 2),
(8, 14, 5),
(10, 13, 1),
(12, 13, 3),
(13, 13, 7),
(14, 13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `item_id`, `name`) VALUES
(1, 1, 'card2.png'),
(2, 2, 'card3.png'),
(3, 3, 'card6.png'),
(4, 4, 'card1.png'),
(5, 5, 'card4.png'),
(6, 6, 'card5.png'),
(7, 7, 'card9.png'),
(8, 8, 'card7.png'),
(9, 9, 'card8.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text,
  `description` text,
  `price` text,
  `collection` text,
  `options` text,
  `views` int(11) NOT NULL DEFAULT '0',
  `preview_photo_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `collection`, `options`, `views`, `preview_photo_name`) VALUES
(1, 'item1', 'simple description', '$97.53', 'women', NULL, 17, 'card2.png'),
(2, 'item2', 'simple description2', '$52.87', 'man', NULL, 114, 'card3.png'),
(3, 'item3', 'simple description3', '$12.00', 'women', NULL, 14, 'card6.png'),
(4, 'item4', 'simple description4', '$43.00', 'all', NULL, 2, 'card1.png'),
(5, 'item5', 'simple description5', '$53.00', 'all', NULL, 31, 'card4.png'),
(6, 'item6', 'simple description6', '$26.00', 'all', NULL, 9, 'card5.png'),
(7, 'item7', 'simple description7', '$72.50', 'all', NULL, 2, 'card9.png'),
(8, 'item8', 'simple description8', '$12.70', 'all', NULL, 3, 'card7.png'),
(9, 'item9', 'simple description9', '$48.00', 'all', NULL, 1, 'card8.png'),
(10, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(11, 'sdsd', 'adsd', '123', NULL, NULL, 0, NULL),
(12, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(13, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(14, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(15, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(16, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(17, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(18, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(19, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(20, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(21, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(22, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(23, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(24, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(25, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(26, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(27, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(28, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(29, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(30, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(31, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(32, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(33, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(34, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(35, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(36, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(37, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(38, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(39, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(40, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(41, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(42, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(43, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(44, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(45, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL),
(46, 'кроссовки', 'КРОССОВКИ FORUM LOW CITY', '125', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `item_id`, `name`, `text`, `time`) VALUES
(1, 2, 'toshamilgis@gmail.com', 'first order', '2022-03-27 19:25:05'),
(2, 2, 'toshamilgis@gmail.com', 'Second order', '2022-03-27 19:39:09'),
(3, 2, 'toshamilval@yandex.ru', 'Third order', '2022-03-27 19:48:11'),
(4, 5, 'toshamilgis@gmail.com', 'item5 первый отзыв', '2022-03-27 19:51:06'),
(5, 2, 'toshamilgis@gmail.com', 'feedback', '2022-03-27 19:51:59'),
(6, 3, 'almazShamilArtem@gmail.com', 'Отлично', '2022-03-27 20:05:03'),
(7, 2, 'toshamilgis@gmail.com', 'jjjj', '2022-04-01 19:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text,
  `surname` text,
  `gender` varchar(6) DEFAULT NULL,
  `login` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `login`, `password`) VALUES
(13, 'Шамиль', 'Валиахметов', 'male', 'toshamilgis@gmail.com', '$2y$10$O1xPtFH1TpHgwA5Z/y7tSe222mcMsLQs4L30KZRvgaM5AJsSicmB6'),
(14, 'Шамиль', 'Валиахметов', '', 'toshamilval@yandex.ru', '$2y$10$Np9mFRGWHZ6sB7ctK2JhIe4LBJRGZJt84Bwr4DvFoxoHtvq/k99X.'),
(15, NULL, NULL, NULL, 'Admin', '12345'),
(21, NULL, NULL, NULL, 'Admin', '12345'),
(22, NULL, NULL, NULL, 'Admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_id_basket` (`item_id`),
  ADD KEY `fk_user_id_basket` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_id` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_id_from_reviews` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `fk_item_id_basket` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),
  ADD CONSTRAINT `fk_user_id_basket` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_item_id_from_reviews` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
