-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Nov 2020 pada 08.16
-- Versi server: 10.3.24-MariaDB-log-cll-lve
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wempytec_increase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', 'sintech@admin86', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `path_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `keterangan`, `path_foto`) VALUES
(1, 'Pemrograman', 'Divisi Pemrograman adalah Divisi yang mendalami di bidang pemrograman web, pemrograman robot, dan pemrograman aplikasi. Divisi ini mempelajari pemrograman HTML5, CSS3, PHP, JAVASCRIPT, C++ dan arduino', 'divisi1.jpg'),
(2, 'Aeromodelling', 'Divisi Aeromodelling adalah Divisi yang fokus dalam permasalahan aerodinamika dalama pembuatan pesawat, dalam divisi ini lebih mengutamakan dalam pengetahuan dan keterampilan tentang membuat dan penerbangan pesawat.\r\n', 'divisi2.jpg'),
(3, 'Civil', 'Divisi Civil adalah Divisi yang yang mempelajari tentang bagaimana merancang, membangun, merenovasi tidak hanya gedung dan infrastruktur, tetapi juga mencakup lingkungan untuk kemaslahatan hidup manusia.', 'divisi3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(64) NOT NULL,
  `status` enum('10','11') NOT NULL,
  `divisi_pilihan` int(11) NOT NULL,
  `waktu_memilih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `nama`, `kelas`, `status`, `divisi_pilihan`, `waktu_memilih`) VALUES
(18, 'ALIEF WAHYU UTOMO', 'XI IPA 7', '11', 1, '2020-10-15 02:37:30'),
(19, 'SEPTYAN YAUMUL FATKHAN', 'X IPA 5', '10', 1, '2020-10-15 06:35:33'),
(20, 'MUHAMMAD RAFLI ADITYA PRATAMA', 'X IPA 5', '10', 1, '2020-10-15 06:35:34'),
(21, 'PRIAGUNG RAMADHAN ALFALAKHI', 'XI IPA 5', '11', 1, '2020-10-15 06:35:54'),
(22, 'OLIVIO LEOARTHA', 'X IPA 4', '10', 1, '2020-10-15 06:36:55'),
(23, 'EVAN NATHANIEL SUSANTO', 'X IPA 3', '10', 1, '2020-10-15 06:37:04'),
(24, 'NABILA ANDHARA', 'X IPA 7', '10', 1, '2020-10-15 06:37:11'),
(25, 'MUKHAMAD NABILA PRATAMA', 'XI IPA 2', '11', 3, '2020-10-15 06:37:14'),
(26, 'FARHAN ADYANSAH', 'XI IPA 1', '11', 1, '2020-10-15 06:37:26'),
(27, 'ZAHRA CAYLA NOVIASYAFITRI', 'X IPS 3', '10', 1, '2020-10-15 06:38:53'),
(28, 'BONAVENTURA SATYA HERNANDA', 'X IPA 1', '10', 1, '2020-10-15 06:43:10'),
(29, 'SITI AYU NURLITA', 'X IPA 6', '10', 2, '2020-10-15 06:43:29'),
(30, 'DIANDRA NAUFAL ABROR', 'X IPA 2', '10', 3, '2020-10-15 06:44:40'),
(31, 'AURELIA EKA SUKMA NINGRUM ', 'X IPA 7', '10', 1, '2020-10-15 06:46:59'),
(32, 'RAIHANAH FARADILLA A', 'X IPA 7', '10', 1, '2020-10-15 06:49:08'),
(33, 'ATHAYA DEVIN ARGYADAMA', 'X IPA 1', '10', 1, '2020-10-15 06:50:59'),
(34, 'NADIA ALZENA ZAHRANI', 'X IPA 7', '10', 2, '2020-10-15 06:51:38'),
(35, 'FERRO LEONARDO', 'X IPA 2', '10', 1, '2020-10-15 06:52:52'),
(36, 'NURIL HIDAYAT SAPUTRA', 'X IPA 5', '10', 3, '2020-10-15 06:58:28'),
(37, 'DEA FITRI ANISA WAYIDI', 'X IPA 2', '10', 1, '2020-10-15 06:59:22'),
(38, 'DEWI SETYOWARDHINI', 'X IPA 1', '10', 1, '2020-10-15 07:00:56'),
(39, 'MUHAMMAD MAHMUDIN ', 'X IPA 3', '10', 1, '2020-10-15 07:05:36'),
(40, 'JUNIAS DAFA JUNIOR', 'X IPA 4', '10', 2, '2020-10-15 07:06:56'),
(41, 'ALIYA RAMADHANI KURNIA WAHYUDI', 'X IPA 1', '10', 2, '2020-10-15 07:18:19'),
(42, 'AMRULLAH ALAM ALMAUDUDI ', 'X IPA 6', '10', 2, '2020-10-15 07:25:09'),
(43, 'AHMAD NAUFAL ARKHAN', 'X IPA 4', '10', 2, '2020-10-15 07:29:24'),
(44, 'AHMAD LAZIM', 'X IPA 3', '10', 1, '2020-10-15 07:33:46'),
(45, 'IRENA DINAR VANIA SASIKIRANA', 'X IPA 4', '10', 1, '2020-10-15 07:37:17'),
(46, 'ANDHIKA ABDILAH PRASETYO', 'X IPA 3', '10', 1, '2020-10-15 07:42:07'),
(47, 'SEKAR AYU MAHARANI', 'X IPA 2', '10', 1, '2020-10-15 08:13:48'),
(48, 'MUHAMMAD FAHREZA ROHMANSYAH', 'X IPA 3', '10', 1, '2020-10-15 08:17:20'),
(49, 'ICHLASUL AMAL AL ULIL HAQ', 'X IPA 7', '10', 2, '2020-10-15 08:18:15'),
(50, 'IEDO ELFAIZ ABRAR', 'X IPA 6', '10', 1, '2020-10-15 08:21:44'),
(51, 'NADIA CALLYSTA INDURASMI ', 'X IPA 1', '10', 1, '2020-10-15 08:54:39'),
(52, 'NANDA AHMAD ZIDAN', 'X IPA 7', '10', 1, '2020-10-15 09:06:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id_token` int(11) NOT NULL,
  `no_token` varchar(64) NOT NULL,
  `keterangan` varchar(64) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `token`
--

INSERT INTO `token` (`id_token`, `no_token`, `keterangan`, `status`) VALUES
(1, '68231018', '10', 'nonaktif'),
(2, '31241911', '11', 'nonaktif'),
(3, '00000012', '12', 'nonaktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
