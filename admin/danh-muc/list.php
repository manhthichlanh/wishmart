<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?=$CONTENT_URL?>/js/xshop-list.js"></script>
        <style>
            .group {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                margin: 0 auto;
                width: 30%!important;
                
                margin-bottom: 20px;
            }
          
            #getpage {
                
                width: 10%;
            }
        </style>
    </head>
    <body>
    <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table tbl">
                <thead class="alert-success">
                    <tr>
                        <th></th>
                        <th>HÌNH</th>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>
                        <th>ƯU TIÊN</th>
                        <th>HIỂN THỊ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
              
                    foreach ($items as $item){
                        extract($item); //$id_dm, $ten_dm
                ?>
                    <tr>
                        <th><input type="checkbox" name="id_dm[]" value="<?=$id_dm?>"></th>
                        <td><img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" width="50px"></td>
                        <td><?=$id_dm?></td>
                        <td><?=$ten_dm?></td>
                        <td><?=$uu_tien?></td>
                        <td><?=$hien_thi?></td>
                        <td>
                            <a href="index.php?btn_edit&id_dm=<?=$id_dm?>" class="btn btn-default btn-sm">Sửa</a>
                            <a href="index.php?btn_delete&id_dm=<?=$id_dm?>" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">
                            <button id="check-all" type="button" class="btn btn-default">Chọn tất cả</button>
                            <button id="clear-all" type="button" class="btn btn-default">Bỏ chọn tất cả</button>
                            <button id="btn-delete" name="btn_delete" class="btn btn-default">Xóa các mục chọn</button>
                            <a href="index.php" class="btn btn-default">Nhập thêm</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </body>
</html>
