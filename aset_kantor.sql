-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2016 at 09:39 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aset_kantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `id_departemen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_departemen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'IT'),
(2, 'Marketing'),
(3, 'Produksi'),
(4, 'Sales'),
(5, 'Finance'),
(6, 'TS'),
(7, 'SCM');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE IF NOT EXISTS `hardware` (
  `id_hardware` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `kode_hardware` varchar(50) NOT NULL,
  `nama_hardware` varchar(100) NOT NULL,
  `spesifikasi` varchar(300) NOT NULL,
  `serial_number` varchar(20) NOT NULL,
  `kisaran_harga` int(10) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_hardware`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id_hardware`, `id_kategori`, `id_pegawai`, `kode_hardware`, `nama_hardware`, `spesifikasi`, `serial_number`, `kisaran_harga`, `kondisi`) VALUES
(3, 1, 2, '011/INV-IT/02/13', 'AOCN950SW', '15INC', 'CPNC71A006550', 500000, 'Baik'),
(4, 2, 2, '032/INV-IT/01/13', 'SPC', '2CORE', '-', 1500000, 'Baik'),
(5, 1, 7, '021/INV-IT/02/13', 'ASUS', 'LCD | 15INC', 'AS870YT', 500000, 'Baik'),
(6, 2, 7, '011/INV-IT/01/13', 'BLUEBERRY', 'Intel Pentium4 | 2GB', '12345678ASYT', 1500000, 'Baik'),
(7, 3, 9, '005/INV-IT/03/14', 'ASUS X453M', 'Intel Celeron N2840 2.16GHz\nRAM 2GB DDR3\nMainbord ASUSTek COMPUTER\nVGA INTEL HD\nHDD 465GB Seagate ST500LT012 SATA\nDTSOFT Virtual CdRom Device\n', 'X453MA-WX216D', 3000000, 'Baik'),
(9, 1, 6, '007/INV-IT/02/13', 'PHILIPS MWEII60T', '15INC', 'AU1017013460', 900000, 'Baik'),
(10, 4, 6, '004/INV-IT/04/14', 'L130', '-', '-', 1500000, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Monitor'),
(2, 'CPU'),
(3, 'Laptop'),
(4, 'Ncomputing'),
(6, 'Keyboard'),
(8, 'Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `id_departemen` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_departemen`, `username`, `password`, `nama`) VALUES
(2, 1, 'agung', 'agung', 'Agung Budidoyo'),
(3, 2, 'rudi', 'rudi', 'Rudi Wijayanto'),
(4, 3, 'robi', 'robi', 'Robi Hidayat'),
(6, 4, 'ono', 'ono', 'Indiyono'),
(7, 4, 'riki', 'riki', 'Riki Setiawan'),
(8, 6, 'giyanto', 'giyanto', 'Giyanto'),
(9, 2, 'gono', 'gono', 'Dewanggono'),
(10, 7, 'ade', 'ade', 'Ade Irma');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
