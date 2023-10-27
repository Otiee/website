<?php
    include_once("../control/connect_admin.php");
    $connect_nhanvien_admin = new connect_admin;
    $link = $connect_nhanvien_admin->getlink();
    $id = $_GET["id"];
    if (isset($_POST["xoa"]))
    {
        $xoanv_sanh = "UPDATE table_sanh SET MaNV = NULL WHERE MaNV = '$id'";
        $xoanv_tintuc = "UPDATE table_tintuc SET NguoiDang = NULL WHERE NguoiDang = '$id'";
        $xoakh_qr = "DELETE FROM table_nhanvien WHERE MaNV='$id'";
        if ($link->query($xoanv_sanh) && $link->query($xoanv_tintuc))
        {
            if ($link->query($xoakh_qr))
            {
                header("location:../admin.php?pid=4");
            }
            else 
            {
                echo "<script> alert('Xóa không thành công') </script>";
            }
        }
        else
            echo "<script> alert('Xóa không thành công') </script>";
    }
    else if(isset($_POST["capnhat"]))
    {
// Vị trí lưu
        $thu_muc = "../assets/images_avatar/";
        $ten_file = $thu_muc . $_FILES["HinhNV"]["name"];
// Chép hình vào thư mục
        move_uploaded_file($_FILES["HinhNV"]["tmp_name"], $ten_file);

//---------------------------------
        $id_hoten = $_POST["hoten"];
        $id_email = $_POST["email"];
        $id_sdt = $_POST["phone"];
        $id_sdt_fix = substr($id_sdt,1);
        $id_gioitinh = $_POST["gioitinh"];
        $id_diachi = $_POST["diachi"];
        $id_quequan = $_POST["quequan"];
        $id_avt = $_FILES["HinhNV"]["name"];

        if ($_FILES["HinhNV"]["name"] == "")
        {
            $capnhatkh_qr = "UPDATE table_nhanvien SET NickName = '$id_hoten', Email = '$id_email', Phone = '$id_sdt_fix', GioiTinh = '$id_gioitinh', DiaChi = '$id_diachi', QueQuan = '$id_quequan' WHERE MaNV = '$id'";
        } else
        {
            $id_hinhanh = $_FILES["HinhNV"]["name"];
            $capnhatkh_qr = "UPDATE table_nhanvien SET NickName = '$id_hoten', Email = '$id_email', Phone = '$id_sdt_fix', GioiTinh = '$id_gioitinh', DiaChi = '$id_diachi', QueQuan = '$id_quequan', HinhNV = '$id_avt' WHERE MaNV = '$id'";
        }

        if ($link->query($capnhatkh_qr))
        {
            header("location:../admin.php?pid=44&id=$id");
        }
        else 
        {
            echo "<script> alert('Cập nhật không thành công') </script>";
        }
    }
    else if($_POST["them_nv"])
    {
        // Vị trí lưu
        $thu_muc = "../assets/images_avatar/";
        $ten_file = $thu_muc . $_FILES["HinhNV"]["name"];
// Chép hình vào thư mục
        move_uploaded_file($_FILES["HinhNV"]["tmp_name"], $ten_file);

//---------------------------------
        $id_hoten = $_POST["hoten"];
        $id_email = $_POST["email"];
        $id_sdt = $_POST["phone"];
        $id_sdt_fix = substr($id_sdt,1);
        $id_gioitinh = $_POST["gioitinh"];
        $id_diachi = $_POST["diachi"];
        $id_quequan = $_POST["quequan"];
        $id_avt = $_FILES["HinhNV"]["name"];

        $them_taikhoan = "INSERT INTO table_nhanvien (NickName, Phone, Email, HinhNV, QueQuan, GioiTinh, DiaChi)
        VALUES ('$id_hoten','$id_sdt_fix', '$id_email','$id_avt','$id_quequan','$id_gioitinh','$id_diachi')";
        $cap_nhat_stt1 = "SET @row_number = 10000";
        $cap_nhat_stt2 = "UPDATE table_nhanvien SET MaNV = (@row_number := @row_number + 1)";
        
    if ($link->query($them_taikhoan) && $link->query($cap_nhat_stt1) && $link->query($cap_nhat_stt2)) {
        header("location:../admin.php?pid=4");
    }
    else 
    {
        echo "<script> alert('Thêm không thành công') </script>";
    }
    }


?>