<?php
    require_once "../global.php";
    require_once "../dao/san-pham.php";
    extract($_REQUEST);
 
    if (isset($ten_sp))  $items = san_pham_select_keyword($ten_sp);
       
    xuat($items);

    function xuat($items) {
        global $SITE_URL,$CONTENT_URL;
        foreach ($items as $item) {
            extract($item);
            echo '<div class="sanphamtk">
            <a href="'.$SITE_URL.'/chi-tiet-san-pham?product_detail&id_sp='.$id_sp.'"><img src="'.$CONTENT_URL.'/images/products/'.$hinh.'">
               <p>'.$ten_sp.'</p>
            </a>
            </div>
           ';
        }

    }
?>