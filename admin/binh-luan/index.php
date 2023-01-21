<?php
require_once "../../global.php";
require_once "../../dao/binh-luan.php";
require_once "../../dao/thong-ke.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

//biến để biết số trang 
$PAGE_INDEX=4;
//Biến để show tên trang

$PAGE_NAME="Quản lý bình luận";

if(exist_param("btn_detail")){
    $items = binh_luan_select_by_kh(); //array ('ma_binh_luan'=>1, 'ten_binh_luan'=>'Dong ho')
    extract($items); //$ma_binh_luan=1, $ten_binh_luan='Dong ho'
    $VIEW_NAME = "binh-luan/detail.php";
}
else if(exist_param("btn_delete")){
    try {
        binh_luan_delete($ma_bl);
        $items = binh_luan_select_by_kh();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "binh-luan/detail.php";
}
else{
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "binh-luan/list.php";
}
//11111111111111111111



require_once "../layout.php";