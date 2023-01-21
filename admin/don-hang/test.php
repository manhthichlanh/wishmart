<?php
    require_once "../../dao/don-hang.php";
    $trang_thai = "Đang duyệt";
    $ds_dh = don_hang_select_all();
    $arr = array();
    $loop = false;

    foreach ($ds_dh as $dh) {
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] == $dh['trang_thai']) {
                $loop = true;
                break;
            }
        }

        if ($loop==false) {
            if ($trang_thai==$dh['trang_thai']) echo '<option value="'.$dh['trang_thai'].'"selected>'.$dh['trang_thai'].'</option>';
        
            else echo '<option value="'.$dh['trang_thai'].'">'.$dh['trang_thai'].'</option>';
        }
        
        
        array_push($arr,$dh['trang_thai']);
        if ($loop == true) $loop=!$loop;
        
    }
              
        
?>