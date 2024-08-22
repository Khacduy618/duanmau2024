<?php
    require_once "../../global.php";
    require_once "../../dao/binhluan.php";
    require_once "../../dao/thongke.php";
    check_login();
    extract($_REQUEST);

    if(exist_param("MaSP")){
        $items=binhluan_select_by_sanpham($MaSP);
        $VIEW_NAME= "detail.php";
    }elseif (exist_param("btn_delete")) {
        if(isset($_REQUEST['MaBL'])){
            binhluan_delete($_REQUEST['MaBL']);
            header("location: index.php");
            exit();
        }
    }
    else{
        
        $items=thong_ke_binhluan();
        $VIEW_NAME= "list.php";
    }

    require "../layout.php";

?>