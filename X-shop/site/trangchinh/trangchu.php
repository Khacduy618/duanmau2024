<div class="intro-section pt-3 pb-3 mb-2">
                <div class="container">
                    <div class="row">

                        <?php require ('slider-banner.php'); ?>

                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .intro-section -->

            <div class="container featured">

                <?php require ('sp-danhmuc.php'); ?>

            </div><!-- End .container -->

            <div class="mb-7 mb-lg-11"></div><!-- End .mb-7 -->


    

            <div class="container">
                <hr class="mt-3 mb-6">
            </div><!-- End .container -->
    <!-- Filter Products -->
            <div class="container trending">
                <div class="heading heading-flex mb-3">
                    <div class="heading-left">
                        <h2 class="title">SẢN PHẨM</h2><!-- End .title -->
                    </div><!-- End .heading-left -->
                    <div class="heading-right">
                        <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="special-link" data-toggle="tab" href="#special-tab" role="tab" aria-controls="special-tab" aria-selected="true">Đặc biệt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trending-tv-link" data-toggle="tab" href="#trending-tv-tab" role="tab" aria-controls="trending-tv-tab" aria-selected="false">Top VIEWS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trending-computers-link" data-toggle="tab" href="#trending-computers-tab" role="tab" aria-controls="trending-computers-tab" aria-selected="false">Top bán chạy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trending-phones-link" data-toggle="tab" href="#trending-phones-tab" role="tab" aria-controls="trending-phones-tab" aria-selected="false">Sản phẩm mới</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="trending-watches-link" data-toggle="tab" href="#trending-watches-tab" role="tab" aria-controls="trending-watches-tab" aria-selected="false">Sản phẩm giảm giá</a>
                            </li>
                        </ul>
                    </div><!-- End .heading-right -->
                </div><!-- End .heading -->

                <?php   require 'filer-product.php'; ?>
                
            </div><!-- End .container -->

            <div class="container">
                <hr class="mt-5 mb-6">
            </div><!-- End .container -->