
<div class="row">
    <div class="col-xl-5col d-none d-xl-block">
        <div class="banner">
            <a href="#">
                <img src="<?=$IMAGE_SITE_URL?>/demos/demo-3/banners/banner-4.jpg" alt="banner">
            </a>
        </div><!-- End .banner -->
    </div><!-- End .col-xl-5col -->

    <div class="col-xl-4-5col">
        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="special-tab" role="tabpanel" aria-labelledby="special-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <?php
                        foreach ($items_db as $db) {
                            extract($db);
                            $link = '../sanpham/index-chitiet.php?MaSP='.$MaSP;
                            $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                            $hinh1=$UPLOAD_URL.$HinhAnh1;
                            
                            $hinh2=$UPLOAD_URL.$HinhAnh2;
                            
                            $hinh3=$UPLOAD_URL.$HinhAnh3;
                    ?>
                    <div class="product product-2">
                    <figure class="product-media">
                        <!-- <span class="product-label label-circle label-top">Top</span> -->
                        <a href="<?=$link?>">
                            <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                            <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
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
                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                    <?php
                    }
                    ?>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trending-tv-tab" role="tabpanel" aria-labelledby="trending-tv-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <?php
                        foreach ($topview as $view) {
                            extract($view);
                            $link = '../sanpham/index-chitiet.php?MaSP='.$MaSP;
                            $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                            $hinh1=$UPLOAD_URL.$HinhAnh1;
                            
                            $hinh2=$UPLOAD_URL.$HinhAnh2;
                            
                            $hinh3=$UPLOAD_URL.$HinhAnh3;
                    ?>
                    <div class="product product-2">
                    <figure class="product-media">
                        <!-- <span class="product-label label-circle label-top">Top</span> -->
                        <a href="<?=$link?>">
                            <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                            <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
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
                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                    <?php
                    }
                    ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trending-computers-tab" role="tabpanel" aria-labelledby="trending-computers-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <?php
                        foreach ($topbanchay as $banchay) {
                            extract($banchay);
                            $link = '../sanpham/index-chitiet.php?MaSP='.$MaSP;
                            $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                            $hinh1=$UPLOAD_URL.$HinhAnh1;
                            
                            $hinh2=$UPLOAD_URL.$HinhAnh2;
                            
                            $hinh3=$UPLOAD_URL.$HinhAnh3;
                    ?>
                    <div class="product product-2">
                    <figure class="product-media">
                        <!-- <span class="product-label label-circle label-top">Top</span> -->
                        <a href="<?=$link?>">
                            <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                            <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
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
                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                    <?php
                    }
                    ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trending-phones-tab" role="tabpanel" aria-labelledby="trending-phones-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <?php
                        foreach ($itemws_new as $item) {
                            extract($item);
                            $link = '../sanpham/index-chitiet.php?MaSP='.$MaSP;
                            $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                            $hinh1=$UPLOAD_URL.$HinhAnh1;
                            
                            $hinh2=$UPLOAD_URL.$HinhAnh2;
                            
                            $hinh3=$UPLOAD_URL.$HinhAnh3;
                    ?>
                    <div class="product product-2">
                    <figure class="product-media">
                        <!-- <span class="product-label label-circle label-top">Top</span> -->
                        <a href="<?=$link?>">
                            <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                            <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
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
                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                    <?php
                    }
                    ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="trending-watches-tab" role="tabpanel" aria-labelledby="trending-watches-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <?php
                        foreach ($items_sale as $sale) {
                            extract($sale);
                            $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                            $hinh1=$UPLOAD_URL.$HinhAnh1;
                            
                            $hinh2=$UPLOAD_URL.$HinhAnh2;
                            
                            $hinh3=$UPLOAD_URL.$HinhAnh3;
                    ?>
                    <div class="product product-2">
                    <figure class="product-media">
                        <!-- <span class="product-label label-circle label-top">Top</span> -->
                        <a href="<?=$link?>">
                            <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                            <img src="<?=$hinh2?>" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div><!-- End .product-action -->

                        <div class="product-action product-action-dark">
                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                            <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
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
                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                    <?php
                    }
                    ?>
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
           
        </div><!-- End .tab-content -->
    </div><!-- End .col-xl-4-5col -->
</div><!-- End .row -->