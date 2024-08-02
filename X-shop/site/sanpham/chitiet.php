<main class="main">
<?php 
    extract($sanpham);
    $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
    $hinh1=$UPLOAD_URL.$HinhAnh1;
    $hinh2=$UPLOAD_URL.$HinhAnh2;
    $hinh3=$UPLOAD_URL.$HinhAnh3;
    $sp_cung_loai = sanpham_select_by_loaisanpham($LSP_ID);
    ?>
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?=$truncatedTenSP?></li>
                    </ol>

                    
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="<?=$hinh1?>" data-zoom-image="<?=$hinh1?>" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#" data-image="<?=$hinh1?>" data-zoom-image="<?=$hinh1?>">
                                                <img src="<?=$hinh1?>" alt="product side">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="<?=$hinh2?>" data-zoom-image="<?=$hinh2?>">
                                                <img src="<?=$hinh2?>" alt="product cross">
                                            </a>

                                            <a class="product-gallery-item" href="#" data-image="<?=$hinh3?>" data-zoom-image="<?=$hinh3?>">
                                                <img src="<?=$hinh3?>" alt="product with model">
                                            </a>
                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?=$TenSP?></h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <a class="ratings-text" href="#product-review-link" id="review-link"><?=$BL = count_BL_SP($MaSP);?> Bình luận</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        <?=number_format($DonGia-($DonGia*$GiamGia),0,",",".")?>đ
                                        <div class="old-price">
                                        <?php if($DonGia != ($DonGia - ($DonGia*$GiamGia))){
                                            echo ''.number_format($DonGia,0,",",".").' đ';
                                        }else
                                        {
                                           echo '';
                                        }?>
                                    </div><!-- End .product-price-old -->
                                    </div><!-- End .product-price -->

                                   

                                    <div class="product-content">
                                        <p><?=$ThongTin?></p>
                                    </div><!-- End .product-content -->

                                   
                                    <form action="../giohang/index.php?act=addtocart" id="form_incart" method="post">
                                            <input type="hidden" name="MaSP" value="<?=$MaSP?>'">
                                            <input type="hidden" name="TenSP" value="<?=$TenSP?>">
                                            <input type="hidden" name="HinhAnh1" value="<?=$HinhAnh1?>">
                                            <input type="hidden" name="Gia" value="<?=$DonGia?>">
                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" name="soluong[<?=$MaSP?>]" value="1" min="1" max="50" size="1"></br>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                            </br><input type="submit" name="addtocart" class="btn-product btn-cart" value="Thêm vào giỏ hàng">
                                        <div class="details-action-wrapper">
                                            <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                            <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->
                                    </form>

                                   
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Bình luận</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                    <ul>
                                        <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                        <li>Vivamus finibus vel mauris ut vehicula.</li>
                                        <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                    </ul>

                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            
                            <div class="tab-pane  fade show active" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <h3>Bình luận</h3>
                                    <?php require 'binhluan.php';?>
                                    
                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->
                    <h2 class="title text-center mb-4">Sản phẩm cùng loại</h2><!-- End .title text-center -->
                    <?php require 'sanpham_cungloai.php';?>
                </div><!-- End .container -->
            </div><!-- End .page-content -->