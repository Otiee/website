<?php
    include_once("control/ctrl_frm_admin.php");
    $ctrl_nhanvien_details = new ctrl_frm_admin();
?>
                <?php
                if(isset($_GET["id"]))
                {
                    $id_nv = $_GET["id"];
                    $kq_details = $ctrl_nhanvien_details->lay_nhanvien_details($id_nv);

                    while($row = $kq_details->fetch_assoc())
                    {
                ?>
                <div class = "header-infor">
                    <h1> Nhân viên </h1>
                </div>

                <div class = "Khachhang-edit-section">
                    <div class = "infor-wrapper">
                        <div class = "setting-table" id = "id_setting-table">
                            <span> Thông tin nhân viên - <?php echo $row["NickName"] ?> </span>
                            <a href="admin.php?pid=4"> Quay lại </a>
                        </div>
                        <form action="control/ctrl_nhanvien_admin.php?id=<?php echo $row["MaNV"] ?>" id = "form-khachhang" method="post" enctype="multipart/form-data">

                        <div class = "Avatar-edit-infor" id = "id_Avatar-edit-infor">
                                <div class = "Avatar-infor">
                                    <label for="name"> Mã nhân viên </label>
                                    <br>
                                    <input type="text" name="hoten" id="name" value="<?php echo $row["MaNV"] ?>" readonly>
                                </div>
                                <div class = "Avatar-infor">
                                    <label for="name"> Họ tên </label>
                                    <br>
                                    <input type="text" name="hoten" id="name" value="<?php echo $row["NickName"] ?>">
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Phone </label>
                                    <br>
                                    <input type="text" name="phone" id="name" value="0<?php echo $row["Phone"] ?>">
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Email </label>
                                    <br>
                                    <input type="text" name="email" id="name" value="<?php echo $row["Email"]?>">
                                </div>
                                
                                <div class = "Avatar-infor">
                                    <label for="name"> Giới tính </label>
                                    <br>                                    
                                    <select name="gioitinh" id="name">
                                        <option value="0" <?php if ($row["GioiTinh"]== 0) echo "selected" ?> > Nam </option>
                                        <option value="1" <?php if ($row["GioiTinh"]== 1) echo "selected" ?> > Nữ </option>
                                    </select>
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Quê quán </label>
                                    <br>
                                    <input type="text" name="quequan" id="name" value="<?php echo $row["QueQuan"]?>">
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Địa chỉ </label>
                                    <br>
                                    <input type="text" name="diachi" id="name" value="<?php echo $row["DiaChi"]?>">
                                </div>

                                <div class = "Avatar-infor" id = "id_Avatar-infor">
                                    <label for="name"> Ảnh đại diện </label>
                                    <br>
                                    <input type="file" name="HinhNV" id="HinhKH" value="" >
                                </div>

                                <div class = "button-nhanvien-details">
                                    <input type="submit" value="Cập nhật" name = "capnhat" >
                                    <input style="background-color: var(--red);" type="submit" value="Xóa" name = "xoa" class = "tick-button-nhanvien-details">
                                </div>
                   
                            </div>
                            </form>
                    </div>
                    
                </div>

                <?php
                    }                                       
                } else if(isset($_GET["them_nv"]))
                {
                ?>
                    <div class = "header-infor">
                    <h1> Nhân viên </h1>
                </div>

                <div class = "Khachhang-edit-section">
                    <div class = "infor-wrapper">
                        <div class = "setting-table" id = "id_setting-table">
                            <span> Thêm nhân viên mới </span>
                            <a href="admin.php?pid=4"> Quay lại </a>
                        </div>
                        <form action="control/ctrl_nhanvien_admin.php" id = "form-khachhang" method="post" enctype="multipart/form-data">

                        <div class = "Avatar-edit-infor" id = "id_Avatar-edit-infor">
                                <div class = "Avatar-infor">
                                    <label for="name"> Họ tên </label>
                                    <br>
                                    <input type="text" name="hoten" id="name" value="">
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Phone </label>
                                    <br>
                                    <input type="text" name="phone" id="name" value="">
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Email </label>
                                    <br>
                                    <input type="text" name="email" id="name" value="">
                                </div>
                                
                                <div class = "Avatar-infor">
                                    <label for="name"> Giới tính </label>
                                    <br>                                    
                                    <select name="gioitinh" id="name">
                                        <option value="0"> Nam </option>
                                        <option value="1"> Nữ </option>
                                    </select>
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Quê quán </label>
                                    <br>
                                    <input type="text" name="quequan" id="name" value="">
                                </div>

                                <div class = "Avatar-infor">
                                    <label for="name"> Địa chỉ </label>
                                    <br>
                                    <input type="text" name="diachi" id="name" value="">
                                </div>

                                <div class = "Avatar-infor" id = "id_Avatar-infor">
                                    <label for="name"> Ảnh đại diện </label>
                                    <br>
                                    <input type="file" name="HinhNV" id="HinhKH" value="" >
                                </div>

                                <input type="submit" value="Thêm nhân viên" name = "them_nv">
                            </div>
                            </form>
                    </div>
                    
                </div>
                <?php
                    
                }
                ?>