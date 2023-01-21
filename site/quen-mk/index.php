<?php
    require_once "../../global.php";
    require_once "../../dao/don-hang.php";
    require_once "../../dao/khach-hang.php";
    require_once "../../sendmail.php";
    extract($_REQUEST);

    $VIEW_NAME = "quen-mk/quen-mk-form.php";
    if (exist_param("btn_repass")) {
        
        if (!empty($email)) {

            $kh = khach_hang_exist_flow($email,"email",0);

            if(!$kh){
                $MESSAGE = "Email không tồn tại!";
            } else if ($kh) {
                $randomInt = random_int(100000, 999999);
    
                $passnew = password_hash($randomInt, PASSWORD_DEFAULT);
                
                khach_hang_forgot_pass($email, $passnew);
    
                $content = "<!DOCTYPE html>
                <html>
                  <head>
                    <title>Khôi phục mật khẩu</title>
                  </head>
                  <body>
                    <h1>Kính chào khách hàng,</h1>
                    <p>Chúng tôi nhận được một phản hồi của bạn về khôi phục mật khẩi. Nếu bạn không tạo phản hồi này xin hãy bỏ qua thư này</p>
                    <p>Mật khẩu của bạn là:</p>
                    <p>".$randomInt."</p>
                    <p>Cảm ơn bạn vì đã đọc mail!</p>
                    <p>Wish Mart</p>
                  </body>
                </html>";
                send_mail($email,"Bạn",'Phục hồi mật khẩu',$content);
                $MESSAGE = "Thành công! Bạn vui lòng kiểm tra thư để xem tài khoản mới!";
            } 

        }
    }
    require_once "../layout.php";
?>