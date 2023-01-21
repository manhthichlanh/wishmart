<?php
require_once "../../global.php";
require_once "../../dao/khach-hang.php";
//--------------------------------//

check_login();
//biến để biết số trang 
$PAGE_INDEX=5;
//Biến để show tên trang
$PAGE_NAME="Quản lý khách hàng";
//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

if(exist_param("btn_insert")){ 
    
        // if($mat_khau != $mat_khau2){
        //     $MESSAGE = "Xác nhận mật khẩu không đúng!";

        // } 
        // else 
        if(khach_hang_exist($id_kh)){
            $MESSAGE = "Mã này đã được sử dụng!";
        } 
        else {
            try {
            $hinh=save_file("hinh", "$IMAGE_DIR/users/");
            khach_hang_insert($ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat);
            unset($ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat);
            $MESSAGE = "Thêm mới thành công!";
            }catch (Exception $exc) {
                echo $exc;
                $MESSAGE = "Thêm mới thất bại!";
            }
        }
            
    $VIEW_NAME = "khach-hang/new.php";
}
else if(exist_param("btn_update")){
    
        // if($mat_khau != $mat_khau2){
        //     $MESSAGE = "Xác nhận mật khẩu không đúng!";

        // } 
        // else 
        // if(khach_hang_exist($id_kh)){
        //     $MESSAGE = "Mã này đã được sử dụng!";
        // } 
        // else {
            try {
                $hinh=save_file("hinh", "$IMAGE_DIR/users/");
            
                khach_hang_update($ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat, $id_kh);

                $MESSAGE = "Cập nhật thành công!";
   
            }catch (Exception $exc) {
                echo $exc;
                $MESSAGE = "Thêm mới thất bại!";
            }
        // }
                   
    $VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        khach_hang_delete($id_kh);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "khach-hang/list.php";
}
else if(exist_param("btn_edit")){
    $item = khach_hang_select_by_id($id_kh); 
    extract($item); 
    $VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
}
else{
    $VIEW_NAME = "khach-hang/new.php";
}

require_once "../layout.php";