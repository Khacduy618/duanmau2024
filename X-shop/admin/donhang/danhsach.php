<h3 class="text-uppercase p-2 bg-light mb-2 border rounded text-center">Danh sách đơn hàng</h3>
    <form class="example" action="index.php" method="get" style="max-width:300px">
        <input type="text" placeholder="Tìm đơn hàng..."  name="kyw">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
    <table id="customers" class="table-bordered table table-hover">
        <thead>
            <tr>
                <th><input type="checkbox" name="" id=""></th>
                <th>Mã đơn</th>
                <th>Người nhận</th>
                <th>Liên hệ</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th>PTTT</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) {
                    extract($item);
                    $sua="index.php?btn_edit&ID_DH=".$ID_DH;
            ?>
            <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td class="col-1"><?=$MaHD?></td>
            <td><?=$NguoiNhan?></td>
            <td class="col-2"><div>Email: <?=$Email?></div>
            <div>Số điện thoại: <?=$SDT?></div></td>
            <td><?=$DiaChi?></td>
            <td><?=$GhiChu?></td>
            <td class="col-1"><?=($PhuongThucTT == "a")?"Tiền mặt": (($PhuongThucTT== "b")?"MoMo":(($PhuongThucTT == "c")?"Thẻ ghi nợ":"ZaloPay"));?></td>
            <td><?=number_format($TongTien,0,",",".")?>đ</td>
            <td>
                <input type="hidden" name="ID_DH" value="<?=$ID_DH?>">
                <select class="form-select" name="TrangThai" id="TrangThai" onchange="updateTrangThai(this)">
                    <?php
                    $options = array(
                        'a' => 'Chưa thanh toán',
                        'b' => 'Đã thanh toán',
                        'c' => 'Đã duyệt',
                        'd' => 'Đang vận chuyển',
                        'e' => 'Đã giao'
                    );

                    foreach ($options as $value => $label) {
                        if ($value == $TrangThai) {
                            echo '<option value="' . $value . '" selected>' . $label . '</option>';
                        } else {
                            echo '<option value="' . $value . '">' . $label . '</option>';
                        }
                    }
                    ?>
                </select>
            </td>
            <td class="col-1"><?=$NgayTaoDon?></td>
            <td><a href="<?=$sua?>" class="btn btn-danger">Sửa</a>
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
                            
                        </ul>
                    </nav>
            <?php
        }
    ?>
    
    
    <script>
function updateTrangThai(select) {
    var ID_DH = select.closest('tr').querySelector('[name="ID_DH"]').value;
    var TrangThai = select.value;

    // Gửi yêu cầu AJAX để cập nhật cơ sở dữ liệu
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'capnhat_trangthai.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('ID_DH=' + ID_DH + '&TrangThai=' + TrangThai);
}

</script>