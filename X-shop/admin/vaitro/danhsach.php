<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Danh sách vai trò</h3>
    <div class="advance mb-2">
        <div class="action-exc">
        <a href="index.php?btn_add" class="btn btn-primary">Thêm vai trò mới</a>
        <a href="#" class="btn btn-warning">Xóa tất cả mục đã chọn</a>
        </div>
    </div>
    <table id="customers" class="table-bordered table table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id=""></th>
                <th>Mã vai trò</th>
                <th>Tên vai trò</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) {
                   extract($item);
                   $sua="index.php?btn_edit&MaQuyen=".$MaQuyen;
                    $xoa="index.php?btn_delete&MaQuyen=".$MaQuyen;
            ?>
            <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td><?=$MaQuyen?></td>
            <td><?=$TenQuyen?></td>
            <td><a href="<?=$sua?>" class="btn btn-danger">Sửa</a>
                <a href="<?=$xoa?>" onclick="return confirm('Bạn có chắc chắn muốn xóa vai trò này?')" class="btn btn-warning">Xóa</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>