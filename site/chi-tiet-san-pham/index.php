<?php
    require_once "../../global.php";
    require_once "../../dao/san-pham.php";
    require_once "../../dao/danh-muc.php";
    require_once "../../dao/don-hang.php";
    extract($_REQUEST);
    if (exist_param("product_detail")) {

        $product_detail_list = san_pham_select_by_id($id_sp);
        extract($product_detail_list);

        if (isset($id_sp)) {
            $product_detail_img_list = hinh_anh_select_by_id_sp($id_sp);
            san_pham_tang_so_luot_xem($id_sp);
        }
       
        $VIEW_NAME = "chi-tiet-san-pham/chi-tiet-san-pham.php";
        $trung_bay_4 = san_pham_moi_nhat(15);

        require_once "../layout.php";
    }
?>