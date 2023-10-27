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