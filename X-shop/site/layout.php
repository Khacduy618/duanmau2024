<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>X-Shop Technology</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="X-Shop">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <link rel="manifest" href="<?=$IMAGE_SITE_URL?>/icons/site.html">
    <link rel="mask-icon" href="<?=$IMAGE_SITE_URL?>/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="X-Shop">
    <meta name="application-name" content="X-Shop">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?=$IMAGE_SITE_URL?>/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../../assets/site/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/skins/skin-demo-3.css">
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/demos/demo-3.css">
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/main.min.css">
    <link rel="stylesheet" href="<?=$CSS_SITE_URL?>/style.css">
    
</head>
<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-3">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <ul>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">VNĐ</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="#">Eur</a></li>
                                                <li><a href="#">Usd</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div>
                                </li>
                                <li>
                                    <div class="header-dropdown">
                                        <a href="#">Vietnamese</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Spanish</a></li>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div>
                                </li>
                                <?php
                                    if(isset($_SESSION['nguoidung'])){
                                        require 'taikhoan/nguoidung.php';
                                    }else{
                                        echo '<li><a href="../taikhoan/index.php" >Sign in / Sign up</a></li>';
                                    }
                                ?>
                            </ul>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="../trangchinh" class="logo">
                            <img src="<?=$IMAGE_SITE_URL?>/demos/demo-3/x-shop.png" alt="Molla Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <?php
                            require 'trangchinh/search.php';
                        ?>
                    </div>

                    <div class="header-right">
                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                <div class="icon">
                                    <i class="icon-random"></i>
                                </div>
                                <p>So sánh</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="compare-products">
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                    </li>
                                    <li class="compare-product">
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                    </li>
                                </ul>

                                <div class="compare-actions">
                                    <a href="#" class="action-link">Xóa tất cả</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>So sánh</span><i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .compare-dropdown -->
                        <?php
                            if(isset($_SESSION['nguoidung'])){
                                echo '  <div class="wishlist">
                                            <a href="../donhang" title="Wishlist">
                                                <div class="icon">
                                                    <i class="icon-shopping-bag"></i>
                                                </div>
                                                <p>Đơn hàng của tôi</p>
                                            </a>
                                        </div>';
                            }
                        ?>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">
                                        <?php
                                            $cart=[];
                                            if(isset($_SESSION['mycart'])){
                                                $cart=$_SESSION['mycart'];
                                            }
                                            $count=0;
                                                if (is_array($cart) || is_object($cart)) {
                                                foreach ($cart as $item => $soluong){
                                                    $count += $soluong;
                                                }echo $count;
                                                }
                                        ?>
                                    </span>
                                </div>
                                <p>Giỏ hàng</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
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
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="<?=$hinh?>"><?=$truncatedTenSP?></a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty"><?=$_SESSION['mycart'][$MaSP]?></span>
                                                x <?=number_format($DonGia,0,",",".")?> đ
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="<?=$hinh?>" class="product-image">
                                                <img src="<?=$hinh?>" alt="product">
                                            </a>
                                        </figure>
                                        <?=$xoasp?>
                                    </div><!-- End .product -->
                                    <?php
                                            }}}}
                                        ?>
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Tổng</span>

                                    <span class="cart-total-price"><?=number_format($tong,0,",",".")?> đ</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="../giohang" class="btn btn-primary">Xem giỏ hàng</a>
                                    <a href="../thanhtoan" class="btn btn-primary">Thanh toán</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Danh sách loại sản phẩm <i class="icon-angle-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <?php require 'loaisanpham.php'; ?>
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <?php require 'menu.php'; ?>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
            
        </header><!-- End .header -->

        <main class="main">
            <?php require $VIEW_NAME;?>
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="<?=$IMAGE_SITE_URL?>/demos/demo-3/x-shop.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
	            				<p>*****************</p>

	            				<div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Đóng góp ý kiến? </br>
                                    Liên hệ đường dây nóng
                                    <a href="tel:#">+0123 456 789</a>         
                                </div><!-- End .widget-call -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Liên kết hữu ích</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Giới thiệu về X-Shop</a></li>
                                    <li><a href="#">Dịch vụ của chúng tôi</a></li>
	            					<li><a href="#">Cách mua sắm trên X-SHOP</a></li>
	            					<li><a href="#">Câu hỏi thường gặp</a></li>
	            					<li><a href="#">Liên hệ chúng tôi</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Dịch vụ khách hàng</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Phương thức thanh toán</a></li>
	            					<li><a href="#">Đảm bảo hoàn tiền!</a></li>
	            					<li><a href="#">Trả lại</a></li>
	            					<li><a href="#">Vận chuyển</a></li>
	            					<li><a href="#">Các điều khoản và điều kiện</a></li>
	            					<li><a href="#">Chính sách bảo mật</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget">
	            				<h4 class="widget-title">Tài khoản của tôi</h4><!-- End .widget-title -->

	            				<ul class="widget-list">
	            					<li><a href="#">Đăng nhập</a></li>
	            					<li><a href="#">Giỏ hàng</a></li>
	            					<li><a href="#">Theo dõi đơn hàng</a></li>
	            					<li><a href="#">Trợ giúp</a></li>
	            				</ul><!-- End .widget-list -->
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2024 X-Shop. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="<?=$IMAGE_SITE_URL?>/payments.png" alt="Payment methods">
	        		</figure><!-- End .footer-payments -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

  

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Mục lục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Loại SP</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <?php require 'menu.php'; ?>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <?php require 'loaisanpham.php'; ?>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

   
    
    <!-- Plugins JS File -->
    <script src="<?=$JS_SITE_URL?>/jquery.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/bootstrap.bundle.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/jquery.hoverIntent.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/jquery.waypoints.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/superfish.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/bootstrap-input-spinner.js"></script>
    <script src="<?=$JS_SITE_URL?>/jquery.plugin.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/jquery.magnific-popup.min.js"></script>
    <script src="<?=$JS_SITE_URL?>/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="<?=$JS_SITE_URL?>/main.js"></script>
    <script src="<?=$JS_SITE_URL?>/demos/demo-3.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?=$JS_SITE_URL?>/jquery-formvalidated.js"></script>
    <script src="<?=$JS_SITE_URL?>/owl.carousel.min.js"></script>
</body>

</html>