
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
                        <th>ID ĐƠN HÀNG</th>
                        <th>TÊN NGƯỜI NHẬN</th>
                        <th>ĐỊA CHỈ</th>
                        <th>EMAIL</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>GHI CHÚ</th>
                        <th>PHƯƠNG THỨC THANH TOÁN</th>
                        <th>TRẠNG THÁI</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($items as $item){
                        extract($item); 
                ?>
                    <tr>
                        <th><input type="checkbox" name="hello" value="<?=$id_dh?>"></th>
                        <td><?=$id_dh?></td>
                        <td><?=$ten_nguoi_nhan?></td>
                        <td><?=$dia_chi?></td>
                        <td><?=$email?></td>             
                        <td><?=$sdt?></td> 
                        <td style="text-align: left"><?=substr($ghi_chu,0,50).(strlen($ghi_chu)>50? "...":"")?></td>                      
                        <td><?=$phuong_thuc_thanh_toan?></td>
                        <td><?=$trang_thai?></td>
                        <?php
                            if ($trang_thai!="Hoàn thành") {
                                
                            
                        ?>
                        <td>
                            <a href="index.php?btn_edit&id_dh=<?=$id_dh?>" class="btn btn-default btn-sm">Sửa</a>
                            <a href="index.php?btn_delete&id_dh=<?=$id_dh?>" class="btn btn-default btn-sm">Xóa</a>
                        </td>
                        <?php
                            }
                        ?>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
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
