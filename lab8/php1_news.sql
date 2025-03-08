-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2024 lúc 06:24 AM
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
(9, 'vi', 'Thế giới Website', 1, 0, 1),
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
  `Content` text DEFAULT NULL,
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

INSERT INTO `tin` (`idTin`, `lang`, `TieuDe`, `TomTat`, `Content`, `urlHinh`, `Ngay`, `idTL`, `idLT`, `SoLanXem`, `NoiBat`, `AnHien`) VALUES
(701, 'vi', 'Công nghệ AI mới nhất trong năm 2024', 'Những tiến bộ đột phá trong lĩnh vực trí tuệ nhân tạo đang thay đổi cách chúng ta sống và làm việc...', 'Năm 2024 đánh dấu những bước tiến vượt bậc trong lĩnh vực trí tuệ nhân tạo (AI). Bài viết này đi sâu vào các công nghệ AI mới nhất đang định hình lại nhiều ngành công nghiệp. Chúng tôi thảo luận về sự phát triển của các mô hình ngôn ngữ lớn, khả năng tạo ra nội dung sáng tạo của AI, và ứng dụng của AI trong y tế, giáo dục, và sản xuất. Bài viết cũng đề cập đến những thách thức đạo đức và xã hội mà công nghệ AI mang lại, cũng như các nỗ lực quốc tế nhằm quản lý sự phát triển của AI một cách có trách nhiệm.', 'uploads/img701.jpg', '2024-03-15', 21, 82, 1502, 1, 1),
(702, 'en', 'Top 10 Travel Destinations for 2024', 'Discover the most breathtaking and unexplored places to visit this year...', 'As travel restrictions ease and the world adapts to a new normal, 2024 brings exciting opportunities for adventure seekers. This article unveils the top 10 must-visit destinations for the year, ranging from hidden gems to reimagined classics. We explore emerging eco-tourism hotspots, culturally rich cities undergoing renaissance, and remote natural wonders. Each destination is analyzed for its unique attractions, cultural significance, and sustainability efforts. The article also provides practical tips for responsible travel, local customs to be aware of, and the best times to visit each location.', 'uploads/img702.jpg', '2024-03-16', 11, 3, 2000, 1, 1),
(703, 'vi', 'Bí quyết sống khỏe mỗi ngày', 'Những thói quen đơn giản giúp bạn cải thiện sức khỏe và tinh thần...', 'Sống khỏe mỗi ngày không chỉ là về chế độ ăn uống và tập luyện, mà còn là về cách chúng ta quản lý stress và duy trì sự cân bằng trong cuộc sống. Bài viết này chia sẻ những thói quen đơn giản nhưng hiệu quả để cải thiện sức khỏe thể chất và tinh thần. Từ kỹ thuật thở đúng cách, chế độ ăn cân bằng, đến việc duy trì một lịch trình ngủ đều đặn, chúng tôi cung cấp những lời khuyên thiết thực có thể áp dụng ngay vào cuộc sống hàng ngày. Bài viết cũng thảo luận về tầm quan trọng của việc kết nối xã hội và tìm kiếm mục đích sống đối với sức khỏe tổng thể.', 'uploads/img703.png', '2024-03-17', 12, 79, 801, 0, 1),
(704, 'vi', 'Xu hướng thời trang mùa hè 2024', 'Khám phá những phong cách thời trang hot nhất cho mùa hè năm nay...', 'Mùa hè 2024 hứa hẹn mang đến những xu hướng thời trang mới mẻ và đa dạng. Bài viết này khám phá các phong cách hot nhất, từ trang phục bền vững đến sự trở lại của thời trang Y2K. Chúng tôi phân tích các xu hướng màu sắc, chất liệu, và kiểu dáng đang thống trị sàn diễn và đường phố. Bài viết cũng đề cập đến cách kết hợp các xu hướng này vào tủ quần áo hàng ngày, cũng như cách điều chỉnh chúng cho phù hợp với nhiều dáng người khác nhau. Cuối cùng, chúng tôi thảo luận về tác động của công nghệ và mạng xã hội đối với xu hướng thời trang mùa hè năm nay.', 'uploads/img704.jpg', '2024-03-18', 18, 40, 1200, 1, 1),
(705, 'en', 'The Future of Renewable Energy', 'How green technologies are reshaping the global energy landscape...', 'The global energy landscape is undergoing a radical transformation, with renewable energy at the forefront of this change. This article delves into the latest advancements in green technologies and their impact on the energy sector. We explore breakthroughs in solar, wind, and hydroelectric power, as well as emerging technologies like fusion energy and advanced energy storage solutions. The piece also discusses the economic implications of this shift, including job creation in the green sector and the challenges faced by traditional energy industries. Finally, we examine global policies and international cooperation efforts aimed at accelerating the transition to renewable energy sources.', 'uploads/img705.jpg', '2024-03-19', 21, 82, 1800, 1, 1),
(706, 'vi', 'Top 5 món ăn đường phố Hà Nội', 'Khám phá những món ăn vặt ngon nhất của Thủ đô, từ phở cuốn đến bánh mì que...', 'Hà Nội nổi tiếng với ẩm thực đường phố đa dạng và hấp dẫn. Bài viết này giới thiệu top 5 món ăn vặt không thể bỏ qua khi đến Thủ đô. Chúng tôi khám phá hương vị độc đáo của phở cuốn, sự giòn tan của bánh mì que, vị ngọt thanh của chè, và cảm giác mát lạnh từ kem dừa. Mỗi món ăn không chỉ thể hiện văn hóa ẩm thực phong phú của Hà Nội, mà còn mang đến những trải nghiệm khó quên cho thực khách. Bài viết cũng cung cấp thông tin về những địa chỉ uy tín, giá cả hợp lý, và lời khuyên khi thưởng thức ẩm thực đường phố tại Hà Nội.', 'uploads/img706.jpg', '2024-03-20', 6, 12, 3000, 1, 1),
(707, 'en', 'The Rise of E-sports in Southeast Asia', 'How competitive gaming is becoming a major industry in the region...', 'Cà phê sữa đá, một loại đồ uống quen thuộc của người Việt Nam, đã trở thành một biểu tượng văn hóa độc đáo. Bài viết này khám phá lịch sử và sự phát triển của cà phê sữa đá, từ những ngày đầu tiên khi cà phê được du nhập vào Việt Nam cho đến sự phổ biến toàn cầu hiện nay. Chúng tôi phân tích các yếu tố làm nên hương vị đặc trưng của cà phê sữa đá, từ cách chọn lựa hạt cà phê, quy trình rang xay, đến cách pha chế. Bài viết cũng đề cập đến những biến thể hiện đại của cà phê sữa đá, cũng như những quán cà phê nổi tiếng với món đồ uống này.', 'uploads/img707.webp', '2024-03-21', 19, 1, 2500, 1, 1),
(708, 'vi', 'Bí quyết chăm sóc cây cảnh trong nhà', 'Hướng dẫn chi tiết cách chăm sóc các loại cây cảnh phổ biến để không gian sống thêm xanh mát...', 'Sau một loạt các cuộc điều tra và phân tích, các nhà khoa học đã phát hiện ra rằng việc sử dụng điện thoại di động trong thời gian dài có thể gây ra nhiều vấn đề về sức khỏe, đặc biệt là đối với hệ thần kinh. Bài viết này trình bày các kết quả nghiên cứu mới nhất về tác động của sóng điện từ từ điện thoại di động lên não bộ và các cơ quan khác. Chúng tôi cũng thảo luận về những biện pháp phòng ngừa mà người dùng có thể áp dụng để giảm thiểu rủi ro, cũng như các chính sách đang được đề xuất để kiểm soát việc sử dụng điện thoại di động một cách an toàn.', 'uploads/img708.jpg', '2024-03-22', 20, 24, 1800, 0, 1),
(709, 'vi', 'Xu hướng công nghệ blockchain trong năm 2024', 'Những ứng dụng mới nhất của công nghệ blockchain trong các lĩnh vực tài chính, y tế và giáo dục...', 'Trên bờ biển cát trắng mịn màng của miền Trung Việt Nam, có một làng chài nhỏ nép mình giữa biển trời mênh mông. Bài viết này giới thiệu về cuộc sống hàng ngày của ngư dân tại làng chài này, từ việc ra khơi lúc bình minh đến cảnh trở về với những mẻ cá đầy. Chúng tôi khám phá những phong tục truyền thống, những câu chuyện truyền miệng qua nhiều thế hệ, và tình yêu đối với biển cả của người dân nơi đây. Bài viết cũng đề cập đến những thách thức mà ngư dân đang đối mặt, từ biến đổi khí hậu đến áp lực từ du lịch.', 'uploads/img709.webp', '2024-03-23', 21, 82, 2202, 1, 1),
(710, 'en', 'Sustainable Fashion: More Than Just a Trend', 'How the fashion industry is adapting to meet environmental challenges...', 'Những năm gần đây, nghệ thuật đường phố đang trở thành một phần không thể thiếu của văn hóa đô thị tại Việt Nam. Bài viết này khám phá sự phát triển của các loại hình nghệ thuật đường phố, từ graffiti đến các màn biểu diễn âm nhạc và nhảy hip-hop. Chúng tôi cũng thảo luận về tác động của nghệ thuật đường phố đối với cộng đồng, cách nó phản ánh các vấn đề xã hội, và vai trò của nó trong việc xây dựng bản sắc đô thị. Bài viết cũng giới thiệu một số nghệ sĩ đường phố nổi bật và các dự án nghệ thuật cộng đồng đang thu hút sự chú ý.', 'uploads/img710.jpg', '2024-03-24', 18, 40, 1900, 1, 1),
(711, 'vi', 'Những điểm du lịch mới nổi ở Việt Nam năm 2024', 'Khám phá các địa điểm du lịch độc đáo và ít người biết đến tại Việt Nam...', 'Tại những vùng núi cao phía Bắc Việt Nam, cây mắc ca đã trở thành một nguồn thu nhập quan trọng cho người dân địa phương. Bài viết này khám phá quá trình trồng trọt, chăm sóc và thu hoạch mắc ca, cũng như các thách thức và cơ hội mà ngành này mang lại. Chúng tôi cũng phân tích tiềm năng xuất khẩu của mắc ca Việt Nam, so sánh với các thị trường lớn khác trên thế giới. Bài viết không quên nhấn mạnh vai trò của mắc ca trong việc cải thiện đời sống người dân, bảo vệ môi trường, và phát triển kinh tế bền vững.', 'uploads/img711.jpg', '2024-03-25', 3, 3, 2803, 1, 1),
(712, 'vi', 'Cách tạo động lực học tập hiệu quả cho sinh viên', 'Những phương pháp giúp sinh viên duy trì động lực và cải thiện kết quả học tập...', 'Với sự bùng nổ của các dịch vụ phát trực tuyến, ngành công nghiệp phim ảnh đang trải qua một cuộc cách mạng. Bài viết này phân tích cách mà các nền tảng như Netflix, Disney+, và các dịch vụ khác đang thay đổi cách chúng ta xem phim. Chúng tôi cũng thảo luận về tác động của phát trực tuyến đối với ngành sản xuất phim truyền thống, từ việc giảm số lượng khán giả tại rạp chiếu phim đến sự thay đổi trong cách tạo ra và phân phối nội dung. Bài viết cũng đưa ra những dự đoán về tương lai của ngành công nghiệp phim ảnh trong thời đại số.', 'uploads/img712.jpg', '2024-03-26', 78, 4, 1615, 0, 1),
(713, 'en', 'The Future of Work: Remote vs. Hybrid Models', 'Analyzing the pros and cons of different work models in the post-pandemic era...', 'Công nghệ blockchain đang dần thâm nhập vào nhiều lĩnh vực khác nhau ngoài tài chính, từ y tế đến quản lý chuỗi cung ứng. Bài viết này khám phá các ứng dụng mới của blockchain trong việc tăng cường tính minh bạch, bảo mật và hiệu quả cho các ngành công nghiệp. Chúng tôi cũng phân tích những thách thức mà công nghệ này phải đối mặt, từ vấn đề pháp lý đến sự chấp nhận của người dùng. Bài viết còn thảo luận về tiềm năng của blockchain trong việc thay đổi cách chúng ta lưu trữ và chia sẻ dữ liệu, đồng thời giới thiệu một số dự án blockchain đáng chú ý trên thế giới.', 'uploads/img713.jpg', '2024-03-27', 21, 82, 2100, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phai` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiep` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sothich` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL COMMENT 'ngày đăng ký',
  `idgroup` tinyint(1) NOT NULL COMMENT 'Quy ước: 0 là thành viên 1 là admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `username`, `pass`, `email`, `phai`, `nghenghiep`, `sothich`, `mota`, `ngay`, `idgroup`) VALUES
(5, 'truongadmin', '12345', 'lnntruong2003@gmail.com', '1', '1', 'Ngủ', 'không', '2024-08-20', 1),
(6, 'ak49', '12345', 'lnntruong@gmail.com', '1', '2', 'Nghe nhạc', 'không biết viết gì', '2024-08-20', 0),
(7, 'aka11', '12345', 'berper2003@gmail.com', '1', '2', 'Chơi game', 'không biết gì', '2024-08-20', 0),
(8, 'm416', '1', '1@gmail.com', '1', '1', 'Nghe nhạc', 'gg', '2024-08-20', 0);

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
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

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
  MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `idTin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=714;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
