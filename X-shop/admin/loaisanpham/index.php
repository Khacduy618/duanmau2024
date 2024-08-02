<?php
    include_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/loaisanpham.php");
    include_once ("../../dao/danhmuc.php");
    check_login();
    extract($_REQUEST);

    if(exist_param("btn_add")){
        $VIEW_NAME= 'them.php';
        $data_dm=danhmuc_select_all();
    }
    elseif (exist_param("btn_insert")) {
        $TenLSP=$_POST['TenLSP'];
        if(loaisanpham_exist($TenLSP)==true){
            $MESSAGE = "Loại sản phẩm này đã tồn tại";
            if(isset($_POST['kyw'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            require_once 'phantrang.php';
            $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
            $VIEW_NAME = "danhsach.php";
        }else{
            try{
                $HinhAnh = save_file('HinhAnh', $UPLOAD_URL);
                $MoTa=$_POST['MoTa'];
                $MaDM=$_POST['MaDM'];
                loaisanpham_insert($TenLSP, $HinhAnh, $MoTa, $MaDM);
                $MESSAGE = 'Thêm mới thành công!';
                if(isset($_POST['kyw'])){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                require_once 'phantrang.php';
                $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
                $VIEW_NAME = "danhsach.php";
            }catch(Exception $e){
                $MESSAGE = 'Thêm mới thất bại!';
                if(isset($_POST['kyw'])){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                require_once 'phantrang.php';
                $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
                $VIEW_NAME = "danhsach.php";
            }
        }
        
    }elseif (exist_param("btn_edit")) {
        $MaLSP = $_GET['MaLSP'];
        $item=loaisanpham_select_by_id($MaLSP);
        extract($item);
        $hinhpath=$UPLOAD_URL . $HinhAnh;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh="nophoto";
        }
        $listDM=danhmuc_select_all();
        $VIEW_NAME="capnhat.php";
    }elseif (exist_param("btn_delete")) {
        $MaLSP = $_GET['MaLSP'];
        loaisanpham_delete($MaLSP);
        $items=loaisanpham_select_all();
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_update")) {
        $MaLSP = $_POST['MaLSP'];
        $TenLSP = $_POST['TenLSP'];
        if(loaisanpham_exist($TenLSP)==true){
            $MESSAGE = "Loại sản phẩm này đã tồn tại";
            if(isset($_POST['kyw'])){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            require_once 'phantrang.php';
            $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
            $VIEW_NAME = "danhsach.php";
        }else{
            try{
                $HinhAnh = save_file('HinhAnh', $UPLOAD_URL);
                $MoTa = $_POST['MoTa'];
                $MaDM = $_POST['MaDM'];
                loaisanpham_update($MaLSP, $TenLSP, $HinhAnh, $MoTa, $MaDM);
                $MESSAGE = 'Cập nhật thành công!';
                if(isset($_POST['kyw'])){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                require_once 'phantrang.php';
                $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
                $VIEW_NAME = "danhsach.php";
            }catch(Exception $e){
                $MESSAGE = 'Cập nhật thất bại!';
                if(isset($_POST['kyw'])){
                    $kyw=$_POST['kyw'];
                }else{
                    $kyw="";
                }
                require_once 'phantrang.php';
                $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
                $VIEW_NAME = "danhsach.php";
            }
        }
    }
    else{
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        require_once 'phantrang.php';
        $items=loaisanpham_page($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME = "danhsach.php";
        
    }

    require "../layout.php";
?>