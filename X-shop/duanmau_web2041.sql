-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 03:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau_web2041`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `ND_ID` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `NoiDung` longtext NOT NULL,
  `NgayBL` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBL`, `ND_ID`, `MaSP`, `NoiDung`, `NgayBL`) VALUES
(27, 60, 42, 'ABC', '2024-07-31 08:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `ID_HD` int(11) NOT NULL,
  `MaHD` varchar(50) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ID_HD`, `MaHD`, `MaSP`, `SoLuong`, `DonGia`) VALUES
(48, 'X-SHOP - 56 - 278 - 05082024', 61, 48, 18990000),
(49, 'X-SHOP - 56 - 754 - 05082024', 39, 4, 17490000),
(49, 'X-SHOP - 56 - 754 - 05082024', 41, 3, 28990000),
(50, 'X-SHOP - 56 - 379 - 05082024', 69, 45, 17790000),
(50, 'X-SHOP - 56 - 379 - 05082024', 70, 78, 28990000),
(50, 'X-SHOP - 56 - 379 - 05082024', 76, 27, 1290000),
(50, 'X-SHOP - 56 - 379 - 05082024', 77, 67, 1290000),
(51, 'X-SHOP - 56 - 846 - 05082024', 70, 1, 28990000),
(51, 'X-SHOP - 56 - 846 - 05082024', 71, 2, 21650000),
(51, 'X-SHOP - 56 - 846 - 05082024', 74, 31, 6390000),
(51, 'X-SHOP - 56 - 846 - 05082024', 75, 15, 10490000),
(51, 'X-SHOP - 56 - 846 - 05082024', 76, 25, 1290000),
(51, 'X-SHOP - 56 - 846 - 05082024', 77, 10, 1290000),
(52, 'X-SHOP - 56 - 212 - 05082024', 76, 13, 1290000),
(53, 'X-SHOP - 56 - 616 - 05082024', 38, 1, 15990000),
(53, 'X-SHOP - 56 - 616 - 05082024', 45, 13, 27990000),
(54, 'X-SHOP - 56 - 21 - 05082024', 38, 1, 15990000),
(54, 'X-SHOP - 56 - 21 - 05082024', 41, 1, 28990000),
(55, 'X-SHOP - 56 - 664 - 05082024', 38, 1, 15990000),
(56, 'X-SHOP - 56 - 265 - 05082024', 51, 1, 23990000),
(56, 'X-SHOP - 56 - 265 - 05082024', 61, 1, 18990000),
(56, 'X-SHOP - 56 - 265 - 05082024', 68, 1, 3499000),
(56, 'X-SHOP - 56 - 265 - 05082024', 74, 3, 6390000),
(57, 'X-SHOP - 56 - 372 - 05082024', 44, 2, 19990000),
(57, 'X-SHOP - 56 - 372 - 05082024', 57, 3, 28490000),
(57, 'X-SHOP - 56 - 372 - 05082024', 64, 4, 28000000),
(58, 'X-SHOP - 56 - 80 - 05082024', 55, 3, 17990000),
(59, 'X-SHOP - 56 - 939 - 05082024', 38, 1, 15990000),
(60, 'X-SHOP - 56 - 482 - 05082024', 39, 1, 17490000),
(61, 'X-SHOP - 56 - 166 - 05082024', 41, 1, 28990000),
(62, 'X-SHOP - 56 - 658 - 05082024', 45, 1, 27990000),
(63, 'X-SHOP - 56 - 448 - 05082024', 43, 1, 21990000),
(64, 'X-SHOP - 56 - 337 - 05082024', 56, 1, 34990000),
(65, 'X-SHOP - 56 - 439 - 05082024', 52, 1, 14990000),
(66, 'X-SHOP - 56 - 650 - 05082024', 68, 1, 3499000),
(67, 'X-SHOP - 56 - 406 - 05082024', 72, 1, 18850000),
(68, 'X-SHOP - 56 - 170 - 05082024', 73, 1, 21990000),
(69, 'X-SHOP - 56 - 467 - 05082024', 61, 1, 18990000),
(70, 'X-SHOP - 56 - 570 - 05082024', 66, 1, 15990000),
(71, 'X-SHOP - 56 - 826 - 05082024', 41, 1, 28990000),
(71, 'X-SHOP - 56 - 826 - 05082024', 43, 1, 21990000),
(71, 'X-SHOP - 56 - 826 - 05082024', 74, 1, 6390000);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(5, 'Laptop'),
(6, 'Điện thoại'),
(7, 'Đồng hồ');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `ID_DH` int(11) NOT NULL,
  `MaHD` varchar(50) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NguoiNhan` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `GhiChu` text NOT NULL,
  `PhuongThucTT` varchar(1) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TrangThai` varchar(1) NOT NULL,
  `NgayTaoDon` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`ID_DH`, `MaHD`, `MaND`, `NguoiNhan`, `Email`, `SDT`, `DiaChi`, `GhiChu`, `PhuongThucTT`, `TongTien`, `TrangThai`, `NgayTaoDon`) VALUES
(48, 'X-SHOP - 60 - 278 - 31072024', 60, 'Nguyễn Duy', 'khacduy584@gmail.com', '0932105214', 'ákhdashf', 'Vui lòng nhập ghi chú', 'b', 911520000, 'b', '2024-07-31'),
(49, 'X-SHOP - 56 - 754 - 01082024', 56, 'Nguyễn ádasd', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 156930000, 'd', '2024-08-01'),
(50, 'X-SHOP - 56 - 379 - 01082024', 56, 'Nguyễn ádasd', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 2147483647, 'd', '2024-08-01'),
(51, 'X-SHOP - 56 - 846 - 02082024', 56, 'Nguyễn ádasd', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 472880000, 'e', '2024-06-09'),
(52, 'X-SHOP - 56 - 212 - 02082024', 56, 'Nguyễn ádasd', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'c', 16770000, 'b', '2024-08-02'),
(53, 'X-SHOP - 61 - 616 - 03082024', 61, 'Nguyễn Duy', 'khduyg@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 379860000, 'b', '2024-08-03'),
(54, 'X-SHOP - 56 - 21 - 03082024', 56, 'Nguyễn ádasd', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'c', 44980000, 'b', '2024-08-03'),
(55, 'X-SHOP - 56 - 664 - 03082024', 56, 'Nguyễn ádasd', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'a', 15990000, 'a', '2024-08-03'),
(56, 'X-SHOP - 62 - 265 - 03082024', 62, 'Nguyễn Khắc Duy', 'khduy571@gmail.com', '097692231312', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 65649000, 'b', '2024-08-04'),
(57, 'X-SHOP - 63 - 372 - 05082024', 63, 'Lê Yến', 'leyen@gmail.com', '0659451213', '154sdj', 'Vui lòng nhập ghi chú', 'a', 237450000, 'a', '2024-08-05'),
(58, 'X-SHOP - 56 - 80 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'a', 53970000, 'a', '2024-08-05'),
(59, 'X-SHOP - 56 - 939 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 15990000, 'b', '2024-08-05'),
(60, 'X-SHOP - 56 - 482 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 17490000, 'b', '2024-08-05'),
(61, 'X-SHOP - 56 - 166 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 28990000, 'b', '2024-08-05'),
(62, 'X-SHOP - 56 - 658 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 27990000, 'b', '2024-08-05'),
(63, 'X-SHOP - 56 - 448 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 21990000, 'b', '2024-08-05'),
(64, 'X-SHOP - 56 - 337 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 34990000, 'b', '2024-08-05'),
(65, 'X-SHOP - 56 - 439 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 14990000, 'b', '2024-08-05'),
(66, 'X-SHOP - 56 - 650 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 3499000, 'b', '2024-08-05'),
(67, 'X-SHOP - 56 - 406 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 18850000, 'b', '2024-08-05'),
(68, 'X-SHOP - 56 - 170 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 21990000, 'b', '2024-08-05'),
(69, 'X-SHOP - 56 - 467 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 18990000, 'b', '2024-08-05'),
(70, 'X-SHOP - 56 - 570 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'c', 15990000, 'b', '2024-08-05'),
(71, 'X-SHOP - 56 - 826 - 05082024', 56, 'Nguyễn Duy', 'demo12@gmail.com', '0932105214', 'ddddd', 'Vui lòng nhập ghi chú', 'b', 57370000, 'b', '2024-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(50) NOT NULL,
  `HinhAnh` varchar(200) NOT NULL,
  `MoTa` longtext NOT NULL,
  `DM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `MoTa`, `DM_ID`) VALUES
