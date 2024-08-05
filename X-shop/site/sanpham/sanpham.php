<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../trangchinh">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Hiển thị <span>8 của <?=$totalrecord?></span> Sản phẩm
                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sắp xếp theo:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control" onchange="this.options[this.selectedIndex].value && (window.location= this.options[this.selectedIndex].value);">
                                        <option value="0" selected="selected">---</option>
                                            <option <?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) {
                                                echo 'value="index.php?&LSP_ID='.$_GET['LSP_ID'].'&field=MaSP&sort=desc"';
                                            } echo 'value="index.php?field=MaSP&sort=desc"';?>> Mới</option>
                                            <option <?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) {
                                                echo 'value="index.php?&LSP_ID='.$_GET['LSP_ID'].'&field=DonGia&sort=desc"';
                                            }echo 'value="index.php?field=DonGia&sort=desc"';?> >Giá: Cao</option>
                                            <option <?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) {
                                                echo ' value="index.php?&LSP_ID='.$_GET['LSP_ID'].'&field=DonGia&sort=asc"';
                                            } echo ' value="index.php?field=DonGia&sort=asc"';?>>Giá: Thấp</option>
                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->
                        </div><!-- End .toolbox-right -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="row">
                            <?php
                            foreach ($items as $item) {
                                extract($item);
                                $link = 'index-chitiet.php?MaSP='.$MaSP;
                                $truncatedTenSP = substr($TenSP, 0, 39) . " . . .";
                                $hinh1=$UPLOAD_URL.$HinhAnh1;
                                
                                $hinh2=$UPLOAD_URL.$HinhAnh2;
                                
                                $hinh3=$UPLOAD_URL.$HinhAnh3;
                            ?>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="<?=$link?>">
                                            <img src="<?=$hinh1?>" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                        <form action="../giohang/index.php?addtocart" method="post">
                                            <input type="hidden" name="MaSP" value="<?=$MaSP?>'">
                                            <input type="hidden" name="TenSP" value="<?=$TenSP?>">
                                            <input type="hidden" name="HinhAnh1" value="<?=$HinhAnh1?>">
                                            <input type="hidden" name="Gia" value="<?=$DonGia?>">
                                            <input type="hidden" name="soluong[<?=$MaSP?>]" value="1">
                                            <input type="submit" name="addtocart" class="btn-product btn-cart" value=" Thêm vào giỏ hàng ">
                                        </form>
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
                            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                            <?php
                                }
                            ?>

                        </div><!-- End .row -->
                    </div><!-- End .products -->

                <?php 
                    if($totalrecord>8){
                ?>
                <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                                <?php
                                if ($current_page > 2) {
                                    $first_page = 1;
                                    ?>
                                    <li class="page-item"><a class="page-link" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $first_page ?>
                                    <?php }else{?>index.php?per_page=<?= $item_per_page ?>&page=<?= $first_page ?><?php } ?>">First</a></li>
                                    <?php
                                }
                                if ($current_page > 1) {
                                    $prev_page = $current_page - 1;
                                    ?>
                                    <li class="page-item"><a class="page-link page-link-prev" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>
                                        <?php }else{?>index.php?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?><?php } ?>"><i class="icon-long-arrow-left"></i>Prev</a></li>
                                <?php }
                                ?>
                                <?php for ($num = 1; $num <= $totalpages; $num++) { ?>
                                    <?php if ($num != $current_page) { ?>
                                        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                            <li class="page-item"><a class="page-link" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $num ?>
                                                <?php }else{?>index.php?per_page=<?= $item_per_page ?>&page=<?= $num ?> <?php } ?>"><?= $num ?></a></li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <li class="page-item active"><a class="page-link"><?= $num ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                                <?php
                                if ($current_page < $totalpages - 1) {
                                    $next_page = $current_page + 1;
                                    ?>
                                    <li class="page-item"><a class="page-link page-link-next" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $next_page ?>
                                    <?php }else{ ?>index.php?per_page=<?= $item_per_page ?>&page=<?= $next_page ?> <?php } ?>">Next<span><i class="icon-long-arrow-right"></i></span></a></li>
                                <?php
                                }
                                if ($current_page < $totalpages - 2) {
                                    $end_page = $totalpages;
                                    ?>
                                    <li class="page-item"><a class="page-link" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $end_page ?>
                                        <?php }else{ ?>index.php?per_page=<?= $item_per_page ?>&page=<?= $end_page ?> <?php } ?>">Last</a></li>
                                <?php
                                }
                                ?>
                            <!-- <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">of 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                <?php
                    }
                ?>
                    
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <form action="index.php">
                        <div class="widget widget-clean">
                            <label>Lọc:</label>
                            <a href="#" class="sidebar-filter-clear">Xóa tất cả</a>
                        </div><!-- End .widget widget-clean -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                    Danh mục
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items">
                                    <?php
                                        foreach ($listDM as $DM) {
                                            extract($DM);
                                    ?>
                                        <div class="filter-item">
                                            <div class="custom-control">
                                                <input class="custom-checkbox"  id="<?=$MaDM?>" type="radio" name="DMID" checked
                                                <?php if (isset($DMID) && $DMID==$MaDM) echo "checked";?>
                                                value="<?=$MaDM?>">
                                                <label class="custom-control-label" for="<?=$MaDM?>"><?=$TenDM?></label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->
                                    <?php
                                        }
                                    ?>
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
                                    Loại sản phẩm
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-2">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <?php
                                            foreach ($listLSP as $LSP) {
                                                extract($LSP);
                                        ?>
                                            <div class="filter-item">
                                                <div class="custom-control">
                                                    <input class="custom-checkbox"  id="<?=$MaLSP?>" type="radio" name="LSP_ID" checked
                                                    <?php if (isset($LSP_ID) && $LSP_ID==$MaLSP) echo "checked";?>
                                                    value="<?=$MaLSP?>">
                                                    <label class="custom-control-label" for="<?=$MaLSP?>"><?=$TenLSP?></label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .filter-item -->
                                        <?php
                                            }
                                        ?>
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                            <input type="submit" class="filter" value="">
                        </div><!-- End .widget -->
                                
                        </form>
                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->