<?php

    require_once 'pdo.php';
    function san_pham_insert($ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th) {
        $sql = "INSERT INTO san_pham(ten_sp, hinh, don_gia, giam_gia, so_luong, mau_sac, kich_thuoc, cau_hinh, mo_ta, uu_tien, id_dm, id_th) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql, $ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th);
    }
    // san_pham_insert('Sp2', 'gg', '0', '0', '1', 'Đỏ', '6,1 Inch', NULL, 'ggggg', '0', '8', NULL );
    function san_pham_update($ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th, $id_sp) {
        if (empty($hinh)) {
            $sql = "UPDATE san_pham SET ten_sp=?, don_gia=?, giam_gia=?, so_luong=?, mau_sac=?, kich_thuoc=?, cau_hinh=?, mo_ta=?, uu_tien=?, id_dm=?, id_th=? WHERE id_sp=?";
            pdo_execute($sql, $ten_sp, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th, $id_sp);
        }
        else {
            $sql = "UPDATE san_pham SET ten_sp=?, hinh=?, don_gia=?, giam_gia=?, so_luong=?, mau_sac=?, kich_thuoc=?, cau_hinh=?, mo_ta=?, uu_tien=?, id_dm=?, id_th=? WHERE id_sp=?";
            pdo_execute($sql, $ten_sp, $hinh, $don_gia, $giam_gia, $so_luong, $mau_sac, $kich_thuoc, $cau_hinh, $mo_ta, $uu_tien, $id_dm, $id_th, $id_sp);
        }
    }

    function hinh_anh_insert($ten_hinh, $hinh, $id_sp) {
        $sql = "INSERT INTO hinh_anh(`ten_hinh`, `hinh`, `id_sp`) VALUES(?,?,?)";
        pdo_execute($sql, $ten_hinh, $hinh, $id_sp);
    }
    function san_pham_delete($id_sp) {
        $sql = "DELETE FROM san_pham WHERE id_sp=?";
        if(is_array($id_sp)){
            foreach ($id_sp as $ma) pdo_execute($sql, $ma); 
        } else pdo_execute($sql, $id_sp);
    }
    function san_pham_select_all_each() {
        $sql = "SELECT * FROM san_pham";
        return pdo_query($sql);
    }
    function san_pham_select_all() {
        $sql = "SELECT sp.id_sp, sp.ten_sp, sp.hinh, sp.don_gia, sp.giam_gia, sp.so_luong, sp.mau_sac, sp.kich_thuoc, sp.cau_hinh, sp.mo_ta, sp.uu_tien, IF(sp.id_dm>0,sp.id_dm,'Không tồn tại') as id_dm, IF(sp.id_th>0,sp.id_th,'Không tồn tại') as id_th, IF(dm.id_dm>0,dm.ten_dm,'Không tồn tại') as ten_dm, IF(th.id_th>0,th.ten_th,'Không tồn tại') as ten_th  FROM san_pham sp  
        LEFT JOIN hinh_anh ha on ha.id_sp = sp.id_sp
        LEFT JOIN thuong_hieu th on th.id_th = sp.id_th
        LEFT JOIN danh_muc dm on dm.id_dm = sp.id_dm
        GROUP by id_sp";
        return pdo_query($sql);
    }

    function san_pham_select_top10() {
        $sql = "SELECT * FROM san_pham order by so_luot_xem DESC Limit 10";
        return pdo_query($sql);
    }

    //xuất sản phẩm ra trang chu
    function san_pham_trung_bay($id_dm,$sl_xuat) {
        $sql = "SELECT * FROM `san_pham` WHERE id_dm=? ORDER BY id_sp DESC limit $sl_xuat ";
        return pdo_query($sql,$id_dm);
    }
    function san_pham_moi_nhat($sl_xuat) {
        $sql = "SELECT * FROM `san_pham` ORDER BY id_sp DESC limit $sl_xuat ";
        return pdo_query($sql);
    }
    
    function bo_loc_san_pham($id_dm, $sort, $min, $max, $bo_nho, $mau_sac, $page) {
        $number = 8;
        if (isset($page)&&$page>0&&$page!="all") $number*=$page;

        $sql = "SELECT * FROM san_pham where 1";
        //Sắp xếp  sản phẩm theo id_dm
        if ($id_dm!=""&&!empty($id_dm)) $sql .= "  AND id_dm=$id_dm";
        //Sắp xếp  sản phẩm theo don_gia

        if (isset($min,$max)&&$min!=null) $sql .= " AND don_gia BETWEEN $min AND $max";
        //Sắp xếp theo bộ nhớ
        if ($bo_nho!=""&&!empty($bo_nho)) $sql .= "  AND cau_hinh like '%$bo_nho%'";
        //Sắp xếp theo màu sắc
        if ($mau_sac!=""&&!empty($mau_sac)) $sql .= "  AND mau_sac like '%$mau_sac%'";
        //Kiểu sắp xếp sản phẩm
        if ($sort!=""&&!empty($sort)) $sql.=" order by $sort";
        //Phân trang
        if ($page!="all") $sql.=" limit $number";
        
        
        return pdo_query($sql);
    }

    function san_pham_select_by_id($id_sp) {
        $sql = "SELECT * FROM san_pham where id_sp=?";
        return pdo_query_one($sql, $id_sp);
    }
    
    function hinh_anh_select_by_id_sp($id_sp) {
        $sql = "SELECT sp.id_sp, ha.id_ha, ha.ten_hinh, ha.hinh, sp.don_gia, sp.giam_gia, sp.so_luong, sp.mau_sac, sp.kich_thuoc, sp.cau_hinh, sp.mo_ta FROM san_pham sp  
        LEFT JOIN hinh_anh ha on ha.id_sp = sp.id_sp
   
        HAVING id_sp=?;";
        return pdo_query($sql, $id_sp);
    }

    function thong_ke_san_pham() {
        $sql = "SELECT sp.id_sp, sp.ten_sp, sp.hinh, sp.uu_tien, sp.mo_ta, IF(sp.id_dm>0,sp.id_dm,'Không tồn tại') as id_dm, IF(sp.id_dm>0,dm.ten_dm,'Không tồn tại') as ten_dm, IF(SUM(spct.so_luong)>0,SUM(spct.so_luong),0) as 'tong_sl', IF(COUNT(spct.id_spct)=0,0,COUNT(spct.id_spct)) as 'sp_con' FROM san_pham sp  
        LEFT JOIN san_pham_chi_tiet spct on sp.id_sp = spct.id_sp
        LEFT JOIN danh_muc dm on dm.id_dm = sp.id_dm
        GROUP by id_sp";
        return pdo_query($sql);     
    }

    function san_pham_exist($id_sp){
        $sql = "SELECT count(*) FROM san_pham WHERE id_sp=?";
        return pdo_query_value($sql, $id_sp) > 0;
    }

    function san_pham_select_uu_tien() {
        $sql = "SELECT * FROM san_pham where uu_tien=?";
        return pdo_query($sql, 1);
    }
    
    function san_pham_select_mau_sac($id_dm) {
        $sql = "SELECT mau_sac FROM san_pham where 1";
        if (isset($id_dm)) $sql .= " AND id_dm=?";
        return pdo_query($sql, $id_dm);
    }

    function san_pham_select_bo_nho($id_dm) {
        $sql = "SELECT cau_hinh FROM san_pham where 1";
        if (isset($id_dm)) $sql .= " AND id_dm=?";
        return pdo_query($sql, $id_dm);
    }
    function san_pham_select_don_gia($id_dm) {
        $sql = "SELECT don_gia FROM san_pham where 1";
        if (isset($id_dm)) $sql .= " AND id_dm=?";
        return pdo_query($sql, $id_dm);
    }
    function san_pham_select_by_dm($id_dm) {
        $sql = "SELECT * FROM san_pham where id_dm=?";
        return pdo_query($sql, $id_dm);
        // if(isset($page)) $sql.="*2*$page";
    }

    function bo_loc_san_pham_select_by_dm($id_dm,$page) {  
        $number = 8;
        if (isset($page)&&$page>0) $number*=$page;
        $sql = "SELECT * FROM san_pham where id_dm=?";
        $sql.=" limit $number";
        return pdo_query($sql, $id_dm);
    }
    function san_pham_select_keyword($ten_sp) {
        $sql = "SELECT * FROM san_pham where ten_sp like '%$ten_sp%'";

        return pdo_query($sql);
    }

    function san_pham_tang_so_luot_xem($id_sp) {
        $sql="UPDATE san_pham SET so_luot_xem=so_luot_xem+1 WHERE id_sp=?";
        return pdo_query($sql ,$id_sp);
    }
    
    function san_pham_select_hot_list($id_dm) {
        $sql = "SELECT * FROM san_pham where id_dm = ?";
        return pdo_query($sql, $id_dm);
    }
    
?>