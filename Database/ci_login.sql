-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 10:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_jawaban`
--

CREATE TABLE `tbl_detail_jawaban` (
  `id` int(11) NOT NULL,
  `id_jawaban` varchar(50) DEFAULT NULL,
  `id_detail_soal` varchar(50) DEFAULT NULL,
  `jawaban` varchar(256) DEFAULT NULL,
  `status` enum('Sudah di Jawab','Belum di Jawab') DEFAULT 'Sudah di Jawab'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_jawaban`
--

INSERT INTO `tbl_detail_jawaban` (`id`, `id_jawaban`, `id_detail_soal`, `jawaban`, `status`) VALUES
(81, '20200820171825', '2', 'adfafaf', 'Sudah di Jawab'),
(82, '20200820171825', '4', 'aggdhdh', 'Sudah di Jawab'),
(83, '20200820171825', '5', 'afafs', 'Sudah di Jawab'),
(84, '20200820171825', '6', 'kykhm', 'Sudah di Jawab'),
(85, '20200820171825', '7', 'afasasf', 'Sudah di Jawab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_penilaian`
--

CREATE TABLE `tbl_detail_penilaian` (
  `id` int(11) NOT NULL,
  `id_detail_Soal` int(11) NOT NULL DEFAULT '0',
  `id_detail_jawaban` int(11) NOT NULL DEFAULT '0',
  `nilai` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id` varchar(50) NOT NULL,
  `id_kuis` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jawaban`
--

INSERT INTO `tbl_jawaban` (`id`, `id_kuis`, `email`, `tanggal`) VALUES
('20200820171825', '202020081605', 'ahmadnurohim@gmail.com', '2020-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `nip` varchar(50) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `tahun_masuk` date DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nip`, `alamat`, `jabatan`, `tahun_masuk`, `no_hp`) VALUES
('0', '2017102078', 'cirebon', 'Staff', '2020-01-01', '2147483647'),
('20200807170556', '2017102078', 'cirebon', 'Admin', '2017-01-01', '081214535610'),
('20200807182857', '2017102082', 'beber', 'Keuangan', '2020-01-01', '089765432543'),
('20200808012015', '2017102001', 'Indramayu kota', 'Staff', '2018-09-11', '087432677890'),
('20200819201001', '2017302089', 'sumber', 'Keuangan', '2020-01-01', '089765234564');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kuis_detail`
--

CREATE TABLE `tbl_kuis_detail` (
  `id` varchar(50) DEFAULT NULL,
  `id_kuis` varchar(50) DEFAULT NULL,
  `id_soal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kuis_detail`
--

INSERT INTO `tbl_kuis_detail` (`id`, `id_kuis`, `id_soal`) VALUES
('202020080516', '202020081605', '20200809205725'),
('202020080516', '202020081605', '20200814113548'),
('202020080516', '202020081605', '20200809215833'),
('202020080516', '202020081605', '20200814113602'),
('202020080516', '202020081605', '20200814113620');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` varchar(50) NOT NULL DEFAULT '',
  `id_jawaban` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `keterangan` enum('Sudah di Nilai','Belum di Nilai') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id_penilaian`, `id_jawaban`, `nilai`, `keterangan`) VALUES
('20200820095850', '20200820171825', 90, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quesioner`
--

CREATE TABLE `tbl_quesioner` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `keterangan` varchar(128) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quesioner`
--

INSERT INTO `tbl_quesioner` (`id`, `tanggal`, `keterangan`) VALUES
('202020081605', '2020-08-23', 'Kuesioner Bulan Agustus week 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id` int(11) NOT NULL,
  `id_soal` varchar(50) DEFAULT NULL,
  `soal` varchar(256) DEFAULT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id`, `id_soal`, `soal`, `date_created`) VALUES
(2, '20200809205725', 'Seberapa sering Anda menepati deadline pekerjaan anda?', '2020-08-09'),
(4, '20200809215833', 'Sebaik apa Anda bekerja dengan karyawan-karyawan lainnya?', '2020-08-09'),
(5, '20200814113548', 'Seberapa keras karyawan Anda bekerja?', '2020-08-14'),
(6, '20200814113602', 'Seberapa efektif Anda mengerjakan tugas-tugasnya?\r\n', '2020-08-14'),
(7, '20200814113620', 'Sebaik apa Anda membagi tanggung jawab tugas-tugasnya dengan karyawan lainnya?', '2020-08-14'),
(8, '20200814113643', 'Secepat apa karyawan Anda menanggapi permintaan atasan?', '2020-08-14'),
(9, '20200814113857', 'Seberapa baik Anda menangani kritik terhadap pekerjaannya?', '2020-08-14'),
(10, '20200814113916', 'Seberapa cepat Anda mengatur diri terhadap perubahan prioritas pekerjaan?', '2020-08-14'),
(11, '20200814115133', 'Seberapa baik pengetahuan Anda tentang goal perusahaan?\r\n', '2020-08-14'),
(12, '20200814115150', 'Apa yang perlu Anda lakukan untuk meningkatkan kinerjanya? Jelaskan dalam penyampaian Anda sendiri', '2020-08-14'),
(13, '20200814120310', 'Apakah anda penuh antusias dalam menerima tugas baru?', '2020-08-14'),
(14, '20200814120328', 'Apakah anda terbuka pada saran-saran dan ide baru?', '2020-08-14'),
(15, '20200814120751', 'apakah anda bekerja baik dengan karyawan lainnya?', '2020-08-14'),
(16, '20200814120812', 'bagaimana sikap anda ketika bekerja dalam tim dan ada masalah?', '2020-08-14'),
(17, '20200814120855', 'Bagaimana anda menghadapi perubahan yang cepat terjadi dalam pekerjaan?', '2020-08-14'),
(18, '20200814120934', 'Apakah anda antusias terhadap tantangan dan ide baru?', '2020-08-14'),
(19, '20200814121122', 'Seberapa efektif anda mengatur ulang pekerjaan untuk menyesuaikan perubahan kondisi?', '2020-08-14'),
(20, '20200814121153', 'Apakah anda berpikir jauh ke depan tentang rencana untuk menghadapi perubahan kondisi saat kerja?', '2020-08-14'),
(21, '20200814121211', 'Apakah anda berkomunikasi secara efektif dengan karyawan lain dan supervisor.?', '2020-08-14'),
(22, '20200814121322', 'Apakah anda menyampaikan permasalahan kepada supervisor/atasan ketika diperlukan?', '2020-08-14'),
(23, '20200814121339', 'apakah anda berkeinginan untuk membantu pekerjaan karyawan lain ketika dibutuhkan.?', '2020-08-14'),
(24, '20200814121412', 'Bagaimana cara anda menginformasikan keluhan atau kekhawatiran kepada supervisor/atasan', '2020-08-14'),
(25, '20200814121453', 'Apakah anda memiliki inisiatif dalam bekerja?', '2020-08-14'),
(26, '20200814121520', 'Apakah memperhatikan waktu, dalam hal ini adalah kedisiplinan dalam bekerja?', '2020-08-14'),
(27, '20200814121558', 'Jabarkan mengenai etos bekerja anda', '2020-08-14'),
(28, '20200814121644', 'Apakah anda selalu datang bekerja ke kantor/lapangan tepat waktu?', '2020-08-14'),
(29, '20200814121727', 'Apakah anda selalu menyelesaikan tugas dengan waktu yang yang telah ditentukan dengan tepat?', '2020-08-14'),
(30, '20200814121945', 'Bagaimana Anda membagi tanggung jawab tugas-tugasnya dengan karyawan lainnya?', '2020-08-14'),
(31, '20200814122000', 'Bagaimana anda memanage waktu dalam mengerjakan pekerjaan anda?', '2020-08-14'),
(32, '20200814122113', 'jika atasan melakukan kesalahan pada pekerjaan yang mempengaruhi bawahannya, bagaimana cara anda mengkoreksi dan menyampaikannya kepada atasan anda?', '2020-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(128) NOT NULL DEFAULT '0',
  `email` varchar(128) NOT NULL DEFAULT '0',
  `image` varchar(128) NOT NULL DEFAULT '0',
  `password` varchar(256) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '0',
  `is_active` int(1) NOT NULL DEFAULT '0',
  `date_created` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
('0', 'khaerul', 'buatpengaman@yahoo.com', 'default.jpg', '$2y$10$9CqYLsN32rwCBmHxC0T9Qunbb420lyo07I./BbEgp1s3q8H3yXwPu', 2, 1, 1596793408),
('20200807170243', 'Khaerul Anwar', 'khoerulanwar523@yahoo.com', 'default.jpg', '$2y$10$1CQY1r4cBMpvhSV8CxflxebksFtT5nAa/ftCVtKQCVm0WK1HNVrkm', 2, 1, 1596812589),
('20200807170556', 'Khaerul Anwar', 'khoerulanwar523@yahoo.com', 'default.jpg', '$2y$10$4ca/SdjElL4RTrdGLasXBu2SPKSLBHeisTueR1kKmVTKLRcGOCkkS', 2, 1, 1596812780),
('20200807182857', 'Try Setya Nugraha', 'trysn11@gmail.com', 'default.jpg', '$2y$10$A9PZ1ABtPVYQp7ZH1yX6FuUitgrsXGFjrEiq9BHeYftGPnVIET2YW', 2, 1, 1596817794),
('20200808012015', 'Ahmad Nurohim', 'ahmadnurohim@gmail.com', 'default.jpg', '$2y$10$jMucd9q0TVqrzoU8pKNJ/.7LI8kA3BQmvOr71SG8nObgB.gwoiCem', 2, 1, 1596842484),
('20200819201001', 'Fatur Rosyidin', 'fatur@gmail.com', 'default.jpg', '$2y$10$gGDQToJfwO4kKTgpM7hskOaa.1QCbwaU/l1IvPYOScQSiFjfNFkl2', 2, 1, 1597860659),
('2147483647', 'pakel', 'pakel@gmail.com', 'default.jpg', '$2y$10$Jxqi0dVuoEtV74oziaCTPOG7xhc5.OVtQYnkrWRa5SEaBQZ5haPLC', 2, 1, 1596793675),
('7', 'khaerul anwar', 'anwar@gmail.com', 'default.jpg', '$2y$10$RGrdJ5cXR3Hj66AUNz7HGeo2wnyYXKieOZJ/C7rUu4rE6Lr.g.sjm', 2, 1, 1590000439),
('8', 'khoerul', 'khaerul@gmail.com', 'avatar_126566.jpg', '$2y$10$ffiyrawCIGjRuXnTSpjE9OWXtZRoJde4Fc038pXLmRmz/9/jfq43a', 1, 1, 1590010091);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(6, 1, 3),
(7, 1, 5),
(8, 1, 2),
(9, 1, 6),
(12, 2, 7),
(13, 1, 7),
(14, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'karyawan'),
(6, 'Soal'),
(7, 'Kuesioner'),
(8, 'Penilaian');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'User Role', 'admin/role', 'fas fa-fw fa-users-cog', 1),
(9, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 5, 'Karyawan', 'karyawan', 'fas fa-fw fa-user-tie', 1),
(11, 5, 'Tambah Karyawan', 'karyawan/tambah', 'fas fa-fw fa-user-plus', 1),
(12, 6, 'Soal Kuesioner', 'soal', 'fas fa-fw fas fa-sticky-note', 1),
(13, 6, 'kuesioner', 'Soal/kuesioner', 'fas fa-fw fa-poll-h', 1),
(14, 6, 'Kuis Detail', 'soal/detail_kuis', 'fas fa-fw fa-book-open', 1),
(15, 7, 'Kuis', 'kuis_karyawan', 'fas fa-fw fa-book-reader', 1),
(16, 8, 'Penilaian Kuesioner', 'penilaian', 'fas fa-fw fa-chalkboard-teacher', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_jawaban`
--
ALTER TABLE `tbl_detail_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jawaban` (`id_jawaban`),
  ADD KEY `id_detail_soal` (`id_detail_soal`);

--
-- Indexes for table `tbl_detail_penilaian`
--
ALTER TABLE `tbl_detail_penilaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_detail_Soal` (`id_detail_Soal`),
  ADD KEY `id_detail_jawaban` (`id_detail_jawaban`);

--
-- Indexes for table `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`id_kuis`),
  ADD KEY `id_soal` (`id_kuis`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD KEY `id_jawaban` (`id_jawaban`);

--
-- Indexes for table `tbl_quesioner`
--
ALTER TABLE `tbl_quesioner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_jawaban`
--
ALTER TABLE `tbl_detail_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tbl_detail_penilaian`
--
ALTER TABLE `tbl_detail_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
