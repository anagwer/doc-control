-- phpMyAdmin SQL Dump
-- version 4.3.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 12:40 AM
-- Server version: 5.6.22
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_ict`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `idagenda` int(20) NOT NULL,
  `task` varchar(100) NOT NULL,
  `detailtask` varchar(3000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`idagenda`, `task`, `detailtask`) VALUES
(1, 'Struktur Organisasi & rencana pengembangan', '<b>1.1 Review</b><br/>\n1.2 Draft to be meeting<br/>\n1.3 Final draft<br/>\n1.4 Draft to be purpose<br/>\n'),
(2, 'Job Descriptions dan Job Activity tiap PiC ', '<b>2.1 General Job Descriptions</b><br/>\n2.2 Job Activity  PiC<br/>\n2.3 Job Allocations & timeline<br/>\n2.5 Peningkatan kualitas SDM\n'),
(3, 'Workflow dan SOP', '<b>3.1 List Workflow tiap departemen</b><br/>\n3.2 Detail workflow tiap departemen<br/>\n3.3 Draft List SOP<br/> \n3.4 Review draft SOP<br/>\n3.5 Final draft SOP'),
(4, 'IT Policy', '<b>4.1 Penggunaan PC, Laptop dan perangkat IT lainnya</b><br/>\n4.2 Penggunaan fasilitas email dan internet<br/>\n4.3 Penggunaan data dan akses server (user akses)<br/>\n4.4 Penggunaan aplikasi<br/> \n4.5 Internal Policy\n'),
(5, 'Problem Identification (List Issues)', '<b>5.1 Hardware</b><br/>\n5.2 Network & Infrastructure<br/>\n5.3 Security & DB<br/>\n5.4 Bussines Applications non AX<br/>\n5.4 Bussines Applications  AX<br/>\n5.4 Web Applications dan SEO\n'),
(6, 'Project', '<b>6.1 Technicall support time respone</b><br/>\n <b>6.2 Maintenance network (Backbone, CCTV and Telecommunication)</b><br/>\n <b>6.3 Server dan infrastruktur pendukung didalamnya</b><br/><br/>\n<b>6.4 MRP base on Dynamics AX </b><br/>\n 6.4.1 Sales (terbatas sampai dengan SO)<br/> \n6.4.2 Manufacture (full)<br/> \n6.4.3 Inventory management (Item management/include DEPO)<br/><br/>\n<b>6.5 Warehouse Management System base on AX</b><br/>\n 6.5.1 Purchasing (terbatas sampai dengan incoming shipment)<br/> \n6.5.2 Putaway strategy<br/> 6.5.3 Piciking strategy<br/> \n6.5.4 Inventory control<br/><br/>\n<b>6.6 Sales and Distribution base on AX</b><br/> \n6.6.1 Sales Order Processing<br/> \n6.6.2 Customer Management<br/><br/>\n<b>6.7 Purchasing base on AX<br/></b> \n6.7.1 Vendor & Item<br/>\n6.7.2 Purchase Order<br/>\n6.7.3 Item & Invoice Receipt<br/>\n6.7.4 Credit notes and Item returns<br/><br/>\n<b>6.8 Finance administration</b><br/>\n6.8.1 Finance Bussiness Process<br/>\n6.8.2 Ledger Integration<br/><br/>\n<b>6.9 LINUS Management System</b><br/>\n6.9.1 Sales <br/>\n6.9.2 Route<br/>\n6.9.3 Delivery Order & Delivery Noted<br/>\n6.9.4 Purchase<br/>\n6.9.5 Warehouse & Asset<br/>\n6.9.6 Services<br/>\n6.9.7 Finance & Accounting<br/><br/>\n<b>6.10 Laviure</b><br/>\n6.10.1 POS<br/>\n6.10.2 Warehouse<br/>\n6.10.3 Purchasing<br/>\n6.10.4 Finance & Accounting<br/><br/>\n<b>6.11 Prima Advertising</b><br/>\n6.11.1 POS<br/>\n6.11.2 Warehouse<br/>\n6.11.3 Purchasing<br/>\n6.11.4 Finance & Accounting<br/>\n6.11.5 Production Control<br/><br/>\n<b>6.12 dGlamour</b><br/>\n6.12.1 Sales<br/>\n6.12.2 Accounting<br/>\n6.12.3 Warehouse<br/>\n6.12.4 Marketing (Promote, Reward and point)<br/>\n6.12.5 POS (Sales)<br/><br/>\n<b>6.13 Support data for KPI program</b>\n');

-- --------------------------------------------------------

--
-- Table structure for table `archieve`
--

CREATE TABLE IF NOT EXISTS `archieve` (
  `id_arc` int(10) NOT NULL,
  `nama_departement` varchar(100) NOT NULL,
  `owner_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `tanggal_revisi` varchar(100) NOT NULL,
  `file_archieve` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archieve`
--

INSERT INTO `archieve` (`id_arc`, `nama_departement`, `owner_document`, `no_revisi`, `tanggal_revisi`, `file_archieve`) VALUES
(1, 'Daftar Induk Arsip (PCH)', 'Purchasing', '000', '26-Februari-2016', 'Daftar Induk Arsip (PURCHASING).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `datasheet`
--

CREATE TABLE IF NOT EXISTS `datasheet` (
  `id_sop` int(10) NOT NULL,
  `code_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `judul_formulir` varchar(100) NOT NULL,
  `departement_pemilik` varchar(100) NOT NULL,
  `file_datasheet` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasheet`
--

INSERT INTO `datasheet` (`id_sop`, `code_document`, `no_revisi`, `judul_formulir`, `departement_pemilik`, `file_datasheet`) VALUES
(1, 'F-MGM-007', '001', 'Pembatalan Dokumen', 'MR', 'F-MGM-007 Pembatalan Dokumen.xlsx'),
(2, 'F-MGM-008', '001', 'Rekomendasi Penerbitan dan Revisi', 'MR', 'F-MGM-008 Rekomendasi Penerbitan dan Revisi.xlsx'),
(3, 'F-MGM-009', '001', 'Jawaban Rekom Penerbitan dan Rev', 'MR', 'F-MGM-009 Jawaban Rekom Penerbitan dan Rev..xlsx'),
(4, 'F-MGM-010', '001', 'Template PPKP', 'MR', 'F-MGM-010 Template PPKP.doc'),
(5, 'F-MGM-011', '001', 'Template SOP', 'MR', 'F-MGM-011 Template SOP.docx'),
(6, 'F-MGM-012', '001', 'Template IK', 'MR', 'F-MGM-012 Template IK.xls'),
(8, 'F-MGM-017', '001', 'Konfirmasi Sosialisasi Dok', 'MR', 'F-MGM-017 Konfirmasi Sosialisasi Dok..xlsx'),
(11, 'F-MGM-019', '001', 'Daftar Induk Arsip Dept.Div', 'MR', 'F-MGM-019 Daftar Induk Arsip Dept.Div.xlsx'),
(12, 'F-MGM-020', '001', 'Tabel Penyimpanan File Komputer', 'MR', 'F-MGM-020 Tabel Penyimpanan File Komputer.xlsx'),
(13, 'F-MGM-021', '001', 'Label Kardus Arsip Inaktif', 'MR', 'F-MGM-021 Label Kardus Arsip Inaktif.xlsx'),
(14, 'F-MGM-022', '001', 'Serah Terima Dokumen Gudang Arsip', 'MR', 'F-MGM-022 Serah Terima Dokumen Gudang Arsip.xlsx'),
(15, 'F-MGM-023', '001', 'Monitoring Arsip Inaktif', 'MR', 'F-MGM-023 Monitoring Arsip Inaktif.xlsx'),
(16, 'F-MGM-024', '001', 'Pengantar Pemusnahan Arsip', 'MR', 'F-MGM-024 Pengantar Pemusnahan Arsip.xlsx'),
(17, 'F-MGM-025', '001', 'Berita Acara Pemusnahan Dokumen', 'MR', 'F-MGM-025 Berita Acara Pemusnahan Dokumen.xlsx'),
(19, 'F-MGM-001', '001', 'Program Audit', 'MR', 'F-MGM-001 Program Audit.docx'),
(20, 'F-MGM-002', '001', 'Jadwal Audit Internal', 'MR', 'F-MGM-002 Jadwal Audit Internal.xlsx'),
(21, 'F-MGM-003', '001', 'Checklist Audit', 'MR', 'F-MGM-003 CHECKLIST AUDIT.xlsx'),
(22, 'F-MGM-004', '001', 'Opening Meeting', 'MR', 'F-MGM-004 Opening Meeting.pptx'),
(23, 'F-MGM-005', '001', ' Laporan Internal Audit', 'MR', 'F-MGM-05 Laporan Internal Audit.xlsx'),
(24, 'F-MGM-006', '001', 'Form TKP Portal DC', 'MR', 'F-MGM-006 Form TKP Portal DC.xls'),
(25, 'F-MGM-031', '001', 'Jadwal Internal Meeting', 'MR', 'F-MGM-031 Jadwal Meeting Internal.xlsx'),
(26, 'F-MGM-032', '001', ' Notulen Meeting', 'MR', 'F-MGM-032 Notulen Meeting.xlsx'),
(41, 'F-MGM-013', '00', 'Profil SOP', 'MR', 'F-MGM-13 PROFIL SOP.xlsx'),
(42, 'F-MGM-018', '001', 'Daftar Induk Dok. Eksternal', 'MR', 'F-MGM-018 Daftar Induk Dokumen Eksternal.xlsx'),
(43, 'F-FIN-004', '000', 'Form Pengajuan Perubahan Kredit', 'Finance', 'F-FIN-004 FORM PENGAJUAN PERUBAHAN KREDIT.xls'),
(44, 'F-FIN-005', '000', 'Lembar Otorisasi', 'Finance', 'F-FIN-005 LEMBAR OTORISASI.xlsx'),
(45, 'F-FIN-006', '000', 'Pemohonan Kredit Customer', 'Finance', 'F-FIN-006 PERMOHONAN KREDIT CUSTOMER.xlsx'),
(46, 'F-HRD-001', '000', 'Form Permintaan Karyawan', 'HRD', 'F-HRD-001 Form Permintaan Karyawan.doc'),
(47, 'F-HRD-002', '000', 'Form Data Diri Calon Karyawan', 'HRD', 'F-HRD-002 Form Data Diri Calon Karyawan.doc'),
(48, 'F-HRD-003', '000', 'Interview Apprisal', 'HRD', 'F-HRD-003 Interview Apprisal.doc'),
(49, 'F-HRD-004', '000', 'Evaluasi Internal Training', 'HRD', 'F-HRD-004 Evaluasi Internal Training.xls'),
(50, 'F-HRD-005', '001', 'FORM Penilaian Kinerja  Staff & Supervisory SJB', 'HRD', 'F-HRD-005 FORM Penilaian Kinerja  Staff & Supervisory SJB (REV1).doc'),
(51, 'F-HRD-006', '001', 'FORM Penilaian Kinerja Non staff  SJB', 'HRD', 'F-HRD-006 FORM Penilaian Kinerja Non staff  SJB (rev1).xls'),
(52, 'F-HRD-007', '000', 'Formulir Exit Interview', 'HRD', 'F-HRD-007 FORMULIR EXIT INTERVIEW.doc'),
(53, 'F-HRD-008', '000', 'Efektifitas Training', 'HRD', 'F-HRD-008 Efektifitas Training.xls'),
(54, 'F-HRD-009', '000', 'Evaluasi Umpan Balik Eksternal Training', 'HRD', 'F-HRD-009  Evaluasi umpan balik Eksternal Training.doc'),
(55, 'F-HRD-010', '000', 'Formulir Mutasi HRD SJB', 'HRD', 'F-HRD-010 FORMULIR MUTASI HRD SJB .doc'),
(56, 'F-HRD-011', '000', 'Form Kecelakaan Kerja', 'HRD', 'F-HRD-011 FORM KECELAKAAN KERJA.doc'),
(57, 'F-HRD-012', '000', 'Form Duka SJB', 'HRD', 'F-HRD-012  form duka SJB.xls'),
(58, 'F-HRD-013', '000', 'Uang Pisah', 'HRD', 'F-HRD-013 uang pisah.xlsx'),
(59, 'F-HRD-014', '000', 'Pengajuan Berobat', 'HRD', 'F-HRD-014 pengajuan berobat.xls'),
(60, 'F-HRD-015', '000', 'Form Komplain', 'HRD', 'F-HRD-015 form komplain.xls'),
(61, 'F-HRD-016', '001', 'Surat Peringatan', 'HRD', 'F-HRD-016 SP (rev1).docx'),
(62, 'F-HRD-017', '000', 'Kotak Saran', 'HRD', 'F-HRD-017 kotak saran.xlsx'),
(63, 'F-FIN-004', '000', 'Form Pengajuan Perubahan Kredit', 'Finance', 'F-FIN-004 FORM PENGAJUAN PERUBAHAN KREDIT.xls'),
(64, 'F-FIN-005', '000', 'Lembar Otorisasi', 'Finance', 'F-FIN-005 LEMBAR OTORISASI.xlsx'),
(65, 'F-FIN-006', '000', 'Permohonan Kredit Customer', 'Finance', 'F-FIN-006 PERMOHONAN KREDIT CUSTOMER.xlsx'),
(66, 'F-FIN-007', '000', 'Aplikasi Kredit', 'Finance', 'F-FIN-007  Aplikasi Kredit.xlsx'),
(67, 'F-FIN-008', '000', 'Lembar Otorisasi Kredit', 'Finance', 'F-FIN-008  Lembar Otorisasi Kredit.xlsx'),
(68, 'F-FIN-009', '000', 'Form Survey Jaminan Asset', 'Finance', 'F-FIN-009 Form Survey Jaminan Asset.xls'),
(69, 'F-FIN-010', '000', ' Kertas Kerja Konfirmasi Piutang', 'Finance', 'F-FIN-010 Kertas Kerja Konfirmasi Piutang.xls'),
(70, 'F-FIN-011', '000', 'SURAT KUASA PENARIKAN', 'Finance', 'F-FIN-011 SURAT KUASA PENARIKAN (Lampiran).doc'),
(71, 'F-ACC-005', '000', 'Capital Expenditure Planning', 'Accounting', 'F-ACC-005 Capital Expenditure Planning.xlsx'),
(72, 'F-FIN-006', '000', 'Man Power Planning', 'Accounting', 'F-ACC-006 Man Power Planning.xlsx'),
(73, 'F-FIN-007', '000', ' Training Planning', 'Accounting', 'F-ACC-007 Training Planning.xlsx'),
(74, 'F-FIN-008', '000', 'Travelling Planning', 'Accounting', 'F-ACC-008 Travelling Planning.xlsx'),
(75, 'F-FIN-009', '000', ' Entertainment Planning', 'Accounting', 'F-ACC-009 Entertainment Planning.xlsx'),
(76, 'F-FIN-010', '000', 'Professional Fee Planning', 'Accounting', 'F-ACC-010 Professional Fee Planning.xlsx'),
(77, 'F-FIN-011', '000', 'Repair & Maintenance Planning', 'Accounting', 'F-ACC-011 Repair & Maintenance Planning.xlsx'),
(78, 'F-FIN-012', '000', 'Stationary & Office SUpplies Planning', 'Accounting', 'F-ACC-012 Stationary & Office SUpplies Planning.xlsx'),
(79, 'F-FIN-013', '000', 'General & Admin Expenses Planning', 'Accounting', 'F-ACC-013 General & Admin Expenses Planning.xlsx'),
(80, 'F-ACC-001', '000', ' Buku Serah Terima SJ - INVOICE', 'Accounting', 'F-ACC-001 Buku Serah Terima SJ - INVOICE.xls'),
(81, 'F-ACC-002', '000', 'Invoice', 'Accounting', 'F-ACC-002  INVOICE.xls'),
(82, 'F-ACC-003', '000', 'Berita Acara Opname BRP', 'Accounting', 'F-ACC-003 Berita Acara Opname BRP.xls'),
(83, 'F-ACC-004', '000', 'TT Penggantian Barang Replacement', 'Accounting', 'F-ACC-004 TT Penggantian Barang Replacement.xls'),
(84, 'F-LOG-004', '000', 'Surat Penitipan Kiriman Logistic', 'Logistik', 'F-LOG-004 Surat Penitipan Kiriman Logistic.xls'),
(85, 'F-LOG-005', '000', 'Buku Serah Terima RETUR gudang transit', 'Logistik', 'F-LOG-005 Buku Serah Terima RETUR gudang transit.xls'),
(86, 'F-LOG-006', '000', ' Buku Serah Terima Dok. Driver', 'Logistik', 'F-LOG-006 Buku Serah Terima Dok. Driver.xls'),
(87, 'F-SLS-001', '000', 'Bukti Serah Terima BRP', 'Sales', 'F-SLS-001 Bukti Serah Terima BRP.xls'),
(88, 'F-SLS-002', '000', 'Daftar Alasan Proses Retur', 'Sales', 'F-SLS-002 Daftar Alasan Proses Retur.xls'),
(89, 'F-SLS-003', '000', 'Buku Serah Terima BRP (CSO atau Adm Sales)', 'Sales', 'F-SLS-003 Buku Serah Terima BRP (CSO atau Adm Sales).xls'),
(90, 'F-SLS-004', '000', 'Formulir RPKP (salesman)', 'Sales', 'F-SLS-004 Formulir RPKP (salesman).xls'),
(91, 'F-SLS-005', '000', 'Formulir BRP (adm.sales & Logistic)', 'Sales', 'F-SLS-005 Formulir BRP (adm.sales & Logistic).xls'),
(92, 'F-SLS-006', '000', 'Credit Note', 'Sales', 'F-SLS-006 CREDIT NOTE.xls'),
(94, 'F-MGM-030', '001', 'Monitoring TKP', 'MR', 'F-MGM-030 Monitoring TKP.xls'),
(95, 'F-BOA-001', '000', 'Daftar Keluhan Pelanggan', 'BOA', 'F-BOA-001 Daftar Keluhan Pelanggan.xlsx'),
(96, 'F-PCH-012', '001', 'Contoh Kartu QC', 'Purchasing', 'F-PCH-012 CONTOH KARTU QC.docx'),
(97, 'F-PCH-017', '001', 'Form Monitoring Ketidaksesuaian Supplier', 'Purchasing', 'F-PCH-017 Form Monitoring Ketidaksesuaian Supplier.xlsx'),
(101, 'F-MGM-014', '000', 'Formulir Program PKP', 'MR', 'F-MGM-014 FORMULIR PROGRAM PKP.docx'),
(102, 'F-MGM-015', '000', 'Laporan Tingkat Kepuasan Pelanggan', 'MR', 'F-MGM-015  LAPORAN TINGKAT KEPUASAN PELANGGAN.docx'),
(103, 'F-MGM-016', '000', 'Laporan Evaluasi Program PKP', 'MR', 'F-MGM-016 LAPORAN EVALUASI PROGRAM PKP.docx'),
(104, 'F-HRD-018', '000', 'Laporan Analisa TC', 'HRD', 'F-HRD-018 Form Laporan Analisa TC.xlsx'),
(105, 'F-HRD-019', '000', 'Program Training dan Coaching', 'HRD', 'F-HRD-019 Form Program Training & Coaching.xlsx'),
(106, 'F-HRD-020', '000', 'Laporan Audit Untuk TC', 'HRD', 'F-HRD-020 Form Laporan Audit untuk TC.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `Document`
--

CREATE TABLE IF NOT EXISTS `Document` (
  `iddoc` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `upload` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Document`
