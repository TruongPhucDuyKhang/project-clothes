-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 05:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(11) NOT NULL,
  `name_cat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prarent_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `name_cat`, `prarent_id`) VALUES
(1, 'Thời Trang Nam', '0'),
(2, 'Áo thun', '1'),
(3, 'Áo Sơ Mi Tay Dài', '1'),
(5, 'Giày Dép Nam', '1');

-- --------------------------------------------------------

--
-- Table structure for table `devvn_quanhuyen`
--

CREATE TABLE `devvn_quanhuyen` (
  `maqh` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devvn_quanhuyen`
--

INSERT INTO `devvn_quanhuyen` (`maqh`, `name`, `type`, `matp`) VALUES
(1, 'Quận Ba Đình', 'Quận', '01'),
(2, 'Quận Hoàn Kiếm', 'Quận', '01'),
(3, 'Quận Tây Hồ', 'Quận', '01'),
(4, 'Quận Long Biên', 'Quận', '01'),
(5, 'Quận Cầu Giấy', 'Quận', '01'),
(6, 'Quận Đống Đa', 'Quận', '01'),
(7, 'Quận Hai Bà Trưng', 'Quận', '01'),
(8, 'Quận Hoàng Mai', 'Quận', '01'),
(9, 'Quận Thanh Xuân', 'Quận', '01'),
(16, 'Huyện Sóc Sơn', 'Huyện', '01'),
(17, 'Huyện Đông Anh', 'Huyện', '01'),
(18, 'Huyện Gia Lâm', 'Huyện', '01'),
(19, 'Quận Nam Từ Liêm', 'Quận', '01'),
(20, 'Huyện Thanh Trì', 'Huyện', '01'),
(21, 'Quận Bắc Từ Liêm', 'Quận', '01'),
(24, 'Thành phố Hà Giang', 'Thành phố', '02'),
(26, 'Huyện Đồng Văn', 'Huyện', '02'),
(27, 'Huyện Mèo Vạc', 'Huyện', '02'),
(28, 'Huyện Yên Minh', 'Huyện', '02'),
(29, 'Huyện Quản Bạ', 'Huyện', '02'),
(30, 'Huyện Vị Xuyên', 'Huyện', '02'),
(31, 'Huyện Bắc Mê', 'Huyện', '02'),
(32, 'Huyện Hoàng Su Phì', 'Huyện', '02'),
(33, 'Huyện Xín Mần', 'Huyện', '02'),
(34, 'Huyện Bắc Quang', 'Huyện', '02'),
(35, 'Huyện Quang Bình', 'Huyện', '02'),
(40, 'Thành phố Cao Bằng', 'Thành phố', '04'),
(42, 'Huyện Bảo Lâm', 'Huyện', '04'),
(43, 'Huyện Bảo Lạc', 'Huyện', '04'),
(44, 'Huyện Thông Nông', 'Huyện', '04'),
(45, 'Huyện Hà Quảng', 'Huyện', '04'),
(46, 'Huyện Trà Lĩnh', 'Huyện', '04'),
(47, 'Huyện Trùng Khánh', 'Huyện', '04'),
(48, 'Huyện Hạ Lang', 'Huyện', '04'),
(49, 'Huyện Quảng Uyên', 'Huyện', '04'),
(50, 'Huyện Phục Hoà', 'Huyện', '04'),
(51, 'Huyện Hoà An', 'Huyện', '04'),
(52, 'Huyện Nguyên Bình', 'Huyện', '04'),
(53, 'Huyện Thạch An', 'Huyện', '04'),
(58, 'Thành Phố Bắc Kạn', 'Thành phố', '06'),
(60, 'Huyện Pác Nặm', 'Huyện', '06'),
(61, 'Huyện Ba Bể', 'Huyện', '06'),
(62, 'Huyện Ngân Sơn', 'Huyện', '06'),
(63, 'Huyện Bạch Thông', 'Huyện', '06'),
(64, 'Huyện Chợ Đồn', 'Huyện', '06'),
(65, 'Huyện Chợ Mới', 'Huyện', '06'),
(66, 'Huyện Na Rì', 'Huyện', '06'),
(70, 'Thành phố Tuyên Quang', 'Thành phố', '08'),
(71, 'Huyện Lâm Bình', 'Huyện', '08'),
(72, 'Huyện Nà Hang', 'Huyện', '08'),
(73, 'Huyện Chiêm Hóa', 'Huyện', '08'),
(74, 'Huyện Hàm Yên', 'Huyện', '08'),
(75, 'Huyện Yên Sơn', 'Huyện', '08'),
(76, 'Huyện Sơn Dương', 'Huyện', '08'),
(80, 'Thành phố Lào Cai', 'Thành phố', '10'),
(82, 'Huyện Bát Xát', 'Huyện', '10'),
(83, 'Huyện Mường Khương', 'Huyện', '10'),
(84, 'Huyện Si Ma Cai', 'Huyện', '10'),
(85, 'Huyện Bắc Hà', 'Huyện', '10'),
(86, 'Huyện Bảo Thắng', 'Huyện', '10'),
(87, 'Huyện Bảo Yên', 'Huyện', '10'),
(88, 'Huyện Sa Pa', 'Huyện', '10'),
(89, 'Huyện Văn Bàn', 'Huyện', '10'),
(94, 'Thành phố Điện Biên Phủ', 'Thành phố', '11'),
(95, 'Thị Xã Mường Lay', 'Thị xã', '11'),
(96, 'Huyện Mường Nhé', 'Huyện', '11'),
(97, 'Huyện Mường Chà', 'Huyện', '11'),
(98, 'Huyện Tủa Chùa', 'Huyện', '11'),
(99, 'Huyện Tuần Giáo', 'Huyện', '11'),
(100, 'Huyện Điện Biên', 'Huyện', '11'),
(101, 'Huyện Điện Biên Đông', 'Huyện', '11'),
(102, 'Huyện Mường Ảng', 'Huyện', '11'),
(103, 'Huyện Nậm Pồ', 'Huyện', '11'),
(105, 'Thành phố Lai Châu', 'Thành phố', '12'),
(106, 'Huyện Tam Đường', 'Huyện', '12'),
(107, 'Huyện Mường Tè', 'Huyện', '12'),
(108, 'Huyện Sìn Hồ', 'Huyện', '12'),
(109, 'Huyện Phong Thổ', 'Huyện', '12'),
(110, 'Huyện Than Uyên', 'Huyện', '12'),
(111, 'Huyện Tân Uyên', 'Huyện', '12'),
(112, 'Huyện Nậm Nhùn', 'Huyện', '12'),
(116, 'Thành phố Sơn La', 'Thành phố', '14'),
(118, 'Huyện Quỳnh Nhai', 'Huyện', '14'),
(119, 'Huyện Thuận Châu', 'Huyện', '14'),
(120, 'Huyện Mường La', 'Huyện', '14'),
(121, 'Huyện Bắc Yên', 'Huyện', '14'),
(122, 'Huyện Phù Yên', 'Huyện', '14'),
(123, 'Huyện Mộc Châu', 'Huyện', '14'),
(124, 'Huyện Yên Châu', 'Huyện', '14'),
(125, 'Huyện Mai Sơn', 'Huyện', '14'),
(126, 'Huyện Sông Mã', 'Huyện', '14'),
(127, 'Huyện Sốp Cộp', 'Huyện', '14'),
(128, 'Huyện Vân Hồ', 'Huyện', '14'),
(132, 'Thành phố Yên Bái', 'Thành phố', '15'),
(133, 'Thị xã Nghĩa Lộ', 'Thị xã', '15'),
(135, 'Huyện Lục Yên', 'Huyện', '15'),
(136, 'Huyện Văn Yên', 'Huyện', '15'),
(137, 'Huyện Mù Căng Chải', 'Huyện', '15'),
(138, 'Huyện Trấn Yên', 'Huyện', '15'),
(139, 'Huyện Trạm Tấu', 'Huyện', '15'),
(140, 'Huyện Văn Chấn', 'Huyện', '15'),
(141, 'Huyện Yên Bình', 'Huyện', '15'),
(148, 'Thành phố Hòa Bình', 'Thành phố', '17'),
(150, 'Huyện Đà Bắc', 'Huyện', '17'),
(151, 'Huyện Kỳ Sơn', 'Huyện', '17'),
(152, 'Huyện Lương Sơn', 'Huyện', '17'),
(153, 'Huyện Kim Bôi', 'Huyện', '17'),
(154, 'Huyện Cao Phong', 'Huyện', '17'),
(155, 'Huyện Tân Lạc', 'Huyện', '17'),
(156, 'Huyện Mai Châu', 'Huyện', '17'),
(157, 'Huyện Lạc Sơn', 'Huyện', '17'),
(158, 'Huyện Yên Thủy', 'Huyện', '17'),
(159, 'Huyện Lạc Thủy', 'Huyện', '17'),
(164, 'Thành phố Thái Nguyên', 'Thành phố', '19'),
(165, 'Thành phố Sông Công', 'Thành phố', '19'),
(167, 'Huyện Định Hóa', 'Huyện', '19'),
(168, 'Huyện Phú Lương', 'Huyện', '19'),
(169, 'Huyện Đồng Hỷ', 'Huyện', '19'),
(170, 'Huyện Võ Nhai', 'Huyện', '19'),
(171, 'Huyện Đại Từ', 'Huyện', '19'),
(172, 'Thị xã Phổ Yên', 'Thị xã', '19'),
(173, 'Huyện Phú Bình', 'Huyện', '19'),
(178, 'Thành phố Lạng Sơn', 'Thành phố', '20'),
(180, 'Huyện Tràng Định', 'Huyện', '20'),
(181, 'Huyện Bình Gia', 'Huyện', '20'),
(182, 'Huyện Văn Lãng', 'Huyện', '20'),
(183, 'Huyện Cao Lộc', 'Huyện', '20'),
(184, 'Huyện Văn Quan', 'Huyện', '20'),
(185, 'Huyện Bắc Sơn', 'Huyện', '20'),
(186, 'Huyện Hữu Lũng', 'Huyện', '20'),
(187, 'Huyện Chi Lăng', 'Huyện', '20'),
(188, 'Huyện Lộc Bình', 'Huyện', '20'),
(189, 'Huyện Đình Lập', 'Huyện', '20'),
(193, 'Thành phố Hạ Long', 'Thành phố', '22'),
(194, 'Thành phố Móng Cái', 'Thành phố', '22'),
(195, 'Thành phố Cẩm Phả', 'Thành phố', '22'),
(196, 'Thành phố Uông Bí', 'Thành phố', '22'),
(198, 'Huyện Bình Liêu', 'Huyện', '22'),
(199, 'Huyện Tiên Yên', 'Huyện', '22'),
(200, 'Huyện Đầm Hà', 'Huyện', '22'),
(201, 'Huyện Hải Hà', 'Huyện', '22'),
(202, 'Huyện Ba Chẽ', 'Huyện', '22'),
(203, 'Huyện Vân Đồn', 'Huyện', '22'),
(204, 'Huyện Hoành Bồ', 'Huyện', '22'),
(205, 'Thị xã Đông Triều', 'Thị xã', '22'),
(206, 'Thị xã Quảng Yên', 'Thị xã', '22'),
(207, 'Huyện Cô Tô', 'Huyện', '22'),
(213, 'Thành phố Bắc Giang', 'Thành phố', '24'),
(215, 'Huyện Yên Thế', 'Huyện', '24'),
(216, 'Huyện Tân Yên', 'Huyện', '24'),
(217, 'Huyện Lạng Giang', 'Huyện', '24'),
(218, 'Huyện Lục Nam', 'Huyện', '24'),
(219, 'Huyện Lục Ngạn', 'Huyện', '24'),
(220, 'Huyện Sơn Động', 'Huyện', '24'),
(221, 'Huyện Yên Dũng', 'Huyện', '24'),
(222, 'Huyện Việt Yên', 'Huyện', '24'),
(223, 'Huyện Hiệp Hòa', 'Huyện', '24'),
(227, 'Thành phố Việt Trì', 'Thành phố', '25'),
(228, 'Thị xã Phú Thọ', 'Thị xã', '25'),
(230, 'Huyện Đoan Hùng', 'Huyện', '25'),
(231, 'Huyện Hạ Hoà', 'Huyện', '25'),
(232, 'Huyện Thanh Ba', 'Huyện', '25'),
(233, 'Huyện Phù Ninh', 'Huyện', '25'),
(234, 'Huyện Yên Lập', 'Huyện', '25'),
(235, 'Huyện Cẩm Khê', 'Huyện', '25'),
(236, 'Huyện Tam Nông', 'Huyện', '25'),
(237, 'Huyện Lâm Thao', 'Huyện', '25'),
(238, 'Huyện Thanh Sơn', 'Huyện', '25'),
(239, 'Huyện Thanh Thuỷ', 'Huyện', '25'),
(240, 'Huyện Tân Sơn', 'Huyện', '25'),
(243, 'Thành phố Vĩnh Yên', 'Thành phố', '26'),
(244, 'Thị xã Phúc Yên', 'Thị xã', '26'),
(246, 'Huyện Lập Thạch', 'Huyện', '26'),
(247, 'Huyện Tam Dương', 'Huyện', '26'),
(248, 'Huyện Tam Đảo', 'Huyện', '26'),
(249, 'Huyện Bình Xuyên', 'Huyện', '26'),
(250, 'Huyện Mê Linh', 'Huyện', '01'),
(251, 'Huyện Yên Lạc', 'Huyện', '26'),
(252, 'Huyện Vĩnh Tường', 'Huyện', '26'),
(253, 'Huyện Sông Lô', 'Huyện', '26'),
(256, 'Thành phố Bắc Ninh', 'Thành phố', '27'),
(258, 'Huyện Yên Phong', 'Huyện', '27'),
(259, 'Huyện Quế Võ', 'Huyện', '27'),
(260, 'Huyện Tiên Du', 'Huyện', '27'),
(261, 'Thị xã Từ Sơn', 'Thị xã', '27'),
(262, 'Huyện Thuận Thành', 'Huyện', '27'),
(263, 'Huyện Gia Bình', 'Huyện', '27'),
(264, 'Huyện Lương Tài', 'Huyện', '27'),
(268, 'Quận Hà Đông', 'Quận', '01'),
(269, 'Thị xã Sơn Tây', 'Thị xã', '01'),
(271, 'Huyện Ba Vì', 'Huyện', '01'),
(272, 'Huyện Phúc Thọ', 'Huyện', '01'),
(273, 'Huyện Đan Phượng', 'Huyện', '01'),
(274, 'Huyện Hoài Đức', 'Huyện', '01'),
(275, 'Huyện Quốc Oai', 'Huyện', '01'),
(276, 'Huyện Thạch Thất', 'Huyện', '01'),
(277, 'Huyện Chương Mỹ', 'Huyện', '01'),
(278, 'Huyện Thanh Oai', 'Huyện', '01'),
(279, 'Huyện Thường Tín', 'Huyện', '01'),
(280, 'Huyện Phú Xuyên', 'Huyện', '01'),
(281, 'Huyện Ứng Hòa', 'Huyện', '01'),
(282, 'Huyện Mỹ Đức', 'Huyện', '01'),
(288, 'Thành phố Hải Dương', 'Thành phố', '30'),
(290, 'Thị xã Chí Linh', 'Thị xã', '30'),
(291, 'Huyện Nam Sách', 'Huyện', '30'),
(292, 'Huyện Kinh Môn', 'Huyện', '30'),
(293, 'Huyện Kim Thành', 'Huyện', '30'),
(294, 'Huyện Thanh Hà', 'Huyện', '30'),
(295, 'Huyện Cẩm Giàng', 'Huyện', '30'),
(296, 'Huyện Bình Giang', 'Huyện', '30'),
(297, 'Huyện Gia Lộc', 'Huyện', '30'),
(298, 'Huyện Tứ Kỳ', 'Huyện', '30'),
(299, 'Huyện Ninh Giang', 'Huyện', '30'),
(300, 'Huyện Thanh Miện', 'Huyện', '30'),
(303, 'Quận Hồng Bàng', 'Quận', '31'),
(304, 'Quận Ngô Quyền', 'Quận', '31'),
(305, 'Quận Lê Chân', 'Quận', '31'),
(306, 'Quận Hải An', 'Quận', '31'),
(307, 'Quận Kiến An', 'Quận', '31'),
(308, 'Quận Đồ Sơn', 'Quận', '31'),
(309, 'Quận Dương Kinh', 'Quận', '31'),
(311, 'Huyện Thuỷ Nguyên', 'Huyện', '31'),
(312, 'Huyện An Dương', 'Huyện', '31'),
(313, 'Huyện An Lão', 'Huyện', '31'),
(314, 'Huyện Kiến Thuỵ', 'Huyện', '31'),
(315, 'Huyện Tiên Lãng', 'Huyện', '31'),
(316, 'Huyện Vĩnh Bảo', 'Huyện', '31'),
(317, 'Huyện Cát Hải', 'Huyện', '31'),
(318, 'Huyện Bạch Long Vĩ', 'Huyện', '31'),
(323, 'Thành phố Hưng Yên', 'Thành phố', '33'),
(325, 'Huyện Văn Lâm', 'Huyện', '33'),
(326, 'Huyện Văn Giang', 'Huyện', '33'),
(327, 'Huyện Yên Mỹ', 'Huyện', '33'),
(328, 'Huyện Mỹ Hào', 'Huyện', '33'),
(329, 'Huyện Ân Thi', 'Huyện', '33'),
(330, 'Huyện Khoái Châu', 'Huyện', '33'),
(331, 'Huyện Kim Động', 'Huyện', '33'),
(332, 'Huyện Tiên Lữ', 'Huyện', '33'),
(333, 'Huyện Phù Cừ', 'Huyện', '33'),
(336, 'Thành phố Thái Bình', 'Thành phố', '34'),
(338, 'Huyện Quỳnh Phụ', 'Huyện', '34'),
(339, 'Huyện Hưng Hà', 'Huyện', '34'),
(340, 'Huyện Đông Hưng', 'Huyện', '34'),
(341, 'Huyện Thái Thụy', 'Huyện', '34'),
(342, 'Huyện Tiền Hải', 'Huyện', '34'),
(343, 'Huyện Kiến Xương', 'Huyện', '34'),
(344, 'Huyện Vũ Thư', 'Huyện', '34'),
(347, 'Thành phố Phủ Lý', 'Thành phố', '35'),
(349, 'Huyện Duy Tiên', 'Huyện', '35'),
(350, 'Huyện Kim Bảng', 'Huyện', '35'),
(351, 'Huyện Thanh Liêm', 'Huyện', '35'),
(352, 'Huyện Bình Lục', 'Huyện', '35'),
(353, 'Huyện Lý Nhân', 'Huyện', '35'),
(356, 'Thành phố Nam Định', 'Thành phố', '36'),
(358, 'Huyện Mỹ Lộc', 'Huyện', '36'),
(359, 'Huyện Vụ Bản', 'Huyện', '36'),
(360, 'Huyện Ý Yên', 'Huyện', '36'),
(361, 'Huyện Nghĩa Hưng', 'Huyện', '36'),
(362, 'Huyện Nam Trực', 'Huyện', '36'),
(363, 'Huyện Trực Ninh', 'Huyện', '36'),
(364, 'Huyện Xuân Trường', 'Huyện', '36'),
(365, 'Huyện Giao Thủy', 'Huyện', '36'),
(366, 'Huyện Hải Hậu', 'Huyện', '36'),
(369, 'Thành phố Ninh Bình', 'Thành phố', '37'),
(370, 'Thành phố Tam Điệp', 'Thành phố', '37'),
(372, 'Huyện Nho Quan', 'Huyện', '37'),
(373, 'Huyện Gia Viễn', 'Huyện', '37'),
(374, 'Huyện Hoa Lư', 'Huyện', '37'),
(375, 'Huyện Yên Khánh', 'Huyện', '37'),
(376, 'Huyện Kim Sơn', 'Huyện', '37'),
(377, 'Huyện Yên Mô', 'Huyện', '37'),
(380, 'Thành phố Thanh Hóa', 'Thành phố', '38'),
(381, 'Thị xã Bỉm Sơn', 'Thị xã', '38'),
(382, 'Thị xã Sầm Sơn', 'Thị xã', '38'),
(384, 'Huyện Mường Lát', 'Huyện', '38'),
(385, 'Huyện Quan Hóa', 'Huyện', '38'),
(386, 'Huyện Bá Thước', 'Huyện', '38'),
(387, 'Huyện Quan Sơn', 'Huyện', '38'),
(388, 'Huyện Lang Chánh', 'Huyện', '38'),
(389, 'Huyện Ngọc Lặc', 'Huyện', '38'),
(390, 'Huyện Cẩm Thủy', 'Huyện', '38'),
(391, 'Huyện Thạch Thành', 'Huyện', '38'),
(392, 'Huyện Hà Trung', 'Huyện', '38'),
(393, 'Huyện Vĩnh Lộc', 'Huyện', '38'),
(394, 'Huyện Yên Định', 'Huyện', '38'),
(395, 'Huyện Thọ Xuân', 'Huyện', '38'),
(396, 'Huyện Thường Xuân', 'Huyện', '38'),
(397, 'Huyện Triệu Sơn', 'Huyện', '38'),
(398, 'Huyện Thiệu Hóa', 'Huyện', '38'),
(399, 'Huyện Hoằng Hóa', 'Huyện', '38'),
(400, 'Huyện Hậu Lộc', 'Huyện', '38'),
(401, 'Huyện Nga Sơn', 'Huyện', '38'),
(402, 'Huyện Như Xuân', 'Huyện', '38'),
(403, 'Huyện Như Thanh', 'Huyện', '38'),
(404, 'Huyện Nông Cống', 'Huyện', '38'),
(405, 'Huyện Đông Sơn', 'Huyện', '38'),
(406, 'Huyện Quảng Xương', 'Huyện', '38'),
(407, 'Huyện Tĩnh Gia', 'Huyện', '38'),
(412, 'Thành phố Vinh', 'Thành phố', '40'),
(413, 'Thị xã Cửa Lò', 'Thị xã', '40'),
(414, 'Thị xã Thái Hoà', 'Thị xã', '40'),
(415, 'Huyện Quế Phong', 'Huyện', '40'),
(416, 'Huyện Quỳ Châu', 'Huyện', '40'),
(417, 'Huyện Kỳ Sơn', 'Huyện', '40'),
(418, 'Huyện Tương Dương', 'Huyện', '40'),
(419, 'Huyện Nghĩa Đàn', 'Huyện', '40'),
(420, 'Huyện Quỳ Hợp', 'Huyện', '40'),
(421, 'Huyện Quỳnh Lưu', 'Huyện', '40'),
(422, 'Huyện Con Cuông', 'Huyện', '40'),
(423, 'Huyện Tân Kỳ', 'Huyện', '40'),
(424, 'Huyện Anh Sơn', 'Huyện', '40'),
(425, 'Huyện Diễn Châu', 'Huyện', '40'),
(426, 'Huyện Yên Thành', 'Huyện', '40'),
(427, 'Huyện Đô Lương', 'Huyện', '40'),
(428, 'Huyện Thanh Chương', 'Huyện', '40'),
(429, 'Huyện Nghi Lộc', 'Huyện', '40'),
(430, 'Huyện Nam Đàn', 'Huyện', '40'),
(431, 'Huyện Hưng Nguyên', 'Huyện', '40'),
(432, 'Thị xã Hoàng Mai', 'Thị xã', '40'),
(436, 'Thành phố Hà Tĩnh', 'Thành phố', '42'),
(437, 'Thị xã Hồng Lĩnh', 'Thị xã', '42'),
(439, 'Huyện Hương Sơn', 'Huyện', '42'),
(440, 'Huyện Đức Thọ', 'Huyện', '42'),
(441, 'Huyện Vũ Quang', 'Huyện', '42'),
(442, 'Huyện Nghi Xuân', 'Huyện', '42'),
(443, 'Huyện Can Lộc', 'Huyện', '42'),
(444, 'Huyện Hương Khê', 'Huyện', '42'),
(445, 'Huyện Thạch Hà', 'Huyện', '42'),
(446, 'Huyện Cẩm Xuyên', 'Huyện', '42'),
(447, 'Huyện Kỳ Anh', 'Huyện', '42'),
(448, 'Huyện Lộc Hà', 'Huyện', '42'),
(449, 'Thị xã Kỳ Anh', 'Thị xã', '42'),
(450, 'Thành Phố Đồng Hới', 'Thành phố', '44'),
(452, 'Huyện Minh Hóa', 'Huyện', '44'),
(453, 'Huyện Tuyên Hóa', 'Huyện', '44'),
(454, 'Huyện Quảng Trạch', 'Thị xã', '44'),
(455, 'Huyện Bố Trạch', 'Huyện', '44'),
(456, 'Huyện Quảng Ninh', 'Huyện', '44'),
(457, 'Huyện Lệ Thủy', 'Huyện', '44'),
(458, 'Thị xã Ba Đồn', 'Huyện', '44'),
(461, 'Thành phố Đông Hà', 'Thành phố', '45'),
(462, 'Thị xã Quảng Trị', 'Thị xã', '45'),
(464, 'Huyện Vĩnh Linh', 'Huyện', '45'),
(465, 'Huyện Hướng Hóa', 'Huyện', '45'),
(466, 'Huyện Gio Linh', 'Huyện', '45'),
(467, 'Huyện Đa Krông', 'Huyện', '45'),
(468, 'Huyện Cam Lộ', 'Huyện', '45'),
(469, 'Huyện Triệu Phong', 'Huyện', '45'),
(470, 'Huyện Hải Lăng', 'Huyện', '45'),
(471, 'Huyện Cồn Cỏ', 'Huyện', '45'),
(474, 'Thành phố Huế', 'Thành phố', '46'),
(476, 'Huyện Phong Điền', 'Huyện', '46'),
(477, 'Huyện Quảng Điền', 'Huyện', '46'),
(478, 'Huyện Phú Vang', 'Huyện', '46'),
(479, 'Thị xã Hương Thủy', 'Thị xã', '46'),
(480, 'Thị xã Hương Trà', 'Thị xã', '46'),
(481, 'Huyện A Lưới', 'Huyện', '46'),
(482, 'Huyện Phú Lộc', 'Huyện', '46'),
(483, 'Huyện Nam Đông', 'Huyện', '46'),
(490, 'Quận Liên Chiểu', 'Quận', '48'),
(491, 'Quận Thanh Khê', 'Quận', '48'),
(492, 'Quận Hải Châu', 'Quận', '48'),
(493, 'Quận Sơn Trà', 'Quận', '48'),
(494, 'Quận Ngũ Hành Sơn', 'Quận', '48'),
(495, 'Quận Cẩm Lệ', 'Quận', '48'),
(497, 'Huyện Hòa Vang', 'Huyện', '48'),
(498, 'Huyện Hoàng Sa', 'Huyện', '48'),
(502, 'Thành phố Tam Kỳ', 'Thành phố', '49'),
(503, 'Thành phố Hội An', 'Thành phố', '49'),
(504, 'Huyện Tây Giang', 'Huyện', '49'),
(505, 'Huyện Đông Giang', 'Huyện', '49'),
(506, 'Huyện Đại Lộc', 'Huyện', '49'),
(507, 'Thị xã Điện Bàn', 'Thị xã', '49'),
(508, 'Huyện Duy Xuyên', 'Huyện', '49'),
(509, 'Huyện Quế Sơn', 'Huyện', '49'),
(510, 'Huyện Nam Giang', 'Huyện', '49'),
(511, 'Huyện Phước Sơn', 'Huyện', '49'),
(512, 'Huyện Hiệp Đức', 'Huyện', '49'),
(513, 'Huyện Thăng Bình', 'Huyện', '49'),
(514, 'Huyện Tiên Phước', 'Huyện', '49'),
(515, 'Huyện Bắc Trà My', 'Huyện', '49'),
(516, 'Huyện Nam Trà My', 'Huyện', '49'),
(517, 'Huyện Núi Thành', 'Huyện', '49'),
(518, 'Huyện Phú Ninh', 'Huyện', '49'),
(519, 'Huyện Nông Sơn', 'Huyện', '49'),
(522, 'Thành phố Quảng Ngãi', 'Thành phố', '51'),
(524, 'Huyện Bình Sơn', 'Huyện', '51'),
(525, 'Huyện Trà Bồng', 'Huyện', '51'),
(526, 'Huyện Tây Trà', 'Huyện', '51'),
(527, 'Huyện Sơn Tịnh', 'Huyện', '51'),
(528, 'Huyện Tư Nghĩa', 'Huyện', '51'),
(529, 'Huyện Sơn Hà', 'Huyện', '51'),
(530, 'Huyện Sơn Tây', 'Huyện', '51'),
(531, 'Huyện Minh Long', 'Huyện', '51'),
(532, 'Huyện Nghĩa Hành', 'Huyện', '51'),
(533, 'Huyện Mộ Đức', 'Huyện', '51'),
(534, 'Huyện Đức Phổ', 'Huyện', '51'),
(535, 'Huyện Ba Tơ', 'Huyện', '51'),
(536, 'Huyện Lý Sơn', 'Huyện', '51'),
(540, 'Thành phố Qui Nhơn', 'Thành phố', '52'),
(542, 'Huyện An Lão', 'Huyện', '52'),
(543, 'Huyện Hoài Nhơn', 'Huyện', '52'),
(544, 'Huyện Hoài Ân', 'Huyện', '52'),
(545, 'Huyện Phù Mỹ', 'Huyện', '52'),
(546, 'Huyện Vĩnh Thạnh', 'Huyện', '52'),
(547, 'Huyện Tây Sơn', 'Huyện', '52'),
(548, 'Huyện Phù Cát', 'Huyện', '52'),
(549, 'Thị xã An Nhơn', 'Thị xã', '52'),
(550, 'Huyện Tuy Phước', 'Huyện', '52'),
(551, 'Huyện Vân Canh', 'Huyện', '52'),
(555, 'Thành phố Tuy Hoà', 'Thành phố', '54'),
(557, 'Thị xã Sông Cầu', 'Thị xã', '54'),
(558, 'Huyện Đồng Xuân', 'Huyện', '54'),
(559, 'Huyện Tuy An', 'Huyện', '54'),
(560, 'Huyện Sơn Hòa', 'Huyện', '54'),
(561, 'Huyện Sông Hinh', 'Huyện', '54'),
(562, 'Huyện Tây Hoà', 'Huyện', '54'),
(563, 'Huyện Phú Hoà', 'Huyện', '54'),
(564, 'Huyện Đông Hòa', 'Huyện', '54'),
(568, 'Thành phố Nha Trang', 'Thành phố', '56'),
(569, 'Thành phố Cam Ranh', 'Thành phố', '56'),
(570, 'Huyện Cam Lâm', 'Huyện', '56'),
(571, 'Huyện Vạn Ninh', 'Huyện', '56'),
(572, 'Thị xã Ninh Hòa', 'Thị xã', '56'),
(573, 'Huyện Khánh Vĩnh', 'Huyện', '56'),
(574, 'Huyện Diên Khánh', 'Huyện', '56'),
(575, 'Huyện Khánh Sơn', 'Huyện', '56'),
(576, 'Huyện Trường Sa', 'Huyện', '56'),
(582, 'Thành phố Phan Rang-Tháp Chàm', 'Thành phố', '58'),
(584, 'Huyện Bác Ái', 'Huyện', '58'),
(585, 'Huyện Ninh Sơn', 'Huyện', '58'),
(586, 'Huyện Ninh Hải', 'Huyện', '58'),
(587, 'Huyện Ninh Phước', 'Huyện', '58'),
(588, 'Huyện Thuận Bắc', 'Huyện', '58'),
(589, 'Huyện Thuận Nam', 'Huyện', '58'),
(593, 'Thành phố Phan Thiết', 'Thành phố', '60'),
(594, 'Thị xã La Gi', 'Thị xã', '60'),
(595, 'Huyện Tuy Phong', 'Huyện', '60'),
(596, 'Huyện Bắc Bình', 'Huyện', '60'),
(597, 'Huyện Hàm Thuận Bắc', 'Huyện', '60'),
(598, 'Huyện Hàm Thuận Nam', 'Huyện', '60'),
(599, 'Huyện Tánh Linh', 'Huyện', '60'),
(600, 'Huyện Đức Linh', 'Huyện', '60'),
(601, 'Huyện Hàm Tân', 'Huyện', '60'),
(602, 'Huyện Phú Quí', 'Huyện', '60'),
(608, 'Thành phố Kon Tum', 'Thành phố', '62'),
(610, 'Huyện Đắk Glei', 'Huyện', '62'),
(611, 'Huyện Ngọc Hồi', 'Huyện', '62'),
(612, 'Huyện Đắk Tô', 'Huyện', '62'),
(613, 'Huyện Kon Plông', 'Huyện', '62'),
(614, 'Huyện Kon Rẫy', 'Huyện', '62'),
(615, 'Huyện Đắk Hà', 'Huyện', '62'),
(616, 'Huyện Sa Thầy', 'Huyện', '62'),
(617, 'Huyện Tu Mơ Rông', 'Huyện', '62'),
(618, 'Huyện Ia H\' Drai', 'Huyện', '62'),
(622, 'Thành phố Pleiku', 'Thành phố', '64'),
(623, 'Thị xã An Khê', 'Thị xã', '64'),
(624, 'Thị xã Ayun Pa', 'Thị xã', '64'),
(625, 'Huyện KBang', 'Huyện', '64'),
(626, 'Huyện Đăk Đoa', 'Huyện', '64'),
(627, 'Huyện Chư Păh', 'Huyện', '64'),
(628, 'Huyện Ia Grai', 'Huyện', '64'),
(629, 'Huyện Mang Yang', 'Huyện', '64'),
(630, 'Huyện Kông Chro', 'Huyện', '64'),
(631, 'Huyện Đức Cơ', 'Huyện', '64'),
(632, 'Huyện Chư Prông', 'Huyện', '64'),
(633, 'Huyện Chư Sê', 'Huyện', '64'),
(634, 'Huyện Đăk Pơ', 'Huyện', '64'),
(635, 'Huyện Ia Pa', 'Huyện', '64'),
(637, 'Huyện Krông Pa', 'Huyện', '64'),
(638, 'Huyện Phú Thiện', 'Huyện', '64'),
(639, 'Huyện Chư Pưh', 'Huyện', '64'),
(643, 'Thành phố Buôn Ma Thuột', 'Thành phố', '66'),
(644, 'Thị Xã Buôn Hồ', 'Thị xã', '66'),
(645, 'Huyện Ea H\'leo', 'Huyện', '66'),
(646, 'Huyện Ea Súp', 'Huyện', '66'),
(647, 'Huyện Buôn Đôn', 'Huyện', '66'),
(648, 'Huyện Cư M\'gar', 'Huyện', '66'),
(649, 'Huyện Krông Búk', 'Huyện', '66'),
(650, 'Huyện Krông Năng', 'Huyện', '66'),
(651, 'Huyện Ea Kar', 'Huyện', '66'),
(652, 'Huyện M\'Đrắk', 'Huyện', '66'),
(653, 'Huyện Krông Bông', 'Huyện', '66'),
(654, 'Huyện Krông Pắc', 'Huyện', '66'),
(655, 'Huyện Krông A Na', 'Huyện', '66'),
(656, 'Huyện Lắk', 'Huyện', '66'),
(657, 'Huyện Cư Kuin', 'Huyện', '66'),
(660, 'Thị xã Gia Nghĩa', 'Thị xã', '67'),
(661, 'Huyện Đăk Glong', 'Huyện', '67'),
(662, 'Huyện Cư Jút', 'Huyện', '67'),
(663, 'Huyện Đắk Mil', 'Huyện', '67'),
(664, 'Huyện Krông Nô', 'Huyện', '67'),
(665, 'Huyện Đắk Song', 'Huyện', '67'),
(666, 'Huyện Đắk R\'Lấp', 'Huyện', '67'),
(667, 'Huyện Tuy Đức', 'Huyện', '67'),
(672, 'Thành phố Đà Lạt', 'Thành phố', '68'),
(673, 'Thành phố Bảo Lộc', 'Thành phố', '68'),
(674, 'Huyện Đam Rông', 'Huyện', '68'),
(675, 'Huyện Lạc Dương', 'Huyện', '68'),
(676, 'Huyện Lâm Hà', 'Huyện', '68'),
(677, 'Huyện Đơn Dương', 'Huyện', '68'),
(678, 'Huyện Đức Trọng', 'Huyện', '68'),
(679, 'Huyện Di Linh', 'Huyện', '68'),
(680, 'Huyện Bảo Lâm', 'Huyện', '68'),
(681, 'Huyện Đạ Huoai', 'Huyện', '68'),
(682, 'Huyện Đạ Tẻh', 'Huyện', '68'),
(683, 'Huyện Cát Tiên', 'Huyện', '68'),
(688, 'Thị xã Phước Long', 'Thị xã', '70'),
(689, 'Thị xã Đồng Xoài', 'Thị xã', '70'),
(690, 'Thị xã Bình Long', 'Thị xã', '70'),
(691, 'Huyện Bù Gia Mập', 'Huyện', '70'),
(692, 'Huyện Lộc Ninh', 'Huyện', '70'),
(693, 'Huyện Bù Đốp', 'Huyện', '70'),
(694, 'Huyện Hớn Quản', 'Huyện', '70'),
(695, 'Huyện Đồng Phú', 'Huyện', '70'),
(696, 'Huyện Bù Đăng', 'Huyện', '70'),
(697, 'Huyện Chơn Thành', 'Huyện', '70'),
(698, 'Huyện Phú Riềng', 'Huyện', '70'),
(703, 'Thành phố Tây Ninh', 'Thành phố', '72'),
(705, 'Huyện Tân Biên', 'Huyện', '72'),
(706, 'Huyện Tân Châu', 'Huyện', '72'),
(707, 'Huyện Dương Minh Châu', 'Huyện', '72'),
(708, 'Huyện Châu Thành', 'Huyện', '72'),
(709, 'Huyện Hòa Thành', 'Huyện', '72'),
(710, 'Huyện Gò Dầu', 'Huyện', '72'),
(711, 'Huyện Bến Cầu', 'Huyện', '72'),
(712, 'Huyện Trảng Bàng', 'Huyện', '72'),
(718, 'Thành phố Thủ Dầu Một', 'Thành phố', '74'),
(719, 'Huyện Bàu Bàng', 'Huyện', '74'),
(720, 'Huyện Dầu Tiếng', 'Huyện', '74'),
(721, 'Thị xã Bến Cát', 'Thị xã', '74'),
(722, 'Huyện Phú Giáo', 'Huyện', '74'),
(723, 'Thị xã Tân Uyên', 'Thị xã', '74'),
(724, 'Thị xã Dĩ An', 'Thị xã', '74'),
(725, 'Thị xã Thuận An', 'Thị xã', '74'),
(726, 'Huyện Bắc Tân Uyên', 'Huyện', '74'),
(731, 'Thành phố Biên Hòa', 'Thành phố', '75'),
(732, 'Thị xã Long Khánh', 'Thị xã', '75'),
(734, 'Huyện Tân Phú', 'Huyện', '75'),
(735, 'Huyện Vĩnh Cửu', 'Huyện', '75'),
(736, 'Huyện Định Quán', 'Huyện', '75'),
(737, 'Huyện Trảng Bom', 'Huyện', '75'),
(738, 'Huyện Thống Nhất', 'Huyện', '75'),
(739, 'Huyện Cẩm Mỹ', 'Huyện', '75'),
(740, 'Huyện Long Thành', 'Huyện', '75'),
(741, 'Huyện Xuân Lộc', 'Huyện', '75'),
(742, 'Huyện Nhơn Trạch', 'Huyện', '75'),
(747, 'Thành phố Vũng Tàu', 'Thành phố', '77'),
(748, 'Thành phố Bà Rịa', 'Thành phố', '77'),
(750, 'Huyện Châu Đức', 'Huyện', '77'),
(751, 'Huyện Xuyên Mộc', 'Huyện', '77'),
(752, 'Huyện Long Điền', 'Huyện', '77'),
(753, 'Huyện Đất Đỏ', 'Huyện', '77'),
(754, 'Huyện Tân Thành', 'Huyện', '77'),
(755, 'Huyện Côn Đảo', 'Huyện', '77'),
(760, 'Quận 1', 'Quận', '79'),
(761, 'Quận 12', 'Quận', '79'),
(762, 'Quận Thủ Đức', 'Quận', '79'),
(763, 'Quận 9', 'Quận', '79'),
(764, 'Quận Gò Vấp', 'Quận', '79'),
(765, 'Quận Bình Thạnh', 'Quận', '79'),
(766, 'Quận Tân Bình', 'Quận', '79'),
(767, 'Quận Tân Phú', 'Quận', '79'),
(768, 'Quận Phú Nhuận', 'Quận', '79'),
(769, 'Quận 2', 'Quận', '79'),
(770, 'Quận 3', 'Quận', '79'),
(771, 'Quận 10', 'Quận', '79'),
(772, 'Quận 11', 'Quận', '79'),
(773, 'Quận 4', 'Quận', '79'),
(774, 'Quận 5', 'Quận', '79'),
(775, 'Quận 6', 'Quận', '79'),
(776, 'Quận 8', 'Quận', '79'),
(777, 'Quận Bình Tân', 'Quận', '79'),
(778, 'Quận 7', 'Quận', '79'),
(783, 'Huyện Củ Chi', 'Huyện', '79'),
(784, 'Huyện Hóc Môn', 'Huyện', '79'),
(785, 'Huyện Bình Chánh', 'Huyện', '79'),
(786, 'Huyện Nhà Bè', 'Huyện', '79'),
(787, 'Huyện Cần Giờ', 'Huyện', '79'),
(794, 'Thành phố Tân An', 'Thành phố', '80'),
(795, 'Thị xã Kiến Tường', 'Thị xã', '80'),
(796, 'Huyện Tân Hưng', 'Huyện', '80'),
(797, 'Huyện Vĩnh Hưng', 'Huyện', '80'),
(798, 'Huyện Mộc Hóa', 'Huyện', '80'),
(799, 'Huyện Tân Thạnh', 'Huyện', '80'),
(800, 'Huyện Thạnh Hóa', 'Huyện', '80'),
(801, 'Huyện Đức Huệ', 'Huyện', '80'),
(802, 'Huyện Đức Hòa', 'Huyện', '80'),
(803, 'Huyện Bến Lức', 'Huyện', '80'),
(804, 'Huyện Thủ Thừa', 'Huyện', '80'),
(805, 'Huyện Tân Trụ', 'Huyện', '80'),
(806, 'Huyện Cần Đước', 'Huyện', '80'),
(807, 'Huyện Cần Giuộc', 'Huyện', '80'),
(808, 'Huyện Châu Thành', 'Huyện', '80'),
(815, 'Thành phố Mỹ Tho', 'Thành phố', '82'),
(816, 'Thị xã Gò Công', 'Thị xã', '82'),
(817, 'Thị xã Cai Lậy', 'Huyện', '82'),
(818, 'Huyện Tân Phước', 'Huyện', '82'),
(819, 'Huyện Cái Bè', 'Huyện', '82'),
(820, 'Huyện Cai Lậy', 'Thị xã', '82'),
(821, 'Huyện Châu Thành', 'Huyện', '82'),
(822, 'Huyện Chợ Gạo', 'Huyện', '82'),
(823, 'Huyện Gò Công Tây', 'Huyện', '82'),
(824, 'Huyện Gò Công Đông', 'Huyện', '82'),
(825, 'Huyện Tân Phú Đông', 'Huyện', '82'),
(829, 'Thành phố Bến Tre', 'Thành phố', '83'),
(831, 'Huyện Châu Thành', 'Huyện', '83'),
(832, 'Huyện Chợ Lách', 'Huyện', '83'),
(833, 'Huyện Mỏ Cày Nam', 'Huyện', '83'),
(834, 'Huyện Giồng Trôm', 'Huyện', '83'),
(835, 'Huyện Bình Đại', 'Huyện', '83'),
(836, 'Huyện Ba Tri', 'Huyện', '83'),
(837, 'Huyện Thạnh Phú', 'Huyện', '83'),
(838, 'Huyện Mỏ Cày Bắc', 'Huyện', '83'),
(842, 'Thành phố Trà Vinh', 'Thành phố', '84'),
(844, 'Huyện Càng Long', 'Huyện', '84'),
(845, 'Huyện Cầu Kè', 'Huyện', '84'),
(846, 'Huyện Tiểu Cần', 'Huyện', '84'),
(847, 'Huyện Châu Thành', 'Huyện', '84'),
(848, 'Huyện Cầu Ngang', 'Huyện', '84'),
(849, 'Huyện Trà Cú', 'Huyện', '84'),
(850, 'Huyện Duyên Hải', 'Huyện', '84'),
(851, 'Thị xã Duyên Hải', 'Thị xã', '84'),
(855, 'Thành phố Vĩnh Long', 'Thành phố', '86'),
(857, 'Huyện Long Hồ', 'Huyện', '86'),
(858, 'Huyện Mang Thít', 'Huyện', '86'),
(859, 'Huyện  Vũng Liêm', 'Huyện', '86'),
(860, 'Huyện Tam Bình', 'Huyện', '86'),
(861, 'Thị xã Bình Minh', 'Thị xã', '86'),
(862, 'Huyện Trà Ôn', 'Huyện', '86'),
(863, 'Huyện Bình Tân', 'Huyện', '86'),
(866, 'Thành phố Cao Lãnh', 'Thành phố', '87'),
(867, 'Thành phố Sa Đéc', 'Thành phố', '87'),
(868, 'Thị xã Hồng Ngự', 'Thị xã', '87'),
(869, 'Huyện Tân Hồng', 'Huyện', '87'),
(870, 'Huyện Hồng Ngự', 'Huyện', '87'),
(871, 'Huyện Tam Nông', 'Huyện', '87'),
(872, 'Huyện Tháp Mười', 'Huyện', '87'),
(873, 'Huyện Cao Lãnh', 'Huyện', '87'),
(874, 'Huyện Thanh Bình', 'Huyện', '87'),
(875, 'Huyện Lấp Vò', 'Huyện', '87'),
(876, 'Huyện Lai Vung', 'Huyện', '87'),
(877, 'Huyện Châu Thành', 'Huyện', '87'),
(883, 'Thành phố Long Xuyên', 'Thành phố', '89'),
(884, 'Thành phố Châu Đốc', 'Thành phố', '89'),
(886, 'Huyện An Phú', 'Huyện', '89'),
(887, 'Thị xã Tân Châu', 'Thị xã', '89'),
(888, 'Huyện Phú Tân', 'Huyện', '89'),
(889, 'Huyện Châu Phú', 'Huyện', '89'),
(890, 'Huyện Tịnh Biên', 'Huyện', '89'),
(891, 'Huyện Tri Tôn', 'Huyện', '89'),
(892, 'Huyện Châu Thành', 'Huyện', '89'),
(893, 'Huyện Chợ Mới', 'Huyện', '89'),
(894, 'Huyện Thoại Sơn', 'Huyện', '89'),
(899, 'Thành phố Rạch Giá', 'Thành phố', '91'),
(900, 'Thị xã Hà Tiên', 'Thị xã', '91'),
(902, 'Huyện Kiên Lương', 'Huyện', '91'),
(903, 'Huyện Hòn Đất', 'Huyện', '91'),
(904, 'Huyện Tân Hiệp', 'Huyện', '91'),
(905, 'Huyện Châu Thành', 'Huyện', '91'),
(906, 'Huyện Giồng Riềng', 'Huyện', '91'),
(907, 'Huyện Gò Quao', 'Huyện', '91'),
(908, 'Huyện An Biên', 'Huyện', '91'),
(909, 'Huyện An Minh', 'Huyện', '91'),
(910, 'Huyện Vĩnh Thuận', 'Huyện', '91'),
(911, 'Huyện Phú Quốc', 'Huyện', '91'),
(912, 'Huyện Kiên Hải', 'Huyện', '91'),
(913, 'Huyện U Minh Thượng', 'Huyện', '91'),
(914, 'Huyện Giang Thành', 'Huyện', '91'),
(916, 'Quận Ninh Kiều', 'Quận', '92'),
(917, 'Quận Ô Môn', 'Quận', '92'),
(918, 'Quận Bình Thuỷ', 'Quận', '92'),
(919, 'Quận Cái Răng', 'Quận', '92'),
(923, 'Quận Thốt Nốt', 'Quận', '92'),
(924, 'Huyện Vĩnh Thạnh', 'Huyện', '92'),
(925, 'Huyện Cờ Đỏ', 'Huyện', '92'),
(926, 'Huyện Phong Điền', 'Huyện', '92'),
(927, 'Huyện Thới Lai', 'Huyện', '92'),
(930, 'Thành phố Vị Thanh', 'Thành phố', '93'),
(931, 'Thị xã Ngã Bảy', 'Thị xã', '93'),
(932, 'Huyện Châu Thành A', 'Huyện', '93'),
(933, 'Huyện Châu Thành', 'Huyện', '93'),
(934, 'Huyện Phụng Hiệp', 'Huyện', '93'),
(935, 'Huyện Vị Thuỷ', 'Huyện', '93'),
(936, 'Huyện Long Mỹ', 'Huyện', '93'),
(937, 'Thị xã Long Mỹ', 'Thị xã', '93'),
(941, 'Thành phố Sóc Trăng', 'Thành phố', '94'),
(942, 'Huyện Châu Thành', 'Huyện', '94'),
(943, 'Huyện Kế Sách', 'Huyện', '94'),
(944, 'Huyện Mỹ Tú', 'Huyện', '94'),
(945, 'Huyện Cù Lao Dung', 'Huyện', '94'),
(946, 'Huyện Long Phú', 'Huyện', '94'),
(947, 'Huyện Mỹ Xuyên', 'Huyện', '94'),
(948, 'Thị xã Ngã Năm', 'Thị xã', '94'),
(949, 'Huyện Thạnh Trị', 'Huyện', '94'),
(950, 'Thị xã Vĩnh Châu', 'Thị xã', '94'),
(951, 'Huyện Trần Đề', 'Huyện', '94'),
(954, 'Thành phố Bạc Liêu', 'Thành phố', '95'),
(956, 'Huyện Hồng Dân', 'Huyện', '95'),
(957, 'Huyện Phước Long', 'Huyện', '95'),
(958, 'Huyện Vĩnh Lợi', 'Huyện', '95'),
(959, 'Thị xã Giá Rai', 'Thị xã', '95'),
(960, 'Huyện Đông Hải', 'Huyện', '95'),
(961, 'Huyện Hoà Bình', 'Huyện', '95'),
(964, 'Thành phố Cà Mau', 'Thành phố', '96'),
(966, 'Huyện U Minh', 'Huyện', '96'),
(967, 'Huyện Thới Bình', 'Huyện', '96'),
(968, 'Huyện Trần Văn Thời', 'Huyện', '96'),
(969, 'Huyện Cái Nước', 'Huyện', '96'),
(970, 'Huyện Đầm Dơi', 'Huyện', '96'),
(971, 'Huyện Năm Căn', 'Huyện', '96'),
(972, 'Huyện Phú Tân', 'Huyện', '96'),
(973, 'Huyện Ngọc Hiển', 'Huyện', '96');

