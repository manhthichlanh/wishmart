
<?php
    session_start();

    if (isset($_SESSION['cart'])) {
        session_unset();    
        $_SESSION['cart'] = array();
    }
  
?>