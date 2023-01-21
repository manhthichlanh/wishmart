<?php
    require_once "../global.php";
    require_once "../dao/san-pham.php";
    extract($_REQUEST);
    sleep(1);
    $items = bo_loc_san_pham($id_dm,$sort,$min,$max,$bo_nho,$mau_sac,$page);
    $tong_so_san_pham = count(bo_loc_san_pham($id_dm,$sort,$min,$max,$bo_nho,$mau_sac,"all"));

    // $tong_so_san_pham = 9;
    
    xuat($items);
    
    function xuat($items) {
        global $SITE_URL,$CONTENT_URL,$tong_so_san_pham,$page;
        if (count($items)==0||empty($items)) {
            echo '
            <input type="hidden" id="flag" value="xsts">
            <div class="cps-block-content_btn-showmore">
                <div class="nothing-show-more" style="padding: 50px; text-align: center;">

                    <p style="font-weight: 600;font-size: 16px;">Không có sản phẩm phù hợp với tiêu chí bạn tìm</p>
                </div>
            </div>';
            return 0;
        } 
        if ($tong_so_san_pham <= 8 || $page*8>=$tong_so_san_pham) {
            echo '<input type="hidden" id="flag" value="xsts">';
            
        }
        foreach ($items as $list) {
            echo '<div class="sanpham_sp1_1 " ">
            <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$list['id_sp'].'"><img src="'.$CONTENT_URL.'/images/products/'.$list['hinh'].'" loading="lazy">
            <p style="min-height:48px">'.$list['ten_sp'].'</p>
            <h5>'.number_format($list['don_gia']).'<sup>đ</sup></h5>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </a>
        </div>';
        }
    }
   
?>
