
<table>
    <thead>
        <tr>
            <td>Tên người mua</td>
            <td>Giá</td>
            <td>Phương thức TT</td>
            <td>Trạng thái</td>
        </tr>
    </thead>

    <tbody>
    <?php
    foreach ($bill as $b) {
        extract($b);
        $ttdh = get_ttdh($TrangThai);
   
    ?>
        <tr>
            <td><?=$NguoiNhan?></td>
            <td><?=number_format($TongTien,0,",",".")?> đ</td>
            <td><?=($PhuongThucTT == "a")?"Tiền mặt": (($PhuongThucTT== "b")?"Chuyển khoản":(($PhuongThucTT == "c")?"Thẻ ghi nợ":"VNPay"));?></td>
            <td><span <?php if($TrangThai == "a"){
                echo 'class="status return" ';
            }elseif ($TrangThai == "b" || $TrangThai == "c") {
                echo 'class="status pending" ';
            }elseif ($TrangThai == "d") {
                echo 'class="status delivered" ';
            }else{
                echo 'class="status inProgress" ';
            } ?>><?=$ttdh?></span></td>
        </tr>

    <?php
            }
    ?>

        <!-- <tr>
            <td>Dell Laptop</td>
            <td>$110</td>
            <td>Due</td>
            <td><span class="status pending">Pending</span></td>
        </tr>

        <tr>
            <td>Apple Watch</td>
            <td>$1200</td>
            <td>Paid</td>
            <td><span class="status return">Return</span></td>
        </tr>

        <tr>
            <td>Addidas Shoes</td>
            <td>$620</td>
            <td>Due</td>
            <td><span class="status inProgress">In Progress</span></td>
        </tr>

        <tr>
            <td>Star Refrigerator</td>
            <td>$1200</td>
            <td>Paid</td>
            <td><span class="status delivered">Delivered</span></td>
        </tr>

        <tr>
            <td>Dell Laptop</td>
            <td>$110</td>
            <td>Due</td>
            <td><span class="status pending">Pending</span></td>
        </tr>

        <tr>
            <td>Apple Watch</td>
            <td>$1200</td>
            <td>Paid</td>
            <td><span class="status return">Return</span></td>
        </tr>

        <tr>
            <td>Addidas Shoes</td>
            <td>$620</td>
            <td>Due</td>
            <td><span class="status inProgress">In Progress</span></td>
        </tr> -->
    </tbody>
</table>