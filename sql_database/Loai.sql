CREATE TABLE Table_MaLoai(
    MaLoai INT AUTO_INCREMENT,
    TenLoai varchar(30),
    MoTa LONGTEXT,
    HinhAnh varchar(50),
    PRIMARY KEY (MaLoai)
);
INSERT INTO Table_MaLoai (MaLoai, TenLoai, HinhAnh, MoTa) VALUES
(1,'Món Khai Vị','khaivi.jpg','Món khai vị còn được gọi là món ăn nhẹ do “tính chất” nhỏ nhắn, không chiếm nhiều thời gian chế biến. Món khai vị có hương vị không quá nổi bật vì mục đích chính là để khởi đầu một bữa ăn.'),
(2,'Món Chính','monchinh.jpg','Món chính là món đặc trưng hoặc món chủ yếu trong bữa ăn gồm nhiều món.'),
(3,'Tráng Miệng','trangmieng.jpg','Tráng miệng là một món ăn nhẹ (có thể là bánh kẹo) dùng khi kết thúc một bữa ăn chính. Khẩu phần nhỏ thôi nhưng trình bày đẹp mắt. Món này thường bao gồm các loại thực phẩm ngọt, và có thể là đồ uống như rượu vang tráng miệng hoặc rượu mùi, nhưng có thể bao gồm cà phê, pho mát, hạt quả, hoặc các món ăn khác.'),
(4,'Thức Uống','thucuong.jpg','Thức uống hay đồ uống là một loại chất lỏng được đặc biệt chế biến để con người có thể tiêu thụ, có tác dụng giải nhiệt và giải khát. Thức uống đóng vai trò quan trọng trong văn hóa của con người. Các loại thức uống phổ biến gồm nước uống, sữa, cà phê, trà, sô-cô-la nóng, nước sinh tố và nước ngọt.');
