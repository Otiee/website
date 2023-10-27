-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 07:34 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhà hàng`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban`
--

CREATE TABLE `ban` (
  `MaBan` int(50) NOT NULL,
  `MaSanh` int(10) NOT NULL,
  `SoLuongKhach` int(200) NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ban`
--

INSERT INTO `ban` (`MaBan`, `MaSanh`, `SoLuongKhach`, `TrangThai`) VALUES
(212, 1, 10, 'Tốt'),
(213, 1, 10, 'Tốt'),
(214, 2, 10, 'Tốt'),
(215, 2, 15, 'Sửa chửa'),
(216, 3, 12, 'Tốt'),
(217, 3, 15, 'Tốt'),
(219, 4, 12, 'Tốt'),
(220, 4, 12, 'Sửa chữa'),
(221, 5, 15, 'Tốt'),
(222, 5, 12, 'Tốt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHoaDon` int(50) NOT NULL,
  `MaMon` int(50) NOT NULL,
  `SoLuong` int(200) NOT NULL,
  `Gia` int(50) NOT NULL,
  `Tong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHoaDon`, `MaMon`, `SoLuong`, `Gia`, `Tong`) VALUES
(3010, 72837, 2, 2459000, 4918000),
(3010, 78126, 1, 799000, 799000),
(3010, 98526, 2, 870000, 1740000),
(3577, 75165, 5, 1243000, 6215000),
(3577, 76513, 2, 549000, 1098000),
(3577, 98622, 5, 699000, 3495000),
(3676, 71563, 3, 999000, 2997000),
(3676, 98532, 3, 459000, 1377000),
(3865, 79263, 2, 1759000, 3518000),
(3865, 98121, 2, 1050000, 2100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHoaDon` double NOT NULL,
  `Sđt` int(50) NOT NULL,
  `NgayXuatDon` date NOT NULL,
  `TgXuatDon` time NOT NULL,
  `ThanhTien` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHoaDon`, `Sđt`, `NgayXuatDon`, `TgXuatDon`, `ThanhTien`) VALUES
