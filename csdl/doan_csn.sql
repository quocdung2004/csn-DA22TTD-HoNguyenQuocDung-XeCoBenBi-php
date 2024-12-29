-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2024 lúc 03:53 PM
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
-- Cơ sở dữ liệu: `doan_csn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `category_id`, `brand_name`) VALUES
(11, 12, 'Toyota Vios'),
(12, 19, 'Kia Morning'),
(18, 19, 'Kia Seltos'),
(19, 19, 'Kia Sorento'),
(20, 19, 'Kia Cerato (K3)'),
(21, 12, 'Toyota Corolla Cross'),
(22, 12, 'Toyota Fortuner'),
(23, 12, 'Toyota Camry'),
(24, 11, 'Mitsubishi Outlander'),
(25, 11, 'Mitsubishi Pajero Sport'),
(26, 11, 'Mitsubishi Triton'),
(27, 22, 'Huyndai Accent'),
(28, 11, 'Mitsubishi Xpander'),
(29, 22, 'Huyndai Creta'),
(30, 22, 'Huyndai Tucson'),
(31, 22, 'Huyndai Grand i10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(11, 'Mitsubishi'),
(12, 'Toyota'),
(19, 'Kia'),
(22, 'Huyndai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datlich`
--

CREATE TABLE `tbl_datlich` (
  `datlich_id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `biensoxe` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ngaybd` date NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_datlich`
--

INSERT INTO `tbl_datlich` (`datlich_id`, `hoten`, `sdt`, `biensoxe`, `category_id`, `brand_id`, `product_id`, `ngaybd`, `product_price`) VALUES
(14, 'Hồ Nguyễn Quốc Dũng', '0336766665', '84-A07856', 11, 28, 70, '2024-12-29', 150000),
(21, 'Hồ Nguyễn Quốc Dũng', '0336766665', '84-A07856', 22, 27, 56, '2025-01-05', 700000),
(22, 'Hồ Nguyễn Quốc Dũng', '0336766665', '84-A07856', 19, 12, 57, '2025-01-05', 400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `lienhe_id` int(11) NOT NULL,
  `tenlh` varchar(255) NOT NULL,
  `emaillh` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`lienhe_id`, `tenlh`, `emaillh`, `noidung`) VALUES
(4, 'Hồ Nguyễn Quốc Dũng', 'jungdung2004@gmail.com', 'Tôi có thể thanh toán tất cả chi phí sau khi bảo dưỡng không?\r\n'),
(5, 'Nguyễn Văn A', 'vana@gmail.com', 'Tôi có thể mua riêng vật tư bảo dưỡng của dịch vụ thay lọc gió cho mẫu xe Mitsubishi Outlander không?'),
(6, 'dũng', 'jungdung2004@gmail.com', 'Tôi có thể bảo dưỡng tại những trạm bảo dưỡng nào?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_time` int(255) NOT NULL,
  `product_vatTu` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_imgad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `brand_id`, `product_price`, `product_time`, `product_vatTu`, `product_img`, `product_imgad`) VALUES
