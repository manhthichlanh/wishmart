
        
        <?php
            extract($_REQUEST);
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data" id="form_valid">

            <div class="row">

                    <div class="form-group col-sm-4">
                        <label>Id khách hàng</label>
                        <input name="id_kh" value="<?=$id_kh?>" class="form-control" required value="auto_number" readonly>
                    </div>
                    
                    <div class="form-group col-sm-4">
                        <label>Họ và tên</label>
                        <input name="ten_kh" value="<?=$ten_kh?>" class="form-control" required>
                    </div>

                    <div class="form-group col-sm-4">
                        <label>Email</label>
                        <input type="email" name="email" value="<?=$email?>" class="form-control" required>
                    </div>

                </div>

                <div class="row">
                
                    <div class="form-group col-sm-4">
                        <label>Hình ảnh</label>
                        <input type="file" name="hinh" id="" class="form-control" required>            
                    </div>

                    <div class="form-group col-sm-4">
                        <label>Địa chỉ</label>
                        <input name="dia_chi" value="<?=$dia_chi?>" class="form-control" required>
                    </div>

                    <div class="form-group col-sm-4">
                        <label>Số điện thoại</label>
                        <input name="sdt" value="<?=$sdt?>" class="form-control" required>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-sm-4">
                        <label>Mật khẩu</label>
                        <input type="password" name="mat_khau" value="<?=$mat_khau?>" class="form-control" required>
                    </div>
                    
                    <div class="form-group col-sm-4">
                
                        <label>Vai trò</label>

                        <div class="form-control">
                            <?php
                                if ($vai_tro==1) {
                                    echo ' <input type="radio" name="vai_tro" value="1" checked> <label for="">Nhân viên</label>
                                    <input type="radio" name="vai_tro" value="0" > <label for="">Khách hàng</label>';
                                } else {
                                    echo '<input type="radio" name="vai_tro" value="1" > <label for="">Nhân viên</label>
                                    <input type="radio" name="vai_tro" value="0" checked> <label for="">Khách hàng</label>'; 
                                }
                            ?>
                    
                        </div>

                    </div>

                    <div class="form-group col-sm-4">
                
                        <label>Kích hoạt</label>

                        <div class="form-control">
                            <?php
                                if ($kich_hoat==1) {
                                    echo ' <input type="radio" name="kich_hoat" value="1" checked> <label for="">Kích hoạt</label>
                                    <input type="radio" name="kich_hoat" value="0" > <label for="">Chưa kích hoạt</label>';
                                } else {
                                    echo '<input type="radio" name="kich_hoat" value="1" > <label for="">Kích hoạt</label>
                                    <input type="radio" name="kich_hoat" value="0" checked> <label for="">Chưa kích hoạt</label>'; 
                                }
                            ?>
                    
                        </div>

                    </div>
                </div>
    
        <div class="form-group col-sm-4">
            <button name="btn_update" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
       

        

        </form>


