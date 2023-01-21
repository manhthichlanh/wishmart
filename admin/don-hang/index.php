<?php
require_once "../../global.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/don-hang.php";
//--------------------------------//

check_login();
//biến để biết số trang 
$gio_hang_pdo=true;
$PAGE_INDEX=6;
//Biến để show tên trang
$PAGE_NAME="Quản lý đơn hàng";
//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

if(exist_param("btn_update")){
            
            try {                    
                don_hang_update($ten_nguoi_nhan, $dia_chi, $email, $sdt, $ghi_chu, $phuong_thuc_thanh_toan, $trang_thai, $id_kh, $id_dh);

                $MESSAGE = "Cập nhật thành công!";
   
            }catch (Exception $exc) {
                echo $exc;
                $MESSAGE = "Thêm mới thất bại!";
            }
        // }
                   
    $VIEW_NAME = "don-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        don_hang_delete($id_dh);
        $items = don_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "don-hang/list.php";
}
else if(exist_param("btn_edit")){
    $item = don_hang_select_by_id($id_dh); 
    extract($item); 
    if ($trang_thai=="Hoàn thành") return;
    $VIEW_NAME = "don-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = don_hang_select_all();
    $VIEW_NAME = "don-hang/list.php";
}
else{
    $items = don_hang_select_all();
    $VIEW_NAME = "don-hang/list.php";
}

require_once "../layout.php";