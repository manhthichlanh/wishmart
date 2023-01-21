<?php
require_once 'pdo.php';




//1
function don_hang_insert($id_dh, $ten_nguoi_nhan, $dia_chi,$email,$sdt,$ghi_chu,$phuong_thuc_thanh_toan,$trang_thai,$id_kh){
    $sql = "INSERT INTO don_hang(id_dh,ten_nguoi_nhan, dia_chi,email,sdt,ghi_chu,phuong_thuc_thanh_toan,trang_thai,id_kh) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_dh, $ten_nguoi_nhan, $dia_chi,$email, $sdt, $ghi_chu, $phuong_thuc_thanh_toan, $trang_thai, $id_kh);
    
}
//2

function don_hang_update( $ten_nguoi_nhan, $dia_chi, $email, $sdt, $ghi_chu, $phuong_thuc_thanh_toan, $trang_thai, $id_kh, $id_dh){
    $sql = "UPDATE don_hang SET  ten_nguoi_nhan=?, dia_chi=?,email=?,sdt=?,ghi_chu=?,phuong_thuc_thanh_toan=?,trang_thai=? , id_kh=? WHERE id_dh=?";
    pdo_execute($sql, $ten_nguoi_nhan, $dia_chi, $email, $sdt, $ghi_chu, $phuong_thuc_thanh_toan, $trang_thai, $id_kh, $id_dh);
}

function ma_dhct($id_kh) {
    $sql="SELECT id_dhct FROM `don_hang_chi_tiet` WHERE id_dh is null and id_kh=?";
    return pdo_query($sql,$id_kh);
    // foreach ($items as $item) {
    //     extract($item);
    //     echo $id_dhct;
    //     $sql = "UPDATE `don_hang_chi_tiet` SET id_dh=? WHERE id_kh=? AND id_dhct=?";
    //     pdo_execute($sql, $id_dh,$id_kh,$id_dhct);
    // }
   
}
function thanh_toan($id_dh,$id_kh,$id_dhct) {
    $sql = "UPDATE `don_hang_chi_tiet` SET id_dh=? WHERE id_kh=? AND id_dhct=?";
    pdo_execute($sql, $id_dh,$id_kh,$id_dhct);
}
// print_r(thanh_toan(11,328322));

// function test($id_kh,$id_dh) {
//     $sql="SELECT id_dhct FROM `don_hang_chi_tiet` WHERE id_dh is null and id_kh=?";
//     $items = pdo_query($sql,$id_kh);
//     foreach ($items as $item) {
//         extract($item);
//         $sql = "UPDATE `don_hang_chi_tiet` SET id_dh=? WHERE id_kh=? AND id_dhct=?";
//         pdo_execute($sql, $id_dh,$id_kh,$id_dhct);
//     }
//     return $items;
// }

function nguoi_dat_hang($id_kh) {
    $sql="SELECT id_dh FROM `don_hang` WHERE id_kh=? ORDER by id_dh DESC ";
    return pdo_query_one($sql,$id_kh);

}

function ma_don_hang($id_kh) {
    $sql="SELECT id_dh FROM `don_hang` WHERE id_kh=? ORDER by id_dh DESC limit 1";
    return pdo_query_value($sql,$id_kh);
}
function gio_hang_select_by_id_kh($id_kh){
    $sql = "SELECT dhct.id_sp,dhct.so_luong,dhct.hinh,dhct.don_gia,dhct.ten_sp,sp.so_luong as so_luong_max,dhct.id_dh,dhct.id_kh,dhct.id_dhct From don_hang_chi_tiet dhct LEFT JOIN khach_hang kh on kh.id_kh = dhct.id_kh JOIN san_pham sp  ON sp.id_sp = dhct.id_sp GROUP BY dhct.id_dhct HAVING dhct.id_dh is null and dhct.id_kh is not null and dhct.id_kh=?";
    return pdo_query($sql,$id_kh);
}

