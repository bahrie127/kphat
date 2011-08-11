-- phpMyAdmin SQL Dump
-- version 3.3.7deb2build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2011 at 11:41 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `hat`
--

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `halaman`
--
ALTER TABLE `halaman`
  ADD CONSTRAINT `halaman_ibfk_1` FOREIGN KEY (`codegroup`) REFERENCES `group` (`codegroup`);
