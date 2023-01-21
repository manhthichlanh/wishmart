
<div class="noidungchinh">
    
    <div class="sanphamct">
        <div class="sanphamct1">
            <form action="<?=$SITE_URL?>/gio-hang/index.php" method="post">

            <input type="hidden" name="id_sp" value="<?=$id_sp?>">
            <div class="anhspct">
                <a><img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" id="main-img"></a>
                <input type="hidden" name="hinh" value="<?=$hinh?>">
                <p class="anhspthunho-sp">
                  <?php
                    foreach ($product_detail_img_list as $list) {
                      echo '<img src="'.$CONTENT_URL.'/images/products/'.$hinh.'" id="anhtn">';
                    }
                  ?>
   
                </p>
            </div>
            <div class="thongtinspct">
                <h5><?=$ten_sp?></h5>
                <input type="hidden" name="ten_sp" value="<?=$ten_sp?>">
                <p>Tình trạng: <strong>
                  <?php
                    if ($so_luong>0) echo 'Còn trong kho';
                    else echo 'Sản phẩm đã hết hàng';
                  ?>
                  
                </strong></p>

                <h6><?=number_format($don_gia,0,".",",")?><sup>đ</sup></h6>
                <input type="hidden" name="don_gia" value="<?=$don_gia?>">
                <div class="buttons_added">
                    <input class="minus is-form" type="button" value="-">
                    <input aria-label="quantity" class="input-qty" max="<?=$so_luong?>" min="1" name="so_luong" type="number" value="1">
                    <input type="hidden" name="so_luong_max" value="<?=$so_luong?>" class="so_luong_max">
                    <input class="plus is-form" type="button" value="+">
                  </div>
                  <div class="them_mua">
                    <button class="themvaogh" name="add_to_cart" type="submit"> Thêm vào giỏ</button>
                    <button class="muangayct " name="add_to_cart" type="submit">Mua ngay</button>
                  </div>
            </div>
           
            <div class="motactsp">
                <div class="mota">
                    <h3>Mô tả</h3>
                </div>
                <div class="noidungspct">
                  <p><?=$mo_ta?></p>
                  
                <!-- <h2>Thiết kế đẹp đậm chất OPPO Reno Series</h2>
                <p>Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.</p>
                <div id="content" style="display: none;">Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.Có thể nói OPPO Reno5 là mẫu điện thoại phô diễn được đỉnh cao thiết kế và công nghệ chế tác của OPPO khi bề mặt lưng được phủ lớp Reno Glow với ngàn tinh thể phát sáng siêu nhỏ tạo nên hiệu ứng chuyển sắc vô cùng hút mắt.</div> -->
                
                </div>
                <div class="an-hien">
                    <input type="button" class="button" id="btn_add" value="Xem thêm"/>
                </div>
            </div>
          </form>
        </div>
        <div class="thongtinkhac">
            <div class="box1">
                <h2>SẢN PHẨM CÓ SẴN TẠI</h2>
                <div class="nuttron"></div><p>A12, Đinh Tiên Hoàng-Hoàn Kiếm-Hà Nội</p>
                <div class="nuttron"></div><p>A12, Đinh Tiên Hoàng-Hoàn Kiếm-Hà Nội</p>
            </div>
            <div class="box1">
                <h2>YÊN TÂM MUA HÀNG</h2>
                <div class="nuttron"></div><p>Uy tín 20 năm xây dựng và phát triển</p>
                <div class="nuttron"></div><p>Sản phẩm chính hãng 100%</p>
                <div class="nuttron"></div><p>Trả góp lãi suất 0% toàn bộ giỏ hàng</p>
                <div class="nuttron"></div><p>Trả bảo hành tận nơi sử dụng</p>
                <div class="nuttron"></div><p>Bảo hành tận nơi cho doanh nghiệp</p>
                <div class="nuttron"></div><p>Ưu đãi riêng cho học sinh sinh viên</p>
                <div class="nuttron"></div><p>Vệ sinh miễn phí trọn đời PC, Laptop</p>
            </div>
            <div class="box1">
                <h2>MIỄN PHÍ GIAO HÀNG</h2>
                <div class="nuttron"></div><p>Giao hàng siêu tốc trong 2h</p>
                <div class="nuttron"></div><p>Giao hàng miễn phí toàn quốc</p>
                <div class="nuttron"></div><p>Nhận hàng và thanh toán tại nhà (ship COD)</p>
            </div>
        </div>
    </div>
    
    <div class="noidung7">
  <div class="goiyhomnayhot">
  <div class="tieude">
    <h2>SẢN PHẨM MỚI</h2>
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
        <a href="'.$SITE_URL.'/gio-hang/index.php?add_to_cart&id_sp='.$id_sp.'&so_luong=1&hinh='.$hinh.'&don_gia='.$don_gia.'&ten_sp='.$ten_sp.'"><i class="fa-solid fa-cart-shopping"></i></a>
      </a>
    </div>';
      }
    ?>
    

  </div>
  </div>
</div>
</div>
</div>
</div>
<script src="<?=$CONTENT_URL?>/js/mutiple_carousel.js"></script>
<script>
  
  $(document).ready(function () {
    // alert("ready")
    // setTimeout(() => {
     
    // }, 500);
    


    
   
  });
  $(window).on('load', function(){ 
    let height = $(".noidungspct").height();
    
    $(".noidungspct").css({"max-height": "300px"});
    
    $(".noidungspct").addClass("slideup");

    $("#btn_add").click(function (e) { 
      e.preventDefault();
    
  
        if ($(".noidungspct").hasClass("slideup")) {
          $(".noidungspct").removeClass("slideup").addClass("slidedown").css({"max-height": height});
          $("#btn_add").val("Thu nhỏ")
        }
                
            else {
              $(".noidungspct").removeClass("slidedown").addClass("slideup").css({"max-height": "300px"});
              $("#btn_add").val("Xem thêm")
            }
                
        
        // else $(".noidungspct").slideDown("2").css({"max-height": "none"});


    });
});
</script>