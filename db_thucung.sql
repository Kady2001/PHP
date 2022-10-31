-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 10:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thucung`
--
CREATE DATABASE IF NOT EXISTS `db_thucung` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_thucung`;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don_ban`
--

CREATE TABLE `chi_tiet_hoa_don_ban` (
  `id_cthdb` int(20) NOT NULL,
  `id_hdb` varchar(20) NOT NULL,
  `id_thucung` varchar(20) NOT NULL,
  `sl` int(11) NOT NULL COMMENT 'số lượng',
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hoa_don_nhap`
--

CREATE TABLE `chi_tiet_hoa_don_nhap` (
  `id_cthdn` int(20) NOT NULL,
  `id_hdn` varchar(20) NOT NULL,
  `id_thucung` varchar(20) NOT NULL,
  `sl` int(11) NOT NULL COMMENT 'số lượng',
  `don_vi` varchar(20) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_ban`
--

CREATE TABLE `hoa_don_ban` (
  `id_hdb` int(20) NOT NULL,
  `id_nv` int(20) NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `tong_tien` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `status` varchar(20) NOT NULL,
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_nhap`
--

CREATE TABLE `hoa_don_nhap` (
  `id_hdn` int(20) NOT NULL,
  `id_ncc` varchar(20) NOT NULL,
  `id_nv` varchar(20) NOT NULL,
  `date_order` date DEFAULT NULL,
  `tong_tien` float DEFAULT NULL COMMENT 'tổng tiền',
  `thanh_toan` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(20) NOT NULL,
  `ten_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaithucung`
--

CREATE TABLE `loaithucung` (
  `id_loaithucung` int(20) NOT NULL,
  `TENLOAI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIET` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaithucung`
--

INSERT INTO `loaithucung` (`id_loaithucung`, `TENLOAI`, `CHITIET`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Chó', 'Các loài chó cảnh được yêu thích nhất trên thị trư', '2022-06-19 09:25:43', '2022-06-19 09:25:43'),
(2, 'Mèo', 'Những chú mèo tinh nghịch nhưng cũng vô cùng đáng ', NULL, '2022-06-22 13:04:50'),
(3, 'Chuột', 'Những con vật gặm nhấm dễ thương', NULL, NULL),
(4, 'Vẹt', 'Những chú vẹt đầy màu sắc', NULL, NULL),
(5, 'Thú cưng khác', 'Các loài thú cưng độc lạ mà bạn không nên bỏ lỡ', NULL, '2022-06-19 10:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id_magiamgia` int(20) NOT NULL,
  `MAGIAMGIA` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIET` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id_nv` int(20) NOT NULL,
  `ten_nhanvien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capbac` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`id_nv`, `ten_nhanvien`, `gioitinh`, `ngaysinh`, `quequan`, `sdt`, `email`, `capbac`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Nguyễn Văn Mạnh', 'Nam', '2001-10-12', 'Bắc Ninh', '0862634420', 'ngmanh12102001@gmail.com', 'Giám Đốc', NULL, NULL),
(4, 'Cao Đắc Thuận', 'Nam', '29/05/2001', 'Vĩnh Phúc', '0986658698', 'caodacthuan2001@gmail.com', 'Nhân viên', NULL, NULL),
(5, 'Nguyễn Hồng Phong', 'nam', '09-01-2001', 'Hải dương', '0563214896', 'phongnguyen@gmail.com', 'Nhân viên', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nha_cung_cap`
--

CREATE TABLE `nha_cung_cap` (
  `id_ncc` int(20) NOT NULL,
  `ten_ncc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi_ncc` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Chi_tiet` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nha_cung_cap`
--

INSERT INTO `nha_cung_cap` (`id_ncc`, `ten_ncc`, `diachi_ncc`, `email`, `sdt`, `Chi_tiet`, `CREATED_AT`, `UPDATED_AT`) VALUES
(201, 'CÔNG TY TNHH AN BẢO CHÂU', '98K Lê Lai, phường Bến Thành, quận 1, Tp Hồ Chí Minh', 'kinhdoanh@abcpet.net', '02862714780', 'Công Ty TNHH An Bảo Châu chuyên kinh doanh cung cấp các sản phẩm cho thú cưng như:\r\n+ Quần áo, túi xách: Quần áo chó mèo, túi xách thể thao chó mèo, túi xách chó mèo Wanda, áo đầm,.\r\n+ Phụ kiện thú cưng: Đồ chơi chó mèo, khay cát vệ sinh, dụng cụ ăn uống, dây dắt thú cưng, dây xích sắt, vòng cổ thú cưng,..\r\nVới hệ thống sản phẩm đa dạng cùng nhiều năm kinh nghiệm, hệ thống sản phẩm chất lượng, an toàn cho thú cưng, cùng với đội ngũ công nhân viên nhiệt tình.\r\nCông ty cam kết sẽ nỗ lực hơn nữa để làm hài lòng quý khách hàng.\r\n\r\n', '2022-06-20 02:33:42', '2022-06-20 13:17:58'),
(2002, 'CÔNG TY TNHH PET MART VIỆT NAM', 'Số 3 Đại Cồ Việt, Quận Hai Bà Trưng, Hà Nội', 'contact@petmart.vn', '19002100', 'Công Ty TNHH Pet Mart Việt Nam chuyên cung cấp phụ kiện chó, mèo.\r\nPet Mart với hệ thống cửa hàng tại Hà Nội, Đà Nẵng và TP. HCM, là địa chỉ chuyên nghiệp, chất lượng dịch vụ tốt nhất, luôn được khách hàng tin tưởng và là điểm đến tuyệt vời cho thú cưng.\r\n\r\n', '2022-06-20 01:24:12', '2022-06-20 02:30:39'),
(2003, 'CÔNG TY TNHH CÔNG NGHỆ SINH HỌC ĐỨC BÌNH', '57 Ngõ 64 Kim Giang, Q. Thanh Xuân, Hà Nội', 'chephamvisinhungdung@gmail.com', '0986658698', 'Công Ty TNHH Công Nghệ Sinh Học Đức Bình được thành lập năm 2018 là công ty chuyên sản xuất, kinh doanh, cung cấp các dịch vụ\r\n+ Sản xuất và kinh doanh chế phẩm sinh học: chế phẩm sinh học EM. Emic,..\r\n+ Thức ăn, phụ kiện thú cưng, chó mèo: cát vệ sinh chó mèo, phụ kiện chó mèo, thú cưng,..\r\n+ Xử lý rác thải: chế phẩm vi sinh xử lý chất thải hữu cơ Emic,..\r\n+ Xử lý nước thải: chế phẩm vi sinh xử lý nước thải kỵ khí Emic Phot,..\r\n+ Dụng cụ thông tắc: bơm thụt thông tắc bể phốt, dây thông cống,..\r\n+ Sản phẩm khác: đất trồng cây, đất mùn dừa, thuốc trừu sâu sinh học,..\r\ncác sản phẩm chế phẩm từ sinh học đảm bảo được những yêu cầu khắt khe đó nên đang rất được ưu tiên ứng dụng trong nông nghiệp chúng tôi nghiên cứu, khai thác khả năng quý giá của vi sinh vật trong thiên nhiên, biến chúng thành các sản phẩm có ích, giúp cho hệ sinh thái giữ được sự cân bằng.\r\n\r\n', NULL, NULL),
(2004, 'CÔNG TY TNHH SX VÀ XNK SGREEN', 'Tầng 7, 60 Nguyễn Văn Thủ, P. Đa Kao, Q. 1, Tp. Hồ Chí Minh', 'sgreenvnn@gmail.com', '0934979887', 'Công Ty TNHH Sản Xuất Và XNK Sgreen với kinh nghiệm sản xuất – gia công OEM các sản phẩm đồ gỗ, Sgreen ngày càng mở rộng các sản phẩm và hướng đến đối tượng khách hàng nước ngoài.', NULL, NULL),
(2005, 'CÔNG TY TNHH HƯƠNG HOÀNG NAM', 'A9/54 ấp 1, X. Bình Chánh, H. Bình Chánh, Tp. Hồ Chí Minh', 'huonghoangnam.co@gmail.com', '02837607878', 'Công Ty TNHH Hương Hoàng Nam là đơn vị với bề dày hoạt động lâu năm trong lĩnh vực sản xuất các sản phẩm thuốc thú y, sản phẩm dinh dưỡng, thuốc thú y thủy sản, hóa chất xử lý môi trường thủy sản và mỹ phẩm cho thú cưng.\r\nVới hơn 400 loại sản phẩm được sản xuất theo quy trình và công nghệ hiện đại, khép kín Hương Hoàng Nam đã và đang cung cấp cho thị trường những sản phẩm có gí trị, chất lượng cao với giá thành hợp lý.\r\nChúng tôi xin chân thành cám ơn sự ủng hộ của quý khách trong thời gian vừa qua và rất mong tiếp tục nhận được sự ủng hộ của quý khách hàng trong thời gian sắp tới.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(20) NOT NULL,
  `ten_slide` varchar(20) NOT NULL,
  `img_slide` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `ten_slide`, `img_slide`) VALUES
(4, '1', 'banner1.png'),
(5, '2', 'banner2.jpg'),
(6, '3', 'banner3.jpg'),
(7, '4', 'banner4.png'),
(10, '5', 'banner5.png'),
(11, '6', 'banner6.png'),
(12, '7', 'banner7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tk` int(20) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tentk` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_tk`, `email`, `matkhau`, `tentk`, `CREATED_AT`, `UPDATED_AT`) VALUES
(0, 'hsgli12tm2@gmail.com', '123456', 'MERCUSYS_1F16', '2022-06-22 23:07:20', '2022-06-22 23:07:20'),
(1, 'phong@gmail.com', '123456', 'sửa xem lào', '2022-06-15 02:11:06', '2022-06-22 13:30:56'),
(5634, 'admin@gmail.com', '123456', 'admin@gmail.com', '2022-06-22 13:17:22', '2022-06-22 13:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `thucung`
--

CREATE TABLE `thucung` (
  `id_thucung` int(20) NOT NULL,
  `id_loaithucung` int(20) NOT NULL,
  `id_ncc` int(20) NOT NULL,
  `TENTHUCUNG` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ANH_1` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `ANH_2` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANH_3` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ANH_4` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIET_1` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIET_2` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CHITIET_3` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `GIATHUCUNG` int(11) NOT NULL,
  `GIAMTHUCUNGGIAM` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chungnhan` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thucung`
--

INSERT INTO `thucung` (`id_thucung`, `id_loaithucung`, `id_ncc`, `TENTHUCUNG`, `ANH_1`, `ANH_2`, `ANH_3`, `ANH_4`, `CHITIET_1`, `CHITIET_2`, `CHITIET_3`, `soluong`, `GIATHUCUNG`, `GIAMTHUCUNGGIAM`, `chungnhan`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 1, 2003, 'Chó Golden Retriever', 'cho-golden-retriever1.jpg', 'cho-golden-retriever2.jpg', 'cho-golden-retriever3.jpg', 'cho-golden-retriever4.jpg', 'Xuất xứ: Đức', '24 tháng tuổi,cân nặng 30kg', '\r\nChó Golden có nguồn gốc từ nước Anh, là kết quả của cuộc lai tạo thành công giữa 3 giống chó là: Spaniels, Setters và Newfoundland, Bloodhound. Trước kia, Golden Retrievers được gọi với cái tên Golden Flat-Coat. Chúng thường được sử dụng để làm chó nghiệp vụ hoặc là cánh tay phải cho những người thợ săn.', 5, 7000000, NULL, 'chungnhan1.jpg', NULL, NULL),
(2, 1, 2005, 'Chó Chihuahua', 'chophoc1.jpg', 'chophoc2.jpg', 'chophoc3.jpg', 'chophoc4.jpg', 'Xuất xứ: Việt Nam', '8 tháng tuổi, cân nặng 5kg', 'Chó Chihuahua là một trong những giống chó nuôi nhỏ nhất trên thế giới. Cái tên Chihuahua được đặt theo tên của bang Chihuahua ở México. Giống chó này rất thông minh.\r\nĐặc biệt, giống chó này còn khiến nhiều người tò mò bởi những sự thật không phải ai cũng biết về chúng như:\r\n\r\nChihuahua là giống chó có thân hình nhỏ bé nhất thế giới: cân nặng của chúng chỉ đạt khoảng 0,5kg và có chiều cao dưới 23cm\r\nChihuahua là giống chó lâu đời nhất ở Bắc Mỹ\r\nBộ não của Chihuahua không hề nhỏ bé như thân hình của nó\r\nChihuahua có bất kỳ màu lông nào cũng được\r\nChihuahua từng là một con vật linh thiêng\r\nChihuahua không thích làm thân với bất kỳ giống chó nào khác trừ đồng loại của mình\r\nChihuahua là con vật chỉ trung thành với một chủ duy nhất\r\nVào năm 1977 thì giống chó Chihuahua đã trở thành biểu tượng cho văn hóa nhạc Pop. Cụ thể là có một chú chó có tên là Gidget đã xuất hiện trong một đoạn quảng cáo của hãng Taco Bell. Nhiều người đã bày tỏ sự thích thú với chú chó này và cũng bắt đầu từ đây mà Chihuahua xuất hiện nhiều hơn ở các bộ phim, chương trình truyền hình.\r\n\r\nChihuahua dù sở hữu kích thước nhỏ bé, hơi gầy nhưng chúng lại có tuổi thọ khá cao, từ 10 – 18 năm do sức đề kháng tốt và ít mắc bệnh.', 7, 1500000, NULL, 'chungnhan2.jpg', NULL, NULL),
(3, 1, 201, 'Chó Phú Quốc', 'choPhuQuoc1.jpg', 'choPhuQuoc2.jpg', 'choPhuQuoc3.jpg', 'choPhuQuoc4.jpg', 'Xuất xứ: Việt Nam', '5 tháng tuổi, cân nặng 10kg', 'Chó Phú Quốc là một loại chó riêng của đảo Phú Quốc, Việt Nam. Nó có đặc điểm phân biệt với các loại chó khác là các xoáy lông ở trên sống lưng. Nó là một trong ba dòng chó có xoáy lông trên lưng trên thế giới. Hai loại chó lông xoáy ở lưng còn lại là chó lông xoáy Rhodesia và chó lông xoáy Thái.', 10, 2000000, '500000', 'chungnhan6.jpg', '2022-06-14 17:00:00', '2022-06-26 17:00:00'),
(4, 1, 2003, 'Chó Pug', 'choPug1.jpg', 'choPug2.jpg', 'choPug3.jpg', 'choPug4.jpg', 'Xuất xứ: Mỹ', '8 tháng tuổi, cân nặng 8kg', '\r\nKết quả hình ảnh cho miêu tả chó pug\r\nPug, hay thường được gọi là chó mặt xệ, là giống chó thuộc nhóm chó cảnh có nguồn gốc từ Trung Quốc, chúng có một khuôn mặt nhăn, mõm ngắn, và đuôi xoăn. Giống chó này có bộ lông mịn, bóng, có nhiều màu sắc nhưng phổ biến nhất là màu đen và nâu vàng. Cơ thể của Pug nhỏ gọn hình vuông với các cơ bắp rất phát triển.', 3, 4000000, '200000', 'chungnhan4.jpg', '2022-05-31 17:00:00', '2022-06-02 17:00:00'),
(5, 1, 2002, 'Chó Husky', 'Husky1.jpg', 'Husky2.jpg', 'Husky3.jpg', 'Husky4.jpg', 'Xuất xứ: Anh', '25 tháng tuổi, cân nặng 35kg', 'Husky sở hữu một thân hình thuôn dài, đôi chân chúng gân guốc, to khỏe và rất săn chắc. Chó Husky có chiều cao từ 53-58cm đối với con đực còn con cái cao từ 51-56cm, đây là chiều cao khiêm tốn nhất trong những giống chó kéo xe. Cân nặng con đực thường rơi vào khoảng 20-27kg, con cái nặng khoảng 16-23kg.', 6, 5000000, NULL, 'chungnhan2.jpg', '2022-04-04 17:00:00', '2022-06-28 17:00:00'),
(6, 1, 2004, 'Chó Pitbull', 'Pitbull1.jpg', 'Pitbull2.jpg', 'Pitbull3.jpg', 'Pitbull4.jpg', 'Xuất xứ: Mỹ', '10 tháng tuổi, cân nặng 15kg', 'Chúng là giống chó được chọn giống từ loại chó bun Anh và chó sục. Đây là giống chó dữ, hiếu chiến, bền bỉ, gan lỳ được mệnh danh là sát thủ máu lạnh hay còn được gọi là chó chiến binh hay võ sĩ giác đấu. Thuật ngữ Pit bull bắt nguồn từ tên tiếng Anh gồm pit có nghĩa là cái hố lớn và bull có nghĩa là con bò mộng.', 2, 6850000, '200000', 'chungnhan9.jpg', '2022-06-07 17:00:00', '2022-06-17 17:00:00'),
(7, 1, 2002, 'Chó Shiba', 'Shiba1.jpg', 'Shiba2.jpg', 'Shiba3.jpg', 'Shiba4.jpg', 'Xuất xứ: Nhật bản', '9 tháng tuổi, câng nặng 12kg', 'Shiba Inu (柴犬) là loại chó nhỏ nhất trong sáu giống chó nguyên thủy và riêng biệt đến từ Nhật Bản. Chúng là một giống chó nhỏ, nhanh nhẹn và thích hợp với địa hình miền núi, Shiba Inu ban đầu được nuôi để săn bắt. Ngoại hình của chúng gần giống nhưng nhỏ hơn so với giống Akita Inu.', 12, 3500000, NULL, 'chungnhan8.jpg', '2022-05-31 17:00:00', '2022-06-23 17:00:00'),
(8, 1, 201, 'Chó Corgi', 'Corgi1.png', 'Corgi2.png', 'Corgi3.png', 'Corgi4.png', 'Xuất xứ: Canada', '5 tháng tuổi, cân nặng 7kg', 'Corgi chân ngắn có đôi tai hình tam giác, dựng thẳng. Tai và mặt của các bé có tỷ lệ khá cân đối. Mõm của Corgi dài và nhọn, mắt chúng to tròn, miệng và khuôn hàm nhỏ nhưng cực kì sắc nhọn. Nhìn tổng thể, khuôn mặt của Corgi trông giống loài cáo nên chúng còn được gọi là Foxy Dog.', 5, 7800000, '100000', 'chungnhan5.jpg', '2022-05-09 17:00:00', '2022-06-20 17:00:00'),
(9, 2, 2004, 'Mèo Ai Cập', 'MeoAiCap1.jpg', 'MeoAiCap2.jpg', 'MeoAiCap3.jpg', 'MeoAiCap4.jpg', 'Xuất xứ: Ai Cập', '4 tháng tuổi, cân nặng 4kg', 'Mèo Mau Ai Cập là một trong những giống mèo lâu đời nhất trên thế giới hiện nay, tổ tiên của chúng còn là một thành phần trong tôn giáo, thần thoại và cuộc sống hàng ngày. Giống mèo này còn được mô tả trong những tác phẩm nghệ thuật của thời Ai Cập cổ đại, chẳng hạn như là các tác phẩm điêu khắc hoặc tranh vẽ, bao gồm một bức tranh giấy cói (vào khoảng năm 1100 trước công nguyên) bức tranh này mô tả một chú mèo đốm tên là Ra đang thực hiện việc cắt đầu một con rắn hung ác tên Apep.', 3, 12000000, NULL, 'chungnhan7.jpg', '2022-05-18 22:30:00', '2022-06-09 01:29:00'),
(10, 2, 201, 'Mèo Anh lông ngắn', 'meo-anh-long-ngan-1.jpg', 'meo-anh-long-ngan-2.jpg', 'meo-anh-long-ngan-3.jpg', 'meo-anh-long-ngan-4.jpg', 'Xuất xứ: Anh', '8 tháng tuổi, cân nặng 6kg', 'Mèo lông ngắn Anh là phiên bản nhân giống có chọn lọc của mèo nhà Anh truyền thống với những đặc điểm như thân hình mũm mĩm, lông ngắn và dày cùng với khuôn mặt to. Màu sắc phổ biến nhất là màu xám xanh với mắt màu vàng đồng, nhưng ngoài ra vẫn còn nhiều màu sắc và hoa văn khác nhau.', 3, 5500000, NULL, 'chungnhan4.jpg', '2022-05-31 04:16:00', '2022-06-03 05:23:00'),
(11, 2, 2002, 'Mèo Ba Tư', 'meobatu1.jpg', 'meobatu2.jpg', 'meobatu3.jpg', 'meobatu4.jpg', 'Xuất xứ: Mỹ', '6 tháng tuổi, cân nặng 4kg', 'Mèo Ba Tư có rất nhiều tên gọi như Mèo Persian, Mèo shirazi. Là một trong những loài mèo đẹp nhất thế giới hiện nay. Và cũng là một trong những giống mèo được thuần chủng lâu đời nhất. Điểm đặc biệt và dễ nhận dàng nhất của mèo Ba Tư đó chính là lông dài quý tộc, và mắt đẹp', 6, 2500000, NULL, 'chungnhan3.jpg', '2022-06-14 23:22:00', '2022-06-18 04:45:00'),
(12, 2, 2003, 'Mèo Munchkin', 'MeoMunchkin1.jpg', 'MeoMunchkin2.jpg', 'MeoMunchkin3.jpg', 'MeoMunchkin4.jpg', 'Xuất xứ: Mỹ', '5 tháng tuổi, 5kg', 'Mèo Munchkin một giống mèo nhỏ nhắn, xinh xắn, dễ thương mà bạn sẽ yêu ngay từ cái nhìn đầu tiên. Là một giống mèo đột biến tự nhiên, mèo munchkin có thân hình lùn, nhỏ nhắn và chỉ nặng khoảng 3–4 kg thôi. Cũng vì đặc điểm đó mà rất nhiều người yêu thích và lựa chọn những chú mèo Munchkin này.', 8, 4500000, NULL, 'chungnhan6.jpg', '2022-06-09 06:00:00', '2022-06-21 21:22:00'),
(13, 2, 2002, 'Mèo Ragdoll', 'MeoRagdoll1.png', 'MeoRagdoll2.png', 'MeoRagdoll3.png', 'MeoRagdoll4.png', 'Xuất xứ: Thuỵ Sĩ', '3 tháng tuổi, cân nặng 2kg', 'Ragdoll là một giống mèo với đôi mắt màu xanh dương và bộ lông hai màu tương phản đặc trưng. Nó là giống mèo to lớn, với cơ bắp rắn chắc và bộ lông mềm mại và hơi dài Chúng cũng được biết đến là giống mèo hiền lành, dễ bảo và dễ thương.', 4, 3600000, NULL, 'chungnhan1.jpg', '2022-04-12 03:08:00', '2022-06-22 00:00:00'),
(14, 2, 2003, 'Mèo Xiêm', 'meo-xiem-1.jpg', 'meo-xiem-2.jpg', 'meo-xiem-3.jpg', 'meo-xiem-4.jpg', 'Xuất xứ: Thái Lan', '15 tháng tuổi, cân nặng 7kg', 'Mèo Xiêm – mèo Xiêm Thái hay mèo Siamese là giống mèo cảnh thanh lịch với đôi chân dài, bộ lông ngắn mềm mịn và đôi mắt xanh bí ẩn. Mèo Xiêm được xem như một vị thần mang lại may mắn cho mọi người.\r\n\r\nCác thông tin thú vị về đặc điểm ngoại hình, tính cách của mèo Xiêm dưới đây, chắc hẳn sẽ làm bạn gật gù thích thú và cân nhắc mua mèo Xiêm trong tương lai gần đó.', 5, 5000000, NULL, 'chungnhan6.jpg', '2022-06-12 17:00:00', '2022-06-23 23:00:00'),
(15, 4, 201, 'Vẹt Nam Mỹ', 'VetNamMy1.jpg', 'VetNamMy2.jpg', 'VetNamMy3.jpg', 'VetNamMy4.jpg', 'Xuất xứ: Brasil', '12 tháng tuổi, cân nặng 1,5kg', 'Vẹt Nam Mỹ hay còn gọi là vẹt Macaw, chúng được biết đến là giống vẹt đẹp. Vẹt Macaw nằm trong lớp chim thuộc bộ Psittacifomes. Tên gọi này xuất phát từ vùng biển Caribe, vị trí khu vực mà chúng được tìm thấy, đó là Nam Mỹ, Trung Mỹ, Mexico.\r\n\r\nChúng thường sống ở những khu rừng rậm nhiệt đới, thảo nguyên. Sống thành từng bầy đàn, cùng nhau kiếm ăn và sinh sản để duy trì nòi giống.', 6, 10000000, NULL, 'chungnhan9.jpg', '2022-06-10 01:00:00', '2022-06-16 04:12:00'),
(16, 4, 201, 'Vẹt Cockatoo', 'VetCockatoo4.jpg', 'VetCockatoo3.jpg', 'VetCockatoo2.jpg', 'VetCockatoo.jpg', 'Xuất xứ: Úc', '6 tháng tuổi, cân nặng 1kg', 'Vẹt Cockatoo có tên khoa học là Cacatua Galerita. Tất cả các loài vẹt mào đều được phát hiện ở Úc và các đảo xung quanh Châu Đại Dương, bao gồm Malaysia, Philippines, và các Wallacea phía đông Indonesia đến Guinea và quần đảo Solomon. Loài vẹt Cockatoo thường sống từ rừng ở các vùng ven biển và rừng ngập mặn.Cái tên cockatoo thường được dùng để chỉ loài vẹt có mào trắng hoặc màu vàng.', 7, 2000000, '0', 'chungnhan8.jpg', '2022-05-18 06:00:00', '2022-06-30 00:21:44'),
(17, 3, 2002, 'Chuột Hamster', 'hamster1.jpg', 'hamster2.jpg', 'hamster3.jpg', 'hamster4.jpg', 'Xuất xứ: Việt Nam', '2 tháng tuổi, cân nặng 0,5kg', 'Chuột hams hay hamster, chuột đuôi cụt, hay còn gọi là chuột đất vàng[1], trong từ điển dịch là chuột hang vì là loài thường hay đào hang, là một loài động vật gặm nhấm thuộc phân họ Cricetinae, bao gồm 25 loài thuộc 6 hoặc 7 chi khác nhau[2]. Được nuôi để làm các thí nghiệm khoa học và hiện nay còn để làm thú cưng cho những người yêu thích vật nuôi nhỏ. Chuột hams được phát hiện tại một thành phố gần Syria vào năm 1829. Chuột hamster có khả năng đào hang để đuổi bắt côn trùng. Loài này đặc biệt ở chỗ có đôi túi má dài tới vai của nó, mục đích này để mang thức ăn về tổ, hang của chúng. Hamster có khả năng các hành vi khác nhau dựa vào tác động môi trường, di truyền và thật sự đã tương tác gần gũi với con người.', 15, 200000, NULL, 'chungnhan1.jpg', '2022-06-08 10:00:00', '2022-06-24 09:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `id_tintuc` int(20) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`id_tintuc`, `title`, `content`, `image`, `CREATED_AT`, `UPDATED_AT`) VALUES
(1, 'Chó mèo ở Trung Quốc cũng có tiệc tất niên sang chảnh trong đêm Giao thừa', 'ền kinh tế vật nuôi đang phát triển và nhu cầu mới nổi là thức ăn cho vật nuôi trong các ngày lễ hội.\r\nWang Jianing không bao giờ quan tâm đến giá cả khi chi cho thú cưng của cô - một con mèo Nga mắt xanh tên là Doudou - và hai con chó - một con chó săn vịt (toy poodle) và một con chó giống Maltese tên lần lượt là Yomi và Neinei. Dù là đồ ăn, quần áo, dầu gội đầu thương hiệu Ý hay thỉnh thoảng đến spa, cô chủ 24 tuổi sống ở thành phố Hợp Phì, miền đông Trung Quốc này chỉ đơn giản là mở ví và giao tiền “bất cứ khi nào có nhu cầu”.\r\n\r\n\"Nhu cầu\" gần đây nhất của ba con vật cưng là một bữa tiệc cho đêm giao thừa vào ngày 31 tháng 1. Để kỷ niệm dịp lễ lớn trong năm này, Wang đã đặt hàng trực tuyến một suất ăn trị giá 399 nhân dân tệ (khoảng 62,7 USD) để chia cho các con thú cưng. Bộ sản phẩm bao gồm súp cà rốt, cơm trứng tráng hình đầu hổ, đậu phụ nhồi, vẹm, tôm phô mai, bánh quy phô mai bí đỏ, bánh nướng nhỏ nhân thịt, cũng như món dim sum làm từ gà, cá tuyết, vịt và khoai lang tím.\r\n\r\n“Tết Nguyên đán sắp đến và tôi muốn những đứa trẻ lông bông của tôi cũng có cảm giác về nghi lễ của gia đình”, Wang nói. “Tôi sẽ cảm thấy rất vui nếu tôi có thể thưởng thức bữa ăn thịnh soạn với chúng.”', 'cho1.jpg', NULL, NULL),
(2, 'Các nhà khoa học đang muốn xây dựng một bài kiểm tra tiếng người dành cho chó', 'Thay vì IELTS, chó sẽ phải thi International Human Language Testing System (IHLTS).\r\nChó không biết nói, nhưng sau 23.000 năm sống cùng con người, chúng dường như có thể hiểu được một số từ vựng của chúng ta. Chẳng hạn, khi bạn nói \"ngồi xuống\" hoặc \"ăn nào\", những con chó có thể ngay lập tức phản ứng lại, trong chưa đầy 1 giây.\r\n\r\nMột số từ vựng và tình huống khó hơn, chẳng hạn như khi bạn nói \"ai đó\", những con chó có thể chạy ra cửa vì biết có khách đến. Một vài con chó có thể nhớ cả tên những người hàng xóm xung quanh nhà mình.\r\n\r\nVà nếu được huấn luyện thì sao? Các nghiên cứu trước đây cho thấy khả năng học từ vựng của chó có thể sánh ngang với một đứa trẻ. Cụ thể năm 2004, các nhà nghiên cứu đã huấn luyện được một con chó giống Border Collie nhớ 200 từ vựng chỉ các món đồ chơi khác nhau như \"quả bóng\", \"thú nhồi bông\".\r\nVào năm 2011, một con chó Border collie khác đã chứng minh được khả năng nhớ tới 1.000 từ. Một số con chó đặc biệt thông minh thậm chí có thể học từ mới chỉ sau một vài lần nghe chúng.\r\n\r\nNhưng đó có thể là những con vật siêu phàm trong thế giới loài chó. Thế còn chó cưng nhà bạn thì sao? Nếu tính trên trung bình, một con chó điển hình có thể nhớ được bao nhiêu từ vựng?\r\n\r\nCác nhà khoa học đang có ý định xây dựng một bài kiểm tra từ vựng dành cho chó. Nó có thể giúp chúng ta tìm kiếm ra những con chó tài năng, phục vụ cho nhiều nhiệm vụ chẳng hạn như điều tra, phá án hoặc đơn giản là trở thành một thú cưng ngoan ngoãn biết vâng lời.\r\n\r\nChó có thể hiểu trung bình 89 từ vựng của con người\r\nTrong một nghiên cứu đăng trên tạp chí Khoa học Hành vi Động vật Ứng dụng, các nhà khoa học cho biết loài chó có thể phản hồi với trung bình 89 từ hoặc cụm từ của con người một cách nhất quán. Điều này cho thấy chúng hiểu những gì chúng ta nói.\r\n\r\nPhát hiện được chỉ ra sau một khảo sát trực tuyến 165 người chủ nuôi chó thuộc các giống và lứa tuổi khác nhau. Các nhà khoa học đã phát cho mỗi chủ chó một bảng danh sách 172 từ vựng.\r\n\r\nĐây vốn là danh sách được các bác sĩ nhi khoa phát cho các bậc cha mẹ để kiểm tra khả năng ngôn ngữ của trẻ sơ sinh. Nhưng lần này, nó được sử dụng để kiểm tra những con chó.\r\n\r\nCác chủ sở hữu được yêu cầu đánh giá phản ứng của chó với các từ và cụm từ nhất định trên thang điểm từ 0 đến 5:\r\n\r\nĐiểm thấp nhất có nghĩa là chó của họ không bao giờ phản ứng hoặc phản ứng kém nhất quán với một từ hoặc cụm từ. Trong khi điểm cao nhất có nghĩa là con chó thường làm vậy, ngay cả khi các từ được nói ở các vị trí khác nhau, với giọng điệu khác nhau và bởi những người khác nhau.\r\nKết quả cho thấy hơn 90% những con chó có thể nhận biết được 10 từ hoặc cụm từ cơ bản, bao gồm: tên của nó, các mệnh lệnh \"ngồi xuống\", \"lại đây\", \"ngoan lắm\", \"nằm xuống\", \"đúng yên đó\", \"đợi chút\", \"không\", \"được\" và \"bỏ nó đi\".\r\n\r\nNgược lại, chỉ có một số ít chó hiếm hoi có thể phản ứng một cách nhất quán và cụ thể với các cụm từ và từ như \"lau chân\", \"lại đây nói nhỏ\", \"sủa lớn lên\", \"gạc hươu\", cũng như tên của những người không phải chủ nhân của nó.\r\n\r\nNgoài danh sách từ vựng dành cho trẻ sơ sinh, những người chủ sở hữu chó cũng báo cáo thêm một số từ và mệnh lệnh mà chó cưng của họ có thể hiểu. Những người sở hữu chó huấn luyện chuyên nghiệp báo cáo khả năng học ngôn ngữ của chó cưng tốt nhất.\r\n\r\nTrung bình, chó cảnh sát và chó quân đội sử dụng để tìm kiếm cứu nạn có khả năng hiểu số từ vựng lớn gấp rưỡi chó bình thường. Xét về giống, những con chó chăn cừu (herding), chó săn (hound) và chó sục (terrier) thể hiện khả năng ngôn ngữ của chúng tốt hơn.\r\n\r\n\r\nNhững con chó kém nhất trong nghiên cứu cũng học được 15 từ, trong khi con chó giỏi nhất đã nhớ được tới 215 từ. Trung bình, những con chó có thể phản hồi nhất quán với 89 từ, trong đó có 78 từ thuộc bảng danh sách ban đầu và 11 từ do những người chủ chó tự thêm vào.\r\n\r\n\"Những con chó đóng góp rất nhiều vai trò trong đời sống và xã hội hiện đại của con người. Chúng có thể là một thành viên trong gia đình cho tới những đồng nghiệp được đào tạo để có thể lao động. Khả năng phản ứng của chúng với các tín hiệu phi ngôn ngữ và lời nói của con người là trọng tâm giúp chó đảm nhận được những vai trò này\", các nhà nghiên cứu viết.', 'cho2.jpg', '2022-06-15 03:00:00', '2022-06-17 11:00:00'),
(3, 'Tại sao chó hay nghiêng đầu, và khi đó chúng đang nghĩ gì?', 'Chúng đang muốn tránh cái mũi quá khổ, hướng tai về phía âm thanh hay đang nghĩ gì đó phức tạp trong đầu?\r\nNói chuyện với chú chó cưng của mình, đôi khi, bạn sẽ thấy nó nghiêng đầu sang một bên, nhìn bạn chăm chú tỏ vẻ ngơ ngác rất đáng yêu.\r\n\r\nTrên thực tế, nghiêng đầu là một phản xạ rất thường thấy ở chó. Vì vậy, đã có rất nhiều giả thuyết được đưa ra bởi các chuyên gia động vật học giải thích tại sao chó nghiêng đầu. Nhưng gần như chưa có một nghiên cứu cụ thể nào kiểm tra độ chính xác của các giả thuyết được đưa ra.\r\n\r\nTrong một nghiên cứu công bố trên tạp chí Animal Cognition tuần trước, lần đầu tiên các nhà khoa học đã đưa ra được bằng chứng thuyết phục cho thấy phản xạ nghiêng đầu của chó có một ý nghĩa đặc biệt đối với chúng. Vậy tại sao chó lại nghiêng đầu? Lúc đó, chúng đang nghĩ gì? Hãy cùng tìm hiểu.\r\nCác giả thuyết trước đây\r\n\r\nMột trong những giả thuyết được ủng hộ nhất giải thích hành vi nghiêng đầu ở chó là vì chúng có chiếc mũi dài đang che khuất tầm nhìn ngoại vi. Vì vậy, khi muốn nhìn rõ hơn, chó sẽ nghiêng đầu sang một bên để tránh chiếc mũi quá khổ.\r\n\r\nNếu bạn muốn thử cảm giác tầm nhìn của chó thế nào, hãy thử nắm tay lại thành nắm đấm rồi đặt trước mũi xem thế nào. Và khi nghiêng đầu sang một bên, bạn có thấy tầm nhìn của mình được cải thiện hơn không?\r\n\r\nStanley Coren, một giáo sư tại Đại học British Columbia vì vậy cho rằng chó nghiêng đầu sang bên là để quan sát những biểu cảm trên khuôn mặt chủ nhân tốt hơn. Ông đã thực hiện một khảo sát với 582 người nuôi chó và nhận thấy 62% báo cáo chó cưng nhà mình nghiêng đầu sang bên khi giao tiếp hoặc chơi đùa với chủ.\r\n\r\nTuy nhiên, giả thuyết này khá thiếu thuyết phục nếu tính đến cả phát hiện của Coren trong khảo sát này: Có tới 48% cho mõm phẳng như chó pug hay bulldog vẫn có thói quen nghiêng đầu, mặc dù tầm nhìn của chúng không bị che khuất bởi mũi.\r\n\r\nĐiều này dẫn chúng ta tới với giả thuyết thứ hai, cho rằng chó nghiêng đầu là để nghe tốt hơn. Giống với khi bạn đang ở một nơi đông đúc ồn ào và muốn nghe một âm thanh cụ thể nào đó rõ hơn, bạn sẽ hướng tai mình về phía âm thanh đó, thậm chí đưa tay lên tai mình để hứng âm thanh, chó cưng nhà bạn cũng có thể làm điều đó.\r\n\r\nHơn thế nữa, chó còn có thể điều khiển vành tai của chúng vểnh lên hoặc hướng về phía bạn khi bạn trò chuyện với chúng.\r\n', 'cho3.jpg', '2022-05-31 17:00:00', '2022-05-31 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tiet_hoa_don_ban`
--
ALTER TABLE `chi_tiet_hoa_don_ban`
  ADD PRIMARY KEY (`id_cthdb`);

--
-- Indexes for table `chi_tiet_hoa_don_nhap`
--
ALTER TABLE `chi_tiet_hoa_don_nhap`
  ADD PRIMARY KEY (`id_cthdn`);

--
-- Indexes for table `hoa_don_ban`
--
ALTER TABLE `hoa_don_ban`
  ADD PRIMARY KEY (`id_hdb`);

--
-- Indexes for table `hoa_don_nhap`
--
ALTER TABLE `hoa_don_nhap`
  ADD PRIMARY KEY (`id_hdn`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `loaithucung`
--
ALTER TABLE `loaithucung`
  ADD PRIMARY KEY (`id_loaithucung`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id_magiamgia`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  ADD PRIMARY KEY (`id_ncc`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `thucung`
--
ALTER TABLE `thucung`
  ADD PRIMARY KEY (`id_thucung`),
  ADD KEY `id_NCC` (`id_ncc`),
  ADD KEY `id_loaithucung` (`id_loaithucung`) USING BTREE;

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chi_tiet_hoa_don_nhap`
--
ALTER TABLE `chi_tiet_hoa_don_nhap`
  MODIFY `id_cthdn` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thucung`
--
ALTER TABLE `thucung`
  ADD CONSTRAINT `ref_loaithucung` FOREIGN KEY (`id_loaithucung`) REFERENCES `loaithucung` (`id_loaithucung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ref_ncc` FOREIGN KEY (`id_ncc`) REFERENCES `nha_cung_cap` (`id_ncc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
