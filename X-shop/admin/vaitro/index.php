<?php
    include_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/quyen.php");
    check_login();
    extract($_REQUEST);

    if(exist_param("btn_add")){
        $VIEW_NAME='them.php';
    }elseif (exist_param("btn_insert")) {
        $TenQuyen=$_POST['TenQuyen'];
        phanquyen_insert($TenQuyen);
        $items=phanquyen_select_all();
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_edit")) {
        $MaQuyen = $_GET['MaQuyen'];
        $item=phanquyen_select_by_id($MaQuyen);
        extract($item);
        $items=phanquyen_select_all();
        $VIEW_NAME="capnhat.php";
    }elseif (exist_param("btn_delete")) {
        $MaQuyen = $_GET['MaQuyen'];
        phanquyen_delete($MaQuyen);
        $items=phanquyen_select_all();
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_update")) {
        $MaQuyen = $_POST['MaQuyen'];
        $TenQuyen = $_POST['TenQuyen'];
        phanquyen_update($MaQuyen, $TenQuyen);
        $items=phanquyen_select_all();
        $VIEW_NAME="danhsach.php";
    }
    else{
        $items=phanquyen_select_all();
        $VIEW_NAME = "danhsach.php";
    }

    require "../layout.php";
?>