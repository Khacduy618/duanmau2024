
<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Cập nhật vai trò</h3>
        
    <form action="index.php" class="bg-white border p-3 rounded" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <label for="TenQuyen">Tên quyền:</label>
            <input type="text" class="form-control" name="TenQuyen" id="TenQuyen" value="<?=$TenQuyen?>">
        </div>
        
        <div class="btn-form row">
        <input type="hidden" name="MaQuyen" value="<?=$MaQuyen?>">
        <button name="btn_update" class="btn btn-success mt-3 me-2 col-lg-1">Cập nhật</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>