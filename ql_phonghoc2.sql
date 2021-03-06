-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 19, 2019 lúc 10:25 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_phonghoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_thietbi`
--

CREATE TABLE `chitiet_thietbi` (
  `id_chitiet_tb` int(11) NOT NULL,
  `ten_chitiet_tb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_chitiet_tb_khongdau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhan_hieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quy_cach` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nam_sudung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chi tiết thiết bị';

--
-- Đang đổ dữ liệu cho bảng `chitiet_thietbi`
--

INSERT INTO `chitiet_thietbi` (`id_chitiet_tb`, `ten_chitiet_tb`, `ten_chitiet_tb_khongdau`, `nhan_hieu`, `quy_cach`, `nam_sudung`) VALUES
(1, 'Máy tính để bàn', '', 'HP compaq pro 6300 MT ', 'CPU core i5, RAM 4 Gb, HDD 500 Gb, \r\nMàn hình HP 17 inch', '2013-01-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loaiphong` int(11) NOT NULL,
  `ten_loaiphong` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ten_loaiphong_khongdau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Loại phòng học';

--
-- Đang đổ dữ liệu cho bảng `loai_phong`
--

INSERT INTO `loai_phong` (`id_loaiphong`, `ten_loaiphong`, `ten_loaiphong_khongdau`, `ghi_chu`) VALUES
(1, 'Lý thuyết', 'Ly-thuyet', ''),
(2, 'Thực hành máy tính', 'Thuc-hanh-may-tinh', ''),
(3, 'Xưởng điện', 'Xuong-dien', ''),
(4, 'Xưởng cơ khí', 'Xuong-co-khi', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` int(11) DEFAULT NULL,
  `so_dt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Người dùng';

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_user`, `username`, `password`, `ho_ten`, `email`, `so_dt`, `created_at`, `updated_at`) VALUES
(1, 'admin', 123456, 'Tấn', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi_phonghoc`
--

CREATE TABLE `phanhoi_phonghoc` (
  `id_phanhoi` int(11) NOT NULL,
  `id_phonghoc` int(11) NOT NULL,
  `noidung_phanhoi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Phản hồi phòng học';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_hoc`
--

CREATE TABLE `phong_hoc` (
  `id_phonghoc` int(11) NOT NULL,
  `id_loaiphong` int(11) NOT NULL,
  `ten_phonghoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_ph_khongdau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_ngan_ph` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_chi_tiet_ph` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dientich_ph` double DEFAULT NULL,
  `suc_chua` int(11) DEFAULT NULL,
  `id_vitri` int(11) NOT NULL,
  `sodo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_phanhoi` int(11) DEFAULT NULL,
  `hinh_minhhoa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Phòng học';

--
-- Đang đổ dữ liệu cho bảng `phong_hoc`
--

INSERT INTO `phong_hoc` (`id_phonghoc`, `id_loaiphong`, `ten_phonghoc`, `ten_ph_khongdau`, `mo_ta_ngan_ph`, `mo_ta_chi_tiet_ph`, `dientich_ph`, `suc_chua`, `id_vitri`, `sodo`, `id_phanhoi`, `hinh_minhhoa`, `hinh_anh`) VALUES
(29, 2, 'Phòng B002A', 'B002A', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành đồ hoạ', 'Phòng B002A nằm ở tầng trệt khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành đồ hoạ với các trang thiết bị hiện đại.', NULL, 0, 5, '', 0, '', 'Phong-B002A.jpg'),
(30, 2, 'Phòng B002B', 'B002B', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành đồ hoạ', 'Phòng B002B nằm ở tầng trệt khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành đồ hoạ với các trang thiết bị hiện đại.', NULL, 0, 5, '', 0, '', 'Phong-B002B.jpg'),
(31, 2, 'Phòng B002C', 'B002C', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành đồ hoạ', 'Phòng B002C nằm ở tầng trệt khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành đồ hoạ với các trang thiết bị hiện đại.', NULL, 0, 5, '', 0, '', 'Phong-B002C.jpg'),
(32, 2, 'Phòng B101A', 'B101A', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành mạng máy tính', 'Phòng B101A nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành mạng  với các trang thiết bị hiện đại.', NULL, 0, 6, '', 0, '', 'Phong-B101A.jpg'),
(33, 2, 'Phòng B101B', 'B101B', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành mạng máy tính', 'Phòng B101B nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành mạng  với các trang thiết bị hiện đại.', NULL, 0, 6, '', 0, '', 'Phong-B101B.jpg'),
(34, 2, 'Phòng B102A', 'B102A', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B102A nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 6, '', 0, '', 'Phong-B102A.jpg'),
(35, 2, 'Phòng B102B', 'B102B', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B102B nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 6, '', 0, '', 'Phong-B102B.jpg'),
(36, 2, 'Phòng B103A', 'B103A', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B103A nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 6, '', 0, '', 'Phong-B103A.jpg'),
(37, 2, 'Phòng B103B', 'B103B', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B103B nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 6, '', 0, '', 'Phong-B103B.jpg'),
(38, 2, 'Phòng B112', 'B112', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành mạng máy tính', 'Phòng B112 nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành mạng  với các trang thiết bị Cisco hiện đại.', NULL, 0, 6, '', 0, '', 'Phong-B112.jpg'),
(39, 2, 'Phòng B113', 'B113', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành mạng máy tính', 'Phòng B113 nằm ở tầng 1 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành mạng  với các trang thiết bị Cisco hiện đại.', NULL, 0, 6, '', 0, '', 'Phong-B113.jpg'),
(40, 2, 'Phòng B201A', 'B201A', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành mạng máy tính', 'Phòng B201A nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành mạng  với các trang thiết bị hiện đại.', NULL, 0, 7, '', 0, '', 'Phong-B201A.jpg'),
(41, 2, 'Phòng B201B', 'B201B', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành mạng máy tính', 'Phòng B201A nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học chuyên ngành mạng  với các trang thiết bị hiện đại.', NULL, 0, 7, '', 0, '', 'Phong-B201B.jpg'),
(42, 2, 'Phòng B202A', 'B202A', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B202A nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 7, '', 0, '', 'Phong-B202A.jpg'),
(43, 2, 'Phòng B202B', 'B202B', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B202B nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 7, '', 0, '', 'Phong-B202B.jpg'),
(44, 2, 'Phòng B203A', 'B203A', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B203A nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 7, '', 0, '', 'Phong-B203A.jpg'),
(45, 2, 'Phòng B203B', 'B203B', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B203B nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 7, '', 0, '', 'Phong-B203B.jpg'),
(46, 2, 'Phòng B209A', 'B209A', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B209A nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 7, '', 0, '', 'Phong-B209A.jpg'),
(47, 2, 'Phòng B209B', 'B209B', 'Phòng học thực hành máy vi tính tin học cơ bản và các môn học hỗn hợp của CNTT', 'Phòng B209B nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản, các môn học hỗn hợp thuộc các ngành của CNTT.', NULL, 0, 7, '', 0, '', 'Phong-B209B.jpg'),
(48, 2, 'Phòng B301A', 'B301A', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành tiếng anh', 'Phòng B301A nằm ở tầng 3 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tiếng anh chuyên ngành', NULL, 0, 8, '', 0, '', 'Phong-B301A.jpg'),
(49, 2, 'Phòng B301B', 'B301B', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành tiếng anh', 'Phòng B301B nằm ở tầng 3 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tiếng anh chuyên ngành', NULL, 0, 8, '', 0, '', 'Phong-B301B.jpg'),
(50, 2, 'Phòng B304', 'B304', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành kế toán', 'Phòng B304 nằm ở tầng 3 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản và các môn chuyên ngành kế toán.', NULL, 0, 8, '', 0, '', 'Phong-B304.jpg'),
(51, 2, 'Phòng B305', ' B305', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành QTKD', 'Phòng B305 nằm ở tầng 3 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản và các môn chuyên ngành QTKD.', NULL, 0, 8, '', 0, '', 'Phong-B305.jpg'),
(52, 2, 'Phòng B306', ' B306', 'Phòng học thực hành máy vi tính tin học cơ bản và chuyên ngành kế toán', 'Phòng B306 nằm ở tầng 3 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng thực hành máy vi tính phục vụ các môn học như tin học cơ bản và các môn chuyên ngành kế toán.', NULL, 0, 8, '', 0, '', 'Phong-B306.jpg'),
(53, 1, 'Phòng B204', ' B204', 'Phòng học lý thuyết', 'Phòng B204 nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng học lý thuyết phục vụ các môn học lý thyết của tất cả các khoa.', NULL, 0, 7, '', 0, '', 'Phong-B204.jpg'),
(54, 1, 'Phòng B205', ' B205', 'Phòng học lý thuyết', 'Phòng B205 nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng học lý thuyết phục vụ các môn học lý thyết của tất cả các khoa.', NULL, 0, 7, '', 0, '', 'Phong-B205.jpg'),
(55, 1, 'Phòng B206', ' B206', 'Phòng học lý thuyết', 'Phòng B206 nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng học lý thuyết phục vụ các môn học lý thyết của tất cả các khoa.', NULL, 0, 7, '', 0, '', 'Phong-B206.jpg'),
(56, 1, 'Phòng B207', ' B207', 'Phòng học lý thuyết', 'Phòng B207 nằm ở tầng 2 khu B trường cao đẳng công nghệ Thủ Đức.\nLà phòng học lý thuyết phục vụ các môn học lý thyết của tất cả các khoa.', NULL, 0, 7, '', 0, '', 'Phong-B207.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `idslide` int(11) NOT NULL,
  `Ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`idslide`, `Ten`, `hinh`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Trường CĐ công nghệ Thủ Đức', 'Lasan1.jpg', 'Truong-cao-dang-cong-nghe-Thu-Duc', NULL, NULL),
(2, 'Trường CĐ công nghệ Thủ Đức', 'Lasan2.jpg', 'Truong-cao-dang-cong-nghe-Thu-Duc', NULL, NULL),
(3, 'Trường CĐ công nghệ Thủ Đức', 'Lasan1.jpg', 'Truong-cao-dang-cong-nghe-Thu-Duc', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thiet_bi`
--

CREATE TABLE `thiet_bi` (
  `id_thietbi` int(11) NOT NULL,
  `ten_thietbi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_chitiet_tb` int(11) NOT NULL,
  `id_phonghoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Thiết bị';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vi_tri`
--

CREATE TABLE `vi_tri` (
  `id_vitri` int(11) NOT NULL,
  `dia_diem` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `khu` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tang` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vi_tri`
--

INSERT INTO `vi_tri` (`id_vitri`, `dia_diem`, `khu`, `tang`) VALUES
(1, 'Khu -A - Tầng trệt', 'A', 'trệt'),
(2, 'Khu -A - Tầng 1', 'A', '1'),
(3, 'Khu -A - Tầng 2', 'A', '2'),
(4, 'Khu -A - Tầng 3', 'A', '3'),
(5, 'Khu -B - Tầng trệt', 'B', 'trệt'),
(6, 'Khu -B - Tầng 1', 'B', '1'),
(7, 'Khu -B - Tầng 2', 'B', '2'),
(8, 'Khu -B - Tầng 3', 'B', '3'),
(9, 'Khu -B - Tầng 4', 'B', '4'),
(10, 'Khu -C - Tầng trệt', 'C', 'trệt'),
(11, 'Khu -C - Tầng 1', 'C', '1'),
(12, 'Khu -C - Tầng 2', 'C', '2'),
(13, 'Khu -H - Tầng trệt', 'H', 'trệt'),
(14, 'Khu -H - Tầng 1', 'H', '1'),
(15, 'Khu -H - Tầng 3', 'H', '3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_thietbi`
--
ALTER TABLE `chitiet_thietbi`
  ADD PRIMARY KEY (`id_chitiet_tb`);

--
-- Chỉ mục cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  ADD PRIMARY KEY (`id_loaiphong`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `phanhoi_phonghoc`
--
ALTER TABLE `phanhoi_phonghoc`
  ADD PRIMARY KEY (`id_phanhoi`),
  ADD KEY `id_phonghoc` (`id_phonghoc`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `phong_hoc`
--
ALTER TABLE `phong_hoc`
  ADD PRIMARY KEY (`id_phonghoc`),
  ADD KEY `id_loaiphong` (`id_loaiphong`),
  ADD KEY `id_vitri` (`id_vitri`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idslide`);

--
-- Chỉ mục cho bảng `thiet_bi`
--
ALTER TABLE `thiet_bi`
  ADD PRIMARY KEY (`id_thietbi`),
  ADD KEY `id_phonghoc` (`id_phonghoc`),
  ADD KEY `id_chitiet_tb` (`id_chitiet_tb`);

--
-- Chỉ mục cho bảng `vi_tri`
--
ALTER TABLE `vi_tri`
  ADD PRIMARY KEY (`id_vitri`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiet_thietbi`
--
ALTER TABLE `chitiet_thietbi`
  MODIFY `id_chitiet_tb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loai_phong`
--
ALTER TABLE `loai_phong`
  MODIFY `id_loaiphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phanhoi_phonghoc`
--
ALTER TABLE `phanhoi_phonghoc`
  MODIFY `id_phanhoi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phong_hoc`
--
ALTER TABLE `phong_hoc`
  MODIFY `id_phonghoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thiet_bi`
--
ALTER TABLE `thiet_bi`
  MODIFY `id_thietbi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `vi_tri`
--
ALTER TABLE `vi_tri`
  MODIFY `id_vitri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phanhoi_phonghoc`
--
ALTER TABLE `phanhoi_phonghoc`
  ADD CONSTRAINT `phanhoi_phonghoc_ibfk_1` FOREIGN KEY (`id_phonghoc`) REFERENCES `phong_hoc` (`id_phonghoc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `phanhoi_phonghoc_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `nguoi_dung` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phong_hoc`
--
ALTER TABLE `phong_hoc`
  ADD CONSTRAINT `FK_loaiphong_phonghoc` FOREIGN KEY (`id_loaiphong`) REFERENCES `loai_phong` (`id_loaiphong`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_vitri_phonghoc` FOREIGN KEY (`id_vitri`) REFERENCES `vi_tri` (`id_vitri`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thiet_bi`
--
ALTER TABLE `thiet_bi`
  ADD CONSTRAINT `FK_tb_chitiettb` FOREIGN KEY (`id_chitiet_tb`) REFERENCES `chitiet_thietbi` (`id_chitiet_tb`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_phonghoc` FOREIGN KEY (`id_phonghoc`) REFERENCES `phong_hoc` (`id_phonghoc`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
