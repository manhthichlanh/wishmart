<div class="noidungchinh">
    <div class="thongtincanhan">
        <div class="thongtincanhan_1">
            <div class="tieude_canhan">
                <h2>THÔNG TIN CÁ NHÂN</h2>
            </div>
            <div class="thongtincanhan_2">
                <div class="hinh_thongtin_canhan">
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>">
                </div>
                <div class="form_thongtin_canhan">
                    <form action="<?=$SITE_URL?>/nguoi-dung/index.php" method="POST">
                        <div class="spacer"></div>

                        <div class="form-group">

                            <input id="fullname" name="fullname" type="text" placeholder="Họ và Tên đệm" class="form-control" value="<?=$ten_kh?>" readonly>
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">

                            <input id="email" name="email" type="text" placeholder="Địa chỉ Email" class="form-control" value="<?=$email?>" readonly>
                            <span class="form-message"></span>
                        </div>
                    
                        <!-- <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm ảnh làm ảnh đại diện</button>

                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="hinh"/>
                            <div class="drag-text">
                            <h3>Nhấn hoặc thả ảnh vào đây để đặt ảnh đại diện</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Xóa ảnh: <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                        </div> -->
                        <div class="form-group">

                            <input id="dia_chi" name="dia_chi" type="text" placeholder="Địa chỉ" class="form-control" value="<?=$dia_chi?>" readonly>
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">

                            <input id="sdt" name="sdt" type="text" placeholder="Số điện thoại" class="form-control" value="<?=$sdt?>" readonly>
                            <span class="form-message"></span>
                        </div>
                                                              
                        <button class="form-submit btn btn-warning btn-block " type="submit" name="btn_edit">Sửa thông tin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </div>