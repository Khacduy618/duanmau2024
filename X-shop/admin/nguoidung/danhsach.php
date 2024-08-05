<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Danh sách người dùng</h3>
    <div class="advance mb-2">
        <div class="action-exc row align-items-center">
        <a href="index.php?btn_add" class="btn btn-primary col-2 me-2">Thêm người dùng mới</a>
        <form class="example" action="index.php" method="get" style="max-width:300px">
                <input type="text" placeholder="Tìm người dùng..."  name="kyw">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <table id="customers" class="table-bordered table table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id=""></th>
                <th>Mã ND</th>
                <th>Hình ảnh</th>
                <th>Tên người dùng</th>
                <th>Giới tính</th>
                <th>SĐT</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) {
                   extract($item);
                    $hinhpath=$UPLOAD_URL.$Hinh;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='70'>";
                    }else{
                        $hinh="nophoto";
                    }
                    $sua="index.php?btn_edit&MaND=".$MaND;
                    $xoa="index.php?btn_delete&MaND=".$MaND;
            ?>
            <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td><?=$MaND?></td>
            <td><?=$hinh?></td>
            <td><?=$Ho?> <?=$Ten?></td>
            <td><?=($GioiTinh=="1")?"Nam":"Nữ";?></td>
            <td><?=$SDT?></td>
            <td><?=$Email?></td>
            <td><?=$DiaChi?></td>
            <td><?=($Quyen_ID == "1")?"Quản trị": (($Quyen_ID== "2")?"Nhân viên":"Khách hàng");?></td>
            <td><?=($TrangThai=="1")?"Kích hoạt":"Chưa kích hoạt";?></td>
            <td><a href="<?=$sua?>" class="btn btn-danger">Sửa</a>
                <?php
                    if($_SESSION['nguoidung']['MaND']!=$MaND){
                        echo '<a href="'.$xoa.'" class="btn btn-warning">Xóa</a>';
                    }
                ?>
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
    