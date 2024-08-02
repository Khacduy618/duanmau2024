<?php
	require_once '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/donhang.php';
    extract($_REQUEST);

    $listbill = Loadall_bill($_SESSION['nguoidung']['MaND']);

    $VIEW_NAME = 'donhangcuatoi.php';

	require_once '../layout.php';
?>