<?php
    include_once("ctrl_frm_admin.php");
    $ctrl_kiemtra_admin = new ctrl_frm_admin();

    $id_sdt = $_POST["username"];
    $id_matkhau = $_POST["password"];

    echo $id_sdt, $id_matkhau;

    $kiemtra = $ctrl_kiemtra_admin->kiemtra($id_sdt, $id_matkhau);
    
    if ($num_rows = $kiemtra->num_rows == 1)
    {   
        session_start();
        header("location:../admin.php");
        while($row = $kiemtra->fetch_assoc())
        {
            $_SESSION["username"] = $row["NickName"];
            $_SESSION["HinhNV"] = $row["HinhNV"];
            $_SESSION["MaNV"] = $row["MaNV"];
        }
    }
    else
    {
        echo "Đăng nhập không thành công !";
    }
?>