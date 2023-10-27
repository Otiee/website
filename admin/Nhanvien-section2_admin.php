<?php
    include_once("control/ctrl_frm_admin.php");
    $ctrl_nhanvien_section2 = new ctrl_frm_admin();
    

    if(isset($_POST["tim_kiem"]))
    {
        $kq = $ctrl_nhanvien_section2->lay_dtnv_tim($_POST["tim_kiem"]);
    }
    else
    {
        $kq = $ctrl_nhanvien_section2->lay_dtnv();
    }

    require_once("control/controller_admin.php");
?>
                <div class = "header-infor">
                    <h1> Nhân viên </h1>
                </div>
                <div class = "infor-wrapper">
                    <div class = "setting-table">
                    
                        <div class = "add-nv">
                            <a href="admin.php?pid=44&them_nv"> Thêm thành viên </a>
                        </div>

                        <div class = "view">
                            <a href="admin.php?pid=4" <?php echo $color_view1;?>> <img src="assets/images_admin/list_1.png" alt="" width = "24"> </a>
                            <a href="admin.php?pid=4&view=1" <?php echo $color_view2;?>> <img src="assets/images_admin/list_2.png" alt="" width = "24"> </a>
                        </div>

                        <div class="search">
                        <form action="admin.php?pid=4&view=1" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>
                        
                    </div>
                    <div class = "main-table">
                        <table>
                            <thead>
                                <tr>
                                    <th style="width: 10%"> Mã NV </th>
                                    <th style="width: 25%"> Họ tên </th>
                                    <th style="width: 10%"> Di động </th>
                                    <th style="width: 10%;" class = "center"> Giới tính  </th>
                                    <th style="width: 20%"> Email </th>
                                    <th style="width: 25%"> Địa chỉ </th>

                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                    while ($row = $kq->fetch_assoc())
                                {
                                ?>
                                <tr>
                                    <td><a href="admin.php?pid=44&id=<?php echo $row["MaNV"]?>" >#<?php echo $row["MaNV"]; ?></a></td>
                                    <td><a href="admin.php?pid=44&id=<?php echo $row["MaNV"]?>" > <?php echo $row["NickName"]; ?></a></td>
                                    <td><a href="admin.php?pid=44&id=<?php echo $row["MaNV"]?>" >0<?php echo $row["Phone"]; ?></a></td>

                                    <td><a href="admin.php?pid=44&id=<?php echo $row["MaNV"]?>" >
                                            <?php 
                                        if ($row["GioiTinh"] == 1)
                                        {
                                            echo "Nữ";
                                        } else 
                                        {
                                            echo "Nam";
                                        }
                                        ?> 
                                        </a>
                                   </td>
                                    <td><a href="admin.php?pid=44&id=<?php echo $row["MaNV"]?>" ><?php echo $row["Email"] ?></a></td>
                                    <td><a href="admin.php?pid=44&id=<?php echo $row["MaNV"]?>" ><?php echo $row["DiaChi"] ?></a></td>

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