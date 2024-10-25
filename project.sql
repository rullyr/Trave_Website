-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2020 pada 23.39
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `user` longtext NOT NULL,
  `bot` longtext NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chatbot`
--

INSERT INTO `chatbot` (`id`, `user`, `bot`, `waktu`) VALUES
(2, 'Hi, admin Inna Beautiful?', 'Hi, Can I help you?', '2020-10-16 20:15:10'),
(6, 'Apakah admin bisa menggunakan bahasa Indonesia?', 'Tentu saja saya bisa, saya kan orang Indonesia :))', '2020-10-16 20:40:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatbot_qna`
--

CREATE TABLE `chatbot_qna` (
  `id` int(11) NOT NULL,
  `pertanyaan` longtext NOT NULL,
  `jawaban` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chatbot_qna`
--

INSERT INTO `chatbot_qna` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Hi, admin Inna Beautiful', 'Hi, Can I help you?'),
(7, 'Apakah anda bisa menggunakan bahasa Indonesia?', 'Ya, tentu saja bisa kan saya orang indonesia :))');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(4, 0, 'sangat recomended ini website', 'Revangga', '2020-10-16 03:49:54'),
(5, 4, 'terima kasih atas ulasannya :)', 'admin', '2020-10-16 03:51:05'),
(6, 0, 'wah aku ingin mengunjungi pulau batam', 'hesbay', '2020-10-21 08:18:47'),
(7, 6, 'silahkan', 'admin', '2020-10-21 08:19:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `nd_user` varchar(255) NOT NULL,
  `nb_user` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` char(5) NOT NULL,
  `phone` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `pass_user`, `nd_user`, `nb_user`, `alamat`, `kodepos`, `phone`) VALUES
(4, 'rullyrev22@gmail.com', '$2y$10$GM0fa2PdiMfmcgkMBZOZ4unwBI/ZPNpaMSBPq8ddxA55NufpeBy5K', 'Rully', 'Revangga', 'Jl. Setia Sampai Mati 111', '20124', '081523468910'),
(5, 'bayanggara22@gmail.com', '$2y$10$DuctRlijR0YPR5Juh1hKtuEljNx2ukoraeCDHr./ZOW4pTL9RcNSq', 'Bayu', 'Anggara', 'Jl. Saja Jadian Kagak', '20115', '0822134567890'),
(6, 'c4hynisa@gmail.com', '$2y$10$G4oB1EIAmv0PsU27ben.Buakuz.x2Svy3VmlLdS5GE2jwo8dSAWDy', 'Cahya', 'Annisa', 'Jl.Kenangan Kita', '20115', '081523468910'),
(7, 'fifi123@gmail.com', '$2y$10$Sa1KTLueLCkWYcYLJLi75OhfFKojcLy9h/9TFJVlvdD3deAxMSpOa', 'Fifi', 'Alfianti', 'Jl. Saja Jadian Kagak', '20178', '081234567890');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `chatbot_qna`
--
ALTER TABLE `chatbot_qna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `chatbot_qna`
--
ALTER TABLE `chatbot_qna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
