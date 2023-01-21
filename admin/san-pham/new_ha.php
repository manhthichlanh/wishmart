
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
       
        <form action="index.php" method="post" enctype="multipart/form-data">

            <div class="row">

                <div class="form-group col-sm-12">
                    <label>Id hình ảnh</label>
                    <input name="id_ha" value="auto number" class="form-control" readonly>
                </div>
                
                <div class="form-group col-sm-12">
                    <label>Tên hình ảnh</label>
                    <input name="ten_hinh" class="form-control" required>
                </div>

                <div class="form-group col-sm-12">
                    <label>Hình ảnh</label>
                    <input type="file" name="hinh" id="" class="form-control" required>
                    
                </div>

                <div class="form-group col-sm-12 ">
                    <label>Sản phẩm</label>
                    <select name="id_sp" class="form-control">
                        
                        <?php    
                            $items = san_pham_select_all_each();
                                     
                            foreach ($items as $sp) {
                                if ($sp['id_sp']==$id_sp) {
                                    echo '<option value="'.$sp['id_sp'].'" selected>'.$sp['ten_sp'].'</option>';
                                }
                                echo '<option value="'.$sp['id_sp'].'">'.$sp['ten_sp'].'</option>';
                            }
                            echo '<option value="null">Chưa có sản phẩm</option>';
                        ?>
                        
                    </select> 
                </div>   
            </div>

    

                    
                <div class="form-group col-sm-4">
                    <button name="btn_ha_insert" class="btn btn-default">Thêm mới</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
                </div>
            

            
           
        </form>
