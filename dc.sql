-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 12:39 AM
-- Server version: 5.6.22
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dc`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idBrg` int(11) NOT NULL,
  `barang` varchar(5000) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `ket_brg` text NOT NULL,
  `idPesan` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=567 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idBrg`, `barang`, `jumlah`, `ket_brg`, `idPesan`) VALUES
(1, 'Lebel Kecil', 2, 'Untuk Produksi Potong A', 314),
(2, 'Ribbon', 2, 'Untuk Produksi Potong A', 314),
(3, 'Label', 3, 'Digunakan admin roll SJB A', 341),
(4, 'Ribbond', 3, 'Digunakan admin roll SJB A', 341),
(5, 'Tinta Printer', 4, 'Tinta Hitam . Merah , Biru , Kuning', 362),
(6, 'Pita Printer', 2, 'u/ dian febri &tri arianto', 398),
(7, 'Label Besar', 24, 'u/ PPIC C,D', 399),
(8, 'Ribbon', 4, 'u/ PPIC C,D', 399),
(9, 'LABEL QTY PROD ROLL', 2, 'STOK HABIS..TINGGAL YANG DI MESIN PRINNT', 416),
(10, 'ribbon print qty', 2, 'untuk produksi roll\r\n', 435),
(11, 'Pita Printer', 1, 'untuk Warehouse Finishgood SJB B (Agung)', 439),
(12, 'Label Besar', 36, 'u/ PPIC A (Purwanto)', 455),
(13, 'Ribbon ', 4, 'u/ PPIC A (Purwanto)', 455),
(14, 'pita printer matrik', 1, 'untuk an. upik', 466),
(15, 'LABEL BARCODE + RIBBON', 2, 'UNTUK PRINT LABEL BARCODE', 469),
(16, 'label quantity', 2, 'untuk produksi potong sjb-b', 505),
(17, 'LABEL BESAR 24 ROLL+2 RIBBON', 24, 'SJB B STOK HABIS ', 572),
(18, 'LABEL QUANTTY KECIL', 2, 'UNTUK PRODUKSI ROLL SJB B', 578),
(19, 'label quantity', 2, 'PRODUKSI POTONG', 611),
(20, 'LABEL BARCODE', 2, 'LABEL PRINTER HABIS', 633),
(21, 'LABEL BARCODE;RIBON', 2, 'LABEL BARCODE DAN RIBON HABIS', 678),
(22, 'Pita Printer', 1, 'u/ bu Siwi', 685),
(23, 'PRINTER', 1, 'PRINTER YG LAMA -HASIL FINAL CEK TEAM IT RUSAK BERAT', 693),
(24, 'mouse', 1, 'untuk komputer user fitriana', 712),
(25, 'Komputer dan Akses AX', 3, 'Untuk plan A, B dan CD', 715),
(26, 'Projector', 2, 'untuk Plan SJB B dan Plan SJB CD', 717),
(27, 'Line Telpon', 2, 'untuk SJB D ruang Dept Head (Pak Aris)\r\ndan ruang sect head (P. TAnir, Wuryani, Wahyu)', 717),
(28, 'Pita printer', 2, 'untuk SJB-Logistic', 768),
(29, 'Kamera CCTV', 2, 'Untuk penggantian Depan Graha L.1 dan R. Produksi SJB A potong.', 804),
(30, 'Printer Brother DCP1510', 1, 'Untuk Sales Marketing\r\nSementara tunggu barang, sudah di orderke', 809),
(31, 'Printer Epson L120', 1, 'Untuk pengganrian printer lama yang rusak, sudah di pesanke, tunggu barang datang', 773),
(32, 'Power Supply', 1, 'mengganti power supply IT yg mati', 853),
(33, 'Tinta Epson hitam', 1, 'Untuk Yuwin Logistik', 857),
(34, 'mouse', 1, 'mouse yang lama rusak', 863),
(35, 'Pita printer', 1, 'untuk timbangan SJB A', 896),
(36, 'Pita printer', 2, 'untuk purchasing', 905),
(37, 'Jack RG 45', 1, 'untuk instalasi jaringan di lt2 produksi potong', 908),
(38, 'RG45,TANGCREP,LAN TESTER,OBENG-/+, HEATSING COMPON', 1, 'U/ maintenance di SJB C&D', 911),
(39, 'Hardisk 320 Gb', 1, 'U/ upgrade', 718),
(40, 'Hardisk 320 Gb', 1, 'Ganti Hardisk, Yang lama mati', 727),
(41, 'PSU Dazumba', 1, 'Yang lama mati, minta batu', 915),
(42, 'Switch HUB TP-Link 8 port', 1, 'Untuk perubahan ruang IT', 917),
(43, ' Adapter 12V(2), CPU Rakitan(1),Kipas Heatsing(1), Keyboard+Monitor(2),Monitor (ex Vera),IP Phone', 1, 'U/IT jaringan di SJB C&D', 921),
(47, ' ram, procesor, HD, motherboard', 1, 'upgrade pc ( ram, procesor, HD, motherboard ) installl windows + install AX', 770),
(48, 'PSU Dazumba, DDR2 2Gb, CPU exHerlina, Monitor, Keyboard+Mouse', 1, 'U/ stock di SJB C&D', 924),
(49, 'Printer lases Sewa ', 1, 'Untuk mengganti printer lama yang ngebling', 925),
(50, 'Switch HUB TP-Link 8 port', 1, 'Untuk ruangan admin yang baru di lantai 2', 927),
(51, 'Tang potong', 1, 'untuk peralatan jaringan', 938),
(52, 'Kertas fax', 6, 'untuk Sales marketing', 944),
(53, 'Proyektor dan Laptop', 1, 'Meeting HRD', 946),
(54, 'Mobo, hardisk,ddr3 2gb,prosesor', 1, 'untuk upgrade karena yang lama lemot', 855),
(55, 'Mouse', 1, 'minta ganti mouse karena scroll nya tidak bisa', 964),
(56, 'PSU', 1, 'mengganti PSU komputer siti', 963),
(57, 'CPU', 1, 'untuk mahardika depo jember', 985),
(58, 'CPU', 1, 'untuk Surya Adi Kurniawan', 986),
(59, 'tinta printer warna', 1, 'utk printer pak hariyanto', 990),
(60, 'CPU Rakitan', 1, 'U/Depo Jember \r\na.n. MAhradika karena rusak', 993),
(61, 'CPU Rakitan', 1, 'U/Plan C & D', 993),
(62, 'PITA PRINTER', 1, 'u/ FITA FISKAL', 1002),
(63, 'Unit Komputer (PC)', 1, 'untuk staff adm AX', 1006),
(64, 'Unit Komputer (PC)', 1, 'Untuk admin AX plant supporting', 1007),
(65, 'Mouse', 2, 'untuk dipakai ruang server', 1011),
(66, 'Mouse', 1, '	mouse tidak bisa rolling dan klik kiri susah', 1021),
(67, 'tinta printer', 1, '-', 1023),
(68, 'Printer warna ', 1, 'Untuk office plant supporting', 1024),
(69, 'MOUSE;TELPON', 1, 'MOUSE SULIT DKLIK;TELPON JIKA TDK DLOUDSPEAKER TDK ADA SUARA', 1031),
(70, 'Printer Epson L120', 1, 'Untuk cetak laporan  di ACC', 692),
(71, '1', 0, '-', 1053),
(72, 'Kamera Digital saku', 1, ' spesifikasi kamera min 6MP, min kapasitas memory card 8 gb.metode charging by cable data (charge langsung menggunakan kabel data universal)', 1057),
(73, 'Hardisk', 1, 'mengganti hardisk yang rusak', 1025),
(74, 'Heatsink ', 1, 'untuk komputer jember', 1078),
(75, 'Kabel Power', 2, 'untuk SJB CD', 1094),
(76, 'Kabel VGA', 1, 'untuk SJB CD', 1094),
(77, 'Mouse', 1, 'Mouse eror, klik kanan terus', 1101),
(78, 'Mouse Pad', 1, 'Untuk pak Sukandar', 1053),
(79, 'Scaner CanoScab Lide 120', 1, 'Untuk Legal ', 1064),
(80, 'Keyboard', 1, '-', 1136),
(81, 'HDD 500 GB ', 1, 'untuk Imam Khanafi (pengganti HDD 40 GB)', 1150),
(82, 'Power Supply Dazumba', 1, 'untuk mengganti PSU AGung Sudibyo ', 1172),
(83, 'RJ 45', 1, 'untuk sparepart jaringan', 1174),
(84, 'Kertas Fa', 2, 'Untuk bu Indri koprasi', 1182),
(85, 'Kertas fax', 2, 'Waserda', 1182),
(86, 'Mouse', 1, 'MOUSE TIDAK BERFUNGSI', 1189),
(87, 'Scanner', 1, 'untuk depo jember', 1190),
(88, 'keyboard dan mouse', 1, 'colokan PS2 eror', 1206),
(89, 'Keyboard', 1, 'huruf P nya tidak bisa', 1204),
(90, 'Hardisk 2T', 2, 'Untuk Back Up AX', 1209),
(91, 'CPU RAKITAN', 1, 'U/SJB B', 1214),
(92, 'LEPTOP HP SN: 5CB412075L', 1, 'UNTUK SALES LUAR PULAU (BU NANA)', 941),
(93, 'Power Supply', 1, 'D500148J000261', 1264),
(94, 'power Suply', 1, 'SN D5001408J000261', 1267),
(95, 'Ram DDR 3 2 Gb', 1, 'untuk komputer pak fahmi', 1277),
(96, 'Mouse', 1, 'penggatin mouse PS2', 1270),
(97, 'Tinta hitam', 1, 'untuk printer epson', 1298),
(98, 'Catridge', 1, '-', 1309),
(99, 'Catridge HP 21 (Black)', 1, 'untuk penggantian printer HP Indah Yulianti', 1318),
(100, 'Scanner', 1, 'untuk operasional dikarenakan sudah rusak ', 1179),
(101, 'Tinta hitam', 1, 'untuk printer pak rony manufacture', 1345),
(102, 'Kertas fax', 2, 'untuk bagian accounting', 1348),
(103, 'Mouse Pad', 1, '-', 1366),
(104, 'Komputer', 2, 'untuk karyawan baru, atas nama Dwi Mayasari (PR) dan Elmi Utami (Staff Anlys SJB)', 1368),
(105, 'Pita Printer', 2, 'untuk dian febri & tri arianto', 1383),
(106, 'komputer', 3, '- Sarmiyati/Kord. Material All Plan\r\n- Tri Wahyu Ristiana/Back Office\r\n- Devi Rakhmawati/Staff Sales', 1389),
(107, 'wareless', 1, 'untuk scan 1 palet bahan roll ada 36 roll kalau dengan scan yang masih pakai kabel tidak efektif harus geser/memutar  palet agar dekat dengan scanernya', 1402),
(108, 'Tinta hitam', 1, 'Finance & Accounting', 1405),
(109, 'Keyboard', 2, 'untuk dipakai di SJB CD', 1416),
(110, 'Unit PC (Komputer)`', 1, 'Pengadaan Komputer untuk karyawan baru\r\nUser : M Agus Syarif\r\nPosisi : PC Unit Head\r\nTempat : Lt 2 Printing\r\nAX, Autocad & Corel', 1424),
(111, 'HT BOEFENG', 4, 'UNTUK KORDINASI LAPANGAN GA', 1437),
(112, 'TONER PRINTER BRATHER', 1, 'UNTUK REFIL HEPDESK', 1442),
(113, 'DVD ROOM', 3, 'UNTK KIKI 1\r\nHELP DESK 2', 1443),
(114, 'Kamera cctv', 1, 'Untuk penggantian di lokasi Marketing', 1450),
(115, 'Power Supply ', 1, 'untuk mengganti PSU Vida (HRD)', 1447),
(116, 'DDR3 - 2 GB ', 1, 'untuk Wuryani (tambah RAM karena pakai AX)', 1457),
(117, 'DDR3 - 2 GB ', 1, 'untuk ENi Hartatik (upgrade)', 1458),
(118, 'HDD 500 GB ', 1, 'upgrade Eni Hartatik', 1458),
(119, 'Adaptor CCTV', 2, 'Permintaan adaptor kamera cctv 2 unit untuk penggantian R. Marketing dan Produksi Rafia', 1460),
(120, 'Power supply', 1, 'utk ganti power supply pc atas nama Gandjar Prihandono', 1482),
(122, 'Pita printer', 4, 'untuk fiskal', 1485),
(123, 'CPU Rakitan', 1, 'Untuk voice geteway', 1492),
(124, 'Tinta hitam', 1, 'untuk SJB D', 1498),
(125, 'tinta hitam', 1, 'untuk paulina(epson L120', 1503),
(126, 'Tinta hitam dan kuning', 1, '-', 1508),
(127, 'Mouse', 1, 'Untuk mbak Fitriana SJB B\r\nKarena Mouse scroll tidak aktif', 1485),
(128, 'Mouse', 1, 'Untuk Fitriana SJB B\r\nMouse scroll mati', 1473),
(129, 'PSU Dazumba', 1, 'U/ ganti psu back Up IP phone yang mati', 1550),
(130, 'HUB', 1, 'untuk Rproduksi Potong SJB B', 1557),
(131, 'handy talky', 1, 'Pengambalian retur yang sudah jadi', 1559),
(132, 'CPU,MB,Proc,HDD,DDR', 1, 'untuk potong B', 1560),
(133, 'LAN card D-Link', 1, 'LAN onboard CPU ex prima tidak bisa', 1549),
(134, 'refill tinta blueprint warna kuning, merah dan biru', 1, 'printer canon ip 2770 (ex Prima Prajenan )', 1579),
(136, 'permintaan printer canon ip 2770 (ex Prima Prajenan )', 1, 'untuk Pak Ovan Diana', 1579),
(137, 'Power Supply Dazumba', 1, 'untuk pengganti zuhani', 1582),
(138, 'Kertas fax', 2, 'untuk purchasing', 1598),
(139, 'permintaan 1 unit kamera cctv dan 1 unit adaptor', 1, 'untuk gudang transit SJB A', 1602),
(140, 'Hardisk 500 GB', 2, 'untuk scurity dan dglamour', 1617),
(141, 'tinta printer EPSON L110 (semua warna)', 1, '-', 1637),
(142, 'Konektor RG 45', 1, 'Untuk Teaam Jaringan', 1652),
(143, 'Keyboard', 1, 'Dwi Suryono', 1680),
(144, 'LAN BNC', 1, '-', 1682),
(145, 'CPU RAKITAN, MONITOR 16", KBO+MSO', 1, 'Pengadaan komputer untuk sec head PPID CD datang. terima kasih.', 1544),
(146, 'CPU RAKITAN, MONITOR 16", KBO+MSO', 1, 'U/Purwanto (Kord.Gd/SJB D)', 1688),
(147, 'Hardisk 500Gb', 1, 'Untuk penggantian hardisk DVR CCTV yang rusak', 1694),
(148, 'Kertas Fax', 7, 'Untuk Sales Marketing SJB A', 1701),
(149, 'Adaptor CCTV', 1, 'Untuk pemasangan di Kantin', 1702),
(150, 'Pita Printer', 1, 'Untuk Gudang Sentral SJB C', 1703),
(151, 'Mouse & Keyboard', 1, 'Keyboard lama enter gak mau balik, pointer mouse jalan sendiri', 1718),
(152, 'mouse', 1, ' kadang tidak bisa beroperasional', 1739),
(153, ' tinta printer warna kuning', 1, '-', 1748),
(154, 'line telf', 2, '2 unit line telf. atas nama grizzi dan Bpk. Andrian', 1751),
(155, 'tinta hitam', 1, '-', 1759),
(156, 'PITA PRINTER', 1, 'PITA PRINTER TDK JELAS', 1764),
(157, 'Line Telpon', 1, ' untuk widi dan indra', 1765),
(158, 'Tinta hitam', 1, 'SJB CD', 1767),
(159, 'PSU Dazumba', 1, 'U/ MS JOKO IT, KOMPUTER SERING RESTAR', 1772),
(160, 'Pita printer', 1, '-', 1785),
(161, 'Kertas fax', 2, '-', 1785),
(162, 'Keyboard', 1, 'keyboard error angka menjadi symbol,caps lock menjadi shut down', 1789),
(163, 'Tinta Hitam', 1, 'untuk printer Epson L-120 depo Purwakarta', 1809),
(164, 'Unit PC (Komputer)`', 2, 'untuk admin pellet, crusher, gdg BS SJB D & C 1 unit\r\nuntuk admin pellet, RAFIA, gdg BS SJB A & B 1 unit', 1840),
(165, 'Camera DSLR', 1, 'Untuk Ceremonial Export Perdana pada Sabtu, 25 Maret 2015 pk. 08.00 wib di Plant B, SJB.', 1851),
(166, 'tinta toner (hitam)', 1, '-', 1852),
(168, 'Pita Printer', 1, 'Penggantian karena hasil cetak jelek', 1842),
(169, 'PSU ', 1, 'Untuk Hakmi IT (Monitoring Jaringan)', 1863),
(170, 'HaArdisk', 1, 'harddisk eror', 1866),
(171, 'Tinta hitam', 1, 'epson L120', 1869),
(172, 'CPU Rakitan. monitor, keyboard', 2, 'Untuk Deny Setyoko (Superveyor (sales Devlpmt)\r\nArsyad Sumantika (Research & Prodact Dev.Supervsor)', 1895),
(173, 'LEPTOP HP 14-d012TU ', 1, 'Untuk OSM (Yusuf Mashar)', 1898),
(174, 'IP Phone', 1, 'U/Prod Potong SJB B', 1900),
(175, 'IP Phone', 1, 'Permintaa IP Phone U/IT Head (Ovan)', 1901),
(176, 'tinta printer semua warna', 1, '-', 1923),
(177, 'keyboard', 1, 'mengganti keyboard yang sering heng', 1933),
(178, 'Keyboard', 1, 'pengganti ely,pengganti yg dulu dipakai pak rony(yg rusak skrg ex.pak rony)', 1933),
(179, 'Tinta Bluprint Canon', 1, 'isi ulang HR', 1943),
(180, 'CPU Rakitan, Monitor LCD 16", Keyboar+Mouse', 1, 'U/Didik Wasito (sekretariat)', 1945),
(181, 'Tinta Hitam', 2, 'untuk Fiskal (Eni)', 1973),
(182, 'PSU ', 1, 'u/Eny Hartatik SJB D', 1955),
(183, 'DDR3 - 2 GB ', 1, 'untuk Dian Fleet Linus', 1939),
(184, 'Tinta hitam', 1, 'untuk SJB C/d', 1986),
(185, 'keboard', 1, '1.tombol-tombolnya ada yg sudah rusak dan tidak berfugsi lagi', 1987),
(186, 'Tinta hitam', 1, '-', 1988),
(187, 'Tinta blueprint all warna ', 4, 'Untuk Lukman (Gd Biji SJB B)', 2014),
(188, 'Power Supply', 1, 'Permintaan Power Supply baru\r\nUntuk mengganti milik Deni bagian SNM yang terbakar', 2042),
(189, 'CPU Rakitan, monitor, keyboar + Mouse', 1, 'U/Plan D a.n Andi Rohmad', 2043),
(190, 'Finger Print', 1, 'Penambahan absensi di Prod Roll SJB A', 2044),
(191, 'Mouse', 1, 'mouse mati, ganti mouse yang baru', 2047),
(192, 'Mouse', 1, 'MOUSE SEBELUMNYA SULIT UNTUK DI "SCROLL"', 2051),
(193, 'Kertas Fax', 2, 'untuk Nari - LB', 2056),
(194, 'Tinta hitam', 1, '-', 2090),
(195, 'Bantalan Mouse', 3, 'U/ kantor GA ', 1961),
(196, 'Pita Printer', 1, 'untuk Laviure (indra)', 2115),
(197, 'Hardisk', 1, 'Untuk menganti Hardisk autocount Linus yang sudah penuh', 2116),
(198, 'Catridge Brother DCP1510', 1, 'catridge diganti krn dol (kesalahan pengisian toner oleh user sendiri), diganti oleh Aston (rp 450.000) selesai service tgl 8/5/2015', 1693),
(199, 'Camera CCTV + Adapter', 1, 'PERMINTAAN 1 UNIT CAMERA + ADAPTOR UNTUK MENGGANTI CAMERA DI PRODUKSI ROLL YG SUDAH NGEBLUR..', 2125),
(200, 'DDR2 - 2 GB', 1, 'untuk Mala,tuker RAM 1GB--> 2GB', 2136),
(201, 'Mouse', 1, 'MOUSE TIDAK BISA UNTUK NAIK DAN TURUN SECARA NORMA', 2148),
(202, 'Mouse', 1, 'MOHON PENGGANTIAN MOUSE ERROR\r\nSN: X5A89975101082', 2156),
(203, 'Tinta hitam', 1, '-', 2164),
(204, 'Mouse', 1, 'MOUSE RUSAK YG 1 TDK BERFUNGSI', 2165),
(205, 'tinta printer semua warna', 1, 'printer Canon ip2770', 2172),
(206, 'Mouse', 1, '-', 2173),
(207, 'tinta printer warna kuning', 1, 'tinta warna kuning habis/kering', 2179),
(208, 'tinta printer warna kuning', 1, 'tinta warna kuning habis/kering', 2179),
(209, 'tinta printer semua warna', 1, '-', 2185),
(210, 'tinta printer semua warna', 1, '-', 2185),
(211, 'Leptop', 1, 'Untuk kampanye 5R di SJB B & C,D', 2187),
(212, 'Proyektor portable', 1, 'Peminjaman proyektor portable untuk di gunakan di Guangzhou China (Bussines Trip)', 2188),
(213, 'Mouse Pad', 1, 'Meja Erna HR', 2183),
(214, 'tinta printer warna kuning', 1, '-', 2191),
(215, 'Kertas fax', 2, '-', 2197),
(216, 'mouse komputer', 1, 'rusak', 2201),
(217, 'Mouse', 1, '-', 2200),
(218, 'Pita Printer', 2, 'minta pita printer 2 buah untuk dian febri dan tri ariyanto (Logoistik)', 2207),
(219, 'tinta printer semua warna', 1, '-', 2216),
(220, 'Adapter wireless', 1, 'untuk Rina  LB', 2218),
(221, 'Micro SD', 2, '-', 2219),
(222, 'Catrid Hitam IP 2770', 1, 'Permintaan katrid warna hitam, karena sudah tidak jelas.', 2220),
(223, 'Mouse', 1, 'mouse rusak klik kanan jadi muncul klik kiri', 2225),
(224, 'Catridge Warna Canon IP2770', 1, 'untuk Pak ANton (sdh confirm bu Nari via OM)', 2214),
(226, 'Scaner CanoScan Lide 120', 1, 'Pengajuan Scaner untuk scan data depo Purwakarta', 2228),
(227, 'Kertas fax', 6, '-', 2230),
(228, 'Mouse', 1, 'Mouse tidak bisa digunakan ', 2232),
(229, 'Catridge Warna Canon IP2770', 1, 'untuk pengganti printer lab', 2234),
(230, 'Pita Printer', 2, 'Refill Pita Printer', 2235),
(231, 'Mouse', 1, 'msh bagus tp scrollny udh jelek jd klo buat ngedit foto ID card itu ga bs. ', 2239),
(232, 'Mouse', 1, '-', 2240),
(233, 'Mouse Pad', 1, '-', 2240),
(234, 'catridge hitam', 1, ' Warna tinta printer berubah , misal file yg akan di print warnanya coklat saat di print keluarnya jadi warna hijau', 2171),
(235, 'HUB', 1, 'Untuk Lab sabun', 2250),
(236, 'Tinta hitam', 1, '-', 2256),
(237, 'HUB', 1, 'untuk Graga Lt. 2', 2265),
(238, 'Hardisk', 1, '-', 2280),
(239, 'mouse', 1, 'rusak (tidak bisa digunakan)', 2293),
(240, 'Tinta hitam', 1, 'printer HL-2270 DW ', 2307),
(241, 'PVC White blank card', 250, 'U/Erna HRD', 2262),
(243, 'Keyboard', 1, '-', 2326),
(244, 'Laptop + Modem', 1, 'Peminjaman Notebook dan modem portable 27 - 29 Mei 2015, untuk kepentingan pelatihan E-Report yang diadakan oleh KEMENTRIAN KESEHATAN RI di Bandung', 2332),
(245, 'Tinta hitam', 1, '-', 2336),
(246, 'catridge hitam', 1, '-', 2361),
(248, 'CPU Rakitan, monitor, keyboar + Mouse', 1, 'U/ Tiem Audit LBG a.n F Rika Anita', 2365),
(249, 'Tinta hitam', 1, '-', 2376),
(250, 'tinta kuning', 1, '-', 2376),
(251, 'Ribbon', 1, 'printer ID card', 2384),
(252, 'Tinta hitam', 1, '-', 2385),
(254, 'KERTAS FAX', 2, 'REFILL MESIN FAX PURCHASE', 2408),
(255, 'Pita Printer', 1, 'refill u/ bu Siwi', 2393),
(256, 'tinta hitam blueprint', 1, 'U/ Indah ACC', 2410),
(257, 'catridge hitam', 1, '-', 2320),
(258, 'Catridge Warna', 1, '-', 2320),
(259, 'Keyboard', 1, 'KEYBOARD KERAS', 2412),
(260, 'Tinta hitam', 1, '-', 2413),
(261, 'Pita printer', 1, '-', 2408),
(262, 'catridge hitam', 1, 'hasil cetak sudah tidak bisa dibaca', 2358),
(263, ' Micro SD 128GB', 1, '-', 2432),
(264, 'Monitor LED', 1, 'U/ Deny Fitria S (Ware House/SJB B) karena LAYAR MONITOR TIDAK JELAS(BERGARIS)', 2437),
(265, 'Proyektor portable', 1, 'Training/Coaching tim GA', 2446),
(266, 'Tinta hitam', 1, 'printer L300', 2458),
(267, 'Pita printer', 1, '-', 2464),
(268, 'Tinta hitam', 1, '-', 2464),
(269, 'Kabel Power', 1, 'SERING MATI SENDIRI ( KABEL KENDOR)', 2478),
(270, 'Tinta hitam', 1, 'mesin printer tinta habis sehingga tidak bisa mencetak. Mohon dibantu untuk fungsinya. terimakasih', 2495),
(271, 'Pita printer', 1, 'untuk Hety Linus', 2503),
(272, 'Kertas fax', 2, 'untuk Linus', 2503),
(273, 'Kertas fax', 2, 'untuk LB-Nari', 2505),
(274, 'Adapter 5Volt 1 A', 1, 'Untuk adapter depo Jember', 2470),
(275, 'CPU Rakitan', 1, 'Untuk maintenance help desk', 2526),
(276, 'Pita printer', 1, '-', 2528),
(277, 'CPU Rakitan', 1, 'Untuk manager ACC SJB', 2530),
(278, 'Pita Printer', 2, 'minta tinta print epson LX300+II', 2468),
(279, 'reebon printer id card', 1, '-', 2529),
(280, 'Cisco SF90D-08', 2, 'Peminjaman Cisco SF90D-08 untuk maintenace jaringan', 2534),
(281, 'HUB ', 1, 'Peminjaman HUB Untuk manintenance Jaringan', 2535),
(282, 'Mouse', 1, 'mouse bagian scrooll rusak tidak bisa dipakai.', 2507),
(283, 'Kamera pocket', 1, 'Untuk audit di SJB B', 2550),
(284, 'Pita printer', 2, 'Permintaan Pita printer untuk logistik\r\na.n Dian Febri dan Tri Aryanto', 2563),
(285, 'Leptop Dell', 1, 'Unruk di instal ', 2570),
(286, 'DVD blank', 2, '-', 2581),
(287, 'Tinta hitam', 1, '-', 2586),
(288, 'kEYBOARD', 1, 'untuk pak Priyo mekanik SJB tempuran\r\nkeyboard rusak', 2575),
(289, 'CPU Rakitan', 1, 'Permintaan CPU U/ Fahrudin programer ', 2597),
(290, 'tinta hitam blueprint', 1, 'Untuk Printer IT', 2598),
(291, 'Mouse & Keyboard', 1, 'Mouse,Keyboard rusak, mohon di ganti', 2599),
(292, 'CPU Rakitan, monitor, keyboar + Mouse', 1, 'Untuk operasional produksi', 2600),
(293, 'Power Supply', 1, 'untuk pengganti PSU Prod.Roll B', 2523),
(294, 'CD blank', 4, 'ntuk burning windows recovery Xp, 7 & 8', 2604),
(295, 'Mouse', 1, '-', 2615),
(296, 'Tinta hitam', 1, '-', 2626),
(297, 'PITA PRINTER', 1, 'FINISHGOOD SJB B', 2634),
(298, 'Keyboard', 1, 'Permintaa Untuk Luqman Gd Biji SJB B. keyboard sering hang', 2642),
(299, 'RAM DDR3 2 Gb', 1, 'Pinjam RAM DDR3 2 Gb untuk web email lokal', 2646),
(300, 'Tinta hitam', 1, '-', 2648),
(301, 'Ram DDR 3 2 Gb', 1, '-', 2677),
(302, 'DVD blank', 1, '-', 2682),
(303, 'Tinta hitam printer epson L110', 1, 'sekalian disikan ', 2687),
(304, 'Tinta hitam', 1, 'epson L110', 2667),
(305, 'MOUSE', 1, 'MOUSE PROD.POTONG SJB-B TOMBOLKLIK KIRI TIDAK FUNGSI', 2688),
(307, 'Ribbon ID Card', 1, 'untuk printer ID Card (Erna-HRD)', 2690),
(308, 'Kertas fax', 6, '-', 2702),
(309, 'Hardisk', 1, '500 Gb', 2695),
(310, 'Tinta hitam', 1, '-', 2713),
(311, 'Tinta warna merah, hitam dan biru', 1, 'Utk linus', 2724),
(312, 'Mouse', 1, 'utk linus', 2724),
(313, 'Tinta hitam', 1, 'Epson L120', 2729),
(314, 'Catridge', 1, '-', 2730),
(315, 'Kertas fax', 2, '-', 2732),
(316, 'tinta printer semua warna', 1, 'Epson L110', 2735),
(317, 'Kertas fax', 1, 'utk lba', 2736),
(318, 'tinta printer semua warna', 1, 'epson L110', 2737),
(319, 'Mouse', 1, '-', 2740),
(320, 'StaVolt', 1, 'Untuk Fiskal', 2746),
(321, 'Power Supply', 1, 'untuk Pak Bani (manufaktur)', 2784),
(322, 'Hardisk 2 Terrra', 3, 'untuk DVR Kamera', 2785),
(323, 'Conventer hardisk', 1, 'untuk SJB C/D', 2786),
(324, 'stop kontak + Steker', 1, '-', 2786),
(325, 'stop kontak + Steker', 2, '-', 2787),
(326, 'Power Supply', 1, 'untuk Friska (Fiskal) PSU lama mati', 2791),
(328, 'HUB 8 port', 1, '-', 2795),
(329, 'terminal isi 4', 2, '-', 2795),
(330, 'Steker', 2, '-', 2795),
(331, 'Kabel Listrik 20 M', 1, '-', 2795),
(332, 'Pita printer', 2, '-', 2830),
(333, 'Kabel Jaringan atau HUB', 1, 'Untuk penambahan jaringan di ruang prodcurment', 2843),
(334, 'RAM 2GB', 1, 'untuk server e-faktur yang akan digunakan untuk 3 orang admin dengan remot desktop', 2849),
(335, 'tinta printer semua warna', 4, 'untuk depo Purwakarta', 2848),
(336, 'DDR3 - 2 Gb', 1, 'untuk CPU e-faktur butuh RAM 4 GB', 2849),
(337, 'Catrid hitam dan warna Canon IP1980', 1, 'Untuk Printer Pak Iming', 2895),
(338, 'Catridge IP1980 Black', 1, 'untuk printer Pak Iming', 2813),
(339, 'Catridge IP1980 Warna', 1, 'untuk Printer Pak Iming', 2813),
(340, 'Tinta hitam Printer Epson L.300', 1, 'Refill tinta printer Epson L.300 untuk SJB Tempuran a.n Enny Hartatik', 2879),
(341, 'Tinta printer warna merah', 1, 'Untuk akunting', 2888),
(342, 'stop kontak 4lubang', 3, 'u/ lpu jakarta', 2897),
(343, 'steker', 3, 'u/ lpu jakarta', 2897),
(344, 'kabel listrik', 10, 'u/ lpu jakarta', 2897),
(345, 'tang potong', 1, 'u/ IT', 2897),
(346, 'tinta printer semua warna', 1, '-', 2887),
(347, 'Tinta Printer warna hitam.', 1, 'RefillTinta Printer Epson L300 Habis, warna hitam.', 2884),
(349, 'tinta kuning', 1, 'Epson LL110', 2923),
(350, 'mouse', 1, 'tidak berfungsi dengan baik\r\n', 2945),
(351, 'tinta printer semua warna', 1, '-', 2943),
(352, 'Pita printer', 2, '-', 2959),
(353, 'Printer LX 300', 1, 'Untuk Lidah Buaya, graha L.2 atas permintaan bu Titik.\r\nmenunggu pembelian LPTcard, karena di matherboard tidak ada socket LPT nya', 2947),
(354, 'Mouse', 1, 'MOUSE TIDAK BISA BEROPERASI', 2962),
(355, 'Keyboard', 1, 'KEYBORD TIDAK BISA DIGUNAKAN', 2971),
(356, 'Mouse', 1, 'SERING GA CONNECT', 2967),
(357, 'VGA Card 1 Gb', 1, ' UNTUK MENJALANKAN SOFTWARE AUTODESK', 2973),
(358, 'LPTcard', 1, 'untuk pemasangan printer epson dot matrik dikarenakan soket lpt tidak ada dimobo ', 2957),
(359, 'Kabel Power', 1, '-', 2983),
(360, 'spiral', 1, 'stok untuk merapikan kabel', 3016),
(361, 'Kertas fax', 2, '-', 3022),
(362, 'CD blank ', 2, 'untuk burning master wind 7', 3024),
(363, 'RJ 45', 1, '-', 3028),
(364, 'Tinta hitam', 1, '-', 3044),
(365, 'Pita Printer', 2, 'untuk LX-300 Epson', 3072),
(366, 'Kertas fax', 1, 'Mohon utk bisa diberikan satu roll kertas fax utk Linus', 3073),
(368, 'Tinta hitam', 1, '-', 3083),
(369, 'CD blank', 1, 'burning CD recovery Wind 7', 3091),
(370, 'Mouse ', 1, 'Penggantian mouse yang rusak', 3093),
(371, 'Keyboard', 1, 'keyboard lama tombol rusak', 3100),
(372, 'Tinta hitam', 1, 'Printer admin HR', 3095),
(373, 'Tinta Semua Warna', 1, '-', 3106),
(374, 'RAM', 1, '6 Gb', 3107),
(375, 'Printer', 1, 'Dot Matrix', 3107),
(376, 'Baterai alkaline kecil', 1, 'Utk pointer di ruang meeting lantai 3', 3126),
(377, 'Hardisk 500 Gb', 1, 'Permintaa Hardisk untuk server karena dirve C sudah penuh', 3129),
(378, 'tinta hitam epson', 1, 'tinta hitam hampir habis', 3176),
(379, 'Kertas fax', 2, '-', 3175),
(380, 'Tinta hitam', 1, 'Printer Epson', 3187),
(381, 'Pita Printer', 2, '-', 3201),
(382, 'PITA PRINTER', 1, 'PITA YANG LAMA SDH TIDAK JELAS HASIL PRINTNYA', 3206),
(383, 'Ribbon ID Card', 1, 'untuk Erna-HRD', 3222),
(384, 'Toner', 1, 'untuk stok', 3225),
(385, 'CD Blank', 1, '-', 3248),
(386, 'Mouse', 1, '-', 3252),
(387, 'Tinta Hitam', 1, 'printer epson', 3256),
(388, 'DVD Blank', 3, '-', 3266),
(389, 'Kabel Bellden', 12, '-', 3279),
(390, 'kertas fax', 4, '-', 3284),
(391, 'pita printer', 4, 'Lx 300', 3284),
(392, 'tinta printer 4 warna', 1, 'L120', 3284),
(393, 'kertas fax', 2, '-', 3289),
(394, 'Kabel Listrik (15 meter)', 1, 'SJB C/D', 3304),
(395, 'Stop Komtak isi 4', 1, 'untuk pemasangan jaringan baru di unit gudang biji sjb 1', 3311),
(396, 'Pita Printer', 1, 'untuk Yuni Nurmawati-Fiskal', 3347),
(397, 'RJ 45', 1, '-', 3361),
(398, 'Cleaning Card (printer evolis)', 1, '-', 3379),
(399, 'Catridge Hitam', 1, 'canon ip2770', 3385),
(400, 'tinta hitam', 1, 'Epson L 120', 3381),
(401, 'RAM', 1, 'DDR III 2 Gb', 3393),
(402, 'Fan', 1, 'untuk box DVR parkir selatan LB', 3430),
(403, 'Kabel NYMHY 0.75mm 20m', 1, 'untuk pemasangan power suplay dan DVR di area parkir selatan', 3436),
(404, 'Mouse', 1, 'untuk komputer linus ip 100.100.5.29 (bagian sparepart)', 3443),
(405, 'fan processor ', 1, 'untuk cpu komputer ip 100.100.5.21 (bagian finance) dikarenakan rusak', 3443),
(406, 'Hardisk', 1, 'untuk penggantian hardisk PC an Dian Anggara 100.100.5.11 (Linus), dikarenakan hardisk mati.', 3444),
(407, 'Card Kosong', 1, '-', 3452),
(408, 'MOUSE', 1, 'ERROR', 3479),
(410, 'Mouse', 1, 'TUKAR MOUSE KARENA DI GESER TIDAK BERFUNGSI', 3483),
(411, 'PSU', 1, '-', 3480),
(412, 'PSU', 1, '-', 3492),
(413, 'Motherboard', 1, '-', 3492),
(414, 'RAM 2 Gb DDR III', 1, '-', 3492),
(415, 'Processor I3', 1, '-', 3492),
(416, 'Keyboard', 1, 'utk Ade Mutia', 3529),
(417, 'CD Blank', 1, 'burning lagu untuk keperluan karnaval', 3545),
(418, 'Kabel data sata', 4, 'untuk SJB C/D', 3565),
(419, 'CPU Rakitan komplit', 1, '-', 3325),
(420, 'Cisco 16 Port', 1, 'utk rmh valencia', 3597),
(421, 'TP Link WA801D', 1, '-', 3597),
(422, 'HUB TL SF1008D', 1, '-', 3597),
(423, 'Finger print', 1, '-', 3598),
(424, 'Printer kasir', 1, '-', 3598),
(425, 'Laptop', 1, 'Untuk keperluan meeting bersama konsultan AX (Iverson)', 3623),
(426, 'Proyektor', 1, 'Pengajuan peminjaman Laptop dan proyektor selama 2 hari (tgl. 9-10 sept 2015) untuk keperluan meeting bersama konsultan AX (Iverson)', 3623),
(427, 'Switch Hub 8 port', 3, 'utk Glamour,SJB B, graha lantai 3 (r.secretary)', 3637),
(428, 'Konektor RJ45', 1, '-', 3640),
(429, 'Adaptor CCTV', 2, 'utk tempuran', 3649),
(430, 'RAM 8 GB', 2, 'untuk server exchange', 3650),
(431, 'RAM', 1, '2GB', 3663),
(432, 'DVR Avtech DG1004 HD CCTV 4CH ', 1, 'pengganti jember', 3675),
(433, 'HDD WD Purple 1TB Surveillence Hard Drive', 1, 'pengganti jember', 3675),
(434, 'HDD', 1, 'untuk pengganti DVR SJB C/D', 3676),
(435, 'Ribbon ID Card', 1, 'untuk printer Evolis ID Card', 3688),
(436, 'Power Supply', 1, 'pengganti server RDP 3.222', 3733),
(437, 'Motherboard Gigabyte H61-S2P-R3', 1, 'untuk pengganti Pak Aris', 3720),
(438, 'Mouse USB', 1, 'untuk pengganti mouse wireless bu Vera', 3761),
(439, 'Catridge Hitam IP2770', 1, 'untuk printer Rully Linus', 3756),
(440, 'Kabel Listrik', 20, 'untuk instalasi listrik SJB D', 3764),
(441, 'Rak Kabel 5 cm', 3, 'untuk instalasi Hub di SJB D', 3764),
(442, 'Mouse', 1, 'untuk Aji Linus', 3804),
(443, 'Keyboard', 1, 'pengganti utk Aji Linus', 3804),
(444, 'Mouse', 2, 'untuk Prima (Andreas & Fawaid)', 3750),
(445, 'Flash Disk', 1, 'untuk Prima (Andreas)', 3750),
(446, 'Monitor LCD', 1, 'untuk pengganti Hendra SJB B', 3878),
(447, 'Catridge IP2770 Black', 1, 'untuk pengganti catridge printer Rully Linus', 3890),
(448, 'RJ45', 1, 'untuk networking', 3895),
(449, 'Kabel VGA', 1, 'untuk mengganti kabel VGA DVR SJB A', 3903),
(450, 'ribbon id card', 1, 'cetak id card', 3915),
(451, 'blank id card', 1, 'cetak id card', 3915),
(452, 'Catridge IP2770 Black', 1, 'untuk printer payroll', 3937),
(453, 'CCTV Outdoor', 1, 'pemindahan & pengganti gudang biji A', 3944),
(454, 'BNC', 1, 'pemindahan & pengganti gd.biji A', 3944),
(455, 'Kipas Processor (Dual Core)', 1, 'pengganti komp adm printing', 3982),
(456, 'UPS', 1, 'untuk Prajenan (tower)', 4002),
(457, 'Power Adapter', 1, 'SJB B', 4002),
(458, 'CCTV ', 4, 'untuk SJB B', 4002),
(459, 'DVR 16 port', 1, 'untuk SJB B', 4002),
(460, 'Kabel Coax', 1, 'untuk SJB B', 4002),
(461, 'Printer', 1, 'untuk Pak Ari Surya', 4003),
(462, 'Printer Multi fungsi', 1, 'untuk depo Ciputat', 4003),
(463, 'IP PHone', 1, 'untuk Aji Linus kantor graha', 4003),
(464, 'Flash Disk 8 GB', 1, 'untuk Pak Andreas Prima', 4004),
(465, 'Switch Hub 16 port CISCO', 1, 'untuk koneksi prajenan-rumah P.Iming', 4007),
(466, 'Kabel LAN', 1, 'untuk koneksi prajenan-rumah P.Iming', 4007),
(467, 'Dak Kabel', 1, 'untuk koneksi prajenan-rumah P.Iming', 4007),
(468, 'LPT Card', 1, 'untuk Christy', 4009),
(469, 'DVD RW', 1, 'untuk burning Win 7', 4033),
(470, 'CPU+Keyboard+Mouse 1 set', 1, 'untuk Pak Iming (Pinus)', 4000),
(471, 'Adaptor 5v', 1, 'untuk Nari', 4035),
(472, 'CPU+Keyboard+Mouse+Monitor 1 set', 1, 'untuk Novi Ariyanto ( pakai ex Pak Antonius)', 4037),
(473, 'UTP Kabel cat 6', 70, 'untuk pindahan potong B', 4050),
(474, 'Dak Kabel 3mm', 70, 'untuk pindahan potong B', 4050),
(475, 'Klem Kabel diameter 6', 1, 'untuk pindahan potong B', 4050),
(476, 'Fisher+baut S6', 1, 'untuk pindahan potong B', 4050),
(477, 'Wrapping pack 12mm', 1, 'untuk pindahan potong B', 4050),
(478, 'Converter HDMI to VGA', 1, 'untuk Pak Gunawan (penggantian yg lama rusak)', 4054),
(479, 'Lakban Hitam', 1, 'untuk perapian kabel ruang PPIc', 4057),
(480, 'Mouse', 1, 'untuk Nisfi (pengganti)', 4051),
(481, 'Hardisk 500Gb', 1, 'Untuk instalasi HRGA server', 4062),
(482, 'Flas Disk 8 Gb', 1, 'Untuk Pak Andreas (Prima Iklas)', 4065),
(483, 'TAB Samsung 7', 1, 'Untuk tes Aplikasi', 4067),
(484, 'Kabel bilden Cat 6', 1, 'Penggantian dan perapian kabel lama di area SJB A', 4081),
(485, 'Catridge IP2770 Warna', 1, 'untuk Vilia (pengganti)', 4080),
(486, 'HT FirstCom FC-UV5R+', 2, 'untuk maintenance SJB A', 4085),
(487, 'Spiral', 1, 'untuk perapian ruang IT SJB C/D', 4087),
(488, 'Lakban hitam', 1, 'untuk perapian ruang IT SJB C/D', 4087),
(489, 'Rak kabel TC5', 8, 'office lab sabun', 4086),
(490, 'Lakban hitam', 1, 'office lab sabun', 4086),
(491, 'Kabel Ties', 1, 'office lab sabun', 4086),
(492, 'Klem Kabel 6mm', 1, 'office lab sabun', 4086),
(493, 'Rak kabel 3mm', 2, 'office LBD', 4086),
(494, 'Rak Kabel TL5', 6, 'office LBD', 4086),
(495, 'Lakban hitam', 1, 'office LBD', 4086),
(496, 'Switch hub Cisco 16 port', 1, 'Office plan A', 4096),
(497, 'Kabel Telepon PSTN', 1, 'untuk pengganti kabel telpon pipit', 4097),
(498, 'Kabel UTP Jaringan', 1, 'upgrade kabel jaringan antar switch Plan A', 4107),
(499, 'DVR Avtech KPD679H 16CH H.264 DVR', 1, 'untuk CCTV SJB C/D', 4110),
(500, 'HDD WD 2TB Purple', 1, 'untuk CCTV SJB C/D', 4110),
(501, 'CCTV Avtech Outdoor camera  Infra red', 12, 'untuk CCTV SJB C/D', 4110),
(502, 'UTP Cat 6 ', 400, 'untuk CCTV SJB C/D', 4110),
(503, 'Coaxial cabel include power cable', 500, 'untuk CCTV SJB C/D', 4110),
(504, 'Draft BNC Conector', 24, 'untuk CCTV SJB C/D', 4110),
(505, 'RG 46', 1, 'untuk CCTV SJB C/D', 4110),
(506, 'Dak Kabel 5mm', 307, 'untuk CCTV SJB C/D', 4110),
(507, 'Kabel Ties 10 cm', 1, 'untuk CCTV SJB C/D', 4110),
(508, 'Kabel Ties 20 cm', 1, 'untuk CCTV SJB C/D', 4110),
(509, 'Klem Kabel S7', 1, 'untuk CCTV SJB C/D', 4110),
(510, 'Klem Kabel S6', 1, 'untuk CCTV SJB C/D', 4110),
(511, 'Central Adaptor output 12v - 18port', 1, 'untuk CCTV SJB C/D', 4110),
(512, 'Jack Adaptor 12v', 15, 'untuk CCTV SJB C/D', 4110),
(513, 'Kabel cat 6', 10, 'untuk instalasi server LBD', 4117),
(514, 'DDR3 2 GB', 1, 'untuk penambahan RAM an Siti Aisah (SJB C) krn RAM semula hanya 2 GB', 4126),
(515, 'Power Supply', 1, 'untuk Ruly Linus (mati)', 4141),
(516, 'Power Supply', 1, 'untuk Okky Linus', 4149),
(517, 'CPU ', 1, 'untuk server Open ERP Order Handling', 4150),
(518, 'CD Blank', 1, 'untuk Ori (burning ubuntu) ', 4155),
(519, 'Rak Kabel 3mm', 2, 'untuk office LBD', 4156),
(520, 'Rak Kabel TL 5', 6, 'untuk office LBD', 4156),
(521, 'Lakban Hitam', 1, 'untuk office LBD', 4156),
(522, 'Kabel bilden Cat 6', 70, 'Untuk perapian kabel SJB B', 4163),
(523, 'Fisher S5', 1, 'Untuk Perapian kabel SJB B', 4163),
(524, 'Baut S5', 1, 'Untuk perapian kabel SJB B', 4163),
(525, 'Wraping Pack', 1, 'Untuk perapian kabel SJB B', 4163),
(526, 'Dak Kabel 3mm', 70, 'untuk perapian kabel SJB B', 4163),
(527, 'Klem Kabel S6', 1, 'untuk perapian kabel SJB B', 4163),
(528, 'Keyboard', 1, 'pengganti Herman (rusak)', 4178),
(529, 'Casing CPU 2nd', 1, 'Untuk Mengganti Casing a.n. Dwi Suryono Gudang Biji SJB A', 4184),
(530, 'RJ-45', 15, 'untuk instalasi jaringan SJB C/D (perpindahan sementara Finish Good)', 4205),
(531, 'Kabel VGA', 3, 'untuk pengganti kabel VGA proyektor ruang meeting graha lantai 3', 4218),
(532, 'Mouse', 1, 'untuk pengganti mouse Ika Yuliati GS1', 4228),
(533, 'Mouse', 1, 'untuk pengganti Hasbi', 4234),
(534, 'Steker', 2, 'untuk pindahan ', 4234),
(535, 'Stopkontak', 2, 'untuk pindahan', 4234),
(536, 'Kabel Listrik', 10, 'untuk pindahan', 4234),
(537, 'Quadbalon', 1, 'untuk pengganti GS SJB A', 4237),
(538, 'Obeng', 1, 'untuk IT', 4244),
(539, 'Vacuum keyboard cleaner', 1, 'untuk maintenance keyboard', 4245),
(540, 'Telepon', 1, 'untuk Budi S (pindah ke Linus)', 4229),
(541, 'CPU, monitor, keyboard dan Mouse 2nd ex Sukandar (GA)', 1, 'Untuk pos satpam', 4251),
(542, 'Kabel NYMHA 2X1,75 ', 2, 'u/ instalasi jaringan di pos satpam SJB A', 4251),
(543, 'Stopkontak UTICOM 4 lubang', 1, 'u/ instalasi jaringan di pos satpam SJB A', 4251),
(544, 'Steker', 1, 'u/ instalasi jaringan di pos satpam SJB A', 4251),
(545, 'Printer Bluetooth Termal Printer (Auto cutter)', 1, 'untuk kitchen Cabin', 4268),
(546, 'Adapter camera', 1, 'Untuk penggantian adapter kamera di lokasi waserda', 4274),
(547, 'Konektor RG 45', 10, 'Permintaan Konektor RG 45 Untuk servise Jaringan Di SJB B', 4295),
(548, 'Konektor RG 45', 10, 'untuk potong & roll SJB D', 4293),
(549, 'Permintaan RAM DDR 3 2Gb', 1, 'Untuk memperlancar proses oengerjaan desain menggunakan corel draw dan Photosop', 4288),
(550, 'Headset', 1, 'untuk Prima', 4306),
(551, 'IP PHone', 2, 'untuk Prima', 4306),
(552, 'Steker', 1, 'Untuk Office Linus yang pindah di graha L.2', 4317),
(553, 'stopkontak 4 lubang', 1, 'Untuk Office Linus yang pindah di graha L.2', 4317),
(554, 'Kabel NYMHA 2X1,75 ', 4, 'Untuk Office Linus yang pindah di graha L.2', 4317),
(555, 'baterai CMOS', 1, 'untuk server absen 4.4', 4343),
(556, 'baterai CMOS', 1, 'untuk CPU spare', 4345),
(557, 'Mouse wireless', 1, 'untuk Pak Lukman M', 4346),
(558, 'ribbon id card', 1, 'UNTUK CETAK ID CARD', 4348),
(559, 'Tinta Hitem epson L110', 1, 'buah', 4400),
(560, 'RG-45', 10, 'untuk maintenance CCTV', 4435),
(561, 'DVD', 1, 'untuk cloning OS', 4444),
(562, 'LAN card', 1, 'pengganti LAN onboard Zaka rusak', 4445),
(563, 'HDD', 1, 'utk Ruly-upgrade', 4459),
(564, 'Mouse', 1, 'pengganti yg rusak untuk Kholik', 4460),
(565, 'Mouse', 1, 'untuk pengganti yg rusak potong SJB B', 4456),
(566, 'Power Supply Dazumba 600w', 1, 'utk Ratna Puspitasari(manufaktur A)', 4477);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `idPesan` int(5) NOT NULL,
  `tanggal` datetime NOT NULL,
  `antri` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `kd_jenis` char(10) NOT NULL,
  `reference` varchar(30) NOT NULL,
  `submitedby` text NOT NULL,
  `addresedby` text NOT NULL,
  `root_cause` text NOT NULL,
  `correction` text,
  `prevention` text NOT NULL,
  `upload` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `complainant` text NOT NULL,
  `qmr` text NOT NULL,
  `IP_Number` varchar(50) NOT NULL,
  `idBag` int(3) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Open',
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`idPesan`, `tanggal`, `antri`, `subject`, `problem`, `kd_jenis`, `reference`, `submitedby`, `addresedby`, `root_cause`, `correction`, `prevention`, `upload`, `deadline`, `complainant`, `qmr`, `IP_Number`, `idBag`, `status`, `jenis`) VALUES
(1, '2016-03-17 15:47:05', 'K00001', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'K', 'Nunc viverra imperdiet enim. F', 'Manufactur - Plan Support', 'Finance - Finance', '', '', '', '', '0000-00-00', '', '', 'fe80::98ba:9d1c:d17f:6e2b', 0, 'Open', 'komplain_internal'),
(2, '2016-03-17 15:47:19', 'K0002', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'K', 'Nunc viverra imperdiet enim. F', 'Manufactur - Plan Pellet', 'Finance - Accounting', '', '', '', '', '0000-00-00', '', '', 'fe80::98ba:9d1c:d17f:6e2b', 0, 'Open', 'komplain_internal'),
(3, '2016-03-17 15:47:31', 'K0003', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'K', 'Nunc viverra imperdiet enim. F', 'Manufactur - Logistic', 'Marketing', '', '', '', '', '0000-00-00', '', '', 'fe80::98ba:9d1c:d17f:6e2b', 0, 'Open', 'komplain_internal'),
(4, '2016-03-17 15:47:51', 'U0004', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'U', 'Nunc viverra imperdiet enim. F', 'ICT - Opr. & Tecnical Support IT', 'Finance - Tax', '', '', '', '', '0000-00-00', '', '', 'fe80::98ba:9d1c:d17f:6e2b', 0, 'Open', 'usulan_perbaikan'),
(5, '2016-03-17 15:48:07', 'T0005', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'T', 'Nunc viverra imperdiet enim. F', 'ICT - Opr. & Tecnical Support IT', 'Finance - Tax', '', '', '', '', '0000-00-00', '', '', 'fe80::98ba:9d1c:d17f:6e2b', 0, 'Open', 'temuan_audit');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `id_dep` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id_dep`, `dep_name`, `kode`) VALUES
(1, 'Marketing', 'MKT'),
(2, 'Sales Agriculture', 'SLS'),
(3, 'Sales General Trade', 'SLS'),
(4, 'Finance - Finance', 'FIN'),
(5, 'Finance - Accounting', 'ACC'),
(6, 'Finance - Tax', 'TAX'),
(7, 'Purchasing', 'PCH'),
(8, 'Manufactur - Plan A', 'PLA'),
(9, 'Manufactur - Plan B', 'PLB'),
(10, 'Manufactur - Plan C/D', 'PLC'),
(11, 'Manufactur - Plan Support', 'PLS'),
(12, 'Manufactur - Logistic', 'LOG'),
(13, 'Manufactur - Plan Pellet', 'PLT'),
(14, 'ICT - Business System IT', 'ICT'),
(15, 'ICT - Application Manage. IT', 'ICT'),
(16, 'ICT - Opr. & Tecnical Support IT', 'ICT'),
(17, 'HRD&GA - Human Resource ', 'HRD'),
(18, 'HRD&GA - General Affair', 'GAL'),
(19, 'HRD&GA - Legal', 'GAL'),
(20, 'MR DEPT.', 'MR'),
(21, 'IA LBG', 'IA'),
(22, 'Sales Admin / BOA / CSO', 'BOA');

-- --------------------------------------------------------

--
-- Table structure for table `jen_bagian`
--

CREATE TABLE IF NOT EXISTS `jen_bagian` (
  `idBag` int(3) NOT NULL,
  `namaBag` varchar(30) NOT NULL,
  `detail` text NOT NULL,
  `ket` text NOT NULL,
  `idKelas` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jen_bagian`
