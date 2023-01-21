<?php
require_once 'pdo.php';

//Thêm loại mới
function thuong_hieu_insert($ten_th, $hinh, $uu_tien, $hien_thi){
    $sql = "INSERT INTO thuong_hieu(ten_th, hinh, uu_tien, hien_thi) VALUES(?,?,?,?)";
    pdo_execute($sql, $ten_th, $hinh, $uu_tien, $hien_thi);
}

//Cập nhật tên loại
function thuong_hieu_update($id_th, $ten_th, $hinh, $uu_tien, $hien_thi){
    $sql = "UPDATE thuong_hieu SET ten_th=?, hinh=?, uu_tien=?, hien_thi=? WHERE id_th=?";
    pdo_execute($sql, $ten_th, $hinh, $uu_tien, $hien_thi, $id_th);
}

// Xóa một hoặc nhiều loại
function thuong_hieu_delete($id_th){
    $sql = "DELETE FROM thuong_hieu WHERE id_dm=?";
    if(is_array($id_th)){
        foreach ($id_th as $ma) pdo_execute($sql, $ma); 
    } else pdo_execute($sql, $id_th);
}
// Truy vấn tất cả các loại
function thuong_hieu_select_all(){
    $sql = "SELECT * FROM thuong_hieu";
    return pdo_query($sql);
}

//Truy vấn một loại theo mã
function thuong_hieu_select_by_id($id_th){
    $sql = "SELECT * FROM thuong_hieu WHERE id_th=?";
    return pdo_query_one($sql, $id_th);
}
//Kiểm tra sự tồn tại của một loại
function thuong_hieu_exist($id_th){
    $sql = "SELECT count(*) FROM thuong_hieu WHERE id_th=?";
    return pdo_query_value($sql, $id_th) > 0;
}