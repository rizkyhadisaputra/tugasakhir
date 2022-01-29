-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 04:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oximeter`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `umur` varchar(99) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `id_user` int(12) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id`, `nama`, `umur`, `gender`, `id_user`, `created_by`) VALUES
(24, 'Rizky Hadi Saputra', '21', 'Laki-laki', 46, 46),
(25, 'Ayah', '61', 'Laki-laki', 47, 47),
(26, 'Sellina Nuril Laili', '21', 'Perempuan', 48, 46),
(27, 'Gerald Rizky', '23', 'Laki-laki', 49, 46),
(28, 'Filberd Daniel', '21', 'Laki-laki', 50, 46),
(29, 'Nofal Anam', '23', 'Laki-laki', 51, 46),
(30, 'IBU', '68', 'Perempuan', 52, 47),
(31, 'Ridho Thoriq', '22', 'Laki-laki', 53, 46),
(32, 'Ananda Devi', '22', 'Perempuan', 54, 46);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `saturasi_oksigen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `id_keluarga`, `tanggal`, `saturasi_oksigen`) VALUES
(31, 24, '2021-12-02 14:26:22', 97),
(32, 24, '2021-12-02 15:05:29', 98),
(34, 24, '2021-12-02 15:13:58', 98),
(35, 24, '2021-12-03 07:25:39', 97),
(36, 24, '2021-12-03 07:46:41', 96),
(37, 24, '2021-12-03 07:51:52', 86),
(38, 27, '2021-12-03 14:07:33', 98),
(39, 27, '2021-12-03 14:13:27', 85),
(40, 24, '2021-12-03 14:18:02', 98),
(41, 26, '2021-12-03 14:23:50', 97),
(42, 26, '2021-12-03 14:24:47', 98),
(43, 28, '2021-12-03 15:21:09', 97),
(44, 28, '2021-12-03 15:26:46', 96),
(45, 24, '2021-12-03 15:30:50', 86),
(46, 27, '2021-12-03 15:33:44', 98),
(47, 28, '2021-12-03 15:39:13', 95),
(48, 27, '2021-12-03 15:43:18', 97),
(49, 26, '2021-12-03 16:28:07', 97),
(50, 26, '2021-12-03 16:29:40', 99),
(51, 29, '2021-12-05 15:20:11', 98),
(52, 25, '2021-12-05 23:52:00', 96),
(53, 25, '2021-12-05 23:52:33', 96),
(54, 24, '2021-12-05 23:55:48', 99),
(55, 30, '2021-12-05 23:58:38', 97),
(56, 30, '2021-12-06 00:01:02', 97),
(57, 25, '2021-12-06 00:04:19', 97),
(58, 31, '2021-12-06 06:51:13', 98),
(59, 31, '2021-12-06 06:52:02', 98),
(60, 24, '2021-12-06 07:00:28', 98),
(61, 32, '2021-12-07 15:31:55', 85),
(62, 32, '2021-12-07 15:35:36', 85),
(63, 32, '2021-12-07 15:37:19', 85),
(64, 32, '2021-12-07 15:40:40', 85),
(65, 24, '2021-12-07 15:41:36', 98),
(66, 32, '2021-12-07 15:46:12', 85),
(67, 32, '2021-12-09 11:52:42', 60),
(68, 32, '2021-12-09 11:53:24', 90),
(69, 32, '2021-12-09 11:54:11', 83),
(70, 32, '2021-12-09 11:57:16', 94),
(71, 32, '2021-12-09 12:03:41', 98),
(72, 32, '2021-12-09 12:07:50', 95),
(73, 32, '2021-12-09 12:13:01', 94),
(74, 32, '2021-12-09 12:14:44', 95),
(75, 32, '2021-12-09 12:17:41', 97);

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id` int(11) NOT NULL,
  `saturasi` int(11) NOT NULL,
  `heart` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(99) NOT NULL,
  `role` varchar(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `created_by`) VALUES
(46, 'master', 'eb0a191797624dd3a48fa681d3061212', 'master', 0),
(47, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(48, 'selina123', '6d7579728e88e18203b1544e2fbca080', 'keluarga', 0),
(49, 'gerald123', '39dd029b1e7d1af51e7aa96be9f300e0', 'keluarga', 0),
(50, 'filberd123', 'a09d3b45265fcad2538399f8f4f51f33', 'keluarga', 0),
(51, 'noan123', '56957c6e17b3ad200452b4c00f7912ac', 'keluarga', 0),
(52, 'ibu123', '8445d537986b98f336794ab002e16b73', 'keluarga', 0),
(53, 'ridho123', 'c006cfc408a40fc9662b89c1eb962af0', 'keluarga', 0),
(54, 'ananda123', 'd41d8cd98f00b204e9800998ecf8427e', 'keluarga', 0),
(60, 'dokter1', '5db479bc6453dea4e990cadafd5cede8', 'dokter', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_keluarga` (`id_keluarga`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_keluarga_2` (`id_keluarga`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD CONSTRAINT `monitoring_ibfk_1` FOREIGN KEY (`id_keluarga`) REFERENCES `keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
