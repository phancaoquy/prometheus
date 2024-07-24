-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 01:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rshoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(9) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `iduser` int(6) NOT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_tel` varchar(20) NOT NULL,
  `nguoidat_diachi` varchar(100) NOT NULL,
  `nguoinhan_ten` varchar(50) DEFAULT NULL,
  `nguoinhan_diachi` varchar(100) DEFAULT NULL,
  `nguoinhan_tel` varchar(20) DEFAULT NULL,
  `total` int(9) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `tongthanhtoan` int(9) NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '0: COD; 1: ck; 2: ví điện tử'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(6) NOT NULL,
  `idpro` int(6) NOT NULL,
  `price` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(6) NOT NULL,
  `idbill` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `home` tinyint(1) NOT NULL DEFAULT 0,
  `stt` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `home`, `stt`) VALUES
(1, 'Nike', 1, 1),
(2, 'Adidas', 0, 2),
(3, 'Under Armour', 1, 3),
(4, 'Asics', 0, 4),
(5, 'Vans', 1, 5),
(6, 'Converse', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `price` int(6) NOT NULL,
  `view` int(9) DEFAULT 0,
  `bestseller` tinyint(1) DEFAULT 0,
  `iddm` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `view`, `bestseller`, `iddm`) VALUES
(1, 'Nike Air Force 1 \'07', 'product_1.png', 115, 1000, 1, 1),
(2, 'Forum Bold Shoes', 'product_2.png', 150, 235, 1, 2),
(3, 'Unisex Curry 11 \'Future Curry\' Basketball Shoes', 'product_3.png', 160, 900, 0, 3),
(4, 'MEN RUNNING SHOES\nGEL-KAYANO 30', 'product_4.png', 170, 400, 1, 3),
(5, 'Vans Old Skool', 'product_5.png', 75, 1000, 0, 5),
(6, 'Converse Chuck Taylor All Star Classic Hi Top', 'product_6.png', 60, 0, 0, 6),
(7, 'Nike Air VaporMax 2023 Flyknit', 'product_7.png', 170, 2000, 0, 1),
(8, 'OZWEEGO Shoes', 'product_8.png', 100, 0, 0, 2),
(9, 'Men\'s UA Flow Dynamic Training Shoes', 'product_9.png', 130, 0, 0, 3),
(10, 'GEL-1130 ITACHI', 'product_10.png', 200, 0, 0, 4),
(11, 'VANS OLD SKOOL CLASSIC NAVY/WHITE', 'product_11.png', 70, 0, 0, 5),
(30, 'Nike Jordan 1', 'product_13.png', 300, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `dienthoai` varchar(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ten`, `diachi`, `email`, `dienthoai`, `role`, `img`) VALUES
(1, 'admin', '123', NULL, 'QTSC 9, CVPM QUang Trung', 'caoquyphan@gmail.com', '012345678', 1, ''),
(2, 'pcq', '123', NULL, 'QTSC 9, CVPM QUang Trung', 'caoquyphan280303@gmail.com', '012345678', 0, ''),
(5, 'aiden', '123', NULL, NULL, 'convoi@gmail.com', NULL, 0, ''),
(6, 'aiden223', '123', NULL, NULL, 'sdsd@gmail.com', NULL, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`iduser`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_dm` (`iddm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
