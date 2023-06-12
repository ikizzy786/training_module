-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 03:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `startdatestarttime` datetime NOT NULL,
  `enddateendtime` datetime NOT NULL,
  `totalnohours` varchar(11) NOT NULL,
  `trainingorganized` varchar(25) NOT NULL,
  `attendancetype` enum('online','physical','','') NOT NULL,
  `typeoftraining` enum('training','workshop','seminar','conference','shortcourse',',') NOT NULL,
  `trainingoutcomes` text NOT NULL,
  `mytrainingdocs` varchar(250) NOT NULL,
  `supervisor_approval` tinyint(1) DEFAULT 0,
  `supervisor_comment` text DEFAULT NULL,
  `hr_approval` tinyint(1) NOT NULL DEFAULT 0,
  `hr_comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `startdatestarttime`, `enddateendtime`, `totalnohours`, `trainingorganized`, `attendancetype`, `typeoftraining`, `trainingoutcomes`, `mytrainingdocs`, `supervisor_approval`, `supervisor_comment`, `hr_approval`, `hr_comment`) VALUES
(145, 'Employee Relationship', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', 'Dr.Babul', 'online', 'seminar', 'nh', 'Cat03.jpg', 0, NULL, 0, NULL),
(147, 'Striking Speech for Executives', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-18998', 'Dr.Seena', 'online', 'seminar', 'sdsd', 'e2970f80399d0048769eea6d8cffea1d--planet-earth-maldives.jpg', 0, NULL, 0, NULL),
(148, 'Striking ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-19029', 'Dr.S', 'online', 'workshop', 'kkk', '', 0, NULL, 0, NULL),
(155, 'Effective Communication', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-18998', 'Dr.Iqbal Mohamed', 'online', 'seminar', 'Improve Communication Skills', '', 0, NULL, 0, NULL),
(156, 'Essential Skills for financial Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-18998', 'Dr.Fathimath Suza', 'online', 'workshop', 'sdsdsd', '', 0, NULL, 0, NULL),
(157, 'Event Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-18664', 'Dr.Hassan Mohamed', 'physical', 'seminar', 'sdsd', '', 0, NULL, 0, NULL),
(161, 'bbbbbbbbbbbbbbbbbbbbbbbbbb', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '58', 'dddddddddddd', 'online', 'seminar', 'jjjj', 'uploads/e2970f80399d0048769eea6d8cffea1d--planet-earth-maldives.jpg', 0, NULL, 0, NULL),
(162, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'online', 'training', '', '', 1, 'Approved', 0, NULL),
(163, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'online', 'training', '', '', 1, 'dd', 0, NULL),
(164, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'online', 'training', '', '', 1, 'ddd', 0, NULL),
(165, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'online', 'training', '', '', 0, '', 0, NULL),
(166, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', 'online', 'training', '', '', 0, '', 1, 'HR approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
