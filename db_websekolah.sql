/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.30-MariaDB : Database - db_websekolah
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_websekolah` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_websekolah`;

/*Table structure for table `tbl_agenda` */

DROP TABLE IF EXISTS `tbl_agenda`;

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`agenda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_agenda` */

insert  into `tbl_agenda`(`agenda_id`,`agenda_nama`,`agenda_tanggal`,`agenda_deskripsi`,`agenda_mulai`,`agenda_selesai`,`agenda_tempat`,`agenda_waktu`,`agenda_keterangan`,`agenda_author`) values (1,'Penyembelihan Hewan Kurban Idul Adha 2017','2017-01-22 13:18:01','Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. M-Sekolah tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.','2017-01-22','2017-01-22','M-Sekolah','08.00 - 11.00 WIB','Dihadiri oleh guru-guru, siswa dan pengurus OSIS','M Fikri Setiadi'),(2,'Peluncuran Website Resmi M-Sekolah','2017-01-22 13:26:33','Peluncuran website resmi  M-Sekolah, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.','2017-01-04','2017-01-04','M-Sekolah','07.30 - 12.00 WIB','-','M Fikri Setiadi'),(3,'Penerimaan Raport Semester Ganjil Tahun Ajaran 2017-2018','2017-01-22 13:29:49','Berakhirnya semester ganjil tahun pelajaran 2016-2017, ditandai dengan pembagian laporan hasil belajar.','2017-02-17','2017-02-17','M-Sekolah','07.30 - 12.00 WIB','Untuk kelas XI dan XII, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas X pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.','M Fikri Setiadi');

/*Table structure for table `tbl_album` */

