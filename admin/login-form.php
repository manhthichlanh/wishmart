<?php
    require_once "../global.php";
    require_once "../dao/khach-hang.php";

    extract($_REQUEST);
    
    if (isset($email)) {
    $user = khach_hang_select_by_email($email);

    if($user){
        if(password_verify($mat_khau,$user['mat_khau']) && $user['vai_tro']==1){
            $MESSAGE = "Đăng nhập thành công!";

            if(exist_param("ghi_nho")){
                add_cookie("email", $email, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            }
            // else{
            //     delete_cookie("email");
            //     delete_cookie("mat_khau");
            // }
            $_SESSION["user"] = $user;
          
            if(isset($_SESSION['request_uri'])){
                header("location: " . $_SESSION['request_uri']);
            }
        }
        else{
            $MESSAGE = "Sai mật khẩu!";

        }
    }
    else {
        $MESSAGE = "Tài khoản đăng nhập không tồn tại!";
    }
    
}   
    if (get_cookie("email")!=null && get_cookie("mat_khau")!=null) {
        $email=get_cookie("email");
        $pass=get_cookie("mat_khau");
    } else {
        $email="";
        $pass="";
    }
    
?>
<div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">Đăng Nhập</div>
                    <div class="panel-body">
                        <form role="form" action="<?=$_SERVER['PHP_SELF']?>" method="post" id="form_valid">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" autofocus="" value="<?=$email?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="mat_khau" type="password" value="<?=$pass?>">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="ghi_nho" type="checkbox" value="Nhớ mật khẩu">Nhớ mật khẩu
                                    </label>
                                </div>
                                <input type="submit" value="Đăng Nhập" class="btn btn-primary btn-md" name="dangnhap">
                            </fieldset>
                            <?php
                                if (isset($MESSAGE) && isset($MESSAGE)!='') {
                                    echo $MESSAGE;
                                }
                                check_login();
                                if (isset($_SESSION['log'])) {
                                    sleep(1);
                                    header("location: $ADMIN_URL/trang-chinh");
                                }
                                
                            ?>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->