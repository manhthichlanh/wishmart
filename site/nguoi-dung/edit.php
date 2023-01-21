<div class="noidungchinh">
    <div class="thongtincanhan">
        <div class="thongtincanhan_1">
            <div class="tieude_canhan">
                <h2>CẬP NHẬT THÔNG TIN</h2>
            </div>
            <div class="thongtincanhan_2">
                <div class="hinh_thongtin_canhan">
                    <img src="<?=$CONTENT_URL?>/images/users/<?=$hinh?>">
                </div>
                <div class="form_thongtin_canhan">
                    <form action="<?=$SITE_URL?>/nguoi-dung/index.php" method="POST" enctype="multipart/form-data" id="form_valid">
                        <div class="spacer"></div>

                        <div class="form-group">

                            <input id="fullname" name="fullname" type="text" placeholder="Họ và Tên đệm" class="form-control" value="<?=$fullname?>" >
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">

                            <input id="email" name="email" type="text" placeholder="Địa chỉ Email" class="form-control" value="<?=$email?>" >
                            <span class="form-message"></span>
                        </div>
                    
                        <div class="file-upload">
                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm ảnh làm ảnh đại diện</button>

                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="hinh_user"/>
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
                        </div>
                        <div class="form-group">

                            <input id="dia_chi" name="dia_chi" type="text" placeholder="Địa chỉ" class="form-control" value="<?=$dia_chi?>" >
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">

                            <input id="sdt" name="sdt" type="text" placeholder="Số điện thoại" class="form-control" value="<?=$sdt?>" >
                            <span class="form-message"></span>
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed mb-2 btn-kp" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #1AA059;" >
                                    Khôi phục mật khẩu!
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="form-group">
                                        <input id="old_pass"  type="password" placeholder="Mật khẩu củ" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">
                                        <input id="password"  type="password" placeholder="Mật khẩu mới" class="form-control" >
                                        <span class="form-message"></span>
                                    </div>

                                    <div class="form-group">
                                        <input id="re_password" type="password" placeholder="Nhập lại mật khẩu mới" class="form-control" >
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            var fl=true;
                            $(".btn-kp").on("click", function () {
                                
                                if (fl==true) {
                                    $("#old_pass").attr("name", "old_pass");
                                    $("#password").attr("name", "password");
                                    $("#re_password").attr("name", "re_password");
                             
                                    fl=!fl;
                                }
                                else {
                                    $("#old_pass").removeAttr("name");
                                    $("#password").removeAttr("name");
                                    $("#re_password").removeAttr("name");
                                    fl=!fl;
                                }
                                
                            });
                        </script>
                         
                        <span class="form-message"><?=$MESSAGE?></span>                                     
                        <button class="form-submit btn btn-warning btn-block " type="submit" name="btn_update">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

  </div>