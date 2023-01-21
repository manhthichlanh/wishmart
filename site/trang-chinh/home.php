
<div class="noidungchinh">
    <div class="noidung1">
      <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?=$CONTENT_URL?>/images/products/banner1.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?=$CONTENT_URL?>/images/products/banner2.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?=$CONTENT_URL?>/images/products/banner3.webp" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="bannerphu">
        <a href="#"><img src="<?=$CONTENT_URL?>/images/products/bannerphu1.webp"></a>
        <a href="#"><img src="<?=$CONTENT_URL?>/images/products/bannerphu2.webp"></a>
        <a href="#"><img src="<?=$CONTENT_URL?>/images/products/bannerphu3.webp"></a>
      </div>
      <div class="thongbaophu">
        <a href="#"><img src="https://vmartplus.w2.exdomain.net/image/cache/catalog/vmartplus/banner/wide_banner-1920x150.png"></a>
      </div>
    </div>
    <div class="noidung2">
      <div class="nav1">
        <i class="fas btn fa-chevron-left btnLeft"></i>
        <i class="fas btn fa-chevron-right btnRight"></i>
      </div>
      <div class="mathangchinh">
      <div class="mathang">
        
        <?php
          foreach ($danh_muc_show as $dm) {
            echo '<div class="mathang1" ">
              <a href="'.$SITE_URL.'/san-pham/index.php?id_dm='.$dm['id_dm'].'">
                <img src="'.$CONTENT_URL.'/images/products/'.$dm['hinh'].'">
                <p>'.$dm['ten_dm'].'</p>
              </a>
          </div>';
          
          }
        ?>
        
      </div>
    </div>
    </div >
    <div class="noidung3" >
      <div class="sanphamhot">
        <div class="tieude">
          <h2>SẢN PHẨM HOT</h2>
          <h6>Giảm lên đến 80%</h6>
        </div>
        <div class="anhloaisphot">
          <a href="#"><img src="<?=$CONTENT_URL?>/images/products/anhloaisphot.png"></a>
        </div>
        <div class="sanphamhotchinh1">
           <div class="nav2">
          <i class="fas btn fa-chevron-left btnLeft1"></i>
          <i class="fas btn fa-chevron-right btnRight1"></i>
        </div>
        <div class="sanphamhotchinh">
   
        <?php

          
          foreach ($hot_list as $list) {
            echo '<div class="sanphamhot1">
            <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$list['id_sp'].'">
              <img src="'.$CONTENT_URL.'/images/products/'.$list['hinh'].'" style="width: 200px">
              <p>'.substr($list['ten_sp'],0,40).(strlen($list['ten_sp'])>40? "...":"").'</p>
              <h6>'.number_format($list['don_gia'],0,".",",").' đ</h6>
              <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$list['id_sp'].'&so_luong=1&hinh='.$list['hinh'].'&don_gia='.$list['don_gia'].'&ten_sp='.$list['ten_sp'].'&so_luong_max='.$list['so_luong'].'"><i class="fa-solid fa-cart-shopping"></i></a>
            </a>
          </div>';

          }
        ?>
        
        </div>
        </div>
      </div>
    </div>
    <div class="noidung4">
      <div class="laptophot">
      <div class="tieude">
        <h2>LAPTOP</h2>
      </div>
      <div class="thanhngang"></div>
      <div class="bannerlaptop">
        <a href="#"><img src="<?=$CONTENT_URL?>/images/products/laptopbanner.png"></a>
      </div>
      <div class="laptoptrungbay1">
      <div class="laptoptrungbay">
        <?php

          foreach ($trung_bay_1 as $item) {
            extract($item);
            echo '<div class="laptoptb1">
            <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$id_sp.'"><img src="'.$CONTENT_URL.'/images/products/'.$hinh.'">
              <p>'.$ten_sp.'</p>
              <h6>'.number_format($don_gia).'</h6>
              <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$id_sp.'&so_luong=1&hinh='.$hinh.'&don_gia='.$don_gia.'&ten_sp='.$ten_sp.'&so_luong_max='.$so_luong.'"><i class="fa-solid fa-cart-shopping"></i></a>
            </a>
          </div>';
          }
        ?>
        
        
        
      </div>
      </div>
    </div>
  </div>

  <div class="noidung5">
    <div class="maytinhbanghot">
    <div class="tieude">
      <h2>MÁY TÍNH BẢNG</h2>
    </div>
    <div class="thanhngang"></div>
    <div class="bannermaytinhbang">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/maytinhbangbanner.png"></a>
    </div>
    <div class="maytinhbangtrungbay1">
    <div class="maytinhbangtrungbay">
    <?php
      foreach ($trung_bay_2 as $item) {
        extract($item);
        echo '<div class="maytinhbangtb1">
        <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$id_sp.'"><img src="'.$CONTENT_URL.'/images/products/'.$hinh.'">
          <p>'.$ten_sp.'</p>
          <h6>'.number_format($don_gia).'</h6>
          <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$id_sp.'&so_luong=1&hinh='.$hinh.'&don_gia='.$don_gia.'&ten_sp='.$ten_sp.'&so_luong_max='.$so_luong.'"><i class="fa-solid fa-cart-shopping"></i></a>
        </a>
      </div>';
      }
      ?>
      
    </div>
    </div>
  </div>
</div>

