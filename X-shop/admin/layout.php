<?php
    include_once '../../global.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <link rel="manifest" href="<?=$IMAGE_SITE_URL?>/icons/site.html">
    <link rel="mask-icon" href="<?=$IMAGE_SITE_URL?>/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?=$IMAGE_SITE_URL?>/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="X-Shop">
    <meta name="application-name" content="X-Shop">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?=$IMAGE_SITE_URL?>/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../../assets/site/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <link rel="stylesheet" href="<?=$CSS_ADMIN_URL?>/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    
    <title>X-Shop-Quản trị</title>
</head>
<body>
    <nav class="navbar">
        <?php require 'menu.php' ?>
    </nav>
    <main class="main">
      <div class="topbar">
      <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
        <div class="clock" id="clock"></div>
        
      </div>
      <div class="container">
        <?php include $VIEW_NAME;?>
      </div>
    </main>
    <!-- =========== Scripts =========  -->
     
    
    <script src="<?=$JS_ADMIN_URL?>/main.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?=$JS_ADMIN_URL?>/validated.js"></script>
    

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>