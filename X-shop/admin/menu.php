<ul class="navbar-nav">
    <li class="logo">
        <a href="#" class="nav-link">
          <div class="ms-3 me-3 user row align-items-center">
            <?php
                if(isset($_SESSION['nguoidung'])){
                   ?><img src="<?=$UPLOAD_URL.$_SESSION['nguoidung']['Hinh']?>" alt="">
                   <?php
                }else{
                    echo '<span>ADMIN</span>';
                }
            ?>
        </div>
        <span class="title"><?=$_SESSION['nguoidung']['Ten']?></span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="../trangchinh/">
            <span class="icon">
                <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Trang chủ</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../danhmuc/">
            <span class="icon">
                <ion-icon name="list-circle-outline"></ion-icon>
            </span>
            <span class="title">Danh mục</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../loaisanpham/">
            <span class="icon">
                <ion-icon name="albums-outline"></ion-icon>
            </span>
            <span class="title">Loại sản phẩm</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../sanpham/">
            <span class="icon">
                <ion-icon name="pricetags-outline"></ion-icon>
            </span>
            <span class="title">Sản phẩm</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../binhluan/">
            <span class="icon">
                <i class="fa-regular fa-comment fa-xl" ></i>
            </span>
            <span class="title">Bình luận</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../donhang/">
            <span class="icon">
            <i class="fa-solid fa-bag-shopping fa-xl"></i>
            </span>
            <span class="title">Đơn hàng</span>
        </a>
    </li>
    <?php
        if($_SESSION['nguoidung']['Quyen_ID'] == 1 ){
    ?>
    <li class="nav-item">
        <a class="nav-link" href="../nguoidung/">
            <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
            </span>
            <span class="title">Khách hàng</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../vaitro/">
            <span class="icon">
                <ion-icon name="accessibility-outline"></ion-icon>
            </span>
            <span class="title">Vai trò</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../thongke/">
            <span class="icon">
                <i class="fa-solid fa-square-poll-vertical fa-xl" ></i>
            </span>
            <span class="title">Thống kê</span>
        </a>
    </li>
    <?php
    }
    ?>
    <li class="nav-item">
        <a class="nav-link" href="<?=$SITE_URL?>/trangchinh">
            <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
            </span>
            <span class="title">Trang chủ SHOP</span>
        </a>
    </li>
</ul>
