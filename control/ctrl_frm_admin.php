<?php
    include("connect_admin.php");

    class ctrl_frm_admin extends connect_admin
    {
    function lay_dtkh()
    {
        $sql = "select * from table_khachhang";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_dtkh_tim($tim)
    {
        $sql = "select * from table_khachhang where HoTen like '%$tim%' or Phone like '%$tim%'";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_dtnv()
    {
        $sql = "select * from table_nhanvien";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_dtnv_tim($tim)
    {
        $sql = "select * from table_nhanvien where NickName like '%$tim%' or MaNV like '%$tim%'";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function menu()
    {
        $sql = "select * from table_menu";
        $kq = $this->link->query($sql);
        return $kq;
    }

    // Lấy món ăn theo id để chỉnh sửa
    function chinh_sua_mon_an($id)
    {
        $sql = "select * from table_menu where MaMonAn = '$id'";
        $kq = $this->link->query($sql);
        return $kq;
    }
    //Lấy loại mã số = tên
    function lay_dtmenu()
    {
        $sql = "select * from table_menu,table_MaLoai where table_maloai.MaLoai = table_menu.MaLoai";
        $kq  = $this->link->query($sql);
        return $kq;
    }

    function lay_dtmenu_tim($tim)
    {
        $sql = "select * from table_menu,table_MaLoai where table_maloai.MaLoai = table_menu.MaLoai and TenMonAn like '%$tim%'";
        $kq  = $this->link->query($sql);
        return $kq;
    }
    //Test
    function timkiem($id_timkiem)
    {
        $sql = "select * from table_khachhang where HoTen like '%$id_timkiem%'";
        $kq  = $this->link->query($sql);
        return $kq;
    }
    //index
    function lay_dtloai($id_loaimon)
    {
        $sql = "select * from table_menu,table_maloai where table_menu.MaLoai = '$id_loaimon' and table_maloai.MaLoai = table_menu.MaLoai";
        $kq  = $this->link->query($sql);
        return $kq;
    }

    // Danh sách loại
    function lay_danhsachloai()
    {
        $sql = "select * from table_MaLoai";
        $kq  = $this->link->query($sql);
        return $kq;
    }

    function dem_menu_theo_loai($id_candem)
    {
        $sql = "select count(*) as total from table_menu where MaLoai = '$id_candem'";
        $kq  = $this->link->query($sql);
        $row = $kq->fetch_assoc();
        $total = $row['total'];
        return $total;
    }

    function dem_menu_tong()
    {
        $sql = "select count(*) as total from table_menu";
        $kq  = $this->link->query($sql);
        $row = $kq->fetch_assoc();
        $total = $row['total'];
        return $total;
    }

    function chinhsua_khachhang($id_kh)
    {
        $sql = "select * from table_khachhang where Phone = '$id_kh'";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function chitiet_monan($id_monan)
    {
        $sql = "select * from table_menu,table_maloai where table_menu.MaMonAn = '$id_monan' and table_maloai.MaLoai = table_menu.MaLoai";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function timkiem_monan($id_timkiem)
    {
        $sql = "select * from table_menu,table_maloai where TenMonAn like '%$id_timkiem%' and table_maloai.MaLoai = table_menu.MaLoai";
        $kq  = $this->link->query($sql);
        return $kq;
    }

    //Lấy top 5 số lượng bán trong tháng
    function lay_top_5_mon_trong_thang($thangHienTai)
    {
        $sql = "SELECT table_menu.MaMonAn, table_maloai.TenLoai, table_menu.Gia, table_menu.HinhAnh, table_menu.TenMonAn, SUM(table_chitiethoadon.SoLuong) AS TongSoLuong
        FROM table_chitiethoadon
        JOIN table_menu ON table_chitiethoadon.MaMonAn = table_menu.MaMonAn
        JOIN table_maloai ON table_menu.MaLoai = table_maloai.MaLoai
        JOIN table_hoadon ON table_chitiethoadon.MaHoaDon = table_hoadon.MaHoaDon
        JOIN table_nhatkydatban ON table_nhatkydatban.MaHoaDon = table_hoadon.MaHoaDon
        WHERE MONTH(table_hoadon.NgayLapDon) = '$thangHienTai' AND table_nhatkydatban.TrangThai = 3
        GROUP BY table_menu.MaMonAn
        ORDER BY TongSoLuong DESC
        LIMIT 5;";
        $kq = $this->link->query($sql);
        return $kq;
    }

    //Lấy tổng doanh thu trong tháng
    function lay_tong_doanh_thu_thang($thangHienTai)
    {
        $sql = "SELECT SUM(table_chitiethoadon.SoLuong * table_chitiethoadon.DonGia) AS TongDoanhThu
        FROM table_hoadon
        JOIN table_nhatkydatban ON table_nhatkydatban.MaHoaDon = table_hoadon.MaHoaDon
        JOIN table_chitiethoadon ON table_chitiethoadon.MaHoaDon = table_hoadon.MaHoaDon
        WHERE MONTH(table_hoadon.NgayLapDon) = '$thangHienTai'
        AND table_nhatkydatban.TrangThai = 3";
        $kq = $this->link->query($sql);
        return $kq;
    }

    //Lấy tổng số đơn hủy
    function lay_tong_don_huy($thangHienTai)
    {
        $sql = "SELECT COUNT(*) as Tong FROM table_nhatkydatban WHERE MONTH(NgayDatCho) = '$thangHienTai' AND TrangThai = 0;";
        $kq = $this->link->query($sql);
        return $kq;
    }

    //Lấy tổng số đơn hủy
    function lay_tong_don_xac_nhan($thangHienTai)
    {
        $sql = "SELECT COUNT(*) as Tong FROM table_nhatkydatban WHERE MONTH(NgayDatCho) = '$thangHienTai' AND TrangThai = 3;";
        $kq = $this->link->query($sql);
        return $kq;
    }

    //Giao diện - Hiển thị trạng thái
    function hien_thi_trang_thai_mon($id_trangthai)
    {
        if ($id_trangthai == 1)
        {
            echo "Mở bán";
        }
        else
        {
            echo "Ẩn món";
        }
    }

    function hien_thi_mau_trang_thai_mon($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            echo "style='background-color: #ffe1d5; color: #e66430;'";
        }
    }

    function checked_trang_thai_mon($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            echo "checked";
        }
    }

    function hien_thi_trang_thai_tintuc($id_trangthai)
    {
        if ($id_trangthai == 1)
        {
            echo "Công khai";
        }
        else
        {
            echo "Ẩn tin";
        }
    }

    function hien_thi_mau_trang_thai_tintuc($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            echo "style='background-color: #ffe1d5; color: #e66430;'";
        }
    }

    function checked_trang_thai_tintuc($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            echo "checked";
        }
    }

    // Tin Tức //

    function lay_tintuc()
    {
        $sql = "select * from table_tintuc";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_tintuc_tim($tim)
    {
        $sql = "select * from table_tintuc where TieuDe like '%$tim%' or MaID like '%$tim%'";
        $kq = $this->link->query($sql);
        return $kq;
    }
    function chitiet_lay_tintuc($id)
    {
        $sql = "select * from table_tintuc where MaID = '$id'";
        $kq = $this->link->query($sql);
        return $kq;
    }


    function danhsach_don_dat_ban_hientai()
    {
        $sql = "SELECT MaNhatKy, MaBan, ThoiGianNhanBan, NgayDatCho, SoNguoi, SDTKhachHang, TrangThai
        FROM table_nhatkydatban
        WHERE DATE(NgayDatCho) = DATE(NOW())
        AND HOUR(ThoiGianNhanBan) BETWEEN HOUR(NOW()) AND HOUR(DATE_ADD(NOW(), INTERVAL 1 HOUR)) AND (TrangThai = '1' OR TrangThai = '2')";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_hientai_tim($tim)
    {
        $sql = "SELECT MaNhatKy, MaBan, ThoiGianNhanBan, NgayDatCho, SoNguoi, SDTKhachHang, TrangThai
        FROM table_nhatkydatban
        WHERE DATE(NgayDatCho) = DATE(NOW())
        AND HOUR(ThoiGianNhanBan) BETWEEN HOUR(NOW()) AND HOUR(DATE_ADD(NOW(), INTERVAL 1 HOUR)) AND (TrangThai = '1' OR TrangThai = '2') AND MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%'";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function hienthi_don_dat_ban_hientai()
    {
        $sql = "SELECT COUNT(MaNhatKy) As SoLuong
        FROM table_nhatkydatban
        WHERE DATE(NgayDatCho) = DATE(NOW())
        AND HOUR(ThoiGianNhanBan) BETWEEN HOUR(NOW()) AND HOUR(DATE_ADD(NOW(), INTERVAL 1 HOUR)) AND (TrangThai = '1' OR TrangThai = '2')";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_tre()
    {
        $sql = "select * from table_nhatkydatban WHERE (TrangThai = 2 Or TrangThai = 1) AND CONCAT(NgayDatCho, ' ', ThoiGianNhanBan) <= NOW();";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_tre_tim($tim)
    {
        $sql = "select * from table_nhatkydatban WHERE (TrangThai = 2 Or TrangThai = 1) AND CONCAT(NgayDatCho, ' ', ThoiGianNhanBan) <= NOW() AND MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_moi()
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 1;";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_moi_tim($tim)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 1 AND MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_huy()
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 0;";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_huy_tim($tim)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 0 and MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_huy_1($date1,$date2)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 0 and NgayDatCho >= '$date1 00:00:00' AND NgayDatCho <= '$date2 23:59:59';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_huy_1_tim($date1,$date2,$tim)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 0 and NgayDatCho >= '$date1 00:00:00' AND NgayDatCho <= '$date2 23:59:59' and MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_thanh_cong()
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 3;";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_thanh_cong_tim($tim)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 3 and MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_thanh_cong_1($date1, $date2)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 3 and NgayDatCho >= '$date1 00:00:00' AND NgayDatCho <= '$date2 23:59:59';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_thanh_cong_1_tim($date1, $date2,$tim)
    {
        $sql = "select * from table_nhatkydatban where TrangThai = 3 and NgayDatCho >= '$date1 00:00:00' AND NgayDatCho <= '$date2 23:59:59' and MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%';";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_hoa_don_temp()
    {
        $sql = "select * from table_chitiethoadon
        JOIN table_menu ON table_menu.MaMonAn = table_chitiethoadon.MaMonAn
        JOIN table_maloai ON table_menu.MaLoai = table_maloai.MaLoai
        JOIN table_hoadon ON table_hoadon.MaHoaDon = table_chitiethoadon.MaHoaDon
        JOIN table_nhatkydatban ON table_nhatkydatban.MaNhatKy = table_hoadon.MaHoaDon
        where MaNhatKy = 1";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function hien_thi_trang_thai_ban($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            echo "Hủy bỏ";
        }
        else if ($id_trangthai == 1)
        {
            echo "Đơn mới";
        }
        else if ($id_trangthai == 2)
        {
            echo "Đang chờ";
        }
        else if ($id_trangthai == 3)
        {
            echo "Hoàn thành";
        }
    }

    function hien_thi_mau_trang_thai_ban($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            echo "style='background-color: #ffe1d5; color: #e66430;'";
        }
        else if ($id_trangthai == 1)
        {
            echo "style='background-color: #cde3f9; color: #4c95dd;'";
        }
        else if ($id_trangthai == 2)
        {
            echo "style='background-color: #fdf6d9; color: #ffb500;'";
        }
    }

    function lay_nhat_ky_theo_id($id)
    {
        $sql = "select * from table_nhatkydatban
        JOIN table_hoadon ON table_hoadon.MaHoaDon = table_nhatkydatban.MaHoaDon
        JOIN table_ban ON table_nhatkydatban.MaBan = table_ban.MaBan
        JOIN table_sanh ON table_sanh.MaSanh = table_ban.MaSanh
        where MaNhatKy = $id";
        $kq = $this->link->query($sql);
        return $kq;
    }
    
    function lay_hoa_don_theo_id($id)
    {
        $sql = "select table_nhatkydatban.*, table_hoadon.*, table_chitiethoadon.*, table_menu.*, table_maloai.*, SUM(table_chitiethoadon.SoLuong) AS TongSoLuong from table_nhatkydatban
        JOIN table_hoadon ON table_hoadon.MaHoaDon = table_nhatkydatban.MaHoaDon
        JOIN table_chitiethoadon ON table_hoadon.MaHoaDon = table_chitiethoadon.MaHoaDon
        JOIN table_menu ON table_menu.MaMonAn = table_chitiethoadon.MaMonAn
        JOIN table_maloai ON table_menu.MaLoai = table_maloai.MaLoai
        where MaNhatKy = $id
        GROUP BY table_chitiethoadon.MaMonAn;";
        $kq = $this->link->query($sql);
        return $kq;
    }



    function check_mau_trang_thai_don($id_trangthai)
    {
        if ($id_trangthai == 0)
        {
            $mau = "checked";
            $mau1 = "";
            $mau2 = "";
            $mau3 = "";
        }
        else if ($id_trangthai == 2)
        {
            $mau = "";
            $mau1 = "";
            $mau2 = "checked";
            $mau3 = "";
        }
        else if ($id_trangthai == 3)
        {
            $mau = "";
            $mau1 = "";
            $mau2 = "";
            $mau3 = "checked";
        }
        else if($id_trangthai == 1)
        {
            $mau = "";
            $mau1 = "";
            $mau2 = "";
            $mau3 = "";
        }
    }

  

    function lay_danh_sach_loai_mon_an_1()
    {
        $sql = "select COUNT(table_menu.MaLoai) AS SoLuongLoai, table_menu.MaLoai, MAX(Gia) AS GiaCaoNhat, MIN(gia) AS GiaThapNhat, HinhLoai,TenLoai
        FROM table_menu, table_maloai
        WHERE table_menu.MaLoai = table_maloai.MaLoai 
        GROUP BY table_menu.MaLoai";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_the_loai_theo_id($id)
    {
        $sql ="select * from table_menu, table_maloai where table_maloai.MaLoai = table_menu.MaLoai AND table_menu.MaLoai = $id";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function lay_the_loai_theo_id_tim($id, $tim)
    {
        $sql ="select * from table_menu, table_maloai where table_maloai.MaLoai = table_menu.MaLoai AND table_menu.MaLoai = $id and TenMonAn like '%$tim%'";
        $kq = $this->link->query($sql);
        return $kq;
    }

    // Khách hàng //
    
    function lay_nhanvien_details($id)
    {
        $sql = "select * from table_nhanvien where MaNV = $id";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function top_5_kh_diem_cao_nhat_thang($thangHienTai)
    {
        $sql = "select table_khachhang.Phone, HoTen,DiaChi, ROUND(SUM((table_chitiethoadon.SoLuong * table_chitiethoadon.DonGia)/1000))
        As TongDiem  from table_khachhang, table_hoadon, table_chitiethoadon, table_nhatkydatban
        WHERE table_khachhang.Phone = table_hoadon.Phone AND table_chitiethoadon.MaHoaDon = table_hoadon.MaHoaDon 
        AND table_nhatkydatban.MaHoaDon = table_hoadon.MaHoaDon AND table_nhatkydatban.TrangThai = 3
        AND MONTH(table_hoadon.NgayLapDon) = '$thangHienTai'
        GROUP BY table_khachhang.Phone
        ORDER BY TongDiem DESC LIMIT 5";
        $kq = $this->link->query($sql);
        return $kq;
    }

    // Hóa đơn //
    // function lay_hoa_don_temp()
    // {
    //     $sql = "select table_chitiethoadon.MaHoaDon, NgayLapDon,Phone, SUM(table_chitiethoadon.DonGia*table_chitiethoadon.SoLuong) AS TongTien
    //     from table_hoadon, table_chitiethoadon
    //     WHERE table_hoadon.MaHoaDon = table_chitiethoadon.MaHoaDon
    //     GROUP BY table_chitiethoadon.MaHoaDon";
    //     $kq = $this->link->query($sql);
    //     return $kq;
    // }





    // Phân trang //
    function phantrang_datban($order_num, $page)
        {
            $sql_pt = "SELECT * FROM table_nhatkydatban";
            $kq = $this->link->query($sql_pt);
            $total_sql = $kq->num_rows;
            $total_page = ceil($total_sql/$order_num);
            if ($total_sql > $order_num)
            {
                $back = $page - 1;
                $front = $page + 1;
                if ($page > 1)
                    echo "<a class = 'button-phantrang' href='admin.php?pid=5&page=$back'> < </a>";
                for ($i = 1; $i <= $total_page; $i++)
                {
                    if ($i == $page)
                        echo "<b class = 'button-phantrang' '> $i </b>";
                    else
                        if ($i > $page - 3 && $i < $page + 3)
                            echo "<a class = 'button-phantrang' href='admin.php?pid=5&page=$i'> $i </a>";
                }
                if ($page < $total_page)
                    echo "<a class = 'button-phantrang' href='admin.php?pid=5&page=$front'> > </a>";
            }
        }

    // Lấy danh sách đơn đặt bàn - phân trang
    function danhsach_don_dat_ban($hienthi,$page)
    {

        $x = ceil(($page-1)*$hienthi);
        $sql = "select * from table_nhatkydatban limit $x,$hienthi";
        $kq = $this->link->query($sql);
        return $kq;
    }

    function danhsach_don_dat_ban_tim($hienthi,$page,$tim)
    {

        $x = ceil(($page-1)*$hienthi);
        $sql = "select * from table_nhatkydatban where MaNhatKy like '%$tim%' or TenKhachHang like '%$tim%' limit $x,$hienthi";
        $kq = $this->link->query($sql);
        return $kq;
    }

        function phantrang_hoadon($order_num, $page)
        {
            $sql_pt = "select table_chitiethoadon.MaHoaDon, NgayLapDon,Phone, SUM(table_chitiethoadon.DonGia*table_chitiethoadon.SoLuong) AS TongTien
            from table_hoadon, table_chitiethoadon
            WHERE table_hoadon.MaHoaDon = table_chitiethoadon.MaHoaDon
            GROUP BY table_chitiethoadon.MaHoaDon";
            $kq = $this->link->query($sql_pt);
            $total_sql = $kq->num_rows;
            $total_page = ceil($total_sql/$order_num);
            if ($total_sql > $order_num)
            {
                $back = $page - 1;
                $front = $page + 1;
                if ($page > 1)
                    echo "<a class = 'button-phantrang' href='admin.php?pid=6&page=$back'> < </a>";
                for ($i = 1; $i <= $total_page; $i++)
                {
                    if ($i == $page)
                        echo "<b class = 'button-phantrang' '> $i </b>";
                    else
                        if ($i > $page - 3 && $i < $page + 3)
                            echo "<a class = 'button-phantrang' href='admin.php?pid=6&page=$i'> $i </a>";
                }
                if ($page < $total_page)
                    echo "<a class = 'button-phantrang' href='admin.php?pid=6&page=$front'> > </a>";
            }
        }  

        function lay_hoa_don($hienthi,$page)
        {
    
            $x = ceil(($page-1)*$hienthi);
            $sql = "select table_chitiethoadon.MaHoaDon, NgayLapDon,Phone, SUM(table_chitiethoadon.DonGia*table_chitiethoadon.SoLuong) AS TongTien
            from table_hoadon, table_chitiethoadon
            WHERE table_hoadon.MaHoaDon = table_chitiethoadon.MaHoaDon
            GROUP BY table_chitiethoadon.MaHoaDon limit $x,$hienthi";
            $kq = $this->link->query($sql);
            return $kq;
        }

        function lay_hoa_don_thong_ke($date1, $date2)
        {
    
            $sql = "SELECT table_hoadon.MaHoaDon,Phone,NgayLapDon, sum(table_chitiethoadon.SoLuong * table_chitiethoadon.DonGia) As Tong
            FROM table_hoadon, table_chitiethoadon
            WHERE table_chitiethoadon.MaHoaDon = table_hoadon.MaHoaDon AND NgayLapDon >= '$date1 00:00:00' AND NgayLapDon <= '$date2 23:59:59'
            GROUP BY table_hoadon.MaHoaDon;";
            $kq = $this->link->query($sql);
            return $kq;
        }

        function lay_hoa_don_thong_ke_tongtien($date1, $date2)
        {
            $sql = "SELECT table_hoadon.MaHoaDon,Phone,NgayLapDon, sum(table_chitiethoadon.SoLuong * table_chitiethoadon.DonGia) As Tong
            FROM table_hoadon, table_chitiethoadon
            WHERE table_chitiethoadon.MaHoaDon = table_hoadon.MaHoaDon AND NgayLapDon >= '$date1 00:00:00' AND NgayLapDon <= '$date2 23:59:59';";
            $kq = $this->link->query($sql);
            return $kq;
        }

        function lay_chi_tiet_hoa_don($id)
        {
            $sql = "SELECT Phone, table_hoadon.MaHoaDon, table_chitiethoadon.MaMonAn, NgayLapDon,DonGia, SUM(table_chitiethoadon.SoLuong*table_chitiethoadon.DonGia) As Tong, SUM(table_chitiethoadon.SoLuong) As SoLuongMon, TenLoai
            FROM table_hoadon, table_chitiethoadon, table_menu, table_maloai
            WHERE table_hoadon.MaHoaDon = table_chitiethoadon.MaHoaDon AND table_menu.MaMonAn = table_chitiethoadon.MaMonAn
            AND table_menu.MaLoai = table_maloai.MaLoai
            AND table_hoadon.MaHoaDon = '$id'
            GROUP BY table_chitiethoadon.MaMonAn;";
            $kq = $this->link->query($sql);
            return $kq;
        }
        
        function lay_thong_tin_hoa_don($id)
        {
            $sql = "select * from table_hoadon where MaHoaDon = $id";
            $kq = $this->link->query($sql);
            return $kq;
        }


        // Login
        function kiemtra($id_sdt, $id_matkhau)
        {
            $sql = "select * from table_nhanvien where MaNV = '$id_sdt' and Pass = '$id_matkhau' and Levels = 2";
            $kq = $this->link->query($sql);
            return $kq;
        }



    }


    
    
?>