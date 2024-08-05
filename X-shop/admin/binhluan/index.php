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
    }elseif (exist_param('kyw')) {
        $kyw= $_GET['kyw'];
        require_once 'phantrang.php';
        $items=thong_ke_binhluan($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME= "list.php";
    }
    else{
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        
        require_once 'phantrang.php';
        $items=thong_ke_binhluan($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME= "list.php";
    }

    require "../layout.php";

?>