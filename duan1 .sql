-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `id_cthoadon` int(11) NOT NULL,
  `soluong_ct` int(11) NOT NULL,
  `gia_sanpham` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `id_ctsanpham` int(11) NOT NULL,
  `id_magiamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id_magiamgia` int(11) NOT NULL,
  `magiamgia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanloai`
--

CREATE TABLE `phanloai` (
  `id` int(11) NOT NULL COMMENT 'Khóa chính',
  `kich_thuoc` varchar(255) NOT NULL COMMENT 'Kích thước sản phẩm',
  `mau` varchar(255) NOT NULL COMMENT ' Màu sản phẩm',
  `soluong` int(11) NOT NULL COMMENT ' Số Lượng',
  `id_sanpham` int(11) NOT NULL COMMENT 'mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id` int(11) NOT NULL COMMENT 'Khóa chính',
  `hinh` varchar(255) NOT NULL COMMENT 'Hình nền marketing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_banner`
--

INSERT INTO `tb_banner` (`id`, `hinh`) VALUES
(1, 'bn2.png'),
(2, 'bn1.png'),
(3, 'bn3.png'),
(4, 'bn3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_binhluan`
--

CREATE TABLE `tb_binhluan` (
  `id` int(11) NOT NULL COMMENT 'Khoá chính',
  `noidung` varchar(255) NOT NULL COMMENT 'nội dung bình luận',
  `ngaybinhluan` varchar(255) NOT NULL COMMENT 'ngày bình luận',
  `idpro` int(11) NOT NULL COMMENT 'mã sản phẩm',
  `iduser` int(11) NOT NULL COMMENT 'mã người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_binhluan`
--

INSERT INTO `tb_binhluan` (`id`, `noidung`, `ngaybinhluan`, `idpro`, `iduser`) VALUES
(9, 'hay qua ', '25/11/2023', 23, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id`, `iduser`, `idsanpham`, `gia`, `ten`, `hinh`, `soluong`, `thanhtien`, `idbill`) VALUES
(26, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 139),
(27, 6, 23, 5000, 'Iphone 15', '15.png', 2, 5000, 139),
(28, 6, 22, 1111, 'Iphone 14promax', '14promax.png', 2, 1111, 140),
(29, 6, 22, 1111, 'Iphone 14promax', '14promax.png', 2, 1111, 141),
(32, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 2, 5678, 143),
(33, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 144),
(34, 6, 23, 5000, 'Iphone 15', '15.png', 1, 5000, 144),
(35, 6, 23, 5000, 'Iphone 15', '15.png', 1, 5000, 145),
(36, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 146),
(37, 6, 1, 1000, 'Iphone promax15', '15promax.png', 1, 1000, 147),
(38, 6, 22, 1111, 'Iphone 14promax', '14promax.png', 1, 1111, 147),
(39, 6, 23, 5000, 'Iphone 15', '15.png', 2, 5000, 148),
(40, 6, 22, 1111, 'Iphone 14promax', '14promax.png', 1, 1111, 148),
(41, 6, 23, 5000, 'Iphone 15', '15.png', 1, 5000, 149),
(42, 6, 22, 1111, 'Iphone 14promax', '14promax.png', 1, 1111, 150),
(43, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 150),
(44, 6, 23, 5000, 'Iphone 15', '15.png', 1, 5000, 153),
(45, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 154),
(46, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 157),
(47, 6, 22, 1000000, 'Iphone 14promax', '14promax.png', 1, 1000000, 158),
(48, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 159),
(49, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 160),
(50, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 161),
(51, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 162),
(52, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 163),
(53, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 163),
(54, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 164),
(55, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 164),
(56, 6, 21, 100000, 'iphone 15 promax', '15promax.png', 2, 100000, 164),
(57, 6, 24, 5678, 'iphone 15 promax titan', '15promax.png', 1, 5678, 165),
(58, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 165),
(59, 6, 21, 100000, 'iphone 15 promax', '15promax.png', 2, 100000, 165),
(60, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 166),
(61, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 167),
(62, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 168),
(63, 6, 24, 56798, 'iphone 15 promax titan', '15promax.png', 1, 56798, 169),
(64, 6, 21, 100000, 'iphone 15 promax', '15promax.png', 1, 100000, 169),
(65, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 170),
(66, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 172),
(67, 6, 22, 1000000, 'Iphone 14promax', '14promax.png', 2, 1000000, 173),
(68, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 174),
(69, 6, 22, 1000000, 'Iphone 14promax', '14promax.png', 1, 1000000, 175),
(70, 6, 22, 1000000, 'Iphone 14promax', '14promax.png', 1, 1000000, 176),
(71, 6, 24, 56798, 'iphone 15 promax titan', '15promax.png', 1, 56798, 177),
(72, 6, 23, 500000, 'Iphone 15', '15.png', 1, 500000, 178),
(73, 6, 24, 56798, 'iphone 15 promax titan', '15promax.png', 1, 56798, 179);

-- --------------------------------------------------------

--
-- Table structure for table `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id`, `ten`, `hinh`) VALUES
(1, 'Iphone', 'apple.png'),
(2, 'SamSung', 'android.jpg'),
(12, 'Oppooooo', 'oppo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hinh`
--

CREATE TABLE `tb_hinh` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hinh`
--

INSERT INTO `tb_hinh` (`id`, `id_sanpham`, `hinh`) VALUES
(1, 1, '14promax.png'),
(2, 21, '14promax.png'),
(3, 23, '14promax.png'),
(4, 24, '14promax.png'),
(5, 22, '14promax.png'),
(7, 1, '15.png'),
(8, 23, '15.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hoadon`
--

CREATE TABLE `tb_hoadon` (
  `id` int(11) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `dien_thoai` varchar(10) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngay_mua` varchar(255) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.thanh toán khi nhận hàng\r\n2.thanh toán online\r\n3.thanh toán chuyển khoản QR',
  `trang_thai` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn Hàng Mới\r\n1.Đang xử lí\r\n2.Đang giao hàng\r\n3.Đã giao hàng\r\n4. Đã Hủy',
  `tinhtrangtt` tinyint(1) DEFAULT 0 COMMENT '0. Chưa Thanh Toán\r\n1.Đã thanh Toán',
  `id_sanpham` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hoadon`
--

INSERT INTO `tb_hoadon` (`id`, `dia_chi`, `dien_thoai`, `ten`, `email`, `ngay_mua`, `tong_tien`, `pttt`, `trang_thai`, `tinhtrangtt`, `id_sanpham`, `id_user`) VALUES
(139, 'hanoi', '0377270358', 'Nguyễn Tấn Đức', 'anh@gmail.com', '27/11/2023', 15678, 1, 4, 0, NULL, 6),
(140, 'quangbinh', '0377270358', 'taduc', 'ducsasea2@gmail.com', '27/11/2023', 7222, 2, 3, 0, NULL, 6),
(141, 'quangbinh', '0377270358', 'taduc', 'ducsasea2@gmail.com', '27/11/2023', 7222, 2, 3, 1, NULL, 6),
(143, 'dưqdqd', '0912991292', 'Nguyễn Tấn Đức', 'dasdada@gmail.com', '01/12/2023', 11356, 1, 3, 1, NULL, 6),
(144, 'quangbinh', '0377270358', 'Nguyễn Tấn Đứcc', 'ducsasea2@gmail.com', '03/12/2023', 10678, 1, 4, 0, NULL, 6),
(145, '23', '3232', 'Nguyễn Tấn Đức', 'anh@gmail.com', '03/12/2023', 5000, 1, 4, 0, NULL, 6),
(146, 'quangbinh', '0377270358', 'admin', 'bolac11', '03/12/2023', 5678, 1, 0, 0, NULL, 6),
(147, 'sqsq', '0377270358', 'Nguyễn Tấn Đức', 'ducsasea2@gmail.com', '03/12/2023', 2111, 1, 0, 0, NULL, 6),
(148, 'quangbinh', '0377270358', 'Nguyễn Tấn Đức', 'dasdada@gmail.com', '04/12/2023', 11111, 1, 0, 0, NULL, 6),
(149, 'hanoi', '0377270358', 'Nguyễn Tấn Đức', 'ducntph41207@fpt.edu.vn', '06/12/2023', 5000, 1, 0, 0, NULL, 6),
(150, 'ddiaj chir', '0377270358', 'Nguyễn Tấn Đức', 'anh@gmail.com', '10/12/2023', 6789, 2, 0, 0, NULL, 6),
(151, 'ddiaj chir', '0377270358', 'Nguyễn Tấn Đức', 'anh@gmail.com', '10/12/2023', 0, 1, 0, 0, NULL, 6),
(152, 'ddiaj chir', '0377270358', 'Nguyễn Tấn Đức', 'anh@gmail.com', '10/12/2023', 0, 2, 0, 0, NULL, 6),
(153, 'quangbinh', '0377270358', 'Nguyễn Tấn Đức', 'ducntph41207@fpt.edu.vn', '11/12/2023', 5000, 2, 0, 0, NULL, 6),
(154, 'hanoi', '0377270358', 'teeen', 'ducntph41207@fpt.edu.vn', '11/12/2023', 5678, 1, 0, 0, NULL, 6),
(155, 'hanoi', '0377270358', 'teeen', 'ducntph41207@fpt.edu.vn', '11/12/2023', 0, 2, 0, 0, NULL, 6),
(156, 'hanoi', '0377270358', 'teeen', 'ducntph41207@fpt.edu.vn', '11/12/2023', 0, 2, 0, 0, NULL, 6),
(157, 'quangbinh', '0377270358', 'Nguyễn Tấn Đức', 'ducntph41207@fpt.edu.vn', '11/12/2023', 500000, 2, 0, 0, NULL, 6),
(158, 'hanoii', '0912991292', 'Nguyễn Tấn Đứccc', 'chiptkph35020@fpt.edu.vn', '11/12/2023', 1000000, 2, 0, 0, NULL, 6),
(159, 'quangbinh', '0377270358', 'Nguyễn Tấn Đức', 'dasdada@gmail.com', '11/12/2023', 500000, 2, 0, 0, NULL, 6),
(160, 'hanoi', '0377270358', 'Nguyễn Tấn Đứcc', 'ducntph41207@fpt.edu.vn', '11/12/2023', 500000, 1, 0, 0, NULL, 6),
(161, 'quangbinh', '0377270358', 'admin', 'ducntph41207@fpt.edu.vn', '11/12/2023', 500000, 2, 0, 0, NULL, 6),
(162, 'quangbinh', '0377270358', 'admin', 'ducntph41207@fpt.edu.vn', '11/12/2023', 5678, 2, 0, 0, NULL, 6),
(163, 'hanoi', '0377270358', 'Nguyễn Tấn Đức', 'ducsasea2@gmail.com', '11/12/2023', 505678, 2, 0, 0, NULL, 6),
(164, 'hanoii', '0377270358', 'Nguyễn Tấn Đức', 'chiptkph35020@fpt.edu.vn', '11/12/2023', 705678, 2, 0, 0, NULL, 6),
(165, 'hanoii', '0377270358', 'Nguyễn Tấn Đức', 'chiptkph35020@fpt.edu.vn', '11/12/2023', 705678, 2, 0, 1, NULL, 6),
(166, '121', '0912991292', '123', 'dasdada@gmail.com', '11/12/2023', 500000, 2, 0, 1, NULL, 6),
(167, 'sqsq', '0377270358', 'teeen', 'chiptkph35020@fpt.edu.vn', '11/12/2023', 500000, 2, 0, 1, NULL, 6),
(168, '121', '0377270358', 'Nguyễn Tấn Đứcc', 'anh@gmail.com', '11/12/2023', 500000, 2, 0, 1, NULL, 6),
(169, 'ddiaj chir', '0912991292', 'Nguyễn Tấn Đức', 'ducntph41207@fpt.edu.vn', '11/12/2023', 156798, 2, 4, 1, NULL, 6),
(170, 'ddiaj chir', '0377270358', 'Nguyễn Tấn Đứcc', 'ducsasea2@gmail.com', '11/12/2023', 500000, 2, 0, 1, NULL, 6),
(171, 'ddiaj chir', '0377270358', 'Nguyễn Tấn Đứcc', 'ducsasea2@gmail.com', '11/12/2023', 0, 2, 0, 1, NULL, 6),
(172, '121', '0377270358', 'admin', 'ducsasea2@gmail.com', '11/12/2023', 500000, 2, 0, 1, NULL, 6),
(173, 'hanoi', '0912991292', 'Nguyễn Tấn Đứcc', 'dasdada@gmail.com', '11/12/2023', 2000000, 2, 0, 1, NULL, 6),
(174, 'sqsq', '0377270358', 'Nguyễn Tấn Đứccc', 'chiptkph35020@fpt.edu.vn', '11/12/2023', 500000, 2, 0, 1, NULL, 6),
(175, 'hanoii', '0377270358', 'Nguyễn Tấn Đứccc', 'anh@gmail.com', '11/12/2023', 1000000, 2, 0, 1, NULL, 6),
(176, 'ddiaj chir', '0912991292', 'Nguyễn Tấn Đứccc', 'dasdada@gmail.com', '11/12/2023', 1000000, 2, 0, 1, NULL, 6),
(177, 'quangbinh', '0377270358', 'Nguyễn Tấn Đứccc', 'ducsasea2@gmail.com', '11/12/2023', 56798, 2, 0, 1, NULL, 6),
(178, 'ddiaj chir', '0377270358', 'Nguyễn Tấn Đứccc', 'ducntph41207@fpt.edu.vn', '14/12/2023', 500000, 2, 0, 1, NULL, 6),
(179, '121', '0912991292', 'Nguyễn Tấn Đứcc', 'anh@gmail.com', '14/12/2023', 56798, 2, 0, 1, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL COMMENT 'Khóa chính',
  `ten_role` varchar(255) NOT NULL COMMENT 'Mô tả vai trò'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sanphamm`
--

CREATE TABLE `tb_sanphamm` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `trang_thai` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_phanloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sanphamm`
--

INSERT INTO `tb_sanphamm` (`id`, `ten`, `gia`, `giam_gia`, `hinh`, `trang_thai`, `soluong`, `luot_xem`, `seller`, `mota`, `id_danhmuc`, `id_phanloai`) VALUES
(1, 'Iphone promax15', 10000.00, 50.00, '15promax.png', 'Dư Hàng', 50, 1, 0, '0', 1, 0),
(21, 'iphone 15 promax', 100000.00, 0.00, '15promax.png', 'hong', 0, 100, 1, '0', 2, 0),
(22, 'Iphone 14promax', 1000000.00, 11.00, '14promax.png', 'hong', 1, 33, 0, '0', 1, 9),
(23, 'Iphone 15', 500000.00, 50.00, '15.png', 'hong', 1, 200, 1, '0', 1, 2),
(24, 'nguyễn tạ đứcc', 9999.00, 0.00, '15promax.png', '', 0, 99, 1, '0', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL COMMENT 'Khóa Chính',
  `ten` varchar(255) DEFAULT NULL COMMENT 'Tên người dùng',
  `tai_khoan` varchar(255) DEFAULT NULL COMMENT 'Tài khoản người dùng',
  `mat_khau` varchar(255) NOT NULL COMMENT 'Mật khẩu',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email người dùng',
  `dia_chi` varchar(255) NOT NULL,
  `dien_thoai` varchar(255) DEFAULT NULL COMMENT 'Số điện thoại',
  `hinh` varchar(255) DEFAULT NULL COMMENT 'Hình ảnh người dùng',
  `id_role` int(11) DEFAULT NULL COMMENT 'Mã vai trò người dùng',
  `trang_thai` varchar(255) NOT NULL COMMENT 'Trạng Thái của người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `ten`, `tai_khoan`, `mat_khau`, `email`, `dia_chi`, `dien_thoai`, `hinh`, `id_role`, `trang_thai`) VALUES
(1, 'Nguyễn Tấn Đứccc', 'taduc', '123', 'ducsasea2@gmai.com', '225 Phương Canh', '0377270358', '15promax.png', 1, 'Sử dụng'),
(6, 'Nguyễn Tấn Đức', 'admin', '123', 'ducntph41207@fpt.edu.vn', 'hanoii', '0377270358', '1.jpg', 1, ''),
(7, '', '', '123', '', '', '', NULL, 0, ''),
(8, '', 'Adminn', '1233', 'ducntph41207@fpt.edu.vn', '', '', NULL, 0, ''),
(9, NULL, 'sadad', '4ab47e54c2f73ad4c0eb3974709721cd', 'ducntph41207@fpt.edu.vn', '', NULL, NULL, NULL, ''),
(10, NULL, '123', '202cb962ac59075b964b07152d234b70', 'ducntph41207@fpt.edu.vn', '', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(11) NOT NULL COMMENT 'Khoá chính',
  `phuong_thuc` varchar(255) NOT NULL COMMENT 'Phương thức thanh toán '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phanloai`
--
ALTER TABLE `phanloai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_cart_ibfk_1` (`idsanpham`),
  ADD KEY `tb_cart_ibfk_2` (`idbill`);

--
-- Indexes for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hinh`
--
ALTER TABLE `tb_hinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_sanphamm`
--
ALTER TABLE `tb_sanphamm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phanloai`
--
ALTER TABLE `phanloai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính';

--
-- AUTO_INCREMENT for table `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_binhluan`
--
ALTER TABLE `tb_binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khoá chính', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_hinh`
--
ALTER TABLE `tb_hinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_hoadon`
--
ALTER TABLE `tb_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính';

--
-- AUTO_INCREMENT for table `tb_sanphamm`
--
ALTER TABLE `tb_sanphamm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa Chính', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khoá chính';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD CONSTRAINT `tb_cart_ibfk_1` FOREIGN KEY (`idsanpham`) REFERENCES `tb_sanphamm` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_cart_ibfk_2` FOREIGN KEY (`idbill`) REFERENCES `tb_hoadon` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_hinh`
--
ALTER TABLE `tb_hinh`
  ADD CONSTRAINT `tb_hinh_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `tb_sanphamm` (`id`);

--
-- Constraints for table `tb_sanphamm`
--
ALTER TABLE `tb_sanphamm`
  ADD CONSTRAINT `tb_sanphamm_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tb_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
