
<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Cập nhật người dùng</h3>
        
    <form action="index.php" class="bg-white border p-3 rounded row" id="form_nguoidung" method="post" enctype="multipart/form-data">
        <div class="form-group col-lg-5 me-3">
            <label for="Ho">Họ:</label>
            <input type="text" class="form-control" name="Ho" id="Ho" value="<?=$Ho?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="Ten">Tên:</label>
            <input type="text" class="form-control" name="Ten" id="Ten" value="<?=$Ten?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="GioiTinh">Giới tính:</label>
            <div class="form-group">
                    <input class="form-check-input me-1" id="GioiTinh1" type="radio" name="GioiTinh"
                    <?php if (isset($GioiTinh) && $GioiTinh=="1") echo "checked";?>
                    value="1">
                    <label class="form-check-label me-3" for="GioiTinh1">Nam</label>

                    <input class="form-check-input me-1" id="GioiTinh2" type="radio" name="GioiTinh"
                    <?php if (isset($GioiTinh) && $GioiTinh=="0") echo "checked";?>
                    value="0">
                    <label class="form-check-label" for="GioiTinh2">Nữ</label>
            </div>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="SDT">Số điện thoại:</label>
            <input type="text" class="form-control" name="SDT" id="SDT" value="<?=$SDT?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="Email">Email:</label>
            <input type="email" class="form-control" name="Email" id="Email" value="<?=$Email?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="DiaChi">Địa chỉ:</label>
            <input type="text" class="form-control" name="DiaChi" id="DiaChi" value="<?=$DiaChi?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="TaiKhoan">Tài khoản:</label>
            <input type="text" class="form-control" name="TaiKhoan" id="TaiKhoan" value="<?=$TaiKhoan?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="MatKhau">Mật khẩu:</label>
            <input type="password" class="form-control" name="MatKhau" id="MatKhau" value="<?=$MatKhau?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="VaiTro">Vai trò</label>
            <select class="form-control" name="VaiTro" id="VaiTro" required>
                <?php 
                     foreach ($listQuyen as $quyen) {
                        extract($quyen);
                        if($Quyen_ID==$MaQuyen) $s="selected"; else $s="";
                        echo '<option value="'.$MaQuyen.'"'.$s.'>'.$TenQuyen.'</option>';
                      }
                  ?>
            </select>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="TrangThai">Trạng thái:</label>
            <div class="form-group">
                    <input class="form-check-input me-1" id="TrangThai1" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="1") echo "checked";?>
                    value="1">
                    <label class="form-check-label me-3" for="TrangThai1">Kích hoạt</label>

                    <input class="form-check-input me-1" id="TrangThai2" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="0") echo "checked";?>
                    value="0">
                    <label class="form-check-label" for="TrangThai2">Chưa kích hoạt</label>
            </div>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="Hinh">Hình ảnh:</label>
            <input type="file" class="form-control" name="Hinh" id="Hinh"></input> <?=$hinh?>
        </div>
        <div class="btn-form row">
        <input type="hidden" name="MaND" value="<?=$MaND?>">
        <button name="btn_update" class="btn btn-success mt-3 me-2 col-lg-1">Cập nhật</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>