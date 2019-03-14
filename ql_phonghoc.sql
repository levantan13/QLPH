-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 13, 2019 lúc 01:24 PM
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
-- Cấu trúc bảng cho bảng `chitiet_phonghoc`
--

CREATE TABLE `chitiet_phonghoc` (
  `id_chitiet_ph` int(11) NOT NULL,
  `id_phonghoc` int(11) NOT NULL,
  `ten_chitiet_ph` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ten_chitiet_ph_khongdau` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_ngan_ph` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_chitiet_ph` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dien_tich` double NOT NULL,
  `suc_chua` int(11) NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `so_do` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_minhhoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_phanhoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chi tiết phòng học';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_thietbi`
--

CREATE TABLE `chitiet_thietbi` (
  `id_chitiet_tb` int(11) NOT NULL,
  `ten_chitiet_tb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nhan_hieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quy_cach` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nam_sudung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Chi tiết thiết bị';

--
-- Đang đổ dữ liệu cho bảng `chitiet_thietbi`
--

INSERT INTO `chitiet_thietbi` (`id_chitiet_tb`, `ten_chitiet_tb`, `nhan_hieu`, `quy_cach`, `nam_sudung`) VALUES
(1, 'Máy tính để bàn', 'HP compaq pro 6300 MT ', 'CPU core i5, RAM 4 Gb, HDD 500 Gb, \r\nMàn hình HP 17 inch', '2013-01-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_phong`
--

CREATE TABLE `loai_phong` (
  `id_loaiphong` int(11) NOT NULL,
  `ten_loaiphong` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Loại phòng học';

--
-- Đang đổ dữ liệu cho bảng `loai_phong`
--

INSERT INTO `loai_phong` (`id_loaiphong`, `ten_loaiphong`, `ghi_chu`) VALUES
(1, 'Lý thuyết', ''),
(2, 'Thực hành máy tính', ''),
(3, 'Xưởng điện', ''),
(4, 'Xưởng cơ khí', '');

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
  `hinh_anh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Phòng học';

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
(2, 'Trường CĐ công nghệ Thủ Đức', 'Lasan1.jpg', 'Truong-cao-dang-cong-nghe-Thu-Duc', NULL, NULL),
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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_phonghoc`
--
ALTER TABLE `chitiet_phonghoc`
  ADD PRIMARY KEY (`id_chitiet_ph`),
  ADD KEY `id_phanhoi` (`id_phanhoi`),
  ADD KEY `id_phonghoc` (`id_phonghoc`),
  ADD KEY `id_vitri` (`id_vitri`);

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
  ADD KEY `id_loaiphong` (`id_loaiphong`);

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
-- AUTO_INCREMENT cho bảng `chitiet_phonghoc`
--
ALTER TABLE `chitiet_phonghoc`
  MODIFY `id_chitiet_ph` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_phanhoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `phong_hoc`
--
ALTER TABLE `phong_hoc`
  MODIFY `id_phonghoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thiet_bi`
--
ALTER TABLE `thiet_bi`
  MODIFY `id_thietbi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `vi_tri`
--
ALTER TABLE `vi_tri`
  MODIFY `id_vitri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiet_phonghoc`
--
ALTER TABLE `chitiet_phonghoc`
  ADD CONSTRAINT `FK_tb_chitietph_phonghoc` FOREIGN KEY (`id_phonghoc`) REFERENCES `phong_hoc` (`id_phonghoc`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_phanhoi_phonghoc` FOREIGN KEY (`id_phanhoi`) REFERENCES `phanhoi_phonghoc` (`id_phanhoi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tb_vitri_chitietph` FOREIGN KEY (`id_vitri`) REFERENCES `vi_tri` (`id_vitri`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FK_loaiphong_phonghoc` FOREIGN KEY (`id_loaiphong`) REFERENCES `loai_phong` (`id_loaiphong`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
