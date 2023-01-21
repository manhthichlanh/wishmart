
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }      
  
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data" id="form_valid">

            <div class="row">

                <div class="form-group col-sm-4">
                    <label>Id sản phẩm</label>
                    <input name="id_sp" value="<?=$id_sp?>" class="form-control" readonly>
                </div>

                <div class="form-group col-sm-4">
                    <label>Tên sản phẩm</label>
                    <input name="ten_sp" value="<?=$ten_sp?>" class="form-control" required>
                </div>

                <div class="form-group col-sm-4">
                <label>Cấu hình</label>
                    <input name="cau_hinh" value="<?=$cau_hinh?>" class="form-control" required>                 
                </div>

            </div>

            <div class="row">

                <div class="form-group col-sm-4">
                    <label>Đơn giá</label>
                    <input type="text" name="don_gia" value="<?=$don_gia?>" class="form-control" required>
                    
                </div>

                <div class="form-group col-sm-4">
                    <label>Giảm giá</label>
                    <input type="text" name="giam_gia" value="<?=$giam_gia?>" class="form-control" required>
                    
                </div>

                <div class="form-group col-sm-4">
                    <label>Hình ảnh</label>
                    <input type="file" name="hinh" value="<?=$hinh?>" class="form-control" required>
                    
                </div>           
                                
            </div>

            <div class="row">

                <div class="form-group col-sm-4">
                    <label>Số lượng</label>
                    <input type="text" name="so_luong" value="<?=$so_luong?>" class="form-control" required>
                    
                </div>   

                <div class="form-group col-sm-4">
                    <label>Màu sắc</label>
                    <input type="text" name="mau_sac" value="<?=$mau_sac?>" class="form-control" required>
                    
                </div>  

                <div class="form-group col-sm-4">
                <label>Kích thước</label>
                <input type="text" name="kich_thuoc" value="<?=$kich_thuoc?>" class="form-control" required>

                </div>  


            </div>

            <div class="row">

                <div class="form-group col-sm-4">
                    <label>Ưu tiên</label>
                    <input name="uu_tien" value="<?=$uu_tien?>" class="form-control" required>
                </div>


                <div class="form-group col-sm-4 ">
                    <label>Danh mục</label>
                    <select name="id_dm" class="form-control">
                        
                        <?php

                            $ds_dm=danh_muc_select_all();
                        
                            $isset='<option selected>Không tồn tại danh mục</option>';

                            $nocata = '<option >Không tồn tại danh mục</option>';
                            foreach ($ds_dm as $dm) {
                                if ($id_dm!=null) {
                                    if ($id_dm==$dm['id_dm']) {
                                        echo '<option value="'.$dm['id_dm'].'" selected>'.$dm['ten_dm'].'</option>';
                                        echo $nocata;
                                        $nocata = "";
                                    }                                    
                                    else {
                                        echo '<option value="'.$dm['id_dm'].'">'.$dm['ten_dm'].'</option>';
                                    }
                                } else {
                                    echo $isset;
                                    echo '<option value="'.$dm['id_dm'].'">'.$dm['ten_dm'].'</option>';
                                    $isset="";
                                }
                                
                            }
                        ?>
                        
                    </select>
                </div>

                <div class="form-group col-sm-4 ">
                    <label>Thương hiệu</label>
                    <select name="id_th" class="form-control">
                        
                        <?php
                        
                            $ds_th=thuong_hieu_select_all();

                            $isset = '<option selected>Không tồn tại thương hiệu</option>';

                            $nobrand = '<option>Không tồn tại thương hiệu</option>';
                            foreach ($ds_th as $th) {
                                if ($id_th!=null) {
                                    if ($id_th==$th['id_th']) {
                                        echo $nobrand;
                                        echo '<option value="'.$th['id_th'].'" selected>'.$th['ten_th'].'</option>';
                                        $nobrand="";
                                    }                                    
                                    else {
                                        echo '<option value="'.$th['id_th'].'">'.$th['ten_th'].'</option>';
                                    }
                                } else {
                                    echo $isset;
                                    echo '<option value="'.$th['id_th'].'">'.$th['ten_th'].'</option>';
                                    $isset="";
                                }
                                
                            }
                        ?>
                        
                    </select>
                </div>

        </div>
        <div class="hinh">


                <img src="<?=$CONTENT_URL?>/images/products/<?=$hinh?>" alt="">
            </div>
        
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" id="content" rows="3" name="mo_ta" required><?=$mo_ta?></textarea>
        </div>
        <div class="form-group col-sm-4">
            <button name="btn_update" class="btn btn-default">Cập nhật</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>



</form>
