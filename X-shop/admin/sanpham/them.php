<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Thêm mới sản phẩm</h3>

    <form action="index.php" class="bg-white border p-3 rounded row" id="form_sanpham" method="post" enctype="multipart/form-data">
        <div class="form-group col-lg-5 me-3">
            <label for="TenSP">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="TenSP" id="TenSP" placeholder="Vui lòng nhập tên sản phẩm">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="DonGia">Đơn giá:</label>
            <input type="number" class="form-control" name="DonGia" id="DonGia" placeholder="Vui lòng nhập giá">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label>Đặc biệt</label>
            <div class="form-group">
                    <input class="form-check-input me-1" id="DacBiet1" type="radio" name="DacBiet"
                    <?php if (isset($DacBiet) && $DacBiet=="1") echo "checked";?>
                    value="1">
                    <label class="form-check-label me-3" for="DacBiet1">Có</label>

                    <input class="form-check-input me-1" id="DacBiet2" type="radio" name="DacBiet"
                    <?php if (isset($DacBiet) && $DacBiet=="0") echo "checked";?> checked
                    value="0">
                    <label class="form-check-label" for="DacBiet2">Không</label>
            </div>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="LSP_ID">Loại sản phẩm:</label>
            <select class="form-control" name="LSP_ID" id="LSP_ID" required>
                <?php 
                    foreach ($listLSP as $LSP) {
                      extract($LSP);
                      echo '<option value="'.$MaLSP.'">'.$TenLSP.'</option>';
                    }
                  ?>
            </select>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="DMID">Danh mục:</label>
            <select class="form-control" name="DMID" id="DMID" required>
                <?php 
                    foreach ($listDM as $DM) {
                      extract($DM);
                      echo '<option value="'.$MaDM.'">'.$TenDM.'</option>';
                    }
                  ?>
            </select>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="GiamGia">Giảm giá:</label>
            <input class="form-control" name="GiamGia" id="GiamGia">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="HinhAnh1">Hình ảnh 1:</label>
            <input type="file" class="form-control" name="HinhAnh1" id="HinhAnh1" ></input>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="HinhAnh2">Hình ảnh 2:</label>
            <input type="file" class="form-control" name="HinhAnh2" id="HinhAnh2"></input>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="HinhAnh3">Hình ảnh 3:</label>
            <input type="file" class="form-control" name="HinhAnh3" id="HinhAnh3"></input>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="NgayNhap">Ngày nhập:</label>
            <input class="form-control" type="date" name="ThoiGian" id="NgayNhap">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="ThongTin">Thông tin:</label>
            <textarea class="form-control" name="ThongTin" id="ThongTin" rows="3"></textarea>
        </div>
        <div class="btn-form row">
        <button type="submit" name="btn_insert" class="btn btn-success mt-3 me-2 col-lg-1">Thêm</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>