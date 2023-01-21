
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
                        <th>ID KHÁCH HÀNG</th>
                        <th>HỌ TÊN</th>
                        <th>EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>VAI TRÒ?</th>
                        <th>KÍCH HOẠT</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item); //$ma_loai, $ten_loai
                ?>
                    <tr>
                        <th><input type="checkbox" name="hello" value="<?=$id_kh?>"></th>
                        <td><?=$id_kh?></td>
                        <td ><?=$ten_kh?></td>
                        <td><?=$email?></td>
                        <td><img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>" alt="" style="width: 20%;"></td>
                        <td><?=$dia_chi?></td>
                        <td><?=$sdt?></td>                       
                        <td><?=$vai_tro?></td>
                        <td><?=$kich_hoat?></td>
                        <td>
                            <a href="index.php?btn_edit&id_kh=<?=$id_kh?>" class="btn btn-default btn-sm">Sửa</a>
                            <a href="index.php?btn_delete&id_kh=<?=$id_kh?>" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
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