(3010, 978616055, '2023-11-23', '16:00:00', 5891000),
(3125, 971290200, '2023-07-14', '22:39:00', 20167000),
(3577, 936287747, '2023-09-17', '21:53:00', 3527000),
(3676, 961336703, '2023-05-10', '14:25:00', 4374000),
(3757, 922789789, '2023-02-16', '17:15:00', 10808000),
(3785, 35226620, '0000-00-00', '10:53:00', 9199000),
(3789, 342697508, '2023-08-13', '15:59:00', 2043000),
(3862, 978258599, '2023-06-26', '08:26:00', 19650000),
(3865, 287107799, '2023-09-22', '12:13:00', 5618000),
(3896, 397282735, '2023-03-15', '18:43:00', 12657000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `Sđt` int(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `GioiTinh` varchar(50) NOT NULL,
  `DịaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`Sđt`, `MatKhau`, `HoTen`, `GioiTinh`, `DịaChi`) VALUES
(287107799, ' longpham666', ' Phạm Hoàng Long', ' Nam', ' 70 Thông Nhất'),
(342697508, 'sonhoang123', ' Phan Sơn Hoàng', ' Nam', ' 78A Bàu Cát '),
(352266209, ' thuyTrang1605', ' Nguyễn Thị Thùy Trang ', ' Nữ', ' 33 Văn Cao'),
(397282735, ' Tlinh2011', ' Đặng Phương Thảo Linh', 'Nữ ', '72 Sơn Kỳ'),
(922789789, ' SonLa@61', ' Trần Ngọc Vĩ', '  Nam ', '91A/11 Nguyễn Hữu Đàm'),
(936287747, ' tongLinh2902', ' Diệp Tống Lĩnh', ' Nữ', ' 40 Đồng Khởi'),
(961336703, 'Qanhduong102.', 'Dương Quốc Anh', ' Nam', ' 78 Lê Văn Sỹ'),
(971290200, ' thuhadang@1010', ' Đặng Thị Thu Hà', 'Nữ ', '55 Tốn Thất Kha '),
(978285599, 'thuy03081980', '  Nguyễn Thị Thúy ', ' Nữ ', ' 56 Đồng Nai '),
(978616055, '123tunglam', '  Dương Tùng Lâm', ' Nam', '263 Võ Thành Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lương`
--

CREATE TABLE `luong` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `ChucVu` varchar(50) NOT NULL,
  `Luong` int(50) NOT NULL,
  `ThoiGianLam` varchar(50) NOT NULL,
  `Ca` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lương`
--

INSERT INTO `luong` (`MaNV`, `TenNV`, `ChucVu`, `Luong`, `ThoiGianLam`, `Ca`) VALUES
(86389, 'Phạm Thùy Dund', 'Bồi Bàn', 8000000, '12 tiếng ', 'Sáng'),
(88787, 'Vũ Hoàng Sơn', 'Bồi Bàn', 4000000, '6 tiếng ', 'Tối'),
(99090, 'Nguyễn Ngọc Anh Thư ', 'Quản Lý', 15000000, '12 tiếng ', 'Tối'),
(127255, 'Nguyễn Chí Trung', 'Bồi Bàn', 8000000, '12 tiếng', 'Sáng'),
(827378, 'Phạm Ngọc Thiên Di', 'Kế Toán', 1000000, '8 tiếng', 'Tối'),
(832934, 'Lê Thành Danh', 'Đầu Bếp', 20000000, '12 tiếng', 'Sáng'),
(892379, 'Phan Đình Thắng', 'Đầu Bếp', 20000000, '12 tiếng', 'Tối'),
(948328, 'Vũ Phụng Tiên', 'Bồi Bàn', 4000000, '6 tiếng', 'Tối'),
(7023912, 'Phạm Võ Nhật Hưng', 'Quản Lý', 15000000, '12 tiếng', 'Tối'),
(8897892, 'Nguyễn Minh Thư', 'Thư Kí', 1200000, '12 tiếng', 'Sáng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `MaMonAn` int(50) NOT NULL,
  `TenMonAn` varchar(50) NOT NULL,
  `Gia` int(50) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `TrangThai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`MaMonAn`, `TenMonAn`, `Gia`, `MoTa`, `TrangThai`) VALUES
(71563, 'Món Steak Tartare', 2200000, 'Tartare Steak là món thịt bò sống được nhiều người biết tới trên thế giới. Món ăn này thực chất chỉ là thịt bò hoặc đôi khi là thịt ngựa được băm hoặc thái nhỏ. Món ăn được dọn lên bàn của thực khách ', 'Còn'),
(72837, 'Gan ngỗng béo áp chảo', 2459000, 'Foie Gras thường được bán dưới dạng nguyên miếng (Foie Gras Entier) với hương vị đặc trưng béo nhưng không ngấy, cùng một chút muối, tiêu,… Khi chế biến, gan ngỗng được xẻ ra thành những miếng nhỏ hấp', 'Còn'),
(75126, 'Ốc sên nướng (Escargot)', 799000, 'Món ốc sên của người Pháp chế biến rất đặc biệt và hơi cầu kỳ, bởi sự kết hợp của các loại rau mùi như rau thơm, rau quế, hành, hẹ, tỏi và các loại quả hạt như hạt óc chó, hạt quả thông, tiêu, tỏi băm', 'Còn'),
(75327, 'Soufflé', 239000, 'Là loại bánh nướng được làm từ lòng đỏ trứng đánh cùng với lòng trắng, sữa, bơ, bột mì đường, có khi cho thêm phô mai, đòi hỏi sự tập trung rất cao độ của người đầu bếp và được thưởng thức ngay khi bá', 'Hết'),
(76121, 'Gà số vang (Coq au vin)', 2599000, 'Coq au vin là một trong những món truyền thống của ẩm thực Pháp. Món ăn này được chế biến khá đơn giản bằng cách om thịt gà với rượu vang, bơ, thịt xông khói, hành tây và tỏi. Độ đậm đà của nước sốt v', ' Còn'),
(76513, 'Bánh Crepe', 549000, 'Xuất xứ từ vùng Bretagne, nước Pháp. Bánh được làm từ bột mì hay bột lúa mạch trộn với trứng, sữa, bơ sau đó tráng mỏng hình tròn rồi chiên vàng hai mặt. Bạn có thể ăn crepe kèm với kem lạnh, sốt soco', 'Còn'),
(78126, 'Soupe À I’oignon', 455000, 'Món súp Pháp truyền thống được làm từ hành tây, thịt bò, dùng kèm bánh mì nướng và lớp pho mát tan chảy phía trên. Món súp này được cho là có mặt từ thời La Mã, còn phiên bản hiện tại có mặt từ thế kỷ', 'Còn'),
(78593, 'Món Salade Nicoise', 999000, 'Hiện nay đây là một trong những món ăn nổi tiếng thường có mặt trong thực đơn của các nhà hàng Pháp với nguyên liệu chính là các loại rau củ xanh mát, giòn ngọt được trộn kèm với cá ngừ, cà chua, trứn', 'Còn'),
(79263, 'Súp hải sản kiểu Pháp (Bouillabaise)', 1759000, ' Bouillabaisse nấu với các loại thảo mộc đặc biệt như nghệ tây, tỏi, vỏ cam zest, lá nguyệt quế (bay leaf) và thì là (fennel) rất tốt cho sức khỏe.', ' Còn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(50) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Sđt` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `Chức Vụ` varchar(200) NOT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `MatKhau`, `Sđt`, `Email`, `GioiTinh`, `Chức Vụ`, `DiaChi`) VALUES
(86389, 'Phạm Thùy Dung', 'dungthuy@123', 396543251, 'phamthuydung123@gmai.com', 'Nữ', 'Bồi Bàn', 'Số 208 đường 3/2 Phường 12 Quận 10'),
(88787, 'Vũ Hoàng Sơn', 'sonvu69', 2147483647, 'vuhoangson1301@gmail.com', 'Nam', 'Bồi Bàn', 'Số 10 Hàn Thuyên Phường Bình Thọ Quận Thủ Đức'),
(99090, 'Nguyễn Ngọc Anh Thư', 'anhthu1102 ', 2147483647, 'nguyenngocanhthu1102@gmail.com', 'Nữ', 'Quản Lý', 'Số 26/23 Nguyễn Minh Hoàng Phường 12 Quận Tân Bình'),
(127255, ' Nguyễn Chí Trung', 'trungnguyen99', 2147483647, 'chitrung123@gmail.com', 'Nam', 'Bồi Bàn', 'Số 168A Võ Thị Sáu Phường 8 Quận 3'),
(827378, 'Phạm Ngọc Thiên Di', 'Baobinhredflag123', 2147483647, 'dipham02@gmail.com', 'Nữ', 'Kế Toán', '06 Hòa Bình Phường An Cư, Quận Ninh Kiều'),
(832934, 'Lê Thành Danh', 'DanhLe13579', 2147483647, 'danhle2607@gmail.com', 'Nam', 'Đầu Bếp', ' Số 118/49 Bạch Đằng Phường 24 Quận Bình Thạnh'),
(892379, 'Phan Đình Thắng', 'dinhthang35', 983051303, 'thangphan2301@gmail.com', 'Nam', 'Đầu Bếp', 'Số 64B1 Xuân Thủy Phường Thảo Điền Quận 2'),
(948328, 'Vũ Phụng Tiên', ' Tienphung.', 2147483647, 'phungtien33@gmail.com', 'Nữ', 'Bồi Bàn', '940 Ba Tháng Hai Phường 15 Quận 11'),
(7023912, 'Phạm Võ Nhật Hùng', 'Fabo262', 2147483647, 'nhathungpham99@gmail.com', 'Nam', 'Quản Lý', '03 Nguyễn Oanh Phường 10 Quận Gò Vấp'),
(8897892, 'Nguyễn Minh Thư', 'bingchiling!', 366901741, 'tieuthu16@gmail.com', 'Nữ', 'Thư Kí', '664 Trần Phú Phường Quyết Thắng Quận Bình Tân');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhatkidatban`
--

CREATE TABLE `nhatkidatban` (
  `MaNhatKi` int(50) NOT NULL,
  `MaHoaDon` int(50) NOT NULL,
  `Maban` int(50) NOT NULL,
  `TenKhachHang` varchar(50) NOT NULL,
  `Sđt` int(50) NOT NULL,
  `SoLuongKhach` int(50) NOT NULL,
  `NgayDat` date NOT NULL,
  `TgNhanBan` time NOT NULL,
  `GhiChu` varchar(50) NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhatkidatban`
--

INSERT INTO `nhatkidatban` (`MaNhatKi`, `MaHoaDon`, `Maban`, `TenKhachHang`, `Sđt`, `SoLuongKhach`, `NgayDat`, `TgNhanBan`, `GhiChu`, `TrangThai`) VALUES
(10012884, 3862, 217, 'Nguyễn Thị Thúy', 978258599, 2, '2023-06-19', '20:16:00', 'Null', ' Xong'),
(10016872, 3010, 218, 'Dương Tùng Lâm', 978616055, 5, '2023-11-22', '11:58:00', 'Null', 'Xong'),
(10016872, 3676, 215, 'Dương Quốc Anh', 961336703, 4, '2023-05-09', '14:33:00', 'Null ', 'Xong'),
(10017623, 3125, 212, 'Đặng Thị Thu Hà', 971290200, 2, '2023-07-13', '20:16:00', 'Null', 'Xong'),
(10017812, 3896, 215, 'Đặng Phương Thảo Linh', 397282735, 4, '2023-03-14', '16:30:00', 'Null ', 'Xong'),
(10017832, 3785, 222, 'Nguyễn Thị Thùy Trang', 352266209, 7, '2023-03-17', '17:15:00', 'Null', 'Xong'),
(10017832, 3865, 212, 'Phạm Hoàng Long', 287107799, 8, '2023-09-22', '17:14:00', 'Null', 'Xong'),
(10018078, 3789, 214, 'Phan Sơn Hoàng', 342697508, 5, '2023-08-12', '15:20:00', 'Null', 'Xong'),
(10018672, 3757, 216, 'Trần Ngọc Vĩ', 922789789, 10, '2023-02-15', '13:13:00', 'Null', 'Xong'),
(10018748, 3577, 213, 'Diệp Tống Lĩnh', 936287747, 2, '2023-09-16', '12:01:00', 'Null ', 'Xong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanh`
--

CREATE TABLE `sanh` (
  `MaSanh` int(10) NOT NULL,
  `MaNV` int(50) NOT NULL,
  `TenSanh` varchar(50) NOT NULL,
  `VịTri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanh`
--

INSERT INTO `sanh` (`MaSanh`, `MaNV`, `TenSanh`, `VịTri`) VALUES
(2, 86389, 'Lầu 2', 'B'),
(3, 88787, 'Lầu 3', 'B'),
(3, 99090, 'Lầu 3', 'A'),
(4, 127255, 'Lầu 4', 'C'),
(4, 832934, 'Lầu 4', 'A'),
(3, 892379, 'Lầu 3', 'C'),
(1, 948328, 'Lầu 1', 'B'),
(2, 7023912, 'Lầu 2', 'A'),
(1, 8273781, 'Lầu 1', 'A'),
(0, 8897892, 'Tầng Hầm', 'G');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `đồ uống`
--

CREATE TABLE `douong` (
  `MaDoUong` int(11) NOT NULL,
  `TenDoUong` varchar(50) NOT NULL,
  `Gia` int(50) NOT NULL,
  `MoTa` varchar(200) NOT NULL,
  `TrangThai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `đồ uống`
--

INSERT INTO `douong` (`MaDoUong`, `TenDoUong`, `Gia`, `MoTa`, `TrangThai`) VALUES
(98121, 'Rượu Vang Primitivo Del Salento Golf Limited', 1050000, 'Rượu vang đỏ Ý Primitivo del Salento Golf Limited là chai rượu vang được làm từ giống nho Primitivo ngon chín mọng không hề chứa chất bảo quản, có nồng độ cồn 16%vol.', 'Còn'),
(98123, 'Pesi', 150000, 'Thức uống có ga sảng khoái.', 'Hết'),
(98436, 'Mojito', 500000, 'Đây là một thức uống Mojito truyền thống của người Cuba, được pha chế từ năm thành phần chính: đường mật mía, rượu rum trắng, rượu sủi tăm, nước chanh tươi, hoặc soda cùng với chút lá bạc hà.', 'Còn'),
(98526, 'Pavlova Cocktail', 870000, 'một loại cocktail pha từ rượu Voldka vùng Belvedere kết hợp với Brandy hương đào có vị chua dùng kèm một chút kem tươi.', 'Còn'),
(98532, 'Cocktail Bốn mùa', 459000, 'là sự pha trộn của các loại nước ép trái cây vùng biển như cam, gừng, sả, chanh. Đây xứng đáng là loại thức uống đại diện cho bốn mùa của đất nước Estonia.', 'Hết'),
(98622, 'Tequila', 699000, 'là một loại đồ uống chưng cất được làm từ cây agave xanh , chủ yếu ở khu vực xung quanh thành phố Tequila 65 km (40 dặm) về phía tây bắc của Guadalajara và ở Cao nguyên Jaliscan ( Los Altos de Jalisco', 'Còn'),
(98637, 'Rượu Sake', 1900000, 'Đây là loại rượu không màu như Gin và Vodka hoặc có màu hay vàng nhạt, trong suốt và có độ cồn trung bình là 15%. Đối với cá loại rượu vang khác thì độ cồn trung bình khoảng 12%.', 'Hết'),
(98643, 'Rượu Whiskey Scotland', 2750000, 'Rượu Whiskey đại mạch là dung dịch màu hổ phách với đặc tính hảo hạng vô cùng tuyệt vời, đậm đà, đúng nồng độ và mang hương vị riêng biệt của đất Scotland.', 'Còn'),
(98773, 'Rượu vang Superius Quod Hispano-Suiza Thượng hạng', 2245000, 'Rượu Superius Quod Hispano-Suiza Thượng hạng có mầu đỏ đậm đẹp mắt. Hương thơm mạnh mẽ và thanh lịch của các loại nho Bobal, Cabernet Sauvignon, Merlot và Syrah.', 'Còn'),
(98938, 'Coca', 150000, 'Thức uống có ga sảng khoái.', 'Còn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`MaBan`) USING BTREE;

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHoaDon`,`MaMon`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHoaDon`,`Sđt`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Sđt`);

--
-- Chỉ mục cho bảng `lương`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MaMonAn`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`,`Sđt`);

--
-- Chỉ mục cho bảng `nhatkidatban`
--
ALTER TABLE `nhatkidatban`
  ADD PRIMARY KEY (`MaNhatKi`,`MaHoaDon`,`Maban`);

--
-- Chỉ mục cho bảng `sanh`
--
ALTER TABLE `sanh`
  ADD PRIMARY KEY (`MaNV`) USING BTREE;

--
-- Chỉ mục cho bảng `đồ uống`
--
ALTER TABLE `douong`
  ADD PRIMARY KEY (`MaDoUong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
