<?php
require_once 'pdo.php';

function thong_ke_san_pham_theo_danh_muc(){
    $sql = "SELECT dm.id_dm, dm.ten_dm,
            COUNT(*) so_luong,
            MIN(sp.don_gia) gia_min,
            MAX(sp.don_gia) gia_max,
            AVG(sp.don_gia) gia_avg
            FROM san_pham sp
            JOIN danh_muc dm ON dm.id_dm=sp.id_dm
            GROUP BY dm.id_dm, dm.ten_dm";
    return pdo_query($sql);
}
function thong_ke_san_pham_theo_thuong_hieu(){
    $sql = "SELECT th.id_th, th.ten_th,
            COUNT(*) so_luong,
            MIN(sp.don_gia) gia_min,
            MAX(sp.don_gia) gia_max,
            AVG(sp.don_gia) gia_avg
            FROM san_pham sp
            JOIN thuong_hieu th ON th.id_th = sp.id_th
            GROUP BY th.id_th, th.ten_th";
    return pdo_query($sql);
}
function tong_thanh_phan($tbl_name,$field,$bool,$value) {
    $arr = explode("_",$tbl_name);
    $first = substr($arr[0],0,1);
    $last = substr($arr[count($arr) - 1],0,1);
    $tbl_key = $first.$last;
    $sql = "SELECT COUNT(id_$tbl_key)  FROM $tbl_name $tbl_key where 1";
    if ($field!="") $sql.=" AND $field";
    if ($bool!="") $sql.= " $bool like";
    if ($value!="") $sql.= " '%$value%'";
  
    
    return pdo_query_value($sql);
}
function tong_doanh_thu() {
    $sql = "SELECT sum(ct.so_luong*(ct.don_gia-(ct.don_gia*ct.giam_gia))) from don_hang dh,don_hang_chi_tiet ct where dh.id_dh = ct.id_dh";
    return pdo_query_value($sql);
}
function thong_ke_binh_luan(){
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngay_bl) cu_nhat,"
            . " MAX(bl.ngay_bl) moi_nhat"
            . " FROM binh_luan bl "
            . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
            . " GROUP BY hh.ma_hh, hh.ten_hh"
            . " HAVING so_luong > 0";
    return pdo_query($sql);
}
function thong_ke_don_hang($thoi_gian) {
    $sql='SELECT dh.ngay_xuat,sum(ct.so_luong*ct.don_gia) as doanh_thu
    FROM don_hang dh INNER JOIN don_hang_chi_tiet ct on dh.id_dh = ct.id_dh 
    WHERE 1 and ';
    if ($thoi_gian=="now") {
        $sql.=' date(dh.ngay_xuat) = date(now()) 
        GROUP BY dh.ngay_xuat';
    } else {
        $sql.=' date(dh.ngay_xuat) BETWEEN DATE_SUB(date(now()), INTERVAL '.$thoi_gian.' DAY) 
        AND date(now()) 
        GROUP BY dh.ngay_xuat';
    }
    
    return pdo_query($sql,$thoi_gian);
}
