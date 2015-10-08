-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2015 at 03:27 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `complaint_by`, `type`, `comments`, `created_at`, `updated_at`) VALUES
(2, '76', 1, 'vvvvvvvvv', '2015-07-10 10:16:16', '2015-07-10 10:16:16'),
(3, '76', 3, 'ddddddddddddddd', '2015-07-10 12:36:35', '2015-07-10 12:36:35'),
(4, '76', 3, 'aaaaa', '2015-07-10 12:36:47', '2015-07-10 12:36:47'),
(5, '76', 2, 'avva', '2015-07-10 12:51:59', '2015-07-10 12:51:59'),
(6, '76', 2, 'avva', '2015-07-10 12:52:10', '2015-07-10 12:52:10'),
(7, '76', 2, 'rrr', '2015-07-10 12:52:54', '2015-07-10 12:52:54');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quickblox_id` varchar(100) NOT NULL,
  `facebook_id` varchar(100) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `quickblox_id`, `facebook_id`, `firstname`, `dob`, `phone_code`, `phone_number`, `city`, `address`, `gender`, `interest`, `seeking`, `email`, `aboutme`, `relationship`, `sexuality`, `height`, `weight`, `bodytype`, `children`, `smoking`, `drinking`, `education`, `languages`, `job`, `company`, `income`, `eyecolour`, `haircolour`, `living`, `living_addr`, `lat`, `lon`, `password`, `password_raw`, `verify_token`, `remember_token`, `role`, `online_status`, `status`, `created_at`, `updated_at`) VALUES
(48, '4023631', '', 'raja', '0000-00-00', '', '', 'dindigul', '', '', '', '', 've@vein.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$rVFUeVppGu3mqrrPisqZv.0M2MkJlmFjVYYlw7rBdVG80OZkUpIG2', '', 'RVZ2Js6XovuSjGwLnkTKecQFamb1g9p73WhNMzqD0A5BHP8ilf', '', 1, 0, 0, '2015-07-06 06:25:51', '2015-07-06 06:25:51'),
(49, '4023642', '', 'vetri', '0000-00-00', '', '', '', '', '', '', '', 've@vein.coms', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$ZHSCoHfyNaM2s29NHnQZD.5MdO7bCkSQdmm0TmO6gC37gouIqd0Ni', '', '4T2WGZFj3CzOf0tDYNbd9nUgLsuBIerVvQk1PXAS7Ro5hHwqxc', '', 1, 0, 0, '2015-07-06 06:26:41', '2015-07-06 06:26:41'),
(50, '4023752', '', 'anas', '0000-00-00', '', '', '', '', '', '', '', 'anasahamed@bizarresoftware.in', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$.B1lURXNfyil1get61Sfp.qc44FUnTCynaLSsarvVZtHodVVsak/y', '', 'Dhrc6E05skjoa4bdMQeZITCiAFfu7VyGW3NqlzvYOwBSHnP92t', 'xFMKokfe5B0qqLIPxnqcSGG93MJciX2IfleFTezZRunJqimxtEJ08a7jFBlb', 1, 0, 1, '2015-07-06 06:35:10', '2015-07-06 06:38:00'),
(51, '', '421112854741412', 'Gopinath Bizarre', '0000-00-00', '', '', '', '', '', '', '', 'bizarredeveloper@gmail.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 'Avadi', 'Avadi, Tamil Nadu, India', '', '', '', '', 'nx5IULEgGFK6zeiB1tJpsPvXar9YubfkWCV7Rl2THOcZSyDo0M', 'tQabYc4ul2rISDlNsLKneelXLB7G2ckHa4R5XkVYIuEE4QzVmEQ2L4HzyDfR', 1, 0, 0, '2015-07-06 06:43:52', '2015-07-20 12:23:09'),
(52, '4023974', '', 'karthi', '0000-00-00', '', '', '', '', '', '', '', 'kar@king.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$I.Zw8uia1yBNhrCKgyfpJeD7oXv4pB179WmUIZzjEM27nVxiEAChS', '', 'lsYmEdSyLI4K0bqGNQDOUTifHJ3gj58Zt9coWVxPvezanrB6h2', '', 1, 0, 0, '2015-07-06 06:57:07', '2015-07-06 06:57:07'),
(56, '4025179', '421112854741412', 'Gopinath', '0000-00-00', '', '', '', '', '', '', '', 'bizarredeveloper@gmail.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', 'nAmG7Z5vRbkgf6KJpsSFEIhUjODiwt3lC14zTYeq2Ny8oaQuWP', '', 1, 0, 0, '2015-07-06 08:36:33', '2015-07-06 08:36:33'),
(72, '4046233', '', 'sass rea', '0000-00-00', '', '', 'cbe', '', '', '', '', 'sa@sysaxiom.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$/l1iR7xiYcj0BRHcgfMpPum4DCNi29uTaL9MGo.fyXClbf0U7G00G', 'Open@123', 'o3fCRyePEYNSKqFjbpwTcIz7r9VZ4vmXMBaGlhu068JHO1nQkU', '', 1, 0, 1, '2015-07-07 12:59:00', '2015-07-07 12:59:00'),
(73, '4060330', '', 'Sulthan Allaudeensss', '0000-00-00', '', '', 'cbe', '', '', '', '', 'allaudeen.s@gmail.com', 'ffffff', 1, 2, 3, 2, 3, 3, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$v3AdguKufyElM.PPy/OkEuG2.3ZCyORqmocZ2yMnXMO/2flExVIta', 'Open@123', 'Muw60HlsgykC3b74ochdPO2qAaGLSR95QVEBKpfFvzxDnmYjeT', 'E1av8XfjEQqycmYZ72CKPtE5J0Ay4px6Yx0viEWg4HthWwgRdPcx8q80K4Si', 1, 0, 0, '2015-07-08 06:10:04', '2015-07-10 05:52:29'),
(74, '22', '', 'llll', '0000-00-00', '', '', '', '', '', '', '', 'lll@gmail.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$XWRAranjgXHLlqOID8u/GuuJqe2UBp1QS5EJ0vgiT2aSdwej9hsT.', 'test1234', '8vnQsYiWc12top7eIgT4MLzFxNGjHEkwD0UPCJdm6Kr9ZaARyS', '', 1, 0, 1, '2015-07-08 10:12:44', '2015-07-08 10:12:44'),
(75, '4063253', '', 'www', '0000-00-00', '', '', '', '', '', '', '', 'l@gmail.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$EcHUZHp96t8dULsLSlIot.KdSy6qSoLZN.Rw85lKBBmsYZZB9pF0y', 'test1234', 'pj96AiDNGuSx0zWkodmh1vRFLU4Y5sH8BVOCMteInclJE3gwXQ', '', 1, 0, 0, '2015-07-08 10:31:08', '2015-07-08 10:31:08'),
(77, '4099413', '', 'eug', '0000-00-00', '', '', '', '', '', '', '', 'eugine@gmail.com', 'I am a cool person', 1, 3, 4, 2, 2, 3, 3, 2, 2, 0, 'swe', 'bizarre', 3, 1, 2, 'New Delhi', '', '', '', '$2y$10$Ql9ZCHDKymGIZjg4/EsfYuttazJTqT.qjcRhK9HVpvKQZi7pdEJC.', 'adminadmin', 'kNaZRd3C0uxLIpgm5bGfhqWyl9jHvecKwEsYJr1XAOnBoDTtSz', 'Zoiywlas5LXFNj3uelbEgU8JDrhuuD3NlKbeDzj3XZ7P2w2kre8NVAcVwfeq', 1, 0, 1, '2015-07-10 10:03:40', '2015-07-14 09:08:06'),
(78, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '', '', '', '', 1, 0, 0, '2015-07-10 10:11:47', '2015-07-10 10:11:47'),
(79, '4157919', '', 'ravi', '0000-00-00', '', '', 'cbe', '', '', '1', '1', 'kanna@kan.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 'New Delhi', 'Delhi, India', '', '', '$2y$10$j.FL/vGFhZo6YNDaJoATrOaMox2Qzn4TqJIdJCVcyFSuRRBtKMQ0a', 'kannakanna', 'W4QBzXslVO8mabMqtNpZoGyADShEU5JC6uv1gjr790f3LITKPi', 'Lntqisq0DtB9HCBoApzNpkFhnx9h1DGoro26kNbpHG2Oblr75PTwe7WdR01H', 1, 0, 1, '2015-07-13 04:27:14', '2015-07-13 04:29:42'),
(81, '4160298', '', 'alpha1alpha1', '1979-07-02', '', '', '', '', '', '1', '2', 'alpha1alpha1@alpha1alpha1.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 'New Delhi', 'New Delhi, Delhi, India', '', '', '$2y$10$xIaUDO6u21rLRYHiTS6FhuE/a2vc.Ban6sEINFJ1/kd5tdTcMTjrG', 'alpha1alpha1', '8F5AHb06KqyZj2YtrwGOmlSoIXiRsQ7dvEB3UfxDJVkWhpCuLg', 'DRQUwNBDzqRaMtFR5ph1WDm70HCFzgdh6cCkVTZV1UHLiMgkNpa1sH5Wi1nF', 1, 0, 1, '2015-07-13 07:34:48', '2015-07-13 07:40:07'),
(83, '', '808298679265738', 'Kishore...', '1979-07-02', '', '', 'cbe', '', '', '1', '1', 'allaudeen.career@gmail.com', 'super starrere', 1, 2, 125, 35, 2, 0, 0, 0, 0, 0, '', '', 0, 0, 0, 'Avadi', 'Avadi, Tamil Nadu, India', '11.490', '77.274', '', '', 'QhSLfaMProClHVunveTsk4myFcJAXRbw3gIBx9G6p1WdD7qzEj', 'aCKiyinaUD3WwvHsYKHaCZNarsOIFt5EzqUS5cy45xJIMxPfGLMxs4frWZ4O', 1, 0, 0, '2015-07-13 07:48:42', '2015-07-20 11:43:30'),
(84, '4219922', '', 'East', '0000-00-00', '', '', '', '', '', '', '', 'ee@gmail.com', '', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 0, 0, '', '', '', '', '$2y$10$epafsuJbsTR8m10hJRfXM.aUyPgpCUi4d49100PWlP5MqKT.eptxC', 'test1234', 'B9OwbYQ6D0CLvq2WuIdS5MyJecEZH8VPkTltf4zUoj1rGmpKAs', '', 1, 0, 0, '2015-07-16 11:33:48', '2015-07-16 11:33:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
