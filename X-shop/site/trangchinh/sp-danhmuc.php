    <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Laptop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">Điện thoại</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Đồng hồ</a>
        </li>
    </ul>
<div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                            <?php
                            foreach ($items_dm1 as $dm1) {
                                extract($dm1);
                                $link = '../sanpham/index-chitiet.php?MaSP='.$MaSP;
                                $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                $hinh1=$UPLOAD_URL.$HinhAnh1;
                                
                                $hinh2=$UPLOAD_URL.$HinhAnh2;
                                
                                $hinh3=$UPLOAD_URL.$HinhAnh3;
                                
                            ?>
                             <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="<?=$link?>">
                                        <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                                        <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>Add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>Add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="<?=$link?>"><?=$truncatedTenSP?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?=number_format($DonGia-($DonGia*$GiamGia),0,",",".")?> đ
                                    </div><!-- End .product-price -->
                                    <div class="old-price">
                                        <?php if($DonGia != ($DonGia - ($DonGia*$GiamGia))){
                                            echo ''.number_format($DonGia,0,",",".").' đ';
                                        }else
                                        {
                                        echo '';
                                        }?>
                                    </div><!-- End .product-price-old -->
                                    <div class="ratings-container">
                                        <span class="ratings-text"><?=$BL = count_BL_SP($MaSP);?> Bình luận</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            <?php
                            }
                            ?>
                           
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                            <?php
                            foreach ($items_dm2 as $dm2) {
                                extract($dm2);
                                $link = '../sanpham/index.php?MaSP='.$MaSP;
                                $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                $hinh1=$UPLOAD_URL.$HinhAnh1;
                                
                                $hinh2=$UPLOAD_URL.$HinhAnh2;
                                
                                $hinh3=$UPLOAD_URL.$HinhAnh3;
                                
                            ?>
                             <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="<?=$link?>">
                                        <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                                        <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>Add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>Add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="<?=$link?>"><?=$truncatedTenSP?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?=number_format($DonGia,0,",",".")?>đ
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text"><?=$BL = count_BL_SP($MaSP);?> Bình luận</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            <?php
                            }
                            ?>
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
                        <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                            <?php
                            foreach ($items_dm3 as $dm3) {
                                extract($dm3);
                                $link = '../sanpham/index.php?MaSP='.$MaSP;
                                $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                $hinh1=$UPLOAD_URL.$HinhAnh1;
                                
                                $hinh2=$UPLOAD_URL.$HinhAnh2;
                                
                                $hinh3=$UPLOAD_URL.$HinhAnh3;
                                
                            ?>
                             <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="<?=$link?>">
                                        <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                                        <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>Add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>Add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="<?=$link?>"><?=$truncatedTenSP?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?=number_format($DonGia,0,",",".")?>đ
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text"><?=$BL = count_BL_SP($MaSP);?> Bình luận</span>
                                    </div><!-- End .rating-container -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            <?php
                            }
                            ?>
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->