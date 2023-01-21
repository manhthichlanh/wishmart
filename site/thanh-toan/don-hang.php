 
<div class="layout-login-v2">
            <section class="breadcrumb-shop">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 ">

                            <nav>
                                <ol class="breadcrumb ">
                                    <li class="breadcrumb-item"> <span><i class="fa fa-home"></i> <a href="" class="breakcum">Trang chủ</a> </li>
                                    <span class="direct"><i class="fa fa-angle-right"></i> </span>
                                    <!-- <li class="breadcrumb-item"><a href="" class="breakcum">Tài Khoản</a> </li>
                                            <span class="direct"><i class="fa fa-angle-right"></i> </span> -->
                                    <li class="breadcrumb-item"><a href="" class="breakcum">Giỏ hàng</a> </li>

                                </ol>
                            </nav>
                        </div>

                    </div>

                </div>
            </section>
            <div class="clearfix"></div>
            <div id="wp-content">
                <div class="container">
                    <form action="<?=$SITE_URL?>/thanh-toan/index.php" method="post" id="form_valid">
                    <div class="row  ">

                        <div class="col-md-7 col-lg-7  ">
                            <h1 class="title_adress">Địa chỉ nhận hàng</h1>
                            <!--<p class="y_acount">Bạn đã có tài khoản? <span class="y_login">Đăng nhập</span> </p>-->
                            
                                <div class=" form-row row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="ten_kh" name="ten_nguoi_nhan" placeholder="Ví dụ:Nguyễn Văn A">
                                            <span class="form-message"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">

                                            <input type="email" class="form-control" id="email" name="email" placeholder="contact@yourdomian.com">
                                            <span class="form-message"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Ví dụ: Số điện thoại">
                                            <span class="form-message"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="dia_chi" name="dia_chi" placeholder="Ví dụ: 350/37/20 Nguyễn văn lượng">
                                            <span class="form-message"></span>
                                        </div>
                                    </div>
                                    
                                   
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <select  name="pttt">
                                                <option value="Thanh toán khi nhận hàng (COD)">Thanh toán khi nhận hàng (COD)</option>
                                                <option value="Thanh toán online">Thanh toán online</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <textarea class="form-control" name="ghi_chu" id="detail" cols="30" rows="3" placeholder="Ví du: Chuyển hàng ngoài giờ hành chính"></textarea>
                                            <span class="form-message"></span>
                                        </div>
                                    </div>
                                    <!--<div class="accordion col-md-12 col-lg-12" id="accordion-faq">-->
                                    <!--    <div class="card">-->
                                    <!--        <div class="card-header">-->
                                    <!--            <a  class="card-link" data-toggle="collapse" data-target="#collapse-1">Yêu cầu xuất hóa đơn </a>-->
                                    <!--        </div>-->
                                    <!--        <div class="collapse show" id="collapse-1" data-parent="#accordion-faq">-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <div class="form-group">-->

                                    <!--                    <input type="text" class="form-control" id="address" name="ma_thue" placeholder="Mã số thuế">-->

                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <div class="form-group">-->

                                                        

                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <div class="form-group">-->

                                    <!--                    <input type="text" class="form-control" id="address" name="ten_ct" placeholder="Tên công ty">-->

                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-12">-->
                                    <!--                <div class="form-group">-->

                                    <!--                    <input type="text" class="form-control" id="address" name="dia_chi_ct" placeholder="Địa chỉ công ty">-->

                                    <!--                </div>-->


                                    <!--            </div>-->
                                    <!--            <i class="mb-3">Lưu ý: Giá trị không bao gồm giá trị của mã giảm giá</i>-->
                                    <!--        </div>-->
                                    <!--    <script>-->
                                    <!--        var fl=true;-->
                                    <!--        $(".show").hide()-->
                                    <!--        $(".card-link").on("click", function () {-->
                                                
                                    <!--            if (fl==false) {-->
                                    <!--                $(".show").hide(500)-->
                                    <!--                fl=!fl;-->
                                    <!--            }-->
                                    <!--            else {-->
                                    <!--                $(".show").show(500)-->
                                    <!--                fl=!fl;-->
                                    <!--            }-->
                                    <!--        });-->
                                    <!--    </script>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                             
                        </div>

                    </div>
                    <div class="col-md-5 col-lg-5  float-md-right">
                        <div class="sidebar">
                            <div class="sidebar-content">
                                <div class="order-summary order-summary-is-collapsed">
                                    <h2 class="visually-hidden">Thông tin đơn hàng</h2>
                                    <div class="order-summary-sections">
                                        <div class="order-summary-section order-summary-section-product-list" data-order-summary-section="line-items">
                                            <table class="product-table">

                                            <tbody>
                                                    <?php   
                                                        $thanh_tien = 0;
                                                        $tong_so_luong = 0;
                                                 
                                                        foreach ($items as $item) {
                                                            extract($item);
                                                       
                                                            echo '
                                                            <tr class="product" data-variant-id="916">
                                                                <td class="product-image">
                                                                    <div class="product-thumbnail">
                                                                        <div class="product-thumbnail-wrapper">
                                                                            <img class="product-thumbnail-image" alt="" src="'.$CONTENT_URL.'/images/products/'.$item[2].'">
                                                                            <span class="product_thumbnail_1" aria-hidden="true">'.$item[1].'</span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td class="product-description">
                                                                    <span class="product-description-name order-summary-emphasis">'.$item[4].'</span>
                                                                    <span class="product-description-option">
                                                                    </span>
                                                                </td>
        
                                                                
                                                                <td class="product-price">
                                                                    <span class="order-summary-emphasis">'.number_format($item[3],0,".",",").' đ</span>
                                                                </td>
                                                            </tr>
                                                        ';
                                                            $tong_so_luong+=$item[1];
                                                            $thanh_tien+=($item[3]*$item[1]);
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="order-summary-section order-summary-section-total-lines payment-lines" data-order-summary-section="payment-lines">
                                            <div class="panel panel-default" id="ajax-load-total">
                                                <table class="table">
                                                    <tbody>
                                                        <tr class="total-line clearfix">
                                                            <td class="total-line-name">Tổng số lượng</td>
                                                            <td class="total-line-price"> <span class="order-summary-emphasis"><?=$tong_so_luong?></span></td>
                                                        </tr>
                                                        <tr class="total-line clearfix total-line-table-footer">
                                                            <td class="total-line-name payment-due-label">Thành tiền </td>
                                                            <td class="total-line-name payment-due"><span class="payment-due-price"><?=number_format($thanh_tien)?> đ</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
<div class="col-md-12">
                                        <div class="cart_footer">
                                            
                                            <button type="submit" class="float-right btn btn-dark" name="thanh_toan_don_hang">Thanh toán</button>
                                      <!-- <input type="submit" value="submit"> -->
                                        </div>

                                    </div>
                </div>
                </form>
                
            </div>
        </div>