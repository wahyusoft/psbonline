-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 12:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbonlinedb`
--

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
  `skor` int(11) DEFAULT '0',
  `pin` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`pendaftarId`, `nama`, `nis`, `jk`, `tmplahir`, `tgllahir`, `agama`, `anakke`, `jumsdrkandung`, `jumsdrtiri`, `hobi`, `dusun`, `rt`, `rw`, `desa`, `kecamatan`, `kodepos`, `namaayah`, `namaibu`, `pekerjaanayah`, `pekerjaanibu`, `agamaayah`, `agamaibu`, `pendidikanayah`, `pendidikanibu`, `penghasilanayah`, `penghasilanibu`, `dusunortu`, `rtortu`, `rwortu`, `desaortu`, `kecamatanortu`, `namawali`, `kerjawali`, `agamawali`, `dusunwali`, `rtwali`, `rwwali`, `desawali`, `kecamatanwali`, `asalsekolah`, `alamatsekolah`, `prestasi17`, `prestasi27`, `prestasi18`, `prestasi28`, `prestasi19`, `prestasi29`, `thnmasuk`, `thnlulus`, `kejuaraantingkat`, `juarake`, `jenis`, `userID`, `ka1`, `ka2`, `ka3`, `ka4`, `nonka1`, `nonka2`, `nonka3`, `nonka4`, `ijazah`, `skhun`, `kk`, `kps`, `kip`, `pkh`, `tglpost`, `jalur`, `skor`, `pin`) VALUES
(1, 'Kamini', '123224112', 'Perempuan', 'Blora', '1983-06-04', 'Islam', 2, 4, 1, 'Makan dan jadi presiden', 'Pereng Wetan', '60', '2', 'Argorejo', 'Sedayu', '55123', 'Darno', 'Sumiyatun', 'Koding', 'PRT', 'Islam', 'Islam', 'S1', 'D3', '3000000-5000000', '500000-1000000', 'Pereng Wetan', '60', '01', 'Argorejo', 'Sedayu', '', '', 'Islam', '', '', '', '', '', 'MI Iptidaiyah', 'Jl Wates KM 07', 'Juara tinju', '', '', '', '', '', 2013, 2015, 'Nasional', '1', 'Pertarungan', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-10 11:44:31', 'umum', 0, 'YFNLM'),
(2, 'Faris Grita', '11122321', 'Laki-laki', 'Lubuk Lingau', '1988-07-21', 'Islam', 1, 1, 1, 'Mancing', 'Dabo', '12', '2', 'Maja', 'Sela', '11121', 'Dedy', 'Dona', 'Dosen', 'Dagang', 'Islam', 'Islam', 'S3', 'S1', '>5000000', '2000000-3000000', '', '', '', '', '', '', '', 'Islam', '', '', '', '', '', 'Tsanawiyah', 'Jl. Bandung No 99', '', '', '', '', '', '', 2012, 2015, '', '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-10 11:57:46', 'prestasi', 0, 'AR46I');

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
(1, 'Muhammmad', 'Said', 'admin', 'admin', 'admin', 1, 'b02a2-user2-160x160.png', '2017-04-10 12:04:49');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `pendaftarId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
