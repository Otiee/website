<?php
    if (!isset($_GET["page"]))
    {
        $page = 1;
    }
    else $page = intval($_GET["page"]);
    $hienthi = 10;
?>


<?php
    include_once("control/ctrl_frm_admin.php");
    $ctrl_datban_section = new ctrl_frm_admin();
    $kq_soluong = $ctrl_datban_section->hienthi_don_dat_ban_hientai();

    if(isset($_GET["sap_toi"]))
    {
        
        if (isset($_POST["tim_kiem"]))
    {
        $kq_danhsach_1_gio_toi = $ctrl_datban_section->danhsach_don_dat_ban_hientai_tim($_POST["tim_kiem"]);
    }
    else{
        $kq_danhsach_1_gio_toi = $ctrl_datban_section->danhsach_don_dat_ban_hientai();
    }


?>
<div class = "header-infor">
    
                    <h1> <a href="admin.php?pid=5"> Đơn đặt bàn </a>  -> Bàn nhận 1 giờ tới </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                        <div class = "add-user" >
                                <?php
                                    while ($row = $kq_soluong->fetch_assoc())
                                {
                                ?>
                            <a href="admin.php?pid=5&sap_toi" > Bàn nhận 1 giờ tới (<?php echo $row["SoLuong"] ?>) </a>
                                <?php
                                }
                                ?>
                            <a href="admin.php?pid=5&don_moi" style ="background-color: #cde3f9; color:#4c95dd;"> Đơn mới </a>
                            <a href="admin.php?pid=5&tre_hen" style ="background-color: #fdf6d9; color:#ffb500;"> Trễ hẹn </a>
                            <a href="admin.php?pid=5&thanh_cong" style ="background-color: #e9f5ea; color: #01b075;"> Thành công </a>
                            <a href="admin.php?pid=5&don_huy" style ="background-color: #ffe1d5; color:#e66430;"> Đơn hủy </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=5&sap_toi" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                        
                    </div>

                    <div class = "main-table" id = "tick-datban-section">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã đơn </th>
                                    <th style="width: 20%"> Tên khách hàng </th>
                                    <th style="width: 20%;" class = "arrange"> <a href=""> Thời gian <span>&#8593</span> <span>&#8595</span> </a> </th>
                                    <th style="width: 10%"> Mã bàn </th>
                                    <th style="width: 10%"> Số người </th>
                                    <th style="width: 20%"> Số điện thoại </th>

                                    <th style="width: 10%"> Trạng thái </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq_danhsach_1_gio_toi->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > #<?php echo $row["MaNhatKy"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["TenKhachHang"]; ?> </td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["NgayDatCho"]." "; echo $row["ThoiGianNhanBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["MaBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["SoNguoi"] ?></a></td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > 0<?php echo $row["SDTKhachHang"]; ?></a></td>
                                    <td id = "padding-menu4"><a href="admin.php?pid=5&id_donhang=<?php echo $row["MaNhatKy"]?>" <?php $ctrl_datban_section->hien_thi_mau_trang_thai_ban($row["TrangThai"]) ?> > <?php $ctrl_datban_section->hien_thi_trang_thai_ban($row["TrangThai"]) ?></a></td>

                                </tr>
                                
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "previous-table">
                        
                        
                    </div>
                </div>
<?php
    }
    else if(isset($_GET["tre_hen"]))
    {
        if (isset($_POST["tim_kiem"]))
        {
            $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_tre_tim($_POST["tim_kiem"]);
        }
        else{
            $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_tre();
        }
        
?>
<div class = "header-infor">
                    <h1> <a href="admin.php?pid=5"> Đơn đặt bàn </a> -> Trễ hẹn </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                        <div class = "add-user" >
                        <?php
                                    while ($row = $kq_soluong->fetch_assoc())
                                {
                                ?>
                            <a href="admin.php?pid=5&sap_toi" > Bàn nhận 1 giờ tới (<?php echo $row["SoLuong"] ?>) </a>
                                <?php
                                }
                                ?>
                            <a href="admin.php?pid=5&don_moi" style ="background-color: #cde3f9; color:#4c95dd;"> Đơn mới </a>
                            <a href="admin.php?pid=5&tre_hen" style ="background-color: #fdf6d9; color:#ffb500;"> Trễ hẹn </a>
                            <a href="admin.php?pid=5&thanh_cong" style ="background-color: #e9f5ea; color: #01b075;"> Thành công </a>
                            <a href="admin.php?pid=5&don_huy" style ="background-color: #ffe1d5; color:#e66430;"> Đơn hủy </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=5&tre_hen" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                    </div>
                    
                    <div class = "main-table" id = "tick-datban-section">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã đơn </th>
                                    <th style="width: 20%"> Tên khách hàng </th>
                                    <th style="width: 20%;" class = "arrange"> <a href=""> Thời gian <span>&#8593</span> <span>&#8595</span> </a> </th>
                                    <th style="width: 10%"> Mã bàn </th>
                                    <th style="width: 10%"> Số người </th>
                                    <th style="width: 20%"> Số điện thoại </th>
                                    <th style="width: 10%"> Trạng thái </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq_danhsach_tre->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > #<?php echo $row["MaNhatKy"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["TenKhachHang"]; ?> </td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["NgayDatCho"]." "; echo $row["ThoiGianNhanBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["MaBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["SoNguoi"] ?></a></td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > 0<?php echo $row["SDTKhachHang"]; ?></a></td>
                                    <td id = "padding-menu4"><a href="admin.php?pid=5&id_donhang=<?php echo $row["MaNhatKy"]?>" <?php $ctrl_datban_section->hien_thi_mau_trang_thai_ban($row["TrangThai"]) ?> > <?php $ctrl_datban_section->hien_thi_trang_thai_ban($row["TrangThai"]) ?></a></td>

                                </tr>
                                
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "previous-table">

                    </div>
                </div>
<?php        
    } else if(isset($_GET["don_moi"]))
    {
        if (isset($_POST["tim_kiem"]))
        {
            $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_moi_tim($_POST["tim_kiem"]);
        }
        else{
            $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_moi();
        }
?>
<div class = "header-infor">
                    <h1> <a href="admin.php?pid=5"> Đơn đặt bàn </a> -> Đơn mới </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                        <div class = "add-user" >
                        <?php
                                    while ($row = $kq_soluong->fetch_assoc())
                                {
                                ?>
                            <a href="admin.php?pid=5&sap_toi" > Bàn nhận 1 giờ tới (<?php echo $row["SoLuong"] ?>) </a>
                                <?php
                                }
                                ?>
                            <a href="admin.php?pid=5&don_moi" style ="background-color: #cde3f9; color:#4c95dd;"> Đơn mới </a>
                            <a href="admin.php?pid=5&tre_hen" style ="background-color: #fdf6d9; color:#ffb500;"> Trễ hẹn </a>
                            <a href="admin.php?pid=5&thanh_cong" style ="background-color: #e9f5ea; color: #01b075;"> Thành công </a>
                            <a href="admin.php?pid=5&don_huy" style ="background-color: #ffe1d5; color:#e66430;"> Đơn hủy </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=5&don_moi" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                        
                    </div>
                    <div class = "main-table" id = "tick-datban-section">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã đơn </th>
                                    <th style="width: 20%"> Tên khách hàng </th>
                                    <th style="width: 20%;" class = "arrange"> <a href=""> Thời gian <span>&#8593</span> <span>&#8595</span> </a> </th>
                                    <th style="width: 10%"> Mã bàn </th>
                                    <th style="width: 10%"> Số người </th>
                                    <th style="width: 20%"> Số điện thoại </th>
                                    <th style="width: 10%"> Trạng thái </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq_danhsach_tre->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > #<?php echo $row["MaNhatKy"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["TenKhachHang"]; ?> </td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["NgayDatCho"]." "; echo $row["ThoiGianNhanBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["MaBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["SoNguoi"] ?></a></td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > 0<?php echo $row["SDTKhachHang"]; ?></a></td>
                                    <td id = "padding-menu4"><a href="admin.php?pid=5&id_donhang=<?php echo $row["MaNhatKy"]?>" <?php $ctrl_datban_section->hien_thi_mau_trang_thai_ban($row["TrangThai"]) ?> > <?php $ctrl_datban_section->hien_thi_trang_thai_ban($row["TrangThai"]) ?></a></td>

                                </tr>
                                
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "previous-table">

                    </div>
                </div>
<?php
    }
    else if(isset($_GET["thanh_cong"]))
    {
        if (isset($_POST["thanh_cong"]))
        {
            $date1 = $_POST["date1"];
            $date2 = $_POST["date2"];

            $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_thanh_cong_1($date1,$date2);

        }
        else
        {
            if (isset($_POST["tim_kiem"]))
            {
                $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_thanh_cong_tim($_POST["tim_kiem"]);
            }
            else{
                $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_thanh_cong();
            }
        }

?>
<div class = "header-infor">
                    <h1> <a href="admin.php?pid=5"> Đơn đặt bàn </a> -> Thành công </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                        <div class = "add-user" >
                        <?php
                                    while ($row = $kq_soluong->fetch_assoc())
                                {
                                ?>
                            <a href="admin.php?pid=5&sap_toi" > Bàn nhận 1 giờ tới (<?php echo $row["SoLuong"] ?>) </a>
                                <?php
                                }
                                ?>
                            <a href="admin.php?pid=5&don_moi" style ="background-color: #cde3f9; color:#4c95dd;"> Đơn mới </a>
                            <a href="admin.php?pid=5&tre_hen" style ="background-color: #fdf6d9; color:#ffb500;"> Trễ hẹn </a>
                            <a href="admin.php?pid=5&thanh_cong" style ="background-color: #e9f5ea; color: #01b075;"> Thành công </a>
                            <a href="admin.php?pid=5&don_huy" style ="background-color: #ffe1d5; color:#e66430;"> Đơn hủy </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=5&thanh_cong" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                        
                    </div>

                    <form action="admin.php?pid=5&thanh_cong" method="post">
                    <div class ="thongke-section">
                        <div>
                            <div class = "thongke-thoigian">
                                    <p> Từ ngày </p>
                                    <input type="date" name = "date1">
                                    <p> đến ngày </p>
                                    <input type="date" name = "date2">
                            </div>
                            <input type="submit" value = "Truy xuất" name ="thanh_cong">
                        </div>
                        <div class ="body-thongke">
                            
                            <?php
                              
                            ?>
                            <h1> Tổng doanh thu đạt được: <span> <?php ?> </span>  </h1>
                            <?php        
                            ?>
                            
                        </div>
                        
                    </div>
                    </form>

                    <div class = "main-table" id = "tick-datban-section">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã đơn </th>
                                    <th style="width: 20%"> Tên khách hàng </th>
                                    <th style="width: 20%;" class = "arrange"> <a href=""> Thời gian <span>&#8593</span> <span>&#8595</span> </a> </th>
                                    <th style="width: 10%"> Mã bàn </th>
                                    <th style="width: 10%"> Số người </th>
                                    <th style="width: 20%"> Số điện thoại </th>
                                    <th style="width: 10%"> Trạng thái </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq_danhsach_tre->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > #<?php echo $row["MaNhatKy"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["TenKhachHang"]; ?> </td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["NgayDatCho"]." "; echo $row["ThoiGianNhanBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["MaBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["SoNguoi"] ?></a></td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > 0<?php echo $row["SDTKhachHang"]; ?></a></td>
                                    <td id = "padding-menu4"><a href="admin.php?pid=5&id_donhang=<?php echo $row["MaNhatKy"]?>" <?php $ctrl_datban_section->hien_thi_mau_trang_thai_ban($row["TrangThai"]) ?> > <?php $ctrl_datban_section->hien_thi_trang_thai_ban($row["TrangThai"]) ?></a></td>

                                </tr>
                                
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "previous-table">

                    </div>
                </div>
<?Php        
    }
    else if(isset($_GET["don_huy"]))
    {
        if (isset($_POST["don_huy"]))
        {
            $date1 = $_POST["date1"];
            $date2 = $_POST["date2"];

            $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_huy_1($date1,$date2);

        }
        else
        {
            if (isset($_POST["tim_kiem"]))
            {
                $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_huy_tim($_POST["tim_kiem"]);
            }
            else{
                $kq_danhsach_tre = $ctrl_datban_section->danhsach_don_dat_ban_huy();
            }
        }

?>
<div class = "header-infor">
                    <h1> <a href="admin.php?pid=5"> Đơn đặt bàn </a> -> Đơn hủy </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                        <div class = "add-user" >
                        <?php
                                    while ($row = $kq_soluong->fetch_assoc())
                                {
                                ?>
                            <a href="admin.php?pid=5&sap_toi" > Bàn nhận 1 giờ tới (<?php echo $row["SoLuong"] ?>) </a>
                                <?php
                                }
                                ?>
                            <a href="admin.php?pid=5&don_moi" style ="background-color: #cde3f9; color:#4c95dd;"> Đơn mới </a>
                            <a href="admin.php?pid=5&tre_hen" style ="background-color: #fdf6d9; color:#ffb500;"> Trễ hẹn </a>
                            <a href="admin.php?pid=5&thanh_cong" style ="background-color: #e9f5ea; color: #01b075;"> Thành công </a>
                            <a href="admin.php?pid=5&don_huy" style ="background-color: #ffe1d5; color:#e66430;"> Đơn hủy </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=5&don_huy" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                        
                    </div>

                    <form action="admin.php?pid=5&don_huy" method="post">
                    <div class ="thongke-section">
                        <div>
                            <div class = "thongke-thoigian">
                                    <p> Từ ngày </p>
                                    <input type="date" name = "date1">
                                    <p> đến ngày </p>
                                    <input type="date" name = "date2">
                            </div>
                            <input type="submit" value = "Truy xuất" name = "don_huy">
                        </div>
                        <div class ="body-thongke">
                            
                            <?php
                              
                            ?>
                            <h1> Tổng doanh thu đạt được: <span> <?php ?> </span>  </h1>
                            <?php        
                            ?>
                            
                        </div>
                        
                    </div>
                    </form>

                    <div class = "main-table" id = "tick-datban-section">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã đơn </th>
                                    <th style="width: 20%"> Tên khách hàng </th>
                                    <th style="width: 20%;" class = "arrange"> <a href=""> Thời gian <span>&#8593</span> <span>&#8595</span> </a> </th>
                                    <th style="width: 10%"> Mã bàn </th>
                                    <th style="width: 10%"> Số người </th>
                                    <th style="width: 20%"> Số điện thoại </th>
                                    <th style="width: 10%"> Trạng thái </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq_danhsach_tre->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > #<?php echo $row["MaNhatKy"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["TenKhachHang"]; ?> </td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["NgayDatCho"]." "; echo $row["ThoiGianNhanBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["MaBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["SoNguoi"] ?></a></td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > 0<?php echo $row["SDTKhachHang"]; ?></a></td>
                                    <td id = "padding-menu4"><a href="admin.php?pid=5&id_donhang=<?php echo $row["MaNhatKy"]?>" <?php $ctrl_datban_section->hien_thi_mau_trang_thai_ban($row["TrangThai"]) ?> > <?php $ctrl_datban_section->hien_thi_trang_thai_ban($row["TrangThai"]) ?></a></td>

                                </tr>
                                
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "previous-table">

                    </div>
                </div>
<?php
    }
    else
    {
        ;
        if (isset($_POST["tim_kiem"]))
            {
                $kq = $ctrl_datban_section->danhsach_don_dat_ban_tim($hienthi,$page,$_POST["tim_kiem"]);
            }
            else{
                $kq = $ctrl_datban_section->danhsach_don_dat_ban($hienthi,$page);
            }

?>
<div class = "header-infor">
                    <h1> <a href="admin.php?pid=5"> Đơn đặt bàn </a> </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                        <div class = "add-user">
                        <?php
                                    while ($row = $kq_soluong->fetch_assoc())
                                {
                                ?>
                            <a href="admin.php?pid=5&sap_toi" > Bàn nhận 1 giờ tới (<?php echo $row["SoLuong"] ?>) </a>
                                <?php
                                }
                                ?>
                            <a href="admin.php?pid=5&don_moi" style ="background-color: #cde3f9; color:#4c95dd;"> Đơn mới </a>
                            <a href="admin.php?pid=5&tre_hen" style ="background-color: #fdf6d9; color:#ffb500;"> Trễ hẹn </a>
                            <a href="admin.php?pid=5&thanh_cong" style ="background-color: #e9f5ea; color: #01b075;"> Thành công </a>
                            <a href="admin.php?pid=5&don_huy" style ="background-color: #ffe1d5; color:#e66430;"> Đơn hủy </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=5" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                        
                    </div>
                    <div class = "main-table" id = "tick-datban-section">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã đơn </th>
                                    <th style="width: 20%"> Tên khách hàng </th>
                                    <th style="width: 20%;" class = "arrange"> <a href=""> Thời gian <span>&#8593</span> <span>&#8595</span> </a> </th>
                                    <th style="width: 10%"> Mã bàn </th>
                                    <th style="width: 10%"> Số người </th>
                                    <th style="width: 20%"> Số điện thoại </th>

                                    <th style="width: 10%"> Trạng thái </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > #<?php echo $row["MaNhatKy"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["TenKhachHang"]; ?> </td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["NgayDatCho"]." "; echo $row["ThoiGianNhanBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["MaBan"]; ?></a></td>
                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > <?php echo $row["SoNguoi"] ?></a></td>

                                    <td><a href="admin.php?pid=55&id_donhang=<?php echo $row["MaNhatKy"]?>" > 0<?php echo $row["SDTKhachHang"]; ?></a></td>
                                    <td id = "padding-menu4"><a href="admin.php?pid=5&id_donhang=<?php echo $row["MaNhatKy"]?>" <?php $ctrl_datban_section->hien_thi_mau_trang_thai_ban($row["TrangThai"]) ?> > <?php $ctrl_datban_section->hien_thi_trang_thai_ban($row["TrangThai"]) ?></a></td>

                                </tr>
                                
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class = "previous-table">
                        <div class = phan-trang-wrapper>
                            <?php
                                $ctrl_datban_section->phantrang_datban($hienthi, $page);
                            ?>
                        </div>
                    </div>
                </div>
<?php
    }
?>