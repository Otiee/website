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
