<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Thanh toán</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            
            			<form action="index.php?thanhtoan" id="form_thanhtoan" method ="POST">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Chi tiết hóa đơn</h2><!-- End .checkout-title -->
                                    <?php 
                                        if (isset($_SESSION['nguoidung'])) {
                                            $Ho=$_SESSION['nguoidung']['Ho'];
                                            $Ten=$_SESSION['nguoidung']['Ten'];
                                            $DiaChi=$_SESSION['nguoidung']['DiaChi'];
                                            $Email=$_SESSION['nguoidung']['Email'];
                                            $SDT=$_SESSION['nguoidung']['SDT'];
                                        }else {
                                            $Ho="";
                                            $Ten="";
                                            $DiaChi="";
                                            $Email="";
                                            $SDT="";
											
                                        } ?>
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Họ *</label>
		                						<input type="text" class="form-control" name="Ho" value="<?=$Ho?>">
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Tên *</label>
		                						<input type="text" class="form-control" name="Ten" value="<?=$Ten?>">
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Địa chỉ *</label>
	            						<input type="text" class="form-control" name="DiaChi" value="<?=$DiaChi?>">

	            						<div class="row">
                                            <div class="col-sm-6">
                                                <label>Email *</label>
                                                <input type="email" class="form-control" name="Email" value="<?=$Email?>">
                                            </div>
		                					<div class="col-sm-6">
		                						<label>Số điện thoại *</label>
		                						<input type="tel" class="form-control" name="SDT" value="<?=$SDT?>">
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Ghi chú (Tùy chọn)</label>
	        							<textarea class="form-control" cols="30" rows="4" name="GhiChu">Vui lòng nhập ghi chú</textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Giỏ hàng của bạn</h3><!-- End .summary-title -->
										<?php
											require_once '../../global.php';
												if(strlen($MESSAGE)){
													echo '<h5>'.$MESSAGE.'</h5>';
												}
										?>
		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Sản phẩm</th>
		                							<th>Tổng tiền</th>
		                						</tr>
		                					</thead>

		                					<tbody>
                                            <?php
                                                $conn=pdo_get_connection();
                                                $tong=0;
                                                if(!empty($_SESSION['mycart'])){
													
                                                $statement = $conn->query("SELECT * FROM sanpham where MaSP in (".implode(",", array_keys($_SESSION['mycart'])).")");
                                                if ($statement) {
                                                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                    $count=0;
                                                    foreach ($rows as $row) {
                                                        if (is_array($row)){
                                                            extract($row);
                                                            $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                                            $hinh=$UPLOAD_URL.$HinhAnh1;
                                                            $link='../sanpham/index-chitiet.php?MaSP='.$MaSP;
                                                            $ttien=$DonGia*$_SESSION['mycart'][$MaSP];
                                                            $tong+=$ttien;
                                                            $count += $_SESSION['mycart'][$MaSP];
                                                            $xoasp='<a href="index.php?delcart&MaSP='.$MaSP.'" class="btn-remove"><i class="icon-close"></i></a>';
                                                ?>
		                						<tr>
		                							<td><a href="<?=$link?>"><?=$truncatedTenSP?></a></td>
		                							<td class="d-flex justify-content-end align-items-center"><?=number_format($ttien,0,",",".")?> đ</td>
                                                    <input type="hidden" name="MaSP" value="<?=$MaSP?>">
                                                    <input type="hidden" name="soluong[<?=$MaSP?>]" value="<?=$_SESSION['mycart'][$MaSP]?>">
		                						</tr>
                                                <?php
                                            }}}}
                                        ?>
		                						<tr class="summary-subtotal">
		                							<td>Tổng:</td>
		                							<td><?=number_format($tong,0,",",".")?> đ</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Vận chuyển:</td>
		                							<td>Free shipping</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Tổng thanh toán:</td>
		                							<td><?=number_format($tong,0,",",".")?> đ</td>
		                						</tr><!-- End .summary-total -->
                                                
		                					</tbody>
		                				</table><!-- End .table table-summary -->
		                				<div class="form-group">
											<div class="row align-items-center">
												<input  id="TrangThai1" type="radio" name="PhuongThucTT"
												<?php if (isset($PhuongThucTT) && $PhuongThucTT=="a") echo "checked";?>
												value="a">
												<label for="TrangThai1">Tiền mặt</label>
											</div>
											<div class="row align-items-center">
												<input  id="TrangThai2" type="radio" name="PhuongThucTT"
												<?php if (isset($PhuongThucTT) && $PhuongThucTT=="b") echo "checked";?>
												value="b">
												<label for="TrangThai2">Chuyển khoản</label>
											</div>
											<div class="row align-items-center">
												<input  id="TrangThai3" type="radio" name="PhuongThucTT"
												<?php if (isset($PhuongThucTT) && $PhuongThucTT=="c") echo "checked";?>
												value="c">
												<label for="TrangThai3">Thẻ ghi nợ</label>
											</div>
											<div class="row align-items-center">
												<input  id="TrangThai4" type="radio" name="PhuongThucTT"
												<?php if (isset($TranPhuongThucTTgThai) && $PhuongThucTT=="d") echo "checked";?>
												value="d">
												<label for="TrangThai4">VNPay</label>
											</div>
										</div>
                                        <?php
                                            if(isset($_SESSION['nguoidung'])){
                                        ?>
                                            <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Đặt hàng</span>
		                					<span class="btn-hover-text">Tiến hành Kiểm tra</span>
		                				    </button>
                                        <?php  
                                            }else{?>
                                            <a class="btn btn-outline-primary-2 btn-order btn-block" href="../taikhoan">
                                                <span class="btn-text">Đăng ký trước khi thanh toán</span>
                                                <span class="btn-hover-text">Đi đến đăng ký</span>
		                				    </a>
                                        <?php    
                                        }
                                        ?>
		                				
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
                        
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->