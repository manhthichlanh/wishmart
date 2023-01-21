<?php
require_once "../../global.php";
require_once "../../dao/danh-muc.php";
require_once "../../dao/thuong-hieu.php";
require_once "../../dao/san-pham.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 
//biến để biết số trang 
$PAGE_INDEX=4;
//Biến để show tên trang
$PAGE_NAME="Quản lý sản phẩm";

if (isset($id_dm))  if ($id_dm=="null") $id_dm=null;
   
if (isset($id_th)) if ($id_th=="null") $id_th=null;
    



if(exist_param("btn_insert")){
    $hinh=save_file("hinh", "$IMAGE_DIR/products/");
    try {
        san_pham_insert($ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th);
        unset($ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th);
        $MESSAGE = "Thêm mới thành công sản phẩm!";
    } 
    catch (Exception $exc) {
        echo $exc;
        $MESSAGE = "Thêm mới sản phẩm thất bại!";
    }
    $VIEW_NAME = "san-pham/new.php";
}
else if(exist_param("btn_ha_new")){  
    $VIEW_NAME = "san-pham/new_ha.php";
}
else if(exist_param("btn_ha_insert")){
    $hinh=save_file("hinh", "$IMAGE_DIR/products/");
    try {
        hinh_anh_insert($ten_hinh, $hinh, $id_sp);
        unset($ten_hinh, $hinh, $id_sp);
        $MESSAGE = "Thêm mới thành công hình sản phẩm!";
    } 
    catch (Exception $exc) {
        echo $exc;
        $MESSAGE = "Thêm mới hình sản phẩm thất bại!";
    }
    $VIEW_NAME = "san-pham/new_ha.php";
}
else if(exist_param("btn_update")){
    try {
        $hinh=save_file("hinh", "$IMAGE_DIR/products/");
        san_pham_update($ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th, $id_sp);
       
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "san-pham/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        san_pham_delete($id_sp);
        $items = san_pham_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "san-pham/list.php";
}
else if(exist_param("btn_edit")){
    $items = san_pham_select_by_id($id_sp);
    extract($items); 
    $VIEW_NAME = "san-pham/edit.php";
}
else if(exist_param("btn_detail")){
    $items = hinh_anh_select_by_id_sp($id_sp);
    extract($items); 
    $VIEW_NAME = "san-pham/detail.php";
}
else if(exist_param("btn_list")){
    $items = san_pham_select_all();
    
    $VIEW_NAME = "san-pham/list.php";
}
else{
    $VIEW_NAME = "san-pham/new.php";
}

require_once "../layout.php";