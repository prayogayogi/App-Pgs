<br />
<b>Warning</b>:  "continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"? in <b>F:\laragon\etc\apps\adminer\index.php</b> on line <b>1170</b><br />
-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `db_guru`;
CREATE TABLE `db_guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `mengajar` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `deskripsi` text,
  `password` varchar(225) NOT NULL,
  `created_at` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_guru` (`id`, `nama`, `email`, `jabatan`, `mengajar`, `foto`, `deskripsi`, `password`, `created_at`) VALUES
(2,	'Helmi JohanS.Pd',	'',	'KEPALA SEKOLAH',	'Matematika',	'person_3.jpg',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',	'$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy',	'1627628013'),
(3,	'AMELIA SARI',	'',	'WAKIL KEPALA SEKOLAH',	'Pemprograman Mobile',	'person_2.jpg',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',	'$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy',	'1627628012'),
(4,	'Yogi Pra S.Kom',	'yogik@gmail.com',	'GURU',	'Pemprograman',	'person_9.jpg',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book',	'$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy',	'1627628010'),
(5,	'Anggi S.Pd',	'',	'GURU',	'Matematika',	'person_8.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'',	'1627628021'),
(6,	'Sugini S.Pd',	'',	'GURU',	'Bahasa Indonesia',	'person_5.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'',	'1627628023'),
(7,	'Aqila  S.Keb',	'',	'GURU',	'Kesehatan',	'person_7.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'',	'1627628024'),
(8,	'Alan S.Kom',	'',	'GURU',	'Desigen Web Figma',	'person_1.jpg',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',	'',	'1627628025'),
(9,	'Prayoga S. Pd',	'',	'KARYAWAN SEKOLAH',	'Tata Usaha',	'person_31.jpg',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',	'',	'1627628026');

DROP TABLE IF EXISTS `db_informasi`;
CREATE TABLE `db_informasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `ouner_post` varchar(225) NOT NULL,
  `slug_judul` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_informasi` (`id`, `judul`, `isi`, `foto`, `ouner_post`, `slug_judul`, `created_at`) VALUES
(16,	'Sekolah Akan Masuk Bulan Depan',	'sekolah akan masuk bulan depan dan semua siswa atau guru di haruskan masuk tanpa terkecuali dan siswa di wajipkan membawa perlengkapan kebersihan',	'-20200430120422.jpeg',	'Yogi Prayoga',	'Sekolah-Akan-Masuk-Bulan-Depan',	'1629125382'),
(17,	'Ujian Semester Ganjil',	'bagi yang mengikuti ujian semester ganjil di harapkan melunasi pembayaran sampai akhir semester',	'mentoring-dengan-profesional-20200430121728.jpg',	'Yogi Prayoga',	'ujian-semester-ganjil',	'1629125499'),
(18,	'Wajip Mengunakan Master',	'semua siswa atau guru tanpa terkecuali di harapkan mengunakan masker untuk menghindarai penyebaran virus corona',	'lab-admistrasi-perkantoran-20200430115528.jpeg',	'Yogi Prayoga',	'wajip-mengunakan-master',	'1629125580'),
(19,	'Sosialisai Dari Kepolisian',	'pekan depan akan di adakan sosialisai tantang penting nya mengunakan helem untuk menlindungi kita dari kecelakaan dan sisialisai ini akan di adakan pada hari sabtu',	'kegiatan-dengan-polisi-20200430121645.jpg',	'Yogi Prayoga',	'sosialisai-dari-kepolisian',	'1629125665'),
(20,	'Ppkm Di Perpanjang Semua ',	'semua siswa di harapakan belajar di rumah masing-masing dan pembelajaran di lakukan secara daring dan semoga kita di beri kesehatan selalu',	'-20200430121342.jpg',	'Yogi Prayoga',	'ppkm-di-perpanjang-semua',	'1629125977'),
(21,	'Extrakulikuler Sementara Di Tiadakan',	'ekstra kulikuler sementara di tidakan untuk menghindar menularnya virus corona dan semua guru juga harus wfh',	'mentoring-dengan-profesional-202004301217281.jpg',	'Yogi Prayoga',	'extrakulikuler-sementara-di-tiadakan',	'1629126443');

DROP TABLE IF EXISTS `db_siswa`;
CREATE TABLE `db_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_siswa` (`id`, `nis`, `nisn`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nama_ayah`, `nama_ibu`, `agama`, `created_at`) VALUES
(1,	'749872472',	'7498724722',	'Rahmat Hidaya Tulah',	'LAKI-LAKI',	'Kepahiang',	'2021-07-27',	'Paijo',	'Inem',	'Islam',	'0000-00-00 00:00:00'),
(2,	'749872472',	'7498724722',	'Cristina Austin',	'PEREMPUAN',	'Kepahiang',	'2021-07-27',	'Panino',	'Dira',	'Islam',	'0000-00-00 00:00:00'),
(4,	'12342323',	'313432321',	'Diana Harianti',	'PEREMPUAN',	'Kepahiang',	'2021-07-22',	'Pujianto',	'Hartini',	'Islam',	''),
(5,	'12394994',	'99393201',	'Sinta Gustina',	'PEREMPUAN',	'Kepahiang',	'2021-07-15',	'Pujianto',	'Hartai',	'Islam',	'');

DROP TABLE IF EXISTS `db_sosial_media`;
CREATE TABLE `db_sosial_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) DEFAULT NULL,
  `facebook` varchar(225) DEFAULT NULL,
  `instagram` varchar(225) DEFAULT NULL,
  `twitter` varchar(225) DEFAULT NULL,
  `tik-tok` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_sosial_media` (`id`, `email`, `facebook`, `instagram`, `twitter`, `tik-tok`) VALUES
(1,	'smknvkph@gmail.com',	'https://web.facebook.com/',	'https://www.instagram.com/',	'https://twitter.com/',	'https://www.tiktok.com/');

DROP TABLE IF EXISTS `db_visimisi`;
CREATE TABLE `db_visimisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_visimisi` (`id`, `isi`, `jenis`) VALUES
(1,	'Berprestasi dilandasi Iman, Taqwa dan Berbudaya Lingkungan serta Berwawasan Global',	'VISI'),
(2,	'Mewujudkan pendidikan untuk menghasilkan prestasi dan lulusa berkwalitas tinggi yang peduli dengan lingkungan hidup',	'MISI'),
(3,	'Mewujudkan sumber daya manusia yang beriman, produktif, kreatif, inofatif dan efektif',	'MISI'),
(5,	'Mewujudkan sarana prasarana reprensentatif dan up to date',	'MISI'),
(6,	'Mewujudkan pengelolaan pendidikan yang professiona',	'MISI'),
(8,	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',	'MISI');

DROP TABLE IF EXISTS `struktur_organisasi`;
CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `struktur` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `struktur_organisasi` (`id`, `struktur`) VALUES
(10,	'struktur_organisai.png');

DROP TABLE IF EXISTS `userapp`;
CREATE TABLE `userapp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `roles` int(11) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `userapp` (`id`, `nama`, `email`, `alamat`, `foto`, `deskripsi`, `roles`, `password`) VALUES
(7,	'Yogi Prayoga',	'yogi@gmail.com',	'Kepahiyang, bengkulu Indonesia',	'person_9.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	1,	'$2y$10$M6mF1.T582QBg3FWY/Mjku3CKpObnvsYN3dL25RAdzdCUt7RcQQxy');

-- 2021-08-16 16:27:44
