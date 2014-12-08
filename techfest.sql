-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2014 at 04:04 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techfest`
--
CREATE DATABASE IF NOT EXISTS `techfest` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `techfest`;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE IF NOT EXISTS `configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(500) NOT NULL,
  `site_logo` varchar(150) NOT NULL,
  `location` text NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `developer_info` varchar(500) NOT NULL,
  `copyright_info` varchar(500) NOT NULL,
  `event_title` varchar(500) NOT NULL,
  `event_date` varchar(500) NOT NULL,
  `event_venue` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created`) VALUES
(1, 'sdfsdf', '2014-11-06 00:00:00', '0000-00-00 00:00:00', '2014-11-21 17:10:12'),
(2, 'sdf', '2014-11-20 00:00:00', '2014-11-20 00:00:00', '2014-11-21 17:10:23'),
(3, 'sdfds', '2014-11-07 00:00:00', '0000-00-00 00:00:00', '2014-11-21 17:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `description`, `user_id`, `created`, `modified`) VALUES
(1, 'What is ICT ?', '<p style="box-sizing: border-box; margin: 0.3em 0px 2em; font-size: 13px; line-height: 22.28125px; color: rgb(106, 106, 106); -webkit-font-smoothing: subpixel-antialiased; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">\r\n	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>\r\n<p style="box-sizing: border-box; margin: 0.3em 0px 2em; font-size: 13px; line-height: 22.28125px; color: rgb(106, 106, 106); -webkit-font-smoothing: subpixel-antialiased; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">\r\n	Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>\r\n', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE IF NOT EXISTS `gallerys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(500) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date_added` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `photo`, `description`, `date_added`, `modified_date`, `created`, `modified`, `user_id`) VALUES
(10, '49bd8-Penguins.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 'e10c4-Chrysanthemum.jpg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE IF NOT EXISTS `priority` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `created`, `title`) VALUES
(1, '2014-11-20 17:42:03', 'HIgh\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `metric_no` varchar(100) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `remarks` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `metric_no`, `semester`, `department`, `phone`, `email`, `comment`, `created`, `remarks`) VALUES
(1, 'Mehedi Hasan', 'Q113040', '7th', 'CSE', '01686489638', '', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(150) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `day` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `time`, `title`, `description`, `day`, `created`, `modified`, `user_id`) VALUES
(1, '10:00 am', 'Suspendisse dignissim', '<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; line-height: 22.28125px;">Convallis dolor at viverra. Nullam consequat nulla enim, eu vulputate magna varius quis.</span></p>\r\n', '1', '0000-00-00 00:00:00', '2014-11-21 19:58:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `speaker`
--

CREATE TABLE IF NOT EXISTS `speaker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `image` varchar(150) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `speaker`
--

INSERT INTO `speaker` (`id`, `name`, `image`, `designation`, `description`, `created`, `modified`, `user_id`) VALUES
(1, 'Farid Ahmed Subhani', '9f142-penguins.jpg', 'Dean, DBA', '<p>\r\n	Little description about Farid Ahmed Subhani</p>\r\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `title`, `logo`, `created`, `modified`, `user_id`) VALUES
(1, 'Tutplus', '5acfb-speaker1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `todoID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `date_complete` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `level` varchar(150) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `priority_id` int(11) NOT NULL,
  PRIMARY KEY (`todoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`todoID`, `title`, `date_complete`, `user_id`, `status`, `level`, `date_added`, `priority_id`) VALUES
(1, 'Test Task', '2014-1-1', 1, 0, '', '2014-11-20 12:40:32', 1),
(2, 'sdf dfdsf', '2014-1-1', 1, 0, '', '2014-11-20 12:40:52', 1),
(4, 'sdfsdfdsfdsf', '2014-1-1', 1, 1, '', '2014-11-20 12:46:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `image`) VALUES
(1, '\0\0', 'Mehedi Hasan', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1416598123, 1, 'Admin', 'istrator', 'assistant professor', '01686489638', ''),
(2, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'member member', '7e6865fcbc44f2d33ec18140111fcfa694125a7c', NULL, 'hasanmehdi89@yahoo.com', NULL, NULL, NULL, NULL, 1416591688, 1416591748, 1, 'member', 'member', 'assistant professor', '0152666', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 1, 1),
(8, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
