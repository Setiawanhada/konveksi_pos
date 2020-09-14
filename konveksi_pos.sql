/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.10-MariaDB : Database - konveksi_pos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `mst_bahan` */

DROP TABLE IF EXISTS `mst_bahan`;

CREATE TABLE `mst_bahan` (
  `id_bahan` int(4) NOT NULL AUTO_INCREMENT,
  `id_satuan` int(4) DEFAULT NULL,
  `nama_bahan` varchar(45) DEFAULT NULL,
  `create_by` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `mdd` int(4) DEFAULT NULL,
  `mdb` datetime DEFAULT NULL,
  PRIMARY KEY (`id_bahan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_bahan` */

/*Table structure for table `mst_detail_jenis` */

DROP TABLE IF EXISTS `mst_detail_jenis`;

CREATE TABLE `mst_detail_jenis` (
  `id_detail_jenis` int(4) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(4) DEFAULT NULL,
  `id_bahan` int(4) DEFAULT NULL,
  `dibutuhkan` int(4) DEFAULT NULL,
  `create_by` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `mdb` int(4) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_detail_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_detail_jenis` */

/*Table structure for table `mst_jenis` */

DROP TABLE IF EXISTS `mst_jenis`;

CREATE TABLE `mst_jenis` (
  `id_jenis` int(4) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(35) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `create_by` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_jenis` */

/*Table structure for table `mst_satuan` */

DROP TABLE IF EXISTS `mst_satuan`;

CREATE TABLE `mst_satuan` (
  `id_satuan` int(4) NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(25) DEFAULT NULL,
  `create_by` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `mdb` int(4) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_satuan` */

/*Table structure for table `stok` */

DROP TABLE IF EXISTS `stok`;

CREATE TABLE `stok` (
  `id_stok` int(4) NOT NULL AUTO_INCREMENT,
  `id_bahan` int(4) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `create_by` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `mdb` int(4) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_stok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `stok` */

/*Table structure for table `trx_pesanan` */

DROP TABLE IF EXISTS `trx_pesanan`;

CREATE TABLE `trx_pesanan` (
  `id_pesanan` char(11) NOT NULL,
  `pemesan` varchar(35) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `tgl_jadi` date DEFAULT NULL,
  `pesanan` int(4) DEFAULT NULL,
  `gbr_desain` varchar(50) DEFAULT NULL,
  `gbr_sablon` varchar(50) DEFAULT NULL,
  `jml_pesanan` int(4) DEFAULT NULL,
  `titip` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `create_by` int(4) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `mdb` int(4) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `trx_pesanan` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
