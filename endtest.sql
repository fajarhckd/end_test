-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2020 pada 19.14
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endtest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`nip`, `nama`, `prodi`) VALUES
('195508281986031003', 'SUWINARDI, Drs., M.M.', 'EK'),
('195511211984031002', 'EDY SUWARTO, Ir., M.T.', 'EK'),
('195604261984031001', 'EDDY TRIYONO, H., Drs., S.T., M.T.', 'JK'),
('195612091988031001', 'BAMBANG EKO S., Drs., M.M.T.', 'JK'),
('195705141986031012', 'HERY PURNOMO, Drs., M.Pd.', 'LT'),
('195709051988031001', 'SUHENDRO, Drs., M.M.', 'TK'),
('195803061987031001', 'SULISTYO WARJONO, Drs., M.Eng.', 'EK'),
('195806091986031001', 'DAENG SUPRIYADI P., Drs., S.T., M.Eng.', 'LT'),
('195901121987031001', 'AMIR SUBAGYO, Drs., M.M.', 'LT'),
('195901191988031001', 'SASONGKO, Drs., M.Hum.', 'EK'),
('195903101986121002', 'ARI SANTOSO, Drs., S.S.T., M.Eng.', 'LT'),
('195904141988031004', 'ADI WISAKSONO, S.T., M.M.', 'EK'),
('195905041988031001', 'HERY SETIJASA, S.T., M.T.', 'LT'),
('195908071987031003', 'JUWARTA, Drs., M.M.', 'LT'),
('195910111985031004', 'BANGUN KRISHNA, S.T.', 'EK'),
('195910201987031003', 'EKO WIDIARTO, S.T., M.Eng.', 'LT'),
('196003171986031002', 'SUBANDONO, Drs.', 'EK'),
('196003281986121001', 'KUSNO UTOMO, S.T.', 'EK'),
('196005061986031001', 'MAKHFUD, H., Drs., M.T.', 'LT'),
('196005101984031001', 'SLAMET WIDODO, Ir., M.Eng.', 'JK'),
('196005121986121001', 'HARIS SANTOSA, S.T., M.Kom.', 'LT'),
('196007291988031001', 'SETYOKO, Ir., M.M.', 'LT'),
('196008221988031001', 'PARSUMO RAHARDJO, Drs., M.Kom.', 'IK'),
('196008221989032001', 'ENDANG TRIYANI, Dra., M.Pd.', 'LT'),
('196008241988031001', 'AGUS ROCHADI, H., S.T., M.M.', 'TK'),
('196009131987031001', 'AGUS ADIWISMONO, Drs.', 'LT'),
('196009291985031005', 'TRIYONO, S.T., M.Eng.', 'LT'),
('196012281986021001', 'SIHONO, S.T., M.Eng.', 'EK'),
('196104241989031001', 'ENDRO WASITO, H., Ir.', 'TK'),
('196106051987031003', 'IMAN SUROSO, Drs., M.Pd.', 'LT'),
('196107101988112001', 'NETTY NURDIYANI, Hj., Dra., M.Hum', 'LT'),
('196107171986031001', 'ARIF NURSYAHID, H., Drs., M.T.', 'JK'),
('196108141988112001', 'SUPRIYATI, S.T., M.Kom.', 'EK'),
('196201291989031001', 'SURYONO, S.T., M.Eng.', 'EK'),
('196203231985031004', 'AKHMAD JAMAAH F., H., S.T., M.Eng.', 'LT'),
('196204061991031002', 'LILIK EKO N., B.Eng., M.Kom.', 'LT'),
('196204201987031002', 'MOCH. CHAMBALI, B.Eng., M.Kom.', 'LT'),
('196206101986031004', 'DADI, S.T., M.Eng.', 'EK'),
('196206251988032001', 'SRI ASTUTI, Dra., M.M.', 'EK'),
('196209051985031003', 'ILHAM SAYEKTI, S.T., M.Kom.', 'EK'),
('196209111989031002', 'BUDI BASUKI SUBAGIO, S.T., M.Eng.', 'TK'),
('196301251991031001', 'SINDUNG H. W. S., BSEE., M.Eng.Sc.', 'JK'),
('196306101991031003', 'MOCH. MUQORROBIN, Ir., M.Eng.', 'LT'),
('196306161992011001', 'TULUS PRAMUJI, B.Eng., M.T.', 'EK'),
('196307071992031005', 'BAMBANG SUPRIYO, BSEE., M.Eng.Sc., Ph.D.', 'EK'),
('196307181992031002', 'ACHMAD HARDITO, H., B.Eng., M.Kom.', 'LT'),
('196312221991031005', 'DJODI ANTONO, B.Tech., M.Eng.', 'LT'),
('196401221991031002', 'ADI WASONO, B.Eng., M.Eng.', 'LT'),
('196402141990031001', 'AJI HARI RIYADI, S.T., M.T.', 'LT'),
('196403091991031003', 'SARONO WIDODO, S.T., M.Kom.', 'TK'),
('196404121996011001', 'SAMUEL BETA K, Ing.Tech., M.T., Dr.', 'EK'),
('196506071990031001', 'ABU HASAN, S.T., M.T.', 'JK'),
('196708041992031001', 'EMANUEL GATOT SUKOTJO, S.S.T.', 'EK'),
('196710171997022001', 'SRI ANGGRAENI K, S.T., M.Eng.', 'TK'),
('196810252000121001', 'TRI RAHARJO YUDANTORO, S. Kom., M.Kom.', 'IK'),
('196902012000121001', 'EKO SUPRIYANTO, S.T., M.T.', 'TK'),
('197101172003121001', 'SUKAMTO, S.Kom., M.T.', 'IK'),
('197102102005012001', 'SRI KUSUMASTUTI, S.T., M.Eng.', 'EK'),
('197203112000031002', 'SIDIQ SYAMSUL HIDAYAT, S.T., M.T., Dr. Eng.', 'TK'),
('197203292000031001', 'THOMAS AGUNG S., S.T., M.T.', 'TK'),
('197206102000031001', 'KHAMAMI, H., S. Ag., M.M.', 'TK'),
('197210271999031002', 'AMIN SUHARJONO, S.T., M.T., Dr.', 'TK'),
('197307082005011001', 'TAUFIQ YULIANTO, S.H., M.H.', 'TK'),
('197403112000121001', 'MARDIYONO, S.Kom., M.Sc.', 'IK'),
('197409042005011001', 'ARI SRIYANTO NUGROHO, S.T., M.T., M.Sc.', 'IK'),
('197409282000032001', 'ENI DWI WARDIHANI, S.T., M.T.', 'TK'),
('197501302001121001', 'SLAMET HANDOKO, S.Kom., M.Kom.', 'IK'),
('197503132006041001', 'YUSNAN BADRUZZAMAN, S.T., M.Eng.', 'LT'),
('197610032003121002', 'BUDI SUYANTO, S.T., M.T.', 'IK'),
('197704012005011001', 'WAHYU SULISTIYO, S.T., M.Kom.', 'IK'),
('197710092005011001', 'MUHAMMAD ANIF, H., S.T., M.Eng.', 'TK'),
('197711192008012013', 'IDHAWATI H., S.Kom., M.Kom.', 'IK'),
('197904262003122002', 'KURNIANINGSIH, S.T., M.T.', 'IK'),
('197908102006041001', 'HELMY, S.T., M.Eng.', 'TK'),
('197912272003122001', 'ISWANTI, S.Si., M.Sc.', 'EK'),
('198010082005011001', 'SYAHID, S.T., M.Eng.', 'LT'),
('198106092003121002', 'SUBUH PRAMONO, S.T., M.T.', 'TK'),
('198208312005012001', 'DEWI ANGGRAENI, S.Pd.', 'TK'),
('198404202015041003', 'LILIEK TRIYONO, S.T., M.Kom', 'IK'),
('198504102014041002', 'PRAYITNO, S.ST., M.T.', 'IK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_kelas`
--

CREATE TABLE `daftar_kelas` (
  `no` int(4) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `prodi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_kelas`
--

INSERT INTO `daftar_kelas` (`no`, `kelas`, `prodi`) VALUES
(2, 'LT-1B', 'D-III TEKNIK LISTRIK'),
(3, 'LT-1C', 'D-III TEKNIK LISTRIK'),
(4, 'LT-1D (PLN)', 'D-III TEKNIK LISTRIK'),
(5, 'LT-1E (PLN)', 'D-III TEKNIK LISTRIK'),
(6, 'LT-2A', 'D-III TEKNIK LISTRIK'),
(7, 'LT-2B', 'D-III TEKNIK LISTRIK'),
(8, 'LT-2C', 'D-III TEKNIK LISTRIK'),
(9, 'LT-2D (PLN)', 'D-III TEKNIK LISTRIK'),
(10, 'LT-2E (PLN)', 'D-III TEKNIK LISTRIK'),
(11, 'LT-3A', 'D-III TEKNIK LISTRIK'),
(12, 'LT-3B', 'D-III TEKNIK LISTRIK'),
(13, 'LT-3C', 'D-III TEKNIK LISTRIK'),
(14, 'LT-3D (PLN)', 'D-III TEKNIK LISTRIK'),
(15, 'LT-3E (PLN)', 'D-III TEKNIK LISTRIK'),
(16, 'EK-1A', 'D-III TEKNIK ELEKTRONIKA'),
(17, 'EK-1B', 'D-III TEKNIK ELEKTRONIKA'),
(18, 'EK-1C', 'D-III TEKNIK ELEKTRONIKA'),
(19, 'EK-1D', 'D-III TEKNIK ELEKTRONIKA'),
(20, 'EK-2A', 'D-III TEKNIK ELEKTRONIKA'),
(21, 'EK-2B', 'D-III TEKNIK ELEKTRONIKA'),
(22, 'EK-2C', 'D-III TEKNIK ELEKTRONIKA'),
(23, 'EK-2D', 'D-III TEKNIK ELEKTRONIKA'),
(24, 'EK-3A', 'D-III TEKNIK ELEKTRONIKA'),
(25, 'EK-3B', 'D-III TEKNIK ELEKTRONIKA'),
(26, 'EK-3C', 'D-III TEKNIK ELEKTRONIKA'),
(27, 'TK-1A', 'D-III TEKNIK TELEKOMUNIKASI'),
(28, 'TK-1B', 'D-III TEKNIK TELEKOMUNIKASI'),
(29, 'TK-2A', 'D-III TEKNIK TELEKOMUNIKASI'),
(30, 'TK-2B', 'D-III TEKNIK TELEKOMUNIKASI'),
(31, 'TK-3A', 'D-III TEKNIK TELEKOMUNIKASI'),
(32, 'TK-3B', 'D-III TEKNIK TELEKOMUNIKASI'),
(33, 'TE-1A', 'D-IV TEKNIK TELEKOMUNIKASI'),
(34, 'TE-1B', 'D-IV TEKNIK TELEKOMUNIKASI'),
(35, 'TE-2A', 'D-IV TEKNIK TELEKOMUNIKASI'),
(36, 'TE-2B', 'D-IV TEKNIK TELEKOMUNIKASI'),
(37, 'TE-3A', 'D-IV TEKNIK TELEKOMUNIKASI'),
(38, 'TE-3B', 'D-IV TEKNIK TELEKOMUNIKASI'),
(39, 'TE-4A', 'D-IV TEKNIK TELEKOMUNIKASI'),
(40, 'TE-4B', 'D-IV TEKNIK TELEKOMUNIKASI'),
(41, 'IK-1A', 'D-III TEKNIK INFORMATIKA'),
(42, 'IK-1B', 'D-III TEKNIK INFORMATIKA'),
(43, 'IK-1C', 'D-III TEKNIK INFORMATIKA'),
(44, 'IK-2A', 'D-III TEKNIK INFORMATIKA'),
(45, 'IK-2B', 'D-III TEKNIK INFORMATIKA'),
(46, 'IK-3A', 'D-III TEKNIK INFORMATIKA'),
(47, 'IK-3B', 'D-III TEKNIK INFORMATIKA'),
(48, 'EK-3D', 'D-III TEKNIK ELEKTRONIKA'),
(50, 'LT-1A', 'D-III TEKNIK LISTRIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_mk`
--

CREATE TABLE `daftar_mk` (
  `no` int(3) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `daftar_makul` varchar(100) NOT NULL,
  `value` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_mk`
--

INSERT INTO `daftar_mk` (`no`, `kelas`, `daftar_makul`, `value`) VALUES
(1, 'LT-1 REGULER', 'Alat Ukur & Penguk listrik I', 0),
(2, 'LT-1 REGULER', 'Elektronika Digital', 0),
(3, 'LT-1 REGULER', 'Fisika Terapan II', 0),
(4, 'LT-1 REGULER', 'Matematika Terapan II', 0),
(5, 'LT-1 REGULER', 'Mesin mesin Listrik I', 0),
(6, 'LT-1 REGULER', 'PPKn', 1),
(7, 'LT-1 REGULER', 'Pendidikan Agama', 1),
(8, 'LT-1 REGULER', 'Rancangan Listrik Gedung', 0),
(9, 'LT-1 REGULER', 'Rangkaian Listrik II', 0),
(10, 'LT-1 PLN', 'Alat Ukur & Penguk listrik ', 0),
(11, 'LT-1 PLN', 'Elektronika Digital', 0),
(12, 'LT-1 PLN', 'Fisika Listrik', 0),
(13, 'LT-1 PLN', 'Instalasi Cahaya', 0),
(14, 'LT-1 PLN', 'Matematika Terapan II', 0),
(15, 'LT-1 PLN', 'Pendidikan Agama', 1),
(16, 'LT-1 PLN', 'Rancangan Listrik gedung', 0),
(17, 'LT-1 PLN', 'Rangkaian Listrik II', 0),
(18, 'EK-1 REGULER', 'Pendidikan Kewarganegaraan', 1),
(19, 'EK-1 REGULER', 'Matematika Terapan II', 0),
(20, 'EK-1 REGULER', 'Fisika Terapan II', 0),
(21, 'EK-1 REGULER', 'Rangkaian Listrik II', 0),
(22, 'EK-1 REGULER', 'Komponen Elektronika II', 0),
(23, 'EK-1 REGULER', 'Elektronika Digital II', 0),
(24, 'EK-1 REGULER', 'Elektronika Analog I', 0),
(25, 'TK-1 REGULER', 'K3 dan Hukum Ketenagakerjaan', 0),
(26, 'TK-1 REGULER', 'Etika Profesi', 0),
(27, 'TK-1 REGULER', 'Komunikasi Data', 0),
(28, 'TK-1 REGULER', 'Rangkaian Listrik II', 0),
(29, 'TK-1 REGULER', 'Elektronika Telekomunikasi II', 0),
(30, 'TK-1 REGULER', 'Saluran Transmisi', 0),
(31, 'TK-1 REGULER', 'Transduser dan Komponen Elektronika', 0),
(32, 'TK-1 REGULER', 'Medan Elektromagnetik', 0),
(33, 'TE-1 REGULER (D4)', 'K3 dan Hukum Ketenagakerjaan', 0),
(34, 'TE-1 REGULER (D4)', 'Fisiska Terapan', 0),
(35, 'TE-1 REGULER (D4)', 'Komunikasi Data', 0),
(36, 'TE-1 REGULER (D4)', 'Rangkaian Listrik II', 0),
(37, 'TE-1 REGULER (D4)', 'Elektronika Telekomunikasi II', 0),
(38, 'TE-1 REGULER (D4)', 'Saluran Transmisi', 0),
(39, 'TE-1 REGULER (D4)', 'Transduser dan Komponen Elektronika', 0),
(40, 'TE-1 REGULER (D4)', 'Medan Elektromagnetik', 0),
(41, 'IK-1 REGULER', 'Pendidikan Agama', 1),
(42, 'IK-1 REGULER', 'Kewarganegaraan', 1),
(43, 'IK-1 REGULER', 'Statistika', 0),
(44, 'IK-1 REGULER', 'Rangkaian Logika ', 0),
(45, 'IK-1 REGULER', 'Struktur Data', 0),
(46, 'IK-1 REGULER', 'Sistem Basisdata Dasar (T/P)', 0),
(47, 'IK-1 REGULER', 'Komunikasi Data (T/P)', 0),
(48, 'IK-1 REGULER', 'Matematika Diskrit', 0),
(49, 'LT-2 REGULER', 'Bahasa Inggris Teknik II', 0),
(50, 'LT-2 REGULER', 'Dasar Sistem Kendali ', 0),
(51, 'LT-2 REGULER', 'Distribusi Tenaga Listrik I', 0),
(52, 'LT-2 REGULER', 'Elektronika Daya I', 0),
(53, 'LT-2 REGULER', 'Pemrograman Komputer', 0),
(54, 'LT-2 REGULER', 'Rancangan Listrik Terapan ', 0),
(55, 'LT-2 REGULER', 'Mikrokontroller', 0),
(56, 'LT-2 PLN', 'Bahasa Inggris', 0),
(57, 'LT-2 PLN', 'Mikrokontroller', 0),
(58, 'LT-2 PLN', 'Mesin AC', 0),
(59, 'LT-2 PLN', 'Rancangan Proyek instalasi Listrik', 0),
(60, 'LT-2 PLN', 'Saluran Transmisi Tenaga Listrik', 0),
(61, 'LT-2 PLN', 'Sistem Kendali ', 0),
(62, 'EK-2 REGULER', 'Bahasa Inggris Teknik I', 0),
(63, 'EK-2 REGULER', 'Elektronika Analog III', 0),
(64, 'EK-2 REGULER', 'Mikrokontroller II', 0),
(65, 'EK-2 REGULER', 'Sistem Kendali Kontinyu II', 0),
(66, 'EK-2 REGULER', 'PLC II', 0),
(67, 'TK-2 REGULER', 'Statistik dan Probabilitas', 0),
(68, 'TK-2 REGULER', 'Manajemen Industri', 0),
(69, 'TK-2 REGULER', 'Bahasa Inggris II', 0),
(70, 'TK-2 REGULER', 'Kewirausahaan', 0),
(71, 'TK-2 REGULER', 'Pemrosesan Sinyal Video dan TV', 0),
(72, 'TK-2 REGULER', 'Pengolahan Sinyal Digital', 0),
(73, 'TK-2 REGULER', 'Antena dan Propagasi', 0),
(74, 'TE-2 REGULER (D4)', 'Matematika II', 0),
(75, 'TE-2 REGULER (D4)', 'Manajemen Industri', 0),
(76, 'TE-2 REGULER (D4)', 'Bahasa Inggris II', 0),
(77, 'TE-2 REGULER (D4)', 'Kewirausahaan', 0),
(78, 'TE-2 REGULER (D4)', 'Antena dan Propagasi', 0),
(79, 'TE-2 REGULER (D4)', 'Pemrosesan Sinyal Audio & Video', 0),
(80, 'IK-2 REGULER', 'Bahasa Inggris II', 0),
(81, 'IK-2 REGULER', 'Pemrograman Basisdata ', 0),
(82, 'IK-2 REGULER', 'Mikroprosesor & Antarmuka', 0),
(83, 'IK-2 REGULER', 'Jaringan Komputer II', 0),
(84, 'IK-2 REGULER', 'Pemrograman WEB Berbasis Framework', 0),
(85, 'IK-2 REGULER', 'Animasi dan Desain Grafis', 0),
(86, 'IK-2 REGULER', 'Bahasa Indonesia', 1),
(87, 'IK-2 REGULER', 'Perancangan Sistem Informasi', 0),
(88, 'LT-3 REGULER', 'B. Inggris Teknik IV', 0),
(89, 'LT-3 REGULER', 'Inst. Tegangan Menengah', 0),
(90, 'LT-3 REGULER', 'Kewirausahaan +  Etika Profesi ', 0),
(91, 'LT-3 REGULER', 'Otomasi Gedung & Industri', 0),
(92, 'LT-3 REGULER', 'Proteksi SistemTenaga', 0),
(93, 'LT-3 REGULER', 'Utilitas Indst & Komers', 0),
(94, 'EK-3 REGULER', 'Bahasa Inggris Teknik III', 0),
(95, 'EK-3 REGULER', 'Kewirausahaan', 0),
(96, 'EK-3 REGULER', 'K3 dan Hukum Ketenagakerjaan', 0),
(97, 'EK-3 REGULER', 'Etika Profesi', 0),
(98, 'EK-3 REGULER', 'Perawatan Perbaikan', 0),
(99, 'TK-3 REGULER', 'Sistem Komunikasi Satelit', 0),
(100, 'TK-3 REGULER', 'Sistem Komunikasi Bergerak', 0),
(101, 'TK-3 REGULER', 'Tek. Frek. Tinggi & Gelombang Mikro', 0),
(102, 'TK-3 REGULER', 'Manajemen Proyek', 0),
(103, 'TK-3 REGULER', 'Pendidikan Agama', 1),
(104, 'IK-3 REGULER', 'Bahasa Inggris IV', 0),
(105, 'IK-3 REGULER', 'Sistem Manajemen Mutu', 0),
(106, 'IK-3 REGULER', 'Manj. Internetworking & Router', 0),
(107, 'IK-3 REGULER', 'Kewirausahaan', 0),
(108, 'IK-3 REGULER', 'Sistem Informasi Enterprise', 0),
(109, 'IK-3 REGULER', 'K3, Hukum dan Etika Profesi', 0),
(110, 'IK-3 REGULER', 'Pemrograman Aplikasi Mobile', 0),
(111, 'TE-4A REGULER (D4)', 'Studi Kasus Jaringan Telekomunikasi', 0),
(112, 'TE-4A REGULER (D4)', 'Perancangan Jaringan Komputer', 0),
(113, 'TE-4A REGULER (D4)', 'Perancangan Pusat Data', 0),
(114, 'TE-4A REGULER (D4)', 'Jaringan Akses Nirkabel', 0),
(115, 'TE-4B REGULER (D4)', 'Studi Kasus Jaringan Broadcast', 0),
(116, 'TE-4B REGULER (D4)', 'Jaringan Akses Nirkabel', 0),
(117, 'TE-4B REGULER (D4)', 'Perancangan Jaringan Broadcast', 0),
(118, 'TE-4B REGULER (D4)', 'Studio dan Sistem Produksi TV II', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_prodi`
--

CREATE TABLE `daftar_prodi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_prodi`
--

INSERT INTO `daftar_prodi` (`id`, `nama`) VALUES
(1, 'Elektronika'),
(2, 'Informatika'),
(3, 'Listrik'),
(4, 'D3 Telekomunikasi'),
(5, 'D4 Telekomunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_ruangkls`
--

CREATE TABLE `daftar_ruangkls` (
  `no` int(3) NOT NULL,
  `kelas` varchar(22) DEFAULT NULL,
  `ruang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `daftar_ruangkls`
--

INSERT INTO `daftar_ruangkls` (`no`, `kelas`, `ruang`) VALUES
(1, 'LISTRIK  D3 REGULER', 'SB-I/08'),
(2, 'LISTRIK  D3 REGULER', 'SB-I/09'),
(3, 'LISTRIK  D3 REGULER', 'SB-II/01'),
(4, 'LISTRIK  D3 REGULER', 'SB-II/04'),
(5, 'LISTRIK  D3 REGULER', 'Lab. Barat'),
(6, 'LISTRIK  D3 REGULER', 'Lab. Timur'),
(7, 'LISTRIK  D3 REGULER', 'SA-II/04'),
(8, 'LISTRIK  D3 REGULER', 'SA-II/05'),
(9, 'LISTRIK  D3 PLN', 'SA-II/06'),
(10, 'LISTRIK  D3 PLN', 'SA-II/07'),
(11, 'LISTRIK  D3 PLN', 'Lab. Multimedia'),
(12, 'LISTRIK  D3 PLN', 'Lab. Bengkel Barat'),
(13, 'ELEKTRONIKA D3 REGULER', 'SA-II/01'),
(14, 'ELEKTRONIKA D3 REGULER', 'SA-II/03'),
(15, 'ELEKTRONIKA D3 REGULER', 'SA-II/08'),
(16, 'ELEKTRONIKA D3 REGULER', 'SA-II/09'),
(17, 'ELEKTRONIKA D3 REGULER', 'Lab. Digital'),
(18, 'ELEKTRONIKA D3 REGULER', 'Lab. Analog'),
(19, 'ELEKTRONIKA D3 REGULER', 'Lab. Kendali'),
(20, 'ELEKTRONIKA D3 REGULER', 'Lab. Instrumentasi'),
(21, 'TELKOM D3 REGULER', 'SB-I/01'),
(22, 'TELKOM D3 REGULER', 'SB-I/06'),
(23, 'TELKOM D3 REGULER', 'SB-I/03'),
(24, 'TELKOM D3 REGULER', 'SB-I/3A'),
(25, 'TELKOM D3 REGULER', 'Lab. Barat/03'),
(26, 'TELKOM D3 REGULER', 'Lab. Barat/04'),
(27, 'TELKOM D4 REGULER', 'Lab. Timur I/01'),
(28, 'TELKOM D4 REGULER', 'Lab. Timur II/01'),
(29, 'TELKOM D4 REGULER', 'Lab. Barat/01'),
(30, 'TELKOM D4 REGULER', 'Lab. Barat/02'),
(31, 'INFORMATIKA D3 REGULER', 'SB-II/06'),
(32, 'INFORMATIKA D3 REGULER', 'SB-II/05'),
(33, 'INFORMATIKA D3 REGULER', 'SB-II/02'),
(34, 'INFORMATIKA D3 REGULER', 'SB-II/03'),
(37, 'TELKOM D3 REG', 'MST CUYHH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_soal`
--

CREATE TABLE `daftar_soal` (
  `id_soal` int(3) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `mk` varchar(30) NOT NULL,
  `upload` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `no` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `no_kelas` int(11) NOT NULL,
  `no_mk` int(11) NOT NULL,
  `no_ruang` int(11) NOT NULL,
  `dosen_pengawas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `daftar_kelas`
--
ALTER TABLE `daftar_kelas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `daftar_mk`
--
ALTER TABLE `daftar_mk`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `daftar_prodi`
--
ALTER TABLE `daftar_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_ruangkls`
--
ALTER TABLE `daftar_ruangkls`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `daftar_soal`
--
ALTER TABLE `daftar_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`no`),
  ADD KEY `prodi` (`prodi`),
  ADD KEY `no_kelas` (`no_kelas`),
  ADD KEY `no_mk` (`no_mk`),
  ADD KEY `no_ruang` (`no_ruang`),
  ADD KEY `dosen_pengawas` (`dosen_pengawas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_kelas`
--
ALTER TABLE `daftar_kelas`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `daftar_mk`
--
ALTER TABLE `daftar_mk`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `daftar_prodi`
--
ALTER TABLE `daftar_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_ruangkls`
--
ALTER TABLE `daftar_ruangkls`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `daftar_soal`
--
ALTER TABLE `daftar_soal`
  MODIFY `id_soal` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`dosen_pengawas`) REFERENCES `daftar_dosen` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
