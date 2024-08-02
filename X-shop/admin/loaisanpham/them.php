<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Thêm mới loại sản phẩm</h3>
            
    <form action="index.php" class="bg-white border p-3 rounded container" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="TenLSP">Tên loại sản phẩm:</label>
            <input type="text" class="form-control" name="TenLSP" id="TenLSP" placeholder="Vui lòng nhập tên loại sản phẩm" required>
        </div>
        <div class="form-group">
            <label for="HinhAnh">Hình ảnh:</label>
            <input type="file" class="form-control" name="HinhAnh" id="HinhAnh" required>
        </div>
        <div class="form-group">
            <label for="MoTa">Mô tả:</label>
            <textarea class="form-control" name="MoTa" id="MoTa" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="MaDM">Danh mục:</label>
            <select class="form-control" name="MaDM" id="MaDM" required>
                <?php foreach ($data_dm as $row) {?>
                    <option value="<?php echo $row['MaDM']?>"><?php echo $row['TenDM']?></option>
                <?php }?>
            </select>
        </div>
        <div class="btn-form row">
        <button type="submit" name="btn_insert" class="btn btn-success mt-3 me-2 col-lg-1">Thêm</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>