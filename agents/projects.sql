-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 11:02 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp-mns`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `strtdate` varchar(40) NOT NULL,
  `ticketing` varchar(50) NOT NULL,
  `meeting` varchar(50) NOT NULL,
  `leave` varchar(50) NOT NULL,
  `others` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `enddate` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `strtdate`, `ticketing`, `meeting`, `leave`, `others`, `user_id`, `enddate`) VALUES
(17, '2017-04-13T00:04:00+05:30', '0', '0', '8', '0', 101, ''),
(18, '2017-04-12T00:04:00+05:30', '12', '8', '4', '2', 101, ''),
(19, '2017-04-14T00:04:00+05:30', '12', '5', '4', '1', 101, ''),
(21, '2017-04-18T00:04:00+05:30', '12', '2', '8', '0', 101, ''),
(22, '2017-04-19T00:04:00+05:30', '1', '9', '8', '9', 101, ''),
(26, '2017-04-11T00:04:00+05:30', '12', '3', '8', '9', 101, ''),
(36, '2017-05-10T00:05:00+05:30', '0', '0', '8', '0', 101, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
