
        
        <?php
            extract($_REQUEST);
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data" id="form_valid">

        <div class="row">

            <div class="form-group col-sm-6">
                <label>Id đơn hàng</label>
                <input name="id_dh" class="form-control" value="<?=$id_dh?>" required value="auto_number" readonly>
            </div>
            
            <div class="form-group col-sm-6">
                <label>Tên người nhận</label>
                <input name="ten_nguoi_nhan" value="<?=$ten_nguoi_nhan?>" class="form-control" required>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-sm-6">
                <label>Địa chỉ người nhận</label>
                <input type="text" name="dia_chi" value="<?=$dia_chi?>" class="form-control" required>
            </div>
            
            <div class="form-group col-sm-6">
                <label>Email</label>
                <input type="email" name="email" value="<?=$email?>" class="form-control" required>                                      
            </div>
        </div>

        <div class="row">

        <div class="form-group col-sm-6">
                <label>Số điện thoại</label>
                <input name="sdt" value="<?=$sdt?>" class="form-control" required>
            </div>

        <div class="form-group col-sm-6">

                <label>Phương thức thanh toán</label>

                <select name="phuong_thuc_thanh_toan" class="form-control">
                    <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                    <option value="Thanh toán trực tuyến">Thanh toán trực tuyến</option>
                </select>
                
            </div>
            
            
        </div>

        <div class="row">

            <div class="form-group col-sm-6">
                <label>Trạng thái</label>

                <select name="trang_thai" class="form-control">
                    <?php
                        $ds_dh = don_hang_select_all();
                        $arr = array();
                        $loop = false;
                    
                        foreach ($ds_dh as $dh) {
                            for ($i=0; $i < count($arr); $i++) { 
                                if ($arr[$i] == $dh['trang_thai']) {
                                    $loop = true;
                                    break;
                                }
                            }
                    
                            if ($loop==false) {
                                if ($trang_thai==$dh['trang_thai']) echo '<option value="'.$dh['trang_thai'].'"selected>'.$dh['trang_thai'].'</option>';
                            
                                else echo '<option value="'.$dh['trang_thai'].'">'.$dh['trang_thai'].'</option>';
                            }
                            
                            
                            array_push($arr,$dh['trang_thai']);
                            if ($loop == true) $loop=!$loop;
                            
                        }
                    ?>
                </select>
                
            </div>
            
            <div class="form-group col-sm-6 ">
                <label>Người đặt hàng</label>
                <select name="id_kh" class="form-control">
                    
                    <?php
                        $ds_kh=khach_hang_select_all();
                    
                        foreach ($ds_kh as $kh) {
                            if ($id_kh==$kh['id_kh']) echo '<option value="'.$kh['id_kh'].'"selected>'.$kh['ten_kh'].'</option>';
                            else echo '<option value="'.$kh['id_kh'].'">'.$kh['ten_kh'].'</option>';
                        }
                        // echo '<option value="null">Chưa có danh mục</option>';
                    ?>
                    
                </select>
            </div>
        </div>

        <div class="form-group">
                <label>Ghi chú</label>
                <textarea class="form-control"  rows="3" name="ghi_chu" required>Ngày nay, công nghệ AI đã tiến bộ đến mức có thể tạo ra những thiết kế vô cùng đẹp mắt và giống thật. Ví dụ, những chiếc camera dưới đây không thật sự tồn tại. Dù trông giống như thật, nhưng chúng được tạo ra bằng cách sử dụng một hệ thống trí tuệ nhân tạo có tên DALL-E 2, có thể tạo ra hình ảnh thực tế chỉ dựa trên mô tả văn bản.</textarea>
            </div>
    
        <div class="form-group col-sm-4">
            <button name="btn_update" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
       



        </form>


