<style>
    /* =========Lịch sử đơn hàng================ */
.lichsudonhang {
    padding-top: 140px;
    background-color: #fff;
    padding-bottom: 10px;
    max-width: 1200px;
     margin: auto;
    
}
.lichsudonhang .tieude{
    border-bottom: 2px solid #ff0202;
    margin: 30px 10px;

}
.lichsudonhang .tieude h2{
    background-color: #ff0202;
    color: #fff;
    font-size: 20px;
    padding: 10px;
    width: 250px;
    text-align: center;
    font-weight: 700;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    margin-bottom: 0px;
}
.lichsudonhang .banglsdonhang{
    margin: 30px 10px;
    overflow: auto;
    
}
.lichsudonhang .banglsdonhang table{
    width: 1180px;
}
.lichsudonhang .banglsdonhang table tr th,
.lichsudonhang .banglsdonhang table tr td{
    border: 1px solid rgb(213, 213, 213);
    padding: 10px 10px;
    text-align: center;
    font-size: 12px;
}
.lichsudonhang .banglsdonhang table tr th{
    font-weight: 500;
    color: #fff;
    background-color: rgb(34, 34, 34);
    
}

</style>
<div class="lichsudonhang">
    <div class="tieude">
        <h2>LỊCH SỬ ĐƠN HÀNG</h2>
    </div>
    <div class="banglsdonhang">
        <table>
            <tr>
                <th>ID đơn hàng</th>
                <th>Tên người mua</th>
                <th>Số điện thoại</th>
                <th>Số lượng sản phẩm đã mua</th>
                <th>Địa chỉ giao hàng</th>
                <th>Tổng giá sản phẩm</th>
                <th>Thời gian mua</th>
                <th>Trạng thái đơn hàng</th>

            </tr>
            <?php foreach ($items as $item) {
                extract($item);
            ?>
            <tr>
                <td>#<?=$id_dh?></td>
                <td><?=$ten_nguoi_nhan?></td>
                <td><?=$sdt?></td>
                <td><?=$tong_so_luong?></td>
                <td><?=$dia_chi?></td>
                <td><?=number_format($tong_tien)?> đ</td>
                <td><?=$ngay_xuat?></td>
                <td><?=$trang_thai?></td>
            </tr>
        <?php }?>
        </table>
    </div>
 </div>