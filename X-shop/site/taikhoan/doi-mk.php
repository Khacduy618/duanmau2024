<?php
    require_once '../../global.php';
    require_once '../../dao/nguoidung.php';
    check_login();
    extract($_REQUEST);

    if(exist_param('btn_doimk')){
        $MatKhau = $_POST['MatKhau'];
        $MatKhau2 = $_POST['MatKhau2'];
        $MatKhau3 = $_POST['MatKhau3'];
        $TaiKhoan = $_POST['TaiKhoan'];
        $MatKhauMD5 = md5($MatKhau2);

        if($MatKhau2 != $MatKhau3){
            $MESSAGE = "Xác nhận mật khẩu mới không trùng!";
        }else{
            $user = nguoidung_select_by_taikhoan($TaiKhoan);
            if($user){
                if($user['MatKhau'] == md5($MatKhau)){
                    try{
                        nguoidung_update_matkhau($TaiKhoan, $MatKhauMD5);
                        $MESSAGE = "Cập nhật mật khẩu thành công!";
                    }catch(Exception $exc){
                        $MESSAGE = "Đổi mật khẩu thất bại!";
                    }
                }
                else{
                    $MESSAGE = "Mật khẩu không đúng!";
                }
            }
            else{
                $MESSAGE = "Tài khoản không tồn tại!";
            }
        }
    }
    $VIEW_NAME = 'taikhoan/doimatkhau.php';
    require '../layout.php';
?>