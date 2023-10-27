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
