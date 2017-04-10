-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 02:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `agreementID` int(11) NOT NULL,
  `start_int` date DEFAULT NULL,
  `come_back` date DEFAULT NULL,
  `waiting` date DEFAULT NULL,
  `others` varchar(200) DEFAULT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`agreementID`, `start_int`, `come_back`, `waiting`, `others`, `userID`) VALUES
(1, '2017-01-06', '2017-01-27', '2017-01-13', 'asas', 3);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendanceID` int(11) NOT NULL,
  `supervisorID` int(1) DEFAULT NULL,
  `intern_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendanceID`, `supervisorID`, `intern_name`) VALUES
(1, 3, 'Programming');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_details`
--

CREATE TABLE `attendance_details` (
  `attendanceID` int(11) DEFAULT NULL,
  `date_attendance` date DEFAULT NULL,
  `am_int` varchar(10) DEFAULT NULL,
  `am_out` varchar(10) DEFAULT NULL,
  `total1` varchar(20) DEFAULT NULL,
  `pm_int` varchar(10) DEFAULT NULL,
  `pm_out` varchar(10) DEFAULT NULL,
  `total2` varchar(20) DEFAULT NULL,
  `over_int` varchar(10) DEFAULT NULL,
  `over_out` varchar(10) DEFAULT NULL,
  `total3` varchar(20) DEFAULT NULL,
  `totalall` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_details`
--

INSERT INTO `attendance_details` (`attendanceID`, `date_attendance`, `am_int`, `am_out`, `total1`, `pm_int`, `pm_out`, `total2`, `over_int`, `over_out`, `total3`, `totalall`) VALUES
(1, '2017-01-03', '12:00 AM', '04:15 PM', '12', '04:00 PM', '04:00 PM', '21', '04:00 PM', '04:00 PM', '12', '22'),
(1, '2017-01-17', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '2017-01-17', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '2017-01-31', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', ''),
(1, '0000-00-00', '12:00 AM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '04:00 PM', '04:00 PM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `docID` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `evaluationId` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `work_regular` varchar(20) DEFAULT NULL,
  `readines` varchar(20) DEFAULT NULL,
  `reviwerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`evaluationId`, `userID`, `work_regular`, `readines`, `reviwerID`) VALUES
(1, 2, 'Above Average', 'Above Average', 3);

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `internshipID` int(11) NOT NULL,
  `programs` varchar(200) DEFAULT NULL,
  `terms` char(2) DEFAULT NULL,
  `weeks` varchar(10) DEFAULT NULL,
  `hours` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`internshipID`, `programs`, `terms`, `weeks`, `hours`) VALUES
