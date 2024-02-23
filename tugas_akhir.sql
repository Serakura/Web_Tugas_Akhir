-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2023 pada 20.52
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(12) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `kode_rumahsakit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `kode_rumahsakit`) VALUES
(1, 'Rawat Jalan', 3401015),
(2, 'Unit Gawat Darurat', 3401026),
(3, 'Rawat Inap', 3401037),
(4, 'ICU', 3402016),
(5, 'Kamar Operasi', 3402020),
(6, 'Medical Check Up', 3402031),
(8, 'Ambulance', 3402053),
(9, 'Fisioterapi', 3403010),
(10, 'Laboratorium', 3403021),
(11, 'Radiologi (USG,Dental X-Ray)', 3404011),
(13, 'Rawat Jalan', 3404033),
(15, 'Rawat Inap', 3404102),
(16, 'ICU', 3404124),
(17, 'Kamar Operasi', 3404146),
(18, 'Medical Check Up', 3404157),
(19, 'Farmasi', 3404015),
(20, 'Ambulance', 3471026),
(21, 'Fisioterapi', 3471030),
(22, 'Laboratorium', 3471041),
(23, 'Radiologi (USG,Dental X-Ray)', 3471052),
(24, 'Drill Evacuation', 3471063),
(25, 'Rawat Jalan', 3471074),
(28, 'ICU', 3471234),
(29, 'Kamar Operasi', 3471256),
(30, 'Medical Check Up', 3471282),
(31, 'Farmasi', 3471325),
(32, 'Ambulance', 3471336),
(34, 'Laboratorium', 3471373),
(35, 'Radiologi (USG,Dental X-Ray)', 3402075),
(37, 'Rawat Jalan', 3402064),
(38, 'Unit Gawat Darurat', 3402086),
(39, 'Rawat Inap', 3404045),
(40, 'ICU', 3404081),
(41, 'Kamar Operasi', 3404092),
(42, 'Medical Check Up', 3404168),
(43, 'Farmasi', 3404056),
(44, 'Ambulance', 3404179),
(46, 'Laboratorium', 3471107),
(47, 'Radiologi (USG,Dental X-Ray)', 3404181),
(48, 'Drill Evacuation', 3404182),
(49, 'Rawat Jalan', 3404183),
(50, 'Unit Gawat Darurat', 3404184),
(53, 'Kamar Operasi', 3401050),
(54, 'Medical Check Up', 3401051),
(56, 'Ambulance', 3403022),
(57, 'Fisioterapi', 3404187),
(59, 'Radiologi (USG,Dental X-Ray)', 3402077),
(60, 'Drill Evacuation', 3404189),
(61, 'Rawat Jalan', 3404190),
(62, 'Unit Gawat Darurat', 3403023),
(63, 'Rawat Inap', 3401052),
(64, 'ICU', 3404191),
(65, 'Kamar Operasi', 3403024),
(66, 'Medical Check Up', 3404193),
(67, 'Farmasi', 3471377),
(69, 'Fisioterapi', 3401053),
(70, 'Laboratorium', 3471379),
(72, 'Drill Evacuation', 3471380),
(73, 'Rawat Jalan', 3403025),
(74, 'Unit Gawat Darurat', 3402084),
(75, 'Rawat Inap', 3401058),
(77, 'Kamar Operasi', 3403027),
(78, 'Medical Check Up', 3471381),
(79, 'Farmasi', 3404196),
(80, 'Ambulance', 3402097),
(81, 'Fisioterapi', 3403038),
(82, 'Laboratorium', 3401015),
(83, 'Radiologi (USG,Dental X-Ray)', 3401026),
(84, 'Drill Evacuation', 3401037),
(85, 'Rawat Jalan', 3402016),
(86, 'Unit Gawat Darurat', 3402020),
(87, 'Rawat Inap', 3402031),
(89, 'Kamar Operasi', 3402053),
(90, 'Medical Check Up', 3403010),
(91, 'Farmasi', 3403021),
(92, 'Ambulance', 3404011),
(94, 'Laboratorium', 3404033),
(96, 'Drill Evacuation', 3404102),
(97, 'Rawat Jalan', 3404124),
(98, 'Unit Gawat Darurat', 3404146),
(99, 'Rawat Inap', 3404157),
(100, 'ICU', 3404015),
(101, 'Kamar Operasi', 3471026),
(102, 'Medical Check Up', 3471030),
(103, 'Farmasi', 3471041),
(104, 'Ambulance', 3471052),
(105, 'Fisioterapi', 3471063),
(106, 'Laboratorium', 3471074),
(109, 'Rawat Jalan', 3471234),
(110, 'Unit Gawat Darurat', 3471256),
(111, 'Rawat Inap', 3471282),
(112, 'ICU', 3471325),
(113, 'Kamar Operasi', 3471336),
(115, 'Farmasi', 3471373),
(116, 'Ambulance', 3402075),
(117, 'Fisioterapi', 3401048),
(118, 'Laboratorium', 3402064),
(119, 'Radiologi (USG,Dental X-Ray)', 3402086),
(120, 'Drill Evacuation', 3404045),
(121, 'Rawat Jalan', 3404081),
(122, 'Unit Gawat Darurat', 3404092),
(123, 'Rawat Inap', 3404168),
(124, 'ICU', 3404056),
(125, 'Kamar Operasi', 3404179),
(127, 'Farmasi', 3471107),
(128, 'Ambulance', 3404181),
(129, 'Fisioterapi', 3404182),
(130, 'Laboratorium', 3404183),
(131, 'Radiologi (USG,Dental X-Ray)', 3404184),
(134, 'Unit Gawat Darurat', 3401050),
(135, 'Rawat Inap', 3401051),
(137, 'Kamar Operasi', 3403022),
(138, 'Medical Check Up', 3404187),
(140, 'Ambulance', 3402077),
(141, 'Fisioterapi', 3404189),
(142, 'Laboratorium', 3404190),
(143, 'Radiologi (USG,Dental X-Ray)', 3403023),
(144, 'Drill Evacuation', 3401052),
(145, 'Rawat Jalan', 3404191),
(146, 'Unit Gawat Darurat', 3403024),
(147, 'Rawat Inap', 3404193),
(148, 'ICU', 3471377),
(150, 'Medical Check Up', 3401053),
(151, 'Farmasi', 3471379),
(153, 'Fisioterapi', 3471380),
(154, 'Laboratorium', 3403025),
(155, 'Radiologi (USG,Dental X-Ray)', 3402084),
(156, 'Drill Evacuation', 3401058),
(158, 'Unit Gawat Darurat', 3403027),
(159, 'Rawat Inap', 3471381),
(160, 'ICU', 3404196),
(161, 'Kamar Operasi', 3402097),
(162, 'Medical Check Up', 3403038),
(163, 'Farmasi', 3401015),
(164, 'Ambulance', 3401026),
(165, 'Fisioterapi', 3401037),
(166, 'Laboratorium', 3402016),
(167, 'Radiologi (USG,Dental X-Ray)', 3402020),
(168, 'Drill Evacuation', 3402031),
(170, 'Unit Gawat Darurat', 3402053),
(171, 'Rawat Inap', 3403010),
(172, 'ICU', 3403021),
(173, 'Kamar Operasi', 3404011),
(175, 'Farmasi', 3404033),
(177, 'Fisioterapi', 3404102),
(178, 'Laboratorium', 3404124),
(179, 'Radiologi (USG,Dental X-Ray)', 3404146),
(180, 'Drill Evacuation', 3404157),
(181, 'Rawat Jalan', 3404015),
(182, 'Unit Gawat Darurat', 3471026),
(183, 'Rawat Inap', 3471030),
(184, 'ICU', 3471041),
(185, 'Kamar Operasi', 3471052),
(186, 'Medical Check Up', 3471063),
(187, 'Farmasi', 3471074),
(190, 'Laboratorium', 3471234),
(191, 'Radiologi (USG,Dental X-Ray)', 3471256),
(192, 'Drill Evacuation', 3471282),
(193, 'Rawat Jalan', 3471325),
(194, 'Unit Gawat Darurat', 3471336),
(196, 'ICU', 3471373),
(197, 'Kamar Operasi', 3402075),
(198, 'Medical Check Up', 3401048),
(199, 'Farmasi', 3402064),
(200, 'Ambulance', 3402086),
(201, 'Fisioterapi', 3404045),
(202, 'Laboratorium', 3404081),
(203, 'Radiologi (USG,Dental X-Ray)', 3404092),
(204, 'Drill Evacuation', 3404168),
(205, 'Rawat Jalan', 3404056),
(206, 'Unit Gawat Darurat', 3404179),
(208, 'ICU', 3471107),
(209, 'Kamar Operasi', 3404181),
(210, 'Medical Check Up', 3404182),
(211, 'Farmasi', 3404183),
(212, 'Ambulance', 3404184),
(215, 'Radiologi (USG,Dental X-Ray)', 3401050),
(216, 'Drill Evacuation', 3401051),
(218, 'Unit Gawat Darurat', 3403022),
(219, 'Rawat Inap', 3404187),
(221, 'Kamar Operasi', 3402077),
(222, 'Medical Check Up', 3404189),
(223, 'Farmasi', 3404190),
(224, 'Ambulance', 3403023),
(225, 'Fisioterapi', 3401052),
(226, 'Laboratorium', 3404191),
(227, 'Radiologi (USG,Dental X-Ray)', 3403024),
(228, 'Drill Evacuation', 3404193),
(229, 'Rawat Jalan', 3471377),
(231, 'Rawat Inap', 3401053),
(232, 'ICU', 3471379),
(234, 'Medical Check Up', 3471380),
(235, 'Farmasi', 3403025),
(236, 'Ambulance', 3402084),
(237, 'Fisioterapi', 3401058),
(239, 'Radiologi (USG,Dental X-Ray)', 3403027),
(240, 'Drill Evacuation', 3471381),
(241, 'Rawat Jalan', 3404196),
(242, 'Unit Gawat Darurat', 3402097),
(243, 'Rawat Inap', 3403038),
(244, 'ICU', 3401015),
(245, 'Kamar Operasi', 3401026),
(246, 'Medical Check Up', 3401037),
(247, 'Farmasi', 3402016),
(248, 'Ambulance', 3402020),
(249, 'Fisioterapi', 3402031),
(251, 'Radiologi (USG,Dental X-Ray)', 3402053),
(252, 'Drill Evacuation', 3403010),
(253, 'Rawat Jalan', 3403021),
(254, 'Unit Gawat Darurat', 3404011),
(256, 'ICU', 3404033),
(258, 'Medical Check Up', 3404102),
(259, 'Farmasi', 3404124),
(260, 'Ambulance', 3404146),
(261, 'Fisioterapi', 3404157),
(262, 'Laboratorium', 3404015),
(263, 'Radiologi (USG,Dental X-Ray)', 3471026),
(264, 'Drill Evacuation', 3471030),
(265, 'Rawat Jalan', 3471041),
(266, 'Unit Gawat Darurat', 3471052),
(267, 'Rawat Inap', 3471063),
(268, 'ICU', 3471074),
(271, 'Farmasi', 3471234),
(272, 'Ambulance', 3471256),
(273, 'Fisioterapi', 3471282),
(274, 'Laboratorium', 3471325),
(275, 'Radiologi (USG,Dental X-Ray)', 3471336),
(277, 'Rawat Jalan', 3471373),
(278, 'Unit Gawat Darurat', 3402075),
(279, 'Rawat Inap', 3401048),
(280, 'ICU', 3402064),
(281, 'Kamar Operasi', 3402086),
(282, 'Medical Check Up', 3404045),
(283, 'Farmasi', 3404081),
(284, 'Ambulance', 3404092),
(285, 'Fisioterapi', 3404168),
(286, 'Laboratorium', 3404056),
(287, 'Radiologi (USG,Dental X-Ray)', 3404179),
(289, 'Rawat Jalan', 3471107),
(290, 'Unit Gawat Darurat', 3404181),
(291, 'Rawat Inap', 3404182),
(292, 'ICU', 3404183),
(293, 'Kamar Operasi', 3404184),
(296, 'Ambulance', 3401050),
(297, 'Fisioterapi', 3401051),
(299, 'Radiologi (USG,Dental X-Ray)', 3403022),
(300, 'Drill Evacuation', 3404187),
(302, 'Unit Gawat Darurat', 3402077),
(303, 'Rawat Inap', 3404189),
(304, 'ICU', 3404190),
(305, 'Kamar Operasi', 3403023),
(306, 'Medical Check Up', 3401052),
(307, 'Farmasi', 3404191),
(308, 'Ambulance', 3403024),
(309, 'Fisioterapi', 3404193),
(310, 'Laboratorium', 3471377),
(312, 'Drill Evacuation', 3401053),
(313, 'Rawat Jalan', 3471379),
(315, 'Rawat Inap', 3471380),
(316, 'ICU', 3403025),
(317, 'Kamar Operasi', 3402084),
(318, 'Medical Check Up', 3401058),
(320, 'Ambulance', 3403027),
(321, 'Fisioterapi', 3471381),
(322, 'Laboratorium', 3404196),
(323, 'Radiologi (USG,Dental X-Ray)', 3402097),
(324, 'Drill Evacuation', 3403038),
(326, 'Unit Gawat Darurat', 3401026),
(328, 'ICU', 3402016),
(329, 'Kamar Operasi', 3402020),
(330, 'Medical Check Up', 3402031),
(332, 'Ambulance', 3402053),
(333, 'Fisioterapi', 3403010),
(334, 'Laboratorium', 3403021),
(335, 'Radiologi (USG,Dental X-Ray)', 3404011),
(337, 'Rawat Jalan', 3404033),
(339, 'Rawat Inap', 3404102),
(340, 'ICU', 3404124),
(341, 'Kamar Operasi', 3404146),
(342, 'Medical Check Up', 3404157),
(343, 'Farmasi', 3404015),
(344, 'Ambulance', 3471026),
(345, 'Fisioterapi', 3471030),
(346, 'Laboratorium', 3471041),
(347, 'Radiologi (USG,Dental X-Ray)', 3471052),
(348, 'Drill Evacuation', 3471063),
(349, 'Rawat Jalan', 3471074),
(352, 'ICU', 3471234),
(353, 'Kamar Operasi', 3471256),
(354, 'Medical Check Up', 3471282),
(355, 'Farmasi', 3471325),
(356, 'Ambulance', 3471336),
(358, 'Laboratorium', 3471373),
(359, 'Radiologi (USG,Dental X-Ray)', 3402075),
(360, 'Drill Evacuation', 3401048),
(361, 'Rawat Jalan', 3402064),
(362, 'Unit Gawat Darurat', 3402086),
(363, 'Rawat Inap', 3404045),
(364, 'ICU', 3404081),
(365, 'Kamar Operasi', 3404092),
(366, 'Medical Check Up', 3404168),
(367, 'Farmasi', 3404056),
(368, 'Ambulance', 3404179),
(370, 'Laboratorium', 3471107),
(371, 'Radiologi (USG,Dental X-Ray)', 3404181),
(372, 'Drill Evacuation', 3404182),
(373, 'Rawat Jalan', 3404183),
(374, 'Unit Gawat Darurat', 3404184),
(377, 'Kamar Operasi', 3401050),
(378, 'Medical Check Up', 3401051),
(380, 'Ambulance', 3403022),
(381, 'Fisioterapi', 3404187),
(383, 'Radiologi (USG,Dental X-Ray)', 3402077),
(384, 'Drill Evacuation', 3404189),
(385, 'Rawat Jalan', 3404190),
(386, 'Unit Gawat Darurat', 3403023),
(387, 'Rawat Inap', 3401052),
(388, 'ICU', 3404191),
(389, 'Kamar Operasi', 3403024),
(390, 'Medical Check Up', 3404193),
(391, 'Farmasi', 3471377),
(393, 'Fisioterapi', 3401053),
(394, 'Laboratorium', 3471379),
(396, 'Drill Evacuation', 3471380),
(397, 'Rawat Jalan', 3403025),
(398, 'Unit Gawat Darurat', 3402084),
(399, 'Rawat Inap', 3401058),
(401, 'Kamar Operasi', 3403027),
(402, 'Medical Check Up', 3471381),
(403, 'Farmasi', 3404196),
(404, 'Ambulance', 3402097),
(405, 'Fisioterapi', 3403038);

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_history` int(12) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `kode_rumahsakit` int(12) NOT NULL,
  `kronologi` varchar(200) NOT NULL,
  `jenis` enum('pribadi','orang lain') DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(12) NOT NULL,
  `nama_pelayanan` varchar(100) NOT NULL,
  `kode_rumahsakit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `nama_pelayanan`, `kode_rumahsakit`) VALUES
(1, 'Pelayanan Medis', 3401015),
(2, 'Pelayanan Gawat Darurat', 3401026),
(3, 'Farmasi', 3401037),
(4, 'Laboratorium', 3402016),
(5, 'Radiologi', 3402020),
(6, 'Fisioterapi', 3402031),
(8, 'RDT Antigen/Swab PCR', 3402053),
(9, 'Vaksinasi Covid-19', 3403010),
(10, 'Telemedisin', 3403021),
(11, 'Pelayanan Medis', 3404011),
(13, 'Farmasi', 3404033),
(15, 'Radiologi', 3404102),
(16, 'Fisioterapi', 3404124),
(17, 'Ambulans', 3404146),
(18, 'RDT Antigen/Swab PCR', 3404157),
(19, 'Vaksinasi Covid-19', 3404015),
(20, 'Telemedisin', 3471026),
(21, 'Pelayanan Medis', 3471030),
(22, 'Pelayanan Gawat Darurat', 3471041),
(23, 'Farmasi', 3471052),
(24, 'Laboratorium', 3471063),
(25, 'Radiologi', 3471074),
(28, 'RDT Antigen/Swab PCR', 3471234),
(29, 'Vaksinasi Covid-19', 3471256),
(30, 'Telemedisin', 3471282),
(31, 'Pelayanan Medis', 3471325),
(32, 'Pelayanan Gawat Darurat', 3471336),
(34, 'Laboratorium', 3471373),
(35, 'Radiologi', 3402075),
(36, 'Fisioterapi', 3401048),
(37, 'Ambulans', 3402064),
(38, 'RDT Antigen/Swab PCR', 3402086),
(39, 'Vaksinasi Covid-19', 3404045),
(40, 'Telemedisin', 3404081),
(41, 'Pelayanan Medis', 3404092),
(42, 'Pelayanan Gawat Darurat', 3404168),
(43, 'Farmasi', 3404056),
(44, 'Laboratorium', 3404179),
(46, 'Fisioterapi', 3471107),
(47, 'Ambulans', 3404181),
(48, 'RDT Antigen/Swab PCR', 3404182),
(49, 'Vaksinasi Covid-19', 3404183),
(50, 'Telemedisin', 3404184),
(53, 'Farmasi', 3401050),
(54, 'Laboratorium', 3401051),
(56, 'Fisioterapi', 3403022),
(57, 'Ambulans', 3404187),
(59, 'Vaksinasi Covid-19', 3402077),
(60, 'Telemedisin', 3404189),
(61, 'Pelayanan Medis', 3404190),
(62, 'Pelayanan Gawat Darurat', 3403023),
(63, 'Farmasi', 3401052),
(64, 'Laboratorium', 3404191),
(65, 'Radiologi', 3403024),
(66, 'Fisioterapi', 3404193),
(67, 'Ambulans', 3471377),
(69, 'Vaksinasi Covid-19', 3401053),
(70, 'Telemedisin', 3471379),
(72, 'Pelayanan Gawat Darurat', 3471380),
(73, 'Farmasi', 3403025),
(74, 'Laboratorium', 3402084),
(75, 'Radiologi', 3401058),
(77, 'Ambulans', 3403027),
(78, 'RDT Antigen/Swab PCR', 3471381),
(79, 'Vaksinasi Covid-19', 3404196),
(80, 'Telemedisin', 3402097),
(81, 'Pelayanan Medis', 3403038),
(82, 'Pelayanan Gawat Darurat', 3401015),
(83, 'Farmasi', 3401026),
(84, 'Laboratorium', 3401037),
(85, 'Radiologi', 3402016),
(86, 'Fisioterapi', 3402020),
(87, 'Ambulans', 3402031),
(89, 'Vaksinasi Covid-19', 3402053),
(90, 'Telemedisin', 3403010),
(91, 'Pelayanan Medis', 3403021),
(92, 'Pelayanan Gawat Darurat', 3404011),
(94, 'Laboratorium', 3404033),
(96, 'Fisioterapi', 3404102),
(97, 'Ambulans', 3404124),
(98, 'RDT Antigen/Swab PCR', 3404146),
(99, 'Vaksinasi Covid-19', 3404157),
(100, 'Telemedisin', 3404015),
(101, 'Pelayanan Medis', 3471026),
(102, 'Pelayanan Gawat Darurat', 3471030),
(103, 'Farmasi', 3471041),
(104, 'Laboratorium', 3471052),
(105, 'Radiologi', 3471063),
(106, 'Fisioterapi', 3471074),
(109, 'Vaksinasi Covid-19', 3471234),
(110, 'Telemedisin', 3471256),
(111, 'Pelayanan Medis', 3471282),
(112, 'Pelayanan Gawat Darurat', 3471325),
(113, 'Farmasi', 3471336),
(115, 'Radiologi', 3471373),
(116, 'Fisioterapi', 3402075),
(117, 'Ambulans', 3401048),
(118, 'RDT Antigen/Swab PCR', 3402064),
(119, 'Vaksinasi Covid-19', 3402086),
(120, 'Telemedisin', 3404045),
(121, 'Pelayanan Medis', 3404081),
(122, 'Pelayanan Gawat Darurat', 3404092),
(123, 'Farmasi', 3404168),
(124, 'Laboratorium', 3404056),
(125, 'Radiologi', 3404179),
(127, 'Ambulans', 3471107),
(128, 'RDT Antigen/Swab PCR', 3404181),
(129, 'Vaksinasi Covid-19', 3404182),
(130, 'Telemedisin', 3404183),
(131, 'Pelayanan Medis', 3404184),
(134, 'Laboratorium', 3401050),
(135, 'Radiologi', 3401051),
(137, 'Ambulans', 3403022),
(138, 'RDT Antigen/Swab PCR', 3404187),
(140, 'Telemedisin', 3402077),
(141, 'Pelayanan Medis', 3404189),
(142, 'Pelayanan Gawat Darurat', 3404190),
(143, 'Farmasi', 3403023),
(144, 'Laboratorium', 3401052),
(145, 'Radiologi', 3404191),
(146, 'Fisioterapi', 3403024),
(147, 'Ambulans', 3404193),
(148, 'RDT Antigen/Swab PCR', 3471377),
(150, 'Telemedisin', 3401053),
(151, 'Pelayanan Medis', 3471379),
(153, 'Farmasi', 3471380),
(154, 'Laboratorium', 3403025),
(155, 'Radiologi', 3402084),
(156, 'Fisioterapi', 3401058),
(158, 'RDT Antigen/Swab PCR', 3403027),
(159, 'Vaksinasi Covid-19', 3471381),
(160, 'Telemedisin', 3404196),
(161, 'Pelayanan Medis', 3402097),
(162, 'Pelayanan Gawat Darurat', 3403038),
(163, 'Farmasi', 3401015),
(164, 'Laboratorium', 3401026),
(165, 'Radiologi', 3401037),
(166, 'Fisioterapi', 3402016),
(167, 'Ambulans', 3402020),
(168, 'RDT Antigen/Swab PCR', 3402031),
(170, 'Telemedisin', 3402053),
(171, 'Pelayanan Medis', 3403010),
(172, 'Pelayanan Gawat Darurat', 3403021),
(173, 'Farmasi', 3404011),
(175, 'Radiologi', 3404033),
(177, 'Ambulans', 3404102),
(178, 'RDT Antigen/Swab PCR', 3404124),
(179, 'Vaksinasi Covid-19', 3404146),
(180, 'Telemedisin', 3404157),
(181, 'Pelayanan Medis', 3404015),
(182, 'Pelayanan Gawat Darurat', 3471026),
(183, 'Farmasi', 3471030),
(184, 'Laboratorium', 3471041),
(185, 'Radiologi', 3471052),
(186, 'Fisioterapi', 3471063),
(187, 'Ambulans', 3471074),
(190, 'Telemedisin', 3471234),
(191, 'Pelayanan Medis', 3471256),
(192, 'Pelayanan Gawat Darurat', 3471282),
(193, 'Farmasi', 3471325),
(194, 'Laboratorium', 3471336),
(196, 'Fisioterapi', 3471373),
(197, 'Ambulans', 3402075),
(198, 'RDT Antigen/Swab PCR', 3401048),
(199, 'Vaksinasi Covid-19', 3402064),
(200, 'Telemedisin', 3402086),
(201, 'Pelayanan Medis', 3404045),
(202, 'Pelayanan Gawat Darurat', 3404081),
(203, 'Farmasi', 3404092),
(204, 'Laboratorium', 3404168),
(205, 'Radiologi', 3404056),
(206, 'Fisioterapi', 3404179),
(208, 'RDT Antigen/Swab PCR', 3471107),
(209, 'Vaksinasi Covid-19', 3404181),
(210, 'Telemedisin', 3404182),
(211, 'Pelayanan Medis', 3404183),
(212, 'Pelayanan Gawat Darurat', 3404184),
(215, 'Radiologi', 3401050),
(216, 'Fisioterapi', 3401051),
(218, 'RDT Antigen/Swab PCR', 3403022),
(219, 'Vaksinasi Covid-19', 3404187),
(221, 'Pelayanan Medis', 3402077),
(222, 'Pelayanan Gawat Darurat', 3404189),
(223, 'Farmasi', 3404190),
(224, 'Laboratorium', 3403023),
(225, 'Radiologi', 3401052),
(226, 'Fisioterapi', 3404191),
(227, 'Ambulans', 3403024),
(228, 'RDT Antigen/Swab PCR', 3404193),
(229, 'Vaksinasi Covid-19', 3471377),
(231, 'Pelayanan Medis', 3401053),
(232, 'Pelayanan Gawat Darurat', 3471379),
(234, 'Laboratorium', 3471380),
(235, 'Radiologi', 3403025),
(236, 'Fisioterapi', 3402084),
(237, 'Ambulans', 3401058),
(239, 'Vaksinasi Covid-19', 3403027),
(240, 'Telemedisin', 3471381),
(241, 'Pelayanan Medis', 3404196),
(242, 'Pelayanan Gawat Darurat', 3402097),
(243, 'Farmasi', 3403038),
(244, 'Laboratorium', 3401015),
(245, 'Radiologi', 3401026),
(246, 'Fisioterapi', 3401037),
(247, 'Ambulans', 3402016),
(248, 'RDT Antigen/Swab PCR', 3402020),
(249, 'Vaksinasi Covid-19', 3402031),
(251, 'Pelayanan Medis', 3402053),
(252, 'Pelayanan Gawat Darurat', 3403010),
(253, 'Farmasi', 3403021),
(254, 'Laboratorium', 3404011),
(256, 'Fisioterapi', 3404033),
(258, 'RDT Antigen/Swab PCR', 3404102),
(259, 'Vaksinasi Covid-19', 3404124),
(260, 'Telemedisin', 3404146),
(261, 'Pelayanan Medis', 3404157),
(262, 'Pelayanan Gawat Darurat', 3404015),
(263, 'Farmasi', 3471026),
(264, 'Laboratorium', 3471030),
(265, 'Radiologi', 3471041),
(266, 'Fisioterapi', 3471052),
(267, 'Ambulans', 3471063),
(268, 'RDT Antigen/Swab PCR', 3471074),
(271, 'Pelayanan Medis', 3471234),
(272, 'Pelayanan Gawat Darurat', 3471256),
(273, 'Farmasi', 3471282),
(274, 'Laboratorium', 3471325),
(275, 'Radiologi', 3471336),
(277, 'Ambulans', 3471373),
(278, 'RDT Antigen/Swab PCR', 3402075),
(279, 'Vaksinasi Covid-19', 3401048),
(280, 'Telemedisin', 3402064),
(281, 'Pelayanan Medis', 3402086),
(282, 'Pelayanan Gawat Darurat', 3404045),
(283, 'Farmasi', 3404081),
(284, 'Laboratorium', 3404092),
(285, 'Radiologi', 3404168),
(286, 'Fisioterapi', 3404056),
(287, 'Ambulans', 3404179),
(289, 'Vaksinasi Covid-19', 3471107),
(290, 'Telemedisin', 3404181),
(291, 'Pelayanan Medis', 3404182),
(292, 'Pelayanan Gawat Darurat', 3404183),
(293, 'Farmasi', 3404184),
(296, 'Fisioterapi', 3401050),
(297, 'Ambulans', 3401051),
(299, 'Vaksinasi Covid-19', 3403022),
(300, 'Telemedisin', 3404187),
(302, 'Pelayanan Gawat Darurat', 3402077),
(303, 'Farmasi', 3404189),
(304, 'Laboratorium', 3404190),
(305, 'Radiologi', 3403023),
(306, 'Fisioterapi', 3401052),
(307, 'Ambulans', 3404191),
(308, 'RDT Antigen/Swab PCR', 3403024),
(309, 'Vaksinasi Covid-19', 3404193),
(310, 'Telemedisin', 3471377),
(312, 'Pelayanan Gawat Darurat', 3401053),
(313, 'Farmasi', 3471379),
(315, 'Radiologi', 3471380),
(316, 'Fisioterapi', 3403025),
(317, 'Ambulans', 3402084),
(318, 'RDT Antigen/Swab PCR', 3401058),
(320, 'Telemedisin', 3403027),
(321, 'Pelayanan Medis', 3471381),
(322, 'Pelayanan Gawat Darurat', 3404196),
(323, 'Farmasi', 3402097),
(324, 'Laboratorium', 3403038),
(325, 'Radiologi', 3401015),
(326, 'Fisioterapi', 3401026),
(327, 'Ambulans', 3401037),
(328, 'RDT Antigen/Swab PCR', 3402016),
(329, 'Vaksinasi Covid-19', 3402020),
(330, 'Telemedisin', 3402031),
(332, 'Pelayanan Gawat Darurat', 3402053),
(333, 'Farmasi', 3403010),
(334, 'Laboratorium', 3403021),
(335, 'Radiologi', 3404011),
(337, 'Ambulans', 3404033),
(339, 'Vaksinasi Covid-19', 3404102),
(340, 'Telemedisin', 3404124),
(341, 'Pelayanan Medis', 3404146),
(342, 'Pelayanan Gawat Darurat', 3404157),
(343, 'Farmasi', 3404015),
(344, 'Laboratorium', 3471026),
(345, 'Radiologi', 3471030),
(346, 'Fisioterapi', 3471041),
(347, 'Ambulans', 3471052),
(348, 'RDT Antigen/Swab PCR', 3471063),
(349, 'Vaksinasi Covid-19', 3471074),
(352, 'Pelayanan Gawat Darurat', 3471234),
(353, 'Farmasi', 3471256),
(354, 'Laboratorium', 3471282),
(355, 'Radiologi', 3471325),
(356, 'Fisioterapi', 3471336),
(358, 'RDT Antigen/Swab PCR', 3471373),
(359, 'Vaksinasi Covid-19', 3402075),
(360, 'Telemedisin', 3401048),
(361, 'Pelayanan Medis', 3402064),
(362, 'Pelayanan Gawat Darurat', 3402086),
(363, 'Farmasi', 3404045),
(364, 'Laboratorium', 3404081),
(365, 'Radiologi', 3404092),
(366, 'Fisioterapi', 3404168),
(367, 'Ambulans', 3404056),
(368, 'RDT Antigen/Swab PCR', 3404179),
(370, 'Telemedisin', 3471107),
(371, 'Pelayanan Medis', 3404181),
(372, 'Pelayanan Gawat Darurat', 3404182),
(373, 'Farmasi', 3404183),
(374, 'Laboratorium', 3404184),
(377, 'Ambulans', 3401050),
(378, 'RDT Antigen/Swab PCR', 3401051),
(380, 'Telemedisin', 3403022),
(381, 'Pelayanan Medis', 3404187),
(383, 'Farmasi', 3402077),
(384, 'Laboratorium', 3404189),
(385, 'Radiologi', 3404190),
(386, 'Fisioterapi', 3403023),
(387, 'Ambulans', 3401052),
(388, 'RDT Antigen/Swab PCR', 3404191),
(389, 'Vaksinasi Covid-19', 3403024),
(390, 'Telemedisin', 3404193),
(391, 'Pelayanan Medis', 3471377),
(393, 'Farmasi', 3401053),
(394, 'Laboratorium', 3471379),
(396, 'Fisioterapi', 3471380),
(397, 'Ambulans', 3403025),
(398, 'RDT Antigen/Swab PCR', 3402084),
(399, 'Vaksinasi Covid-19', 3401058),
(401, 'Pelayanan Medis', 3403027),
(402, 'Pelayanan Gawat Darurat', 3471381),
(403, 'Farmasi', 3404196),
(404, 'Laboratorium', 3402097),
(405, 'Radiologi', 3403038);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan`
--

