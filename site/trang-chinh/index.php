<?php
    require_once "../../global.php";
    require_once "../../dao/san-pham.php";
    require_once "../../dao/danh-muc.php";
    require_once "../../dao/don-hang.php";
    $VIEW_NAME = "trang-chinh/home.php";
    $danh_muc_show = danh_muc_select_all();
    $hot_list = san_pham_select_hot_list(20);

    $trung_bay_1 = san_pham_trung_bay(6,4);
    $trung_bay_2 = san_pham_trung_bay(9,3);
    $trung_bay_3 = san_pham_trung_bay(12,3);
    $trung_bay_4 = san_pham_moi_nhat(15);
    
    require_once "../layout.php";
?>