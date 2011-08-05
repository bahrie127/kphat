SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `hat` DEFAULT CHARACTER SET latin1 ;
USE `hat` ;

-- -----------------------------------------------------
-- Table `hat`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`user` (
  `codeuser` INT NOT NULL AUTO_INCREMENT ,
  `nama` VARCHAR(45) NOT NULL ,
  `alamat` TEXT NOT NULL ,
  `jeniskelamin` ENUM('laki-laki','perempuan') NOT NULL ,
  `telepon` VARCHAR(15) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  `tempatlahir` VARCHAR(50) NOT NULL ,
  `tanggallahir` DATE NOT NULL ,
  `pekerjaan` VARCHAR(45) NULL ,
  `instansi` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NOT NULL COMMENT 'tabel untuk informasi user' ,
  PRIMARY KEY (`codeuser`) )
ENGINE = InnoDB, 
COMMENT = 'tabel user' ;


-- -----------------------------------------------------
-- Table `hat`.`event`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`event` (
  `codeivent` VARCHAR(10) NOT NULL ,
  `namaevent` VARCHAR(100) NOT NULL ,
  `gambar` VARCHAR(200) NOT NULL ,
  `materi` TEXT NULL ,
  `praktek` TEXT NULL ,
  PRIMARY KEY (`codeivent`) )
ENGINE = InnoDB, 
COMMENT = 'tabel untuk event' ;


