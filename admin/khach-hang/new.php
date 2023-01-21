<?php
if (strlen($MESSAGE)) {
    echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
}
?>
<style>
.error{

    color:red;
    font-size:12px;
    font-weight:600;
    margin-top:5px;

}
</style>
<form action="index.php" method="post" class="form" id="form_valid" enctype="multipart/form-data">

    <div class="row">

        <div class="form-group col-sm-4">
            <label>Id khách hàng</label>
            <input name="id_kh" class="form-control" required value="auto_number" readonly>
            
        </div>

        <div class="form-group col-sm-4">
            <label>Họ và tên</label>
            <input name="ten_kh" id="ten_kh" class="form-control">
            <span class="form-message"></span>
        </div>

        <div class="form-group col-sm-4">
            <label>Email</label>
            <input type="email" name="email" value="" class="form-control">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-sm-4">
            <label>Hình ảnh</label>
            <input type="file" name="hinh" class="form-control" required>
        </div>

        <div class="form-group col-sm-4">
            <label>Địa chỉ</label>
            <input name="dia_chi" id="dia_chi" class="form-control" required>
        </div>

        <div class="form-group col-sm-4">
            <label>Số điện thoại</label>
            <input name="sdt" class="form-control" required>
        </div>
    </div>

    <div class="row">

        <div class="form-group col-sm-4">
            <label>Mật khẩu</label>
            <input type="password" name="mat_khau" value="" class="form-control" required>
        </div>

        <div class="form-group col-sm-4">
            <label>Vai trò</label>
            <div class="form-control">

                <input type="radio" name="vai_tro" value="1"> <label for="">Nhân viên</label>
                <input type="radio" name="vai_tro" value="0" checked> <label for="">Khách hàng</label>
            </div>

        </div>

        <div class="form-group col-sm-4">
            <label>Kích hoạt</label>
            <div class="form-control">

                <input type="radio" name="kich_hoat" value="1"> <label for="">Kích hoạt</label>
                <input type="radio" name="kich_hoat" value="0" checked> <label for="">Không kích hoạt</label>
            </div>

        </div>
    </div>
    <div class="row">

        <div class="form-group col-sm-4">
            <button name="btn_insert" class="btn btn-default">Thêm mới</button>
            <button type="reset" class="btn btn-default">Nhập lại</button>
            <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
        </div>
    </div>

</form>