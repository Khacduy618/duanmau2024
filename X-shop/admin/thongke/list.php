<div class="graphBoxTK">
    <div class="box">
            <h3 class="alert alert-success">THỐNG KÊ SẢN PHẨM TỪNG LOẠI</h3>
        <table class="table">
            <thead class="alert alert-success">
                <tr>
                    <th>Loại sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($items as $item) {
                        extract($item);
                ?>
                    <tr>
                        <td><?=$TenLSP?></td>
                        <td><?=$SoLuong?></td>
                        <td><?=number_format($gia_max,0,",",".")?>đ</td>
                        <td><?=number_format($gia_min,0,",",".")?>đ</td>
                        <td><?=number_format($gia_avg,0,",",".")?>đ</td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="form-group">
            <a href="index.php?chart" class="btn btn-warning">Xem biểu đồ</a>
        </div>
    </div>
    <div class="box">
            <h3 class="alert alert-success">THỐNG KÊ SẢN PHẨM Ế - BÁN CHẠY - MỚI</h3>
            <div class="graphBoxTK1">
                <div class="boxTB">
                    <h4>Sản phẩm ế</h4>
                    <table class="table">
                        <thead class="alert alert-success">
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Giá bán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($items_nosell as $nosell) {
                                    extract($nosell);
                                    $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                    $hinh = $UPLOAD_URL . $HinhAnh1;
                            ?>
                                <tr>
                                    <td width="100px"><img src="<?=$hinh?>" alt=""></td>
                                    <td><?=$truncatedTenSP?></td>
                                    <td><?=number_format($DonGia,0,",",".")?>đ</td>
                                    
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="boxTB">
                    <h4>Sản phẩm bán chạy</h4>
                    <table class="table">
                        <thead class="alert alert-success">
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Giá bán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($items_selltop as $selltop) {
                                    extract($selltop);
                                    $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                    $hinh = $UPLOAD_URL . $HinhAnh1;
                            ?>
                                <tr>
                                    <td width="100px"><img src="<?=$hinh?>" alt=""></td>
                                    <td><?=$truncatedTenSP?></td>
                                    <td><?=number_format($DonGia,0,",",".")?>đ</td>
                                    
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="boxTB">
                    <h4>Sản phẩm mới nhất</h4>
                    <table class="table">
                        <thead class="alert alert-success">
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Sản phẩm</th>
                                <th>Giá bán</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($items_new as $new) {
                                    extract($new);
                                    $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                    $hinh = $UPLOAD_URL . $HinhAnh1;
                            ?>
                                <tr>
                                    <td width="100px"><img src="<?=$hinh?>" alt=""></td>
                                    <td><?=$truncatedTenSP?></td>
                                    <td><?=number_format($DonGia,0,",",".")?>đ</td>
                                    
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        
        <div class="form-group">
            <a href="index.php?chart" class="btn btn-warning">Xem biểu đồ</a>
        </div>
    </div>
</div>