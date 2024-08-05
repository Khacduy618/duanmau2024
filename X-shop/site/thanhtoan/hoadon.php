<?php
    require_once '../../global.php';
    require_once '../../dao/giohang.php';
    $MaHD =  $_GET['MaHD'];
    $chitietdonhang = get_bill($MaHD);
    $donhang = get_bill_total($MaHD);

    $VIEW_NAME = 'hoadon-ui.php';

    require_once '../layout.php';
?>