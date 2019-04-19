-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 03:59 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('panitia', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `id` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id`, `nama_team`) VALUES
(1, 'KribCorn'),
(2, 'Ars Ligna'),
(3, 'Spasia'),
(4, 'Krobi'),
(5, 'Bocil (Bolu Centil)'),
(6, 'B.A.Q'),
(7, 'Sushiban'),
(8, 'Cheese Pong'),
(9, 'Warung Es Batavia'),
(10, 'Potaco'),
(11, 'Nakal (Nasi Lokal)'),
(12, 'Magaza'),
(13, 'Sir Chick'),
(14, 'Sandwitch');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vote`
--

CREATE TABLE `tb_vote` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `ipaddress` varchar(39) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `id_team` int(11) NOT NULL,
  `created_on` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_vote`
--

INSERT INTO `tb_vote` (`id`, `nama`, `tempat`, `tgl_lahir`, `ipaddress`, `email`, `id_team`, `created_on`) VALUES
(1, 'aaaa', '', '12121212', '12.12.12.12', '12121@12.com', 1, '2016-04-01 00:00:00.000000'),
(2, '1212', '', '09090909', '121.121.121.121', '12121@sss.coms', 2, '2016-04-03 00:00:00.000000'),
(3, 'cccc', '', '19191994', '232.12.1.101', 'asasas@hjasa.Com\r\n', 1, '2016-04-05 00:00:00.000000'),
(4, '', 'riyanjayaadipratama@gmail.com', '', '', '', 2, '0000-00-00 00:00:00.000000'),
(5, 'riyan', 'riyanjayaadipratama@gmail.com', '05/01/1994', '', '', 2, '0000-00-00 00:00:00.000000'),
(6, 'ljdlakhda', 'dhakd', '87556775', '192.169.1.128', 'kdah@kajdka.com', 2, '2016-04-27 00:00:00.000000'),
(7, 'ssssssss', 'dhakd', '87556775', '192.169.1.128', 'kdah@kajdka.com', 2, '2016-04-27 00:00:00.000000'),
(8, 'rjadip', 'dahkdahj', '04/04/2016', '123.123.123.123', 'kdah@addaa.com', 1, '2016-04-27 00:00:00.000000'),
(9, 'rjadip', 'dakjdakj', '04/04/2016', NULL, 'kdah@addaa.com', 1, '2016-04-27 00:00:00.000000'),
(10, 'rjadip', 'kediri', '05/01/1994', NULL, 'kdah@addaa.com', 1, '2016-04-27 00:00:00.000000'),
(11, 'rjadip', 'kediri', '05/01/1994', NULL, '', 2, '2016-04-27 00:00:00.000000'),
(12, 'adadadadad', 'erererer', '12311231', NULL, '', 2, '2016-04-27 00:00:00.000000'),
(13, 'rjadip', 'jadul', '14/04/2016', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(14, 'rjadip', 'kediri', '07/04/1999', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(15, 'rjadip', 'kediri', '05/01/1994', NULL, '', 2, '2016-04-27 00:00:00.000000'),
(16, '', 'aljdajdal', '11/04/2016', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(17, '', 'adjadjaio', '13/04/2016', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(18, '', 'hadlhak', '06/04/2016', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(19, '', 'jajdaljl', '05/01/1994', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(20, 'berhasilsudah', 'adada', '05/01/1994', NULL, '', 1, '2016-04-27 00:00:00.000000'),
(21, 'si albert lama banget', 'medang', '04/04/2016', NULL, 'barulahirkemaring@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(22, 'omho', 'adada', '05/01/1994', NULL, 'adada@adada.com', 1, '2016-04-27 00:00:00.000000'),
(23, 'riyan jaya adi pratama', 'kediri', '05/01/1994', NULL, 'riyanjayaadipratama@gmail.con', 1, '2016-04-27 00:00:00.000000'),
(24, 'riyan jaya adi pratama', 'kediri', '04/04/2016', NULL, 'riyanjayaadipratama@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(25, 'riyan jaya adi pratama', 'kediri', '04/04/2016', NULL, 'riyanjayaadipratama@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(26, 'titus sutio fanpula', 'jada', '13/04/2016', NULL, 'riyanjayaadipratama@gmail.com', 3, '2016-04-27 00:00:00.000000'),
(27, 'riyan jaya adi pratama', 'jakarta', '04/04/2016', NULL, 'riyanjayaadipratama@gmail.com', 3, '2016-04-27 00:00:00.000000'),
(28, 'titus sutio fanpula', 'alor', '03/07/1993', NULL, 'tisufa@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(29, 'riyan jaya adi pratama', 'kediri', '05/01/1999', NULL, 'riyanjayaadipratama@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(30, 'albert ensen', 'medan', '07/04/1999', '192.168.1.101', 'albert@kampret.com', 1, '2016-04-27 00:00:00.000000'),
(31, 'adas', 'adaas', '14/04/2016', '192.168.1.101', 'asad@dfsss.com', 1, '2016-04-27 00:00:00.000000'),
(32, 'adas', 'adaas', '14/04/2016', '192.168.1.101', 'asad@dfsss.com', 1, '2016-04-27 00:00:00.000000'),
(33, 'tisufa', 'kediri', '04/04/2016', '192.168.1.101', 'mygothic@dfsfs.com', 1, '2016-04-27 00:00:00.000000'),
(34, 'terryus wijaya', 'jakarta', '04/11/1994', '192.168.1.101', 'terryus@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(35, 'terryus wijaya', 'jakarta', '04/11/1999', '192.168.1.101', 'terryus@gmail.com', 2, '2016-04-27 00:00:00.000000'),
(36, 'terryus wijaya', 'medan', '04/11/1994', '192.168.1.101', 'terryus@gmail.com', 8, '2016-04-27 00:00:00.000000'),
(37, 'hendra liana', 'jakarta', '19/10/1994', '192.168.1.101', 'hendra.liana@gmail.com', 1, '2016-04-27 00:00:00.000000'),
(38, 'jaya riyan adi', 'surabaya', '06/04/1994', '192.168.1.101', 'adirean@gmail.com', 1, '2016-04-17 19:23:31.000000'),
(39, 'albert ensen', 'medan', '17/08/1994', '192.168.1.101', 'albert.ensen@gmail.com', 8, '2016-04-17 19:31:50.000000'),
(40, 'test malam broh', 'riau', '11/04/2016', '192.168.1.101', 'rjadip@rjadip.com', 1, '2016-04-17 20:42:55.000000'),
(41, 'test malam', 'riau', '05/04/2016', '192.168.1.101', 'test@tesst.com', 4, '0000-00-00 00:00:00.000000'),
(42, 'hhhhhhhh', 'adada', '04/04/2016', '192.168.1.101', 'hhhhhh@hhhhh.com', 4, '0000-00-00 00:00:00.000000'),
(43, 'phphphphp', 'phphph', '05/04/2016', '192.168.1.101', 'phphphp@gmail.com', 7, '0000-00-00 00:00:00.000000'),
(44, 'riyan jaya adi pratama', 'testmalam', '03/04/2016', '192.168.1.101', 'testmalam@begadang.com', 1, '2016-04-27 00:00:00.000000'),
(45, 'sudahada', 'sudahada', '18/04/2016', '192.168.1.101', 'sudahada@sudahada.com', 4, '2016-04-17 21:00:31.000000'),
(46, 'sudahada', 'sudahada', '04/04/2016', '192.168.1.101', 'sudahada@sudahada.com', 1, '2016-04-17 21:03:26.000000'),
(47, 'belumada', 'belumada', '04/04/2016', '192.168.1.101', 'belumada@masasih.com', 6, '0000-00-00 00:00:00.000000'),
(48, 'sudahapabelum', 'sudahapabelum', '01/04/2016', '192.168.1.101', 'masasihbelum@iyadong.com', 2, '0000-00-00 00:00:00.000000'),
(49, '', '', '', '', '', 3, '0000-00-00 00:00:00.000000'),
(50, 'riyan jaya adi pratama', 'adada', '05/01/1994', '192.168.1.101', 'dsacavs@rdbdbfbf.co.id', 2, '0000-00-00 00:00:00.000000'),
(52, 'adipratama jaya', 'indonesia', '04/04/2016', '192.168.1.101', 'adirean@gmail.com', 1, '0000-00-00 00:00:00.000000'),
(53, 'rjadip', 'kediri', '13/04/2016', '192.168.1.101', 'terryus@gmail.com', 7, '0000-00-00 00:00:00.000000'),
(55, 'ada', 'kediri', '17/04/2016', '192.168.1.101', 'terryus@gmail.com', 1, '2016-04-17 22:00:53.000000'),
(56, 'riyan jaya adi pratama tes pagi', 'adada', '05/04/2016', '192.168.1.101', 'testpagi@kampretos.com', 1, '0000-00-00 00:00:00.000000'),
(57, 'berhasilnih', 'berhasilnih', '03/04/2016', '192.168.1.101', 'berhasilnih@testdulu.com', 6, '0000-00-00 00:00:00.000000'),
(58, 'larra craft', 'jakarta', '08/04/2016', '192.168.1.101', 'larracraft@tombrider.com', 5, '0000-00-00 00:00:00.000000'),
(59, 'riyan jaya adi pratama', 'kediri', '24/04/2016', '192.168.1.101', 'riyanjayaadipratama@gmail.com', 4, '0000-00-00 00:00:00.000000'),
(60, 'riyan jaya adi pratama', 'sudahada', '03/04/2016', '192.168.1.101', 'mygothic.sas@safdadd.com', 6, '0000-00-00 00:00:00.000000'),
(61, 'rjadip', 'sdcsvsg', '10/04/2016', '192.168.1.101', 'sudahada@sudahada.com', 5, '0000-00-00 00:00:00.000000'),
(62, 'rjadipssf', 'sdsfsefs', '10/04/2016', '192.168.1.101', 'terryus@gmail.com', 7, '2016-04-18 04:54:00.000000'),
(63, 'ada', 'asasaca', '03/04/2016', '192.168.1.101', 'riyanjayaadipratama@gmail.com', 9, '2016-04-18 05:27:21.000000'),
(64, 'ada', 'asasaca', '03/04/2016', '192.168.1.101', 'riyanjayaadipratama@gmail.com', 9, '2016-04-18 05:27:21.000000'),
(65, 'riyan jaya adi pratama', 'sudahada', '04/04/2016', '172.16.128.203', 'sudahada@sudahada.com', 1, '2016-04-18 08:53:17.000000'),
(66, 'ada', 'adada', '', '172.16.127.251', 'adadada@gmail.com', 2, '2016-04-18 11:45:49.000000'),
(67, 'asdadasdwfq', 'sfsfsfwcwew', '04/04/2016', '172.10.8.181', '', 5, '2016-04-25 15:45:32.000000'),
(68, 'admin', 'gghigig', '03/04/2016', '172.10.8.181', '', 1, '2016-04-25 16:02:29.000000'),
(69, 'sdfhshvoh', 'sdvjhsoihdvouhwo', '03/04/2016', '172.10.8.181', '', 9, '2016-04-25 16:40:08.000000'),
(70, 'riyan jaya adi pratama', 'jakarta', '13/04/2016', '172.10.8.181', '', 9, '2016-04-25 17:36:34.000000'),
(71, 'riyan jaya adi pratama', 'jakarta', '06/04/2016', '172.10.8.181', '', 3, '2016-04-25 17:39:33.000000'),
(72, 'riyan jaya adi pratama', 'jakarta', '16/04/2016', '172.10.8.181', '', 9, '2016-04-25 17:42:15.000000'),
(73, 'albertus wijaya', 'jakarta', '03/04/2016', '172.10.8.181', '', 1, '2016-04-25 17:43:02.000000'),
(74, 'sudahada', 'sudahada', '12/04/2016', '172.10.8.181', '', 3, '2016-04-25 17:43:32.000000'),
(75, 'adminpret', 'adada', '08/04/2016', '172.10.8.181', '', 6, '2016-04-25 17:44:03.000000'),
(76, 'battle royale', 'jakarta', '04/04/2016', '192.168.1.101', '', 2, '2016-04-25 18:37:44.000000'),
(77, 'testsatu', 'testsatu', '03/04/2016', '192.168.1.101', '', 2, '2016-04-25 19:02:04.000000'),
(78, 'edi putra', 'riau', '01/04/2016', '172.16.127.253', '', 6, '2016-04-28 15:37:25.000000'),
(79, 'edi putra', 'kepri', '01/04/2016', '172.16.127.253', '', 5, '2016-04-28 15:38:25.000000'),
(80, 'edi putra', 'riau', '03/04/2016', '172.16.127.253', '', 7, '2016-04-28 15:38:44.000000'),
(81, 'omomo', 'asasasa', '19191994', NULL, 'zaasca@acsc.com', 14, NULL),
(82, 'omomo', 'asasasa', '19191994', NULL, 'zaasca@acsc.com', 14, NULL),
(83, 'omomo', 'asasasa', '19191994', NULL, 'zaasca@acsc.com', 14, NULL),
(84, 'agcuhbj', 'asvhbcjn', '08082012', NULL, '', 13, NULL),
(85, 'agvsdhbfnjgvkmh', 'sydhbfjnmgk', '08082011', NULL, '', 12, NULL),
(86, 'asdfghj', 'wsedfghjk', '10101994', NULL, '', 10, NULL),
(87, 'asdfghjkawsedrftgh', 'asdfghjkl', '08081992', NULL, '', 10, NULL),
(88, '', '', '', NULL, '', 11, NULL),
(89, 'testsatu', 'jakarta', '26/04/2016', '192.168.1.101', '', 1, '2016-04-29 00:07:39.000000'),
(90, 'testdua', 'jakarta', '04/04/2016', '192.168.1.101', '', 5, '2016-04-29 00:11:19.000000'),
(91, 'test sembilan', 'jakarta', '29/04/2016', '192.168.1.101', '', 9, '2016-04-29 00:15:08.000000'),
(92, 'test sepuluh', 'jakarta', '29/04/2016', '192.168.1.101', '', 10, '2016-04-29 00:15:35.000000'),
(93, 'test sebelas', 'jakarta', '29/04/2016', '192.168.1.101', '', 11, '2016-04-29 00:16:07.000000'),
(94, 'test duabelas', 'jakarta', '29/04/2016', '192.168.1.101', '', 12, '2016-04-29 00:16:43.000000'),
(95, 'test tigabelas', 'jakarta', '29/04/2016', '192.168.1.101', '', 13, '2016-04-29 00:17:08.000000'),
(96, 'test empatbelas', 'jakarta', '29/04/2016', '192.168.1.101', '', 14, '2016-04-29 00:17:38.000000'),
(97, '', '', '', NULL, '', 13, NULL),
(98, '', '', '', NULL, '', 13, NULL),
(99, '', '', '', NULL, '', 12, NULL),
(100, '', '', '', NULL, '', 12, NULL),
(101, '', '', '', NULL, '', 12, NULL),
(102, '', '', '', NULL, '', 12, NULL),
(103, '', '', '', NULL, '', 11, NULL),
(104, '', '', '', NULL, '', 11, NULL),
(105, '', '', '', NULL, '', 11, NULL),
(106, '', '', '', NULL, '', 11, NULL),
(107, '', '', '', NULL, '', 10, NULL),
(108, '', '', '', NULL, '', 11, NULL),
(109, '', '', '', NULL, '', 10, NULL),
(110, '', '', '', NULL, '', 11, NULL),
(111, '', '', '', NULL, '', 8, NULL),
(112, '', '', '', NULL, '', 8, NULL),
(113, '', '', '', NULL, '', 8, NULL),
(114, '', '', '', NULL, '', 8, NULL),
(115, 'asacasasa', 'ascasca', '03/04/2016', '192.168.1.101', '', 1, '2016-04-29 05:48:14.000000'),
(116, 'test animasidua', 'jakarta', '29/04/2016', '192.168.1.101', '', 1, '2016-04-29 06:29:58.000000'),
(117, 'test animasidua', 'jakarta', '29/04/2016', '192.168.1.101', '', 1, '2016-04-29 06:29:58.000000'),
(118, 'asdfgwefve', 'sdgfhgdfsrfgh', '10/04/2016', '192.168.1.101', '', 7, '2016-04-29 07:04:12.000000'),
(119, 'testsatu', 'jakarta', '28/04/2016', '192.168.1.101', '', 1, '2016-04-29 08:38:44.000000'),
(120, 'testdua', 'medan', '29/04/2016', '192.168.1.101', '', 2, '2016-04-29 08:40:33.000000'),
(121, 'testtiga', 'medan', '29/04/2016', '192.168.1.101', '', 3, '2016-04-29 08:41:12.000000'),
(122, 'testempat', 'medan', '29/04/2016', '192.168.1.101', '', 4, '2016-04-29 08:41:29.000000'),
(123, 'testlima', 'medan', '29/04/2016', '192.168.1.101', '', 5, '2016-04-29 08:41:52.000000'),
(124, 'testenam', 'medan', '29/04/2016', '192.168.1.101', '', 6, '2016-04-29 08:42:18.000000'),
(125, 'testtujuh', 'medan', '29/04/2016', '192.168.1.101', '', 7, '2016-04-29 08:42:45.000000'),
(126, 'testdelapan', 'medan', '29/04/2016', '192.168.1.101', '', 8, '2016-04-29 08:44:46.000000'),
(127, 'testsembilan', 'medan', '29/04/2016', '192.168.1.101', '', 9, '2016-04-29 08:45:10.000000'),
(128, 'testsepuluh', 'medan', '29/04/2016', '192.168.1.101', '', 10, '2016-04-29 08:45:34.000000'),
(129, 'testsebelas', 'medan', '29/04/2016', '192.168.1.101', '', 11, '2016-04-29 08:45:53.000000'),
(130, 'testduabelas', 'medan', '29/04/2016', '192.168.1.101', '', 12, '2016-04-29 08:46:46.000000'),
(131, 'testtigabelas', 'medan', '29/04/2016', '192.168.1.101', '', 13, '2016-04-29 08:47:05.000000'),
(132, 'testempatbelas', 'medan', '29/04/2016', '192.168.1.101', '', 14, '2016-04-29 08:47:34.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_vote`
--
ALTER TABLE `tb_vote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_vote`
--
ALTER TABLE `tb_vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
