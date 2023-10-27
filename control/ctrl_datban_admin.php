<?php
    include_once("../control/ctrl_frm_admin.php");
    $connect_datban_admin = new connect_admin;
    $link = $connect_datban_admin->getlink();

    if (isset($_POST["cap_nhat"]))
    {
        $id = $_GET["id"];
        $trangthai = $_POST["trangthai"];
        $sql = "UPDATE table_nhatkydatban SET TrangThai = '$trangthai' WHERE MaNhatKy = '$id'";
        if($link->query($sql))
        {
            header("location:../admin.php?pid=55&id_donhang='$id'");
        }
        else
        {
            echo "Có lỗi, không thể cập nhật đơn hàng !!";
        }
    }
?>