function gio_hang_insert_by_id_kh($id_sp, $so_luong, $hinh, $don_gia, $ten_sp, $id_kh,$id_dh){
    $sql ="INSERT INTO `don_hang_chi_tiet` (`id_sp`, `so_luong`, `hinh`, `don_gia`, `ten_sp`, `id_kh`, `id_dh`) VALUES (?,?,?,?,?,?,?)";
    return pdo_execute($sql ,$id_sp, $so_luong, $hinh, $don_gia, $ten_sp, $id_kh,$id_dh);
}
function gio_hang_update_sl($so_luong,$id_kh,$id_sp) {
    $sql ="UPDATE don_hang_chi_tiet SET so_luong=so_luong+? WHERE 1";
    if (!empty($id_kh)) $sql.= " AND id_kh=?";
    if (!empty($id_sp)) $sql.= " AND id_sp=?";
    return pdo_execute($sql ,$so_luong, $id_kh,$id_sp);
}
function thanh_toan_update_sl($so_luong,$id_kh,$id_sp) {
    $sql ="UPDATE don_hang_chi_tiet SET so_luong=? WHERE 1";
    if (!empty($id_kh)) $sql.= " AND id_kh=?";
    if (!empty($id_sp)) $sql.= " AND id_sp=?";
    return pdo_execute($sql ,$so_luong, $id_kh,$id_sp);
}
function don_hang_delete($id_dhct){
    $sql = "DELETE FROM don_hang_chi_tiet WHERE id_dhct=?";
    if(is_array($id_dhct)){
        foreach ($id_dhct as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_dhct);
    }
}
function gio_hang_delete($id_dh){
    $sql = "DELETE FROM don_hang WHERE id_dh=?";
    if(is_array($id_dh)){
        foreach ($id_dh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id_dh);
    }
}

function don_hang_select_all(){
    $sql = "SELECT * FROM don_hang ORDER by ngay_xuat DESC";
    return pdo_query($sql);
}

function don_hang_chi_tiet_select_by_id($id_dh){
    $sql = "SELECT * FROM don_hang_chi_tiet where id_dh=?";
    return pdo_query($sql,$id_dh);
}

function lich_su_don_hang_select_by_kh($id_kh){
    $sql = "SELECT dh.id_dh,dh.id_kh, dh.ten_nguoi_nhan,dh.sdt, dh.dia_chi,dh.ngay_xuat,dh.trang_thai, dhct.id_dh, SUM(dhct.so_luong) AS tong_so_luong,SUM(dhct.so_luong*dhct.don_gia) as tong_tien  FROM don_hang dh JOIN don_hang_chi_tiet dhct on dh.id_dh = dhct.id_dh GROUP by dh.id_dh HAVING dh.id_kh = ? and dhct.id_dh is not null ORDER by ngay_xuat DESC";
    return pdo_query($sql,$id_kh);
}
function don_hang_select_by_id($id_dh){
    $sql = "SELECT * FROM don_hang WHERE id_dh=?";
    return pdo_query_one($sql, $id_dh);
}
function don_hang_hoan_thanh($id_dh) {
    $sql = "SELECT dhct.ten_sp, dhct.hinh, dhct.don_gia, dhct.so_luong, dhct.mau_sac, dhct.kich_thuoc, dhct.cau_hinh, dh.* FROM don_hang dh INNER JOIN don_hang_chi_tiet dhct ON dh.id_dh = dhct.id_dh HAVING dh.id_dh=?";
    return pdo_query($sql,$id_dh);
}
function don_hang_exist($id_dh){
    $sql = "SELECT count(*) FROM don_hang WHERE id_dh=?";
    return pdo_query_value($sql, $id_dh) > 0;
}

function don_hang_select_by_gio_hang($id_gh){
    $sql = "SELECT b.id_dh h.id_gh FROM don_hang b JOIN gio_hang h ON h.id_gh=b.id_gh WHERE b.id_gh=? ORDER BY phuong_thuc_thanh_toan  DESC";
    return pdo_query($sql, $id_gh);
}

function don_hang_select_by_kh() {
    $sql ="SELECT b.id_dh, b.ten_nguoi_nhan, b.dia_chi, b.email,b.sdt,b.ghi_chu,b.phuong_thuc_thanh_toan,b.trang_thai FROM don_hang b JOIN gio_hang h ON b.id_gh=id.gh";
    return pdo_query($sql);
}