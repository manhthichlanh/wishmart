<?php
    require_once "../../global.php";
    require_once "../../dao/don-hang.php";
    $VIEW_NAME = "lich-su-don-hang/ls-don-hang.php";
    if (isset($_SESSION['client_user'])) $id_kh = $_SESSION['client_user']['id_kh'];
    else $id_kh = null;
    $items = lich_su_don_hang_select_by_kh($id_kh);
    
    require_once "../layout.php";
?>