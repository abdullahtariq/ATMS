-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 03:54 PM
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
(78, 'admin@unems.com', 'acbd9ab2f68bea3f5291f825416546a1', 'admin', 'Fahad', 'Test2', '46789335', '11-04-2017', '453454797', '28-01-17', '23-01-17', '45000', 'AF', 'HS', 'FT-AF-4532', 'un employee', 'Fixed Term', '2QS', '2017-04-11 18:09:31', 'off', '', '0000-00-00 00:00:00', 0, ''),
(79, 'manzarnouman@gmail.com', 'acbd9ab2f68bea3f5291f825416546a1', 'HS', 'Manzar', 'Noman', '325465567', '08-04-2017', '7969656', '01-04-2017', '02-04-2017', '56666', 'AM', 'HS', 'MN-0872', 'un family contractor', 'ICC', '2QS', '2017-04-08 21:10:47', 'on', 'FT-AF-4532', '0000-00-00 00:00:00', 0, ''),
(80, 'luqman@g.com', '378a19169786f7b4b4c618036a48cba5', 'HS', 'luqman', 'saeed', '956545544', '08-04-2017', '78646895', '02-04-2017', '01-04-2017', '500000', 'AM', 'HS', 'LS-AM-1491664872843', 'un employee', 'Temporary Appointment', '10-RC', '2017-04-08 21:04:14', 'on', 'FT-AF-4532', '0000-00-00 00:00:00', 0, ''),
(81, 'marita@f.com', '098f6bcd4621d373cade4e832627b4f6', 'HM', 'marita', 'eric', '970643', '10-04-2017', '7654321', '04-04-2017', '01-04-2017', '500000', 'HQ', 'HM', 'ME-HQ-1491665224521', 'un family contractor', 'ICC', 'RB-10', '2017-04-11 18:17:13', 'off', 'FT-AF-4532', '2017-04-08 15:27:24', 0, ''),
(82, 'faabdullahtariq@gmail.com', 'a291a124f336d8df49f0c5798f91a58d', 'admin', 'Fahad', 'Tariq', '98710', '10-04-2017', '0982990099', '10-04-2017', '30-04-2017', '4100', 'AF', 'CH', 'FT-AF-1491813354291', 'un employee', 'Fixed Term', '2QS', '2017-04-10 13:41:49', 'off', 'FT-AF-4532', '2017-04-10 08:38:46', 0, ''),
(83, 'khan@ali.com', 'a294b9a1325a7c6b01a614202c5e5599', 'HS', 'ali', 'khan', '435689098765', '11-04-2017', '123456', '06-04-2017', '13-04-2017', '500000', 'EU', 'HS', 'AK-AM-1491854665301', 'un employee', 'Continuous', 'RB-10', '2017-04-11 13:47:49', 'on', 'ME-HQ-1491665224521', '2017-04-10 20:12:14', 0, ''),
(88, 'test@12.com', '1962186da19ae6cf5c10ccd7e425d59c', 'HS', 'test', 'test1', '612099', '11-04-2017', '67445678', '07-04-2017', '04-04-2017', '', 'AS', 'HS', 'TT-AS-1491855856341', 'consultants', 'Trygin', '2QS', '2017-04-11 17:40:15', 'off', 'ME-HQ-1491665224521', '2017-04-10 20:24:19', 0, ''),
(90, 'salman@s.com', '2d04c67be2b97d6aa380e5d3b56f2bc2', 'AG', 'salman', 'sal', '34565767', '11-04-2017', '345678', '01-04-2017', '04-03-2017', '500000', 'EU', 'AG', 'SS-EU-1491914448845', 'un family contractor', 'ICC', 'RB-10', '2017-04-11 17:47:38', 'on', 'ME-HQ-1491665224521', '2017-04-11 12:43:16', 0, ''),
(91, 'jhoni@b.com', '0ebe4bd0d65e2cc1865352681d3523b5', 'AG', 'jhoni', 'bravo', '567789809887', '11-04-2017', '67445678', '01-04-2017', '05-04-2017', '500000', 'AM', 'AG', 'JB-AM-1491914803755', 'un family contractor', 'ICC', '2QS', '2017-04-11 18:27:00', 'on', 'ME-HQ-1491665224521', '2017-04-11 12:46:56', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
