
<div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
    data-owl-options='{
        "nav": false, 
        "dots": true,
        "margin": 20,
        "loop": false,
        "responsive": {
            "0": {
                "items":1
            },
            "480": {
                "items":2
            },
            "768": {
                "items":3
            },
            "992": {
                "items":4
            },
            "1200": {
                "items":4,
                "nav": true,
                "dots": false
            }
        }
    }'>
    <?php
    foreach ($sp_cung_loai as $sp) {
        extract($sp); 
        $link = '../sanpham/index-chitiet.php?MaSP='.$MaSP;
        $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
        $hinh1=$UPLOAD_URL.$HinhAnh1;
        $hinh2=$UPLOAD_URL.$HinhAnh2;
        $hinh3=$UPLOAD_URL.$HinhAnh3;
    ?>
    <div class="product product-7 text-center">
        <figure class="product-media">
            <span class="product-label label-new">New</span>
            <a href="<?=$link?>">
                <img src="<?=$hinh1?>" alt="Product image" class="product-image">
            </a>

            <div class="product-action-vertical">
                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
            </div><!-- End .product-action-vertical -->

            <div class="product-action">
                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
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
                <div class="ratings">
                    <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
                <span class="ratings-text">( 2 Reviews )</span>
            </div><!-- End .rating-container -->

            <div class="product-nav product-nav-thumbs">
                <a href="#" class="active">
                    <img src="<?=$hinh1?>" alt="product desc">
                </a>
                <a href="#">
                    <img src="<?=$hinh2?>" alt="product desc">
                </a>

                <a href="#">
                    <img src="<?=$hinh3?>" alt="product desc">
                </a>
            </div><!-- End .product-nav -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
    <?php
    }
    ?>
</div><!-- End .owl-carousel -->