(12, 'DELL', 'Dell.png', 'Máy tính xách tay', 5),
(13, 'ASUS', 'ASUS logo grey.png', 'Máy tính xách tay Asus', 5),
(14, 'MSI', 'MSI.png', 'Máy tính xách tay MSI', 5),
(15, 'HP', 'HP.png', 'Máy tính xách tay HP', 5),
(16, 'Lenovo', 'lenovo-2-logo.png', 'Máy tính xách tay Lenovo', 5),
(17, 'Acer', 'acer-logo-acer-icon-transparent-free-png.webp', 'Máy tính xách tay Acer', 5),
(18, 'Apple', 'Apple_Inc.-Logo.wine.png', 'Điện thoại hảng Apple', 6),
(19, 'Sumsung', 'samsung-logo-samsung-icon-transparent-free-png.png', 'Điện thoại hảng Samsung', 6),
(20, 'Xiaomi', 'logo-xiaomi-3.png', 'Điện thoại hảng Xiaomi', 6),
(21, 'Vivo', 'vivo-logo-vector.png', 'Điện thoại hảng Vivo', 6),
(22, 'Oppo', 'Oppo-Logo.wine.png', 'Điện thoại hảng Oppo', 6),
(23, 'Realme', 'caec2ddfc4c22d0978bf4f6030294cb0.png', 'Điện thoại hảng Realme', 6),
(24, 'Lenovo', 'lenovo-2-logo.png', 'Điện thoại hảng Lenovo', 6),
(25, 'Đồng hồ thông minh', 'slider2.png', 'Đồng hồ thông minh', 7),
(26, 'Đồng hồ cơ', 'PNGKhothietke.net-02295.png', 'Đồng hồ cơ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) NOT NULL,
  `Ten` varchar(20) NOT NULL,
  `GioiTinh` bit(1) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Hinh` varchar(200) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `TaiKhoan` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `Quyen_ID` int(11) NOT NULL,
  `TrangThai` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `Hinh`, `DiaChi`, `TaiKhoan`, `MatKhau`, `Quyen_ID`, `TrangThai`) VALUES
(56, 'Nguyễn', 'Duy', b'1', '0932105214', 'demo12@gmail.com', '0bcbc2d104e0a6befff1198.jpg', 'ddddd', 'admin02', '25d55ad283aa400af464c76d713c07ad', 1, b'1'),
(60, 'Nguyễn', 'Duy', b'1', '0932105214', 'khacduy584@gmail.com', '0bcbc2d104e0a6befff1198.jpg', 'ákhdashf', 'demoa123', 'b87df89ccff7f928016ab4b210a472b7', 2, b'1'),
(61, 'Nguyễn', 'Duy', b'0', '', 'khduyg@gmail.com', 'fe0e971f-0934-47f0-aab3-4897c8164d56.jpg', '', 'demo', '550e1bafe077ff0b0b67f4e32f29d751', 3, b'1'),
(62, 'Nguyễn Khắc', 'Duy', b'1', '0932105214', 'khduy571@gmail.com', '05c66dd776e7d4b98df671.jpg', 'ádadas', 'nguyenduy584', '25d55ad283aa400af464c76d713c07ad', 3, b'1'),
(63, 'Lê', 'Yến', b'1', '0659451213', 'leyen@gmail.com', 'ai-site-helping-with-software-production.jpg', '154sdj', 'leyen', '25d55ad283aa400af464c76d713c07ad', 3, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`) VALUES
(1, 'Quản trị'),
(2, 'Nhân viên'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `LSP_ID` int(11) NOT NULL,
  `DMID` int(11) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `HinhAnh1` varchar(200) NOT NULL,
  `HinhAnh2` varchar(200) DEFAULT NULL,
  `HinhAnh3` varchar(200) DEFAULT NULL,
  `ThongTin` longtext NOT NULL,
  `GiamGia` float DEFAULT NULL,
  `DacBiet` bit(1) NOT NULL,
  `LuotXem` int(11) NOT NULL DEFAULT 0,
  `ThoiGian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `LSP_ID`, `DMID`, `TenSP`, `DonGia`, `HinhAnh1`, `HinhAnh2`, `HinhAnh3`, `ThongTin`, `GiamGia`, `DacBiet`, `LuotXem`, `ThoiGian`) VALUES
(38, 12, 5, 'Dell Inspiron 3520 71027003 RAM 16GB (Intel Core i5-1235U, RAM 16GB, SSD 512GB, Intel UHD Graphics, Màn Hình 15.6 inch FHD, Windows 11 Home Office, Màu Đen)', 15990000, '33519-2.jpg', '33519-t---i-xu---ng--5-.png', '33519-t---i-xu---ng--3-.png', 'Laptop Dell Inspiron 15 3520 71027003 sở hữu kích thước cực tối ưu cho việc di chuyển với ba chiều lần lượt là 18.0 mm – 19.9 mm, 363.96 mm, 249 mm cùng khối lượng 1.85 kg. Nhờ đó, bạn có thể dễ dàng mang theo máy mỗi ngày khi đi làm, đi gặp gỡ khách hàng hay đối tác mà không cảm thấy nặng nề, cồng kềnh.', 0, b'0', 9, '2024-07-23'),
(39, 12, 5, 'Dell Latitude 3440 16GB (L3440-I51235U) (Intel Core I5 1235U, Ram 16GB, SSD 512GB, Intel UHD Graphics, Màn Hình 14.1inch FHD, Windows 11 Home)', 17490000, '33620-5.jpg', '33620-t---i-xu---ng.png', '33620-t---i-xu---ng--1-.png', 'Laptop Dell Latitude 3440 I5 (L3440-I51235U-8G512G) là một thiết bị lý tưởng cho những ai đang tìm kiếm một chiếc laptop mạnh mẽ và đáng tin cậy cho công việc hàng ngày. Với bộ vi xử lý Intel Core i5, màn hình FHD chất lượng và nhiều tính năng tiện ích, sản phẩm này mang lại hiệu suất tuyệt vời cùng trải nghiệm sử dụng mượt mà.', 0, b'0', 21, '2024-07-23'),
(40, 12, 5, 'Dell Inspiron 14 7430 2in1 T7430-i7U165W11SLU (Core i7-1355U, Ram 16GB, SSD 512GB, Màn Hình 14 Inch FHD+ TouchScreen, Windows 11, Office HS 21, Kèm Bút Cảm Ứng)', 27190000, '29965-laptop-dell-inspiron-14-7430-philong.png', '29965-laptop-dell-inspiron-14-7430-philong3.png', '29965-laptop-dell-inspiron-14-7430-philong4.png', 'CPU: Intel Core i7-1355UMàn hình: 14\" WVA (1920 x 1200)\r\nRAM: 16GB Onboard DDR5 4800MHz\r\nĐồ họa: Onboard Intel Iris Xe Graphics\r\nLưu trữ: 512GB SSD M.2 NVMe\r\nHệ điều hành: Windows 11 Home SL + Office Home & Student 2021', 0, b'0', 1, '2024-07-23'),
(41, 12, 5, 'DELL INSPIRON 5430 (71015633) (i7-1360P, Ram 16G, SSD1TB, màn hình 14-2.5K, đồ họa RTX2050-4GB, Windows 11 + 0ffice bản quyền, màu bạc, chính hãng)', 28990000, '31081-philong91.jpg', '31081-philong93.jpg', '31081-philong97.jpg', 'CPU: Intel Core i7-1360P (12 nhân (4P-core + 8E-core),16 luồng), up to 5.0Ghz\r\nRam: 16GB LPDDR5 4800MHz (2x8GB), không nâng cấp\r\nLưu trữ: 1TB SSD M.2 PCIe NVMe\r\nMàn hình: 14 inch (2.5K (2560x1600), WVA, 20Hz, 300nits, chống chói)\r\nĐồ họa: NVIDIA GeForce RTX 2050 4GB GDDR6\r\nWindows 11 Home SL 64+Office Home & Student 2021', 0.2, b'0', 3, '2024-07-23'),
(42, 12, 5, 'Dell Vostro 15 3520 5M2TT2 (Intel Core I5-1235U, RAM 8GB, SSD 512GB, Màn Hình 15.6 inch FHD, Windows 11)', 14590000, '32166-laptop-dell-vostro-15-3520-5m2tt2-phi-long-1.png', '32166-laptop-dell-vostro-15-3520-5m2tt2-phi-long-3 (1).png', '32166-laptop-dell-vostro-15-3520-5m2tt2-phi-long-6.png', 'Laptop Dell Vostro 15 3520 5M2TT2 tuy sở hữu mức giá rẻ nhưng cũng được hãng chú trọng thiết kế đánh sâu vào độ bền với chất liệu cao cấp. Phần bản lề cứng cáp, chắc chắn, khi đóng mở máy cho cảm giác rất chắc tay không hề ọp ẹp. Không chỉ đẹp về hình thức, độ bền bỉ của máy cũng được đánh giá cao khi có khả năng chống chịu các tác động của ngoại lực tốt, hạn chế hỏng hóc linh kiện khi bị va đập nên bạn có thể yên tâm sử dụng trong nhiều năm.', 0, b'0', 2, '2024-07-23'),
(43, 12, 5, 'Dell Latitude 3440(L3440-i51335U-16512GW) (Intel Core i5-1335U, RAM 16GB, SSD 512GB, Intel UHD Graphics, Màn Hình 14 inch FHD, Windows 11, Màu Đen)', 21990000, '33623-laptop-dell-latitude-3440-l3440-i51335u-16512gw-philong1.png', '33623-laptop-dell-latitude-3440-l3440-i51335u-16512gw-philong4.png', '33623-laptop-dell-latitude-3440-l3440-i51335u-16512gw-philong2.png', 'Laptop Dell Latitude 3440(L3440-i51335U-16512GW) không chỉ đem lại sự mạnh mẽ với hiệu suất đỉnh cao, mà còn mang đến trải nghiệm sử dụng tuyệt vời cho mọi nhu cầu công việc và giải trí của bạn. Với thiết kế chắc chắn và bền bỉ, Laptop Dell Latitude 3440(L3440-i51335U-16512GW) là sự lựa chọn lý tưởng cho những người dùng luôn di chuyển. Bàn phím tiêu chuẩn và webcam HD giúp tăng cường trải nghiệm làm việc và giao tiếp trực tuyến.', 0, b'0', 4, '2024-07-23'),
(44, 12, 5, 'Dell Latitude 3440 (L3440-i51335U-08512GW) (Intel Core i5-1335U, RAM 8GB, SSD 512GB, Intel UHD Graphics, Màn Hình 14 inch FHD, Windows 11, Màu Đen)', 19990000, '33621-laptop-dell-latitude-l3440-i51335u-08512gw-philong1.png', '33621-laptop-dell-latitude-l3440-i51335u-08512gw-philong3.png', '33621-laptop-dell-latitude-l3440-i51335u-08512gw-philong6.png', 'Laptop Dell Latitude 3440 (L3440-i51335U-08512GW) không chỉ đem lại sự mạnh mẽ với hiệu suất đỉnh cao, mà còn mang đến trải nghiệm sử dụng tuyệt vời cho mọi nhu cầu công việc và giải trí của bạn. Với thiết kế chắc chắn và bền bỉ, Laptop Dell Latitude 3440 (L3440-i51335U-08512GW) là sự lựa chọn lý tưởng cho những người dùng luôn di chuyển. Bàn phím tiêu chuẩn và webcam HD giúp tăng cường trải nghiệm làm việc và giao tiếp trực tuyến.', 0, b'0', 0, '2024-07-23'),
(45, 12, 5, 'Dell Inspiron 14 5440 71034770 (Intel Core 7 150U, RAM 16GB, SSD 1TB, MX570A, Màn Hình 14 inch 2.2K, Windows 11 + Office, Màu Xanh)', 27990000, '33209-laptop-dell-inspiron-14-5440-philong--6-.png', '33209-laptop-dell-inspiron-14-5440-philong--5-.png', '33209-laptop-dell-inspiron-14-5440-philong--7-.png', 'CPU: Intel Core 7-150U (10 Core (2xP-core + 8xE-core), 12 Thread)\r\nRAM: 16GB DDR5 5200MHz (2x8GB) (Max 64GB)\r\nỔ cứng: 1TB M.2 PCIe NVMe SSD(1 khe)\r\nCard màn hình: Nvidia GeForce MX570A 2GB GDDR6\r\nMàn hình: 14 inch độ phân giải 2.2K (2240 x 1400 ), tấm nền WVA\r\nOS: Windows 11 Home SL + Office Home & Student 2021 bản quyền', 0, b'1', 2, '2024-07-23'),
(46, 12, 5, 'Dell Inspiron 5430 N5430-I5P165W11SL2050 (Intel Core i5-1340P, RAM 16GB, SSD 512GB, RTX 2050 4GB GDDR6, Màn Hình 14 inch 2.5K, Windows 11, Màu Bạc)', 26990000, '31081-philong91.jpg', '31081-philong93.jpg', '31081-philong97.jpg', 'Laptop Dell Inspiron 14 5430 N5430-i5P165W11SL2050 mang vẻ bề ngoài thanh lịch, sang trọng cùng thiết kế mỏng, nhẹ với hiệu năng vượt trội từ bộ vi xử lý Intel Core thế hệ 13th kết hợp cùng card đồ họa GeForce, mang đến khả năng di động vượt trội hơn bao giờ hết. Màn hình trang bị độ phân giải FHD+ tỷ lệ 16:10 cho bạn trải nghiệm nội dung với hình ảnh rộng vượt trội hơn.', 0, b'0', 0, '2024-07-23'),
(47, 12, 5, 'Dell Inspiron 15 3520 i5U085W11BLU 16GB (Core i5-1235U, RAM 16GB, SSD 512GB, VGA Intel Iris Xe, Màn Hình 15.6 inch FHD, Windows 11, Office Bản Quyền, Màu Đen)', 15790000, '33519-t---i-xu---ng--5-.png', '33519-t---i-xu---ng--3-.png', '33623-laptop-dell-latitude-3440-l3440-i51335u-16512gw-philong2.png', 'Laptop Dell Inspiron 15 3520 i5U085W11BLU nặng chỉ 1.9 kg. Nhờ đó, bạn có thể dễ dàng mang theo máy mỗi ngày khi đi làm, đi gặp gỡ khách hàng/đối tác mà không cảm thấy nặng nề, cồng kềnh.\r\n\r\n \r\n\r\nChúng ta lại bắt gặp thiết kế tối giản của nhà Dell và những nét đặc trưng của dòng Inspiron. Không cầu kì hoa mỹ, chiếc máy này chinh phục người dùng bởi sự đơn giản, trẻ trung, hiện đại.', 0, b'0', 0, '2024-07-23'),
(48, 12, 5, 'Dell Inspiron 15 3520 i5U085W11BLU 16GB (Core i5-1235U, RAM 16GB, SSD 512GB, VGA Intel Iris Xe, Màn Hình 15.6 inch FHD, Windows 11, Office Bản Quyền, Màu Đen)', 15790000, '33519-t---i-xu---ng--5-.png', '33519-t---i-xu---ng--3-.png', '33623-laptop-dell-latitude-3440-l3440-i51335u-16512gw-philong2.png', 'Laptop Dell Inspiron 15 3520 i5U085W11BLU nặng chỉ 1.9 kg. Nhờ đó, bạn có thể dễ dàng mang theo máy mỗi ngày khi đi làm, đi gặp gỡ khách hàng/đối tác mà không cảm thấy nặng nề, cồng kềnh.\r\n\r\n \r\n\r\nChúng ta lại bắt gặp thiết kế tối giản của nhà Dell và những nét đặc trưng của dòng Inspiron. Không cầu kì hoa mỹ, chiếc máy này chinh phục người dùng bởi sự đơn giản, trẻ trung, hiện đại.', 0, b'0', 0, '2024-07-23'),
(49, 12, 5, 'Dell Inspiron 15 3520 i5U085W11BLU 16GB (Core i5-1235U, RAM 16GB, SSD 512GB, VGA Intel Iris Xe, Màn Hình 15.6 inch FHD, Windows 11, Office Bản Quyền, Màu Đen)', 15790000, '33519-t---i-xu---ng--5-.png', '33519-t---i-xu---ng--3-.png', '33623-laptop-dell-latitude-3440-l3440-i51335u-16512gw-philong2.png', 'Laptop Dell Inspiron 15 3520 i5U085W11BLU nặng chỉ 1.9 kg. Nhờ đó, bạn có thể dễ dàng mang theo máy mỗi ngày khi đi làm, đi gặp gỡ khách hàng/đối tác mà không cảm thấy nặng nề, cồng kềnh.\r\n\r\n \r\n\r\nChúng ta lại bắt gặp thiết kế tối giản của nhà Dell và những nét đặc trưng của dòng Inspiron. Không cầu kì hoa mỹ, chiếc máy này chinh phục người dùng bởi sự đơn giản, trẻ trung, hiện đại.', 0, b'0', 0, '2024-07-23'),
(50, 14, 5, 'MSI GAMING SWORD 16 HX B14VEKG-039VN (Core I7-14700HX, 16GB RAM, 1TB SSD, RTX4050 6GB, Màn Hình 16.0inch FHD+ 144HZ, Windows 11, 2024)', 33990000, '32556-b14vekg-039vn.jpg', '32556-msi_b14vekg-039vn_philong1.png', '32556-msi_b14vekg-039vn_philong3-4.png', 'Laptop Gaming MSI Sword 16 HX B14VEKG 039VN là một chiếc laptop gaming mang tính đột phá với cấu hình mạnh mẽ và trọng lượng cực tối ưu để hướng tới cả game thủ và những người làm đồ họa chuyên nghiệp. Với sự kết hợp của những linh kiện mạnh mẽ nhất cùng phong cách thiết kế hiện đại thời trang. ', 0, b'0', 9, '2024-07-23'),
(51, 14, 5, 'MSI THIN A15 B7VE 023VN (AMD R5-7535HS, RAM 16GB DDR5, SSD 512GB, VGA RTX 4050 6GB, Màn Hình 15.6inch FHD 144Hz, Windows 11)', 23990000, '32587-laptop-msi-thin-a15-b7ve-023vn.jpg', '32587-laptop-msi-thin-a15-b7ve-023vn-philong2.png', '32587-laptop-msi-thin-a15-b7ve-023vn-philong4.png', 'Laptop MSI Thin A15 B7VE 023VN được trang bị vi xử lý CPU AMD Ryzen 5 - 7535HS (6 Cores, 12 Threads) kết hợp VGA NVIDIA GeForce RTX 4050 6GB GDDR6, mang lại hiệu năng cao đồng thời tiết kiệm điện, tối ưu cho cả công việc đa nhiệm và các tác vụ văn phòng, cũng như trải nghiệm giải trí game tuyệt vời. Công nghệ Max-Q cũng được tích hợp để tối ưu hiệu năng cho các tác vụ thích hợp, giúp máy ít toả nhiệt hơn và giảm độ ồn quạt, đạt hiệu suất tổng thể cao nhất.', 0, b'0', 0, '2024-07-23'),
(52, 14, 5, 'MSI Modern 14 C13M 610VN (Intel Core i5-1335U, RAM 8GB, SSD 512GB, VGA Intel Iris Xe, Màn Hình 14 inch FHD, Windows 11, Beige Rose)', 14990000, '32536-msi_modern_14_c13m_610vn.png', '32536-msi_modern_14_c13m_610vn_1.png', '32536-msi_modern_14_c13m_610vn_4.png', 'MSI Modern 14 C13M 610VN xử lý mọi tác vụ được yêu cầu nhờ vào con chip Intel Core i5-1335U Gen 13. Xung nhịp tối đa 4.6GHz xử lý nhanh gọn mọi yêu cầu. Đồng hành cùng với CPU là chiếc card đồ họa tích hợp Intel Iris Xe Graphics. Không quá mạnh mẽ như những chiếc card đồ họa rời trên những con MSI Gaming nhưng cũng đủ để mang lại trải nghiệm tuyệt vời trên một chiếc laptop phổ thông.', 0, b'0', 1, '2024-07-23'),
(53, 12, 5, 'MSI Modern 15 B12MO 625VN (Intel Core I5-1235U, RAM 8GB, SSD 512GB, Intel Iris Xe Graphics, Màn Hình 15.6inch FHD, Windows 11 Home, Black)', 11990000, '33564-laptop-msi-modern-15-b12mo-625vn-philong1.png', '120-33564-laptop-msi-modern-15-b12mo-625vn-philong4.png', '120-33564-laptop-msi-modern-15-b12mo-625vn-philong5.png', 'MSI Modern 15 B12MO 625VN không chỉ đẹp mắt bên ngoài, mà còn mạnh mẽ và hiệu quả bên trong với vi xử lý CPU Intel i5-1235U Gen 12th (10 Cores, 12 Threads). Kết hợp với RAM 8GB LPDDR4 Onboard, chiếc laptop này đã đạt tới một đỉnh cao mới về hiệu năng. Việc xử lí đa nhiệm trở nên mượt mà và nhanh chóng, giúp bạn tiết kiệm thời gian và năng lượng cho những công việc quan trọng.', 0, b'0', 2, '2024-07-23'),
(54, 12, 5, 'Gaming MSI Stealth 14 AI Studio A1VFG-085VN (20th Edition) (Intel Ultra 7 155H, RAM 32GB DDR5, SSD 1TB, RTX 4060 8GB, Màn Hình 14 inch OLED 2.8K 120Hz, Windows 11 Home)', 49990000, '250-32678-msi-stealth-16-ai-studio-a1vgg-089vn.png', '33489-laptop-gaming-msi-stealth-14-ai-studio-a1vfg-085vn-20th-edition-philong3.png', '33489-laptop-gaming-msi-stealth-14-ai-studio-a1vfg-085vn-20th-edition-philong1.png', 'MSI Stealth 14 AI Studio A1VFG-085VN 20th Edition không chỉ là một chiếc laptop gaming thông thường, mà còn là một biểu tượng của sự kết hợp hoàn hảo giữa hiệu năng vượt trội và thiết kế tinh tế. Với những cải tiến đáng kể về cả phần cứng và phần mềm, chiếc laptop này hứa hẹn sẽ mang đến trải nghiệm chơi game đỉnh cao và làm việc hiệu quả cho người dùng.', 0.2, b'0', 0, '2024-07-23'),
(55, 13, 5, 'Asus Vivobook 14 OLED A1405VA-KM095W (Core i5-13500H, RAM 16GB, SSD 512GB, Màn Hình 14.0inch 2.8K OLED, VGA Iris Xe Graphics, Windows 11, Màu Bạc)', 17990000, '30133-laptop-asus-vivobook-14-oled-a1405va-km095w-.jpg', '30133-philong-laptop-asus-vivobook-14x-1.png', '30133-philong-laptop-asus-vivobook-14x-6.png', 'Laptop Asus Vivobook 14 OLED A1405VA-KM095W có sự nổi bật nhất là màn hình OLED, chuẩn điện ảnh, đem lại trải nghiệm về thị giác cực kỳ tốt. Bên cạnh đó, chiếc laptop Asus Vivobook này thiết kế theo dạng bản lề xoay 180 độ, để điều chỉnh phù hợp với tầm nhìn của người dùng.\r\nASUS Vivobook 14X OLED A1405VA KM095W mang lại trải nghiệm hình ảnh tốt hơn với trang bị màn hình OLED. Thiết kế mỏng nhẹ cùng cấu hình mạnh mẽ cho phép người dùng nâng cao hiệu suất khi làm việc.', 0, b'1', 7, '2024-07-23'),
(56, 13, 5, 'ASUS Vivobook S 15 OLED S5507QA-MA089WS (Snapdragon X Elite X1E-78-100, Adreno, RAM 32GB DDR5X, SSD 1TB, Màn Hình 15.6inch OLED 3K 120Hz 100% DCI-P3, Windows 11, )', 34990000, '33626-s5507qa-ma089ws-pl7.png', '33626-s5507qa-ma089ws-pl6.png', '33626-s5507qa-ma089ws-pl4.png', 'Chip Snapdragon X Elite X1E là trái tim của Asus Vivobook S OLED, mang lại hiệu suất vượt trội với khả năng xử lý AI tân tiến. Với 12 nhân xử lý, chip này không chỉ tối ưu hóa các tác vụ hàng ngày mà còn đảm bảo trải nghiệm chơi game và làm việc mượt mà.\r\n\r\nASUS Vivobook S 15 thế hệ Windows Copilot+ PC mới đầu tiên, ứng dụng các công cụ Windows AI mới nhất. Được hỗ trợ bởi Snapdragon  X Elite với NPU Qualcomm  Hexagon™ tích hợp, máy có NPU hiệu suất 45 TOPs nổi bật để xử lý AI nhanh chóng. Các tùy chọn lưu trữ bao gồm ổ SSD PCIe  4.0 cực nhanh lên tới 1 TB, 32 GB RAM LPDDR5X 8448 MHz. Các cải tiến được hỗ trợ bởi AI thế hệ tiếp theo bao gồm Windows Studio Effects và camera ASUS AiSense IR. ', 0, b'0', 0, '2024-07-23'),
(57, 13, 5, 'Gaming ASUS TUF F15 FX507VU-LP198W (Intel Core I7-13620H, RAM 8GB, SSD 512GB, VGA RTX 4050 6GB, Màn Hình 15.6inch FHD, Windows 11, Màu Xám)', 28490000, '32117-asus_tuf_gaming_f15_fx507v.png', '32117-asus_tuf_gaming_f15_fx507v_4.png', '32117-asus_tuf_gaming_f15_fx507v_5.png', 'Laptop Gaming Asus TUF F15 FX507VU-LP198W mang đến một trải nghiệm chơi game hoàn toàn mới, với sự kết hợp hoàn hảo giữa phần cứng ấn tượng và thiết kế gọn nhẹ nhưng vô cùng mạnh mẽ. Được trang bị bộ vi xử lý Intel Core i7 13620H 6 nhân 12 luồng, RAM 8GB DDR5 (có thể nâng cấp lên 32GB), VGA RTX 4050, và màn hình IPS 144Hz với bàn phím có đèn nền RGB, chiếc laptop này là sự lựa chọn hoàn hảo cho game thủ đòi hỏi hiệu năng và trải nghiệm chơi game mượt mà.', 0, b'0', 2, '2024-07-23'),
(58, 13, 5, 'Asus ROG Strix G16 G614JU-N3135W (Intel Core i5-13450HX, Ram 8GB, SSD 512GB, RTX 4050 6GB, màn hình 16 inch FHD+ , Win 11 bản quyền, màu xám)', 30190000, '29675-philong4.jpg', '29675-philong5.jpg', '29675-philong6.jpg', 'Intel Core i5-13450HX (10 nhân/16 luồng, upto 4.60 GHz, 20MB)\r\nRAM 8GB DDR5-4800 SO-DIMM (2 khe, tối đa 32GB)\r\nSSD 512GB PCIe 4.0 NVMe M.2 SSD\r\nMàn hình 16 inch FHD+ (1920x1200), 165Hz, 7ms IPS, 250nits\r\nVGA NVIDIA GeForce RTX 4050 6GB GDDR6\r\nWindows 11 home SL 64-bit', 0, b'0', 7, '2024-07-23'),
(59, 13, 5, 'Asus Vivobook S 14 OLED S5406MA-PP136W (Intel Core Ultra 5 125H, RAM 16GB, SSD 1TB, Vga Intel Arc Graphics, Màn Hình 14.0inch 3K OLED, Windows 11, Màu Xanh)', 25990000, '250-33626-s5507qa-ma089ws-pl1.jpg', '250-33524-laptop-asus-vivobook-s-14-oled-s5406ma-pp219ws-philong1.png', '250-31265-asus-lz192w-philong1.png', 'Laptop Asus Vivobook S14 OLED S5406MA-PP136W mỏng nhẹ với kích thước màn hình Lumina OLED 14inch tích hợp bộ xử lý Intel Core Ultra hỗ trợ AI thế hệ mới được thiết kế cho phong cách làm việc di động và hiệu suất cao.', 0, b'0', 0, '2024-07-23'),
(60, 15, 5, 'Gaming HP Victus 16-s0077AX 8C5N6PA (AMD R7-7840HS, RAM 16GB, SSD 512GB, VGA RTX 3050 6GB, Màn Hình 16.1inch FHD 144Hz, Windows 11)', 24990000, '32830-laptop-gaming-hp-victus-16-s0077ax-8c5n6pa.jpg', '32830-victus_philong.png', '32830-14374_hp_victus_16_s0077ax__3.jpg', 'Là một chiếc laptop gaming hiện đại thì điểm đáng chú ý nhất của dòng Victus là hiệu năng, với bộ vi xử lý AMD Ryzen 7 7840HS mạnh mẽ kết hợp cùng card NVIDIA GeForce RTX 3050 6 GB đảm bảo tốc độ xử lý đa tác vụ từ cơ bản như soạn thảo, duyệt web đến nâng cao như chiến các tựa game AAA, xử lý các tác vụ đồ họa thiết kế 2D, 3D, render video nhanh chóng và hiệu quả.', 0, b'0', 0, '2024-07-23'),
(61, 15, 5, 'HP Pavilion 15-eg3093TU (8C5L4PA) (Core i5-1335U, Ram 16GB. SSD 512GB, màn hình 15.6 inch FHD, Windows 11 bản quyền, màu vàng, chính hãng)', 18990000, '30729-laptop-hp-pavilion-15-eg3093tu--8c5l4pa-.jpg', '30729-philong2.jpg', '30729-philong4.jpg', 'Hãng laptop HP được khách hàng lựa chọn là sản phẩm đồng hành trong công việc cũng như học tập vì độ bền đã được khẳng định theo năm tháng. Thiết kế tinh xảo, hiệu năng mạnh mẽ, giá thành hợp lí là những gì mà chiếc laptop HP này đem đến cho khách hàng. Mời bạn cùng Phi Long tìm hiểu về chiếc laptop HP Pavilion thế hệ 13 mới nhất này nhé.\r\n\r\n', 0, b'0', 13, '2024-07-23'),
(62, 15, 5, 'HP Pavilion 15-EG3112TU 8U6L9PA (Intel Core i7-1355U, RAM 16GB, SSD 512GB, VGA Intel Iris Xe, Màn Hình 15.6 inch FHD, Windows 11 Bản Quyền, Màu Bạc)', 22790000, '31819-8.jpg', '31819-laptop_hp_15s_fq5163tu_7c135pa_phi-long--2-.png', '31819-laptop_hp_15s_fq5163tu_7c135pa_phi-long--4-.png', 'Laptop HP Pavilion 15-eg3112TU 8U6L9PA với CPU Intel thế hệ 13, đáng kinh ngạc trong hiệu suất cùng với card đồ hoạ Intel Iris Xe và các tính năng tân tiến khác hứa hẹn mang đến trải nghiệm sử dụng chuyên nghiệp, hoàn thành tốt cả công việc văn phòng và đồ họa, đồng thời thiet kế nhỏ gọn phù hợp với mọi không gian.', 0, b'1', 3, '2024-07-23'),
(63, 16, 5, 'Lenovo V15 G4 IRU 83A100FYVN 16GB (Intel Core i5-13420H, RAM 16GB, SSD 512GB, Intel UHD Graphics, Màn Hình 15.6inch FullHD, Windows 11 Home)', 13990000, '33498-laptop-lenovo-v15-g4-iru-83a100fyvn-16gb.jpg', '33498-laptop-lenovo-v15-g4-iru-83a100fyvn-16gb-philong8.png', '33498-laptop-lenovo-v15-g4-iru-83a100fyvn-16gb-philong6.png', 'CPU: Intel Core i5-13420H (8nhân (4P-core + 4E-core), 12 luồng, 12MB)\r\nRam: 16GB DDR4-3200Mhz (8GB onboard + 8GB), tối đa 16GB\r\nỔ Cứng: 512GB SSD M.2 2242 PCIe NVMe\r\nCard Màn Hình: Intel UHD Graphics\r\nMàn Hình: 15.6 inch FHD (1920x1080) IPS 300nits Anti-glare, 45% NTSC\r\nOS: Windows 11 Home SL 64GB', 0, b'1', 1, '2024-07-23'),
(64, 16, 5, 'Lenovo Legion Slim 5 16APH8 (82Y9002YVN) (Ryzen 7 7840HS, RAM 16GB, SSD 512GB, VGA RTX 4060 8GB, Màn Hình 16inch WQXGA, Windows 11 home SL 64bit)', 28000000, '32141-laptop-lenovo-legion-slim-5-16aph8-82y9002yvn-phi-long-4.png', '32141-laptop-lenovo-legion-slim-5-16aph8-82y9002yvn-phi-long-5.png', '32141-laptop-lenovo-legion-slim-5-16aph8-82y9002yvn-phi-long-2.png', 'Lenovo Legion Slim 5 16APH8 82Y9002YVN là một kiệt tác của công nghệ và thiết kế. Chiếc laptop gaming này không chỉ mang trong mình sức mạnh vượt trội mà còn được đặt trong một thiết kế siêu mỏng và nhẹ, thích hợp cho cả game thủ và người dùng chuyên nghiệp.', 0, b'1', 6, '2024-07-23'),
(65, 16, 5, 'Lenovo ThinkBook 16 G6 IRL 21KH00BYVN (Intel Core i7-1355U, RAM 16GB, SSD 512GB, Vga Intel Iris Xe, Màn Hình 16 inch WUXGA, Windows 11, Màu Xám)', 22990000, '33464-lenovo_thinkbook_16_g6_irl_21kh00byvn__tin_viet_tien_2jpg.jpg', '33464-lenovo_thinkbook_16_g6_irl_21kh00byvn__tin_viet_tien_4.jpg', '33464-lenovo_thinkbook_16_g6_irl_21kh00byvn__tin_viet_tien_5.jpg', 'Laptop Lenovo ThinkBook 16 G6 IRL (21KH00BYVN) là một trong những sản phẩm nổi bật của Lenovo, kết hợp giữa hiệu suất mạnh mẽ và thiết kế tinh tế.\r\n\r\nĐược trang bị bộ vi xử lý Intel Core i7 thế hệ mới, RAM DDR5 và màn hình WUXGA 16 inch sắc nét, chiếc laptop này chắc chắn sẽ là người bạn đồng hành lý tưởng cho các chuyên gia và doanh nhân.', 0, b'0', 14, '2024-07-23'),
(66, 17, 5, 'Acer Aspire 5 A15-51P-53T8 (Intel Core 5 Processor 120U, RAM 16GB, SSD 512GB, Intel UHD Graphics, Màn Hình 15.6inch FHD, Windows 11 Home, Steel Gray)', 15990000, '33506-laptop-acer-aspire-5-a15-51p-53t8.jpg', '33506-laptop-acer-aspire-5-a15-51p-53t8-philong6.png', '33506-laptop-acer-aspire-5-a15-51p-53t8-philong3.png', 'Laptop Acer Aspire 15 A15-51P-53T8 Core 5-120U Grey với sự kết hợp hoàn hảo giữa hiệu suất, di động và thẩm mỹ, Laptop Acer này chính là sự lựa chọn tuyệt vời cho học sinh, sinh viên và nhân viên văn phòng, đáp ứng đầy đủ các nhu cầu làm việc, học tập và giải trí hàng ngày.', 0.2, b'1', 45, '2024-07-23'),
(67, 17, 5, 'Acer Gaming Nitro V ANV15-51-58AN (Intel Core i5-13420H, RAM 8GB, SSD 512GB, RTX 2050 4GB GDDR6, Màn Hình 15.6 inch FHD, Windows 11, Obsidian Black)', 19990000, '32036-1.png', '32036-laptop-gaming-acer-nitro-v-anv15-pl2.png', '32036-laptop-gaming-acer-nitro-v-anv15-pl1.png', 'Laptop Gaming Acer Nitro V ANV15-51-58AN là phiên bản Nitro mới nhất mà Acer đem đến cho Gamers trong năm 2023 này. Nitro V là sự kết hợp hoàn hảo giữa sức mạnh và phong cách, trang bị cấu hình CPU Intel Core i5 13420H và card đồ họa rời RTX 2050 4GB mới nhất, RAM 8GB DDR5 bus 5200Mhz siêu tốc, màn hình 15.6″ 144Hz chuẩn Gaming.', 0, b'1', 25, '2024-07-17'),
(68, 18, 6, 'Điện thoại iPhone 15 Pro Max 256GB', 3499000, 'iphone-15-pro-max-256gb-chinh-hang-vna-titan-xanh-duong.JPG', 'iphone-15-pro-max-256gb-chinh-hang-vna-titan-trang.JPG', 'iphone-15-pro-max-256gb-chinh-hang-vna-titan-den.JPG', 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng.', 0.15, b'1', 1, '2024-07-30'),
(69, 18, 6, 'Điện thoại iPhone 13 128GB', 17790000, 'iphone-13-128gb-chinh-hang-vna-do.JPG', 'iphone-13-128gb-chinh-hang-vna-den.JPG', 'iphone-13-128gb-chinh-hang-vna-trang.JPG', 'iPhone 13 có thiết kế nguyên khối vuông vắn như tiền nhiệm, khung viền được làm từ nhôm cùng mặt lưng kính sang trọng, cao cấp.\r\nNgoại hình không quá khác biệt so với tiền nhiệm, nhưng tỷ lệ màn hình so với khung máy tốt hơn, phần tai thỏ nhỏ hơn 20% gia tăng diện tích trải nghiệm khi lướt web, xem phim, chơi game.', 0.18, b'1', 1, '2024-07-30'),
(70, 18, 6, 'Điện thoại iPhone 15 Pro 128GB', 28990000, 'iphone-15-pro-128gb-chinh-hang-vna-titan-trang.JPG', 'iphone-15-pro-128gb-chinh-hang-vna-titan-den.JPG', 'iphone-15-pro-128gb-chinh-hang-vna-titan-tu-nhien.JPG', 'iPhone 15 Pro (6.1 inch) sở hữu màn hình Super Retina XDR tiên tiến với Promotion 120Hz.\r\n\r\nNăm nay vẫn giữ nguyên \"viên thuốc\" Dymamic Island và Alway On Display nhưng sẽ mới mẻ hơn với tính năng \"chế độ chờ\" của IOS 17.', 0.13, b'1', 0, '2024-07-29'),
(71, 18, 6, 'iPhone 15 Plus 128GB', 21650000, 'iphone-15-plus-128gb-chinh-hang-vna-den.JPG', 'iphone-15-plus-128gb-chinh-hang-vna-hong.JPG', 'iphone-15-plus-128gb-chinh-hang-vna-vang.jpg', 'iPhone 15 Plus có một thay đổi như: thay đổi cổng USB-C, Dynamic Island thời thượng, thiết kế màu sắc xinh xắn, camera hiệu năng gấp 4 lần và thời lượng pin đủ sử dụng trong 1 ngày\r\n\r\nVới khung viền nhôm Aliminium được tái chế 75%, mặt lưng kính nhám giúp cho trọng lượng nhẹ đi so với phiên bản tiền nhiệm rất nhiều. Việc giảm trọng lượng và góc bo tròn giúp cho trải nghiệm cầm nắm tốt hơn, thoải mái hơn', 0, b'1', 0, '2024-07-29'),
(72, 18, 6, 'iPhone 15 128GB', 18850000, 'iphone-15-128gb-chinh-hang-vna-vang.JPG', 'iphone-15-128gb-chinh-hang-vna-hong.JPG', 'iphone-15-128gb-chinh-hang-vna-den.JPG', 'iPhone 15 là biểu tượng tiếp theo trong chuỗi sản phẩm đình đám của Apple, đưa trải nghiệm người dùng lên một tầm cao mới. iPhone 15 không chỉ là một bản nâng cấp, mà là một cột mốc mới trong hành trình phát triển của dòng sản phẩm iPhone. Được ra mắt với sự kiện lễ ra mắt lớn tại Cupertino, sự chờ đợi và sự tò mò đã tạo nên không khí hứng khởi trước sự xuất hiện của \"siêu phẩm\" mới này.', 0, b'1', 1, '2024-07-29'),
(73, 18, 6, 'IPhone 14 128GB ', 21990000, 'iphone-14-128gb-chinh-hang-vna-trang.JPG', 'iphone-14-128gb-chinh-hang-vna-do.JPG', 'iphone-14-128gb-chinh-hang-vna-den.JPG', 'iPhone 14 có kích thước chiều ngang là 71.5mm, iPhone 14 Plus có trọng lượng 203g, \r\n\r\n giúp cầm nắm nhẹ nhàng, thoải mái hơn, không bị khó chịu trong thời gian dài chơi game hay sử dụng nhiều.\r\n\r\n\r\n\r\niPhone 14 Plus sở hữu ưu điểm mà các dòng iPhone màn hình 6.7 INCH khác của Apple không có đó là trải nghiệm cầm thoải mái nhất.', 0.25, b'1', 1, '2024-07-29'),
(74, 25, 7, 'Đồng hồ thông minh Apple Watch SE 2023 GPS 40mm viền nhôm dây thể thao ', 6390000, 'apple-watch-se-2023-40mm-vien-nhom-day-silicone-xanh-duong-thumb-1-600x600.jpg', 'apple-watch-se-2023-40mm-vien-nhom-day-silicone-trang-thumb-1-200x200.jpg', 'apple-watch-se-2023-40mm-vien-nhom-day-silicone-xanh-den-thumb-1-200x200.jpg', 'Apple Watch SE 2023 GPS 40mm viền nhôm dây thể thao là chiếc smartwatch có mức giá dễ tiếp cận nhất nhà Táo, là lựa chọn tối ưu ngân sách cho người dùng nhưng vẫn đảm bảo một thiết kế đẹp mắt, hỗ trợ đa dạng tính năng cũng như tiện ích hằng ngày', 0.05, b'0', 0, '2024-07-28'),
(75, 25, 7, 'Đồng hồ thông minh Apple Watch Series 9 GPS 41mm viền nhôm dây thể thao ', 10490000, 'apple-watch-s9-41mm-vien-nhom-day-silicone-hong-thumb-2-600x600.jpg', 'apple-watch-s9-41mm-vien-nhom-day-silicone-den-thumb-2-200x200.jpg', 'apple-watch-s9-41mm-vien-nhom-day-silicone-xanh-thumb-2-200x200.jpg', 'Apple Watch Series 9 GPS 41mm viền nhôm dây thể thao sở hữu thiết kế sang trọng, màu sắc thời thượng phù hợp với mọi phong cách của người dùng. Đồng hồ được tích hợp các tính năng theo dõi sức khỏe tân tiến, chế độ thể thao đa dạng cùng với định vị GPS chuẩn xác, sẵn sàng đồng hành cùng người dùng trong cuộc sống hằng ngày.', 0.05, b'0', 0, '2024-07-26'),
(76, 26, 7, 'Đồng hồ Elio 32 mm Nữ ES130-01 ', 1290000, 'elio-es130-01-nu-1.jpg', 'elio-es130-01-nu-2.jpg', 'elio-es130-01-nu-10-180x125.jpg', 'Elio \r\nSang trọng, tinh tế\r\nSản phẩm đồng hồ mang thương hiệu Elio với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân.', 0.46, b'0', 0, '2024-07-24'),
(77, 26, 7, 'Đồng hồ Elio 26 mm Nữ ES138-01', 1290000, 'elio-es138-01-nu-1.jpg', 'elio-es138-01-nu-2.jpg', 'elio-es138-01-nu-10-180x125.jpg', 'Elio \r\nSang trọng, tinh tế\r\nSản phẩm đồng hồ mang thương hiệu Elio với nhiều mẫu mã năng động, trẻ trung nhưng không kém phần tinh tế và sang trọng, phù hợp với tất cả mọi người hoạt động ở nhiều lĩnh vực từ dân văn phòng đến doanh nhân.', 0.46, b'0', 0, '2024-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `view_binhluan`
--

CREATE TABLE `view_binhluan` (
  `MaSP` int(11) NOT NULL DEFAULT 0,
  `TenSP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `SoLuong` bigint(21) NOT NULL,
  `cu_nhat` datetime DEFAULT NULL,
  `moi_nhat` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `view_binhluan`
--

INSERT INTO `view_binhluan` (`MaSP`, `TenSP`, `SoLuong`, `cu_nhat`, `moi_nhat`) VALUES
(42, 'Dell Vostro 15 3520 5M2TT2 (Intel Core I5-1235U, RAM 8GB, SSD 512GB, Màn Hình 15.6 inch FHD, Windows 11)', 1, '2024-07-31 08:45:55', '2024-07-31 08:45:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `MaND` (`ND_ID`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `chitietdonhang_ibfk_3` (`ID_HD`) USING BTREE;

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID_DH`),
  ADD KEY `MaND` (`MaND`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`),
  ADD KEY `MaDM` (`DM_ID`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `MaQuyen` (`Quyen_ID`),
  ADD KEY `TaiKhoan` (`TaiKhoan`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaLSP` (`LSP_ID`),
  ADD KEY `DM_ID` (`DMID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID_DH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`ND_ID`) REFERENCES `nguoidung` (`MaND`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `chitietdonhang_ibfk_3` FOREIGN KEY (`ID_HD`) REFERENCES `donhang` (`ID_DH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD CONSTRAINT `MaDM` FOREIGN KEY (`DM_ID`) REFERENCES `danhmuc` (`MaDM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`Quyen_ID`) REFERENCES `phanquyen` (`MaQuyen`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`LSP_ID`) REFERENCES `loaisanpham` (`MaLSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`DMID`) REFERENCES `danhmuc` (`MaDM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
