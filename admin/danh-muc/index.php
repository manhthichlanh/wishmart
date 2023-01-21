<?php
require_once "../../global.php";
require_once "../../dao/danh-muc.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 
var_dump($_REQUEST);
//biến để biết số trang 
$PAGE_INDEX=2;
//Biến để show tên trang
$PAGE_NAME="Quản lý danh mục";

if(exist_param("btn_insert")){
    $hinh=save_file("hinh", "$IMAGE_DIR/products/");

    try {
        
        if (danh_muc_name_exist($ten_dm)) {
            $MESSAGE = "Tên danh mục đã tồn tại";
            unset($ten_dm);
            goto break_free_of_try;
        } else {
            danh_muc_insert($ten_dm, $hinh, $uu_tien, $hien_thi);  

            unset($ten_dm, $id_dm, $hinh, $uu_tien, $hien_thi);
            
            $MESSAGE = "Thêm mới thành công!";
        }
        
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại";
    }
    break_free_of_try:

    $VIEW_NAME = "danh-muc/new.php";
}
else if(exist_param("btn_update")){
    try {
        $hinh=save_file("hinh", "$IMAGE_DIR/products/");
        danh_muc_update($id_dm, $ten_dm, $hinh, $uu_tien, $hien_thi);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "danh-muc/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        danh_muc_delete($id_dm);
        $items = danh_muc_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "danh-muc/list.php";
}
else if(exist_param("btn_edit")){
    $item = danh_muc_select_by_id($id_dm); //array ('id_dm'=>1, 'ten_dm'=>'Dong ho')
    extract($item); //$id_dm=1, $ten_dm='Dong ho'
    $VIEW_NAME = "danh-muc/edit.php";
}
else if(exist_param("btn_list")){
    $items = danh_muc_select_all();
    $VIEW_NAME = "danh-muc/list.php";
}
else{
    $VIEW_NAME = "danh-muc/new.php";
}

require_once "../layout.php";