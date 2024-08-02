<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Thêm mới danh mục</h3>
   
    <form action="index.php" class="bg-white border p-3 rounded container" method="post">
        <div class="form-group">
            <label for="TenDM">Tên danh mục:</label>
            <input type="text" class="form-control" name="TenDM" id="TenDM" placeholder="Vui lòng nhập tên danh mục" required>
        </div>
        <div class="btn-form row">
            <input type="submit" name="btn_insert" class="btn btn-success mt-3 me-2 col-lg-1" value="Thêm">
            <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
            <a href="./" class="btn btn-warning mt-3 me-2  col-lg-2">Danh sách</a>
        </div>
    </form>