(1, 'CCS', '2', '26', '1040'),
(2, 'COE', '1', '13', '520');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notificationID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `subjecttxt` varchar(255) DEFAULT NULL,
  `messagetxt` text,
  `readed` enum('1','0') DEFAULT '0',
  `latestpost` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notificationID`, `userID`, `subjecttxt`, `messagetxt`, `readed`, `latestpost`) VALUES
(1, 2, 'Test Comment', '<p>\r\n	Hello Hey</p>\r\n', '1', '2017-01-21 10:03:54'),
(2, 2, 'Hello Only Test', '<p>\r\n	lorem ipsum</p>\r\n', '1', '2017-01-25 09:51:55'),
(3, 2, 'test second', '<p>\r\n	lorem ipsum</p>\r\n', '1', '2017-01-25 09:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `pendaftarId` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `tmplahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `anakke` tinyint(3) DEFAULT NULL,
  `jumsdrkandung` tinyint(3) DEFAULT NULL,
  `jumsdrtiri` tinyint(3) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `dusun` varchar(100) DEFAULT NULL,
  `rt` char(3) DEFAULT NULL,
  `rw` char(3) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kodepos` char(5) DEFAULT NULL,
  `namaayah` varchar(100) DEFAULT NULL,
  `namaibu` varchar(100) DEFAULT NULL,
  `pekerjaanayah` varchar(100) DEFAULT NULL,
  `pekerjaanibu` varchar(100) DEFAULT NULL,
  `agamaayah` varchar(50) DEFAULT NULL,
  `agamaibu` varchar(50) DEFAULT NULL,
  `pendidikanayah` varchar(50) DEFAULT NULL,
  `pendidikanibu` varchar(50) DEFAULT NULL,
  `penghasilanayah` varchar(30) DEFAULT NULL,
  `penghasilanibu` varchar(30) DEFAULT NULL,
  `dusunortu` varchar(30) DEFAULT NULL,
  `rtortu` varchar(30) DEFAULT NULL,
  `rwortu` varchar(30) DEFAULT NULL,
  `desaortu` varchar(50) DEFAULT NULL,
  `kecamatanortu` varchar(30) DEFAULT NULL,
  `namawali` varchar(30) DEFAULT NULL,
  `kerjawali` varchar(30) DEFAULT NULL,
  `agamawali` varchar(30) DEFAULT NULL,
  `dusunwali` varchar(30) DEFAULT NULL,
  `rtwali` varchar(30) DEFAULT NULL,
  `rwwali` varchar(30) DEFAULT NULL,
  `desawali` varchar(30) DEFAULT NULL,
  `kecamatanwali` varchar(50) DEFAULT NULL,
  `asalsekolah` varchar(50) DEFAULT NULL,
  `alamatsekolah` varchar(100) DEFAULT NULL,
  `prestasi17` varchar(100) DEFAULT NULL,
  `prestasi27` varchar(100) DEFAULT NULL,
  `prestasi18` varchar(100) DEFAULT NULL,
  `prestasi28` varchar(100) DEFAULT NULL,
  `prestasi19` varchar(100) DEFAULT NULL,
  `prestasi29` varchar(100) DEFAULT NULL,
  `thnmasuk` year(4) DEFAULT NULL,
  `thnlulus` year(4) DEFAULT NULL,
  `kejuaraantingkat` varchar(100) DEFAULT NULL,
  `juarake` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `ka1` tinyint(1) DEFAULT NULL,
  `ka2` tinyint(1) DEFAULT NULL,
  `ka3` tinyint(1) DEFAULT NULL,
  `ka4` tinyint(1) DEFAULT NULL,
  `nonka1` tinyint(1) DEFAULT NULL,
  `nonka2` tinyint(1) DEFAULT NULL,
  `nonka3` tinyint(1) DEFAULT NULL,
  `nonka4` tinyint(1) DEFAULT NULL,
  `ijazah` tinyint(1) DEFAULT NULL,
  `skhun` tinyint(1) DEFAULT NULL,
  `kk` tinyint(1) DEFAULT NULL,
  `kps` tinyint(1) DEFAULT NULL,
  `kip` tinyint(1) DEFAULT NULL,
  `pkh` tinyint(1) DEFAULT NULL,
  `tglpost` datetime DEFAULT NULL,
  `jalur` varchar(10) DEFAULT NULL,
  `skor` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`pendaftarId`, `nama`, `nis`, `jk`, `tmplahir`, `tgllahir`, `agama`, `anakke`, `jumsdrkandung`, `jumsdrtiri`, `hobi`, `dusun`, `rt`, `rw`, `desa`, `kecamatan`, `kodepos`, `namaayah`, `namaibu`, `pekerjaanayah`, `pekerjaanibu`, `agamaayah`, `agamaibu`, `pendidikanayah`, `pendidikanibu`, `penghasilanayah`, `penghasilanibu`, `dusunortu`, `rtortu`, `rwortu`, `desaortu`, `kecamatanortu`, `namawali`, `kerjawali`, `agamawali`, `dusunwali`, `rtwali`, `rwwali`, `desawali`, `kecamatanwali`, `asalsekolah`, `alamatsekolah`, `prestasi17`, `prestasi27`, `prestasi18`, `prestasi28`, `prestasi19`, `prestasi29`, `thnmasuk`, `thnlulus`, `kejuaraantingkat`, `juarake`, `jenis`, `userID`, `ka1`, `ka2`, `ka3`, `ka4`, `nonka1`, `nonka2`, `nonka3`, `nonka4`, `ijazah`, `skhun`, `kk`, `kps`, `kip`, `pkh`, `tglpost`, `jalur`, `skor`) VALUES
(1, 'Andi Ayu', '1212', 'P', 'antariksa', '0000-00-00', 'Islam', 1, 13, 16, 'asas', 'asa', '11', '2', 'sasa', '1', '21', 'asa', 'sss', 'asas', 'saa', 'Islam', 'Islam', 'Tidak Sekolah', 'Tidak Sekolah', 'lt500000', '1000000-2000000', 'sadsad', '23', '32', 'saa', 'asas', 'asas', 'asda', 'Islam', 'asa', '23', '22', 'asa', 'sasa', 'sas', 'asas', 'sas', 'saas', 'asa', 'sas', 'as', 'asa', 2015, 2015, 'sasa', 'asa', 'asa', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-10 02:06:50', 'umum', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `userName` varchar(100) NOT NULL,
  `userPassword` varchar(60) NOT NULL,
  `userAccess` enum('admin','supervisor','intern') DEFAULT NULL,
  `islogin` tinyint(1) DEFAULT NULL,
  `alvatar` varchar(255) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `FirstName`, `LastName`, `userName`, `userPassword`, `userAccess`, `islogin`, `alvatar`, `lastlogin`) VALUES
(1, 'Mehdi ', 'Hadiany', 'admin', 'admin', 'admin', 1, 'b02a2-user2-160x160.jpg', '2017-04-09 17:06:05'),
(2, 'Wahyu', 'Widodo', 'wahyu', 'wahyu', 'intern', 0, '42eb1-avatar5.png', '2017-01-20 10:29:41'),
(3, 'Morris', 'Pearson', 'morris', 'morris', 'supervisor', 0, '45ff1-user8-128x128.jpg', '2017-01-19 20:11:48'),
(5, 'Antonius', NULL, 'anton', 'qwerty', 'intern', 0, 'd8749-avatar04.png', NULL),
(6, 'Darno', NULL, 'darno', 'darno', 'intern', NULL, '16637-avatar04.png', NULL),
(7, 'Wiwin', NULL, 'wiwin', 'qwerty', 'intern', 0, '6a71b-user3-128x128.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`agreementID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendanceID`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`docID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`evaluationId`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`internshipID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notificationID`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`pendaftarId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `agreementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendanceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `docID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `evaluationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `internshipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftarId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
