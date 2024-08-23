-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 19, 2024 lúc 07:17 AM
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
(18, 'trời hôm nay như cgggggc', 'không cósssssssssssssssssssssssssssssssssssssssssssssssssss gì đâu men ', 'thấy mệt quá đi bạn hiềnssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', 13, 1, '1723561297_hinh7.png');

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
(76, '6374', 48, 1);

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
(5, 'Nam Trường', '0', 'Quảng Ngãi', '698d51a19d8a121ce581499d7b701668', '0346009149'),
(6, 'Nam Trường', 'lnntruong@gmail.com', 'Quảng Ngãi', '698d51a19d8a121ce581499d7b701668', '0346009149'),
(7, 'hai anh me', 'truong@gmail.com', '22222', '698d51a19d8a121ce581499d7b701668', '22222'),
(8, 'Nam Trường', 'lnntruong2003@gmail.com', 'Quảng Ngãi', 'b0baee9d279d34fa1dfd71aadb908c3f', '0346009149'),
(9, 'Nam Trường', '1@gmail.com', 'Quảng Ngãi', 'c4ca4238a0b923820dcc509a6f75849b', '0346009149'),
(10, 'sgsfdfsfsfs', 'sfsdfs@gmail.com', 'Phú Yên', 'c81e728d9d4c2f636f067f89cc14862c', '1111111111');

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
(27, 'giay 01', 1),
(28, 'giay 02', 2),
(29, 'giày 03', 3),
(30, 'giay 04', 4),
(31, 'giay 05', 5);

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
(26, 6, '3755', 0, '2024-08-16 12:15:18', 'tien mat', 2),
(27, 6, '3557', 0, '2024-08-16 12:17:37', 'tien mat', 2),
(28, 6, '7921', 0, '2024-08-16 12:20:05', 'Chuyen khoan', 2),
(29, 6, '7890', 0, '2024-08-16 14:03:42', 'tien mat', 2),
(30, 6, '3238', 0, '2024-08-16 14:04:28', 'tien mat', 2),
(31, 6, '336', 0, '2024-08-16 14:05:36', 'tien mat', 2),
(32, 6, '4250', 0, '2024-08-16 14:06:34', 'Chuyen khoan', 2),
(33, 6, '3303', 0, '2024-08-16 14:13:45', 'tien mat', 2),
(34, 6, '3202', 0, '2024-08-16 14:19:04', 'tien mat', 2),
(35, 6, '4951', 0, '2024-08-16 14:22:38', 'tien mat', 2),
(36, 6, '9544', 0, '2024-08-16 17:28:49', 'tien mat', 2),
(37, 6, '4701', 0, '2024-08-16 17:45:30', 'tien mat', 2),
(38, 6, '1897', 0, '2024-08-16 18:08:35', 'tien mat', 2),
(39, 6, '9150', 0, '2024-08-16 19:18:18', 'tien mat', 2),
(40, 9, '5996', 0, '2024-08-16 19:27:15', 'tien mat', 8),
(41, 9, '2201', 0, '2024-08-16 22:38:22', 'tien mat', 8),
(42, 9, '6158', 0, '2024-08-17 09:48:52', 'tien mat', 8),
(43, 9, '4634', 0, '2024-08-17 10:22:55', 'tien mat', 8),
(44, 9, '8584', 0, '2024-08-17 10:32:33', 'tien mat', 8),
(45, 9, '4944', 0, '2024-08-17 11:41:57', 'tien mat', 8),
(46, 9, '2400', 0, '2024-08-17 12:16:55', 'tien mat', 8),
(47, 9, '2376', 0, '2024-08-17 16:53:27', 'tien mat', 8),
(48, 9, '416', 0, '2024-08-17 17:57:44', 'tien mat', 8),
(49, 9, '5602', 0, '2024-08-17 18:11:52', 'tien mat', 8),
(50, 9, '600', 0, '2024-08-18 10:37:18', 'tien mat', 8),
(51, 9, '5277', 0, '2024-08-18 11:59:49', 'tien mat', 8),
(52, 6, '885', 2, '2024-08-18 23:16:22', 'tien mat', 2),
(53, 6, '3714', 4, '2024-08-18 23:25:24', 'tien mat', 2),
(54, 9, '4755', 5, '2024-08-19 11:30:47', 'tien mat', 8),
(55, 9, '6374', 3, '2024-08-19 11:37:08', 'tien mat', 8);

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
(1, 'Số điện thoại: 0346009149\r\nZalo:0346009149\r\nĐịa chỉ: Ổ quỷ hóc môn');

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
(46, 'ADIDAS 02', '02', '15000000', 4, NULL, '1723459498_01.jpg', '', '', 1, 28),
(47, 'ADIDAS 03', '03', '1000000', 12, NULL, '1723459531_hinh24.png', '', '', 1, 29),
(48, 'ADIDAS 04', '04', '20000000', 14, 2, '1723459569_hinh36.png', '', '', 1, 30),
(49, 'ADIDAS 05', '05', '50000000', 18, 2, '1723459598_hinh35.png', '', '', 1, 31),
(50, 'ADIDAS s01', '01', '12000000', 11, 9, '1723529628_hinh41.png', '', '', 1, 27),
(51, 'ADIDAS s02000', '02', '222222', 12, 6, '1723529653_hinh47.png', '', '', 1, 28),
(52, 'ADIDAS 03', '03', '15000000', 6, 3, '1723529674_hinh53.png', '', '', 1, 29),
(53, 'ADIDAS 05', '123', '125511', 4, 4, '1723789560_hinh29.png', '', '', 1, 31),
(54, 'ADIDAS 05', '155', '34354345', 1, NULL, '1723789580_hinh58.png', '', '', 1, 31),
(55, 'ADIDAS 05', '852', '142454', 95, 5, '1723789628_hinh87.png', '', '', 1, 31),
(56, 'ADIDAS 05', '854', '125511', 0, 14, '1723789949_hinh42.png', '', '', 1, 31),
(57, 'ADIDAS s05', '123', '12000000', 1, 4, '1723887515_hinh117.png', '<ul>\r\n	<li>D&aacute;ng regular fit</li>\r\n	<li>C&oacute; d&acirc;y gi&agrave;y</li>\r\n	<li>Th&acirc;n gi&agrave;y bằng da cật với c&aacute;c chi tiết da lộn bụi bặm v&agrave; nhũ v&agrave;ng &aacute;nh kim</li>\r\n	<li>Lớp l&oacute;t bằng d', '<h3>SAMBA ORIGINALS</h3>\r\n\r\n<p>Ra đời tr&ecirc;n s&acirc;n b&oacute;ng, gi&agrave;y Samba l&agrave; biểu tượng kinh điển của phong c&aacute;ch đường phố. Phi&ecirc;n bản n&agrave;y trung th&agrave;nh với di sản, thể hiện qua th&acirc;n gi&agrave;y bằng da mềm, d&aacute;ng thấp, nh&atilde; nhặn, c&aacute;c chi tiết phủ ngo&agrave;i bằng da lộn v&agrave; đế gum, biến đ&ocirc;i gi&agrave;y trở th&agrave;nh item kh&ocirc;ng thể thiếu trong tủ đồ của tất cả mọi người - cả trong v&agrave; ngo&agrave;i s&acirc;n cỏ.</p>\r\n<ddict-div></ddict-div>', 1, 27);

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
(1, 'sfg', 'fsfdsf', 'sdfsdf', 'sdfsfs', 0),
(2, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'giao nhanh phát', 6),
(3, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'giao nhanh phát', 6),
(4, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'giao nhanh phát', 6),
(5, 'Lương Nguyễn Nam Trường', '0346009149', 'Quảng Ngãi', 'giao nhanh phát', 6),
(6, 'trường ', '0346009149', 'quảng ngãi', 'mau lên đi anh ơi em mệt', 7),
(7, 'trường', '0346009149', 'quảng ngãi', 'mày nhìn cái chó gì', 8),
(8, 'Lương Nguyễn Nam Trường', '0967522067', 'QN', 'haiz', 9),
(9, 'Lương Trường', '11111', 'Phú Yên', 'không 1', 10);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_detail`
--
ALTER TABLE `tbl_cart_detail`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
