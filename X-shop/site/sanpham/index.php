<?php
    require_once '../../global.php';
    require '../../dao/giohang.php';
    require '../../dao/danhmuc.php';
    require '../../dao/sanpham.php';
    require '../../dao/loaisanpham.php';
    require '../../dao/binhluan.php';
    
    $listLoaiSP = loaisanpham_select_all();
    $listDM= danhmuc_select_all();
    $soLuongTrenTrang = 12;
    if(exist_param('LSP_ID')){
        $LSP_ID= $_GET['LSP_ID'];
        if(!isset($_GET['DMID'])){
            $DMID=0;
        }else{
            $DMID=$_GET['DMID'];
        }
        //kiểm tra có phải form search không
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        
        require_once '../sanpham/phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME='sanpham.php';
    }
    elseif (exist_param('kyw')) {
        $kyw= $_GET['kyw'];
        if(!isset($_GET['DMID'])){
            $DMID=0;
        }else{
            $DMID=$_GET['DMID'];
        }
        if(!isset($_GET['LSP_ID'])){
            $LSP_ID=0;
        }else{
            $LSP_ID=$_GET['LSP_ID'];
        }
        
        require_once '../sanpham/phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME='sanpham.php';
    }
    else{
        if(!isset($_GET['DMID'])){
            $DMID=0;
        }else{
            $DMID=$_GET['DMID'];
        }
        if(!isset($_GET['LSP_ID'])){
            $LSP_ID=0;
        }else{
            $LSP_ID=$_GET['LSP_ID'];
        }
        //kiểm tra có phải form search không
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        
        require_once 'phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME='sanpham.php';
    }
    
    require '../layout.php';
?>