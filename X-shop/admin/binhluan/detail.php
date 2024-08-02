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
    <h3 class="alert alert-success text-uppercase">Chi tiết bình luận</h3>
    <?php
    ?>
    <form action="index.php?MaSP=<?=$MaSP?>" method="post">
        <h3>Sản phẩm: <?=$items[0]['TenSP']?></h3>
        <table class="table">
            <thead class="alert-success">
                <tr>
                    <th><input type="checkbox" name="" id=""></th>
                    <th>Nội dung bình luận</th>
                    <th>Người bình luận</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($items as $item){
                    extract($item);
                    $xoa="index.php?btn_delete&MaBL=".$MaBL;
                ?>
                <tr>
                    <td><input type="checkbox" name="MaBL[]" value="<?=$MaBL?>"></td>
                    <td><?=$NoiDung?></td>
                    <td><?=$ND_ID?></td>
                    <td><?=$NgayBL?></td>
                    <td>
                        <a href="<?=$xoa?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php
                }
               ?>
            </tbody>
        </table>
    </form>
</body>
</html>