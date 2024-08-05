<?php
    include_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/nguoidung.php");
    include_once ("../../dao/quyen.php");
    check_login();
    extract($_REQUEST);
    $GioiTinh = $GioiTinhErr = "";
    $TrangThai = $TrangThaiErr = "";
    if(exist_param("btn_add")){
        $VIEW_NAME = "them.php";
        $listQuyen = phanquyen_select_all();
    }elseif (exist_param("btn_insert")) {
        $MatKhau=md5($_POST['MatKhau']);
        $TaiKhoan=$_POST['TaiKhoan'];
        $Ho=$_POST['Ho'];
        $Ten=$_POST['Ten'];
        if (empty($_POST["GioiTinh"])) {
            $GioiTinhErr = "GioiTinh is required";
          } else {
            $GioiTinh = $_POST["GioiTinh"];
          }
        $SDT=$_POST['SDT'];
        $Email=$_POST['Email'];
        $DiaChi=$_POST['DiaChi'];
        $Hinh = save_file('Hinh', $UPLOAD_URL);
        $Quyen_ID=$_POST['VaiTro'];
        if (empty($_POST["TrangThai"])) {
            $TrangThaiErr = "TrangThai is required";
          } else {
            $TrangThai = $_POST["TrangThai"];
          }
        nguoidung_insert($MatKhau, $TaiKhoan, $Ho,  $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh,  $Quyen_ID, $TrangThai);
        if(isset($_POST['kyw'])){
          $kyw=$_POST['kyw'];
      }else{
          $kyw="";
      }
      require_once 'phantrang.php';
      $items = nguoidung_select_all($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_delete")) {
        check_admin_permission();
        $MaND = $_REQUEST['MaND'];
        nguoidung_delete($MaND);
        if(isset($_POST['kyw'])){
          $kyw=$_POST['kyw'];
      }else{
          $kyw="";
      }
      require_once 'phantrang.php';
      $items = nguoidung_select_all($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param("btn_edit")) {
      $MaND = $_REQUEST['MaND'];
      $listQuyen = phanquyen_select_all();
      $item=nguoidung_select_by_id($MaND);
      extract($item);
      $hinhpath=$UPLOAD_URL.$Hinh;
      if(is_file($hinhpath)){
          $hinh="<img src='".$hinhpath."' height='70'>";
      }else{
          $hinh="nophoto";
      }
      $VIEW_NAME="capnhat.php";
  }elseif (exist_param("btn_update")) {
        $MaND= $_POST['MaND'];
        $MatKhau=md5($_POST['MatKhau']);
        $TaiKhoan=$_POST['TaiKhoan'];
        $Ho=$_POST['Ho'];
        $Ten=$_POST['Ten'];
        if (empty($_POST["GioiTinh"])) {
            $GioiTinhErr = "GioiTinh is required";
          } else {
            $GioiTinh = $_POST["GioiTinh"];
          }
        $SDT=$_POST['SDT'];
        $Email=$_POST['Email'];
        $DiaChi=$_POST['DiaChi'];
        $Hinh = save_file('Hinh', $UPLOAD_URL);
        $Quyen_ID=$_POST['VaiTro'];
        if (empty($_POST["TrangThai"])) {
            $TrangThaiErr = "TrangThai is required";
          } else {
            $TrangThai = $_POST["TrangThai"];
          }
        nguoidung_update($MaND, $MatKhau, $TaiKhoan, $Ho, $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh,  $Quyen_ID, $TrangThai);
        if(isset($_POST['kyw'])){
          $kyw=$_POST['kyw'];
      }else{
          $kyw="";
      }
      require_once 'phantrang.php';
      $items = nguoidung_select_all($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME="danhsach.php";
    }elseif (exist_param('kyw')) {
        $kyw= $_GET['kyw'];
         require_once 'phantrang.php';
    $items = nguoidung_select_all($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME = "danhsach.php";
    }
    else{
      if(isset($_POST['kyw'])){
        $kyw=$_POST['kyw'];
        }else{
        $kyw="";
        }
    require_once 'phantrang.php';
    $items = nguoidung_select_all($kyw, $orderCondition, $item_per_page, $offset);
        $VIEW_NAME = "danhsach.php";
        
    }

    require "../layout.php";
?>