(45, 'Thay dầu máy', 11, 26, '900000', 40, 'Dầu SAE 10W-30', 'uploads/triton.jfif', 'uploads/triton.jfif'),
(46, 'Thay dầu máy', 11, 24, '900000', 35, 'Dầu SAE 5W-30', 'uploads/outlander.jfif', 'uploads/outlander.jfif'),
(47, 'Thay dầu máy', 11, 25, '1500000', 40, 'Dầu SAE 10W-40', 'uploads/sport.jfif', 'uploads/sport.jfif'),
(49, 'Thay dầu máy', 12, 23, '1100000', 30, 'Dầu 5W30', 'uploads/camry.jfif', 'uploads/camry.jfif'),
(50, 'Thay dầu máy (Máy xăng)', 12, 22, '1000000', 25, '5W30', 'uploads/fortuner.jfif', 'uploads/fortuner.jfif'),
(51, 'Thay dầu máy', 12, 21, '1300000', 30, '00W20', 'uploads/corollaCross.jfif', 'uploads/corollaCross.jfif'),
(52, 'Thay dầu máy', 12, 11, '700000', 20, '5W30', 'uploads/vios.jfif', 'uploads/vios.jfif'),
(53, 'Thay dầu máy', 22, 31, '350000', 30, 'Dầu SAE 15W40 API SN', 'uploads/i10.jfif', 'uploads/i10.jfif'),
(54, 'Thay dầu máy', 22, 30, '790000', 30, 'Dầu ACEA A5 5W30', 'uploads/tucson.jfif', 'uploads/tucson.jfif'),
(55, 'Thay dầu máy', 22, 29, '700000', 30, 'Dầu ACEA A5 5W30', 'uploads/creta.jfif', 'uploads/creta.jfif'),
(56, 'Thay dầu máy', 22, 27, '700000', 30, 'SAE 5W30 API SN', 'uploads/accent.jfif', 'uploads/accent.jfif'),
(57, 'Thay dầu máy', 19, 12, '400000', 40, 'Dầu 5W-30', 'uploads/kiaMorning.jfif', 'uploads/kiaMorning.jfif'),
(58, 'Thay dầu máy', 19, 20, '700000', 45, 'Dầu Wolver ULTRATEC 5W-30', 'uploads/kiaCerato.jfif', 'uploads/kiaCerato.jfif'),
(59, 'Thay dầu máy', 19, 19, '1500000', 60, 'Dầu 5W-30 API SN', 'uploads/kiaSorento.jfif', 'uploads/kiaSorento.jfif'),
(60, 'Thay dầu máy', 19, 18, '900000', 50, 'Dầu 5W-30', 'uploads/kiaSeltos.jfif', 'uploads/kiaSeltos.jfif'),
(61, 'Thay lọc gió', 19, 12, '50000', 20, 'Lọc gió OEM', 'uploads/kiaMorning.jfif', 'uploads/kiaMorning.jfif'),
(62, 'Thay lọc gió', 19, 20, '80000', 20, 'Lọc gió OEM', 'uploads/kiaCerato.jfif', 'uploads/kiaCerato.jfif'),
(63, 'Thay lọc gió', 12, 11, '120000', 20, 'Denso', 'uploads/vios.jfif', 'uploads/vios.jfif'),
(64, 'Thay lọc gió', 12, 21, '100000', 20, 'Lọc gió Denso', 'uploads/corollaCross.jfif', 'uploads/corollaCross.jfif'),
(65, 'Thay lọc gió', 12, 22, '100000', 20, 'Lọc gió Denso', 'uploads/fortuner.jfif', 'uploads/fortuner.jfif'),
(66, 'Thay lọc gió', 12, 23, '100000', 20, 'Lọc gió Denso', 'uploads/camry.jfif', 'uploads/camry.jfif'),
(67, 'Thay lọc gió', 11, 24, '150000', 20, 'Lọc gió Mitsubishi', 'uploads/outlander.jfif', 'uploads/outlander.jfif'),
(68, 'Thay lọc gió', 11, 25, '150000', 20, 'Lọc gió Mitsubishi', 'uploads/sport.jfif', 'uploads/sport.jfif'),
(69, 'Thay lọc gió', 11, 26, '150000', 20, 'Lọc gió Mitsubishi', 'uploads/triton.jfif', 'uploads/triton.jfif'),
(70, 'Thay lọc gió', 11, 28, '150000', 20, 'Lọc gió Mitsubishi', 'uploads/xpander.jfif', 'uploads/xpander.jfif'),
(71, 'Thay lọc gió', 19, 19, '150000', 20, 'Lọc gió chính hãng Kia', 'uploads/kiaSorento.jfif', 'uploads/kiaSorento.jfif'),
(73, 'Thay lọc gió', 19, 18, '150000', 20, 'Lọc gió chính hãng Kia', 'uploads/kiaSeltos.jfif', 'uploads/kiaSeltos.jfif'),
(74, 'Thay lọc gió', 22, 31, '50000', 15, 'Lọc gió OEM', 'uploads/i10.jfif', 'uploads/i10.jfif'),
(76, 'Thay lọc gió', 22, 30, '100000', 20, 'Lọc gió Huyndai OEM', 'uploads/tucson.jfif', 'uploads/tucson.jfif'),
(78, 'Thay lọc gió', 22, 29, '100000', 20, 'PTCH Huyndai', 'uploads/creta.jfif', 'uploads/creta.jfif'),
(83, 'Thay lọc gió', 22, 27, '100000', 20, 'Lọc gió OEM', 'uploads/accent.jfif', 'uploads/accent.jfif'),
(86, 'Thay dầu máy', 11, 28, '700000', 30, 'Dầu SAE 0W-20', 'uploads/xpander.jfif', 'uploads/xpander.jfif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `ten`, `email`, `user_name`, `matkhau`) VALUES
(23, 'Dũng tập tạ', 'jungdung2004@gmail.com', 'quocdung', '1235789Qd6321@'),
(24, 'hahha', 'hahaha222hohoho@gmail.com', 'hahaha', '2222222222');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`),
  ADD KEY `category_id_3` (`category_id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_datlich`
--
ALTER TABLE `tbl_datlich`
  ADD PRIMARY KEY (`datlich_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`lienhe_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`,`brand_id`),
  ADD KEY `tbl_product_ibfk_2` (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_datlich`
--
ALTER TABLE `tbl_datlich`
  MODIFY `datlich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `lienhe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD CONSTRAINT `tbl_brand_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`);

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
