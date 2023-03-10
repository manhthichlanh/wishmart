<?php
    require_once "../../global.php";
    require_once "../../dao/san-pham.php";
    require_once "../../dao/don-hang.php";
    require_once "../../sendmail.php";

    extract($_REQUEST);  

    // var_dump($_REQUEST);

    if (isset($_SESSION['client_user'])) {
        $id_kh=$_SESSION['client_user']['id_kh']; 
        $items = gio_hang_select_by_id_kh($id_kh);
        $fl = 1;
    } 
    else {
        $items = $_SESSION['cart'];
        $id_kh = null;
        $fl = 0;
    }

    if (isset($thanh_toan)) {
        if ($fl == 0) {
            
            if (count($_SESSION['cart'])>0) {
   
                $i=0;
                foreach ($_SESSION['cart'] as $sp) {
                    for ($j=0; $j < count($id_sp); $j++)  {
                        if($sp[0]==$id_sp[$j]) {
                            if ($_SESSION['cart'][$i][1]!=$so_luong[$j]) $_SESSION['cart'][$i][1]=$so_luong[$j];
                            $fg=1;
                            break;
                        }
                        
                    }
                    
                    $i++;
                }
                $location = $_SERVER['PHP_SELF'];
                header("location: $location");
            }

            
        }else if ($fl==1) {
            if (count($items)>0) {
   
                print_r($so_luong);
                
                foreach ($items as $item) {
                    for ($i=0; $i < count($id_sp); $i++)  {
                        if ($item['id_sp']==$id_sp[$i]) {
                            thanh_toan_update_sl($so_luong[$i],$id_kh,$id_sp[$i]);
                            break;
                        }
                    }
                    
                }
                $location = $_SERVER['PHP_SELF'];
                header("location: $location");
            }
        }
        
    }


    if (isset($thanh_toan_don_hang)) {

        $id_dh = rand(10,999999);      

        try {
            don_hang_insert($id_dh, $ten_nguoi_nhan, $dia_chi, $email, $sdt, $ghi_chu, $pttt, "??ang duy???t", $id_kh);
            $MESSAGE = "Thanh to??n th??nh c??ng!";
        } catch (Exception $exc) {
            echo $exc;
            $MESSAGE = "Thanh to??n th???t b???i!";
        }

        global $id_dh,$id_kh;
        

        foreach ($items as $item) {

            if ($fl==1) thanh_toan($id_dh,$id_kh,$item['id_dhct']);
            else gio_hang_insert_by_id_kh($item[0], $item[1], $item[2], $item[3], $item[4], $id_kh,$id_dh);
        }

            $VIEW_NAME = "thanh-toan/hoan-thanh.php";
            //X??a session cart khi ???? thanh to??n
            if (isset($_SESSION['cart'])) $_SESSION['cart'] = array();

            $list = don_hang_hoan_thanh($id_dh);

            $van_chuyen = "59000";

            $blade = '
            <div class=""><div class="aHl"></div><div id=":ni" tabindex="-1"></div><div id=":n7" class="ii gt" jslog="20277; u014N:xr6bB; 4:W251bGwsbnVsbCxbXV0."><div id=":n6" class="a3s aiL "><u></u>
            
                
                    
                    
                
                <div marginwidth="0" marginheight="0" style="padding:0">
                    <div id="m_3704117777526449541wrapper" dir="ltr" style="background-color:#f7f7f7;margin:0;padding:70px 0;width:100%" bgcolor="#f7f7f7" width="100%">
                        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                            <tbody><tr>
                                <td align="center" valign="top">
                                    <div id="m_3704117777526449541template_header_image">
                                                                </div>
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_3704117777526449541template_container" style="background-color:#fff;border:1px solid #dedede;border-radius:3px" bgcolor="#fff">
                                        <tbody><tr>
                                            <td align="center" valign="top">
                                                
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="m_3704117777526449541template_header" style="background-color:#7f54b3;color:#fff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;border-radius:3px 3px 0 0" bgcolor="#7f54b3">
                                                    <tbody><tr>
                                                        <td id="m_3704117777526449541header_wrapper" style="padding:36px 48px;display:block">
                                                            <h1 style="font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left;color:#fff;background-color:inherit" bgcolor="inherit">C???m ??n b???n ???? ?????t h??ng</h1>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">
                                                
                                                <table border="0" cellpadding="0" cellspacing="0" width="600" id="m_3704117777526449541template_body">
                                                    <tbody><tr>
                                                        <td valign="top" id="m_3704117777526449541body_content" style="background-color:#fff" bgcolor="#fff">
                                                            
                                                            <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                                <tbody><tr>
                                                                    <td valign="top" style="padding:48px 48px 32px">
                                                                        <div id="m_3704117777526449541body_content_inner" style="color:#636363;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left" align="left">
            
            <p style="margin:0 0 16px">Xin ch??o '.$list[0]['ten_nguoi_nhan'].',</p>
            <p style="margin:0 0 16px">C???m ??n ???? ?????t h??ng. ????n h??ng s??? b??? t???m gi??? cho ?????n khi ch??ng t??i x??c nh???n thanh to??n ho??n th??nh. Trong th???i gian ch??? ?????i, ????y l?? l???i nh???c v??? nh???ng g?? b???n ???? ?????t h??ng:</p>
            
            
            <h2 style="color:#7f54b3;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
                [????n h??ng #'.$list[0]['id_dh'].'] ('.$list[0]['ngay_xuat'].')</h2>
            
            <div style="margin-bottom:40px">
                <table cellspacing="0" cellpadding="6" border="1" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif" width="100%">
                    <thead>
                        <tr>
                            <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">S???n ph???m</th>
                            <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">S??? l?????ng</th>
                            <th scope="col" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">Gi??</th>
                        </tr>
                    </thead>
                    <tbody>';
                    $tong = 0;
                    foreach ($list as $item) {

                    $blade.='<tr>
                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word" align="left">
                                '.$item['ten_sp'].'
                            </td>
                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif" align="left">
                                '.$item['so_luong'].'		
                            </td>
                            <td style="color:#636363;border:1px solid #e5e5e5;padding:12px;text-align:left;vertical-align:middle;font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif" align="left">
                                <span>'.$item['don_gia'].'&nbsp;<span>???</span></span>		
                            </td>
                        </tr>';      
                        $tong+=$item['so_luong']*$item['don_gia'];  
                    }
                    
                    
                    $blade.='</tbody>
                    <tfoot>
                                            <tr>
                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px" align="left">T???ng s??? ph???:</th>
                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px" align="left"><span>'.number_format($tong).'&nbsp;<span>???</span></span></td>
                                </tr>
                                                    <tr>
                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">Giao nh???n h??ng:</th>
                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">
            <span>'.number_format($van_chuyen).'&nbsp;<span>???</span></span>&nbsp;<small>qua V???n chuy???n nhanh</small>
            </td>
                                </tr>
                                                    <tr>
                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">Ph????ng th???c thanh to??n:</th>
                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">'.$list[0]['phuong_thuc_thanh_toan'].'</td>
                                </tr>';
                                    if ($list[0]['phuong_thuc_thanh_toan']=='Thanh to??n online') {
                                        $blade.= '<tr>
                                        <th scope="row" colspan="3" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">
                                            B???n vui l??ng chuy???n kho???n qua MOMO v???i STK: <a href="">0834444916</a> ????? ???????c c???p nh???t ????n h??ng nh??!
                                        </th>
                                    </tr>';
                                    }
                                                    $blade.='<tr>
                                    <th scope="row" colspan="2" style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left">T???ng c???ng:</th>
                                    <td style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left" align="left"><span>'.number_format($tong+$van_chuyen).'&nbsp;<span>???</span></span></td>
                                </tr>
                                
                                        </tfoot>
                </table>
            </div>
            
            <table id="m_3704117777526449541addresses" cellspacing="0" cellpadding="0" border="0" style="width:100%;vertical-align:top;margin-bottom:40px;padding:0" width="100%">
                <tbody><tr>';
                    if (!empty($_SESSION["client_user"])) {
                        $blade.='<td valign="top" width="50%" style="text-align:left;font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;border:0;padding:0" align="left">
                                <h2 style="color:#7f54b3;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">?????a ch??? thanh to??n</h2>
                    
                                <address style="padding:12px;color:#636363;border:1px solid #e5e5e5">
                                    <p><i>T??n: </i>'.$_SESSION["client_user"]['ten_kh'].'</p>
                                    <p><i>Email: </i>'.$_SESSION["client_user"]['email'].'</p>
                                    <p><i>S??? ??i???n tho???i: </i>'.$_SESSION["client_user"]['sdt'].'</p>
                                    <p><i>S??? ??i???n tho???i: </i>'.$_SESSION["client_user"]['dia_chi'].'</p>
                                </address>
                            </td>';
                    }
                                $blade.='<td valign="top" width="50%" style="text-align:left;font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;padding:0" align="left">
                            <h2 style="color:#7f54b3;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">?????a ch??? giao h??ng</h2>
            
                            <address style="padding:12px;color:#636363;border:1px solid #e5e5e5">
                                <p><i>T??n: </i>'.$list[0]['ten_nguoi_nhan'].'</p>
                                <p><i>Email: </i>'.$list[0]['email'].'</p>
                                <p><i>S??? ??i???n tho???i: </i>'.$list[0]['sdt'].'</p>
                                <p><i>?????a ch???: </i>'.$list[0]['dia_chi'].'</p>
                            </address>
                        </td>
                        </tr>
            </tbody></table>
            <p style="margin:0 0 16px">Ch??ng t??i ??ang ti???n h??nh ho??n thi???n ????n ?????t h??ng c???a b???n</p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                                
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    
                                    <table border="0" cellpadding="10" cellspacing="0" width="600" id="m_3704117777526449541template_footer">
                                        <tbody><tr>
                                            <td valign="top" style="padding:0;border-radius:6px">
                                                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                                    <tbody><tr>
                                                        <td colspan="2" valign="middle" id="m_3704117777526449541credit" style="border-radius:6px;border:0;color:#8a8a8a;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:12px;line-height:150%;text-align:center;padding:24px 0" align="center">
                                                            <p style="margin:0 0 16px">Wish Mart ??? Built with <a href="https://woocommerce.com" style="color:#7f54b3;font-weight:normal;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://woocommerce.com&amp;source=gmail&amp;ust=1673457977582000&amp;usg=AOvVaw0xagi_KfdAbWOIGl2fPtXF">WooCommerce</a></p>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table><div class="yj6qo"></div><div class="adL">
                    </div></div><div class="adL">
                </div></div><div class="adL">
            
            
            </div></div></div><div id=":nm" class="ii gt" style="display:none"><div id=":nn" class="a3s aiL "></div></div><div class="hi"></div></div>
            ';
        send_mail($list[0]['email'],$list[0]['ten_nguoi_nhan'],'C???m ??n ???? mua h??ng c???a ch??ng t??i!',$blade);    

    }  else {
        $VIEW_NAME = "thanh-toan/don-hang.php";
    }
    // var_dump($VIEW_NAME);
    
    
    require_once "../layout.php";
    echo '<link rel="stylesheet" href="'.$CONTENT_URL.'/css/shopping_cart.css">';

?>