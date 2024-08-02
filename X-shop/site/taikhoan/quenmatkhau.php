<?php
    require_once '../../global.php';
    
    require '../../dao/nguoidung.php';
    
    extract($_REQUEST);

    if (exist_param('btn_forgot')) {
    $TaiKhoan = $_POST['TaiKhoan'];
    $Email = $_POST['Email'];
    $ND = nguoidung_select_by_taikhoan($TaiKhoan);
    if($ND){
        if($ND['Email']!=$Email){
            $MESSAGE = "Email không đúng";
        }else{
            $MK = rand(0,999999999);
            $MatKhau_moi = md5($MK);
            nguoidung_change_password($ND['MaND'], $MatKhau_moi);
            $MESSAGE = 'Mật khẩu mới của bạn là: ' . $MK;
        }
    }else{
        $MESSAGE = 'Email không tồn tại!';
    }
    }
    $VIEW_NAME = 'quenmk-ui.php';

    require '../layout.php';
?>