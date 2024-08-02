<?php
    include_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/danhmuc.php");

    check_login();
    extract($_REQUEST);
    

    if(exist_param("btn_add")){
        $VIEW_NAME= 'them.php';
        $items=danhmuc_select_all();
        $data_dm=danhmuc_select_all();
    }elseif (exist_param("btn_insert")) {
        $TenDM=$_POST['TenDM'];
        if(danhmuc_exist($TenDM)==true){
            $MESSAGE = "Danh mục này đã tồn tại";
            $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
        }else{
            try{
                danhmuc_insert($TenDM);
                $MESSAGE = 'Thêm mới thành công!';
                $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
            }catch(Exception $e){
                $MESSAGE = 'Thêm mới thất bại!';
                $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
            }
        }
    }elseif (exist_param("btn_edit")) {
        $MaDM = $_GET['MaDM'];
        $item=danhmuc_select_by_id($MaDM);
        extract($item);
        $items=danhmuc_select_all();
        $VIEW_NAME="capnhat.php";
    }elseif (exist_param("btn_delete")) {
        $MaDM = $_GET['MaDM'];
        danhmuc_delete($MaDM);
        $items=danhmuc_select_all();
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_update")) {
        $MaDM = $_POST['MaDM'];
        $TenDM = $_POST['TenDM'];
        if(danhmuc_exist($TenDM)==true){
            $MESSAGE = "Danh mục đã tồn tại";
            $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
        }else{
            try{
                danhmuc_update($MaDM, $TenDM);
                $MESSAGE = 'Cập nhật thành công!';
                $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
            }catch(Exception $e){
                $MESSAGE = 'Cập nhật thất bại!';
                $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
            }
        }
    }
    else{
        $items=danhmuc_select_all();
        $VIEW_NAME = "danhsach.php";
    }

    require_once "../layout.php";
?>