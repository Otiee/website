<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        <title> Royal Space </title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/menu.css">
        <link rel="stylesheet" href="assets/css/datban.css">
        <link rel="stylesheet" href="assets/css/bill.css">
        <link rel="stylesheet" href="assets/css/mota.css">
        <link rel="stylesheet" href="assets/css/dichvu.css">
        <link rel="stylesheet" href="assets/css/giohang.css">
        <link rel="stylesheet" href="assets/css/danhsachban.css">
        <link rel="stylesheet" href="assets/css/xacnhandon.css">
        <link rel="stylesheet" href="assets/css/account.css">
        <link rel="stylesheet" href="assets/css/lienhe.css">
        <link rel="stylesheet" href="assets/css/singleblog.css">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="assets/images/LogoSub.png" sizes="16x16">
        <script src="assets/js/scroll.js"> </script>
</head>
      
<body>
    <div class = container >
        <?php
                include("Views/header-section.php");
                include("Views/header_scroll.php");
                if (!isset($_GET["pid"]) && !isset($_GET["tim-kiem-monan"]))
                {
                        include("Views/trangchu.php");
                        include("Views/Gioithieu-section.php");   
                        include("Views/Dichvu-section.php");
                }
                else if (isset($_GET["pid"]))
                {
                        $pid = intval($_GET["pid"]);
                        switch($pid)
                        {
                                case 1:
                                        include("Views/thucdon.php");
                                        break;
                                case 2:
                                        include("Views/datban.php");
                                        break;
                                case 3:
                                        include("Views/monan_mo_ta.php");
                                        break;
                                case 4:
                                        include("Views/dichvu.php");
                                        break;
                                case 5:
                                        if (isset($_POST["ma_monan"]))
                                                include("Views/them_monan.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 6:
                                        if (isset($_SESSION["tk"]))
                                                include("Views/Giohang-datban-section.php");
                                        else
                                                header("location: login.php");
                                        break;
                                case 7:
                                        include("Views/Tintuc-section.php");
                                        break;
                                case 8:
                                        include("Views/singleblog.php");
                                        break;
                                case 9:
                                        if (isset($_POST["update"]))
                                        {
                                                include("Views/capnhat_monan_oop.php");
                                        }
                                        else if (isset($_POST["confirm"]))
                                        {
                                                include("Views/form-bill.php");
                                        }
                                        else if (isset($_POST["stt-monan-xoa"]))
                                        {
                                                include("Views/xoa_giohang_monan.php");
                                        }
                                        else
                                                header("location: index.php");
                                        break;
                                case 10:
                                        if (isset($_POST["place"]) || isset($_SESSION["tk"]))
                                                include("Views/danhsachban.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 11:
                                        if (isset($_POST["danhsach-maban"]))
                                                include("Views/xacnhandon.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 13:
                                        if (isset($_POST["xac-nhan-don"]))
                                                include("Views/them_ban.php");
                                        else if (isset($_POST["khong-xac-nhan-don"]))
                                                header("location: index.php?pid=2");
                                        else
                                                header("location: index.php");
                                        break;
                                case 14:
                                        if (isset($_SESSION["STT_ban"]) && $_SESSION["STT_ban"] > 0)
                                                include("Views/xoa_giohang_ban.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 15:
                                        if (isset($_POST["yes-xac-nhan"]))
                                                header("location: index.php?pid=1");
                                        else if (isset($_POST["no-xac-nhan"]))
                                                include("Views/dat_hang_sql.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 17:
                                        if (isset($_POST["bill-confirm"]))
                                                include("Views/dat_hang_sql.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 18:
                                        if (isset($_SESSION["tk"]))
                                                include("Views/account.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 19:
                                        if (isset($_POST["order-id"]))
                                                include("Views/chitiet-donhang.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 20:
                                        if (isset($_POST["change-pass"]))
                                                include("Views/change-password-oop.php");
                                        else
                                                header("location: index.php");
                                        break;
                                case 21:
                                        include("Views/lienhe.php");
                                        break;
                                default:
                                        header("location: index.php");
                        }
                }
                else if (isset($_GET["tim-kiem-monan"]))
                        include("Views/thucdon.php");
        ?>

        <?php
                include("Views/Footer-section.php");   
        ?>

    </div>

</body>
</html>
