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
