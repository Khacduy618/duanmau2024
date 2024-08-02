<?php 
    require_once '../../global.php';
    require_once '../../dao/loaisanpham.php';
    $listLSP = loaisanpham_select_all();
?>
    
<nav class="side-nav">
    <ul class="menu-vertical sf-arrows">
        <?php 
        foreach ($listLSP as $LSP) {
            extract($LSP);
            $link = '../sanpham/index.php?LSP_ID='.$MaLSP;
        ?>
        <li class="item-lead"><a href="<?=$link?>"><?=$TenLSP?></a></li>
        <?php
            }
        ?>
    </ul><!-- End .menu-vertical -->
</nav><!-- End .side-nav -->
