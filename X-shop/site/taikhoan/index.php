<?php
    require '../../global.php';
    require '../../dao/nguoidung.php';
    extract($_REQUEST);

    if(exist_param('btn_dangky')){
        $TaiKhoan = $_POST['TaiKhoan'];
        if(nguoidung_exist($TaiKhoan) == true){
            $MESSAGE = 'Người dùng đã tồn tại!';
        }else{
            $MatKhau = md5($_POST['MatKhau']);
            $Ho = $_POST['Ho'];
            $Ten = $_POST['Ten'];
            $GioiTinh = $_POST['GioiTinh'];
            $Email = $_POST['Email'];
            $Hinh = save_file('HinhAnh', $UPLOAD_URL);
            $SDT = $_POST['SDT'];
            $DiaChi = $_POST['DiaChi'];
            $Quyen_ID = $_POST['VaiTro'];
            $TrangThai = $_POST['TrangThai'];
            try{
                nguoidung_insert($MatKhau, $TaiKhoan, $Ho, $Ten, $GioiTinh, $SDT, $Email, $DiaChi, $Hinh, $Quyen_ID, $TrangThai);
                $MESSAGE = 'Đăng ký thành công!';
            }catch(Exception $e){
                $MESSAGE = 'Đăng ký thất bại!';
            }
        }
    }elseif(exist_param("btn_dangnhap")){
        $ND = nguoidung_select_by_taikhoan($TaiKhoan);
        if($ND){
            $MatKhau = md5($_POST['MatKhau']);
            if($ND['MatKhau']==$MatKhau){
                $MESSAGE = "Đăng nhập thành công";
                $_SESSION['nguoidung'] = $ND;
                //ghi nho
                if(exist_param("btn_ghinho")){
                    add_cookie("TaiKhoan", $TaiKhoan, 30);
                    add_cookie("MatKhau", $MatKhau, 30);
                }else{
                    delete_cookie("TaiKhoan");
                    delete_cookie("MatKhau");
                }
                //return trangchu
                    header('Location: ../trangchinh/');
                
            }else{
                $MESSAGE = "Mật khẩu không đúng";
            }
        }else{
            $MESSAGE = "Tài khoản không tồn tại";
        }
    }
    else{
        if(exist_param('btn_dangxuat')){
            session_unset();
        }
    }
    $TaiKhoan = get_cookie('TaiKhoan');
    $MatKhau = get_cookie('MatKhau');
    $VIEW_NAME = 'taikhoan/taikhoan.php';
    require '../layout.php';
?>