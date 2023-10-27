<?php
    include_once("../control/connect_admin.php");
    $connect_tintuc_admin = new connect_admin;
    $link=$connect_tintuc_admin->getlink();


    // Thêm món ăn //

    if (isset($_POST["them_mon"]))
    {
    // Lấy vị trí
    $thu_muc = "../../assets/images_tintuc/";
    $ten_file = $thu_muc . $_FILES["hinh_mon"]["name"];
    
    // Chép hình vào file
    move_uploaded_file($_FILES["hinh_mon"]["tmp_name"], $ten_file);


    $id_tenmonan = $_POST["ten_mon"];
    $id_mota = $_POST["mota_mon"];
    $id_hinhanh = $_FILES["hinh_mon"]["name"];
    $id_trangthai = $_POST["trangthai"];

    $them_taikhoan = "INSERT INTO table_tintuc (MaID, Content, HinhAnhTinTuc, TrangThai) VALUES ('$id_tenmonan', '$id_mota','$id_hinhanh',$id_trangthai)";


    if ($link->query($them_taikhoan)) {
        header("location:../admin.php?pid=9");
    }
    else 
    {
        echo "<script> alert('Thêm không thành công') </script>";
    }
    }

    // Cập nhật món //

    if (isset($_POST["cap_nhat_mon"]))
    {
        $id = $_GET["id"];
        // Lấy vị trí

        $thu_muc = "../../assets/images_tintuc/";
        $ten_file = $thu_muc . $_FILES["hinh_mon"]["name"];

        // Chép vào file
        move_uploaded_file($_FILES["hinh_mon"]["tmp_name"], $ten_file);

        $id_tenmonan = $_POST["ten_mon"];
        $id_mota = $_POST["mota_mon"];
        $id_trangthai = $_POST["trangthai"];

        if ($_FILES["hinh_mon"]["name"] == "")
        {
            $cap_nhat_mon = "UPDATE table_tintuc SET Content = '$id_mota', TrangThai = $id_trangthai WHERE MaID = '$id'";
        } else
        {
            $id_hinhanh = $_FILES["hinh_mon"]["name"];
            $cap_nhat_mon = "UPDATE table_tintuc SET Content = '$id_mota', HinhAnhTinTuc = '$id_hinhanh', TrangThai = $id_trangthai WHERE MaID = '$id'";
        }

        if ($link->query($cap_nhat_mon))
        {
            header("location:../admin.php?pid=9");
        }
        else 
        {
            echo "<script> alert('Cập nhật không thành công') </script>";
        }
    }

    if (isset($_GET["xoa_mon"]))
    {
        $id = $_GET["id"];
        $xoa_mon = "DELETE FROM table_tintuc WHERE MaID = '$id'";
        if ($link->query($xoa_mon))
        {
            header("location:../admin.php?pid=9");
        }
        else
        {
            echo "<script> alert('Xóa không thành công') </script>";
        }
    }

    
?>