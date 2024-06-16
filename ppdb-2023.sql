-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 06:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb-2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id_siswa` int(11) NOT NULL,
  `tgl_pendaftaran` varchar(50) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL,
  `kompetensi_keahlian_2` varchar(50) NOT NULL,
  `nisn_siswa` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_siswa` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `no_wa_siswa` varchar(15) NOT NULL,
  `nama_org_tua` varchar(100) NOT NULL,
  `no_wa_org_tua` varchar(100) NOT NULL,
  `status_berkas` varchar(20) NOT NULL,
  `status_tes_akademik` varchar(15) NOT NULL,
  `status_tes_wawancara` varchar(15) NOT NULL,
  `note_tes_wawancara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id_siswa`, `tgl_pendaftaran`, `kompetensi_keahlian`, `kompetensi_keahlian_2`, `nisn_siswa`, `password`, `status_siswa`, `nama_siswa`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `no_wa_siswa`, `nama_org_tua`, `no_wa_org_tua`, `status_berkas`, `status_tes_akademik`, `status_tes_wawancara`, `note_tes_wawancara`) VALUES
(15, '21-05-2023', 'Otomatisasi dan Tata Kelola Perkantoran', 'Teknik Pemesinan', '50', 'c0c7c76d30bd3dcaefc96f40275bdc0a', 'siswa', 'Cillum quidem et vel', 'Perspiciatis numqua', 'Atque cupiditate con', '1', '85', 'Qui ut et et sunt', 'Quia consectetur el', '', '', '', ''),
(16, '21-05-2023', 'Otomatisasi dan Tata Kelola Perkantoran', 'Teknik Pemesinan', '50', 'c0c7c76d30bd3dcaefc96f40275bdc0a', 'siswa', 'Cillum quidem et vel', 'Perspiciatis numqua', 'Atque cupiditate con', '1', '85', 'Qui ut et et sunt', 'Quia consectetur el', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `tgl_pendaftaran` varchar(50) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL,
  `kompetensi_keahlian_2` varchar(50) NOT NULL,
  `nisn_siswa` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status_siswa` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_wa_siswa` varchar(15) NOT NULL,
  `nama_org_tua` varchar(100) NOT NULL,
  `no_wa_org_tua` varchar(100) NOT NULL,
  `sm_1_agama` int(11) NOT NULL,
  `sm_1_bindo` int(11) NOT NULL,
  `sm_1_mtk` int(11) NOT NULL,
  `sm_1_ipa` int(11) NOT NULL,
  `sm_1_bing` int(11) NOT NULL,
  `sm_2_agama` int(11) NOT NULL,
  `sm_2_bindo` int(11) NOT NULL,
  `sm_2_mtk` int(11) NOT NULL,
  `sm_2_ipa` int(11) NOT NULL,
  `sm_2_bing` int(11) NOT NULL,
  `sm_3_agama` int(11) NOT NULL,
  `sm_3_bindo` int(11) NOT NULL,
  `sm_3_mtk` int(11) NOT NULL,
  `sm_3_ipa` int(11) NOT NULL,
  `sm_3_bing` int(11) NOT NULL,
  `sm_4_agama` int(11) NOT NULL,
  `sm_4_bindo` int(11) NOT NULL,
  `sm_4_mtk` int(11) NOT NULL,
  `sm_4_ipa` int(11) NOT NULL,
  `sm_4_bing` int(11) NOT NULL,
  `sm_5_agama` int(11) NOT NULL,
  `sm_5_bindo` int(11) NOT NULL,
  `sm_5_mtk` int(11) NOT NULL,
  `sm_5_ipa` int(11) NOT NULL,
  `sm_5_bing` int(11) NOT NULL,
  `file_skl` varchar(50) NOT NULL,
  `file_raport_1` varchar(50) NOT NULL,
  `file_raport_2` varchar(50) NOT NULL,
  `file_raport_3` varchar(50) NOT NULL,
  `file_raport_4` varchar(50) NOT NULL,
  `file_raport_5` varchar(50) NOT NULL,
  `status_raport` varchar(15) NOT NULL,
  `note_raport` varchar(100) NOT NULL,
  `status_berkas` varchar(20) NOT NULL,
  `status_tes_akademik` varchar(15) NOT NULL,
  `status_tes_wawancara` varchar(15) NOT NULL,
  `note_tes_wawancara` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `tgl_pendaftaran`, `kompetensi_keahlian`, `kompetensi_keahlian_2`, `nisn_siswa`, `password`, `status_siswa`, `tahun_lulus`, `nama_siswa`, `jenis_kelamin`, `asal_sekolah`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_wa_siswa`, `nama_org_tua`, `no_wa_org_tua`, `sm_1_agama`, `sm_1_bindo`, `sm_1_mtk`, `sm_1_ipa`, `sm_1_bing`, `sm_2_agama`, `sm_2_bindo`, `sm_2_mtk`, `sm_2_ipa`, `sm_2_bing`, `sm_3_agama`, `sm_3_bindo`, `sm_3_mtk`, `sm_3_ipa`, `sm_3_bing`, `sm_4_agama`, `sm_4_bindo`, `sm_4_mtk`, `sm_4_ipa`, `sm_4_bing`, `sm_5_agama`, `sm_5_bindo`, `sm_5_mtk`, `sm_5_ipa`, `sm_5_bing`, `file_skl`, `file_raport_1`, `file_raport_2`, `file_raport_3`, `file_raport_4`, `file_raport_5`, `status_raport`, `note_raport`, `status_berkas`, `status_tes_akademik`, `status_tes_wawancara`, `note_tes_wawancara`) VALUES
(15, '21-05-2023', 'Otomatisasi dan Tata Kelola Perkantoran', 'Teknik Pemesinan', '50', 'c0c7c76d30bd3dcaefc96f40275bdc0a', 'siswa', '2020', 'Cillum quidem et vel', 'Perempuan', 'Perspiciatis numqua', 'Atque cupiditate con', '1', 'Odit dolorem est lab', '85', 'Qui ut et et sunt', 'Quia consectetur el', 72, 39, 38, 96, 85, 70, 26, 54, 38, 77, 77, 93, 6, 83, 36, 78, 33, 66, 45, 37, 34, 31, 65, 21, 49, '08a14f3516efe88005099c4101be62cf.pdf', '1652f2e4a8688d8a00f88bf411565e85.pdf', '8ce2ce0cc0c3c8eea0917c0e9f41ed32.pdf', 'a90c60eaf5723378721ac07df04e5c5b.pdf', 'fd7f9e28a807833a146d60d2e28d1731.pdf', '15168f92f982a506e4e2980f623ec7e1.pdf', '', '', '', '', '', ''),
(16, '21-05-2023', 'Otomatisasi dan Tata Kelola Perkantoran', 'Teknik Pemesinan', '50', 'c0c7c76d30bd3dcaefc96f40275bdc0a', 'siswa', '2020', 'Cillum quidem et vel', 'Perempuan', 'Perspiciatis numqua', 'Atque cupiditate con', '1', 'Odit dolorem est lab', '85', 'Qui ut et et sunt', 'Quia consectetur el', 72, 39, 38, 96, 85, 70, 26, 54, 38, 77, 77, 93, 6, 83, 36, 78, 33, 66, 45, 37, 34, 31, 65, 21, 49, '08a14f3516efe88005099c4101be62cf.pdf', '1652f2e4a8688d8a00f88bf411565e85.pdf', '8ce2ce0cc0c3c8eea0917c0e9f41ed32.pdf', 'a90c60eaf5723378721ac07df04e5c5b.pdf', 'fd7f9e28a807833a146d60d2e28d1731.pdf', '15168f92f982a506e4e2980f623ec7e1.pdf', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_timeline`
--

CREATE TABLE `tb_timeline` (
  `id_timeline` int(11) NOT NULL,
  `tgl_timeline` varchar(15) NOT NULL,
  `bln_timeline` varchar(15) NOT NULL,
  `judul_timeline` text NOT NULL,
  `isi_timeline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_timeline`
--

INSERT INTO `tb_timeline` (`id_timeline`, `tgl_timeline`, `bln_timeline`, `judul_timeline`, `isi_timeline`) VALUES
(1, '23', 'Juni', 'selamat datang', 'siswa baru selamat datang'),
(2, '23', 'Juni', 'selamat datang', 'siswa baru selamat datang'),
(3, '23', 'Juni', 'selamat datang', 'siswa baru selamat datang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'xeimaiPh9ahs4ie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_timeline`
--
ALTER TABLE `tb_timeline`
  ADD PRIMARY KEY (`id_timeline`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_timeline`
--
ALTER TABLE `tb_timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