-- -----------------------------------------------------
-- Table `hat`.`pemateri`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`pemateri` (
  `codepemateri` VARCHAR(10) NOT NULL ,
  `nama` VARCHAR(100) NOT NULL ,
  `telepon` VARCHAR(15) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`codepemateri`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`tempat`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`tempat` (
  `codetempat` VARCHAR(10) NOT NULL ,
  `namatempat` VARCHAR(50) NOT NULL ,
  `alamat` TEXT NOT NULL ,
  `telepon` VARCHAR(45) NULL ,
  `linkpeta` TEXT NOT NULL ,
  PRIMARY KEY (`codetempat`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`jadwalevent`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`jadwalevent` (
  `codejadwalevent` VARCHAR(40) NOT NULL ,
  `codeevent` VARCHAR(10) NOT NULL ,
  `tanggal` DATE NOT NULL ,
  `waktu` VARCHAR(60) NOT NULL ,
  `codepemateri` VARCHAR(10) NOT NULL ,
  `codetempat` VARCHAR(10) NOT NULL ,
  `harga` MEDIUMTEXT  NOT NULL ,
  PRIMARY KEY (`codejadwalevent`) ,
  INDEX `fk_jadwalevent_event` (`codeevent` ASC) ,
  INDEX `fk_jadwalevent_pemateri` (`codepemateri` ASC) ,
  INDEX `fk_jadwalevent_tempat` (`codetempat` ASC) ,
  CONSTRAINT `fk_jadwalevent_event`
    FOREIGN KEY (`codeevent` )
    REFERENCES `hat`.`event` (`codeivent` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jadwalevent_pemateri`
    FOREIGN KEY (`codepemateri` )
    REFERENCES `hat`.`pemateri` (`codepemateri` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jadwalevent_tempat`
    FOREIGN KEY (`codetempat` )
    REFERENCES `hat`.`tempat` (`codetempat` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'tabel acara ambil id dari event' ;


-- -----------------------------------------------------
-- Table `hat`.`pendaftaran`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`pendaftaran` (
  `codependaftaran` INT NOT NULL AUTO_INCREMENT ,
  `codeuser` INT NOT NULL ,
  `codejadwalevent` VARCHAR(40) NOT NULL ,
  `tanggal` DATE NOT NULL ,
  PRIMARY KEY (`codependaftaran`) ,
  INDEX `fk_pendaftaran_jadwalevent` (`codejadwalevent` ASC) ,
  INDEX `fk_pendaftaran_user` (`codeuser` ASC) ,
  CONSTRAINT `fk_pendaftaran_jadwalevent`
    FOREIGN KEY (`codejadwalevent` )
    REFERENCES `hat`.`jadwalevent` (`codejadwalevent` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pendaftaran_user`
    FOREIGN KEY (`codeuser` )
    REFERENCES `hat`.`user` (`codeuser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'tabel untuk pendaftaran, gabungan antara user dan dajwal eve' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `hat`.`admin`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`admin` (
  `codeadmin` INT NOT NULL ,
  `nama` VARCHAR(100) NOT NULL ,
  `username` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `telepon` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`codeadmin`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`tagihan`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`tagihan` (
  `codepembayaran` VARCHAR(40) NOT NULL ,
  `codeuser` INT NOT NULL ,
  `jumlahharga` MEDIUMTEXT  NOT NULL ,
  `tanggal` DATE NULL ,
  `status` ENUM('bayar','belum') NULL ,
  `codeadmin` INT NULL ,
  PRIMARY KEY (`codepembayaran`) ,
  INDEX `fk_pembayaran_user` (`codeuser` ASC) ,
  INDEX `fk_tagihan_admin` (`codeadmin` ASC) ,
  CONSTRAINT `fk_pembayaran_user`
    FOREIGN KEY (`codeuser` )
    REFERENCES `hat`.`user` (`codeuser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tagihan_admin`
    FOREIGN KEY (`codeadmin` )
    REFERENCES `hat`.`admin` (`codeadmin` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`detailtagihan`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`detailtagihan` (
  `codedetailpembayaran` INT NOT NULL ,
  `codepembayaran` VARCHAR(45) NULL ,
  `codejadwalevent` VARCHAR(40) NULL ,
  PRIMARY KEY (`codedetailpembayaran`) ,
  INDEX `fk_detailpembayaran_pembayaran` (`codepembayaran` ASC) ,
  INDEX `fk_detailpembayaran_jadwalevent` (`codejadwalevent` ASC) ,
  CONSTRAINT `fk_detailpembayaran_pembayaran`
    FOREIGN KEY (`codepembayaran` )
    REFERENCES `hat`.`tagihan` (`codepembayaran` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detailpembayaran_jadwalevent`
    FOREIGN KEY (`codejadwalevent` )
    REFERENCES `hat`.`jadwalevent` (`codejadwalevent` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`batalpembayaran`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`batalpembayaran` (
  `codebatalpembayaran` VARCHAR(40) NOT NULL ,
  `codepembayaran` VARCHAR(45) NULL ,
  `tanggal` VARCHAR(45) NULL ,
  `codeadmin` INT NULL ,
  PRIMARY KEY (`codebatalpembayaran`) ,
  INDEX `fk_batalpembayaran_tagihan` (`codepembayaran` ASC) ,
  INDEX `fk_batalpembayaran_admin` (`codeadmin` ASC) ,
  CONSTRAINT `fk_batalpembayaran_tagihan`
    FOREIGN KEY (`codepembayaran` )
    REFERENCES `hat`.`tagihan` (`codepembayaran` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_batalpembayaran_admin`
    FOREIGN KEY (`codeadmin` )
    REFERENCES `hat`.`admin` (`codeadmin` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`detailbatalpembayaran`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`detailbatalpembayaran` (
  `codedetailbatalpembayaran` INT NOT NULL ,
  `codebatalpembayaran` VARCHAR(45) NULL ,
  `jumlah` MEDIUMTEXT  NULL ,
  PRIMARY KEY (`codedetailbatalpembayaran`) ,
  INDEX `fk_detailbatalpembayaran_batalpembayaran` (`codebatalpembayaran` ASC) ,
  CONSTRAINT `fk_detailbatalpembayaran_batalpembayaran`
    FOREIGN KEY (`codebatalpembayaran` )
    REFERENCES `hat`.`batalpembayaran` (`codebatalpembayaran` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`halaman`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`halaman` (
  `codehalaman` INT NOT NULL AUTO_INCREMENT ,
  `judul` VARCHAR(45) NOT NULL ,
  `isi` TEXT NOT NULL ,
  `tanggal` DATE NOT NULL ,
  `codeadmin` INT NOT NULL ,
  PRIMARY KEY (`codehalaman`) ,
  INDEX `fk_halaman_admin` (`codeadmin` ASC) ,
  CONSTRAINT `fk_halaman_admin`
    FOREIGN KEY (`codeadmin` )
    REFERENCES `hat`.`admin` (`codeadmin` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `hat`.`sertifikat`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `hat`.`sertifikat` (
  `codesertifikat` INT NOT NULL AUTO_INCREMENT ,
  `nosertifikat` VARCHAR(45) NOT NULL ,
  `codeuser` INT NOT NULL ,
  PRIMARY KEY (`codesertifikat`) ,
  INDEX `fk_sertifikat_user` (`codeuser` ASC) ,
  CONSTRAINT `fk_sertifikat_user`
    FOREIGN KEY (`codeuser` )
    REFERENCES `hat`.`user` (`codeuser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
