<?php
    require_once "../../global.php";
    require "../../dao/don-hang.php";

    // print_r($_SESSION['cart']);
    $cls = gio_hang_select_by_id_kh(11);

    // print_r($cls);
    $_SESSION['cart_gh'] = array();
    foreach ($cls as $mage) {
        $temp=array($mage['id_sp'],$mage['so_luong'],$mage['hinh'],$mage['don_gia'],$mage['don_gia'],$mage['ten_sp'],$mage['so_luong_max'],$mage['id_dhct']);
        array_push($_SESSION['cart_gh'],$temp); 
    }
    print_r($_SESSION['cart_gh']);
    print_r(count($_SESSION['cart_gh']));
?>