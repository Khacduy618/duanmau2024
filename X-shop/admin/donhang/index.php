<?php
    include_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/donhang.php");
    check_login();
    extract($_REQUEST);

    if(exist_param("btn_edit")) {
        $ID_DH = $_GET['ID_DH'];
        $item=loadone_bill($ID_DH);
        extract($item);
        $VIEW_NAME="capnhat.php";
    }elseif (exist_param("btn_update")) {
        $ID_DH = $_POST['ID_DH'];
        $NguoiNhan = $_POST['TenNN'];
        $SDT = $_POST['SDT'];
        $DiaChi = $_POST['DiaChi'];
        $ttdh = $_POST['TrangThai'];
        update_bill($ID_DH, $NguoiNhan, $SDT, $DiaChi, $ttdh);
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        
        require_once 'phantrang.php';
        $items=bill_page($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME="danhsach.php";
    }
    else{
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        
        require_once 'phantrang.php';
        $items=bill_page($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME = "danhsach.php";
        
    }

    require "../layout.php";
?>