<?php
require_once 'pdo.php';

//Thêm khách hàng mới,

function gio_hang_insert( $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro){
    $sql = "INSERT INTO gio_hang(`ten_kh`, `email`, `hinh`, `mat_khau`, `dia_chi`, `sdt`, `vai_tro`, `ngay_xuat`) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro);
}

//Cập nhật thông tin 1 khách hàng
function gio_hang_update($ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $id_gh){
    $sql = "UPDATE gio_hang SET ten_kh=?, email=?, hinh=?, mat_khau=?, dia_chi=?, sdt=?, vai_tro=? WHERE id_gh=?";
    pdo_execute($sql, $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $id_gh);
}
// gio_hang_update('Nguyễn Văn Mạnh', 'manhnguyen123@gmail.com', 'WIN_20220310_17_44_21_Pro.jpg', "1234", 'Đó đây nè', '0907467891', '1', '1');
// Xóa một hoặc nhiều khách hàng
function gio_hang_delete($id_gh){
    $sql = "DELETE FROM gio_hang  WHERE id_gh=?";
    if(is_array($id_gh)){
        foreach ($id_gh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_gh);
    }
}

// Truy vấn tất cả các khách hàng
function gio_hang_select_all(){
    $sql = "SELECT * FROM gio_hang";
    return pdo_query($sql);
}



//Truy vấn một kháh hàng theo ma_kh
function gio_hang_select_by_id($id_gh){
    $sql = "SELECT * FROM gio_hang WHERE id_gh=?";
    return pdo_query_one($sql, $id_gh);
}
function gio_hang_select_by_email($email){
    $sql = "SELECT * FROM gio_hang WHERE email=?";
    return pdo_query_one($sql, $email);
}
//Kiểm tra sự tồn tại của một khách hang3
function gio_hang_exist($id_gh){
    $sql = "SELECT count(*) FROM gio_hang WHERE id_gh=?";
    return pdo_query_value($sql, $id_gh)  > 0;                        
   
}

//Lấy danh sách kh theo vai trò
function gio_hang_select_by_role($vai_tro){
    $sql = "SELECT * FROM gio_hang WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
//Cập nhật mật khẩu của 1 khách hàng
function gio_hang_change_password($id_gh, $mat_khau_moi){
    $sql = "UPDATE gio_hang SET mat_khau=? WHERE id_gh=?";
    pdo_execute($sql, $mat_khau_moi, $id_gh);
}

?>