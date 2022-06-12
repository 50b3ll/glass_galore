-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 12:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `item_id` varchar(4) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `feeback_content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `subject` varchar(60) CHARACTER SET latin1 NOT NULL,
  `message` text CHARACTER SET latin1 NOT NULL,
  `post_date` datetime NOT NULL,
  `fk_productid` int(4) DEFAULT NULL,
  `pooooooooooo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`post_id`, `first_name`, `last_name`, `subject`, `message`, `post_date`, `fk_productid`, `pooooooooooo`) VALUES
(1, 'a', 'a', 'superstar', 'excellent mix', '2021-03-24 15:43:32', 1, 0),
(2, 'a', 'a', '1 subject', '1 message', '2021-03-24 15:58:08', 2, 0),
(3, 'a', 'a', 'm subject', 'm message', '2021-03-24 16:24:29', 4, 0),
(4, 'a', 'a', 'gsubject', 'gmessage', '2021-03-24 16:38:51', 6, 0),
(5, 'a', 'a', 'not a product subject', 'not a product message', '2021-03-25 09:30:51', NULL, 0),
(6, 'a', 'a', 'whatever not a prod subject', 'whatever not a prod message', '2021-03-25 10:19:54', NULL, 0),
(7, 'a', 'a', 'yes subject', 'yes message', '2021-04-11 16:27:04', NULL, 0),
(8, 'a', 'a', 'this is a subject title..........................', 'this is to look at what a really long message looks like in the format it is long long long long ewlHFVOUYEWGO8eyfgoiwEGFIGYewifoiweVFLCIbioebgfoiwUGFIUEbfiweubcfiubewIUFEBIUWGFIUwgiuf', '2021-04-14 11:04:59', NULL, 0),
(9, 'a', 'a', 'this is a review for Ken Rosenfeld', 'Ken Rosenfeld rocks!', '2021-04-29 14:09:59', 1, 0),
(10, 'James', 'James', 'this is a post', 'here is the content', '2021-05-01 14:29:22', NULL, 0),
(11, 'James', 'James', 'John Deacons', 'Lovely item', '2021-05-01 14:31:47', 2, 0),
(12, 'John', 'Smith', 'Caithness', 'review', '2021-05-01 15:42:37', 15, 0),
(13, 'John', 'Smith', 'this is a message', 'message here', '2021-05-01 15:44:10', NULL, 0),
(14, 'Mary', 'Smith', 'Ken Rosenfeld', 'review', '2021-05-01 16:18:51', 1, 0),
(15, 'Mary', 'Smith', 'hello', 'hello', '2021-05-01 16:20:24', NULL, 0),
(16, 'Jane', 'Smith', 'review', 'review', '2021-05-01 17:04:50', 6, 0),
(17, 'Jane', 'Smith', 'message', 'message', '2021-05-01 17:07:08', NULL, 0),
(18, 'a', 'a', 'trsjrst', 'tatartjatrjrsjy', '2022-03-19 14:24:33', NULL, 0),
(19, 'a', 'a', 'guilgiu', 'gui;liug;', '2022-03-19 14:59:53', NULL, 0),
(20, 'a', 'a', 'hvlhlh', 'tckytxkytxkf', '2022-03-19 15:32:16', NULL, 0),
(21, 'a', 'a', 'erheqrh', 'e5qhqehq', '2022-03-19 15:33:32', NULL, 0),
(22, 'a', 'a', 'wtr', 'wreg', '2022-03-19 15:35:27', NULL, 0),
(23, 'a', 'a', 'eytjeytj', 'teyetyej', '2022-03-19 15:36:29', NULL, 0),
(24, 'a', 'a', 'wwwwwwwwwwwwwwwwwwwww', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwww', '2022-03-19 15:37:08', NULL, 0),
(25, 'a', 'a', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-03-19 15:38:46', NULL, 0),
(26, 'a', 'a', 'vlihyvlihv', 'yvlvylvl', '2022-03-19 15:41:10', NULL, 0),
(27, 'a', 'a', 'sva', 'sasva', '2022-03-19 15:44:28', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum2`
--

CREATE TABLE `forum2` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `maker_name` varchar(60) CHARACTER SET latin1 NOT NULL,
  `style` varchar(100) NOT NULL,
  `article_img` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `era` int(15) NOT NULL,
  `intro` text CHARACTER SET latin1 NOT NULL,
  `description` varchar(60) NOT NULL,
  `history` varchar(200) NOT NULL,
  `prices_info` varchar(200) NOT NULL,
  `edited_by` int(20) NOT NULL,
  `post_date` datetime NOT NULL,
  `fk_productid` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum2`
--

INSERT INTO `forum2` (`post_id`, `first_name`, `last_name`, `user_id`, `username`, `maker_name`, `style`, `article_img`, `type`, `era`, `intro`, `description`, `history`, `prices_info`, `edited_by`, `post_date`, `fk_productid`) VALUES
(1, 'a', 'a', 0, '', 'superstar', '', '', '', 0, 'excellent mix', '', '', '', 0, '2021-03-24 15:43:32', 1),
(2, 'a', 'a', 0, '', '1 subject', '', '', '', 0, '1 message', '', '', '', 0, '2021-03-24 15:58:08', 2),
(3, 'a', 'a', 0, '', 'm subject', '', '', '', 0, 'm message', '', '', '', 0, '2021-03-24 16:24:29', 4),
(4, 'a', 'a', 0, '', 'gsubject', '', '', '', 0, 'gmessage', '', '', '', 0, '2021-03-24 16:38:51', 6),
(5, 'a', 'a', 0, '', 'not a product subject', '', '', '', 0, 'not a product message', '', '', '', 0, '2021-03-25 09:30:51', NULL),
(6, 'a', 'a', 0, '', 'whatever not a prod subject', '', '', '', 0, 'whatever not a prod message', '', '', '', 0, '2021-03-25 10:19:54', NULL),
(7, 'a', 'a', 0, '', 'yes subject', '', '', '', 0, 'yes message', '', '', '', 0, '2021-04-11 16:27:04', NULL),
(8, 'a', 'a', 0, '', 'this is a subject title..........................', '', '', '', 0, 'this is to look at what a really long message looks like in the format it is long long long long ewlHFVOUYEWGO8eyfgoiwEGFIGYewifoiweVFLCIbioebgfoiwUGFIUEbfiweubcfiubewIUFEBIUWGFIUwgiuf', '', '', '', 0, '2021-04-14 11:04:59', NULL),
(9, 'a', 'a', 0, '', 'this is a review for Ken Rosenfeld', '', '', '', 0, 'Ken Rosenfeld rocks!', '', '', '', 0, '2021-04-29 14:09:59', 1),
(10, 'James', 'James', 0, '', 'this is a post', '', '', '', 0, 'here is the content', '', '', '', 0, '2021-05-01 14:29:22', NULL),
(11, 'James', 'James', 0, '', 'John Deacons', '', '', '', 0, 'Lovely item', '', '', '', 0, '2021-05-01 14:31:47', 2),
(12, 'John', 'Smith', 0, '', 'Caithness', '', '', '', 0, 'review', '', '', '', 0, '2021-05-01 15:42:37', 15),
(34, 'a', 'a', 0, 'test', 'bbbbbbbbbbbbbb', '', '', '', 0, 'bbbbbbbbbbbbbbbbbbb', '', '', '', 0, '2022-03-20 10:54:26', NULL),
(35, 'a', 'a', 0, 'test', 'wtf', '', '', '', 0, 'wtf', 'wtf', '', '', 0, '2022-03-20 11:04:10', NULL),
(36, 'a', 'a', 0, 'test', 't', '', '', 't', 0, 't', 't', '', '', 0, '2022-03-20 11:20:19', NULL),
(37, 'a', 'a', 0, 'test', 'rr', '', '', 'rr', 0, 'rr', 'rr', '', '', 0, '2022-03-20 11:24:49', NULL),
(38, 'a', 'a', 0, 'test', 'z', '', '', 'z', 0, 'z', 'z', 'z', 'z', 0, '2022-03-20 11:32:22', NULL),
(39, 'a', 'a', 0, 'test', 'i', '', '', 'i', 0, 'i', 'i', 'i', 'i', 0, '2022-03-20 11:36:19', NULL),
(100, 'a', 'a', 0, 'test', 'Ken Rosenfeld ', 'iii', 'images/KenRosenfeld2020.jpg', 'Lampwork', 2000, 'Ut egestas tempor lectus, nec ornare purus luctus in', 'Praesent vel sem pharetra nisi sollicitudin imperdiet.', 'Praesent vel sem pharetra nisi sollicitudin imperdiet.', 'Praesent vel sem pharetra nisi sollicitudin imperdiet.', 0, '2022-03-20 12:40:58', NULL),
(101, 'a', 'a', 0, 'test', 'x', '', '', 'x', 0, 'x', 'x', 'x', '1', 0, '2022-03-20 11:49:32', NULL),
(102, 'a', 'a', 0, 'test', 'o', 'o', 'o', 'o', 8, 'o', 'o', 'o', 'o', 0, '2022-03-20 11:53:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'aaa.png', '2022-03-20 13:07:00', '1'),
(2, '2222222.png', '2022-03-20 13:10:06', '1'),
(3, '111111.png', '2022-03-20 13:19:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `total`, `order_date`) VALUES
(1, 0, '3240.00', '2021-04-09 14:45:16'),
(2, 0, '90.00', '2021-04-09 14:46:07'),
(3, 0, '100.00', '2021-04-09 14:47:10'),
(4, 1, '100.00', '2021-04-09 14:48:48'),
(5, 1, '90.00', '2021-04-09 14:50:30'),
(6, 1, '90.00', '2021-04-09 14:55:51'),
(7, 1, '90.00', '2021-04-09 14:56:39'),
(8, 2, '330.00', '2021-04-09 14:58:32'),
(9, 2, '400.00', '2021-04-09 15:31:33'),
(10, 2, '290.00', '2021-04-11 16:04:14'),
(11, 2, '90.00', '2021-04-11 16:10:09'),
(12, 2, '90.00', '2021-04-11 17:18:19'),
(13, 2, '1490.00', '2021-04-12 18:24:38'),
(14, 2, '3200.00', '2021-04-13 09:13:13'),
(15, 3, '1200.00', '2022-01-01 14:14:29'),
(16, 3, '400.00', '2022-01-01 14:16:38'),
(17, 3, '90.00', '2022-01-01 14:17:08'),
(18, 3, '500.00', '2022-01-01 14:25:36'),
(19, 3, '1650.00', '2022-01-01 15:43:18'),
(20, 0, '1150.00', '2022-01-01 16:19:39'),
(21, 0, '520.00', '2022-03-25 11:57:38'),
(22, 0, '320.00', '2022-03-25 12:03:41'),
(23, 0, '125.00', '2022-03-25 12:32:07'),
(24, 0, '1725.00', '2022-04-12 11:39:08'),
(25, 0, '525.00', '2022-04-26 12:22:37'),
(26, 12, '775.00', '2022-04-26 13:58:03'),
(27, 0, '2345.00', '2022-04-26 22:06:09'),
(28, 14, '900.00', '2022-04-26 22:23:06'),
(29, 15, '1115.00', '2022-04-26 22:29:20'),
(30, 11, '1880.00', '2022-04-27 10:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE `order_contents` (
  `content_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `price` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`content_id`, `order_id`, `item_id`, `quantity`, `price`) VALUES
(1, 1, 1, 1, '99.99'),
(2, 1, 2, 9, '90.00'),
(3, 1, 3, 17, '99.99'),
(4, 1, 4, 1, '99.99'),
(5, 2, 2, 1, '90.00'),
(6, 3, 3, 1, '99.99'),
(7, 4, 3, 1, '99.99'),
(8, 5, 2, 1, '90.00'),
(9, 0, 4, 1, '99.99'),
(10, 6, 2, 1, '90.00'),
(11, 7, 2, 1, '90.00'),
(12, 0, 1, 1, '99.99'),
(13, 8, 4, 1, '99.99'),
(14, 9, 1, 1, '99.99'),
(15, 10, 2, 1, '90.00'),
(16, 10, 3, 2, '99.99'),
(17, 11, 2, 1, '90.00'),
(18, 12, 2, 1, '90.00'),
(19, 13, 2, 5, '90.00'),
(20, 13, 3, 3, '99.99'),
(21, 21, 2, 1, '90.00'),
(22, 21, 3, 1, '99.99'),
(23, 21, 4, 1, '99.99'),
(24, 22, 2, 1, '99.99'),
(25, 22, 4, 1, '99.99'),
(26, 23, 2, 1, '99.99'),
(27, 24, 1, 4, '99.99'),
(28, 24, 2, 1, '99.99'),
(29, 25, 1, 1, '99.99'),
(30, 25, 2, 1, '99.99'),
(31, 26, 1, 1, '99.99'),
(32, 26, 2, 3, '99.99'),
(33, 27, 2, 1, '99.99'),
(34, 27, 3, 3, '99.99'),
(35, 28, 1, 1, '99.99'),
(36, 28, 2, 4, '99.99'),
(37, 29, 2, 3, '99.99'),
(38, 29, 3, 1, '99.99'),
(39, 30, 1, 1, '99.99'),
(40, 30, 3, 2, '99.99');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(10) NOT NULL,
  `User_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `item_id` int(4) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `style` varchar(100) NOT NULL,
  `item_desc` varchar(250) NOT NULL,
  `item_origin` varchar(30) NOT NULL,
  `item_price` decimal(8,2) NOT NULL,
  `type` varchar(30) NOT NULL,
  `item_img` varchar(100) NOT NULL,
  `item_likes` int(50) NOT NULL,
  `article_id` varchar(10) NOT NULL,
  `seller_id` varchar(10) NOT NULL,
  `era` varchar(15) NOT NULL,
  `Year` int(5) NOT NULL,
  `stock` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`item_id`, `item_name`, `style`, `item_desc`, `item_origin`, `item_price`, `type`, `item_img`, `item_likes`, `article_id`, `seller_id`, `era`, `Year`, `stock`) VALUES
(1, 'Ken Rosenfeld  ', 'Bunny', 'Lampwork bunny with colourful Easter eggs and flowers. 63mm', 'California', '400.00', 'Lampwork', 'images/KenRosenfeld2020.jpg', 2, '1', '3', '2000-2020', 2020, 20),
(2, 'Caithness  ', 'Christmas Tree', 'Limited edition. Verdant bubbles rise up to create a beautiful Christmas Tree decorated with millefiori bubbles. Handblown, designed by Helen McDonald. 125mm', 'Scotland', '125.00', 'Millefiori', 'images/caithnesstree.jpg', 1, '6', '1', '', 2006, 20),
(3, 'Baccarat  ', 'Mushroom', 'Tuft including arrowhead and shamrock cane within a blue and white tirsade. Faceted with a star cut base. 69mm', 'France', '740.00', 'Millefiori', 'images/baccaratmushroomcon.jpg', 1, '', '2', '', 1848, 20),
(4, 'John Deacons   ', 'Mushroom', 'Close pack millefiori mushroom with silhouette canes in a green and white stave basket surrounded by a double torsade with millefiori canes. 88mm', 'Scotland', '195.00', 'Millefiori', 'images/johndeacons1.jpeg', 1, '', '3', '', 2005, 20),
(5, 'Caithness', 'Magenta Magic', 'One of the Hot House Collection designed by Robert McAteer. 11cm', 'Scotland', '225.00', 'Lampwork', 'images/caithnesshothouse2.jpg', 0, '', '1', '', 2002, 20),
(6, 'Glass Eye', 'Celestial Venus', 'All of this collection contains ash from the 1980 Mt. St. Helens eruption. This beautiful paperweight features swirling clouds of magenta, violet, pink, and subtle hints of gold. 76mm', 'Seatle', '150.00', 'Torch work', 'images/glasseyecelestial.jpg', 0, '4', '2', '', 2020, 20),
(7, 'Caithness', 'Joy', 'A joyous adventure reflected in this vibrant colourful study. BUNDLES OF PURE JOY! 70mm', 'Scotland', '80.00', 'Torch work', 'images/caithnessjoy.jpg', 0, '', '3', '', 2015, 20),
(8, 'Caithness ', 'Maydance', 'This \'Maypole\' paperweight was designed by Colin Terris. It takes the dance form of the maypole as its design theme. The central bubbles represents the pole and it is surrounded by a ring of six dancing forms which are reflected in the central bubble', 'Scotland', '45.00', 'Bolle', 'images/caithnessmaydance3.jpg', 0, '3', '2', '2000-2020', 2002, 20),
(10, 'John Deacons  ', 'End of Day', '2012. End of day whole and partial millefiori canework with six facets. 81mm', 'Scotland', '90.00', 'Millefiori', 'images/johndeaconsendofday2005.jpg', 4, '5', '1', '', 2012, 20),
(11, 'Whitefriars ', 'Swirl', 'Swirling green and blue with controlled bubble glass. 86mm', 'England', '100.00', 'Bolle', 'images/whitefriars1970.jpg', 11, '', '2', '', 1976, 20),
(12, 'Paul Ysart  ', 'Magnum Harlequin', 'Scramble of polychromecanes with eight bubbles and a harlequin finish. 74mm', 'Scotland', '330.00', 'Scramble', 'images/paulysart1920.jpg', 1, '', '3', '', 1920, 20),
(13, 'Caithness  ', 'Wave Spinner', 'Limited edition, designed by Helen McDonald. Three buoys on ocean waves. 76mm', 'Scotland', '150.00', 'Bolle', 'images/caithnesswave2.jpg', 3, '', '1', '', 2006, 20),
(14, 'Clichy  ', 'Scramble', 'Antique scrambled millefiori canework with the classic central Clichy rose cane. 72mm', 'France', '1000.00', 'Scramble', 'images/clichyscramble.jpg', 1, '2', '1', '1840-1860', 1845, 20),
(15, 'St Louis  ', 'Bouquet', 'Antique upright bouquet with blue and white torsale and classic St Louis beehive top faceting. 74mm', 'France', '1500.00', 'Bouquet', 'images/stlouisbeehive.jpg', 1, '', '2', '', 1850, 20),
(16, 'Perthshire  ', 'Flowers', 'Five flower bouquet designed by Allan Scott with two levels of eight side facets and a star cut base. 73mm', 'Scotland', '395.00', 'Bouquet', 'images/perthshire1979.jpg', 1, '', '3', '', 1979, 20),
(17, 'Perthshire  ', 'Double Overlay', 'The first double overlay made by Perthshire, close packed complex millefiori and eight side facets and one top facet. Hand blown. 73mm', 'Scotland', '345.00', 'Millefiori', 'images/perthshire1974.jpg', 1, '', '3', '', 1974, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` char(40) NOT NULL,
  `reg_date` datetime NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `reg_date`, `username`, `user_address`) VALUES
(0, 'a', 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2021-03-15 16:24:08', 'test', ''),
(1, 'Harry', 'Potter', 'scarhead@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 14:36:04', 'Chosen One', ''),
(2, 'Lord', 'Voldemort', 'horcrux@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 15:25:17', 'The Dark Lord', ''),
(3, 'Tom', 'Riddle', 'gaunt@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 15:26:02', 'Moldywarts', ''),
(4, 'Albus', 'Dumbledore', 'mugwump@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 15:29:08', 'Chief Warlock', ''),
(5, 'Corporal', 'Vimes', 'citywatch@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 15:32:23', 'Vimesy', ''),
(6, 'Granny', 'Weatherwax', 'granny@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 16:17:46', 'Granny', ''),
(7, 'James', 'Potter', 'maurauders@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 16:28:14', 'Prongs', ''),
(8, 'Nanny', 'Ogg', 'ramtops@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 16:42:02', 'Nanny', ''),
(9, 'Neil', 'Gaiman', 'neil@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-06 17:34:04', 'Neil', ''),
(10, 'Draco', 'Malfoy', 'dragon@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-03-08 09:42:19', 'I\'m telling', ''),
(11, 'tim', 'tim', 'tim@aol.com', 'abf77aee07619e169471bad0cb66d423ddc8978f', '2022-04-27 10:41:20', 'tim', '');

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `article_id` int(10) NOT NULL,
  `name_maker` varchar(20) DEFAULT NULL,
  `article_img` varchar(60) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `era` varchar(10) DEFAULT NULL,
  `intro` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `history` varchar(1000) DEFAULT NULL,
  `prices_info` varchar(1000) DEFAULT NULL,
  `edited_by` varchar(1000) DEFAULT NULL,
  `style` varchar(30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `post_date` date DEFAULT NULL,
  `uploaded_on` date DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`article_id`, `name_maker`, `article_img`, `type`, `era`, `intro`, `description`, `history`, `prices_info`, `edited_by`, `style`, `username`, `post_date`, `uploaded_on`, `file_name`) VALUES
(1, 'Ken Rosenfeld  ', 'images/KenRosenfeld2020.jpg', 'Lampwork', '2000-2020', 'Lampwork bunny with colourful Easter eggs and flowers.', 'Ut egestas tempor lectus, nec ornare purus luctus in. Sed eget viverra ligula. Quisque pharetra nulla eget neque faucibus tempor. Nam vestibulum feugiat lectus quis condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sit amet justo ut nunc cursus hendrerit. Fusce sit amet posuere nibh. Aenean condimentum, tellus scelerisque congue interdum, diam nisi lobortis purus, eu finibus nisl lorem ut dolor. Vivamus lectus leo, molestie nec lectus sed, dictum pulvinar tellus. In facilisis posuere libero, ac pulvinar ante interdum et. Praesent eu pretium sem. Cras suscipit nunc congue dapibus placerat. Sed rutrum, ligula pellentesque varius dapibus, ligula orci elementum elit, vel ultricies nunc quam in dui. Sed nibh leo, sagittis sit amet velit quis, dictum scelerisque eros.', 'Praesent vel sem pharetra nisi sollicitudin imperdiet. Sed dui justo, blandit sit amet congue a, auctor fermentum nisi. Morbi fermentum lobortis orci vitae viverra. Donec efficitur neque eu metus facilisis rutrum. Aliquam erat volutpat. Maecenas vitae turpis erat. Integer libero magna, dapibus vitae turpis sit amet, accumsan tincidunt dui. Duis quis mi venenatis, dapibus purus eget, maximus magna. Aenean at malesuada ligula, vitae pulvinar est. Nam tempor sit amet augue nec accumsan. Etiam a porttitor lacus, et aliquam tortor.', '£300-£500', '3', 'Bunny', 'Moldywarts', NULL, NULL, NULL),
(2, 'Clichy', 'images/clichyscramble.jpg', 'Scramble', '1840-60', 'Antique scrambled millefiori canework with the classic central Clichy rose cane. 72mm', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam condimentum suscipit dolor, vel ornare eros. Ut malesuada, massa hendrerit porttitor tempor, est magna mollis justo, sed maximus mauris eros a dui. Quisque facilisis magna lorem, vel maximus magna tristique sed. Vivamus varius commodo ligula eu auctor. Mauris nec ullamcorper felis, vel vestibulum sem. Aliquam nec est ut eros varius commodo a ut leo. Duis ac dapibus urna. Vivamus ante sem, congue rutrum consequat ac, auctor vitae tellus. Etiam a orci ac ligula porta gravida sagittis sed mauris. Vestibulum maximus, lacus ut tincidunt finibus, nunc libero rutrum neque, feugiat molestie urna dolor eu dolor. Vivamus vel nisl nunc. Mauris nisl augue, commodo ut diam id, blandit sagittis lectus. Nam efficitur ante nec velit dapibus, gravida tempus urna tempor. Aliquam tristique malesuada metus, id tincidunt nisl condimentum quis. Fusce non lacus congue, posuere ex suscipit, hendrerit nulla.', 'Ut egestas tempor lectus, nec ornare purus luctus in. Sed eget viverra ligula. Quisque pharetra nulla eget neque faucibus tempor. Nam vestibulum feugiat lectus quis condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla sit amet justo ut nunc cursus hendrerit. Fusce sit amet posuere nibh. Aenean condimentum, tellus scelerisque congue interdum, diam nisi lobortis purus, eu finibus nisl lorem ut dolor. Vivamus lectus leo, molestie nec lectus sed, dictum pulvinar tellus. In facilisis posuere libero, ac pulvinar ante interdum et. Praesent eu pretium sem. Cras suscipit nunc congue dapibus placerat. Sed rutrum, ligula pellentesque varius dapibus, ligula orci elementum elit, vel ultricies nunc quam in dui. Sed nibh leo, sagittis sit amet velit quis, dictum scelerisque eros.', '£800-£1500', '2', 'Scramble', 'The Dark Lord', NULL, NULL, NULL),
(3, 'Caithess', 'images/caithnessmaydance3.jpg', 'Bolle', '2000-2020', 'This \'Maypole\' paperweight was designed by Colin Terris. It takes the dance form of the maypole as its design theme. The central bubbles represents the pole and it is surrounded by a ring of six dancing forms which are reflected in the central bubble', 'Mauris sem ipsum, pretium at lacinia vel, blandit vel nisl. Morbi at scelerisque tortor, sagittis mattis est. Sed faucibus enim tellus, a laoreet nibh consequat et. Pellentesque viverra, nisl non consectetur porttitor, libero elit commodo purus, sed scelerisque tellus elit quis neque. Donec eu neque libero. Aliquam dui odio, faucibus id sem at, pharetra gravida erat. Proin vestibulum non augue a ornare.', 'Nulla facilisi. Nunc iaculis tellus dolor, in mollis dui malesuada quis. Nam scelerisque est nec dui fermentum, id sollicitudin augue suscipit. Sed accumsan auctor ipsum, ac tincidunt magna tincidunt ultrices. Phasellus sed enim eget arcu consectetur auctor. Donec hendrerit libero sed fringilla tincidunt. Fusce sagittis eros vel facilisis suscipit. Etiam nec est feugiat, congue dolor at, porttitor massa. Mauris ullamcorper quis metus sed convallis.', '£35-£80', '1', 'Maydance', 'Chosen One', NULL, NULL, NULL),
(4, 'Glass Eye', 'images/glasseyecelestial.jpg', 'Torchwork', '2000-2020', '  All of this collection contains ash from the 1980 Mt. St. Helens eruption. This beautiful paperweight features swirling clouds of magenta, violet, pink, and subtle hints of gold. 76mm Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est ', '£200-£250', '5', 'Celestial Venus', 'test', NULL, '2022-03-21', NULL),
(5, 'John Deacons', 'images/johndeaconsendofday2005.jpg ', 'Bolle', '1990-2000', ' 2012. End of day whole and partial millefiori canework Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '£90-£100', '7', 'End of Day', 'Nanny', NULL, '2022-03-21', NULL),
(6, 'Caithness', 'images/caithnesstree.jpg', 'Lampwork', '1990-2000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '£200-£700', '7', 'Christmas Tree', 'Nanny', NULL, '2022-03-21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wiki_contributors`
--

CREATE TABLE `wiki_contributors` (
  `article_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`item_id`,`order_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `forum2`
--
ALTER TABLE `forum2`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_contents`
--
ALTER TABLE `order_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `wiki_contributors`
--
ALTER TABLE `wiki_contributors`
  ADD PRIMARY KEY (`article_id`,`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `forum2`
--
ALTER TABLE `forum2`
  MODIFY `post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `order_contents`
--
ALTER TABLE `order_contents`
  MODIFY `content_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `item_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
