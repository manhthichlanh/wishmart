<?php
    require "../dao/don-hang.php";
    session_start();
    extract($_REQUEST);
    if (isset($id)&&isset($_SESSION['cart'])) array_splice($_SESSION['cart'],$id,1);
    if (isset($id)&&isset($_SESSION['client_user'])) don_hang_delete($id); 
?>
