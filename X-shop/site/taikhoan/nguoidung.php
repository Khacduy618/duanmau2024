<?php
    require_once '../../global.php';
    $hinh=$UPLOAD_URL.$_SESSION['nguoidung']['Hinh'];
?>
<li>
    <div class="header-dropdown">
            <a class="row align-items-center">
                <div class="avatar">
                    <img src="<?=$hinh?>" alt="">
                </div>
                <strong><span><?=$_SESSION['nguoidung']['Ten']?></span></strong>
            </a>
        <div class="header-menu">
            <ul>
                <li><a href="<?=$SITE_URL?>/taikhoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li><a href="<?=$SITE_URL?>/taikhoan/capnhatTK.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['nguoidung']['Quyen_ID'] == 1 || $_SESSION['nguoidung']['Quyen_ID']== 2){
                        echo '<li><a href="'.$ADMIN_URL.'/trangchinh/">Trang quản lý</a></li>';
                    }
                ?>
                <li><a href="<?=$SITE_URL?>/taikhoan/index.php?btn_dangxuat">Đăng xuất</a></li>
            </ul>
        </div><!-- End .dropdown-menu -->
    </div><!-- End .user-dropdown -->
</li>

