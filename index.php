<?php

$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views1/';
// echo $request;
switch ($request) {
    
    // Gioi-thieu
    case '/nhahang/index.php/introduce':
        $content = 'body/introduce/introduce.php';
        include("view/master.php");
        // require __DIR__ . $viewDir . 'contact.php';
        break;

    // Thuc-don 
    case '/nhahang/index.php/menu':
        $content = 'body/menu/menu.php';
        include("view/master.php");
        // require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/nhahang/index.php/menu/thuc-don-Alacarte':
        $content = 'body/menu/thuc-don-Alacarte.php';
        include("view/master.php");
        // require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/nhahang/index.php/menu/mon-ngon-din-ky':
        $content = 'body/menu/mon-ngon-din-ky.php';
        include("view/master.php");
        // require __DIR__ . $viewDir . 'contact.php';
        break;
    
    case '/nhahang/index.php/menu/thuc-don-tiec':
        $content = 'body/menu/thuc-don-tiec.php';
        include("view/master.php");
        // require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/nhahang/index.php/menu/diem-tam-sang':
        $content = 'body/menu/diem-tam-sang.php';
        include("view/master.php");
        // require __DIR__ . $viewDir . 'contact.php';
        break;

    case '/nhahang/index.php/menu/thuc-uong':
        $content = 'body/menu/thuc-uong.php';
        include("view/master.php");
        break;

    // Cac-loai-tiec
    case '/nhahang/index.php/partys':
    $content = 'body/partys/partys.php';
    include("view/master.php");
    break;

    //Order-food
    case '/nhahang/index.php/order-food':
        $content = 'order-food.php';
        include_once("model/menu.php");

        // $menu1 = $model_menu->menu();
        
        // echo $menu1;
        include("view/master.php");
        break;
    
    // Table-reservation
    case '/nhahang/index.php/table-reservation':
        $content = 'table-reservation.php';
        include("view/master.php");
        break;
        
    // Contact
    case '/nhahang/index.php/contact':
        $content = 'contact.php';
        include("view/master.php");
        break;
    
    default:
        echo "Error";
//         http_response_code(404);
//         require __DIR__ . $viewDir . '404.php';
}