-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 05:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDbuku`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `foto`, `stok`, `sinopsis`) VALUES
(4, 'Thinking Clearly', 'Rolf Dobelli', 'Kepustakaan Populer Gramedia', 2015, 'The Art Of Thinking Clearly (1).jpg', 42, 'Buku ini memberikan panduan praktis tentang cara berpikir kritis dan membuat keputusan yang lebih baik.'),
(5, 'Emosional', 'Daniel Goleman', 'Gramedia Pustaka Utama', 2009, 'kecerdasan emosional (1).jpg', 49, 'Kecerdasan emosional merupakan ciri orang-orang yang menonjol dalam kehidupan nyata.'),
(6, 'Almost Adulting', 'Nadhira Afifa', 'Gramedia Pustaka Utama', 2022, 'almost adulting (1).jpg', 50, 'Buku ini dapat menjadi salah satu bentuk refleksi dan penenangan diri bagi semua yang sedang mengalami krisis yang sama'),
(7, 'Yang Belum Usai', 'PijarPsikologi', 'Elex Media Komputindo', 2020, 'yang belum usai (1).jpg', 50, 'pada akhirnya kita akan mampu memaafkan orang-orang yang telah menyakiti hati kita. Bahwa trauma kita akan hilang. Bahwa kita akan baik-baik saja.'),
(8, 'Overheard Jakarta', 'Kurnawan Indra', 'Grasindo', 2020, 'overheard jakarta (1).jpg', 50, 'Menceritakan tentang ibu kota jakarta'),
(9, 'Sembuh Sendiri', 'Helo Bagas', 'Gradien Mediatama', 2022, 'Nanti Juga Sembuh Sendiri (1).jpg', 50, 'Buku ini cocok untuk pembaca yang sedang mencari buku pengembangan diri.'),
(10, 'Merawat Luka Batin', 'Jiemi Ardian', 'Gramedia Pustaka Utama', 2022, 'Merawat_Luka_Batin_C_1_4-1 (1).jpg', 50, 'Buku ini berisi tentang proses berpikir, bukan sekadar berpikir dengan positif.'),
(11, 'Stop Overthinking', 'Tulus', 'Gramedia Pustaka Utama', 2020, 'stop overthinking (1).jpg', 50, 'Setelah membaca ini saya berfikir bahwa, overthinking boleh boleh saja tapi sewajarnya, kita juga harus bersyukur atas apa yang sudah kita miliki.'),
(12, 'Almost Adulting', 'Krabbs', 'Squidward', 2020, 'register.png', 20, ''),
(13, 'asads', 'asdas', 'asdas', 2020, 'kecerdasan emosional (1).jpg', 50, ''),
(14, 'asd', 'asd', 'asdas', 1212, 'f14f8c244b13f4274b25b4f026740035.jpg', 20, ''),
(15, 'a', 'a', 'a', 2020, 'Flowchart0 (1).png', 20, 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `IDpeminjaman` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah_peminjaman` int(11) NOT NULL,
  `status_peminjaman` enum('dipinjam','dikembalikan') NOT NULL,
  `kode_pinjam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`IDpeminjaman`, `IDuser`, `IDbuku`, `nama`, `judul`, `tgl_peminjaman`, `tgl_pengembalian`, `jumlah_peminjaman`, `status_peminjaman`, `kode_pinjam`) VALUES
(13, 0, 5, 'a', 'Emosional', '2024-02-23', '2024-02-23', 1, 'dipinjam', '1111');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `kembali` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
    DECLARE jumlah_pinjam INT;
    SELECT jumlah_peminjaman INTO jumlah_pinjam FROM peminjaman WHERE IDpeminjaman = NEW.IDpeminjaman;
    UPDATE buku SET stok = stok + jumlah_pinjam WHERE IDbuku = NEW.IDbuku;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `peminjaman` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
    DECLARE jumlah_pinjam INT;
    SELECT jumlah_peminjaman INTO jumlah_pinjam FROM peminjaman WHERE IDpeminjaman = NEW.IDpeminjaman;
    UPDATE buku SET stok = stok - jumlah_pinjam WHERE IDbuku = NEW.IDbuku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `IDulasan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`IDulasan`, `nama`, `judul`, `ulasan`, `rating`) VALUES
(1, 'Andhika Putra Sahertian', 'The Art Of Thinking Clearly', 'bagus', 9),
(2, 'Zikry Nursalam', 'Stop Overthinking', 'keren', 9),
(3, 'Dicky Chandra', 'Yang Belum Usai', 'semuanya belum berakhir, layak di baca', 9),
(4, 'Daffa', 'Overheard Jakarta', 'jakarta sebagus itu', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDuser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','peminjam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDuser`, `username`, `password`, `email`, `nis`, `namalengkap`, `alamat`, `level`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 321321, 'admin', 'bandung', 'admin'),
(3, 'peminjam', '55f3894bc5fc71fead8412d321c2952c', 'peminjam@gmail.com', 123124, 'peminjam', 'bandung', 'peminjam'),
(10, 'komar', '9a362a91b4de4a313bed73647479200c', 'komar@gmail.com', 111111, 'Komarudin', 'bangladesh', 'petugas'),
(17, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', 0, '1', '1', 'peminjam'),
(18, '2', 'c81e728d9d4c2f636f067f89cc14862c', '2', 0, 'a', '2', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDbuku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`IDpeminjaman`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDuser` (`IDuser`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`IDulasan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `IDbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `IDpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `IDulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