<div class="noidung6">
  <div class="tbamthanhhot">
  <div class="tieude">
    <h2>THIẾT BỊ ÂM THANH</h2>
  </div>
  <div class="thanhngang"></div>
  <div class="bannertbamthanh">
    <a href="#"><img src="<?=$CONTENT_URL?>/images/products/tbamthanhbanner.png"></a>
  </div>
  <div class="tbamthanhtrungbay1">
  <div class="tbamthanhtrungbay">
    <?php
      foreach ($trung_bay_3 as $item) {
        extract($item);
        echo '<div class="tbamthanhtb1">
        <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$id_sp.'"><img src="'.$CONTENT_URL.'/images/products/'.$hinh.'">
          <p>'.$ten_sp.'</p>
          <h6>'.number_format($don_gia).'</h6>
          <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$id_sp.'&so_luong=1&hinh='.$hinh.'&don_gia='.$don_gia.'&so_luong_max='.$so_luong.'"><i class="fa-solid fa-cart-shopping"></i></a>
        </a>
      </div>';
      }
    ?>
    
  </div>
  </div>
</div>
</div>

<div class="noidung7">
  <div class="goiyhomnayhot">
  <div class="tieude">
    <h2>Sản phẩm mới nhất</h2>
    <div class="nav3">
      <i class="fas btn fa-chevron-left btnLeft2"></i>
      <i class="fas btn fa-chevron-right btnRight2"></i>
    </div>
  </div>
  
  <div class="thanhovuong">
  <!-- <div class="bannergoiyhomnay">
    <a href="#"><img src="<?=$CONTENT_URL?>/images/products/tbamthanhbanner.png"></a>
  </div> -->
  <div class="goiyhomnaytrungbay1">
  <div class="goiyhomnaytrungbay">
  <?php
      foreach ($trung_bay_4 as $item) {
        extract($item);
      //   echo '<div class="tbamthanhtb1">
      //   <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$id_sp.'"><img src="'.$CONTENT_URL.'/images/products/'.$hinh.'">
      //     <p>'.$ten_sp.'</p>
      //     <h6>'.number_format($don_gia).'</h6>
      //     <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$id_sp.'&so_luong=1&hinh='.$hinh.'&don_gia='.$don_gia.'&ten_sp='.$ten_sp.'"><i class="fa-solid fa-cart-shopping"></i></a>
      //   </a>
      // </div>';
      echo '<div class="goiyhomnaytb1">
      <a href='.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$id_sp.'"><img src="'.$CONTENT_URL.'/images/products/'.$hinh.'">
        <p>'.$ten_sp.'</p>
        <h6>'.number_format($don_gia).'</h6>
        <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$id_sp.'&so_luong=1&hinh='.$hinh.'&don_gia='.$don_gia.'&ten_sp='.$ten_sp.'&so_luong_max='.$so_luong.'"><i class="fa-solid fa-cart-shopping"></i></a>
      </a>
    </div>';
      }
    ?>
    <!-- <div class="goiyhomnaytb1">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/chuot1.png">
        <p>Tai nghe không dây Huawei Freebuds Pro</p>
        <h6>2,880,000</h6>
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div>
    <div class="goiyhomnaytb1">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/chuot2.jpg">
        <p>Tai nghe không dây chống ồn Sony WF-1000XM3</p>
        <h6>4,650,000</h6>
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div>
    <div class="goiyhomnaytb1">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/chuot3.png">
        <p>Tai nghe Bluetooth Samsung Galaxy Buds Live</p>
        <h6>5,220,000</h6>
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div>
    <div class="goiyhomnaytb1">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/sanphamhot1.png">
        <p>Tai nghe Bluetooth Samsung Galaxy Buds Live</p>
        <h6>5,220,000</h6>
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div>
    <div class="goiyhomnaytb1">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/tbamthanh2.png">
        <p>Tai nghe Bluetooth Samsung Galaxy Buds Live</p>
        <h6>5,220,000</h6>
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div>

    <div class="goiyhomnaytb1">
      <a href="#"><img src="<?=$CONTENT_URL?>/images/products/laptop4.jpg">
        <p>Tai nghe Bluetooth Samsung Galaxy Buds Live</p>
        <h6>5,220,000</h6>
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    </div> -->

  </div>
  </div>
</div>
</div>
</div>
  </div>
  
  
  <script>
    //   =============Thông báo trang chủ==============
window.onload = () => {
  thongbaopopup();
}
function thongbaopopup(){
    document.getElementById("tbpopup-1").classList.toggle("active");
    }
    </script>
<!-- Thong bao pupup -->
  
    <div class="tbpopup" id="tbpopup-1">
        <div class="tboverlay"></div>
        <div class="tbcontent">
            <div class="tbclose-btn" onclick="thongbaopopup()">&times;</div>
            <!-- <div style="font-size:30px;font-weight:bold">Xin chào</div> -->
            <!-- <p>Cảm ơn bạn đã ghé thăm trang web của mình, chúc bạn một ngày mới vui vẽ và tràn đầy hạnh phúc!</p> -->
            <a href="<?=$SITE_URL?>/san-pham/index.php?id_dm=20"><img src="<?=$CONTENT_URL?>/images/products/thongbaotrangweb1.png"></a>
        </div>
    </div>
    <script src="<?=$CONTENT_URL?>/js/mutiple_carousel.js"></script>
  