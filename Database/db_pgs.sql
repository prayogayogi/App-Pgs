-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 07:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_guru`
--

CREATE TABLE `db_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `mengajar` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_guru`
--

INSERT INTO `db_guru` (`id`, `nama`, `email`, `jabatan`, `mengajar`, `foto`, `deskripsi`, `password`, `created_at`) VALUES
(1, 'Helmi JohanS.Pd	', '', 'KEPALA SEKOLAH', 'Matematika', 'person_3.jpg	', ' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown print...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628013'),
(2, 'AMELIA SARI	', '', 'WAKIL KEPALA SEKOLAH', 'Pemprograman Mobile	', 'person_2.jpg	', ' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown print...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628012'),
(3, 'Anggi S.Pd	', '', 'GURU', 'Matematika', 'person_8.jpg	', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printe...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628021'),
(4, 'Sugini S.Pd	', '', 'GURU', 'Bahasa Indonesia	', 'person_5.jpg	', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printe...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628023'),
(5, 'Aqila  S.Keb	', '', 'GURU', 'Kesehatan', 'person_7.jpg	', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printe...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628024'),
(6, 'Alan S.Kom	', '', 'GURU	', 'Desigen Web Figma	', 'person_1.jpg	', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628025'),
(7, 'Prayoga S. Pd	', '', 'KARYAWAN SEKOLAH	', 'Tata Usaha	', 'person_31.jpg	', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore...	', '$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy	', '1627628026');

-- --------------------------------------------------------

--
-- Table structure for table `db_informasi`
--

CREATE TABLE `db_informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `ouner_post` varchar(225) NOT NULL,
  `slug_judul` varchar(50) NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_informasi`
--

INSERT INTO `db_informasi` (`id`, `judul`, `isi`, `foto`, `ouner_post`, `slug_judul`, `created_at`) VALUES
(1, 'Sekolah Akan Masuk Bulan Depan	', 'sekolah akan masuk bulan depan dan semua siswa atau guru di haruskan masuk tanpa terkecuali dan sisw...	', '-20200430120422.jpeg	', 'BERTHA JAYA PUTRA	', 'Sekolah-Akan-Masuk-Bulan-Depan	', '1629125382'),
(2, 'Ujian Semester Ganjil	', 'mentoring-dengan-profesional-20200430121728.jpg	', 'mentoring-dengan-profesional-20200430121728.jpg	', 'BERTHA JAYA PUTRA	', 'ujian-semester-ganjil	', '1629125499'),
(3, 'Wajip Mengunakan Master	', 'semua siswa atau guru tanpa terkecuali di harapkan mengunakan masker untuk menghindarai penyebaran v...	', 'lab-admistrasi-perkantoran-20200430115528.jpeg	', 'BERTHA JAYA PUTRA	', 'wajip-mengunakan-master	', '1629125580'),
(4, 'Sosialisai Dari Kepolisian	', 'pekan depan akan di adakan sosialisai tantang penting nya mengunakan helem untuk menlindungi kita da...	', 'kegiatan-dengan-polisi-20200430121645.jpg	', 'BERTHA JAYA PUTRA	', 'sosialisai-dari-kepolisian	', '1629125665'),
(5, 'Ppkm Di Perpanjang Semua 	', 'semua siswa di harapakan belajar di rumah masing-masing dan pembelajaran di lakukan secara daring da...	', '-20200430121342.jpg	', 'BERTHA JAYA PUTRA	', 'ppkm-di-perpanjang-semua	', '1629125977'),
(6, 'Extrakulikuler Sementara Di Tiadakan	', 'ekstra kulikuler sementara di tidakan untuk menghindar menularnya virus corona dan semua guru juga h...	', 'mentoring-dengan-profesional-202004301217281.jpg	', 'BERTHA JAYA PUTRA	', 'extrakulikuler-sementara-di-tiadakan	', '1629126443');

-- --------------------------------------------------------

--
-- Table structure for table `db_siswa`
--

CREATE TABLE `db_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `created_at` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_siswa`
--

INSERT INTO `db_siswa` (`id`, `nis`, `nisn`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nama_ayah`, `nama_ibu`, `agama`, `created_at`) VALUES
(1, '749872472', '7498724722', 'Rahmat Hidaya Tulah	', 'LAKI-LAKI	', 'Kepahiang', '2021-07-27	', 'Paijo', 'Inem', 'Islam', '0000-00-00 00:00:00'),
(2, '749872472', '7498724722', 'Cristina Austin	', 'PEREMPUAN', 'Kepahiang', '2021-07-27	', 'Panino', 'Dira', 'Islam', '0000-00-00 00:00:00\r\n'),
(3, '12342323', '313432321', 'Diana Harianti	', 'PEREMPUAN', 'Kepahiang', '2021-07-22	', 'Pujianto', 'Hartini', 'Islam', '0000-00-00 00:00:00\r\n'),
(4, '12394994', '99393201', 'Sinta Gustina	', 'PEREMPUAN', 'Kepahiang', '2021-07-15	', 'Pujianto', 'Hartai', 'Islam', '0000-00-00 00:00:00\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `db_sosial_media`
--

CREATE TABLE `db_sosial_media` (
  `id` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `tik-tok` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_sosial_media`
--

INSERT INTO `db_sosial_media` (`id`, `email`, `facebook`, `instagram`, `twitter`, `tik-tok`) VALUES
(1, 'smknvkph@gmail.com	', 'https://web.facebook.com/', 'https://www.instagram.com/', 'https://twitter.com/', 'https://www.tiktok.com/');

-- --------------------------------------------------------

--
-- Table structure for table `db_visimisi`
--

CREATE TABLE `db_visimisi` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_visimisi`
--

INSERT INTO `db_visimisi` (`id`, `isi`, `jenis`) VALUES
(1, 'Berprestasi dilandasi Iman, Taqwa dan Berbudaya Lingkungan serta Berwawasan Global	', 'VISI'),
(2, 'Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa berkwalitas tinggi yang peduli dengan lingkungan hidup	', 'MISI'),
(3, 'Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif	', 'MISI'),
(4, 'Mewujudkan sarana prasarana reprensentatif dan up to date	', 'MISI'),
(5, 'Mewujudkan pengelolaan pendidikan yang professiona	', 'MISI'),
(6, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.	', 'MISI');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `struktur` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `struktur`) VALUES
(1, 'struktur_organisai.png');

-- --------------------------------------------------------

--
-- Table structure for table `userapp`
--

CREATE TABLE `userapp` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `roles` int(11) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userapp`
--

INSERT INTO `userapp` (`id`, `nama`, `email`, `alamat`, `foto`, `deskripsi`, `roles`, `password`) VALUES
(1, 'BERTHA JAYA PUTRA', 'bertha@gmail.com', 'Kepahiyang, bengkulu Indonesia', 'person_9.jpg', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '$2y$10$M6mF1.T582QBg3FWY/Mjku3CKpObnvsYN3dL25RAdzdCUt7RcQQxy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_guru`
--
ALTER TABLE `db_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_informasi`
--
ALTER TABLE `db_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_siswa`
--
ALTER TABLE `db_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_sosial_media`
--
ALTER TABLE `db_sosial_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_visimisi`
--
ALTER TABLE `db_visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userapp`
--
ALTER TABLE `userapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_guru`
--
ALTER TABLE `db_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `db_informasi`
--
ALTER TABLE `db_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `db_siswa`
--
ALTER TABLE `db_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `db_sosial_media`
--
ALTER TABLE `db_sosial_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_visimisi`
--
ALTER TABLE `db_visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userapp`
--
ALTER TABLE `userapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
