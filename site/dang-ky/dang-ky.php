<?php
    require_once "../../global.php";
    
    require_once "../../dao/khach-hang.php";

    extract($_REQUEST);
    if(exist_param("btn_register")){
        if(khach_hang_exist_flow($email,"email",null)){
            $MESSAGE = "Email này đã được sử dụng!";
        }
        else if (khach_hang_exist_flow($sdt,"sdt",null)) {
            $MESSAGE = "Số điện thoại này đã được sử dụng!";
        }
        else{
            // $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
            // $hinh = $file_name?$file_name:"user.png";
            try {
                $passnew = password_hash($password, PASSWORD_DEFAULT);
                khach_hang_insert($fullname, $email, "user.jqg", $passnew, null, $sdt, 0, 1);
                $MESSAGE = "Đăng ký thành viên thành công!";
            }
            catch (Exception $exc) {
                echo $exc;
                $MESSAGE = "Đăng ký thành viên thất bại!";
            }
        }
    }
    else{
        global $fullname, $email, $sdt, $password, $re_password;
    }
    
    $VIEW_NAME="dang-ky/dang-ky-form.php";
    require_once '../layout.php';
?>