-- --------------------------------------------------------

--
-- Table structure for table `devvn_tinhthanhpho`
--

CREATE TABLE `devvn_tinhthanhpho` (
  `matp` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `devvn_tinhthanhpho`
--

INSERT INTO `devvn_tinhthanhpho` (`matp`, `name`, `type`) VALUES
(1, 'Thành phố Hà Nội', 'Thành phố Trung ương'),
(2, 'Tỉnh Hà Giang', 'Tỉnh'),
(4, 'Tỉnh Cao Bằng', 'Tỉnh'),
(6, 'Tỉnh Bắc Kạn', 'Tỉnh'),
(8, 'Tỉnh Tuyên Quang', 'Tỉnh'),
(10, 'Tỉnh Lào Cai', 'Tỉnh'),
(11, 'Tỉnh Điện Biên', 'Tỉnh'),
(12, 'Tỉnh Lai Châu', 'Tỉnh'),
(14, 'Tỉnh Sơn La', 'Tỉnh'),
(15, 'Tỉnh Yên Bái', 'Tỉnh'),
(17, 'Tỉnh Hoà Bình', 'Tỉnh'),
(19, 'Tỉnh Thái Nguyên', 'Tỉnh'),
(20, 'Tỉnh Lạng Sơn', 'Tỉnh'),
(22, 'Tỉnh Quảng Ninh', 'Tỉnh'),
(24, 'Tỉnh Bắc Giang', 'Tỉnh'),
(25, 'Tỉnh Phú Thọ', 'Tỉnh'),
(26, 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
(27, 'Tỉnh Bắc Ninh', 'Tỉnh'),
(30, 'Tỉnh Hải Dương', 'Tỉnh'),
(31, 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
(33, 'Tỉnh Hưng Yên', 'Tỉnh'),
(34, 'Tỉnh Thái Bình', 'Tỉnh'),
(35, 'Tỉnh Hà Nam', 'Tỉnh'),
(36, 'Tỉnh Nam Định', 'Tỉnh'),
(37, 'Tỉnh Ninh Bình', 'Tỉnh'),
(38, 'Tỉnh Thanh Hóa', 'Tỉnh'),
(40, 'Tỉnh Nghệ An', 'Tỉnh'),
(42, 'Tỉnh Hà Tĩnh', 'Tỉnh'),
(44, 'Tỉnh Quảng Bình', 'Tỉnh'),
(45, 'Tỉnh Quảng Trị', 'Tỉnh'),
(46, 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
(48, 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
(49, 'Tỉnh Quảng Nam', 'Tỉnh'),
(51, 'Tỉnh Quảng Ngãi', 'Tỉnh'),
(52, 'Tỉnh Bình Định', 'Tỉnh'),
(54, 'Tỉnh Phú Yên', 'Tỉnh'),
(56, 'Tỉnh Khánh Hòa', 'Tỉnh'),
(58, 'Tỉnh Ninh Thuận', 'Tỉnh'),
(60, 'Tỉnh Bình Thuận', 'Tỉnh'),
(62, 'Tỉnh Kon Tum', 'Tỉnh'),
(64, 'Tỉnh Gia Lai', 'Tỉnh'),
(66, 'Tỉnh Đắk Lắk', 'Tỉnh'),
(67, 'Tỉnh Đắk Nông', 'Tỉnh'),
(68, 'Tỉnh Lâm Đồng', 'Tỉnh'),
(70, 'Tỉnh Bình Phước', 'Tỉnh'),
(72, 'Tỉnh Tây Ninh', 'Tỉnh'),
(74, 'Tỉnh Bình Dương', 'Tỉnh'),
(75, 'Tỉnh Đồng Nai', 'Tỉnh'),
(77, 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
(79, 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
(80, 'Tỉnh Long An', 'Tỉnh'),
(82, 'Tỉnh Tiền Giang', 'Tỉnh'),
(83, 'Tỉnh Bến Tre', 'Tỉnh'),
(84, 'Tỉnh Trà Vinh', 'Tỉnh'),
(86, 'Tỉnh Vĩnh Long', 'Tỉnh'),
(87, 'Tỉnh Đồng Tháp', 'Tỉnh'),
(89, 'Tỉnh An Giang', 'Tỉnh'),
(91, 'Tỉnh Kiên Giang', 'Tỉnh'),
(92, 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
(93, 'Tỉnh Hậu Giang', 'Tỉnh'),
(94, 'Tỉnh Sóc Trăng', 'Tỉnh'),
(95, 'Tỉnh Bạc Liêu', 'Tỉnh'),
(96, 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Table structure for table `library_images`
--

CREATE TABLE `library_images` (
  `id_img` int(11) NOT NULL,
  `picture` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_images`
--

INSERT INTO `library_images` (`id_img`, `picture`, `spid`) VALUES
(1, 'lib/vAToqTliNePj6LuDfprQGLDKHReSMh3BEB3XT8MN.png', 2),
(2, 'lib/qW4mfGXjVoeos8xbxZPTX8JvHrPfX52c43OIvl2U.jpeg', 2),
(3, 'lib/asdkgashdgasjkdhj.png', 3),
(4, 'lib/KkIfsdMKdUYmG5xP38SjBk0tH0aZ0PMvjQmViWw4.png', 3),
(8, 'lib/v8F4opFVFPfoxo45jlWgIifUMUzojD7Axz3aqW49.png', 1),
(9, 'lib/vKHEFFtvdYkh9EztkuxHSXuQ4jlp9rrEMLWSlm8E.png', 1),
(10, 'lib/r39gKZJTVf5TW0yiCIL4t8YF2MRieWXEyektnslr.jpeg', 1),
(11, 'lib/wJujxUNDpx1n3ufHsSyJ8ugEIxU3dkFIBBtbp0nd.png', 3),
(12, 'lib/YOrgWyqu56MoI6QGDFr4rhGLt5MTpvkp922SaCyD.png', 4),
(13, 'lib/9BiRnuQFuD6p7MLMyyRoNmMtLXTdiig3DIi3s0oi.png', 4),
(14, 'lib/QtF6srLIq2D5eysoEVxS0i6b69RYrR7dKeoacYx0.png', 4),
(15, 'lib/RtM139mPCtndiMeFAhMUOsijCewSn9T3JJE9WaAD.png', 5),
(16, 'lib/vgsCr2ymwCUS6Lw8uOZIYy8e0yZkHngaidddiIDo.png', 5),
(17, 'lib/JKs7NjFgGi4q3FzrL6lajMm4l627JBVkdxm8dY4J.png', 5),
(18, 'lib/In0y3VYemjZs1VqXp8bcz1xWjLYr4aXTqOR4Iloy.png', 6),
(19, 'lib/giyw4GbpWBqyR52eaWtqKuPDUS4pXQPizlLmQXR1.png', 6),
(20, 'lib/x10eE9d10Giew9KM9RU8xv2yx8S7eadJDT1BZrJV.png', 6),
(21, 'lib/SSYMysM6iiGTrIPCrIfOIF3RGip0Wuwk8P9doTPb.png', 7),
(22, 'lib/sH68Qi69iXlfJVfxy6HYnEaR4kIS4rWSMBIrU8b5.png', 7),
(23, 'lib/oONZCpd0hw3xU5S4QsOM7SHPcwWwcGNkf4a41LYn.png', 7),
(24, 'lib/rIYKrvcHB3Xb9CTczorKEX5f0IgDorPaw1ZTZXj9.png', 8),
(25, 'lib/KQKOyg1GhlksV9HMhiKaP1yK6n3hEBFApv8Tiki0.png', 8),
(26, 'lib/26ScZupBtKo3DlSgy2X414zegAjtqHesvWyPqByh.png', 8),
(27, 'lib/YwtyzPYqd4pWSENiyy4KdAvHd28Aec85YeBVRZ2A.png', 9),
(28, 'lib/y5Ndat1j5Ikx1v7CWSp5dFbK0YLxyLiTCUG58hSg.png', 9),
(29, 'lib/eNBQdxASl4NcbmerJRK56o9mzH0QBGMvR9iYcyYy.png', 9),
(30, 'lib/G4rQoyI2nLfn0PutCVcEwXoGi7b0MPjAPRcsFDw8.png', 10),
(31, 'lib/m7zUhT1thzffqPXtKlmZp3kVUil2j0zbBr11o9vp.png', 10),
(32, 'lib/uwAiYYPLeECwVuuTMwdvadzPqXP5mORptOkaJABy.png', 10),
(33, 'lib/y4dh1vcnZUKTEWeyAuxDN8y4J0ZK0OHQM1GxlWJH.png', 11),
(34, 'lib/Vlgcsx7D7hl9727XEDR9zGjC7OFPpDwaJBLcBDer.png', 11),
(35, 'lib/JEi13J9DKSi1VT4RvMcIN6mVNv5v94NJpmw6QQxd.png', 11),
(36, 'lib/u56843ziqZaklrrb2LDEMhFQT8JwzvUeVcm5RJVG.png', 13),
(37, 'lib/tJH1tXNkHSSN59XYEhcfkO0rB4xXpR0dekXHyV3u.png', 13),
(38, 'lib/1GhCLBRENA0DZHY16IJLe5IkP8euIiyFc52StMtM.png', 13),
(39, 'lib/mbp1b16gkDuJ20JzapOgU2o8UmTuIKjCAT7GxfRW.png', 14),
(40, 'lib/74uErWxTWZAUnf2qV1gkoFeNtOWK2Wwuf5K4X0JQ.png', 14),
(41, 'lib/0xQXFYc56emDjQW0XpTJHaGt5gtNjcsCUcSQBCFQ.png', 14),
(42, 'lib/am715frAmNiyVUiwi14pt3gsOqlUxZpxHvpEaMkR.png', 15),
(43, 'lib/YyTSMK28DfnRshYTbUaOEqtRHCtft8cIhzscceue.png', 15),
(44, 'lib/kHgXOLbzr1c72sgQ26D4hU0t7mqjXEj7o9KgqmWl.png', 15),
(45, 'lib/c6xMez7HMtnsc41uAtHFVeIbRY7jI99A6mOmbPbx.png', 16),
(46, 'lib/R7UEpFjyH2JO8WNQBdXBUpY7VHuBk6lPs5CNCq7j.png', 16),
(47, 'lib/ZgVjATD4J3AoNtLeuh3kBuGxzInUHacXvOpR19XA.png', 16),
(48, 'lib/U48RATcRTLlTtIa8vk33zPjpAIVxODlYuylLn5jH.png', 19),
(49, 'lib/v4KEyfWpzL4zLHYhFELQzixrdkYPsS0dsciuV3eQ.png', 19),
(50, 'lib/B69FgtCtG3U0nAf8zLQHL0EVdffqznbMXzh6Dc6f.png', 19),
(51, 'lib/tLCCHg5FuREqN32DuHLwAjZIVtQpjgVHBfcRcmCy.png', 20),
(52, 'lib/KY3JSiFDWF3fX4lfLFyVjZNq2RC7XmWLwb7SSkbz.png', 20),
(53, 'lib/MhPhmywEJUAqpc5dMv6mQZT7Nm1Lxn6TzMYtfjvU.png', 20),
(54, 'lib/iPTjking9yFrMAI1yX4GNaUBWwqs5yRD6Uv1i9sx.png', 21),
(55, 'lib/jO0ZHBFzum5O5c9q0LalDRIV3k5MxBIQI3vfEVmN.png', 21),
(56, 'lib/flapp8xMQBIJ1ToDKHeZ0IZdEt96bQI4zmENt1US.png', 21),
(57, 'lib/lpBKzTcGP1rpNlxXl9DdCb5u4ZDf9nA4LqR4WWv8.png', 22),
(58, 'lib/OxIh94mYgisZnQPy8cg73dPRa3jza54xFSCt9slu.png', 22),
(59, 'lib/Q5z8Rr1PIlqKZNCl7fJqLpL87GZu145ZIXHnFNYu.png', 22),
(60, 'lib/frPLGoCLozJ8GSFCEtt5wVbHEffyKq9MJdUKVNc3.png', 23),
(61, 'lib/q0LYnJDJB3qoxGHzch3Gidm14TewsBK1gm4xYcNW.png', 23),
(62, 'lib/Uh5OOLYeaFTVYamkaCAyoKpCdq15zfsnaXjkY623.png', 23),
(63, 'lib/8DwhRNBVCAoW79Gtr5HH1b52IMQIB5TAM5BQ1tky.png', 24),
(64, 'lib/yMNcfosx9a2dM1qruJ7EK0mh2sYpnwkiYg2QUB11.png', 24),
(65, 'lib/4q8cAWvEThnqhzjG6tfkWiWeQlVtJR1pd1lNdofl.png', 24),
(66, 'lib/5nscsKMErWGnjOLFMekRw09UmmUJUV59u1GoqfzL.png', 25),
(67, 'lib/riFiIfboonVWZE7gz1OZUQXpwX2WLKVUSuc0uOiy.png', 25),
(68, 'lib/0u2MqEQaONkx3uxZ0mxW8V5mCqgeeWO2ngItDos9.png', 25),
(69, 'lib/gP7CKnFiQbatXtG6Ve7JRQfkdDQF4t59g7e2xzSr.png', 26),
(70, 'lib/jXxLkwrSUd3oCSjHoA4rA4z3Z0jL5hO21WWr87ZL.png', 26),
(71, 'lib/Ro7jY8OQU0sNF19byGLgbcMlMJEV2codvgVXzgfE.png', 26),
(72, 'lib/rWbBn4YnSogXqZG9TZiJzaciFc3pITfStgtZNo0B.png', 27),
(73, 'lib/FoVlUYjmTD6sO4ljhgwpUYdHv15Yc5u1dBUYSqKx.png', 27),
(74, 'lib/5J7LbHQdKxCKxL94X0oy2bHkBlo6pqnsoWLlgqd5.png', 27),
(75, 'lib/8U3FUv3evAtsc8e90MFbAosGItUSTLfwNTZq8yYu.jpeg', 28),
(76, 'lib/VLFtjWPT5hANAM1XcT1Zb0U2rmLgjKEYmDhHv6jL.jpeg', 28),
(77, 'lib/iiYZvBPwbVyxIe01mEycGfLXnAvF0wwbV2QD1JI7.jpeg', 28),
(82, 'lib/WRHvzaHT8Vxa7p3aZsYbKjH0FM21vbla1p3UvfXr.jpeg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `mail_code`
--

CREATE TABLE `mail_code` (
  `code_id` int(11) NOT NULL,
  `name_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_code`
--

INSERT INTO `mail_code` (`code_id`, `name_code`) VALUES
(1, '2780E'),
(2, '3F5F3');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_code` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_andress` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_payment` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_qty` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_total` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_stauts` int(11) NOT NULL,
  `orders_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `orders_code`, `orders_name`, `orders_email`, `orders_andress`, `orders_phone`, `orders_payment`, `id`, `orders_qty`, `orders_total`, `orders_stauts`, `orders_at`) VALUES
(1, '7C503', 'Trương Phúc Duy Khang', 'phucduykhang16202@gmail.com', '05 Đặng Tất, Hoà Khanh Nam, Quận Liên Chiểu, Đà Nẵng.', '0787728474', '1', '2', '1', '280000', 5, '2020-12-11 17:00:37'),
(2, '03CFB', 'Trương Yến Khoa', 'rainedesign.vn@gmail.com', '05 Đặng Tất, Hoà Khanh Nam, Quận Liên Chiểu, Đà Nẵng.', '0905127527', '2', '2', '2', '1270000', 0, '2020-12-11 17:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `order_detail_id` int(11) NOT NULL,
  `spid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`order_detail_id`, `spid`, `orders_id`, `name`, `price`, `qty`) VALUES
(1, '16', '1', 'Áo thun tay ngắn cotton print', '280000', '1'),
(2, '16', '2', 'Áo thun tay ngắn cotton print', '280000', '1'),
(3, '14', '2', 'Giày Nam Chukka GI30700', '990000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `spid` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sp_picture` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`spid`, `name`, `price`, `discount`, `des_text`, `detail_text`, `created_at`, `updated_at`, `sp_picture`, `cat_id`, `product_qty`, `status`, `selling`) VALUES
(1, 'Áo Thun Nam Tay Ngắn Sọc Dọc', '290000', '50', 'Chất liệu: 57% cotton, 5% Spandex, 38% polyester.\r\n\r\nĐặc tính: Cảm giác mềm mại, thoải mái, có độ thấm hút tốt, chống nhăn cao và tránh bám bụi.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', 'Chất liệu: 57% cotton, 5% Spandex, 38% polyester.\r\n\r\nĐặc tính: Cảm giác mềm mại, thoải mái, có độ thấm hút tốt, chống nhăn cao và tránh bám bụi.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', '2020-11-23 13:18:50', '2020-11-23 13:18:50', 'avatar/jcOdhoYsjSASWgS2uJwfxkFOAqYq0kHUIMJEWD9u.png', '2', 10, '1', '0'),
(3, 'Áo Thun Nam Nẹp Trụ Ngắn Tay', '280000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-25 15:06:36', '2020-11-25 15:06:36', 'avatar/wSSNRRNigsMcQRH8cyj8hApJGSmv8gPd23z8cXX7.png', '2', 10, '1', '0'),
(4, 'Áo Thun Nam Tay Ngắn', '290000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 02:41:37', '2020-11-26 02:41:37', 'avatar/IVLAfVpdcj2oxBv3dZwALbBDXCvB9sSX0mtpec5Z.png', '2', 10, '1', '0'),
(5, 'Áo Thun Nam Kẻ Sọc Ngang', '240000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 02:50:16', '2020-11-26 02:50:16', 'avatar/loWMeEq8qHVEsACR4LMQc1zpr9TalYQ7GGWl8Q0Y.png', '2', 10, '1', '0'),
(6, 'Áo Thun Nam Ngắn Tay', '280000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường', '2020-11-26 02:57:39', '2020-11-26 02:57:39', 'avatar/9Y46dqLpp7FWK9VtKM2v4Pk0iip831IEIxZfzcu9.png', '2', 10, '1', '0'),
(7, 'Áo Thun Nam Tay Ngắn', '280000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 03:03:10', '2020-12-04 01:33:22', 'avatar/FH7gLCapaac9QxZPxx5W7g6sCnnZfUYxdg6I1Gnl.png', '2', 10, '1', '0'),
(8, 'Áo thun kẻ sọc ngang form regular', '350000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 03:11:10', '2020-12-03 07:12:16', 'avatar/E3k6fvm3OtaGxl85qBqTnu9uEeKbpeXF8sMAFa0t.png', '2', 10, '1', '1'),
(9, 'Áo thun tay ngắn sọc đứng', '280000', '', 'Chất liệu: 100% Cotton\r\n\r\nĐặc tính: Cảm giác mềm mại, thoải mái, có độ thấm hút tốt, chống nhăn cao và tránh bám bụi.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 03:15:57', '2020-12-03 07:12:23', 'avatar/zdOsrsZAiKV4T7gN0AnA5hLPsYvKN3P32n8Ayl3C.png', '2', 10, '1', '1'),
(10, 'Áo Thun Nam Cộc Tay In Hình', '240000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 03:20:26', '2020-11-26 03:20:26', 'avatar/3iCV3nIpPx1ODpflciWe3c8ezcC1xav2fzrodIjE.png', '2', 10, '1', '0'),
(11, 'Áo Thun Nam Tay Ngắn Phối Kẻ Sọc', '280000', '', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 03:32:45', '2020-11-26 03:32:45', 'avatar/oHmynEzorgZO7yOStftmPB0jAfmf9WzKBkOoKH6u.png', '2', 10, '1', '0'),
(13, 'Giày Sneaker 10S20SHO001', '680000', '', 'Chất liệu bền đẹp, form snecker ôm sát bàn chân, tạo cảm giác êm ái, dễ chịu.', 'Chất liệu bền đẹp, form snecker ôm sát bàn chân, tạo cảm giác êm ái, dễ chịu.', '2020-11-26 04:17:10', '2020-11-26 04:17:10', 'avatar/bfVaGvRjHlZlAb24T0faTjTt3tkmNqav9m5aMDXA.png', '5', 10, '1', '0'),
(14, 'Giày Nam Chukka GI30700', '990000', '', 'VŨ KHÍ PHÁI MẠNH -  CHUKKA\r\n\r\n“CHUKKA BOOTS Da Lộn” là sự lựa chọn thú vị cho phong cách hàng ngày với một chàng trai yêu thích phong cách bụi bặm mà không kém phần \"bảnh bao\"\r\n\r\nMàu đen cổ điển của da lộn chính là người bạn đồng hành trong lối mix đồ của nam giới. Nhưng bạn muốn thoát khỏi vùng an toàn thì đừng quên màu Beige thời thượng và thân thiện.', 'VŨ KHÍ PHÁI MẠNH -  CHUKKA\r\n\r\n“CHUKKA BOOTS Da Lộn” là sự lựa chọn thú vị cho phong cách hàng ngày với một chàng trai yêu thích phong cách bụi bặm mà không kém phần \"bảnh bao\"\r\n\r\nMàu đen cổ điển của da lộn chính là người bạn đồng hành trong lối mix đồ của nam giới. Nhưng bạn muốn thoát khỏi vùng an toàn thì đừng quên màu Beige thời thượng và thân thiện.', '2020-11-26 05:55:33', '2020-12-03 07:25:00', 'avatar/HGmY24GIV5Jzyy7riJeSr2u1GtolyjRJrwVM9nMT.png', '5', 10, '1', '1'),
(15, 'Áo Thun Nam Cotton Tank Top', '190000', '20', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.', '2020-11-26 08:18:52', '2020-11-26 08:18:52', 'avatar/VvUpdJ69vzydPtWtItt1nZ1w2kzNFQ0pZbOnLmHM.png', '2', 10, '1', '0'),
(16, 'Áo thun tay ngắn cotton print', '280000', '', 'Chất liệu: 100% Cotton\r\n\r\nĐặc tính: Cảm giác mềm mại, thoải mái, có độ thấm hút tốt, chống nhăn cao và tránh bám bụi.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', 'Chất liệu: 100% Cotton\r\n\r\nĐặc tính: Cảm giác mềm mại, thoải mái, có độ thấm hút tốt, chống nhăn cao và tránh bám bụi.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', '2020-11-26 08:25:57', '2020-12-03 07:12:06', 'avatar/ZKVZv2aLZH6wHNhidgCtK4DlAycj3Vjv6ocxs3po.png', '2', 10, '1', '1'),
(19, 'Áo sơ mi nam tay dài brush', '450000', '0', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, độ bền cao, hút ẩm và hút mồ hôi tốt, hạ nhiệt và làm mát cơ thể.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp\r\n\r\n- Hạn chế sử dụng máy sấy.', 'Chất liệu: 100% cotton.\r\n\r\nĐặc tính: Mềm mại, độ bền cao, hút ẩm và hút mồ hôi tốt, hạ nhiệt và làm mát cơ thể.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp\r\n\r\n- Hạn chế sử dụng máy sấy.', '2020-11-28 07:47:46', '2020-12-04 01:11:53', 'avatar/qEJXnUUksuJHD0DFxkqoLdxAorn8utC8SlhyDL9v.png', '3', 10, '1', '1'),
(20, 'Áo sơ mi tay dài linen', '420000', '0', 'Chất liệu: 55% linen, 45% Viscose.\r\n\r\nĐặc tính: Mềm mại, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường', 'Chất liệu: 55% linen, 45% Viscose.\r\n\r\nĐặc tính: Mềm mại, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường', '2020-11-28 07:51:24', '2020-12-04 03:10:08', 'avatar/3XqiXJNqoDF4ukutzh76ybGwd2MJHxQ3bOGAyeM4.png', '3', 10, '1', '1'),
(21, 'Áo sơ mi tay dài Rayon', '390000', '0', 'Chất liệu: 100% Rayon.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng: \r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', 'Chất liệu: 100% Rayon.\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.\r\n\r\nHướng dẫn sử dụng: \r\n\r\n- Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy.\r\n\r\n- Hạn chế sử dụng máy sấy và ủi ở nhiệt độ thích hợp.', '2020-11-28 07:56:05', '2020-11-28 07:56:05', 'avatar/tST5JW21NrK7RZLN0BSGYHX5YzOzL07npPvZdQ17.png', '3', 10, '1', '0'),
(22, 'Áo sơ mi denim tay dài', '390000', '0', 'Chất liệu: 100% cotton\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.', 'Chất liệu: 100% cotton\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.', '2020-11-28 08:00:25', '2020-11-28 08:00:25', 'avatar/1wgCu7SQNphiPIuB1knDBGnvbeiEcQUTMS3WoEns.png', '3', 10, '1', '0'),
(23, 'Áo sơ mi kẻ sọc tay dài', '450000', '0', 'Chất liệu: 75% cotton, 25% Linen\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp', 'Chất liệu: 75% cotton, 25% Linen\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp', '2020-11-28 08:03:55', '2020-11-28 08:03:55', 'avatar/WlCd0GHIkHA1TBSFSRHKfU3q267drKJ0ROpB325I.png', '3', 10, '1', '0'),
(24, 'Áo Sơ Mi Nam Dài Tay Form Regular', '390000', '0', 'Chất liệu: 100% rayon.\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.', 'Chất liệu: 100% rayon.\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.', '2020-11-28 08:49:56', '2020-12-04 01:04:58', 'avatar/UBSw7zG3xRbe5lpQ7xBj8Q6g343mPLDKhqlO4m0t.png', '3', 10, '1', '1'),
(25, 'Áo Sơ Mi Nam Tay Dài Form Loose Fit', '399000', '0', 'Chất liệu: 100% rayon.\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.', 'Chất liệu: 100% rayon.\r\n\r\nĐặc tính: Trơn mịn, mềm mại, hút ẩm tốt, bền màu.\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Giặt ở nhiệt độ bình thường.\r\n\r\n- Giặt với đồ có màu tương tự.\r\n\r\n- Không được dùng hóa chất tẩy\r\n\r\n- Hạn chế sử dụng máy sấy, ủi ở nhiệt độ thích hợp.', '2020-11-28 08:56:03', '2020-11-28 08:56:03', 'avatar/3BfNUV8WaM9a422iZSzhDgwtIDsnfImbfESxMnBL.png', '3', 10, '1', '0'),
(26, 'Áo Sơ Mi Nam Tay Dài Oxford', '390000', '0', 'Chất liệu: 100% cotton\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí.\r\n\r\nHướng dẫn sử dụng: \r\n\r\n- Giặt ấm ở nhiệt độ không quá 40độC.\r\n\r\n- Giặt mặt trái với đồ có màu tương tự.\r\n\r\n- Chỉ sử dụng chất tẩy không chứ Clo.\r\n\r\n- Sấy ở nhiệt độ thấp.\r\n\r\n- Ủi ở nhiệt độ không quá 200độC.', 'Chất liệu: 100% cotton\r\n\r\nĐặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng khí.\r\n\r\nHướng dẫn sử dụng: \r\n\r\n- Giặt ấm ở nhiệt độ không quá 40độC.\r\n\r\n- Giặt mặt trái với đồ có màu tương tự.\r\n\r\n- Chỉ sử dụng chất tẩy không chứ Clo.\r\n\r\n- Sấy ở nhiệt độ thấp.\r\n\r\n- Ủi ở nhiệt độ không quá 200độC.', '2020-11-28 08:58:24', '2020-11-28 08:58:24', 'avatar/LUrcK1YriIWgNVLYGAp8e1utTQfPHrqSYgnnl1XZ.png', '3', 10, '1', '0'),
(27, 'Áo Sơ Mi Nam Tay Dài Cổ Bẻ', '280000', '0', 'Item sơ mi cổ bẻ luôn giữ cho cánh mày râu ở trong vùng an toàn cho phong cách thời trang hằng ngày. Bạn có muốn thoát khỏi vùng an toàn, hãy thử với chiếc SƠ MI CỔ VEST - được thiết kế kẻ sọc với chất liệu 100% rayon có độ rũ mềm mại, thấm hút mồ hôi tốt và mềm mịn hơn cả cotton. Đặc biệt, chiếc áo tạo cho người mặc cảm giác mỏng manh nhưng độ bền của chiếc áo lại rất cao.\r\nChiếc sơ mi cổ vest còn khiến cánh mày râu trở nên lịch lãm mà còn trẻ trung và cá tính hơn bao giờ hết.', 'Item sơ mi cổ bẻ luôn giữ cho cánh mày râu ở trong vùng an toàn cho phong cách thời trang hằng ngày. Bạn có muốn thoát khỏi vùng an toàn, hãy thử với chiếc SƠ MI CỔ VEST - được thiết kế kẻ sọc với chất liệu 100% rayon có độ rũ mềm mại, thấm hút mồ hôi tốt và mềm mịn hơn cả cotton. Đặc biệt, chiếc áo tạo cho người mặc cảm giác mỏng manh nhưng độ bền của chiếc áo lại rất cao.\r\nChiếc sơ mi cổ vest còn khiến cánh mày râu trở nên lịch lãm mà còn trẻ trung và cá tính hơn bao giờ hết.', '2020-11-28 09:02:36', '2020-12-08 03:11:52', 'avatar/0P1sU1mBkXu5ZRXv7Pdbo3aMf2ukTbRypCQDnUgm.png', '3', 10, '1', '0'),
(28, 'REBEL SLIDES Black', '600000', '0', 'Dép streetwear, họa tiết nghệ thuật, êm nhẹ.', 'Dép streetwear, họa tiết nghệ thuật, êm nhẹ.', '2020-11-28 09:07:14', '2020-12-08 03:11:55', 'avatar/3RfmWC0FRvyKMVe0ZUoBRneSI1s0K1ctXTo0CuMk.jpeg', '5', 10, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `shipper_id` int(11) NOT NULL,
  `shipper_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_andress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_status` int(11) NOT NULL,
  `customers_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shirt_size`
--

CREATE TABLE `shirt_size` (
  `aid` int(11) NOT NULL,
  `aname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shirt_size`
--

INSERT INTO `shirt_size` (`aid`, `aname`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `shoes_size`
--

CREATE TABLE `shoes_size` (
  `sid` int(11) NOT NULL,
  `sname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoes_size`
--

INSERT INTO `shoes_size` (`sid`, `sname`) VALUES
(1, '35'),
(2, '36'),
(3, '37'),
(4, '38'),
(5, '39'),
(6, '40'),
(7, '41'),
(8, '42'),
(9, '43');

-- --------------------------------------------------------

--
-- Table structure for table `star`
--

CREATE TABLE `star` (
  `id_star` int(11) NOT NULL,
  `spid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `star`
--

INSERT INTO `star` (`id_star`, `spid`, `fullname`, `content`, `star_number`, `created_at`) VALUES
(1, '24', 'Lâm Tây', 'Áo đẹp chất liệu tốt', '4', '2020-12-12 07:45:57'),
(2, '24', 'Lâm Tây', 'Áo rất rất đẹp nha mọi người', '5', '2020-12-12 07:48:57'),
(3, '24', 'Lâm Tây', 'asd', '5', '2020-12-12 07:50:49'),
(4, '24', 'Lâm Tây', 'Sản phẩm ko được đẹp lắmmm', '1', '2020-12-12 07:51:10'),
(5, '24', 'Lâm Tây', 'asdasd', '2', '2020-12-12 07:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `picture` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `password`, `phone`, `gender`, `birthday`, `picture`, `permission`) VALUES
(1, 'rainedesign.vn@gmail.com', 'Trương Phúc Duy Khang', '$2y$10$ZhZyzDokno0wJfju5YPOOOG3ayr/V9FzWLIS6vBF3VZQ2B4yOL/NC', '787728474', '1', '2002-02-16', 'khang.jpg', '1'),
(2, 'phucduykhang16202@gmail.com', 'Administartor', '$2y$10$0Bd3lfAPdXURvBwuuw/ql.3mRshyZvWxxHzlo7wOr3sR.OKgm8FfO', '12381230', '1', '2002-02-16', '', '1'),
(4, 'truongykhue@gmail.com', 'Trương Ý Khuê', '$2y$10$WgoKomDqanHxRqwXCgaT0uSLLyb5.ip0MrAeN7j/cpsWOP2g7QaWW', '12434656', '1', '2002-02-15', '', '1'),
(6, 'test@gmail.com', 'Lâm Tây', '$2y$10$R77Sr7UgOe1JT0YJaDpWuOWMx5LuLI.ZQOaDbUp8BaHFt1Syr2rKC', '0764089606', 'Nam', '1995-10-12', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `devvn_quanhuyen`
--
ALTER TABLE `devvn_quanhuyen`
  ADD PRIMARY KEY (`maqh`);

--
-- Indexes for table `devvn_tinhthanhpho`
--
ALTER TABLE `devvn_tinhthanhpho`
  ADD PRIMARY KEY (`matp`);

--
-- Indexes for table `library_images`
--
ALTER TABLE `library_images`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `mail_code`
--
ALTER TABLE `mail_code`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`shipper_id`);

--
-- Indexes for table `shirt_size`
--
ALTER TABLE `shirt_size`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `shoes_size`
--
ALTER TABLE `shoes_size`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `star`
--
ALTER TABLE `star`
  ADD PRIMARY KEY (`id_star`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `library_images`
--
ALTER TABLE `library_images`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `mail_code`
--
ALTER TABLE `mail_code`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `shipper_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shirt_size`
--
ALTER TABLE `shirt_size`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shoes_size`
--
ALTER TABLE `shoes_size`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `star`
--
ALTER TABLE `star`
  MODIFY `id_star` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
