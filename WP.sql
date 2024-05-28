-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2021 pada 12.46
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `designators`
--

CREATE TABLE `designators` (
  `designators_id` int(11) NOT NULL,
  `designators_name` varchar(50) NOT NULL,
  `designators_unit` varchar(50) NOT NULL,
  `designators_material` int(20) NOT NULL,
  `designators_jasa` int(20) NOT NULL,
  `designators_uraian` varchar(255) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `designators`
--

INSERT INTO `designators` (`designators_id`, `designators_name`, `designators_unit`, `designators_material`, `designators_jasa`, `designators_uraian`, `updated_at`, `created_at`) VALUES
(430, 'DC-OF-SM-12D', 'meter', 10069, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 12 core G 652 D', '2020-10-01', '2020-10-01'),
(431, 'DC-OF-SM-24D', 'meter', 13139, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 24 core G 652 D', '2020-10-01', '2020-10-01'),
(432, 'DC-OF-SM-48D', 'meter', 19356, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 48 core G 652 D', '2020-10-01', '2020-10-01'),
(433, 'DC-OF-SM-96D', 'meter', 35193, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 96 core G 652 D', '2020-10-01', '2020-10-01'),
(434, 'DC-OF-SM-144D', 'meter', 49857, 4652, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 144 core G 652 D', '2020-10-01', '2020-10-01'),
(435, 'DC-OF-SM-288D', 'meter', 90329, 4644, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 288 core G 652 D', '2020-10-01', '2020-10-01'),
(436, 'AC-OF-SM-12D', 'meter', 14312, 5327, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 12 core G 652 D', '2020-10-01', '2020-10-01'),
(437, 'AC-OF-SM-24D', 'meter', 17597, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D', '2020-10-01', '2020-10-01'),
(438, 'AC-OF-SM-48D', 'meter', 24635, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 48 core G 652 D', '2020-10-01', '2020-10-01'),
(439, 'AC-OF-SM-96D', 'meter', 37539, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 96 core G 652 D', '2020-10-01', '2020-10-01'),
(440, 'DC-OF-SM-12C', 'meter', 13608, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 12 core G 655 C ', '2020-10-01', '2020-10-01'),
(441, 'DC-OF-SM-24C', 'meter', 19356, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 24 core G 655 C ', '2020-10-01', '2020-10-01'),
(442, 'DC-OF-SM-48C', 'meter', 30501, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 48 core G 655 C ', '2020-10-01', '2020-10-01'),
(443, 'DC-OF-SM-96C', 'meter', 63347, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 96 core G 655 C ', '2020-10-01', '2020-10-01'),
(444, 'AC-OF-SM-12C', 'meter', 18696, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 12 core G 655 C ', '2020-10-01', '2020-10-01'),
(445, 'AC-OF-SM-24C', 'meter', 24752, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 655 C ', '2020-10-01', '2020-10-01'),
(446, 'AC-OF-SM-48C', 'meter', 38712, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 48 core G 655 C ', '2020-10-01', '2020-10-01'),
(447, 'AC-OF-SM-96C', 'meter', 66867, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 96 core G 655 C ', '2020-10-01', '2020-10-01'),
(448, 'DC-OF-SM-8-SC', 'meter', 11614, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 8 core G 652 D, \"Easy to split\" ', '2020-10-01', '2020-10-01'),
(449, 'DC-OF-SM-12-SC', 'meter', 14401, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 12 core G 652 D, \"Easy to split\" ', '2020-10-01', '2020-10-01'),
(450, 'DC-OF-SM-24-SC', 'meter', 20177, 3824, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 24 core G 652 D, \"Easy to split\" ', '2020-10-01', '2020-10-01'),
(451, 'AC-OF-SM-8-SC', 'meter', 14077, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 8 core G 652 D, \"Easy to split\" ', '2020-10-01', '2020-10-01'),
(452, 'AC-OF-SM-12-SC', 'meter', 18418, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 12 core G 652 D, \"Easy to split\" ', '2020-10-01', '2020-10-01'),
(453, 'AC-OF-SM-24-SC', 'meter', 22641, 5287, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D, \"Easy to split\" ', '2020-10-01', '2020-10-01'),
(454, 'SC-OF-SM-24', 'pcs', 765448, 37593, 'Pengadaan dan pemasangan alat sambung (cabang/ lurus) untuk Fiber Optik kapasitas 12 - 24 core', '2020-10-01', '2020-10-01'),
(455, 'SC-OF-SM-48', 'pcs', 864749, 37593, 'Pengadaan dan pemasangan alat sambung (cabang/ lurus) untuk Fiber Optik kapasitas 12 - 48 core', '2020-10-01', '2020-10-01'),
(456, 'SC-OF-SM-96', 'pcs', 987164, 37593, 'Pengadaan dan pemasangan alat sambung (cabang/ lurus) untuk Fiber Optik kapasitas 12 - 96 core', '2020-10-01', '2020-10-01'),
(457, 'SC-OF-SM-144', 'pcs', 1372527, 37593, 'Pengadaan dan pemasangan alat sambung (cabang/ lurus) untuk Fiber Optik kapasitas 12 - 144 core', '2020-10-01', '2020-10-01'),
(458, 'SC-OF-SM-288', 'pcs', 2698130, 37593, 'Pengadaan dan pemasangan alat sambung (cabang/ lurus) untuk Fiber Optik kapasitas 12 - 288 core', '2020-10-01', '2020-10-01'),
(459, 'OS-SM-1', 'core', 0, 64643, 'Penyambungan Kabel Optik Single Mode kap 1 core dengan cara fusion splice', '2020-10-01', '2020-10-01'),
(460, 'AB-OF-SM-2D', 'meter', 2238, 2653, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 2 core, G 652 D ', '2020-10-01', '2020-10-01'),
(461, 'AB-OF-SM-4D', 'meter', 3132, 2653, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 4 core, G 652 D ', '2020-10-01', '2020-10-01'),
(462, 'AB-OF-SM-8D', 'meter', 5817, 2653, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode  core, G 652 D ', '2020-10-01', '2020-10-01'),
(463, 'AB-OF-SM-12DD', 'Meter', 80561, 26531, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 12 core, G 652 D1', '2021-09-15', '2020-10-01'),
(464, 'AB-OF-SM-24D', 'meter', 11474, 3759, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 24 core, G 652 D ', '2020-10-01', '2020-10-01'),
(465, 'AB-OF-SM-48D', 'meter', 18124, 3759, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 48 core, G 652 D ', '2020-10-01', '2020-10-01'),
(466, 'AB-OF-SM-72D', 'meter', 29089, 3759, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 72 core, G 652 D ', '2020-10-01', '2020-10-01'),
(467, 'AB-OF-SM-96D', 'meter', 34236, 3715, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 96 core, G 652 D ', '2020-10-01', '2020-10-01'),
(468, 'AB-OF-SM-144D', 'meter', 52808, 4246, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 144 core, G 652 D ', '2020-10-01', '2020-10-01'),
(469, 'AB-OF-SM-288D', 'meter', 100693, 5308, 'Pengadaan dan pemasangan  Air Blown Cable Optik, Single Mode 288 core, G 652 D ', '2020-10-01', '2020-10-01'),
(470, 'PC-APC-657-2', 'pcs', 81020, 3341, 'Pengadaan dan pemasangan Patch cord 2 meter, (FC/LC/SC-APC To FC/LC/SC-APC), G.657', '2020-10-01', '2020-10-01'),
(471, 'PC-APC/UPC-657-A1', 'meter', 5349, 1654, 'Additional patch cord, G.657', '2020-10-01', '2020-10-01'),
(472, 'PC-UPC-657-2', 'pcs', 67062, 3341, 'Pengadaan dan pemasangan Patch cord 2 meter, (FC/LC/SC-UPC To FC/LC/SC-UPC), G.657', '2020-10-01', '2020-10-01'),
(473, 'PC-APC-655-2', 'pcs', 73905, 3341, 'Pengadaan dan pemasangan Patch cord 2 meter, (FC/LC/SC-APC To FC/LC/SC-APC), G.655C', '2020-10-01', '2020-10-01'),
(474, 'PC-APC/UPC-655-A1', 'meter', 5349, 1654, 'Additional patch cord, G.655', '2020-10-01', '2020-10-01'),
(475, 'PC-UPC-655-2', 'pcs', 64081, 3341, 'Pengadaan dan pemasangan Patch cord 2 meter, (FC/LC/SC-UPC To FC/LC/SC-UPC), G.655C', '2020-10-01', '2020-10-01'),
(476, 'PC-APC-652-2', 'pcs', 75782, 3341, 'Pengadaan dan pemasangan Patch cord 2 meter, (FC/LC/SC-APC To FC/LC/SC-APC), G.652 D', '2020-10-01', '2020-10-01'),
(477, 'PC-APC/UPC-652-A1', 'meter', 5349, 1654, 'Additional patch cord, G.652D', '2020-10-01', '2020-10-01'),
(478, 'PC-UPC-652-2', 'pcs', 61318, 3341, 'Pengadaan dan pemasangan Patch cord 2 meter, (FC/LC/SC-UPC To FC/LC/SC-UPC), G.652D', '2020-10-01', '2020-10-01'),
(479, 'ODC-C-48', 'pcs', 4950838, 4594232, 'Pengadaan dan pemasangan ODC-Pole (Outdoor)  dengan space untuk spliter modular termasuk material adaptor SC  kap 48 core, berikut pelabelan', '2020-10-01', '2020-10-01'),
(480, 'ODC-C-96', 'pcs', 9099000, 4699000, 'Pengadaan dan pemasangan kabinet ODC (Outdoor) kap 96 core dengan space untuk spliter modular termasuk material adaptor SC, pigtail, pondasi berlapis keramik, lantai kerja keramik, patok pengaman (5 buah), berikut pelabelan', '2020-10-01', '2020-10-01'),
(481, 'ODC-C-144', 'pcs', 13821347, 6208009, 'Pengadaan dan pemasangan kabinet ODC (Outdoor) kap 144 core dengan space untuk spliter modular termasuk material adaptor SC, pigtail, pondasi berlapis keramik, lantai kerja keramik, patok pengaman (5 buah), berikut pelabelan', '2020-10-01', '2020-10-01'),
(482, 'ODC-C-288', 'pcs', 26085052, 6254855, 'Pengadaan dan pemasangan kabinet ODC (Outdoor) kap 288 core dengan space untuk spliter modular termasuk material adaptor SC, pigtail, pondasi berlapis keramik, lantai kerja keramik, patok pengaman (5 buah), berikut pelabelan', '2020-10-01', '2020-10-01'),
(483, 'ODC-C-576', 'pcs', 62007536, 6205815, 'Pengadaan dan pemasangan kabinet ODC (Outdoor) kap 576 core dengan space untuk spliter modular termasuk material adaptor SC, pigtail, pondasi berlapis keramik, lantai kerja keramik, patok pengaman (5 buah), berikut pelabelan', '2020-10-01', '2020-10-01'),
(484, 'ODC-PROT-144', 'unit', 1750000, 700000, 'Pengaman ODC 144 (Besi siku 4cmx4cmx4mm, besi beton 10mm (jarak antar besi beton 10cm, engsel besar, baut ram set 14mm dan kunci gembok 50mm', '2020-10-01', '2020-10-01'),
(485, 'ODC-PROT-288', 'unit', 1900000, 750000, 'Pengaman ODC 288 (Besi siku 4cmx4cmx4mm, besi beton 10mm (jarak antar besi beton 10cm, engsel besar, baut ram set 14mm dan kunci gembok 50mm', '2020-10-01', '2020-10-01'),
(486, 'ODP-CA-8', 'pcs', 1303901, 150371, 'Pengadaan dan pemasangan ODP type Closure Aerial Kap 8 core berikut space pasive spliter (1:8), adapter SC,berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(487, 'ODP-CA-16', 'pcs', 1478106, 150371, 'Pengadaan dan pemasangan ODP type Closure Aerial Kap 16 core berikut space 2 pasive spliter (1:8), adapter SC,berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(488, 'ODP-A-8', 'pcs', 1035932, 150371, 'Pengadaan dan pemasangan ODP type Indoor/wall Kap 8 core berikut space pasive spliter (1:8), adapter SC,berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(489, 'ODP-A-16', 'pcs', 1196562, 150371, 'Pengadaan dan pemasangan ODP type Indoor/wall Kap 16 core berikut space 2 pasive spliter (1:8), adapter SC,berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(490, 'ODP-Solid-PB-8', 'pcs', 1407720, 173505, 'Pengadaan dan pemasangan ODP type SOLID Kap 8 core adaptor SC/UPC terdiri dari 1 Box Spliter (termasuk 1 spliter 1:8), 1 Box Dummy beserta Accessories, berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(491, 'ODP-Solid-PB-16', 'pcs', 1824171, 173505, 'Pengadaan dan pemasangan ODP type SOLID Kap 16 core adaptor SC/UPC terdiri dari 2 Box Spliter (termasuk 2 spliter 1:8) beserta Accessories, berikut pelabelandan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(492, 'ODP-PL-8', 'pcs', 2273069, 150371, 'Pengadaan dan pemasangan ODP ( Pilar ) kap  8 core termasuk pigtail, berikut space 1 splitter (1:8),  pelabelan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(493, 'ODP-PL-16', 'pcs', 2584055, 150371, 'Pengadaan dan pemasangan ODP ( Pilar ) kap  16 core termasuk pigtail, berikut space 2 splitter (1:8),  pelabelan penempelan QR code (disediakan oleh Telkom)', '2020-10-01', '2020-10-01'),
(494, 'TC-SM-12', 'pcs', 1082129, 816549, 'Pengadaan dan Pemasangan OTB termasuk terminasi dan penyambungan kabel optik Single mode kap 12 core serta Adapter (SC Connector), pigtail dan protection sleeve pada cassette/box ', '2020-10-01', '2020-10-01'),
(495, 'TC-SM-24', 'pcs', 1521333, 1633098, 'Pengadaan dan Pemasangan OTB termasuk terminasi dan penyambungan kabel optik Single mode kap 24 core serta Adapter (SC Connector), pigtail dan protection sleeve pada cassette/box ', '2020-10-01', '2020-10-01'),
(496, 'TC-SM-48', 'pcs', 3100943, 3266197, 'Pengadaan dan Pemasangan OTB termasuk terminasi dan penyambungan kabel optik Single mode kap 48 core serta Adapter (SC Connector), pigtail dan protection sleeve pada cassette/box ', '2020-10-01', '2020-10-01'),
(497, 'TC-SM-96', 'pcs', 5627361, 6532394, 'Pengadaan dan Pemasangan OTB termasuk terminasi dan penyambungan kabel optik Single mode kap 96 core serta Adapter (SC Connector), pigtail dan protection sleeve pada cassette/box ', '2020-10-01', '2020-10-01'),
(498, 'PS-1-2-ODC', 'pcs', 278262, 37409, 'Pengadaan dan pemasangan Passive Splitter 1:2, type modular SC/UPC, for ODC, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(499, 'PS-1-4-ODC', 'pcs', 368999, 37409, 'Pengadaan dan pemasangan Passive Splitter 1:4, type modular SC/UPC, for ODC, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(500, 'PS-1-8-ODP', 'pcs', 604324, 37409, 'Pengadaan dan pemasangan Passive Splitter 1:8, type modular SC/UPC, for ODP, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(501, 'PS-1-16-ODP', 'pcs', 907979, 37409, 'Pengadaan dan pemasangan Passive Splitter 1:16, type modular SC/UPC, for ODP, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(502, 'PS-2-2-ODC', 'pcs', 715591, 37680, 'Pengadaan dan pemasangan Passive Splitter 2:2, type modular SC/UPC, for ODC, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(503, 'PS-2-4-ODC', 'pcs', 844632, 37680, 'Pengadaan dan pemasangan Passive Splitter 2:4, type modular SC/UPC, for ODC, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(504, 'PS-2-8-ODX', 'pcs', 720000, 35000, 'Pengadaan dan pemasangan Passive Splitter 2:8, type modular SC/UPC, for ODC, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(505, 'PS-1-32-ODX', 'pcs', 1376000, 35000, 'Pengadaan dan pemasangan Passive Splitter 1:32, type modular SC/UPC, for ODC/ODP, termasuk pigtail ', '2020-10-01', '2020-10-01'),
(506, 'SITAC ODC', 'Node', 0, 8165492, 'Akuisisi Lahan SITAC ODC', '2020-10-01', '2020-10-01'),
(507, 'PU-S7.0-140', 'pcs', 1407720, 265075, 'Pengadaan dan Pemasangan Tiang Besi 7 meter, berikut cat & cor pondasi dan assesories dengan kekuatan tarik 140 kg', '2020-10-01', '2020-10-01'),
(508, 'PU-S9.0-140', 'pcs', 2228890, 267988, 'Pengadaan dan Pemasangan Tiang Besi 9 meter, berikut cat & cor dan assesories dengan kekuatan tarik 140 kg', '2020-10-01', '2020-10-01'),
(509, 'PU-C7.0-250', 'pcs', 2932750, 216113, 'Pengadaan dan Pemasangan Tiang Beton  7 meter, berikut assesories dengan kekuatan tarik 250 kg', '2020-10-01', '2020-10-01'),
(510, 'PU-C9.0-300', 'pcs', 3507569, 213452, 'Pengadaan dan Pemasangan Tiang Beton  9 meter, berikut assesories dengan kekuatan tarik 300 kg', '2020-10-01', '2020-10-01'),
(511, 'GU-G', 'pcs', 544078, 66799, 'Pengadaan dan Pemasangan Temberang Tarik', '2020-10-01', '2020-10-01'),
(512, 'PU-AS', 'set', 34262, 44465, 'Pengadaan dan Pemasangan Asesoris tiang eksisting', '2020-10-01', '2020-10-01'),
(513, 'GB-G1', 'pcs', 934664, 448994, 'Pengadaan dan Pemasangan Grounding 1 titik rod pada ODP /kotak pembagi dengan tahanan maks 3 ohm', '2020-10-01', '2020-10-01'),
(514, 'GB-G3', 'pcs', 2815440, 520515, 'Pengadaan dan Pemasangan Grounding 3 titik rod pada ODC dengan tahanan maks 1 ohm', '2020-10-01', '2020-10-01'),
(515, 'GB-G-INTG', 'pcs', 282741, 180903, 'Pengadaan dan Pemasangan material Grounding di lokasi gedung eksisting dengan cara integrasi', '2020-10-01', '2020-10-01'),
(516, 'TC-02-ODC', 'pcs', 254400, 67089, 'Pengadaan dan Pemasangan Riser Pipe untuk pengaman kabel optik ke ODC Pole / titik naik KU diamater 2 inch  panjang 3 meter', '2020-10-01', '2020-10-01'),
(517, ' PP-OF-IN', 'meter', 27920, 4446, 'Pengadaan dan Pemasangan Pipe Protector Indoor Cable (PVC White) High Impact Conduit 20 mm', '2020-10-01', '2020-10-01'),
(518, ' PP-OF-OUT', 'meter', 27588, 4446, 'Pengadaan dan Pemasangan Pipe Protector  Outdoor Cable ( PVC Black) High Impact Conduit 20 mm', '2020-10-01', '2020-10-01'),
(519, 'DD-S3-1', 'meter', 351944, 66698, 'Pengadaan dan pemasangan Pipa Besi Diameter 100 mm dan ketebalan pipa 3,65 mm untuk crossing 1 pipa  bentang = 6 meter', '2020-10-01', '2020-10-01'),
(520, 'DD-S3-2', 'meter', 703889, 88931, 'Pengadaan dan pemasangan Pipa Besi Diameter 100 mm dan ketebalan pipa 3,65 mm untuk crossing 2 pipa  bentang = 6 meter', '2020-10-01', '2020-10-01'),
(521, 'DD-S3-3', 'meter', 1055833, 133395, 'Pengadaan dan pemasangan Pipa Besi Diameter 100 mm dan ketebalan pipa 3,65 mm untuk crossing 3 pipa  bentang = 6 meter', '2020-10-01', '2020-10-01'),
(522, 'DD-V4-1', 'meter', 66964, 66698, 'Pengadan dan Pemasangan Pipa Duct PVC diameter dalam 100 mm, ketebalan 4 mm, 1 pipa termasuk pengecoran', '2020-10-01', '2020-10-01'),
(523, 'DD-V4-2', 'meter', 133927, 89066, 'Pengadan dan Pemasangan Pipa Duct PVC diameter dalam 100 mm, ketebalan 4 mm, 2 pipa termasuk pengecoran', '2020-10-01', '2020-10-01'),
(524, 'DD-V5-1', 'meter', 64749, 66698, 'Pemasangan Pipa Duct dengan selubung pasir dia 100 mm dengan ketebalan 5,5 mm, 1 pipa ( crossing )', '2020-10-01', '2020-10-01'),
(525, 'DD-V5-2', 'meter', 130214, 88931, 'Pemasangan Pipa Duct dengan selubung pasir dia 100 mm dengan ketebalan 5,5 mm, 2 pipa ( crossing )', '2020-10-01', '2020-10-01'),
(526, 'DD-DA-S1', 'meter', 351944, 266792, 'Pengadaan dan pemasangan pipa Duct menempel pada  jembatan existing menggunakan Pipa Galvanis diamenter 100 mm, tebal 3,65 mm, 1 pipa', '2020-10-01', '2020-10-01'),
(527, 'DD-DA-S2', 'meter', 703889, 533582, 'Pengadaan dan pemasangan pipa Duct menempel pada  jembatan existing menggunakan Pipa Galvanis diamenter 100 mm, tebal 3,65 mm, 2 pipa', '2020-10-01', '2020-10-01'),
(528, 'DD-DA-S4', 'meter', 1407779, 1067164, 'Pengadaan dan pemasangan pipa Duct menempel pada  jembatan existing menggunakan Pipa Galvanis diamenter 100 mm, tebal 3,65 mm, 4 pipa', '2020-10-01', '2020-10-01'),
(529, 'DD-BSS-S1', 'meter', 453403, 266792, 'Pengadaan dan pemasangan pipa Duct pada jembatan dengan self support berpenguatan menggunakan Pipa besi Galv 1 pipa, bentang 6 - 12 meter', '2020-10-01', '2020-10-01'),
(530, 'DD-BSS-S2', 'meter', 906724, 533582, 'Pengadaan dan pemasangan pipa Duct pada jembatan dengan self support berpenguatan menggunakan Pipa besi Galv 2 pipa, bentang 6 - 12 meter', '2020-10-01', '2020-10-01'),
(531, 'DD-BTS-S1', 'meter', 451644, 266792, 'Pengadaan dan pemasangan pipa Duct pada jembatan menggunakan Pipa besi Galv 1 pipa, bentang 6 - 12 meter', '2020-10-01', '2020-10-01'),
(532, 'DD-BTS-S2', 'meter', 903287, 533582, 'Pengadaan dan pemasangan pipa Duct pada jembatan menggunakan Pipa besi Galv 2 pipa, bentang 6 - 12 meter', '2020-10-01', '2020-10-01'),
(533, 'DD-BTS-S4', 'meter', 1795996, 808877, 'Pengadaan dan pemasangan pipa Duct pada jembatan menggunakan Pipa besi Galv 4 pipa, bentang 6 - 12 meter', '2020-10-01', '2020-10-01'),
(534, 'HB-PS-1', 'meter', 157992, 42528, 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 1 tiang besi, bentang s/d 40 meter', '2020-10-01', '2020-10-01'),
(535, 'HB-PS-2', 'meter', 325215, 51035, 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 2 tiang besi, bentang s/d 100 meter', '2020-10-01', '2020-10-01'),
(536, 'HB-PS-4', 'meter', 629485, 59540, 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 4 tiang besi, bentang = 100 meter', '2020-10-01', '2020-10-01'),
(537, 'HB-PC-2', 'meter', 534934, 51035, 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 2 tiang beton, bentang s/d 100 meter', '2020-10-01', '2020-10-01'),
(538, 'HB-PC-4', 'meter', 1048267, 59540, 'Pengadaan dan pemasangan Pipa Duct dengan system gantung 4 tiang beton, bentang = 100 meter', '2020-10-01', '2020-10-01'),
(539, 'DD-BMR-1', 'track', 1055833, 24496477, 'Pengadaan dan Pemasangan Boring pada Lintasan Kereta Api menggunakan 1 pipa Galvanis diameter 100 mm tebal 3,65 mm', '2020-10-01', '2020-10-01'),
(540, 'DD-BMR-2', 'track', 2111668, 36744715, 'Pengadaan dan Pemasangan Boring pada Lintasan Kereta Api menggunakan 2 pipa Galvanis diameter 100 mm tebal 3,65 mm', '2020-10-01', '2020-10-01'),
(541, 'DD-BMR-4', 'track', 4223335, 48992954, 'Pengadaan dan Pemasangan Boring pada Lintasan Kereta Api menggunakan 4 pipa Galvanis diameter 100 mm tebal 3,65 mm', '2020-10-01', '2020-10-01'),
(542, 'DC-SD-28-1', 'meter', 10118, 1808, 'Pengadaan dan Pemasangan 1 Subduct 28/32 mm pada polongan route Duct', '2020-10-01', '2020-10-01'),
(543, 'DC-SD-28-3', 'meter', 30354, 2360, 'Pengadaan dan Pemasangan 1 Subduct 28/32 mm pada polongan route Duct, 3 pipa', '2020-10-01', '2020-10-01'),
(544, 'DC-SD-33-1', 'meter', 10875, 1808, 'Pengadaan dan Pemasangan 1 Subduct 40/33 pada polongan route Duct', '2020-10-01', '2020-10-01'),
(545, 'DC-SD-33-2', 'meter', 22060, 2350, 'Pengadaan dan Pemasangan 1 Subduct 40/33 pada polongan route Duct, 2 pipa', '2020-10-01', '2020-10-01'),
(546, 'DC-SD-43-1', 'meter', 24049, 1808, 'Pengadaan dan Pemasangan 1 Subduct 50/42 pada polongan route Duct', '2020-10-01', '2020-10-01'),
(547, 'DC-SD-43-2', 'meter', 48097, 2350, 'engadaan dan Pemasangan 1 Subduct 50/42 pada polongan route Duct, 2 pipa', '2020-10-01', '2020-10-01'),
(548, 'DCD-PVC-1', 'meter', 14847, 1786, 'Pengadaan dan Pemasangan Duct Cable Penanggal diameter pipa PVC 2 inch (Class AW) 1  pipa', '2020-10-01', '2020-10-01'),
(549, 'DD-BM-100-1', 'meter', 351944, 77253, 'Pengadaan dan Pemasangan Pipa galvanis dengan ukuran diameter 100 mm dan ketebalan 3,65 mm dengan cara boring manual /mesin   1 pipa dengan kedalaman minimal 150 cm', '2020-10-01', '2020-10-01'),
(550, 'DD-BM-100-2', 'meter', 703889, 80199, 'Pengadaan dan Pemasangan Pipa galvanis dengan ukuran diameter 100 mm dan ketebalan 3,65 mm dengan cara boring manual /mesin   1 pipa dengan kedalaman minimal 150 cm, 2 pipa', '2020-10-01', '2020-10-01'),
(551, 'DD-BM-50-1', 'meter', 205293, 38991, 'Pengadaan dan Pemasangan Pipa galvanis dengan ukuran diameter 50 mm dan ketebalan 2,7 mm cara boring manual /mesin 1 pipa dengan kedalaman minimal 150 cm', '2020-10-01', '2020-10-01'),
(552, 'DD-BM-50-2', 'meter', 407922, 38991, 'Idem, 2 pipa', '2020-10-01', '2020-10-01'),
(553, 'DD-BM-HDPE-40-1', 'meter', 0, 39136, 'Pekerjaan Boring manual (rojok) HDPE  40/33 mm 1 pipa dengan kedalaman 1,5 meter ', '2020-10-01', '2020-10-01'),
(554, 'DD-BM-HDPE-40-2', 'meter', 0, 39020, 'Pengadaan dan Pemasangan Pipa galvanis dengan ukuran diameter 50 mm dan ketebalan 2,7 mm cara boring manual /mesin 1 pipa dengan kedalaman minimal 150 cm, 2 pipa', '2020-10-01', '2020-10-01'),
(555, 'DD-BM-HDPE-50-1', 'meter', 0, 39136, 'Pekerjaan Boring manual (rojok)  HDPE  50/42 mm 1 pipa dengan kedalaman 1,5 meter', '2020-10-01', '2020-10-01'),
(556, 'DD-BM-HDPE-50-2', 'meter', 0, 38991, 'Pekerjaan Boring manual (rojok)  HDPE  50/42 mm 2 pipa dengan kedalaman 1,5 meter', '2020-10-01', '2020-10-01'),
(557, 'DD-HDPE-40-1', 'meter', 13669, 1721, 'Pengadaan dan pemasangan pipa  HDPE  40/33 mm 1 pipa dengan kedalaman 1,5 meter', '2020-10-01', '2020-10-01'),
(558, 'DD-HDPE-40-2', 'meter', 27339, 2082, 'Pengadaan dan pemasangan pipa  HDPE  40/33 mm 2 pipa dengan kedalaman 1,5 meter', '2020-10-01', '2020-10-01'),
(559, 'DD-HDPE-50-1', 'meter', 23227, 1721, 'Pengadaan dan pemasangan pipa HDPE  50/42 mm 1 pipa dengan kedalaman 1,5 meter', '2020-10-01', '2020-10-01'),
(560, 'DD-HDPE-50-2', 'meter', 46455, 2082, 'Pengadaan dan pemasangan pipa HDPE  50/42 mm 2 pipa dengan kedalaman 1,5 meter', '2020-10-01', '2020-10-01'),
(561, 'DD-HDPE-40-1C', 'meter', 14224, 1721, 'Pengadaan dan pemasangan pipa HDPE 40/33 mm 1 pipa dengan kedalaman 1,5 meter sudah termasuk connector HDPE tipe compression fitting', '2020-10-01', '2020-10-01'),
(562, 'DD-HDPE-40-2C', 'meter', 28252, 2082, 'Pengadaan dan pemasangan pipa HDPE 40/33 mm 2 pipa dengan kedalaman 1,5 meter sudah termasuk connector HDPE tipe compression fitting', '2020-10-01', '2020-10-01'),
(563, 'DD-ROD', 'meter', 0, 2223, 'Pekerjaan Pembersihan pada route Duct yang kosong / Rodding Duct Existing.', '2020-10-01', '2020-10-01'),
(564, 'DD-RV-1', 'meter', 41115, 88931, 'Pekerjaan Perbaikan Route Duct / HDPE, 1 pipa.', '2020-10-01', '2020-10-01'),
(565, 'DD-RV-CONCRETE', 'm3', 1204961, 800374, 'Pekerjaan bobok dinding MH / HH termasuk perbaikan kembali', '2020-10-01', '2020-10-01'),
(566, 'DD-DS-S1', 'meter', 291857, 186754, 'Pengadaan dan pemasangan duct baru dengan cara melakukan boring dibawah dasar parit/sungai dengan kedalaman 1,5 M dengan menggunakan PVC diamater 100 mm dan ketebalan 5,5 mm 1 pipa', '2020-10-01', '2020-10-01'),
(567, 'DD-DS-COD1-M', 'meter', 28095, 523684, 'Pengadaan dan pemasangan duct  baru type COD, dengan mesin pengeboran (borring) dibawah parit, pada kedalaman 1,50 m di bawah dasar selokan, tanpa perlindungan PVC, 1 pipa', '2020-10-01', '2020-10-01'),
(568, 'Klem HDPE', 'pcs', 11500, 2300, 'Pengkleman HDPE di dinding beton dengan klem ketebalan 2mm lebar 2,5 cm menggunakan dynabolt termasuk rekondisi atau perbaikan kerusakan', '2020-10-01', '2020-10-01'),
(569, 'BC-TR-0.4', 'meter', 0, 13110, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung kedalaman 0.4 meter', '2020-10-01', '2020-10-01'),
(570, 'BC-TR-0.6', 'meter', 0, 17217, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung, kedalaman 0,6 meter', '2020-10-01', '2020-10-01'),
(571, 'BC-TR-1', 'meter', 0, 26895, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung, kedalaman 1 meter', '2020-10-01', '2020-10-01'),
(572, 'BC-TR-2', 'meter', 0, 31980, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung, kedalaman 1,2 meter', '2020-10-01', '2020-10-01'),
(573, 'BC-TR-3', 'meter', 0, 34153, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung, kedalaman 1,3 meter', '2020-10-01', '2020-10-01'),
(574, 'BC-TR-4', 'meter', 0, 36730, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung, kedalaman 1,4 meter', '2020-10-01', '2020-10-01'),
(575, 'BC-TR-5', 'meter', 0, 39136, 'Pekerjaan Galian, Pengurugan kembali dan perbaikan kembali, pengisian pasir, warning tape dan tanda rute kabel serta tempat sambung kedalaman 1,5 meter ', '2020-10-01', '2020-10-01'),
(576, 'BCTR-ROCK', 'meter', 0, 234040, 'Pengadaan galian batu masif kedalaman 1,5 meter, panjang minimum 5 m, termasuk pengadaan marking post', '2020-10-01', '2020-10-01'),
(577, 'BC-MTR-0.4', 'meter', 0, 184572, 'Pekerjaan galian pada permukaan jalan aspal dengan lebar galian 8 cm dan kedalaman 40 cm, termasuk pemetaan utility eksisting dengan metode Geo Penetrating Radar, perbaikan, pengurugan (backfilling) menggunakan concrete type K225 dan pengaspalan', '2020-10-01', '2020-10-01'),
(578, 'BD-SK', 'Titik', 60248, 88931, 'Pekerjaan bobokan dan perbaikan Dinding Chamber / BTS / STO untuk lubang Sparing Kabel', '2020-10-01', '2020-10-01'),
(579, 'SMD-ABS-2A', 'pcs', 284684, 174162, 'Pengadaan dan pemasangan Alat Sambung Micro Duct cabang / lurus 2 cabang,termasuk gas block (seal).', '2020-10-01', '2020-10-01'),
(580, 'SMD-ABS-3A', 'pcs', 310917, 188129, 'Pengadaan dan pemasangan Alat Sambung Micro Duct cabang / lurus 3 cabang,termasuk gas block (seal).', '2020-10-01', '2020-10-01'),
(581, 'SMD-ABS-4A', 'pcs', 867986, 206946, 'Pengadaan dan pemasangan Alat Sambung Micro Duct cabang / lurus 4 cabang,termasuk gas block (seal).', '2020-10-01', '2020-10-01'),
(582, 'SMD-ABS-6A', 'pcs', 726686, 227641, 'Pengadaan dan pemasangan Alat Sambung Micro Duct cabang / lurus 6 cabang,termasuk gas block (seal).', '2020-10-01', '2020-10-01'),
(583, 'DD-MDSC-5/3.5', 'pcs', 25569, 573, 'Pengadaan dan Pemasangan Straight Connector 5/3,5 mm ', '2020-10-01', '2020-10-01'),
(584, 'DD-MDSC-10/8', 'pcs', 26914, 573, 'Pengadaan dan Pemasangan Straight Connector 10/8 mm ', '2020-10-01', '2020-10-01'),
(585, 'DD-MDSC-12/10', 'pcs', 28395, 573, 'Pengadaan dan Pemasangan Straight Connector 12/10 mm ', '2020-10-01', '2020-10-01'),
(586, 'DD-MDDI-1A', 'meter', 6130, 2047, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(587, 'DD-MDDI-2A', 'meter', 8336, 2695, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(588, 'DD-MDDI-4A', 'meter', 13175, 3086, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 4 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(589, 'DD-MDDI-7A', 'meter', 18688, 3112, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 7 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(590, 'DD-MDDI-12A', 'meter', 28099, 3577, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 12 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(591, 'DD-MDDI-19A', 'meter', 39158, 4164, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 19 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(592, 'DD-MDDI-24A', 'meter', 47845, 4753, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Install, 24 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(593, 'DD-MDDI-1B', 'meter', 12423, 2645, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(594, 'DD-MDDI-2B', 'meter', 17747, 3086, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Install, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(595, 'DD-MDDI-4B', 'meter', 31594, 3528, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Install, 4 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(596, 'DD-MDDI-7B', 'meter', 46250, 4067, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Install, 7 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(597, 'DD-MDDI-1C', 'meter', 14681, 3331, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(598, 'DD-MDDI-2C', 'meter', 21157, 3822, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Install, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(599, 'DD-MDDI-4C', 'meter', 37913, 4754, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Install, 4 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(600, 'DD-MDDI-7C', 'meter', 55794, 5095, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Install, 7 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(601, 'DD-MDDI-1D', 'meter', 15643, 2880, 'Pengadaan dan Pemasangan Micro Duct 16/14mm, Direct Install, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(602, 'DD-MDDI-2D', 'meter', 22544, 3304, 'Pengadaan dan Pemasangan Micro Duct 16/14mm, Direct Install, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(603, 'DD-MDDB-1A', 'meter', 15284, 3004, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(604, 'DD-MDDB-2A', 'meter', 18069, 3952, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(605, 'DD-MDDB-4A', 'meter', 25813, 4527, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 4 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(606, 'DD-MDDB-7A', 'meter', 33428, 4563, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried,7 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(607, 'DD-MDDB-12A', 'meter', 49691, 5246, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 12 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(608, 'DD-MDDB-19A', 'meter', 63934, 6107, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 19 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(609, 'DD-MDDB-24A', 'meter', 76149, 6970, 'Pengadaan dan Pemasangan Micro Duct 5/3.5mm, Direct Buried, 24 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(610, 'DD-MDDB-1B', 'meter', 25808, 3881, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Buried, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(611, 'DD-MDDB-2B', 'meter', 33428, 4527, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Buried, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(612, 'DD-MDDB-4B', 'meter', 59242, 5174, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Buried, 4 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(613, 'DD-MDDB-7B', 'meter', 78987, 5964, 'Pengadaan dan Pemasangan Micro Duct 10/8mm, Direct Buried, 7 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(614, 'DD-MDDB-1C', 'meter', 30100, 4886, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Buried, 1 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(615, 'DD-MDDB-2C', 'meter', 39364, 5605, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Buried, 2 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(616, 'DD-MDDB-4C', 'meter', 70083, 6917, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Buried, 4 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(617, 'DD-MDDB-7C', 'meter', 93959, 7473, 'Pengadaan dan Pemasangan Micro Duct 12/10mm, Direct Buried, 7 way, untuk Air / Water Blowing kabel FO termasuk connector', '2020-10-01', '2020-10-01'),
(618, 'DD-MDEC-5/3.5', 'pcs', 14803, 573, 'Pengadaan dan Pemasangan End Cap 5/3,5 mm ', '2020-10-01', '2020-10-01'),
(619, 'DD-MDEC-10/8', 'pcs', 14803, 573, 'Pengadaan dan Pemasangan End Cap 10/8 mm ', '2020-10-01', '2020-10-01'),
(620, 'DD-MDEC-12/10', 'pcs', 14803, 573, 'Pengadaan dan Pemasangan End Cap 12/10 mm ', '2020-10-01', '2020-10-01'),
(621, 'FID-28-1', 'meter', 23462, 2221, 'Fabric Innerduct diameter 28mm 1 polongan', '2020-10-01', '2020-10-01'),
(622, 'FID-28-2', 'meter', 42232, 2221, 'Fabric Innerduct diameter 28mm 2 polongan', '2020-10-01', '2020-10-01'),
(623, 'FID-28-3', 'meter', 68040, 2221, 'Fabric Innerduct diameter 28mm 3 polongan', '2020-10-01', '2020-10-01'),
(624, 'MH-HH1', 'pcs', 6803980, 2986490, 'Pekerjaan Pembuatan Handhole Type HH1 ukuran dimensi dalam (P X L X T = 170x150x165) cor beton 1 : 2 : 3 ', '2020-10-01', '2020-10-01'),
(625, 'MH-HH2', 'pcs', 4760308, 2273575, 'Pekerjaan Pembuatan Handhole Type HH2 ukuran dimensi dalam (P X L X T = 120x130x165) cor beton 1 : 2 : 3', '2020-10-01', '2020-10-01'),
(626, 'HH-PIT-P-HA', 'pcs', 896976, 201671, 'Pekerjaan Pembuatan HH Pit Portable Home Access  beserta aksesorisnya', '2020-10-01', '2020-10-01'),
(627, 'HH-PIT-P-ODP', 'pcs', 2932750, 300814, 'Pekerjaan Pembuatan HH Pit Portable ODP beserta aksesorisnya', '2020-10-01', '2020-10-01'),
(628, 'HH-PIT-P-ODC', 'pcs', 11120988, 567605, 'Pekerjaan Pembuatan HH Pit Portable ODC beserta aksesorisnya', '2020-10-01', '2020-10-01'),
(629, 'MH-CA', 'pcs', 952177, 786556, 'Pekerjaan Peninggian Tutup Manhole/Handhole', '2020-10-01', '2020-10-01'),
(630, 'CO-OF', 'core', 0, 65365, 'Pekerjaan Cut Over Kabel Serat Optik', '2020-10-01', '2020-10-01'),
(631, 'RS-IN-SC-1P', 'pcs', 101356, 29982, 'Pemasangan dan terminasi Roset/Indoor Optical Outlet with SC Adaptor - kap 1 port berikut pigtail', '2020-10-01', '2020-10-01'),
(632, 'Close Rack 12U', 'Unit', 4768652, 694020, '19 Wallmounted Rack 12U Depth 450mm', '2020-10-01', '2020-10-01'),
(633, 'DC-OF-SM-2A', 'meter', 7508, 3239, 'Pengadaan dan pemasangan Kabel Serat Optic Penanggal Single Mode 2 core dgn pelindung pipa G 657 A (indoor)', '2020-10-01', '2020-10-01'),
(634, 'FC-SC-DC', 'pcs', 51616, 67089, 'Pengadaan dan pemasangan SC/UPC Connector for Drop / Indoor Cable (Fusion)', '2020-10-01', '2020-10-01'),
(635, 'Coring', 'titik', 0, 925360, 'Pekerjaan bobokan tembok/coring Cor Beton di ruang Shaft', '2020-10-01', '2020-10-01'),
(636, 'Klem Galvanise', 'pcs', 14429, 2313, 'Pengadaan & Pemasangan klem galvanise untuk airblown pipe dengan ketebalan 2mm, lebar 2.5 cm menggunakan dynabolt termasuk rekondisi atau perbaikan kerusakan', '2020-10-01', '2020-10-01'),
(637, 'Rak Pasif spliter 1:4', 'pcs', 1818305, 485814, '19 inch 24 core Pull type optical fiber distribution frame 24 port Rack Mounted Indoor fiber patch panel, Include RS232 Passive Splitter Rackmount Chassis - 2U', '2020-10-01', '2020-10-01'),
(638, 'FTM-CR-19', 'Unit', 18224614, 335378, 'Pengadaan & Pemasangan Optical Fiber High Density Cable, Close Rack 19 Inch. Lengkap termasuk Fibre Management maximum Capacity 7x144 core / 42U', '2020-10-01', '2020-10-01'),
(639, ' TC-SM-144 ', 'pcs', 11247185, 83845, 'Pengadaan dan Pemasangan OTB Single Mode kapasitas 144 core (tidak termasuk terminasi), Adapter (SC Connector), pigtail dan protection sleeve pada cassette/box', '2020-10-01', '2020-10-01'),
(640, 'FTM-BC-8F-10', 'pcs', 452512, 393362, 'FO Cord Bundled cable 8F, dengan connector satu sisi SC/LC/FC (L=10m), dan splicing di sisi lainnya', '2020-10-01', '2020-10-01'),
(641, 'FTM-BC-8F-1', 'meter', 6955, 872, 'Tambahan panjang cord bundled cable 8F', '2020-10-01', '2020-10-01'),
(642, 'FTM-VR-90-Cover', 'piece', 667080, 48950, 'Vertical raise 90 dan cover (4x4)', '2020-10-01', '2020-10-01'),
(643, 'FTM-VR-45-Cover', 'piece', 667080, 48950, 'Vertical raise 45 dan cover (4x4)', '2020-10-01', '2020-10-01'),
(644, 'FTM-TF', 'piece', 266832, 48950, 'Trumpet flare dan kit (4x4)', '2020-10-01', '2020-10-01'),
(645, 'FTM-Connector-44', 'piece', 117502, 8900, 'Connector 4x4', '2020-10-01', '2020-10-01'),
(646, 'FTM-Exit-4', 'piece', 555464, 48950, '4 Express exit', '2020-10-01', '2020-10-01'),
(647, 'FTM-PC-Cover', 'meter', 2783466, 53204, 'Pemasangan jalur Patchcord 4x12 lengkap cover', '2020-10-01', '2020-10-01'),
(648, 'Tray-Mesh-2', 'meter', 71783, 37069, 'Wire mesh cable tray 20 x 10 cm, dengan supporting material', '2020-10-01', '2020-10-01'),
(649, 'Tray-Mesh-3', 'meter', 105752, 37069, 'Wire mesh cable tray 30 x 10 cm, dengan supporting material', '2020-10-01', '2020-10-01'),
(650, 'VSS-90-2', 'set', 77765, 37069, 'Vertical Support Structure rod (2m) maksimal sepasang (kiri-kanan), dengan kit instalasi (tiap 90cm)', '2020-10-01', '2020-10-01'),
(651, 'Tray-Bundled-Out-30', 'meter', 141537, 39249, 'Tray cable FO Cord bundled Outdoor 30x10 cm lengkap dengan penguat', '2020-10-01', '2020-10-01'),
(652, 'Tray-Feeder-30', 'meter', 158628, 39249, 'Tray cable feeder outdoor 30x10 cm lengkap dengan penguat', '2020-10-01', '2020-10-01'),
(653, 'GC-NYAF-16', 'meter', 26705, 1744, 'Kabel Grounding NYAF 16 mm', '2020-10-01', '2020-10-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eval`
--

CREATE TABLE `eval` (
  `project_id` int(11) NOT NULL,
  `eval_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `eval`
--

INSERT INTO `eval` (`project_id`, `eval_id`, `text`, `updated_at`, `created_at`) VALUES
(50, 17, 'acc', '2021-09-22 00:26:08', '2021-09-22 00:26:08'),
(50, 18, 'acc.', '2021-09-22 00:28:53', '2021-09-22 00:28:53'),
(51, 19, 'acc', '2021-09-22 01:41:39', '2021-09-22 01:41:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_progress`
--

CREATE TABLE `history_progress` (
  `project_id` int(11) NOT NULL,
  `hp_designator` varchar(255) NOT NULL,
  `hp_volume` int(11) NOT NULL,
  `hp_status` tinyint(1) NOT NULL,
  `hp_approval` tinyint(1) NOT NULL,
  `hp_deskripsi` varchar(255) NOT NULL,
  `hp_unit` varchar(50) NOT NULL,
  `hp_tot_material` int(50) NOT NULL,
  `hp_tot_jasa` int(50) NOT NULL,
  `hp_grand_tot` int(20) NOT NULL,
  `hp_percent` float NOT NULL,
  `hp_id` int(11) NOT NULL,
  `hp_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_progress`
--

INSERT INTO `history_progress` (`project_id`, `hp_designator`, `hp_volume`, `hp_status`, `hp_approval`, `hp_deskripsi`, `hp_unit`, `hp_tot_material`, `hp_tot_jasa`, `hp_grand_tot`, `hp_percent`, `hp_id`, `hp_created_at`) VALUES
(50, 'PU-S7.0-140', 10, 0, 0, 'Pengadaan dan Pemasangan Tiang Besi 7 meter, berikut cat & cor pondasi dan assesories dengan kekuatan tarik 140 kg', 'pcs', 14077200, 2650750, 16727950, 16.7279, 266, '2021-09-21 17:34:05'),
(50, 'AC-OF-SM-24-SC', 500, 0, 0, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D, \"Easy to split\"', 'meter', 11320500, 2643500, 13964000, 13.964, 267, '2021-09-21 17:34:05'),
(50, 'ODP-Solid-PB-8', 4, 0, 0, 'Pengadaan dan pemasangan ODP type SOLID Kap 8 core adaptor SC/UPC terdiri dari 1 Box Spliter (termasuk 1 spliter 1:8), 1 Box Dummy beserta Accessories, berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', 'pcs', 5630880, 694020, 6324900, 6.3249, 268, '2021-09-21 17:34:05'),
(50, 'AC-OF-SM-24-SC', 50, 1, 0, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D, \"Easy to split\"', 'meter', 1132050, 264350, 1396400, 10, 272, '2021-09-16 07:25:01'),
(50, 'PU-S7.0-140', 2, 1, 0, 'Pengadaan dan Pemasangan Tiang Besi 7 meter, berikut cat & cor pondasi dan assesories dengan kekuatan tarik 140 kg', 'pcs', 2815440, 530150, 3345590, 20, 274, '2021-09-16 07:25:04'),
(50, 'PU-S7.0-140', 4, 1, 0, 'Pengadaan dan Pemasangan Tiang Besi 7 meter, berikut cat & cor pondasi dan assesories dengan kekuatan tarik 140 kg', 'pcs', 5630880, 1060300, 6691180, 5, 277, '2021-09-17 07:28:08'),
(50, 'AC-OF-SM-24-SC', 50, 1, 0, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D, \"Easy to split\"', 'meter', 1132050, 264350, 1396400, 5, 278, '2021-09-18 07:31:04'),
(50, 'PU-S7.0-140', 4, 1, 0, 'Pengadaan dan Pemasangan Tiang Besi 7 meter, berikut cat & cor pondasi dan assesories dengan kekuatan tarik 140 kg', 'pcs', 5630880, 1060300, 6691180, 40, 280, '2021-09-18 07:31:04'),
(50, 'AC-OF-SM-24-SC', 400, 1, 0, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D, \"Easy to split\"', 'meter', 9056400, 2114800, 11171200, 15, 281, '2021-09-22 07:35:29'),
(50, 'ODP-Solid-PB-8', 4, 1, 0, 'Pengadaan dan pemasangan ODP type SOLID Kap 8 core adaptor SC/UPC terdiri dari 1 Box Spliter (termasuk 1 spliter 1:8), 1 Box Dummy beserta Accessories, berikut pelabelan dan penempelan QR code (disediakan oleh Telkom)', 'pcs', 5630880, 694020, 6324900, 5, 282, '2021-09-22 07:35:29'),
(51, 'DC-OF-SM-144D', 100, 0, 0, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 144 core G 652 D', 'meter', 4985700, 465200, 5450900, 5.4509, 284, '2021-09-22 08:40:21'),
(51, 'AC-OF-SM-24D', 100, 0, 0, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D', 'meter', 1759700, 528700, 2288400, 2.2884, 285, '2021-09-22 08:40:21'),
(51, 'AC-OF-SM-24D', 20, 1, 0, 'Pengadaan dan pemasangan Kabel Udara Fiber Optik Single Mode 24 core G 652 D', 'meter', 351940, 105740, 457680, 20, 286, '2021-09-22 08:40:49'),
(51, 'DC-OF-SM-144D', 20, 1, 0, 'Pengadaan dan pemasangan Kabel Duct Fiber Optik Single Mode 144 core G 652 D', 'meter', 997140, 93040, 1090180, 20, 287, '2021-09-22 08:40:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2020_06_11_150000_create_users_table', 1),
(3, '2020_06_11_181758_create_vendors_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_code` varchar(13) NOT NULL,
  `name_location` varchar(255) NOT NULL,
  `inserted_by` int(8) DEFAULT NULL,
  `witel` varchar(255) NOT NULL,
  `sto` varchar(255) NOT NULL,
  `nilai_drm` int(20) NOT NULL,
  `nilai_material` int(20) DEFAULT NULL,
  `nilai_jasa` int(20) DEFAULT NULL,
  `nilai_total` int(20) DEFAULT NULL,
  `user_id` int(8) NOT NULL,
  `status_project` varchar(255) DEFAULT NULL,
  `persentase` int(11) DEFAULT NULL,
  `vendors_id` int(3) NOT NULL,
  `toc` int(3) DEFAULT NULL,
  `project_start` date DEFAULT NULL,
  `project_end` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `project_approval` int(1) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `tematik_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`project_id`, `project_code`, `name_location`, `inserted_by`, `witel`, `sto`, `nilai_drm`, `nilai_material`, `nilai_jasa`, `nilai_total`, `user_id`, `status_project`, `persentase`, `vendors_id`, `toc`, `project_start`, `project_end`, `description`, `project_approval`, `updated_at`, `created_at`, `tematik_id`) VALUES
(50, 'W09-1/2021', 'LOKASI 1 - PERUMAHAN SEKUPANG', 970001, 'RIKEP', 'SKN', 1000000, NULL, NULL, NULL, 970002, 'AANWIJZING & PERIZINAN', 0, 2, 7, '2021-09-15', NULL, NULL, 1, '2021-09-16 12:15:00', '2021-09-16 12:15:00', 2),
(51, 'W09-2/2021', 'LOKASI 2 - PERUMAHAN BATAM CENTER', 970001, 'RIKEP', 'SKN', 1000000, NULL, NULL, NULL, 970002, 'AANWIJZING & PERIZINAN', 0, 4, 7, '2021-09-21', NULL, NULL, 1, '2021-09-22 01:38:39', '2021-09-22 01:38:39', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tematiks`
--

CREATE TABLE `tematiks` (
  `tematik_id` int(2) NOT NULL,
  `tematik_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tematiks`
--

INSERT INTO `tematiks` (`tematik_id`, `tematik_name`, `created_at`, `updated_at`) VALUES
(1, 'Q1 2021', '2021-02-16 17:32:16', NULL),
(2, 'Q2 2021', '2021-02-16 17:32:16', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` int(13) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `kontak`, `alamat`, `user_type`, `created_at`, `updated_at`) VALUES
(970001, 'DODY', 'Oktadody@gmail.com', '$2y$10$AfsxoMZczi/yxGr0i0rOouzo.XwBtNcM3pUEuLeWdmPm.NQjGqdPy', 1235222, 'NONGSA POINT', 'Admin', NULL, '2021-09-13 22:42:10'),
(970002, 'HINDRANALDI S', 'Hindranaldi@telkomakses.co.id', '$2y$10$AfsxoMZczi/yxGr0i0rOouzo.XwBtNcM3pUEuLeWdmPm.NQjGqdPy', 0, '', 'Pengawas Lapangan', NULL, '2021-03-13 19:11:52'),
(970003, 'KANI N', 'kani@telkomakses.co.id', '$2y$10$AfsxoMZczi/yxGr0i0rOouzo.XwBtNcM3pUEuLeWdmPm.NQjGqdPy', 23432, 'SEKUPANG', 'Manager', NULL, '2021-09-16 05:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_active`
--

CREATE TABLE `user_active` (
  `user_id` int(11) NOT NULL,
  `session_id` varchar(80) NOT NULL,
  `date_login` timestamp NULL DEFAULT NULL,
  `date_update` timestamp NULL DEFAULT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_active`
--

INSERT INTO `user_active` (`user_id`, `session_id`, `date_login`, `date_update`, `ip`) VALUES
(666666, '5EwQBQucwrrz4gAks6R7nJZbOTur3UrUL147D3RP', '2020-09-17 04:44:44', '2020-09-17 04:44:44', '192.168.2.243'),
(666, 'I2ZMn0V8LHva2wsuSxYsUfsKGKlnOUQiZ1fu5tDZ', '2020-09-19 04:23:12', '2020-09-19 04:23:12', '127.0.0.1'),
(63190005, '2JBeO1pXIkVRQ5A0i0dwQlfVb9FAc1bY1Oz1pheW', '2021-02-07 15:05:35', '2021-02-07 15:05:35', '127.0.0.1'),
(631111, 'PUr74XMIuK8nLaIUoiwtbf61KeLZVhAfYRHi29OK', '2021-03-13 18:11:04', '2021-03-13 18:11:04', '127.0.0.1'),
(921433, 'h6ranatgEeZZipR5gJw5c7gZY31bpvc9byqIRtTl', '2021-03-14 02:06:01', '2021-03-14 02:06:01', '127.0.0.1'),
(955149, 'e3ElfGCz0F2zt7xa08WZEQHgy6EKSCaUbb3eD1wv', '2021-09-15 17:38:29', '2021-09-15 17:38:29', '127.0.0.1'),
(630001, 'hTs9K9qjYLQy3tVT2SKhFmJhBZsqIzfBWlyWD7ia', '2021-09-15 17:39:07', '2021-09-15 17:39:07', '127.0.0.1'),
(970002, '3MozZsQdkyzJqKRIFcPUXqIXnRShHsgp3KN8kdaS', '2021-09-22 01:47:36', '2021-09-22 01:47:36', '127.0.0.1'),
(970003, 'QAKybeLI0WvTkXU9deUwbiryq6fCIQcnL64DNlU9', '2021-09-25 02:23:03', '2021-09-25 02:23:03', '127.0.0.1'),
(970001, '62iEMlYKp2SqXESa2ZcRE3BI8ZgIVGLf6NgQGBnW', '2021-09-25 02:23:20', '2021-09-25 02:23:20', '127.0.0.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendors`
--

CREATE TABLE `vendors` (
  `vendors_id` bigint(20) UNSIGNED NOT NULL,
  `vendors_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendors_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vendors`
--

INSERT INTO `vendors` (`vendors_id`, `vendors_name`, `vendors_address`, `created_at`, `updated_at`) VALUES
(2, 'PT. ALTONG JAYA ABADI', 'TANJUNG UNCANG', NULL, '2021-03-13 19:23:31'),
(3, 'PT. ATLANTIK INTERNASIONAL AKSES', 'BATAM CENTER', NULL, NULL),
(4, 'PT. BONGKAR SEJATI ANDALAN', 'MEDAN', NULL, NULL),
(7, 'PT. GLOBAL VISINDO', 'PANBIL', NULL, '2021-09-15 21:52:19'),
(8, 'PT. GRAHA INFORMATIKA NUSANTARA', 'JAKARTA', NULL, NULL),
(9, 'PT. HDUA PUTRA PRAJODA', 'SEKUPANG', NULL, NULL),
(10, 'PT. KOPEGTEL BATAM CEMERLANG', 'SEKUPANG', NULL, NULL),
(11, 'PT. MITRA HOSINDO SEJAHTERA', 'SAGULUNG', NULL, NULL),
(12, 'PT. MITRA SETIA INDONESIA', 'SAGULUNG', NULL, NULL),
(13, 'PT. NUSANTARA ANDALAS TEKNOLOGI', 'SAGULUNG', NULL, NULL),
(14, 'PT. SALTTEK DUMPANG JAYA', 'MEDAN', NULL, NULL),
(15, 'PT. SANDY PUTERA MAKMUR', 'JAKARTA', NULL, NULL),
(16, 'PT. SINAR KEPRI SEJAHTERA', 'BATAM CENTER', NULL, NULL),
(17, 'PT. TELAGA PELANGI', 'BANDUNG', NULL, NULL),
(18, 'PT. WEJE MITRA UTAMA', 'PEKAN BARU', NULL, NULL),
(22, 'PT. SANGKURIANG TELEKOMUNIKASI', 'TANJUNG PINANG', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_hp_need_approval`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_hp_need_approval` (
`project_id` int(11)
,`date_need_approval` date
,`hp_status` tinyint(1)
,`hp_approval` tinyint(1)
,`hp_grand_tot` decimal(41,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_hp_plan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_hp_plan` (
`project_id` int(11)
,`hp_designator_plan` varchar(255)
,`hp_deskripsi_plan` varchar(255)
,`hp_unit_plan` varchar(50)
,`hp_grand_tot_plan` decimal(41,0)
,`hp_material_plan` int(20)
,`hp_jasa_plan` int(20)
,`hp_volume_plan` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_hp_real`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_hp_real` (
`project_id` int(11)
,`hp_designator_real` varchar(255)
,`hp_deskripsi_real` varchar(255)
,`hp_unit_real` varchar(50)
,`hp_volume_real` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_hp_need_approval`
--
DROP TABLE IF EXISTS `view_hp_need_approval`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hp_need_approval`  AS  select `history_progress`.`project_id` AS `project_id`,cast(`history_progress`.`hp_created_at` as date) AS `date_need_approval`,`history_progress`.`hp_status` AS `hp_status`,`history_progress`.`hp_approval` AS `hp_approval`,sum(`history_progress`.`hp_grand_tot`) AS `hp_grand_tot` from `history_progress` where `history_progress`.`hp_approval` = 0 group by `history_progress`.`project_id` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_hp_plan`
--
DROP TABLE IF EXISTS `view_hp_plan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hp_plan`  AS  select `history_progress`.`project_id` AS `project_id`,`history_progress`.`hp_designator` AS `hp_designator_plan`,`history_progress`.`hp_deskripsi` AS `hp_deskripsi_plan`,`history_progress`.`hp_unit` AS `hp_unit_plan`,sum(`history_progress`.`hp_grand_tot`) AS `hp_grand_tot_plan`,`designators`.`designators_material` AS `hp_material_plan`,`designators`.`designators_jasa` AS `hp_jasa_plan`,sum(`history_progress`.`hp_volume`) AS `hp_volume_plan` from (`history_progress` join `designators` on(`history_progress`.`hp_designator` = `designators`.`designators_name`)) where `history_progress`.`hp_status` = 0 group by `history_progress`.`hp_designator` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_hp_real`
--
DROP TABLE IF EXISTS `view_hp_real`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_hp_real`  AS  select `history_progress`.`project_id` AS `project_id`,`history_progress`.`hp_designator` AS `hp_designator_real`,`history_progress`.`hp_deskripsi` AS `hp_deskripsi_real`,`history_progress`.`hp_unit` AS `hp_unit_real`,sum(`history_progress`.`hp_volume`) AS `hp_volume_real` from `history_progress` where `history_progress`.`hp_status` = 1 group by `history_progress`.`hp_designator` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `designators`
--
ALTER TABLE `designators`
  ADD PRIMARY KEY (`designators_id`);

--
-- Indeks untuk tabel `eval`
--
ALTER TABLE `eval`
  ADD PRIMARY KEY (`eval_id`);

--
-- Indeks untuk tabel `history_progress`
--
ALTER TABLE `history_progress`
  ADD PRIMARY KEY (`hp_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indeks untuk tabel `tematiks`
--
ALTER TABLE `tematiks`
  ADD PRIMARY KEY (`tematik_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendors_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `designators`
--
ALTER TABLE `designators`
  MODIFY `designators_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=662;

--
-- AUTO_INCREMENT untuk tabel `eval`
--
ALTER TABLE `eval`
  MODIFY `eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `history_progress`
--
ALTER TABLE `history_progress`
  MODIFY `hp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `tematiks`
--
ALTER TABLE `tematiks`
  MODIFY `tematik_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendors_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
