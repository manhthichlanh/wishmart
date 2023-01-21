<link href="<?=$CONTENT_URL?>/css/login.css" rel="stylesheet" >
<style>
    .header .navbar .container-fluid .navbar-toggler {
        margin-left: 20px;
}
</style>
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

                                    <h1 class="customer_login__title">Đăng nhập</h1>

                                    <div class="_form-signup clearfix">
                                        <div class="main">
                                            <!-- Nơi sẽ tiếp nhận dữ liệu -->
                                            <form action="<?=$SITE_URL?>/dang-nhap/dang-nhap.php" method="POST" class="form" id="form_valid">



                                                <div class="spacer"></div>

                                                <div class="form-group">

                                                    <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                                                    <span class="form-message"></span>
                                                </div>

                                                <div class="form-group">
                                                    
                                                    <input id="password" name="mat_khau" type="password" placeholder="Nhập mật khẩu" class="form-control">
           
                                                    <span class="form-text">

                                                    </span>
                                                    <p class="test">Hiện mật khẩu</p>
                                                    <p>Bạn quên mật khẩu?<a href="<?=$SITE_URL?>/quen-mk" style="text-decoration: none;">Nhấn vào đây!</a> </p>

                                                    <span class="form-message"><?php
                                                        if (isset($MESSAGE)) echo $MESSAGE;
                                                    ?></span>
                                                </div>
                                                <div class="clearfix"></div>
                                                <!--<p class="text-right recover">-->
                                                <!--    <a href="forget_pass.html" class="btn-link-style" title="Quên mật khẩu?">Quên mật khẩu?</a>-->
                                                <!--</p>-->
                                                <button class="form-submit btn btn-warning btn-block" name="btn-login" type="submit">Đăng nhập</button>
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
   
            