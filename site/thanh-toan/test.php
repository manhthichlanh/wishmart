<?php
    require_once "../../global.php";
    require_once "../../dao/san-pham.php";
    require_once "../../dao/don-hang.php";
    $list = don_hang_hoan_thanh(805564);
    // print_r($list);
    print_r($_SESSION['cart']);
    print_r(count($_SESSION['cart']));
?>