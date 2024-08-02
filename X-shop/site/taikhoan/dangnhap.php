<?php
$TaiKhoan = get_cookie('TaiKhoan');
$MatKhau = get_cookie('MatKhau');
    if(strlen($MESSAGE)){
        echo '<h5>'.$MESSAGE.'</h5>';
    }
?>
<form action="index.php" method="post">
    <div class="form-group">
        <label for="singin-email-2">Tài khoản</label>
        <input type="text" class="form-control" id="singin-email-2" value="<?=$TaiKhoan?>" name="TaiKhoan" placeholder="Vui lòng nhập tài khoản hoặc email..." required>
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="singin-password-2">Mật khẩu</label>
        <input type="password" class="form-control" id="singin-password-2" value="<?=$MatKhau?>" name="MatKhau" placeholder="Vui lòng nhập mật khẩu..." required>
    </div><!-- End .form-group -->

    <div class="form-footer">
        <button type="submit" name="btn_dangnhap" class="btn btn-outline-primary-2">
            <span>Đăng nhập</span>
            <i class="icon-long-arrow-right"></i>
        </button>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="btn_ghinho" id="signin-remember-2">
            <label class="custom-control-label" for="signin-remember-2">Remember Me</label>
        </div><!-- End .custom-checkbox -->

        <a href="quenmatkhau.php" class="forgot-link">Forgot Your Password?</a>
    </div><!-- End .form-footer -->
</form>