<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W Mart</title>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/style_client.css">
    <link href="<?=$CONTENT_URL?>/css/bootstrap.client.min.css" rel="stylesheet" >
    <link rel="shortcut icon" type="image/x-icon" href="<?=$CONTENT_URL?>/images/products/iconlogo.png">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/fontawesome/css/all.min.css">
    <script src="<?=$CONTENT_URL?>/js/jquery-3.6.1.min.js"></script>
    <script src="<?=$CONTENT_URL?>/js/jquery.validate.min.js"></script>
    <script src="<?=$CONTENT_URL?>/js/bootstrap.bundle.min.js"></script>
   
</head>
<body>
  <?php
    if (strpos($_SERVER['REQUEST_URI'],"/san-pham")==false) unset($_SESSION['id_dm']);
  ?>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="zSK7fVRm"></script>
  <div class="trang_chinh">
  <div class="header_chinh">
    
  <div class="header1">
    <div class="header2">

    <div class="logo">
      <a href="<?=$SITE_URL?>/trang-chinh">
        <img src="<?=$CONTENT_URL?>/images/products/logo.png" width="150px">
      </a>
    </div>
    <div class="timkiem">
      <form class="search-bar">
        <input type="search" name="search" placeholder="Tìm kiếm..." pattern=".*\S.*" required id="timkiem">
        <button class="search-btn" type="submit">
          <span><i class="fa-solid fa-magnifying-glass"></i></span>
        </button>
        <div class="bangtimkiem">
          <?php

          ?>
          
           </div>
      </form>
    </div>
    <div class="hotline">
      <div class="iconphone">
        <i class="fa-solid fa-phone"></i>
      </div>
      
      <div class="hotline1">
        <p>Hotline</p>
        <a href="tel:09068888888"><h6>09068888888</h6></a>
      </div>
    </div>
    <div class="hethongcuahang">
      <a href="<?=$SITE_URL?>/lien-he"><i class="fa-solid fa-shop"></i><p>Hệ thống cửa hàng</p></a>
      
    </div>
    <div class="taikhoan">
        <?php
          if (isset($_SESSION['client_user'])) {
        ?>
        <ul class="sub_logout">
                <li><a href="">Chào bạn <span class="icon_log"><i class="fa-solid fa-handshake-angle"></i></span> </a></li>
                <li><a href="<?=$SITE_URL?>/nguoi-dung/index.php?act=user_profile">Profile <span class="icon_log"><i class="fa-regular fa-user"></i></span></a></li>
                <li><a href="<?=$SITE_URL?>/lich-su-don-hang">Đơn hàng của tôi <span class="icon_log"><i class="fa-solid fa-cart-shopping"></i></span></a></li>
                <li><a href="<?=$SITE_URL?>/nguoi-dung/index.php?act=user_logout">Đăng xuất <span class="icon_log"><i class="fa-solid fa-share"></i></span></a></li>

              </ul>
      <?php 
        }
      ?>
      <div class="icontaikhoan">
        <i class="fa-solid fa-user"></i>
      </div>
      <div class="taikhoan1">
        <p>Tài khoản</p>
        <?php
          if (isset($_SESSION['client_user'])) 
          {
            
            $client_cart = gio_hang_select_by_id_kh($_SESSION['client_user']['id_kh']);
                
            echo' <h6>'.$_SESSION['client_user']['ten_kh'].'<h6>';

          }
          else {
            echo '<a href="'.$SITE_URL.'/dang-nhap"><h6>Đăng nhập</h6></a>';

            if (!isset($_SESSION['cart'])) $_SESSION['cart']=array();
              
            $client_cart = $_SESSION['cart'];
          }
          
        ?>
        
        
      </div>
      
      
    </div>
    <div class="tienich">
        <div class="dropdown">
          <button class="dropbtn"><a href="<?=$SITE_URL?>/gio-hang/"><i class="fa-solid fa-bag-shopping"></i></a>
            <p>
              <?php                 
                
                echo count($client_cart);

              ?>
            </p>
          </button>
          <div class="dropdown-content">
            <div class="giohang_sp">          
              <?php              
                $index = 0;
                $thanh_tien = 0;
                foreach ($client_cart as $item) {
                  echo '
                  <div class="sp_gh">
                  <a href="'.$SITE_URL.'/chi-tiet-san-pham/index.php?product_detail&id_sp='.$item[0].'">
                  <img src="'.$CONTENT_URL.'/images/products/'.$item[2].'">
                  <div class="tensp_gh">
                  
                  <h6>'.$item[4].'</h6>
                  <p>Số lượng: '.$item[1].'</p>
                  <div class="giatien_gh">'.number_format($item[3]).' đ</div>
                  <div class="xoa_gh" value="'.(isset($_SESSION['client_user'])?$item[8]:$index).'">Xóa</div>
                </div>
                </a>
                </div>';
                $index++;
                $thanh_tien+=$item[1]*$item[3];
                }
                if (count($client_cart) == 0) {
                  echo '<div class="giohang_sp_trong">
                  <i class="fa-solid fa-cart-plus"></i>
                  <p>Giỏ hàng bạn trống!</p>
                </div>';
               
              
                
                 
              ?>
              <?php }else {?>
              <!-- <div class="tensp_gh">
                <h6>Apple iPad Air 10.9 2020 Wi-Fi 64GB Chính Hãng Apple Việt Nam</h6>
                <p>Số lượng: 1</p>
                <div class="giatien_gh">20,000,000</div>
                <div class="xoa_gh">Xóa</div>
              </div> -->
            
          
          <div class="thanhtien">
            <h5>Thành tiền:</h5>
            <?php
              echo '<p>'.number_format($thanh_tien).' đ</p>';
              // if (count($_SESSION['cart']) > 0 ) echo '<p>'.$_SESSION['cart'][1]*.'</p>';
            ?>
            
          </div>
          <div class="thanhtoan">
            <a href="<?=$SITE_URL?>/thanh-toan">Thanh Toán</a>
          </div>
          <?php }?>
          </div>
          
          </div>
        </div>
        
     
    </div>
    </div>
  </div>
    <div class="header">
      
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#"><img src="https://www.thoitranghuongshop.com/wp-content/uploads/2021/03/logo-huong-shop-800x300.png" width="80px"></a> -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?=$SITE_URL?>/trang-chinh">Trang chủ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?=$SITE_URL?>/gioi-thieu">Giới thiệu</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sản phẩm
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="<?=$SITE_URL?>/san-pham/index.php?id_dm=20">Điện thoại</a></li>
                      <li><a class="dropdown-item" href="<?=$SITE_URL?>/san-pham/index.php?id_dm=6">Laptop</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="<?=$SITE_URL?>/san-pham/index.php?id_dm=12">Tai nghe</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?=$SITE_URL?>/lien-he">Liên hệ</a>
                  </li>
                </ul>
                <div class="d-flex">
                  
                </div>
              </div>
            </div>
          </nav>
    </div>
  </div>

    <?php
        require_once $VIEW_NAME;
    ?>

  <footer>
    <div class="footer">
      <div class="footer1">
      <div class="thongtin1 col-md-4">
        <h2>THIÊN ĐƯỜNG MUA SẮM WishMart</h2>
        <p>Công ty cổ phần thương mại WishMart</p>
        <p>Địa chỉ: Quận 12 - Thành phố Hồ Chí Minh</p>
      <p>Điện thoại: <a href="tel:+84123456789">0834444916</a></p>
      <p>Email: <a href="mailto:manhnguyenf.a123@gmail.com">manhnguyenf.a123@gmail.com</a></p>
      </div>
      <div class="thongtin1 col-md-4">
        <h2>WishMart</h2>
        <p><a href="<?=$SITE_URL?>/lien-he"><i class="fa-solid fa-map-location-dot"></i>Xem bản đồ đường đi</a></p>
        <p><i class="fa-solid fa-phone"></i>Điện thoại: <a href="tel:+84834444916">0834444916</a></p>
        <p><i class="fa-solid fa-location-dot"></i>Địa chỉ: Quận 12 - Thành phố Hồ Chí Minh</p>
        <p><i class="fa-solid fa-envelope"></i>Email: <a href="mailto:manhnguyenf.a123@gmail.com">manhnguyenf.a123@gmail.com</a></p>
        <p><i class="fa-solid fa-clock"></i>Giờ mở cửa: Các ngày trong tuần: 8:00 - 23:00</p>
      </div>
      <div class="thongtin1 col-md-4">
        <h2>CỬA HÀNG</h2>
        <p><a href="<?=$SITE_URL?>/lien-he"><i class="fa-solid fa-map-location-dot"></i>Xem bản đồ đường đi</a></p>
        <p><i class="fa-solid fa-phone"></i>Điện thoại: <a href="tel:+84834444916">0834444916</a></p>
        <p><i class="fa-solid fa-location-dot"></i>Địa chỉ: Quận 12 - Thành phố Hồ Chí Minh</p>
        <p><i class="fa-solid fa-envelope"></i>Email: <a href="mailto:manhnguyenf.a123@gmail.com">manhnguyenf.a123@gmail.com</a></p>
        <p><i class="fa-solid fa-clock"></i>Giờ mở cửa: Các ngày trong tuần: 8:00 - 23:00</p>
      </div>
    </div>

    <div class="footer1">
      <div class="thongtin1 col-md-4">
        <h2>THÔNG TIN</h2>
        <p><a href="#">Về chúng tôi</a></p>
        <p><a href="#">Điều khoản & Điều kiện</a></p>
        <p><a href="#">Chính sách bảo mật</a></p>
        <p><a href="#">Chính sách thanh toán</a></p>
        <p><a href="#">Chính sách giao hàng</a></p>
      </div>
      <div class="thongtin1 col-md-4">
        <h2>TỔNG ĐÀI HỖ TRỢ</h2>
        <p><a href="tel:+84123456789">Gọi mua: 0834444916 (7:30 - 22:00)</a></p>
        <p><a href="tel:+84123456789">Kỹ thuật: 0834444916 (7:30 - 22:00)</a></p>
        <p><a href="tel:+84123456789">Khiếu nại: 0834444916 (8:00 - 21:30)</a></p>
        <p><a href="tel:+84123456789">Bảo hành: 0834444916 (8:00 - 21:00)</a></p>
        <div class="mangxahoi">
          <div class="mangxahoi1">
            <div class="facebook">
        <p><a href="#"><i class="fa-brands fa-facebook-f"></i></a></p>
            </div>
            <div class="twitter">
        <p><a href="#"><i class="fa-brands fa-twitter"></i></a></p>
            </div>
            <div class="youtube">
        <p><a href="#"><i class="fa-brands fa-youtube"></i></a></p>
            </div>
            <div class="instagram">
        <p><a href="#"><i class="fa-brands fa-instagram"></i></a></p>
            </div>
        </div>
        </div>
      </div>
      <div class="thongtin1 col-md-4">
        <h2>FACEBOOK</h2>
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
      </div>
    </div>
    <div class="chungchicongty">
      <p>© 2018. Công ty cổ phần WishMart. Địa chỉ: Quận 12 - Thành phố Hồ Chí Minh. Điện thoại: 0834444916. Email: manhnguyenf.a123@gmail.com. Chịu trách nhiệm nội dung: Nguyễn Văn Mạnh</p>
    </div>
    <div class="nguoitao">
      <p>© Copyright 2022 WishMart. Thiết kế bởi <a href="#">Team Chiến Hạm</a></p>
    </div>
    </div>
  </footer>
  </div>
    <script src="<?=$CONTENT_URL?>/js/main.js"></script>
    <script src="<?=$CONTENT_URL?>/js/validator.js"></script>
    <script src="<?=$CONTENT_URL?>/js/ajax.js"></script>
    
    
    
    
    
    
    
    
    
    <!-- Messenger Plugin chat Code -->
    <!-- <div id="fb-root"></div> -->

    <!-- Your Plugin chat code -->
    <!-- <div id="fb-customer-chat" class="fb-customerchat">
    </div> -->

    <!-- <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "103052549329481");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script> -->

    <!-- Your SDK code -->
    <!-- <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_V N/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> -->
    
    
    
    
    
    
    
    
    
    
    
    <!--==========Về đầu trang===========-->
    <script>
// kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
var offset = 500;
// thời gian di trượt 0.75s ( 1000 = 1s )
var duration = 750;
$(function(){
$(window).scroll(function () {
if ($(this).scrollTop() > offset)
$('#top-up').fadeIn(duration);else
$('#top-up').fadeOut(duration);
});
$('#top-up').click(function () {
$('body,html').animate({scrollTop: 0}, duration);
});
});
</script>
    <div title="Về đầu trang" id="top-up">
<i class="fa-solid fa-arrow-up"></i></div>

 
</body>
</html>