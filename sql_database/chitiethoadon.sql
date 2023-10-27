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
