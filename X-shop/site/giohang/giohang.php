<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Giỏ hàng của tôi</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
                        <form action="index.php?sub" class="row" method="POST">
                            <div class="col-lg-9">
                                <table class="table table-cart table-mobile">
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                            <th></th>
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
                                                    
                                                    $hinh=$UPLOAD_URL.$HinhAnh1;
                                                    $link='../sanpham/index-chitiet.php?MaSP='.$MaSP;
                                                    $ttien=$DonGia*$_SESSION['mycart'][$MaSP];
                                                    $tong+=$ttien;
                                                    $count += $_SESSION['mycart'][$MaSP];
                                                    $xoasp='<a href="index.php?delcart&MaSP='.$MaSP.'" class="btn-remove"><i class="icon-close"></i></a>';
                                        ?>
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <a href="<?=$link?>">
                                                            <img src="<?=$hinh?>" alt="Product image">
                                                        </a>
                                                    </figure>

                                                    <h3 class="product-title">
                                                        <a href="<?=$link?>"><?=$TenSP?></a>
                                                    </h3><!-- End .product-title -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td class="price-col"><?=number_format($DonGia,0,",",".")?> đ</td>
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="text" class="form-control" name="soluong[<?=$MaSP?>]"  value="<?=$_SESSION['mycart'][$MaSP]?>" min="0" max="100" size="1">
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <td class="total-col"><?=number_format($ttien,0,",",".")?> đ</td>
                                            <td class="remove-col"><?=$xoasp?></td>
                                        </tr>
                                        <?php
                                            }}}}
                                        ?>
                                    </tbody>
                                </table><!-- End .table table-wishlist -->

                                <div class="cart-bottom">
                                    <a href="index.php?delall&del=1" class="btn btn-outline-dark-2"><span>Xóa tất cả</span><i class="icon-close"></i></a>
                                    <div class="btn btn-outline-dark-2"><button type="submit" name="update_click">Cập nhật</button><i class="icon-refresh"></i></div>
                                    <!-- <a href="index.php?update_cart" class="btn btn-outline-dark-2"><span>Cập nhật giỏ hàng</span><i class="icon-refresh"></i></a> -->
                                </div><!-- End .cart-bottom -->
                            </div><!-- End .col-lg-9 -->
                                <aside class="col-lg-3">
                                    <div class="summary summary-cart">
                                        <div class="row justify-content-between">
                                            <h3 class="summary-title">Tổng giỏ hàng</h3>
                                            <span><?=$count?> sản phẩm</span>
                                        </div>
                                        <table class="table table-summary">
                                            <tbody>
                                                <tr class="summary-subtotal">
                                                    <td>Tổng:</td>
                                                    <td><?=number_format($tong,0,",",".")?> đ</td>
                                                </tr><!-- End .summary-subtotal -->


                                                <tr class="summary-total">
                                                    <td>Tổng thanh toán:</td>
                                                    <td><?=number_format($tong,0,",",".")?> đ</td>
                                                </tr><!-- End .summary-total -->
                                            </tbody>
                                        </table><!-- End .table table-summary -->
                                        <?php if(isset($_SESSION['nguoidung'])){
                                                echo ' <a href="../thanhtoan" class="btn btn-outline-primary-2 btn-order btn-block">ĐI ĐẾN THANH TOÁN</a>';
                                            }else{
                                                echo '<a href="../taikhoan" class="btn btn-outline-primary-2 btn-order btn-block">ĐĂNG KÝ ĐỂ MUA HÀNG!</a>';
                                            } ?> 
                                        
                                    </div><!-- End .summary -->

                                <a href="../sanpham" class="btn btn-outline-dark-2 btn-block mb-3"><span>Quay lại cửa hàng</span><i class="icon-refresh"></i></a>
                            </aside><!-- End .col-lg-3 -->
                        </form>
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->