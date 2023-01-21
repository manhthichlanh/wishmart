<?php
    require_once "../../global.php";
    require_once "../../dao/thong-ke.php";

    extract($_REQUEST);

    $PAGE_INDEX = 1;
    
    $dm_list = thong_ke_san_pham_theo_danh_muc();

    $th_list = thong_ke_san_pham_theo_thuong_hieu();

    if (!isset($thoi_gian)) $thoi_gian=7;
   
         $dh_list = thong_ke_don_hang($thoi_gian);

    




    $start = false;

    check_login();
    
    
    if (exist_param("list_dm_sp")) {
        $VIEW_NAME = "thong-ke/list_dm_sp.php";
        $PAGE_NAME = "Thống kê sản phẩm theo danh mục";
    } 
    else if (exist_param("list_th_sp")) {
        $VIEW_NAME = "thong-ke/list_th_sp.php";
        $PAGE_NAME = "Thống kê sản phẩm theo thương hiệu";
    } else {
        $VIEW_NAME = "thong-ke/home.php";
        $PAGE_NAME = "Thống kê - biểu đồ";
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>';
        $start = true;
        
    }
    
 
    
    
   



    require_once "../layout.php";

    if ($start == true) {
        require_once "chart.php" ;
        $start = ! $start ;
    };
    
;
    
?>