<?php
require_once 'pdo.php';

//Thêm loại mới
function danh_muc_insert($ten_dm, $hinh, $uu_tien, $hien_thi){
    $sql = "INSERT INTO danh_muc(ten_dm, hinh, uu_tien, hien_thi) VALUES(?,?,?,?)";
    pdo_execute($sql, $ten_dm, $hinh, $uu_tien, $hien_thi);
}

//Cập nhật tên loại
function danh_muc_update($id_dm, $ten_dm, $hinh, $uu_tien, $hien_thi){
    $sql = "UPDATE danh_muc SET ten_dm=?, hinh=?, uu_tien=?, hien_thi=? WHERE id_dm=?";
    pdo_execute($sql, $ten_dm, $hinh, $uu_tien, $hien_thi, $id_dm);
}

// Xóa một hoặc nhiều loại
function danh_muc_delete($id_dm){
    $sql = "DELETE FROM danh_muc WHERE id_dm=?";
    if(is_array($id_dm)){
        foreach ($id_dm as $ma) pdo_execute($sql, $ma); 
    } else pdo_execute($sql, $id_dm);
}
// Truy vấn tất cả các loại
function danh_muc_select_all(){
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}
//Truy vấn một loại theo mã
function danh_muc_select_by_id($id_dm){
    $sql = "SELECT * FROM danh_muc WHERE id_dm=?";
    return pdo_query_one($sql, $id_dm);
}
//Kiểm tra sự tồn tại của một loại
function danh_muc_exist($id_dm){
    $sql = "SELECT count(*) FROM danh_muc WHERE id_dm=?";
    return pdo_query_value($sql, $id_dm) > 0;
}
function danh_muc_name_exist($ten_dm){
    $sql = "SELECT count(*) FROM danh_muc WHERE ten_dm=?";
    return pdo_query_value($sql, $ten_dm) > 0;
}