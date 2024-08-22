<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Hóa đơn</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hóa đơn</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
                        <div class="article invoice">
                            <h5>Mã đơn hàng: <?=$MaHD?></h5>
                            <h6>Người dùng: <?=$_SESSION['nguoidung']['Ho'] . ' '. $_SESSION['nguoidung']['Ten']?></h6>
                            <h6>Số điện thoại: <?=$_SESSION['nguoidung']['SDT']?></h6>
                            <h6>Địa chỉ: <?=$_SESSION['nguoidung']['DiaChi']?></h6>
                            <h6>Phương thức thanh toán: <?=($donhang['PhuongThucTT'] == "a")?"Tiền mặt": (($donhang['PhuongThucTT']== "b")?"MoMo":(($donhang['PhuongThucTT'] == "c")?"Thẻ ghi nợ":"ZaloPay"));?></h6>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($chitietdonhang as $row) {
                                        extract($row);
                                        $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                        $hinh=$UPLOAD_URL.$HinhAnh1;
                                        ?>
                                    <tr>
                                        <td class="d-flex justify-content-start align-items-center">
                                            <div class="img_bill">
                                                <img src="<?=$hinh?>" alt="" style="width:100px; margin-right:10px;">
                                            </div>
                                            <span><?=$truncatedTenSP?></span>
                                        </td>
                                        <td><?=$SoLuong?></td>
                                        <td class="col-2"><?=number_format($DonGia, 0, ",", ".")?> đ</td>
                                        <td class="col-2"><?=number_format($DonGia * $SoLuong, 0, ",", ".")?> đ</td>
                                    </tr>
                                    <?php } ?>
                                        <tfoot>
                                        <td colspan=2></td>
                                        <td>Tổng tiền:</td>
                                        <td><?=number_format($donhang['TongTien'], 0, ",", ".")?> đ</td>
                                        </tfoot>
                                        
                                </tbody>
                            </table>
                        </div>           
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->

    