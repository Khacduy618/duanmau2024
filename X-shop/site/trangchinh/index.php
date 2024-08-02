<?php

    require '../../global.php';
    require '../../dao/danhmuc.php';
    require '../../dao/loaisanpham.php';
    require '../../dao/binhluan.php';

    if(exist_param('gioithieu')){
        $VIEW_NAME='trangchinh/gioithieu.php';
    }
    elseif (exist_param('lienhe')) {
        $VIEW_NAME='trangchinh/lienhe.php';
    }
    else{
        require_once '../../dao/sanpham.php';
        $topbanchay= sanpham_select_top10_BanChay();
        $topview   = sanpham_select_top10_LuotXem();
        $items_dm1 = sanpham_select_danhmuc(5);
        $items_dm2 = sanpham_select_danhmuc(6);
        $items_dm3 = sanpham_select_danhmuc(7);
        $items_db  = sanpham_select_DacBiet();
        $itemws_new= sanpham_select_all();
        $items_sale= sanpham_select_sale();
        // $items_all=sanpham_select_all_home();
        $VIEW_NAME='trangchinh/trangchu.php';
    }
    require '../layout.php';
?>