--

INSERT INTO `Document` (`iddoc`, `nama`, `upload`, `keterangan`, `division`) VALUES
(1, 'Formulir Perubahan Aplikasi', 'Formulir Perubahan Aplikasi -001 PCRFv1.xls', ' Form pengajuan perubahan atau penambahan fitur aplikasi \n', 'SJB'),
(2, 'Formulir Akses Email', 'Formulir Akses Email -003 EARFv1.xls', 'Form digunakan untuk pengajuan Email', 'SJB'),
(3, 'Formulir Akses Internet', 'Formulir Akses Internet -002 IARFv1.xls', 'Form digunakan untuk pengajuan yang berkaitan dengan akses internet', 'SJB'),
(4, 'Formulir Akses Jaringan', 'Formulir Akses Jaringan -004 NARFv1.xls', 'Form digunakan untuk pengajuan jaringan baru', 'SJB'),
(5, 'Formulir Perangkat IT', 'Formulir Perangkat IT -008 FAv1.xls', 'Form digunakan untuk aplikasi program', 'SJB'),
(6, 'Formulir Peminjaman Perangkat IT', 'Formulir Peminjaman Perangkat IT -007 BAFv1.xls', 'Form digunakan untuk peminjaman aset ', 'SJB'),
(7, 'Formulir Permintaan Perangkat IT', 'Formulir Permintaan Perangkat IT -006 CDRFv1.xls', 'Form digunakan untuk pengajuan perangkat komputer', 'SJB'),
(8, 'Formulir Akses Telephone', 'Formulir Akses Telephone -005 PARFv1.xls', 'Form digunakan untuk pengajuan perangkat telephone', 'SJB'),
(9, 'Formulir Perubahan Aplikasi', 'Formulir Perubahan Aplikasi -001 PCRFv1.xls', ' Form pengajuan perubahan atau penambahan fitur aplikasi \r\n', 'LBG'),
(10, 'Formulir Akses Email', 'Formulir Akses Email -003 EARFv1.xls', 'Form digunakan untuk pengajuan Email', 'LBG'),
(11, 'Formulir Akses Internet', 'Formulir Akses Internet -002 IARFv1.xls', 'Form digunakan untuk pengajuan yang berkaitan dengan akses internet', 'LBG'),
(12, 'Formulir Akses Jaringan', 'Formulir Akses Jaringan -004 NARFv1.xls', 'Form digunakan untuk pengajuan jaringan baru', 'LBG'),
(13, 'Formulir Perangkat IT', 'Formulir Perangkat IT -008 FAv1.xls', 'Form digunakan untuk aplikasi program', 'LBG'),
(14, 'Formulir Peminjaman Perangkat IT', 'Formulir Peminjaman Perangkat IT -007 BAFv1.xls', 'Form digunakan untuk peminjaman aset ', 'LBG'),
(15, 'Formulir Permintaan Perangkat IT', 'Formulir Permintaan Perangkat IT -006 CDRFv1.xls', 'Form digunakan untuk pengajuan perangkat komputer', 'LBG'),
(16, 'Formulir Akses Telephone', 'Formulir Akses Telephone -005 PARFv1.xls', 'Form digunakan untuk pengajuan perangkat telephone', 'LBG'),
(17, 'Formulir Akses Aplikasi', 'Formulir Akses Aplikasi -001 AARFv1.xls', 'Form untuk mengakses aplikasi', 'SJB'),
(18, 'Formulir Akses Aplikasi', 'Formulir Akses Aplikasi -001 AARFv1.xls', 'Form untuk mengakses aplikasi', 'LBG');

