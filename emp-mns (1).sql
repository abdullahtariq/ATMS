-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 09:20 PM
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
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `dphone` varchar(50) NOT NULL,
  `actfrom` varchar(100) NOT NULL,
  `idnno` varchar(100) NOT NULL,
  `Mnumber` varchar(50) NOT NULL,
  `contsrt` varchar(50) NOT NULL,
  `contend` varchar(50) NOT NULL,
  `peryear` varchar(100) NOT NULL,
  `cnthub` varchar(50) NOT NULL,
  `urole` varchar(50) NOT NULL,
  `findata` varchar(50) NOT NULL,
  `finopt` varchar(50) NOT NULL,
  `funds` varchar(50) NOT NULL,
  `lastactivity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deactivate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_type`, `fname`, `lname`, `dphone`, `actfrom`, `idnno`, `Mnumber`, `contsrt`, `contend`, `peryear`, `cnthub`, `urole`, `findata`, `finopt`, `funds`, `lastactivity`, `deactivate`) VALUES
(1, 'admin@unems.com', 'acbd9ab2f68bea3f5291f825416546a1', 'admin', 'Fahad', 'Test 3', '7678965', '02-04-2017', 'FT-AS-7678', '879578687', '24-03-2017', '31-03-2017', '2345566', 'AS', 'HM', 'consultants', 'SSA', 'RB-10', '2017-04-02 18:52:33', 'on'),
(30, 'ayesha@ahmad.com', '44ee4f5046b0085efdac448ab1db9468', 'HS', 'Ayesha', 'Ahmad', '356789656788', '29-03-2017', 'AA-AS-3567', '', '09-03-2017', '07-03-2017', '23222', 'AS', 'HS', 'un employee', 'Continuous', '2QS', '0000-00-00 00:00:00', ''),
(32, 'jawad@you.com', '598cd6dba5eb9548055c09de01dbd10e', 'HS', 'remsha', 'jawad', '57687953', '27-03-2017', 'RJ-AF-5768', '', '03-03-2017', '06-03-2017', '500000', 'AF', 'HS', 'un employee', 'Temporary Appointment', '2QS', '0000-00-00 00:00:00', ''),
(59, 'qb@gmail.com', 'ccfedbee478ac1c88ffe34ced9bc16a9', 'AG', 'Imran', 'IMP', '7560536790', '28-03-2017', 'II-AM-7560', '', '11-03-2017', '08-03-2017', '56666', 'AM', 'AG', 'un family contractor', 'ICC', '2QS', '0000-00-00 00:00:00', ''),
(60, 'eric@shaw.com', 'f22cf276cdfd98c8afb5bb9b12db777d', 'HM', 'eric', 'shaw', '593562663', '28-03-2017', 'ES-EU-5935', '', '11-03-2017', '01-02-2017', '56666', 'EU', 'HM', 'un family contractor', 'ICC', '2QS', '0000-00-00 00:00:00', ''),
(61, 'jhon@2.com', 'db7b0e73ade7728516e2f3a6fe430905', 'AG', 'jay', 'jhon', '539588372', '02-04-2017', 'JJ-EU-5395', '', '01-03-2017', '01-03-2017', '100', 'EU', 'AG', 'un family contractor', 'ICC', '2QS', '2017-04-02 18:18:48', 'on'),
(62, 'bran@david.com', 'b667e958ff74690193cc0b53cec66488', 'HM', 'bran', 'david', '12345888', '30-03-2017', 'BD-EU-1234', '', '02-03-2017', '14-03-2017', '500000', 'EU', 'HM', 'consultants', 'SSA', '2QS', '0000-00-00 00:00:00', ''),
(63, 'narmeen@q.com', 'Qwerty', 'HM', 'narmeen', 'syed', '123456', '30-03-2017', 'NS-AF-1234', '', '18-03-2017', '01-03-2017', '10000', 'AF', 'CH', 'un family contractor', 'ICC', 'RB-10', '0000-00-00 00:00:00', ''),
(64, 'sasha@a.com', '5e337ead04264089166a00b79d57a582', 'SF', 'sasha', 'agha', '439872934', '01-03-2017', 'SA-AM-4398', '', '03-03-2017', '01-03-2017', '56666', 'AM', 'SF', 'un family contractor', 'ICC', 'RB-10', '2017-03-31 12:53:11', ''),
(65, 'Q@b.com', 'bb43b7d454472a424636a4df7593cb23', 'SF', 'Q', 'B', '43665365', '31-03-2017', 'QB-AM-4366', '', '04-03-2017', '01-03-2017', '56666', 'AM', 'SF', 'un employee', 'Temporary Appointment', 'RB-10', '2017-03-31 12:54:24', ''),
(66, 'mv@nv.com', 'a55496588b6cc360b76c59eaa45411a6', 'SF', 'mv', 'nv', '12345888', '31-03-2017', 'MN-1234', '56769887978', '17-03-2017', '01-03-2017', '56666', 'AM', 'SF', 'consultants', 'SSA', '10-RC', '2017-03-31 14:54:38', ''),
(67, 'mack@af.com', '1b1841903a48cbb95f82ada7dc060720', 'SF', 'mack', 'afron', '40694643', '31-03-2017', 'MA-3594', '290530555', '09-03-2017', '01-03-2017', '20000', 'HQ', 'SF', 'consultants', 'Trygin', 'RB-10', '2017-03-31 16:36:36', ''),
(68, 'palwasha@y.com', 'ea2c86121ffff7df60b230513c3c758d', 'SF', 'palwasha', 'yousaf', '543396785', '03-04-2017', 'PY-1669', '12334567', '06-04-2017', '08-04-2017', '500000', 'EU', 'SF', 'consultants', 'Trygin', '10-RC', '2017-04-02 19:13:06', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
