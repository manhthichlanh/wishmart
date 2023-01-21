
<div class="layout-login-v2">
            <form action="<?=$SITE_URL?>/thanh-toan/index.php" method="post">
                <section class="breadcrumb-shop">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 ">

                                <nav>
                                    <ol class="breadcrumb ">
                                        <li class="breadcrumb-item"> <span><i class="fa fa-home"></i> <a href=""
                                                class="breakcum">Trang chủ</a> </li>
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
                        <div class="row  ">
                            <div class="col-md-12 col-lg-12 ">
                                <div class="heading-page">
                                    <div class="header-page text-center">
                                        <h1 class=" title_cart">Giỏ hàng của bạn</h1>
                                        <p class="count-cart">Có <span> <?=count($client_cart)?> sản phẩm </span> trong giỏ hàng</p>
                                        <p class="black-bar"></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-8  ">
                            <?php   
                                        $index = 0;
                                        // var_dump($client_cart);
                                        foreach ($client_cart as $item) {
                               
                                            extract($item);
                                            
                                            echo '<div class="cart-content">

                                            <div class="row no-gutters">
                                                <input type="hidden" name="id_sp[]" value="'.$item[0].'">
                                                <div class="col-md-2 col-lg-2 text-center">
                                                    <img src="'.$CONTENT_URL.'/images/products/'.$item[2].'" alt="" class="img-fluid">
                                                    <input type="hidden" name="hinh[]" value="'.$item[2].'">
                                                </div>
                                                <div class="col-md-10 col-lg-10">
        
                                                    <h3 class="content_phone"> '.$item[4].'
                                                    <input type="hidden" name="ten_sp[]" value="'.$item[4].'">
                                                        <span class="bar_x"><a href=""><i class="fa-solid fa-x xoa_gh" value="'.(isset($_SESSION['client_user'])?$item[8]:$index).'"></i></span></a></h3>
        
                                                    <p class="variant">
                                                    </p>
                                                    <p class="_variant">
                                                    </p>
                                                    <p>
                                                        <span class="pri line-item-price">'.number_format($item[3],0,".",",").'đ</span>
                                                        <input type="hidden" name="don_gia[]" value="'.$item[3].'" id="item-price" >
                                                    </p>
        
                                                    <div class="qty quantity-partent qty-click clearfix">
                                                        <button type="button" class="qtyminus qty-btn">-</button>
                                                        <input type="text" name="so_luong[]" value="'.$item[1].'" size="1" class="tc line-item-qty item-quantity" min="1" max="'.$item[5].'" readonly>
                                                        <button type="button" class="qtyplus qty-btn">+</button>
                                                    </div>
                                                    <p class="price">
                                                         <span class="text">Thành tiền:</span> 
                                                        <span class="line-item-total">'.number_format($item[3]*$item[1],0,".",",").'đ</span>
                                                        <input type="hidden" name="thanh_tien[]" id="item-total" value="'.$item[3]*$item[1].'">
                                                    </p>
        
                                                </div>
        
        
                                            </div>
                                        </div>';
                                        $index++;
                                        }
                                    ?>
                               
                            </div>
                            <?php if (count($client_cart)>0) :?>
                            <div class="col-md-4 col-lg-4  ">
                                <div class="cart-sidebar">
                                    <div class="cart-sidebar-inner">

                                        <div class="sidebox-order_title">
                                            <h3>Thông tin đơn hàng</h3>
                                        </div>
                                        <div class="sidebox-order_total">
                                            <p>Tổng tiền:
                                                <span class="total-price">0đ</span>
                                            </p>
                                        </div>
                                        <div class="sidebox-order_text">
                                            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.<br>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>
                                        </div>
                                        <div class="sidebox-order_action">
                                            <button class="btn btn-danger price_bill btn-block" type="submit" name="thanh_toan">THANH TOÁN</button>
                                            <p class="link-continue text-center">
                                                <a class="price_contine" href="<?=$SITE_URL?>/trang-chinh">
                                                    <i class="fa fa-reply"></i> Tiếp tục mua hàng </a>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <?php endif?>
                        </div>


                    </div>
                </div>

                </form>
            </div>
            <script>
            $(document).ready(function () {
                var tong_thanh_tien = 0;
                // thay đổi
                change();
                $(".qty").on("change",".item-quantity",function () {
                    let don_gia = $(this).parent().parent().find("#item-price").val();

                    let so_luong = $(this).val();
                    // console.log(so_luong);


                    let thanh_tien =   $(this).parent().parent().find(".line-item-total");

                    $(this).parent().parent().find("#item-total").val(so_luong*don_gia);

                    // $(this).parent().parent().find(".item-total").val();

                    thanh_tien.text(number_format(so_luong*don_gia),0,".",",");

                    change();
                });
                //click
                $(".qtyminus").on("click",function () {
                    let so_luong = $(this).parent().find(".item-quantity").val();
                    if (so_luong>1) so_luong --;
                    else alert("Số lượng phải lớn hơn 0");
                    $(this).parent().find(".item-quantity").val(so_luong);

                    let don_gia = $(this).parent().parent().find("#item-price").val();

                    let thanh_tien =   $(this).parent().parent().find(".line-item-total");

                    $(this).parent().parent().find("#item-total").val(so_luong*don_gia);

                    thanh_tien.text(number_format(so_luong*don_gia),0,".",",");

                    change();
                });

                $(".qtyplus").on("click",function () {
                    let so_luong = $(this).parent().find(".item-quantity").val();
                    let so_luong_max = $(this).parent().find(".item-quantity").attr("max");
                    if(so_luong_max==so_luong) alert("Số lượng sản phẩm có hạn");
                    else so_luong ++;
                    $(this).parent().find(".item-quantity").val(so_luong);

                    let don_gia = $(this).parent().parent().find("#item-price").val();

                    let thanh_tien =   $(this).parent().parent().find(".line-item-total");

                    $(this).parent().parent().find("#item-total").val(so_luong*don_gia);
                    
                    thanh_tien.text(number_format(so_luong*don_gia),0,".",",");
                    
                    change();
                });
                
                function change() {
                    tong_thanh_tien = 0;
                    $(".cart-content").each( function (indexInArray, valueOfElement) { 
                        let thanh_tien_input = $(this).find("#item-total").val();
                        tong_thanh_tien +=Number(thanh_tien_input);
                        $(".total-price").text(number_format(tong_thanh_tien,0,".",",")+"đ" );
                    })
                }
                
               

                function number_format (number, decimals, dec_point, thousands_sep) {
                    // Strip all characters but numerical ones.
                    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
                    var n = !isFinite(+number) ? 0 : +number,
                        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                        s = '',
                        toFixedFix = function (n, prec) {
                            var k = Math.pow(10, prec);
                            return '' + Math.round(n * k) / k;
                        };
                    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
                    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
                    if (s[0].length > 3) {
                        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
                    }
                    if ((s[1] || '').length < prec) {
                        s[1] = s[1] || '';
                        s[1] += new Array(prec - s[1].length + 1).join('0');
                    }
                    return s.join(dec);
                }
                
                            
            });
        </script>