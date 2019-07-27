-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2017 at 01:39 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id_absen` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen`
--

INSERT INTO `tb_absen` (`id_absen`, `nis`, `tanggal`) VALUES
(13, 'SIS20160022', '2016-03-01'),
(14, 'SIS20160003', '2016-03-01'),
(15, 'SIS20160021', '2016-03-01'),
(16, 'SIS20160020', '2016-03-01'),
(17, 'SIS20160002', '2016-03-01'),
(18, 'SIS20160001', '2016-03-01'),
(19, 'SIS20160013', '2016-03-01'),
(20, 'SIS20160016', '2016-03-01'),
(21, 'SIS20160019', '2016-03-01'),
(22, 'SIS20160006', '2016-03-01'),
(23, 'SIS20160015', '2016-03-01'),
(24, 'SIS20160010', '2016-03-01'),
(25, 'SIS20160007', '2016-03-01'),
(26, 'SIS20160011', '2016-03-01'),
(27, 'SIS20160022', '2016-03-02'),
(28, 'SIS20160021', '2016-03-02'),
(29, 'SIS20160003', '2016-03-02'),
(30, 'SIS20160020', '2016-03-02'),
(31, 'SIS20160002', '2016-03-02'),
(32, 'SIS20160001', '2016-03-02'),
(33, 'SIS20160019', '2016-03-02'),
(34, 'SIS20160013', '2016-03-02'),
(35, 'SIS20160014', '2016-03-02'),
(36, 'SIS20160015', '2016-03-02'),
(37, 'SIS20160016', '2016-03-02'),
(38, 'SIS20160011', '2016-03-02'),
(39, 'SIS20160006', '2016-03-02'),
(40, 'SIS20160010', '2016-03-02'),
(41, 'SIS20160007', '2016-03-02'),
(42, 'SIS20160022', '2016-03-03'),
(43, 'SIS20160003', '2016-03-03'),
(44, 'SIS20160020', '2016-03-03'),
(45, 'SIS20160021', '2016-03-03'),
(46, 'SIS20160002', '2016-03-03'),
(47, 'SIS20160001', '2016-03-03'),
(48, 'SIS20160019', '2016-03-03'),
(49, 'SIS20160013', '2016-03-03'),
(50, 'SIS20160016', '2016-03-03'),
(51, 'SIS20160015', '2016-03-03'),
(52, 'SIS20160014', '2016-03-03'),
(53, 'SIS20160010', '2016-03-03'),
(54, 'SIS20160011', '2016-03-03'),
(55, 'SIS20160022', '2016-03-04'),
(56, 'SIS20160020', '2016-03-04'),
(57, 'SIS20160021', '2016-03-04'),
(58, 'SIS20160003', '2016-03-04'),
(59, 'SIS20160019', '2016-03-04'),
(60, 'SIS20160013', '2016-03-04'),
(61, 'SIS20160010', '2016-03-04'),
(62, 'SIS20160016', '2016-03-04'),
(63, 'SIS20160015', '2016-03-04'),
(64, 'SIS20160002', '2016-03-04'),
(65, 'SIS20160001', '2016-03-04'),
(66, 'SIS20160006', '2016-03-04'),
(67, 'SIS20160011', '2016-03-04'),
(68, 'SIS20160014', '2016-03-04'),
(69, 'SIS20160007', '2016-03-04'),
(70, 'SIS20160022', '2016-03-07'),
(71, 'SIS20160003', '2016-03-07'),
(72, 'SIS20160020', '2016-03-07'),
(73, 'SIS20160021', '2016-03-07'),
(74, 'SIS20160014', '2016-03-07'),
(75, 'SIS20160013', '2016-03-07'),
(76, 'SIS20160019', '2016-03-07'),
(77, 'SIS20160015', '2016-03-07'),
(78, 'SIS20160016', '2016-03-07'),
(79, 'SIS20160001', '2016-03-07'),
(80, 'SIS20160002', '2016-03-07'),
(81, 'SIS20160011', '2016-03-07'),
(82, 'SIS20160006', '2016-03-07'),
(83, 'SIS20160007', '2016-03-07'),
(84, 'SIS20160010', '2016-03-07'),
(85, 'SIS20160022', '2016-03-08'),
(86, 'SIS20160003', '2016-03-08'),
(87, 'SIS20160020', '2016-03-08'),
(88, 'SIS20160001', '2016-03-08'),
(89, 'SIS20160002', '2016-03-08'),
(90, 'SIS20160016', '2016-03-08'),
(91, 'SIS20160019', '2016-03-08'),
(92, 'SIS20160015', '2016-03-08'),
(93, 'SIS20160013', '2016-03-08'),
(94, 'SIS20160014', '2016-03-08'),
(95, 'SIS20160011', '2016-03-08'),
(96, 'SIS20160006', '2016-03-08'),
(97, 'SIS20160007', '2016-03-08'),
(98, 'SIS20160010', '2016-03-08'),
(99, 'SIS20160022', '2016-03-10'),
(100, 'SIS20160020', '2016-03-10'),
(101, 'SIS20160003', '2016-03-10'),
(102, 'SIS20160021', '2016-03-10'),
(103, 'SIS20160011', '2016-03-10'),
(104, 'SIS20160014', '2016-03-10'),
(105, 'SIS20160010', '2016-03-10'),
(106, 'SIS20160007', '2016-03-10'),
(107, 'SIS20160006', '2016-03-10'),
(108, 'SIS20160003', '2016-03-11'),
(109, 'SIS20160021', '2016-03-11'),
(110, 'SIS20160022', '2016-03-11'),
(111, 'SIS20160020', '2016-03-11'),
(112, 'SIS20160011', '2016-03-11'),
(113, 'SIS20160010', '2016-03-11'),
(114, 'SIS20160007', '2016-03-11'),
(115, 'SIS20160022', '2016-03-14'),
(116, 'SIS20160003', '2016-03-14'),
(117, 'SIS20160020', '2016-03-14'),
(118, 'SIS20160019', '2016-03-14'),
(119, 'SIS20160016', '2016-03-14'),
(120, 'SIS20160013', '2016-03-14'),
(121, 'SIS20160015', '2016-03-14'),
(122, 'SIS20160014', '2016-03-14'),
(123, 'SIS20160006', '2016-03-14'),
(124, 'SIS20160007', '2016-03-14'),
(125, 'SIS20160010', '2016-03-14'),
(126, 'SIS20160021', '2016-03-14'),
(127, 'SIS20160003', '2016-03-15'),
(128, 'SIS20160021', '2016-03-15'),
(129, 'SIS20160022', '2016-03-15'),
(130, 'SIS20160020', '2016-03-15'),
(131, 'SIS20160001', '2016-03-15'),
(132, 'SIS20160002', '2016-03-15'),
(133, 'SIS20160011', '2016-03-15'),
(134, 'SIS20160014', '2016-03-15'),
(135, 'SIS20160019', '2016-03-15'),
(136, 'SIS20160016', '2016-03-15'),
(137, 'SIS20160015', '2016-03-15'),
(138, 'SIS20160010', '2016-03-15'),
(139, 'SIS20160007', '2016-03-15'),
(140, 'SIS20160006', '2016-03-15'),
(141, 'SIS20160022', '2016-03-16'),
(142, 'SIS20160003', '2016-03-16'),
(143, 'SIS20160021', '2016-03-16'),
(144, 'SIS20160020', '2016-03-16'),
(145, 'SIS20160001', '2016-03-16'),
(146, 'SIS20160002', '2016-03-16'),
(147, 'SIS20160019', '2016-03-16'),
(148, 'SIS20160016', '2016-03-16'),
(149, 'SIS20160013', '2016-03-16'),
(150, 'SIS20160015', '2016-03-16'),
(151, 'SIS20160011', '2016-03-16'),
(152, 'SIS20160006', '2016-03-16'),
(153, 'SIS20160010', '2016-03-16'),
(154, 'SIS20160014', '2016-03-16'),
(155, 'SIS20160006', '2016-03-21'),
(156, 'SIS20160001', '2016-03-23'),
(157, 'SIS20160001', '2016-03-27'),
(158, 'SIS20160001', '2016-04-20'),
(159, 'SIS20160001', '2016-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `tanggal_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `isi_berita`, `status`, `tanggal_create`) VALUES
(1, 'Helo', 'Besok Libur', 'Nonaktif', '2016-03-18 15:10:06'),
(2, 'Helo', 'Besok Libur', 'Nonaktif', '2016-03-18 15:11:18'),
(4, 'sukses', 'berita sukses', 'Aktif', '2016-03-29 02:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `id_detail` int(11) NOT NULL,
  `id_absen` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `jenis_kegiatan` text,
  `waktu_in` datetime DEFAULT NULL,
  `waktu_out` datetime NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `sts_keterangan` int(11) NOT NULL,
  `tgl_koreksi` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail`
--

INSERT INTO `tb_detail` (`id_detail`, `id_absen`, `status`, `jenis_kegiatan`, `waktu_in`, `waktu_out`, `keterangan`, `sts_keterangan`, `tgl_koreksi`) VALUES
(13, 13, 2, 'Memberikan Ide tentang pemesanan barang di toko" lewat mobile. membuat pagination di CI, dan meng-upgrade ubuntu.', '2016-03-01 07:28:05', '2016-03-01 16:19:10', '', 0, NULL),
(14, 14, 2, 'Assalamualaikum . hari ini saya . memberikan ide perpustakaan online di depan teman teman magang . kemudian melihat dan mengamati teman teman yang menginstall ubuntu . sambil mencari solusi dari error dan kesalahan di web. dan juga memperbaiki sedikit css', '2016-03-01 07:28:18', '2016-03-01 16:17:31', '', 0, NULL),
(15, 15, 2, 'menginstall windows 7 64bit karena partisi localdisk C kehapus', '2016-03-01 07:29:01', '2016-03-01 16:19:51', '', 0, NULL),
(16, 16, 2, 'mengarang ide atau mencari masalah dan dipresentasikan ke depan. dan membaca modul CI. ', '2016-03-01 07:29:40', '2016-03-01 16:17:09', '', 0, NULL),
(17, 17, 2, 'persentasi ide aplikasi apa yang ingin dibuat, melanjutkan project absen magang', '2016-03-01 07:41:44', '2016-03-01 16:06:17', '', 0, NULL),
(18, 18, 2, 'presentasi ide untuk mengembangkan absensi yang sudah dibuat. membuat template untuk absen dan membuat absen untuk admin', '2016-03-01 07:43:07', '2016-03-01 16:05:28', '', 0, NULL),
(19, 19, 2, 'crimping kabel cat6.\r\n', '2016-03-01 07:48:59', '2016-03-01 16:03:13', '', 0, NULL),
(20, 20, 1, NULL, '2016-03-01 07:48:59', '0000-00-00 00:00:00', '', 0, NULL),
(21, 21, 2, 'Crimping kabel cat6', '2016-03-01 07:51:40', '2016-03-01 16:03:17', '', 0, NULL),
(22, 22, 2, 'mengisntal dan mencoba android studio di ubuntu', '2016-03-01 07:59:43', '2016-03-01 16:17:43', '', 0, NULL),
(23, 23, 2, 'Kriping kabel ,, cat 6 \r\n                         ', '2016-03-01 08:05:17', '2016-03-01 15:34:47', '', 0, NULL),
(24, 24, 2, 'mencari ide untuk project baru yang mau di lakukan dan membaca pdf CI', '2016-03-01 08:11:34', '2016-03-01 16:16:42', '', 0, NULL),
(25, 25, 2, 'LAGI MENCOBA INSTALL UBUNTU 15.04 :D', '2016-03-01 08:31:03', '2016-03-01 16:15:19', '', 0, NULL),
(26, 26, 2, 'Membuat Form Login with Laravel ', '2016-03-01 09:36:11', '2016-03-01 16:14:20', '', 0, NULL),
(27, 27, 2, 'sedikit melanjutkan project absen dosen menggunakan ci, dan menginstal windows 10.', '2016-03-02 07:27:15', '2016-03-02 16:03:40', '', 0, NULL),
(28, 28, 2, 'menginstall windows 10', '2016-03-02 07:27:58', '2016-03-02 16:07:20', '', 0, NULL),
(29, 29, 2, 'menginstall windows 10', '2016-03-02 07:28:11', '2016-03-02 16:06:11', '', 0, NULL),
(30, 30, 2, 'sedikit melanjutkan project dan tidak jadi menginstall windows 10', '2016-03-02 07:28:14', '2016-03-02 16:07:57', '', 0, NULL),
(31, 31, 2, 'memantau absen magang, melanjutkan (mengupdate) absen magang', '2016-03-02 07:35:23', '2016-03-02 16:01:56', '', 0, NULL),
(32, 32, 2, 'membuat dashboard, isi berita, data berita, anggota belum masuk, anggota sudah masuk, anggota status, absen magang, data absen, calendar, pesan di absen admin.', '2016-03-02 07:36:17', '2016-03-02 16:01:35', '', 0, NULL),
(33, 33, 2, 'Trobelshooting pc\r\n', '2016-03-02 07:48:00', '2016-03-02 16:01:27', '', 0, NULL),
(34, 34, 2, '\r\nTrobelshooting pc.', '2016-03-02 07:49:19', '2016-03-02 15:59:20', '', 0, NULL),
(35, 35, 1, 'menambah form login pada SI chehkin/chehkout manggunakan laravel 5', '2016-03-02 07:49:54', '2016-03-02 16:00:00', '', 0, NULL),
(36, 36, 2, 'Trobelshooting pc.', '2016-03-02 07:50:36', '2016-03-02 16:00:34', '', 0, NULL),
(37, 37, 2, 'Trobleshooting Pc', '2016-03-02 07:52:33', '2016-03-02 16:02:02', '', 0, NULL),
(38, 38, 2, 'Masih Bikin Login ', '2016-03-02 08:05:37', '2016-03-02 16:05:08', '', 0, NULL),
(39, 39, 1, NULL, '2016-03-02 08:06:33', '0000-00-00 00:00:00', '', 0, NULL),
(40, 40, 2, 'facebookan sama lihat lihat project sedikit', '2016-03-02 08:14:48', '2016-03-02 16:09:49', '', 0, NULL),
(41, 41, 2, 'Membuat Auth di Framework LARAVEL 5.2', '2016-03-02 08:42:23', '2016-03-02 16:00:00', '', 0, NULL),
(42, 42, 2, 'Menginstal Drupal, dan Mempelajari Drupal, dan mempraktekkanya.', '2016-03-03 07:21:03', '2016-03-03 16:10:43', '', 0, NULL),
(43, 43, 2, 'memperbaiki beberapa css terutama background pada project . menginstall microsoft office 2007 .', '2016-03-03 07:21:11', '2016-03-03 16:09:29', '', 0, NULL),
(44, 44, 2, 'Menginstal drupal, dan mempelajari drupal.', '2016-03-03 07:21:26', '2016-03-03 16:11:25', '', 0, NULL),
(45, 45, 2, 'menabahkan login pada project laravel', '2016-03-03 07:21:30', '2016-03-03 16:11:51', '', 0, NULL),
(46, 46, 2, 'memantau absen magang, izin pulang awal karena sakit', '2016-03-03 07:49:52', '2016-03-03 13:25:17', '', 0, NULL),
(47, 47, 2, '', '2016-03-03 07:50:38', '2016-03-03 22:46:56', '', 0, NULL),
(48, 48, 2, 'install virtual box.', '2016-03-03 07:54:45', '2016-03-03 16:14:12', '', 0, NULL),
(49, 49, 2, 'install virtual box.', '2016-03-03 07:56:09', '2016-03-03 16:13:11', '', 0, NULL),
(50, 50, 2, 'Menginstal virtualbox', '2016-03-03 07:58:35', '2016-03-03 16:16:29', '', 0, NULL),
(51, 51, 2, 'Menginstal virtualbox\r\n', '2016-03-03 07:59:50', '2016-03-03 16:13:57', '', 0, NULL),
(52, 52, 1, 'membuat form login menggunakan laravel 5 dan install drupal', '2016-03-03 08:04:55', '2016-03-03 16:00:00', '', 0, NULL),
(53, 53, 2, 'mempelajari drupal', '2016-03-03 08:12:27', '2016-03-03 16:16:50', '', 0, NULL),
(54, 54, 2, 'membuat form login', '2016-03-03 08:13:50', '2016-03-03 16:06:25', '', 0, NULL),
(55, 55, 2, 'Mempelajari dan mendalami Drupal.', '2016-03-04 07:00:36', '2016-03-04 16:20:24', '', 0, NULL),
(56, 56, 2, 'mempelajari drupal', '2016-03-04 07:00:57', '2016-03-04 16:22:48', '', 0, NULL),
(57, 57, 2, 'Menginstall Drupal 8.0.5', '2016-03-04 07:01:14', '2016-03-04 16:17:37', '', 0, NULL),
(58, 58, 2, 'menginstall drupla 8.0.5 . menambahkan login tetapi error', '2016-03-04 07:01:21', '2016-03-04 16:16:56', '', 0, NULL),
(59, 59, 2, 'install ubuntu server.', '2016-03-04 07:07:35', '2016-03-04 16:25:50', '', 0, NULL),
(60, 60, 1, NULL, '2016-03-04 07:10:26', '0000-00-00 00:00:00', '', 0, NULL),
(61, 61, 2, 'mencari masalah drupal tapi belom menemukan solusinya', '2016-03-04 07:10:52', '2016-03-04 16:12:28', '', 0, NULL),
(62, 62, 1, NULL, '2016-03-04 07:11:36', '0000-00-00 00:00:00', '', 0, NULL),
(63, 63, 1, NULL, '2016-03-04 07:12:24', '0000-00-00 00:00:00', '', 0, NULL),
(64, 64, 2, 'memantau absen magang', '2016-03-04 07:12:28', '2016-03-04 16:06:13', '', 0, NULL),
(65, 65, 2, 'mengupdate tampilan absensi. ', '2016-03-04 07:13:24', '2016-03-04 16:07:22', '', 0, NULL),
(66, 66, 1, NULL, '2016-03-04 08:02:10', '0000-00-00 00:00:00', '', 0, NULL),
(67, 67, 2, 'Lanjut Login , tapi ga beres. ', '2016-03-04 08:05:20', '2016-03-04 16:24:36', '', 0, NULL),
(68, 68, 2, 'membuat form login dan mencoba fitur drupal', '2016-03-04 08:47:43', '2016-03-04 16:01:02', '', 0, NULL),
(69, 69, 2, 'Mnecoba menginstall drupal', '2016-03-04 08:48:43', '2016-03-04 16:21:58', '', 0, NULL),
(70, 70, 2, 'mempelajari drupal.', '2016-03-07 07:20:19', '2016-03-07 16:00:11', '', 0, NULL),
(71, 71, 2, 'Mengotak atik drupal 8.0 terutama pada warna background', '2016-03-07 07:20:22', '2016-03-07 16:00:59', '', 0, NULL),
(72, 72, 2, 'mempelajari drupal 8.0.5', '2016-03-07 07:20:51', '2016-03-07 16:01:37', '', 0, NULL),
(73, 73, 2, 'browsing tentang drupal', '2016-03-07 07:21:09', '2016-03-07 16:01:46', '', 0, NULL),
(74, 74, 2, 'mencoba fitur drupal', '2016-03-07 07:40:48', '2016-03-07 15:58:22', '', 0, NULL),
(75, 75, 2, 'Instal debian linux.', '2016-03-07 07:50:16', '2016-03-07 16:21:50', '', 0, NULL),
(76, 76, 2, 'install linux debian.', '2016-03-07 07:51:30', '2016-03-07 16:23:17', '', 0, NULL),
(77, 77, 2, '', '2016-03-07 07:52:10', '2016-03-07 16:17:23', '', 0, NULL),
(78, 78, 2, 'install linux debian.', '2016-03-07 07:54:33', '2016-03-07 16:22:37', '', 0, NULL),
(79, 79, 2, 'mendownload absensi terbaru dari server. ', '2016-03-07 08:01:31', '2016-03-07 15:59:56', '', 0, NULL),
(80, 80, 2, 'memantau absensi magang, mendownload absensi yang telah diupdate', '2016-03-07 08:02:20', '2016-03-07 16:00:02', '', 0, NULL),
(81, 81, 2, 'Drupal', '2016-03-07 08:08:54', '2016-03-07 15:59:46', '', 0, NULL),
(82, 82, 2, 'browsing tentang drupal\r\n', '2016-03-07 08:22:54', '2016-03-07 16:11:22', '', 0, NULL),
(83, 83, 2, 'Sudah menginstall Drupal', '2016-03-07 09:45:40', '2016-03-07 16:11:58', '', 0, NULL),
(84, 84, 1, 'menginstall drupal', '2016-03-07 09:46:12', '2016-03-07 16:00:00', '', 0, NULL),
(85, 85, 2, 'Mengerjakan dan Membuat Perpustakaan Online.', '2016-03-08 07:28:29', '2016-03-08 16:05:35', '', 0, NULL),
(86, 86, 2, 'membuat project perpustakaan online pada index dan form login', '2016-03-08 07:28:49', '2016-03-08 16:06:32', '', 0, NULL),
(87, 87, 2, 'mengerjakan  perpustakaan online', '2016-03-08 07:29:08', '2016-03-08 16:08:10', '', 0, NULL),
(88, 88, 1, NULL, '2016-03-08 07:42:02', '0000-00-00 00:00:00', '', 0, NULL),
(89, 89, 1, NULL, '2016-03-08 07:43:08', '0000-00-00 00:00:00', '', 0, NULL),
(90, 90, 2, 'install so debian (linux)', '2016-03-08 07:54:19', '2016-03-08 15:43:22', '', 0, NULL),
(91, 91, 2, 'install so fedora (linux).', '2016-03-08 07:54:21', '2016-03-08 15:40:40', '', 0, NULL),
(92, 92, 2, 'install so debian (linux)', '2016-03-08 07:54:59', '2016-03-08 15:42:46', '', 0, NULL),
(93, 93, 2, 'install SO fedora (linux)', '2016-03-08 07:55:52', '2016-03-08 15:41:55', '', 0, NULL),
(94, 94, 2, 'mencoba fitur drupal', '2016-03-08 08:16:20', '2016-03-08 15:57:16', '', 0, NULL),
(95, 95, 2, 'project perpustakaan', '2016-03-08 08:36:09', '2016-03-08 16:06:16', '', 0, NULL),
(96, 96, 2, 'mengerjakan project baru yaitu perpustakaan online', '2016-03-08 08:36:21', '2016-03-08 16:05:46', '', 0, NULL),
(97, 97, 2, 'MEngerjakan perpustakaan online dengan php nyel :v', '2016-03-08 08:54:05', '2016-03-08 16:08:39', '', 0, NULL),
(98, 98, 1, NULL, '2016-03-08 08:54:35', '0000-00-00 00:00:00', '', 0, NULL),
(99, 99, 2, 'menambahkan pagination ke dalam absensi dosen.\r\n', '2016-03-10 07:28:11', '2016-03-10 16:13:48', '', 0, NULL),
(100, 100, 2, 'menambahkan pagination kedalam absensi dosen', '2016-03-10 07:28:26', '2016-03-10 16:13:03', '', 0, NULL),
(101, 101, 2, 'updating windows . membuat login untuk admin . membuat halaman admin', '2016-03-10 07:28:41', '2016-03-10 16:14:28', '', 0, NULL),
(102, 102, 2, 'browsing tentang drupal dan form perpustakaan online', '2016-03-10 07:28:56', '2016-03-10 16:15:20', '', 0, NULL),
(103, 103, 2, 'membuat login index perpus', '2016-03-10 08:18:51', '2016-03-10 16:14:22', '', 0, NULL),
(104, 104, 2, 'mempelajari drupal', '2016-03-10 08:24:05', '2016-03-10 16:10:51', '', 0, NULL),
(105, 105, 2, 'melanjutkan project absensi', '2016-03-10 08:26:34', '2016-03-10 16:12:53', '', 0, NULL),
(106, 106, 2, 'Membuat index.php perpustakaan', '2016-03-10 08:52:29', '2016-03-10 16:14:53', '', 0, NULL),
(107, 107, 2, 'belajar + instal codeigniter', '2016-03-10 08:53:53', '2016-03-10 16:11:52', '', 0, NULL),
(108, 108, 2, 'menambahkan css pada admin login dan halaman admin . menyambungkan linknya ke admin login', '2016-03-11 07:05:15', '2016-03-11 16:01:33', '', 1, '2017-02-10 07:37:46'),
(109, 109, 2, 'browsing tentang drupal', '2016-03-11 07:05:32', '2016-03-11 16:03:18', '', 0, NULL),
(110, 110, 2, 'Instal ulang windows 10, karena windows 10 nya error karena gagal update. dan menambah css pada form login dosen.', '2016-03-11 07:06:30', '2016-03-11 16:03:00', '', 0, NULL),
(111, 111, 2, 'mengerjakan project absensi', '2016-03-11 07:06:49', '2016-03-11 16:06:38', '', 0, NULL),
(112, 112, 2, 'perpustakaan', '2016-03-11 08:27:10', '2016-03-11 16:10:42', '', 0, NULL),
(113, 113, 2, 'melanjutkan project absensi', '2016-03-11 08:35:45', '2016-03-11 16:05:25', '', 0, NULL),
(114, 114, 2, 'Telat Check in ,\r\nMeneruskan web Perpus di windows. karna di ubuntu saya capek. Css tidak keluar. akhrnya saya memakai windows.', '2016-03-11 16:00:04', '2016-03-11 16:00:54', '', 0, NULL),
(115, 115, 2, 'Olahraga tenis meja, dan menambahkan download page in absen dosen.', '2016-03-14 07:29:54', '2016-03-14 16:08:33', '', 0, NULL),
(116, 116, 2, 'browsing template untuk perpustakaan online . editing css ', '2016-03-14 07:30:17', '2016-03-14 16:02:18', '', 1, '2016-03-27 23:03:32'),
(117, 117, 2, 'melanjutkan project absen. sama tenis meja', '2016-03-14 07:31:28', '2016-03-14 16:10:43', '', 0, NULL),
(118, 118, 2, 'latihan command prom linux.', '2016-03-14 07:49:39', '2016-03-14 16:15:35', '', 0, NULL),
(119, 119, 2, 'latihan command prom linux', '2016-03-14 07:50:12', '2016-03-14 16:17:22', '', 0, NULL),
(120, 120, 2, 'latihan command prom linux.', '2016-03-14 07:51:54', '2016-03-14 16:14:26', '', 0, NULL),
(121, 121, 2, 'latihan command prom linux', '2016-03-14 07:54:17', '2016-03-14 16:16:23', '', 0, NULL),
(122, 122, 2, 'mengerjakan si perpustakaan ', '2016-03-14 08:28:55', '2016-03-14 16:10:16', '', 0, NULL),
(123, 123, 2, 'mempelajari framework codeigniter ', '2016-03-14 09:02:31', '2016-03-14 16:09:35', '', 0, NULL),
(124, 124, 2, 'Mencari templpates untuk web streaming its', '2016-03-14 09:07:34', '2016-03-14 16:07:52', '', 0, NULL),
(125, 125, 2, 'melanjutkan project absensi', '2016-03-14 09:08:58', '2016-03-14 16:09:23', '', 0, NULL),
(126, 126, 2, 'browsing tentang drupal 8.0.5', '2016-03-14 16:02:32', '2016-03-14 16:03:05', '', 0, NULL),
(127, 127, 2, 'membuat pendaftaran untuk user . membuat login log out untuk admin . membuat login logout untuk user', '2016-03-15 07:30:31', '2016-03-15 16:01:21', '', 1, '2016-03-23 02:36:24'),
(128, 128, 2, 'browsing tentang drupal 8.0.5', '2016-03-15 07:30:42', '2016-03-15 16:00:14', '', 0, NULL),
(129, 129, 2, 'menambahkan data dosen yang belum check in dan data dosen yang terlambat pada form check in dosen.', '2016-03-15 07:33:33', '2016-03-15 16:03:26', '', 0, NULL),
(130, 130, 2, 'membuat data dosen yang belum check in dan data dosen yang terlambat pada form check in dosen', '2016-03-15 07:33:48', '2016-03-15 16:04:24', '', 0, NULL),
(131, 131, 2, 'mengerjakan admin absensi, anggota magang, dan absen magang. mengupdate admin absensi terbaru', '2016-03-15 07:44:00', '2016-03-15 16:06:48', '', 0, NULL),
(132, 132, 2, 'memantau absen magang', '2016-03-15 07:44:09', '2016-03-15 16:06:03', '', 0, NULL),
(133, 133, 2, 'Perpus', '2016-03-15 07:46:10', '2016-03-15 16:19:27', '', 0, NULL),
(134, 134, 2, 'mengerjakan form login dan mempelajari drupal', '2016-03-15 07:52:33', '2016-03-15 16:14:46', '', 0, NULL),
(135, 135, 2, '1. Pemasangan Kabel\r\n2. Belajar Command Prom Linux (Debian)', '2016-03-15 08:02:01', '2016-03-15 16:13:26', '', 0, NULL),
(136, 136, 2, '1. Pemasangan kabel\r\n2. Belajar command prom Linux Debian', '2016-03-15 08:04:02', '2016-03-15 16:11:44', '', 0, NULL),
(137, 137, 2, '1. pemasangan kabel\r\n2. belajar command prom Linux (debian)', '2016-03-15 08:04:47', '2016-03-15 16:14:20', '', 0, NULL),
(138, 138, 2, 'melanjutkan project kemarin\r\n', '2016-03-15 08:09:13', '2016-03-15 16:01:53', '', 0, NULL),
(139, 139, 2, 'mengedit web dan memberi template untuk web streaming its', '2016-03-15 08:17:59', '2016-03-15 16:15:20', '', 0, NULL),
(140, 140, 2, 'belajar codeigniter', '2016-03-15 08:42:11', '2016-03-15 16:15:30', '', 0, NULL),
(141, 141, 1, NULL, '2016-03-16 07:25:15', '0000-00-00 00:00:00', '', 0, NULL),
(142, 142, 1, NULL, '2016-03-16 07:25:23', '0000-00-00 00:00:00', '', 1, '2016-03-23 02:36:04'),
(143, 143, 1, NULL, '2016-03-16 07:25:35', '0000-00-00 00:00:00', '', 0, NULL),
(144, 144, 1, NULL, '2016-03-16 07:25:45', '0000-00-00 00:00:00', '', 0, NULL),
(145, 145, 1, NULL, '2016-03-16 07:50:09', '0000-00-00 00:00:00', '', 0, NULL),
(146, 146, 1, NULL, '2016-03-16 07:50:54', '0000-00-00 00:00:00', '', 0, NULL),
(147, 147, 1, NULL, '2016-03-16 08:06:19', '0000-00-00 00:00:00', '', 0, NULL),
(148, 148, 1, NULL, '2016-03-16 08:07:18', '0000-00-00 00:00:00', '', 0, NULL),
(149, 149, 1, NULL, '2016-03-16 08:07:58', '0000-00-00 00:00:00', '', 0, NULL),
(150, 150, 1, NULL, '2016-03-16 08:08:40', '0000-00-00 00:00:00', '', 0, NULL),
(151, 151, 1, NULL, '2016-03-16 08:16:28', '0000-00-00 00:00:00', '', 0, NULL),
(152, 152, 1, NULL, '2016-03-16 08:31:13', '0000-00-00 00:00:00', '', 0, NULL),
(153, 153, 1, NULL, '2016-03-16 08:56:11', '0000-00-00 00:00:00', '', 0, NULL),
(154, 154, 1, NULL, '2016-03-16 09:02:38', '0000-00-00 00:00:00', '', 0, NULL),
(155, 155, 2, 'nganggur', '2016-03-21 13:57:14', '2016-03-21 13:57:32', '', 0, NULL),
(156, 156, 1, NULL, '2016-03-23 02:42:18', '0000-00-00 00:00:00', '', 0, NULL),
(157, 157, 1, NULL, '2016-03-27 22:46:59', '0000-00-00 00:00:00', '', 0, NULL),
(158, 158, 1, NULL, '2016-04-20 10:28:36', '0000-00-00 00:00:00', '', 0, NULL),
(159, 159, 2, 'belajar', '2016-04-27 08:36:49', '2016-04-27 08:37:03', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `pesan_id` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `judul_pesan` varchar(500) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `status_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`pesan_id`, `nis`, `judul_pesan`, `isi_pesan`, `tanggal`, `status_pesan`) VALUES
(4, 'SIS20160016', 'izin', 'Tanggal 10 dan 11 kemarin izin pulang ke tuban', '2016-03-15 16:08:38', 2),
(5, 'SIS20160019', 'izin', 'tanggal 10 dan 11 pulang ke tuban', '2016-03-15 16:10:16', 2),
(6, 'SIS20160015', 'izin', 'Tanggal 10 dan 11 izin pulang ke tuban', '2016-03-15 16:13:28', 2),
(7, 'SIS20160013', 'izin', 'tgl 10-11 maret 2016 pulang ke tuban.\r\ntgl 15 maret 2016 merawat teman sakit di kos.', '2016-03-16 08:09:49', 2),
(8, 'SIS20160006', 'error gan', 'up gan', '2016-03-21 13:59:37', 2),
(9, 'SIS20160001', 'shofa', 'shofa', '2016-03-23 01:31:29', 2),
(10, 'SIS20160001', 'shofa', 'qwerty', '2016-03-23 02:38:41', 2),
(11, 'SIS20160001', 'shofa', 'qwerty', '2016-03-23 02:38:59', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama`, `asal_sekolah`, `foto`, `password`, `hak_akses`) VALUES
(1, 'SIS20160001', 'Shofa Wardatul Jannah', 'SMK Negeri 1 Lumajang', 'fira7.jpg', 'ae2db6aa0a01114bd78e9972e5d8d110', 2),
(2, 'SIS20160002', 'Shafira Husnun Hanifah', 'SMK Negeri 1 Lumajang', 'fira8.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(3, 'SIS20160003', 'Abdil Tegar Arifin', 'SMK Negeri 1 Lumajang', '10447725_414435065363226_2613348350602791556_n.jpg', '5e5ebfd47bebf0b5b504f6057131fb82', 2),
(6, 'SIS20160006', 'Muhammad Daffa Umar', 'SMK Negeri 1 Surabaya', 'lel1.png', '135a4e22cda0e0a68499e6d6e2a861aa', 2),
(7, 'SIS20160007', 'Aditya Rezky Satria D', 'SMK Negeri 1 Surabaya', 'CharGirl_smileoryes2.png', 'a1dfb611a1b420a45ee05a11561195c3', 2),
(10, 'SIS20160010', 'Edith Arwansyah', 'SMK Negeri 1 Surabaya', 'asdf.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(11, 'SIS20160011', 'Ihza Ramadan', 'SMK NEGERI 1 SURABAYA', 'web101.JPG', '086e1b7e1c12ba37cd473670b3a15214', 2),
(13, 'SIS20160013', 'FIFI NUR LAILATUL M.', 'SMK NEGERI 1 TAMBAKBOYO', '20141210_105622.jpg', '480a91887aac75829179fea1ffcdab64', 2),
(14, 'SIS20160014', 'Nivada Mayang Canasta', 'SMK Negeri 1 Surabaya', 'Rocky2.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(15, 'SIS20160015', 'M YAHYA IRWANTO', 'SMK NEGERI 1 TAMBAKBOYO', 'lee_min_ho_faith_by_jmlnike-d5nm4tv.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(16, 'SIS20160016', 'DWI RAHMAWATI', 'SMK NEGERI 1 TAMBAKBOYO', 'C360_2015-02-17-15-37-27-767.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(19, 'SIS20160019', 'SRI HARTINI', 'SMK NEGERI 1 TAMBAKBOYO', 'fira9.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(20, 'SIS20160020', 'Muhammad Abdul Rizal', 'SMK Negeri 1 Lumajang', 'RIZAL.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(21, 'SIS20160021', 'Mohamad Rizal Ramli', 'SMK Negeri 1 Lumajang', 'doa40.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(22, 'SIS20160022', 'Andri Fanky Kurniawan', 'SMK Negeri 1 Lumajang', 'boy2.png', '8f73160fd6124b5793d6b971d1ea32f2', 2),
(23, 'SIS20160023', 'rizki', 'smk', '1185284_1580678825592215_8855109918244598757_n4.jpg', '086e1b7e1c12ba37cd473670b3a15214', 2),
(24, 'SIS20160024', 'Rizki ', 'smk 1 ', '587777.png', '086e1b7e1c12ba37cd473670b3a15214', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `sekolah` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `hak_akses` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `nama`, `alamat`, `sekolah`, `foto`, `password`, `hak_akses`) VALUES
(1, 'shafira', 'fira', 'lumajang', 'SMKN 01 Lumajang', 'b.png', '086e1b7e1c12ba37cd473670b3a15214', '1'),
(2, 'daffa', 'daffa', 'jl.kebraon', 'SMKN 01 Surabaya', '', '7b1e852330575c92c8d918377b30726a', '1'),
(4, 'Shofa', 'Shofa Wardatul Jannah', 'lumajang', 'SMKN 01 Lumajanang', 'WmDev_6359484873258403031.jpg', '086e1b7e1c12ba37cd473670b3a15214', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nis`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `pesan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
