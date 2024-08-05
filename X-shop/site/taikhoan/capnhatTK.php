<?php
    require_once '../../global.php';
    require_once '../../dao/nguoidung.php';
    check_login();
    extract($_REQUEST);
    $GioiTinh = $GioiTinhErr= "";
    if(exist_param('update-tk')){
        $MaND = $_POST['MaND'];
        $Ho = $_POST['Ho'];
        $Ten = $_POST['Ten'];
        $Email = $_POST['Email'];
        $SDT = $_POST['SDT'];
        $DiaChi = $_POST['DiaChi'];
        if (empty($_POST["GioiTinh"])) {
            $GioiTinhErr = "GioiTinh is required";
          } else {
            $GioiTinh = $_POST["GioiTinh"];
          }
        $TaiKhoan = $_POST['TaiKhoan'];
        $MatKhau = $_POST['MatKhau'];
        $Quyen_ID = $_POST['Quyen_ID'];
        $TrangThai = $_POST['TrangThai'];
        $Hinh = save_file('Hinh', $UPLOAD_URL);
        try{
            nguoidung_update($MaND, $MatKhau, $TaiKhoan, $Ho, $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh, $Quyen_ID, $TrangThai);
            $MESSAGE = "Cập nhật thông tin thành viên thành công!";
            $_SESSION['nguoidung']= nguoidung_select_by_id($MaND);
        }catch(Exception $e){
            $MESSAGE = "Cập nhật thông tin thành viên thất bại! Vui lòng thử lại.";
        }
    }else{
        extract($_SESSION['nguoidung']);
    }
    $VIEW_NAME = 'taikhoan/capnhatTK-form.php';
    require '../layout.php';
?>