<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" enctype="multipart/form-data" id="form_valid">
            <div class="form-group">
                <label>Mã danh mục</label>
                <input name="id_dm" value="auto number" class="form-control" readonly>
            </div>
            
            <div class="form-group">
                <label>Tên danh mục</label>
                <input name="ten_dm" class="form-control" >
            </div>
            <div class="form-group">
                <label>Hình</label>
                <input type="file" name="hinh" id="hinh" class="form-control">
            </div>

            <div class="form-group">
                <label>Ưu tiên</label>
                <input name="uu_tien" class="form-control">
            </div>
            <div class="form-group">
                <label>Hiển thị</label>
                <input name="hien_thi" class="form-control">
            </div>
            <div class="form-group">
                <button name="btn_insert" class="btn btn-default">Thêm mới</button>
                <button type="reset" class="btn btn-default">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-default">Danh sách</a>
            </div>
        </form>
 
            
    </body>
</html>
