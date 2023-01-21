<?php
    require_once "../../global.php";
    require_once "../../dao/don-hang.php";
    require_once "../../sendmail.php";


    $VIEW_NAME = "lien-he/contact.php";
    extract($_REQUEST);
    if (isset($send)) {
        $content = '
        <p>Xin chào tôi tên là: '.$name.'</p>
        <p>'.$text_content.'</p>';
        send_mail($email,"Bạn",'Góp ý - Liên hệ',$content);
    }
    require_once "../layout.php";
    echo '<link rel="stylesheet" href="'.$CONTENT_URL.'/css/contact.css">';
?>
 