
    <style>
        .trang_chinh {
            background-color: white;
        }
    </style>

        
  
    <div class="breadcrumb-shop">
    </div>


    
    <div class="logothanhtoantc">
        <a href="#"><img src="<?=$CONTENT_URL?>/images/products/logo.png"></a>
    </div>
    <div class="dathangtc">
        <div class="thongtinkh_dh">
            <div class="icon_check">
                <i class="fa fa-check"></i>
            </div>
        <div class="thongbao_dh_tc">
        <h5>Cảm ơn bạn đã đặt hàng!</h5>
        <p>Một email xác nhận đã được gửi tới <?=$list[0]['email']?>. Xin vui lòng kiểm tra email của bạn.</p>
        </div>
    <div class="thongtinkh_dh1">
        <div class="thongtinkh_dh2">
        <div class="thongtin_kh_mh">
            <h2>Thông tin mua hàng</h2>
            <p><i>Tên: </i><?=$list[0]['ten_nguoi_nhan']?></p>
            <p><i>Email: </i><?=$list[0]['email']?></p>
            <p><i>Số điện thoại: </i><?=$list[0]['sdt']?></p>
        </div>
        <div class="diachi_nhanhang">
            <h2>Địa chỉ nhận hàng</h2>
            <p><?=$list[0]['dia_chi']?></p>
        </div>
    </div>
    <div class="thongtinkh_dh3">
        <div class="phuongthuc_tt">
            <h2>Phương thức thanh toán</h2>
            <p><?=$list[0]['phuong_thuc_thanh_toan']?></p>
        </div>
        <div class="phuongthuc_vchuyen">
            <h2>Phương thức vận chuyển</h2>
            <p>Vận chuyển nhanh</p>
        </div>
    </div>
    </div>
        </div>


    <div class="thongtinsp_dh">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Mã đơn hàng #<?=$list[0]['id_dh']?>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                <div class="accordion-body">

                    <div class="sp_thanhtoan_tc">
                  <div class="sp_thanhtoan_tc1">
                    <?php
                        $tong=0;
                        foreach ($list as $l) {
                            extract($l);
                            echo '<div class="sp_thanhtoan_tc1_1">
                            <img src="'.$CONTENT_URL.'/images/products/'.$hinh.'" width="50px">
                            <p>'.$ten_sp.'</p>
                            <div class="soluongsp_tt">
                                <span>'.$so_luong.'</span>
                            </div>
                          </div>
                          <div class="gia_thanhtoan_tc">
                            <p>'.number_format($so_luong*$don_gia).'<sup>đ</sup></p>
                          </div>';
                          $tong+=$so_luong*$don_gia;
                        }
                    ?>
                    

                </div>
                <div class="sp_thanhtoan_tc2">
                    <div class="tamtinh_tt">
                        <p class="tam_tinh">Tạm tính:</p>
                        <p class="gia_tam_tinh"><?=number_format($tong)?><sup>đ</sup></p>
                    </div>
                    <div class="phi_van_chuyen">
                        <p class="phivanchuyen">Phí vận chuyển:</p>
                        <p class="phivanchuyen_gia">48,000<sup>đ</sup></p>
                    </div>
                </div>
                <div class="sp_thanhtoan_tc3">
                    <div class="tongcong_thanhtoan">
                        <p class="tongcong_thanhtoan_1">Tổng cộng:</p>
                        <p class="tongcong_thanhtoan_2"><?=number_format($tong+48000)?><sup>đ</sup></p>
                    </div>
                </div>
                </div>

              </div>

              </div>
            </div>
    </div>
    <div class="trangthai_donhang">
        <div class="trangthai_donhang_1">
        <h5>Trạng thái đơn hàng</h5>
        <div class="trangthai_donhang_2">
        <div class="thoigian_dathang">
            <p class="thoigian_dathang_1"><?=$list[0]['ngay_xuat']?></p>
            <!-- <p class="thoigian_dathang_2">09:31:32 PM</p> -->
        </div>
        <div class="kq_gh_dh">
            <p><?=$list[0]['trang_thai']?></p>
        </div>
        </div>
        </div>
    </div>
    </div>
    <div class="hotro_dh">
        <i class="fa fa-comments"></i>
        <p>Cần hỗ trợ? <a href="#">Liên hệ chúng tôi</a></p>
    </div>
    <div class="tieptuc_mh">
        <a href="<?=$SITE_URL?>/trang-chinh"><p>Tiếp tục mua hàng</p></a>
    </div>
    </div>
    
    
