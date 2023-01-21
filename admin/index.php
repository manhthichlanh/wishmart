<?php
    require_once "../global.php";
    $VIEW_NAME = "login-form.php";

    if (isset($_GET['act'])&&$_GET['act']=="dangxuat") {
        session_unset(); 
        header("location: $ADMIN_URL/index.php");
    }
    
    
    require_once "layout.php";
    
?>