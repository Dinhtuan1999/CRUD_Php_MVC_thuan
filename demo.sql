-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20210604.cbe13a75e8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2021 at 08:10 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categories`
--

CREATE TABLE `Categories` (
  `id_category` int NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Categories`
--

INSERT INTO `Categories` (`id_category`, `category`) VALUES
(1, 'Android'),
(2, 'SamSung'),
(3, 'Samsung Galaxy'),
(4, 'Apple'),
(5, 'Iphone X'),
(6, 'Iphone XS Max'),
(7, 'Xiaomi'),
(8, 'Xiaomi Redmi Note 8 '),
(9, 'Xiaomi Redmi Note 10 ');

-- --------------------------------------------------------

--
-- Table structure for table `Colors`
--

CREATE TABLE `Colors` (
  `id_color` int NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Colors`
--

INSERT INTO `Colors` (`id_color`, `color`) VALUES
(1, 'Red'),
(2, 'Blue'),
(3, 'Black'),
(4, 'White'),
(5, 'Yellow'),
(6, 'Green'),
(7, 'Pink'),
(8, 'Violet');

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `color_id` int NOT NULL,
  `category_id` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `price`, `color_id`, `category_id`, `image`, `content`) VALUES
(2, 'iPhone 12 Pro Max 128GB ', 29490000, 5, 5, '465883758.jpeg', 'iPhone 12 Pro Max – một trong những lựa chọn đẳng cấp nhất dành cho khách hàng thích trải nghiệm mạnh mẽ, màn hình lớn và có mức giá cao nhất trong 4 chiếc iPhone ra mắt năm nay. Cùng Viettel Store đánh giá xem liệu sản phẩm này có điểm gì nổi bật nhé.'),
(3, 'Điện thoại iPhone SE 128GB (2020) ', 12490000, 6, 2, 'iphone-se-2020-101120-0843280-780x433.jpg', 'iPhone SE 2020 khi được cho ra mắt đã làm thỏa mãn triệu tín đồ Táo khuyết. Máy sở hữu thiết kế siêu nhỏ gọn như iPhone 8, chip A13 Bionic cho hiệu năng khủng như iPhone 11, nhưng iPhone SE 2020 lại có một mức giá tốt đến bất ngờ.'),
(4, 'ĐIỆN THOẠI SAMSUNG GALAXY NOTE 10 PLUS - 256GB - NEW 100% - 2 SIM', 14590000, 3, 5, 'note-10-plus_1612756353.jpg', 'Phiên bản: New 100% Fullbox\r\nBảo hành Giá niêm yết ở trên đã bao gồm tất cả quà khuyến mãi đi kèm và chế độ bảo hành 12 Tháng chính hãng Samsung\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(5, 'ĐIỆN THOẠI APPLE IPHONE XR - 64GB - NEW FULLBOX 100%', 10900000, 3, 5, 'iphone-xr_1612691367.jpg', 'Phiên bản: New 100% Fullbox\r\nBảo hành Bảo hành 12 Tháng tại ONEWAY – Đổi Mới trong 3 tháng đầu tiên với Lỗi phần cứng không sửa được.\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm\r\n'),
(6, 'MÁY TÍNH BẢNG APPLE IPAD PRO 12.9 INCH 2020 - 4G - 256GB - NEW 100%', 30090000, 8, 3, 'apple-ipad-2020-11inch-_1612344386.png', 'Phiên bản: New 100% Fullbox\r\nBảo hành 12 Tháng tại ONEWAY – Đổi Mới trong 3 tháng đầu tiên với Lỗi phần cứng không sửa được.\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(7, 'ĐIỆN THOẠI SAMSUNG GALAXY NOTE 9 - 128GB - NEW 99% - 2 SIM', 6390000, 5, 8, 'samsung-note-9_1572767504.jpg', 'Phiên bản: Like new 99%\r\nBảo hành Bảo hành 12 tháng mặc định, 1 đổi 1 trong 30 ngày đầu tiên\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm\r\n'),
(8, 'ĐIỆN THOẠI SAMSUNG GALAXY Z FOLD 2 5G - NEW SEAL 100%', 39790000, 8, 7, 'samsung-galaxy-z-fold-2-vang-dong-200x200_1622705880.jpg', 'Phiên bản: New 100% Fullbox\r\nBảo hành Giá niêm yết ở trên đã bao gồm tất cả quà khuyến mãi đi kèm và chế độ bảo hành 12 Tháng chính hãng.\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(9, 'MÁY TÍNH BẢNG APPLE IPAD AIR 4 2020 - WIFI - 256GB - NEW 100%', 17290000, 4, 2, 'apple-ipad-air-4-wifi_1612530247.png', 'Phiên bản: New 100% Fullbox\r\nBảo hành 12 Tháng tại ONEWAY – Đổi Mới trong 3 tháng đầu tiên với Lỗi phần cứng không sửa được.\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(10, 'MÁY TÍNH BẢNG APPLE IPAD PRO 12.9 INCH 2018 - 4G - 256GB - NEW 99%', 19990000, 5, 7, 'ipad-pro-11-2018_2_1605343542.jpg', 'Phiên bản: Like new 99%\r\nBảo hành 12 tháng mặc định, 1 đổi 1 trong 30 ngày đầu tiên\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(11, 'MÁY TÍNH BẢNG APPLE IPAD 2020 - WIFI - 128GB - NEW 100%', 10790000, 3, 7, 'ipad-gen-8-2020-onewaymobilevn_1602255145.png', 'Phiên bản: New 100% Fullbox\r\nBảo hành Bảo hành 12 Tháng tại ONEWAY – Đổi Mới trong 3 tháng đầu tiên với Lỗi phần cứng không sửa được.\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm\r\n'),
(12, 'ĐIỆN THOẠI SAMSUNG GALAXY S10 PLUS - 128GB - NEW 100% - 2 SIM', 10139000, 1, 6, 's10_1612772965.jpg', 'Phiên bản: New 100% Fullbox\r\nBảo hành Giá niêm yết ở trên đã bao gồm tất cả quà khuyến mãi đi kèm và chế độ bảo hành 12 Tháng chính hãng Samsung\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(13, 'MÁY TÍNH BẢNG APPLE IPAD MINI 3 - 4G - 64GB - NEW 99%', 5290000, 4, 8, 'apple-ipad-mini-3-oneway-_1612594596.jpg', 'Phiên bản: Like new 99%\r\nBảo hành Bảo hành 12 tháng mặc định, 1 đổi 1 trong 30 ngày đầu tiên\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm\r\n'),
(14, 'ĐIỆN THOẠI SAMSUNG GALAXY S9 - 64GB - NEW 99% - 1 SIM', 3790000, 6, 9, 'samsung-s9_1572755564.jpg', 'Phiên bản: Like new 99%\r\nBảo hành Bảo hành 12 tháng mặc định, 1 đổi 1 trong 30 ngày đầu tiên\r\nPhần mềm: Hỗ trợ trọn đời sản phẩm'),
(35, 'iphone 12 pro max', 23213213, 2, 7, 'iphone.jpeg', 'wqeqwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `Colors`
--
ALTER TABLE `Colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Colors`
--
ALTER TABLE `Colors`
  MODIFY `id_color` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `Products_ibfk_1` FOREIGN KEY (`color_id`) REFERENCES `Colors` (`id_color`),
  ADD CONSTRAINT `Products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `Categories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
