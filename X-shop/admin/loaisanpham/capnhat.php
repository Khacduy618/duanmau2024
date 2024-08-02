
<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Cập nhật loại sản phẩm</h3>
          
    <form action="index.php" class="bg-white border p-3 rounded" method="post" enctype="multipart/form-data">
        <div class="form-group ">
            <label for="TenLSP">Tên loại sản phẩm:</label>
            <input type="text" class="form-control" name="TenLSP" id="TenLSP" value="<?=$TenLSP?>">
        </div>
        <div class="form-group ">
            <label for="MaDM">Danh mục</label>
            <select class="form-control" name="MaDM" id="MaDM" required>
                <?php 
                     foreach ($listDM as $DM) {
                        extract($DM);
                        if($DM_ID==$MaDM) $s="selected"; else $s="";
                        echo '<option value="'.$MaDM.'"'.$s.'>'.$TenDM.'</option>';
                      }
                  ?>
            </select>
        </div>
        <div class="form-group ">
            <label for="MoTa">Mô tả:</label>
            <textarea class="form-control" id="MoTa" name="MoTa" rows="4"><?=$MoTa?></textarea>
        </div>
        <div class="form-group ">
            <label for="HinhAnh">Hình ảnh:</label>
            <input type="file" class="form-control" name="HinhAnh" id="HinhAnh"></input> <?=$hinh?>
        </div>
        <div class="btn-form row">
        <input type="hidden" name="MaLSP" value="<?=$MaLSP?>">
        <button name="btn_update" class="btn btn-success mt-3 me-2 col-lg-1">Cập nhật</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>