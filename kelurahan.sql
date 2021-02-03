-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2021 pada 07.16
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file_rekap`
--

CREATE TABLE `tb_file_rekap` (
  `id` int(11) NOT NULL,
  `file_excel` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tgl_upload` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_file_rekap`
--

INSERT INTO `tb_file_rekap` (`id`, `file_excel`, `nik`, `tgl_upload`) VALUES
(1, 'test2.xlsx', '3525100301770001', '2021-01-30'),
(2, 'RW_022.xlsx', '3525100301770001', '2021-01-30'),
(3, 'test3.xlsx', '3525100301770001', '2021-01-30'),
(4, 'Report_Excel.xlsx', '3525100301770001', '2021-01-30'),
(5, 'Report_Excel_(2).xlsx', '3525100301770001', '2021-01-30'),
(6, 'Report_Excel_(2)1.xlsx', '3525100301770001', '2021-01-30'),
(7, 'Report_Excel_(3).xlsx', '3525100301770001', '2021-01-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekap_data`
--

CREATE TABLE `tb_rekap_data` (
  `id_rekap_data` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `keterangan` text NOT NULL,
  `status_rumah` varchar(30) NOT NULL,
  `status_keluarga` varchar(60) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekap_data`
--

INSERT INTO `tb_rekap_data` (`id_rekap_data`, `nik`, `keterangan`, `status_rumah`, `status_keluarga`, `rt`, `rw`) VALUES
(2, '3525100301770002', 'Sint nostrud volupta', 'Culpa quae est labor', 'Aut laborum voluptat', '002', '014'),
(3, '3525100301770002', 'Voluptatum eos facil', 'Voluptas porro volup', 'Dolor ut quasi molli', '002', '014'),
(4, '3525100301770002', 'Ex et repellendus E', 'Omnis sequi dolores ', 'Aliqua Voluptates a', '002', '014'),
(5, '3525100301770002', 'Officiis accusamus t', 'In eveniet ea dolor', 'Veniam consequat N', '002', '014'),
(6, '3525100301770002', 'Consectetur esse e123', 'Ad et animi aut qui', 'Velit rerum mollit r', '002', '014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `role_id` tinyint(1) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Warga'),
(3, 'RW'),
(4, 'RT'),
(5, 'Aparat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk_aparat`
--

CREATE TABLE `tb_surat_masuk_aparat` (
  `id_surat_masuk` int(3) NOT NULL,
  `id_surat` int(3) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_warga` int(3) NOT NULL,
  `no_surat_masuk` varchar(30) NOT NULL,
  `perihal` text NOT NULL,
  `status_izin_aparat` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_masuk_aparat`
--

INSERT INTO `tb_surat_masuk_aparat` (`id_surat_masuk`, `id_surat`, `jenis_surat`, `id_user`, `id_warga`, `no_surat_masuk`, `perihal`, `status_izin_aparat`, `keterangan`, `tgl_pengajuan`) VALUES
(1, 0, 'surat keterangan', 0, 1, '', 'Dolor cum quaerat ex', 'Menunggu persetujuan aparat', '', '2021-01-02'),
(2, 0, 'dukcapil', 0, 1, '', 'Expedita autem labor', 'Menunggu persetujuan aparat', '', '2021-01-02'),
(3, 0, 'surat pengantar', 0, 1, '', 'bikin skck', 'Menunggu persetujuan aparat', '', '2021-01-07'),
(4, 0, 'surat pengantar', 0, 1, '', 'bikin kartu kuning', 'Menunggu persetujuan aparat', '', '2021-01-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk_rt`
--

CREATE TABLE `tb_surat_masuk_rt` (
  `id_surat_masuk` int(3) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `id_warga` varchar(16) DEFAULT NULL,
  `nik` varchar(16) NOT NULL,
  `no_surat_masuk` varchar(30) NOT NULL,
  `perihal` text NOT NULL,
  `status_izin_rt` varchar(50) NOT NULL,
  `status_izin_rw` varchar(50) NOT NULL,
  `tgl_persetujuan` date DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_persetujuan_rw` date DEFAULT NULL,
  `keterangan_rw` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_masuk_rt`
--

INSERT INTO `tb_surat_masuk_rt` (`id_surat_masuk`, `jenis_surat`, `id_warga`, `nik`, `no_surat_masuk`, `perihal`, `status_izin_rt`, `status_izin_rw`, `tgl_persetujuan`, `keterangan`, `tgl_persetujuan_rw`, `keterangan_rw`, `tgl_pengajuan`) VALUES
(18, 'surat keterangan', '1', '3525100301770000', '', 'skck', 'disetujui', '', '2021-01-09', 'ok', '2021-01-10', 'ok', '2021-01-09'),
(25, 'surat pengantar', '1', '324593894848', '', 'skck', 'disetujui', 'disetujui', '2021-02-02', 'ok', '2021-02-03', 'ok', '2021-02-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_masuk_rw`
--

CREATE TABLE `tb_surat_masuk_rw` (
  `id_surat_masuk` int(3) NOT NULL,
  `id_surat` int(3) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_warga` int(3) NOT NULL,
  `no_surat_masuk` varchar(30) NOT NULL,
  `perihal` text NOT NULL,
  `status_izin_rw` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_masuk_rw`
--

INSERT INTO `tb_surat_masuk_rw` (`id_surat_masuk`, `id_surat`, `jenis_surat`, `id_user`, `id_warga`, `no_surat_masuk`, `perihal`, `status_izin_rw`, `keterangan`, `tgl_pengajuan`) VALUES
(1, 0, 'surat keterangan', 0, 1, '', 'Dolor cum quaerat ex', 'Menunggu persetujuan RW', '', '2021-01-02'),
(2, 0, 'dukcapil', 0, 1, '', 'Expedita autem labor', 'Menunggu persetujuan RW', '', '2021-01-02'),
(3, 0, 'surat pengantar', 0, 1, '', 'bikin skck', 'Menunggu persetujuan RW', '', '2021-01-07'),
(4, 0, 'surat pengantar', 0, 1, '', 'bikin kartu kuning', 'Menunggu persetujuan RW', '', '2021-01-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_rt`
--

CREATE TABLE `tb_surat_rt` (
  `id_surat` int(3) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `kode_intansi` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `lampiran` int(3) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_rt`
--

INSERT INTO `tb_surat_rt` (`id_surat`, `nama_surat`, `kode_intansi`, `perihal`, `tgl_terima`, `lampiran`, `file`) VALUES
(1, 'Surat Pengantar Pembuatan KTP', 'Nomor : 100 / / SP / / 2018', 'Pembuatan KTP', '2020-12-10', 1, 'karu kk.jpg'),
(6, 'Surat Pengantar Pembuatan Akte Kelahiran', 'Nomor : 474.2/IX/2018/Kesra', 'Pembuatan  Akte', '2020-12-23', 1, 'surat nikah.jpg'),
(7, 'Surat Pengantar Keterangan Catatan Kepolisian', 'Nomor : 470/ / 414.201.09/ X/ 2018', 'Pembuatan SKCK', '2020-12-23', 1, 'ktp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` varchar(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `foto` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik`, `nama`, `alamat`, `username`, `email`, `password`, `role_id`, `is_active`, `foto`, `date_created`) VALUES
(10, '3525100301770000', '', '', 'warga', 'nurulraws@gmail.com', 'dims', '2', 1, '', '2021-01-02'),
(11, '3525100301770001', '', '', 'rw', 'mian@gmail.com', '1234', '3', 1, '', '2021-01-07'),
(12, '3525100301770003', '', '', 'rt', 'zafran@gmail.com', '1234', '4', 1, '', '2021-01-07'),
(13, '3525100301770002', '', '', 'aparat', 'aparat@gmail.com', '1234', '5', 1, '', '0000-00-00'),
(14, '3525100301770004', '', '', 'admin', 'admin@gmail.com', 'admin', '1', 1, '', '0000-00-00'),
(15, '3525100301770005', 'rt2', '', 'rt2', 'rt2@gmail.com', '1234', '4', 1, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warga`
--

CREATE TABLE `tb_warga` (
  `id_warga` int(3) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `rt` varchar(25) NOT NULL,
  `rw` varchar(25) NOT NULL,
  `kelurahan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_warga`
--

INSERT INTO `tb_warga` (`id_warga`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `jenis_kelamin`, `pendidikan`, `pekerjaan`, `rt`, `rw`, `kelurahan`) VALUES
(1, '3525100301770000', 'DIMS', 'Bekasi', '1998-02-01', 'Permata Harapan Baru Blok E1 Nomor 4 RT.002 RW.014, Pejuang, Medan Satria, Kota Bekasi, Pejuang, Medan Satria, Bekasi Barat, Jawa Barat 17131', 'Islam', 'L', 'SMK', 'wiraswasta', '002', '014', 'Medan Satria'),
(2, '3525100301770001', 'Della Rossa', 'Bekasi', '1999-03-10', 'Permata Harapan Baru Blok A1 Nomor 40 RT.002 RW.014, Pejuang, Medan Satria, Kota Bekasi, Pejuang, Medan Satria, Bekasi Barat, Jawa Barat 17131', 'Islam', 'P', 'SMA', 'Ibu Rumah Tangga', '001', '014', 'Medan Satria'),
(3, '3525100301770002', 'Erik Setiawan', 'Bekasi', '1997-10-10', 'Permata Harapan Baru Blok D1 Nomor 10 RT.002 RW.014, Pejuang, Medan Satria, Kota Bekasi, Pejuang, Medan Satria, Bekasi Barat, Jawa Barat 17131', 'Katolik', 'L', 'SMA', 'wiraswasta', '002', '014', 'Medan Satria'),
(4, '3525100301770003', 'Zafran', 'Jakarta', '2021-01-03', 'jln bima', 'Islam', 'L', '', '', '002', '014', ''),
(5, '3525100301770004', 'admin', 'Jakarta', '2021-01-01', 'jln. bima terus 3', 'Islam', 'L', '', '', '001', '014', ''),
(6, '3525100301770005', 'rt2', 'jakarta', '2021-01-20', '', '', 'L', '', '', '001', '014', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'mnurulislam05@gmail.com', 'UXEtXvbf9hHxZmUTgC0xudaac+Yu3QLHgxcE+V2TxPw=', '2021-01-01'),
(2, 'mnurulislam05@gmail.com', 'eXqxLyk01VukfqqMpXEX0jD8jjryi1r0ekrUod+0ABs=', '2021-01-01'),
(8, 'nurulraws@gmail.com', '6a/VevSn2wsBZGUBL3P4cXNGZeUwki95QfjO1OEfUH4=', '2021-01-02'),
(9, 'zafran@gmail.com', 'Rrxp3yStaRPh1qm07xshrHFnYzWFe598S5Q1a1MzLAg=', '2021-01-07'),
(10, 'mian@gmail.com', '5rWTqrzkWX1UA4ICLuwRuWCLANiJzoa1+UM4hhXUVQI=', '2021-01-07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_file_rekap`
--
ALTER TABLE `tb_file_rekap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rekap_data`
--
ALTER TABLE `tb_rekap_data`
  ADD PRIMARY KEY (`id_rekap_data`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeks untuk tabel `tb_surat_masuk_aparat`
--
ALTER TABLE `tb_surat_masuk_aparat`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `tb_surat_masuk_rt`
--
ALTER TABLE `tb_surat_masuk_rt`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `tb_surat_masuk_rw`
--
ALTER TABLE `tb_surat_masuk_rw`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indeks untuk tabel `tb_surat_rt`
--
ALTER TABLE `tb_surat_rt`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_file_rekap`
--
ALTER TABLE `tb_file_rekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_rekap_data`
--
ALTER TABLE `tb_rekap_data`
  MODIFY `id_rekap_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `role_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_masuk_aparat`
--
ALTER TABLE `tb_surat_masuk_aparat`
  MODIFY `id_surat_masuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_masuk_rt`
--
ALTER TABLE `tb_surat_masuk_rt`
  MODIFY `id_surat_masuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_masuk_rw`
--
ALTER TABLE `tb_surat_masuk_rw`
  MODIFY `id_surat_masuk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_surat_rt`
--
ALTER TABLE `tb_surat_rt`
  MODIFY `id_surat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  MODIFY `id_warga` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
