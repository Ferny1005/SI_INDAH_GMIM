-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 05:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gereja_gmim`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_bank`
--

CREATE TABLE `buku_bank` (
  `id_bank` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `setoran` int(50) NOT NULL,
  `penarikan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_bank`
--

INSERT INTO `buku_bank` (`id_bank`, `tgl`, `nomor`, `uraian`, `setoran`, `penarikan`) VALUES
(1, '2022-10-10', '12', 'asa', 123, 134),
(2, '0000-00-00', '1', 'AKU', 12222, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(11) NOT NULL,
  `no_inven` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `keadaan_baik` int(5) NOT NULL,
  `keadaan_sedang` int(5) NOT NULL,
  `keadaan_rusak` int(5) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id`, `no_inven`, `tanggal`, `jenis`, `satuan`, `harga`, `keadaan_baik`, `keadaan_sedang`, `keadaan_rusak`, `lokasi`, `keterangan`) VALUES
(1, '', '2022-07-12', 'Meja', 'Pcs', 23000, 1, 2, 3, 'Gereja', 'perlu ditambah');

-- --------------------------------------------------------

--
-- Table structure for table `inven_tanah`
--

CREATE TABLE `inven_tanah` (
  `id` int(5) NOT NULL,
  `letak` varchar(50) NOT NULL,
  `letak_lembaga` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `olah` varchar(50) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `penggunaan` varchar(50) NOT NULL,
  `pencatatan` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inven_tanah`
--

INSERT INTO `inven_tanah` (`id`, `letak`, `letak_lembaga`, `status`, `luas`, `olah`, `bukti`, `penggunaan`, `pencatatan`, `nis`, `keterangan`) VALUES
(3, 'TATELU', '-', 'SEWA', '12 M', 'Penatua', '-', '-', '-', '-', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `kas_umum`
--

CREATE TABLE `kas_umum` (
  `id_kas` int(10) NOT NULL,
  `no_ma` varchar(20) NOT NULL,
  `no_bukti` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `masuk` int(20) NOT NULL,
  `keluar` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `id_kolom` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kas_umum`
--

INSERT INTO `kas_umum` (`id_kas`, `no_ma`, `no_bukti`, `keterangan`, `masuk`, `keluar`, `tgl`, `id_kolom`) VALUES
(13, '1.0.00.00', 'BKM 542', 'PERSEMBAHAN IBADAH HUT LAHIR KOLOM 1', 40000, 0, '2022-07-08', 1),
(14, '1.0.00.00', 'BKK 414', 'TUNJANGAN FUNGSIONAL KETJEM BULAN AGUSTUS 2022', 0, 6000000, '2022-08-14', 2),
(16, '1.0.00.00', '123', 'Data', 123000, 0, '2022-10-12', 1),
(17, '1.0.00.00', '123333', 'Data Asalan', 15661, 0, '2022-10-13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kolom`
--

CREATE TABLE `kolom` (
  `id_kolom` int(2) NOT NULL,
  `nama_kolom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kolom`
--

INSERT INTO `kolom` (`id_kolom`, `nama_kolom`) VALUES
(1, 'Kolom 1'),
(2, 'Kolom 2');

-- --------------------------------------------------------

--
-- Table structure for table `ma_belanja`
--

CREATE TABLE `ma_belanja` (
  `id` int(5) NOT NULL,
  `no_ma` varchar(20) NOT NULL,
  `ma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ma_belanja`
--

INSERT INTO `ma_belanja` (`id`, `no_ma`, `ma`) VALUES
(1, '1.0.00.00', 'KEESAAN / PERSEKUTUAN (KOINONIA)'),
(2, '1.1.00.00', 'SENTRALISASI KE SINODE'),
(3, '1.2.00.00', 'SENTRALISASI KE WILAYAH'),
(4, '1.3.00.00', 'REALISASI DALAM JEMAAT'),
(5, '1.3.01.00', 'Komisi Pelayanan KATEGORIAL'),
(6, '1.3.01.01', 'Pria / Kaum Bapa'),
(8, '1.3.01.02', 'Wanita / Kaum Ibu'),
(9, '1.3.01.03', 'Pemuda'),
(10, '1.3.01.04', 'Remaja'),
(11, '1.3.01.05', 'Anak'),
(12, '1.3.02.00', 'Gaji / Tunjangan Pekerja Gereja'),
(13, '1.3.02.01', 'Tunjangan Fungsional Ketua Jemaat'),
(14, '1.3.02.02', 'Tunjangan Fungsional Pendeta Jemaat'),
(15, '1.3.02.03', 'Tunjangan Fungsional Guru Agama'),
(16, '1.3.02.04', 'Gaji Pegawai Tata Usaha'),
(17, '1.3.02.05', 'Honor Kostor'),
(18, '1.3.02.06', 'Honor Vikaris Pendeta'),
(19, '1.3.03.00', 'Tunjangan Struktural Ketua Badan Pekerja Majelis J'),
(20, '1.3.03.01', 'Ketua BPMJ'),
(21, '1.3.04.00', 'Tunjangan Hari Raya Pekerja Gereja'),
(22, '1.3.04.01', 'Ketua BPMJ'),
(23, '1.3.04.02', 'Pendeta Jemaat / Vicaris Pendeta'),
(24, '1.3.04.03', 'Guru Agama'),
(25, '1.3.04.04', 'Pegawai Tata Usaha'),
(26, '1.3.04.05', 'Kostor'),
(27, '1.3.05.00', 'Biaya Khadim'),
(28, '1.3.05.01', 'Khadim Jemaat'),
(29, '1.3.05.02', 'Khadim Wilayah'),
(30, '1.3.05.03', 'Khadim Sinode'),
(31, '1.3.05.04', 'Khadim Ibadah Hari Raya'),
(32, '1.3.05.05', 'Khadim Baptisan, Sidi,Perjamuan, Pernikahan'),
(33, '1.3.05.06', 'Khadim Khusus'),
(34, '1.3.05.07', 'Khadim Natura'),
(35, '1.3.06.00', 'Pemain Musik'),
(36, '1.3.06.01', 'Pemain Keyboard Ibadah Hari Minggu'),
(37, '1.3.06.02', 'Tim Musik / Kelompok Nyanyi Ibadah Hari Raya'),
(38, '1.3.06.03', 'Pemain Keyboard Ibadah Hari Khusus'),
(39, '1.3.06.04', 'Tim Pelayanan Ibadah Natura'),
(40, '1.3.07.00', 'Biaya Kelengkapan Kantor / Ibadah'),
(41, '1.3.07.01', 'Liturgi / Pengadaan Materi / Surat / Foto Copy'),
(42, '1.3.07.02', 'Pundi, Stola, Kain MImbar, Lilin, dll.'),
(43, '1.3.07.03', 'Sampul-Sampul (Syukur / HUT / Persepuluhan, dll)'),
(44, '1.3.07.04', 'Biaya Roti dan Anggur Perjamuan'),
(45, '1.3.07.05', 'Alat / Perlengkapan Kantor (Kertas, Tinta, dll)'),
(46, '1.3.07.06', 'Konsumsi Ringan di Kantor Jemaat'),
(47, '1.3.08.00', 'Pengadaan Bacaan'),
(48, '1.3.08.01', 'Bina Ibu (Upus Ni Mama)'),
(49, '1.3.08.02', 'Bina Bapak (Pelita)'),
(50, '1.3.08.03', 'Bina Pemuda'),
(51, '1.3.08.04', 'Bina Remaja'),
(52, '1.3.08.05', 'Bina Anak'),
(53, '1.3.08.06', 'M T P J'),
(54, '1.3.08.07', 'R H K'),
(55, '1.3.08.08', 'Koran, Majalah / Dodoku'),
(56, '1.3.09.00', 'Biaya Rapat / Konsultasi / Konven'),
(57, '1.3.09.01', 'Konsumsi Rapat Kerja BPMJ'),
(58, '1.3.09.02', 'Konsumsi Sidang Majelis Jemaat'),
(59, '1.3.09.03', 'Konsumsi Sidang Tahunan'),
(60, '1.3.09.04', 'Rapat Sidi Jemaat'),
(61, '1.3.09.05', 'Konsultasi dengan BPW / Sinode'),
(62, '1.3.09.06', 'Sidang Majelis Sinode Tahunan (SMST)'),
(63, '1.3.09.07', 'Sidang Majelis Sinode (SMS / SMSI)'),
(64, '1.3.09.08', 'Sidang Tahunan Wilayah'),
(65, '1.3.09.09', 'Rapat Kerja Wilayah'),
(66, '1.3.09.10', 'Rapat Kerja Ketua-Ketua Jemaat Se Sinode'),
(67, '1.3.09.11', 'Rapat Kerja KSB se-Sinode'),
(68, '1.3.09.12', 'Konven Komisi Kerja / Wilayah Sinode'),
(69, '1.3.09.13', 'Konven Pendeta dan Guru Agama'),
(70, '1.3.09.14', 'Konven Penatua dan Syamas Wilayah / Sinode'),
(71, '1.3.09.15', 'Konven Kostor'),
(72, '1.3.10.00', 'Biaya Pembekalan / Pelatihan'),
(73, '1.3.10.01', 'Pembekalan Pelayan Khusus'),
(74, '1.3.10.02', 'Pembekalan Komisi Kerja'),
(75, '1.3.10.03', 'Pembekalan Perbendaharaan'),
(76, '1.3.10.04', 'Pembekalan Anggota Jemaat'),
(77, '1.3.10.05', 'Katekisasi Calon Sidi Jemaat'),
(78, '1.3.11.00', 'Rekening-Rekening'),
(79, '1.3.11.01', 'Listrik'),
(80, '1.3.11.02', 'Air Minum (PAM)'),
(81, '1.3.11.03', 'Telepon'),
(82, '1.3.12.00', 'Transportasi'),
(83, '1.3.12.01', 'BBM'),
(84, '1.3.12.02', 'Sewa Kendaraan'),
(85, '1.3.12.03', 'Perjalanan Dinas (Tiket, Airport Tax, Akomodasi, U'),
(86, '1.3.13.00', 'Perawatan / Pemeliharaan Inventaris'),
(87, '1.3.13.01', 'Onderdil / Servis / Oli Kendaraan'),
(88, '1.3.13.02', 'Surat Kendaraan (STNK / Pajak)'),
(89, '1.3.13.03', 'Surat Tanah / Bangunan (Sertifikat, Akta, IMB, PBB'),
(90, '1.3.13.04', 'Perbaikan Peralatan / Perlengkapan Inventaris'),
(91, '1.3.13.05', 'Perbaikan / Pemeliharaan Bangunan'),
(92, '1.3.14.00', 'Pengawasan / Pemeriksaan'),
(93, '1.3.14.01', 'Biaya Pelayanan KPPJ'),
(94, '1.3.14.02', 'Biaya Pelayanan KPPW / KPPS'),
(95, '1.3.15.00', 'Biaya Pelaksanaan Pemilihan Pelsus'),
(96, '2.0.00.00', 'KESAKSIAN DAN KERJASAMA (MARTURIA)'),
(97, '2.1.01.00', 'Kegiatan KPDP'),
(98, '2.1.01.01', 'Kebaktian Penyegaran Iman (KPI)'),
(99, '2.1.01.02', 'Pekabaran Injil Keluar'),
(100, '2.1.01.03', 'Biaya Perkunjungan Pelayanan'),
(101, '2.1.02.00', 'Hubungan Kerjasama'),
(102, '2.1.02.01', 'Tenaga Utusan Gerejawi'),
(103, '2.1.02.02', 'Kemitraan / Jemaat Mitra'),
(104, '2.1.02.03', 'Kerjasama dengan Jemaat / Lembaga / Gereja Lain'),
(105, '3.0.00.00', 'DIAKONIA'),
(106, '3.1.01.00', 'Kesehatan'),
(107, '3.1.01.01', 'Dana Sehat Keluarga Pekerja GMIM di Jemaat'),
(108, '3.1.01.02', 'Dana Sehat Keluarga Pendeta / Guru Agama Non Peker'),
(109, '3.1.01.03', 'Dana Sehat Pelayan Khusus Non Pendeta / Guru Agama'),
(110, '3.1.01.04', 'Dana Sehat Anggota Jemaat'),
(111, '3.1.02.00', 'Pendidikan'),
(112, '3.1.02.01', 'Tunjangan / Honor Guru'),
(113, '3.1.02.02', 'Honor Penjaga Sekolah'),
(114, '3.1.02.03', 'Biaya Operasional Sekolah'),
(115, '3.1.02.04', 'Beasiswa Pendidikan Anggota Jemaat'),
(116, '3.1.02.05', 'Beasiswa Pendidikan Non Anggota Jemaat'),
(117, '3.1.03.00', 'Diakonia Duka'),
(118, '3.1.03.01', 'Dana Duka'),
(119, '3.1.03.02', 'Karangan Bunga Kedukaan'),
(120, '3.1.04.00', 'Bantuan Bencana Alam'),
(121, '3.1.05.00', 'Diakonia Hasil Ibadah Natura'),
(122, '3.1.06.00', 'Puasa Diakonal'),
(123, '3.1.07.00', 'Pemupukan Dana Abadi'),
(124, '4.0.00.00', 'PEMBANGUNAN / INVENTARIS GEREJA'),
(125, '4.1.01.00', 'Pembelian / Pengadaan Perlengkapan dan Peralatan'),
(126, '4.1.01.01', 'Gedung Gereja (Kursi / Bangku, Mimbar, Meja, Lemar'),
(127, '4.1.01.02', 'Aula (Kursi, Meja, Sound System, dll)'),
(128, '4.1.01.03', 'Kantor / Konsistori (Kursi, Meja, Lemari, Komputer'),
(129, '4.1.01.04', 'Pastori (Kursi, Meja, Lemari, Tempat Tidur, dll)'),
(130, '4.1.02.00', 'Pengadaan Kendaraan (Sepeda, Sepeda Motor, Mobil, '),
(131, '4.1.03.00', 'Pembangunan Gedung, Kantor / Konsistori, Pastori G'),
(132, '4.1.04.00', 'Pembangunan Gedung / Perlengkapan Sekolah'),
(133, '4.1.05.00', 'Pengadaan Kintal'),
(134, '4.1.06.00', 'Sewa Kontrak Bangunan'),
(135, '4.1.07.00', 'Pengadaan Tenda'),
(136, '5.0.00.00', 'PENGELUARAN LAINNYA'),
(137, '5.1.01.00', 'Biaya Tamu Gereja'),
(138, '5.1.02.00', 'Biaya Lembur'),
(139, '5.1.03.00', 'Biaya Administrasi Bank'),
(140, '5.1.04.00', 'Biaya Lain-Lain'),
(141, '6.0.00.00', 'DANA TRANSIT'),
(142, '6.1.01.00', 'Penyaluran Pundi Extra'),
(143, '6.1.01.01', 'Pundi Extra untuk SMS / SMST'),
(144, '6.1.01.02', 'Pundi Extra untuk Kegiatan Wilayah'),
(145, '6.1.01.03', 'Pundi Extra untuk Kegiatan Lainnya'),
(146, '6.1.02.00', 'Penyaluran Kartu Partisipasi / Mapalus'),
(147, '6.1.02.01', 'Kartu Kawan Panitia SMS / SMST'),
(148, '6.1.02.02', 'Kartu Kawan untuk Kegiatan Khusus Lainnya'),
(149, '6.1.03.00', 'Penyaluran Dana-Dana Kegiatan Sinodal Lainnya ');

-- --------------------------------------------------------

--
-- Table structure for table `ma_pendapatan`
--

CREATE TABLE `ma_pendapatan` (
  `id` int(5) NOT NULL,
  `no_ma` varchar(20) NOT NULL,
  `ma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ma_pendapatan`
--

INSERT INTO `ma_pendapatan` (`id`, `no_ma`, `ma`) VALUES
(1, '1.0.00.00', 'KEESAAN / PERSEKUTUAN (KOINONIA)'),
(2, '1.3.50.00', 'PERSEMBAHAN IBADAH MINGGU'),
(3, '1.3.50.01', 'Fajar'),
(4, '1.3.50.02', 'Pagi'),
(5, '1.3.50.03', 'Malam'),
(9, '1.3.51.00', 'PERSEMBAHAN PERSEPULUHAN'),
(10, '1.3.52.00', 'PERSEMBAHAN PBTK'),
(11, '1.3.01.00', 'PERSEMBAHAN IBADAH KOMPELKA BIPRA'),
(12, '1.3.01.01', 'Pria / Kaum Bapa Jemaat'),
(13, '1.3.01.02', 'Wanita / Kaum Ibu Jemaat'),
(14, '1.3.01.03', 'Pemuda Jemaat'),
(15, '1.3.01.04', 'Remaja Jemaat'),
(16, '1.3.01.05', 'Anak Sekolah Minggu'),
(17, '1.3.01.06', 'Pondok Gembira Anak Sekolah Minggu'),
(18, '1.3.01.07', 'Guru-Guru Sekolah Minggu'),
(19, '1.3.53.00', 'PERSEMBAHAN IBADAH KOLOM'),
(20, '1.3.53.01', 'Persembahan Ibadah Jemaat'),
(21, '1.3.53.02', 'Persembahan Ibadah Pria / Kaum Bapa'),
(22, '1.3.53.03', 'Persembahan Ibadah Wanita / Kaum Ibu'),
(23, '1.3.53.04', 'Persembahan Ibadah Pemuda'),
(24, '1.3.53.05', 'Persembahan Ibadah Remaja'),
(25, '1.3.53.06', 'Persembahan Ibadah Anak / Sekolah MInggu'),
(26, '1.3.53.07.00', 'PERSEMBAHAN IBADAH KELUARGA'),
(27, '1.3.53.07.01', 'Ibadah Syukur HUT Kelahiran'),
(28, '1.3.53.07.02', 'Ibadah Syukur HUT Pernikahan'),
(29, '1.3.53.07.03', 'Ibadah Syukur Keluarga Lainnya'),
(30, '1.3.53.08', 'Ibadah Pengucapan Syukur Kolom'),
(31, '1.3.54.00', 'PERSEMBAHAN IBADAH HARI RAYA'),
(32, '1.3.54.01', 'Persembahan Ibadah Tahun Baru I'),
(33, '1.3.54.02', 'Persembahan Ibadah Tahun Baru II'),
(34, '1.3.54.03', 'Persembahan Ibadah Jumat Agung'),
(35, '1.3.54.04', 'Persembahan Ibadah Paskah I'),
(36, '1.3.54.05', 'Persembahan Ibadah Paskah II'),
(37, '1.3.54.06', 'Persembahan Ibadah Hari Kenaikan'),
(38, '1.3.54.07', 'Persembahan Ibadah Hari Pentakosta'),
(39, '1.3.54.08', 'Persembahan Ibadah Hari Natal'),
(40, '1.3.54.09', 'Persembahan Ibadah Hari Natal II'),
(41, '1.3.54.10', 'Persembahan Ibadah Akhir Tahun'),
(42, '1.3.55.00', 'Persembahan Ibadah Perjamuan Kudus'),
(43, '1.3.55.01', 'Perjamuan Kudus Jumat Agung'),
(44, '1.3.55.02', 'Perjamuan Kudus Tengah Tahun'),
(45, '1.3.55.03', 'Perjamuan Kudus Sedunia'),
(46, '1.3.55.04', 'Perjamuan Kudus Akhir Tahun'),
(47, '1.3.56.00', 'Persembahan Minggu Pertama Januari'),
(48, '1.3.57.00', 'Persembahan Ibadah Pengucapan Syukur Jemaat'),
(49, '1.3.58.00', 'Pers. Ibadah Peneguhan dan Pemberkatan Nikah'),
(50, '1.3.59.00', 'Persembahan Ibadah Katekisasi'),
(51, '1.3.60.00', 'Persembahan Ibadah PA/Konven Pelayan Khusus'),
(52, '1.3.61.00', 'Persembahan Ibadah Sidang Majelis Jemaat'),
(53, '1.3.62.00', 'Persembahan Ibadah Organisasi/Rukun'),
(54, '1.3.63.00', 'Persembahan Ibadah Komisi Gereja'),
(55, '1.3.64.00', 'PERSEMBAHAN IBADAH HUT'),
(56, '1.3.64.01', 'Persembahan Ibadah HUT PI & Pendidikan Kristen'),
(57, '1.3.64.02', 'Persembahan HUT GMIM Bersinode'),
(58, '1.3.64.03', 'Persembahan HUT Jemaat'),
(59, '1.3.64.04', 'Persembahan HUT Pria/Kaum Bapa'),
(60, '1.3.64.05', 'Persembahan HUT Wanita/Kaum Ibu'),
(61, '1.3.64.06', 'Persembahan HUT Pemuda'),
(62, '1.3.64.07', 'Persembahan HUT Remaja'),
(63, '1.3.64.08', 'Persembahan HUT ASM/GSM'),
(64, '1.3.65.00', 'PERSEMBAHAN IBADAH MENYAMBUT NATAL'),
(65, '1.3.65.01', 'Pers. Ibadah Menyambut Natal Kolom'),
(66, '1.3.65.02', 'Pers. Ibadah Menyambut Natal Keluarga'),
(67, '1.3.65.03', 'Pers. Ibadah Menyambut Natal Jemaat'),
(68, '1.3.65.04', 'Pers. Ibadah Menyambut Natal Pria / Kaum Bapa'),
(69, '1.3.65.05', 'Pers. Ibadah Menyambut Natal Wanita / Kaum Ibu'),
(70, '1.3.65.06', 'Pers. Ibadah Menyambut Natal Pemuda'),
(71, '1.3.65.07', 'Pers. Ibadah Menyambut Natal Remaja'),
(72, '1.3.65.08', 'Pers. Ibadah Menyambut Natal ASM'),
(79, '1.3.65.09', 'Pers. Ibadah Menyambut Natal GSM'),
(80, '1.3.65.10', 'Pers. Ibadah Menyambut Natal Pelayan Khusus'),
(81, '1.3.65.11', 'Pers. Ibadah Menyambut Natal Organisasi / Rukun'),
(82, '1.3.66.00', 'SAMPUL-SAMPUL '),
(83, '1.3.66.01', 'Sampul Syukur HUT Kelahiran'),
(84, '1.3.66.02', 'Sampul Syukur HUT Pernikahan'),
(85, '1.3.66.03', 'Sampul Syukur Pemberkatan/Peneguhan Nikah'),
(86, '1.3.66.04', 'Sampul Syukur Baptisan Kudus'),
(87, '1.3.66.05', 'Sampul Syukur Perjamuan Kudus'),
(88, '1.3.66.06', 'Sampul Syukur Peneguhan Sidi'),
(89, '1.3.66.07', 'Sampul Syukur Tahun Baru'),
(90, '1.3.66.08', 'Sampul Syukur Paskah'),
(91, '1.3.66.09', 'Sampul Syukur HUT PI dan Pendidikan Kristen GMIM'),
(92, '1.3.66.10', 'Sampul Syukur HUT GMIM Bersinode'),
(93, '1.3.66.11', 'Sampul Syukur Natal'),
(94, '1.3.66.12', 'Sampul Pengucapan Syukur'),
(95, '1.3.66.13', 'Sampul Syukur Lainnya'),
(96, '1.3.80.00', 'USAHA-USAHA'),
(97, '1.3.80.01', 'Usaha Komisi Pengembangan Sumber Daya (PSD)'),
(98, '1.3.80.02', 'Usaha Komisi Kerja Lainnya'),
(99, '1.3.80.03', 'Hasil Penyewaan Aula, Kursi dll'),
(100, '2.0.00.00', 'KESAKSIAN DAN KERJASAMA (MARTURIA)'),
(101, '2.3.01.00', 'Usaha Komisi KPDP'),
(102, '2.3.01.01', 'Persembahan Ibadah KPI'),
(103, '2.3.50.00', 'PERSEMBAHAN IBADAH KHUSUS'),
(104, '2.3.50.01', 'Persembahan Ibadah HUT Kemerdekaan RI'),
(105, '2.3.50.02', 'Persembahan Ibadah HUT GPI'),
(106, '2.3.50.03', 'Persembahan Ibadah HUT Sinode Am Suluteng'),
(107, '2.3.50.04', 'Persembahan Ibadah HUT PGI / Hari Oikumene'),
(108, '2.3.50.05', 'Persembahan Ibadah Hari Alkitab'),
(109, '2.3.50.06', 'Persembahan Ibadah Hari Doa Sedunia'),
(110, '3.0.00.00', 'DIAKONIA'),
(111, '3.3.01.00', 'Kesehatan'),
(112, '3.3.01.50', 'Usaha Komisi Kesehatan Jemaat'),
(113, '3.3.01.60', 'Iuran Dana Sehat Anggota Jemaat'),
(114, '3.3.02.00', 'Pendidikan'),
(115, '3.3.02.50', 'Usaha Komisi Pendidikan'),
(116, '3.3.03.01', 'Dana Duka'),
(117, '3.3.04.00', 'Dana Bencana Alam'),
(118, '3.3.05.00', 'Persembahan Ibadah Natura'),
(119, '3.3.06.00', 'Persembahan Puasa Diakonal'),
(120, '4.0.00.00', 'DANA PEMBANGUNAN'),
(121, '4.3.60.00', 'Usaha Komisi / Panitia Pembangunan'),
(122, '4.3.61.00', 'Hasil Penggalangan Dana Pembangunan Kolom'),
(123, '4.3.62.00', 'Hasil Penggalangan Dana Pembangunan BPMJ'),
(124, '4.3.63.00', 'Sumbangan Bantuan Khusus untuk Pembangunan dari Pe'),
(125, '4.3.64.00', 'Sampul Pembangunan'),
(126, '5.0.00.00', 'PENDAPATAN LAINNYA'),
(127, '5.3.60.00', 'Partisipasi / Sumbangan'),
(128, '5.3.60.01', 'Gereja & Lembaga Kristen (Dalam dan Luar Negeri)'),
(129, '5.3.60.02', 'Pemerintah'),
(130, '5.3.60.03', 'Swasta'),
(131, '5.3.70.00', 'Usaha BPMJ'),
(132, '5.3.80.00', 'Jasa Bank'),
(133, '5.3.90.00', 'Pendapatan Lain-Lain'),
(134, '6.0.00.00', 'DANA TRANSIT'),
(135, '6.3.50.00', 'Pundi Extra'),
(136, '6.3.50.01', 'Pundi Extra untuk SMS / SMST'),
(137, '6.3.50.02', 'Pundi Extra untuk Kegiatan Wilayah'),
(138, '6.3.50.03', 'Pundi Extra untuk Kegiatan Lainnya'),
(139, '6.3.51.00', 'Kartu Partisipasi / Mapalus'),
(140, '6.3.51.01', 'Kartu Kawan Panitia SMS / SMST'),
(141, '6.3.51.02', 'Kartu Kawan untuk Kegiatan Khusus Lainnya'),
(142, '6.3.52.00', 'Dana-Dana Kegiatan Sinodal Lainnya'),
(149, '-', 'SALDO AWAL');

-- --------------------------------------------------------

--
-- Table structure for table `pelsus`
--

CREATE TABLE `pelsus` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelsus`
--

INSERT INTO `pelsus` (`id`, `nama`, `jabatan`) VALUES
(1, 'Pdt. Vonny Clara Putong. MTh', 'Ketua Jemaat'),
(2, 'Pnt. Meikel Wonua', 'Wakil Ketua'),
(3, 'Pnt. Dharma Daud Kaunang, SPd', 'Sekretaris'),
(4, 'Dkn. Lucky Yulien Putong, SE', ' Bendahara'),
(5, 'Pnt. Ir. Dolly Rumeen', 'Anggota'),
(6, 'Pdt. Yolanda Komimbing, STh', 'Pendeta Jemaat'),
(7, 'Pnt. Meice Urusale', 'Penatua Kolom 1'),
(8, 'Dkn. Pemsy Longdong ', 'Diaken Kolom 1'),
(9, 'Pnt. Meity Rumagit, SPd', 'Penatua Kolom 2'),
(10, 'Dkn. Mice Dame ', 'Diaken Kolom 2'),
(11, 'Pnt. Noldy Wuisan', 'Penatua Kolom 3'),
(12, 'Dkn. Fendy Tumbelaka', 'Diaken Kolom 3'),
(13, 'Pnt. Jokebet Budiman', 'Penatua Kolom 4'),
(14, 'Dkn. Jackson Timbuleng', 'Diaken Kolom 4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(2, 'indy', 'indy', 'indy', 'User'),
(3, 'Bendahara', 'bend', 'bend', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_bank`
--
ALTER TABLE `buku_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inven_tanah`
--
ALTER TABLE `inven_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas_umum`
--
ALTER TABLE `kas_umum`
  ADD PRIMARY KEY (`id_kas`),
  ADD KEY `id_kolom` (`id_kolom`);

--
-- Indexes for table `kolom`
--
ALTER TABLE `kolom`
  ADD PRIMARY KEY (`id_kolom`);

--
-- Indexes for table `ma_belanja`
--
ALTER TABLE `ma_belanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ma_pendapatan`
--
ALTER TABLE `ma_pendapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelsus`
--
ALTER TABLE `pelsus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_bank`
--
ALTER TABLE `buku_bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inven_tanah`
--
ALTER TABLE `inven_tanah`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kas_umum`
--
ALTER TABLE `kas_umum`
  MODIFY `id_kas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kolom`
--
ALTER TABLE `kolom`
  MODIFY `id_kolom` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ma_belanja`
--
ALTER TABLE `ma_belanja`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `ma_pendapatan`
--
ALTER TABLE `ma_pendapatan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `pelsus`
--
ALTER TABLE `pelsus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kas_umum`
--
ALTER TABLE `kas_umum`
  ADD CONSTRAINT `kas_umum_ibfk_1` FOREIGN KEY (`id_kolom`) REFERENCES `kolom` (`id_kolom`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
