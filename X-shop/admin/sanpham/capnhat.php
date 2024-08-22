<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Cập nhật sản phẩm</h3>
    
    <form action="index.php" class="bg-white border p-3 rounded row" id="form_sanpham" method="post" enctype="multipart/form-data">
        <div class="form-group col-lg-5 me-3"">
            <label for="TenSP">Tên sản phẩm:</label>
            <input type="text" class="form-control" name="TenSP" id="TenSP" value="<?=$TenSP?>">
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="DonGia">Đơn giá:</label>
            <input type="number" class="form-control" name="DonGia" id="DonGia" value="<?=$DonGia?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="DacBiet">Đặc biệt</label>
            <div class="form-group">
                    <input class="form-check-input me-1" id="DacBiet1" type="radio" name="DacBiet"
                    <?php if (isset($DacBiet) && $DacBiet=="1") echo "checked";?>
                    value="1">
                    <label class="form-check-label me-3" for="DacBiet1">Có</label>

                    <input class="form-check-input me-1" id="DacBiet2" type="radio" name="DacBiet"
                    <?php if (isset($DacBiet) && $DacBiet=="0") echo "checked";?>
                    value="0">
                    <label class="form-check-label" for="DacBiet2">Không</label>
            </div>
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="LSP_ID">Loại sản phẩm:</label>
            <select class="form-control" name="LSP_ID" id="LSP_ID" required>
                <?php 
                    foreach ($listLSP as $LSP) {
                        extract($LSP);
                        if($LSP_ID==$MaLSP) $s="selected"; else $s="";
                        echo '<option value="'.$MaLSP.'"'.$s.'>'.$TenLSP.'</option>';
                      }
                  ?>
            </select>
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="DMID">Danh mục:</label>
            <select class="form-control" name="DMID" id="DMID" required>
                <?php 
                    foreach ($listDM as $DM) {
                        extract($DM);
                        if($DMID==$MaDM) $s="selected"; else $s="";
                        echo '<option value="'.$MaDM.'"'.$s.'>'.$TenDM.'</option>';
                      }
                  ?>
            </select>
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="GiamGia">Giảm giá:</label>
            <input class="form-control" name="GiamGia" id="GiamGia" value="<?=$GiamGia?>">
        </div>
        
        <div class="form-group col-lg-5 me-3"">
            <label for="HinhAnh1">Hình ảnh 1:</label>
            <input type="file" class="form-control" name="HinhAnh1" id="HinhAnh1" ></input>
            <?=$hinh1?>
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="HinhAnh2">Hình ảnh 2:</label>
            <input type="file" class="form-control" name="HinhAnh2" id="HinhAnh2" ></input>
            <?=$hinh2?>
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="HinhAnh3">Hình ảnh 3:</label>
            <input type="file" class="form-control" name="HinhAnh3" id="HinhAnh3" ></input>
            <?=$hinh3?>
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="CPU">CPU:</label>
            <input type="text" class="form-control" name="CPU" id="CPU" value="<?=$CPU?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="RAM">RAM:</label>
            <input type="text" class="form-control" name="RAM" id="RAM" value="<?=$RAM?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="SSD_HDD">Ổ cứng:</label>
            <input type="text" class="form-control" name="SSD_HDD" id="SSD_HDD" value="<?=$SSD_HDD?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="GPU">Card màn hình:</label>
            <input type="text" class="form-control" name="GPU" id="GPU" value="<?=$GPU?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="OS">Hệ điều hành:</label>
            <input type="text" class="form-control" name="OS" id="OS" value="<?=$OS?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="kich_thuoc_man_hinh">Kích thước màn hình:</label>
            <input type="text" class="form-control" name="kich_thuoc_man_hinh" id="kich_thuoc_man_hinh" value="<?=$kich_thuoc_man_hinh?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="kich_thuoc">Kích thước:</label>
            <input type="text" class="form-control" name="kich_thuoc" id="kich_thuoc" value="<?=$kich_thuoc?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="mau_sac">Màu sắc:</label>
            <input type="text" class="form-control" name="mau_sac" id="mau_sac" value="<?=$mau_sac?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="chat_lieu">Chất liệu:</label>
            <input type="text" class="form-control" name="chat_lieu" id="chat_lieu" value="<?=$chat_lieu?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="cong_giao_tiep">Cổng giao tiếp:</label>
            <input type="text" class="form-control" name="cong_giao_tiep" id="cong_giao_tiep" value="<?=$cong_giao_tiep?>">
        </div>
        <div class="form-group col-lg-5 me-3">
            <label for="NgayNhap">Ngày nhập:</label>
            <input class="form-control" type="date" name="ThoiGian" id="NgayNhap" value="<?=$ThoiGian?>">
        </div>
        <div class="form-group col-lg-5 me-3"">
            <label for="MoTa">Thông tin:</label>
            <textarea class="form-control" name="ThongTin" id="ThongTin" rows="4"><?=$ThongTin?></textarea>
        </div>
        <div class="btn-form row">
            <input type="hidden" name="MaSP" value="<?=$MaSP?>">
        <button type="submit" name="btn_update" class="btn btn-success mt-3 me-2 col-lg-1">Cập nhật</button>
        <button type="reset" class="btn btn-primary mt-3 me-2 col-lg-1">Nhập lại</button>
        <a href="./" class="btn btn-warning mt-3 me-2 col-lg-2">Danh sách</a>
        </div>
    </form>