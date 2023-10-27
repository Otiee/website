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