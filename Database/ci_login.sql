-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 10:22 PM
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
(1, '20200731205921', '2', 'cukup sering jika sudah, dan biasanya beberapa hari sebelum waktu deadline pekerjaan saya menyelesaikan pekerjaan', 'Sudah di Jawab'),
(2, '20200731205921', '6', '\r\ncukup sering jika sudah, dan biasanya beberapa hari sebelum waktu deadline pekerjaan saya menyelesaikan pekerjaan', 'Sudah di Jawab'),
(3, '20200731205921', '8', 'ketika ada tugas dari atasan saya biasanya mengkonfirmasi terlebih dahulu tugas yang diberikan agar bisa membagi waktu dalam mengerjakannnya', 'Sudah di Jawab'),
(4, '20200731205921', '13', 'saya cukup antusias dalam menerima tugas baru apalagi jika tugas itu memang menjadi bagian utama pekerjaan saya', 'Sudah di Jawab'),
(5, '20200731205921', '12', 'seperti yang saya katakan pada point 2, saya biasa membagi waktu untuk beberapa pekerjaan agar pekerjaan menjadi lebih efisien', 'Sudah di Jawab'),
(6, '20200731210250', '2', 'dalam beberapa hari sebelum waktu deadline saya menyelesaikan pekerjaan', 'Sudah di Jawab'),
(7, '20200731210250', '6', 'sangat efektif dalam mengerjakan tugas', 'Sudah di Jawab'),
(8, '20200731210250', '8', 'biasanya mengkonfirmasi terlebih dahulu tugas yang diberikan agar bisa membagi waktu dalam mengerjakannnya', 'Sudah di Jawab'),
(9, '20200731210250', '13', 'dalam menerima tugas baru apalagi jika tugas itu memang menjadi bagian utama pekerjaan saya', 'Sudah di Jawab'),
(10, '20200731210250', '12', 'saya biasa membagi waktu untuk beberapa pekerjaan sehingga pekerjaan menjadi lebih efisien', 'Sudah di Jawab'),
(11, '20200731210527', '2', 'deadline biasanya secepatnya saya kerjakan', 'Sudah di Jawab'),
(12, '20200731210527', '6', 'cukup efektif', 'Sudah di Jawab'),
(13, '20200731210527', '8', 'ketika ada tugas dari atasan saya biasanya memprioritaskan terlebih dahulu tugas yang diberikan atasan', 'Sudah di Jawab'),
(14, '20200731210527', '13', 'saya cukup antusias dalam menerima tugas baru ', 'Sudah di Jawab'),
(15, '20200731210527', '12', 'beberapa pekerjaan biasanya saya bagi dalam beberapa sesi', 'Sudah di Jawab'),
(16, '20200807211809', '15', 'Sangat baik, bahkan saya sering kali sharing ilmu dengan rekan kerja lainnya', 'Sudah di Jawab'),
(17, '20200807211809', '4', 'Sangat baik, bahkan saya sering kali sharing ilmu dengan rekan kerja lainnya', 'Sudah di Jawab'),
(18, '20200807211809', '6', 'Sangat efektif ', 'Sudah di Jawab'),
(19, '20200807211809', '5', 'Saya bekerja keras di week 3 bulan ini dengan pencapaian yang ada', 'Sudah di Jawab'),
(20, '20200807211809', '2', 'Deadline saya selau terpenuhi', 'Sudah di Jawab'),
(21, '20200807212040', '15', 'Sangat baik, progress yang ada pada data saya, saya selau bersaing dalam pekerjaan untuk menjadi siapa yang lebih baik.', 'Sudah di Jawab'),
(22, '20200807212040', '4', 'Sangat baik, saya membuat banyak korelasi dengan rekan kerja saya', 'Sudah di Jawab'),
(23, '20200807212040', '6', 'Minggu ini, saya sangat tepat dalam melakukann laporan laporan dan saya memenuhi tugas saya tanpa ada kendala', 'Sudah di Jawab'),
(24, '20200807212040', '5', 'Saya tidak terlalu keras dalam bekerja pada minggu ini, tapi saya memenuhi semua kewajiban saya sebagi karyawan', 'Sudah di Jawab'),
(25, '20200807212040', '2', 'Sangat sering', 'Sudah di Jawab'),
(26, '20200807212508', '15', 'Sangat baik, saya menghargai beberapa rekan kerja saya.', 'Sudah di Jawab'),
(27, '20200807212508', '4', 'Saya bekerja dengan baik pada minggu ini', 'Sudah di Jawab'),
(28, '20200807212508', '6', 'Sangat efektif, saya sempat mengalami beberapa kendala pada minggu ini tapi semua tugas dan kewajiban saya sebagai karyawan saya tepati', 'Sudah di Jawab'),
(29, '20200807212508', '5', 'sangat keras pada minggu ini tentunya', 'Sudah di Jawab'),
(30, '20200807212508', '2', 'tidak pernah lewat deadline', 'Sudah di Jawab'),
(31, '20200820213556', '10', 'Sangat cepat, ketika memasuki waktu untuk bekerja maka anggung bejawab saya adalah bekerja.', 'Sudah di Jawab'),
(32, '20200820213556', '17', 'Saya bisa beradaptasi dengan baik, dalam hal apapun.', 'Sudah di Jawab'),
(33, '20200820213556', '20', 'Tidak, saya menjalani aapa yang kantor tugaskan kepada saya.', 'Sudah di Jawab'),
(34, '20200820213556', '21', 'tentu saja, setiap hari', 'Sudah di Jawab'),
(35, '20200820213556', '23', 'tentu saja', 'Sudah di Jawab'),
(36, '20200820213831', '10', 'Saya mengalami kendala dalam perubahan tersebut', 'Sudah di Jawab'),
(37, '20200820213831', '17', 'Saya terkadang mengalami beberapa kendala tapi saya bisa karena waktu akan memaksa saya untuk bisa menghadapi perubahan tersebut', 'Sudah di Jawab'),
(38, '20200820213831', '20', 'tentu saja', 'Sudah di Jawab'),
(39, '20200820213831', '21', 'tidak setiap hari karena saya bekerja dibagian lapangan', 'Sudah di Jawab'),
(40, '20200820213831', '23', 'tentu saja karena beberapa karyawan lain  membantu saya saatsaya dalam kesusahan', 'Sudah di Jawab'),
(41, '20200820214053', '10', 'cepat karena prioritas', 'Sudah di Jawab'),
(42, '20200820214053', '17', 'tentu saja cepat, saya amfibi dalam bekerja', 'Sudah di Jawab'),
(43, '20200820214053', '20', 'tergantung situasi', 'Sudah di Jawab'),
(44, '20200820214053', '21', 'setiap hari saya berkomunikasi dengan merkea', 'Sudah di Jawab'),
(45, '20200820214053', '23', 'iya tentu saja', 'Sudah di Jawab');

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
('20200731205921', '20203107070154', 'halimah.im@gmail.com', '2020-07-31'),
('20200731210250', '20203107070154', 'nur.hanan11@gmail.com', '2020-07-31'),
('20200731210527', '20203107070154', 'azi.ibrahim13@gmail.com', '2020-07-31'),
('20200807211809', '20200808091440', 'azi.ibrahim13@gmail.com', '2020-08-07'),
('20200807212040', '20200808091440', 'nur.hanan11@gmail.com', '2020-08-07'),
('20200807212508', '20200808091440', 'halimah.im@gmail.com', '2020-08-07'),
('20200820213556', '20200708093407', 'halimah.im@gmail.com', '2020-08-20'),
('20200820213831', '20200708093407', 'azi.ibrahim13@gmail.com', '2020-08-20'),
('20200820214053', '20200708093407', 'nur.hanan11@gmail.com', '2020-08-20');

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
('20200731204240', 'HSN22382211', 'Taman Intan Megu', 'Marketing G. Samara', '2019-03-09', '0876579887'),
('20200801162940', 'HSN22523700', 'Taman Intan Megu', 'Legal Perijinan', '2016-05-01', '082129686893'),
('20200807170556', '2017102078', 'cirebon', 'Admin', '2017-01-01', '081214535610'),
('20200807182857', '2017102082', 'beber', 'Keuangan', '2020-01-01', '089765432543'),
('20200808012015', '2017102001', 'Indramayu kota', 'Staff', '2018-09-11', '087432677890'),
('20200819201001', '2017302089', 'sumber', 'Keuangan', '2020-01-01', '089765234564'),
('20200824174046', 'HSN22440439', 'Taman cherry mundu', 'Supervisor Teknik Proyek', '2016-05-01', '081313419077'),
('20200824174300', 'HSN22716316', 'Taman hasna pamengkang', 'Supervisor Teknik Proyek', '2016-07-01', '089514644991'),
('20200824174431', 'HSN22383308', 'Taman intan megu ', 'Adm. Keuangan', '2018-08-01', '081320698806'),
('20200824174625', 'HSN22347544', 'puri cirebon lestari', 'Accounting', '2020-01-01', '085317552982'),
('20200824174758', 'HSN22849709', '', 'Adm Bank Marketing', '2020-01-01', '082122821206'),
('20200824174832', 'HSN22193055', 'jl.evakuasi no.18', 'Adm Bank Marketing', '2018-08-01', '082237225373'),
('20200824174941', 'HSN22843995', 'cilimus ', 'Teknik Proyek G. Samara', '2019-08-11', '085353245340'),
('20200824175053', 'HSN22285080', 'pesawahan', 'Teknik Proyek G. Sakinah', '2019-08-08', '083824807179'),
('20200824184004', 'HSN22374086', 'drajat', 'Bagian Umum', '2019-11-30', '0895611980908'),
('20200824184147', 'HSN22924108', 'plered', 'Marketing Admin G. Sakinah', '2020-01-01', '087733947782'),
('20200824184243', 'HSN22753610', 'kuningan\r\n', 'Adm. Teknik', '2020-01-01', '085317558026'),
('20200824185018', 'HSN22657735', 'taman salsabila mundu ', 'Marketing G. Samara', '2019-12-09', '085231755642'),
('20200824185147', 'HSN22275229', 'gebang ', 'Marketing G. Samara', '2019-10-30', 'gebang '),
('20200824185259', 'HSN22382344', 'sindang laut', 'Marketing G. Samara', '2018-04-01', '083246525373'),
('20200824185447', 'HSN22248912', 'perum permata ', 'Marketing G. Sakinah', '2020-01-01', '085359836540'),
('20200824185640', 'HSN22198410', 'taman kepompongan ', 'Marketing G. Sakinah', '2019-08-11', '089532480779'),
('20200824185912', 'HSN22457770', 'taman kepompongan ', 'OB', '2019-08-11', '087212657223');

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
('20203107070248', '20203107070154', '20200809205725'),
('20203107070255', '20203107070154', '20200814113602'),
('20203107070259', '20203107070154', '20200814113643'),
('20203107070307', '20203107070154', '20200814120310'),
('20203107070313', '20203107070154', '20200814115150'),
('20200708091606', '20200808091440', '20200814120751'),
('20200708091615', '20200808091440', '20200809215833'),
('20200708091621', '20200808091440', '20200814113602'),
('20200708091628', '20200808091440', '20200814113548'),
('20200708091649', '20200808091440', '20200809205725'),
('20202008093450', '20200708093407', '20200814121153'),
('20202008093458', '20200708093407', '20200814121211'),
('20202008093504', '20200708093407', '20200814121339'),
('20202008093511', '20200708093407', '20200814120855'),
('20202008093519', '20200708093407', '20200814113916');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_penilaian` varchar(50) NOT NULL DEFAULT '',
  `id_jawaban` varchar(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`id_penilaian`, `id_jawaban`, `nilai`, `keterangan`) VALUES
('20200731090154', '20200731205921', 19, 'Sudah di jawab'),
('20200731090732', '20200731210250', 22, 'Sudah di jawab'),
('20200731090808', '20200731210527', 19, 'Sudah di jawab'),
('20200807092917', '20200807212040', 20, 'Sudah di jawab'),
('20200807092954', '20200807212508', 15, 'Sudah di jawab'),
('20200807093015', '20200807211809', 22, 'Sudah di jawab'),
('20200820094356', '20200820213831', 25, 'Sudah di jawab'),
('20200820094415', '20200820214053', 14, 'Sudah di jawab'),
('20200820094435', '20200820213556', 16, 'Sudah di jawab');

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
('20200708093407', '2020-08-21', 'Kuesioner Bulan Agustus Week-3'),
('20200808091440', '2020-08-14', 'Kuesioner Bulan Agustus Week-2'),
('20203107070154', '2020-08-07', 'kuesioner bulan agustus week 1');

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
('20200731204240', 'Azi Ibrahim', 'azi.ibrahim13@gmail.com', 'WhatsApp_Image_2020-08-25_at_1_56_16_AM.jpeg', '$2y$10$velUtQ2QUwSYLgID3z7j5u0m6hmJ9zyX/1oup2vbJ/EOb6gNv8WzK', 2, 1, 1596221062),
('20200801162940', 'Indah Lestari', 'indah.lst21@gmail.com', 'WhatsApp_Image_2020-08-25_at_1_39_21_AM.jpg', '$2y$10$1JI5u92doKVYrAjHdtM2ROEPDsSEd06ZqzdGqH6qvXniII5kD2Df.', 1, 1, 1598282721),
('20200807170243', 'Khaerul Anwar', 'khoerulanwar523@yahoo.com', 'default.jpg', '$2y$10$1CQY1r4cBMpvhSV8CxflxebksFtT5nAa/ftCVtKQCVm0WK1HNVrkm', 2, 1, 1596812589),
('20200807170556', 'Khaerul Anwar', 'khoerulanwar523@yahoo.com', 'default.jpg', '$2y$10$4ca/SdjElL4RTrdGLasXBu2SPKSLBHeisTueR1kKmVTKLRcGOCkkS', 2, 1, 1596812780),
('20200807182857', 'Try Setya Nugraha', 'trysn11@gmail.com', 'default.jpg', '$2y$10$A9PZ1ABtPVYQp7ZH1yX6FuUitgrsXGFjrEiq9BHeYftGPnVIET2YW', 2, 1, 1596817794),
('20200808012015', 'Ahmad Nurohim', 'ahmadnurohim@gmail.com', 'saber_minimalist_2nd_by_xryns01-dauwt6t.png', '$2y$10$jMucd9q0TVqrzoU8pKNJ/.7LI8kA3BQmvOr71SG8nObgB.gwoiCem', 2, 1, 1596842484),
('20200819201001', 'Fatur Rosyidin', 'fatur@gmail.com', 'default.jpg', '$2y$10$gGDQToJfwO4kKTgpM7hskOaa.1QCbwaU/l1IvPYOScQSiFjfNFkl2', 2, 1, 1597860659),
('20200824174046', 'Anang Sopian', 'angsopian@gmail.com', 'default.jpg', '$2y$10$UDl1TamRsmrebz7hDUOQg.5gEWeiYVt4Ol7K7m90bMHSp2ysQJnqu', 2, 1, 1598283744),
('20200824174300', 'Hidayatul Karim', 'hidayatulkarim131@gmail.com', 'default.jpg', '$2y$10$/eD4zzTxr4dAQvbXJ8Qz4.gJ5D/UwHChDGba3Ot1luxFMalPSuV0q', 2, 1, 1598283848),
('20200824174431', 'Nur Hanan', 'nur.hanan11@gmail.com', 'fotoprojek.jpg', '$2y$10$h2zTCXa7KEpmGxD0tndIHed7VTxmP/eFjFBIl9sxyTPAoZO0RjZ.q', 2, 1, 1598283919),
('20200824174625', 'Imah Halimah', 'halimah.im@gmail.com', 'fotoprojek2.jpg', '$2y$10$S2lA8UqeOK9HKu1o8//V/.Y5aP3dhJa58B5JWRFuIvvKNibBOOpiW', 2, 1, 1598284012),
('20200824174758', 'Nikeu Krisdianti', 'nikeuarian@gmail.com', 'default.jpg', '$2y$10$YyEo84RFDQJCE.pYZ83KrOx3N7nAtQouOIOTA220K4tdL14Vesp/2', 2, 1, 1598284104),
('20200824174832', 'Cici Suciati Daniswara', 'cicisuciatidanis@gmail.com', 'default.jpg', '$2y$10$ZehruyMWPEJRrpVBeUT2fueKNpjW/pQBPBluJrubWNnmS6ImkE9/u', 2, 1, 1598284177),
('20200824174941', 'Wawan Sukmawan', 'wawan.smwan@gmail.com', 'default.jpg', '$2y$10$uGL4FP6hlvt0NmcIjDz11.1rTjCe0GumXEjCjYlCgLV/FI98y.r6q', 2, 1, 1598284244),
('20200824175053', 'Oki Susanto', 'm.oki_susanto@gmail.com', 'default.jpg', '$2y$10$pX9fnYnBTubX46u.qVsYcOmfDG2w5dH0KMO48wdloqGbHOlR6skoO', 2, 1, 1598284313),
('20200824184004', 'Febry Adiputra', 'febriadiputrarh@gmail.com', 'default.jpg', '$2y$10$kWALQyHkVWvp0Q5H.DTm0.C2pUGBTzfah.gkW38jEjLyJsDI9HfkW', 2, 1, 1598287294),
('20200824184147', 'Suryani Fatimah', 'suryanifatimah.ahr@gmail.com', 'default.jpg', '$2y$10$yqAExur09z4g9x5QSU7AUeT010o4B5z0Hf3ssgCmg/2WcOUlYmU9C', 2, 1, 1598287361),
('20200824184243', 'Rima Nurhasanah', 'nurhasanah.rima33@gmail.com', 'default.jpg', '$2y$10$dqBLmPI231InYH1QoDGgO.XrMFbHcSxlNH7LEuSlPx7ua1bH45see', 2, 1, 1598287415),
('20200824185018', 'Nurlaela', 'nurlaella31@gmail.com', 'default.jpg', '$2y$10$3/YlrYYvOUAiNN0Tzm9L7OANdxd/GweUH8gxBBYdfCXVR5qcuMuTy', 2, 1, 1598287894),
('20200824185147', 'Safitri Puspita Dewi', 'sf.puspitadewi77@gmail.com', 'default.jpg', '$2y$10$wHJ5eKZQVUBr7p67wnAVA.dxrDD.SQWBCCBWoEG7XoYOrEAkpGpva', 2, 1, 1598287977),
('20200824185259', 'Deden', 'deden.ms54@gmail.com', 'default.jpg', '$2y$10$cMbU0wpHE3XfbnpIDoCZje4Il5.lnwHRQSJqTymnuci2yzS1LcvA6', 2, 1, 1598288035),
('20200824185447', 'Saefur Rohman', 'saefurrohm@gmail.com', 'default.jpg', '$2y$10$UhvA75LdmAqBzm3y6clgwevX/6I2oNxfuBiSvVx2Tt/ce4IPIScYu', 2, 1, 1598288109),
('20200824185640', 'Faozan Adi', 'faozan.adi@gmail.com', 'default.jpg', '$2y$10$N8BuAvCCpa.PRI0ulUP2G.xzGs1Gnx/vfyo5WBRt0sRJKq0ljUO.e', 2, 1, 1598288259),
('20200824185912', 'Dafid', 'daffid21@gmail.com', 'default.jpg', '$2y$10$1pffW.K0Cs3mjcWRHWT1qeJqMwMr3CpAD/zLILn0ZsD84khs0O.LC', 2, 1, 1598288483),
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
(8, 1, 2),
(6, 1, 3),
(7, 1, 5),
(9, 1, 6),
(13, 1, 7),
(14, 1, 8),
(15, 1, 11),
(3, 2, 2),
(12, 2, 7),
(16, 2, 11);

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
(8, 'Penilaian'),
(11, 'Karyawan Terbaik');

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
(14, 6, 'Kuis Detail', 'soal/detail_kuis', 'fas fa-fw fa-book-open', 0),
(15, 7, 'Kuis', 'kuis_karyawan', 'fas fa-fw fa-book-reader', 1),
(16, 8, 'Penilaian Kuesioner', 'penilaian', 'fas fa-fw fa-chalkboard-teacher', 1),
(17, 11, 'Karyawan Terbaik', 'penilaian/best_karyawan', 'fas fa-fw fa-trophy', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_jawaban`
--
ALTER TABLE `tbl_detail_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jawaban` (`id_jawaban`),
  ADD KEY `id_detail_soal` (`id_detail_soal`),
  ADD KEY `jawaban` (`jawaban`);

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
-- Indexes for table `tbl_kuis_detail`
--
ALTER TABLE `tbl_kuis_detail`
  ADD KEY `id_kuis` (`id_kuis`,`id_soal`),
  ADD KEY `id_soal` (`id_soal`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD KEY `id` (`id`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`,`menu_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_jawaban`
--
ALTER TABLE `tbl_detail_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
