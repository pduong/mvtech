-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2013 at 12:05 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  `session_id` varchar(250) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`, `session_id`) VALUES
(91, '1371915899.5386', '127.0.0.1', 'b8jkxhhf', 't1ihbvppesbmftavr42r2rqse5'),
(103, '1371916013.1514', '127.0.0.1', 'id2shtz9', 'tgh15e2j9hr5jrlcda5to6e6b2');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotline` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact_vi` text NOT NULL,
  `contact_en` text NOT NULL,
  `updatedby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `hotline`, `email`, `contact_vi`, `contact_en`, `updatedby`) VALUES
(1, '0909103585', 'info@mvtech.com.vn', '<p>\n	Mobile Email&nbsp;</p>\n', '<p>\n	Mobile Email&nbsp;<img alt="" src="/admin/public/images/image_uploads/images/launcher_bfb.png" style="width: 48px; height: 48px;" /></p>\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(250) NOT NULL,
  `brand_en` varchar(250) NOT NULL,
  `brand_vi` varchar(250) NOT NULL,
  `createdby` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `logo`, `brand_en`, `brand_vi`, `createdby`, `create_date`) VALUES
(8, 'launcher_bfb.png', 'Trung Nguyen', 'Trung Nguyen', 0, '2013-06-16 10:55:02'),
(9, 'mvtech.png', 'Masan', 'Masan', 0, '2013-06-17 16:55:42'),
(10, 'mvtech1.png', 'Olam', 'Olam', 1, '2013-06-17 16:56:48'),
(11, 'zendams-coolangeltux.png', 'Vinacafe', 'Vinacafe', 1, '2013-06-22 11:14:46'),
(12, 'zendams-cooldeviltux.png', 'PV Drilling', 'PV Drilling', 1, '2013-06-22 11:15:16'),
(13, 'launcher_bfb1.png', 'PMPC', 'PMPC', 1, '2013-06-22 11:15:46'),
(14, 'zendams-coolangeltux1.png', 'NIFERCO', 'NIFERCO', 1, '2013-06-22 11:16:33'),
(15, 'launcher_bfb2.png', 'DPM', 'DPM', 1, '2013-06-22 11:17:35'),
(16, 'launcher_bfb3.png', 'HC3', 'HC3', 1, '2013-06-22 11:18:25'),
(17, 'zendams-coolangeltux2.png', 'Intel', 'Intel', 1, '2013-06-22 11:18:44'),
(18, 'isb-smoking-tux.png', 'LASUCO', 'LASUCO', 1, '2013-06-22 11:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_en` varchar(250) NOT NULL,
  `partner_vi` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `summary_en` text NOT NULL,
  `summary_vi` text NOT NULL,
  `logo` varchar(250) NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `partner_en`, `partner_vi`, `website`, `summary_en`, `summary_vi`, `logo`, `createdby`, `created_date`) VALUES
(2, 'Fpt', 'Fpt', 'http://tuoitre.vn', 'Fpt', 'Fpt', 'isb-smoking-tux.png', 0, '2013-06-16 16:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name_en` varchar(250) NOT NULL,
  `product_name_vi` varchar(250) NOT NULL,
  `description_en` text NOT NULL,
  `description_vi` text NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name_en`, `product_name_vi`, `description_en`, `description_vi`, `product_image`, `createdby`, `created_date`) VALUES
(3, 1, 'Product', 'Product vn', '<p>\n	wfsdf</p>\n', '<p>\n	fsfsdfds</p>\n', 'mvtech.png', 1, '2013-06-17 16:57:25'),
(7, 0, 'fsfsdfssfsfsssdf', '', '', '', '', 1, '2013-06-22 13:14:10'),
(11, 0, 'asdasdasdasdasdsa', '', '', '', '', 1, '2013-06-22 13:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name_en` varchar(250) NOT NULL,
  `category_name_vi` varchar(250) NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_name_en`, `category_name_vi`, `createdby`, `created_date`) VALUES
(1, 'CONTROL VALVE', 'CONTROL VALVE', 1, '2013-06-16 12:41:19'),
(4, 'FLOW', 'FLOW', 1, '2013-06-22 10:51:26'),
(5, 'PRESSURE', 'PRESSURE', 1, '2013-06-22 10:51:44'),
(6, 'TEMPERATURE', 'TEMPERATURE', 1, '2013-06-22 10:52:06'),
(7, 'LEVEL', 'LEVEL', 1, '2013-06-22 10:52:21'),
(8, 'VALVES', 'VALVES', 1, '2013-06-22 11:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `static_contents`
--

CREATE TABLE IF NOT EXISTS `static_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_vi` varchar(250) NOT NULL,
  `code` varchar(20) NOT NULL,
  `content_vi` text NOT NULL,
  `updated_by` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title_en` varchar(250) NOT NULL,
  `content_en` text CHARACTER SET latin1 NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `static_contents`
--

INSERT INTO `static_contents` (`id`, `title_vi`, `code`, `content_vi`, `updated_by`, `title_en`, `content_en`, `image`) VALUES
(1, 'Giải pháp', 'SOLUTION', '<p>\n	content vi</p>\n', '2013-06-15 17:00:00', 'Solution', '<p>\n	content en</p>\n', 'isb-smoking-tux.png'),
(2, 'Giới thiệu', 'ABOUT_US', 'about us', '2013-06-22 11:04:49', 'About us', 'about us', ''),
(3, 'Dịch vụ', 'SERVICE', 'service', '2013-06-22 11:05:43', 'Services', 'service', ''),
(4, 'Tin tức', 'NEWS', 'NEWS', '2013-06-22 11:05:59', 'News', 'NEWS', ''),
(5, 'Tuyển dụng', 'CAREERS', 'CAREERS', '2013-06-22 11:06:13', 'Careers', 'CAREERS', ''),
(6, 'Thông báo', 'WHITE_PAPER', 'WHITE PAPERS', '2013-06-22 11:06:45', 'White papers', 'WHITE PAPERS', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 NOT NULL,
  `full_name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `createdby` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `full_name`, `createdby`, `created_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'duongbaphuc@gmail.com', 'admin', 0, '0000-00-00 00:00:00'),
(2, 'phuc', '886d057a091559e2f5dff95d1d01360b', 'phuc.duong@kiss-concept.com', 'Mr Phuc', 0, '2013-06-17 13:55:19'),
(3, 'admin1', '123456', '1duongbaphuc@gmail.com', 'admin', 1, '2013-06-22 08:29:22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
