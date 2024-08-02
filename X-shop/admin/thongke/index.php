<?php
    require_once "../../global.php";
    require_once "../../dao/binhluan.php";
    require_once "../../dao/thongke.php";
    check_login();
    extract($_REQUEST);

    if(exist_param('chart')){
        $items=thong_ke_sanpham();
        $VIEW_NAME="chart.php";
    }else{
        $items_new = san_pham_moi_top_10();
        $items_selltop = san_pham_ban_chay();
        $items_nosell= san_pham_khong_co_luot_mua();
        $items=thong_ke_sanpham();
        $VIEW_NAME="list.php";
    }

    require "../layout.php";
?>