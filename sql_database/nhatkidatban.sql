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
