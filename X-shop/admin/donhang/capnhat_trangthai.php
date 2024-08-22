<?php
    include_once ("../../global.php");
    include_once ("../../dao/pdo.php");
    include_once ("../../dao/donhang.php");
    
        $ID_DH = $_POST['ID_DH'];
        $TrangThai = $_POST['TrangThai'];
        update_order_status($ID_DH, $TrangThai);
        header('Location: index.php');
    
?>