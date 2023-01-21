<?php
require_once '../../global.php';
require_once '../../dao/khach-hang.php';
require_once "../../dao/don-hang.php";
extract($_REQUEST);

if (isset($email)) {
    $client_user = khach_hang_select_by_email($email);

    if($client_user){

        if(password_verify($mat_khau, $client_user['mat_khau']) && $client_user['vai_tro']==0 && $client_user['kich_hoat']==1){

            $MESSAGE = "Đăng nhập thành công!";
           
            if(exist_param("ghi_nho")){
                add_cookie("email", $email, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            }
            // else{
            //     delete_cookie("email");
            //     delete_cookie("mat_khau");
            // }
            
            $_SESSION["client_user"] = $client_user;

            $_SESSION["client_items"] = gio_hang_select_by_id_kh($client_user['id_kh']);

            if (isset($_SESSION['cart'])&&count($_SESSION['cart'])>0) {
                $id_kh =$client_user['id_kh'];
                $id_dh=null;
                $items = $_SESSION['cart'];
                foreach ($items as $item) {
                    extract($item);
                    gio_hang_insert_by_id_kh($item[0], $item[1], $item[2], $item[3], $item[4], $id_kh, $id_dh);

                }
                $_SESSION['cart'] = array();
            }
            if(isset($_SESSION['request_uri'])){
                header("location: " . $_SESSION['request_uri']);
            }
            header("location: $SITE_URL/trang-chinh");
        }
        else{
            $MESSAGE = "Sai mật khẩu!";

        }
    }
    else {
        $MESSAGE = "Tài khoản đăng nhập không tồn tại!";
    }
    
}  
$VIEW_NAME="dang-nhap/dang-nhap-form.php";
require '../layout.php';