--

INSERT INTO `jen_bagian` (`idBag`, `namaBag`, `detail`, `ket`, `idKelas`) VALUES
(1, 'Software', '172', 'Hal-hal yang berkaitan dengan project aplikasi (request s/d implementasi)', 0),
(2, 'Hardware', '171', 'Hal-hal yang berkaitan dengan Pengadaan barang, penggunaan & pergantian perangkat keras (Komputer, Printer, Scanner, dsb.)', 0),
(3, 'Ms. Dynamics AX', '184', 'Hal-hal yang berkaitan dengan implementasi Microsoft Dynamic AX.', 0),
(4, 'Networking & Security', '911', 'Hal-hal yang berkaitan dengan Setting Jaringan Lan, IP Phone,Modem, Monitoring bandwith Internet, Email dan Antivirus', 0),
(5, 'Cabling & Communication', '911', 'Hal-hal yang berhubungan dengan Instalasi Pemasangan Jaringan Lan, Telpon, Fax dan Kabel Listrik Komputer.', 0),
(6, 'CCTV', '911', 'Hal-hal yang berkaitan dengan installasi pemasangan perangkat CCTV dan Monitoring Recording.', 0),
(7, 'Help Desk', '170', 'Hal-hal yang berkaitan dengan instalasi software & hardware.', 0),
(8, 'Data Center & Security', '889,689', 'Hal-hal yang berkaitan Semua Server LBG , Pembuatan User Id, setting otorisasi role dan Backup, Restore, delete, edit, Repair database.', 0),
(11, 'Project Development', '889', 'Hal- hal yang berkaitan dengan pemamfaatan teknologi informasi dalam mendukung proses bisnis ( Hardware dan Software ) .', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `idKelas` int(3) NOT NULL,
  `namaKelas` varchar(30) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idKelas`, `namaKelas`, `harga`) VALUES
(2, 'XXXX', 0),
(3, 'YYYY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `idPesan` int(5) NOT NULL,
  `tanggal` datetime NOT NULL,
  `antri` varchar(50) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kd_jenis` char(10) NOT NULL,
  `namaPemesan` varchar(30) NOT NULL,
  `departement` varchar(50) NOT NULL,
  `unit` text NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `telp` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `upload` varchar(100) NOT NULL,
  `corective` text NOT NULL,
  `pic` varchar(50) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `tgl_slsai` datetime NOT NULL,
  `tgl_corective` datetime NOT NULL,
  `date_line` varchar(50) NOT NULL DEFAULT '-',
  `IP_Number` varchar(50) NOT NULL,
  `idBag` int(3) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `pass`, `level`) VALUES
(1, 'admin', 'admin@dc1', 'admin'),
(2, 'pic', 'pic', 'pic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBrg`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `jen_bagian`
--
ALTER TABLE `jen_bagian`
  ADD PRIMARY KEY (`idBag`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idKelas`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBrg` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=567;
--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `idPesan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `jen_bagian`
--
ALTER TABLE `jen_bagian`
  MODIFY `idBag` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idKelas` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idPesan` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
