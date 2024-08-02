<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Thêm mới vai trò</h3>
    <form action="index.php" class="bg-white border p-3 rounded container" method="post">
        <div class="form-group">
            <label for="TenQuyen">Tên quyền:</label>
            <input type="text" class="form-control" name="TenQuyen" id="TenQuyen" placeholder="Vui lòng nhập tên quyền">
        </div>
        <div class="btn-form row">
            <button type="submit" name="btn_insert" class="btn btn-success mt-3 me-2 col-lg-1">Thêm</button>
            <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
            <a href="./" class="btn btn-warning col-lg-2 mt-3 me-2">Danh sách</a>
        </div>
    </form>