CREATE TABLE `permintaan` (
  `id_permintaan` int(12) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `kode_rumahsakit` int(12) NOT NULL,
  `kronologi` varchar(200) NOT NULL,
  `jenis` enum('pribadi','orang lain') DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` enum('Pending','Terkonfirmasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `kode_rumahsakit` int(12) NOT NULL,
  `nama_rumahsakit` varchar(100) NOT NULL,
  `jenis_rumahsakit` varchar(20) NOT NULL,
  `kelas_rumahsakit` enum('A','B','C','D') DEFAULT NULL,
  `pemilik` varchar(100) DEFAULT NULL,
  `telp` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`kode_rumahsakit`, `nama_rumahsakit`, `jenis_rumahsakit`, `kelas_rumahsakit`, `pemilik`, `telp`, `alamat`, `latitude`, `longitude`, `gambar`) VALUES
(3401015, 'RS Umum Daerah Wates', 'RSU', 'B', 'Pemkab', '081226541727', 'Jl. Tentara Pelajar No.Km. 1 No. 5, Area Sawah, Beji, Kec. Wates, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55651', -78588287, 110.1453729, 'logo_rs_public.png'),
(3401026, 'RSU Santo Yusup Boro', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Boro, RT.01/RW.01, Depok, Banjarasri, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55672', -7.7610687, 110.1113593, 'logo_rs_public.png'),
(3401037, 'RS Umum Rizki Amalia Medika', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Brosot-Nagung No.KM. 5, Jogahan, Bumirejo, Kec. Lendah, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55661', -7.9083984, 110.1025048, 'logo_rs_public.png'),
(3401048, 'RS Umum Kharisma Paramedika', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Khudori No.34, Dipan, Wates, Kec. Wates, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55651', -7.8649837, 110.1518401, 'logo_rs_public.png'),
(3401050, 'RS Umum PKU Muhammadiyah Nanggulan', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Ngemplak, Jl. Ngapak - Kentheng, Ngemplak, Kembang, Kec. Nanggulan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55671', -7.7540404, 110.2102003, 'logo_rs_public.png'),
(3401051, 'RS Umum Rizki Amalia', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Wates - Purworejo KM.10, Kaliwangan, Temon Wetan, Kec. Temon, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55654', -7.8873651, 110.0129716, 'logo_rs_public.png'),
(3401052, 'RS Umum Daerah Nyi Ageng Serang', 'RSU', 'C', 'Pemkab', '081226541727', 'Jl. Sentolo Nanggulan, Bantar Kulon, Banguncipto, Kec. Sentolo, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55664', -7.8212103, 110.2231489, 'logo_rs_public.png'),
(3401053, 'RS Umum Pura Raharja Medika', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Raya Brosot No.18, Bangeran, Bumirejo, Kec. Lendah, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55663', -7.9301808, 110.2054953, 'logo_rs_public.png'),
(3401058, 'RS Umum Queen Latifa', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Ringroad Barat No.118, Mlangi, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294', -7.8133069, 110.2328504, 'logo_rs_public.png'),
(3402016, 'RS Umum Daerah Panembahan Senopati', 'RSU', 'B', 'Pemkab', '081226541727', 'Jl. Dr. Wahidin Sudiro Husodo, Area Sawah, Trirenggo, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55714', -7.8927816, 110.3352074, 'logo_rs_public.png'),
(3402020, 'RS Umum Santa Elisabeth', 'RSU', 'D', 'Organisasi Katholik', '081226541727', 'Ganjuran Sumbermulyo Bambanglipuro, Jl. Kaligondang, Kaligondang, Sumbermulyo, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55764', -7.6692155, 109.12537, 'logo_rs_public.png'),
(3402031, 'RSU PKU Muhammadiyah Bantul', 'RSU', 'C', 'Organisasi Islam', '081226541727', 'Jl. Jend. Sudirman No.124, Nyangkringan, Bantul, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55711', -7.8868928, 110.3276377, 'logo_rs_public.png'),
(3402053, 'RS Umum Nur Hidayah', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Imogiri Tim. No.KM.11, Bembem, Trimulyo, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', -7.8862342, 110.3854405, 'logo_rs_public.png'),
(3402064, 'RS Umum Rachma Husada', 'RSU', 'C', 'Organisasi Sosial', '081226541727', 'JL. Parantritis, Km. 16, Gerselo Patalan, Jetis, Patalan, Bantul, Ketandan, Patalan, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', -7.9326167, 110.3426052, 'logo_rs_public.png'),
(3402075, 'RS Umum Permata Husada', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'JL. Raya KM 4 RT, Kauman, Pleret, Kec. Pleret, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55791', -7.8755189, 110.3278808, 'logo_rs_public.png'),
(3402077, 'RS Umum Griya Mahardika Yogyakarta', 'RSU', 'D', 'Perusahaan', '081226541727', 'Jl. Parangtritis, Km. 4, Gg. Wijaya Kusuma No.212, Druwo, Bangunharjo, Kec. Bantul, Daerah Istimewa Yogyakarta 55187', -7.8385864, 110.3632517, 'logo_rs_public.png'),
(3402084, 'RS Universitas Islam Indonesia', 'RSU', 'C', 'Swasta', '081226541727', 'Jl. Srandakan No.KM, RW.5, Jodog, Wijirejo, Kec. Pandak, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55761', -7.9093272, 110.2933124, 'logo_rs_public.png'),
(3402086, 'RS Rajawali Citra', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Banjardadap, Potorono, Kec. Banguntapan, Bantul DI Yogyakarta, Daerah Istimewa Yogyakarta', -7.8855739, 110.2579157, 'logo_rs_public.png'),
(3402097, 'RS Umum Daerah Saras Adyatma', 'RSU', 'D', 'Pemkab', '081226541727', 'Jl. Samas No.Km. 19, RW.9, Selo, Sidomulyo, Kec. Bambanglipuro, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55764', -7.955919, 110.2907411, 'logo_rs_public.png'),
(3403010, 'RS Umum Daerah Wonosari', 'RSU', 'C', 'Pemkab', '081226541727', 'Jl. Taman Bakti No.6, Purbosari, Wonosari, Kec. Wonosari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55813', -7.9618347, 110.6003429, 'logo_rs_public.png'),
(3403021, 'RS Umum Nur Rohmah', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Jogja - Wonosari No.Km. 7, Jambu Rejo, Bandung, Kec. Playen, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55861', -7.9222615, 110.5589199, 'logo_rs_public.png'),
(3403022, 'RS Umum Pelita Husada', 'RSU', 'D', 'Perorangan', '081226541727', 'Jl. Raya Wonosari-Semanu No.Km.3, Sambirejo, Semanu, Kec. Semanu, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55893', -7.9891843, 110.6294298, 'logo_rs_public.png'),
(3403023, 'RS Umum Panti Rahayu', 'RSU', 'C', 'Swasta', '081226541727', 'Jl. Wonosari Ponjong KM. 7, Karangmojo, Kelor, Kec. Karangmojo, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55891', -7.9557769, 110.6558623, 'logo_rs_public.png'),
(3403024, 'RS Umum PKU Muhammadiyah Wonosari', 'RSU', 'D', 'Organisasi Islam', '081226541727', 'Jl. Lkr. Utara, kemorosari II, Piyaman, Kec. Wonosari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55851', -7.9405743, 110.5886631, 'logo_rs_public.png'),
(3403025, 'RS Bethesda Wonosari', 'RSU', 'D', 'Organisasi Protestan', '081226541727', 'Jl. Karangmojo - Wonosari No.KM. 2.3, Selang III, Selang, Kec. Wonosari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55851', -7.9634959, 110.6127686, 'logo_rs_public.png'),
(3403027, 'RS Umum Daerah Saptosari', 'RSU', 'D', 'Pemkab', '081226541727', 'Karang, Jetis, Kec. Saptosari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55871', -8.0449977, 110.5012843, 'logo_rs_public.png'),
(3403038, 'RS Islam Gunungkidul', 'RSU', 'D', 'Swasta', '081226541727', 'Jalan Pramuka, RT.004/RW.001, Gedang Rejo, Ngipak, Kec. Karangmojo, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55891', -7.9445147, 110.3342672, 'logo_rs_public.png'),
(3404011, 'RS Umum Daerah Sleman', 'RSU', 'B', 'Pemkab', '081226541727', 'Jl. Bhayangkara No.48, Temulawak, Triharjo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55514', -7.6868734, 110.339323, 'logo_rs_public.png'),
(3404015, 'RSUP Dr. Sardjito', 'RSU', 'A', 'Kemkes', '081226541727', 'Jl. Kesehatan Jl. Kesehatan Sendowo No.1, Sendowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', -7.768611, 110.3708993, 'logo_rs_public.png'),
(3404033, 'Charitas Hospital Klepu', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Krompakan, Klepu, Sendangmulyo, Kec. Minggir, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55562', -7.7548583, 110.2398167, 'logo_rs_public.png'),
(3404045, 'RS Queen Latifa', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Ringroad Barat No.118, Mlangi, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294', -7.8851145, 110.1343007, 'logo_rs_public.png'),
(3404056, 'RS JIH', 'RSU', 'B', 'Perusahaan', '081226541727', 'Jl. Ring Road Utara No.160, Perumnas Condong Catur, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55283', -7.7575571, 110.1151813, 'logo_rs_public.png'),
(3404081, 'RS Umum Condong Catur', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Manggis No.6, Gempol, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', -7.7544276, 110.4031705, 'logo_rs_public.png'),
(3404092, 'RS Umum Puri Husada Yogyakarta', 'RSU', 'D', 'Swasta', '081226541727', 'Km.11, Jl. Palagan Tentara Pelajar, Ngetiran, Sariharjo, Ngaglik, Sleman Regency, Special Region of Yogyakarta 55581', -7.7059087, 110.3837655, 'logo_rs_public.png'),
(3404102, 'RS Umum Panti Rini', 'RSU', 'C', 'Organisasi Katholik', '081226541727', 'Jl. Raya Solo - Yogyakarta KM.13,2, Kringinan, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', -7.7777449, 110.304554, 'logo_rs_public.png'),
(3404124, 'RS Umum Panti Nugroho', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Kaliurang No.KM.17, Sukanan, Pakembinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584', -7.6687758, 110.4146034, 'logo_rs_public.png'),
(3404146, 'RS Islam Yayasan PDHI', 'RSU', 'C', 'Organisasi Sosial', '081226541727', 'Jl. Jogja - Solo No.KM.12,5, Kringinan, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', -7.7766454, 110.4564481, 'logo_rs_public.png'),
(3404157, 'RS Umum Sakina Idaman', 'RSU', 'C', 'Organisasi Sosial', '081226541727', 'Condro Loekito, Jl. Nyi Tjondrolukito Jl. Blunyah Gede No.60, Kutu Dukuh, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284', -7.7673088, 110.3653969, 'logo_rs_public.png'),
(3404168, 'RS Umum Daerah Prambanan', 'RSU', 'C', 'Pemkab', '081226541727', 'Jl. Raya Piyungan - Prambanan No.KM. 7, Delegan, Sumberharjo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55572', -7.804635, 110.4805779, 'logo_rs_public.png'),
(3404179, 'RS Umum Mitra Paramedika', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Raya Ngemplak, Area Sawah, Widodomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', -7.7139765, 110.445892, 'logo_rs_public.png'),
(3404181, 'RS At-Turots Al-Islamy', 'RSU', 'D', 'Organisasi Islam', '081226541727', '67XV+RGQ, Jl. Godean - Seyegan, Klaci I, Margoluwih, Kec. Seyegan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55561', -7.7504117, 110.2912799, 'logo_rs_public.png'),
(3404182, 'RS Umum Gramedika 10', 'RSU', 'D', 'Perusahaan', '081226541727', 'Jl. Besi Jangkang No.20, Candi Karang, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', -7.7012335, 110.4144357, 'logo_rs_public.png'),
(3404183, 'RS Umum PKU Muhammadiyah Gamping', 'RSU', 'B', 'Organisasi Sosial', '081226541727', 'Jl. Wates, Jl. Nasional III KM.5,5, Bodeh, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294', -7.8004006, 110.3151355, 'logo_rs_public.png'),
(3404184, 'RS Umum Bhayangkara POLDA DIY', 'RSU', 'D', 'POLRI', '081226541727', 'Jl. Raya Solo - Yogyakarta KM.14, Glondong, Tirtomartani, Kec. Kalasan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571', -7.7662066, 110.4692488, 'logo_rs_public.png'),
(3404187, 'RS Khusus Ibu Anak Sadewa', 'RSIA', 'C', 'Perusahaan', '081226541727', 'Jalan Babarsari Blok TB 16 No.13B, Tambak Bayan, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', -7.7709559, 110.4132148, 'logo_rs_public.png'),
(3404189, 'RS Akademik Universitas Gadjah Mada', 'RSU', 'B', 'Kementerian Lain', '081226541727', 'Jl. Kabupaten, Kranggahan I, Trihanggo, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55291', -7.7438194, 110.347711, 'logo_rs_public.png'),
(3404190, 'RS Umum Mitra Sehat', 'RSU', 'D', 'Perusahaan', '081226541727', 'No.KM. 9, Jl. Wates, Ngemplak, Balecatur, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55295', -7.8082714, 110.2856343, 'logo_rs_public.png'),
(3404191, 'RS Universitas Ahmad Dahlan', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Cindelaras Raya No.33, Karangsari, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584', -7.7471265, 110.4225002, 'logo_rs_public.png'),
(3404193, 'RS Umum Hermina Yogya', 'RSU', 'C', 'Perusahaan', '081226541727', 'Jl. Selokan Mataram, RT.06/RW.50, Meguwo, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55282', -7.7702489, 110.4301977, 'logo_rs_public.png'),
(3404196, 'RS Umum Bunga Bangsa Medika', 'RSU', 'D', 'Swasta', '081226541727', 'Jl. Lili, Kembang, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', -7.7848122, 110.4266267, 'logo_rs_public.png'),
(3471026, 'RS Islam Hidayatullah Yogyakarta', 'RSU', 'D', 'Organisasi Islam', '081226541727', 'Jl. Veteran No.184, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161', -7.8153242, 110.3851803, 'logo_rs_public.png'),
(3471030, 'RS Tk. III 04.06.03 Dr. Soetarto', 'RSU', 'C', 'TNI AD', '081226541727', 'Jl. Juadi No.19, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224', -7.7855673, 110.3742516, 'logo_rs_public.png'),
(3471041, 'RS PKU Muhammadiyah Yogyakarta', 'RSU', 'B', 'Organisasi Islam', '081226541727', 'Jl. KH. Ahmad Dahlan No.20, Ngupasan, Kec. Gondomanan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55122', -7.8007457, 110.3594951, 'logo_rs_public.png'),
(3471052, 'RS Umum Panti Rapih', 'RSU', 'B', 'Organisasi Sosial', '081226541727', 'Jl. Cik Di Tiro No.30, Samirono, Terban, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55223', -7.777232, 110.3735941, 'logo_rs_public.png'),
(3471063, 'RS Bethesda Yogyakarta', 'RSU', 'B', 'Organisasi Sosial', '081226541727', 'Jl. Jend. Sudirman No.70, Kotabaru, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55224', -7.7839847, 110.3751158, 'logo_rs_public.png'),
(3471074, 'RSPAU Dr. Suhardi Harjolukito', 'RSU', 'B', 'TNI AU', '081226541727', 'JL. Janti Yogyakarta, Lanud Adisutjipto, Jl. Ringroad Timur, Karang Janbe, Banguntapan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55198', -7.797648, 110.4077533, 'logo_rs_public.png'),
(3471107, 'RS Khusus Ibu dan Anak PKU Muhammadiyah Kotagede', 'RSIA', 'C', 'Organisasi Islam', '081226541727', 'Jl. Kemasan No.43, Purbayan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55173', -7.8228708, 110.3981879, 'logo_rs_public.png'),
(3471234, 'RS Umum Daerah Kota Yogyakarta', 'RSU', 'B', 'Pemkot', '081226541727', 'Jl. Ki Ageng Pemanahan No.1-6, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162', -7.8048659, 110.357249, 'logo_rs_public.png'),
(3471256, 'RS Khusus Ibu dan Anak Bhakti Ibu', 'RSIA', 'C', 'Organisasi Sosial', '081226541727', 'Jl. Golo No.32-33, Pandeyan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55161', -7.8148238, 110.379022, 'logo_rs_public.png'),
(3471282, 'RS Ludira Husada Tama', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Wiratama No.4, Tegalrejo, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55244', -7.7925428, 110.3504328, 'logo_rs_public.png'),
(3471325, 'RS Khusus Ibu dan Anak Permata Bunda', 'RSIA', 'C', 'Organisasi Sosial', '081226541727', 'Jl. Ngeksigondo No.56, Prenggan, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55172', -7.8203796, 110.3972186, 'logo_rs_public.png'),
(3471336, 'RS Bethesda Lempuyangwangi', 'RSU', 'D', 'Organisasi Sosial', '081226541727', 'Jl. Hayam Wuruk No.6, Bausasran, Kec. Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55211', -7.7965049, 110.370508, 'logo_rs_public.png'),
(3471373, 'RS Happy Land Medical Centre', 'RSU', 'C', 'Swasta', '081226541727', 'Jl. Ipda Tut Harsono Jl. Melati Wetan No.53, Muja Muju, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165', -7.7939617, 110.3893459, 'logo_rs_public.png'),
(3471377, 'RS Pratama Kota Yogyakarta', 'RSU', 'D', 'Pemkot', '081226541727', 'Karanganyar, Jl. Kolonel Sugiyono No.98, Brontokusuman, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55153', -7.8155951, 110.3713309, 'logo_rs_public.png'),
(3471379, 'RS Khusus Ibu dan Anak Rachmi', 'RSIA', 'C', 'Perusahaan', '081226541727', 'Jl. KH. Wachid Hasyim D.I No.47, Notoprajan, Ngampilan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55262', -7.8036118, 110.3539542, 'logo_rs_public.png'),
(3471380, 'RS Siloam Yogyakarta', 'RSU', 'C', 'Perusahaan', '081226541727', 'Jl. Laksda Adisucipto No.32-34, Demangan, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', -7.7834211, 110.3883033, 'logo_rs_public.png'),
(3471381, 'RS AMC Muhammadiyah', 'RSU', 'D', 'Perusahaan', '081226541727', 'Jl. HOS Cokroaminoto No.17B, Pakuncen, Wirobrajan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55253', -7.7996434, 110.3491437, 'logo_rs_public.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ktp` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `no_hp` varchar(14) DEFAULT NULL,
  `no_hp_keluarga` varchar(14) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` enum('Aktif','Nonaktif') DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ktp`, `nama`, `jenis_kelamin`, `no_hp`, `no_hp_keluarga`, `alamat`, `status`, `username`, `password`) VALUES
