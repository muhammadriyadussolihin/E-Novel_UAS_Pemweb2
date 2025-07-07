-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 12:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `sampul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `judul_buku`, `pengarang`, `tahun_terbit`, `kategori`, `jumlah_buku`, `sampul`) VALUES
('B001', 'Harry Potter and the Philosopher\'s Stone', 'J.K Rowling', 1997, 'Novel', 300, 'uploads/sampul/1714552450_e9fd9b2de4c26946d5b8.jpg'),
('B002', 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'C.S Lewis', 1950, 'Novel', 48, 'uploads/sampul/1714552651_ef1b66143a6bccf0db01.jpg'),
('B003', 'Laskar Pelangi', 'Andrea Hirata', 2005, 'Novel', 127, 'uploads/sampul/1714552809_f0dc15425408676fdaf4.jpg'),
('B004', 'Tenggelamnya Kapal Van Der Wijck', 'Hamka', 1938, 'Novel', 133, 'uploads/sampul/1714552937_553f2a4d28ede9c568da.jpg'),
('B005', 'Perahu Kertas', 'Dewi Lestari', 2009, 'Novel', 455, 'uploads/sampul/1714553038_52c6d4d9d86be77f2ee0.jpg'),
('B006', 'Dikta & Hukum', 'Dhia\'an Farah', 2021, 'Novel', 110, 'uploads/sampul/1714554045_5b65384f0809e1b5c843.jpeg'),
('B007', 'The Hunger Games', 'Suzanne Collins', 2008, 'Novel', 25, 'uploads/sampul/1714554173_e894862efb030c1d302b.jpg'),
('B008', 'Ayat-Ayat Cinta', 'Habiburrahman El-Shirazy', 2004, 'Novel', 75, 'uploads/sampul/1714554266_9dbb5942e33942368571.jpg'),
('B009', 'Malioboro at Midnight', 'Skysphire', 2023, 'Novel', 55, 'uploads/sampul/1714554508_2e0e0b6e3757f3a146c3.jpeg'),
('B010', 'Adhesi', 'Vannesa', 2023, 'Novel', 76, 'uploads/sampul/1714555202_4d3a5d494e6bfc3bd605.jpeg'),
('B011', 'Hold On, It Hurts', 'Noveni Adelia', 2023, 'Novel', 44, 'uploads/sampul/1714555261_af22a8dc529f6f6e5017.jpeg'),
('B012', 'Hilmy Milan', 'Nadia Ristivani', 2021, 'Novel', 80, 'uploads/sampul/1714555386_c42c5c0a2c01da23a48d.jpeg'),
('B013', 'Hello, Cello', 'Nadia Ristivani', 2022, 'Novel', 64, 'uploads/sampul/1714555481_8998afb452812b640e40.jpeg'),
('B014', 'Bumi', 'Tere Liye', 2014, 'Novel', 154, 'uploads/sampul/1714555560_8be8f5df18413615d2f9.jpeg'),
('B015', '7 Prajurit Bapak', 'Wulan Nur Amalia', 2022, 'Novel', 188, 'uploads/sampul/1714555646_5ce01c7cfb5fb276c89c.jpeg'),
('B016', 'Bumi Manusia', 'Pramoedya Ananta Toer', 1980, 'Novel', 255, 'uploads/sampul/1714555997_7fbaadb89ff79ff98803.jpg'),
('B017', 'Cinta di Dalam Gelas', 'Andrea Hirata', 2006, 'Novel', 43, 'uploads/sampul/1714556195_546dd9d8ac79d0e8c781.jpg'),
('B018', 'Cantik itu Luka', 'Eka Kurniawan', 2002, 'Novel', 230, 'uploads/sampul/1714556390_4c681ee30d1a67beadd5.jpg'),
('B019', 'Pulang', 'Tere Liye', 2016, 'Novel', 50, 'uploads/sampul/1714556582_4117b20f8eb17e6514ee.jpg'),
('B020', 'Sepotong Hati Yang Baru', 'Tere Liye', 2018, 'Novel', 12, 'uploads/sampul/1714556689_94a07231ec996f90d8c6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjam`
--

CREATE TABLE `tb_peminjam` (
  `no_peminjam` varchar(20) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `kode_buku` varchar(20) NOT NULL,
  `tanggal_peminjaman` datetime NOT NULL,
  `tanggal_pengembalian` datetime DEFAULT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `status` enum('dipinjam','dikembalikan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`no_peminjam`, `nama_peminjam`, `kode_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `jumlah_buku`, `status`) VALUES
('KP0001', 'Iwan', 'B001', '2023-12-26 00:27:00', '2023-12-26 00:44:50', 100, 'dikembalikan'),
('KP0002', 'Faizah Via', 'B004', '2024-05-01 15:45:00', '2024-05-01 17:18:27', 1, 'dikembalikan'),
('KP0003', 'Anggita Risqi', 'B014', '2024-05-01 17:17:00', NULL, 1, 'dipinjam'),
('KP0004', 'Zahra Nurhaliza', 'B011', '2024-05-01 17:17:00', NULL, 1, 'dipinjam'),
('KP0005', 'Liskania Aprilia', 'B002', '2024-05-01 17:18:00', NULL, 2, 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `user_name`, `password`) VALUES
(1, 'admin', '$2y$10$oElxiErROXzdVdEse1V2wOZXE5Pv/MdiFOG38Rz/IKLmsGJWhXxWO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD PRIMARY KEY (`no_peminjam`),
  ADD KEY `kode_buku` (`kode_buku`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
  ADD CONSTRAINT `tb_peminjam_ibfk_1` FOREIGN KEY (`kode_buku`) REFERENCES `tb_buku` (`kode_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
