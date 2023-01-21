<?php
    require_once "../../global.php";
    require_once "../../dao/san-pham.php";
    require_once "../../dao/danh-muc.php";
    require_once "../../dao/don-hang.php";
    // require_once "../data.php";
    extract($_REQUEST);  
    if (isset($id_dm)) $dm = danh_muc_select_by_id($id_dm);

    $mau_sac = array_values(array_unique(
        san_pham_select_mau_sac($id_dm)
        ,SORT_REGULAR
    ));
    
    $bo_nho = array_values(array_unique(
        san_pham_select_bo_nho($id_dm)
        ,SORT_REGULAR
    ));

    $don_gia_max = max(
        san_pham_select_don_gia($id_dm)
    );

    function getPriceRanges($prices) {
        $ranges = array();
        foreach ($prices as $price) {
          $increment = ceil($price / 5);
          for ($i = 0; $i < 5; $i++) {
            $lower = $i * $increment;
            $upper = ($i + 1) * $increment;
            $ranges[$i] = array('lower' => round($lower / 1000000, 0, PHP_ROUND_HALF_UP), 'upper' => round($upper / 1000000, 0, PHP_ROUND_HALF_UP));
          }
        }
        return $ranges;
      }
    $khoang_gia = getPriceRanges($don_gia_max);

    // print_r($don_gia_max);



    $VIEW_NAME = "san-pham/san-pham.php";

    require_once "../layout.php";
   
?>