('34040321', 'Firdaus Ardiansyah Saleh', 'Laki-laki', '081226541727', '081226541727', 'Karangnongko, Gamping Kidul, Ambarketawang, Sleman', 'Aktif', 'farhannurrahman', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `kode_rumahsakit` (`kode_rumahsakit`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `ktp` (`ktp`),
  ADD KEY `kode_rumahsakit` (`kode_rumahsakit`);

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `kode_rumahsakit` (`kode_rumahsakit`);

--
-- Indeks untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id_permintaan`),
  ADD KEY `ktp` (`ktp`),
  ADD KEY `kode_rumahsakit` (`kode_rumahsakit`);

--
-- Indeks untuk tabel `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`kode_rumahsakit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ktp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id_permintaan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`kode_rumahsakit`) REFERENCES `rumah_sakit` (`kode_rumahsakit`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `user` (`ktp`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`kode_rumahsakit`) REFERENCES `rumah_sakit` (`kode_rumahsakit`);

--
-- Ketidakleluasaan untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `pelayanan_ibfk_1` FOREIGN KEY (`kode_rumahsakit`) REFERENCES `rumah_sakit` (`kode_rumahsakit`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `permintaan_ibfk_1` FOREIGN KEY (`ktp`) REFERENCES `user` (`ktp`),
  ADD CONSTRAINT `permintaan_ibfk_2` FOREIGN KEY (`kode_rumahsakit`) REFERENCES `rumah_sakit` (`kode_rumahsakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
