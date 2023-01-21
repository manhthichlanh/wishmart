
        
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
                        <th>ID SP</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>DANH MỤC</th>
                        <th>THƯƠNG HIỆU</th>
                        <th>ƯU TIÊN</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($items as $lh ) {

                            $xuat = '<tr">
                            <th><input type="checkbox" name="id_sp[]" value="'.$lh['id_sp'].'"></th>
                            <td><a href="index.php?btn_detail&id_sp='.$lh['id_sp'].'">'.$lh['id_sp'].'</a></td>
                            <td>'.$lh['ten_sp'].'</td>
                            <td><img src="'.$CONTENT_URL.'/images/products/'.$lh['hinh'].'" alt="" width="50px"></td>           
                            <td>'.$lh['ten_dm'].'</td>
                            <td>'.$lh['ten_th'].'</td>
                            <td>'.$lh['uu_tien'].'</td>
                            <td>
                               
                                <a href="index.php?btn_edit&id_sp='.$lh['id_sp'].'&id_dm='.$lh['id_dm'].'&id_th='.$lh['id_th'].'" class="btn btn-default btn-sm">Sửa</a>
                                <a href="index.php?btn_delete&id_sp='.$lh['id_sp'].'" class="btn btn-default btn-sm">Xóa</a>
                            </td>
                        </tr>';
                            echo $xuat;
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
        
    