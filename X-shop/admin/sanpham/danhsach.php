<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Danh sách sản phẩm</h3>
    <div class="advance mb-2">
        <div class="action-exc row align-items-center">
        <a href="index.php?btn_add" class="btn btn-primary col-2 me-2">Thêm sản phẩm mới</a>
        <form class="example" action="index.php" method="get" style="max-width:300px">
                <input type="text" placeholder="Tìm sản phẩm..."  name="kyw">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <table id="customers" class="table-bordered table table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id=""></th>
                <th>Mã SP</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
                <th>Thông tin</th>
                <th>Giảm giá</th>
                <th>Đặc biệt</th>
                <th>Lượt xem</th>
                <th>Ngày nhập hàng</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) {
                   extract($item);
                   $hinhpath=$UPLOAD_URL.$HinhAnh1;
                    if(is_file($hinhpath)){
                        $hinh1="<img src='".$hinhpath."' height='70'>";
                    }else{
                        $hinh1="nophoto";
                    }
                    $sua="index.php?btn_edit&MaSP=".$MaSP;
                    $xoa="index.php?btn_delete&MaSP=".$MaSP;
            ?>
            <tr>
            <td><input type="checkbox" name="MaSP[]" value="<?=$MaSP?>"></td>
            <td><?=$MaSP?></td>
            <td><?=$TenSP?></td>
            <td><?=$hinh1?></td>
            <td><?=number_format($DonGia,0,",",".")?>đ</td>
            <td><?=$ThongTin?></td>
            <td><?=number_format($GiamGia*100)?>%</td>
            <td><?=($DacBiet == "1") ? "Có" : "Không";?></td>
            <td><?=$LuotXem?></td>
            <td><?=$ThoiGian?></td>
            <td><a href="<?=$sua?>" class="btn btn-danger m-1">Sửa</a>
                <a href="<?=$xoa?>" class="btn btn-warning m-1">Xóa</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
        if($totalrecord>8){
            ?>
<nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                                <?php
                                if ($current_page > 2) {
                                    $first_page = 1;
                                    ?>
                                    <li class="page-item"><a class="page-link" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $first_page ?>
                                    <?php }else{?>index.php?per_page=<?= $item_per_page ?>&page=<?= $first_page ?><?php } ?>">First</a></li>
                                    <?php
                                }
                                if ($current_page > 1) {
                                    $prev_page = $current_page - 1;
                                    ?>
                                    <li class="page-item"><a class="page-link page-link-prev" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>
                                        <?php }else{?>index.php?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?><?php } ?>"><i class="icon-long-arrow-left"></i>Prev</a></li>
                                <?php }
                                ?>
                                <?php for ($num = 1; $num <= $totalpages; $num++) { ?>
                                    <?php if ($num != $current_page) { ?>
                                        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                                            <li class="page-item"><a class="page-link" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $num ?>
                                                <?php }else{?>index.php?per_page=<?= $item_per_page ?>&page=<?= $num ?> <?php } ?>"><?= $num ?></a></li>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <li class="page-item active"><a class="page-link"><?= $num ?></a></li>
                                    <?php } ?>
                                <?php } ?>
                                <?php
                                if ($current_page < $totalpages - 1) {
                                    $next_page = $current_page + 1;
                                    ?>
                                    <li class="page-item"><a class="page-link page-link-next" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $next_page ?>
                                    <?php }else{ ?>index.php?per_page=<?= $item_per_page ?>&page=<?= $next_page ?> <?php } ?>">Next<span><i class="icon-long-arrow-right"></i></span></a></li>
                                <?php
                                }
                                if ($current_page < $totalpages - 2) {
                                    $end_page = $totalpages;
                                    ?>
                                    <li class="page-item"><a class="page-link" href="<?php if (isset($_GET['LSP_ID']) && ($_GET['LSP_ID'] > 0)) { ?>index.php?&LSP_ID=<?= $_GET['LSP_ID'] ?>&per_page=<?= $item_per_page ?>&page=<?= $end_page ?>
                                        <?php }else{ ?>index.php?per_page=<?= $item_per_page ?>&page=<?= $end_page ?> <?php } ?>">Last</a></li>
                                <?php
                                }
                                ?>
                            <!-- <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item-total">of 6</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
            <?php
        }
    ?>
    