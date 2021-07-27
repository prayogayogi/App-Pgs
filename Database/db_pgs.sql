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
  `jabatan` varchar(50) NOT NULL,
  `mengajar` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `deskripsi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_guru` (`id`, `nama`, `jabatan`, `mengajar`, `foto`, `deskripsi`) VALUES
(2,	'Mujiono S.Pd',	'KEPALA SEKOLAH',	'Matematika',	'person_3.jpg',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(3,	'Randi S.Kom',	'WAKIL KEPALA SEKOLAH',	'Pemprograman Mobile',	'person_2.jpg',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(4,	'Yogi Pra S.Kom',	'GURU',	'Pemprograman',	'person_9.jpg',	' Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(5,	'Anggi S.Pd',	'GURU',	'Matematika',	'person_8.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'),
(6,	'Sugini S.Pd',	'GURU',	'Bahasa Indonesia',	'person_5.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'),
(7,	'Aqila  S.Keb',	'GURU',	'Kesehatan',	'person_7.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'),
(8,	'Alan S.Kom',	'GURU',	'Desigen',	'person_6.jpg',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

DROP TABLE IF EXISTS `db_informasi`;
CREATE TABLE `db_informasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(225) NOT NULL,
  `ouner_post` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `db_informasi` (`id`, `judul`, `isi`, `foto`, `ouner_post`, `created_at`) VALUES
(5,	'Ujian Semester',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'event-5.jpg',	'Yogi Prayoga',	'1627185820'),
(6,	'Jadwal Sekolah Baru',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'course-5.jpg',	'Yogi Prayoga',	'1627185851'),
(8,	'Sekolah Libur Oke',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'course-6.jpg',	'Yogi Prayoga',	'1627186198'),
(9,	'Pendataran Pddp',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries',	'course-4.jpg',	'Yogi Prayoga',	'1627186224'),
(10,	'Pengumuman Kelulusan',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',	'course-3.jpg',	'Yogi Prayoga',	'1627193126'),
(11,	'Kegiatan Pramuka',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old',	'image_3.jpg',	'Yogi Prayoga',	'1627200273'),
(12,	'Kegiatan Ekstrakulikuler',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old',	'image_2.jpg',	'Randi Yosan',	'1627202546'),
(13,	'Hari Minggu Libur',	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',	'course-51.jpg',	'Yogi Prayoga',	'1627321228');

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
(1,	'749872472',	'7498724722',	'Rahmat Hidaya Tulaah',	'LAKI-LAKI',	'Mukomuko Sp5',	'2021-07-27',	'Paijo',	'Inem',	'Islam',	'0000-00-00 00:00:00'),
(2,	'749872472',	'7498724722',	'Cristina Austin',	'PEREMPUAN',	'Mukomuko Sp1',	'2021-07-27',	'Panino',	'Dira',	'Islam',	'0000-00-00 00:00:00'),
(4,	'12342323',	'313432321',	'Diana',	'PEREMPUAN',	'Mukomuko Sp3',	'2021-07-22',	'Pujianto',	'Hartini',	'Islam',	''),
(5,	'12394994',	'99393201',	'Sinta',	'PEREMPUAN',	'Mukomuko Sp3',	'2021-07-15',	'Pujianto',	'Hartai',	'Islam',	'');

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
(7,	'Mewujudkan Sekolah yang bersih,hijau dan meminimalis hasil sampah yang tidak bermanfaat',	'MISI'),
(8,	'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',	'MISI');

DROP TABLE IF EXISTS `struktur_organisasi`;
CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `struktur` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `struktur_organisasi` (`id`, `struktur`) VALUES
(8,	'Struktur.png');

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
(7,	'Yogi Prayoga',	'yogi@gmail.com',	'Kepahiyang, bengkulu Indonesia',	'person_9.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	1,	'$2y$10$blrDt/b9rpK6fTEujJTl6.7WwU09czAsKlUiY2pA3rD2Y4hWWtuJy'),
(8,	'Randi Yosan',	'randi@gmail.com',	'Desa Selagan jaya',	'person_4.jpg',	'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1200s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',	1,	'$2y$10$FwZ5HNxtpMhNKl5dRcdg2e0YIfE42XttZ42oHLNrlweuu8u9lX8QW');

-- 2021-07-26 19:06:50
