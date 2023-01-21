        <?php
            if(strlen($MESSAGE)){
                echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post">
            <table class="table tbl">
                <thead class="alert-success">
                    <tr>
                    
                        <th>HÀNG HÓA</th>
                        <th>SỐ BL</th>
                        <th>MỚI NHẤT</th>
                        <th>CỦ NHẤT</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
               <?php                 
                    foreach ($items as $item) {
                        extract($item); 

                ?>      
                    <tr>
                        
                        <td><?=$ten_hh?></td>
                        <td><?=$so_luong?></td>
                        <td><?=$moi_nhat?></td>
                        <td><?=$cu_nhat?></td>                      
                        <td style="text-align: center;">
                            <a href="index.php?btn_detail&ma_hh=<?=$ma_hh?>" class="btn btn-default btn-sm">Chi tiết</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
              
            </table>
        </form>
