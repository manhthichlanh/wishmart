<style>
    input#re_password {
        height: 55px !important;
        padding: 0 15px !important;
        outline: none !important;
        box-shadow: none !important;
        border-radius: 4px !important;
        margin-bottom: 0 !important;
        border: 1px solid transparent !important;
        background: #ededed !important;
        color: #333 !important;

    }
 
    .header .navbar .container-fluid .navbar-toggler {
        margin-left: 20px;
}

</style>

<link href="<?= $CONTENT_URL ?>/css/logout.css" rel="stylesheet">
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

                        <h1 class="customer_login__title">Đăng ký</h1>

                        <div class="_form-signup clearfix">
                            <div class="main">

                                <form action="<?= $SITE_URL ?>/dang-ky/dang-ky.php" method="POST" class="form" id="form_valid">
                                    <h3 class="heading">Thành viên đăng ký</h3>


                                    <div class="spacer"></div>

                                    <div class="form-group">

                                        <input id="fullname" name="fullname" type="text" placeholder="Họ và Tên đệm" class="form-control">
                                        <span class="form-message"></span>
                                    </div>

                                    <div class="form-group">

                                        <input id="email" name="email" type="text" placeholder="Địa chỉ Email" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">

                                        <input id="sdt" name="sdt" type="text" placeholder="Số điện thoại" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">

                                        <input name="password" id="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                                        <span class="form-message"></span>
                                    </div>

                                    <div class="form-group">

                                        <input type="password" name="re_password" id="re_password" placeholder="Nhập lại mật khẩu" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                    <?php
                                    if (isset($MESSAGE)) echo $MESSAGE . "<br>";
                                    ?>
                                    <button class="form-submit btn btn-warning btn-block " type="submit" name="btn_register">Đăng ký</button>
                                </form>


                            </div>


                        </div>



                    </div>
                </div>
                <div class="col-lg-6 col-md-6 account-banner ">
                    <div class="account__description ">
                        <div class=" customer_login__title">Quyền lợi thành viên</div>
                        <div class="account_policy_content">Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt.</div>
                        <a href="<?= $SITE_URL ?>/dang-nhap" class="btn-continue" style="margin-top: 15px;">Đăng nhập</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>