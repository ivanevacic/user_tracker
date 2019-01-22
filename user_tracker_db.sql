-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2019 at 03:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_tracker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ip` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `hostname` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `region` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `organisation` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `last_visited` datetime NOT NULL,
  `times_visited` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ip`, `hostname`, `city`, `region`, `country`, `location`, `organisation`, `last_visited`, `times_visited`) VALUES
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', 'Koprivnica', 'Koprivnicko-Krizevacka', 'Croatia', '56.0000,24.00000', 'AS1257 TELE2', '0000-00-00 00:00:00', 0),
('145.335.121.444', 'testni305kj9t2t', 'Zagreb', 'Zagrebačka', 'Croatia', '54.0044,21.00000', 'VIP-A1', '0000-00-00 00:00:00', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '0000-00-00 00:00:00', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '0000-00-00 00:00:00', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '0000-00-00 00:00:00', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '0000-00-00 00:00:00', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '0000-00-00 00:00:00', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 14:53:56', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 14:54:07', 0),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 14:56:08', 1),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 14:56:50', 1),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 15:01:47', 1),
('193.217.131.119', 'm193-217-131-119.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 15:06:59', 1),
('193.217.131.129', 'm193-217-131-129.cust.tele2.hr', '', '', 'LT', '56.0000,24.0000', 'AS1257 TELE2', '2019-01-22 15:18:05', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;