<?php
require_once "../../global.php";
require_once "../../dao/thuong-hieu.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

//biến để biết số trang 
$PAGE_INDEX=3;
//Biến để show tên trang
$PAGE_NAME="Quản lý thương hiệu";
if(exist_param("btn_insert")){
    $hinh=save_file("hinh", "$IMAGE_DIR/products/");
    try {
        thuong_hieu_insert($ten_th, $hinh, $uu_tien, $hien_thi);
        unset($ten_th, $hinh, $uu_tien, $hien_thi);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "thuong-hieu/new.php";
}
else if(exist_param("btn_update")){
    try {
        $hinh=save_file("hinh", "$IMAGE_DIR/products/");
        thuong_hieu_update($id_th, $ten_th, $hinh, $uu_tien, $hien_thi);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "thuong-hieu/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        thuong_hieu_delete($id_th);
        $items = thuong_hieu_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "thuong-hieu/list.php";
}
else if(exist_param("btn_edit")){
    $item = thuong_hieu_select_by_id($id_th); //array ('id_dm'=>1, 'ten_dm'=>'Dong ho')
    extract($item); //$id_th=1, $ten_th='Dong ho'
    $VIEW_NAME = "thuong-hieu/edit.php";
}
else if(exist_param("btn_list")){
    $items = thuong_hieu_select_all();
    $VIEW_NAME = "thuong-hieu/list.php";
}
else{
    $VIEW_NAME = "thuong-hieu/new.php";
}

require_once "../layout.php";