
<style>
    /* //lấy  css form login them css này vào */
    p.forget_here {
    font-size: 13px;
    font-weight: 700;
    margin-top: 11px;
}
a.btn-link-style.btn-register {
    font-size: 13px;
    color: #1E90FF;
    font-weight: 800;
}
.header .navbar .container-fluid .navbar-toggler {
        margin-left: 20px;
}
</style>
<link href="<?=$CONTENT_URL?>/css/login.css" rel="stylesheet" >
<div class="layout-login-v2">
                <section class="breadcrumb-shop">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 ">

                                <nav>
                                    <ol class="breadcrumb ">
                                        <li class="breadcrumb-item"> <span><i class="fa fa-home"></i> <a href="" class="breakcum">Trang chủ</a> </li>
                                          <span class="direct"><i class="fa fa-angle-right"></i> </span>
                                            <li class="breadcrumb-item"><a href="" class="breakcum">Tài Khoản</a> </li>
                                            <span class="direct"><i class="fa fa-angle-right"></i> </span>
                                            <li class="breadcrumb-item"><a href="" class="breakcum">Đăng nhập</a> </li>

                                    </ol>
                                </nav>
                            </div>

                        </div>

                    </div>
                </section>
                <div class="clearfix"></div>
                <div id="wp-content">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-6 col-lg-6  ">
                                <div id="evo-login">

                                    <h1 class="customer_login__title">Phục hồi mật khẩu</h1>

                                    <div class="_form-signup clearfix">
                                        <div class="main">
                                            <!-- Nơi sẽ tiếp nhận dữ liệu -->
                                            <form action="<?=$SITE_URL?>/quen-mk/index.php" method="POST" class="form" id="form_valid">



                                                <div class="spacer"></div>
<p class="nd_content">Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.</p>
                                                <div class="form-group">

                                                    <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                                                    <span class="form-message"><?php
                                                    if (isset($MESSAGE)) echo $MESSAGE . "<br>";
                                                ?></span>
                                                </div>

                                                <div class="clearfix"></div>
                                               
                                                <button class="form-submit btn btn-warning btn-block" name="btn_repass" type="submit">Lấy lại mật khẩu</button>
                                                
                                                <div class="text-login text-center">
                                        <p class="forget_here">QUAY LẠI <a href="<?=$SITE_URL?>/trang-chinh" class="btn-link-style btn-register" title="Quay lại">TẠI ĐÂY</a></p>
                                    </div>
                                            </form>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 account-banner ">
                                <div class="account__description ">
                                    <div class=" customer_login__title">Quyền lợi thành viên</div>
                                    <div class="account_policy_content">Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt.</div>

                                    <!-- Dẫn link theo đường dẫn như thị phạm bên dưới -->
                                    
                                    <a href="<?=$SITE_URL?>/dang-ky" class="btn-continue" style="margin-top: 15px;">Đăng ký</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
   
            