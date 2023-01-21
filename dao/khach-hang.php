<?php
require_once 'pdo.php';

//Thêm khách hàng mới,

function khach_hang_insert( $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat){
    $sql = "INSERT INTO khach_hang(`ten_kh`, `email`, `hinh`, `mat_khau`, `dia_chi`, `sdt`, `vai_tro`, `kich_hoat`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat);
}

//Cập nhật thông tin 1 khách hàng
function khach_hang_update($ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat, $id_kh){
    $sql = "UPDATE khach_hang SET ten_kh=?, email=?, hinh=?, mat_khau=?, dia_chi=?, sdt=?, vai_tro=?, kich_hoat=? WHERE id_kh=?";
    pdo_execute($sql, $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $vai_tro, $kich_hoat, $id_kh);
}
// khach_hang_update('Nguyễn Văn Mạnh', 'manhnguyen123@gmail.com', 'WIN_20220310_17_44_21_Pro.jpg', "1234", 'Đó đây nè', '0907467891', '1', '1');
function nguoi_dung_update($ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $id_kh){
    if (!empty($mat_khau)) {
        $sql = "UPDATE khach_hang SET ten_kh=?, email=?, hinh=?, mat_khau=?, dia_chi=?, sdt=? WHERE id_kh=?";

        pdo_execute($sql, $ten_kh, $email, $hinh, $mat_khau, $dia_chi, $sdt, $id_kh);

    } else {
        $sql = "UPDATE khach_hang SET ten_kh=?, email=?, hinh=?, dia_chi=?, sdt=? WHERE id_kh=?";

        pdo_execute($sql, $ten_kh, $email, $hinh, $dia_chi, $sdt, $id_kh);
    }
}
// Xóa một hoặc nhiều khách hàng
function khach_hang_delete($id_kh){
    $sql = "DELETE FROM khach_hang  WHERE id_kh=?";
    if(is_array($id_kh)){
        foreach ($id_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_kh);
    }
}

// Truy vấn tất cả các khách hàng
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}


//Truy vấn một kháh hàng theo ma_kh
function khach_hang_select_by_id($id_kh){
    $sql = "SELECT * FROM khach_hang WHERE id_kh=?";
    return pdo_query_one($sql, $id_kh);
}
function khach_hang_select_by_email($email){
    $sql = "SELECT * FROM khach_hang WHERE email=?";
    return pdo_query_one($sql, $email);
}
//Kiểm tra sự tồn tại của một khách hang3
function khach_hang_exist($id_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE id_kh=?";
    return pdo_query_value($sql, $id_kh)  > 0;                        
   
}
//Kiểm tra tồn tại của khách hàng dựa theo email và phone
function khach_hang_exist_flow($value, $field,$role){
    $sql = "SELECT count(*) FROM khach_hang WHERE $field=? AND vai_tro=?";
  
        $flag = pdo_query_value($sql, $value,$role);

    return $flag > 0;                        
   
}
//Lấy danh sách kh theo vai trò
function khach_hang_select_by_role($vai_tro){
    $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
//Cập nhật mật khẩu của 1 khách hàng
function khach_hang_change_password($id_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE id_kh=?";
    pdo_execute($sql, $mat_khau_moi, $id_kh);
}
//Cập nhật mật khẩu của 1 khách hàng
function khach_hang_forgot_pass($email, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE email=?";
    pdo_execute($sql, $mat_khau_moi, $email);
}

?>