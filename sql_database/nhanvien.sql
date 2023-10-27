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
