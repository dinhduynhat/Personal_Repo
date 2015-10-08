-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2015 at 03:43 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bizarrechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block_person` varchar(20) NOT NULL,
  `block_by` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_by` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `favorite_person` varchar(20) NOT NULL,
  `favorite_by` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `like_person` varchar(20) NOT NULL,
  `like_by` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mail_template`
--

CREATE TABLE IF NOT EXISTS `mail_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mail_template`
--

INSERT INTO `mail_template` (`id`, `from`, `subject`, `content`) VALUES
(1, 'projects@bizarresoftware.in', 'Activate your BizarreChat Account', '<h2><strong>Dear {{username}}</strong></h2>\n\n<p>Welcome to Bizarre Chat,</p>\n\nClick <a href="192.168.1.58/bizarrechat/Activate/{{link}}">this link</a> to Activate your Account\n<p>Regards</p>\n\n<p>Team - BizarreChat</p>\n\n<p>&nbsp;</p>\n'),
(2, 'projects@bizarresoftware.in', 'Activate your BizarreChat Account', '<h2><strong>Dear {{username}}</strong></h2>\n\n<p>Welcome to Bizarre Chat,</p>\n\nClick <a href="192.168.1.58/bizarrechat/ActivateFB/{{link}}">this link</a> to Activate your Account\n<p>Regards</p>\n\n<p>Team - BizarreChat</p>\n\n<p>&nbsp;</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `master_bodytype`
--

CREATE TABLE IF NOT EXISTS `master_bodytype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_bodytype`
--

INSERT INTO `master_bodytype` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'No Answer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'Slim', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Normal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Fat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Very Fat', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_interest`
--

CREATE TABLE IF NOT EXISTS `master_interest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_interest`
--

INSERT INTO `master_interest` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Make New Friends', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Chat', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Date', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_relationship`
--

CREATE TABLE IF NOT EXISTS `master_relationship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_relationship`
--

INSERT INTO `master_relationship` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'NoAnswer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'Single', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Taken', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Open', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_seeking`
--

CREATE TABLE IF NOT EXISTS `master_seeking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `master_seeking`
--

INSERT INTO `master_seeking` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'guys', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'girls', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'both', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_sexuality`
--

CREATE TABLE IF NOT EXISTS `master_sexuality` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_sexuality`
--

INSERT INTO `master_sexuality` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, 'No Answer', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 'Straight', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Open-minded', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Bisexual', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Gay', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `top_banner_users`
--

CREATE TABLE IF NOT EXISTS `top_banner_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `period_from` datetime NOT NULL,
  `period_to` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `top_banner_users`
--

INSERT INTO `top_banner_users` (`id`, `user_id`, `period_from`, `period_to`, `created_at`, `updated_at`) VALUES
(1, '1', '1989-11-17 00:00:00', '2017-11-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '2', '1989-11-17 00:00:00', '2017-11-09 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quickblox_id` varchar(100) NOT NULL,
  `facebook_id` varchar(100) NOT NULL,
  `gcm_id` varchar(700) NOT NULL,
  `gcm_id_updated_at` datetime NOT NULL,
  `otp` varchar(20) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `phone_code` varchar(5) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `interest` varchar(11) NOT NULL,
  `seeking` varchar(1) NOT NULL,
  `email` varchar(35) NOT NULL,
  `aboutme` longtext NOT NULL,
  `relationship` int(11) NOT NULL DEFAULT '1',
  `sexuality` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `bodytype` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `smoking` int(11) NOT NULL,
  `drinking` int(11) NOT NULL,
  `education` int(11) NOT NULL,
  `languages` int(11) NOT NULL,
  `job` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `income` int(11) NOT NULL,
  `eyecolour` int(11) NOT NULL,
  `haircolour` int(11) NOT NULL,
  `living` longtext NOT NULL,
  `living_addr` longtext NOT NULL,
  `lat` varchar(34) NOT NULL,
  `lon` varchar(34) NOT NULL,
  `password` varchar(110) NOT NULL,
  `password_raw` varchar(110) NOT NULL,
  `verify_token` varchar(100) NOT NULL,
  `remember_token` varchar(110) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  `online_status` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
