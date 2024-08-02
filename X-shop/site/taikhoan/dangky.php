<?php
    require_once '../../global.php';
        if(strlen($MESSAGE)){
            echo '<h5>'.$MESSAGE.'</h5>';
        }
?>
<form action="index.php" method="post" id="form_dangky" enctype="multipart/form-data">
    <div class="form-group">
        <label for="TaiKhoan">Tài khoản *</label>
        <input type="text" class="form-control" id="TaiKhoan" name="TaiKhoan" >
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="MatKhau">Mật khẩu *</label>
        <input type="password" class="form-control" id="MatKhau" name="MatKhau" >
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="MatKhau2">Nhập lại mật khẩu*</label>
        <input type="password" class="form-control" id="MatKhau2" name="MatKhau2" >
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="Email">Email *</label>
        <input type="email" class="form-control" id="Email" name="Email" >
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="Ho">Họ *</label>
        <input type="text" class="form-control" id="Ho" name="Ho" >
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="Ten">Tên *</label>
        <input type="text" class="form-control" id="Ten" name="Ten" >
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="GioiTinh">Giới tính:</label>
        <div class="row col-lg-4 justify-content-between">
                <div class="row col-6 align-items-center justify-content-between">
                    <input  id="GioiTinh1" type="radio" name="GioiTinh" checked
                    <?php if (isset($GioiTinh) && $GioiTinh=="1") echo "checked";?>
                    value="1">
                    <label class="m-0" for="GioiTinh1">Nam</label>
                </div>
                <div class="row col-5 align-items-center justify-content-between">
                    <input id="GioiTinh2" type="radio" name="GioiTinh"
                    <?php if (isset($GioiTinh) && $GioiTinh=="0") echo "checked";?>
                    value="0">
                    <label class="m-0" for="GioiTinh2">Nữ</label>
                </div>
        </div>
    </div>

    <div class="form-group">
        <label for="HinhAnh">Hình ảnh *</label>
        <input type="file" class="form-control" id="HinhAnh" name="HinhAnh" >
    </div><!-- End .form-group -->

    <div class="form-footer">
        <input type="hidden" name="DiaChi" value="">
        <input type="hidden" name="SDT" value="">
        <input type="hidden" name="VaiTro" value="3">
        <input type="hidden" name="TrangThai" value="1">
        <input type="submit" name="btn_dangky" class="btn btn-outline-primary-2" value="Đăng ký">

    </div><!-- End .form-footer -->
</form>