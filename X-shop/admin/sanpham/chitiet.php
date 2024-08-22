<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Chi tiết sản phẩm</h3>
<a href="./" class="btn btn-warning mt-2 me-2 mb-2 col-lg-2">Danh sách</a>
<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>Thông tin</th>
            <th>Giá trị</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tên sản phẩm</td>
            <td><?= $TenSP?></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td class="hinhanh"><?= $hinh1?> <?= $hinh2?> <?= $hinh3 ?></td>
        </tr>
        <tr>
            <td>Đơn giá</td>
            <td><?=number_format($DonGia,0,",",".")?>đ</td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td><?=($DMID == "5")?"Laptop":(($DMID == "6")?"Điện thoại":"Đồng hồ");?></td>
        </tr>
        <tr>
            <td>Giảm giá</td>
            <td><?= ($GiamGia*100)?>%</td>
        </tr>
        <tr>
            <td>Đặc biệt</td>
            <td><?= $DacBiet?></td>
        </tr>
        <tr>
            <td>Lượt xem</td>
            <td><?= $LuotXem?></td>
        </tr>
        <tr>
            <td>CPU</td>
            <td><?= $CPU?></td>
        </tr>
        <tr>
            <td>RAM</td>
            <td><?= $RAM?></td>
        </tr>
        <tr>
            <td>Ổ cứng</td>
            <td><?= $SSD_HDD?></td>
        </tr>
        <tr>
            <td>Card màn hình</td>
            <td><?= $GPU?></td>
        </tr>
        <tr>
            <td>Hệ điều hành</td>
            <td><?= $OS?></td>
        </tr>
        <tr>
            <td>Kích thước màn hình</td>
            <td><?= $kich_thuoc_man_hinh?></td>
        </tr>
        <tr>
            <td>Kích thước</td>
            <td><?= $kich_thuoc?></td>
        </tr>
        <tr>
            <td>Màu sắc</td>
            <td><?= $mau_sac?></td>
        </tr>
        <tr>
            <td>Chất liệu</td>
            <td><?= $chat_lieu?></td>
        </tr>
        <tr>
            <td>Cổng giao tiếp</td>
            <td><?= $cong_giao_tiep?></td>
        </tr>
        <tr>
            <td>Ngày nhập</td>
            <td><?= $ThoiGian?></td>
        </tr>
    </tbody>
</table>