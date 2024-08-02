<?php
    foreach ($binhluan_list as $bl) {
        extract($bl);
?>
<div class="review">
    <div class="row no-gutters">
        <div class="col-auto">
            <h4><?=$ND_ID?></h4>
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                </div><!-- End .ratings -->
            </div><!-- End .rating-container -->
            <span class="review-date"><?=$NgayBL?></span>
        </div><!-- End .col -->
        <div class="col">
            <div class="review-content">
                <p><?=$NoiDung?></p>
            </div><!-- End .review-content -->

            <div class="review-action">
                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
            </div><!-- End .review-action -->
        </div><!-- End .col-auto -->
    </div><!-- End .row -->
</div><!-- End .review -->
<?php
    }
?>
<?php
    if(!isset($_SESSION['nguoidung'])){
        echo '<div class="text-center">Bạn cần đăng nhập để bình luận về sản phẩm này.</div>';
    }else{
        ?>
    <form action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
        <div class="form-group">
            <textarea class="form-control" id="NoiDung" name="NoiDung" rows="3" placeholder="Nhập nội dung bình luận..."></textarea>
        </div>
        <button type="submit" name="btn_noidung" class="btn btn-primary">Gửi bình luận</button>
    </form>
<?php
   }
?>
