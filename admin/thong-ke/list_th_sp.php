<table class="table tbl">
            <thead class="alert-success">
                <tr>
                    <th>THƯƠNG HIỆU</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($th_list as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_th?></td>
                    <td><?=$so_luong?></td>
                    <td><?=number_format($gia_min,2)?> đ</td>
                    <td><?=number_format($gia_max,2)?> đ</td>
                    <td><?=number_format($gia_avg,2)?> đ</td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        
        <div class="form-group">
            <a href="index.php?chart" class="btn btn-default">Xem biểu đồ</a>
        </div>