<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="<?=$JS_ADMIN_URL?>/theme.js"></script>
    <link rel="stylesheet" href="<?=$CSS_ADMIN_URL?>/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>X-Shop-Quản trị</title>
</head>
<body>
    <h3 class="alert alert-success text-uppercase">Tổng hợp bình luận</h3>
    
    <form action="index.php" method="post">
        <table class="table">
            <thead class="alert-success">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Số BL</th>
                    <th>Mới nhất</th>
                    <th>Cũ nhất</th>
                    <th></th>
                </tr>   
            </thead>
            <tbody>
                <?php
                    foreach ($items as $item) {
                        extract($item);
                ?>
                <tr>
                    <td><?=$TenSP?></td>
                    <td><?=$so_luong?></td>
                    <td><?=$cu_nhat?></td>
                    <td><?=$moi_nhat?></td>
                    <td>
                        <a href="index.php?MaSP=<?=$MaSP?>" class="btn btn-info">Chi tiết</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </form>

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
  
</body>
</html>