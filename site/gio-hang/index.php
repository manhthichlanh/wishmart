<?php
    require_once "../../global.php";
    require "../../dao/san-pham.php";
    require "../../dao/don-hang.php";
    extract($_REQUEST);
    if (exist_param("add_to_cart")) {
        
        
            if (isset($_SESSION['client_user'])) {
                $temp = 0;

                $id_kh = $_SESSION['client_user']['id_kh'];

                $id_dh =null;
     
                $db_gh = gio_hang_select_by_id_kh($id_kh);
                foreach ($db_gh as $item) {
                    if ($item['id_sp']==$id_sp) {
                        gio_hang_update_sl($so_luong,$id_kh,$id_sp);
                        $temp = 1;
                        break;
                    }
                }
                if ($temp == 0) gio_hang_insert_by_id_kh($id_sp, $so_luong, $hinh, $don_gia, $ten_sp, $id_kh, $id_dh);
                
                // print_r($so_luong);


                $client_cart = gio_hang_select_by_id_kh($id_kh);

            } else {
                $fg = 0;
        
                if (!isset($_SESSION['cart'])) $_SESSION['cart']=array();
                
                
                
                //new 13/12/22 7h57'
                if (count($_SESSION['cart'])>0) {
                    $i=0;
                    foreach ($_SESSION['cart'] as $sp) {
                        if($sp[0]==$id_sp) {

                            $_SESSION['cart'][$i][1]+=$sp[1];
                            print_r($_SESSION['cart'][$i][1]);
                            $fg=1;
                            break;
                        }
                        $i++;
                    }
                } 
                //new 13/12/22 7h57'

                if ($fg==0) {
                    $items=array($id_sp,$so_luong,$hinh,$don_gia,$ten_sp,$so_luong_max);
                    if (!isset($_SESSION['cart'])) $_SESSION['cart']=array();
                    array_push($_SESSION['cart'],$items);
                }
                $client_cart = $_SESSION['cart'];
            }
        //     if (exist_param("del_cart")) {
        //         if (isset($id)) {
        //             array_splice($_SESSION['cart'],$id,1);
        //             // array_splice($_SESSION['cart'],$_GET['id'],1);          
        //         } else {
        //             unset($_SESSION['cart']);
        //             $_SESSION['cart']=array();
        //         } 
                
        // }
    

        header("location: $SITE_URL/gio-hang");
    }
        

  
   
    
    



        $VIEW_NAME = "gio-hang/cart.php";
        require_once "../layout.php";
        echo '<link rel="stylesheet" href="'.$CONTENT_URL.'/css/shopping_cart.css">';
 
   
?>