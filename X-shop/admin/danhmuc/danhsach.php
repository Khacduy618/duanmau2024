<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Danh sách danh mục</h3>
    <div class="advance mb-2">
        <div class="action-exc">
        <a href="index.php?btn_add" class="btn btn-primary">Thêm danh mục mới</a>
        <a href="#" class="btn btn-warning">Xóa tất cả mục đã chọn</a>
        </div>
    </div>
    <?php
                require_once '../../global.php';
                    if(strlen($MESSAGE)){
                        echo '<h5 class="alert alert-success">'.$MESSAGE.'</h5>';
                    }
            ?>
    <table id="customers" class="table-bordered table table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id=""></th>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) {
                    extract($item);
                    $sua="index.php?btn_edit&MaDM=".$MaDM;
                    $xoa="index.php?btn_delete&MaDM=".$MaDM;
            ?>
            <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td><?=$MaDM?></td>
            <td><?=$TenDM?></td>
            <td><a href="<?=$sua?>" class="btn btn-danger">Sửa</a>
                <a href="<?=$xoa?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')" class="btn btn-warning">Xóa</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>