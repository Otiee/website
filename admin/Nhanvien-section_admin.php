<?php
    include_once("control/ctrl_frm_admin.php");
    $ctrl_nhanvien_section = new ctrl_frm_admin();
    if(isset($_POST["tim_kiem"]))
    {
        $kq = $ctrl_nhanvien_section->lay_dtnv_tim($_POST["tim_kiem"]);
    }
    else
    {
        $kq = $ctrl_nhanvien_section->lay_dtnv();
    }    require_once("control/controller_admin.php");
    
?>


<div class = "header-infor">
    <h1> Nhân viên </h1>
</div>
        <div class = "infor-wrapper" id ="tick-nhanvien-section_admin">
                    <div class = "setting-table" id ="tick1-Nhanvien-section_admin">
                        <div class="search">
                        <form action="admin.php?pid=4" method = "post">
                                <label for="lsearch"> Tìm kiếm </label>
                                <input type="text" id = "lseacrh" name="tim_kiem">
                            </form>
                        </div>

                        <div class = "view">
                                <a href="admin.php?pid=4" <?php echo $color_view1;?>  > <img src="assets/images_admin/list_1.png" alt="" width = "24"> </a>
                                <a href="admin.php?pid=4&view=1" <?php echo $color_view2; ?> > <img src="assets/images_admin/list_2.png" alt="" width = "24"> </a>
                        </div>
                    </div>
                </div>
        <div class = "main-nhanvien">
                <div class = "card-nhanvien" id = "tick4-nhanvien-section_admin">
                        <img src="assets/images_admin/staff_1.png" alt="" width = "120">
                    <div class = "card-nhanvien-infor">
                        <h1> NightLight Family </h1>
                        <p> Tham gia đại gia đình NightLight </p>
                    </div>
                    <button id = "add-nhanvien" onclick="location.href='admin.php?pid=44&them_nv'"> Thêm thành viên </button>
                </div>

                <?php
                    while($row=$kq->fetch_assoc())
                    {
                ?>
                <div class = "card-nhanvien">   
                    <button> ... </button>
                    <a href="admin.php?pid=44&id=<?php echo $row["MaNV"] ?>" class = "target-nhanvien">
                        <img id="tick2-Nhanvien-section_admin" src="assets/images/input-main-wedding2.png" alt="">
                    </a>   
                    <div class = "card-nhanvien-infor">
                        <h1> <?php echo $row["NickName"] ?> </h1>
                        <p> #<?php echo $row["MaNV"] ?> </p>
                        <h2> <?php if($row["Levels"] == 1)
                        {
                            echo "Nhân viên";
                        } else if($row["Levels"] == 2){
                            echo "Quản lý";
                        } else {
                            echo "Thực tập";
                        }?> </h2>
                    </div>
                    <div class = "card-nhanvien-footer">
                        <a href=""> <img src="assets/images_admin/facebook.png" alt="" width = "16"> </a>
                        <a href=""> <img src="assets/images_admin/phone.png" alt="" width = "16"> </a>
                        <a href=""> <img src="assets/images_admin/gmail.png" alt="" width = "16"> </a>
                    </div>
                </div>
                <?php
                    }
                ?>            
        </div>                   
        <div class = "previous-table">
            
        </div>