DROP TABLE IF EXISTS `tbl_album`;

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`album_id`),
  KEY `album_pengguna_id` (`album_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_album` */

insert  into `tbl_album`(`album_id`,`album_nama`,`album_tanggal`,`album_pengguna_id`,`album_author`,`album_count`,`album_cover`) values (1,'Kedatangan Tamu Asing','2016-09-08 20:00:55',1,'M Fikri Setiadi',5,'202aa754590dfc1070c624bad294abbc.jpg'),(3,'Pemilu Osis 2016-2017','2017-01-21 08:58:16',1,'M Fikri Setiadi',3,'dc088a9fb62333012ff7a601828219d7.jpg'),(4,'Kegiatan Belajar Siswa','2017-01-24 08:31:13',1,'M Fikri Setiadi',7,'203bc0411a07ed0430d39bcc38ec2c56.jpg');

/*Table structure for table `tbl_files` */

DROP TABLE IF EXISTS `tbl_files`;

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_files` */

insert  into `tbl_files`(`file_id`,`file_judul`,`file_deskripsi`,`file_tanggal`,`file_oleh`,`file_download`,`file_data`) values (2,'Dasar-dasar CSS','Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS','2017-01-23 11:30:01','Drs. Joko',0,'ab9a183ff240deadbedaff78e639af2f.pdf'),(3,'14 Teknik Komunikasi Yang Paling Efektif','Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar','2017-01-23 22:26:06','Drs. Joko',0,'ab2cb34682bd94f30f2347523112ffb9.pdf'),(4,'Bagaimana Membentuk Pola Pikir yang Baru','Ebook ini membantu anda membentuk pola pikir baru.','2017-01-23 22:27:07','Drs. Joko',0,'30f588eb5c55324f8d18213f11651855.pdf'),(5,'7 Tips Penting mengatasi Kritik','7 Tips Penting mengatasi Kritik','2017-01-23 22:27:44','Drs. Joko',0,'329a62b25ad475a148e1546aa3db41de.docx'),(6,'8 Racun dalam kehidupan kita','8 Racun dalam kehidupan kita','2017-01-23 22:28:17','Drs. Joko',0,'8e38ad4948ba13758683dea443fbe6be.docx'),(7,'Jurnal Teknolgi Informasi','Jurnal Teknolgi Informasi','2017-01-25 10:18:53','Gunawan, S.Pd',0,'87ae0f009714ddfdd79e2977b2a64632.pdf'),(8,'Jurnal Teknolgi Informasi 2','Jurnal Teknolgi Informasi','2017-01-25 10:19:22','Gunawan, S.Pd',0,'c4e966ba2c6e142155082854dc5b3602.pdf'),(9,'Naskah Publikasi IT','Naskah Teknolgi Informasi','2017-01-25 10:21:04','Gunawan, S.Pd',0,'71380b3cf16a17a02382098c028ece9c.pdf'),(10,'Modul Teknologi Informasi','Modul Teknologi Informasi','2017-01-25 10:22:08','Gunawan, S.Pd',0,'029143a3980232ab2900d94df36dbb0c.pdf'),(11,'Modul Teknologi Informasi Part II','Modul Teknologi Informasi','2017-01-25 10:22:54','Gunawan, S.Pd',0,'ea8f3f732576083156e509657614f551.pdf'),(12,'Modul Teknologi Informasi Part III','Modul Teknologi Informasi','2017-01-25 10:23:21','Gunawan, S.Pd',0,'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf');

/*Table structure for table `tbl_galeri` */

DROP TABLE IF EXISTS `tbl_galeri`;

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`galeri_id`),
  KEY `galeri_album_id` (`galeri_album_id`),
  KEY `galeri_pengguna_id` (`galeri_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_galeri` */

insert  into `tbl_galeri`(`galeri_id`,`galeri_judul`,`galeri_tanggal`,`galeri_gambar`,`galeri_album_id`,`galeri_pengguna_id`,`galeri_author`) values (4,'Diskusi Pemilihan Ketua Osis','2017-01-21 21:04:53','9b10fa300633f62f105e9b52789fc8f3.jpg',3,1,'M Fikri Setiadi'),(5,'Panitia Pemilu Osis','2017-01-22 11:13:20','0ec0c2f9aae6501d7ed7930995d48b57.jpg',3,1,'M Fikri Setiadi'),(6,'Proses Pemilu Osis','2017-01-22 11:13:43','bfbe6cc1c8096f5f36c68e93da53c248.jpg',3,1,'M Fikri Setiadi'),(7,'Belajar dengan native speaker','2017-01-24 08:26:22','831e5ad43ccc3c851d50c128ff095541.jpg',1,1,'M Fikri Setiadi'),(8,'Diskusi dengan native speaker','2017-01-24 08:27:05','84afbf1d3ad45932f1d7ac47b8a00949.jpg',1,1,'M Fikri Setiadi'),(9,'Foto bareng native speaker','2017-01-24 08:27:28','a99ab060d5d5bf8c96f24fe385f7dd8b.jpg',1,1,'M Fikri Setiadi'),(10,'Foto bareng native speaker','2017-01-24 08:28:40','d70cedba6391b7b3c74b914efd82953f.jpg',1,1,'M Fikri Setiadi'),(11,'Foto bareng native speaker','2017-01-24 08:28:54','10de99f425b9961ce1e87c5e5575f8f4.jpg',1,1,'M Fikri Setiadi'),(12,'Belajar sambil bermain','2017-01-24 08:31:42','9df82241493b94d1e06b461129cf57b2.jpg',4,1,'M Fikri Setiadi'),(13,'Belajar sambil bermain','2017-01-24 08:31:55','5374415f11683ad6dd31572a7bbf8a7b.jpg',4,1,'M Fikri Setiadi'),(14,'Belajar komputer programming','2017-01-24 08:32:24','82b91bd35706b21c3ab04e205e358eb6.jpg',4,1,'M Fikri Setiadi'),(15,'Belajar komputer programming','2017-01-24 08:32:34','93048f2a103987bce8c8ec8d6912de06.jpg',4,1,'M Fikri Setiadi'),(16,'Belajar komputer programming','2017-01-24 08:32:44','41f46be181f2f8452c2041b5e79a05a5.jpg',4,1,'M Fikri Setiadi'),(17,'Belajar sambil bermain','2017-01-24 08:33:08','2858b0555c252690e293d29b922ba8e6.jpg',4,1,'M Fikri Setiadi'),(18,'Makan bersama','2017-01-24 08:33:24','90d67328e33a31d3f5eecd7dcb25b55d.jpg',4,1,'M Fikri Setiadi');

/*Table structure for table `tbl_guru` */

DROP TABLE IF EXISTS `tbl_guru`;

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL AUTO_INCREMENT,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nik` int(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_agama` varchar(20) DEFAULT NULL,
  `guru_pendidikan_terakhir` varchar(5) DEFAULT NULL,
  `guru_jurusan` varchar(20) DEFAULT NULL,
  `guru_golongan` varchar(10) DEFAULT NULL,
  `guru_status` varchar(20) DEFAULT NULL,
  `guru_kd_jabatan` int(3) DEFAULT NULL,
  `guru_kd_mata_pelajaran` varchar(20) DEFAULT NULL,
  `guru_hp` varchar(13) DEFAULT NULL,
  `guru_NPWP` varchar(20) DEFAULT NULL,
  `guru_NUPTK` varchar(20) DEFAULT NULL,
  `guru_alamat` text,
  `guru_keterangan` varchar(10) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`guru_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_guru` */

insert  into `tbl_guru`(`guru_id`,`guru_nip`,`guru_nik`,`guru_nama`,`guru_jenkel`,`guru_tmp_lahir`,`guru_tgl_lahir`,`guru_agama`,`guru_pendidikan_terakhir`,`guru_jurusan`,`guru_golongan`,`guru_status`,`guru_kd_jabatan`,`guru_kd_mata_pelajaran`,`guru_hp`,`guru_NPWP`,`guru_NUPTK`,`guru_alamat`,`guru_keterangan`,`guru_mapel`,`guru_photo`,`guru_tgl_input`) values (1,'927482658274982',0,'M Fikri Setiadi','L','Padang','2020-05-26','Islam','S1','Pendidikan Matematik','III/b','PNS',1,'2','098877277','090909','99898','                                                                                                            Bekasi                                                                                                            ','PNS','Teknik Komputer','f6bbe1e04e78e0d715e9830a605794aa.jpg','2017-01-26 14:49:43'),(2,'927482658274981',NULL,'Thomas Muller','P','Germany','25 September 1989',NULL,NULL,NULL,NULL,'GTK',2,'3',NULL,NULL,NULL,NULL,'GTK 1','TU',NULL,'2017-01-26 20:38:54'),(4,'-',NULL,'Kusta Otomo','L','Jakarta','25 September 1989',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Seni Budaya',NULL,'2017-01-26 20:42:08'),(5,'-',NULL,'Yuliani Ningsih','P','Padang','27 September 1993',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bahasa Indonesia',NULL,'2017-01-26 20:42:48'),(6,'927482658274993',NULL,'Ari Hidayat','L','Padang','25 September 1993',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Bahasa Inggris',NULL,'2017-01-26 20:43:46'),(7,'927482658274998',0,'Irma Cantika','P','Padang','','','','','','',1,'1','','','','                                    ','','Bahasa Inggris, IPA','4200d2514abf45755943526b74474c16.jpg','2017-01-26 20:45:11'),(8,'-',NULL,'Ririn Febriesta','P','Padang','27 September 1994',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Pend. Agama Islam',NULL,'2017-01-27 11:28:23'),(9,'196908081993071001',32213232,'Arsad Sutarya, S.Pd','L','Bekasi,','2020-06-03','Kepercayaan','S1','Manajemen Pendidikan','IV/a','PNS',1,'2','090989787','2312324324','34234324','                  qewew                  ','PNS',NULL,NULL,'2020-05-05 08:56:05'),(11,'927482658274981',0,'Thomas Muller','P','Germany','','','','','','GTK',1,'1','','','','                                    ','GTK 1',NULL,NULL,'2020-05-06 02:47:29'),(12,'196908081993071001',32213232,'Arsad Sutarya, S.Pd, MM.Pd','L','Bekasi,','2020-06-03','Kepercayaan','S1','Manajemen Pendidikan','IV/a','PNS',1,'2','090989787','2312324324','34234324','                                    qewew                                    ','PNS',NULL,'dc3ec171c94c49dcbccf2a7d0f307475.png','2020-05-06 02:48:07');

/*Table structure for table `tbl_inbox` */

DROP TABLE IF EXISTS `tbl_inbox`;

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_inbox` */

insert  into `tbl_inbox`(`inbox_id`,`inbox_nama`,`inbox_email`,`inbox_kontak`,`inbox_pesan`,`inbox_tanggal`,`inbox_status`) values (2,'M Fikri Setiadi','fikrifiver97@gmail.com','-','Ping !','2017-06-21 10:44:12',0),(3,'M Fikri Setiadi','fikrifiver97@gmail.com','-','Ini adalah pesan ','2017-06-21 10:45:57',0),(5,'M Fikri Setiadi','fikrifiver97@gmail.com','-','Ping !','2017-06-21 10:53:19',0),(7,'M Fikri Setiadi','fikrifiver97@gmail.com','-','Hi, there!','2017-07-01 14:28:08',0),(8,'M Fikri','fikrifiver97@gmail.com','084375684364','Hi There, Would you please help me about register?','2018-08-06 20:51:07',0),(9,'Tri WIbowo','bowo.rezpector5@gmail.com','09878778656','kapan pendfatran PPDB 2021?','2020-05-08 16:23:33',0);

/*Table structure for table `tbl_jabatan` */

DROP TABLE IF EXISTS `tbl_jabatan`;

CREATE TABLE `tbl_jabatan` (
  `kd_jabatan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan` */

insert  into `tbl_jabatan`(`kd_jabatan`,`nama_jabatan`) values (1,'Kepala Sekolah'),(2,'Wakil Bid. Kurikulum'),(3,'Wakil Bid. Kesiswaan'),(4,'Wakil Bid. Sarpras'),(5,'Guru'),(6,'Staff Tata Usaha');

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`kategori_id`,`kategori_nama`,`kategori_tanggal`) values (1,'Pendidikan','2016-09-06 12:49:04'),(2,'Politik','2016-09-06 12:50:01'),(3,'Sains','2016-09-06 12:59:39'),(5,'Penelitian','2016-09-06 13:19:26'),(6,'Prestasi','2016-09-07 09:51:09'),(13,'Olah Raga','2017-01-13 20:20:31');

/*Table structure for table `tbl_kelas` */

DROP TABLE IF EXISTS `tbl_kelas`;

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kelas` */

insert  into `tbl_kelas`(`kelas_id`,`kelas_nama`) values (1,'7.1'),(2,'7.2'),(3,'7.3'),(4,'7.4'),(5,'7.5'),(6,'8.1'),(7,'8.2'),(8,'8.2'),(9,'8.3'),(11,'8.4'),(12,'8.5'),(14,'8.6'),(17,'9.1'),(19,'9.2');

/*Table structure for table `tbl_kls7` */

DROP TABLE IF EXISTS `tbl_kls7`;

CREATE TABLE `tbl_kls7` (
  `kelas_id` int(10) NOT NULL AUTO_INCREMENT,
  `nis` int(20) NOT NULL,
  `kelas_tingkat` varchar(4) DEFAULT NULL,
  `tahun_pelajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `kelas_id` (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kls7` */

insert  into `tbl_kls7`(`kelas_id`,`nis`,`kelas_tingkat`,`tahun_pelajaran`) values (5,1323,'7.2','2019/2020'),(2,192007001,'7.1','2018/2020');

/*Table structure for table `tbl_kls8` */

DROP TABLE IF EXISTS `tbl_kls8`;

CREATE TABLE `tbl_kls8` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(20) NOT NULL,
  `kelas_tingkat` varchar(3) DEFAULT NULL,
  `tahun_pelajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `kelas_id` (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kls8` */

insert  into `tbl_kls8`(`kelas_id`,`nis`,`kelas_tingkat`,`tahun_pelajaran`) values (2,1323,'8.2','2019/2020'),(3,171807011,'8.1','2019/2020');

/*Table structure for table `tbl_kls9` */

DROP TABLE IF EXISTS `tbl_kls9`;

CREATE TABLE `tbl_kls9` (
  `kelas_id` int(10) NOT NULL AUTO_INCREMENT,
  `nis` int(20) NOT NULL,
  `kelas_tingkat` varchar(4) DEFAULT NULL,
  `tahun_pelajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`nis`),
  KEY `kelas_id` (`kelas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kls9` */

insert  into `tbl_kls9`(`kelas_id`,`nis`,`kelas_tingkat`,`tahun_pelajaran`) values (2,171807011,'9.2','2020/2021'),(1,192007001,'9.3','2020/2021');

/*Table structure for table `tbl_komentar` */

DROP TABLE IF EXISTS `tbl_komentar`;

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL AUTO_INCREMENT,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0',
  PRIMARY KEY (`komentar_id`),
  KEY `komentar_tulisan_id` (`komentar_tulisan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_komentar` */

insert  into `tbl_komentar`(`komentar_id`,`komentar_nama`,`komentar_email`,`komentar_isi`,`komentar_tanggal`,`komentar_status`,`komentar_tulisan_id`,`komentar_parent`) values (1,'M Fikri','fikrifiver97@gmail.com',' Nice Post.','2018-08-07 22:09:07','1',24,0),(2,'M Fikri Setiadi','fikrifiver97@gmail.com',' Awesome Post','2018-08-07 22:14:26','1',24,0),(3,'Joko','joko@gmail.com','Thank you.','2018-08-08 10:54:56','1',24,1),(4,'bowo','bowo.rezpector5@gmail.com',' Alhamdulillah','2020-05-08 08:31:29','1',26,0),(5,'admin','','mantap','2020-05-08 16:17:41','1',26,4);

/*Table structure for table `tbl_log_aktivitas` */

DROP TABLE IF EXISTS `tbl_log_aktivitas`;

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_pengguna_id` (`log_pengguna_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_log_aktivitas` */

/*Table structure for table `tbl_mata_pelajaran` */

DROP TABLE IF EXISTS `tbl_mata_pelajaran`;

CREATE TABLE `tbl_mata_pelajaran` (
  `kd_pelajaran` int(20) NOT NULL AUTO_INCREMENT,
  `mata_pelajaran` varchar(20) DEFAULT NULL,
  `kkm_pengetahuan` int(3) DEFAULT NULL,
  `kkm_keterampilan` int(3) DEFAULT NULL,
  PRIMARY KEY (`kd_pelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_mata_pelajaran` */

insert  into `tbl_mata_pelajaran`(`kd_pelajaran`,`mata_pelajaran`,`kkm_pengetahuan`,`kkm_keterampilan`) values (1,'Bahasa Indonesia',88,80),(2,'Matematika',80,70),(3,'Bahasa Inggris',70,70),(4,'IPA',70,70);

/*Table structure for table `tbl_pengguna` */

DROP TABLE IF EXISTS `tbl_pengguna`;

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pengguna` */

insert  into `tbl_pengguna`(`pengguna_id`,`pengguna_nama`,`pengguna_moto`,`pengguna_jenkel`,`pengguna_username`,`pengguna_password`,`pengguna_tentang`,`pengguna_email`,`pengguna_nohp`,`pengguna_facebook`,`pengguna_twitter`,`pengguna_linkdin`,`pengguna_google_plus`,`pengguna_status`,`pengguna_level`,`pengguna_register`,`pengguna_photo`) values (1,'M Fikri Setiadi','Just do it','L','admin','e10adc3949ba59abbe56e057f20f883e','I am a mountainner. to me mountainerring is a life','fikrifiver97@gmail.com','081277159401','facebook.com/m_fikri_setiadi','twitter.com/fiver_fiver','','',1,'1','2016-09-03 13:07:55','db5dec647062751f2fb236b9bc3f1c54.png'),(2,'Tri WIbowo',NULL,'L','user','202cb962ac59075b964b07152d234b70',NULL,'bowo.rezpector5@gmail.com','08978368199',NULL,NULL,NULL,NULL,1,'2','2020-04-04 13:35:32','7b89841569bd47aaa1708fe1ffee3137.jpg');

/*Table structure for table `tbl_pengumuman` */

DROP TABLE IF EXISTS `tbl_pengumuman`;

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`pengumuman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pengumuman` */

insert  into `tbl_pengumuman`(`pengumuman_id`,`pengumuman_judul`,`pengumuman_deskripsi`,`pengumuman_tanggal`,`pengumuman_author`) values (1,'Pengumuman Libur Semester Ganjil Tahun Ajaran 2016-2017','Libur semester ganjil tahun ajaran 2016-2017 dimulai dari tanggal 3 Maret 2017 sampai dengan tanggal 7 Maret 207.','2017-01-21 08:17:30','M Fikri Setiadi'),(2,'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2016-2017','Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2016-2017, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB.\r\nYang bertempat di M-Sekolah. Raport diambil oleh orang tua/wali kelas murid masing-masing','2017-01-21 08:16:20','M Fikri Setiadi'),(3,'Pengumuman Peresmian dan Launching Website Perdana M-Sekolah','Peresmian dan launching website resmi M-Sekolah akan diadakan pada hari 23 Desember 2016 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2016-2017','2017-01-22 14:16:16','M Fikri Setiadi'),(4,'Pengumuman Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2016-2017','Setelah libur semester ganjil tahun ajaran 2016-2017, proses belajar mengajar di semester genap tahun ajaran 2016-2017 mulai aktif kembali tanggal 2 Maret 2017.','2017-01-22 14:15:28','M Fikri Setiadi');

/*Table structure for table `tbl_pengunjung` */

DROP TABLE IF EXISTS `tbl_pengunjung`;

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pengunjung_id`)
) ENGINE=InnoDB AUTO_INCREMENT=956 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pengunjung` */

insert  into `tbl_pengunjung`(`pengunjung_id`,`pengunjung_tanggal`,`pengunjung_ip`,`pengunjung_perangkat`) values (930,'2018-08-09 15:04:59','::1','Chrome'),(931,'2020-03-31 13:58:53','::1','Firefox'),(932,'2020-04-02 10:33:44','127.0.0.1','Firefox'),(933,'2020-04-04 12:42:10','::1','Firefox'),(934,'2020-04-05 02:13:09','::1','Firefox'),(935,'2020-04-12 02:24:16','::1','Firefox'),(936,'2020-04-16 06:42:19','::1','Firefox'),(937,'2020-04-22 04:31:18','::1','Firefox'),(938,'2020-04-28 05:34:49','::1','Chrome'),(939,'2020-04-29 22:37:06','::1','Chrome'),(940,'2020-05-02 03:15:59','::1','Firefox'),(941,'2020-05-03 03:53:14','::1','Chrome'),(942,'2020-05-04 08:25:27','127.0.0.1','Firefox'),(943,'2020-05-04 09:49:11','::1','Firefox'),(944,'2020-05-05 03:57:45','::1','Firefox'),(945,'2020-05-05 07:26:29','192.168.43.1','Firefox'),(946,'2020-05-05 07:34:33','192.168.43.165','Firefox'),(947,'2020-05-06 02:38:25','::1','Firefox'),(948,'2020-05-06 06:50:28','127.0.0.1','Firefox'),(949,'2020-05-06 11:47:21','192.168.43.1','Firefox'),(950,'2020-05-07 03:46:51','::1','Firefox'),(951,'2020-05-08 06:11:35','::1','Firefox'),(952,'2020-05-08 08:36:48','192.168.43.1','Firefox'),(953,'2020-05-09 06:00:17','::1','Firefox'),(954,'2020-05-10 04:22:29','::1','Firefox'),(955,'2020-05-10 09:34:23','192.168.43.1','Firefox');

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL AUTO_INCREMENT,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_nisn` varchar(10) DEFAULT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_tempat` varbinary(40) DEFAULT NULL,
  `siswa_tanggal` date DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_agama` varchar(20) DEFAULT NULL,
  `siswa_kewarganegaraan` varchar(20) DEFAULT NULL,
  `siswa_anakke` int(2) DEFAULT NULL,
  `siswa_jml_saudara` int(2) DEFAULT NULL,
  `siswa_bahasa_sehari2` varchar(20) DEFAULT NULL,
  `siswa_tinggal_dengan` varchar(20) DEFAULT NULL,
  `siswa_kendaraan` varchar(20) DEFAULT NULL,
  `siswa_tinggi` int(3) DEFAULT NULL,
  `siswa_berat` int(3) DEFAULT NULL,
  `siswa_gol_dar` varchar(2) DEFAULT NULL,
  `siswa_tanggal_diterima` date DEFAULT NULL,
  `siswa_asal_sekolah` varchar(20) DEFAULT NULL,
  `siswa_nomer_ijasah` varchar(10) DEFAULT NULL,
  `siswa_nomerhp` varchar(13) DEFAULT NULL,
  `siswa_status` varchar(10) DEFAULT NULL,
  `siswa_alamat` text,
  `id_tahun_ajaran` int(11) DEFAULT NULL,
  `siswa_nama_ayah` varchar(30) DEFAULT NULL,
  `siswa_pendidikan_ayah` varchar(20) DEFAULT NULL,
  `siswa_pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `siswa_penghasilan_ayah` varchar(20) DEFAULT NULL,
  `siswa_nama_ibu` varchar(30) DEFAULT NULL,
  `siswa_pendidikan_ibu` varchar(20) DEFAULT NULL,
  `siswa_pekerjaan_ibu` varchar(20) DEFAULT NULL,
  `siswa_penghasilan_ibu` varchar(20) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`siswa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`siswa_id`,`siswa_nis`,`siswa_nisn`,`siswa_nama`,`siswa_tempat`,`siswa_tanggal`,`siswa_jenkel`,`siswa_agama`,`siswa_kewarganegaraan`,`siswa_anakke`,`siswa_jml_saudara`,`siswa_bahasa_sehari2`,`siswa_tinggal_dengan`,`siswa_kendaraan`,`siswa_tinggi`,`siswa_berat`,`siswa_gol_dar`,`siswa_tanggal_diterima`,`siswa_asal_sekolah`,`siswa_nomer_ijasah`,`siswa_nomerhp`,`siswa_status`,`siswa_alamat`,`id_tahun_ajaran`,`siswa_nama_ayah`,`siswa_pendidikan_ayah`,`siswa_pekerjaan_ayah`,`siswa_penghasilan_ayah`,`siswa_nama_ibu`,`siswa_pendidikan_ibu`,`siswa_pekerjaan_ibu`,`siswa_penghasilan_ibu`,`siswa_photo`) values (1,'192007001','909090878','Tri Wibowo','Bekasi,','2020-05-08','L','Islam','Indonesia',1,2,'Indonesia','Orang Tua','Motor',121,80,'O','2020-05-14','SDN JATIRANGGA III','DN-02 Ddod','0897836199','Aktif','vbcgf',1,'212','D3','121','1212','Asih Suwarni','Tidak Sekolah','121','121','6146042f59d82c3cc7202a35d56277e2.jpg'),(2,'1323','232323','Yuli Prihati','Bekasi,','2020-05-01','P','Islam','Indonesia',8,8,'8','Orang Tua','Motor',8,8,'O','2020-05-09','SDN JATIRANGGA III','DN-02 Ddod','0897836199','Aktif','888',1,'212','Tidak Sekolah','121','1212','Asih Suwarni','SD','121','121','99b883a3ecb7d52060076a2e200cdcf5.jpg'),(3,'161707205','004800466','MIA DEPITA','Bekasi,','2020-05-06','P','Islam','Indonesia',1,1,'Sunda','Orang Tua','Motor',123,89,'O','2020-05-12','SDN JATIRANGGON III','DN-02 Dd 0','090989787','Aktif','wewe',0,'qwewqe','Tidak Sekolah','Buruh','1.0000.0000','qwewq','Tidak Sekolah','232','232','082fb124de2f17e52322757d92908d2c.png'),(4,'122433','004800466','ADELLIA SAFITRI','Bekasi,','2020-05-04','P','Islam','Indonesia',1,1,'Sunda','Orang Tua','Motor',111,22,'O','2020-05-05','SDN JATIRANGGON III','DN-02 Dd 0','090989787','Aktif','JAtisampurna',1,'M. SAFEI','SMA/ Sederajat','Wiraswasta','1.0000.0000','RAMINAH','Tidak Sekolah','IRT','-','20e5deb7ae347536f07902dde77e0725.png'),(5,'171807001','004800466','AAN','Bekasi,','2020-04-29','L','Islam','Indonesia',1,1,'Sunda','Orang Tua','Motor',111,111,'AB','2020-05-27','SDN JATIRANGGON III','DN-02 Dd 0','090989787','Aktif','23232',2,'M. SAFEI','Tidak Sekolah','Buruh','1.0000.0000','RAMINAH','SMP','232','232','6b6a8078c9c61ea458898224c2b71faf.png'),(6,'171807011','005737356','AFIN FHATURRAHMAN','Bekasi,','2020-05-06','L','Islam','Indonesia',1,1,'Sunda','Orang Tua','Motor',173,111,'O','2020-05-27','SDN JATIRANGGON III','DN-02 Dd 0','090989787','Aktif','Jl. Sumur Binong Rt. 03/13 Kel. Jatirangga Kec. Jatisampurna Bekasi',1,'M. SAFEI','SD','Wiraswasta','1.0000.0000','RAMINAH','SD','IRT','IRT','59e3d9753bd72c70ee893ac7c2534d51.png');

/*Table structure for table `tbl_testimoni` */

DROP TABLE IF EXISTS `tbl_testimoni`;

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL AUTO_INCREMENT,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`testimoni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_testimoni` */

/*Table structure for table `tbl_thn_ajaran` */

DROP TABLE IF EXISTS `tbl_thn_ajaran`;

CREATE TABLE `tbl_thn_ajaran` (
  `id_tahun_ajaran` int(5) NOT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_thn_ajaran` */

insert  into `tbl_thn_ajaran`(`id_tahun_ajaran`,`tahun_ajaran`) values (0,'2021/2022'),(1,'2019/2020'),(2,'2020/2021');

/*Table structure for table `tbl_tulisan` */

DROP TABLE IF EXISTS `tbl_tulisan`;

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL AUTO_INCREMENT,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tulisan_id`),
  KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_tulisan` */

insert  into `tbl_tulisan`(`tulisan_id`,`tulisan_judul`,`tulisan_isi`,`tulisan_tanggal`,`tulisan_kategori_id`,`tulisan_kategori_nama`,`tulisan_views`,`tulisan_gambar`,`tulisan_pengguna_id`,`tulisan_author`,`tulisan_img_slider`,`tulisan_slug`) values (20,'Persiapan siswa menjelang ujian nasional','<p>Banyak metode bejalar yang dilakukan oleh siswa untuk persiapan menghadapi ujian nasional (UN). Biantaranya mengingat dengan metode Mind Map, ataupun bejalar diluar kelas (outdoor).&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n','2017-05-17 16:24:42',1,'Pendidikan',27,'0a927c6d34dc5560b72f053313f14638.jpg',1,'M Fikri Setiadi',0,'persiapan-siswa-menjelang-ujian-nasional'),(22,'Prestasi membangga dari siswa MSchool','<p>Prestasi dan penghargaan merupakan trigger (pemicu) semangat belajar siswa. Ada banyak prestasi yang telah diraih oleh siswa m-sekolah. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n','2017-05-17 16:38:21',6,'Prestasi',2,'a59aa487ab2e3b57b2fcf75063b67575.jpg',1,'M Fikri Setiadi',0,'prestasi-membangga-dari-siswa-mschool'),(23,'Pelaksanaan Ujian Nasional MSchool','<p>Pelaksanaan UN (Ujian Nasional) di sekolah M-Sekolah berlangsung tentram dan damai. Terlihat ketenangan terpancar diwajah siswa berprestasi.&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel&nbsp; Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n','2017-05-17 16:41:30',1,'Pendidikan',4,'12bfb1953df800c59835a2796f8c6619.jpg',1,'M Fikri Setiadi',0,'pelaksanaan-ujian-nasional-mschool'),(24,'Proses belajar mengajar MSchool','<p>Proses belajar mengajar di sekolah m-sekolah berlangsung menyenangkan. Didukung oleh instruktur yang fun dengan metode mengajar yang tidak biasa. Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel a Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel .</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n\r\n<p>Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel Ini adalah sampel artikel.</p>\r\n','2017-05-17 16:46:29',1,'Pendidikan',164,'ea114dc1ec5275560a5ef3238fd04722.jpg',1,'M Fikri Setiadi',0,'proses-belajar-mengajar-mschool'),(25,'iPhone 8 Baru Mengungkapkan Fitur Mengecewakan','<p>Apple CEO Tim Cook delivers the opening keynote address the 2017 Apple.</p>\r\n\r\n<p><br />\r\nSudah lama sekali sejak Apple mampu menyimpan kejutan nyata dari beledu digital dan mengungkapkan &#39;satu hal&#39; yang sebenarnya selama sebuah keynote. Fase desain dan prototyping yang panjang, ditambah dengan rantai pasokan yang diperluas, telah menghasilkan garis manufaktur yang bocor.<br />\r\n<br />\r\nTariklah permintaan yang tak terpuaskan dari si geekerati dan Anda tidak akan pernah bisa menyimpan rahasianya ... bahkan jika penonton akan berpura-pura bahwa segala sesuatu yang dikatakan Tim Cook adalah sebuah wahyu.<br />\r\n<br />\r\nSemuanya di tampilkan untuk portofolio iPhone baru, meskipun jika kita jujur ??tidak ada hal baru yang bisa dilihat. Ini hanya Tim Cook dan timnya yang membuat model tahun lalu &#39;sedikit lebih baik&#39; dan mengajukan konsumen proposisi yang sama seperti setiap produsen smartphone lainnya.<br />\r\n<br />\r\nMungkin aku berharap terlalu banyak dari Apple. Pengulangan Timey dari mimpi Silicon Valley tidak dibangun dengan risiko, mendorong amplop, atau bereksperimen dengan bentuk atau fungsinya. Bagaimana Tim Cook bisa mendorong inovasi ketika begitu banyak kekaisarannya dibangun di seputar kebutuhan akan penjualan siklis iPhone yang terjamin? Jika penjualan smartphone turun, maka yayasan Cupertino akan berada dalam bahaya.<br />\r\n<br />\r\nJawaban Apple untuk ini adalah iPhone 8. Sementara iPhone 7S dan iPhone 7S Plus menjaga harapan, iPhone 8 bisa bereksperimen dengan bentuk, harga, dan kekuatan. Ini adalah handset yang akan mendorong batas teknologi Apple dengan layar OLED yang cerah dan jelas di bawah kaca melengkung yang membentuk bagian luarnya. Inilah smartphone yang membawa kekuatan magis wireless charging ke ekosistem iOS dan akan menawarkan pengenalan wajah untuk keamanan.<br />\r\n<br />\r\nYang semua terdengar hebat tapi itu satu set poin peluru yang bisa diterapkan ke banyak handset Android terkemuka yang ada di pasaran saat ini. Bahkan dengan andalannya yang maju untuk tahun 2017, Apple melakukan sedikit lebih banyak daripada mengenalkan teknologi yang ada ke portofolio iOS.<br />\r\n<br />\r\nItu tidak terlihat seperti ini beberapa bulan yang lalu. Fitur yang diduga dikeluarkan oleh Apple dari iPhone 8 memamerkan beberapa pemikiran terbaru tentang perangkat mobile, termasuk pengisian daya nirkabel jarak jauh dan sensor biometrik tertanam di bawah layar kaca. Ini perlahan-lahan telah terbantahkan oleh industri rumahan dan desas-desus, sampai-sampai kita cukup tahu apa yang terjadi dari iPhone 8.<br />\r\n<br />\r\nTentu saja iPhone 8 (dan lebih dari kemungkinan iPhone 7S dan 7S Plus) akan mendapat keuntungan dari perubahan pada konstruksi interior. Akan ada pencantuman iOS 11 dan integrasi perangkat lunak yang ketat ke perangkat keras. Akan ada anggukan Apple untuk kesederhanaan di UI dan aplikasi pihak ketiga akan segera menghadirkan fitur lanjutan kepada pengguna rata-rata.<br />\r\n<br />\r\nIni bukan perubahan sepele, tapi yang menyoroti ini adalah menjelaskan bagaimana sosis dibuat. Mereka adalah rakit tweak untuk paket yang sama. Anda bisa menambahkan kancing diamante ke gaun Anda, mengganti lapisannya, dan mengeluarkan pinggulnya karena tahun-tahun yang lewat, tapi pakaiannya tetap sama seperti yang orang lihat berkali-kali. Itu cukup bagi bisnis Apple untuk terus melakukannya dengan baik dan membuat pemegang saham tetap bahagia, namun Anda tidak dapat terus kembali ke bidang yang sama dan berharap untuk tetap berada di puncak permainan smartphone. Sesuatu harus diberikan.<br />\r\n<br />\r\nPortofolio Apple 2017 membajak bidang yang sama persis dengan tahun-tahun sebelumnya. Tulang punggung penjualan akan terdiri dari iPhone 7S dan iPhone 7S Plus yang berulang-ulang saat Tim Cook kembali menanam benih di alur yang sama persis seperti model sebelumnya. IPhone 8 dapat diluncurkan tepat waktu, namun stok akan sulit didapat dan Apple akan, sekali lagi, tidak merilis angka penjualan. Ini akan menjadi hal baru yang menarik dan berkilau, tapi mari kita panggil apa adanya.</p>\r\n\r\n<p>Tim Cook akan menyilangkan jari-jarinya sehingga cukup banyak orang yang senang bisa &#39;membeli iPhone lain&#39; dan terus menggelontorkannya tanpa melihat persaingan. IPhone 8 adalah Apple yang bermain mengejar kemajuan teknologi kompetisi, dengan harapan tidak ada yang memperhatikan bahwa iPhone Baru Kaisar tidak semudah yang terlihat.</p>\r\n','2018-08-08 20:26:08',5,'Penelitian',5,'a0b99616241c9aded7f2a02661798d98.jpg',1,'M Fikri Setiadi',0,'iphone-8-baru-mengungkapkan-fitur-mengecewakan'),(26,'Perpanjangan Belajar Dari Rumah Keempat','<p>Assalamualaikum Wr. Wb.</p>\r\n\r\n<p>Berdasarkan Surat Edaran Wali Kota Bekasi Nomor 421/2858/disdik tentang Perpanjangan Belajar Dari Rumah (Home Learning) Keempat Pada Masa Darurat Corona Virus Disease (Covid-19) Di Kota Bekasi.</p>\r\n\r\n<p><br />\r\nKepada Yth seluruh Orang Tua/Wali Siswa kelas 7, 8 dan 9 SMP Negeri 1 Kota Bekasi, seiring dengan info dari Pemerintah Kota Bekasi, yang sudah kami informasikan kepada Bapak dan Ibu bahwa mulai tanggal 30 April s.d 13 Mei 2020 seluruh siswa belajar dari rumah.<br />\r\n<br />\r\nSelama tanggal 30 April s.d 13 Mei siswa belajar dari rumah dengan pantauan langsung orang tua, pantauan online oleh guru dan walikelas. Tidak ada kegiatan apapun di sekolah, jika putra-putrinya ada alasan pergi ke sekolah itu diluar tanggung jawab sekolah. Bila ada hal penting/khusus yang akan dikomunikasikan kepada guru atau walikelas, orang tua silahkan komunikasi lewat telepon atau datang ke sekolah (Sesuai Protokol Covid-19).</p>\r\n\r\n<p>Wassalamualaikum Wr. Wb.</p>\r\n','2020-05-08 08:28:49',1,'Pendidikan',16,'6ec9ffedc66143ad2b22db6780c280f3.png',1,'M Fikri Setiadi',0,'perpanjangan-belajar-dari-rumah-keempat'),(27,'Guru Memberikan Tugas Pembelajaran Online','<p>Guru - Guru di SMP Negeri 28Kota Bekasi mulai hari Senin tanggal 16 Maret 2020, memberikan tugas kepada siswa/i yang saat ini belajar melalui online di rumah, dengan memanfaatkan Laboratorium Komputer di sekolah.</p>\r\n','2020-05-08 08:34:21',1,'Pendidikan',2,'88ff82022b0ded0bf86aa4e58c66fed0.jpeg',1,'M Fikri Setiadi',0,'guru-memberikan-tugas-pembelajaran-online');

/*Table structure for table `tbl_walas` */

DROP TABLE IF EXISTS `tbl_walas`;

CREATE TABLE `tbl_walas` (
  `kd_walas` int(10) NOT NULL AUTO_INCREMENT,
  `id_guru` int(4) DEFAULT NULL,
  `kd_kelas` varchar(4) DEFAULT NULL,
  `tahun_ajaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kd_walas`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_walas` */

insert  into `tbl_walas`(`kd_walas`,`id_guru`,`kd_kelas`,`tahun_ajaran`) values (1,1,'7.2','2019/2021');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
