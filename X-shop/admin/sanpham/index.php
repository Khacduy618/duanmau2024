<?php
    require_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/sanpham.php");
    include_once ("../../dao/loaisanpham.php");
    include_once ("../../dao/danhmuc.php");
    check_login();
    extract($_REQUEST);
    $DacBiet = $DacBietErr = "";
    if(exist_param("btn_add")){
        $listDM= danhmuc_select_all();
        $listLSP = loaisanpham_select_all();
        $VIEW_NAME = "them.php";
    }elseif (exist_param("btn_insert")) {
        $LSP_ID=$_POST['LSP_ID'];
        $DMID=$_POST['DMID'];
        $TenSP=$_POST['TenSP'];
        $DonGia=$_POST['DonGia'];
        $GiamGia=$_POST['GiamGia'];
        $ThoiGian = $_POST['ThoiGian'];
        $ThongTin=$_POST['ThongTin'];
        if (empty($_POST["DacBiet"])) {
            $DacBietErr = "DacBiet is required";
          } else {
            $DacBiet = $_POST["DacBiet"];
          }
        $HinhAnh1 = save_file('HinhAnh1', $UPLOAD_URL);
        $HinhAnh2 = save_file('HinhAnh2', $UPLOAD_URL);
        $HinhAnh3 = save_file('HinhAnh3', $UPLOAD_URL);
        sanpham_insert($TenSP, $DonGia, $HinhAnh1, $HinhAnh2, $HinhAnh3, $GiamGia, $ThoiGian, $ThongTin, $DacBiet, $DMID, $LSP_ID);
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
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        require_once '../../site/sanpham/phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_edit")) {
        $MaSP = $_GET['MaSP'];
        $item=sanpham_select_by_id($MaSP);
        extract($item);
        $hinhpath=$UPLOAD_URL.$HinhAnh1;
        if(is_file($hinhpath)){
            $hinh1="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh1="nophoto";
        }
        $hinhpath=$UPLOAD_URL.$HinhAnh2;
        if(is_file($hinhpath)){
            $hinh2="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh2="nophoto";
        }
        $hinhpath=$UPLOAD_URL.$HinhAnh3;
        if(is_file($hinhpath)){
            $hinh3="<img src='".$hinhpath."' height='70'>";
        }else{
            $hinh3="nophoto";
        }
        $listDM= danhmuc_select_all();
        $listLSP= loaisanpham_select_all();
        $VIEW_NAME="capnhat.php";
    }elseif (exist_param("btn_delete")) {
        $MaSP = $_REQUEST['MaSP'];
        sanpham_delete($MaSP);
        $items=sanpham_select_all();
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_update")) {
        $MaSP= $_POST['MaSP'];
        $LSP_ID=$_POST['LSP_ID'];
        $DMID=$_POST['DMID'];
        $TenSP=$_POST['TenSP'];
        $DonGia=$_POST['DonGia'];
        $GiamGia=$_POST['GiamGia'];
        $ThoiGian = $_POST['ThoiGian'];
        $ThongTin=$_POST['ThongTin'];
        if (empty($_POST["DacBiet"])) {
            $DacBietErr = "DacBiet is required";
          } else {
            $DacBiet = $_POST["DacBiet"];
          }
        $HinhAnh1 = save_file('HinhAnh1', $UPLOAD_URL);
        $HinhAnh2 = save_file('HinhAnh2', $UPLOAD_URL);
        $HinhAnh3 = save_file('HinhAnh3', $UPLOAD_URL);
        sanpham_update($MaSP, $TenSP, $DonGia, $HinhAnh1, $HinhAnh2, $HinhAnh3, $GiamGia, $ThoiGian, $ThongTin, $DacBiet, $DMID, $LSP_ID);
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
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        require_once '../../site/sanpham/phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param('kyw')) {
        $kyw= $_GET['kyw'];
        require_once '../../site/sanpham/phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME = "danhsach.php";
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
        if(isset($_POST['kyw'])){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        require_once '../../site/sanpham/phantrang.php';
        $items = loadall_product($kyw, $orderCondition, $DMID, $LSP_ID, $item_per_page, $offset);
        $VIEW_NAME = "danhsach.php";
    }

    require "../layout.php";
?>