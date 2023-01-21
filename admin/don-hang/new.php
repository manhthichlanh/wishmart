
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form" id="form_valid" enctype="multipart/form-data">

            <div class="row">

                <div class="form-group col-sm-6">
                    <label>Id đơn hàng</label>
                    <input name="id_dh" class="form-control" required value="auto_number" readonly>
                </div>
                
                <div class="form-group col-sm-6">
                    <label>Tên người nhận</label>
                    <input name="ten_nguoi_nhan" id="ten_nguoi_nhan" class="form-control">
                    <span class="form-message"></span>
                </div>

            </div>

            <div class="row">

                <div class="form-group col-sm-6">
                    <label>Địa chỉ người nhận</label>
                    <input type="text" name="dia_chi"  id="dia_chi" value="" class="form-control">
                </div>
                
                <div class="form-group col-sm-6">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control">                                      
                </div>
            </div>

            <div class="row">

            <div class="form-group col-sm-6">
                    <label>Số điện thoại</label>
                    <input name="sdt" id="sdt" class="form-control">
                </div>

            <div class="form-group col-sm-6">
                    <label>Phương thức thanh toán</label>
                    <input name="phuong_thuc_thanh_toan" id="pttt" class="form-control">
                </div>
                
                
            </div>

            <div class="row">

                <div class="form-group col-sm-6">
                    <label>Trạng thái</label>
                    <input type="text" name="trang_thai" id="trang_thai" value="" class="form-control">
                </div>
                
                <div class="form-group col-sm-6 ">
                    <label>Người đặt hàng</label>
                    <select name="id_kh" class="form-control">
                        
                        <?php
                            $ds_kh=khach_hang_select_all();
                        
                            foreach ($ds_kh as $kh) {
                                echo '<option value="'.$kh['id_kh'].'">'.$kh['ten_kh'].'</option>';
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

            <div class="row">
           
                <div class="form-group col-sm-4">
                    <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
                </div>
            </div>

            
           
        </form>

        <!-- js============ -->
