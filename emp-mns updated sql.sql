-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 09:49 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `deskphone` varchar(50) NOT NULL,
  `activefrom` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `contractstart` varchar(50) NOT NULL,
  `contractend` varchar(50) NOT NULL,
  `peryear` varchar(50) NOT NULL,
  `continents` varchar(50) NOT NULL,
  `inforole` varchar(50) NOT NULL,
  `identity_no` varchar(100) NOT NULL,
  `finanasdata` varchar(50) NOT NULL,
  `finanasoption` varchar(50) NOT NULL,
  `funds` varchar(50) NOT NULL,
  `lastactivity` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deactivate` varchar(50) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `new_user_c` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `new_user_e` int(11) NOT NULL,
  `created_by_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `user_type`, `firstname`, `lastname`, `deskphone`, `activefrom`, `mobile`, `contractstart`, `contractend`, `peryear`, `continents`, `inforole`, `identity_no`, `finanasdata`, `finanasoption`, `funds`, `lastactivity`, `deactivate`, `created_by`, `new_user_c`, `new_user_e`, `created_by_name`) VALUES
(78, 'admin@unems.com', 'acbd9ab2f68bea3f5291f825416546a1', 'admin', 'Fahad', 'Test2', '46789335', '18-04-2017', '453454797', '28-01-17', '23-01-17', '45000', 'AF', 'HS', 'FT-AF-4532', 'un employee', 'Temporary Appointment', '2QS', '2017-04-29 14:50:37', 'off', '', '0000-00-00 00:00:00', 0, ''),
(79, 'manzarnouman@gmail.com', 'acbd9ab2f68bea3f5291f825416546a1', 'HS', 'Manzar', 'Noman', '325465567', '12-04-2017', '7969656', '01-04-2017', '02-04-2017', '56666', 'AM', 'HS', 'MN-0872', 'un family contractor', 'ICC', '2QS', '2017-04-12 01:30:18', 'off', 'FT-AF-4532', '0000-00-00 00:00:00', 0, ''),
(80, 'luqman@g.com', '378a19169786f7b4b4c618036a48cba5', 'HS', 'luqman', 'saeed', '956545544', '18-04-2017', '78646895', '02-04-2017', '01-04-2017', '500000', 'AM', 'HS', 'LS-AM-1491664872843', 'un employee', 'Temporary Appointment', '10-RC', '2017-04-18 19:50:29', 'off', 'FT-AF-4532', '0000-00-00 00:00:00', 0, ''),
(81, 'marita@f.com', '098f6bcd4621d373cade4e832627b4f6', 'HM', 'marita', 'eric', '970643', '28-04-2017', '7654321', '04-04-2017', '01-04-2017', '500000', 'HQ', 'HS', 'ME-HQ-1491665224521', 'un family contractor', 'ICC', 'RB-10', '2017-04-29 14:54:30', 'off', 'FT-AF-4532', '2017-04-08 15:27:24', 0, ''),
(82, 'faabdullahtariq@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'HM', 'Fahad', 'Tariq', '98710', '28-04-2017', '0982990099', '10-04-2017', '30-04-2017', '4100', 'AF', 'HM', 'FT-AF-1491813354291', 'un employee', 'Fixed Term', '2QS', '2017-04-28 15:11:33', 'off', 'FT-AF-4532', '2017-04-10 08:38:46', 0, ''),
(83, 'khan@ali.com', '827ccb0eea8a706c4c34a16891f84e7b', 'HS', 'ali', 'khan', '435689098765', '12-04-2017', '123456', '06-04-2017', '13-04-2017', '500000', 'EU', 'HS', 'AK-AM-1491854665301', 'un employee', 'Continuous', 'RB-10', '2017-04-29 14:42:27', 'off', 'ME-HQ-1491665224521', '2017-04-10 20:12:14', 0, ''),
(88, 'test@12.com', '827ccb0eea8a706c4c34a16891f84e7b', 'HS', 'test', 'test1', '612099', '12-04-2017', '67445678', '07-04-2017', '04-04-2017', '500000', 'AS', 'HS', 'TT-AS-1491855856341', 'consultants', 'Trygin', 'RB-10', '2017-04-12 00:48:46', 'off', 'ME-HQ-1491665224521', '2017-04-10 20:24:19', 0, ''),
(90, 'salman@s.com', '827ccb0eea8a706c4c34a16891f84e7b', 'AG', 'salman', 'sal', '34565767', '12-04-2017', '345678', '01-04-2017', '04-03-2017', '10000', 'EU', 'AG', 'SS-EU-1491914448845', 'consultants', 'SSA', '10-RC', '2017-04-29 02:26:52', 'off', 'ME-HQ-1491665224521', '2017-04-11 12:43:16', 0, ''),
(91, 'jhoni@b.com', '827ccb0eea8a706c4c34a16891f84e7b', 'AG', 'jhoni', 'bravo', '567789809887', '29-04-2017', '67445678', '01-04-2017', '05-04-2017', '500000', 'AS', 'AG', 'JB-AM-1491914803755', 'un employee', 'Continuous', '2QS', '2017-04-29 14:57:44', 'off', 'ME-HQ-1491665224521', '2017-04-11 12:46:56', 0, ''),
(92, 'leo@l.com', 'ffc9bc591443caab5565f2f1f5c6cca8', 'SF', 'leo', 'lilly', '9645678', '12-04-2017', '67445678', '01-04-2017', '20-04-2017', '2222', 'AF', 'SF', 'LL-AF-1491941555152', 'un family contractor', 'ICC', '10-RC', '2017-04-12 01:14:16', 'on', 'FT-AF-4532', '2017-04-11 20:14:00', 0, ''),
(93, 'amir@saq.com', 'f884a381669e792d68df9955ea73dd2c', 'HM', 'amir', 'saq', '345678', '13-04-2017', '456787', '01-04-2017', '08-04-2017', '500000', 'EU', 'HM', 'AS-EU-1492100724517', 'un family contractor', 'UNOPS', 'RB-10', '2017-04-13 21:25:42', '', 'FT-AF-4532', '2017-04-13 16:25:42', 0, ''),
(94, 'dilawar@gmail.com', 'd3edf65da4e1320e309c9cbdca0bfbe5', 'HS', 'Dilawar', 'jan', '612099', '18-04-2017', '67445678', '10-04-2017', '01-04-2017', '500000', 'AM', 'HS', 'DJ-AM-2767', 'un family contractor', 'ICC', 'RB-10', '2017-04-18 15:55:10', '', 'FT-AF-4532', '2017-04-18 10:55:10', 0, ''),
(95, 'hashim@1.com', '202cb962ac59075b964b07152d234b70', 'SF', 'hashim', 'amla', '1234679', '29-04-2017', '67445678', '04-04-2017', '01-04-2017', '235', 'AF', 'SF', 'HA-AM-9389', 'un employee', 'Fixed Term', '2QS', '2017-04-29 14:51:32', 'off', 'FT-AF-4532', '2017-04-24 13:23:36', 0, ''),
(96, 'shan@1.com', '827ccb0eea8a706c4c34a16891f84e7b', 'AG', 'shan', 'minto', '493787654', '28-04-2017', '3456779', '02-04-2017', '30-04-2017', '9873455', 'HQ', 'AG', 'SM-AS-0335', 'un employee', 'Continuous', 'RB-10', '2017-04-29 02:43:20', 'off', 'ME-HQ-1491665224521', '2017-04-24 13:26:41', 0, ''),
(100, 'kashi@hens.com', '4f1c4abf7b75b0fb02b32ef5b5ba8ab6', 'HS', 'kashi', 'hens', '346578798', '25-04-2017', '24354547687697', '07-04-2017', '01-04-2017', '500000', 'EU', 'HS', 'KH-EU-4347', 'un employee', 'Temporary Appointment', 'RB-10', '2017-04-25 14:45:19', '', 'ME-HQ-1491665224521', '2017-04-25 09:45:19', 0, ''),
(101, 'tom@walker.com', '827ccb0eea8a706c4c34a16891f84e7b', 'AG', 'tom', 'walker', '345657898', '28-04-2017', '436575890', '01-04-2017', '14-04-2017', '500000', 'AM', 'AG', 'TW-AM-7391', 'un family contractor', 'ICC', '2QS', '2017-04-29 17:50:12', 'off', 'ME-HQ-1491665224521', '2017-04-25 09:47:02', 0, ''),
(102, 'rana@2.com', '8c32bb8f4145634cc69b1c09ff7b2bcf', 'HM', 'rana', 'imran', '612099', '26-04-2017', '456787', '12-04-2017', '05-04-2017', '500000', 'AM', 'HM', 'RI-AM-8524', 'un family contractor', 'ICC', '10-RC', '2017-04-26 15:50:11', '', 'FT-AF-4532', '2017-04-26 10:50:11', 0, ''),
(103, 'maya@a.com', '6f0760f0cda8440bd316a3331b2bab6f', 'AG', 'maya', 'ali', '45632345', '29-04-2017', '345678', '05-04-2017', '01-04-2017', '464', 'EU', 'AG', 'MA-EU-9380', 'un employee', 'Temporary Appointment', 'RB-10', '2017-04-29 14:53:28', '', 'FT-AF-4532', '2017-04-29 09:53:28', 0, ''),
(104, 'urwa@h.com', '883e4ba7cf63b07caa35e4ae89184bca', 'HS', 'urwa', 'hocane', '435678', '29-04-2017', '2963211', '08-04-2017', '04-04-2017', '4500', 'EU', 'HS', 'UH-EU-1915', 'un employee', 'Temporary Appointment', 'RB-10', '2017-04-29 15:04:15', '', 'ME-HQ-1491665224521', '2017-04-29 10:04:15', 0, '');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `identity_no` (`identity_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
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
