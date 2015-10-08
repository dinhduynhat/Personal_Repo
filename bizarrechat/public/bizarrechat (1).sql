-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2015 at 03:25 PM
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
  `city` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `interest` varchar(11) NOT NULL,
  `seeking` varchar(1) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(110) NOT NULL,
  `password_raw` varchar(110) NOT NULL,
  `verify_token` varchar(100) NOT NULL,
  `remember_token` varchar(110) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `quickblox_id`, `facebook_id`, `firstname`, `dob`, `phone_code`, `phone_number`, `city`, `address`, `gender`, `interest`, `seeking`, `email`, `password`, `password_raw`, `verify_token`, `remember_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(48, '4023631', '', 'vetris', '0000-00-00', '', '', '', '', '', '', '', 've@vein.com', '$2y$10$rVFUeVppGu3mqrrPisqZv.0M2MkJlmFjVYYlw7rBdVG80OZkUpIG2', '', 'RVZ2Js6XovuSjGwLnkTKecQFamb1g9p73WhNMzqD0A5BHP8ilf', '', 1, 0, '2015-07-06 06:25:51', '2015-07-06 06:25:51'),
(49, '4023642', '', 'vetri', '0000-00-00', '', '', '', '', '', '', '', 've@vein.coms', '$2y$10$ZHSCoHfyNaM2s29NHnQZD.5MdO7bCkSQdmm0TmO6gC37gouIqd0Ni', '', '4T2WGZFj3CzOf0tDYNbd9nUgLsuBIerVvQk1PXAS7Ro5hHwqxc', '', 1, 0, '2015-07-06 06:26:41', '2015-07-06 06:26:41'),
(50, '4023752', '', 'anas', '0000-00-00', '', '', '', '', '', '', '', 'anasahamed@bizarresoftware.in', '$2y$10$.B1lURXNfyil1get61Sfp.qc44FUnTCynaLSsarvVZtHodVVsak/y', '', 'Dhrc6E05skjoa4bdMQeZITCiAFfu7VyGW3NqlzvYOwBSHnP92t', 'xFMKokfe5B0qqLIPxnqcSGG93MJciX2IfleFTezZRunJqimxtEJ08a7jFBlb', 1, 1, '2015-07-06 06:35:10', '2015-07-06 06:38:00'),
(51, '', '421112854741412', 'Gopinath Bizarre', '0000-00-00', '', '', '', '', '', '', '', 'bizarredeveloper@gmail.com', '', '', 'nx5IULEgGFK6zeiB1tJpsPvXar9YubfkWCV7Rl2THOcZSyDo0M', 'm9jm37s08ltUd7R3XrjYiDepstiXRvwNq3MFutZVjBi2KBbGg2jCrXb7BBIh', 1, 0, '2015-07-06 06:43:52', '2015-07-07 04:27:45'),
(52, '4023974', '', 'karthi', '0000-00-00', '', '', '', '', '', '', '', 'kar@king.com', '$2y$10$I.Zw8uia1yBNhrCKgyfpJeD7oXv4pB179WmUIZzjEM27nVxiEAChS', '', 'lsYmEdSyLI4K0bqGNQDOUTifHJ3gj58Zt9coWVxPvezanrB6h2', '', 1, 0, '2015-07-06 06:57:07', '2015-07-06 06:57:07'),
(56, '4025179', '421112854741412', 'Gopinath', '0000-00-00', '', '', '1', '', '', '', '', 'bizarredeveloper@gmail.com', '', '', 'nAmG7Z5vRbkgf6KJpsSFEIhUjODiwt3lC14zTYeq2Ny8oaQuWP', '', 1, 0, '2015-07-06 08:36:33', '2015-07-06 08:36:33'),
(68, '4027830', '', 'te', '0000-00-00', '', '', '2', '', '', '', '', 'allaudeen.s@gmail.com', '$2y$10$mHu3O.aIVFlm./PYV4CgeehpHHGkS4UpKU.3156FPtu5J7gdaU/02', '', 'H1Endo8AfFSYRq4i0hGVgZev72x3U9D6lKTXaIWscNbQJCuOrp', 'zvrppRyMS428FThPbD9CNjGokj98zAJihmswxNIMXLhrIdWnAG22BZWCDw0i', 1, 1, '2015-07-06 12:09:34', '2015-07-06 12:49:37'),
(72, '4046233', '', 'sass rea', '0000-00-00', '', '', '', '', '', '', '', 'sa@sysaxiom.com', '$2y$10$/l1iR7xiYcj0BRHcgfMpPum4DCNi29uTaL9MGo.fyXClbf0U7G00G', 'Open@123', 'o3fCRyePEYNSKqFjbpwTcIz7r9VZ4vmXMBaGlhu068JHO1nQkU', '', 1, 1, '2015-07-07 12:59:00', '2015-07-07 12:59:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
