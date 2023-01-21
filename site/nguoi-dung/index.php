<?php
    require '../../global.php';
    require_once "../../dao/san-pham.php";
    require_once "../../dao/khach-hang.php";
    require_once "../../dao/don-hang.php";
    extract($_REQUEST);
    if (isset($_SERVER['HTTP_REFERER'])) $back_side = $_SERVER['HTTP_REFERER'];
    else $back_side = "$SITE_URL/trang-chinh";
    if (!isset($_SESSION['client_user'])) {
        header("location:  $back_side");
        return;
    }
    if (isset($act)) {      
            switch ($act) {
                case 'user_logout':
                    unset($_SESSION['client_user']);
                    header("location:  $back_side");
                    break;
                case 'user_profile':
                    $user_list = khach_hang_select_by_id($_SESSION['client_user']['id_kh']);
                    extract($user_list);
                    $VIEW_NAME = "nguoi-dung/profile.php";
                    break;
                default:
                    $VIEW_NAME = "nguoi-dung/profile.php";
                    break;
            }
    } else {
        if (isset($btn_edit)) {
            $user_list = khach_hang_select_by_id($_SESSION['client_user']['id_kh']);
            extract($user_list);
            $VIEW_NAME = "nguoi-dung/edit.php";
        } 
        if (isset($btn_update)) {
            if (isset($old_pass)) {
                $user_old_pass = khach_hang_select_by_id($_SESSION['client_user']['id_kh'])['mat_khau'];

                if(!password_verify($old_pass,$user_old_pass)){
    
                    $MESSAGE = "Mật khẩu không khớp!";
                    goto escape;
                } else {
                    goto next;
                }
                
            
            }
            
            // else if (khach_hang_exist_flow($sdt,"sdt")) {
            //     $MESSAGE = "Số điện thoại này đã được sử dụng!";
            // }
            else{
            next:
            $MESSAGE = null;
                try {
                    if (!isset($password)) $password=null;
                    $hinh=save_file("hinh_user", "$IMAGE_DIR/users/");
                    $id_kh = $_SESSION['client_user']['id_kh'];
                    $passnew = password_hash($password, PASSWORD_DEFAULT);
                    nguoi_dung_update($fullname,$email,$hinh,$passnew,$dia_chi,$sdt, $id_kh);
                    $MESSAGE = "Cập nhật thành công!";
       
                }catch (Exception $exc) {
                    echo $exc;
                    $MESSAGE = "Cập nhật thất bại!";
                }
            }
            
        } 
        escape:
        $VIEW_NAME = "nguoi-dung/edit.php";
        
    }

    require_once "../layout.php";
?>