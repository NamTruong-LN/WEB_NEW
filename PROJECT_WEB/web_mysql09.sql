-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 08, 2024 lúc 04:06 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_mysql09`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `user_name`, `password`, `admin_status`) VALUES
(1, 'truongadmin', '25f9e794323b453885f5181f1b624d0b', 1),
(2, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`) VALUES
(18, 'trời hôm nay như cgggggc', '<p>kh&ocirc;ng c&oacute; g&igrave; đ&acirc;u men</p>\r\n', '<p>thấy mệt qu&aacute; đi bạn hiền</p>\r\n', 13, 1, '1723561297_hinh7.png'),
(19, 'Hôm nay giảm giá ', '<p>Ở đ&acirc;u m&agrave; c&oacute; giảm</p>\r\n', '', 13, 1, '1724691292_hinh5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_detail`
--

CREATE TABLE `tbl_cart_detail` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_detail`
--

INSERT INTO `tbl_cart_detail` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(35, '2223', 52, 5),
(36, '8046', 52, 5),
(37, '3755', 48, 3),
(38, '3557', 52, 1),
(39, '7921', 49, 2),
(40, '7890', 49, 1),
(41, '7890', 53, 1),
(42, '3238', 47, 3),
(43, '336', 56, 2),
(44, '3303', 50, 2),
(45, '3202', 50, 1),
(46, '4951', 50, 1),
(47, '9544', 55, 1),
(48, '4701', 56, 2),
(49, '1897', 56, 10),
(50, '9150', 55, 2),
(51, '5996', 56, 2),
(52, '5996', 53, 1),
(53, '5996', 51, 1),
(54, '2201', 55, 2),
(55, '6158', 53, 1),
(56, '6158', 51, 1),
(57, '6158', 49, 1),
(58, '4634', 49, 1),
(59, '8584', 53, 1),
(60, '4944', 50, 1),
(61, '2400', 51, 2),
(62, '2376', 57, 1),
(63, '416', 48, 1),
(64, '5602', 57, 1),
(65, '600', 50, 4),
(66, '600', 52, 1),
(67, '5277', 51, 1),
(68, '5277', 53, 1),
(69, '5277', 50, 1),
(70, '885', 57, 1),
(71, '885', 50, 1),
(72, '885', 52, 1),
(73, '3714', 57, 1),
(74, '4755', 52, 1),
(75, '6374', 51, 1),
(76, '6374', 48, 1),
(77, '2065', 49, 6),
(78, '2065', 51, 3),
(79, '2065', 52, 1),
(80, '1266', 50, 1),
(81, '1266', 49, 1),
(82, '5326', 55, 1),
(83, '831', 55, 1),
(84, '3391', 55, 2),
(85, '7559', 49, 1),
(86, '8987', 55, 1),
(87, '8925', 55, 2),
(88, '7661', 49, 1),
(89, '7227', 55, 1),
(90, '2200', 55, 7),
(91, '6697', 55, 1),
(92, '7944', 55, 2),
(93, '2125', 55, 1),
(94, '7678', 55, 3),
(95, '7678', 53, 2),
(96, '7850', 58, 2),
(97, '7850', 55, 2),
(98, '1735', 58, 1),
(99, '1735', 55, 1),
(100, '4512', 52, 1),
(101, '4512', 48, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(70, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', '698d51a19d8a121ce581499d7b701668', '1111111111'),
(71, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', '202cb962ac59075b964b07152d234b70', '0346009149'),
(72, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', 'b0baee9d279d34fa1dfd71aadb908c3f', '0346009149'),
(73, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', '698d51a19d8a121ce581499d7b701668', '1111111111'),
(74, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', '698d51a19d8a121ce581499d7b701668', '0346009149'),
(75, 'Nam Trường', '1@gmail.com', 'Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', '0346009149'),
(76, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', 'c4ca4238a0b923820dcc509a6f75849b', '0346009149'),
(77, 'trường', 'lnntruong2003@gmail.com', 'Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', '0346009149'),
(78, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', 'c6f057b86584942e415435ffb1fa93d4', '0346009149'),
(79, 'Lương Nguyễn Nam Trường', 'lnntruong@gmail.com', 'Quảng Ngãi', 'e807f1fcf82d132f9bb018ca6738a19f', '0346009149'),
(80, 'Lương Nguyễn Nam Trường', 'berper2003@gmail.com', 'Quảng Ngãi', '827ccb0eea8a706c4c34a16891f84e7b', '0346009149'),
(81, 'Luong Truong', 'lnntruong2003@gmail.com', 'Quảng Ngãi', 'c6f057b86584942e415435ffb1fa93d4', '0346009149');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(27, 'Giày Thể Thao', 1),
(28, 'Giày Đá Bóng ', 2),
(29, 'giày 03', 3),
(30, 'giay 04', 4),
(32, 'giay 01', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(12, 'Tin công nghệ', 1),
(13, 'Tin tức trong ngày', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`, `cart_date`, `cart_payment`, `cart_shipping`) VALUES
(70, 71, '7678', 3, '2024-08-26 21:52:54', 'tien mat', 39),
(71, 72, '7850', 0, '2024-08-27 10:23:42', 'tien mat', 45),
(72, 80, '1735', 3, '2024-08-27 11:27:43', 'tien mat', 46),
(73, 78, '4512', 1, '2024-09-08 09:05:44', 'tien mat', 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, '<p>Th&ocirc;ng tin li&ecirc;n hệ ch&uacute;ng t&ocirc;i:</p>\r\n\r\n<p>zalo: 0346 009 149</p>\r\n\r\n<p>Địa chỉ: XX,Huyện XX, Tỉnh XX</p>\r\n\r\n<p>FB:..............</p>\r\n\r\n<p>Số điện thoại: 0346 009 149</p>\r\n<ddict-div></ddict-div>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masanpham` varchar(100) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `soluongban` int(11) DEFAULT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` tinytext NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masanpham`, `giasanpham`, `soluong`, `soluongban`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(40, 'ADIDAS 02', '01', '12000000', 1, NULL, '1723394405_01.jpg', '', '', 1, 26),
(41, 'ADIDAS 01', '02', '18000000', 5, NULL, '1723394842_hinh14.png', '', '', 1, 25),
(42, 'ADIDAS 03', '03', '222222', 4, NULL, '1723394860_hinh10.png', '', '', 1, 26),
(43, 'ADIDAS 01', '01', '222222', 1, NULL, '1723396149_hinh4.png', '', '', 1, 24),
(45, 'ADIDAS 01', '01', '12000000', 5, NULL, '1723459475_hinh4.png', '', '', 1, 27),
(47, 'ADIDAS 03', '03', '1000000', 12, NULL, '1723459531_hinh24.png', '', '', 1, 29),
(48, 'ADIDAS 04', '04', '20000000', 13, 3, '1723459569_hinh36.png', '', '', 1, 30),
(49, 'ADIDAS 05', '05', '50000000', 9, 11, '1723459598_hinh35.png', '', '', 1, 31),
(50, 'ADIDAS s01', '01', '12000000', 10, 10, '1723529628_hinh41.png', '', '', 1, 27),
(51, 'ADIDAS s02000', '02', '222222', 9, 9, '1723529653_hinh47.png', '', '', 1, 28),
(52, 'ADIDAS 03', '03', '15000000', 4, 5, '1723529674_hinh53.png', '', '', 1, 29),
(53, 'ADIDAS 05', '123', '125511', 2, 6, '1723789560_hinh29.png', '', '', 1, 31),
(54, 'ADIDAS 05', '155', '34354345', 1, NULL, '1723789580_hinh58.png', '', '', 1, 31),
(55, 'ADIDAS 05', '852', '142454', 70, 30, '1723789628_hinh87.png', '', '', 1, 31),
(56, 'ADIDAS 05', '854', '125511', 0, 14, '1723789949_hinh42.png', '', '', 1, 31),
(59, 'ADIDAS 03', '255', '12000000', 5, NULL, '1724733007_hinh6.png', '', '', 1, 29);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(255) NOT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(39, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'Nhanh lên cho tôi', 71),
(40, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'Nhanh lên cho tôi', 71),
(41, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'Nhanh lên cho tôi', 71),
(42, '', '', '', '', 78),
(43, 'Luong Truong', '0967522067', 'tan binh', '1211212', 78),
(44, 'Luong Truong', '0967522067', 'tan binh', '1111', 78),
(45, '', '', '', '', 72),
(46, 'Luong Truong', '0967522067', 'tan binh', '', 80),
(47, 'Luong Truong', '0967522067', 'tan binh', '', 78),
(48, 'Luong Truong', '0967522067', 'tan binh', '111', 78);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thongtinlienhe`
--

CREATE TABLE `tbl_thongtinlienhe` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status_lienhe` int(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Chỉ mục cho bảng `tbl_thongtinlienhe`
--
ALTER TABLE `tbl_thongtinlienhe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tbl_thongtinlienhe`
--
ALTER TABLE `tbl_thongtinlienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
