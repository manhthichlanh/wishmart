
        
        <?php
            var_dump($_REQUEST);
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <label for="">Mô tả</label>
            <textarea name="" id="content" rows="4" style="width:100%"><?=$items[0]['mo_ta']?></textarea>
            <table class="table tbl">
                <thead class="alert-success">
                    <tr>
                        <th ></th>
                        <?php if(isset($items['id_ha'])) {?>
                            <th>ID HÌNH ẢNH</th>
                            <th>TÊN HÌNH</th>
                            <th>HÌNH</th>
                        <?php }?>                     
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>SỐ LƯỢNG</th>
                        <th>MÀU SẮC</th>
                        <th>KÍCH THƯỚC</th>
                        <th>CẤU HÌNH</th>               
                        <th>ID SẢN PHẨM</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($items as $lh ) {
                            
                            $xuat = '<tr">
                            <th><input type="checkbox" name="id_ha[]" value="'.$lh['id_ha'].'"></th>';
                            if (isset($items['id_ha'])) {
                                $xuat.='<td>'.$lh['id_ha'].'</td>
                                <td>'.$lh['ten_hinh'].'</td>
                                <td><img src="'.$CONTENT_URL.'/images/products/'.$lh['hinh'].'" alt="" width="50px"></td>';
                            }
                            $xuat .='<td>'.$lh['don_gia'].'</td>
                            <td>'.$lh['giam_gia'].'</td>
                            <td>'.$lh['so_luong'].'</td>
                            <td>'.$lh['mau_sac'].'</td>
                            <td>'.$lh['kich_thuoc'].'</td>
                            <td>'.$lh['cau_hinh'].'</td>
                            <td>'.$lh['id_sp'].'</td>';
                            if (isset($items['id_ha'])) {
                                $xuat .='<td >
                                        <a href="index.php?btn_edit&id_ha='.$lh['id_ha'].'" class="btn btn-default btn-sm">Sửa</a>
                                        <a href="index.php?btn_delete&id_ha='.$lh['id_ha'].'" class="btn btn-default btn-sm">Xóa</a>
                                    </td>';
                            }
                            $xuat .='</tr>';
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
                            <a href="index.php?btn_ha_new&id_sp=<?=$id_sp?>" class="btn btn-default btn-sm">Nhập thêm</button >
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
        
    