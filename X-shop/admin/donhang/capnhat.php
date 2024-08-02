
<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Cập nhật đơn hàng</h3>
        
    <form action="index.php" class="bg-white border p-3 rounded" method="post">
        <div class="form-group ">
            <label for="MaHD">Mã đơn hàng</label>
            <input type="text" class="form-control" name="MaHD" id="MaHD" value="<?=$MaHD?>" readonly>
        </div>
        <div class="form-group">
            <label for="TenNN">Tên người nhận</label>
            <input type="text" class="form-control" name="TenNN" id="TenNN" value="<?=$NguoiNhan?>">
        </div>
        <div class="form-group">
            <label for="SDT">Số điện thoại</label>
            <input type="text" class="form-control" name="SDT" id="SDT" value="<?=$SDT?>">
        </div>
        <div class="form-group">
            <label for="DiaChi">Địa chỉ</label>
            <input type="text" class="form-control" name="DiaChi" id="DiaChi" value="<?=$DiaChi?>">
        </div>
        <div class="form-group ">
            <label for="TrangThai">Trạng thái</label>
            <div class="form-group">
                    <input class="form-check-input me-1" id="TrangThai1" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="a") echo "checked";?>
                    value="a">
                    <label class="form-check-label me-4" for="TrangThai1">Chưa thanh toán</label>

                    <input class="form-check-input me-1" id="TrangThai2" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="b") echo "checked";?>
                    value="b">
                    <label class="form-check-label me-4" for="TrangThai2">Đã thanh toán</label>

                    <input class="form-check-input me-1" id="TrangThai3" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="c") echo "checked";?>
                    value="c">
                    <label class="form-check-label me-4" for="TrangThai3">Đã duyệt</label>

                    <input class="form-check-input me-1" id="TrangThai4" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="d") echo "checked";?>
                    value="d">
                    <label class="form-check-label me-4" for="TrangThai4">Đang vận chuyển</label>

                    <input class="form-check-input me-1" id="TrangThai5" type="radio" name="TrangThai"
                    <?php if (isset($TrangThai) && $TrangThai=="e") echo "checked";?>
                    value="e">
                    <label class="form-check-label" for="TrangThai5">Đã giao</label>
            </div>
        </div>
        <div class="btn-form row">
        <input type="hidden" name="ID_DH" value="<?=$ID_DH?>">
        <button name="btn_update" class="btn btn-success mt-3 me-2 col-lg-1">Cập nhật</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>