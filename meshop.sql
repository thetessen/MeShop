-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2019 at 02:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `anhdaidien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten`, `mota`, `anhdaidien`) VALUES
(1, 'Laptop Acer', 'Tổng hợp các dòng máy tính Acer mới nhất và hot nhất', 'https://phongvu.vn/media/catalog/product/storage/laptop/1808443/9a77d4c433985a879686af9f9cdfb273_acer%20swift%203%20sf315-52_1.jpg'),
(2, 'Laptop ASUS', 'Tổng hợp các dòng máy tính ASUS đẹp nhất', 'https://img.vnshop.vn/height/350/media/catalog_v2/media/80/70/1570246258.1820807_1566358636.5242183_Asus_Zenbook_UX333_RoyalBlue_NoNumpad_promo.jpg'),
(3, 'LapTop HP', 'Tổng hợp các loại laptop HP', 'https://img1.phongvu.vn/media/catalog/product/1/_/1_39_29.jpg'),
(4, 'LapTop Lenovo', 'Tổng hợp các dòng Lenovo mới', 'https://img1.phongvu.vn/media/catalog/product/l/e/lenovo_ideapad_330-15ikb_silver_1.jpg'),
(5, 'Laptop Macbook', 'Tổng hợp các dòng macbook đẹp và mới ', 'https://file.services.teko.vn/media/6/71/1565858549.8730547_Macbook_Air_13.3_2019_Gold_1.jpg'),
(6, 'Laptop MSI', 'Các loại máy MSI mới nhất', 'https://phongvu.vn/media/catalog_v2/media/79/84/1571026409.3623824_1567061107.1963878_MSI_GL65_1.jpg'),
(7, 'LapTop Razer ', 'Khi nói đến việc chơi game, Razer là một cái tên cao cấp nhất để đáp ứng tốt nhu cầu này.', 'https://phongvu.vn/cong-nghe/wp-content/uploads/2019/02/aHR0cHM6Ly93d3cubGFwdG9wbWFnLmNvbS9pbWFnZXMvdXBsb2Fkcy81MDIyL2cvcmF6ZXItc3RlYWx0aC1wcm8tMDA0LmpwZw.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(10) NOT NULL,
  `listidsanpham` varchar(255) NOT NULL,
  `listsoluongsanpham` varchar(500) NOT NULL,
  `tongtien` varchar(255) NOT NULL,
  `idthanhvien` int(10) NOT NULL,
  `ngaygiaohang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` tinyint(1) NOT NULL DEFAULT 0,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `listmausac` varchar(255) NOT NULL,
  `phuongthuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `listidsanpham`, `listsoluongsanpham`, `tongtien`, `idthanhvien`, `ngaygiaohang`, `tinhtrang`, `hoten`, `email`, `sodienthoai`, `diachi`, `listmausac`, `phuongthuc`) VALUES
(16, '4', '1', '15190', 8, '2019-10-30 17:00:00', 0, 'hoangcaophi', 'hoangcaophi11061999@gmail.com', '0386673844', '1319 Billings Dr', '\r\n                                            trắng', 0),
(17, '4', '1', '15190', 8, '2019-10-30 17:00:00', 0, 'hoangcaophi', 'hoangcaophi11061999@gmail.com', '0386673844', '1319 Billings Dr', '\r\n                                            trắng', 0),
(18, '8', '2', '35980', 8, '2019-10-30 17:00:00', 0, 'hoangcaophi', 'hoangcaophi11061999@gmail.com', '0386673844', '1319 Billings Dr', '\r\n                                            trắng', 0),
(19, '11', '1', '14790', 8, '2019-10-30 17:00:00', 0, 'hoangcaophi', 'hoangcaophi11061999@gmail.com', '0386673844', '1319 Billings Dr', '\r\n                                            đỏ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `anhdaidien` varchar(255) NOT NULL,
  `mausac` varchar(255) NOT NULL,
  `soluong` varchar(255) NOT NULL,
  `iddanhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten`, `gia`, `mota`, `anhdaidien`, `mausac`, `soluong`, `iddanhmuc`) VALUES
(1, 'Laptop ASUS TUF Gaming FX705DT', '22790', 'Tên sản phẩm: Máy tính xách tay/ Laptop Asus TUF Gaming FX705DT-AU017T (AMD Ryzen 7 3750H) (Xám)\r\n\r\n- CPU: AMD Ryzen 7 3750H ( 2.3 GHz - 4.0 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 17.3\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 8GB DDR4 2400MHz\r\n- Đồ họa: AMD Radeon Vega 10 Graphics / NVIDIA GeForce GTX 1650 4GB GDDR5\r\n- Lưu trữ: 512GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 64 Wh Pin liền , khối lượng: 2.7 kg', 'https://file.services.teko.vn/media/58/81/1566533548.4234364_Asus_TUF_Gaming_FX705DD-DT_3.jpg', 'đen|trắng|vàng', '10', 2),
(2, 'Laptop ASUS TUF Gaming FX505GD', '21490', 'Tên sản phẩm: Máy tính xách tay/ Laptop Asus TUF Gaming FX505GD-BQ012T (i5-8300H) (Xám)\r\n\r\n- CPU: Intel Core i5-8300H ( 2.3 GHz - 4.0 GHz / 8MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050 4GB GDDR5\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 3 cell 48 Wh Pin liền , khối lượng: 2.2 kg', 'https://file.services.teko.vn/media/76/84/1566531959.0086572_Asus_TUF_Gaming_FX505GD-GE_4.jpg', 'đỏ|đen|trắng', '8', 2),
(3, 'Laptop Acer Swift 3 SF314-56-3', '13590', 'Tên sản phẩm: Máy tính xách tay/ Laptop Acer Swift 3 SF314-56-38UE (NX.H4CSV.005) (i3-8145U) (Bạc)\r\n\r\n- CPU: Intel Core i3-8145U ( 2.1 GHz - 3.9 GHz / 4MB / 2 nhân, 4 luồng )\r\n- Màn hình: 14\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 4GB Onboard DDR4\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 45 Wh Pin liền , khối lượng: 1.5 kg\r\nPhụ kiện thu hút sự chú ý bởi những nét đẹp riêng biệt:\r\nThiết kế dạ quang độc đáo, hình ảnh sáng lên trong bóng tối cực kỳ nổi bật\r\n\r\nMặt lưng bằng kính cường lực chống trầy xước tốt và giữ cho mặt lưng sáng bóng rất đẹp\r\n\r\nPhần viền được làm từ chất liệu nhựa TPU mềm chống sốc, dễ dàng tháo lắp vào máy\r\n\r\nHoạ tiết trên ốp rất cá tính và phong cách', 'https://file.services.teko.vn/media/67/12/1565775128.4203656_Acer_Swift_3_SF314-41-54-56_SparklySilver_2.jpg', 'đen|đỏ', '50', 1),
(4, 'Laptop Acer Swift 3 SF315-52-5', '15190', 'Mô tả\r\n\r\nTên sản phẩm: Máy tính xách tay/ Laptop Acer Swift 3 SF315-52-52Z7 (NX.GZBSV.004) (Vàng)\r\n\r\n- CPU: Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 48 Wh Pin liền , khối lượng: 1.6 kg\r\n\r\n \r\nBảo vệ an toàn: ốp có độ đàn hồi cao, không bị biến dạng, bảo vệ toàn bộ lưng và viền máy khỏi va đập. Mặt trong tráng vân caro chống dính lưng và hấp hơi khi nóng máy. Ốp siêu mỏng nhưng vẫn đủ an toàn cho chiếc camera nhạy cảm của iphone không bị cọ xát với mặt phẳng.', 'https://phongvu.vn/media/catalog/product/storage/laptop/1808443/9a77d4c433985a879686af9f9cdfb273_acer%20swift%203%20sf315-52_1.jpg', 'trắng|đỏ|hồng', '5', 1),
(5, 'Laptop ASUS ZenBook 13 UX333FA', '21990', 'Tên sản phẩm: Máy tính xách tay/ Laptop Asus Zenbook UX333FA-A4011T (I5-8265U) (Xanh)\r\n\r\n- CPU: Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 13.3\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 8GB Onboard LPDDR3\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 3 cell 50 Wh Pin liền , khối lượng: 1.2 kg', 'https://file.services.teko.vn/media/77/15/1566358637.102205_Asus_Zenbook_UX333_RoyalBlue_NoNumpad_4.jpg', 'trong suốt|đen', '20', 2),
(6, 'Laptop ASUS VivoBook 14 A412FA', '11490', 'Tên sản phẩm: Máy tính xách tay/ Laptop Asus A412FA-EK156T (i3-8145U) (Xanh)\r\n\r\n- CPU: Intel Core i3-8145U ( 2.1 GHz - 3.9 GHz / 4MB / 2 nhân, 4 luồng )\r\n- Màn hình: 14\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 4GB Onboard DDR4\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 2 cell 37 Wh Pin liền , khối lượng: 1.5 kg', 'https://file.services.teko.vn/media/54/43/1565252558.0175033_Asus_X412_Peacock_Blue_1.jpg', 'đen', '10', 2),
(7, 'Laptop ASUS ROG Strix G G531GD', '2200', 'Tên sản phẩm: Máy tính xách tay/ Laptop Asus ROG Strix G531GD-AL025T (i5-9300H) (Đen)\r\n\r\n- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1050 4GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 48 Wh Pin liền, Khối lượng: 2.4 kg\r\n\r\nKính cường lực Samsung Note 5 hiệu Nillkin là sản phẩm chính hãng với độ cứng 9H chống lại mọi tác nhân cọ xát và va đập gây xước vỡ màn hình.\r\n\r\nkinh-cuong-luc-note-5-9h-8.jpg\r\n\r\n \r\n\r\nSản phẩm cao cấp nên không ảnh hưởng gì đến chất lượng hiển thị hay độ nhạy của cảm ứng, giữ màn hình luôn trong và nét.', 'https://file.services.teko.vn/media/60/40/1565331280.8979146_Asus_ROG_Strix_G531GD-GT_3.jpg', 'trắng|đen', '5', 2),
(8, 'Laptop Acer Aspire 7 A715-72G-', '17990', 'Tên sản phẩm: Máy tính xách tay/ Laptop Acer Aspire 7 A715-72G-50NA (NH.GXBSV.001) (Đen)\r\n\r\n- CPU: Intel Core i5-8300H ( 2.3 GHz - 4.0 GHz / 8MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050 4GB\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Linux\r\n- Pin: 4 cell 48 Wh Pin liền , khối lượng: 2.4 kg', 'https://phongvu.vn/media/catalog/product/storage/laptop/1807404/41014c3030332d180ea073e14f8d8771_acer%20aspire%207%20a7_1.jpg', 'trắng', '5', 1),
(10, 'Laptop Acer Nitro 5 AN515-54-5', '21990', 'Tên sản phẩm: Máy tính xách tay/ Laptop Acer Nitro 5 AN515-54-59SF (NH.Q5ASV.013) (i5-9300H)\r\n\r\n- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2400MHz (2 Khe cắm, Hỗ trợ tối đa 32GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1050 3GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell 55 Wh Pin liền, Khối lượng: 2.3 kg', 'https://file.services.teko.vn/media/48/35/1566624471.6804109_HP_14-ce2036TU_6YZ19PA_1.jpg', 'trắng|đen', '11', 1),
(11, 'Laptop HP Pavilion 14-ce2041TU', '14790', 'Tên sản phẩm: Máy tính xách tay/ Laptop HP Pavilion 14-ce2041TU (6ZT94PA) (Vàng)\r\n\r\n- CPU: Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 14\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2400MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 3 cell Pin liền , khối lượng: 1.6 kg', 'https://phongvu.vn/media/catalog/product/storage/laptop/19050511/96383cb76b3db3610f02bb072762f17d_hp%20pavilion%2014-ce2041tu%20(6zt94pa)_1.jpg', 'đỏ', '14', 3),
(12, 'Laptop HP ProBook 440 G6-5YM63', '12490', 'Mô tả\r\n\r\nTên sản phẩm: Máy tính xách tay/ Laptop HP ProBook 440 G6-5YM63PA (i3-8145U) (Bạc)\r\n\r\n- CPU: Intel Core i3-8145U ( 2.1 GHz - 3.9 GHz / 4MB / 2 nhân, 4 luồng )\r\n- Màn hình: 14\" IPS ( 1366 x 768 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 500GB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 3 cell 45 Wh Pin liền , khối lượng: 1.6 kg', 'https://phongvu.vn/media/catalog/product/storage/laptop/19030313/8b8fea358528fd0de22d56b89cd55452_hp%20probook%20440%20g6_1.jpg', 'trắng', '12', 3),
(13, 'Laptop HP ENVY X360 - 13-ar007', '22490', 'Tên sản phẩm: Máy tính xách tay/ Laptop HP Envy X360 13-ar0071au (6ZF30PA) (AMD Ryzen 5 3500U)\r\n\r\n- CPU: AMD Ryzen 5 3500U (2.1 GHz - 3.7 GHz/4MB/4 nhân, 8 luồng)\r\n- Màn hình: 13.3\" IPS (1920 x 1080), cảm ứng\r\n- RAM: 1 x 8GB Onboard DDR4 2400MHz , Không nâng cấp được)\r\n- Đồ họa: AMD Radeon Vega 8 Graphics\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 4 cell Pin liền, Khối lượng: 1.3 kg', 'https://phongvu.vn/media/catalog/product/storage/laptop/19050515/55cbf6f564d7e5bd789441e341223990_hp%20envy%20x360%2013-ar_1.jpg', 'trắng|đen', '10', 3),
(14, 'Laptop HP Pavilion 14', '12090', 'Tên sản phẩm: Máy tính xách tay/ Laptop HP 14-ce2036TU (6YZ19PA) (i3-8145U)\r\n\r\n- CPU: Intel Core i3-8145U (2.1 GHz - 3.9 GHz/4MB/2 nhân, 4 luồng)\r\n- Màn hình: 14\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2400MHz (1 Khe cắm, Hỗ trợ tối đa 16GB)\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 500GB HDD 5400RPM\r\n- Hệ điều hành: Windows 10 Home 64-bit\r\n- Pin: 3 cell 41 WhKhối lượng: 1.4 kg', 'https://file.services.teko.vn/media/48/35/1566624471.6804109_HP_14-ce2036TU_6YZ19PA_1.jpg', 'trắng|đen', '10', 3),
(15, 'Laptop Lenovo Ideapad 330-15KB', '7990', 'Tên sản phẩm: Máy tính xách tay/ Laptop Lenovo Ideapad 330-15IKB 81DE0278VN (i3-8130U) (Xám)\r\n\r\n- CPU: Intel Core i3-8130U ( 2.2 GHz - 3.4 GHz / 4MB / 2 nhân, 4 luồng )\r\n- Màn hình: 15.6\" ( 1366 x 768 ) , không cảm ứng\r\n- RAM: 1 x 4GB Onboard DDR4 2133MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 2 cell 30 Wh Pin liền , khối lượng: 2.2 kg', 'https://img1.phongvu.vn/media/catalog/product/l/e/lenovo_ideapad_330-15ikb_silver_1.jpg', 'trắng', '11', 4),
(16, 'Laptop Lenovo 330-15IKB (81DE0', '9990', 'Tên sản phẩm: Máy tính xách tay/ Laptop Lenovo Ideapad 330-15IKB 81DE01JSVN (i5-8250U) (Đen)\r\n\r\n- CPU: Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" ( 1366 x 768 ) , không cảm ứng\r\n- RAM: 1 x 4GB Onboard DDR4 2133MHz\r\n- Đồ họa: Intel UHD Graphics 620 / AMD Radeon R7 M530 2GB GDDR5\r\n- Lưu trữ: 500GB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 2 cell 30 Wh Pin liền , khối lượng: 1.9 kg', 'https://img1.phongvu.vn/media/catalog/product/1/_/1_45_29.jpg', 'trắng|đen', '11', 4),
(17, 'Laptop Lenovo Ideapad L340-15I', '20500', 'Tên sản phẩm: Máy tính xách tay/ Laptop Lenovo Ideapad L340-15IRH 81LK007JVN (I7-9750H) (Đen)\r\n\r\n- CPU: Intel Core i7 9750H ( 2.6 GHz - 4.5 GHz / 12MB / 6 nhân, 12 luồng )\r\n- Màn hình: 15.6\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050 3GB GDDR5\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 3 cell 45 Wh Pin liền , khối lượng: 2.2 kg', 'https://phongvu.vn/media/catalog/product/storage/laptop/19070178/3c6ff7da4869fdf8303c08be6883759d_lenovo%20ideapad%20l340-15irh_1.jpg', 'trắng|đen', '11', 4),
(18, 'Laptop Lenovo ThinkPad E490', '16490', 'ên sản phẩm: Máy tính xách tay/ Laptop Lenovo ThinkPad E490 - 20N8S0CJ00 (I5-8265U) (Đen)\r\n\r\n- CPU: Intel Core i5-8265U ( 1.6 GHz - 3.9 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 14\" IPS ( 1366 x 768 ) , không cảm ứng\r\n- RAM: 1 x 4GB DDR4 2400MHz\r\n- Đồ họa: Intel UHD Graphics 620\r\n- Lưu trữ: 1TB HDD 5400RPM\r\n- Hệ điều hành: Free DOS\r\n- Pin: 3 cell 45 Wh Pin rời , khối lượng: 1.8 kg', 'https://phongvu.vn/media/catalog/product/storage/laptop/19060223/fa1db0dde1f458dc882d5a213f0729c3_lenovo%20thinkpad%20e490_1.jpg', 'đen|đỏ', '11', 4),
(19, 'Laptop Apple MacBook Air 2019 ', '27890', 'Tên sản phẩm: Máy tính xách tay/ Laptop MacBook Air 2019 MVFM2\r\n\r\n- CPU: Intel Core i5 (1.6 GHz - 3.6 GHz/4MB/2 nhân, 4 luồng)\r\n- Màn hình: 13.3\" IPS (2560 x 1600), không cảm ứng\r\n- RAM: 1 x 8GB DDR3L 2133MHz\r\n- Đồ họa: Intel UHD Graphics 617\r\n- Lưu trữ: 128GB SSD M.2 NVMe /\r\n- Hệ điều hành: macOS\r\n- 50 Wh Pin liền, Khối lượng: 1.3 kg', 'https://file.services.teko.vn/media/6/71/1565858549.8730547_Macbook_Air_13.3_2019_Gold_1.jpg', 'trắng', '11', 5),
(20, 'Laptop MacBook Pro 2017 13.3', '33300', 'Mô tả\r\n\r\nTên sản phẩm: Máy tính xách tay/ Laptop MacBook Pro 2017 13.3\" MPXR2 (Bạc)\r\n\r\n- CPU: Core i5 ( 2.3 GHz\r\n- Màn hình: 13.3\" ( 2560 x 1600 ) , không cảm ứng\r\n- RAM: 8GB\r\n- Đồ họa: Intel Iris Plus Graphics 640\r\n- Lưu trữ: 128GB SSD\r\n- Hệ điều hành: macOS\r\n- Pin: Pin liền , khối lượng: 1.3 kg', 'https://img1.phongvu.vn/media/catalog/product/uploads/product/p_14474/2017/11/13/14474.png', 'trắng', '11', 5),
(21, 'Laptop Apple MacBook Air 2019 ', '35990', 'Tên sản phẩm: Máy tính xách tay/ Laptop MacBook Air 2019 MVFL2\r\n\r\n- CPU: Intel Core i5 (1.6 GHz - 3.6 GHz/4MB/2 nhân, 4 luồng)\r\n- Màn hình: 13.3\" IPS (2560 x 1600), không cảm ứng\r\n- RAM: 1 x 8GB DDR3L 2133MHz\r\n- Đồ họa: Intel UHD Graphics 617\r\n- Lưu trữ: 256GB SSD M.2 NVMe /\r\n- Hệ điều hành: macOS\r\n- 50 Wh Pin liền, Khối lượng: 1.3 kg', 'https://file.services.teko.vn/media/24/48/1565858658.6411748_Macbook_Air_13.3_2019_Silver_1.jpg', 'trắng|đen', '11', 5),
(22, 'Laptop Apple Macbook Pro 2018 ', '43990', 'Tên sản phẩm: Máy tính xách tay/ Laptop MacBook Pro 2018 13.3\" MR9U2 (Bạc)\r\n\r\n- CPU: Core i5 ( 2.3 GHz\r\n- Màn hình: 13.3\" ( 2560 x 1600 ) , không cảm ứng\r\n- RAM: 8GB\r\n- Đồ họa: Intel HD Graphics\r\n- Lưu trữ: 256GB SSD\r\n- Hệ điều hành: macOS\r\n- Pin: Pin liền , khối lượng: 1.4 kg', 'https://img1.phongvu.vn/media/catalog/product/1/_/1_54_1.jpg', 'trắng|đen', '11', 5),
(23, 'Laptop MSI GL65 9SDK-054VN', '29990', 'Tên sản phẩm: Máy tính xách tay/ Laptop MSI GL65 9SD-054VN (I5-9300H)\r\n\r\n- CPU: Intel Core i5 9300H (2.4 GHz - 4.1 GHz/8MB/4 nhân, 8 luồng)\r\n- Màn hình: 15.6\" IPS (1920 x 1080), không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz (2 Khe cắm, Hỗ trợ tối đa 64GB)\r\n- Đồ họa: Intel UHD Graphics 630/ NVIDIA GeForce GTX 1660Ti 6GB\r\n- Lưu trữ: 512GB SSD M.2 NVMe /\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 6 cell 51 Wh Pin liền, Khối lượng: 2.3 kg', 'https://file.services.teko.vn/media/47/25/1567061107.1963878_MSI_GL65_1.jpg', 'đen|đỏ', '13', 6),
(24, 'Laptop MSI Prestige PS42 Moder', '21960', 'Tên sản phẩm: Máy tính xách tay/ Laptop MSI PS42 8M-288VN (i5-8250U) (Bạc)\r\n\r\n- CPU: Intel Core i5-8250U ( 1.6 GHz - 3.4 GHz / 6MB / 4 nhân, 8 luồng )\r\n- Màn hình: 14\" ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 620 / Shared memory\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 50 Wh Pin liền , khối lượng: 1.2 kg', 'https://file.services.teko.vn/media/47/25/1567061107.1963878_MSI_GL65_1.jpg', 'trắng|đen', '13', 6),
(25, 'Laptop MSI GF63 Thin 9SC-071VN', '24990', 'Tên sản phẩm: Máy tính xách tay/ Laptop MSI GF63 9SC-071VN (i5-9300H) (Đen)\r\n\r\n- CPU: Intel Core i5 9300H ( 2.4 GHz - 4.1 GHz / 8MB / 4 nhân, 8 luồng )\r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 1 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1650 4GB GDDR5\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 3 cell 51 Wh Pin liền , khối lượng: 1.9 kg', 'https://file.services.teko.vn/media/21/37/1565941812.4872282_MSI_GF63_1.jpg', 'đen|đỏ', '15', 6),
(26, 'Laptop MSI GS65 Stealth Thin 8', '42990', 'Tên sản phẩm: Máy tính xách tay/ Laptop MSI GS65 8RE-242VN (i7-8750H)\r\n\r\n- CPU: Intel Core i7-8750H ( 2.2 GHz - 4.1 GHz / 9MB / 6 nhân, 12 luồng )\r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng\r\n- RAM: 2 x 8GB DDR4 2666MHz\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1060 6GB\r\n- Lưu trữ: 256GB SSD M.2 NVMe\r\n- Hệ điều hành: Windows 10 Home SL 64-bit\r\n- Pin: 4 cell 80 Wh Pin liền , khối lượng: 1.9 kg', 'https://img1.phongvu.vn/media/catalog/product/m/s/msi-gs65-8re-242vn-1.jpg', 'đen|đỏ', '5', 6);

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_thanhvien` int(10) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id_thanhvien`, `tendangnhap`, `matkhau`, `hoten`, `email`, `sodienthoai`, `diachi`, `level`) VALUES
(8, 'phi', '123456', 'hoangcaophi', 'hoangcaophi11061999@gmail.com', '0386673844', '1319 Billings Dr', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
