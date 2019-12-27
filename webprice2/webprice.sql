-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2019 at 07:47 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprice`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_choice`
--

CREATE TABLE `contact_choice` (
  `id` int(10) NOT NULL,
  `q_id` int(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `opt_price` int(10) NOT NULL,
  `contact_id` int(10) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_choice`
--

INSERT INTO `contact_choice` (`id`, `q_id`, `question`, `choice`, `opt_price`, `contact_id`, `created`) VALUES
(1, 1, 'How many pages are needed on the website?', '1 to 3', 21, 1, '2019-12-26 10:10:39'),
(2, 2, '  Do you have the designs for the website?', 'Yes', 21, 1, '2019-12-26 10:10:39'),
(3, 3, '  Do people have to login?', 'Social', 32, 1, '2019-12-26 10:10:38'),
(4, 4, '  Will you need to accept payment?', 'No', 32, 1, '2019-12-26 10:10:38'),
(5, 5, '  Do people rate or review a thing?', 'Yes', 21, 1, '2019-12-26 10:10:38'),
(6, 6, '  Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'No', 32, 1, '2019-12-26 10:10:38'),
(7, 7, '  Does your website need search?', 'Yes', 21, 1, '2019-12-26 10:10:39'),
(8, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, 1, '2019-12-26 10:10:39'),
(9, 9, '  this is a test question', 'test', 123, 1, '2019-12-26 10:10:39'),
(10, 1, 'How many pages are needed on the website?', '1 to 3', 21, 3, '2019-12-26 10:39:26'),
(11, 2, '  Do you have the designs for the website?', 'No', 12, 3, '2019-12-26 10:39:27'),
(12, 3, '  Do people have to login?', 'Email', 21, 3, '2019-12-26 10:39:26'),
(13, 4, '  Will you need to accept payment?', 'No', 32, 3, '2019-12-26 10:39:26'),
(14, 5, '  Do people rate or review a thing?', 'Yes', 21, 3, '2019-12-26 10:39:26'),
(15, 6, '  Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'No', 32, 3, '2019-12-26 10:39:27'),
(16, 7, '  Does your website need search?', 'No', 32, 3, '2019-12-26 10:39:26'),
(17, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, 3, '2019-12-26 10:39:26'),
(18, 9, '  this is a test question', 'test', 123, 3, '2019-12-26 10:39:27'),
(19, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-26 10:40:09'),
(20, 2, '  Do you have the designs for the website?', 'No', 12, NULL, '2019-12-26 10:40:09'),
(21, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 10:40:09'),
(22, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 10:40:09'),
(23, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 10:40:09'),
(24, 6, '  Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 21, NULL, '2019-12-26 10:40:09'),
(25, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-26 10:40:09'),
(26, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-26 10:40:09'),
(27, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 10:40:09'),
(28, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-26 10:40:15'),
(29, 2, '  Do you have the designs for the website?', 'No', 12, NULL, '2019-12-26 10:40:15'),
(30, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 10:40:15'),
(31, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 10:40:15'),
(32, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 10:40:15'),
(33, 6, '  Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 21, NULL, '2019-12-26 10:40:15'),
(34, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-26 10:40:15'),
(35, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-26 10:40:15'),
(36, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 10:40:15'),
(37, 1, 'How many pages are needed on the website?', '1 to 3', 21, 4, '2019-12-26 10:43:04'),
(38, 2, '  Do you have the designs for the website?', 'No', 12, 4, '2019-12-26 10:43:04'),
(39, 3, '  Do people have to login?', 'Email', 21, 4, '2019-12-26 10:43:04'),
(40, 4, '  Will you need to accept payment?', 'No', 32, 4, '2019-12-26 10:43:04'),
(41, 5, '  Do people rate or review a thing?', 'No', 32, 4, '2019-12-26 10:43:04'),
(42, 6, '  Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 21, 4, '2019-12-26 10:43:04'),
(43, 7, '  Does your website need search?', 'Yes', 21, 4, '2019-12-26 10:43:04'),
(44, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, 4, '2019-12-26 10:43:04'),
(45, 9, '  this is a test question', 'test', 123, 4, '2019-12-26 10:43:04'),
(46, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-26 10:48:27'),
(47, 2, '  Do you have the designs for the website?', 'No', 12, NULL, '2019-12-26 10:48:27'),
(48, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 10:48:27'),
(49, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 10:48:27'),
(50, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 10:48:28'),
(51, 6, '  Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 21, NULL, '2019-12-26 10:48:28'),
(52, 7, '  Does your website need search?', 'No', 32, NULL, '2019-12-26 10:48:28'),
(53, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, NULL, '2019-12-26 10:48:28'),
(54, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 10:48:28'),
(55, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-26 11:31:56'),
(56, 2, '  Do you have the designs for the website?', 'No', 12, NULL, '2019-12-26 11:31:56'),
(57, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 11:31:56'),
(58, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 11:31:56'),
(59, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 11:31:56'),
(60, 7, '  Does your website need search?', 'No', 32, NULL, '2019-12-26 11:31:56'),
(61, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, NULL, '2019-12-26 11:31:56'),
(62, 9, '  this is a test question', 'test', 123, 5, '2019-12-26 11:34:13'),
(63, 1, 'How many pages are needed on the website?', '1 to 3', 21, 5, '2019-12-26 11:34:13'),
(64, 2, '  Do you have the designs for the website?', 'No', 12, 5, '2019-12-26 11:34:13'),
(65, 3, '  Do people have to login?', 'Email', 21, 5, '2019-12-26 11:34:13'),
(66, 4, '  Will you need to accept payment?', 'No', 32, 5, '2019-12-26 11:34:12'),
(67, 5, '  Do people rate or review a thing?', 'Yes', 21, 5, '2019-12-26 11:34:13'),
(68, 7, '  Does your website need search?', 'No', 32, 5, '2019-12-26 11:34:12'),
(69, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, 5, '2019-12-26 11:34:13'),
(70, 9, '  this is a test question', 'test', 123, 5, '2019-12-26 11:34:13'),
(71, 1, 'How many pages are needed on the website?', '4 to 9', 32, 6, '2019-12-26 11:34:51'),
(72, 2, '  Do you have the designs for the website?', 'Yes', 21, 6, '2019-12-26 11:34:52'),
(73, 3, '  Do people have to login?', 'Social', 32, 6, '2019-12-26 11:34:51'),
(74, 4, '  Will you need to accept payment?', 'Yes', 21, 6, '2019-12-26 11:34:51'),
(75, 5, '  Do people rate or review a thing?', 'Yes', 21, 6, '2019-12-26 11:34:51'),
(76, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'No', 32, 6, '2019-12-26 11:34:52'),
(77, 7, '  Does your website need search?', 'Yes', 21, 6, '2019-12-26 11:34:51'),
(78, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, 6, '2019-12-26 11:34:52'),
(79, 9, '  this is a test question', 'test', 123, 6, '2019-12-26 11:34:52'),
(80, 1, 'How many pages are needed on the website?', '4 to 9', 32, NULL, '2019-12-26 11:42:32'),
(81, 2, '  Do you have the designs for the website?', 'Yes', 21, NULL, '2019-12-26 11:42:32'),
(82, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 11:42:32'),
(83, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 11:42:32'),
(84, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 11:42:33'),
(85, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 28, NULL, '2019-12-26 11:42:33'),
(86, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-26 11:42:33'),
(87, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-26 11:42:33'),
(88, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 11:42:33'),
(89, 1, 'How many pages are needed on the website?', '4 to 9', 32, NULL, '2019-12-26 13:02:54'),
(90, 2, '  Do you have the designs for the website?', 'Yes', 21, NULL, '2019-12-26 13:02:54'),
(91, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 13:02:54'),
(92, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 13:02:54'),
(93, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 13:02:55'),
(94, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 28, NULL, '2019-12-26 13:02:55'),
(95, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-26 13:02:55'),
(96, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-26 13:02:55'),
(97, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 13:02:55'),
(98, 1, 'How many pages are needed on the website?', '4 to 9', 32, NULL, '2019-12-26 13:03:00'),
(99, 2, '  Do you have the designs for the website?', 'Yes', 21, NULL, '2019-12-26 13:03:00'),
(100, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-26 13:03:00'),
(101, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 13:03:00'),
(102, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-26 13:03:00'),
(103, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 28, NULL, '2019-12-26 13:03:00'),
(104, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-26 13:03:01'),
(105, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-26 13:03:01'),
(106, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 13:03:01'),
(107, 1, 'How many pages are needed on the website?', '10+', 43, NULL, '2019-12-26 13:04:14'),
(108, 4, '  Will you need to accept payment?', 'No', 32, NULL, '2019-12-26 13:04:14'),
(109, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'No', 32, NULL, '2019-12-26 13:04:14'),
(110, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, NULL, '2019-12-26 13:04:14'),
(111, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 13:04:14'),
(112, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-26 13:04:42'),
(113, 2, '  Do you have the designs for the website?', 'Yes', 21, NULL, '2019-12-26 13:04:43'),
(114, 3, '  Do people have to login?', 'Social', 32, NULL, '2019-12-26 13:04:43'),
(115, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-26 13:04:43'),
(116, 5, '  Do people rate or review a thing?', 'No', 32, NULL, '2019-12-26 13:04:43'),
(117, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 28, NULL, '2019-12-26 13:04:43'),
(118, 7, '  Does your website need search?', 'No', 32, NULL, '2019-12-26 13:04:43'),
(119, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, NULL, '2019-12-26 13:04:43'),
(120, 9, '  this is a test question', 'test', 123, NULL, '2019-12-26 13:04:43'),
(121, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-27 05:49:48'),
(122, 1, 'How many pages are needed on the website?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(123, 1, 'How many pages are needed on the website?', 'Email', 21, NULL, '2019-12-27 05:49:49'),
(124, 1, 'How many pages are needed on the website?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(125, 1, 'How many pages are needed on the website?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(126, 1, 'How many pages are needed on the website?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(127, 1, 'How many pages are needed on the website?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(128, 2, '  Do you have the designs for the website?', 'No', 12, NULL, '2019-12-27 05:49:49'),
(129, 2, '  Do you have the designs for the website?', 'No', 12, NULL, '2019-12-27 05:49:49'),
(130, 3, '  Do people have to login?', '1 to 3', 21, NULL, '2019-12-27 05:49:49'),
(131, 3, '  Do people have to login?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(132, 3, '  Do people have to login?', 'Email', 21, NULL, '2019-12-27 05:49:49'),
(133, 3, '  Do people have to login?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(134, 3, '  Do people have to login?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(135, 3, '  Do people have to login?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(136, 3, '  Do people have to login?', 'Yes', 21, NULL, '2019-12-27 05:49:49'),
(137, 4, '  Will you need to accept payment?', '1 to 3', 21, NULL, '2019-12-27 05:49:49'),
(138, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(139, 4, '  Will you need to accept payment?', 'Email', 21, NULL, '2019-12-27 05:49:50'),
(140, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(141, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(142, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(143, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(144, 5, '  Do people rate or review a thing?', '4 to 9', 32, NULL, '2019-12-27 05:49:50'),
(145, 5, '  Do people rate or review a thing?', 'Social', 32, NULL, '2019-12-27 05:49:50'),
(146, 5, '  Do people rate or review a thing?', 'No', 32, NULL, '2019-12-27 05:49:50'),
(147, 5, '  Do people rate or review a thing?', 'No', 32, NULL, '2019-12-27 05:49:50'),
(148, 5, '  Do people rate or review a thing?', 'No', 32, NULL, '2019-12-27 05:49:50'),
(149, 5, '  Do people rate or review a thing?', 'No', 32, NULL, '2019-12-27 05:49:50'),
(150, 5, '  Do people rate or review a thing?', 'No', 32, NULL, '2019-12-27 05:49:50'),
(151, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'Yes', 28, NULL, '2019-12-27 05:49:50'),
(152, 7, '  Does your website need search?', '1 to 3', 21, NULL, '2019-12-27 05:49:50'),
(153, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(154, 7, '  Does your website need search?', 'Email', 21, NULL, '2019-12-27 05:49:50'),
(155, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(156, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(157, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(158, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-27 05:49:50'),
(159, 8, '  Do you need a Content Management System (CMS)?', '4 to 9', 32, NULL, '2019-12-27 05:49:51'),
(160, 8, '  Do you need a Content Management System (CMS)?', 'Social', 32, NULL, '2019-12-27 05:49:51'),
(161, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-27 05:49:51'),
(162, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-27 05:49:51'),
(163, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-27 05:49:51'),
(164, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-27 05:49:51'),
(165, 8, '  Do you need a Content Management System (CMS)?', 'No', 32, NULL, '2019-12-27 05:49:51'),
(166, 1, 'How many pages are needed on the website?', '1 to 3', 21, NULL, '2019-12-27 05:50:21'),
(167, 2, '  Do you have the designs for the website?', 'Yes', 21, NULL, '2019-12-27 05:50:21'),
(168, 3, '  Do people have to login?', 'Social', 32, NULL, '2019-12-27 05:50:21'),
(169, 4, '  Will you need to accept payment?', 'Yes', 21, NULL, '2019-12-27 05:50:21'),
(170, 5, '  Do people rate or review a thing?', 'Yes', 21, NULL, '2019-12-27 05:50:21'),
(171, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?', 'No', 32, NULL, '2019-12-27 05:50:21'),
(172, 7, '  Does your website need search?', 'Yes', 21, NULL, '2019-12-27 05:50:21'),
(173, 8, '  Do you need a Content Management System (CMS)?', 'Yes', 21, NULL, '2019-12-27 05:50:21'),
(174, 9, '  this is a test question', 'test', 123, NULL, '2019-12-27 05:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `opt_id` int(10) NOT NULL,
  `opt_name` varchar(255) NOT NULL,
  `opt_price` int(11) DEFAULT NULL,
  `qid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`opt_id`, `opt_name`, `opt_price`, `qid`) VALUES
(1, '1 to 3', 21, 1),
(2, '4 to 9', 32, 1),
(3, '10+', 43, 1),
(4, 'None/I don\'t know', 54, 1),
(5, 'Yes', 21, 2),
(6, 'No', 12, 2),
(7, 'I don\'t know', 33, 2),
(8, 'Email', 21, 3),
(9, 'Social', 32, 3),
(10, 'No', 12, 3),
(11, 'I don\'t know', 43, 3),
(12, 'Yes', 21, 4),
(13, 'No', 32, 4),
(14, 'I don\'t know', 12, 4),
(15, 'Yes', 21, 5),
(16, 'No', 32, 5),
(17, 'I don\'t know', 12, 5),
(18, 'Yes', 28, 6),
(19, 'No', 32, 6),
(20, 'I don\'t know', 12, 6),
(21, 'Yes', 21, 7),
(22, 'No', 32, 7),
(23, 'I don\'t know', 12, 7),
(24, 'Yes', 21, 8),
(25, 'No', 32, 8),
(26, 'I don\'t know', 12, 8),
(27, 'test', 123, 9);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `qid`, `question`) VALUES
(1, 1, 'How many pages are needed on the website?'),
(2, 2, '  Do you have the designs for the website?'),
(3, 3, '  Do people have to login?'),
(4, 4, '  Will you need to accept payment?'),
(5, 5, '  Do people rate or review a thing?'),
(6, 6, 'Does your website need to connect with another app or website (ie. share data with a mobile application)?'),
(7, 7, '  Does your website need search?'),
(8, 8, '  Do you need a Content Management System (CMS)?'),
(9, 9, '  this is a test question');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`contact_id`, `contact_name`, `contact_email`, `content`) VALUES
(1, 'hello', 'asda@asd.gg', '123'),
(2, 'hello', 'test@test.com', 'dsadsad'),
(3, 'hello', 'test@test.com', 'dsadsad'),
(4, 'dsad', 'test@test.com', 'aaadsad'),
(5, 'dsad', 'asdas@asdas.hgf', 'sdsadas'),
(6, 'helloagain', 'asda1234@asd.gg', 'sdadas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_password`) VALUES
(1, 'admin@gmail.com', 'admin', '$2y$10$cQJgg6Lcrh9JcnzD47kZVe6C691cmmNqWdggMBuHwFLi7zdqEKQMu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_choice`
--
ALTER TABLE `contact_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_choice`
--
ALTER TABLE `contact_choice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `opt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
