-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2023 pada 04.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contac`
--

CREATE TABLE `contac` (
  `nama` varchar(50) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contac`
--

INSERT INTO `contac` (`nama`, `gmail`, `komentar`) VALUES
('badang5', 'ilham686494@gmail.com', 'yayaya'),
('hhhh', 'ilham686494@gmail.com', 'hjhhhh'),
('hhhh', 'ilham686494@gmail.com', 'hjhhhh'),
('hhhh', 'ilham686494@gmail.com', 'hjhhhh'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ill', 'ilham686494@gmail.com', 'anjing'),
('ilham', 'ilham686494@gmail.com', 'taek'),
('ilham', 'ilham686494@gmail.com', 'taek'),
('ill', 'ilham686494@gmail.com', 'Taek'),
('ilham', 'ilham686454@gmail.com', 'babi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
