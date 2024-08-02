<?php
require_once '../../global.php';
    if(strlen($MESSAGE)){
        echo '<h5>'.$MESSAGE.'</h5>';
    }
?>

<div class="row justify-content-center">
    <form action="doi-mk.php" class="col-4 m-4 " method="post">
        <div class="form-group">
                <label for="TaiKhoan">Tài khoản</label>
                <input type="text" class="form-control" id="TaiKhoan" name="TaiKhoan" required>
        </div>
        <div class="form-group">
            <label for="MatKhauCu">Mật khẩu cũ</label>
            <input type="text" class="form-control" id="MatKhauCu" name="MatKhau" required>
        </div>
        <div class="form-group">
            <label for="MatKhauMoi">Mật khẩu mới</label>
            <input type="text" class="form-control" id="MatKhauMoi" name="MatKhau2" required>
        </div>
        <div class="form-group">
            <label for="Xacnhanmatkhau">Xác nhận mật khẩu mới</label>
            <input type="text" class="form-control" id="Xacnhanmatkhau" name="MatKhau3" required>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_doimk">Gửi yêu cầu</button>
    </form>
</div>