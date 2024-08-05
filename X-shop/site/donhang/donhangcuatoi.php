<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Đơn hàng của tôi</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đơn hàng của tôi</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="container">
					<table class="table table-wishlist table-mobile">
						<thead>
							<tr>
								<th class="col-3">Mã đơn hàng</th>
								<th class="col-3">Ngày đặt</th>
								<th class="col-3">Tổng giá trị</th>
								<th class="col-3">Tình trạng đơn hàng</th>
							</tr>
						</thead>

						<tbody>
							<?php
								if(is_array($listbill)){
									foreach ($listbill as $bill) {
										extract($bill);
										$ttdh=get_ttdh($bill['TrangThai']);
							?>
							<tr>
								<td class="product-col">
										<h3 class="product-title">
											<?=$bill['MaHD']?>
										</h3><!-- End .product-title -->
								</td>
								<td class="price-col"><?=$bill['NgayTaoDon']?></td>
								<td class="stock-col"><span class="in-stock"><?=number_format($bill['TongTien'],0,",",".")?> đ</span></td>
								<td ><?=$ttdh?></td>
							</tr>
							<?php
								}
							}
							?>
						</tbody>
					</table><!-- End .table table-wishlist -->
	            	<div class="wishlist-share">
	            		<div class="social-icons social-icons-sm mb-2">
	            			<label class="social-label">Share on:</label>
	    					<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
	    					<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
	    					<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
	    					<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
	    					<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
	    				</div><!-- End .soial-icons -->
	            	</div><!-- End .wishlist-share -->
            	</div><!-- End .container -->
            </div><!-- End .page-content -->