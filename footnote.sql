-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2023 at 06:47 PM
-- Server version: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara`
--

-- --------------------------------------------------------

--
-- Table structure for table `footnote`
--

CREATE TABLE `footnote` (
  `id` int(10) UNSIGNED NOT NULL,
  `penulis_1` varchar(255) DEFAULT NULL,
  `penulis_2` varchar(255) DEFAULT NULL,
  `penulis_3` varchar(255) DEFAULT NULL,
  `judul` longtext DEFAULT NULL,
  `sumber` longtext DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `nomor` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `halaman_awal` int(11) DEFAULT NULL,
  `halaman_akhir` int(11) DEFAULT NULL,
  `jumlah_penulis` int(11) DEFAULT NULL,
  `jenis` int(1) DEFAULT NULL,
  `judul_web` varchar(100) DEFAULT NULL,
  `deskripsi_web` varchar(100) DEFAULT NULL,
  `tahun_web` int(4) DEFAULT NULL,
  `link_web` varchar(100) DEFAULT NULL,
  `tanggal_diakses_web` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footnote`
--

INSERT INTO `footnote` (`id`, `penulis_1`, `penulis_2`, `penulis_3`, `judul`, `sumber`, `volume`, `nomor`, `tahun`, `halaman_awal`, `halaman_akhir`, `jumlah_penulis`, `jenis`, `judul_web`, `deskripsi_web`, `tahun_web`, `link_web`, `tanggal_diakses_web`, `kota`) VALUES
(1, 'Ismiarta Aknuranda', 'Almira Syawli', 'Budi Darma Setiawan', 'Comparative Evaluation of Usability between QWERTY-Based Arabic and Non-QWERTY-Based Arabic Keyboard Layout: Empirical Evidence', 'Journal of Information Technology and Computer Science', 5, 2, 2020, 177, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, 'Malang'),
(2, 'Sitti Kuraedah', NULL, NULL, 'Aplikasi Maharah Kitabah dalam Pembelajaran Bahasa Arab', 'Jurnal Al-Ta\'dib', 8, 2, 2015, 83, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Kendari'),
(3, 'Yayah Robiatul Adawiyah', NULL, NULL, 'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab', 'Community Development Journal', 2, 2, 2021, 283, NULL, 4, 1, NULL, NULL, NULL, NULL, NULL, 'Probolinggo'),
(4, 'Anggun Diah Puspitasari', 'Andre Noevi Rahmanto', 'Jumiyanto Widodo', 'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar', 'Prosiding Seminar Nasional Pendidikan Administrasi Perkantoran (SNPAP)', NULL, NULL, 2018, 137, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, 'Surakarta'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Arabic Typing Tutor', 'Developer’s Description', 2023, 'https://download.cnet.com/Arabic-Typing-Tutor/3000-2279_4-10962267.html', '8 Februari 2023', NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Kamus Besar Bahasa Indonesia (KBBI)', 'Kata dasar > latih', 2017, 'https://kbbi.web.id/latih', '7 Maret 2023', NULL),
(7, 'Decky Dermawan', 'Deasy Aseanty', NULL, 'Pengaruh Pelatihan Sumber Daya Manusia Terhadap Produktivitas Kinerja Karyawan di Hotel Amaris Jakarta', 'Seminar Nasional Cendekiawan', NULL, NULL, 2015, 653, NULL, 2, 1, NULL, NULL, NULL, NULL, NULL, 'Jakarta'),
(8, 'Decky Dermawan', 'Deasy Aseanty', NULL, 'Pengaruh Pelatihan Sumber Daya Manusia Terhadap Produktivitas Kinerja Karyawan di Hotel Amaris Jakarta', 'Seminar Nasional Cendekiawan', NULL, NULL, 2015, 654, NULL, 2, 1, NULL, NULL, NULL, NULL, NULL, 'Jakarta'),
(9, 'Yayah Robiatul Adawiyah', NULL, NULL, 'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab', 'Community Development Journal', 2, 2, 2021, 282, NULL, 4, 1, NULL, NULL, NULL, NULL, NULL, 'Probolinggo'),
(10, 'Jusuf Irianto', NULL, NULL, 'Prinsip Prinsip Dasar Manajemen Pelatihan (Dari Analisis Kebutuhan sampai Evaluasi Program Pelatihan)', 'Kajian Mandiri Pelatihan dan Pengembangan SDM', NULL, NULL, 2017, 13, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Bandung'),
(11, 'Yayah Robiatul Adawiyah', NULL, NULL, 'Pelatihan Mahir Mengetik Tulisan Arab bagi Mahasiswa Baru Prodi Pendidikan Bahasa Arab', 'Community Development Journal', 2, 2, 2021, 282, 287, 4, 1, NULL, NULL, NULL, NULL, NULL, 'Probolinggo'),
(12, 'Nurul Susanti', NULL, NULL, 'Analisis Pelatihan Kerja Pegawai pada Dinas Pemadam Kebakaran Kota Pekanbaru (Kasus pada Kantor Induk Cempaka)', 'Other thesis, Universitas Islam Riau', NULL, NULL, 2018, 12, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Riau'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Kamus Besar Bahasa Indonesia (KBBI)', 'Kata dasar tik^2', 2016, 'https://kbbi.web.id/tik-2', '8 Maret 2023', NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Kamus Besar Bahasa Indonesia (KBBI)', 'Kata Dasar', 2019, 'https://kbbi.web.id/mengetik', '8 Maret 2023', NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Kamus Besar Bahasa Indonesia (KBBI)', 'Kata dasar tik^2', 2016, 'https://kbbi.web.id/tik-2', '8 Maret 2023', NULL),
(16, 'Tuti Sulastri', NULL, NULL, 'Analisis Mengetik Cepat 10 Jari menggunakan Teknologi Komputer Berbasis Aplikasi Software Rapidtyping', 'JURNAL LPKIA', 4, 2, 2014, 13, 14, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Bandung'),
(17, 'Agus Supriatna', NULL, NULL, 'Peningkatan Keterampilan Touch Typing Bahasa Arab pada Keyboard Komputer dengan Metode Drill Berbasis Memori Kinestetik', 'Prosiding Seminar Ilmiah Bahasa dan Sastra Arab', 1, NULL, 2021, 4, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Subang'),
(18, 'Hasan Abdurahman', 'Asep Ririh Riswaya', NULL, 'Aplikasi Pinjaman Pembayaran Secara Kredit pada Bank Yudha Bhakti', 'Jurnal Computech & Bisnis', 8, 2, 2014, 62, NULL, 2, 1, NULL, NULL, NULL, NULL, NULL, 'Bandung'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Kamus Besar Bahasa Indonesia (KBBI)', 'perangkat', 2016, 'https://kbbi.web.id/perangkat', '8 Maret 2023', NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Rapid Typing', 'Typing Tutor', 2018, 'https://rapidtyping.com/', '8 Maret 2023', NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Rapid Typing', 'Arabic Typing Tutor', 2020, 'https://rapidtyping.com/best-typing-tutors/arabic-typing-tutor.html', '8 Maret 2023', NULL),
(22, 'Anggun Diah Puspitasari', 'Andre Noevi Rahmanto', 'Jumiyanto Widodo', 'Pengaruh Penggunaan Media Aplikasi Typing Master dan Motivasi Belajar Siswa Terhadap Keterampilan Mengetik 10 Jari pada Kelas XI Jurusan Administrasi Perkantoran di SMK N 1 Karanganyar', 'Prosiding Seminar Nasional Pendidikan Administrasi Perkantoran (SNPAP)', NULL, NULL, 2018, 137, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, 'Surakarta'),
(23, 'Sitti Kuraedah', NULL, NULL, 'Aplikasi Maharah Kitabah dalam Pembelajaran Bahasa Arab', 'Jurnal Al-Ta\'dib', 8, 2, 2015, 82, 98, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Kendari'),
(24, 'Suliyanto', NULL, NULL, 'Metode Penelitian Bisnis untuk Skripsi, Tesis, & Disertasi', 'ANDI', NULL, NULL, 2018, 155, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Yogyakarta'),
(25, 'Suliyanto', NULL, NULL, 'Metode Penelitian Bisnis untuk Skripsi, Tesis, & Disertasi', 'ANDI', NULL, NULL, 2018, 156, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Yogyakarta'),
(26, 'Suliyanto', NULL, NULL, 'Metode Penelitian Bisnis untuk Skripsi, Tesis, & Disertasi', 'ANDI', NULL, NULL, 2018, 156, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 'Yogyakarta'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 'Ascarya Solution', 'Macam-macam Metode Analisis Data Kuantitatif', 2022, 'https://ascarya.or.id/metode-analisis-data-kuantitatif/', '8 Maret 2023', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `footnote`
--
ALTER TABLE `footnote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `footnote`
--
ALTER TABLE `footnote`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
