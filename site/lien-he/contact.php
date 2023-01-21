<style>
    .header .navbar .container-fluid .navbar-toggler {
        margin-left: 20px;
}
</style>
<div class="layout-login-v2">
            <section class="breadcrumb-shop">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"> <span><i class="fa fa-home"></i> <a href="" class="breakcum">Trang chủ</a> </li>
                                    <span class="direct"><i class="fa fa-angle-right"></i> </span>

                                    <li class="breadcrumb-item"><a href="" class="breakcum">Liên hệ</a> </li>

                                </ol>
                            </nav>
                        </div>

                    </div>

                </div>
            </section>
            <div class="container">
                <div class="contact_head">
                    <h1 class="title_contact">Liên hệ với chúng tôi</h1>
                </div>
                <div class="map_location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6176701117984!2d106.66586464937846!3d10.840542760935731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529aed042ece5%3A0xb4fb80b8996fae6b!2zMzUwLzM3LzM0IE5ndXnhu4VuIFbEg24gTMaw4bujbmcsIFBoxrDhu51uZyAxNiwgR8OyIFbhuqVwLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1670648422909!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- 
                //phaanf footer -->
                <div class="row">
                    <div class="col-12 order-lg-2 order-2">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <div class="item-contact">
                                    <div class="img">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content-r">
                                        Địa chỉ:
                                        <p>
                                            A12, Đinh Tiên Hoàng </p>
                                    </div>
                                </div>
                                <div class="item-contact">
                                    <div class="img">
                                        <i class="fas fa-question"></i>
                                    </div>
                                    <div class="content-r">
                                        Email:
                                         <br>
                                        <a href="mailto:contact@yourdomain.com">contact@yourdomain.com</a>
                                    </div>
                                </div>
                                <div class="item-contact">
                                    <div class="img">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content-r">
                                        Điện thoại:
                                        <br>

                                        <a class="fone" href="tel:0123 456 789">0123 456 789</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div id="pagelogin">
                                    <form action="<?=$SITE_URL?>/lien-he/index.php" class="contact-form" method="post">
                                       
                                        <div class="form-signup clearfix">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12 group_contact">
                                                    <fieldset class="form-group">
                                                        <label>Tên của bạn<span class="required">*</span></label>
                                                        <input type="text" name="name" id="name" class="form-control  form-control-lg" data-validation-error-msg="Không được để trống" data-validation="required" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-xs-12 group_contact">
                                                    <fieldset class="form-group">
                                                        <label>Địa chỉ Email<span class="required">*</span></label>
                                                        <input type="email" name="email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg="Email sai định dạng" id="email" class="form-control form-control-lg" required="">
                                                    </fieldset>
                                                </div>
                                        
                                                <div class="col-sm-12 col-xs-12 group_contact">
                                                    <fieldset class="form-group">
                                                        <label>Nội dung<span class="required">*</span></label>
                                                        <textarea name="text_content" id="enquiry" class="form-control form-control-lg content-area" cols="20" rows="50"  data-validation="required" required=""></textarea>
                                                    </fieldset>
                                                    <div class="pull-xs-left" style="margin-top:20px;">
			                                    <button type="submit" class="button-default" name="send">Gửi đi</button>
			                             </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>