-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 09.35
-- Versi server: 5.7.26
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_concert`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_concert`
--

DROP TABLE IF EXISTS `tb_concert`;
CREATE TABLE IF NOT EXISTS `tb_concert` (
  `concert_id` int(11) NOT NULL AUTO_INCREMENT,
  `concert_title` varchar(50) NOT NULL,
  `concert_venue` varchar(50) NOT NULL,
  PRIMARY KEY (`concert_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_concert`
--

INSERT INTO `tb_concert` (`concert_id`, `concert_title`, `concert_venue`) VALUES
(1, 'John Mayer Asia Tour 2019', 'Stadium Utama Gelora Bung Karno, Jakarta Pusat'),
(2, 'Kodaline Politics of Living Tour 2019', 'Istora Senayan, Jakarta Pusat'),
(3, 'Ed Sheeran Divide World Tour 2019 ', 'Stadium Utama Gelora Bung Karno, Jakarta Pusat'),
(4, 'Lauv Asia Tour 2019', 'Tennis Indoor Senayan, Jakarta Selatan'),
(5, 'Lany – World Tour 2019', 'Tennis Indoor Senayan, Jakarta Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

DROP TABLE IF EXISTS `tb_customer`;
CREATE TABLE IF NOT EXISTS `tb_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_telp` varchar(15) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_name`, `customer_address`, `customer_telp`, `customer_email`) VALUES
(1, 'Amanda', 'Jl. Kebun Jeruk, Jakarta', '08132142411', 'amanda@gmail.com'),
(2, 'Andreas', 'Jl. Jeruk Mandarin, Malang', '0823432138', 'andreas@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

DROP TABLE IF EXISTS `tb_order`;
CREATE TABLE IF NOT EXISTS `tb_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `concert_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `payment_date` datetime NOT NULL,
  `cancel_date` datetime DEFAULT NULL,
  `order_quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `concert_id` (`concert_id`),
  KEY `ticket_id` (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `customer_id`, `concert_id`, `ticket_id`, `order_date`, `payment_date`, `cancel_date`, `order_quantity`, `total_price`, `status`) VALUES
(1, 1, 1, 1, '2019-01-17 11:00:00', '2019-01-17 13:00:00', NULL, 2, 2600000, 'paid'),
(2, 2, 2, 2, '2019-02-06 15:00:00', '2019-02-06 20:00:00', NULL, 1, 600000, 'paid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ticket`
--

DROP TABLE IF EXISTS `tb_ticket`;
CREATE TABLE IF NOT EXISTS `tb_ticket` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `concert_date` datetime NOT NULL,
  `ticket_price` int(11) NOT NULL,
  `ticket_class` varchar(20) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ticket`
--

INSERT INTO `tb_ticket` (`ticket_id`, `concert_date`, `ticket_price`, `ticket_class`) VALUES
(1, '2019-04-05 21:00:00', 1300000, 'Festival'),
(2, '2019-03-01 21:00:00', 600000, 'Tribune');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
