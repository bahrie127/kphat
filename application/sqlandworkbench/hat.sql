-- phpMyAdmin SQL Dump
-- version 3.3.7deb2build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2011 at 09:38 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `codeadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  PRIMARY KEY (`codeadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`codeadmin`, `nama`, `username`, `password`, `email`, `telepon`) VALUES
(1, 'Samsul KHairudin', 'admin@admin.com', 'password', 'Sahrul@s.com', '329847238'),
(21, 'Bahrie', 'bah', 'c56efb94d3943fc77fef3eb949ab540d', 'bah@bah.bah', '085640899224'),
(22, 'Suryono', 'sur', 'b6f9a184ace32b096213c3f7f08e25bb', 'suya@na..a', '32432534'),
(23, 'fendi', 'fendi', 'fendi', 'fendithuk@gmail.com', '345345435'),
(24, 'fendithuk', 'fendithuk', '202cb962ac59075b964b07152d234b70', 'fendithuk@gmail.com', '234325325');

-- --------------------------------------------------------

--
-- Table structure for table `batalpembayaran`
--

CREATE TABLE IF NOT EXISTS `batalpembayaran` (
  `codebatalpembayaran` varchar(40) NOT NULL,
  `codepembayaran` varchar(45) DEFAULT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `codeadmin` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`codebatalpembayaran`),
  KEY `fk_batalpembayaran_tagihan` (`codepembayaran`),
  KEY `fk_batalpembayaran_admin` (`codeadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batalpembayaran`
--

INSERT INTO `batalpembayaran` (`codebatalpembayaran`, `codepembayaran`, `tanggal`, `codeadmin`, `jumlah`) VALUES
('3Eu012UC', 'BcXL6kaS', '2011-08-17', NULL, 150000),
('99DJMEGc', 'UUeYvMxf', '2011-08-11', NULL, 150000),
('IIuC2dHD', '55606hC9', '2011-08-17', NULL, 150000),
('jxCoWsvU', 'BcXL6kaS', '2011-08-17', NULL, 200000),
('SnVTCQuo', 'BcXL6kaS', '2011-08-11', NULL, 200000),
('XcvgVRiA', '55606hC9', '2011-08-17', NULL, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('028f708c86b9d01ec17cf2eb40369cbe', '127.0.0.1', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.24 (', 1313548683, 'a:5:{s:20:"SESS_LOGIN_STATEMENT";s:13:"Akses Ditolak";s:15:"SESS_ADMIN_CODE";s:2:"21";s:9:"SESS_NAME";s:6:"Bahrie";s:10:"SESS_EMAIL";s:11:"bah@bah.bah";s:5:"ADMIN";s:3:"bah";}'),
('10d42a5ee60281691763de9993249556', '0.0.0.0', 'Mozilla/5.0 (X11; Linux i686; rv:5.0) Gecko/201001', 1313539270, 'a:5:{s:20:"SESS_LOGIN_STATEMENT";s:13:"Akses Ditolak";s:15:"SESS_ADMIN_CODE";s:2:"21";s:9:"SESS_NAME";s:6:"Bahrie";s:10:"SESS_EMAIL";s:11:"bah@bah.bah";s:5:"ADMIN";s:3:"bah";}'),
('7a007e74dd38c0d4374dba0a30cc8045', '0.0.0.0', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.24 (', 1313538104, 'a:5:{s:20:"SESS_LOGIN_STATEMENT";s:13:"Akses Ditolak";s:15:"SESS_ADMIN_CODE";s:2:"21";s:9:"SESS_NAME";s:6:"Bahrie";s:10:"SESS_EMAIL";s:11:"bah@bah.bah";s:5:"ADMIN";s:3:"bah";}');

-- --------------------------------------------------------

--
-- Table structure for table `detailbatalpembayaran`
--

CREATE TABLE IF NOT EXISTS `detailbatalpembayaran` (
  `codedetailbatalpembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `codebatalpembayaran` varchar(40) NOT NULL,
  `codejadwalevent` varchar(45) NOT NULL,
  PRIMARY KEY (`codedetailbatalpembayaran`),
  KEY `rk_1` (`codebatalpembayaran`),
  KEY `fk_2` (`codejadwalevent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `detailbatalpembayaran`
--

INSERT INTO `detailbatalpembayaran` (`codedetailbatalpembayaran`, `codebatalpembayaran`, `codejadwalevent`) VALUES
(4, '99DJMEGc', 'HK29082011'),
(5, 'SnVTCQuo', 'MR21082011'),
(6, 'jxCoWsvU', 'MR21082011'),
(7, '3Eu012UC', 'HK29082011'),
(8, 'IIuC2dHD', 'HK29082011'),
(9, 'XcvgVRiA', 'MR21082011');

-- --------------------------------------------------------

--
-- Table structure for table `detailtagihan`
--

CREATE TABLE IF NOT EXISTS `detailtagihan` (
  `codedetailpembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `codepembayaran` varchar(45) DEFAULT NULL,
  `codejadwalevent` varchar(40) DEFAULT NULL,
  `status` enum('ikut','batal') NOT NULL,
  PRIMARY KEY (`codedetailpembayaran`),
  KEY `fk_detailpembayaran_pembayaran` (`codepembayaran`),
  KEY `fk_detailpembayaran_jadwalevent` (`codejadwalevent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `detailtagihan`
--

INSERT INTO `detailtagihan` (`codedetailpembayaran`, `codepembayaran`, `codejadwalevent`, `status`) VALUES
(27, 'UUeYvMxf', 'HK29082011', 'ikut'),
(28, 'BcXL6kaS', 'HK29082011', 'batal'),
(29, 'BcXL6kaS', 'MR21082011', 'batal'),
(30, '55606hC9', 'HK29082011', 'batal'),
(31, '55606hC9', 'MR21082011', 'batal');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `codeivent` varchar(10) NOT NULL,
  `namaevent` varchar(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `materi` text,
  `praktek` text,
  PRIMARY KEY (`codeivent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel untuk event';

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`codeivent`, `namaevent`, `gambar`, `materi`, `praktek`) VALUES
('ab', 'kdsa', 'IMG_0104.jpg', '<p>ldka</p>', '<p>dsfkd</p>'),
('HJ', 'Hack Jaringan', 'sending_flowers_to_south_africa.jpg', '<p>&nbsp;</p>\n<h3>\n<ul>\n<li>Materi pertama</li>\n</ul>\n<ul>\n<li>Materi Kedua</li>\n</ul>\n<ul>\n<li>Materi Ketiga&nbsp;</li>\n</ul>\n<ul>\n<li>Maetri empat</li>\n</ul>\n<ul>\n<li>dan seterusnya</li>\n</ul>\n</h3>\n<p>&nbsp;</p>', '<h3>\n<ul>\n<li>praktek satu belas</li>\n<li>praktek dua belas</li>\n<li>praktek tiga belas</li>\n<li>praktek empat belas</li>\n<li>dan seterusnya</li>\n</ul>\n</h3>'),
('MR2', 'Marah Merah', 'plane_tickets_to_south_africa.jpg', '<p>\n<h3>\n<ul>\n<li>mawar satu&nbsp;</li>\n<li>mawar dua</li>\n<li>mawar tiga</li>\n</ul>\n</h3>\n</p>', '<p>\n<h3>\n<ul>\n<li>praktekum mawar satu</li>\n</ul>\n<ul>\n<li>p mawar 2</li>\n</ul>\n<ul>\n<li>p mawar tiga</li>\n</ul>\n</h3>\n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `codegroup` int(11) NOT NULL AUTO_INCREMENT,
  `namagroup` varchar(40) NOT NULL,
  PRIMARY KEY (`codegroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`codegroup`, `namagroup`) VALUES
(1, 'faq'),
(2, 'sidebar');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE IF NOT EXISTS `halaman` (
  `codehalaman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(45) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `codeadmin` int(11) NOT NULL,
  `codegroup` int(11) NOT NULL,
  PRIMARY KEY (`codehalaman`),
  KEY `fk_halaman_admin` (`codeadmin`),
  KEY `codegroup` (`codegroup`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`codehalaman`, `judul`, `isi`, `tanggal`, `codeadmin`, `codegroup`) VALUES
(2, 'What is HAT TRAINING', '<p><span style="color: #666666; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">X-code Hat Training adalah Training hacking dan pengamanannya yang berbasis white hat dengan pelatihan yang lebih difokuskan pada praktek.</p>\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">Dengan X-code Hat Training, peserta langsung mencoba sendiri melakukan penetrasi ke server kami dari Windows dan linux dengan celah aplikasi dan sebagainya dengan bimbingan pelatihan.</p>\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">Bagi pemula komputer disarankan ikut Pra training agar dapat memahami hacking training dengan lebih baik.</p>\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">Ethical Hacker atau hacker beretika menggunakan standard Ethical X-code.</p>\n</span></p>', '2011-08-11', 0, 1),
(3, 'How to apply', '<p><span style="color: #666666; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><a style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #b60202; text-decoration: none; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" href="http://localhost/kphat/index.php/event">Pilih jenis training yang ingin diikuti</a></p>\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">Booking tempat dan daftar training</p>\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><a style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #b60202; text-decoration: none; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;" href="http://localhost/kphat/index.php/faq#bayar">Bayar training via transfer atau datang ke T''Lab</a></p>\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">Datang ke training pada hari H</p>\n<br /><br />\n<p class="big" style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; color: #333333; text-shadow: #bbbbbb 1px 1px 2px; font-family: Georgia, ''Times New Roman'', Times, serif; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;"><strong style="outline-width: 0px; outline-style: initial; outline-color: initial; font-size: 18px; vertical-align: baseline; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: transparent; background-position: initial initial; background-repeat: initial initial; padding: 0px; margin: 0px; border: 0px initial initial;">Catatan:</strong>&nbsp;Berhubung kuota peserta yang terbatas untuk setiap event. Maka peserta yang membayar terlebih dahulu yang akan mengikuti event pada tanggal tersebut, Yang sudah membayar tapi kuota telah penuh, maka akan dialihkan pada event yang sama di bulan depan.</p>\n</span></p>', '2011-08-11', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwalevent`
--

CREATE TABLE IF NOT EXISTS `jadwalevent` (
  `codejadwalevent` varchar(40) NOT NULL,
  `codeevent` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(60) NOT NULL,
  `codepemateri` varchar(10) NOT NULL,
  `codetempat` varchar(10) NOT NULL,
  `harga` mediumtext NOT NULL,
  PRIMARY KEY (`codejadwalevent`),
  KEY `fk_jadwalevent_event` (`codeevent`),
  KEY `fk_jadwalevent_pemateri` (`codepemateri`),
  KEY `fk_jadwalevent_tempat` (`codetempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel acara ambil id dari event';

--
-- Dumping data for table `jadwalevent`
--

INSERT INTO `jadwalevent` (`codejadwalevent`, `codeevent`, `tanggal`, `waktu`, `codepemateri`, `codetempat`, `harga`) VALUES
('HK29082011', 'ab', '2011-08-29', '10.00', 'code', '123', '150000'),
('HW21082011', 'HJ', '2011-08-21', '10.00 WIB', 'HK5', 'dsf1``', '200000'),
('MR21082011', 'MR2', '2011-08-21', '10.00 WIB', 'ffffff', 'sdf', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE IF NOT EXISTS `meta` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `user_id`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE IF NOT EXISTS `pemasukan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeuser` varchar(45) NOT NULL,
  `nilaimasuk` bigint(20) NOT NULL,
  `tanggalmasuk` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `codeuser`, `nilaimasuk`, `tanggalmasuk`) VALUES
(1, '18733257', 350000, '2011-08-17'),
(2, '34970887', 50000, '2011-08-17'),
(3, '34970887', 300000, '2011-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `pemateri`
--

CREATE TABLE IF NOT EXISTS `pemateri` (
  `codepemateri` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`codepemateri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemateri`
--

INSERT INTO `pemateri` (`codepemateri`, `nama`, `telepon`, `email`) VALUES
('code', 'bahri', '085640899224', 'ba@ba.com'),
('ffffff', 'lie soul yien', '088888231', 'icuk@mail.com'),
('HK3', 'sunarjono', '111111000001', 'MAS@Hack.Ker'),
('HK5', 'candra', '23432', 'akld@yahoo.co');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `codependaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `codeuser` int(11) NOT NULL,
  `codejadwalevent` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`codependaftaran`),
  KEY `fk_pendaftaran_jadwalevent` (`codejadwalevent`),
  KEY `fk_pendaftaran_user` (`codeuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabel untuk pendaftaran, gabungan antara user dan dajwal eve' AUTO_INCREMENT=52 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`codependaftaran`, `codeuser`, `codejadwalevent`, `tanggal`) VALUES
(45, 75769213, 'HK29082011', '2011-08-09'),
(46, 92210863, 'HK29082011', '2011-08-10'),
(47, 91162767, 'HK29082011', '2011-08-11'),
(48, 18733257, 'HK29082011', '2011-08-11'),
(49, 18733257, 'MR21082011', '2011-08-11'),
(50, 34970887, 'HK29082011', '2011-08-12'),
(51, 34970887, 'MR21082011', '2011-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE IF NOT EXISTS `pengeluaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codeuser` varchar(45) NOT NULL,
  `nilaikeluar` bigint(20) NOT NULL,
  `tanggalkeluar` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `codeuser`, `nilaikeluar`, `tanggalkeluar`) VALUES
(1, '18733257', 200000, '2011-08-17'),
(2, '18733257', 150000, '2011-08-17'),
(3, '34970887', 150000, '2011-08-17'),
(4, '34970887', 200000, '2011-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE IF NOT EXISTS `sertifikat` (
  `codesertifikat` int(11) NOT NULL AUTO_INCREMENT,
  `nosertifikat` varchar(45) NOT NULL,
  `codeuser` int(11) NOT NULL,
  `codejadwalevent` varchar(45) NOT NULL,
  PRIMARY KEY (`codesertifikat`),
  KEY `fk_sertifikat_user` (`codeuser`),
  KEY `codejadwalevent` (`codejadwalevent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`codesertifikat`, `nosertifikat`, `codeuser`, `codejadwalevent`) VALUES
(11, '23432', 91162767, 'MR21082011'),
(12, '3453798', 18733257, 'MR21082011');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE IF NOT EXISTS `tagihan` (
  `codepembayaran` varchar(40) NOT NULL,
  `codeuser` int(11) NOT NULL,
  `jumlahharga` mediumtext NOT NULL,
  `bayar` bigint(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('bayar','belum','batal','dp') DEFAULT NULL,
  `codeadmin` int(11) DEFAULT NULL,
  PRIMARY KEY (`codepembayaran`),
  KEY `fk_pembayaran_user` (`codeuser`),
  KEY `fk_tagihan_admin` (`codeadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`codepembayaran`, `codeuser`, `jumlahharga`, `bayar`, `tanggal`, `status`, `codeadmin`) VALUES
('55606hC9', 34970887, '350000', 350000, '2011-08-17', 'batal', NULL),
('BcXL6kaS', 18733257, '350000', 350000, '2011-08-17', 'batal', NULL),
('UUeYvMxf', 91162767, '150000', 0, '2011-08-11', 'belum', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
  `codetempat` varchar(10) NOT NULL,
  `namatempat` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `linkpeta` text NOT NULL,
  PRIMARY KEY (`codetempat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`codetempat`, `namatempat`, `alamat`, `telepon`, `linkpeta`) VALUES
('123', 'Sandika', 'jalan berbah', '09999999', '7777777777777777'),
('dsad', 'UC UGM', 'UGM', '08549388282', '9999999999999'),
('dsf1``', 'Widyatama', 'jalan Adisutjipto', '099884838384', 'at55555555555555'),
('sdf', 'Jogjatronik', 'jalan brigjen', '089429129923', '232222222222222222222');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `codeuser` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL,
  `instansi` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL COMMENT 'tabel untuk informasi user',
  PRIMARY KEY (`codeuser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tabel user';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`codeuser`, `nama`, `alamat`, `jeniskelamin`, `telepon`, `email`, `tempatlahir`, `tanggallahir`, `pekerjaan`, `instansi`, `password`) VALUES
(18733257, 'Cinta Bella', 'Jakarta Selatan', 'perempuan', '094832943', 'Cintia@bella.com', 'Jakarta', '1974-05-07', 'Mahasiswi', 'PT Suka Jaya', NULL),
(34970887, 'Rahmat', 'Jogja', 'laki-laki', '03294329', 'saipul_bahrie@yahoo.co.id', 'Solo', '1983-07-09', 'Mahasiswa', 'PT Merpati putih', NULL),
(75769213, 'Saiful', 'Jepara', 'laki-laki', '094329839', 'bahrie172@gmail.com', 'Jepara`', '1990-01-27', 'Mahasiswa', 'STTA', NULL),
(91162767, 'Ipul', 'Kudus', 'laki-laki', '3094329483', 'bahri@gmail.com', 'Jepara', '1962-06-09', 'Programmer', 'PT Merpati putih', NULL),
(92210863, 'jack', 'yogyakarta', 'laki-laki', '080989999', 'jack_bareno@gmail.com', 'Bandung', '1985-07-18', 'Administrator', 'pemerintahan', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batalpembayaran`
--
ALTER TABLE `batalpembayaran`
  ADD CONSTRAINT `fk_batalpembayaran_admin` FOREIGN KEY (`codeadmin`) REFERENCES `admin` (`codeadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_batalpembayaran_tagihan` FOREIGN KEY (`codepembayaran`) REFERENCES `tagihan` (`codepembayaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detailbatalpembayaran`
--
ALTER TABLE `detailbatalpembayaran`
  ADD CONSTRAINT `detailbatalpembayaran_ibfk_2` FOREIGN KEY (`codejadwalevent`) REFERENCES `jadwalevent` (`codejadwalevent`),
  ADD CONSTRAINT `detailbatalpembayaran_ibfk_3` FOREIGN KEY (`codebatalpembayaran`) REFERENCES `batalpembayaran` (`codebatalpembayaran`);

--
-- Constraints for table `detailtagihan`
--
ALTER TABLE `detailtagihan`
  ADD CONSTRAINT `fk_detailpembayaran_jadwalevent` FOREIGN KEY (`codejadwalevent`) REFERENCES `jadwalevent` (`codejadwalevent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detailpembayaran_pembayaran` FOREIGN KEY (`codepembayaran`) REFERENCES `tagihan` (`codepembayaran`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `halaman`
--
ALTER TABLE `halaman`
  ADD CONSTRAINT `halaman_ibfk_1` FOREIGN KEY (`codegroup`) REFERENCES `group` (`codegroup`);

--
-- Constraints for table `jadwalevent`
--
ALTER TABLE `jadwalevent`
  ADD CONSTRAINT `fk_jadwalevent_event` FOREIGN KEY (`codeevent`) REFERENCES `event` (`codeivent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jadwalevent_pemateri` FOREIGN KEY (`codepemateri`) REFERENCES `pemateri` (`codepemateri`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jadwalevent_tempat` FOREIGN KEY (`codetempat`) REFERENCES `tempat` (`codetempat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `fk_pendaftaran_jadwalevent` FOREIGN KEY (`codejadwalevent`) REFERENCES `jadwalevent` (`codejadwalevent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pendaftaran_user` FOREIGN KEY (`codeuser`) REFERENCES `user` (`codeuser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `fk_sertifikat_user` FOREIGN KEY (`codeuser`) REFERENCES `user` (`codeuser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`codejadwalevent`) REFERENCES `jadwalevent` (`codejadwalevent`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `fk_pembayaran_user` FOREIGN KEY (`codeuser`) REFERENCES `user` (`codeuser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tagihan_admin` FOREIGN KEY (`codeadmin`) REFERENCES `admin` (`codeadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION;
