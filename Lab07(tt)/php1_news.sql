-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 15, 2024 lúc 05:05 AM
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
-- Cơ sở dữ liệu: `php1_news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `idLT` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `ThuTu` int(11) NOT NULL,
  `AnHien` int(11) NOT NULL,
  `idTL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`idLT`, `lang`, `Ten`, `ThuTu`, `AnHien`, `idTL`) VALUES
(1, 'vi', 'Thể thao', 1, 1, 1),
(3, 'vi', 'Du lịch', 2, 1, 1),
(4, 'vi', 'Khoa học', 4, 1, 1),
(9, 'vi', 'Xã hội', 3, 1, 1),
(10, 'vi', 'Văn hoá', 6, 1, 1),
(11, 'vi', 'Pháp luật', 9, 1, 1),
(12, 'vi', 'Sống đẹp', 1, 1, 3),
(24, 'vi', 'Mẹo vặt', 17, 1, 6),
(28, 'vi', 'Thủ thuật', 8, 1, 9),
(40, 'vi', 'Tools', 10, 1, 9),
(41, 'vi', 'Website hữu ích', 11, 1, 9),
(42, 'vi', 'Scripts hữu dụng', 12, 1, 9),
(77, 'vi', 'Chia sẻ', 15, 1, 3),
(78, 'vi', 'Giáo dục', 18, 1, 1),
(79, 'vi', 'Sức khoẻ', 7, 1, 6),
(82, 'vi', 'Tin tức web', 14, 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTL` int(11) NOT NULL,
  `lang` varchar(11) NOT NULL,
  `TenTL` varchar(255) NOT NULL,
  `ThuTu` int(11) NOT NULL,
  `AnHien` int(11) NOT NULL,
  `HienMenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idTL`, `lang`, `TenTL`, `ThuTu`, `AnHien`, `HienMenu`) VALUES
(1, 'vi', 'Tin xã hội', 1, 1, 1),
(2, 'vi', 'Việc làm', 4, 0, 1),
(3, 'vi', 'Nghệ thuật sống', 2, 1, 1),
(6, 'vi', 'Thường thức', 6, 1, 1),
(7, 'vi', 'Thư giãn', 5, 1, 0),
(9, 'vi', 'Thế giới web', 1, 1, 1),
(11, 'en', 'Travel', 1, 1, 1),
(12, 'en', 'Health', 5, 0, 1),
(15, 'en', 'Business', 2, 1, 1),
(18, 'en', 'LifeStyle & Living', 3, 1, 1),
(19, 'en', 'Entertainment', 4, 1, 1),
(20, 'vi', 'Thiên nhiên', 8, 1, 0),
(21, 'vi', 'Công nghệ', 3, 1, 1),
(22, 'vi', 'MỚI NHẬN', 0, 0, 0),
(23, 'vi', 'HOT', 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `idTin` int(11) NOT NULL,
  `lang` varchar(2) NOT NULL,
  `TieuDe` text NOT NULL,
  `TomTat` text NOT NULL,
  `urlHinh` varchar(255) NOT NULL,
  `Ngay` date NOT NULL,
  `idTL` int(11) NOT NULL,
  `idLT` int(11) NOT NULL,
  `SoLanXem` int(11) NOT NULL,
  `NoiBat` int(11) NOT NULL,
  `AnHien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`idTin`, `lang`, `TieuDe`, `TomTat`, `urlHinh`, `Ngay`, `idTL`, `idLT`, `SoLanXem`, `NoiBat`, `AnHien`) VALUES
(701, 'vi', 'Công nghệ AI mới nhất trong năm 2024', 'Những tiến bộ đột phá trong lĩnh vực trí tuệ nhân tạo đang thay đổi cách chúng ta sống và làm việc...', 'uploads/img701.jpg', '2024-03-15', 21, 82, 1500, 1, 1),
(702, 'en', 'Top 10 Travel Destinations for 2024', 'Discover the most breathtaking and unexplored places to visit this year...', 'uploads/img702.jpg', '2024-03-16', 11, 3, 2000, 1, 1),
(703, 'vi', 'Bí quyết sống khỏe mỗi ngày', 'Những thói quen đơn giản giúp bạn cải thiện sức khỏe và tinh thần...', 'uploads/img703.png', '2024-03-17', 12, 79, 800, 0, 1),
(705, 'en', 'The Future of Renewable Energy', 'How green technologies are reshaping the global energy landscape...', 'uploads/img705.jpg', '2024-03-19', 15, 82, 1800, 1, 1),
(706, 'vi', 'Top 5 món ăn đường phố Hà Nội', 'Khám phá những món ăn vặt ngon nhất của Thủ đô, từ phở cuốn đến bánh mì que...', 'uploads/img706.jpg', '2024-03-20', 6, 12, 3000, 1, 1),
(707, 'en', 'The Rise of E-sports in Southeast Asia', 'How competitive gaming is becoming a major industry in the region...', 'uploads/img707.webp', '2024-03-21', 19, 1, 2500, 1, 1),
(708, 'vi', 'Bí quyết chăm sóc cây cảnh trong nhà', 'Hướng dẫn chi tiết cách chăm sóc các loại cây cảnh phổ biến để không gian sống thêm xanh mát...', 'uploads/img708.jpg', '2024-03-22', 20, 24, 1800, 0, 1),
(709, 'vi', 'Xu hướng công nghệ blockchain trong năm 2024', 'Những ứng dụng mới nhất của công nghệ blockchain trong các lĩnh vực tài chính, y tế và giáo dục...', 'uploads/img709.webp', '2024-03-23', 21, 82, 2200, 1, 1),
(710, 'en', 'Sustainable Fashion: More Than Just a Trend', 'How the fashion industry is adapting to meet environmental challenges...', 'uploads/img710.jpg', '2024-03-24', 18, 40, 1900, 1, 1),
(711, 'vi', 'Những điểm du lịch mới nổi ở Việt Nam năm 2024', 'Khám phá các địa điểm du lịch độc đáo và ít người biết đến tại Việt Nam...', 'uploads/img711.jpg', '2024-03-25', 3, 3, 2800, 1, 1),
(712, 'vi', 'Cách tạo động lực học tập hiệu quả cho sinh viên', 'Những phương pháp giúp sinh viên duy trì động lực và cải thiện kết quả học tập...', 'uploads/img712.jpg', '2024-03-26', 78, 4, 1600, 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`idLT`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTL`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`idTin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `idLT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `idTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
