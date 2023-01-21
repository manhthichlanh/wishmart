
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form" id="form_valid" enctype="multipart/form-data">

            <div class="row">

                <div class="form-group col-sm-4">
                    <label>Id sản phẩm</label>
                    <input name="id_sp" value="auto number" class="form-control" readonly>
                </div>
                
                <div class="form-group col-sm-4">
                    <label>Tên sản phẩm</label>
                    <input name="ten_sp"  id="ten_sp" class="form-control" required>
                </div>

                <div class="form-group col-sm-4">
                <label>Cấu hình</label>
                    <input name="cau_hinh" id="cau_hinh" class="form-control" required>                 
                </div>
                
            </div>

            <div class="row">
                
                <div class="form-group col-sm-4">
                    <label>Đơn giá</label>
                    <input type="text" name="don_gia" id="don_gia" class="form-control" required>
                    
                </div>

                <div class="form-group col-sm-4">
                    <label>Giảm giá</label>
                    <input type="text" name="giam_gia" id="giam_gia" class="form-control" required>
                    
                </div>

                <div class="form-group col-sm-4">
                    <label>Hình ảnh</label>
                    <input type="file" name="hinh" id="" class="form-control" required>
                    
                </div>           
                                  
            </div>

            <div class="row">

            <div class="form-group col-sm-4">
                    <label>Số lượng</label>
                    <input type="text" name="so_luong" id="so_luong" class="form-control" required>
                    
                </div>   

            <div class="form-group col-sm-4">
                    <label>Màu sắc</label>
                    <input type="text" name="mau_sac" id="mau_sac" class="form-control" required>
                    
                </div>  

            <div class="form-group col-sm-4">
                <label>Kích thước</label>
                <input type="text" name="kich_thuoc" id="kich_thuoc" class="form-control" required>
                
            </div>  
           

            </div>

            <div class="row">

            <div class="form-group col-sm-4">
                    <label>Ưu tiên</label>
                    <input name="uu_tien" value="" id="uu_tien" class="form-control" required>
            </div>
            
            
            <div class="form-group col-sm-4 ">
                    <label>Danh mục</label>
                    <select name="id_dm" class="form-control">
                        
                        <?php
                            $ds_dm=danh_muc_select_all();
                        
                            foreach ($ds_dm as $dm) {
                                echo '<option value="'.$dm['id_dm'].'">'.$dm['ten_dm'].'</option>';
                            }
                            echo '<option value="null">Chưa có danh mục</option>';
                        ?>
                        
                    </select>
                </div>

                <div class="form-group col-sm-4 ">
                    <label>Thương hiệu</label>
                    <select name="id_th" class="form-control">
                        
                        <?php
                            $ds_th=thuong_hieu_select_all();
                        
                            foreach ($ds_th as $th) {
                                echo '<option value="'.$th['id_th'].'">'.$th['ten_th'].'</option>';
                            }
                            echo '<option value="null">Chưa có thương hiệu</option>';
                        ?>
                        
                    </select>
                </div>
                
            </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" id="content"  rows="3" name="mo_ta" required>Ngày nay, công nghệ AI đã tiến bộ đến mức có thể tạo ra những thiết kế vô cùng đẹp mắt và giống thật. Ví dụ, những chiếc camera dưới đây không thật sự tồn tại. Dù trông giống như thật, nhưng chúng được tạo ra bằng cách sử dụng một hệ thống trí tuệ nhân tạo có tên DALL-E 2, có thể tạo ra hình ảnh thực tế chỉ dựa trên mô tả văn bản.</textarea>
                </div>
                    
                <div class="form-group col-sm-4">
                    <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
                </div>
            
 
            
           
        </form>
       