-- --------------------------------------------------------

--
-- Table structure for table `external_doc`
--

CREATE TABLE IF NOT EXISTS `external_doc` (
  `id_sop` int(10) NOT NULL,
  `code_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `judul_document` varchar(100) NOT NULL,
  `owner_document` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `ed_pertama` varchar(100) NOT NULL,
  `ed_terbaru` varchar(100) NOT NULL,
  `file_ext_doc` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external_doc`
--

INSERT INTO `external_doc` (`id_sop`, `code_document`, `no_revisi`, `judul_document`, `owner_document`, `penerbit`, `ed_pertama`, `ed_terbaru`, `file_ext_doc`) VALUES
(1, 'E-MGM-001', '000', 'SNI-ISO 10002: 2009 :MANAJEMEN MUTU -KEPUASAN PELANGGAN- PEDOMAN PENANGANAN KELUHAN PADA ORGANISASI', 'MR', 'BADAN STANDARISASI NASIONAL (BSN)', '08-12-2009', '08-12-2009', 'ISO 10002 komplain pelanggan__IND.pdf'),
(2, 'E-MGM-002', '000', ' 	SNI-ISO 9001:2008 : SISTEM MANAJEMEN MUTU -- PERSYARATAN', 'MR', 'BADAN STANDARISASI NASIONAL (BSN)', '23-12-2008', '23-12-2008', 'SNI ISO 9001_2008_dua bahasa.pdf'),
(3, 'E-MGM-003', '000', 'SNI ISO 9000:2008 SISTEM MANAJEMEN MUTU -- DASAR-DASAR DAN KOSAKATA', 'MR', 'BADAN STANDARISASI NASIONAL (BSN)', '26-06-2007', '26-06-2007', 'SNI ISO 9000_2008 Vocabulary.pdf'),
(4, 'E-GAL-001', '000', 'PERMENPERIND PENCANTUMAN LOGO TARA PANGAN DAN DAUR ULANG', 'LEGAL HEAD', 'KEMENTERIAN INDUSTRI RI', '12-02-2010', '12-02-2010', 'Permenperind_No_24_2010.pdf'),
(6, 'E-MGM-004', '000', '(Lampiran 1 Manual SJH) SK TENTANG DAFTAR BAHAN TIDAK KRITIS', 'KOORD. AHI', 'LPPOM MUI', '30-01-2013', '30-03-2016', 'Lampiran 1 - SK07.I.2013 - Daftar Bahan Tidak Kritis (Halal Positive List of Materials).pdf'),
(7, 'E-MGM-005', '005', 'BS EN ISO 9001:2015: QUALITY MANAGEMENT SYSTEM -- REQUIREMENTS', 'MR', 'BSI (British Standard Institution)', '01-01-1987', '30-10-2015', 'BS EN ISO 9001-2015--[2015-09-25--05-50-46 AM].pdf');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE IF NOT EXISTS `knowledge` (
  `id_sop` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `jenis_file` varchar(100) NOT NULL,
  `file_knowledge` varchar(500) DEFAULT NULL,
  `tgl_upload` varchar(100) NOT NULL,
  `recomended` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id_sop`, `judul`, `deskripsi`, `jenis_file`, `file_knowledge`, `tgl_upload`, `recomended`, `departemen`) VALUES
(1, 'GUIDELINES FOR GMP FOR PLASTIC MATERIALS AND ARTICLES INTENDED FOR FOOD CONTACT APPLICATIONS', 'Artikel singkat dari PLASTIC EUROPE tentang GMP di bidang plastik makanan', 'PDF', 'GMP Plastic for food package.pdf', '27-02-2016', 'DC', 'MR'),
(2, 'SIAPA KOMPETITOR KITA? SEBUAH RENUNGAN', 'Video yang menggambarkan silo mentality dalam sebuah perusahaan.', 'MP4', 'Siapa competitor kita Intro to Lean.mp4', '27-02-2016', 'MR', 'MR'),
(3, 'ISO Focus edisi 113 - Nov-Dec 2015', 'Majalah yang diterbitkan oleh ISO. Edisi ini tentang revisi standard ISO 9001 dan 14001.', 'PDF', 'isofocus_Magz_DEC. 2015.pdf', '27-02-2016', 'MR', 'MR'),
(4, '	APPROACHING CHANGE ISO 14001:2015 AND ISO 9001:2015 SEMINAR', 'Tentang perubahan pendekatan dalam ISO 9001 dan ISO 14001 tahun 2015', 'PDF', 'Seminar ISO Revision.pdf', '29-02-2016', 'BP sp', 'SOM'),
(5, 'QMS RISK BASED THINKING', 'Bahan seminar tentang manajemen risiko dan standard-standard manajemen yang dapat digunakan', 'PDF', 'Workshop Quality Management System.pdf', '29-02-2016', 'BP sp', 'SOM'),
(6, 'PLASTIC â€“ EVALUATION OF COMPOSTABILITY â€“ TEST SCHEME AND SPECIFICATION (BS EN 14995-2006)', 'Salah satu standard dari BSI dalam manajemen formulasi plastik-yang dapat dikomposkan.', 'PDF', 'BS EN 14995-2006.pdf', '29-02-2016', 'BP sp', 'SOM'),
(7, 'ISO-90012015 FDIS, Penjelasan Klausu-Klausul', 'Salah satu referensi untuk memahami ISO 9001 2015. Mengacu pada Final Draft International Standard (', 'PDF', 'ISO_9001_2015_FDIS_Penjelasan_klausul.pdf', '05-03-2016', 'BP sp.', 'SOM');

-- --------------------------------------------------------

--
-- Table structure for table `manual_policy`
--

CREATE TABLE IF NOT EXISTS `manual_policy` (
  `id_manual` int(10) NOT NULL,
  `code_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `judul_document` varchar(100) NOT NULL,
  `owner_document` varchar(50) NOT NULL,
  `ed_pertama` varchar(100) NOT NULL,
  `ed_terbaru` varchar(100) NOT NULL,
  `file_police` varchar(500) DEFAULT NULL,
  `mkt` varchar(100) NOT NULL,
  `sls` varchar(100) NOT NULL,
  `plant` varchar(100) NOT NULL,
  `pch` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `ga` varchar(100) NOT NULL,
  `hr` varchar(100) NOT NULL,
  `ict` varchar(100) NOT NULL,
  `fin` varchar(100) NOT NULL,
  `acc` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `mr` varchar(100) NOT NULL,
  `ia` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manual_policy`
--

INSERT INTO `manual_policy` (`id_manual`, `code_document`, `no_revisi`, `judul_document`, `owner_document`, `ed_pertama`, `ed_terbaru`, `file_police`, `mkt`, `sls`, `plant`, `pch`, `log`, `ga`, `hr`, `ict`, `fin`, `acc`, `tax`, `mr`, `ia`) VALUES
(3, 'PPKP-FAA-001', '001', 'Ketentuan Penjualan Kredit', 'FAA', '01-01-2015', '01-03-2016', '01.PPKP_KETENTUAN PENJUALAN KREDIT.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(4, 'PPKP-FAA-002', '001', 'Ketentuan Proses Penagihan', 'FAA', '01-01-2015', '01-03-2016', '02.PPKP_ KETENTUAN PROSES PENAGIHAN.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(5, 'PPKP-FAA-003', '001', 'Jaminan Kredit', 'FAA', '01-01-2015', '01-03-2016', '03.PPKP_JAMINAN KREDIT.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(6, 'PPKP-FAA-004', '001', 'Klasifikasi Kategori Piutang', 'FAA', '01-01-2015', '01-03-2016', '04. KLASIFIKASI KATEGORI PIUTANG.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(7, 'PPKP-FAA-005', '001', 'Kewajiban Invoice Opname', 'FAA', '01-01-2015', '01-03-2016', '05. KEWAJIBAN INVOICE OPNAME.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(8, 'PPKP-FAA-006', '001', 'Konfirmasi Piutang Customer', 'FAA', '01-01-2015', '01-03-2016', '06. KONFIRMASI PIUTANG CUSTOMER.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(9, 'PPKP-FAA-007', '001', 'Kebijakan Piutang Bermasalah', 'FAA', '01-05-2015', '01-03-2016', '07 PPKP_KEBIJAKAN PIUTANG BERMASALAH.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(10, 'PPKP-FAA-008', '001', 'Kebijakan Pengendalian Kas', 'FAA', '01-03-2015', '01-03-2016', '08. PPKP_KEBIJAKAN PENGENDALIAN KAS.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(11, 'PPKP-FAA-009', '001', 'Kebijakan Pengendalian Dana ke Pelanggan', 'FAA', '01-04-2015', '01-03-2016', '09. PPKP_KEBIJAKAN PENGEMBALIAN DANA KE PELANGGAN.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(12, 'PPKP-FAA-010', '001', 'Kebijakan Piutang Dagang', 'FAA', '01-08-2015', '01-03-2016', '10. PPKP KEBIJAKAN PIUTANG DAGANG.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(13, 'PPKP-MGM-002', '001', 'Internal Control', 'MR', '03-02-2016', '03-02-2016', 'PPKP INTERNAL CONTROL.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(14, 'MAN â€“ SJH - 01', '000', 'MANUAL SISTEM JAMINAN HALAL SJB', 'KOORD. AHI', '17-10-2015', '17-10-2015', 'MANUAL SJH SJB 2015_ MAN-SJH-01__Ver 1.pdf', '', '', 'âˆš', 'âˆš', 'âˆš', '', 'âˆš', '', '', '', '', 'âˆš', 'âˆš'),
(16, 'PPKP-ICT-001', '000', 'Ketentuan User Access ICT', 'ICT', '14-08-2015', '14-08-2015', 'PPKP ICT User Access.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(17, 'PPKP-ICT-002', '000', 'Ketentuan IT Asset Inventory/Management', 'ICT', '14-08-2015', '14-08-2015', '2. PPKP ICT Aset Management.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(18, 'PPKP-ICT-003', '000', 'Ketentuan IT Training dan Penanganan Support', 'ICT', '14-02-2015', '14-02-2015', '3. PPKP ICT Trainning & Support.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(19, 'PPKP-ICT-004', '000', 'Perubahan dan Penambahan Fitur Aplikasi', 'ICT', '14-08-2015', '14-08-2015', '4. PPKP ICT Software Development.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(20, 'PPKP-HR&GA-001', '000', 'Ketentuan Lembur', 'HRD', '12-05-2015', '12-05-2015', 'PPKP KETENTUAN LEMBUR REV 1.doc', '', '', '', '', '', '', 'âˆš', '', '', '', '', '', ''),
(21, 'PPKP-HR&GA-001', '000', 'Ketentuan Lembur', 'HRD', '12-05-2015', '12-05-2015', 'PPKP KETENTUAN LEMBUR REV 1.pdf', '', '', 'âˆš', '', '', '', 'âˆš', '', '', '', '', '', ''),
(22, 'PPKP-MR-001', '000', 'Sistem Dokumentasi SJB', 'MR', '01-12-2013', '03-02-2016', 'PPKP DOKUMENTASI SJB.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id_report` int(10) NOT NULL,
  `judul_report` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `judul_report`, `departemen`, `tanggal_terbit`, `lampiran`) VALUES
(2, 'Notulen Annual Meeting Congress', 'Non Dept.', '04-02-2016', 'Notulen Meeting & Project Schedule.pdf'),
(3, 'Mencoba Tanggal Terbit', 'ICT', '29-03-2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `report_audit`
--

CREATE TABLE IF NOT EXISTS `report_audit` (
  `id_report` int(10) NOT NULL,
  `judul_report` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_audit`
--

INSERT INTO `report_audit` (`id_report`, `judul_report`, `departemen`, `tanggal_terbit`, `lampiran`) VALUES
(2, 'Assessment Report/ Surveillance 2015', 'ALL DEPT.', '27-04-2015', 'Assessment Report CAV-01 CV Sinar Joyoboyo Plastik.pdf'),
(3, 'CAM Purchasing Final', 'Purchasing', '16-03-2016', 'CAM PURCHASING FINAL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `report_kpi`
--

CREATE TABLE IF NOT EXISTS `report_kpi` (
  `id_report` int(10) NOT NULL,
  `judul_report` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_kpi`
--

INSERT INTO `report_kpi` (`id_report`, `judul_report`, `departemen`, `tanggal_terbit`, `lampiran`) VALUES
(1, 'Tes ', 'ICT', '04-03-2016', ''),
(2, 'Mencoba', 'ICT', '05-03-2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `report_lain_lain`
--

CREATE TABLE IF NOT EXISTS `report_lain_lain` (
  `id_report` int(10) NOT NULL,
  `judul_report` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_lain_lain`
--

INSERT INTO `report_lain_lain` (`id_report`, `judul_report`, `departemen`, `tanggal_terbit`, `lampiran`) VALUES
(1, 'Tes Report Lain-lain', 'Sales', '04-03-2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `report_meeting`
--

CREATE TABLE IF NOT EXISTS `report_meeting` (
  `id_report` int(10) NOT NULL,
  `judul_report` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_meeting`
--

INSERT INTO `report_meeting` (`id_report`, `judul_report`, `departemen`, `tanggal_terbit`, `lampiran`) VALUES
(5, 'Jadwal Review Meeting Regular', 'ICT', '25-02-2016', 'REVIEW MEETING ICT.pdf'),
(6, 'Jadwal Review Meeting Regular', 'PLANT B', '25-02-2016', 'REVIEW MEETING PLANT B.pdf'),
(7, 'Jadwal Review Meeting Regular', 'PLANT A', '01-03-2016', 'REVIEW MEETING PLANT A.pdf'),
(8, 'Jadwal Review Meeting Regular', 'HR', '01-03-2016', 'REVIEW MEETING HR DEPT..pdf'),
(9, 'Jadwal Review Meeting Regular', 'PURCHASING', '25-02-2016', 'REVIEW MEETING PCH.pdf'),
(10, 'Jadwal Review Meeting Regular', 'PLANT SUPPORT', '01-03-2016', 'REVIEW MEETING PLANT SUPPORT.pdf'),
(11, 'Jadwal Review Meeting Regular', 'LOGISTIK', '01-03-2016', 'REVIEW MEETING LOG. & DEPO.pdf'),
(12, 'Jadwal Review Meeting Regular', 'Accounting', '08-03-2016', 'KPI Review  Accounting1.pdf'),
(13, 'Jadwal Review Meeting Regular', 'Internal Audit', '15-Maret-2016', 'KPI Review Internal Audit.pdf'),
(14, 'Jadwal Review Meeting Regular', 'BOA', '15-Maret-2016', 'KPI REVIEW BOA.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `report_notulen`
--

CREATE TABLE IF NOT EXISTS `report_notulen` (
  `id_report` int(10) NOT NULL,
  `judul_report` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `lampiran` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_notulen`
--

INSERT INTO `report_notulen` (`id_report`, `judul_report`, `departemen`, `tanggal_terbit`, `lampiran`) VALUES
(1, 'Percobaan', 'ICT', '24-03-2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `skse`
--

CREATE TABLE IF NOT EXISTS `skse` (
  `id_report` int(10) NOT NULL,
  `no_skse` varchar(50) NOT NULL,
  `judul_skse` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skse`
--

INSERT INTO `skse` (`id_report`, `no_skse`, `judul_skse`, `departemen`, `tanggal_terbit`, `penerbit`, `lampiran`) VALUES
(1, 'AA', 'AA', 'AA', '07-03-2016', 'ICT', 'I-MGM-004 PEMBUATAN SOP.pdf'),
(2, 'BB', 'BB', 'BB', '08-03-2016', 'ICT', ''),
(3, '15/MA/FA/X/2015', 'Budged Guidelines', 'FAA', '03-10-2015', 'FAA', 'Budget Guidelines 2016.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE IF NOT EXISTS `sop` (
  `id_sop` int(10) NOT NULL,
  `code_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `judul_document` varchar(100) NOT NULL,
  `owner_document` varchar(100) NOT NULL,
  `ed_pertama` varchar(100) NOT NULL,
  `ed_terbaru` varchar(100) NOT NULL,
  `file_sop` varchar(500) DEFAULT NULL,
  `mkt` varchar(100) NOT NULL,
  `sls` varchar(100) NOT NULL,
  `plant` varchar(100) NOT NULL,
  `pch` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `ga` varchar(100) NOT NULL,
  `hr` varchar(100) NOT NULL,
  `ict` varchar(100) NOT NULL,
  `fin` varchar(100) NOT NULL,
  `acc` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `mr` varchar(100) NOT NULL,
  `ia` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sop`
--

INSERT INTO `sop` (`id_sop`, `code_document`, `no_revisi`, `judul_document`, `owner_document`, `ed_pertama`, `ed_terbaru`, `file_sop`, `mkt`, `sls`, `plant`, `pch`, `log`, `ga`, `hr`, `ict`, `fin`, `acc`, `tax`, `mr`, `ia`) VALUES
(6, 'P-MGM-010', '001', 'Budgeting', 'FAA', '01-12-2013', '15-02-2016', 'P-MGM-008 BUDGETING.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(7, 'P-MGM-006', '000', 'Identifikasi Titik Kritis Halal', 'MR', '15-10-2015', '15-10-2015', 'Copy of P-MGM-005 IDENTIFIKASI TITIK KRITIS HALAL.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(13, 'P-MGM-002', '001', 'Prosedur Pengendalian Arsip', 'MR', '03-02-2016', '03-02-2016', 'P-MGM-002 PENGENDALIAN ARSIPP.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(14, 'P-MGM-001', '001', 'Prosedur Pengendalian Dokumen', 'MR', '03-02-2016', '03-02-2016', 'PROSEDUR PENGENDALIAN DOKUMEN REV. 01.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(15, 'P-MGM-008', '001', 'Internal Meeting', 'MR', '03-02-2016', '03-02-2016', 'PROSEDUR INTERNAL MEETING.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(16, 'P-MGM-003', '001', 'Audit Internal', 'MR', '03-02-2016', '03-02-2016', 'PROSEDUR AUDIT INTERNAL.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(18, 'P-LOG-001', '001', 'Penanganan Retur dari Pelanggan', 'Logistik', '01-12-2013', '12-12-2015', 'PENANGANAN RETUR DARI PELANGGAN.pdf', '', 'âˆš', '', '', 'âˆš', '', '', '', 'âˆš', 'âˆš', '', '', ''),
(19, 'P-MGM-005', '001', 'Prosedur Tindakan Koreksi dan Pencegahan', 'MR', '01-12-2013', '20-02-2016', 'PROSEDUR TINDAKAN KOREKSI DAN PENCEGAHAN.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(20, 'P-PCH-003', '001', 'Penanganan Bahan Datang', 'Purchasing', '03-08-2015', '10-03-2016', 'PROSEDUR PENANGANAN BAHAN DATANG1.pdf', '', '', 'âˆš', 'âˆš', '', '', '', '', '', '', '', '', ''),
(21, 'P-MGM-004', '000', 'Pengukuran Kepuasan Pelanggan', 'MR', '03-03-2016', '03-03-2016', 'P-MGM-004  PENGUKURAN KEPUASAN PELANGGAN1.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(22, 'P-BOA-001', '001', 'Permintaan Identifikasi dan Sample', 'BOA', '01-12-2013', '20-02-2016', 'P-BOA-001 PROSEDUR PERMINTAAN IDENTIFIKASI DAN SAMPLE Rev. 1.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'P-BOA-002', '001', 'Prosedur Penanganan Job Order (MTO)', 'BOA', '01-12-2013', '20-02-2016', 'P-BOA-002 PROSEDUR PENANGANAN JOB ORDER Rev. 12016-04 Maret.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'P-BOA-003', '001', 'Prosedur Penanganan Order Standar (MTS)', 'BOA', '01-12-2013', '20-02-2016', 'P-BOA-003 PROSEDUR PENANGANAN ORDER STANDARD Rev. 1.pdf', 'âˆš', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'P-HRD-003', '001', 'Pelatihan dan Pembinaan Reguler', 'HRD', '01-12-2013', '01-04-2016', 'P-HRD-003 PELATIHAN DAN PEMBINAAN REGULER.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(26, 'P-HRD-001', '001', 'Training Karyawan', 'HRD', '01-12-2013', '03-02-2016', 'P-HRD-001 TRAINING KARYAWAN.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(27, 'P-MKT-002', '001', 'Desain dan Pengembangan Produk Baru', 'Marketing', '01-12-2013', '03-01-2016', 'P-MKT-002 DESAIN DAN PENGEMBANGAN PRODUK BARU.pdf', 'âˆš', 'âˆš', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(28, 'P-MGM-007', '001', 'Hazard Identification Risk Assisment & Determining Control (HIRADC)', 'MR', '01-12-2013', '15-03-2016', 'P-MGM-007 HIRADC.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(29, 'P-PPI-001', '001', 'Perencanaan Produksi dan Pengendalian Inventory', 'PPID', '', '', 'PROFIL SOP Perencanaan Produksi dan Pengendalian Inventory.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(30, 'P-PCH-002', '001', 'Pembelian Bahan Produksi', 'Purchasing', '', '', 'PROFIL SOP Perencanaan Produksi dan Pengendalian Inventory.pdf', '', '', '', 'âˆš', '', '', '', '', '', '', '', '', ''),
(32, 'P-PRD-002', '001', 'Produksi Contong (Package)', 'Plant', '', '', 'PROFIL SOP Produksi Contong (Package).pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(33, 'P-PRD-001', '001', 'Produksi Roll', 'Plant', '', '', 'PROFIL SOP Produksi Roll.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(34, 'P-PRD-003', '001', 'Produksi Potong dan Pengemasan', 'Plant', '', '', 'PROFIL SOP Produksi Potong dan Pengemasan.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(35, 'P-PRD-004', '001', 'Penanganan Produk Tidak Sesuai', 'Plant', '', '', 'PROFIL SOP Produksi Penanganan Produk Tidak Sesuai.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(36, 'P-PRD-005', '001', 'Kemampu-Telusuran Produk (Product Traceability)', 'Plant', '', '', 'PROFIL SOP Prosedur Kemampu-telusuran (Traceability).pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(37, 'P-WHS-001', '001', 'Penyimpanan Finish Good', 'Plant', '', '', 'PROFIL SOP Penyimpanan Finish Good.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(39, 'P-LOG-002', '001', 'Pengiriman Order ke Pelanggan', 'Logistik', '', '', 'PROFIL SOP Pengiriman Order ke Pelanggan.pdf', '', '', '', '', 'âˆš', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `standard_doc`
--

CREATE TABLE IF NOT EXISTS `standard_doc` (
  `id_sop` int(10) NOT NULL,
  `code_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `judul_document` varchar(100) NOT NULL,
  `owner_document` varchar(100) NOT NULL,
  `ed_pertama` varchar(100) NOT NULL,
  `ed_terbaru` varchar(100) NOT NULL,
  `file_stand_doc` varchar(500) DEFAULT NULL,
  `mkt` varchar(100) NOT NULL,
  `sls` varchar(100) NOT NULL,
  `plant` varchar(100) NOT NULL,
  `pch` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `ga` varchar(100) NOT NULL,
  `hr` varchar(100) NOT NULL,
  `ict` varchar(100) NOT NULL,
  `fin` varchar(100) NOT NULL,
  `acc` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `mr` varchar(100) NOT NULL,
  `ia` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard_doc`
--

INSERT INTO `standard_doc` (`id_sop`, `code_document`, `no_revisi`, `judul_document`, `owner_document`, `ed_pertama`, `ed_terbaru`, `file_stand_doc`, `mkt`, `sls`, `plant`, `pch`, `log`, `ga`, `hr`, `ict`, `fin`, `acc`, `tax`, `mr`, `ia`) VALUES
(2, 'S-MGM-002', '001', 'Contoh PPKP', 'MR', '01-12-2013', '01-01-2015', 'S-MGM-002 Contoh PPKP.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(3, 'S-MGM-003', '001', 'Contoh SOP', 'MR', '01-12-2013', '01-01-2015', 'S-MGM-003 Contoh SOP.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(4, 'S-MGM-004', '001', 'Contoh IK Bergambar', 'MR', '01-12-2013', '01-07-2015', 'S-MGM-004 Contoh IK Bergambar.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(6, 'S-WHS-001', '000', 'Lay Out Bahan Baku  A', 'Plant A', '01-12-2013', '', 'LAY OUT Bahan Baku  A.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(7, 'S-WHS-002', '000', 'Lay Out Gudang Biji SJB A', 'Plant A', '01-12-2013', '', 'LAY OUT Gudang Biji SJB A.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(8, 'S-WHS-003', '000', 'Lay Out Gudang  Roll SJB A', 'Plant A', '01-12-2013', '', 'layout gud roll sjb a.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(9, 'S-WHS-004', '000', 'Lay Out Gudang Sentral SJB A (all)', 'Plant A', '01-12-2013', '', 'LAY OUT Gudang Sentral SJB A (all).pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(11, 'S-WHS-006', '000', 'Lay Out Sentral SJB B', 'Plant B', '01-12-2013', '', 'LAY OUT SENTRAL SJB B.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(12, 'S-WHS-007', '000', 'Layout Material SJB C', 'Plant CD', '01-12-2013', '', 'layout Material sjb c.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(13, 'S-WHS-008', '000', 'Lay out Material SJB D', 'Plant CD', '01-12-2013', '', 'Lay out Material sjb-d.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(14, 'S-WHS-009', '000', 'LAYOUT Gudang Sentral  SJB CD ', 'Plant CD', '01-12-2013', '', 'LAYOUT Gudang Sentral  SJB CD (all).pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(16, 'S-WHS-005', '000', 'Lay Out Gudang Biji  & BS SJB B', 'Plant B', '01-12-2013', '', 'lay out gdg biji dan BS SJB B.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(17, 'S-MGM-005', '001', 'Standar Penomoran Dokumen', 'MR', '01-12-2013', '01-07-2015', 'S-MGM-005 Standar Penomoran Dokumen.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš');

-- --------------------------------------------------------

--
-- Table structure for table `wi`
--

CREATE TABLE IF NOT EXISTS `wi` (
  `id_sop` int(10) NOT NULL,
  `code_document` varchar(100) NOT NULL,
  `no_revisi` varchar(100) NOT NULL,
  `judul_document` varchar(100) NOT NULL,
  `owner_document` varchar(100) NOT NULL,
  `ed_pertama` varchar(100) NOT NULL,
  `ed_terbaru` varchar(100) NOT NULL,
  `file_wi` varchar(500) DEFAULT NULL,
  `mkt` varchar(100) NOT NULL,
  `sls` varchar(100) NOT NULL,
  `plant` varchar(100) NOT NULL,
  `pch` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `ga` varchar(100) NOT NULL,
  `hr` varchar(100) NOT NULL,
  `ict` varchar(100) NOT NULL,
  `fin` varchar(100) NOT NULL,
  `acc` varchar(100) NOT NULL,
  `tax` varchar(100) NOT NULL,
  `mr` varchar(100) NOT NULL,
  `ia` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wi`
--

INSERT INTO `wi` (`id_sop`, `code_document`, `no_revisi`, `judul_document`, `owner_document`, `ed_pertama`, `ed_terbaru`, `file_wi`, `mkt`, `sls`, `plant`, `pch`, `log`, `ga`, `hr`, `ict`, `fin`, `acc`, `tax`, `mr`, `ia`) VALUES
(2, 'I-MGM-001', '000', 'Penyimpanan Hardcopy', 'MR', '03-02-2016', '03-02-2016', 'I-MGM-001- PENYIMPANAN HARDCOPY.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(3, 'I-MGM-002', '000', 'Penyimpanan File Komputer', 'MR', '03-02-2016', '03-02-2016', 'I-MGM-002 PENYIMPANAN FILE KOMPUTER rev.OD_D9D87E.pdf', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš', 'âˆš'),
(7, 'I-PRD-014', '001', 'QA Random Inspection', 'Plant', '25-02-2016', '11-03-2016', 'I-PRD-014 Qa random inspection.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(8, 'I-BOA-001', '000', 'Upload Nota MTO Repeat dengan Aplikasi ASANA', 'BOA', '11-03-2016', '11-03-2016', 'IK UPLOAD NOTABY ASANA MTO REPEAT++.pdf', '', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'I-BOA-002', '000', 'Upload Nota MTO NEW dengan Aplikasi ASANA', 'BOA', '11-03-2016', '11-03-2016', 'IK  UPLOAD ASANA MTO NEW++.pdf', '', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'I-PRD-006', '000', 'Menjalankan Mesin Potong ( Kresek dan Kresek Printing ) CD', 'Plant CD', '14-03-2016', '14-03-2016', 'I-PRD-006 MENJALANKAN MESIN POTONG ( KRESEK & KRESEK PRINTING ) CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(11, 'I-PRD-008', '000', 'Menjalankan Mesin Potong (Kantong PE ) CD 2016', 'Plant CD', '14-03-2016', '14-03-2016', 'I-PRD-008  MENJALANKAN MESIN POTONG ( KANTONG PE ) CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(12, 'I-WHS-005', '000', 'Penerimaan Raw Material dan Bahan Baku Pendukung Internal', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-005 PENERIMAAN BARANG INTERNAL CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(13, 'I-WHS-006', '000', 'Penerimaan Raw Material dan Bahan Baku Pendukung Eksternal', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-006 PENERIMAAN BARANG EKTERNAL CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(14, 'I-WHS-007', '000', 'Penataan dan Penyimpanan Barang Raw Material dan Support Material', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-007  PENATAAN RM CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(15, 'I-WHS-008', '000', 'Proses Mixing', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-008 PROSES MIXING RM CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(16, 'I-WHS-009', '000', 'Serah Terima HAsil Produksi Roll ke Gudang WIP', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-009 SERAH TERIMA HASIL PRODUKSI ROLL KE GD.WIP CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(17, 'I-WHS-010', '000', 'Penataan Barang WIP', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-010  PENATAAN WIP CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(18, 'I-WHS-011', '000', 'Serah Terima Hasil Produksi ke Gudang Finish Good', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-011 SERAH TERIMA HASIL PRODUKSI KE GD.FG CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(19, 'I-WHS-012', '000', 'Proses Packaging & Tarik Hasil ke Gudang Transit', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-012  PROSES PACKAGING CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(20, 'I-WHS-013', '000', 'Penataan barang Jadi/ Finishgood', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-013  PENATAAN BARANG JADI - FG CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(21, 'I-WHS-014', '000', 'Loading ke Armada', 'Plant CD', '14-03-2016', '14-03-2016', 'I-WHS-014  LOADING FG KE ARMADA CD 2016.pdf', '', '', 'âˆš', '', '', '', '', '', '', '', '', '', ''),
(22, 'I-BOA-003', '000', 'Entry SO Retur', 'BOA', '17-03-2016', '17-03-2016', 'I-BOA-003  ENTRY SO RETUR.xlsx.pdf', '', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'I-BOA-004', '000', 'Pengajuan Over Credit Limit', 'BOA', '17-03-2016', '17-03-2016', 'I-BOA-004  PENGAJUAN OVER CREDIT LIMIT update.xlsx.pdf', '', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'I-BOA-005', '000', 'Pembuatan Daily Report Outstanding', 'BOA', '17-03-2016', '17-03-2016', 'I-BOA-005 MEMBUAT DR OUTSTANDING.xlsx.pdf', '', 'âˆš', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'I-BOA-006', '000', 'Pembuatan Daily Report Sales Achievement', 'BOA', '17-03-2016', '17-03-2016', 'I-BOA-006  MEMBUAT DR SALES ACHIEV.xlsx.pdf', '', 'âˆš', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idagenda`);

--
-- Indexes for table `archieve`
--
ALTER TABLE `archieve`
  ADD PRIMARY KEY (`id_arc`);

--
-- Indexes for table `datasheet`
--
ALTER TABLE `datasheet`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `Document`
--
ALTER TABLE `Document`
  ADD PRIMARY KEY (`iddoc`);

--
-- Indexes for table `external_doc`
--
ALTER TABLE `external_doc`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `manual_policy`
--
ALTER TABLE `manual_policy`
  ADD PRIMARY KEY (`id_manual`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `report_audit`
--
ALTER TABLE `report_audit`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `report_kpi`
--
ALTER TABLE `report_kpi`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `report_lain_lain`
--
ALTER TABLE `report_lain_lain`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `report_meeting`
--
ALTER TABLE `report_meeting`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `report_notulen`
--
ALTER TABLE `report_notulen`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `skse`
--
ALTER TABLE `skse`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `standard_doc`
--
ALTER TABLE `standard_doc`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `wi`
--
ALTER TABLE `wi`
  ADD PRIMARY KEY (`id_sop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idagenda` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `archieve`
--
ALTER TABLE `archieve`
  MODIFY `id_arc` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `datasheet`
--
ALTER TABLE `datasheet`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `Document`
--
ALTER TABLE `Document`
  MODIFY `iddoc` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `external_doc`
--
ALTER TABLE `external_doc`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `manual_policy`
--
ALTER TABLE `manual_policy`
  MODIFY `id_manual` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `report_audit`
--
ALTER TABLE `report_audit`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `report_kpi`
--
ALTER TABLE `report_kpi`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `report_lain_lain`
--
ALTER TABLE `report_lain_lain`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report_meeting`
--
ALTER TABLE `report_meeting`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `report_notulen`
--
ALTER TABLE `report_notulen`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skse`
--
ALTER TABLE `skse`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `standard_doc`
--
ALTER TABLE `standard_doc`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `wi`
--
ALTER TABLE `wi`
  MODIFY `id_sop` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
