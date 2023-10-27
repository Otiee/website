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
